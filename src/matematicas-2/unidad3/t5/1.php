<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

    <div class="md:grid grid-cols-2 gap-3">
        <div>
        <p>Ya trabajamos con el triángulo en los anteriores aprendizajes ahora estudiemos otros polígonos, ¿recuerdas lo revisado en el aprendizaje 2 de esta unidad?</p>
        </div>
        <div>
        <a href="http://uapas1.bunam.unam.mx/matematicas/angulos_y_su_clasificacion/" target="_blank">
                <?php
                renderImage('u3t5_1.webp', '', '', '', true);
                ?>
      </a>
      </div>
    </div>
    <div>

    <p>Ahora veamos cómo se define si un polígono es regular o irregular, en el siguiente video además de empezar a trabajar con estos polígonos triangulando para poder determinar algunas características o propiedades.</p>

    <div class="lg:grid">
      <?php
      renderVideoIframe('nSYMO9TYCNQ', 'Polígonos regulares e irregulares');
      ?>
    </div>

  <?php ob_start(); ?>
  <p>Realiza la actividad para reforzar tu aprendizaje.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a10', "Polígonos regulares e irregulares", $ActividadContent);
  ?>

<?php ob_start(); ?>
<p>Dejemos por un momento los polígonos y recordemos las rectas notables de la circunferencia con la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a11', "Rectas notables de la circunferencia", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>