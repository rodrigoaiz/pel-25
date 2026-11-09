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

  <!-- 1. Encabezado y párrafo -->
  <h2>La Segunda Revolución Industrial</h2>
  <p>A finales del siglo XIX, el acero, la electricidad, los compuestos químicos y el petróleo cambiaron la forma de producir y de vivir.</p>

  <!-- 2. Video -->
  <?php renderVideoIframe('qdK342uhheM', '¿Qué es el capitalismo?'); ?>

  <!-- 3. Imagen con pie -->
  <?php renderImage('hu2-u1-heyenbrock.webp', 'Fundición de hierro en bloques, de Herman Heijenbrock.', 'https://commons.wikimedia.org/wiki/File:Herman_Heijenbrock_-_The_casting_of_iron_in_blocks.jpg', 'Wikimedia Commons'); ?>

  <!-- 4. Subtítulo y lista con viñetas -->
  <h3>Tres avances de la época</h3>
  <ul class="ul-disc">
    <li>El acero, más resistente y barato que el hierro.</li>
    <li>La electricidad, que llevó la luz y los motores a fábricas y ciudades.</li>
    <li>El motor de combustión, que funciona con derivados del petróleo.</li>
  </ul>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
