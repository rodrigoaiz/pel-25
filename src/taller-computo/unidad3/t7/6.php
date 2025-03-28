<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Herramienta Filtrar</h3>
  <p>Esta herramienta nos permite seleccionar un dato de una columna, u otros datos de otras columnas, para nuestro ejercicio, <strong>mostraremos los resultados a partir del tipo de género más vendido</strong>.</p>
  <p>Recordemos que se puede seleccionar del <strong>bloque edición, de la Cintilla Inicio o en la cintilla datos, bloque ordenar y filtrar</strong>.</p>
  <p>En la imagen siete se muestra el menú flotante filtro, con todos los géneros elegidos, así mismo se muestra cuando solo se realiza una selección y el resultado se muestra en la tabla once.</p>
  <div class="my-5 max-w-xl mx-auto">
    <?php renderImage('u3_t7_imagen7.webp', 'Herramienta filtrar.') ?>
  </div>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_filtro_genero.webp', 'Filtro por Tipo de Género.') ?>
  </div>
  <p>Si tienes duda te recomiendo ver el siguiente video.</p>
  <?php renderVideoIframe('Z6wDrTYzigk', 'Ejercicio compra de libros.', 'mx-auto max-w-3xl') ?>
  <?php ob_start(); ?>
  <p>Realiza el siguiente ejercicio de autoevaluación unidad 3 Aprendizaje 7, que te permite conocer tu aprendizaje sobre “Resuelve problemas utilizando funciones estadísticas y datos presentados en forma tabular”.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a14', "Funciones estadísticas", $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <p>En las nuevas versiones de Hojas de Cálculo tiene una herramienta conocida como Estadística descriptiva siendo muy útil para generar un resumen de datos estadísticos de nuestros datos de una manera rápida y sencilla. Para utilizar esta herramienta debes tener habilitadas las Herramientas de análisis de datos.</p>
  <p>Te invito a revisar el siguiente video, donde te darás una idea de cómo utilizar esta herramienta.</p>
  <?php renderVideoIframe('PhwVhMVfiis', '¿CÓMO REALIZAR UN ANÁLISIS DE DATOS CON ESTADÍSTICA DESCRIPTIVA EN EXCEL?', 'mx-auto max-w-3xl') ?>
  <h4>¿Quieres saber más?</h4>
  <p>Sobre el resumen estadístico de datos automático, te invito a revisar el siguiente video.</p>
  <?php renderVideoIframe('39-3dU1s20I', 'Resumen estadístico en excel', 'mx-auto max-w-3xl') ?>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "¿Sabías que?");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
