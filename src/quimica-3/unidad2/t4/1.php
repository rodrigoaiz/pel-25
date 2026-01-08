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
  <h2>Información cuantitativa que se obtiene a partir de una ecuación química. Estequiometría</h2>

  <?php ob_start(); ?>
  <p>Como actividad de inicio participarás en el foro La importancia de cuantificar las reacciones químicas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a1', "La importancia de cuantificar las reacciones químicas.", $ActividadContent);
  ?>

  <p>La importancia de cuantificar una reacción química es porque para las industrias obtener la mayor producción en cada proceso es benéfico debido a que genera más ganancias económicas para este sector. En este aspecto radica  la importancia de conocer la estequiometría de las reacciones químicas en los procesos industriales, para poder determinar la cantidad de producto que se obtendrá en cada reacción.</p>

  <p>Observa el siguiente video a cerca de la importancia de la estequiometría:</p>

  <?php
  renderVideoIframe('fqC_yWfo8Us', 'Importancia de la estequiometría ');
  ?>

  <p>Como observaste en el video, la estequiometría está presente en varios ejemplos de la vida diaria y conocer las cantidades de sustancias en los productos y alimentos es importante para diferentes funciones. Por ejemplo, todos producimos un poco de colesterol, sin embargo, la cantidad excesiva es lo que trae consecuencias negativas para la salud, en este caso, la importancia de conocer la cantidad de colesterol ayuda a prevenir enfermedades. Las principales aplicaciones de la estequiometría son en el análisis químico de muestras y en los procesos industriales.</p>

  <p>En la siguiente imagen se muestra la estequiometría de la reacción química para la síntesis del amoniaco (NH3), esta sustancia es una materia prima importante para la producción de fertilizantes, es por ello por lo que se deben de conocer las cantidades estequiométricas de la reacción para lograr una alta producción de amoniaco. Más adelante estudias condiciones de reacción para promover la conversión total de reactivos a productos.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-amoniaco.webp','Síntesis de amoniaco NH₃.')
  ?>
  </div>
  

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
