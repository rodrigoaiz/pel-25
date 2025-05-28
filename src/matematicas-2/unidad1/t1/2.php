<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Introducción</h3>
    <h4>¿Qué es una ecuación cuadrática?</h4>

    <?php
  renderImagePleca('u1_t1_mathematic-world.webp', 'Imagen de Mathematic World.', 'https://commons.wikimedia.org/wiki/File:Mathematic_World.jpg', 'Pixabay', 'justify-center');
  ?>

    <p>Una ecuación cuadrática en x, es una ecuación que una vez simplificada, su mayor exponente en la incógnita será 2, y estas puede tener la forma:</p>
    <p>$$ax^2+bx+c=0$$</p>
    <p>En donde \(a\), \(b\) y \(c \in \mathbb{R}\) (se lee: \(a\), \(b\) y \(c\) pertenecen a los números reales) y \(a \neq
    0\) es distinto de cero); el término \(ax^2\) es el término cuadrático, \(bx\) es el término
                lineal y \(c\) es el término independiente.</p>
    <p>Las ecuaciones cuadráticas se pueden clasificar de la siguiente forma:</p>

    <div class="m-auto"><?php renderImage("u1_t2_ecuaciones.webp", "Imagen de elaboración propia", "", "", true); ?></div>

    <p>Como podemos notar, la ecuación completa tiene el término cuadrático, el término lineal y el independiente y en el caso de las incompletas faltaría uno de estos términos, ya sea el lineal o el independiente.</p>
    <p>Cuando nosotros damos solución a una ecuación cuadrática, estas pueden tener dos soluciones, a las cuales también se les conoce con el nombre de raíces.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
        <p>Revisa el siguiente video para complementar la introducción a este tema.</p>
        <div class="m-auto"><?php renderImage("u1_t2_raices.webp", "Imagen de Vikfret.", "https://commons.wikimedia.org/wiki/File:Cat_math_pythagorean_theorem.png", "Wikimedia Commons.", true, "p-4",); ?>
        </div>
    </div>

    <?php ob_start(); ?>
        <p>Ahora participa en el siguiente foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a2', "¿Para qué sirven las ecuaciones cuadráticas?", $ActividadContent);
    ?>

</div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>