<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Funciones Estadísticas básicas</h3>
  <h4>Presentación</h4>
  <p>Es un gusto iniciar contigo esta nueva lección de aprendizaje “<strong>Resuelve problemas utilizando funciones estadísticas y datos presentados en forma tabular</strong>”, en este utilizas algunas de las funciones básicas de estadística para resolver problemas a partir de datos tabulares, para lograr el aprendizaje realizamos diferentes actividades interactivas.</p>
  <div class="my-5 max-w-2xl mx-auto"><?php renderImage('u3_t7_optimization.webp', 'Análisis de datos. Imagen de vector4stock.', 'https://www.freepik.com/free-vector/process-optimization-concept-idea-business-improvement-development-company-data-analysis-effective-entrepreneurship-organization-isolated-flat-vector-illustration_29243250.htm#query=an%C3%A1lisis%20estad%C3%ADstico%20de%20datos&position=2&from_view=search&track=ais', 'Freepik.') ?></div>
  <p>Espero que las actividades que realices sean agradables.</p>
  <p>Para ello a continuación te presento la temática que utilizaremos para llevar a cabo tu aprendizaje.</p>
  <div class="my-5 mx-auto border border-primary p-5">
    <h4 class="my-0">Temática</h4>
    <p>Funciones </p>
    <ul class="ul-disc">
      <li>Estadísticas (Conteo condicional, máximo, promedio, varianza).</li>
      <li>Ordenar y filtrar.</li>
    </ul>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
