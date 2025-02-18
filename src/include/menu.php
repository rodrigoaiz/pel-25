<header class="w-full z-50">
  <?php
  function renderMenu($menu)
  {
    $currentUrl = $_SERVER['REQUEST_URI']; // URL actual
    echo '<nav id="nav-menu" class="items-center py-2 gap-y-2 flex flex-col lg:flex-row justify-between px-4 xl:py-5">';
    echo '<div class="order-0"><a href="' . BASE_URL . '"><img src="' . ASSET_URL . '/img/logo.svg" alt="Logo" class="w-44 mx-auto"></a></div>';

    echo '<ul class="grid grid-cols-2 sm:grid-cols-4 md:flex md:flex-row gap-3 text-light font-semibold uppercase">';
    foreach ($menu as $modulo => $elemento) {
      $isActiveModule = $currentUrl === $elemento['url'];

      echo '<li class="text-center">';
      if ($elemento['publicado']) {
        // Si el módulo está publicado, genera un enlace
        $target = isset($elemento['target']) ? $elemento['target'] : '_self';
        echo "<a href='" . BASE_URL . $elemento['url'] . "' class='menu-item " . ($isActiveModule ? "" : "hover:bg-orange-500 px-1 text-blue-100 items-center transition-all") . "' target='$target'>{$modulo}</a>";
      } else {
        // Si no está publicado, muestra un texto no clicable
        echo "<span class='text-gray-400 cursor-not-allowed'>{$modulo}</span>";
      }

      echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
  }
  ?>
  <?php
  function renderMenuMoodle()
  {
    require_once BASE_PATH . '/include/menuMoodle.php';
  }
  ?>
</header>