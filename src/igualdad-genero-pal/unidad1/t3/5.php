<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¿Cómo sabemos qué es la masculinidad?</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga4-img01.webp');
    ?>
  </div>
  <p>En el aprendizaje 4 te invitamos a reconocer y cuestionar algunos de los presupuestos de la masculinidad tradicional. Pero, ¿cómo sabemos qué es la masculinidad tradicional? Si bien la respuesta es compleja, en los estudios de género se utilizan distintas herramientas teórico-metodológicas para comprender la construcción del género masculino a partir de los comportamientos generalizados de los hombres.</p>
  <p>En esta primera actividad del aprendizaje 4 leerás un texto que te permitirá reconocer distintas formas de ser hombre a partir de los mandatos o pilares que se imponen para ejercer una masculinidad tradicional. Además, te invitamos a reflexionar sobre las formas en que algunos de estos pilares o mandatos impiden el desarrollo de otros hombres y mujeres e incluso promueven la violencia de género.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósito</p>
  <p>Identificar los presupuestos de la masculinidad mediante la herramienta de la caja de la masculinidad, para diferenciar la masculinidad tradicional, de las que están en transición o las alternativas.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Lee la siguiente síntesis de los documentos “¿Qué es el patriarcado?” y “Cómo comenzó el patriarcado (y cuán posible es que la evolución se deshaga de él)”. Si quieres profundizar tu lectura, puedes consultar los textos completos que se encuentran en las referencias. </li>
    <li><strong>Toma nota en tu cuaderno de trabajo</strong> de la asignatura.</li>
    <li>Con base en la lectura, resuelve el ejercicio de relación de columnas cuantas veces sea necesario, para que tengas un dominio de los conceptos.</li>
  </ol>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>