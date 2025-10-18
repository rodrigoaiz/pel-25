<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Recursos minerales y su aprovechamiento</h2>
  <h3>Minerales y rocas</h3>
  <h4>Clasificación por su composición química</h4>
  <p>La minería es una actividad primaria con potencial relevante en la economía del mundo. En América Latina, particularmente en México, existe abundancia de recursos naturales, entre los que encontramos a los minerales. De acuerdo con el Informe Anual 2023 de la Cámara Minera de México, la minería mexicana se posicionó entre las más importantes del mundo para el año 2022, y en un contexto nacional, tuvo un crecimiento económico del 0.2% junto a la industria del petróleo. </p>

  <p>En el informe también se señala que de México se extraen principalmente oro, cobre, plata y zinc, y que es la segunda nación a nivel mundial en la que se invierte capital extranjero para la explotación mineral.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-mineral.webp','Minerales extraídos','https://pixabay.com/es/photos/mineral-minerales-piedras-238651', 'Pixabay');
      renderImage('q3-u2-yacimiento.webp', 'Yacimiento mineral', 'https://pixabay.com/es/photos/minas-paisaje-texturas-cantera-4628655/', 'Pixabay');
  ?>
  </div>
<h3>Minerales Nativos</h3>

<p>Los minerales nativos son elementos químicos que se encuentran en la naturaleza en su forma pura, es decir, no están combinados químicamente con otros elementos.</p>

<p><b>Química:</b> Están formados por un solo tipo de elemento. Por ejemplo:</p>

<ul class="ul-disc">
    <li>Oro (Au): Compuesto únicamente por átomos de oro.</li>
    <li>Cobre (Cu): Compuesto únicamente por átomos de cobre.</li>
  </ul>

<p>Estos minerales tienen una estructura cristalina que es homogénea en toda la sustancia, ya que todos los átomos presentes son del mismo tipo.</p>

<div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-oro.webp','Lingotes de oro','https://pixabay.com/es/photos/oro-lingotes-tesoro-bullion-513062/', 'Pixabay');
      renderImage('q3-u2-cobre.webp', 'Cobre refinado', 'https://pixabay.com/es/photos/cobre-thrash-metal-chatarra-1504098/', 'Pixabay');
  ?>

  <h3>Minerales Compuestos</h3>

<p>Los minerales compuestos están formados por dos o más elementos químicos que están combinados en proporciones fijas a través de enlaces químicos, formando una estructura cristalina específica.</p>

<p><b>Química:</b> Están formados por compuestos químicos, lo que significa que contienen más de un tipo de átomo. Ejemplos incluyen:
</p>

<ul class="ul-disc">
    <li>Cuarzo (SiO₂):  Compuesto por silicio y oxígeno.</li>
    <li>Calcita (CaCO₃): Compuesto por calcio, carbono y oxígeno.</li>
  </ul>

<p>En los minerales compuestos, los diferentes elementos se combinan para formar estructuras cristalinas con propiedades físicas y químicas únicas.</p>

<div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-amatista.webp','Cuarzo Amatista','https://pixabay.com/es/photos/amatista-mineral-violeta-239131', 'Pixabay');
      renderImage('q3-u2-blanco.webp', 'Cuarzo Blanco', 'https://pixabay.com/es/photos/cristales-cristal-mineral-17000 ', 'Pixabay');
  ?>

  <?php ob_start(); ?>
  <p>A continuación, se les invita a realizar la siguiente actividad, con la finalidad de integrar los conocimientos sobre minerales aprendidos en esta lección. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a1', "Minerales nativos y compuestos", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
