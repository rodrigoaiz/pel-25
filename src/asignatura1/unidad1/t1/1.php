<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
// Obtener el nombre de la asignatura desde la URL
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathSegments = explode('/', trim($urlPath, '/'));
$asignaturaName = $pathSegments[1]; // Ajusta el índice según la estructura de tu URL
// Ruta al archivo JSON específico de la asignatura
$menuAsignaturaPath = BASE_PATH . '/' . $asignaturaName . '/assets/data/menu_asignatura.json';
ob_start();
?>
asd
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
