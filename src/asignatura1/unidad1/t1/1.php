<?php
include '../../../config.php';
include PATH_INCLUDE . 'header1.php';
include PATH_INCLUDE . 'MenuUnidades.php';

// Ruta al archivo JSON específico de la asignatura
$menuAsignaturaPath = BASE_PATH . '/asignatura1/assets/data/menu_asignatura.json';

// Renderizar el menú
renderMenuUnidades($menuAsignaturaPath);
?>
asd
<?php
// Función para eliminar BOM
function removeBOM($text)
{
  if (substr($text, 0, 3) === "\xEF\xBB\xBF") {
    $text = substr($text, 3);
  }
  return $text;
}

// Incluir archivos sin BOM
ob_start();
require_once PATH_INCLUDE . 'footer.php';
$footerContent = ob_get_clean();
echo removeBOM($footerContent);

ob_start();
require_once PATH_INCLUDE . 'footer2.php';
$footer2Content = ob_get_clean();
echo removeBOM($footer2Content);
?>