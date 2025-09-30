<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Equilibrio químico</h2>
  <h3>Ácidos y bases</h3>
  <h4>Reacciones reversibles e irreversibles</h4>

  <p>La escala de pH es una medida que nos ayuda a comprender la acidez o basicidad de una solución. El pH oscilaría entre 0 y 14, con un pH menor a 7 que indica acidez, un pH de 7 que indica neutro y un pH superior a 7 que indica basicidad. Como se observa en la siguiente imagen:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-pH.webp','Escala de pH','https://media.istockphoto.com/id/997087002/es/vector/el-ph-de-ciencia-escala.jpg?s=612x612&w=0&k=20&c=R0TuTs8eAaA8l0bvNWzJc6qAZcyg_qBjCDsLcWM1Ul4=','Istockphoto. ')
  ?>
  </div>

  <p>La importancia de esta escala radica en diversos campos, como la química, la biología y la medicina, ya que cambios mínimos pueden tener consecuencias significativas. El pH se calcula como pH=-log(H+) </p>

  <p>En este apartado realizaremos un experimento virtual comparando las dos disoluciones del ejercicio pasado: ácido clorhídrico (HCl) a 1M y vinagre (ácido acético diluido) a 1 M para explorar cómo diferentes sustancias interactúan en soluciones acuosas y afectan el pH. </p>

  <p>En este experimento, observaremos los efectos de estos ácidos desde tres perspectivas:</p>

  <ul class="ul-disc">
    <li>Macroscópico: lo que podemos ver a simple vista, como el cambio de color en un indicador de pH.</li>
    <li>Nanoscópico: Lo que sucede a nivel molecular e iónico, donde los ácidos se ionizan en agua para formar iones H+ y otros iones.</li>
    <li>Simbólica: La representación de estas reacciones químicas mediante ecuaciones, ayudando a comprender los procesos a nivel atómico.</li>
  </ul>


  <p>Además, debemos recordar que los ácidos fuertes, como el ácido clorhídrico (HCl), se disocian completamente en agua, produciendo una cantidad máxima de iones hidronio (H⁺) y un correspondiente anión cloruro (Cl⁻). Esta es una reacción irreversible, pues los iones formados no se recombinan para formar nuevamente el ácido original.</p>

  <p>A diferencia de los fuertes, los ácidos débiles como el ácido acético (CH₃COOH) no se disocian completamente en solución. Establecen un equilibrio entre el ácido no disociado y los iones que se forman (H₃O⁺ y CH₃COO⁻), lo cual es una reacción reversible.</p>

  <p>Si quieres profundizar más acerca de este tema, te invitamos a revisar el siguiente material con las generalidades sobre ácidos y bases, la ionización del agua, su relación con la escala de pH, la constante de disociación y la ecuación de Henderson-Hasselbalch.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-medicina.webp','','https://repositorio-uapa.cuaed.unam.mx/repositorio/moodle/pluginfile.php/2514/mod_resource/content/3/UAPA-equilibrio-acido-base/index.html','UAPA. Generalidades del Equilibrio Ácido-Base')
  ?>
  </div>

  <?php ob_start(); ?>
  <p>Realiza la actividad Grado de ionización en ácidos para que corrobores lo aprendido.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a3', "Grado de ionización en ácidos", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
