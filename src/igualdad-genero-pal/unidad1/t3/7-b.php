<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Propuestas de solución de casos</h2>
    <div class="max-2xl mx-auto">
          <?php
          renderImage('iga3-img06.webp');
          ?>
    </div>
  <h3>Propósito</h3>
  <p>Esta actividad busca que aprendas a identificar el tipo de relación de poder implicada en diferentes situaciones cotidianas y que elabores propuestas de solución. Además, te proponemos votar por las propuestas de tus compañeros que consideres más adecuadas, para fomentar el pensamiento crítico y colaborativo en la identificación y resolución de dinámicas de poder.</p>
  <h3>Instrucciones</h3>
  <ol class="ol-number">
    <li>Analiza detenidamente los casos presentados en el Foro y el siguiente <a href="<?php echo PATH_DOCS . 'u1t3-Lectura_CasosMachismosCotidianos_Act.3.5.pdf'; ?>" target="_blank">documento</a>. Para cada caso, identifica de manera precisa el tipo de relación de poder que se manifiesta, y luego, elabora una propuesta de solución detallada y fundamentada. Cada propuesta debe abordar las dinámicas de poder identificadas y ofrecer estrategias viables para promover relaciones más equitativas y justas.</li>
    <li>Publica tu respuesta en el foro. Después lee las respuestas de tus compañeros y vota por las que te parezcan más adecuadas. No olvides revisar la <a href="<?php echo PATH_DOCS . 'u1t3-Propuesta-Solucion-Casos.pdf'; ?>" target="_blank">lista de cotejo</a> con los criterios en lo que debes fijarte al leer la participación de tus demás compañeros.</li>
  </ol>
  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t3a5', "Propuestas de solución de casos.", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>