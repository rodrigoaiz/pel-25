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
    <h3>Reacciones oxido-reducción</h3>
    <p>Las reacciones oxido-reducción son reacciones que se conocen desde hace tiempo, donde se han usado los
        términos de oxidación y reducción. Donde se transformaban los minerales que contenían sulfuros y óxidos
        metálicos en el metal correspondiente, es decir, el mineral se reduce al metal, procedimiento que se
        siguen empleando en la industria minero-metalúrgica, donde se da la reducción del óxido de hierro(III)
        con monóxido de carbono para obtener hierro metálico. Cuando el <span class="font-serif italic">Fe<sub>2</sub>O<sub>3</sub></span> se reduce con <span class="font-serif italic">CO</span> se retira oxígeno del mineral, agregándole <span class="font-serif italic">CO</span>, el cual se oxida por la adición de oxígeno para dar <span class="font-serif italic">CO<sub>2</sub></span>. A continuación, se
        ilustra esta reacción:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_obtencion_de_hierro.webp', 'Obtención de hierro');
        ?>
    </div>
    <p>En esta reacción el <span class="font-serif italic">CO</span> es el agente que lleva a cabo la reducción del mineral de hierro para obtener
        hierro metálico, a esta especie se le denomina agente reductor, y es la especie que se oxida. El <span class="font-serif italic">Fe<sub>2</sub>O<sub>3</sub></span>
        es el agente oxidante y es la especie que se reduce.</p>
    <p>En esta reacción de óxido-reducción participa el oxígeno, pero no en todas las reacciones oxido-reducción
        hay oxígeno.</p>
    <p>Una reacción óxido-reducción se caracteriza porque hay una transferencia de electrones, donde un elemento
        se oxida y pierde electrones, mientras que otro elemento se reduce y gana electrones.</p>
    <p>Para identificar a la especie que se oxida y se reduce, debemos determinar el número de oxidación de cada
        elemento en una reacción química. De acuerdo con la siguiente escala de números de oxidación:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_escala_numeros_oxidacion.webp');
        ?>
    </div>
    <p class="mt-10">Si el elemento aumenta su número de oxidación, es decir, se mueve hacia la derecha se oxida. Si el
        elemento disminuye su número de oxidación hacia la izquierda, se reduce.</p>
    <p>De acuerdo con esto, si se asignan los números de oxidación a cada elemento en la reacción
        oxido-reducción para la obtención del hierro metálico, la ecuación química se representa así:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_reaccion_obtencion.webp', 'Reacción de obtención de hierro con números de oxidación');
        ?>
    </div>
    <p class="mt-10">Donde se observa que el <span class="font-serif italic">Fe</span> es el elemento que se reduce y el <span class="font-serif italic">C</span> el elemento que se reduce.</p>
    <p>En el siguiente video puedes encontrar ejemplos de reacciones oxido-reducción.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('tjOpkMkPKiQ', 'Ejemplos de reacciones oxido-reducción');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>