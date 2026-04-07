<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Identifica los referentes</h2>
  <p>Ahora te presentamos dos textos breves; identifica los referentes en cada uno.</p>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('identifica-los-referentes', "Identifica los referentes", $ActividadContent);
  ?>
</section>

<?php ob_start(); ?>
<section>
  <p>Puedes escuchar el acertijo de <em>El Camello</em> de Gloria Fuentes y elabora otro para ser adivinado en clase, imitando su estructura. Además, podrías escuchar una fábula de Samaniego y al terminar, reelabora otra en prosa donde dos animales interactúen a fin de aprender algo. Finalmente, para enriquecer lo hasta aquí visto, ve el video sobre por qué Bauer sostiene que Cortázar es un buen escritor. Imita su forma de argumentar y defiende a algún escritor que para ti sea bueno.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "¡Para aprender más!");
?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
