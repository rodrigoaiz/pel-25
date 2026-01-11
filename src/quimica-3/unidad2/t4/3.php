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
  <h3>Concepto de mol.</h3>

  <p>Revisa el siguiente video sobre el Mol:</p>

  <?php
  renderVideoIframe('AaqOiGVdRmM', '¿Qué es una reacción química?');
  ?>

  <p>Como se observó en el video para poder cuantificar la cantidad de las sustancias se emplea como unidad el <b>mol</b>, se define como la cantidad de sustancia que contiene tantas unidades formulares como átomos hay exactamente en 12g del isotopo del carbono 12. Las unidades formulares pueden ser átomos como Au, moléculas como 02, H2O, glucosa C6H12O6 o iones como Na+ Cl- y OH-.</p>

  <p>Un <b>mol de carbono 12 tiene 6.022X1023 átomos de carbono</b>. Esta cantidad se conoce como el <b>número de Avogadro</b>. De esta forma 1 mol de cualquier sustancia contiene 6.022X1023  unidades formulares que pueden ser átomos, iones, moléculas, protones, electrones u otras partículas. Las cantidades visibles se pueden cuantificar con unidades como las docenas, el mol es la unidad estándar para cuantificar números grandes de moléculas pequeñas.</p>

  <p>La fórmula química indica la proporción entre el número de átomos de un compuesto, estas proporciones son las mismas para contar átomos y moles.</p>

  <p>Por ejemplo: <b>En el NaNO3 hay 1 átomo de Na, 1 átomo de N y 3 átomos de O</b>, también se puede indicar que <b>hay 1 mol de Na, 1 mol de N y 3 mol de O</b>.</p>

   <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-carbono.webp','1 mol de carbono tiene una masa de 12g y contiene 6.022X1023 átomos de carbono.','https://pixabay.com/es/photos/carb%C3%B3n-repollo-quemado-combustible-842468/','Pixabay')
  ?>
  </div>

  <p>La <b>masa molar</b> de una sustancia es la masa de 1 mol expresada en gramos y la <b>unidad es g/mol</b>.</p>

  <p>Para determinar la masa molar de una sustancia se deben considerar los moles o átomos de cada elemento y multiplicar por la masa atómica de cada elemento. Al final, se suman las masas y se obtendrá la masa total de 1 mol de esa sustancia.</p>

  <p>Ejemplo: Para el NaNO3 se debe hacer el cálculo así:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-nano.webp','Masa molar de NaNO3. Elaboración propia.')
  ?>
  </div>

  <p>La masa molar del <b>NaNO3 es de 85g/mol</b>.</p>

  <p>Visita las siguientes páginas podrás encontrar más información acerca de cómo calcular masas molares, este documento te servirá para reforzar ejercicios sobre masa molar y además encontrarás un simulador para corroborar si tus cálculos para determinar la masa de un compuesto son correctos.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-calculadora.webp','Calculadora masa molar','https://www.quimicaweb.net/calculadoramm/calculadora_mm.html','Química web')
  ?>
  </div>
  <?php ob_start(); ?>
  <p>Realiza la actividad Mol y masa molar donde reafirmarás lo relacionado con el concepto de mol.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a3', "Concepto de Mol", $ActividadContent);
  ?>
  

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
