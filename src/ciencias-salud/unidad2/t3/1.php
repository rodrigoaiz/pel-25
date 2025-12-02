<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Distingue los elementos mínimos que integran un protocolo de investigación en salud</h2>

  <p>El término protocolo deriva de la palabra griega <i>Protokollon</i> que significa primera hoja de un papiro que describe los datos para hacer algo, es decir es el plan de un experimento científico o un tratamiento. Es un documento esencial para guiar la investigación y asegurar que se lleve a cabo de manera ética y rigurosa, proporciona información detallada sobre el diseño, la metodología, los objetivos, la población de estudio, la recopilación de datos, el análisis estadístico y otros aspectos importantes del estudio.</p>

  <p>Para realizar un protocolo de investigación se toma como base al método científico; este debe ser un documento que esté organizado secuencialmente, en donde todos sus apartados tienen relación entre sí. Este instrumento lo utilizan los profesionales de la salud como guía metodológica, para evaluar proyectos o informes de investigación de diferentes instituciones que pueden ser gubernamentales, privadas o académicas, las cuales dictan los criterios y características que deben de tener. Tomando en cuenta que cada proyecto tiene sus propias particularidades, los protocolos tienen que ser documentos adaptables que permitan hacer modificaciones de acuerdo a las peculiaridades de cada investigación.</p>

  <p>El protocolo de investigación en salud es esencial para garantizar la calidad y la integridad de la investigación, así como para permitir que otros investigadores evalúen, repliquen y construyan sobre el trabajo realizado. Además, facilita la revisión por parte de comités de ética y la obtención de financiamiento para el estudio. Un protocolo de investigación en salud es un documento detallado que describe el diseño, los objetivos, los métodos y los procedimientos de una investigación. </p>

  <h3>Elementos mínimos de un  protocolo de investigación en salud</h3>

  <p>A continuación se mencionan algunos elementos mínimos, que suelen estar incluidos en un protocolo de investigación en salud. Cabe mencionar que dependiendo de la temática y la institución en donde se realice el protocolo, estos elementos mínimos pueden variar:</p>

  <ul>

  <li><b>Carátula:</b> Identifica al proyecto, contiene el nombre de la institución, el título de la investigación que se va a realizar (que muestre claramente tanto el contenido como el propósito del estudio) y el nombre de los autores.</li>

  <li><b>Índice:</b> Contiene el nombre de los apartados en los que se divide el trabajo y las páginas en las que se ubican.</li>

  <li><b>Introducción:</b> Es una presentación general de los aspectos más importantes del proyecto.</li>

  <li><b>Marco teórico:</b> Son los antecedentes relacionados con el tema de estudio.</li>

  <li><b>Justificación:</b> Se refiere al ¿por qué? y ¿para qué? se va a realizar la investigación, está se sustenta en argumentos clínicos y epidemiológicos.</li>

  <li><b>Problema:</b> Se debe plantear en forma de pregunta clara y concisa, que esté relacionada con una condición o situación que afecta negativamente la salud de una población, comunidad o individuo. Del correcto planteamiento del problema depende el buen desarrollo de la investigación. </li>

  <li><b>Hipótesis:</b> Es una respuesta tentativa que se da para tratar de resolver el problema planteado.</li>

  <li><b>Objetivos:</b> Son las explicaciones claras y específicas de lo que se trata de lograr con la investigación que se realizará.</li>

  <li><b>Metodología:</b> Es la exposición pormenorizada del diseño de investigación que se va a desarrollar, el cual puede ser experimental, observacional, ensayo clínico, estudios transversales, entre otros, incluye la descripción detallada de los procedimientos específicos que se realicen, lo cual garantiza la calidad y la validez de los resultados que se obtengan.</li>

  <li><b>Recursos:</b> Los recursos pueden ser materiales (instrumentos para la investigación, equipo de cómputo e insumos), humanos (personal especializado) y financieros (apoyos económicos).</li>

  <li><b>Cronograma:</b> Es una parte importante de la planeación del estudio; Se trata de una secuencia temporal y detallada que organiza y define de manera ordenada las actividades del proyecto.</li>

  <li><b>Bibliografía:</b> Son todas las fuentes que se consultaron a lo largo de la investigación que se realizó, lo que garantiza la transparencia y credibilidad de esta. Se citan en una lista en orden alfabético.</li>

  <li><b>Anexos:</b> Se incluyen en este apartado, los documentos que no fueron incorporados en alguna sección del trabajo, pero que son importantes para el mismo, como pueden ser los cuestionarios, tablas, gráficas, formularios de consentimiento, etc. </li>

  </ul>


    <p>Los elementos antes mencionados, son importantes para el diseño de un protocolo de investigación en salud; esto permite respaldar la calidad de la investigación que se realizará. Los protocolos se deben adaptar a las normas y requisitos de las instituciones y comités de ética correspondientes.</p>


  <?php ob_start(); ?>
  <p>Para que revises si aprendiste cuáles son los elementos mínimos de un protocolo de investigación en salud, realiza el siguiente ejercicio, de la lista de elementos arrastra los que faltan y colócalos en el espacio correspondiente para completar la secuencia. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a1', "Ordenar los elementos arrastrándolos al lugar correspondiente", $ActividadContent);
  ?>

   
 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
