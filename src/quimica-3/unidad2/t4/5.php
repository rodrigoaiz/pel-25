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
  <h3>Balanceo de ecuaciones sencillas método redox.</h3>

  <p>Otra forma de balancear una ecuación química es por el método de óxido-reducción.</p>

  <p>A continuación, se indican los pasos para balancear por este método.</p>

  <ol class="ol-number">
    <li>La ecuación química debe estar bien escrita. 

      <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-paso1.webp')
  ?>
  </div>

    </li>

    <li>Asignar los números de oxidación de cada elemento en los reactivos y los productos. Se observa que el átomo de Mn se reduce de 7+ a +2, el átomo que se oxida es el N de +3 a +5. 

      <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-paso2.webp')
  ?>
  </div>

    </li>

    <li>Determinar el número de electrones que intercambia el agente oxidante y el agente reductor. 

      <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-paso3.webp')
  ?>
  </div>

    </li>

     <li>Determinar las semirreacciones de oxidación y reducción, identificando los electrones intercambiados en cada semirreacción. y los coeficientes. Multiplicar cada semirreacción por el número de electrones intercambiados, para encontrar los coeficientes estequiométricos del elemento que se oxida y reduce. 

      <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-paso4.webp')
  ?>
  </div>

    </li>

    <li>Sustituir los coeficientes encontrados en los reactivos y productos, finalmente se balancea por tanteo.

      <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-paso5.webp')
  ?>
  </div>

    </li>
  </ol>

  <p>En el siguiente enlace puedes complementar más sobre el balanceo por reacciones redox. Se trata de un recurso educativo en el que podrás navegar para saber sobre Balancear ecuaciones redox, información y ejemplos.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-khan.webp','Balanceo de ecuaciones químicas por redox.','https://es.khanacademy.org/science/ap-chemistry-beta/x2eef969c74e0d802:chemical-reactions/x2eef969c74e0d802:oxidation-reduction-redox-reactions/a/oxidation-reduction-redox-reactions','Khan Academy')
  ?>
  </div>

  <p>Ahora, contesta las siguientes preguntas para aplicar lo aprendido.</p>

  <?php ob_start(); ?>
  <p>Realiza el cuestionario Balanceo de ecuaciones.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a4', "Balanceo de ecuaciones", $ActividadContent);
  ?>
  

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
