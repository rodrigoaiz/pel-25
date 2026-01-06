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
  <h3>Balanceo de ecuaciones sencillas por inspección.</h3>

  <p>Cuando se escribe una ecuación química, los números que se escriben antes de las fórmulas son los coeficientes estequiométricos y representan la cantidad del elemento o compuesto que se requiere en los reactivos o productos para balancear la ecuación y cumplir con la ley de conservación de la materia para tener la misma cantidad de átomos tanto en reactivos como en productos.</p>

  <p>Los coeficientes estequiométricos se pueden modificar para hacer el balanceo de la ecuación, los subíndices de las fórmulas químicas solo indican la cantidad de átomos, pero no se pueden modificar al balancear una ecuación.</p>

  <p>Observa el siguiente ejemplo para balancear por el método de inspección o tanteo:</p>

  <p>La reacción de hidrógeno con nitrógeno para producir amoniaco. La ecuación química sin balancear, es:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-nobalanceo.webp','1 mol de carbono tiene una masa de 12g y contiene 6.022X1023 átomos de carbono.')
  ?>
  </div>

  <p>Así como está, la ecuación no cumple con la ley de conservación de la materia, porque de lado de reactivos hay 2 átomos de H en la molécula de H2, 2 átomos de N en la molécula de N2 y en los reactivos hay 1 átomo de N y 3 átomos de N en la molécula del amoniaco.</p>

  <p>Primero, se balancea el átomo de H del lado de reactivos colocando el coeficiente 3 antes del H2.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-nobalanceo1.webp')
  ?>
  </div>

  <p>Ahora, hay 6H de lado de reactivos y 3H en reactivos, para balancear se debe encontrar un múltiplo de 3 que, de 6, este número es 2. Se coloca el coeficiente 2 antes de la fórmula del NH3. Con esto ya se balancean los átomos de H, se tienen 6 H en reactivos y en productos.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-nobalanceo2.webp')
  ?>
  </div>

  <p>Finalmente, la ecuación se balancea con 6 átomos de H y 2 átomos de N tanto en reactivos como en productos, encontrando los coeficientes estequiométricos 3, 1 y 2 respectivamente para cada sustancia.</p>

  <p>En el siguiente video puedes revisar otros ejemplos de balanceo de ecuaciones químicas por el método de tanteo.</p>

  <?php
  renderVideoIframe('wl_HCBxpBs0', 'Balanceo de ecuaciones químicas por tanteo.');
  ?> 

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
