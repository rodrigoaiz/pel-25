<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Funciones matemáticas y trigonométricas</h3>
  <p>En esta lección desarrollaremos los siguientes aprendizajes:</p>
  <p>Resuelve problemas de polígonos empleando funciones matemáticas y trigonométricas.</p>
  <p><strong>Funciones matemáticas y trigonométricas::</strong></p>
  <ul class="ul-disc">
    <li>Radianes.</li>
    <li>Seno, coseno, tangente, arco seno, arco coseno y arco tangente.</li>
  </ul>
  <p>Para ello trabajaremos revisando y practicando los siguientes temas:</p>
  <ul class="ul-disc">
    <li>El gráfico de dispersión.</li>
    <li>Análisis de la función lineal y ecuación de la recta.</li>
    <li>Análisis de la función cuadrática y la ecuación de la parábola.</li>
  </ul>
  <h4>Introducción</h4>
  <p>¡Bienvenidos estudiantes al tema de las funciones matemáticas y las trigonométricas en Hoja Electrónica de Cálculo en Excel! En este curso, se exploran conceptos fundamentales que son esenciales para comprender no sólo las matemáticas, sino también su aplicación en situaciones del mundo real.</p>
  <p>¿Alguna vez te has preguntado cómo medir ángulos? ¡Las funciones matemáticas y trigonométricas son las claves para descifrar estos misterios!</p>
  <p>En este tema, se explicarán los <strong>conceptos de radianes</strong>, así como las <strong>funciones trigonométricas</strong>, como el <strong>seno, el coseno, la tangente, el arcoseno, el arcocoseno y el arcotangente</strong>, estos temas, aunque pueden parecer complejos a primera vista, son esenciales en la matemática, principalmente en la resolución de problemas trigonométricos.</p>
  <p>El enfoque se basará en la comprensión conceptual y la aplicación práctica en Excel de estas funciones, con el propósito de brindar las herramientas necesarias para su <strong>aplicación en polígonos regulares</strong>.</p>
  <p>Este tema representa una oportunidad de crecimiento académico y personal, con la finalidad de brindarles el apoyo necesario para alcanzar las metas académicas, se les invita a los estudiantes a participar activamente, plantear preguntas y explorar las funciones matemáticas y trigonométricas en Excel.</p>
  <?php ob_start(); ?>
  <p>Se realizará una encuesta diagnóstica para evaluar el conocimiento previos de los estudiantes acerca de las Funciones Matemáticas y Trigonométricas en una Hoja Electrónica de Cálculo, así como su comprensión de los conceptos relacionados con los Radianes y las funciones trigonométricas como lo son: Seno, Coseno, Tangente, Arcoseno, Arcocoseno y Arcotangente.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a11', "Radianes y las funciones trigonométricas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
