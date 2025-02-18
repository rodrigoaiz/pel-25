<?php
include_once BASE_PATH . '/config.php';
include BASE_PATH . '/include/header1.php';

// Obtener los parámetros currentPageId y moduloId
$currentPageId = $_GET['currentPageId'] ?? $currentPageId ?? 0;
$moduloId = $_GET['moduloId'] ?? $moduloId ?? null;

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

// Inicializar el título por defecto
$titulo = 'Página no encontrada';

// Buscar el título de la página correspondiente al currentPageId
foreach ($menu as $modulo) {
  if (isset($modulo['paginas'])) {
    foreach ($modulo['paginas'] as $pagina) {
      if ($pagina['id'] === $currentPageId) {
        $titulo = $pagina['nombre'];
        break 2;
      }
    }
  }
}

?>
<title><?php echo htmlspecialchars($titulo); ?></title>
</head>
<?php
include BASE_PATH . '/include/menu.php';
include BASE_PATH . '/include/navegacion.php';
?>

<body>
  <?php renderMenu($menu); ?>
  <?php renderMenuMoodle(); ?>
  <?php
  // Función para eliminar BOM
  function removeBOM($text)
  {
    if (substr($text, 0, 3) === "\xEF\xBB\xBF") {
      $text = substr($text, 3);
    }
    return $text;
  }

  // Crear un mapeo de índices secuenciales a IDs reales
  $indexToIdMap = [];
  $index = 1;
  foreach ($menu as $key => $modulo) {
    $indexToIdMap[$index] = $key;
    $index++;
  }

  // Determinar el módulo actual basado en la página actual si no se pasó como parámetro
  if (!$moduloId) {
    foreach ($menu as $key => $modulo) {
      if (isset($modulo['paginas'])) {
        foreach ($modulo['paginas'] as $pagina) {
          if ($pagina['id'] === $currentPageId) {
            // Buscar el índice correspondiente al ID real
            $moduloId = array_search($key, $indexToIdMap);
            break 2;
          }
        }
      }
    }

    // Si no se encontró el módulo, asignar un valor por defecto
    if (!$moduloId) {
      $moduloId = 1;
    }
  }

  // Capturar y limpiar la salida de renderNavegacion
  ob_start();
  renderNavegacion($moduloId, $currentPageId);
  $navegacionContent = ob_get_clean();
  echo removeBOM($navegacionContent);
  ?>
  <main>
    <section>
      <h1><?php echo htmlspecialchars($titulo); ?></h1>
    </section>
    <?php echo $content; ?>
  </main>
  <script src="<?php echo BASE_URL; ?>/js/bundle.js"></script>
  <?php
  // Incluir archivos sin BOM
  ob_start();
  require_once BASE_PATH . '/include/footer.php';
  $footerContent = ob_get_clean();
  echo removeBOM($footerContent);

  ob_start();
  require_once BASE_PATH . '/include/footer2.php';
  $footer2Content = ob_get_clean();
  echo removeBOM($footer2Content);
  ?>
</body>

</html>