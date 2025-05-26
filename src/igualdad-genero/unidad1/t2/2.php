<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Diagnóstico: ¿Qué sabes sobre el feminismo?</h2>
    <p>Antes de comenzar a revisar los contenidos, te invitamos a contestar este cuestionario diagnóstico. Con el propósito de identificar tus ideas previas acerca del feminismo.</p>
    <?php ob_start(); ?>
    <p>Lee cuidadosamente cada una de las afirmaciones que se presentan y marca si son verdaderas (V) o falsas (F)), desde tu punto de vista, según lo que tú sabes o has escuchado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a1', "Evaluación diagnóstica de aprendizaje 2", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>