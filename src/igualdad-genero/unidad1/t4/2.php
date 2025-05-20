<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Sesión 1. Diagnóstico. Yo admiro a…</h2>
    <p>Las actividades y videos del <em>aprendizaje 1</em> te mostraron como los roles y estereotipos de género generalizan la forma en que se deberían comportar los hombres y las mujeres. Es decir, predisponen a las personas a adoptar ciertos rasgos de personalidad o a realizar actividades "propias de su género".</p>
    <p>Un ejemplo de un estereotipo de género es que el rosa es para las niñas y el azul para los niños. En cuanto a los roles, algunas personas consideran que solamente las mujeres pueden dedicarse a los quehaceres del hogar mientras que los hombres salen a trabajar para mantener económicamente a su familia. Sin embargo, estamos viviendo tiempos de cambio en los roles y estereotipos de género y están surgiendo diversas maneras de ser hombre.</p>
    <p>Para ir reconociendo cómo son los hombres que admiras te proponemos realizar la siguiente actividad.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificarás las características de los hombres que admiras.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Trabajarán en equipos de 4 ó 5 estudiantes en el orden que indique tu profesor o profesora.</li>
        <li>Colaboren para escribir dos listas de palabras. En una lista anoten 10 características de personalidad (estereotipos) y en la otra lista anoten 10 actividades (roles) que realizan los hombres que admiran.</li>
        <li>Utilicen las dos listas para elaborar dos nubes de palabras. Se sugiere utilizar la página de internet <a class="text-purple-50" href="https://www.freewordcloudgenerator.com/generatewordcloud" target="_blank">Nube de palabras</a>.
            <p class="text-center">Este es un ejemplo de una nube de palabras.</p>
            <div class="w-md mx-auto">
                <?php
                renderImage('iga4-img02.webp');
                ?>
            </div>
        </li>
        <li>Cuando terminen, integren sus dos nubes de palabras en un solo archivo. Nombren el archivo con su grupo, número de equipo, y la palabra nube. Ejemplo, <em>Grupo201Equipo1Nube.doc</em></li>
        <li>No olviden revisar el comentario de retroalimentación que les dará su docente.</li>
    </ol>
    <div class="w-2/3 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA:</span>
        <ul>
            <li class="text-white">Revisa la <a class="text-white" href="<?php echo PATH_DOCS . 'u1t4-rubrica_DiagnosticoYoAdmiroA.pdf'; ?>" target="_blank">rúbrica</a> con los criterios de evaluación diagnóstica.</li>
        </ul>
    </div>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a7', "Mapa Mental: Perspectiva de Género.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>