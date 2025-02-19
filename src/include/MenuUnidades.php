<?php
// Incluir el archivo de configuración para obtener las variables de entorno
include_once dirname(__DIR__) . '/config.php';

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

  echo '<nav>';
  foreach ($menuAsignaturaData['asignatura'] as $unidad => $detalles) {
    // Construir la URL completa de la unidad
    $unidadUrl = BASE_URL . $detalles['url'];
    // Comparar la URL actual con la URL de la unidad
    $activeClass = ($unidadUrl === $currentUrl) ? ' class="active"' : '';
    echo '<ul>';
    echo '<li><a href="' . $unidadUrl . '"' . $activeClass . '>' . htmlspecialchars($detalles['nombre']) . '</a></li>';
    echo '</ul>';
  }
  echo '</nav>';
}
