<?php
include_once dirname(__DIR__) . '/config.php';
if (!isset($include_latex)) {
  $include_latex = false;
}
include_once PATH_INCLUDE . 'MenuUnidades.php';


function getMenuAsignaturaPath($urlPath)
{
  $pathSegments = explode('/', trim($urlPath, '/'));
  $asignaturaName = $pathSegments[1];
  return BASE_PATH . '/' . $asignaturaName . '/assets/data/menu_asignatura.json';
}

function renderTemplatePage($menuAsignaturaPath, $content)
{
  // Hacer la variable $include_latex disponible en el scope de la función
  global $include_latex;
  
  // Incluir header solo cuando se renderiza la página
  include PATH_INCLUDE . 'header1.php';
  
  // Renderizar el menú
  renderMenuUnidades($menuAsignaturaPath);
?>
  <main id="main-section">
    <?php echo $content; ?>
  </main>
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
}
?>
