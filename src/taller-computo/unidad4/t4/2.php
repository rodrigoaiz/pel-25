<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>Te invito a que revises el siguiente video, donde identificarás la importancia de difundir, publicar o compartir archivos multimedia en Internet, así como las actividades que realizamos para lograr el aprendizaje.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('01aKfElSx2c', 'Presentación del Aprendizaje "Difunde, publica o comparte archivos multimedia en Internet".');
        ?>
    </div>
    <p><strong>Introducción</strong></p>
    <p>En esta era digital, para comunicarnos, ofrecer algún producto, realizar exposiciones académicas, entre otras actividades, el contenido multimedia es un buen apoyo, ya que, con una sola imagen puedes compartir muchas situaciones, además de diversas emociones, etc., un audio nos permite explayar nuestra imaginación, recordar, etc., un video permite explicar, aprender, conocer, etc., todos estos tipos de archivos tienen una alta demanda en la actualidad.</p>
    <div class="max-w-4xl mx-auto my-8">
        <?php renderImage('u4_t4_social_media.webp', 'Imagen de geralt.', 'https://pixabay.com/es/illustrations/medios-de-comunicaci%C3%B3n-social-3758364/', 'Pixabay.', 'justify-center') ?>
    </div>
    <p>Algo que debemos de tomar en cuenta para crear contenido multimedia, es que debe ser significativo y por tanto relevante, ello nos permite compartirlo y por ende difundirlo e identificar con base al tema en que plataforma se debe de difundir. Por ello es importante explorar algunas de las plataformas y que se adapten a nuestras necesidades de distribuir nuestro contenido referente a una temática específica.</p>
    <p>Aunado a lo anterior, el contenido multimedia debe enriquecer y hacer más atractivo todo aquel material que pueda ser relevante para un potencial consumidor, dado que la gran mayoría están acostumbrados a “diseccionar” las páginas web para encontrar la información que están buscando. Está comprobado que en las webs que contienen recurso de apoyo multimedia, los usuarios permanecen más tiempo, ya que resulta más atractivo, interactivo y dinámico que el texto plano. (Segarra. 2014). </p>
    <div class="max-w-3xl mx-auto my-8">
        <?php renderImage('u4_t4_journalist.webp', 'Imagen de pch.vector.', 'https://www.freepik.com/free-vector/female-journalist-with-microphone-interviewing-man_9649774.htm', 'Freepik.', 'justify-center') ?>
    </div>
    <div class="max-w-3xl mx-auto my-4">
        <div class="rounded-md bg-lime-600/60 p-4 text-teal-950">
            <p class="text-center">Seguro que tienes muchas preguntas o simplemente te has acordado de las actividades que realizas cuando compartes tus publicaciones, entonces te invito a realizar la siguiente actividad</p>
            <p class="text-center"><a href="https://es.educaplay.com/recursos-educativos/16043394-comparte_y_difunde.html" target="_blank">¿Qué conoces?</a></p>
            <div class="grid justify-items-center"><img src="<?php echo PATH_ICONS . 'manita.svg' ?>" alt="icono" class=""> </div>
            </div>
        </div>
        <p><em>Como habrás notado, es importante identificar cuál es tu objetivo al difundir, publicar o compartir tus archivos multimedia en Internet, así mismo en que plataforma vas a compartir dicha información.</em></p>
        <div class="max-w-2xl mx-auto my-4">
            <?php renderImage('u4_t4_question.webp', 'Imagen de Storyset.', 'https://www.freepik.com/free-vector/curiosity-people-concept-illustration_30576696.htm', 'Freepik.', 'justify-center') ?>
        </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
