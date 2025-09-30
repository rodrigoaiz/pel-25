<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <p> ¡Bienvenidos! Iniciamos este curso revisando algunas de las concepciones que sobre la historia se generaron en el siglo XIX. 
    Es importante que tomes en cuenta que es a partir de este siglo cuando se inician las reflexiones teóricas contemporáneas 
    sobre nuestra disciplina y también cuando aparece la profesionalización de quienes estudian, investigan y enseñan la historia.
    A continuación te presentamos la primera lección de Teoría de la Historia II.
</p>


<?php renderVideoIframe ('fg', 'Bienvenido a la unidad 1'); //VIDEO DE YOUTUBE FALLIDO ?>


<p> A continuación y antes de iniciar el estudio de esta primera unidad, te solicitamos que contestes el siguiente cuestionario inicial. 
  Es importante que lo hagas para que, al finalizar esta unidad, puedas constatar tus avances en esta materia. 
</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuestionario diagnóstico Unidad 1", $ActividadContent);
  ?>

<h3>Instrucciones: </h3> 
<p> Lee con atención la información que te brindamos a continuación. Te permitirá ubicar el ambiente que rodea al surgimiento de las 
  corrientes que te presentamos. Cuando veas una palabra resaltada en <span style="color: #FF0000;">color rojo</span>, dale clic para 
  obtener más información sobre ella. Esperamos que este primer recorrido sea tan interesante para ti como lo fue para nosotros. </p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
