<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Reconocer la violencia feminicida como la forma de expresión más extrema de la violencia de género para cuestionar y proponer alternativas</h2>
  <div class="w-xl mx-auto">
    <?php
    renderImage('u2t3-iga9-img01.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 9!</h3>
  <p>Las actividades que realizarás abordan el feminicidio con perspectiva de género para reconocerlo como la expresión de violencia de género más extrema. Es importante que tomes en cuenta todo lo que has revisado hasta el momento para identificar los tipos de violencia presentes en el feminicidio, como resultado de la violencia estructural.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósito</p>
  <p>En este aprendizaje lograrás reconocer a la violencia feminicida como la forma de expresión más extrema de la violencia de género, para cuestionar y proponer alternativas.</p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
    <p class="font-bold">Declarativos:</p>
    <p>Feminicidio.</p>
    <p>Elementos socioculturales que normalizan la violencia feminicida.</p>
    <p class="font-bold">Procedimentales:</p>
    <p>Reconoce las características del feminicidio como tipología delictiva.</p>
    <p>Propone medidas de prevención del feminicidio.</p>
    <p class="font-bold">Actitudinales:</p>
    <p>Se sensibiliza en torno a distintas manifestaciones en contra de la violencia feminicida.</p>
    <p>Toma conciencia de que el feminicidio es resultado de la violencia estructural.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>