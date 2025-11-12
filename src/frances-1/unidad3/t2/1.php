<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Les professions et les métiers</h2>
    <h3>Las profesiones y ocupaciones</h3>
    <p>Muchas veces, al hablar de la familia (o de nosotros mismos) tenemos que indicar a que nos dedicamos en la vida, que estudiamos o en que trabajamos. A continuación te presentamos un vocabulario con algunas profesiones u oficios.</p>
    <div class="grid grid-cols-3 md:grid-cols-6 gap-2">
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-10travailleur.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un travailleur / Une travailleuse</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-11cordonniere.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) cordonnier (-ère)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-12docteur.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) docteur/Un médecin</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-13vedette.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Une star / Une vedette</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-14etudiant.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) étudiant / Une étudiante</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-15avocate.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) avocat(e)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-16coiffeur.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) coiffeur (-euse)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-17eleve.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) élève</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-18boulanger.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) boulanger (-ère)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-19chanteuse.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) chanteur (-euse)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-20macon.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) maçon (-ne)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-21realisatrice.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) réalisateur (-trice)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-22dentist.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) dentiste</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-23mecanicienne.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) mécanicien (-ne)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-24facteur.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) facteur (-trice)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-25electricienne.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) électricien (-ne)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-26secretaire.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) secrétaire</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-27homme-daffaires.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un homme d'affaires / Une femme d'affaires</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-28pdg-presidente.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) PDG (Président(e)- directeur (-trice) général(e))</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-29dessinateur.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) dessinateur (-trice)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-30couturiere.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) couturier (-ère)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-31jardinier.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) jardinier (-ère)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-32musicienne.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) musicien (-ne)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-33pharmacien.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) pharmacien (-ne)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-34femme-de-menage.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un homme de ménage / Une femme de ménage</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-35sportif.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un sportif / Une sportive</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-36plombier.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un plombier</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-37peintre.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) peintre</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-38chomeur.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) chômeur (-euse)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-39animatrice.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) animateur (-trice) (de télévision / de radio)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-40professeur.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) professeur(e)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-41veterinaire.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) vétérinaire</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-42homme-a-foyer.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un homme au foyer / Une femme au foyer</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-43informaticienne.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) informaticien (-ne)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-44patron-chef.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) chef (-fe) / Un(e) patron (-ne)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-45infirmiere.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un infirmier (-ère)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-46acteur.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) acteur (-trice)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-47comptable.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) comptable</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-48entrenaire.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un entraîneur (-euse) / Un coach</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-49serveuse.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) serveur (-euse)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-50vendeur.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) vendeur (-euse)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-51journaliste.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) journaliste</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-52serrurier.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) serrurier (-ère)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-53traductrice.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) traducteur (-trice)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-54employe.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) employé(e)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-55danseuese.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) danseur (-euse)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-56chimiste.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) chimiste</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-57architecte.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) architecte</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-58commercant.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) commerçant(e)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-59ingenieure.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) ingénieur(e)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-60admnistrateur.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) administrateur (-trice)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-61retraite.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) retraité(e)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-62opticien.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) opticien (-ne)</p>
        </div>
        <div class="bg-violet-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-63ecrivaine.webp');
            ?>
            <p class="text-violet-700 text-center leading-none text-sm">Un(e) écrivain(e)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-64caissier.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) caissier (-ère)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-65bibliothecaire.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) bibliothécaire</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-66chauffeur.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) chauffeur (-euse) (de taxi /de bus / de train)</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-67stagiaire.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) stagiaire</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-68graphiste.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) graphiste</p>
        </div>
        <div class="bg-yellow-500/30 px-6">
            <?php
            renderImage('fr1u3a1p02-69policier.webp');
            ?>
            <p class="text-yellow-700 text-center leading-none text-sm">Un(e) policier (-ère)</p>
        </div>
    </div>
    <p>Los verbos que te pueden servir para indicar una profesión o un oficio son:</p>
    <ul class="list-disc md:ml-32 mb-8">
        <li><span class="text-rose-700 font-bold">Être -></span> Je suis avocate.</li>
        <li><span class="text-indigo-800 font-bold">Faire -></span> Il fait médecin.</li>
        <li><span class="text-rose-700 font-bold">Travailler -></span> Nous travaillons en tant que vendeurs.</li>
    </ul>

    <div class=" flex justify-center gap-4">
        <div class="w-1/3 md:2/3 bg-rose-500/30 px-6 shadow-xl">
            <p class="font-bold text-rose-700 text-xl mb-2">Être</p>
            <ul class="list-none">
                <li class="text-rose-700">Je suis</li>
                <li class="text-rose-700">Tu es</li>
                <li class="text-rose-700">Il, elle, on est</li>
                <li class="text-rose-700">Nous sommes</li>
                <li class="text-rose-700">Vous êtes</li>
                <li class="text-rose-700">Ils, elles sont</li>
            </ul>
        </div>
        <div class="w-1/3 md:2/3 bg-indigo-500/30 px-6 shadow-xl">
            <p class="font-bold text-indigo-800 text-xl mb-2">Faire</p>
            <ul class="list-none">
                <li class="text-indigo-800">Je fais</li>
                <li class="text-indigo-800">Tu fais</li>
                <li class="text-indigo-800">Il, elle, on fait</li>
                <li class="text-indigo-800">Nous faisons</li>
                <li class="text-indigo-800">Vous faites</li>
                <li class="text-indigo-800">Ils, elles font</li>
            </ul>
        </div>
        <div class="w-1/3 md:2/3 bg-rose-500/30 px-6 shadow-xl">
            <p class="font-bold text-rose-700 text-xl mb-2">Travailler</p>
            <ul class="list-none">
                <li class="text-rose-700">Je travaille</li>
                <li class="text-rose-700">Tu travailles</li>
                <li class="text-rose-700">Il, elle, on travaille</li>
                <li class="text-rose-700">Nous travaillons</li>
                <li class="text-rose-700">Vous travaillez</li>
                <li class="text-rose-700">Ils, elles travaillent</li>
            </ul>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>