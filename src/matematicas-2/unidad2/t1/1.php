<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ModalIndex.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2>Bienvenida a la Unidad 2</h2>
<h3>Funciones cuadráticas y aplicaciones</h3>
<p>Aquí vas a aprender a resolver situaciones que tienen como representación matemática una función cuadrática, nos apoyaremos de la resolución de problemas en distintos contextos que involucren a dicha función, como por ejemplo la <b>trayectoria de un balón</b> cuando es pateado por un jugador de fútbol. Los problemas que modelaremos matemáticamente con una función cuadrática, nos permitirán explorar las condiciones, valores, relaciones y comportamientos, a través de tablas, diagramas, etcétera, de manera que obtenga información, como un paso previo a establecer la representación algebraica con la finalidad de construir conocimientos que serán empleados en asignaturas posteriores.</p>
<div class="lg:grid">
  <?php
  renderVideoIframe('CtNiJHZE9Jc', 'Bienvenida a la unidad 2');
  ?>
</div>

<?php ob_start(); ?>
<p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u2a1', "Cuestionario diagnóstico unidad 2", $ActividadContent);
?>
</section>
<?php renderModalIndex('<strong>IMPORTANTE 2:</strong> Sólo encontrarás disponible el contenido de la Unidad 1 y 2, en breve podrás acceder a las siguientes unidades'); ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>