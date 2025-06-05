<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Compuestos del carbono</h3>
    <p>El carbono además de formar compuestos alifáticos y aromáticos, también puede unirse a otros grupos de átomos como el oxígeno, nitrógeno, azufre o fósforo para formar cientos de miles de compuestos. A la unión de átomos como en N, O, o S en las cadenas hidrocarbonadas se les conoce como <strong>grupos funcionales</strong>, los cuales determinan muchas de las propiedades de los compuestos, como pueden ser su estructura, solubilidad y reactividad.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t2_img_molecula_organica.webp', 'Molécula orgánica que muestra distintos grupos funcionales marcados en color. Imagen de WikimedialImages, Pixabay');
        ?>
    </div>
    <p>A continuación, se muestran algunos de los grupos funcionales más importantes en moléculas biológicas.</p>


    <p>Ahora que ya viste los conceptos fundamentales de los grupos funcionales, revisa el siguiente material:</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="http://objetos.unam.mx/quimica/compuestosDelCarbono/grupos-funcionales/index.html" target="_blank">Grupos funcionales</a></p>
    </div>
    <?php ob_start(); ?>
    <p>Ahora que ya has revisado las estructuras de los grupos funcionales más comunes, anímate a resolver el siguiente memorama.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a12', "Memorama Grupos Funcionales", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>