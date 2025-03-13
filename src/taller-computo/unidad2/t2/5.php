<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Características y funciones del hardware de una microcomputadora</h3>
  <p>Realiza una investigación, sobre “<strong>Características y funciones del hardware de una microcomputadora</strong>” es necesario que consultes mínimo tres fuentes para contrastar, corroborar y complementar la información, así mismo puedes usar diferentes recursos, los cuales pueden ser; libros, revistas científicas, periódicos, repositorios, videos, diccionarios, bibliotecas online, sitios web, entre otros.</p>
  <p>Recuerda utilizar el formato APA para citar y para las referencias.</p>
  <p>Utiliza el siguiente archivo en Word <a href="<?php echo PATH_DOCS . 'u2_t2_descargable_caracteristicas_hardware_microcomputadoras_acuerdo_funcion.docx' ?>" target="_blank">Investigación Características y funciones del hardware</a> para que realices la actividad, puedes apoyarte de las <a href="./unidad2/t2/7.php">Referencias</a> de la Lección.</p>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a10', "Características del Hardware", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza el siguiente ejercicio de autoevaluación Hardware de las microcomputadoras, que te permite conocer tu aprendizaje sobre este tema.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a11', "Hardware de las microcomputadoras", $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <p>La última generación de chips, está construida en los cinco nanómetros y se está trabajando en los de 3 nm, que va a ser utilizado por los CPUs (Unidad central de procesamiento) y GPUs (Unidad de procesamiento gráfico) en el futuro próximo, eso indica que la miniaturización está a la vuelta de la esquina.</p>
  <h3>¿Quieres saber más?</h3>
  <p>Te invito a buscar información sobre “nanotecnología”, “nano robots” y “microchips en humanos” </p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "¿Sabías que?");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
