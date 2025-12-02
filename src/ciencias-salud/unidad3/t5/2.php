<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Integra un proyecto de vida a partir de su historia de vida.</h2>

  <h3>¿Qué es un proyecto de vida?</h3>

  <p>Es la construcción de un plan personal a corto, mediano o largo plazo que un joven considera seguir durante su vida para poder alcanzar sus metas, las cuales pueden ser académicas, laborales o personales. Estas se basan en gustos personales, valores, habilidades o aspiraciones. Este proyecto es muy importante para el adolescente porque le suministra orientación, motivación y una estructura clara para su futuro. Un proyecto de vida contiene los siguientes elementos:</p>

  <ul>
    <li><b>Autoconocimiento:</b>  se refiere al conocimiento de sus fortalezas, debilidades, intereses y valores.</li>
    <li><b>Metas y objetivos:</b> consiste en plantearse metas a corto, mediano y largo plazo, en diferentes aspectos de su vida, como el académico, las relaciones y el desarrollo personal. Deben ser medibles, específicas, relevantes, realistas y establecer plazos para alcanzarlas.</li>
    <li><b>Planificación:</b> diseñar un plan de acción concreto, que contiene los pasos específicos así como los recursos necesarios para lograr las metas planeadas.</li>
    <li><b>Evaluación y adaptación:</b> a lo largo del desarrollo del proyecto, se evalúa para ver los progresos y si es necesario se hacen los ajustes pertinentes, para adecuarse a cambios en los intereses y los objetivos.</li>
    
  </ul>

  <p>La importancia de que los adolescentes construyan un proyecto de vida les da un sentido de propósito y dirección para saber hacia dónde van; el tener metas claras, también les facilita la toma de decisiones de acuerdo a sus valores y objetivos a largo plazo. Otro aspecto importante es que fomenta la tenacidad para superar los obstáculos y lograr sus metas, así como les da las herramientas necesarias para enfrentarse a los retos del futuro, como el ingreso a la educación superior o al mundo laboral reduciendo el estrés y la ansiedad que esto les ocasiona, favorece la construcción de una red de apoyo sólida formada por la familia, los profesores y los amigos. </p>

  <p>En el siguiente cuadro se muestran algunos elementos que puedes considerar en la elaboración de tu proyecto de vida.</p>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t5-tabla.png');
              ?>
          </div>

  <p>Después de leer la información anterior, ver el siguiente video para que puedas hacer tu proyecto de vida. Una vez que lo tengas, actualizalo periódicamente conforme tu vida continúe, pero tenlo presente siempre, ya que será muy importante porque te darás cuenta cómo tu vida, tus objetivos y tus metas han ido cambiando a lo largo del tiempo.</p> 

  <?php ob_start(); ?>
  <p>Ve el siguiente video introductorio que te servirá para hacer tu proyecto de vida.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t5a1', "Video", $ActividadContent);
  ?>

  <?php
  renderVideoIframe('O3bp_oFWJns', 'Proyecto de vida en el adolescente');
  ?>



  

  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
