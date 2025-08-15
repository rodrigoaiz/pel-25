<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lectura y cuestionario: Masculinidades e igualdad de género</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>El respeto a la diversidad de ideas y estilos de vida es fundamental para las relaciones humanas. Por ello, te proponemos cerrar la primera sesión con la lectura del tríptico "Un asunto de hombres: las masculinidades" elaborado por la Comisión Nacional de los Derechos Humanos. En este texto se ejemplifican algunas de las conductas y prácticas de las masculinidades dominantes que son contrarias a la equidad y la igualdad sustantiva entre las personas.
        Ten presente que la igualdad de género no implica que las personas tengan comportamientos y formas de ser idénticas. La igualdad significa poder gozar y ejercer nuestros derechos humanos y libertades fundamentales, además de tener acceso a oportunidades y recursos que nos permitan desarrollarnos plenamente, independientemente de nuestra identidad de género.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reconocer algunas propuestas para construir ambientes de respeto y armonía ante las diversas formas de ser hombre.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Lee el tríptico <a href="<?php echo PATH_DOCS . 'u1t4-lectura_UnAsuntoDeHombresLasMasculinidades.pdf'; ?>" target="_blank">"Un asunto de hombres: las masculinidades"</a> de la Comisión Nacional de los Derechos Humanos.</li>
        <li>Posteriormente, responde el cuestionario sobre la lectura.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a3', "Un asunto de hombres: las masculinidades.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
