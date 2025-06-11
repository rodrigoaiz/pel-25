<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenida a la lección 5</h2>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('py4bPespgAc', 'Bienvenida a la lección 5.');
        ?>
    </div>
    <p class="mt-4">
        Hola, bienvenidos a la lección 5. En esta ocasión revisaremos la relación que existe entre la estructura y la reactividad de las moléculas. Para ello, haremos un recorrido por los grupos funcionales y las estructuras de las macromoléculas presentes en los alimentos. Espero que disfrutes mucho esta lección y te deseo mucho éxito en las actividades.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>