<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Gráficas de dispersión</h3>
  <p>En esta lección desarrollaremos los siguientes aprendizajes:</p>
  <p><strong>Aprendizaje esperado:</strong></p>
  <ul class="ul-disc">
    <li>Analizar el gráfico de la función lineal.</li>
    <li>Reconocer los coeficientes de la función lineal.</li>
    <li>Determinar el dominio, el rango o imagen y el punto de cruce de la función lineal.</li>
    <li>Analizar el gráfico de la función cuadrática.</li>
    <li>Reconocer los coeficientes de la ecuación cuadrática.</li>
    <li>Deducir la concavidad de la parábola.</li>
    <li>Determinar el dominio, el rango o imagen, la ordenada al origen, el vértice y los puntos de cruce de la parábola.</li>
  </ul>
  <p>Para ello trabajaremos revisando y practicando los siguientes temas:</p>
  <ul class="ul-disc">
    <li>El gráfico de dispersión.</li>
    <li>Análisis de la función lineal y ecuación de la recta.</li>
    <li>Análisis de la función cuadrática y la ecuación de la parábola.</li>
  </ul>
  <h4>Introducción</h4>
  <p>En el medio científico o escolar como en el de la comunicación, la información basada en datos, numérica o estadística suele resultar difícil de asimilar. Los diferentes tipos de gráficos y diagramas contribuyen a facilitar su interpretación de una manera mucho más rápida y visual. Ponen de relieve la relación entre los elementos de un conjunto o sistema de forma conceptual, haciendo destacar los patrones y tendencias con información relevante.</p>
  <p>Incorporar estos elementos gráficos en los modelos de comunicación interna y externa de cualquier actividad resulta muy útil, ya que contribuyen a tomar mejores decisiones que mejoran los resultados. Los gráficos y diagramas que aportan información de valor están presentes en todo tipo de medios y canales profesionales, corporativos y educativos. Familiarizarse con ellos es importante no solo para crearlos si no también para saber interpretarlos. (Ingenio virtual, 2019).</p>
  <p>En este material exponemos la gráfica de dispersión (XY), esta es una herramienta de control y apoyo para verificar la existencia de una correlación o relación entre variables cuantitativas. El objetivo de esta herramienta es analizar la posible relación causa-efecto entre dos variables.</p>
  <p>La gráfica de dispersión permite mostrar la relación entre dos variables, es el mejor método para mostrar tanto patrones de comportamientos lineales y no lineales, como determinar los valores máximo y mínimo. Por otro lado, permite determinar valores desconocidos dentro del rango de los datos (interpolar), como fuera de él (extrapolar).</p>
  <p>Es la gráfica que más utilizarás en tu bachillerato en materias como matemáticas, química, física, estadística, cálculo, entre otras.</p>
  <?php ob_start(); ?>
  <p>Iniciamos, primero harás la reflexión, un intercambio de información y opiniones acerca de las aplicaciones de la parábola en nuestra vida.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a9', "Aplicaciones de la parábola", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el <a href="<?php echo PATH_DOCS . 'u3_t5_descargable_practica_grafico_dispersion.docx'; ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de cada actividad. Mantén abierta la práctica para realizar el resto de los ejercicios. Conforme avances recuerda guardar tu progreso.</li>
    <li>No olvides guardar tu avance.</li>
    <li>Una vez que termines todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U3Ap5. Ejemplo: SanchezLopez_JoseLuis_U3Ap5.</li>
    <li>Consulta los <a href="<?php echo PATH_DOCS . 'u3_t5_lista_cotejo_practica_grafico_dispersion_analisis_graficos.pdf'; ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a10', "Práctica: Gráfico de dispersión y análisis de gráficos", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
