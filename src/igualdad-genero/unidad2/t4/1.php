<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Fortalecimiento de actitudes y valores de responsabilidad, respeto y convivencia con los demás</h2>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('iga8-img01.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 10!</h3>
  <p>Te damos la más cordial bienvenida al Aprendizaje 10, hemos llegado al último aprendizaje de tu asignatura. Utilizando los temas que has revisado en los aprendizajes anteriores podrás desarrollar propuestas para generar espacios de convivencia sana.</p>
  <p class="font-black text-purple-950">¡Disfruta el aprendizaje!</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósitos</p>
  <ul class="ul-disc ml-10">
    <li>Tendrán una base teórica sobre los derechos humanos y universitarios de las personas con relación a la igualdad de género.</li>
    <li>Podrán ser agentes activos de la erradicación de la violencia de género en el Colegio y en su vida cotidiana.</li>
    <li>Analizarán los paradigmas dominantes en las ciencias y las humanidades a nivel escolar desde una perspectiva de género</li>
  </ul>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p class="font-bold">Declarativos:</p>
  <ul class="ul-disc ml-10">
    <li>Identifica los esfuerzos realizados por la institución para generar una sana convivencia</li>
    <li>Reconoce la importancia de fortalecer actitudes y valores de responsabilidad, respeto y convivencia con los demás para propiciar una sana convivencia.</li>
    <li>Explica el impacto de aplicar la sororidad, nuevas masculinidades y el reconocimiento de la diversidad, para propiciar una sana convivencia.</li>
  </ul>
  <p class="font-bold">Procedimentales:</p>
  <ul class="ul-disc ml-10">
    <li>Distingue conductas o actitudes en su contexto que no propician el trato igualitario y la sana convivencia.</li>
    <li>Propone estrategias, acciones o línea de acción para generar una sana convivencia con integrantes de tu comunidad que podrías impulsar en tu escuela.</li>
  </ul>
  <p class="font-bold">Actitudinales:</p>
  <ul class="ul-disc ml-10">
    <li>Asume y fortalece actitudes y valores de responsabilidad, respeto y convivencia con los demás.</li>
  </ul>
      <p class="mt-10"> <span class="font-bold text-xl text-fuchsia-900">Tiempo |</span> 4 horas divididas en 2 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>