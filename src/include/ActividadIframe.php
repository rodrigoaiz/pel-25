<?php

function renderActividad($actividadKey, $ActividadTitulo = "Para Actividad más", $ActividadContent = "")
{
  // Obtener la ruta del archivo JSON basado en la URL actual
  $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $pathSegments = explode('/', trim($urlPath, '/'));
  $asignaturaName = $pathSegments[1]; // Ajustado para obtener el nombre de la asignatura correctamente
  $unidadName = $pathSegments[2]; // Obtener el nombre de la unidad

  // Construir la ruta del archivo JSON
  $jsonPath = BASE_PATH . '/' . $asignaturaName . '/assets/data/menu_asignatura.json';

  if (!file_exists($jsonPath)) {
    echo "El archivo JSON no existe en la ruta: " . $jsonPath;
    return;
  }

  $json = file_get_contents($jsonPath);
  if ($json === false) {
    echo "Error al leer el archivo JSON.";
    return;
  }

  $menu = json_decode($json, true);
  if ($menu === null) {
    echo "Error al decodificar el JSON: " . json_last_error_msg();
    return;
  }

  // Depuración: Verificar que la clave actividadKey existe en el JSON
  if (!isset($menu['actividades'][$actividadKey])) {
    echo "Actividad no encontrada en el JSON.";
    return;
  }

  $actividad = $menu['actividades'][$actividadKey];
  $moduleName = $actividad['moduleName']; // Recuperar moduleName del JSON
  $iconPath = PATH_ICONS . $moduleName . '.svg';

  if ($actividad) {
?>
    <div class="actividad">
      <div class="flex justify-start items-center gap-x-3 pt-5">
        <img class="w-10 max-h-5 my-0" src="<?php echo $iconPath; ?>" alt="Icono Actividad">
        <span><?php echo htmlspecialchars($ActividadTitulo); ?></span>
      </div>
      <?php echo $ActividadContent; ?>
      <iframe class="w-full actividadmoodle" src="<?php echo PATH_ACTIVITIES; ?>mod/<?php echo htmlspecialchars($moduleName); ?>/view.php?id=<?php echo $actividad['id']; ?>&amp;theme=photo"></iframe>
    </div>
<?php
  } else {
    echo "Actividad no encontrada.";
  }
}
?>
