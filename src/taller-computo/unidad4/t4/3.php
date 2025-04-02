<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Importancia de la difusión de archivos Multimedia</h3>
        <p>Realiza la siguiente lectura e identifica las ideas principales.</p>
        <p>La difusión de archivos multimedia en Internet es fundamental en la sociedad actual por varias razones:</p>
        <ol class="ol-number">
            <li><span class="text-pink-600 font-bold">Alcance Global:</span> Internet permite llegar a una audiencia global en cuestión de segundos, lo que brinda la oportunidad de compartir ideas, creaciones y conocimientos con personas de todo el mundo.</li>
            <li><span class="text-pink-600 font-bold">Comunicación Visual y Atractiva:</span> Los archivos multimedia, como imágenes, videos y audios, son más atractivos y efectivos para transmitir información y emociones en comparación con el texto plano.
                <div class="max-w-2xl mx-auto my-4">
                    <?php renderImage('u4_t4_news.jpg', '<em>Importancia de difundir</em>. Imagen de Vectorjuice.', 'https://www.freepik.com/free-vector/social-media-news-tips-abstract-concept-illustration-social-media-marketing-algorithm-news-promote-profile-engagement-tips-latest-updates-content-advice_10783951.htm#page=3&query=multimedia%20importante&position=0&from_view=search&track=ais', 'Freepik.', 'justify-center') ?>
                </div>
            </li>
            <li><span class="text-pink-600 font-bold">Promoción y Marca Personal:</span> La difusión de contenido multimedia en línea puede servir para promocionar productos, servicios o habilidades personales, y construir una marca personal sólida.</li>
            <li><span class="text-pink-600 font-bold">Educación y Aprendizaje:</span> La difusión de contenido multimedia facilita la educación en línea, permitiendo a los usuarios aprender a su propio ritmo y desde cualquier lugar.</li>
            <li><span class="text-pink-600 font-bold">Creatividad y Expresión:</span> Los archivos multimedia permiten a las personas expresar su creatividad de formas diversas, desde la producción de videos hasta la creación de arte digital.</li>
            <li><span class="text-pink-600 font-bold">Colaboración y Compartir Experiencias:</span> La difusión en línea fomenta la colaboración entre personas con intereses comunes, lo que puede enriquecer el aprendizaje y la experiencia.</li>
            <li><span class="text-pink-600 font-bold">Documentación y Preservación:</span> Compartir archivos multimedia en línea puede servir para documentar eventos, experiencias y momentos importantes, preservándolos para el futuro.</li>
        </ol>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>