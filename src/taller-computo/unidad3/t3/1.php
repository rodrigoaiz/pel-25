<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'GeniallyIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Fórmulas</h3>
  <p>Bienvenida /Bienvenido a la tercera lección de la unidad III aplicaciones matemáticas con una hoja electrónica de cálculo, en donde se abordará el aprendizaje “Utiliza fórmulas con referencias relativas y absolutas”. Donde, en esta primera parte identificarás los conceptos generales de las temáticas a abordar, <strong>¡Comencemos!</strong></p>
  <p>Las fórmulas son operaciones que realizan cálculos con los valores dentro de las celdas de la hoja electrónica de cálculo (HEC). Toda fórmula en la HEC inicia con un igual (=).</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t3_formula.webp', 'Fórmulas en Excel.'); ?>
  </div>
  <h4>Lo que incluye una fórmula</h4>
  <ul class="ul-disc">
    <li><strong>Constantes o textos:</strong> estas se pueden escribir de manera directa en la fórmula, mientras que los textos siempre incluyen las comillas para poder ser evaluados.</li>
    <li><strong>Referencias:</strong> en lugar de introducir los datos constantes de manera directa en las fórmulas, la HEC emplea los nombres de la celda para hacer las operaciones considerando el valor escrito en la celda (referencias a la celda).</li>
    <li><strong>Operadores:</strong> se incluyen todos los operadores aritméticos para calcular sumas (+), restas (-), Multiplicaciones (*), divisiones (/), raíz y potencias (^). En donde también, la HEC considera la jerarquía de operaciones, iniciando con los símbolos de agrupación: paréntesis, corchetes y llaves.</li>
    <li><strong>Funciones:</strong> finalmente, las fórmulas pueden incluir funciones que ya incluye la HEC como SUMA( ), Promedio( ), etc.</li>
  </ul>
  <?php renderGenially('650d2b58b85e11001129621b', 'Fórumulas en una HEC') ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
