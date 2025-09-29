<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Ma routine</h2>
    <h3>Mi rutina</h3>
    <p>Además de ir a la escuela, entre semana realizamos otras actividades que forman parte de nuestra rutina y se hacen en casa o en otros espacios, como comer, bañarnos, ir a clases de natación, etc. Aquí tienes un pequeño vocabulario sobre las cosas que hacemos en el día a día:</p>
    <div class="grid grid-cols-5 gap-2">
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se réveiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se lever</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se doucher</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">S'habiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Prendre le petit-déjeuner</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se réveiller</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se lever</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se doucher</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">S'habiller</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Prendre le petit-déjeuner</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se réveiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se lever</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se doucher</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">S'habiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Prendre le petit-déjeuner</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se réveiller</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se lever</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se doucher</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">S'habiller</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Prendre le petit-déjeuner</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se réveiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se lever</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Se doucher</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">S'habiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-rose-700 text-center leading-none">Prendre le petit-déjeuner</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se réveiller</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se lever</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Se doucher</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">S'habiller</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="font-bold text-emerald-700 text-center leading-none">Prendre le petit-déjeuner</p>
        </div>
    </div>
</section>
<?php ob_start(); ?>
<section>
    <p>La puntualidad es extremadamente importante en Europa. En Suiza, por ejemplo, en cualquier caso, debes de llegar exactamente a la hora en la que quedaste de verte con la gente o, si vas retrasado, comunicarte para decir que vas a llegar más tarde. Si no lo haces, las personas se van a preocupar mucho por tu ausencia y van a pensar que te ocurrió algo o, en el mejor de los casos, van a irse después de haber esperado 5 minutos.</p>
    <p>En Francia ocurre lo mismo cuando tienes citas para verte con alguien fuera de casa o para alguna cita de negocios o de doctor. ¡Se debe de llegar a la hora!</p>
    <p>Si la cita que tienes con algún francés es para ir a su casa, debes de llegar 15 minutos después de la hora indicada (pero no más). Son los 15 minutos de cortesía para dejar a los anfitriones el tiempo de terminar de prepararse o de tomar un respiro después de haber organizado la comida o la cena y haber recogido la casa para recibir a los invitados.</p>
    <p>Recuerda que la puntualidad es una señal de respeto hacia las personas que te rodean porque, al no ser puntual, estás haciendo uso de un tiempo que no es tuyo. No sabes si la gente con las que te vas a encontrar tiene otras ocupaciones después de estar contigo.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Sais-tu que... ?");
?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>