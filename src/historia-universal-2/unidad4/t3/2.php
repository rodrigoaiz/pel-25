<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h2>Posmodernidad</h2>
 
  <p>
    La posmodernidad es un concepto complejo y ampliamente debatido en el campo de la historia y la filosofía. 
    Algunas de las principales características de ésta son:

  <p>
    La posmodernidad cuestiona las metanarrativas, es decir, los relatos universales que pretenden explicar la 
    realidad en su totalidad, como el progreso lineal, la emancipación o la verdad objetiva. En su lugar, se enfoca 
    en perspectivas múltiples y subjetivas. La posmodernidad promueve la idea de que los conceptos y categorías 
    tradicionales pueden ser desafiados y deconstruidos. Se critica la idea de una verdad objetiva y se pone énfasis 
    en la diversidad de interpretaciones. La posmodernidad reconoce la multiplicidad de perspectivas, voces y culturas. 
    Se enfatiza la diversidad y la heterogeneidad, en contraposición a la uniformidad y homogeneidad modernas. En la 
    posmodernidad, se juega con la noción de la ficción y la realidad, y se incorporan elementos autorreferenciales en 
    la obra de arte. Se exploran las formas en que los discursos y las narrativas construyen nuestra comprensión del mundo. 
    La posmodernidad se desarrolla en el contexto de una sociedad de consumo avanzada y la creciente globalización. 
    Estos fenómenos tienen un impacto significativo en la cultura, la economía y la identidad individual y colectiva. 
    Se presta atención a las experiencias y realidades locales, así como a la vida cotidiana, en lugar de enfocarse 
    exclusivamente en los grandes acontecimientos históricos. Se reconoce la importancia de las prácticas culturales y 
    sociales en la configuración de la realidad.
  </p>

  <?php
       renderImage ('hu2-u4-jean_francois.webp', 'Jean-Francois Lyotard, uno de los principales teóricos de la posmodernidad. Imagen de KOKUYO.', 
       'https://commons.wikimedia.org/wiki/File:Jean-Francois_Lyotard_photographed_by_Bracha_Ettinger_1995.jpg', 'Wikimedia Commons.');
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>