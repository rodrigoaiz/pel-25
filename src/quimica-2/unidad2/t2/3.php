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
    <p>Ahora que ya sabemos que el carbono es capaz de formar una variedad enorme de compuestos, vamos a empezar por conocer los más sencillos: los <strong>Hidrocarburos</strong>, éstos son los compuestos orgánicos constituidos únicamente por dos elementos: <strong>carbono e hidrógeno</strong>. A partir de su estructura química pueden dividirse en dos clases: <strong>alifáticos y aromáticos</strong>. Los hidrocarburos <strong>alifáticos</strong> pueden ser de cadena abierta o cadena cerrada. Los de cadena abierta se dividen en alcanos, alquenos y alquinos, mientras que los de cadena cerrada se dividen en cicloalcanos, cicloalquenos y cicloalquinos.</p>
    <?php ob_start(); ?>
    <p>Completa el siguiente mapa conceptual.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a8', "Clasificación de hidrocarburos", $ActividadContent);
    ?>
    <p>Ahora accede al recurso <strong>compuestos orgánicos y su nomenclatura</strong>, lee cuidadosamente la información descrita a partir de la diapositiva número 6 hasta la número 18, toma nota de los aspectos más relevantes y realiza las actividades indicadas a lo largo de cada descripción, al concluir la revisión, lectura y comprensión del material es importante que realices los siguientes retos para valorar cuánto aprendiste.</p>
    <p>Es importante concluir cada uno de ellos.</p>
    <ol class="ol-number">
        <li>Reto de <strong>compuestos alifáticos</strong></li>
        <li>Reto de <strong>memoria</strong></li>
        <li>Reto de <strong>nomenclatura</strong></li>
        </ul>
        <div class="max-w-2xl mx-auto m-10">
            <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="https://redi.cuaieed.unam.mx/lecciones/lecciones/quimica/quim_1121a1125/index.html" target="_blank">Compuestos orgánicos y su nomenclatura</a></p>
        </div>
        <?php ob_start(); ?>
        <p>A continuación te invitamos a realizar el siguiente reto.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a9', "Compuestos alifáticos", $ActividadContent);
        ?>
        <?php ob_start(); ?>
        <p>Te invitamos a realizar el siguiente reto.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a10', "Estructuras químicas", $ActividadContent);
        ?>
        <?php ob_start(); ?>
        <p>¡Vamos a un reto más!</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a11', "NOMENC ORGÁNICA", $ActividadContent);
        ?>
        <p class="mt-8">En la vida diaria estamos en contacto con una gran cantidad de compuestos orgánicos, para conocer un poco, consulta el siguiente desplegable.</p>
        <h3>Alcanos y alquenos en la vida cotidiana</h3>
        <div class="w-md mx-auto">
            <?php
            renderImage('u2t2_img_quemador_cocina.webp', 'Quemador de cocina, Imagen de Maklay62, Pixabay');
            ?>
        </div>
        <p>Parece poco importante, pero en realidad en nuestra vida cotidiana utilizamos muchos alcanos todos los días, por ejemplo, el gas de cocina es un alcano formado por cuatro átomos de carbono llamado propano <span class="font-serif">CH<sub>3</sub>CH<sub>2</sub>CH<sub>3</sub></span>, o el butano que lo utilizan con frecuencia los plomeros, su fórmula química es: <span class="font-serif">CH<sub>3</sub>CH<sub>2</sub></span> <span class="font-serif">CH<sub>2</sub>CH<sub>3</sub></span>, y el gas natural está formado por metano <span class="font-serif">CH<sub>4</sub></span>. El combustible para automóviles, la gasolina, está compuesta por mezclas complejas de alcanos líquidos, entre los cuales los más importantes son los isómeros del octano.</p>
        <p>Y los alquenos no se quedan atrás, ejemplo de su uso es el acetileno, utilizado para soldar, el etileno es utilizado para fabricar miles de productos de suo diario como las bolsas de polietileno, fibras para telas, aislantes eléctricos, para fabricar envases, etc.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>