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

  <link rel="stylesheet" href="/dist/assets/css/styles.css">

<section>
  <h2>Título 1</h2>
  <h3>Título 2 si necesario</h3>
  <h4>Otro subtitulo</h4>
  <p>Revisen el ejemplo en Unidad 1 tema 1 ejemplo.php</p>
    <h2>Bienvenid@ a la unidad 4</h2>
    <?php
      renderVideoIframe('_7FRdJFw1U0', 'Bienvenida a la unidad 3.');
    
    ?>

    <?php ob_start(); ?>
    <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t1a1', "Cuestionario diagnóstico Unidad 3", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();