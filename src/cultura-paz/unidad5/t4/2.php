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
  <h2>Fin del curso</h2>
  <div class="mt-10 min-h-16 text-white pl-8 pr-8 bg-linear-65 from-purple-500 to-pink-500 flex items-center justify-center">¡Felicidades! llegaste al final del curso, ahora puedes descargar e imprimir tu certificado.</div>
  <?php ob_start(); ?>
  <div class="mt-6">
    <strong>NOTA:</strong> Es muy importante que lo guardes bien, ya que en algún momento de tu estancia en CCH te lo pueden solicitar.
  </div>

  <div class="grid grid-cols-6 gap-4 my-10">
    <div class="col-span-2 col-start-3 bg-linear-to-bl from-violet-500 to-fuchsia-500 text-center text-lg p-2 rounded-lg">
      <img class="size-32 mx-auto" src="<?php echo PATH_ICONS . 'certificado-moodle.webp'; ?>" />
    </div>
  </div>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u5t3a4', "Descarga tu certificado.", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
