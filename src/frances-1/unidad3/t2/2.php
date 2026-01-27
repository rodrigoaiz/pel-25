<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Qu'est-ce qu'il fait de sa vie?</h2>
    <h3>¿A qué se dedica?</h3>
    <p>La manera para preguntar en francés a que se dedica una persona en un poco diferente al español; en francés vamos a preguntar qué es lo que alguien hace de su vida y la pregunta queda, por ejemplo, como:</p>
    <div class="w-full grid grid-cols-4 gap-4 mt-4 border-y-2 border-dashed border-purple-300 bg-purple-300/10">
        <div class="col-span-3 text-center text-purple-800">Qu'est-ce qu'il fait de sa vie?</div>
    </div>
    <p>Recuerda que puedes formular las preguntas de diferentes formas, dependiendo si hablas de manera formal, estándar o informal y que el sujeto de la pregunta y la conjugación del verbo depende de la persona por la que estés preguntando.</p>
    <p>Refuerza el aprendizaje con la siguiente actividad</p>

    <?php ob_start(); ?>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Fais glisser la profession correcte pour compléter chaque phrase / Arrastra la profesión correcta para completar cada frase.</li>
    </ol>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3-act-4', "Les professions", $ActividadContent);
    ?>
</section>
<?php ob_start(); ?>
<section>
    <p>Es interesante pensar que en los países latinoamericanos el tener estudios universitarios y una profesión es muy importante puesto que, mientras mejor preparado estés, vas a tener más facilidades para conseguir un trabajo estable y un salario correcto que te permita vivir dignamente e, incluso, hasta darte algunos lujos. Es verdad que las personas que se dedican a los diferentes oficios como los albañiles o los plomeros tienen salarios bajos y deben restringir sus gastos.</p>
    <p>En los países europeos o en Canadá el no hacer una carrera universitaria no significa no tener posibilidades económicas para vivir dignamente. Se puede tener ingresos correctos que permitan un nivel de vida adecuado aún si la persona se dedica a algún oficio. Esto es debido a que para ejercer cualquier tipo de oficio (métier) o profesión (profession) se deben de haber hecho estudios. Así, para poder trabajar de plomero, por ejemplo, debes de hacer una formación artesanal o técnica con un plomero diplomado y seguir estudios de plomería antes de poder ejercer como plomero. Obviamente, los estudios para ejercer algún oficio son mucho más cortos que los que se necesitan para ejercer una carrera profesional.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Sais-tu que... ?");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
