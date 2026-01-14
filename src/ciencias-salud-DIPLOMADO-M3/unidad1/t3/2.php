<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lección 3. Actividad de investigación</h2>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>A continuación realiza la siguiente lectura, que te proporcionará información útil para el cierre de actividades de esta Unidad. </li>
        <li>Responde el cuestionario final, seleccionando VERDADERO o FALSO.</li>
    </ol>


    <div class="w-4/5 mx-auto mt-6 bg-lime-100 p-2 leading-none text-md">
        <p class="text-green-950 font-bold text-center">INTRODUCCIÓN</p>
        <p class="text-green-950">La diabetes es una enfermedad crónica que afecta a un gran número de personas en México. Según datos de la Secretaría de Salud la diabetes es una de las principales causas de muerte en el país, y tiene una alta prevalencia. De acuerdo con estimaciones recientes, alrededor del 10% de la población mexicana padece diabetes y este número ha ido en aumento en los últimos años. La diabetes tipo 2 es la forma más común de diabetes en México, generalmente asociada con el estilo de vida, la obesidad y la falta de actividad física. La diabetes tipo 1 también está presente, pero es menos común.</p>
        <p class="text-green-950">Los factores de riesgo para desarrollar diabetes en México incluyen la genética, la obesidad, la falta de ejercicio, la mala alimentación y la edad avanzada, entre otros. La predisposición genética es un factor importante en la población mexicana, ya que puede llevar a complicaciones graves tales como enfermedades cardiovasculares, problemas renales, pérdida de la visión y amputaciones de miembros. Estas complicaciones representan una carga significativa para las familias y el sistema de salud. Aunque hay avances en la concientización sobre la diabetes y en el acceso a la atención médica, aún existen desafíos importantes. Algunas personas pueden enfrentar barreras económicas o geográficas para recibir el tratamiento adecuado.</p>
<p class="text-green-950">El gobierno mexicano y diversas organizaciones trabajan en programas de prevención y concientización sobre la diabetes a través de campañas educativas sobre la importancia de la alimentación saludable, el ejercicio regular y el monitoreo de la glucosa. Uno de los enfoques clave para abordar la diabetes en México es la promoción de cambios en el estilo de vida: adoptar una dieta balanceada y aumentar la actividad física. La prevención y el diagnóstico temprano son aspectos clave para combatir la propagación de la enfermedad.</p>
    <p class="text-green-950">Finalmente, la diabetes es un problema significativo de salud pública en México, y abordar esta situación requiere esfuerzos continuos en educación, prevención y acceso a la atención médica.</p>
    </div>


    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1-act-4', "Cuestionario final - Lección 3", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>