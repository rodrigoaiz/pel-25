<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Polisacáridos</h2>
    <p>Observa el siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('7BOLUjSP7-s', 'Almidón y celulosa');
        ?>
    </div>
    <p class="mt-4">Los polisacáridos constituyen un grupo heterogéneo de polímeros, en el que intervienen más de 20
        monosacárido os unidos a través de enlaces glucosilo ricos; los polisacáridos de menos de 20 U se
        conocen como oligosacáridos. Casi todos los polisacáridos naturales contienen cientos de monómeros y en
        ocasiones varios miles. </p>
    <p>Se encuentran como cadenas lineales o ramificadas, que a su vez pueden estar integradas por un solo tipo
        de monosacárido (homopolisacáridos) o por varios tipos de monosacáridos (heteropolisacáridos). De
        cualquier manera, sus componentes siempre están unidos regularmente con una secuencia y estructura
        repetitivas representando polímeros con un alto grado de ordenación. </p>
    <p>De acuerdo con su función biológica, los polisacáridos están divididos en dos grupos estructurales, que
        confieren rigidez a los tejidos y los que representan la reserva energética. Las características del
        polisacárido van a depender de diferentes factores entre ellos el tipo de monómero del cual están
        conformados y el enlace glucosídico que presentan.</p>
    <p>Entre los polisacáridos más conocidos están el almidón y la celulosa, ambos son homopolisacáridos, es
        decir, están formados por un solo tipo de monómero, que es la glucosa; sin embargo tienen propiedades
        distintas pero, ¿a qué se debe esa diferencia en sus características y propiedades? Continúa en esta
        lección para dar respuesta a esta interrogante.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>