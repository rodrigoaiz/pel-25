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
    <h2>Ma routine</h2>
    <h3>Mi rutina</h3>
    <p>Además de ir a la escuela, entre semana realizamos otras actividades que forman parte de nuestra rutina y se hacen en casa o en otros espacios, como comer, bañarnos, ir a clases de natación, etc. Aquí tienes un pequeño vocabulario sobre las cosas que hacemos en el día a día:</p>
    <p class="font-bold text-center bg-rose-500 text-white p-1">Activités quotidiennes</p>
    <div class="grid grid-cols-5 gap-2">
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Se réveiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Se lever</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Se doucher</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">S'habiller</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Prendre le petit-déjeuner</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Se brosser / se laver les dents</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Se coiffer / Se brosser les cheveux</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Se maquiller</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Sortir</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Prendre le bus / la voiture / le métro / le taxi</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Aller à l'école / au travail</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Arriver à l'école / au travail</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Travailler</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Étudier</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Retourner / rentrer à la maison</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Déjeuner /manger à midi</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Faire les devoirs</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Faire les courses</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Ranger les affaires</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Faire le ménage</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Faire une sieste / une somme</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Se rencontrer avec des amis</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Faire du sport</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Écouter de la musique</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Naviguer / Surfer sur l'ordinateur</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Tchatcher / aller sur les réseaux sociaux</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Jouer à la console</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Promener/ Sortir le chien</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Regarder la télé</p>
        </div>
        <div class="bg-emerald-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-emerald-700 text-center leading-none">Lire</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Dîner</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Se mettre le pyjama</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Aller au lit / Se coucher</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">S’endormir</p>
        </div>
        <div class="bg-rose-500/30 px-6">
            <?php
            renderImage('f1u2t1p3img1.webp');
            ?>
            <p class="text-rose-700 text-center leading-none">Dormir</p>
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