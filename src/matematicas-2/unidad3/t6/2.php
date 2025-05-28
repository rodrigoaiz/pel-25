<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

  <?php ob_start(); ?>
  <p>Una vez que hemos revisado y repasado los aprendizajes de la circunferencia y el círculo, que te parece si reafirmamos los mismos con la resolución de problemas que a continuación te presentamos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a22', "Problemas aplicados", $ActividadContent);
  ?>

<?php ob_start(); ?>
  <p>Estupendo hemos llegado al final de la unidad, a reafirmar conocimiento con la siguiente actividad. Realicemos el cuestionario.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a23', "Cuestionario final unidad 3", $ActividadContent);
  ?>

<p>Esperamos que hayas aprendido mucho y de manera significativa además de haber recordado, ya que son aprendizajes que has llevado a cabo desde la primaria, te felicitamos, sigue adelante sólo falta una unidad.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>