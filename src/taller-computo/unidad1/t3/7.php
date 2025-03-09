<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Motores de búsqueda</h3>
  <h4>Buscadores</h4>
  <p>Los buscadores permiten encontrar información desde cualquier parte del mundo, éstos son considerados unas grandes bases de datos que dan como resultados una URL (Localizador Universal de Recursos), en donde el recurso puede identificarse como una imagen, audio, video, documento en .doc, .pdf o página web.</p>
  <p>Te invitamos a revisar la siguiente información para que conozcas más sobre los buscadores.</p>
  <?php ob_start(); ?>
  <p>Primero responde una sencilla pregunta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a13', "¿Qué tanto sabes?", $ActividadContent);
  ?>
  <h4>Definición y tipos de buscador</h4>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
