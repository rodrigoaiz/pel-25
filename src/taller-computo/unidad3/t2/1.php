<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'GeniallyIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Generaciones series automáticas</h3>
  <p>Las series numéricas son una secuencia de números o texto ordenados, los cuales pueden estar presentados en fila o columna en una hoja electrónica de cálculo. Las cuales pueden generarse con “autorrelleno” o empleando herramientas incluidas en la HEC (hoja electrónica de cálculo).</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t2_series_numericas.gif', 'Generaciones series automáticas.'); ?>
  </div>
  <h4>Tipos de Series</h4>
  <p>Para conocer la diferencia entre los tipos de series, revisa la infografía que a continuación se presenta, en donde se describen las series y cómo funcionan dependiendo el incremento que se utilice.</p>

  <?php renderGenially('650d2b58b85e11001129621b') ?>

  <h4>Autorrellenar</h4>
  <p>El autorrellena una serie permite que el generarlas sea sencillo, por lo tanto, este proceso se puede llevar a cabo de dos maneras:</p>
  <div class="grid grid-cols-2 gap-4 my-5">
    <div class="max-w-2xl mx-auto bg-secondary/45 px-5 py-2 rounded-lg">
      <h4 class="mt-2">Arrastrar</h4>
      <div class="max-w-60 mx-auto"><?php renderImage('u3_t2_series_numericas_2.gif'); ?></div>
      <p>Se colocan los dos primeros números consecutivos, se selecciona ambas celdas y del lado inferior derecho (se observa un cuadro) arrastrar (por columna o fila) y soltar para generar la serie numérica.
      </p>
      <div class="max-w-sm mx-auto"><?php renderImage('u3_t2_series_numericas_4.webp'); ?></div>
    </div>
    <div class="max-w-2xl mx-auto bg-secondary/45 px-5 py-2 rounded-lg">
      <h4 class="mt-2">Dar doble clic</h4>
      <div class="max-w-60 mx-auto"><?php renderImage('u3_t2_series_numericas_3.gif'); ?></div>
      <p>Se requiere previamente tener una serie creada. Luego, se colocan los dos primeros números consecutivos de la serie, seleccionar y dar doble clic en el nodo inferior derecho de la celda.
      </p>
    </div>
  </div>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('mVhLJuXKdfI', 'Herramientas de rellenar.');
    ?>
  </div>
  <?php ob_start(); ?>
  <p>Para comenzar la unidad responde el siguiente <strong>cuestionario diagnóstico</strong> para conocer tus capacidades y determinar al final de la unidad si se cumplen las metas de tu aprendizaje.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a4', "Cuestionario diagnóstico unidad 3", $ActividadContent);
  ?>
  <p>Revisa el siguiente video en el que se explica cómo se construyen las series numéricas en Excel.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('Bs8CvNvSLuI', 'Generación de series numéricas.');
    ?>
  </div>
  <?php ob_start(); ?>
  <p>Has logrado llegar al final de las actividades, ahora te invito a realizar el siguiente cuestionario de autoevaluación para que conozcas tu desempeño en el aprendizaje “Genera series numéricas” ¡Éxito!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a5', "Generación de series numéricas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
