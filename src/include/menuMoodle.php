<?php
$ruta = dirname(__FILE__) . '/../../config.php';
$saludo = "Invitado";
if (file_exists($ruta)) {
  require_once($ruta);
  require_login();
  if (isset($USER->firstname) && isset($USER->lastname)) {
    $saludo = $USER->firstname . " " . $USER->lastname;
  }
}

// Ruta al archivo menu.json
$menuPath = BASE_PATH . '/menu.json';
$menuData = json_decode(file_get_contents($menuPath), true);

// Obtener el array de menuMoodle
$menuMoodle = $menuData['menuMoodle'];
?>
<nav id="nav-moodle" class="w-100 justify-between flex px-2">
  <div>
    ¡Hola <span class="font-bold">
      <?php echo $saludo; ?>
    </span>!
  </div>
  <div class="flex flex-cols justify-end gap-3 py-1">
    <?php foreach ($menuMoodle as $menuItem): ?>
      <a href="<?php echo $menuItem['url']; ?>">
        <img class="h-5" src="<?php echo PATH_ICONS . $menuItem['icon']; ?>" alt="<?php echo $menuItem['nombre']; ?>">
      </a>
    <?php endforeach; ?>
  </div>
</nav>