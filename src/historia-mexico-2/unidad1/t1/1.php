<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad 1</h2>

  <div class="md:grid gap-2 grid-cols-2">
    <?php
    renderVideoIframe('jnJb09KBJ-I', ' Presentación del Curso Historia de México II');
    ?>
    <?php
    renderVideoIframe('9L3upU4yG9w', ' Bienvenida a la Unidad 1');
    ?>
  </div>


  

  <?php ob_start(); ?>
  <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a1', "Cuestionario Diagnóstico Unidad 1", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
