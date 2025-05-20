<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La categoría de perspectiva de género como herramienta para estudiar la desigualdad</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga2-img01.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 2!</h3>
  <p>En las siguientes horas de trabajo conocerás temas y desarrollarás actividades que deseamos te resulten interesantes y provechosas.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósitos</p>
  <ul class="ul-disc">
    <li>Identificarás los orígenes históricos del feminismo y sus demandas.
    <li>Conocerás en qué consiste la perspectiva de género y su utilidad e importancia.</li>
    <li>Reconocerás la relación entre el feminismo y la perspectiva de género</li>
  </ul>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p class="font-bold">Declarativos:</p>
  <p>- Feminismos: antecedentes históricos y objetivos.</p>
  <p>- Perspectiva de género: utilidad e importancia.</p>
  <p class="font-bold">Procedimentales:</p>
  <p>- Búsqueda, síntesis y organización de la información.</p>
  <p>- Pensamientos crítico y argumentación.</p>
  <p>- Trabajo en equipo.</p>
  <p class="font-bold">Actitudinales:</p>
  <p>- Escucha y respeto ante opiniones diversas.</p>
  <p>- Disposición para el trabajo en equipo y grupal.</p>
  <p class="mt-10"> <span class="font-bold text-xl text-fuchsia-900">Tiempo |</span> 6 horas divididas en 3 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>