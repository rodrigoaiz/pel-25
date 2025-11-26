<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Aplica los conocimientos previos para el diseño y realización de un protocolo de investigación epidemiológico</h2>

  <p>Los protocolos de investigación en salud y los epidemiológicos, tienen características comunes, ya que ambos se basan en el método científico, pero su ámbito de estudio, objetivos, enfoques y diseño de la investigación son diferentes. El primero se ocupa de una amplia variedad de temas en el campo de la salud, centrándose en la atención y tratamiento de pacientes a nivel individual; el segundo se enfoca específicamente en estudiar la distribución y causas de las enfermedades en las poblaciones. Algunas diferencias son las siguientes:</p>

  <h3 class="text-center">Diferencias entre el protocolo de salud y el epidemiológico </h3>

  <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t3-tabla.png'); ?>
         </div>

  <h3 class="text-center">Diseño y realización de un protocolo de investigación en epidemiología.</h3>



  <p>El tema con el que elaborarás el protocolo de investigación epidemiológico será la <b>obesidad</b>. Se seleccionó este, debido a que se ha convertido en un problema de salud pública en México, y el principal factor de riesgo en el desarrollo de enfermedades no transmisibles como la hipertensión, la diabetes, problemas psicológicos, entre otros. </p>

  <?php ob_start(); ?>
  <p> Con la información de los incisos 3.1 y 3.2, elabora un protocolo de investigación epidemiológico sobre el tema de la “obesidad”, para que tengas una referencia, en el siguiente cuadro te presentamos los puntos que tendrás que desarrollar para llevar a cabo tu investigación. Si estás inscrito en un grupo realiza el trabajo en equipo.  </p>
  <p>Te sugerimos que revises el siguiente protocolo para que te orientes en la realización de tu protocolo de investigación epidemiológico para el tema de obesidad, es un ejemplo que tú tendrás que adaptar al estudio que vas a realizar.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a1', "Actividad colaborativa", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p> Para que puedas conocer cuánto aprendiste del tema, resuelve el siguiente cuestionario. Lee cuidadosamente las preguntas y selecciona la letra que corresponda a la respuesta correcta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a2', "Cuestionario de autoevaluación final Unidad 2", $ActividadContent);
  ?>


   
 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
