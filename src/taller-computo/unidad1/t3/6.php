<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Importancia de la búsqueda y recuperación de información</h3>
  <p>La búsqueda y recuperación de información como herramienta de la alfabetización informacional (ALFIN), el desarrollo de habilidades informacionales (DHI), la competencia para el manejo de la información, (CMI) o la formación de usuarios es fundamental no solo para ti como estudiante del bachillerato sino para todos, en prácticamente todas las etapas de la vida escolar si no también fuera de ella, debido al inmensa cantidad de información, enfocada a diferentes niveles escolares, intereses y públicos, que está disponible en los diferentes servicios de Internet y no solo en la Web.</p>
  <p>La búsqueda y recuperación de información es una capacidad fundamental para consultar información a través de los motores de búsqueda en la Web pública y en la Web restringida (servicios de información, revistas electrónicas, bibliotecas digitales entre otros medios de acceso a la información), esto con el objetivo de empoderar al estudiante en todos los ámbitos de su vida, para buscar, evaluar, usar y crear información efectiva y así alcanzar metas personales, sociales, ocupacionales y educativas.</p>
  <p>Esta capacidad desarrolla las habilidades requeridas para el aprovechamiento de recursos, tanto documentales como tecnológicos, en los que la información cumpla su rol dentro de la formación académica y personal de los mismos. A su vez se desarrolla en los bachilleres, la autonomía y el pensamiento crítico al utilizar la información en diversas fuentes electrónicas mediante evaluación de la información, en la propia búsqueda de ella, permitiendo un uso ético y responsable de ésta. (Chávez y Ornelas, 2015).</p>
  <?php ob_start(); ?>
  <p>Es así como la búsqueda y recuperación de información, constituye una habilidad para la vida.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a12', "Importancia de la búsqueda y recuperación de información", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
