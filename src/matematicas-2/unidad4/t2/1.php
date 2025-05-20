<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<h2>Semejanza</h2>
<h3>Introducción</h3>
<p>Reflexiona sobre cómo solucionarías los siguientes problemas y escribe tu propuesta para cada uno. Trata de imaginar que estás presente en cada uno de los lugares y sólo cuentas con las herramientas especificadas. Conserva tus respuestas, se revisarán más adelante.</p>
<p><strong>Problema 1</strong>. En cierto parque, se sembraron varios árboles de eucalipto que con los años se han desarrollado y alcanzado alturas que comienzan a ser peligrosas por la fragilidad de los árboles. Así que se ha decidido cortar aquellos árboles que tengan una altura superior a diez metros. Eres uno de los trabajadores que recibe el encargo de determinar cuáles árboles deben cortarse, para lo cual se te proporciona como herramienta una vara recta de un metro de largo y un flexómetro de tres. ¿Cómo puedes determinar la altura de los árboles sólo con estas herramientas?</p>
<p><strong>Problema 2</strong>.Se va a construir un puente que cruce de un lado a otro de una barranca y ya se han señalado los puntos donde se localizarán los extremos del puente. ¿Cómo puedes determinar la longitud del puente si sólo cuentas con una cuerda de cinco metros y un flexómetro de tres metros de largo?</p>
</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>