<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>¿Sabías que?</h3>
  <p>La última generación de chips, está construida en los cinco nanómetros y se está trabajando en los de 3 nm, que va a ser utilizado por los CPUs (Unidad central de procesamiento) y GPUs (Unidad de procesamiento gráfico) en el futuro próximo, eso indica que la miniaturización está a la vuelta de la esquina.</p>
  <h3>¿Quieres saber más?</h3>
  <p>Te invito a buscar información sobre “nanotecnología”, “nano robots” y “microchips en humanos” </p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
