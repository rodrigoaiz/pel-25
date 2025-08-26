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
  <h2>Introducción a las formas de vida social y cultural</h2>
  
  <p>Hola, te damos la bienvenida a la última parte de la unidad 1, con la cual cerraremos el trabajo de ésta y podremos avanzar a la siguiente. Esperamos que hayas aprendido mucho hasta ahora y estamos seguros de que tu trabajo en la unidad 2 será igual de exitoso.</p>
  
  <?php
  renderImage('ciudad-newyork.webp', 'Ciudad de Nueva York. Imagen de fae', 'https://commons.wikimedia.org/wiki/File:Wall_St._bomb_LCCN2014711453.jpg', 'Wikimedia Commons');
  ?>

  <p>En este último aprendizaje tenemos como tema principal las formas de vida social y cultural y los inicios de la llamada sociedad de masas. La "sociedad de masas" es un concepto sociológico que se refiere a un cambio significativo en la estructura social y cultural de la sociedad, particularmente en las sociedades occidentales, que se produjo en las décadas posteriores a la Primera Guerra Mundial, es decir, en la primera mitad del siglo XX. Este fenómeno se caracteriza por varios aspectos clave:</p>

  <h4>🎯 Y ahora un acordeón, que es una sección que se puede expandir y contraer:</h4>
  <?php
  $accordionItems = [
      [
          'title' => 'Crecimiento demográfico y urbanización',
          'content' => '<p>Después de la Primera Guerra Mundial, muchas sociedades experimentaron un rápido crecimiento demográfico y una migración masiva de áreas rurales a áreas urbanas. Esto condujo a una concentración de población en las ciudades y a un aumento en la densidad de población en las áreas urbanas.</p>'
      ],
      [
          'title' => 'Avances tecnológicos y medios de comunicación de masas',
          'content' => '<p>Durante este período, se produjeron avances tecnológicos significativos, como la radio, el cine y la prensa escrita. Estos medios de comunicación de masas permitieron la difusión rápida de información y entretenimiento a un público más amplio que nunca antes.</p>'
      ],
      [
          'title' => 'Consumo en masa',
          'content' => '<p>La producción en masa y la disponibilidad de bienes de consumo se convirtieron en una característica prominente de la economía de la sociedad de masas. Los productos estandarizados y asequibles estaban disponibles para una amplia gama de personas, lo que llevó al surgimiento de una cultura de consumo.</p>'
      ],
      [
          'title' => 'Cultura de masas',
          'content' => '<p>La cultura popular comenzó a dominar la vida cotidiana. Las formas de entretenimiento, como la música, el cine y la radio, comenzaron a moldear las actitudes y las aspiraciones de las personas. La cultura de masas a menudo se centraba en temas comerciales y de entretenimiento.</p>'
      ],
      [
          'title' => 'Política y participación ciudadana',
          'content' => '<p>La política también experimentó cambios significativos en la sociedad de masas. La política de masas se caracterizó por el surgimiento de partidos políticos y movimientos populistas que buscaban el apoyo de amplios sectores de la población. Las técnicas de propaganda y comunicación política se volvieron cruciales.</p>'
      ],
      [
          'title' => 'Homogeneización cultural',
          'content' => '<p>La sociedad de masas a menudo se asocia con la homogeneización cultural, ya que las personas de diferentes orígenes y regiones comenzaron a consumir una cultura más estandarizada y compartían experiencias culturales comunes.</p>'
      ]
  ];
  renderAccordion($accordionItems, 'sociedad-');
  ?>

  <p>Este concepto se relaciona con el impacto de la tecnología y la cultura en la vida cotidiana de las personas en las sociedades modernas. La sociedad de masas ha continuado evolucionando en las décadas posteriores, especialmente con el auge de la tecnología de la información y las redes sociales, lo que ha llevado a nuevos desafíos y cambios en la forma en que las personas se relacionan y participan en la cultura y la política.</p>
  
  <p>Los historiadores han nombrado a esta época entre fines del siglo XIX y comienzos del XX la Belle Époque. Nuestro objetivo con este último tema será distinguir los espacios y las formas de vida de los distintos grupos sociales mediante la comprensión de las expresiones culturales. ¿Listo? Pues vamos allá.</p>
  
  <p>Como aprendiste en la primera lección de esta unidad, los avances tecnológicos y científicos que trajo al mundo la segunda revolución industrial transformaron radicalmente las formas de producir y regalaron al mundo inventos que modificaron radicalmente la vida de las personas. La segunda revolución industrial cambió la mentalidad de las personas, desarrolló una gran confianza en la ciencia y el progreso. Por otro lado, el colonialismo, el cual estudiaste en la segunda lección de la unidad, fue visto como parte de un orden natural. ¿Cuáles fueron las características de esta nueva sociedad en este nuevo mundo?</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>