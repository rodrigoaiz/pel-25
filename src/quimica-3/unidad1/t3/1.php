<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';
ob_start();
?>
<section>
  <h2>Elementos, compuestos y mezclas</h2>
  <h3>Reacción química</h3>
  <h4>Condiciones de reacción</h4>

  <p>En los cursos de Química I y II conociste los conceptos de elemento, compuesto y mezcla, que ahora vas a analizar desde el punto de vista de la industria química. El estudio de estos términos básicos de la química, requiere su explicación desde el punto de vista de la materia que nos rodea. ¡Vamos a conocerla!</p>

  <p>La materia está conformada por átomos que son las unidades básicas de la química. Un átomo consiste en un núcleo de protones y neutrones, rodeado por una nube de electrones. Los átomos del mismo tipo se agrupan para formar elementos, como el oxígeno o el hierro. Cuando dos o más tipos de átomos se combinan químicamente en proporciones fijas, forman compuestos, como el agua (H₂O) o el dióxido de carbono (CO₂). Por otro lado, una mezcla es una combinación de dos o más sustancias (elementos o compuestos) que no están químicamente unidas y pueden ser separadas por métodos físicos, como el aire o una ensalada.</p>

    <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u1-tablas.webp', ' Los elementos constituyen una parte de la representación simbólica de la química.', 'https://unsplash.com/es/fotos/round-clear-glass-on-white-paper-jxqTaXF5WmY', 'Unsplash');
  ?>
  </div>
  
    <p>A continuación, visitarás el Portal Académico del CCH para amplificar los conocimientos sobre estos conceptos de átomo, molécula, elemento, compuesto y mezcla.</p>



    <p>Existe otro término vinculado directamente con los conceptos del párrafo anterior y es el de reacción química. Es un fenómeno químico en el cual una o más sustancias, llamadas reactivos, se transforman en nuevas sustancias denominadas productos. Este proceso implica la ruptura y formación de enlaces químicos, y puede ocurrir bajo ciertas condiciones de reacción específicas, como temperatura, presión o presencia de un catalizador. Un ejemplo común es la combustión del metano, donde el metano (reactivo) y el oxígeno (reactivo) se convierten en dióxido de carbono y agua (productos) bajo condiciones de alta temperatura.</p>

    <p>La <b>industria química</b> es fundamental para el desarrollo económico y social de México. Contribuye significativamente al PIB (Producto Interno Bruto) del país, genera empleos y abastece a diversos sectores como la agricultura, la medicina, la energía y la construcción. Además, impulsa la innovación tecnológica y la competitividad a nivel internacional, siendo un pilar clave en la estructura económica nacional.
</p>

    <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u1-torre.webp');
      renderImage('q3-u1-corte.webp', 'La industria tiene fuertes aportaciones a la economía mexicana. ', 'https://pixabay.com/es/photos/industry-power-generation-fuel-4855767/', 'Pixabay');
  ?>
  </div>

  <p>Casi cualquier producto elaborado en la industria mexicana requiere de sustancias químicas en su proceso de fabricación. Esto abarca desde alimentos hasta productos electrónicos y textiles, donde el conocimiento de los conceptos de elemento, compuesto y mezcla es esencial. Ahora bien, cada artículo elaborado pasa por una cadena productiva y en ella suceden diferentes reacciones químicas que son esenciales para transformar materias primas en productos terminados. Estas reacciones se llevan a cabo bajo condiciones específicas y controladas, como temperatura, presión y concentración, para garantizar una producción óptima y segura. Este control es vital para maximizar la eficiencia y la calidad de los productos, así como para minimizar el impacto ambiental y garantizar la seguridad en los procesos industriales.</p>

  <p>A continuación, realizarás una presentación con diapositivas sobre un producto de la industria y en la que se apliques lo aprendido en esta unidad.</p>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a1', "Producto de la industria", $ActividadContent);
  ?>   
  
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
