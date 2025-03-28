<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Hoja Electrónica de Cálculo en Excel para resolver ejercicios con radianes</h3>
  <p>La herramienta de <strong>Hoja Electrónica de Cálculo</strong> se utilizará para abordar ejercicios matemáticos relacionados con <strong>radianes</strong>, en este apartado, se aprenderá cómo Excel puede ser un programa de aplicación para <strong>realizar cálculos trigonométricos</strong> precisos, en este caso es involucrar ángulos en <strong>radianes a grados</strong> y viceversa.</p>
  <p>Veamos el siguiente video como repaso:</p>
  <?php renderVideoIframe('i8Nxf3-87dU', 'Explorando la conversión de radianes a grados y viceversa', 'max-w-xl mx-auto'); ?>
  <p>Ahora, se debe de saber cómo ingresar fórmulas, utilizar funciones y aprovechar al máximo las capacidades de Excel para simplificar las operaciones matemáticas de las diferentes conversiones, a continuación se muestran los siguientes videos para su utilización.</p>
  <h4>Calculando de Grados a radianes. Procedimiento para desarrollarlo en Excel:</h4>
  <?php renderVideoIframe('lsFL4Ai3ytE', 'CONVERSIONES DE GRADOS A RADIANES EN EXCEL', 'max-w-xl mx-auto'); ?>
  <h4>Calculando de Radianes a Grados. Procedimiento para desarrollarlo en Excel:</h4>
  <?php renderVideoIframe('PuFlNK4i_jI', 'CONVERSIONES DE RADIANES A GRADOS EN EXCEL', 'max-w-xl mx-auto'); ?>
  <p>Como se ha demostrado en los videos anteriores, existen dos enfoques para llevar a cabo la conversión: uno consiste en desarrollar las fórmulas de conversión por cuenta propia, dependiendo de las necesidades específicas; el otro, es utilizar las funciones predefinidas de Excel. En ambos casos, se logra la conversión de grados a radianes o viceversa, y como estudiantes, tienen la libertad de elegir cuál método prefieren utilizar.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
