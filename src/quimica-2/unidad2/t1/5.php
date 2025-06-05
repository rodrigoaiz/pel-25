<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Modelo atómico de Bohr</h3>
    <p class="text-lg font-bold text-rose-700">Estructuras de Lewis</p>
    <p>Visita el Portal Académico del Colegio de Ciencias y Humanidades y realiza la lectura para los dos temas antes mencionados. </p>
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-2 col-start-2 shadow-lg bg-fuchsia-700 hover:bg-fuchsia-900">
            <a href="https://e1.portalacademico.cch.unam.mx/alumno/quimica1/unidad2/modelos_atomicos/modelo_bohr" target="_blank">
                <?php
                renderImage('u2t1_banner_modelo_atomico_niels_bohr.webp');
                ?></a>
        </div>
        <div class="col-span-2 shadow-lg bg-fuchsia-700 hover:bg-fuchsia-900">
            <a href="https://portalacademico.cch.unam.mx/materiales/prof/matdidac/sitpro/exp/quim/quim1/banco_informacion/r17_estructura_de_lewis.html" target="_blank">
                <?php
                renderImage('u2t1_banner_estructuras_lewis.webp');
                ?></a>
        </div>
    </div>
    <p class="mt-10">En este momento, has comprendido que algunas estructuras de macro y micronutrimentos, tienen diferentes átomos enlazados. Las fuerzas que mantienen unidos a estos se denominan enlaces químicos. La siguiente estructura química representa a la alanina, un aminoácido presente en muchas proteínas:</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t1_img_alcanina.webp', 'Estructura alanina.');
        ?>
    </div>
    <p>La alanina tiene 11 enlaces sencillos y 1 enlace doble. Los enlaces se presentan entre diferentes átomos, por ejemplo:</p>
    <ul class="list-none">
        <li>Nitrógeno-hidrógeno, N-H</li>
        <li>Carbono-nitrógeno, C-N</li>
        <li>Carbono-hidrógeno, C-H</li>
        <li>Carbono-carbono, C-C</li>
        <li>Carbono-oxígeno, C-O y C=O</li>
        <li>Oxígeno-hidrógeno, O-H</li>
    </ul>
    <p class="font-bold">¿Cómo se forman estos enlaces?</p>
    <p>Existe una atracción que involucra a los electrones y los núcleos de cada átomo. En los enlaces anteriores, los electrones son atraídos por la carga positiva del núcleo del átomo contrario.</p>
    <p>¡Citemos un ejemplo!</p>
    <p>Observemos alguno de los dos enlaces nitrógeno-hidrógeno (N-H) que tiene la alanina. Un electrón del nitrógeno es atraído por la carga positiva del núcleo del hidrógeno y viceversa. Si utilizamos las estructuras de Lewis y el Modelo Atómico de Bohr, nuestro modelo queda así:</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t1_img_lewis.webp', 'Lewis y Bohr.');
        ?>
    </div>
    <p>Lo que implica que el nitrógeno tiene 5 electrones en su última capa de valencia. De acuerdo con la estructura de Lewis, el nitrógeno se rodea por 5 puntos, que simulan los electrones de valencia. Mientras que usando el Modelo de Bohr, observamos esos 5 electrones en el último nivel de energía o última órbita.</p>
    <p>A continuación, puedes seleccionar cualquier enlace de la estructura de la alanina y ejemplificar como el dibujo anterior.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>