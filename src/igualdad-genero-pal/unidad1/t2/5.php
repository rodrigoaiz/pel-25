<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Relevancia del feminismo y desarrollo del feminismo en México</h2>
    <p>Para profundizar en la relevancia que ha tenido el feminismo a nivel mundial y en México en particular, vamos a revisar dos videos más. En el primero, retomarás la historia de la lucha feminista y revisarás algunas de las injusticias a las que se han enfrentado las mujeres a lo largo de la historia de la humanidad. Asimismo, reconocerás algunas de las desigualdades de género actuales y porqué el feminismo continúa vigente.</p>
    <p>Mientras revisas el video identifica la siguiente información y toma notas en tu cuaderno respecto a lo siguiente:</p>
    <ul class="ul-disc">
        <li>¿Qué ideas se tenían en el pasado acerca de las mujeres?</li>
        <li>¿Qué personajes han cuestionado los estereotipos y roles de género a lo largo de la historia? ¿Qué sucedió con estos personajes?</li>
        <li>¿Qué desigualdades de género continúan vigentes?</li>
        <li>¿Por qué es importante la lucha por la igualdad de género en nuestra sociedad?</li>
    </ul>
    <p>Te recomendamos hacer pausas al video cuando lo consideres necesario, así como <strong>verlo al menos en dos ocasiones</strong>. Una vez que te sientas preparada (o), resuelve el siguiente ejercicio. Sólo tienes un intento para responder.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('hL1VUOOGWFw', '¿Qué exigen las feministas?');
        ?>
    </div>
    <p><strong>Propósito</strong></p>
    <p>Identificar las razones por las que surge el movimiento feminista, su evolución y su vigencia.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number mb-8">
        <li>Para cada uno de los siguientes enunciados, elige <strong>V</strong> si la afirmación es Verdadera o <strong>F</strong> si es Falsa.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a3', "Video - Relevancia del feminismo", $ActividadContent);
    ?>

    <p class="mt-10">En este segundo video revisarás un panorama general de la lucha feminista en México. Mientras revisas el video <strong>toma notas en tu cuaderno</strong> de fechas y acontecimientos importantes. Posteriormente, resuelve el ejercicio que se te presenta. Sólo tienes un intento para responder.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('AQ03QPoGH7o', 'Historia del feminismo en México');
        ?>
    </div>
    <p><strong>Propósito</strong></p>
    <p>Identificar de manera general los antecedentes de la lucha feminista en México.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number mb-8">
        <li>Relaciona la fecha o periodo con el evento o eventos de la historia del feminismo en México.</li>
        <li>Escribe la respuesta correcta.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a4', "Video - Antecedentes de la lucha feminista en México", $ActividadContent);
    ?>
</section>
<?php ob_start(); ?>
<ul class="ul-disc">
    <li><a href="<?php echo PATH_DOCS . 'u1t2-feminismo-para-principiantes.pdf'; ?>" target="_blank">Feminismo para principiantes</a>, de Nuria Varela y Antonia Santolaya.</li>
    <li><a href="https://repositorio-uapa.cuaed.unam.mx/repositorio/moodle/pluginfile.php/2854/mod_resource/content/1/UAPA-Movimiento-Feminista-Mexico-Lucha-Permanente-Contra-Violencia-Genero/index.html" target="_blank">El movimiento feminista en México, una lucha permanente contra la violencia de género</a> de Alma Rosa Sánchez, Diana Hernández y Mariana Bucio.</li>
</ul>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent);
?>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>