<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
// Ruta al archivo JSON específico de la asignatura
$menuAsignaturaPath = BASE_PATH . '/asignatura1/assets/data/menu_asignatura.json';
ob_start();
?>
asd
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>