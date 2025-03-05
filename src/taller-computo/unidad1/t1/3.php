<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<h3>Conceptos de red y servicios de Internet</h3>
<p>Te invito a que revises el siguiente video, donde identificamos las actividades a realizar para lograr el aprendizaje.</p>
<div class="max-w-xl mx-auto">
  <?php
  renderVideoIframe('eAGZ1nqAtEw', ' Presentación del Aprendizaje 1 "Conceptos de red y servicios de Internet"');
  ?>
</div>
<h3>Introducción</h3>
<p>A partir de la interacción actual, las redes sociales constituyen, las nuevas expresiones como productores de conocimiento, así como su necesidad de intercambiar y transferir lo que se aprende y se crea, sin embargo, es necesario conocer algunos conceptos básicos de Redes informáticas, al mismo tiempo de algunos de los servicios de Internet que utilizamos día a día, debido a que son estructuras tecnológicas, que permiten la interconexión de información a través de diversos dispositivos, cada uno con su propia autonomía, que convergen en el acceso a la Red llamada Internet, así como el envío-recepción de datos y archivos, lo cual se logra a partir de una serie de protocolos de comunicación, como el TCP/IP.</p>
<h3>Aprendizajes de la unidad</h3>
<img src="<?php echo $urlPath; ?>assets/img/gente_negocios_iconos.webp" alt="Alumnos CCH" />
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
