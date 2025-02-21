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

  echo '<header id="header__nav">';

  echo '<nav>';
  echo '<div class="header__unidades">';
  // Renderizar la lista de unidades
  echo '<div class="header__container">';
  echo '<div><img src="' . ASSET_URL . 'img/logo.svg" alt="Logo" class="header__logo"><span>Programas de estudio en línea</span></div>';
  // Determinar la unidad y el tema activo
  $unidadActiva = null;
  $temaActivo = null;
  $paginaActiva = null;

  foreach ($menuAsignaturaData['asignatura'] as $unidad => $detalles) {
    foreach ($detalles['temas'] as $tema) {
      for ($i = 1; $i <= $tema['paginas']; $i++) {
        $paginaUrl = BASE_URL . $tema['url'] . '/' . $i . '.php';
        if ($paginaUrl === $currentUrl) {
          $unidadActiva = $unidad;
          $temaActivo = $tema;
          $paginaActiva = $i;
          break 3; // Rompe los tres bucles
        }
      }
    }
  }

  echo '<ul>';
  foreach ($menuAsignaturaData['asignatura'] as $unidad => $detalles) {
    // Construir la URL completa de la unidad
    $unidadUrl = BASE_URL . $detalles['url'];
    // Comparar la URL actual con la URL de la unidad
    $activeClass = ($unidad === $unidadActiva) ? ' class="active-unidad"' : '';
    echo '<li><a href="' . $unidadUrl . '"' . $activeClass . '>' . htmlspecialchars($detalles['nombre']) . '</a></li>';
  }
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  // Incluir el archivo menumoodle.php
  include dirname(__DIR__) . '/include/menuMoodle.php';

  foreach ($menuAsignaturaData['asignatura'] as $unidad => $detalles) {
    foreach ($detalles['temas'] as $tema) {
      for ($i = 1; $i <= $tema['paginas']; $i++) {
        $paginaUrl = BASE_URL . $tema['url'] . '/' . $i . '.php';
        if ($paginaUrl === $currentUrl) {
          $unidadActiva = $unidad;
          $temaActivo = $tema;
          $paginaActiva = $i;
          break 3; // Rompe los tres bucles
        }
      }
    }
  }

  // Renderizar la lista de temas de la unidad actual
  if ($unidadActiva !== null) {
    echo '<div id="header__temas">';
    echo '<span>Temas en la unidad</span>';
    echo '<ol>';
    foreach ($menuAsignaturaData['asignatura'][$unidadActiva]['temas'] as $tema) {
      // Construir la URL del tema (siempre apuntando a la primera página)
      $temaUrl = BASE_URL . $tema['url'] . '/1.php';
      $activeTemaClass = (strpos($currentUrl, $tema['url']) !== false) ? ' class="active-tema"' : '';
      echo '<li><a href="' . $temaUrl . '"' . $activeTemaClass . '>' . htmlspecialchars($tema['nombre']) . '</a></li>';
    }
    echo '</ol>';
    echo '</div>';
  }

  // Renderizar la lista de páginas del tema actual con navegación secuencial
  if ($unidadActiva !== null && $temaActivo !== null) {
    echo '<div id="header__pantalla">';
    echo '<div>';
    echo '<span>Pantallas de este tema</span>';
    echo '<ul>';

    // Botón "Anterior"
    $paginaAnteriorUrl = null;
    if ($paginaActiva > 1) {
      // Misma tema, página anterior
      $paginaAnteriorUrl = BASE_URL . $temaActivo['url'] . '/' . ($paginaActiva - 1) . '.php';
    } else {
      // Buscar el tema anterior
      $temaAnterior = null;
      $temas = $menuAsignaturaData['asignatura'][$unidadActiva]['temas'];
      $indiceTemaActivo = array_search($temaActivo, $temas, true);
      if ($indiceTemaActivo !== false && $indiceTemaActivo > 0) {
        $temaAnterior = $temas[$indiceTemaActivo - 1];
        $paginaAnteriorUrl = BASE_URL . $temaAnterior['url'] . '/' . $temaAnterior['paginas'] . '.php';
      } else {
        // No hay tema anterior, buscar la unidad anterior
        $unidades = array_keys($menuAsignaturaData['asignatura']);
        $indiceUnidadActiva = array_search($unidadActiva, $unidades, true);
        if ($indiceUnidadActiva !== false && $indiceUnidadActiva > 0) {
          $unidadAnterior = $unidades[$indiceUnidadActiva - 1];
          $temasUnidadAnterior = $menuAsignaturaData['asignatura'][$unidadAnterior]['temas'];
          $temaAnteriorUnidadAnterior = end($temasUnidadAnterior); // Último tema de la unidad anterior
          $paginaAnteriorUrl = BASE_URL . $temaAnteriorUnidadAnterior['url'] . '/' . $temaAnteriorUnidadAnterior['paginas'] . '.php';
        }
      }
    }

    if ($paginaAnteriorUrl !== null) {
      echo '<li class="header__flechas"><a id="paginaAnterior" href="' . $paginaAnteriorUrl . '"><img src="' . ASSET_URL . 'icons/chevron-compact-left.svg" alt="Anterior" class=""></a></li>';
    }

    // Lista de páginas
    $tema = $temaActivo;
    for ($i = 1; $i <= $tema['paginas']; $i++) {
      $paginaUrl = BASE_URL . $tema['url'] . '/' . $i . '.php';
      $activePaginaClass = ($paginaUrl === $currentUrl) ? ' class="active-pagina"' : '';
      echo '<li><a href="' . $paginaUrl . '"' . $activePaginaClass . '>' . $i . '</a></li>';
    }

    // Botón "Siguiente"
    $paginaSiguienteUrl = null;
    if ($paginaActiva < $temaActivo['paginas']) {
      // Misma tema, página siguiente
      $paginaSiguienteUrl = BASE_URL . $temaActivo['url'] . '/' . ($paginaActiva + 1) . '.php';
    } else {
      // Buscar el tema siguiente
      $temaSiguiente = null;
      $temas = $menuAsignaturaData['asignatura'][$unidadActiva]['temas'];
      $indiceTemaActivo = array_search($temaActivo, $temas, true);

      if ($indiceTemaActivo !== false && $indiceTemaActivo < count($temas) - 1) {
        $temaSiguiente = $temas[$indiceTemaActivo + 1];
        $paginaSiguienteUrl = BASE_URL . $temaSiguiente['url'] . '/1.php';
      } else {
        // No hay más temas en esta unidad, buscar la siguiente unidad
        $unidades = array_keys($menuAsignaturaData['asignatura']);
        $indiceUnidadActiva = array_search($unidadActiva, $unidades, true);
        if ($indiceUnidadActiva !== false && $indiceUnidadActiva < count($unidades) - 1) {
          $unidadSiguiente = $unidades[$indiceUnidadActiva + 1];
          $temasUnidadSiguiente = $menuAsignaturaData['asignatura'][$unidadSiguiente]['temas'];
          $temaSiguienteUnidadSiguiente = reset($temasUnidadSiguiente); // Primer tema de la unidad siguiente
          $paginaSiguienteUrl = BASE_URL . $temaSiguienteUnidadSiguiente['url'] . '/1.php';
        }
      }
    }

    if ($paginaSiguienteUrl !== null) {
      echo '<li class="header__flechas"><a id="paginaSiguiente" href="' . $paginaSiguienteUrl . '"><img src="' . ASSET_URL . 'icons/chevron-compact-right.svg" alt="Siguiente" class=""></a></li>';
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
  }

  echo '</nav>';

  echo '</header>';

  // Agregar breadcrumbs
  echo '<nav id="breadcrumb" aria-label="breadcrumb">';
  echo '<ul class="breadcrumb">';
  if ($unidadActiva !== null) {
    echo '<li class="breadcrumb-item"><a href="' . BASE_URL . $menuAsignaturaData['asignatura'][$unidadActiva]['url'] . '">' . htmlspecialchars($menuAsignaturaData['asignatura'][$unidadActiva]['nombre']) . '</a></li>';
    if ($temaActivo !== null) {
      echo '<li class="breadcrumb-item"><a href="' . BASE_URL . $temaActivo['url'] . '/1.php">' . htmlspecialchars($temaActivo['nombre']) . '</a></li>';
      if ($paginaActiva !== null) {
        echo '<li class="breadcrumb-item active" aria-current="page">Página ' . $paginaActiva . '</li>';
      }
    }
  }
  echo '</ul>';
  echo '</nav>';
  // Agregar JavaScript para la navegación con teclado
  echo '<script>
    document.addEventListener("keydown", function(event) {
      if (event.key === "ArrowLeft") {
        var paginaAnterior = document.getElementById("paginaAnterior");
        if (paginaAnterior) {
          window.location.href = paginaAnterior.href;
        }
      } else if (event.key === "ArrowRight") {
        var paginaSiguiente = document.getElementById("paginaSiguiente");
        if (paginaSiguiente) {
          window.location.href = paginaSiguiente.href;
        }
      }
    });
  </script>';
}
