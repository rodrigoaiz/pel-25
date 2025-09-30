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
  <h2>Propiedades periódicas</h2>
  
  <p>Como ya revisaste anteriormente, las reacciones químicas pueden llevarse a cabo dependiendo de los reactivos que estén participando en ellas. Todos los elementos de la tabla periódica tienen propiedades específicas que los hacen más o menos reactivos. Pero ¿cuáles son esas propiedades que influyen en su reactividad? A continuación revisa el siguiente video sobre las propiedades periódicas:</p>

  <?php
  renderVideoIframe('alHcrYWfQns', 'Propiedades periódicas');
  ?>

  <p>El video anterior hace referencia a las propiedades periódicas de los elementos las cuales son propiedades que caracterizan a los elementos químicos y que varían en cada uno de ellos de acuerdo con su posición en la tabla periódica, pero al mismo tiempo, siguen una tendencia en cuanto al grupo y periodo en el que se encuentra el elemento. </p>

  <p>Ingresa a la siguiente página en la cual se explica con mayor detenimiento cada una de las propiedades periódicas y realiza la actividad de autoevaluación para la comprensión del tema.</p>

  <?php
  renderVideoIframe('alHcrYWfQns', 'Propiedades periódicas');
  ?>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-bunam.webp','Propiedades periódicas (lectura)', 'https://alianza.bunam.unam.mx/cch/propiedades-periodicas/');
  ?>
  </div>

  <p>Después de haber leído sobre las propiedades periódicas, realiza la actividad de autoevaluación que viene en la página, toma captura de pantalla para compartirla como archivo adjunto en la actividad Propiedades periódicas.</p>

  <?php ob_start(); ?>
      <p>Sigue las instrucciones de la actividad de autoevaluación y sube tu respuesta.</p>
  <?php
      $ActividadContent = ob_get_clean();
       renderActividad('u2t3a4', "Propiedades periódicas", $ActividadContent);
  ?>

  <p>Como has observado el tema de la reactividad de los metales, es importante porque indica cómo reaccionan con otros elementos y sustancias, lo que permite predecir y controlar reacciones en aplicaciones industriales y de laboratorio. Además, ese conocimiento permite determinar el proceso a seguir para la extracción y refinamiento de los metales y también los clasifica de acuerdo con sus principales usos y aplicaciones. Por otro lado, la reactividad de los metales también influye en su comportamiento en el medio ambiente, afectando su movilidad, toxicidad y capacidad de degradación. </p>

  <p>A continuación se presenta un cuestionario con el cual reafirmarás el tema de propiedades periódicas. Recuerda que todas las actividades influyen directamente en tu calificación final.</p>

  <p>Realiza el cuestionario de <b>Propiedades periódicas</b> para corroborar lo aprendido.</p>

  <?php ob_start(); ?>
      <p>Realiza el cuestionario de <b>Propiedades periódicas</b> </p>
  <?php
      $ActividadContent = ob_get_clean();
       renderActividad('u2t3a4', "Propiedades periódicas", $ActividadContent);
  ?>





  <h4 class="text-center">La industria minero-metalúrgica en la producción de metales</h4>

  <p>La industria minero-metalúrgica es clave en la producción de los metales que usamos a diario, desde el acero en los edificios hasta el cobre en los cables eléctricos y el oro en los dispositivos electrónicos. Aunque parece sencillo, transformar una roca que contiene minerales en un metal puro listo para su uso implica una serie de pasos complejos, muchos de ellos guiados por <i><u>reacciones químicas.</u></i></p>

  <p>Cuando los minerales se extraen de las minas, generalmente están mezclados con impurezas y otros elementos no deseados o que no tienen valor comercial. Para obtener el metal puro, se requiere un proceso que lo libere de esas impurezas y lo convierta en un material útil. Aquí es donde participan las <i><u>reacciones químicas.</u></i>, las cuales permiten extraer los elementos valiosos a partir de sus minerales.</p>

  <p>Pero, ¿cómo ocurre esta transformación? Dependiendo del mineral, se pueden utilizar diferentes métodos químicos. Algunos metales requieren ser reducidos mediante reacciones con gases como el oxígeno o el carbono, otros son disueltos en soluciones químicas para separarlos de su matriz, y algunos necesitan corrientes eléctricas para completar su purificación.</p>

  <p>Un dispositivo tan común como el teléfono celular, que utilizamos diariamente y que se ha convertido en una herramienta indispensable en esta era de la comunicación, requiere de baterías que a su vez están formadas por metales y cuyo propósito es transformar la energía química en eléctrica, lo que hace que funcione adecuadamente un teléfono celular. Pero ¿cómo es qué a partir de una roca, pueda obtenerse un metal y eso haga funcionar tu teléfono celular?</p>

  <p>Observa el video sobre los metales que componen los teléfonos celulares:</p>

  <?php
  renderVideoIframe('zlO_lTMFrds', 'Materiales y metales que contienen los teléfonos celulares');
  ?>

  <p>¿Qué te pareció el video? ¿Te imaginabas que tu teléfono celular estuviera conformado por tantos elementos químicos? Ahora se te invita a participar en el  foro de discusión: <i><b>Del mineral al teléfono celular.</b></i> </p>

  <?php ob_start(); ?>
  <p>A continuación, se les invita a participar en el siguiente foro de discusión.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a1', "Foro de discusión: del mineral al teléfono celular", $ActividadContent);
  ?>

<p>En la industria química metalúrgica, se produce una gran cantidad de reacciones en las que participan los metales, pero no todas son iguales. El tipo de metales y de minerales que participan, determina la reacción química que puede llevarse a cabo.  Analizar las reacciones que ocurren determinará el procedimiento químico que puede realizarse para la extracción y refinamiento de los metales. </p>

<p>Observa el siguiente video sobre los tipos de reacciones:</p>

  <?php
  renderVideoIframe('MLcHCEnBKmo', ' Tipos de reacciones');
  ?>

  <p>Como observaste en el video, en las reacciones químicas se generan nuevas sustancias (productos) a partir de las sustancias iniciales  (reactivos). En otras palabras, una reacción química es un proceso de transformación de la materia.  Pero, no todas las reacciones son iguales y eso es posible identificar porque la evidencia de algunas reacciones puede ser un cambio de color, la formación de un sólido, la producción de un gas o el desprendimiento o absorción de energía, es decir, cuando se calienta o se enfría, respectivamente, el recipiente donde se está llevando a cabo la racción.</p>

  <p>Por ejemplo, la reacción para la obtención de Ag a partir de AgNO3 y Cu, se representa con la siguiente ecuación química:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-simple.webp','Reacción de desplazamiento simple')
  ?>
  </div>

  <p>Esta es una reacción de <b>desplazamiento simple</b>, donde un elemento reacciona con un compuesto y toma el lugar de uno de los componentes del compuesto.</p>

  <p>Otro tipo de reacción química es la que se conoce como desplazamiento doble, donde dos compuestos reaccionan intercambiando sus componentes para formar otros compuestos diferentes a los primeros, con propiedades distintas. Ejemplo:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-doble.webp','Reacción de desplazamiento doble')
  ?>
  </div>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
