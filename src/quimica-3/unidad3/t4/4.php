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
  <h3>Grado de ionización y Ka</h3>

  <p>Recientemente en el laboratorio virtual, realizaste experimentos para determinar el grado de ionización de diferentes ácidos, observando que algunos se ionizan completamente mientras que otros no. Ahora, te preguntas qué determina este comportamiento y cómo se puede cuantificar la fuerza de un ácido más allá de la simple observación.</p>
  

  <div class="flex">
  <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/q3-u3-medi.webp" />
                </div>

                    <div class="col-span-2 text-xl leading-6">
                        
                        <p>Ahora imagina que estás trabajando en el desarrollo de un nuevo medicamento que necesita un pH muy específico para ser efectivo.</p>
                        <p>Se te ha proporcionado una selección de ácidos para ajustar el pH de la solución del medicamento, pero necesitas elegir el ácido adecuado basándote en su grado de ionización y su constante de acidez (Ka).</p>

                        <p>¿Cómo decidirías cuál ácido utilizar para lograr la precisión requerida en el pH?</p>
                       
                    </div>
                </div>
  </div>


  <h3>Explicación de Conceptos</h3>

  <p>El <b>grado de ionización</b>, es un concepto que refiere al grado en que una sustancia se ha ionizado en una solución. Esta propiedad es particularmente importante cuando se estudian ácidos y bases, ya que ayuda a determinar la fuerza de un ácido o base.</p>

  <p>En el contexto de los ácidos, el grado de ionización está estrechamente relacionado con la constante de disociación del ácido, denominada Constante de Acidez (Ka), la cual es una medida de la fuerza de un ácido en solución. Representa el equilibrio entre el ácido no disociado y los iones que se forman. Un valor más alto de Ka indica un ácido más fuerte, que se disocia más completamente en solución. El valor Ka cuantifica qué tan bien se ioniza un ácido en una solución. Un valor de Ka más alto indica un ácido más fuerte que dona protones fácilmente, mientras que un valor de Ka más bajo significa un ácido más débil con menos tendencia a ionizarse.</p>

  <p>Los ácidos con un alto grado de ionización y un alto valor de Ka se consideran ácidos fuertes. Estos ácidos se disocian casi por completo en agua, lo que genera una alta concentración de iones hidronio (H₃O⁺) en la solución. Por otro lado, los ácidos débiles tienen un menor grado de ionización y un valor de Ka menor, lo que resulta en una disociación parcial y una menor concentración de iones hidronio en la solución.</p>

  <p>Al conocer estos valores, los químicos pueden predecir el comportamiento de los ácidos en diferentes reacciones químicas, determinar sus concentraciones y calcular sus niveles de pH en soluciones.</p>

  <p>Aquí hay una tabla que muestra algunos ácidos comunes junto con sus grados de ionización y valores de Ka:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-tabla.png','Esta tabla está ordenada de acuerdo al grado de ionización y la constante de acidez (Ka) de mayor a menor.')
    ?>
  </div>

  <?php ob_start(); ?>
  <p>Ahora te corresponde realizar la actividad Grado de ionización y Ka donde identificarás algunas sustancias.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a3', "Grado de ionización y Ka", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
