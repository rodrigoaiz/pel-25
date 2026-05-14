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
    <h2>La famille</h2>
    <h3>Mi familia</h3>
    <p>Cuando nos estamos presentando, así como cuando hablamos de forma cotidiana con las personas, resulta interesante poder hablar sobre nuestra familia. Para ello es necesario el poder saber cómo se llaman los familiares en francés. Aquí te presentamos un breve vocabulario sobre la familia:</p>
    <p class="font-bold text-center bg-fuchsia-500 text-white p-1">La famille de la princesse Caroline de Monaco</p>
    <div class="flex">
        <div class="w-full">
            <?php
            renderImage('u3t1img1-femille-caroline-monaco.webp');
            ?>
        </div>
    </div>
    <p class="mt-10">Para practicar la pronunciación y conocer otras expresiones relacionadas a la familia puedes ver el siguiente video:</p>
    <div class="max-w-xl mx-auto bg-fuchsia-500/40 p-4">
        <?php
        renderVideoIframe('njpq5Dooz3E', 'Parler de la famille en français. Niveau A1 de FLE - Delf A1');
        ?>
    </div>
    <p class="mt-10">Otros miembros importantes de la familia son las mascotas. En seguida te presentamos un pequeño vocabulario de los animales domésticos más comunes:</p>
    <p class="font-bold text-center bg-lime-600 text-white p-1">Les animaux de compagnie (un animal de compañía = una mascota)</p>

    <div class="grid grid-cols-5 gap-2">
        <div class="bg-lime-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-01chien.webp');
            ?>
            <p class="text-lime-700 text-center leading-none">Un chien</p>
        </div>
        <div class="bg-lime-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-02chat.webp');
            ?>
            <p class="text-lime-700 text-center leading-none">Un chat</p>
        </div>
        <div class="bg-lime-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-03hamster.webp');
            ?>
            <p class="text-lime-700 text-center leading-none">Un hamster</p>
        </div>
        <div class="bg-lime-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-04perroquet.webp');
            ?>
            <p class="text-lime-700 text-center leading-none">Un perroquet</p>
        </div>
        <div class="bg-lime-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-05lapin.webp');
            ?>
            <p class="text-lime-700 text-center leading-none">Un lapin</p>
        </div>
        <div class="bg-teal-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-06poisson.webp');
            ?>
            <p class="text-teal-700 text-center leading-none">Un poisson rouge</p>
        </div>
        <div class="bg-teal-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-07oiseau.webp');
            ?>
            <p class="text-teal-700 text-center leading-none">Un oiseau</p>
        </div>
        <div class="bg-teal-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-08cobaye.webp');
            ?>
            <p class="text-teal-700 text-center leading-none">Un cochon d'Inde / Une cobaye</p>
        </div>
        <div class="bg-teal-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-09furet.webp');
            ?>
            <p class="text-teal-700 text-center leading-none">Un furet</p>
        </div>
        <div class="bg-teal-500/30 px-6">
            <?php
            renderImage('fr1u3a1p01-10tortue.webp');
            ?>
            <p class="text-teal-700 text-center leading-none">Une tortue</p>
        </div>
    </div>
    <p class="mt-10">Práctica lo visto resolviendo el siguiente reto.</p>
    <?php ob_start(); ?>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number mb-8">
        <li>Fais glisser les mots pour compléter les phrases du vocabulaire sur la famille / Arrastra las palabras para completar las frases del vocabulario de la familia.</li>
    </ol>
    <p>Remplis le mots croisés avec le vocabulaire de la famille :</p>

    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3-act-1', "Vocabulaire de la famille", $ActividadContent);
    ?>
    <p class="mt-10">Continúa practicando con la siguiente actividad.</p>
    <?php ob_start(); ?>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number mb-8">
        <li>Fais glisser les mots pour compléter les phrases du vocabulaire sur la famille / Arrastra las palabras para completar las frases del vocabulario de la familia.</li>
    </ol>
    <p>Remplis le mots croisés avec le vocabulaire de la famille :</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3-act-02', "La famille", $ActividadContent);
    ?>
    <p class="mt-10 text-2xl text-teal-600">Los adjetivos posesivos</p>

    <p>Ahora, para poder hablar de un miembro de nuestra familia, tenemos también que conocer los adjetivos posesivos, es decir, esas palabras que indican a quien pertenece alguna cosa o con quien está relacionada alguna persona.</p>
    <p>En español, la elección del posesivo depende de dos cosas, la primera es quien es el poseedor (si la cosa me pertenece a mí, digo "mi", si te pertenece a ti, digo "tu", si le pertenece a él, digo "su"). La segunda cosa que tengo que tener en cuenta para elegir el posesivo correcto es el género y número de la cosa poseída (si hablo de algo que nos pertenece a nosotros puedo decir "nuestro", "nuestra", "nuestros" o "nuestras" dependiendo de si el objeto del que hablo es femenino, masculino, singular o plural).</p>
    <p>Cuando hablamos en francés, tienes que tener en cuenta esas dos cosas (quien posee y el género y número del objeto poseído) tal y como lo haces en español.</p>
    <p>A continuación, te presentamos una tabla con los adjetivos posesivos:</p>

    <table class="table-auto w-full border-collapse">
        <thead class="bg-purple-300/50">
            <tr>
                <th class="p-2 border align-middle text-purple-700 font-bold text-center">Personne</th>
                <th class="p-2 border align-middle text-purple-700 font-bold text-center">Masculin/Féminin singulier (voyelle)</th>
                <th class="p-2 border align-middle text-purple-700 font-bold text-center">Féminin singulier (consonne)</th>
                <th class="p-2 border align-middle text-purple-700 font-bold text-center">Pluriel</th>
            </tr>
        </thead>
        <tbody class="bg-purple-300/30">
            <tr>
                <td class="px-3 py-2 border align-middle text-purple-700 font-semibold">Je</td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>mon</strong><br>
                    <span class="text-sm">mon père<br>mon enfant</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>ma</strong><br>
                    <span class="text-sm">ma mère</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>mes</strong><br>
                    <span class="text-sm">mes frères<br>mes enfants<br>mes sœurs</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-purple-700 font-semibold">Tu</td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>ton</strong><br>
                    <span class="text-sm">ton père<br>ton enfant</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>ta</strong><br>
                    <span class="text-sm">ta mère</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>tes</strong><br>
                    <span class="text-sm">tes frères<br>tes enfants<br>tes sœurs</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-purple-700 font-semibold">Il / Elle</td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>son</strong><br>
                    <span class="text-sm">son père<br>son enfant</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>sa</strong><br>
                    <span class="text-sm">sa mère</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>ses</strong><br>
                    <span class="text-sm">ses frères<br>ses enfants<br>ses sœurs</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-purple-700 font-semibold">Nous</td>
                <td colspan="2" class="px-3 py-2 border align-middle text-purple-700">
                    <strong>notre</strong><br>
                    <span class="text-sm">notre père<br>notre enfant<br>notre mère</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>nos</strong><br>
                    <span class="text-sm">nos frères<br>nos enfants<br>nos sœurs</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-purple-700 font-semibold">Vous</td>
                <td colspan="2" class="px-3 py-2 border align-middle text-purple-700">
                    <strong>votre</strong><br>
                    <span class="text-sm">votre père<br>votre enfant<br>votre mère</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>vos</strong><br>
                    <span class="text-sm">vos frères<br>vos enfants<br>vos sœurs</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-purple-700 font-semibold">Ils / Elles</td>
                <td colspan="2" class="px-3 py-2 border align-middle text-purple-700">
                    <strong>leur</strong><br>
                    <span class="text-sm">leur père<br>leur enfant<br>leur mère</span>
                </td>
                <td class="px-3 py-2 border align-middle text-purple-700">
                    <strong>leurs</strong><br>
                    <span class="text-sm">leurs frères<br>leurs enfants<br>leurs sœurs</span>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="bg-purple-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-purple-800 mb-2">📝 Regla importante:</p>
        <p class="text-purple-700">Para <strong>nous</strong>, <strong>vous</strong> e <strong>ils/elles</strong>, la forma es la misma tanto para masculino como para femenino:</p>
        <ul class="list-disc list-inside mt-2 text-purple-700">
            <li><strong>notre/votre/leur</strong> → para singular (masculino y femenino)</li>
            <li><strong>nos/vos/leurs</strong> → para plural</li>
        </ul>
    </div>
    <p class="mt-10">Ahora practiquemos los adjetivos posesivos.</p>
    <?php ob_start(); ?>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number mb-8">
        <li>Remplis avec les adjectifs possessifs. Attention à l'orthographe, aux majuscules et minuscules et aux accents / Completa con los adjetivos posesivos. Ten cuidado con la ortografía, las mayúsculas y minúsculas, y los acentos.</li>
    </ol>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3-act-03', "Les adjectifs possessifs", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
