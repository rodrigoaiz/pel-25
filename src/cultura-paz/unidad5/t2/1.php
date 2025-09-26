<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Revisión de contenidos</h2>
  <p>La integración e identidad universitaria significa que cada alumna y alumno, al ingresar al Colegio de Ciencias y Humanidades de la UNAM, conocerá un modelo educativo enmarcado en las ciencias y humanidades, no solo hablamos de la integración de nuevas formas de aprendizaje, nuevos conocimientos, también integrarse a la experiencia académica que requiere fomentar y desarrollar un sentido de pertenencia y conexión con la institución.</p>
  <p>Esto se logra a través de diversos programas y actividades realizadas por áreas muy específicas, por ejemplo, PIA, PIT y Psicopedagogía que diseñan e implementan dinámicas de participación activa de las y los estudiantes en su propio proceso de aprendizaje y mejora de la vida académica.
  </p>
  <p>A continuación te pedimos que revises la siguiente <span class="text-violet-400 font-bold">presentación interactiva</span> y realices las actividades dentro de ella.</p>
</section>
<div class="max-w-7xl mx-auto">
  <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
    <iframe
      title="Presentación Interactiva"
      frameborder="0"
      width="100%"
      height="100%"
      class="absolute top-0 left-0 w-full h-full"
      src="https://pel.cch.unam.mx/programas/unidad5/index_local.html"
      type="text/html"
      allowscriptaccess="always"
      allowfullscreen="true"
      scrolling="yes"
      allownetworking="all">
    </iframe>
  </div>
</div>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
