<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Tipos de software</h3>
  <p>Es importante que se comprenda qué es el software en general y los diferentes tipos que existen, el software es el conjunto de programas, instrucciones y datos que hacen funcionar a una computadora o un dispositivo electrónico, sin él los dispositivos no podrían realizar tareas como navegar por internet, editar documentos o reproducir videos.</p>
  <p>Crear un cuadro sinóptico con la revisión de los siguientes videos.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe("Q3aXKM7M0fA", '💾TIPOS de SOFTWARE (ejemplos y funciones) |📗EXPLICACIÓN RÁPIDA'); ?>
  </div>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe("_mMXzn4zoQA", '💾Hardware y software de una computadora'); ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
