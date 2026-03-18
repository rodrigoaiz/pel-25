<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>PRESENTACIÓN DE LA LECCIÓN</h2>
  <p>Estás por iniciar la primera lección de esta unidad 2. Encontrarás el historicismo, corriente relevante que, a través de autores que coinciden en una visión de la historia, pero se separa de la práctica misma en la investigación, también revisarás las diversas corrientes y tendencias que fragmentaron al materialismo histórico y que conforman no sólo una visión política, sino que ha producido obras de interpretación histórica, tan complejas como la que muestra Eric Hobsbawn en su <i>Historia del siglo XX</i>. Asimismo, te introducirás en la Escuela de los <i>Annales</i>, corriente historiográfica surgida en Francia en la década de los años veinte de ese siglo y cuyas ramificaciones, a través de una concepción de Historia Total, nos lleva a revisar la historia de las mentalidades, la historia serial y aspectos de la historia cultural.</p>
  <p>En el siguiente video te damos la bienvenida a esta unidad de Teoría de la Historia II.  En ella encontrarás corrientes de interpretación histórica que influyeron durante todo el siglo y cuyas metodologías, conceptos y nociones siguen orientando los trabajos de investigación, análisis y reflexión sobre la historia.</p>

  <?php
  renderVideoIframe('', 'Bienvenida a la unidad 2');
  ?>

  <?php ob_start(); ?>
  <p>A continuación y antes de iniciar con el estudio de esta primera unidad, te solicitamos contestes el siguiente Cuestionario inicial. Es importante que lo hagas para que, al finalizar esta unidad, puedas constatar tus avances en esta materia. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a1', "Cuestionario inicial", $ActividadContent);
  ?>

  <p><b>Instrucciones:</b> Lee con atención la información que te brindamos a continuación. Te permitirá ubicar el ambiente que rodea al surgimiento de las corrientes que te presentamos. Cuando veas una palabra resaltada en color rojo, dale clic para obtener más información sobre ella.</p>
  <p>¡Esperamos que este primer recorrido sea tan interesante para ti como lo fue para nosotros!</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>