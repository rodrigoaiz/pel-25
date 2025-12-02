<?php
// Intentar cargar config desde diferentes rutas posibles
$configPaths = [
  dirname(__FILE__) . '/../../config.php',  // Desde include/ hacia root
  dirname(__DIR__) . '/config.php',         // Alternativa
];

$configLoaded = false;
$saludo = "Invitado";

foreach ($configPaths as $ruta) {
  if (file_exists($ruta)) {
    require_once($ruta);
    $configLoaded = true;
    
    // Solo intentar require_login si estamos en entorno Moodle
    if (function_exists('require_login')) {
      global $USER; // ← Aquí dentro del if donde se usa
      require_login();
      if (isset($USER->firstname) && isset($USER->lastname)) {
        $saludo = $USER->firstname . " " . $USER->lastname;
      }
    }
    break;
  }
}

// Solo intentar cargar menu.json si config fue cargado exitosamente
$menuMoodle = [];
if ($configLoaded && defined('BASE_PATH')) {
  $menuPath = BASE_PATH . '/menu.json';
  if (file_exists($menuPath)) {
    $menuData = json_decode(file_get_contents($menuPath), true);
    if ($menuData && isset($menuData['menuMoodle'])) {
      $menuMoodle = $menuData['menuMoodle'];
    }
  }
}
?>
<nav id="nav-moodle">
  <article>
    <div>
      <a class="text-sm flex flex-row items-center gap-x-1 group hover:underline hover:text-blue-own hover:gap-x-2 transition-all" href="<?php echo PATH_SITE . '?theme=moove'; ?>"><img class="size-4" src="<?php echo PATH_ICONS . 'left-back.svg'; ?>"><span class="truncado">Volver a mis cursos</span></a>
    </div>
    <div class="flex flex-cols justify-end gap-3 py-1">
      <div class="truncado">
        ¡Hola <span class="font-bold">
          <?php echo $saludo; ?>
        </span>!
      </div>
      <?php foreach ($menuMoodle as $menuItem): ?>
        <a href="<?php echo PATH_SITE . $menuItem['url']; ?>">
          <img class="h-5" src="<?php echo PATH_ICONS . $menuItem['icon']; ?>" alt="<?php echo $menuItem['alt']; ?>">
        </a>
      <?php endforeach; ?>
    </div>
  </article>
</nav>
