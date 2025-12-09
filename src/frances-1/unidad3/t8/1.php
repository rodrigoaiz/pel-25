<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Les habits</h2>
    <h3>La ropa</h3>
    <p>A veces, cuando describes a una persona, debes de indicar cómo está vestida.</p>

    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regarde la vidéo et selectionne les habits que l'on mentionne dans la chanson. / Mira el video y selecciona la ropa que se menciona en la canción. Ten cuidado con la ortografía de las palabras (acentos, mayúsculas y minúsculas).</li>
    </ol>
    <div class="max-w-xl mx-auto bg-green-200/80 p-4">
        <?php
        renderVideoIframe('gqtEoTQaRxs', 'Comptines pour Apprendre les Habits');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t8a16', "Les Habits", $ActividadContent);
    ?>
    <p>Aquí abajo tienes un vocabulario con más ropa y con accesorios que van a servirte para hacer descripciones más completas:</p>


    <div class="grid grid-cols-5 gap-2">
        <div class="col-span-5 font-bold text-center bg-rose-500 text-white p-1">Les habits / les vêtements</div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_01.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le bas / Le collant</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_02.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La chaussette</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_03.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La culotte (femme)</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_04.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le slip (homme)</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_05.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le soutien-gorge</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_06.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le pyjama</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_07.webp');
            ?>
            <p class="text-green-700 text-center leading-none">La robe</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_08.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le pantalon</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_09.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Les joggings</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_10.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Les shorts</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_11.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Un haut</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_12.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le t-shirt</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_13.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La chemise (homme)</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_14.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le pull-over (le pull)</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_15.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La veste</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_16.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le manteau</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_17.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le sweat-shirt</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_18.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le k-way / L'imperméable</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_19.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le costume</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_20.webp');
            ?>
            <p class="text-green-700 text-center leading-none">La jupe (courte / longue)</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_21.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le maillot de bain</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_22.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le chapeau</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_23.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La casquette</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_24.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le bonnet</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_25.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le foulard</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_26.webp');
            ?>
            <p class="text-green-700 text-center leading-none">L'écharpe</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_27.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Les gants</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_28.webp');
            ?>
            <p class="text-green-700 text-center leading-none">La chaussure</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_29.webp');
            ?>
            <p class="text-green-700 text-center leading-none">La basket</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_30.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le talon/ Un escarpins</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_31.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La botte</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_32.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La sandale</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_33.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La pantoufle</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_34.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La cravate</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_35.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La ceinture</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_36.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le sac</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_37.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Les lunettes (de soleil) (de vue)</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_38.webp');
            ?>
            <p class="text-green-700 text-center leading-none">La boucle d'oreille</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_39.webp');
            ?>
            <p class="text-green-700 text-center leading-none">La montre</p>
        </div>
        <div class="bg-green-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_40.webp');
            ?>
            <p class="text-green-700 text-center leading-none">Le collier</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_41.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le bracelet</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_42.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">La bague</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_43.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le piercing</p>
        </div>
        <div class="bg-rose-500/30 px-4">
            <?php
            renderImage('fr1u3a2p08_44.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Le tatouage</p>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>