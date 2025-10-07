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
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h4> Unidad 1. Interpretaciones de la historia en el siglo XIX </h4>

<h2> Materialismo  </h2>

<h3> Teoría y praxis </h3>

<p>
  El contexto en el cual surge el materialismo histórico - la teoría marxista de la historia - se encuentra ligada a los movimientos 
  revolucionarios de la primera mitad del siglo XIX, al surgimiento del proletariado industrial como una nueva clase social y a la 
  organización de éste para la defensa de sus derechos.<br>Karl Marx y Friedrich Engels, son quienes desarrollan esta corriente de 
  interpretación histórica. Sus obras se conocen más dentro del ámbito político o económico, sin embargo, para ellos, la historia es 
  el fundamento objetivo para el estudio de la sociedad y también el que nos permite comprender que ningún régimen político es eterno.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Communist-manifesto.webp', 'Uno de los documentos más influyentes del siglo XIX es el Manifiesto del Partido Comunista, 
  elaborado por Karl Marx y Friedrich Engels donde se encuentran varias de las categorías del materialismo histórico. En la imagen se encuentra 
  la portada de la primera edición del Manifiesto del Partido comunista, de febrero de 1848, editada en Londres.','https://upload.wikimedia.org/wikipedia/commons/8/86/Communist-manifesto.png',
 'Wikimedia Commons.');
?>
</div>

<p>
  El materialismo histórico parte de una concepción materialista del mundo, misma que se opone, por ejemplo, a la filosofía de la 
  historia de Hegel, la cual parte de una visión idealista de la historia, la cual se explica cómo el desarrollo dialéctico del 
  Espíritu y su desenvolvimiento gradual, que se manifiesta en la historia humana.  Para contrarrestar esta visión del mundo, los 
  autores recurren al concepto de Praxis, el cual implica que todo conocimiento, todo concepto, debe llevar someterse a una crítica, 
  no aceptando verdades absolutas y posteriormente debe comprobarse mediante su puesta en práctica dentro de su entorno social, es 
  decir que todo conocimiento verdadero sólo se puede lograr desde lo concreto, es decir desde una pregunta sobre un objeto del mundo 
  real, la cual se convierte en una forma abstracta a través del pensamiento, un concepto, noción o categoría, la cual se debe comprobar, 
  en lo concreto, es decir en un objeto real. Esta visión del conocimiento, <b>concreto-abstracto-concreto</b>, es la base de esta visión 
  del mundo y de la historia y se conoce como <b>Teoría</b>, lo abstracto y <b>Praxis</b>, la comprobación en lo real material.
</p>

<p>
  Esta visión materialista, unida a la connotación política de esta esta teoría de la Historia se presenta a controversia y antes que 
  examinar su metodología, se sostiene como un 
  <?php renderTooltip('dogma','Una idea, concepto o doctrina, considerada como verdadera por un grupo social humano, misma que no puede 
  cuestionarse y sólo se acepta de manera absoluta. Los dogmas pueden ser de tipo religioso, político o ideológico y al asumirse de manera 
  acrítica, es una causa de la formación de  fanatismos.');?> 
  o se ataca sin sentido. Tomando lo anterior en cuenta, revisemos tanto el papel de sus creadores como sus principales características 
  metodológicas.
</p>

<p>
  A continuación te presentamos el siguiente ejercicio sobre el materialismo histórico para que repases lo expuesto en esta lección.
</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t4a1', "Sobre el materialismo histórico ", $ActividadContent);
?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
