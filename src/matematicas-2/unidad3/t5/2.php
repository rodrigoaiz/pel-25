<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <p>Vamos a reforzar la triangulación de los polígonos para determinar cuánto miden los ángulos internos de estos y además los ángulos externos.</p>
  <p>Lee el siguiente material hasta la página 96. Da clic en la siguiente imagen para acceder a él.</p>
<div class="lg:grid">
      <a href="https://pel.cch.unam.mx/pluginfile.php/3103/mod_resource/content/4/build/assets/images/u3/t5/poligono.pdf" target="_blank">
                <?php
                renderImage('u3t5_banner_angulos_poligono.webp', '', '', '');
                ?>
      </a>
</div>

<?php ob_start(); ?>
<p>Muy bien manos a la obra, pongamos en práctica lo estudiado.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u3a17', "Ángulos interiores de un polígono", $ActividadContent);
?>

<p>¿Qué te parece?, interesante verdad, sigamos trabajando con los polígonos, pasemos al siguiente aprendizaje donde estudiaremos más sobre el tema.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>