<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<p>En el presente aprendizaje retomaremos lo aprendido sobre los triángulos, en específico nos centraremos
                más en sus puntos y rectas notables.</p>
            <p>En este aprendizaje trabajaremos con un caso especial el triángulo isósceles, trabajaremos con sus
                características, empecemos por revisar el siguiente video.</p>

<div class="lg:grid">
  <?php
  renderVideoIframe('vymJGLV3_u8', 'Propiedades del triángulo isósceles');
  ?>
</div>

<?php ob_start(); ?>
  <p>Ahora que hemos revisado las generalidades del triángulo isósceles realicemos un sencillo ejercicio que te permita autoevaluarte, así puedes saber cómo andan tus conocimientos sobre este aprendizaje.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a14', "Propiedades del triángulo isósceles", $ActividadContent);
?>

<p>Muy bien ya comprendes y aplicas las propiedades del triángulo isósceles sigamos adelante.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>