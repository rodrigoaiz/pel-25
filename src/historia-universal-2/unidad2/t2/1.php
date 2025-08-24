<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La Crisis de 1929: Antecedentes, desarrollo y consecuencias</h2>
  <p>La Crisis de 1929, conocida como la Gran Depresión, fue uno de los eventos más impactantes en la historia económica y política del siglo XX. Se inició en Estados Unidos y se propagó a nivel mundial, dejando una huella indeleble en la sociedad y la economía de la época.</p>

  <?php
  renderImage('hu2-u2-formados.webp','  Personas haciendo fila para obtener comida durante la gran depresión.', 'https://commons.wikimedia.org/wiki/File:Unemployed_men_queued_outside_a_depression_soup_kitchen_opened_in_Chicago_by_Al_Capone,_02-1931_-_NARA_-_541927.jpg','Wikimedia Commons.');
  ?>
 <p>La Crisis de 1929 no fue un evento aislado, sino el resultado de una serie de factores económicos y financieros que se acumularon en las décadas previas entre los que podemos destacar.</p>
  
   <?php
  $accordionItems1 = [
    [
      'title' => 'La prosperidad de la década de 1920',
      'content' => '<p>Después de la Primera Guerra Mundial, Estados Unidos experimentó un auge económico. La industrialización, la innovación tecnológica y el aumento de la producción en masa contribuyeron a un período de crecimiento económico sostenido.</p>'
    ],
    [
      'title' => 'El auge de la Bolsa de Valores',
      'content' => '<p>Durante la década de 1920, la Bolsa de Valores de Nueva York experimentó un auge sin precedentes. Las acciones se convirtieron en una inversión popular, y el mercado de valores creció exponencialmente. La especulación bursátil se generalizó.</p>'
    ],
    [
      'title' => 'El endeudamiento y el crédito fácil',
      'content' => '<p>Las políticas de fácil acceso al crédito permitieron a los estadounidenses comprar bienes de consumo y acciones con dinero prestado. Esto generó una burbuja de endeudamiento y consumo.</p>'
    ],
    [
      'title' => 'Proteccionismo y aranceles',
      'content' => '<p>La aprobación del Acta Fordney-McCumber en 1922 y la Ley Hawley-Smoot en 1930 aumentaron los aranceles y llevaron a una disminución del comercio internacional, lo que afectó negativamente a la economía mundial.</p>'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>
  <p>La Crisis de 1929 se desató a raíz del colapso del mercado de valores, pero su impacto se extendió mucho más allá de Wall Street. El 24 de octubre y el 29 de octubre de 1929, dos días conocidos como el Jueves Negro y el Martes Negro, respectivamente, marcaron el colapso del mercado de valores de Nueva York. Las acciones perdieron gran parte de su valor, lo que llevó a una ola de pánico y ventas masivas. El colapso de la Bolsa de Valores desencadenó una contracción masiva del crédito. Los bancos dejaron de prestar dinero, lo que provocó una cascada de quiebras y despidos en la industria y el comercio.</p>
    <?php
  renderImage('hu2-u2-desempleados.webp','Personas desempleadas en los años 30, imagen de US National Archives bot. ', 'https://commons.wikimedia.org/wiki/File:Row_of_men_at_the_New_York_City_docks_out_of_work_during_the_depression,_1934_-_NARA_-_518288.jpg','Wikimedia Commons.');
 ?>
 <p>Miles de empresas que habían dependido del crédito y la inversión se declararon en bancarrota. La producción industrial se redujo drásticamente, y el desempleo se disparó. La Crisis de 1929 no se limitó a Estados Unidos. Se propagó a nivel mundial a medida que el comercio internacional se contrajo y otros países experimentaron sus propias crisis económicas. La crisis llevó a un aumento del nacionalismo y la adopción de políticas proteccionistas, como el establecimiento de aranceles más altos, que dificultaron aún más la recuperación económica a nivel global. Algunos expertos argumentan que la Crisis de 1929 desempeñó un papel en el surgimiento de tensiones políticas y económicas que llevaron a la Segunda Guerra Mundial. La lucha por los recursos y el poder económico se convirtieron en factores de conflicto. Lo cierto es que la Crisis de 1929, o la Gran Depresión, como se le suele llamar, dejó una marca imborrable en la historia económica y política del siglo XX.</p>
 <h3>El "New Deal" y su impacto en la Historia de los Estados Unidos</h3>
 <?php
  renderImage('hu2-u2-roosevelt.webp','Roosevelt y el New Deal. Imagen de Wow.', 'https://commons.wikimedia.org/wiki/File:New_Deal_collage.jpg','Wikimedia Commons.');
 ?>
 <p>El "New Deal" es uno de los episodios más significativos en la historia de los Estados Unidos. Se refiere a una serie de programas y políticas implementadas por el gobierno federal durante la década de 1930, bajo la presidencia de Franklin D. Roosevelt, con el objetivo de enfrentar los desafíos económicos y sociales de la Gran Depresión. Este conjunto de reformas y regulaciones transformó la economía y la sociedad estadounidense, y su legado perdura en la actualidad.</p>
 <h4>Contexto Histórico</h4>
 <p>Para comprender la importancia del "New Deal", es esencial considerar el contexto histórico en el que se desarrolló. La Gran Depresión, la peor crisis económica de la historia de los Estados Unidos, comenzó en 1929 con el colapso de la Bolsa de Nueva York. Millones de estadounidenses perdieron sus empleos, sus ahorros y sus hogares. La economía se sumió en una recesión profunda y prolongada, y la desigualdad social se agravó. La crisis económica tuvo un impacto devastador en la vida de las personas y generó un sentimiento generalizado de desesperación. En este contexto, Franklin D. Roosevelt asumió la presidencia en 1933. Durante su campaña presidencial, prometió un "New Deal" para los estadounidenses, una serie de medidas destinadas a combatir la Gran Depresión y restaurar la confianza en la economía y el gobierno. Roosevelt y su administración creían que el gobierno tenía un papel crucial que desempeñar en la protección del bienestar de la población y en la regulación de la economía.</p>
  
  <h3>Objetivos del "New Deal"</h3>
  <p>El "New Deal" tenía varios objetivos fundamentales:</p>
    <?php
  $accordionItems2 = [
    [
      'title' => 'Recuperación económica',
      'content' => '<p>El primer y más urgente objetivo del "New Deal" era revitalizar la economía estadounidense. Se buscaba la creación de empleo, la estabilización de los precios y el restablecimiento de la confianza en el sistema financiero.</p>'
    ],
    [
      'title' => 'Reforma bancaria y financiera',
      'content' => '<p>Para abordar la raíz de la crisis, se implementaron medidas como la Ley Glass-Steagall, que separó los bancos comerciales de los bancos de inversión, y la creación de la Comisión de Bolsa y Valores (SEC) para regular el mercado de valores. Estas reformas buscaban evitar la especulación y el colapso financiero.</p>'
    ],
    [
      'title' => 'Asistencia a los desempleados',
      'content' => '<p>El "New Deal" incluyó programas como la Administración de Trabajo Público (WPA) y el Cuerpo Civil de Conservación (CCC), que proporcionaron empleo a millones de desempleados a través de proyectos de obras públicas y conservación de recursos naturales.</p>'
    ],
    [
      'title' => 'Reformas en el sistema de bienestar social',
      'content' => '<p>Se estableció el Seguro Social para proporcionar una red de seguridad económica para los ancianos y discapacitados, así como programas de ayuda para los desempleados y necesitados.</p>'
    ],
    [
      'title' => 'Regulación económica',
      'content' => '<p>Se promulgaron leyes como la Ley Wagner (Ley Nacional de Relaciones Laborales) para proteger los derechos de los trabajadores y fomentar la negociación colectiva. Además, se creó la Administración Nacional de Recuperación (NRA) para establecer códigos de prácticas justas en la industria.</p>'
    ]
  ];
  renderAccordion($accordionItems2, 'segundo-');
  ?>
  <p>El "New Deal" tuvo un impacto significativo en la sociedad estadounidense y en la economía del país. A lo largo de la década de 1930, la economía estadounidense experimentó una lenta pero constante recuperación. El PIB aumentó, y la tasa de desempleo disminuyó gradualmente. Los programas de obras públicas del WPA y el CCC crearon millones de empleos, y la estabilización del sistema financiero brindó una mayor confianza a los inversores, también ayudó a aliviar la pobreza al proporcionar empleo y asistencia a quienes más lo necesitaban. Los programas de ayuda a los desempleados, como el Seguro de Desempleo, permitieron a las personas mantener un nivel básico de vida durante tiempos difíciles.</p>
  <p>Paralelamente la Ley Wagner protegió los derechos de los trabajadores a sindicalizarse y negociar colectivamente. Esto llevó a un aumento en la afiliación sindical y a mejoras en las condiciones laborales y salarios. Algo que ayudó mucho también fue la creación del Seguro Social así como un sistema de jubilación y asistencia a personas mayores y discapacitadas que ha proporcionado seguridad económica a millones de estadounidenses desde su implementación y continua hasta la actualidad, aunque algo ya debilitado por el transcurso del tiempo y algunas reformas administrativas.</p>
  <?php
  renderImage('hu2-u2-poster.webp','Poster de la seguridad social durante la era Roosevelt. Imagen de US National Archives bot .', 'https://commons.wikimedia.org/wiki/File:Social_Security_Poster_of_a_Mother_and_Her_Child_-_NARA_-_195886.tif','Wikimedia Commons.');
 ?>
 <p>La Ley Glass-Steagall y la creación de la SEC ayudaron a restaurar la confianza en el sistema financiero, evitando excesos y prácticas especulativas que habían contribuido a la crisis. En suma, el "New Deal" transformó la percepción del gobierno en la vida de los ciudadanos. Se reconoció que el gobierno tenía la responsabilidad de intervenir para proteger el bienestar económico y social de la población.</p>
 <p>A pesar de sus logros, el "New Deal" también enfrentó críticas. Algunos argumentaron que las reformas gubernamentales eran excesivas y que el gobierno estaba asumiendo demasiado control sobre la economía. Otros sostenían que el "New Deal" no había ido lo suficientemente lejos en la reforma y que no había logrado resolver completamente la Gran Depresión. Además, hubo preocupaciones sobre la deuda acumulada por el gobierno para financiar los programas del "New Deal". Aunque la inversión en obras públicas y asistencia social era necesaria, algunos temían que esto podría resultar en una carga insostenible para las generaciones futuras.</p>
 <p>Lo cierto es que el legado del "New Deal" es innegable y ha perdurado a lo largo de las décadas. A pesar de las críticas y debates, muchas de las reformas y políticas implementadas durante la era del "New Deal" siguen siendo fundamentales en la sociedad estadounidense.</p>
 <p>Revisemos el siguiente video para complementar las ideas expuestas en este apartado.</p>
  <?php
  renderVideoIframe('915g9XrmgnQ', 'El New Deal');
  ?>
  <?php ob_start(); ?>
  <p>Para concluir este tema resolvamos el siguiente reto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a1', "La gran depresión y el new deal", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
