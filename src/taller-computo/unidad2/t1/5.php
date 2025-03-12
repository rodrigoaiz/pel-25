<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Distintos tipos de computadoras</h3>
  <p>Te invito a que revises el siguiente video, donde identificarás los contenidos (temas) que se desarrollarán mediante diversas actividades y así lograr el aprendizaje.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('dYL4DO6puks', 'Presentación del Aprendizaje 2 Identifica las características de los distintos tipos de computadoras');
    ?>
  </div>
  <h3>Introducción</h3>
  <p>Las computadoras hoy en día son utilizadas casi en todas nuestras actividades cotidianas, facilitando una amplia gama de tareas y mejorando nuestra productividad, siendo casi imposible imaginarnos nuestro día a día sin acceso a ellas, dado que son usadas para estudiar, trabajar, divertirse o simplemente contactarse con tus amigos y seres queridos.</p>
  <p>Sin lugar a dudas han cambiado nuestras vidas, es bastante probable que estés leyendo esto desde una computadora, ya sea un modelo de escritorio o uno portátil, o puede darse el caso de que lo estés haciendo desde un dispositivo móvil como una tableta o un teléfono inteligente.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t1_devices.webp', 'Dispositivos móviles. Imagen de d3images.', 'https://www.freepik.com/free-vector/technological-devices-design_953321.htm', 'Freepik.') ?>
  </div>
  <p>Por eso es importante identificar algunas de sus características, como son; su capacidad de procesamiento, su portabilidad, su capacidad de almacenamiento, la interacción en la entrada de datos, las aplicaciones y software especializado que utilizan, todo ello para llevar a cabo eficientemente las instrucciones que les damos y realicen las actividades que necesitamos como usuarios.</p>
  <p>Dichas tareas las realizan diferentes tipos de computadoras según su tamaño y su tecnología, tienen un diseño para adaptarse a diferentes necesidades y contextos en nuestra vida cotidiana como:</p>
  <ul class="ul-disc">
    <li>Las microcomputadoras las cuales son las más pequeñas y comunes, como las computadoras personales, las portátiles y los smartphones.</li>
    <li>Las estaciones de trabajo son más potentes y se usan para tareas específicas, como el diseño gráfico o la ingeniería.</li>
    <li>Las supercomputadoras son las más grandes y rápidas, y se usan para procesar grandes cantidades de datos o realizar simulaciones complejas.</li>
  </ul>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t1_computer_technology.webp', 'Dispositivos móviles. Imagen de d3images.', 'https://www.freepik.com/free-vector/technological-devices-design_953321.htm', 'Freepik.') ?>
  </div>
  <p>Seguro que tienes muchas preguntas. Te invito a dar clic en las preguntas para conocer sus respuestas. Si lo consideras, toma nota.</p>
  <?php
  $accordionItems1 = [
    [
      'title' => '¿Qué es una Supercomputadora?',
      'content' => 'Son máquinas de gran capacidad de procesamiento se utilizan para tareas científicas y de investigación, ayudan en campos como la simulación de clima, la investigación espacial y la genómica.'
    ],
    [
      'title' => '¿Es lo mismo una microcomputadora que un teléfono inteligente?',
      'content' => 'No, no es lo mismo. Una microcomputadora es un tipo de computadora que tiene un tamaño pequeño. Un teléfono inteligente es un dispositivo móvil que combina las funciones de un teléfono y una computadora personal. Ambos pueden conectarse a internet, pero tienen diferentes capacidades y usos.'
    ],
    [
      'title' => '¿Qué es una computadora portátil?',
      'content' => 'Estas son compactas y ligeras, brindan movilidad y flexibilidad para trabajar en cualquier lugar.'
    ],
    [
      'title' => '¿Qué es una handheld?',
      'content' => 'Son dispositivos pequeños y portátiles, se conocían como PDAs (asistentes digitales personales), permitían realizar tareas básicas como tomar notas, hacer cálculos, administrar horarios, en la actualidad las puedes ver en los supermercados como un lector de código de barras de un producto, mostrando el precio y algunas de sus características.'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>
  <p>Como habrás notado, es importante identificar los diferentes tipos de computadoras que existen y tomar conciencia de cómo son utilizadas en nuestra cotidianidad.</p>
  <p>Visualiza el siguiente video “Tipos de Computadoras” y toma nota.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('R60PPJwZxd4', 'Tipos de Computadoras');
    ?>
  </div>
  <?php ob_start(); ?>
  <p>Es momento de comprobar lo que has aprendido con la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a4', "Tipos de computadoras", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
