<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Escritura de la fórmula química de sales</h3>
    <p>Antes de iniciar con la nomenclatura de las sales, es importante primero saber cómo se forman, para lo cual abordaremos brevemente el tema.</p>
    <p>Las sales son compuestos iónicos y están presentes dos especies; el catión (+) por lo general es un metal y el anión(-) que puede provenir de un hidrácido o de un oxoácido. Para escribir la fórmula química de una sal haloidea unimos un catión metálico con un anión no metálico, generalmente de la familia VIA y VIIA de la tabla periódica:</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1_t2_tabla_sales.webp');
        ?>
    </div>
    <p>Las sales binarias también conocidas como sales haloideas, se obtienen a partir de reacciones de
        neutralización, cuando reacciona un ácido (hidrácido) con una base (hidróxido), ejemplo: </p>
    <p class="text-center">HCl + NaOH → NaCl + H2O</p>
    <p>También se forma una sal haloidea cuando el o los hidrógenos del ácido son sustituidos por un metal, por
        ejemplo cuando en el ácido clorhídrico (HCl) reacciona con el sodio (Na) para formar la sal. </p>
    <p class="text-center">HCl + Na → NaCl + H2</p>
    <p class="font-bold">Formación de sales ternarias u oxisales </p>
    <p>Las oxisales son compuestos químicos que se obtienen a partir de reacciones de neutralización, cuando
        reacciona un oxiácido con una base (hidróxido), ejemplo:</p>
    <p class="text-center">HClO + NaOH → NaClO + H2O </p>
    <p>Aunque también se pueden formar de una manera más simple por la combinación de un metal y un radical.
        Para escribir correctamente la fórmula química de una oxisal debemos unir un catión metálico (+) con un
        anión (-) </p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1_t2_tabla_sales_b.webp');
        ?>
    </div>
    <p>Para comprender de una mejor manera cómo escribir correctamente la fórmula química de las sales te recomendamos consultar la página 40 del <a href="<?php echo PATH_DOCS . 'PAE_Quimica2.pdf'; ?>" target="_blank">Cuaderno de Trabajo de Química II</a> del PAE. Es conveniente que la imprimas mientras te familiarizas con la escritura de las fórmulas químicas. </p>
    <p>Es momento de ejercitar lo aprendido y evaluar entre pares.</p>
    <?php ob_start(); ?>
    <p>Ahora resuelve los siguientes ejercicios para habilitarte en la escritura de la fórmula química de las sales.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a9', "Aniones y Cationes", $ActividadContent);
    ?>
    <h3 class="mt-30">Fórmulas y nomenclatura sistemática y Stock para oxisales y sales binarias</h3>
    <p>Antes de empezar a hablar sobre nomenclatura es importante que tengas presente los elementos que componen
        a la tabla periódica. </p>
    <p>En este vínculo puedes repasar tus conocimientos aprendidos en Química I sobre la tabla periódica por si
        te es necesario.</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-red-500"><a class=" text-gray-50" href="https://concepto.de/tabla-periodica/" target="_blank">Tabla Periódica</a></p>
    </div>
    <h3>Nomenclatura</h3>
    <p>Debido a que existe una gran cantidad y variedad de compuestos químicos (orgánicos e inorgánicos), es
        necesario poder distinguir entre ellos y nombrarlos de una forma sistemática mediante un método que sea
        fácil de entender y aplicar y que evite que haya confusiones o ambigüedades entre los distintos
        compuestos.</p>
    <p>La nomenclatura actual está sistematizada mediante las reglas propuestas por la IUPAC (International
        Union of Pure and Applied Chemistry). En los siguientes temas aprenderás a nombrar y a formular
        compuestos químicos de forma sistemática (IUPAC) y Stock ya que para determinados compuestos como los
        oxiácidos y las oxisales todas las nomenclaturas son admitidas.</p>
    <p>Para conocer cómo se nombran a las sales es importante que realices la <a href="<?php echo PATH_DOCS . 'nomeclatura_de_sales.pdf'; ?>" target="_blank">Lectura de la nomenclatura de sales.</a></p>
    <?php ob_start(); ?>
    <p>Para evaluar qué tanto has aprendido, resuelve el ejercicio Nomenclatura de sales; al concluirlo, súbelo para que sea evaluado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a10', "Ejercicios Nomenclatura de sales", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>