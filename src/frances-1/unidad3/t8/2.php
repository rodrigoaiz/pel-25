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
    <h2>Vêtements - activités</h2>
    <h3>La ropa - actividades</h3>
    <p>Para hablar de lo que trae puesto una persona, podemos utilizar el verbo <strong>avoir</strong> o el verbo <strong>porter</strong> (traer puesto). Estos verbos los viste en la sección anterior.</p>

    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regarde la vidéo et écris quels habits porte Lulu à la fête (attention aux majuscules et aux minuscules, à l’orthographe et aux accents) / Mira el video y escribe qué ropa lleva Lulu en la fiesta (presta atención a las mayúsculas, minúsculas, ortografía y acentos).</li>
    </ol>
    <div class="max-w-xl mx-auto bg-orange-200/80 p-4">
        <?php
        renderVideoIframe('q9mpfRKc2Po', 'Les Habits de Lulu');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t8a17', "Les Habits", $ActividadContent);
    ?>
    <p>Si quieres describir la ropa de forma un poco más detallada, para indicar el color, puedes decir:</p>
    <p class="mt-4 italic text-center text-2xl">Ma soeur porte une jupe rouge. (Mi hermana trae puesta una falda roja.)</p>
    <p>Para hacer esto, tienes que conocer los colores:</p>
    <p class="font-bold text-center bg-slate-950 text-white p-1">Les couleurs</p>
    <div class="flex">
        <div class="w-full">
            <?php
            renderImage('les-couleurs.webp');
            ?>
        </div>
    </div>

    <p>Al igual que en español, los colores deben de hacer concordancia en género y número con el sustantivo que califican, es decir, si hablas de alguna cosa que es de género masculino y que es solo una, usarás los colores tal y cual están escritos en la tabla de arriba.</p>
    <p>Si el sustantivo que quieres calificar es de género masculino, pero son varias cosas (plural) debes de agregar una “s” al adjetivo.</p>
    <p>Si el sustantivo al que le vas a poner el color, es de género femenino y es singular, debes de agregar una "e"; y si lo que vas a calificar con un color son varios objetos de género femenino, deberás agregar una "es" al adjetivo.</p>
    <p>Sin embargo, existen algunas reglas que debes de respetar para cambiar el género y el número de los adjetivos de color:</p>
    <ul class="list-none">
        <li>Si el color termina por "e" en el masculino, ya no agregas nada al hacer el femenino.</li>
        <li>Si el color es un color compuesto, por ejemplo, el azul-verde (bleu-vert) o si agregas las palabras "clair" (claro) o "foncé" (oscuro), el color se queda en masculino singular sin importar de qué objeto estés hablando.</li>
        <li>Hay colores que permanecen invariables (en la tabla te indicamos cuales). Estos colores, nunca hacen concordancia con el sustantivo que califican.</li>
    </ul>
    <p>Puedes ver el siguiente video para conocer y practicar la pronunciación de algunos colores.</p>

    <div class="max-w-xl mx-auto bg-orange-200/80 p-4">
        <?php
        renderVideoIframe('NLxfx20jP1A', 'Apprendre les couleurs en français | Quiz sur les couleurs | Learn Colours in French | Colour Quiz');
        ?>
    </div>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regarde cette image de la famille de Sergio et complète avec l'adjectif de couleur correct / Mira esta imagen de la familia de Sergio y completa con el adjetivo de color correcto.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t8a18', "La famille de Sergio ", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>