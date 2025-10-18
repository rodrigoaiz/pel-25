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
  <h2>Información cuantitativa que se obtiene a partir de una ecuación química. </h2>
  <h3>Estequiometría</h3>

  <p>La palabra estequiometría proviene del latín <b>stoicheion “elemento” y metron “medida”</b>. La estequiometría es la parte de la química que estudia las proporciones cuantitativas de los elementos o compuestos. La estequiometría de reacción se refiere a las relaciones cuantitativas entre sustancias cuando participan en una reacción química. </p>

  <p>En esta lección aprenderás a contestar las preguntas ¿Qué cantidad de un reactivo se requiere para producir cierta cantidad de producto?  y ¿cuál es el rendimiento de una reacción química? </p>

  <p>Para entender la estequiometría, debes recordar que en una reacción química los átomos se reacomodan para formar otras sustancias. La representación de una reacción química es a través de ecuaciones químicas donde se emplean símbolos y fórmulas químicas.</p>

  <p>En el siguiente esquema se representan las partes de una ecuación química, las sustancias que reaccionan se llaman <b>reactivos</b> y las sustancias que se forman se llaman <b>productos</b>, y las cantidades de las sustancias que intervienen son llamados <b>coeficientes estequiométricos</b>.</p>

   <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-elementos.webp','Elementos de una ecuación química.')
  ?>
  </div>

  <p>Cuando ocurre una reacción química hay evidencias que muestran que hubo un cambio químico, por ejemplo, el cambio de temperatura, formación de un precipitado, cambio de color, desprendimiento de burbujas lo cual es indicativo de la formación de un gas, entre otros cambios.</p>

  <p>En la siguiente tabla se muestran los símbolos generales para representar una ecuación química: </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-simbologia.webp','Tabla 1. Simbología de una ecuación química.')
  ?>
  </div>

  <p>Para complementar el concepto de reacción química, revisa el siguiente video:</p>

  <?php
  renderVideoIframe('AaqOiGVdRmM', '¿Qué es una reacción química?');
  ?>

  <?php ob_start(); ?>
  <p>En la siguiente actividad aplicarás lo aprendido sobre <b>Reacción y ecuación química.</b></p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a2', "Reacción y ecuación química", $ActividadContent);
  ?>
  

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
