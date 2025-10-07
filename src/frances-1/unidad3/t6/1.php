<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Je te présente...</h2>
    <h3>Te presento a...</h3>
    <p>En esta unidad estás aprendiendo a presentar a un familiar o amigo dando las características físicas o psicológicas. No olvides que para poder hacerlo tienes que saber usar correctamente los adjetivos posesivos, el vocabulario visto anteriormente y la conjugación de los verbos que ya conoces en tercera persona tanto del singular como del plural para poder hablar de él, de ella o de ellos o de ellas.</p>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lis le texte et réponds aux questions / Lee el texto y responde las preguntas.</li>
    </ol>
    <div class="flex justify-center gap-4 bg-rose-500/30 px-6 shadow-xl">
        <div class="w-1/3 sm:full">
            <div class="shadow-xl bg-none text-rose-500">
                <?php
                renderImage('u3t6p1-img1.webp');
                ?>
            </div>
        </div>
        <div class="w-2/3 sm:full">
            <p class="font-bold text-rose-700 text-xl mb-2">Souvenirs de famille</p>
            <p class="font-mono text-sm text-rose-700">Le marié est mon père, Jean Bongrain. Il a 35 ans et il est professeur.</p>
            <p class="font-mono text-sm text-rose-700">Le 5 juillet 1913, il épouse Mathilde Gaillard, âgée de 25 ans, fille d’Antoine et de Noémie Gaillard, agriculteurs : mon grand-père et ma grand-mère. Mon père a une sœur, Marie, ma tante, professeure elle aussi : c’est de famille. À sa droite se trouve leur cousin Charles. À 45 ans, il n’est pas marié. Il est journaliste. L’homme derrière mon grand-père, c’est mon oncle Paul, le frère de ma mère. Il a 32 ou 33 ans. À côté de lui, entre mon père et ma mère, se trouve sa femme, Sophie. Son âge ? C’est un secret de famille… Ils sont commerçants. Ils n’ont pas d’enfants. Voilà, vous connaissez toute la famille. Ah non ! J’oubliais Médor, le chien de mes grands-parents.</p>
            <p class="font-mono text-sm text-rose-700">Moi, je suis Jacques Bongrain. Je ne suis pas sur la photo de mariage de mes parents, bien sûr ! Aujourd’hui, j’ai 62 ans et je suis écrivain.</p>
            <p class="font-mono text-xs text-rose-900 mt-6 ml-0">| La obra conocida como "La boda", "La boda en el campo" o "La Fiesta de Bodas" es una pintura de Henri Rousseau, creada en 1904 y que forma parte de su obra de corte naíf o primitivo.</p>
        </div>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t6a12', "Souvenirs de famille", $ActividadContent);
    ?>

    <p class="mt-10">En el aprendizaje anterior, viste cómo hablar sobre los miembros de tu familia indicando su profesión y sus gustos. Si a eso añades lo que viste en las unidades anteriores para presentarte y para hablar sobre ti mismo, ya tienes una gran cantidad de información que puedes dar sobre una persona, seas tú o sea algún pariente.</p>

    <p>La manera de dar estas informaciones, puedes aplicarla para hablar sobre cualquier persona. Igualmente, con las preguntas que ya sabes hacer, puedes pedir informes sobre quien quiera que sea.</p>

    <p>La idea solamente es utilizar el sujeto correcto, que para hablar de terceras personas serían:</p>

    <div class="bg-purple-100/50 p-4 my-4 rounded-lg">
        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-2">
                <p class="font-semibold text-purple-800">Singular:</p>
                <ul class="list-none space-y-1">
                    <li><span class="font-bold text-purple-700 italic">IL</span> → él</li>
                    <li><span class="font-bold text-purple-700 italic">ELLE</span> → ella</li>
                </ul>
            </div>
            <div class="space-y-2">
                <p class="font-semibold text-purple-800">Plural:</p>
                <ul class="list-none space-y-1">
                    <li><span class="font-bold text-purple-700 italic">ILS</span> → ellos</li>
                    <li><span class="font-bold text-purple-700 italic">ELLES</span> → ellas</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-yellow-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-yellow-800 mb-2">💡 Recuerda:</p>
        <p class="text-yellow-700">Para presentar a otras personas, utiliza estos pronombres y conjuga los verbos en tercera persona correspondiente. Toda la información que sabes dar sobre ti mismo, puedes aplicarla para hablar de cualquier otra persona.</p>
    </div>
    <p class="mt-10">Ve el video siguiente para darte una idea de cómo pedir y dar información de una tercera persona:</p>

    <div class="max-w-xl mx-auto bg-pink-200/80 p-4">
        <?php
        renderVideoIframe('L37WkNJgrNk', 'Leçon n°2 de français pour débutant : présenter quelqu’un – communication 2');
        ?>
    </div>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regarde la vidéo et remplis les trous avec les informations donnés. Fais attention à l’orthographe de mots (accents et aux majuscules et minuscules) / Mira el video y completa los espacios en blanco con la información dada. Ten cuidado con la ortografía de las palabras (acentos, mayúsculas y minúsculas).</li>
    </ol>
    <div class="max-w-xl mx-auto bg-cyan-200/80 p-4">
        <?php
        renderVideoIframe('r4-YumvLvbI', 'Présenter quelqu’un (Introducing someone in French)');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t6a13', "Présenter quelqu'un", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>