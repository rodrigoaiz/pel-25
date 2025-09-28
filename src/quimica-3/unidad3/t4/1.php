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
  <h2>Equilibrio químico</h2>
  <h3>Reacciones reversibles e irreversibles</h3>
  
  <p>Observa las siguientes imágenes y analiza qué tienen en común.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-manzana.webp','Fenómeno de oxidación en la manzana. ')
  ?>
    <?php
      renderImage('q3-u3-metal.webp','Fenómeno de oxidación en metal.')
  ?>
     <?php
      renderImage('q3-u3-flama.webp',' Fenómeno de combustión.')
  ?>
  </div>

  <p>Los fenómenos anteriores son ejemplos de reacciones irreversibles. </p>

  <p>Hasta el momento hemos supuesto que todas las reacciones ocurrían en un sentido, en el sentido en que escribimos la ecuación química que representa el proceso, es decir . Esas reacciones, finalizan cuando uno de los reactivos se agota o, en caso de que los dos estén en proporciones estequiométricas, los dos se agoten. </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-AB.webp')
  ?>
  </div>

  <p>Así lo confirman muchos procesos químicos que hemos visto a diario, tales como los que se presentan en las imágenes del inicio. Primero, cuando una manzana la cortamos y la dejamos en contacto con el oxígeno atmosférico, tras un tiempo relativamente corto observamos la aparición de un ennegrecimiento en su superficie que nos indica que se produjo una oxidación de los componentes de este alimento. </p>

  <p>Segundo, cuando un metal como el hierro puede, en condiciones determinadas (humedad del aire y presencia del oxígeno), provocar un cambio de estructura química de ese metal convirtiéndose en materiales inservibles y provocando pérdidas económicas importantes. Y qué decir de lo que ocurre cuando cocinamos con metano, o el gas butano, que ante oxígeno atmosférico observamos que se produce una reacción de combustión, liberando energía en gran cantidad.</p>

  <p>Podríamos describir muchos más ejemplos de las <b>reacciones irreversibles</b>, sin embargo, existen otras reacciones químicas que se producen en ambos sentidos, lo que ocasiona que no se agota ningún reactivo que forma ese proceso. Estas son las <b>reacciones reversibles</b>, en las cuales los productos formados pueden reaccionar entre sí para regenerar los reactantes originales, además se alcanza un estado de equilibrio químico donde la tasa de formación de productos es igual a la tasa de reconversión de estos en reactantes, representada por una doble flecha (⇌).   A+B ⇌AB </p>

  <p>Para entender este concepto a nivel nanoscópico observa el siguiente video </p>

  <?php
  renderVideoIframe('vXD6ebwT-_4', 'Equilibrio químico ');
  ?>

  <p>Como se menciona en el video, en las reacciones reversibles, llega un momento que finaliza y finaliza exactamente cuándo alcanzamos lo que se denomina un estado de equilibrio químico. Un ejemplo clásico es la síntesis del amoníaco por el proceso Haber</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-N2.webp')
  ?>
  </div>

  <p>Este es un proceso dinámico donde el nitrógeno y el hidrógeno reaccionan para formar amoníaco, y al mismo tiempo, el amoníaco se descompone de nuevo en nitrógeno e hidrógeno. Esta reacción es reversible y se lleva a cabo bajo condiciones específicas de temperatura y presión. El equilibrio entre reactantes y productos es crucial para maximizar el rendimiento de amoníaco en la industria de fertilizantes.</p>


  <?php ob_start(); ?>
  <p>Ahora te invitamos a realizar la actividad <b>Equilibrio químico</b> para que practiques lo aprendido.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a1', "Equilibrio químico", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
