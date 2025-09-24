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
  <p>
    La globalización ha sido moldeada por una serie de tratados y acuerdos internacionales a lo largo del tiempo. 
    Algunos de los principales tratados y acuerdos relacionados directamente con la globalización incluyen:
  </p>

  <?php
  $accordionItems1 = [
    [
      'title' => 'Acuerdo General sobre Aranceles Aduaneros y Comercio (GATT)',
      'content' => '<p>Este acuerdo, establecido en 1947, fue un precursor de la Organización Mundial del Comercio (OMC) y tenía como objetivo reducir las barreras comerciales y promover el comercio internacional.</p>'
    ],
    [
      'title' => 'Tratado de Libre Comercio de América del Norte (TLCAN)',
      'content' => 'Firmado en 1992 y en vigor desde 1994, este acuerdo involucró a Canadá, Estados Unidos y México, y promovió el comercio y la inversión en América del Norte.'
    ],
    [
      'title' => 'Acuerdo de Asociación Transpacífico (TPP)',
      'content' => 'Este acuerdo involucró a varios países de la región Asia-Pacífico y buscaba establecer un área de libre comercio en la región antes de que Estados Unidos se retirara del acuerdo en 2017. El acuerdo fue renombrado como el Acuerdo Integral y Progresista para la Asociación Transpacífico (CPTPP) y siguió adelante sin Estados Unidos'
    ],
    [
      'title' => 'Tratado entre Canadá, México y Estados Ubidos (T-MEC)',
      'content' => 'Reemplazó al TLCAN y entró en vigor en 2020, actualizando y modernizando los términos del comercio en América del Norte.'
    ],
     [
      'title' => 'Acuerdo de París',
      'content' => 'Firmado en 2015, este acuerdo busca abordar el cambio climático a través de la cooperación internacional. Aunque no se centra exclusivamente en la globalización económica, tiene implicaciones significativas para la economía global en términos de transición hacia fuentes de energía más sostenibles.'
    ],
     [
      'title' => 'Tratado de Libre Comercio entre la Unión Europea y Canadá (CETA)',
      'content' => 'Este acuerdo comercial, en vigor desde 2017, facilita el comercio y la inversión entre la Unión Europea y Canadá.'
    ],
    [
      'title' => 'Acuerdo de Asociación Económica Integral Regional (RCEP)',
      'content' => 'Fue firmado en 2020 y es el acuerdo comercial más grande del mundo en términos de población involucrada, incluyendo a 15 países de Asia y el Pacífico. Busca promover el comercio y la cooperación económica en la región'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>

  <p>
    Estos son solo algunos ejemplos de tratados y acuerdos que han influido en la globalización en diversas formas, promoviendo el comercio internacional y la cooperación económica entre naciones.
  </p>

      <div class="mx-auto max-w-lg">
   <?php
       renderImage('hu2-u4-ildefonso.webp', 'Firma conjunta del T-MEC 2018, por México, EE.UU y Canadá. Imagen de Don Lolo', 
       'https://commons.wikimedia.org/wiki/File:Ildefonso_Guajardo_firmando_el_TMEC.jpg', 'Wikimedia Commons.');
    ?>
    </div>

    <?php ob_start(); ?>
  <p>
    Antes de proseguir reafirmemos algunos conceptos clave mediante el siguiente reto.
  </p>
    <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a2', "Nombre del cuestionario", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>