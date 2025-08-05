<?php

function renderActividadH5P($htmlFileName, $h5pTitulo = "Actividad H5P", $h5pContent = "")
{
  // Obtener la ruta del archivo HTML basado en la URL actual
  $urlPathH5P = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $pathSegmentsH5P = explode('/', trim($urlPathH5P, '/'));
  $asignaturaNameH5P = $pathSegmentsH5P[1]; // Obtener el nombre de la asignatura
  
  // Construir la ruta del archivo HTML en assets/h5p/
  $htmlPathH5P = BASE_PATH . '/' . $asignaturaNameH5P . '/assets/h5p/' . $htmlFileName . '.html';
  
  // Icono fijo para H5P
  $iconPathH5P = PATH_ICONS . 'h5pactivity.svg';

  // Verificar si existe el archivo HTML
  if (file_exists($htmlPathH5P)) {
    $htmlContentH5P = file_get_contents($htmlPathH5P);
    if ($htmlContentH5P === false) {
      echo "Error al leer el archivo HTML: " . $htmlPathH5P;
      return;
    }
  } else {
    echo "Archivo HTML no encontrado: " . $htmlPathH5P;
    return;
  }

?>
    <div class="actividad">
      <div class="flex justify-start items-center gap-x-3 pt-5">
        <img class="w-10 max-h-5 my-0" src="<?php echo $iconPathH5P; ?>" alt="Icono H5P">
        <span><?php echo htmlspecialchars($h5pTitulo); ?></span>
      </div>
      <?php echo $h5pContent; ?>
    </div>
    <div class="h5p-container">
      <?php echo $htmlContentH5P; ?>
    </div>
<?php
}
?>
