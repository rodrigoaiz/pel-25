<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Concepto de oxidación y reducción.</h2>

  <p>Los procesos redox involucran un cambio neto en el estado de oxidación formal de los elementos involucrados en una reacción química. Una especie que se oxida es debido a la pérdida de electrones, mientras que una especie que se reduce es debido a la ganancia de electrones.</p>

  <p>En la <b>oxidación</b> un átomo o molécula, <b>pierde electrones</b>, por lo que su número de oxidación aumenta, si se viera como una recta numérica,  es notorio que el número de oxidación avanza hacia la derecha, por eso se dice que aumenta. Observa la siguiente imagen:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-oxidacion.webp','Oxidación, pérdida de electrones')
  ?>
  </div>

  <p>En este caso, el Zn tenía un número de oxidación de cero, pero sufre un proceso de oxidación, es decir pierde electrones, exactamente dos electrones, por eso, ahora su número de oxidación es 2+. Si se colocan las especies, de acuerdo con su número de oxidación en una recta numérica, el Zn pasa de cero a 2+, se desplazó a la derecha.</p>

 <p>En la <b>reducción</b> un átomo o molécula, <b> gana electrones</b>, por lo que su número de oxidación disminuye, de igual manera, si se viera como una recta numérica,  es notorio que el número de oxidación avanza hacia la izquierda, por eso se dice que disminuye, observa la siguiente imagen:</p>

 <p>En el caso del Cu, sucede exactamente lo contrario que con el Zn. El Cu tenía un número de oxidación de 2+, pero sufre un proceso de reducción, es decir gana electrones, exactamente dos, por eso, ahora su número de oxidación es cero. Si se colocan las especies, de acuerdo con su número de oxidación en una recta numérica, el Cu pasa de 2+ a cero, se desplazó a la izquierda.</p>

 <h2>Agente oxidante y Agente reductor. </h2>

 <p>En una reacción redox, siempre hay una especie que se oxida y otra que se reduce, pero esas especies también tienen un papel de agente oxidante y agente reductor.</p>

 <ul class="ul-disc">
    <li>Un <b>agente oxidante</b> es la especie que provoca que otra especie se oxide, mientras se da la reducción a sí misma.</li>

    <li>Un <b>agente reductor</b> es la especie que provoca que otra especie se reduzca, mientras se da la oxidación de sí misma.</li>

  </ul>

  <p>Observa la siguiente imagen:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-redox.webp','Agente oxidante y agente reductor');
    ?>
  </div>

  <p>En la imagen puedes identificar que el Zn y el Fe cambian de número de oxidación. El Zn tenía originalmente un número de oxidación cero y pasa a +2, lo que significa que se oxida. Por otro lado, el Fe tenía número de oxidación +2 y después cero, eso quiere decir que se reduce. Pero como el Zn se oxidó, también significa que es el agente reductor, porque está propiciando que el Fe se reduzca. De igual manera, el Fe que se redujo, también es el agente oxidante, porque está promoviendo que el Zn se oxide.</p> 

  <p>Otro ejemplo:</p>

  <p>Identifica la especie oxidante y reductora, así como el agente oxidante y reductor en la siguiente reacción química.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-redox2.webp','Especies oxidante y reductor; Agentes oxidante y reductor');
    ?>
  </div>  

  <?php ob_start(); ?>
  <p>A continuación, identifica la especie oxidante y reductora, así como el agente oxidante y reductor en la siguiente reacción. Arrastra las palabras al lugar correcto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a6', "Especie y agentes oxidante y reductores.", $ActividadContent);
  ?>




</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
