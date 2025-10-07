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
    <h2>Pour aller plus loin – Être à l'heure.</h2>
    <h3>Para ir más allá – Llegar a tiempo</h3>
    <p>Cuando estamos hablando de la hora, muchas veces tenemos que indicar si vamos a tiempo, si estamos adelantados o si llevamos retraso y vamos a llegar tarde.</p>

    <div class="flex justify-center gap-4">
        <div class="w-1/3 md:full bg-rose-500/30 px-6 shadow-xl">
            <p class="font-bold text-rose-700 text-xl mb-2 text-center">Adelanto</p>
            <?php
            renderImage('fr1u2a2p4-img04.webp');
            ?>
            <p>Para indicar que se te hizo temprano puedes decir:</p>
            <ul class="list-none">
                <li><span class="text-rose-700 font-bold">Je suis en avance</span> (être en avance -> estar adelantado)</li>
            </ul>
        </div>
        <div class="w-1/3 md:full bg-indigo-500/30 px-6 shadow-xl">
            <p class="font-bold text-indigo-800 text-xl mb-2 text-center">A tiempo</p>
            <?php
            renderImage('fr1u2a2p4-img05.webp');
            ?>
            <p>Para indicar que estas a la hora, dices:</p>
            <ul class="list-none">
                <li><span class="text-indigo-700 font-bold">Je suis à l'heure</span> (être à l’heure -> ir puntual)</li>
            </ul>
        </div>
        <div class="w-1/3 md:full bg-rose-500/30 px-6 shadow-xl">
            <p class="font-bold text-rose-700 text-xl mb-2 text-center">Retraso</p>
            <?php
            renderImage('fr1u2a2p4-img06.webp');
            ?>
            <p>Y si vas a llegar tarde, dices:</p>
            <ul class="list-none">
                <li><span class="text-rose-700 font-bold">Je suis en retard</span> (être en retard -> ir retrasado)</li>
            </ul>
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