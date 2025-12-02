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
  <h3>Cálculos de masa–mol.</h3>

  <p>Los cálculos estequiométricos también se pueden determinar en masa. Partiendo de la cantidad en masa de un reactivo o producto y determinar el número de mol de otro reactivo o producto, esta relación se conoce como masa-mol.</p>

<div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-masamol.webp','Conversión de masa. Convertir masa de una sustancia A a una sustancia B.')
  ?>
  </div>

  <p>Para hacer un cálculo estequiométrico de relación masa-mol se deben seguir los siguientes pasos:</p>

  <ol class="ol-number">
    <li>Escribir la ecuación química completa y balanceada.</li>
    <li>Identificar la cantidad en masa de la sustancia de partida.</li>
    <li>Convertir los gramos de la sustancia de partida a gramos de la sustancia deseada, empleando la masa molar de la sustancia de partida como factor de conversión.</li> 
    <li>Convertir moles de la sustancia de partida a moles de la sustancia deseada con la razón molar de este par que se obtiene de la ecuación química balanceada.</li>
  </ol>

  <h4>Realicemos un ejercicio:</h4>

  <p>Continuando con la ecuación de síntesis del amoniaco ¿Cuántos moles de NH3 se producen a partir de 30g de H2?</p>

  <p>La ecuación de síntesis de amoniaco es:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-ecuacion.webp')
  ?>
  </div>

  <p>Se inicia escribiendo la cantidad de la sustancia de partida, en este caso 30g de H2, se continúa multiplicando por el factor de conversión de la masa molar de H2, 2g de H2 están en 1 mol de H2, de esta forma se convierten los gramos a moles de H2. Con la razón molar de hidrógeno y amoniaco se convierten los moles de hidrógeno a moles de amoniaco.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-ecuacion.webp')
  ?>
  </div>

  <p>Se producen 10 moles de NH3 a partir 30g de H2.</p>

  <p>En el siguiente video puedes complementar más sobre cálculos de relación masa-mol.</p>

  <?php
  renderVideoIframe('Km_LhG8SlYE', 'Ejercicio mol-mol.');
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
