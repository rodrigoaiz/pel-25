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
  <h2>Bienvenida a la unidad III</h2>

  <?php
  renderVideoIframe('10E6cT5EcWs', 'Bienvenida Ciencias de la Salud I, Unidad 3.');
  ?>

  <h2>Presentación </h2>

  <p>En está unidad se tratan aspectos importantes de la salud integral del adolescente, para que comprendas la trascendencia que tiene no solo en esta etapa, sino a lo largo de toda tu vida, y cómo repercutirá en tu futuro. Para la mejor comprensión del tema verás las etapas del desarrollo humano, haciendo énfasis en los cambios biológicos, psicológicos y socioculturales que vivirás durante la adolescencia.</p>

  <p>En esta etapa hay factores importantes que pueden intervenir en tu salud integral, como son los factores de riesgo, los factores protectores, las conductas de riesgo y los factores resilientes, entre otros, ya que estos jugarán un papel trascendente en tu desarrollo y determinarán el tránsito entre tu adolescencia y tu adultez.</p>

  <p>Dentro de los objetivos que se pretenden alcanzar durante el desarrollo de esta unidad, están que conozcan la importancia de algunos elementos como la alimentación, las relaciones sociales saludables, el autocuidado, el bienestar mental, entre otros, ya que estos forman parte de un estilo de vida saludable. </p>

  <p>En este curso elaborarás un proyecto de vida de acuerdo a tus gustos personales, valores, intereses, etc. que son factores importantes en la construcción de dico proyecto, por que le dará sentido de propósito y dirección a tu vida, para que tengas una guia con metas claras y sepas hacia dónde vas y de esta manera se te facilite la toma de decisiones, y te conviertas en un adulto sano y productivo para la sociedad.</p>

  <p>Antes de comenzar, te pedimos que realices un ejercicio de autoevaluación para que compruebes cuáles son los conocimientos previos que tienes en torno a los temas de esta unidad.</p>

  <?php ob_start(); ?>
  <p>Para que puedas conocer cuánto sabes del tema, resuelve el siguiente cuestionario. Lee cuidadosamente las preguntas y selecciona la letra que corresponda a la respuesta correcta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a1', "Cuestionario de autoevaluación diagnóstico Unidad III", $ActividadContent);
  ?>


 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
