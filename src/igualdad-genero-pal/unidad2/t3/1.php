<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¡Te damos la bienvenida al aprendizaje 9!</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('u2t3-iga9-img01.webp');
    ?>
  </div>
  <p>Las actividades que realizarás abordan el feminicidio con perspectiva de género para reconocerlo como la expresión de violencia de género más extrema. Es importante que tomes en cuenta todo lo que has revisado hasta el momento para identificar los tipos de violencia presentes en el feminicidio, como resultado de la violencia estructural.</p>
  <h3>Propósito</h3>
  <p>En este aprendizaje lograrás reconocer a la violencia feminicida como la forma de expresión más extrema de la violencia de género, para cuestionar y proponer alternativas.</p>
  <h3>Contenidos</h3>
  <ul class="ul-disc">
    <strong>Declarativos</strong>
    <li>Feminicidio.</li>
    <li>Tipos de violencia de género presentes en casos de feminicidio.</li>
    <li>Elementos socioculturales que normalizan la violencia feminicida.</li>
    <strong>Procedimentales</strong>
    <li>Clasifica los tipos y manifestaciones de violencia de género presentes en un caso de feminicidio.</li>
    <li>Reconoce las características del feminicidio como tipología delictiva.</li>
    <li>Propone medidas de prevención del feminicidio.</li>
    <strong>Actitudinales</strong>
    <li>Evalúa críticamente y con perspectiva de género la información proveniente de fuentes periodísticas de un caso de feminicidio.</li>
    <li>Se sensibiliza en torno a distintas manifestaciones en contra de la violencia feminicida.</li>
    <li>Toma conciencia de que el feminicidio es resultado de la violencia estructural.</li>
  </ul>
  <p><strong>Tiempo:</strong> 8 horas; divididas en 4 sesiones.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
