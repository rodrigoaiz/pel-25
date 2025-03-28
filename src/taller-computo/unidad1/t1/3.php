<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Conceptos de red y servicios de Internet</h3>
  <p>Te invito a que revises el siguiente video, donde identificamos las actividades a realizar para lograr el aprendizaje.</p>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('eAGZ1nqAtEw', ' Presentación del Aprendizaje 1 "Conceptos de red y servicios de Internet"');
    ?>
  </div>
  <h3>Introducción</h3>
  <p>A partir de la interacción actual, las redes sociales constituyen, las nuevas expresiones como productores de conocimiento, así como su necesidad de intercambiar y transferir lo que se aprende y se crea, sin embargo, es necesario conocer algunos conceptos básicos de Redes informáticas, al mismo tiempo de algunos de los servicios de Internet que utilizamos día a día, debido a que son estructuras tecnológicas, que permiten la interconexión de información a través de diversos dispositivos, cada uno con su propia autonomía, que convergen en el acceso a la Red llamada Internet, así como el envío-recepción de datos y archivos, lo cual se logra a partir de una serie de protocolos de comunicación, como el TCP/IP.</p>
  <h3>Aprendizajes de la unidad</h3>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('gente_negocios_iconos.webp', 'Gente de negocios con iconos', 'https://www.freepik.es/vector-gratis/gente-negocios-iconos-conexion_3585360.htm#query=redes%20internet&amp;position=9&amp;from_view=keyword&amp;track=ais', 'Freepik');
    ?>
  </div>

  <?php
  $accordionItems1 = [
    [
      'title' => '¿Cómo funciona Internet?',
      'content' => '<p>Internet es una red que integra a nivel mundial otras redes y dispositivos, a través de diversos servicios.</p>'
    ],
    [
      'title' => '¿Es lo mismo web que Internet?',
      'content' => '<p>No, la Web (World Wide Web) es una enorme colección de páginas que se establece a partir de Internet.</p>'
    ],
    [
      'title' => '¿Cuáles son los servicios que ofrece Internet?',
      'content' => '<p>Algunos de los servicios más utilizados pueden ser: World Wide Web, Correo electrónico, Grupos de Noticias, Transferencia de archivos FTP (Protocolo de transmisión de archivos), entre otros.</p>'
    ],
    [
      'title' => '¿Cómo se transmite la información que compartes?',
      'content' => '<p>A través de una serie de reglas llamados TCP / IP (Protocolo de control de transmisión/Protocolo de Internet).</p>'
    ],
    [
      'title' => '¿Cómo te conectas a una página web?',
      'content' => '<p>Mediante una dirección IP.</p>'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>
  <?php ob_start(); ?>
  <p>Visualiza la siguiente presentación “Redes” y toma nota.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a2', "Conceptos de Red", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza la siguiente actividad sobre “Servicios de Internet” y toma notas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a3', "Servicios de Internet", $ActividadContent);
  ?>
  <p>Con base en lo anterior y apoyándote de las características y elementos de una infografía, así como de la lista de cotejo realiza la Infografía “Conceptos de Red y Servicios de Internet”.</p>
  <p>En el siguiente enlace se describe brevemente lo que es una <a href="https://www.revista.unam.mx/2021v22n6/infografia_la_mirada_creativa_de_la_informacion/" target="_blank">infografía</a>.</p>
  <p>Para ver los elementos de una infografía, revisa la página 5 del siguiente <a href="<?php echo PATH_DOCS . 'u1_t1_infografia.pdf'; ?>" target="_blank">documento</a>.</p>
  <?php ob_start(); ?>
  <p>Ahora que ya sabemos que es una infografía y los elementos que se deben de integrar a ella, te invito a retomar tus notas de las actividades interactivas Conceptos de Red, Servicios de Internet, así como busques información relacionada al tema, para entregar la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a4', 'Conceptos de Red y Servicios de Internet', $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza el siguiente ejercicio de autoevaluación, que te permite conocer tu aprendizaje sobre Concepto de Red y Servicios de Internet.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a5', 'Red y Servicios de Internet', $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <ul class="ul-disc mx-auto">
    <li>
      <h4>FNC</h4>
      <p><a href="'<?php echo PATH_DOCS . "u1_t1_internet_res.pdf" ?>'" target="_blank">Consejo Federal de Redes (Fedral Networking Council)</a>, el 24 de octubre de 1995 definió el término:</p>
      <p>Internet como el sistema de información global que conecta a diversas redes de computadoras entre sí bajo el protocolo de comunicación TCP/IP, cada dispositivo posee una dirección única para su reconocimiento (IP); y la red provee el acceso a diferentes niveles de servicios de comunicación e información públicos o privados.</p>
    </li>
    <li>
      <h4><a href="https://www.nicmexico.mx/" target="_blank">NIC</a> México</h4>
      <p>Es la organización encargada de la administración del nombre de dominio territorial .MX, el código de dos letras asignado a cada país según el ISO 3166. Entre sus funciones están el proveer los servicios de información y registro para .MX así como la asignación de direcciones de IP y el mantenimiento de las bases de datos respectivas a cada recurso.</p>
    </li>
    <li>
      <h4>Navegador ≠ Buscador Web</h4>
      <p>Por otro lado y no menos importante es necesario mencionar que la gran mayoría confunde un navegador con un buscador, aclarando que son dos elementos diferentes, sin embargo trabajan en conjunto ya que uno permite la comunicación con Internet y el otro permite indagar en él.</p>
      <p>Un <a href="https://www.avast.com/es-es/c-what-is-a-web-browser" target="_blank">navegador</a> para Avast (2021) es “una aplicación de software que permite acceder a la World Wide Web” entonces es un programa capaz de comunicarse con los servidores Web, y obtener la información y los servicios que éstos prestan, siendo los más utilizados Google Chrome, Opera, Safari, Microsoft Edge.</p>
      <p>Un <a href="https://es.wikipedia.org/wiki/Motor_de_b%C3%BAsqueda" target="_blank">buscador web</a> o motor de búsqueda para Wikipedia (2023) “es un sistema informático que busca archivos almacenados en servidores web, donde algunos buscan únicamente en la web, pero otros lo hacen además en servicios de noticias”, siendo algunos de los más comunes; Google, Google Académico, Bing, Yahoo, entre otros.</p>
    </li>
    <li>
      <h4>Servidor ≠ servidor web</h4>
      <p>Así mismo es importante diferenciar entre qué es un servidor web y un servidor, por ello UNADE indica que:</p>
      <p>Puede parecer el mismo concepto, pero no lo es. Ciertamente, uno es parte del otro, pero tienen funciones distintas. El <u>servidor</u> por su parte es el equipo donde están alojados los sitios y aplicaciones web. Mientras que el <u>servidor web</u> es un software que atiende las demandas del usuario. (<a href="https://unade.edu.mx/que-es-un-servidor-web/" target="_blank">UNADE</a>, 2020, parr 2)</p>
    </li>
  </ul>

</section>

<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Para saber más");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
