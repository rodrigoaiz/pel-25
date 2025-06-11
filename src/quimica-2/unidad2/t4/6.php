<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Actividad experimental</h2>
    <p>¿Qué relación tienen las reacciones de hidrólisis con la asimilación de nutrimentos en el organismo?</p>
    <p>Los alimentos están formados por macromoléculas que al descomponerse proporcionan nutrimentos necesarios
        para el organismo, por eso, las reacciones de hidrólisis son necesarias para la degradación de esas
        moléculas. En los humanos, la descomposición de los alimentos inicia con acción enzimática mientras
        salivamos y por acción química, en el estómago. Después en la bioasimilación, las moléculas de los
        nutrimentos ingresan al torrente sanguíneo y son transportadas por el hígado o secreciones celulares.
        Aunque en la bioasimilación de la digestión pueden absorberse algunos compuestos similares, la
        biodisponibilidad de estos compuestos viene dictada por este segundo proceso, ya que tanto el hígado
        como las secreciones celulares pueden ser muy específicos en su acción metabólica. Este segundo proceso
        es cuando el alimento absorbido llega a las células a través del hígado.</p>
    <p>Para complementar tu formación te presento este video “Reacciones de hidrólisis en alimentos”, en el cual
        se explica, a través de una actividad experimental, cómo las reacciones de hidrólisis permiten el
        aprovechamiento de los macronutrimentos.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('A-99-EPg4ds', 'Reacciones de hidrólisis en alimentos.');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Entrega un informe de la actividad experimental que observaste en el video. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a19', "Informe de actividad experimental.", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>