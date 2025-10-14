<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Description Physique</h2>
    <h3>La descripción física</h3>
    <p>Para describir a una persona, necesitamos decir cómo es físicamente: si es alta o bajita, su color de ojos y de cabello, etc. </p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lis le texte et fais glisser les mots pour compléter les phrases qui te donneront des indications sur la façon de faire une description physique / Lee el texto y arrastra las palabras para completar las frases que te van a dar indicaciones de como hacer una descripción física.</li>
    </ol>
    <div class="bg-sky-700/20 px-8 py-4 my-6 shadow-xl">
        <div class="mb-6">
            <p class="font-bold text-sky-900 text-center text-3xl">Canton de Fribourg: Avez-vous vu cet homme?</p>
            <p class="font-mono text-right text-sky-800">Publié 15 avril 2023, 15:19</p>
        </div>

        <div class="grid grid-cols-4 gap-6">
            <div class="col-span-1 mt-10">
                <?php
                renderImage('u3t7p1-img1-canton-de-friburgo.webp');
                ?>
            </div>

            <div class="col-span-3">
                <p class="font-bold text-sky-800 text-2xl mb-2">CANTON DE FRIBOURG:</p>
                <p class="font-bold text-sky-800 mb-4">Avez-vous vu cet homme?</p>

                <div class="space-y-3">
                    <p>Âgé de 52 ans, Oder W. a disparu depuis jeudi. La police lance un appel à témoins.</p>
                    <p>Un homme de 52 ans, Oder W., a disparu à Fribourg (FR) jeudi, vers 15h. Mandatée par sa famille, la police lance un appel à témoins pour le retrouver.</p>
                    <p>Domicilié à Morcote (LU), l'homme, qui s'exprime en suisse-allemand, mesure 163 cm, est de corpulence mince, a les yeux bruns, les cheveux mi-longs bruns sur les côtés et est chauve sur le dessus.</p>
                    <p>Il porte des lunettes, une moustache et une barbichette, une veste à capuchon, un bandana bleu, un pantalon foncé et un short bleu par-dessus.</p>
                    <p>La police demande à toute personne pouvant apporter des renseignements de la contacter au 026 304 17 17 ou de se rendre au poste de police le plus proche.</p>
                    <p class="mt-4 text-sm">(source/bvb)</p>
                    <p class="mt-4 text-sm">Article pris de: https://www.20min.ch/fr/story/avez-vous-vu-cet-homme-179344765056</p>
                </div>
            </div>
        </div>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t7a14', "Avez-vous vu cet homme?", $ActividadContent);
    ?>
    <div class="flex justify-center gap-4 mt-8">
        <div class="w-1/3 md:w-1/3 bg-rose-500/30 px-6 py-4 shadow-xl">
            <p class="font-bold text-rose-700 text-xl mb-2">Porter</p>
            <ul class="list-none">
                <li class="text-rose-700">Je porte</li>
                <li class="text-rose-700">Tu portes</li>
                <li class="text-rose-700">Il, elle, on porte</li>
                <li class="text-rose-700">Nous portons</li>
                <li class="text-rose-700">Vous portez</li>
                <li class="text-rose-700">Ils, elles portent</li>
            </ul>
        </div>
        <div class="w-1/3 md:w-1/3 bg-indigo-500/30 px-6 py-4 shadow-xl">
            <p class="font-bold text-indigo-800 text-xl mb-2">Avoir</p>
            <ul class="list-none">
                <li class="text-indigo-800">J'ai</li>
                <li class="text-indigo-800">Tu as</li>
                <li class="text-indigo-800">Il, elle, on a</li>
                <li class="text-indigo-800">Nous avons</li>
                <li class="text-indigo-800">Vous avez</li>
                <li class="text-indigo-800">Ils, elles ont</li>
            </ul>
        </div>
        <div class="w-1/3 md:w-1/3 bg-rose-500/30 px-6 py-4 shadow-xl">
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
    </div>
</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>