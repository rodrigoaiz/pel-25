<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenid@ a la unidad 3</h2>
    <p>A finales del s. XIX, la parte occidental del planeta veneraba el progreso. Estaban convencidos de que éstos avances se habían producido gracias a la llamada Segunda Revolución Industrial. La primera había traído los textiles, ferrocarriles, hierro y carbón. En la segunda, el acero, compuestos químicos, electricidad y petróleo que abrieron el camino rumbo a nuevas fronteras industriales.</p>
    <?php
      renderVideoIframe('_7FRdJFw1U0', 'Bienvenida a la unidad 3.');
    ?>
    <p>Para saber tus propios conocimientos previos acerca de este tema, por favor responde es siguiente cuestionario. </p>
    <?php
       renderImage('hu2-u1-heyenbrock.webp', 'Imagen de la fábrica de Heidenbrock en 1900', 'https://commons.wikimedia.org/wiki/File:Herman_Heijenbrock_-_The_casting_of_iron_in_blocks.jpg', 'Wikimedia Commons.');
    ?>
    
    <?php ob_start(); ?>
    <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a1', "Cuestionario diagnóstico de la asignatura", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
