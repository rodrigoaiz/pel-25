<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Los Nacionalismos y el Surgimiento del Fascismo en el Siglo XX</h2>
  <p>El siglo XX fue testigo de una serie de acontecimientos significativos que moldearon la política, la sociedad y la cultura en todo el mundo. Uno de los fenómenos más destacados de este período fue el auge del nacionalismo y, con él, el surgimiento del fascismo. Estos movimientos políticos e ideológicos tuvieron un impacto profundo en Europa y más allá, y desempeñaron un papel crucial en la génesis de eventos cruciales como la Primera Guerra Mundial y la Segunda Guerra Mundial.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-mussolini.webp','Benito Mussolini. Imagen de Suetonius.', 'https://commons.wikimedia.org/wiki/File:Mussolini-passo-romano.tif','Wikimedia Commons.');
  ?>
  </div>
  <p>El nacionalismo, como un sentimiento de lealtad y devoción a la nación, ha existido en diversas formas a lo largo de la historia. Sin embargo, en el siglo XX, el nacionalismo adquirió un nuevo nivel de prominencia y significado. A medida que las naciones europeas se industrializaban y se desarrollaban, se forjaban identidades nacionales más fuertes. Este sentimiento de pertenencia a una nación se basaba en factores culturales, étnicos, lingüísticos y, en muchos casos, en la oposición a la dominación extranjera.</p>
  <p>El nacionalismo desempeñó un papel destacado en varios eventos clave del siglo XX. Uno de los ejemplos más notorios fue el asesinato del archiduque Francisco Fernando de Austria-Hungría en 1914, que desencadenó el inicio de la Primera Guerra Mundial. El nacionalismo étnico en Europa del Este, en particular, alimentó tensiones y conflictos que finalmente desembocaron en el colapso de imperios multinacionales como el austrohúngaro y el otomano. El Tratado de Versalles, que puso fin a la Primera Guerra Mundial en 1919, contribuyó aún más a la promoción del nacionalismo. El tratado redibujó las fronteras europeas y dio lugar a la creación de nuevos estados-nación en Europa Central y del Este. Sin embargo, también generó una serie de problemas y resentimientos, ya que muchos grupos étnicos y minorías quedaron atrapados en los territorios de otras naciones o se sintieron excluidos de los beneficios de la paz.</p>
  <h3>El surgimiento del fascismo</h3>
  <p>El surgimiento del fascismo en Europa se puede entender en el contexto de los nacionalismos extremos y la agitación política de la posguerra. El fascismo es una ideología y un movimiento político que surgió principalmente en Italia y Alemania en la década de 1920. Algunas de las características fundamentales del fascismo incluyen la exaltación del nacionalismo, la autoridad del Estado, el rechazo del liberalismo y la democracia, y la promoción del autoritarismo y el militarismo.</p>
  <p>En Italia, Benito Mussolini lideró el movimiento fascista, que se hizo cargo del gobierno en 1922. Mussolini promovió una visión de un Gran Imperio Italiano, restaurando la grandeza de la antigua Roma. Al mismo tiempo, en Alemania, Adolf Hitler y el Partido Nazi promovieron una ideología similar de nacionalismo extremo, que apuntaba a la creación de un Reich alemán dominante. El nacionalismo extremo y el autoritarismo se fusionaron en el fascismo, lo que resultó en gobiernos totalitarios que ejercían un control férreo sobre sus respectivas naciones.</p>
  <p>Antes de continuar, revisemos un dato curioso acerca del origen de la palabra “fascismo”</p>
  <?php
  renderVideoIframe('BhGGX2nsX-w', 'Fascismo');
  ?>

  <p>El fascismo desempeñó un papel fundamental en el desencadenamiento de la Segunda Guerra Mundial. La expansión territorial y las agresiones de Italia y Alemania, bajo el liderazgo de Mussolini y Hitler, llevaron al conflicto bélico que asoló a Europa y gran parte del mundo. Se llevaron a cabo persecuciones políticas, represión de la oposición y violaciones de los derechos humanos, el ejemplo más claro fue el Holoausto, un genocidio que resultó en la muerte de seis millones de judíos y la persecución de otras minorías. Esto representa uno de los episodios más oscuros de la historia de la humanidad, que sin embargo parece repetirse de forma periódica en distintos conflictos en los que el nacionalismo provoca la persecución de grupos étnicos minoritarios.</p>
  <p>El surgimiento del fascismo y la Segunda Guerra Mundial dejaron una profunda huella en la historia europea y mundial. Tras la derrota de las potencias fascistas, se estableció una fuerte conciencia de la necesidad de evitar la repetición de tales tragedias. Algunas de las consecuencias a largo plazo incluyen:</p>
  <?php
  $accordionItems1 = [
    [
      'title' => 'La creación de las Naciones Unidas',
      'content' => '<p>Se fundaron las Naciones Unidas en 1945 con el propósito de mantener la paz y la cooperación internacional, evitando conflictos de la magnitud de las guerras mundiales.</p>'
    ],
    [
      'title' => 'La promoción de los derechos humanos',
      'content' => '<p>La Segunda Guerra Mundial generó un impulso global para la promoción y protección de los derechos humanos, lo que condujo a la adopción de la Declaración Universal de Derechos Humanos en 1948.</p>'
    ],
    [
      'title' => 'El proceso de descolonización',
      'content' => '<p>La Segunda Guerra Mundial aceleró el proceso de descolonización en Asia, África y otras regiones, ya que las potencias coloniales debilitadas perdieron su influencia.</p>'
    ],
    [
      'title' => 'La Guerra Fría',
      'content' => '<p>El conflicto entre las superpotencias de Estados Unidos y la Unión Soviética en la posguerra, conocido como la Guerra Fría, tuvo un impacto significativo en la política mundial y en la división de Europa.</p>'
    ],
    [
      'title' => 'La integración europea',
      'content' => '<p>En un esfuerzo por prevenir futuros conflictos en Europa, se crearon instituciones como la Comunidad Europea del Carbón y del Acero (CECA) y la Comunidad Económica Europea (CEE), que eventualmente llevaron a la Unión Europea.</p>'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>
  <p>El conocimiento de la historia del nacionalismo y el fascismo en el siglo XX es crucial para comprender los desafíos políticos y sociales de la actualidad y para evitar la repetición de los errores del pasado. En un mundo donde el nacionalismo y el autoritarismo a menudo están en auge, es esencial aprender de la historia y esforzarse por construir un futuro más pacífico y justo.</p>

  <?php ob_start(); ?>
  <p>Para finalizar realicemos el siguiente reto y así reafirmaremos nuestros conocimientos sobre este importante tema.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a2', "Nacionalismo y fascismo", $ActividadContent);
  ?>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-fasces.webp','Fasces. Imagen de Tennppakuranohimarayasenmyaku', 'https://commons.wikimedia.org/wiki/File:PNF_fasces.png','Wikimedia Commons.');
  ?>
  </div>





</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
