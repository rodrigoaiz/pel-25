<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2> Reconoce la importancia de la epidemiología para la investigación en salud pública</h2>

    <p>La investigación en salud pública, se enfoca en la prevención de enfermedades, en promover y mejorar la salud, así como en la atención médica a nivel de la población en general, esto lo realiza por medio de la recolección, análisis e interpretación de datos, para comprender los problemas de salud de las poblaciones y finalmente desarrollar estrategias y políticas adecuadas, solucionando así los problemas de salud pública. Para lograrlo se consideran algunos aspectos como los factores de riesgo, los determinantes y comportamientos sociales y los estilos de vida, se evalúan y ajustan las medidas implementadas, con la intervención de profesionales de diversas disciplinas. Además se busca la equidad en el acceso a la salud y la formulación de políticas para mejorar el estado de salud de la población. </p>

    <p>Un elemento importante para el logro de lo mencionado anteriormente, es la <b>Epidemiología</b>, ya que proporciona métodos y herramientas, a través de estudios observacionales y experimentales, que permiten monitorear la incidencia de enfermedades, detectar brotes tempranos y da respuesta rápida a emergencias e implementa medidas preventivas. La Epidemiología también establece las relaciones causales entre los factores de riesgo y las enfermedades, proporcionando información sobre el tiempo, lugar y personas, por lo que permite elaborar patrones geográficos, tendencias temporales y grupos de poblaciones afectadas, para determinar de forma apropiada los lugares de intervención. Otro aspecto importante es que las decisiones políticas en materia de salud pública, deben tomar en cuenta los resultados de los estudios epidemiológicos, para plantear las estrategias más adecuadas y eficientes así como la distribución de los recursos para mejorar la salud de las poblaciones. Finalmente la Epidemiología no sólo se encarga de la prevención y control de enfermedades, sino también interviene en la promoción de la salud, ya que identifica los factores protectores y las prácticas saludables en la población.</p>

        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-epidemiologia.webp', 'La epidemiología es útil para describir e investigar la salud de la población.', 'https://ciencia.unam.mx/leer/887/epidemiologia-util-para-describir-e-investigar-la-salud-de-la-poblacion', 'recuperado el 16 de diciembre de 2023'); ?>
         </div>

    <p>Concluyendo, la Epidemiología juega un papel fundamental en la investigación en salud pública, ya que proporciona la base científica necesaria que permite comprender, prevenir y controlar las enfermedades en las poblaciones, para de esta manera mejorar la salud pública en general.</p>

    
  <?php ob_start(); ?>
  <p>Lee detenidamente el artículo,“La vigilancia epidemiológica en México” y realiza un resumen de 500 palabras, con letra calibri del número 11, los títulos pueden ser con letra de mayor tamaño y en el color que prefieras, puedes incluir imágenes para ilustrarlo indicando la fuente de donde las obtuviste (URL o cita). Recuerda que debes de ser cuidadoso con la redacción y la ortografía.
El resumen deberá tener una carátula que contenga los siguientes datos: Institución, título, nombre del alumno, grupo, asignatura, fecha de entrega.
</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a2', "Artículo: La vigilancia epidemiológica en México", $ActividadContent);
  ?>

   
 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
