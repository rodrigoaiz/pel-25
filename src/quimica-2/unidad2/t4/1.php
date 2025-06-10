<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la lección 4</h2>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('NwwxrwggWZc', 'Bienvenida a la lección 4.');
    ?>
  </div>
  <p class="mt-4">
    Hola, bienvenidos a la lección 4. En esta ocasión realizaremos un recorrido por la estructuras, reactividad y reacciones que dan origen a las macromoléculas presentes en los alimentos. Para ello, haremos una revisión e integración de los temas que se han visto anteriormente. Esperamos que disfrutes mucho esta lección y deseamos mucho éxito en las actividades.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>