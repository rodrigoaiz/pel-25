<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lección 3. Comentarios finales</h2>
    <p>Esperamos que al concluir esta primera unidad del curso, los contenidos hayan sido de tu interés y te hayan proporcionado conocimientos que puedas aplicar a tu vida diaria, para que puedas tomar mejores decisiones y enriquecer tu calidad de vida, la de tu familia y la de tu comunidad. Te invitamos a que continúes con la segunda unidad, en la cual podrás aplicar algunos de los conocimientos adquiridos, mientras incorporas nuevos que mejorarán tu formación, y te prepararán para continuar con tus estudios.</p>
    <?php
    renderImage('u1-tubos.webp');
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>