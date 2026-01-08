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
  <h2>Información cuantitativa que se obtiene a partir de una ecuación química.</h2>
  <h3>Rendimiento de una reacción química.</h3>

  <p>La galena es un mineral, cuya composición química es sulfuro de plomo(II) PbS. Este mineral sirve para la obtención de plomo elemental, a través de distintos procesos químicos como la reducción, una reacción de este proceso se ilustra en la siguiente ecuación química, donde el óxido de plomo(II) se transforma a plomo empleando carbono como agente reductor.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-2pb.webp','Cálculos estequiométrico masa-masa. Conversión a partir de la masa A a la masa de la sustancia B.')
  ?>
  </div>

  <p>Durante los procesos de obtención de metales, se obtienen rendimientos bajos, esto es porque durante la extracción y purificación del metal se pierde producto.</p>

  <p>En general cuando se llevan a cabo reacciones químicas en las industrias, es difícil obtener el 100% de los productos, por distintas causas como el proceso de purificación, formación de subproductos y factores de condiciones de reacción. La cantidad de producto que se obtiene en gramos de una reacción química se llama rendimiento real y el cálculo que se puede determinar de rendimiento de una reacción a través de la estequiometría se llama rendimiento teórico.</p>

  <p>De esta forma el <b>rendimiento porcentual</b> de una reacción se obtiene dividiendo el <b>rendimiento real</b> entre el <b>rendimiento teórico</b> y multiplicando por 100.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-rendimiento.webp')
  ?>
  </div>

  <p>Para determinar el rendimiento, se debe conocer en una reacción química, el <b>reactivo limitante.</b> Este reactivo es el que se consume primero y totalmente en una reacción química, este reactivo delimita la cantidad de producto formado.</p>

  <p>Para un cálculo de reactivos limitantes, se deben indicar las cantidades de dos o más reactivos. Los pasos para determinar en una reacción química el reactivo limitante son:</p>

  <ol class="ol-number">
    <li>Determina la cantidad de producto (mol o gramos) formado con base a la cantidad conocida de los reactivos.</li>
    <li>Identifica el reactivo limitante, este es el que forma la menor cantidad de producto.</li>
  </ol>

  <p>Este es un ejemplo:</p>

  <p>La siguiente ecuación química muestra la obtención de plomo:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-2pb1.webp')
  ?>
  </div>

  <h4>Si se parte de 50g de PbO y 10g de C. </h4>

  <ol class="ol-alpha">
    <li>Determina cual sustancia es el reactivo limitante y los gramos obtenidos de plomo.</li>
    <li>Si se obtienen 30g de Pb ¿Cuál es el rendimiento de la reacción?</li>
  </ol>

  <p>Para dar solución al inciso a, se debe determinar la cantidad de Pb que se forma a partir de la cantidad dada de cada reactivo.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-realim.webp')
  ?>
  </div>

  <p>Se observa que la menor cantidad de Pb se obtiene del PbO, por lo tanto, este es el reactivo limitante.</p>

  <p>La cantidad de producto formado es 46.4g de Pb, esto corresponde al rendimiento teórico calculado por la estequiometría de la reacción.</p>

  <p>Para dar solución al inciso b, solo aplicamos la fórmula de rendimiento porcentual, se tiene el dato de rendimiento real, 30 g de Pb, y el rendimiento teórico es 46.4g. Obteniendo un rendimiento de 64.6% de Pb.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-porcentaje.webp')
  ?>
  </div>

  <p>Para complementar el concepto de reactivo limitante revisa el siguiente documento.</p>

  <a href="<?php echo PATH_DOCS . 'u2_t4_reactivo-limitante.pdf'; ?>" target="_blank">reactivo limitante</a>

  <?php ob_start(); ?>
  <p>Ahora, para corroborar lo aprendido del tema de estequiometría, realiza la actividad Problema de estequiometría.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a6', "Problema de estequiometría.", $ActividadContent);
  ?>




  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
