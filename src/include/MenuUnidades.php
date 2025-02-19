<?php
// Incluir el archivo de configuración para obtener las variables de entorno
include_once dirname(__DIR__) . '/config.php';

// Función para establecer el título de la página
function setPageTitle($title)
{
  echo '<script>document.title = "' . htmlspecialchars($title) . '";</script>';
}

// Función para renderizar el menú dinámico
function renderMenuUnidades($menuAsignaturaPath)
{
  // Verificar si el archivo existe
  if (!file_exists($menuAsignaturaPath)) {
    echo 'Error: El archivo JSON no existe en la ruta especificada: ' . $menuAsignaturaPath;
    exit;
  }

  // Leer y decodificar el archivo JSON
  $jsonContent = file_get_contents($menuAsignaturaPath);
  $menuAsignaturaData = json_decode($jsonContent, true);

  // Verificar si el archivo JSON se cargó correctamente
  if ($menuAsignaturaData === null) {
    echo 'Error al cargar el archivo JSON: ' . json_last_error_msg();
    exit;
  }

  // Obtener la URL actual
  $currentUrl = $_SERVER['REQUEST_URI'];

  // Establecer el título de la página
  foreach ($menuAsignaturaData['asignatura'] as $unidad => $detalles) {
    $unidadUrl = BASE_URL . $detalles['url'];
    if ($unidadUrl === $currentUrl) {
      setPageTitle($detalles['nombre']);
    }
    foreach ($detalles['temas'] as $tema) {
      $temaUrl = BASE_URL . $tema['url'];
      if (strpos($currentUrl, $tema['url']) !== false) {
        setPageTitle($tema['nombre']);
      }
    }
  }

  echo '<nav class="bg-orange-own">';

  // Renderizar la lista de unidades
  echo '<ul>';
  foreach ($menuAsignaturaData['asignatura'] as $unidad => $detalles) {
    // Construir la URL completa de la unidad
    $unidadUrl = BASE_URL . $detalles['url'];
    // Comparar la URL actual con la URL de la unidad
    $activeClass = ($unidadUrl === $currentUrl) ? ' class="active"' : '';
    echo '<li><a href="' . $unidadUrl . '"' . $activeClass . '>' . htmlspecialchars($detalles['nombre']) . '</a></li>';
  }
  echo '</ul>';

  // Incluir el archivo menumoodle.php
  include dirname(__DIR__) . '/include/menuMoodle.php';

  // Renderizar la lista de pantallas del tema actual
  foreach ($menuAsignaturaData['asignatura'] as $unidad => $detalles) {
    foreach ($detalles['temas'] as $tema) {
      $temaUrl = BASE_URL . $tema['url'];
      if (strpos($currentUrl, $tema['url']) !== false) {
        echo '<ul>';
        for ($i = 1; $i <= $tema['paginas']; $i++) {
          $pantallaUrl = BASE_URL . $tema['url'] . '/' . $i . '.php';
          $activePantallaClass = ($pantallaUrl === $currentUrl) ? ' class="active"' : '';
          echo '<li><a href="' . $pantallaUrl . '"' . $activePantallaClass . '>Pantalla ' . $i . '</a></li>';
        }
        echo '</ul>';
      }
    }
  }

  echo '</nav>';
}
