<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Violencia de género, sus características, ámbitos y forma de ejercerla como un problema de salud pública y de bienestar social</h2>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('iga7-img01.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 7!</h3>
  <p class="font-bold text-xl text-fuchsia-900">Propósitos</p>
  <p>Conocer el impacto integral (salud, social y económico) de la violencia de género en individuos, familias y comunidades, mediante la exploración de sus diversas manifestaciones. El objetivo final es fomentar la prevención, brindar apoyo efectivo a las víctimas y promover sociedades más seguras, equitativas y saludables para todos.</p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p class="font-bold">Declarativos:</p>
  <p>Identifica la definición, tipos, características de la violencia de género y la reconoce como un problema de salud pública que debe ser atendido por las leyes.</p>
  <p class="font-bold">Procedimentales:</p>
  <p>Utiliza la caracterización de la violencia de género para reconocerla en diversas situaciones de la vida cotidiana y hacer propuestas para su erradicación.</p>
  <p class="font-bold">Actitudinales:</p>
  <p>Rechaza cualquier tipo y modalidad de violencia de género y se asume como protagonista para promover su erradicación.</p>
  <p class="mt-10"> <span class="font-bold text-xl text-fuchsia-900">Tiempo |</span> 8 horas divididas en 4 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>