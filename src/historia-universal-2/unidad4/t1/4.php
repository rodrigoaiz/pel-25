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

  <h2>Relación entre neoliberalismo y globalización</h2>

    <p>
        La relación entre la globalización y el neoliberalismo es profunda, ya que el neoliberalismo ha 
        sido una ideología y un conjunto de políticas que han influido en gran medida en la forma en que 
        se ha desarrollado la globalización en las últimas décadas. Para comenzar hay que comprender que 
        el neoliberalismo es una ideología que promueve la reducción de la intervención del Estado en la 
        economía y la promoción de la libre competencia y el mercado como mecanismos para lograr el 
        crecimiento económico y la eficiencia. Aboga por la reducción de regulaciones gubernamentales, 
        la privatización de empresas estatales y la apertura de los mercados a la competencia global.
    </p>

    <p>
        Las políticas y principios del neoliberalismo han sido un motor importante de la globalización 
        económica. La apertura de los mercados a través de la liberalización comercial, la inversión 
        extranjera y la eliminación de barreras comerciales se ha promovido como una forma de permitir 
        que las empresas operen a nivel mundial y aumenten la eficiencia económica. El neoliberalismo 
        también ha impulsado la desregulación de los mercados financieros, permitiendo una mayor movilidad 
        de capitales a nivel mundial. Esto ha contribuido a la expansión de la globalización financiera 
        y la interconexión de los sistemas financieros globales.
    </p>

    <p>
        Antes de continuar, te invitamos a revisar el siguiente video acerca de los orígenes del 
        neoliberalismo, aunque por ser un tema complejo será casi hasta el final de esta unidad 
        que tengas una perspectiva más clara acerca del mismo.
    </p>

    <?php
      renderVideoIframe('SVKo4GHCFl4', 'El origen del neoliberalismo.');
    ?>

    <?php
    renderImage('hu2-u4-leanne_container.webp', 'La globalización es impulsada por la idea del libre comercio. Imagen de ImagePerson. ', 
       'https://commons.wikimedia.org/wiki/File:MSC_Leanne_Container_Vessel_at_Colon,_January_2016_0691_SS.jpg', 'Wikimedia Commons.');
    ?>

    <p>
        Por otro lado, también han surgido importantes críticas al neoliberalismo y a la globalización. 
        Uno de los puntos de crítica más importantes es que el neoliberalismo ha exacerbado la desigualdad
        económica, ya que tiende a beneficiar a las empresas multinacionales y a las élites económicas en 
        detrimento de los trabajadores y las poblaciones más vulnerables quienes no cuentan ni con recursos 
        ni con financiamientos para aprovechar el comercio con otros países. Además de esto, la globalización promovida
        por el neoliberalismo ha planteado desafíos a la soberanía nacional, ya que las decisiones económicas clave 
        a menudo se toman a nivel supranacional, en instituciones como el FMI, el Banco Mundial y la Organización Mundial 
        del Comercio (OMC), lo cual despierta suspicacias dentro de círculos más nacionalistas. Finalmente la globalización 
        cultural también ha sido influenciada por el neoliberalismo, ya que la apertura de los mercados puede llevar 
        a la difusión de la cultura y los valores occidentales en todo el mundo, lo que ha llevado a críticas sobre la 
        homogeneización cultural.
    </p>

    <?php
    renderImage('hu2-u4-netflix_iphone.webp', 'La globalización finalmente no solo es un intercambio de productos, sino de ideas y esto se conoce como globalización cultural. Imagen de FlickreviewR2.', 
       'https://commons.wikimedia.org/wiki/File:Netflix_iPhone.jpg', 'Wikimedia Commons.');
    ?>

    <?php ob_start(); ?>
  <p>Para finalizar, te invitamos a revisar el siguiente reto y reforzar algunos conceptos de esta lección</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a3', "Neoliberalismo", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Comenta en el siguiente foro.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a4', "Globalización en el contexto actual", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>