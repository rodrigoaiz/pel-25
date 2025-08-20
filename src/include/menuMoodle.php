<?php
dirname(__DIR__) . '/config.php';
$ruta = dirname(__FILE__) . '/../../config.php';
$saludo = "Invitado Con Un buen De Apellidos";
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
