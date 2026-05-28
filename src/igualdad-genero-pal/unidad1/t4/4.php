<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Actividad didáctica</h2>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Lee el cuento <a href="<?php echo PATH_DOCS . 'u1t5-al-fin-iguales.pdf'; ?>" target="_blank">Al fin iguales</a>, de la autora Enriqueta Navagómez, e identifica las prácticas y acciones de desigualdad presentes en el texto. </li>
    <li>Resuelve el cuestionario de opción múltiple subrayando las respuestas correctas.</li>
    <li>No olvides verificar tus respuestas.</li>
  </ol>
  <div class="w-2xl mx-auto mt-10">
    <?php
    renderImage('iga5-img4.webp', 'Al fin iguales, cuento de Enriqueta Navagómez');
    ?>
  </div>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t5a2', "Cuestionario al fin iguales", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>