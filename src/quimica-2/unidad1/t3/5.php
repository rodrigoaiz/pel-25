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
    <h3>Concepto de ion: catión y anión</h3>
    <p>En la lección anterior hemos visto las propiedades de las sales y se ha destacado la importancia del tipo
        de enlace que presentan, las cuales pueden ser explicadas a partir del enlace químico que presentan,
        pero para ello es importante recordar un poco sobre cómo es un átomo y qué ocurre cuando átomos de
        distintos elementos químicos se unen para formar compuestos. </p>
    <p>El átomo tiene dentro del núcleo protones y un número igual de electrones en torno al núcleo, lo cual
        produce un equilibrio entre cargas positivas y negativas, entonces se dice que el átomo es neutro, es
        decir, que tiene una carga neta igual a cero.</p>
    <p>La <strong>especie</strong> que tiene <strong>una carga</strong> se llama <strong>ion</strong>, se forma
        cuando se añaden o retiran electrones al átomo. Por ejemplo, un átomo de litio (<strong>Z=3</strong>)
        tiene <strong>3 protones</strong> en el núcleo y <strong>3 electrones</strong> alrededor.</p>
    <p>Cuando el átomo <strong>pierde uno o más electrones</strong> se produce un <strong>ion positivo</strong>,
        llamado <strong>catión</strong>. Cuando el átomo <strong>gana un o más electrones</strong>, forma un
        <strong>anión</strong>. Las propiedades de los iones son muy diferentes a las de los elementos de los
        cuales se forman.
    </p>
    <p>El catión se nombra del átomo del cual se deriva, en consecuencia, <strong>Li+</strong> se llama
        <strong>ion litio</strong> (o <strong>catión litio</strong>), la <strong>carga 1+</strong> indica que
        <strong>pierde 1 electrón</strong>, en este caso es el electrón de valencia. La representación de
        acuerdo con el modelo de Bohr de este ion es:
    </p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u1t3_cation_Li.webp');
        ?>
    </div>
    <p>El anión se nombra tomando la raíz del nombre del átomo del cual se deriva y cambiando la terminación. Un
        ejemplo es el anión cloruro (Cl-), se forma a partir del átomo de cloro, se nombra <strong>ion
            cloruro</strong> (o <strong>anión cloruro</strong>). La palabra cloruro proviene de la raíz del
        nombre del átomo Cl (<strong>clor-</strong>), más el sufijo <strong>uro</strong>. La <strong>carga
            negativa 1-</strong> indica que ha <strong>ganado un electrón</strong>, que se coloca en el último
        nivel de energía. La representación de acuerdo con el modelo de Bohr de este ion es:</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u1t3_anion_Cl.webp');
        ?>
    </div>
    <div class="grid grid-cols-2 gap-6">
        <div>
            <p class="text-cyan-800 font-bold">En la siguiente página encontrarás algunas fórmulas de cationes y aniones.</p>
            <div class="w-md mx-auto">
                <p class="text-center rounded-lg shadow-md p-2 bg-cyan-600"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u1t3_tabla_de_cationes.pdf'; ?>" target="_blank">Fórmulas de aniones y cationes</a>
                </p>
            </div>
        </div>
        <div>
            <p class="text-red-800 font-bold">Para conocer más sobre los iones puedes consultar la siguiente página.</p>
            <div class="w-md mx-auto">
                <p class="text-center rounded-lg shadow-md p-2 bg-red-500"><a class=" text-gray-50" href="https://colegiociencias.webnode.es/quimica/ii%C2%BA%20medio/unidad%20n%C2%BA%201%3A%20modelo%20atomico%20de%20la%20materia%20y%20enlace%20quimico/" target="_blank">Iones</a></p>
            </div>
        </div>
    </div>
    <?php ob_start(); ?>
    <p>Realiza la siguiente actividad para que corrobores lo aprendido.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a15', "Modelos de Bohr de iones", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>