<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Tipos de conflicto: personales, escolares y sociales </h2>
    <p>Los conflictos pueden clasificarse en diferentes tipos según los conceptos de "convivencia pacífica" y "cultura de paz" propuestos por el Instituto Nacional Electoral (INE). Entre estas categorías se encuentran los <strong>conflictos personales, escolares y sociales.</strong></p>
    <p>Los <strong>conflictos personales</strong> surgen en el ámbito de las relaciones interpersonales, ya sea en el entorno familiar, laboral o entre amistades cercanas. Este tipo de conflicto se origina en situaciones cotidianas que afectan a las y los individuos en su vida privada. Por otro lado, los <strong>conflictos escolares</strong> se manifiestan dentro del entorno educativo y pueden involucrar a estudiantes, docentes o personal administrativo. Estos conflictos pueden presentarse en diversos contextos, tanto en el aula como en otras áreas del entorno escolar. Finalmente, los <strong>conflictos sociales</strong> abarcan cuestiones más amplias que impactan a colectivos y comunidades, tales como la desigualdad económica, la discriminación y la exclusión social, problemas que afectan la cohesión y el bienestar de la sociedad en su conjunto.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u3t1p03-conflictos.webp');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>