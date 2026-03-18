<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tooltip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Annales: las fuentes, el método y la periodización.</h2>

  <h3>Las fuentes</h3>

  <p>Los historiadores de Annales se revelan a la visión del positivismo del siglo XIX de basar toda la información en fuentes documentales, aspecto que consideraron no estaba del todo errado, pero que había que ampliar.</p>

  <p>La nueva historia extendió el concepto de fuente, siguió considerando como válidos los documentos escritos, pero amplió la fuente a otros elementos que aportan información: fuentes orales, arqueológicas, fotografías, curvas de precios, películas, instrumentos, obras literarias, obras de arte, cartas, artículos periodísticos, entre otros. Lo que implicaba que la fuente es todo vestigio humano que aporte información sobre un tema tratado, en el que debe considerar <i>“todos los documentos legados por las sociedades: el documento literario y el documento artístico”</i> (Jacques Le Goff. <i>La nueva historia</i>, p. 292).</p>

  <p>Proponen una nueva concepción del documento, así como una nueva forma de criticar a la fuente. Los investigadores de Annales reconocen que era válida la crítica realizada para verificar la validez de la fuente, el apoyarse en otras ciencias como la paleografía o la diplomática es correcto. Pero es necesario considerar que el documento es producido de manera consciente o inconsciente por la sociedad de un periodo histórico determinado. El documento nos muestra la imagen del pasado de quienes realizaron el documento, por lo que es importante analizar el documento de manera que identifiquemos las condiciones en que fue realizado, así como quién lo produjo.</p>

  <p>El conocimiento de los hechos pasa por identificar en las fuentes el contexto en que surgen, los propósitos que llevaron a realizar la fuente, el grupo social que lo emite o produce, lo que implica que el historiador sea consciente de la información que trabaja y no caiga en la tentación de impregnar de valores actuales a los sucesos del pasado.</p>

  <p>De igual manera es importante considerar <b>los temas que no se han trabajado</b>, las “lagunas y los silencios de la historia” lo que implica trabajar sobre temas conocidos como desconocidos. Permitiendo acceder a temas como el hábitat, la noción del trabajo, la guerra, la marginalidad, el cuerpo, la comida, el vestido, entre otros muchos (Jacques Le Goff. <i>La nueva historia</i>, p. 290).</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-fuentes.webp','El concepto de fuentes históricas se amplía con la Escuela de los Annales, integrando no sólo documentación de fuentes oficiales, sino también imágenes de documentos, cine, fotografías, así como música y revistas de todo género; incluyó además menús de restaurantes. En la imagen vemos parte de la documentación que se reconoció como memoria del mundo en 2017, resguardada por el Archivo General de la Nación de México.');
  ?>
  </div>

  <h3>El método</h3>

  <p>Para realizar el trabajo de investigación histórica se utilizan, de acuerdo con el tema, los métodos de trabajo y análisis empleados en otras ciencias de manera que se puede trabajar con una antropología histórica; historia sociológica o una historia psicoanalítica.</p>

  <p>Desde su nacimiento Annales propuso hacer una historia de síntesis global en la que participan científicos de otras áreas de conocimiento como geógrafos, antropólogos, psicólogos, entre otros.</p>

  <p>Para 1950 con la influencia de Fernand Braudel y de Ernest Labrouse se utilizan categorías de análisis que permitirá el desarrollo de nuevos temas, entre estos conceptos están estructura, coyuntura, modelo, cuantificación. Con el uso de estas nociones se generaron métodos de análisis para la explicación y permitieron trabajar nuevos temas entre ellos la historia social en la que se estudian las estructuras y las luchas sociales; la historia cuantitativa trabaja con series de datos históricos con el apoyo de la estadística, método empleado por la economía. De igual manera se apoyan en la geografía y la econometría (Pilar Barroso y Ricardo Martínez. <i>El pensamiento histórico</i> … V. 2, p. XXX).</p>

  <p>Recuperan el <b>método comparativo</b> de las ciencias sociales, lo que implica que se pone referencia con dos o más fenómenos con similitud pero que pertenecen a procesos distintos. Es importante aclarar que el uso de un método va de acuerdo con el proceso histórico que se busca estudiar, de manera que se compara lo que es posible comparar.</p>

  <p>El <b>método regresivo</b>, es otra de las metodologías de análisis empleadas, consiste en la construcción histórica desde el presente hacia atrás, esto es porque conocemos la información que nos reportan los periodos cercanos por lo que es prudente proceder desde lo conocido a lo desconocido. Fue empleado por March Bloch, así como por F.W. Maitland</p>

  <p>Se puede hacer uso del método de las encuestas en un trabajo de historia cuantitativa, o el uso del método <b>cuantitativo</b> o el estadístico si la recopilación de información así lo demanda.</p>

  <p>Desde finales de los años sesenta se adoptan métodos de análisis tomados de la antropología, la psicología que permiten el trabajo de temas como la religión y las mentalidades.</p>

  <h3>La periodización.</h3>

  <p>En cuanto a la organización temporal de los acontecimientos los Annales propone ritmos o periodos; la corta y la larga duración. En la corta duración se considera el estudio de los acontecimientos que son breves, que se pueden rastrear por pocos años. Es el tiempo de los acontecimientos, de los individuos. Mientras que la mediana duración trabaja las coyuntura.</p>

  <p>Para Annales un periodo de corta duración no permite apreciar ni explicar los aspectos profundos de la sociedad, marca que a fin de percibir <b>los cambios o las permanencias</b> en la historia es necesario revisar los acontecimientos estudiados en un periodo largo. De manera que apreciar procesos económicos, sociales o conocer las costumbres, las mentalidades, las estructuras, las maneras de alimentarse, vestirse, así como el habitar se pueden apreciar si los revisamos en un <b>periodo de larga duración</b>, ya que cambian lentamente (Jacques Le Goff. <i>La nueva historia</i>, p. 282).</p>

  <p>Otro elemento que debemos considerar sobre el tiempo histórico es que cada tema marca el ritmo temporal, muchos de los aspectos estudiados no siguen una periodización tradicional, en general tampoco se apegan a una cronología de corte político, por lo que es necesario explicar los acontecimientos históricos de acuerdo con la duración que el tema y la investigación marca.</p>

  <p>Proponen una revisión sobre la noción del tiempo, así como considerar quién tenía el poder sobre el tiempo, su medida y utilización. De manera que no se puede considerar un tiempo lineal, homogéneo y único.</p>

  <p>Importa considerar la cronología de los acontecimientos para su explicación, pero una organización de datos que emana del tema, marcando los ritmos del acontecimiento estudiado.</p>

  <p>A continuación, presentaremos a dos de los autores de la escuela de los <i>Annales</i> o como estos escritos se llamaron <i>la Nueva Historia</i> Marc Bloch y Fernand Braudel.</p>

  <?php ob_start(); ?>
   <p>Hasta aquí has revisado las principales características de la Escuela de los Annales. Es importante que, para reforzar tus aprendizajes realices la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a2', "Escuela de los Annales.", $ActividadContent);
  ?>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>