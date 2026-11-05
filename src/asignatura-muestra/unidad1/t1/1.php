<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <!-- ✏️ Tu contenido va aquí, entre <section> y </section>. -->

<h2>La salud como proceso biopsicosocial</h2>
<p>Se entiende la salud, la enfermedad y la discapacidad como una serie de procesos complejos que involucran aspectos biológicos, psicológicos y sociales.</p>

<?php renderVideoIframe('tmonzq0gX5g', 'El ser humano como unidad biopsicosocial - Salud y Adolescencia'); ?>

<?php renderImage('yo-biopsicosocial-bienestar-mental-lifeder-min-1024x768.webp', 'Yo biopsicosocial', 'https://www.lifeder.com/wp-content/uploads/2018/03/yo-biopsicosocial-bienestar-mental-lifeder-min-1024x768.jpg', 'Lifeder'); ?>

<h3>Entendiendo estos tres conceptos</h3>
<ul class="ul-disc">
  <li>Bio: Relacionado con los aspectos físicos y fisiológicos del ser humano.</li>
  <li>Psico: Relacionado con los procesos mentales, emocionales y conductuales.</li>
  <li>Social: Relacionado con el entorno cultural, familiar y comunitario.</li>
</ul>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
