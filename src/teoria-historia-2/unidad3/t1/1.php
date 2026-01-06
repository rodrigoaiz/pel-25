<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Hola. Estás por iniciar la primera lección de esta unidad 3. En el siguiente video te damos la bienvenida a esta unidad de Teoría de la Historia II.</h3>
    <?php
  renderVideoIframe('4kLOu3813BU', 'Bienvenida a la unidad 3');
  ?>
  <?php ob_start(); ?>
    <p>A continuación y antes de iniciar el estudio de esta primera unidad, te solicitamos que contestes, con toda honestidad, el siguiente cuestionario inicial. Es importante que lo hagas para que, al finalizar esta unidad puedas constatar tus avances en esta materia.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a1', "Cuestionario diagnóstico de autoevaluación. Unidad 1 ", $ActividadContent);
  ?>
  <p><b>Instrucciones:</b> Lee con atención la información que te brindamos a continuación. Te permitirá ubicar el ambiente que rodea al surgimiento de las corrientes que te presentamos. Cuando veas una palabra resaltada en <b style="color: red">color rojo</b>, dale clic para obtener más información sobre ella. Esperamos que este primer recorrido sea tan interesante para ti como lo fue para nosotros.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
