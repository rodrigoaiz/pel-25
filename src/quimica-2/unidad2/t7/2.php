<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>¿Qué es un medicamento?</h2>
    <p>De manera muy general podemos decir que <em>los medicamentos</em> son productos que se utilizan para
                diagnosticar, curar o prevenir enfermedades. </p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t7_img_medicamento.webp', 'Medicamentos. Imagen de Wikipedia, Wikimedia Commons');
        ?>
    </div>
<p>Sin embargo, es muy común que en el día a día usamos el término medicamento para referirnos de manera
                indistinta a productos cuyo nombre es otro. Por tal motivo, en la primera actividad ustedes investigarán
                algunas definiciones, con la finalidad de que a lo largo de la lección utilicemos el lenguaje adecuado
                para referirnos a distintos aspectos relacionados con los medicamentos.</p>
<?php ob_start(); ?>
    <p>A continuación te invitamos a realizar la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a22', "Mapa conceptual Medicamentos", $ActividadContent);
    ?>
<p class="mt-10">Ahora que has revisado las diferentes definiciones que se usan en el campo de la industria farmacéutica, ha llegado el momento de diseccionar un medicamento de uso común para que relacione estos términos. Para ello revisa el siguiente video.</p>
<div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('L1vFkIKXfBs', 'Analizando un medicamento.');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>