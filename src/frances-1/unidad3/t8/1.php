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
    <h2>Les caractéristiques physiques</h2>
    <h3>Las características físicas</h3>
    <p>Enseguida tienes una ficha de vocabulario para poder describir a una persona.</p>
    <div class="grid grid-cols-5 gap-2">
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Ètre (je suis… / Il/Elle est…)</div>
        <div class="col-start-2 bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-07-se-reveiller.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Blanc / blanche</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-08-se-lever.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Brun / brune</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-09-se-doucher.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Noir / noire</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-cyan-500 text-white p-1">Les cheveux</div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-12-se-brosser-dents.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux longs // mi- longs // courts</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-13-se-coiffer.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux Raides // Frisés // Bouclés // Ondulés</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-14-se-maquiller.webp');
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
            renderImage('fr1u2a2p5-22-dejeuner-manger.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Être Roux (Rousse)</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-23-faire-devoirs.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux blancs</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-24-faire-courses.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Être Chauve</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-25-ranger-les-affaires.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les cheveux teints en…</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-26-faire-menage.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir de dreadlocks</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Les yeux (Avoir les yeux…)</div>
        <div class="col-start-1 bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-17-aller-travail.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bleus</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-18-arriver-travail.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Gris</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-19-travailler.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Verts</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-20-etudier.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Noirs</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-21-retourner-rentre.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Marron</p>
        </div>
        <div class="col-start-1 bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-17-aller-travail.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Clairs // Foncés</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-18-arriver-travail.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Vairons</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-19-travailler.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des grands yeux // Avoir des petits yeux</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-20-etudier.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Ronds</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-21-retourner-rentre.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bridés</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-cyan-500 text-white p-1">Les sourcils (Avoir les sourcils---)</div>
        <div class="col-start-2 bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-22-dejeuner-manger.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Épais</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-23-faire-devoirs.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Fins</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-24-faire-courses.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Bien dessinés</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Le nez (Avoir le nez…)</div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-27-faire-sieste.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Épaté</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-28-se-recontrer.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Retroussé</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-29-faire-sport.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un gros nez // Avoir un petit nez</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-30-ecouter-musique.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un nez long</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-31-naviguer-ordinateur.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un nez court</p>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-2 mt-2">
        <div class="col-span-6 font-bold text-center bg-cyan-500 text-white p-1">Le visage (J'ai le visage… / Il/Elle a le visage…)</div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-32-reseaux-socieux.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Rond</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-33-jouer-console.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Ovale</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-34-promener-chien.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Carré</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-35-regarder-tele.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Triangulaire</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-36-lire.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Rectangulaire</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-36-lire.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Allongé</p>
        </div>
        <div class="col-start-2 bg-blue-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-36-lire.webp');
            ?>
            <p class="text-blue-700 text-center leading-none">Porter la barbe</p>
        </div>
        <div class="bg-blue-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-36-lire.webp');
            ?>
            <p class="text-blue-700 text-center leading-none">Porter la moustache</p>
        </div>
        <div class="bg-blue-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-36-lire.webp');
            ?>
            <p class="text-blue-700 text-center leading-none">Porter des lunettes</p>
        </div>
    </div>
    <div class="grid grid-cols-5 gap-2 mt-2">
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">Les lèvres</div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-37-diner.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir de lèvres fines / minces</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-38-se-mettre-pyjama.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir de grosses lèvres</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-39-aller-lit.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des petites lèvres</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-40-sendormir.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des lèvres pulpeuses /charnues</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-41-dormir.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir une grande bouche</p>
        </div>
        <div class="col-span-5 font-bold text-center bg-cyan-500 text-white p-1">Les oreilles</div>
        <div class="col-start-2 bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-22-dejeuner-manger.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir des grandes oreilles</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-23-faire-devoirs.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir des petites oreilles</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-24-faire-courses.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Avoir les oreilles décollées</p>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-2 mt-2">
        <div class="col-span-6 font-bold text-center bg-purple-500 text-white p-1">Les traits particuliers</div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-07-se-reveiller.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un grain de beauté</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-07-se-reveiller.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des taches de rousseur</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-07-se-reveiller.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir un double menton</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-07-se-reveiller.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des cernes</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-07-se-reveiller.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Avoir des rides</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u2a2p5-07-se-reveiller.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Être joufflu(e)</p>
        </div>
    </div>







    <p class="mt-10">Observa que la mayoría de los verbos del vocabulario son terminados en -er (regulares) y que se conjugan igual que "appeler", sin embargo hay otros que no tienen esa terminación (que son irregulares) y que tienes que aprenderte de memoria, como el verbo "faire" que ya conoces.</p>

    <?= TabsComponent([
        'tabs' => [
            [
                'id' => 'prendre',
                'label' => 'Prendre',
                'content' =>
                '<ul class="list-none bg-sky-200/40 p-2">
  <li>Je prends</li>
  <li>Tu prends</li>
  <li>Il, elle, on prend</li>
  <li>Nous prenons</li>
  <li>Vous prenez</li>
  <li>Ils, elles prennent</li>
</ul>'
            ],
            [
                'id' => 'sortir',
                'label' => 'Sortir',
                'content' =>
                '<ul class="list-none bg-teal-100/40 p-2">
  <li>Je sors</li>
  <li>Tu sors</li>
  <li>Il, elle, on sort</li>
  <li>Nous sortons</li>
  <li>Vous sortez</li>
  <li>Ils, elles sortent</li>
</ul>'
            ],
            [
                'id' => 'aller',
                'label' => 'Aller',
                'content' =>
                '<ul class="list-none bg-sky-200/40 p-2">
  <li>Je vais</li>
  <li>Tu vas</li>
  <li>Il, elle, on va</li>
  <li>Nous allons</li>
  <li>Vous allez</li>
  <li>Ils, elles vont</li>
</ul>'
            ],
            [
                'id' => 'faire',
                'label' => 'Faire',
                'content' =>
                '<ul class="list-none bg-teal-100/40 p-2">
  <li>Je fais</li>
  <li>Tu fais</li>
  <li>Il, elle, on fait</li>
  <li>Nous faisons</li>
  <li>Vous faites</li>
  <li>Ils, elles font</li>
</ul>'
            ],
            [
                'id' => 'lire',
                'label' => 'Lire',
                'content' =>
                '<ul class="list-none bg-sky-200/40 p-2">
  <li>Je lis</li>
  <li>Tu lis</li>
  <li>Il, elle, on lit</li>
  <li>Nous lisons</li>
  <li>Vous lisez</li>
  <li>Ils, elles lisent</li>
</ul>'
            ],
            [
                'id' => 'mettre',
                'label' => 'Mettre',
                'content' =>
                '<ul class="list-none bg-teal-100/40 p-2">
  <li>Je mets</li>
  <li>Tu mets</li>
  <li>Il, elle, on met</li>
  <li>Nous mettons</li>
  <li>Vous mettez</li>
  <li>Ils, elles mettent</li>
</ul>'
            ],
            [
                'id' => 'dormir',
                'label' => 'Dormir',
                'content' =>
                '<ul class="list-none bg-sky-200/40 p-2">
  <li>Je dors</li>
  <li>Tu dors</li>
  <li>Il, elle, on dort</li>
  <li>Nous dormons</li>
  <li>Vous dormez</li>
  <li>Ils, elles dorment</li>
</ul>'
            ],
        ],
    ]) ?>
    <p class="mt-10">Es momento de practicar lo aprendido, resuelve el siguiente ejercicio.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regarde cette vidéo et coche la réponse correcte / Mira este video y marca la respuesta correcta.</li>
    </ol>
    <div class="max-w-xl mx-auto bg-violet-700/40 p-4">
        <?php
        renderVideoIframe('HhHjxXG6slo', 'Décrivez votre Journée | La Vie Quotidienne | Describe your Daily Routine in French Daily Life');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t8a24', "La Vie Quotidienne", $ActividadContent);
    ?>
    <div class="bg-purple-400/40 mt-10 py-4">
        <p class="text-purple-700 font-bold text-lg text-center">Pour aller plus loin – Conecteurs logiques de séquence.</p>
        <p class="">Cuando estás describiendo lo que haces en el día a día, vas a encadenar una serie de acciones en un orden cronológico. Se podrían hacer las frases sueltas como si estuvieras haciendo una lista, pero, si te fijaste bien en el video, Charlotte intercala algunas palabras al inicio de sus frases para darle continuidad y coherencia a lo que está diciendo. Ella usa mucho la palabra <strong>après</strong>, que quiere decir "después" o <strong>après ça</strong> (después de eso).</p>
        <p class="mt-4">Entre los conectores lógicos (así se llaman esas palabras que encadenan las ideas para que lo que dices no parezca solo una enumeración), vamos a tener:</p>
        <ul class="list-none leading-none mt-4">
            <li><strong>D'abord</strong> -> Para comenzar</li>
            <li><strong>Après</strong> -> Después</li>
            <li><strong>Après ça</strong> -> Después de eso</li>
            <li><strong>Puis</strong> -> Entonces (con el sentido de una acción que sigue a otra)</li>
            <li><strong>Ensuite</strong> -> En seguida</li>
            <li><strong>Un peu plus tard</strong> -> Un poco más tarde</li>
            <li><strong>Pour finir</strong> -> Para terminar</li>
            <li><strong>Avant</strong> -> antes</li>
            <li><strong>Avant ça</strong> -> Antes de eso</li>
        </ul>
    </div>
    <p class="mt-10">Observa esta tabla:</p>
    <table class="table-auto w-full">
        <thead class="bg-violet-300/50">
            <tr>
                <th class="p-2 border align-middle bg-violet-700 text-white font-bold">Se doucher</th>
                <th class="p-2 border align-middle text-violet-700">Frase negativa</th>
                <th class="p-2 border align-middle bg-violet-700 text-white font-bold">Prendre</th>
                <th class="p-2 border align-middle text-violet-700">Frase negativa</th>
            </tr>
        </thead>
        <tbody class="bg-violet-300/30">
            <tr>
                <td class="px-3 py-2 border align-middle text-violet-700">Je me douche</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Je ne me douche pas</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Je prends</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Je ne prends pas</td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-violet-700">Tu te douches</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Tu ne te douches pas</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Tu prends</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Tu ne prends pas</td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-violet-700">Il se douche</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Il ne se douche pas</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Il prend</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Il ne prend pas</td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-violet-700">Nous nous douchons</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Nous ne nous douchons pas</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Nous prenons</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Nous ne prenons pas</td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-violet-700">Vous vous douchez</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Vous ne vous douchez pas</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Vous prenez</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Vous ne prenez pas</td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-violet-700">Ils se douchent</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Ils ne se douchent pas</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Ils prennent</td>
                <td class="px-3 py-2 border align-middle text-violet-700">Ils ne prennent pas</td>
            </tr>
            <tr>
                <td colspan="2" class="px-3 py-2 border align-middle text-violet-700">Louise se douche à 6h du matin</td>
                <td colspan="2" class="px-3 py-2 border align-middle text-violet-700">Je prends le petit déjeuner avec ma famille</td>
            </tr>
        </tbody>
    </table>
    <p class="mt-10"> Recuerda que cuando tienes un verbo pronominal, es decir que la acción recae en el sujeto que la realiza (son los verbos que al infinitivo, en español, terminan por -se, como bañarse o vestirse y que en francés comienza el infinitivo por se), vas a tener que utilizar los pronombres reflexivos <strong>me, te, se, nous, vous</strong> y <strong>se</strong>, antes del verbo conjugado.</p>
    <p>También observa que al hacer la frase negativa, en los verbos pronominales, la partícula "ne" va antes del pronombre reflexivo y la partícula "pas" va después del verbo conjugado.</p>
    <p>No olvides que la terminación -ent de *ils" et "elles" nunca se pronuncia.</p>
    <p class="mt-10">Repasemos algunos elementos importantes.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Écris le verbe entre parenthèses conjugué au présent. Fais attention au sujet de la phrase. (Attention aux majuscules et au minuscules, à l'orthographe et aux accents) : / Escribe el verbo entre paréntesis conjugado en presente. Ten cuidado con el sujeto de la oración. (Presta atención a las mayúsculas y minúsculas, la ortografía y los acentos).</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t8a25', "Conjugué au présent", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>