<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadH5P.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Propiedades químicas de los metales (Serie electromotriz). </h2>
  
  <p>Como viste en el ejemplo de la reacción de desplazamiento simple, el Cu desplazó a la Ag, con lo cual el Cu queda enlazado al ion nitrato (NO3-) y de esta forma obtener la Ag metálica. Pero entonces ¿es posible que todos los elementos, en este caso los metales, puedan desplazar a otros y llevarse a cabo una reacción química? La respuesta a esta pregunta la brinda la <b><i>serie electromotriz.</i></b></p>

  <p>La Serie electromotriz es una tabulación en la cual varias sustancias, tales como metales o elementos son listados de acuerdo con su reactividad química. La reactividad de un elemento químico es la tendencia que dicho elemento posee a combinarse con otros. Para los metales esta tendencia está directamente relacionada con la facilidad con la que pierden sus electrones de valencia. Cuanto menor sea la energía de ionización del metal, mayor será su reactividad. Observa la siguiente imagen:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-electro.webp','Serie electromotriz')
  ?>
  </div>

  <p>Como puedes observar, en la tabla de la Serie electromotriz, el Cu está por encima de la Ag, es decir, es más reactivo, por lo tanto es posible que pueda desplazar a la plata, formar un compuesto con el NO3- y dejar a la plata como elemento metálico.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-simple.webp','Reacción de desplazamiento simple')
  ?>
  </div>

  <p>En ejemplo de la sustitución doble, ocurre algo similar el Ca es más reactivo que el Mg, por lo que el Ca puede desplazar al Mg para formar óxido de calcio CaO y el Mg forma MgS.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-doble.webp','Reacción de desplazamiento doble')
  ?>
  </div>

  <p>Observa los siguientes ejemplos:</p>

  <p>¿Son posibles las siguientes reacciones químicas?</p>

   
    <?php
      renderImage('q3-u2-imposible.png','Reacciones posibles o no posibles')
  ?>
  

  <p>Como puedes observar, la serie electromotriz es una herramienta que permite predecir si una reacción química es posible o no. Ahora es momento de aplicar lo que has aprendido. Realiza la actividad Predicción de reacción y ecuación química.</p>

  <?php ob_start(); ?>
  <p>A continuación, realiza la actividad de predicción de reacciones químicas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u2-t3-p2', "Predicción de reacciones químicas", $ActividadContent);
  ?>

  <p>Muy bien, ahora observarás un video en el cual se presenta una actividad experimental, la cual pone en evidencia la reactividad de los metales, así como su relación con la serie electromotriz.</p>

  <p>Observa con atención el video “<b>Experimentos hierro y sulfato de cobre</b>” y toma las notas que consideres necesarias.</p>

  <?php
  renderVideoIframe('qoXZjaUeNss', 'Experimentos hierro y sulfato de cobre');
  ?>

  <p>De acuerdo con lo observado en el video “<b>Experimentos hierro y sulfato de cobre</b>”, elabora la actividad Experimentos hierro y sulfato de cobre. </p>

  <?php ob_start(); ?>
  <p>A continuación, elabora la actividad Experimentos hierro y sulfato de cobre.</p>
  <p>Instrucciones</p>
  <p>De acuerdo con lo observado en el video “Experimentos hierro y sulfato de cobre”, elabora el informe de ese experimento en un documento de word no mayor de 2 páginas. El informe debe contener los siguientes puntos:</p>
  <p>Los criterios que se evaluarán en el informe son:</p>
  <ul>
    <li><strong>Título:</strong> Indica claramente el tema que se está tratando en el experimento</li>
    <li><strong>Introducción</strong>: Debe ser un texto breve que proporcione información sobre el tema que se desarrolla en el experimento.</li>
    <li><strong>Objetivos: ¿Qué se busca al realizar la actividad? Se sugiere iniciar la redacción de los objetivos con un verbo en infinitivo como por ejemplo</strong>: Observar, identificar, clasificar, determinar…</li>
    <li><strong>Palabras clave</strong>: (al menos tres) Son palabras clave que te ayudarán a comprender el tema.</li>
    <li><strong>Hipótesis</strong>: Escribe la hipótesis respondiendo a la pregunta ¿Qué crees que sucederá en el experimento?</li>
    <li><strong>Desarrollo experimental</strong>: Describe brevemente el procedimiento que se realizó durante el experimento</li>
    <li><strong>Ecuación química</strong>: Escribe la ecuación química de la reacción que se lleva a cabo, debe estar balanceada.</li>
    <li><strong>Resultados y cálculos</strong>: Se recomienda presentar los resultados en forma de tabla y en caso de ser necesario, incluir cálculos.</li>
    <li><strong>Análisis de resultados</strong>: Explica a qué se debe realizar los resultados que se obtuvieron, debes hacer referencia a la hipótesis que planteaste </li>
    <li><strong>Conclusiones</strong>: Puntualiza los resultados, de acuerdo con los objetivos planteados</li>
    <li><strong>Referencias</strong>: Incluye las referencias que utilizaste para elaborar tu informe.</li>
  </ul>
  <p>Revisa el instrumento de <a href="<?php echo PATH_DOCS . 'u2-t3-p2-lista-cotejo.docx'; ?>" target="_blank">evaluación adjunto</a>.</p>

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a5', "Experimentos hierro y sulfato de cobre", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
