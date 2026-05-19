<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadH5P.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El gobierno de Carranza</h2>

  <p>Con la aprobación de <b>la Constitución de 1917 y la elección de Carranza como presidente constitucional</b>, se entraba a la fase de consolidación. No obstante, Carranza fracasaría en el intento de llevar a cabo la estabilidad del país no sólo por oposición armada de movimientos contra su gobierno, sino también por la incapacidad del Presidente para tomar en cuenta en su política las nuevas condiciones creadas por las guerras civiles. Sobre todo, no logró crear entre las masas una amplia base para su gobierno, ya que su política social conservadora lo enajenaba cada vez más de las grandes masas de campesinos y obreros, un defecto que tampoco el marcado carácter nacionalista de su política exterior consiguió compensar (Tobler Hans, 1994, pág. 373).</p>

  <p>Bajo estas condiciones, la base de poder de Carranza resultó demasiado débil para mantenerse ante la presión ejercida por los dirigentes sonorenses agrupados en torno a Obregón.</p>

  <p>Revisa a continuación la presentación de <a href="https://prezi.com/view/XcwwQqC9qU93OvlDGHE7/" target="_blank">Prezi para conocer las dificultades del régimen de Carranza</a>.</p>

  <?php ob_start(); ?>
  <p>Para evaluar el aprendizaje contesta el cuestionario:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u1act6', "La Constitución de 1917 e instauración del régimen posrevolucionario", $ActividadContent);
  ?>


  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
