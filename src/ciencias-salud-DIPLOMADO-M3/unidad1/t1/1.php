<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a Ciencias de la Salud I</h2>
  <h2>Unidad 1 - La salud como proceso biopsicosocial</h2>
  <h3>Introducción</h3>
  <p>La asignatura de Ciencias de la Salud I se ubica en el quinto semestre del Plan de Estudios del Colegio de Ciencias y Humanidades (en el área de Ciencias Experimentales) como materia optativa. Tiene como objetivo dotar al alumno de una cultura básica en el campo de la salud, lo que repercutirá en que adquiera conocimientos, destrezas, habilidades y valores que le permitan prevenir enfermedades, identificar conductas de riesgo y promover una vida saludable.</p>
  <p>Esta asignatura te proporcionará los conocimientos y las herramientas necesarias para tomar decisiones informadas sobre tu salud y bienestar, modificar las conductas de riesgo no solo para ti sino también para la sociedad en general, contribuyendo a un futuro más saludable y sostenible. Por lo tanto, el estudio de las Ciencias de la Salud es vital para mejorar la calidad de vida.</p>
  <p>Dentro de las finalidades de la asignatura, está el que incorpores en tu manera de pensar, de ser y actuar, todo lo necesario para desenvolverte con éxito en la vida diaria, comprendiendo la importancia que representa para tu futuro la promoción de la salud.</p>
</section>
<div class=" flex flex-row justify-center gap-4 mb-10">
  <div class="basis-1/3">
    <?php
    renderVideoIframe('4C7ffvwdcr4', 'Video de bienvenida a la asignatura');
    ?>
  </div>
</div>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>