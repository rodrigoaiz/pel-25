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
    <h2>Actividad de cierre</h2>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u5t3p01_convivir.webp');
        ?>
    </div>
    <p>Ahora es momento de reflexionar sobre la convivencia, es por ello que como actividad final de esta unidad realizarás en word un breve ensayo de mínimo media página en donde redactes que es para ti el <strong>"Aprender a Convivir"</strong> y en otra página coloca imágenes en forma de collage que ayuden a ilustrar tus ideas. Posteriormente deberás subirlo a la plataforma.</p>

    <p>Para realizar el ensayo revisa el siguiente paso a paso de lo que debes hacer:</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Revisa material sobre la convivencia y el aprender.</li>
        <li>Toma notas para que puedan ayudarte a redactar tu ensayo.</li>
        <li>Comienza a redactar tu ensayo.</li>
        <li>Selecciona las imágenes para tu collage y comienza a armarlo en el mismo documento.</li>
        <li>Una vez terminado tu ensayo y tu collage súbelo a la plataforma.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu ensayo y collage.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u5t3a3', "Aprender a Convivir", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
