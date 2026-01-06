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
  <h3>Cálculos de mol–mol.</h3>

  <p>Si se tiene la ecuación química de una reacción balanceada y el número de moles de reactivos y productos, se puede calcular el número de moles de otro reactivo o producto, empleando la razón molar correspondiente. </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-molAB.webp','Conversión de moles. Convertir moles de A a moles de B.')
  ?>
  </div>


  <p>Para hacer un cálculo estequiométrico de relación mol-mol se deben seguir los siguientes pasos:</p>

  <ol class="ol-number">
    <li>Escribir la ecuación química completa y balanceada.</li>
    <li>Identificar la cantidad de moles de la sustancia de partida.</li>
    <li>Escribir la razón molar de las dos sustancias que participan, debe tener la siguiente forma:</li> 
  </ol>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-deseada.webp')
  ?>
  </div>

  <h3>Veamos un ejemplo:</h3>

  <p>De acuerdo con la siguiente ecuación. ¿Cuántos moles de NH3 se producen a partir de  6 moles de H2?</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-ecuacion.webp')
  ?>
  </div>

  <p>Se inicia partiendo de los moles de H2, se debe calcular los moles de amoniaco, por lo tanto, la razón molar empleada será:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-ramolar.webp')
  ?>
  </div>
 
  <p>El problema se resuelve de la siguiente forma:multiplicando el número de moles de la sustancia de partida (H2) por la razón molar de la sustancia deseada (NH3). Observa que las unidades similares van eliminadas, en este ejemplo, mol de H2, teniendo al final como unidades mol de NH3.</p>

   <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-resueltawebp')
  ?>
  </div>

  <p>Se producen 4 moles de NH3.</p>

  <p>En este video podrás observar otro ejemplo de relación mol-mol.</p>

  <?php
  renderVideoIframe('EAELye27X20', 'Ejercicio mol-mol.');
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
