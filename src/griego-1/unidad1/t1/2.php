<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Ubicación  geográfica de principales regiones y ciudades de Grecia antigua </h2>

  <p>En esta primera lección, te invitamos a revisar dos mapas de Grecia antigua: uno de los mapas tiene los nombres en español <b>(Mapa 1)</b> y el otro mapa presenta los nombres en griego <b>(Mapa 2)</b>. </p>

  <div class="max-w-md mx-auto">
   <?php
     renderImage('g1-u1-mapagrecia.jpg', 'Arenas, A. (2026). Mapa de la Antigua Grecia [Ilustración].');
  ?>
  </div>

  <p>Puedes ver que el <b>Mapa 1</b> muestra en colores las diferentes regiones que componen a Grecia. </p>

  <div class="max-w-md mx-auto">
  <?php
     renderImage('g1-u1-mapagrecia2.jpg', 'Mapa 2. Mapa de la Antigua Grecia con los nombres en Griego. Arenas, A. (2026). Mapa de Grecia con los nombres en griego. [Ilustración].');
  ?>
  </div>

  <p>En el <b>Mapa 2</b> te permite explorar los nombres de algunos lugares representativos con letras griegas. Identifica algunas de las letras, los espíritus que se usan en algunas de esas palabras, sus acentos, etc.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
