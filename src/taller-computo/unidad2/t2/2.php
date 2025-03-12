<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Hardware de acuerdo con su función y características</h3>
  <p>Te invito a que revises el siguiente video, donde identificarás los contenidos que se desarrollarán mediante diversas actividades y así lograr el aprendizaje.</p>
  <div class="max-w-2xl mx-auto">
    <?php echo renderVideoIframe('MJaV1sGZdH8', 'Presentación del Aprendizaje 3 “Describe el hardware de acuerdo con su función y características”'); ?>
  </div>
  <h3>Introducción</h3>
  <p>Cuando vas a comprar algún equipo de cómputo te das cuenta que existe una gran variedad y dependiendo tu economía o necesidades es lo que vas a adquirir, por ello es importante identificar los elementos que lo componen, siendo el hardware el de los más importantes, dado que es el conjunto de componentes físicos que integran una computadora, los cuales pueden analizar, procesar y almacenar información.</p>
  <div class="max-w-2xl mx-auto">
    <?php echo renderImage('u2_t2_tarjeta_madre.webp', 'Hardware interno. Imagen de Astonbreak.', 'https://commons.wikimedia.org/wiki/File:Tarjeta_madre.jpg', 'Wikimedia Commons.'); ?>
  </div>
  <p>Además, el hardware proporciona un medio físico para el procesamiento de la información, almacena datos informáticos de forma temporal o permanente, puede generar información visual y permite a los usuarios interactuar físicamente con los sistemas informáticos.</p>
  <p>Ya sea de entrada, salida, procesamiento, almacenamiento o incluso híbrido, los componentes de hardware se pueden clasificar según las propiedades y funciones que realizan.</p>
  <div class="max-w-2xl mx-auto">
    <?php echo renderImage('u2_t2_connectors_motherboard.webp', 'Variedad de puertos. Imagen de Montypter.', 'https://www.freepik.com/free-photo/connectors-motherboard_1234199.htm#query=hardware%20de%20una%20computadora&position=35&from_view=search&track=ais#position=35&query=hardware%20de%20una%20computadora', 'Freepik.'); ?>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
