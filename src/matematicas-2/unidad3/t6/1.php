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

<p>Empecemos recordando cómo se obtiene el perímetro y área del círculo.</p>
<p>¿Recuerdas la definición de circunferencia?, es la siguiente:</p>
<p><strong>La circunferencia es el conjunto de todos los puntos de un plano que equidistan de otro punto llamado centro, mientras que el círculo es el conjunto de estos puntos unidos que encierran la circunferencia.</strong>
</p>
<p>Comencemos con conocer los elementos que caracterizan a la circunferencia con el siguiente video.</p>

    <div class="lg:grid">
      <?php
      renderVideoIframe('-7IBeqSBQ7I', 'Elementos de la circunferencia.');
      ?>
    </div>

<p>Ahora veremos cómo se construye una circunferencia con el siguiente video y trabaja con el perímetro de la misma:</p>

<div class="lg:grid">
      <?php
      renderVideoIframe('m3KNgyVOQAU', 'Construcción de una circunferencia.');
      ?>
</div>

<p>Continuaremos con el cálculo de las área circulares con el siguiente video:</p>

<div class="lg:grid">
      <?php
      renderVideoIframe('ZT1vuG96VFU', 'Cálculo de áreas circulares');
      ?>
</div>

  <?php ob_start(); ?>
  <p>Ahora con todos los conocimientos reafirmados realicemos el siguiente cuestionario.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a16', "Círculo y circunferencia", $ActividadContent);
  ?>

<p>Muy bien, casi terminamos, un último esfuerzo, vamos a solucionar los problemas de aplicación.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>