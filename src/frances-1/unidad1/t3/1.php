<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>L'alphabet</h2>
    <h3>El alfabeto</h3>
    <div class="flex justify-center gap-6">
        <div class="w-1/3 sm:full">
            <p>El alfabeto en francés tiene muchas similitudes con el alfabeto en español. Sin embargo, hay algunos sonidos que debemos tener en cuenta para pronunciar correctamente.</p>
            <p>Mira y escucha este vídeo para que aprendas los nombres de las letras en francés.</p>
        </div>
        <div class="w-2/3 sm:full">
            <?php
            renderImage('fr1u1a1p3-alphabet.webp', 'Imagen de tabla con el alfabeto', 'https://hablamossle.com/como-pronunciar-el-alfabeto-frances/', 'Hablamossle');
            ?>
        </div>
    </div>
    <div class="max-w-xl mx-auto bg-purple-700/30 p-4 mt-8">
        <?php
        renderVideoIframe('TOezwV5Xa4w', 'Learn French. Pronunciation: French alphabet -l alphabet français-');
        ?>
    </div>
    <p>Ahora, es importante que aprendas a deletrear en francés. Para ello ve el siguiente video y practica con los ejemplos que te proponen antes de pasar a los siguientes ejercicios.</p>
    <div class="max-w-xl mx-auto bg-blue-700/30 p-4">
        <?php
        renderVideoIframe('JJMv8QGhJlo', 'Épeler');
        ?>
    </div>
    <p>Como viste, existen algunos signos ortográficos importantes que debes retener como los acentos (accent aigu, accent grave, accent circonflèxe y trema), la c cédille (ç) y signos como l’apostrophe (‘) o el trait d’union (-). Para deletrear las palabras que llevan acento, debes de decir la letra e inmediatamente después indicar el tipo de acento. Por otra parte, cuando tengas dos letras seguidas que son iguales, vas a decir “deux” antes de la letra (es decir, dos y luego la letra).</p>
    <?php ob_start(); ?>
    <p>Escucha las palabras de los audios y escríbelas. Empieza cada palabra con mayúscula y luego con minúsculas y no olvides los acentos que se te indican.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t3a7', "Épeler", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>