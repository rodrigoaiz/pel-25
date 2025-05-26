<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Video-Cuestionario de sensibilización: Hazlo como hombre</h2>
    <p>Una forma de ejercer esta violencia es mediante frases que presionan a los hombres a comportarse de cierta forma. Aunque cualquier persona puede decir estas frases, cuando los hombres se ajustan al comportamiento deseado están ejerciendo violencia sobre sí mismos. A continuación, harás un ejercicio para que conozcas más sobre este tema.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reconocer frases de uso cotidiano que evidencien la violencia que los hombres ejercen sobre sí mismos y hacia sus pares.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Presta atención al video "48 frases que los hombres escuchan a lo largo de su vida" que se encuentra en el VideoQuiz.</li>
        <li>Durante el VideoQuiz aparecerá una pregunta relacionada con alguna de las frases del video.</li>
        <li>Selecciona una o varias respuestas dependiendo de tu propia experiencia. (Revisa la retroalimentación que aparece con cada pregunta).</li>
        <li>Comenten en plenaria qué piensan o cómo se sienten respecto a una de estas frases.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Mira aquí el video interactivo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a4', "Video-Cuestionario", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>