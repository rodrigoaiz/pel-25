<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

  <h2>Actividad final</h2>

  <p>Como te pudiste dar cuenta, los cambios sociales y expresiones culturales en la etapa posrevolucionaria no estuvieron al margen de los procesos económicos, políticos y sociales que acontecieron en nuestro país entre 1920-1940.</p>

  <?php ob_start(); ?>
        <p>En este sentido para concluir la unidad debes realizar la tarea que se te solicita:</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividad('u2a15', "Actividad final", $ActividadContent);
      ?>
      
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
