<?php

function renderActividadH5P($htmlFileName, $h5pTitulo = "Actividad H5P", $h5pContent = "")
{
  // Obtener la ruta del archivo HTML basado en la URL actual
  $urlPathH5P = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $pathSegmentsH5P = explode('/', trim($urlPathH5P, '/'));
  $asignaturaNameH5P = $pathSegmentsH5P[1]; // Obtener el nombre de la asignatura
  
  // Construir la ruta del archivo HTML en assets/h5p/ (compatible con Windows y Unix)
  $htmlPathH5P = BASE_PATH . DIRECTORY_SEPARATOR . $asignaturaNameH5P . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'h5p' . DIRECTORY_SEPARATOR . $htmlFileName . '.html';
  
  // Icono fijo para H5P
  $iconPathH5P = PATH_ICONS . 'h5pactivity.svg';

  // Verificar si existe el archivo HTML
  if (file_exists($htmlPathH5P)) {
    // Crear la URL relativa para el iframe
    // En desarrollo, verificar si existe dist, sino usar src
    $distPath = str_replace('/src/', '/dist/', $htmlPathH5P);
    if (file_exists($distPath)) {
      $htmlUrlH5P = BASE_URL . '/' . $asignaturaNameH5P . '/assets/h5p/' . $htmlFileName . '.html';
    } else {
      // Fallback para desarrollo: usar src directamente
      $htmlUrlH5P = '/src/' . $asignaturaNameH5P . '/assets/h5p/' . $htmlFileName . '.html';
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
      <iframe src="<?php echo $htmlUrlH5P; ?>" 
              width="100%" 
              class="w-full actividadh5p"
              style="border: none; background: white; min-height: 0; height: auto;" 
              allowfullscreen>
      </iframe>
    </div>
<?php
}
?>
