<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
asd
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
