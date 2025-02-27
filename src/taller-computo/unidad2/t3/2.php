<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathSegments = explode('/', trim($urlPath, '/'));
$asignaturaName = $pathSegments[1];
$menuAsignaturaPath = BASE_PATH . '/' . $asignaturaName . '/assets/data/menu_asignatura.json';
ob_start();
?>
asd
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
