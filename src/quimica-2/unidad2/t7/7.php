<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Medicamentos genéricos, ¿lo mismo pero más barato?</h3>
    <p>Seguramente has escuchado que dentro de los medicamentos existen dos grandes grupos: los medicamentos de
        patente y los medicamentos genéricos. Además es muy común encontrar opiniones encontradas respectos a
        esto, los comentarios más constantes son:</p>
    <ul class="ul-disc">
        <li>Los medicamentos de patente son más caros, por que funcionan mejor</li>
        <li>Lo que cura es la sustancia activa, por lo que los genéricos son iguales a los de patente</li>
        <li>Los medicamentos genéricos no funcionan</li>
        <li>Los genéricos también te curan pero tardan más</li>
        <li>Mi hijo no es genérico, por eso solo le doy medicamento de patente</li>
        <li>Entre otros</li>
    </ul>
    <?php ob_start(); ?>
    <p>En esta ocasión veremos en qué consisten los medicamentos de patente y los genéricos. Por ello como primera actividad deberás participar en el foro titulado ¿A qué me suenan los medicamentos genéricos?</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a25', "Medicamentos genéricos ¿Qué son?", $ActividadContent);
    ?>
    <p class="mt-10">Ahora que ya has dado tu opinión acerca de lo que conoces de los medicamentos genéricos, ha llegado el
        momento de hacer una revisión, con la finalidad de tener una perspectiva fundamentada y que puedas tomar
        la mejor decisión respecto al uso de medicamentos genéricos y de patente. Para ello deberás consultar
        los siguientes materiales:</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-cyan-600"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u2t7-medicamentos_genericos.pdf'; ?>" target="_blank">FDA: Medicamentos Genéricos: Preguntas y Respuestas.</a></p>
    </div>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-600"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u2t7-guia_de_estudio.pdf'; ?>" target="_blank">Ledon Pérez: Capítulo 22 Medicamentos de patente, genéricos intercambiables y similares en
                Hernandéz-Chavez “Farmacología General una guía de estudio” pág 203-207.</a></p>
    </div>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-lime-600"><a class=" text-gray-50" href="https://efesalud.com/medicamentos-genericos-igual-en-calidad-eficacia-y-seguridad-que-los-de-marca/" target="_blank">EFE Salud: Medicamentos: el genérico iguala en calidad, eficacia y seguridad a los de marca.</a></p>
    </div>
    <?php ob_start(); ?>
    <p>Una vez que hayas revisado los materiales realiza la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a26', "Reflexión medicamentos genéricos", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Ahora que ya has terminado la lección y la unidad, pon a prueba tus conocimientos realizando esta evaluación final.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a27', "Cuestionario Final Unidad 2 (disponible en la fecha indicada)", $ActividadContent);
    ?>


</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>