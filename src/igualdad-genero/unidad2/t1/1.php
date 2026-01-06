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
  <p>La violencia de género representa una de las problemáticas más urgentes y complejas en la actualidad. Afecta de manera desproporcionada a mujeres, niñas y personas con identidades diversas, sin importar edad, condición social o espacio. Esta realidad no puede ser ignorada ni minimizada, ya que impacta profundamente tanto en la vida individual como en la vida colectiva.</p>
  <p>Dicha violencia no se manifiesta únicamente de forma física; también adopta expresiones psicológicas, económicas, patrimoniales, sexuales y simbólicas. Se presenta en múltiples entornos: el familiar, el escolar, el laboral, el institucional, el mediático y el digital. Su persistencia refleja desigualdades estructurales que es necesario identificar, analizar y transformar con pensamiento crítico y compromiso social.</p>
  <p>En este aprendizaje se abordarán los diferentes tipos y modalidades de la violencia de género, su impacto en la salud pública, así como el marco legal que promueve los derechos de las mujeres y la igualdad de género. El enfoque será reflexivo, formativo y basado en los derechos humanos, con el propósito de fomentar el respeto, la igualdad y la dignidad.</p>
  <p>Durante las cuatro sesiones de dos horas que conforman este módulo, se invita al estudiantado a participar de manera activa, crítica y respetuosa. El foro será un espacio clave para compartir ideas, experiencias y compromisos personales que fortalezcan la convivencia con igualdad y sin violencia.</p>
  <p>El objetivo es formar personas conscientes de su papel en la transformación de su entorno, capaces de reconocer y cuestionar prácticas que reproducen desigualdad, y dispuestas a construir relaciones más justas e igualitarias.</p>
  
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