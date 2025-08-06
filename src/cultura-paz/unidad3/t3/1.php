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
    <h2>Pensamiento crítico y toma de decisiones éticas</h2>
    <p>Uno de los aportes más relevantes del enfoque de cultura de paz es la <strong>resolución de conflictos</strong> de manera pacífica. En este sentido, el pensamiento crítico y la toma de decisiones éticas se reconocen como herramientas fundamentales para una convivencia pacífica. <strong>El pensamiento crítico</strong> permite analizar los conflictos más allá de las apariencias, cuestionar supuestos, identificar causas profundas y valorar las distintas perspectivas. Esta habilidad fomenta la autonomía moral y la responsabilidad ciudadana.</p>
    <p>Resolveremos la actividad basándonos en los conceptos vistos en la lectura y los videos anteriores.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u1t1p03-autoconocimiento.webp');
        ?>
    </div>
    <p>A continuación realizaremos un breve ejercicio con el cual te ayudará a conocerte, recuerda no hay respuestas correctas o incorrectas sólo sé honesto y honesta.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Descarga el formato: <a href="<?php echo PATH_DOCS . 'act-1-cuadro-trabajo-conociendome-mejor.docx'; ?>" target="_blank">act-1-cuadro-trabajo-conociendome-mejor</a>.</li>
        <li>Responde las preguntas de la tabla.</li>
        <li>Guarda tu archivo y súbelo.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a1', "Cuadro de trabajo: Conociéndome mejor.", $ActividadContent);
    ?>
    <p class="mt-16">A continuación, te pedimos que leas el siguiente texto, el cual incluye todos los conceptos que se revisarán en la unidad.</p>
    <div class="w-4/5 mx-auto mt-6 bg-orange-300 rounded-xl p-1">
        <p class="text-white text-center"><a class="text-orange-700" href="https://gamma.app/docs/Identidad-y-empatia-claves-para-el-desarrollo-personal-y-la-convi-up729z7unzksfhx?mode=present#card-u0bboohguoxme2l" target="_blank">Identidad y empatía: claves para el desarrollo personal y la convivencia.</a></p>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>