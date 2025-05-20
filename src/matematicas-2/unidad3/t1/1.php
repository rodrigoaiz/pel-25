<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ModalIndex.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2>Bienvenida a la Unidad 3</h2>
<div class="lg:grid">
      <a href="https://www.youtube.com/watch?v=0VbNtwuRCbo&feature=youtu.be" target="_blank">
                <?php
                renderImage('u3t1_banner_video_bienvenida.webp', '', '', '');
                ?>
      </a>
</div>

<?php ob_start(); ?>
<p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u3a1', "Cuestionario diagnóstico unidad 3", $ActividadContent);
?>
</section>
<?php renderModalIndex('<strong>IMPORTANTE 2:</strong> Sólo encontrarás disponible el contenido de la Unidad 1 y 2, en breve podrás acceder a las siguientes unidades'); ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>