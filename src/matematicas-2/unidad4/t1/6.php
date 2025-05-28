<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h2>Congruencia de triángulos</h2>
<p>A nuestro alrededor existen infinidad de figuras que podemos comparar para distintos fines. Quizá dos
                televisiones, para comprobar si sus medidas permiten tener alguna de ellas en nuestro hogar. </p>
            <p>Sin embargo, la cantidad de figuras disponibles hace que la tarea de estudiarlas todas sea imposible, por
                lo que vamos a enfocarnos en una sola, por su simplicidad: el triángulo. Pero esto no es una limitante,
                toma en cuenta que puedes “partir” tus figuras para obtener triángulos y que lo que revisemos a
                continuación te sea útil. Por ejemplo, podrías dividir a la televisión en dos triángulos iguales
                trazando una diagonal.</p>

                <?php
                renderImage('ejemplo_figuras_divididas_triangulos.webp', 'Figuras congruentes y semejantes', '', '', true);
                ?>

                <p>Sabiendo esto, ¿cómo podrías saber que dos triángulos son congruentes? Recuerda que la congruencia
                implica que dos figuras tienen la misma forma y tamaño. Tómate unos minutos para responder antes de
                continuar, ya que esta será la temática central que se revisará a continuación.</p>
            <p>Para realizar la comparación entre dos triángulos, en matemáticas se consideran sus elementos: lados,
                vértices, ángulos. De ellos, se busca que “coincidan” en cuanto a posición, por ejemplo, comparar el
                lado más largo de un triángulo con el lado más largo de otro triángulo, o el más pequeño con el más
                pequeño, etc. Y si sus medidas son iguales, entonces se concluye que los triángulos son congruentes.</p>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>