<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
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
    <div class="max-w-xl mx-auto bg-cyan-200/80 p-4">
        <?php
        renderVideoIframe('gqtEoTQaRxs', 'Comptines pour Apprendre les Habits');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t9a16', "Les Habits", $ActividadContent);
    ?>




    <div class="grid grid-cols-5 gap-2">
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Ètre (je suis… / Il/Elle est…)</div>
        <div class="col-start-2 bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-02-blanche.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Blanc / blanche</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-03-brune.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Brun / brune</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-04-noire.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Noir / noire</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-cyan-500 text-white p-1">Les cheveux</div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-05-cheveux.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux longs // mi- longs // courts</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-06-cheveux-frise.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux Raides // Frisés // Bouclés // Ondulés</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-07-cheveux-fonces.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Être Brun / brune Avoir les cheveux foncés
            </p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-15-sortir.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Être Blond (blonde)</p>
        </div>

        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-08-roux.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Être Roux (Rousse)</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-09-blancs.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux blancs</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-10-chauve.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Être Chauve</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-11-teints.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux teints en…</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-12-dreadlocks.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir de dreadlocks</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Les yeux (Avoir les yeux…)</div>
        <div class="col-start-1 bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-13-yeux-bleus.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bleus</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-14-yeux-gris.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Gris</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-15-yeux-verts.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Verts</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-15-yeux-noirs.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Noirs</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-17-yeux-marron.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Marron</p>
        </div>
        <div class="col-start-1 bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-18-yeux-clairs-fonces.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Clairs // Foncés</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-19-yeux-vaires.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Vairons</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-19-yeux-grandes-petits.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des grands yeux // Avoir des petits yeux</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-20-yeux-rondes.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Ronds</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-21-yeux-brides.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bridés</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-cyan-500 text-white p-1">Les sourcils (Avoir les sourcils---)</div>
        <div class="col-start-2 bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-22-eapis.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Épais</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-23-fines.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Fins</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-24-bien-dessines.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Bien dessinés</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Le nez (Avoir le nez…)</div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-24-nez-epates.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Épaté</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-25-nez-retrouse.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Retroussé</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-26-gros-nez-petit-nez.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un gros nez // Avoir un petit nez</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-27-nez-long.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un nez long</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-28-nez-court.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un nez court</p>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-2 mt-2">
        <div class="col-span-6 font-bold text-center bg-cyan-500 text-white p-1">Le visage (J'ai le visage… / Il/Elle a le visage…)</div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-29-visage-ronde.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Rond</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-30-visage-ovale.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Ovale</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-31-visage-carre.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Carré</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-32-visage-triangulaire.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Triangulaire</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-33-visage-rectangulaire.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Rectangulaire</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-34-visage-allonge.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Allongé</p>
        </div>
        <div class="col-start-2 bg-blue-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-35-barbe.webp');
            ?>
            <p class="text-blue-700 text-center leading-none">Porter la barbe</p>
        </div>
        <div class="bg-blue-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-36-moustache.webp');
            ?>
            <p class="text-blue-700 text-center leading-none">Porter la moustache</p>
        </div>
        <div class="bg-blue-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-37-lunettes.webp');
            ?>
            <p class="text-blue-700 text-center leading-none">Porter des lunettes</p>
        </div>
    </div>
    <div class="grid grid-cols-5 gap-2 mt-2">
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Les lèvres</div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-38-levres-minces.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir de lèvres fines / minces</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-39-levres-grosses.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir de grosses lèvres</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-40-petites-levres.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des petites lèvres</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-41-pulpeuses-levres.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des lèvres pulpeuses /charnues</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-42-grande-bouche.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir une grande bouche</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-cyan-500 text-white p-1">Les oreilles</div>
        <div class="col-start-2 bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-43-grandes-oreilles.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir des grandes oreilles</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-44-petites-oreilles.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir des petites oreilles</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-45-oreilles-decollees.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les oreilles décollées</p>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-2 mt-2">
        <div class="col-span-6 font-bold text-center bg-purple-500 text-white p-1">Les traits particuliers</div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-46-grain-beaute.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un grain de beauté</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-47-taches-rousseur.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des taches de rousseur</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-48-double-mentonpsd.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un double menton</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-49-cernes.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des cernes</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-50-rides.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des rides</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-51-joufflue.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Être joufflu(e)</p>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-2 mt-2">
        <div class="col-span-6 font-bold text-center bg-cyan-500 text-white p-1">Être</div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-52-grosse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Gros(se)</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-53-mince.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Mince // Fin(e)</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-54-maigre.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Maigre</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-55-laid.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Moche // Laid(e)</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-56-belle.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Beau (bel) / belle</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-57-costaud.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Costaud</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-58-jeune.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Jeune</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-59-vielle.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Vieux (vielle)</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-60-grand.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Grand (e)</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-61-moyenne.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">De taille moyenne</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p03-62-petit.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Petit (e)</p>
        </div>
    </div>

    <p class="mt-10">Con base en la información anterior realiza la siguiente actividad:</p>
    <?php ob_start(); ?>
    <p>Lis la description physique et glisse le texte sur l'image correspondante. / Lee la descripción física y arrastra el texto a la imagen correspondiente.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t8a15', "Description physique", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>