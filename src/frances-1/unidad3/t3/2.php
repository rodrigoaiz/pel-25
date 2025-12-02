<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Des activités et loisirs que tu adoreras peut-être</h2>
    <h3>¡Algunas actividades y pasatiempos que quizás te encanten!</h3>
    <p>Además de saber conjugar correctamente esos verbos, para poder decir que te gusta o que no te gusta, necesitas un poco de vocabulario sobre los pasatiempos y sobre algunas cosas que te pueden gustar o no. En la tabla siguiente están las actividades y los verbos relacionados a esas actividades.</p>
    <div class="grid grid-cols-3 md:grid-cols-5 gap-2">
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">La télé / les séries de télévision (regarder)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le cinéma (aller) / Les films (regarder)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">La musique (écouter)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">La photographie (prendre/ faire des photos)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le théâtre (aller au théâtre)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Les jeux-vidéo (Jouer aux jeux-vidéo)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">La danse (danser)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Las voyages (voyager)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">L'informatique</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">La lecture (lire)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Faire du sport</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le dessin (dessiner)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Les animaux</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Les mangas</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Les échecs</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Les jeux de société</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">La peinture (peindre)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">La promenade (se promener)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Se reposer</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Faire du shopping</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Camper / Faire du camping</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Se bronzer</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">La plage (aller à la plage)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">La montagne (aller à la montagne)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Aller/partir en vacances</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Le musée (aller au musée)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Jouer un instrument de musique</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">La guitare (jouer/faire de la guitare)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Les concerts (aller à un concert)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Sortir / être avec des amis</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le football (faire du foot)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le basketball (faire du basket)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le football américain (faire du football américain)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le baseball (faire du baseball)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">La natation (faire de la natation /nager)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Chanter</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Dormir</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">La nourriture (manger)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Cuisiner /Faire de la cuisine</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Écrire</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Les réseaux sociaux (aller sur les réseaux sociaux)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le chat (tchatcher / chater)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Les insectes</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Le chocolat (blanc, au lait, noir)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Les serpents</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Les araignées</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Le froid</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">La chaleur</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Être malade</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Le bruit</p>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>