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
  <h3>Cálculos de masa–masa.</h3>

  <p>Los cálculos estequiométricos de masa-masa considera partir de la masa de la sustancia de partida y determinar la masa de otra sustancia deseada. De acuerdo con el siguiente esquema de conversión:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-masamolAB.webp','Cálculos estequiométrico masa-masa. Conversión a partir de la masa A a la masa de la sustancia B.')
  ?>
  </div>

  <p>Los pasos para realizar ejercicios de relación masa-masa, son los siguientes:</p>

  <ol class="ol-number">
    <li>Escribir la ecuación química completa y balanceada.</li>
    <li>Identifica la cantidad en gramos de la sustancia denominada A.</li>
    <li>Convertir los gramos de la sustancia A a gramos de la sustancia B, empleando la masa molar de la sustancia A como factor de conversión.</li>
    <li>Convertir moles de la sustancia A a moles de la sustancia B con la razón molar (mol B/mol A) indicada por la ecuación química.</li>
    <li>Convertir los moles de la sustancia B a gramos de B con la masa molar de la sustancia B.</li>
  </ol>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-esquemasamol.webp')
  ?>
  </div>

  <h4>A continuación, se ejemplifica un ejercicio:</h4>

  <p>¿Cuántos gramos de NH3 se producen a partir de 30 g de H2?</p>

  <p>Se escribe primero la ecuación química y se identifican las dos sustancias amoniaco e hidrógeno.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-ecuacion.webp')
  ?>
  </div>

  <p>Se comienza el ejercicio escribiendo la masa de 30g de H2, posteriormente se multiplica por el factor de conversión de la masa molar de H2, (2g / mol), obteniéndose los moles de H2, con la razón molar de 2mol NH3/ 3mol H2 se convierten los moles de hidrógeno a moles de amoniaco, finalmente, se multiplica por el factor de conversión de la masa molar del amoniaco (17g / mol), transformándose los moles de amoniaco a gramos de amoniaco.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-ejemasa.webp')
  ?>
  </div>

  <p>Para complementar todos los cálculos estequiométricos, te invitamos a revisar el siguiente video.</p>

  <?php
  renderVideoIframe('tcNTLaSlyWg', 'Ejercicios de cálculos estequiométricos.');
  ?>

  </div>
  <?php ob_start(); ?>
  <p>Realiza los siguientes ejercicios de cálculos estequiométricos y corrobora las respuestas en la actividad cálculos estequiométricos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a3', "cálculos estequiométricos.", $ActividadContent);
  ?>
  

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
