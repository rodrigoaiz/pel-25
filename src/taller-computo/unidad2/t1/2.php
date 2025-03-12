<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ModalIndex.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <p>Bienvenida/Bienvenido a la primera lección de la unidad II. Hardware y software donde abordará el aprendizaje “Explica la evolución del hardware y software de la computadora”. Para ello, se revisarán las generaciones de computadoras, el modelo de Von Neumann y las tendencias, dando así, un recorrido en la evolución de la computadora.</p>
  <p>Los dispositivos móviles y computadoras personales PC se componen del hardware y software, siendo estos indispensables, ya que se complementan para el buen funcionamiento de los dispositivos tecnológicos.</p>
  <?php renderImage('u2_t1_hardware_software.webp', 'Software y Hardware'); ?>
  <p>Para aprender más de esto, revisa el siguiente video, luego contesta las preguntas.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('3F-kuNGlNco', 'Qué es software y qué es hardware | Computación y programación');
    ?>
  </div>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a1', "Cuestionario diagnóstico unidad 2", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
