<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Évaluation finale de l'unité</h2>
    <p>Félicitations! Tu as terminé la matière de Français I. Réalise l’activité d’évaluation suivante, qui te permet de mesurer l’acquis de ton apprentissage dans cette matière. / ¡Felicidades! Has concluído la asignatura de Francés I. Realiza la siguiente actividad de evaluación, que te permite conocer el logro de tu aprendizaje en esta asignatura.</p>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3a3', "Évaluation finale de l'unité", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
