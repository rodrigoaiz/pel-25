<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenida a la unidad 1</h2>

    <p class="font-bold text-xl text-orange-500">¡Bienvenidos y bienvenidas al curso de Cultura por la Paz!</p>
    <p>En esta primera unidad hablaremos sobre <strong>identidad y empatía</strong>, dos elementos esenciales para <strong>comprendernos mejor a nosotros mismos.</strong> También reflexionaremos sobre cómo se forma nuestra identidad, su influencia en nuestras relaciones y por qué la <strong>empatía</strong> y el poner <strong>límites sanos</strong> son claves para convivir de manera respetuosa y consciente con quienes nos rodean. Esta unidad será la base para todo lo que iremos construyendo a lo largo del curso.</p>
    <p>Para arrancar revisa el siguiente video sobre la comunicación asertiva.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('42lbE_N4-bo', 'Comunicación asertiva: definición, técnicas y ejemplos');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>