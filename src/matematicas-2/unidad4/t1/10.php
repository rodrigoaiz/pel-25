<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h3>Justificación de algunas construcciones geométricas</h3>
            <p>Vamos a revisar ahora una aplicación, dentro de las matemáticas, de la congruencia, para ello, es
                recomendable que recuerdes lo que revisaste en la unidad anterior, en específico: qué es una bisectriz,
                qué es una mediatriz, cuáles son las rectas perpendiculares y cómo se construyen todas las rectas
                anteriores con regla y compás.</p>
            <p>Así que traza, de preferencia en hojas blancas diferentes, la bisectriz de un ángulo, la mediatriz de un
                segmento y un segmento perpendicular a otro, utilizando únicamente regla y compás. Remarca tus trazos,
                tanto los elementos que dibujaste como los que te sirvieron como auxiliares para realizar tus
                construcciones.</p>
            <p>Observa las figuras que se forman en tus trabajos, ¿puedes identificar triángulos? ¿Algunos de ellos son
                congruentes?</p>
            <p>La respuesta a las dos preguntas anteriores es sí, hay parejas de triángulos congruentes en cada una de
                las construcciones, por lo que esta vez nos enfocaremos en justificar por qué son congruentes (mediante
                los postulados de congruencia), con la finalidad de observar que realmente las construcciones que
                realizaste son válidas.</p>
            <h3>Bisectriz de un ángulo</h3>
            <p>Como ya habrás recordado, una bisectriz es una semirrecta que divide a un ángulo en dos partes iguales.
                Al construirla con regla y compás, puedes observar lo siguiente:</p>

<h4>Paso 1</h4>
<p>Construyes un ángulo para el cual trazarás la bisectriz y un círculo que
                            interseque a los dos segmentos que forman tu ángulo. Por tanto, la distancia del vértice del
                            ángulo a estos puntos es la misma: \(BD \cong BE\)</p>

    <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-3 gap-5 items-center">
        <div class="max-w-85 mx-auto">                            <?php
            renderImage('u4t1_img_bisectriz_1.webp', 'Construcción de la bisectriz de un ángulo 1', '', '');
            ?>
        </div>
        <div class="max-w-85 mx-auto">
                        <?php
            renderImage('u4t1_img_bisectriz_2.webp', 'Construcción de la bisectriz de un ángulo 2', '', '');
            ?>
        </div>
        <div class="max-w-85 mx-auto">
                        <?php
            renderImage('u4t1_img_bisectriz_3.webp', 'Construcción de la bisectriz de un ángulo 3', '', '');
            ?>
        </div>
    </div>

<h4>Paso 2</h4>
<p>Trazas dos círculos tomando como centro cada uno de los puntos y ambos con el mismo radio. Por tanto, la distancia del punto D a la intersección de los dos círculos, es la misma que de ésta al punto E: \(DF \cong FE\)</p>

<?php
            renderImage('u4t1_construccion_bisectriz_2.webp', 'Construcción de la bisectriz de un ángulo 4, Construcción de la bisectriz de un ángulo 5 y Construcción de la bisectriz de un ángulo 6', '', '');
?>

<h4>Paso 3</h4>
<p>Observa que, al unir los tres puntos obtenidos con el vértice del ángulo, se forman dos triángulos que comparten un lado:</p>
<div class="max-w-85 mx-auto">
<?php
            renderImage('validez_construccioon_bisectriz_1.webp', 'Validez de la construcción de una bisectriz 1', '', '');
?>
</div>

<?php ob_start(); ?>
    <!-- <p>Observa atentamente la imagen del paso 3 para poder resolver el siguiente ejercicio.</p> -->
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a9', "Correspondencia de elementos", $ActividadContent);
?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>