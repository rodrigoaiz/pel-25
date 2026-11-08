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
<h2>La Segunda Revolución Industrial</h2>
<p>A finales del siglo XIX, el acero, la electricidad, los compuestos químicos y el petróleo cambiaron la forma de producir y de vivir.</p>
<?php renderVideoIframe('qdK342uhheM', '¿Qué es el capitalismo?'); ?>
<?php renderImage('hu2-u1-heyenbrock.webp', 'Fundición de hierro en bloques, de Herman Heijenbrock.', 'https://commons.wikimedia.org/wiki/File:Herman_Heijenbrock_-_The_casting_of_iron_in_blocks.jpg', 'Wikimedia Commons.'); ?>
<?php renderImage('Mapa-segunda-revolucion-I.webp', 'Mapa de La Segunda Revolución Industrial.', 'https://commons.wikimedia.org/wiki/File:Atlas_Abierto_-_La_Revoluci%C3%B3n_Industrial_-_1870%E2%80%931914_-_La_Segunda_Revoluci%C3%B3n_Industrial.svg?uselang=es','Wikimedia Commons.'); ?>
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
