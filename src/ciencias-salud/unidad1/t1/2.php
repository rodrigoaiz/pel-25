<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Unidad 1 - La salud como proceso biopsicosocial</h2>
  <h3>Presentación</h3>
  <p>La asignatura de Ciencias de la Salud I, se ubica en el quinto semestre del Plan de Estudios del Colegio de Ciencias y Humanidades, en el área de Ciencias Experimentales, como materia optativa. Tiene como objetivo dotar al alumno de una cultura básica en el campo de la salud, lo que repercutirá en que el estudiante adquiera conocimientos, destrezas, habilidades y valores que le permitirán prevenir enfermedades, identificar conductas de riesgo y promover una vida saludable.</p>
  <p>Esta asignatura te proporcionará los conocimientos y las herramientas necesarias para tomar decisiones informadas sobre tu salud y bienestar, modificar las conductas de riesgo, no solo para ti, sino también para la sociedad en general, contribuyendo a un futuro más saludable y sostenible. Por lo tanto el estudio de las Ciencias de la Salud es vital para mejorar la calidad de vida de todos.</p>
  <div class="mx-auto max-w-lg">
    <?php
    renderImage('u1-medico-con-medico-con-gafas.webp', 'Diferentes factores que forman parte de las Ciencias de la Salud', 'https://www.freepik.es/fotos-vectores-gratis/ciencias-salud', 'recuperada el 31 de octubre de 2023.');
    ?>
  </div>
  <p>Dentro de las finalidades de la asignatura, está que incorpores en tu manera de pensar, de ser y actuar, todo lo necesario para desenvolverte con éxito en la vida diaria y comprender la importancia que representa para tu futuro la promoción y prevención de la salud.</p>
  <p>Ve el siguiente video introductorio, que muestra aspectos generales relacionados con las Ciencias de la Salud.</p>
  <?php
  renderVideoIframe('sMB6h8PC2JE', 'Determinantes Sociales de la Salud');
  ?>
  <?php
  renderImagePleca('u1-tubos.webp', 'Elementos que forman parte de las Ciencias de la Salud.', 'https://commons.wikimedia.org/wiki/File:Mathematic_World.jpg', 'Pixabay', 'justify-center');
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
