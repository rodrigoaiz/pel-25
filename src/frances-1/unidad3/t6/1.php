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
    <p>Lee el texto y responde las preguntas:</p>
    <div class="flex justify-center gap-4 bg-rose-500/30 px-6 shadow-xl">
        <div class="w-1/3 md:full">
            <div class="shadow-xl">
                <?php
                renderImage('u3t6p1-img1.webp');
                ?>
            </div>
        </div>
        <div class="w-2/3 md:full">
            <p class="font-bold text-rose-700 text-xl mb-2">Souvenirs de famille</p>
            <p class="font-mono text-rose-700">Le marié est mon père, Jean Bongrain. Il a 35 ans et il est professeur.</p>
            <p class="font-mono text-rose-700">Le 5 juillet 1913, il épouse Mathilde Gaillard, âgée de 25 ans, fille d’Antoine et de Noémie Gaillard, agriculteurs : mon grand-père et ma grand-mère. Mon père a une sœur, Marie, ma tante, professeure elle aussi : c’est de famille. À sa droite se trouve leur cousin Charles. À 45 ans, il n’est pas marié. Il est journaliste. L’homme derrière mon grand-père, c’est mon oncle Paul, le frère de ma mère. Il a 32 ou 33 ans. À côté de lui, entre mon père et ma mère, se trouve sa femme, Sophie. Son âge ? C’est un secret de famille… Ils sont commerçants. Ils n’ont pas d’enfants. Voilà, vous connaissez toute la famille. Ah non ! J’oubliais Médor, le chien de mes grands-parents.</p>
            <p class="font-mono text-rose-700">Moi, je suis Jacques Bongrain. Je ne suis pas sur la photo de mariage de mes parents, bien sûr ! Aujourd’hui, j’ai 62 ans et je suis écrivain.</p>
        </div>
    </div>







    <div class=" bg-pink-600 p-4 my-4 shadow-lg">
    </div>







    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t4a7', "Des choses sur la famille", $ActividadContent);
    ?>
    <p class="mt-10">Ahora vas a practicar cómo pedir información sobre la familia:</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Glisse la bonne question pour obtenir les réponses données. Fais attention aux adjectifs possessifs et aux sujets des réponses / ¡Arrastra la pregunta que corresponda para conseguir estas respuestas! Fíjate bien en los adjetivos posesivos y en quién realiza la acción.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t4a8', "Demander des informations", $ActividadContent);
    ?>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lis le texte et complète avec l’activité qui correspond / Lee el texto y completa con la actividad que corresponde.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t4a9', "Lecture active", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>