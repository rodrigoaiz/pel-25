<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>NUEVOS ENFOQUES: HISTORIA CULTURAL, ROGER CHARTIER.</h2>
  <p>Roger Chartier (1945) historiador francés, perteneciente a la 
    <?php renderTooltip ('cuarta generación de Annales', 'La Escuela de los Annales pasó por diversas etapas. La cuarta corresponde al paso de la historia de las mentalidades a una nueva forma: la historia cultural, al considerar que el concepto de mentalidad puede ser ambiguo y lo sustituye por «prácticas culturales», lo cual separará a quienes lo practican de la Escuela de Annales. Estuvieron dentro de esta cuarta generación Bernard Lepetit, Roger Chartier y entra en contacto con ella Peter Burke.','bottom');?>; su trayectoria académica es amplia, estudia en la Escuela Normal Superior en Saint-Cloud y, en paralelo, se recibe en la Sorbona. Inicia sus actividades académicas como docente y para tanto en el nivel bachillerato como a nivel universitario. Su tema principal de investigación dentro de la historia cultural es la historia de las prácticas lectoras, la historia de los libros, de los lectores y de las prácticas que ambas se derivan de esta relación.</p>
  <p>Con relación a la historia cultural, esta autor escribe:</p>
  <ul>
  <p>«La historia cultural se ha vuelto uno de los ámbitos más vigorosos y debatidos del ámbito histórico. Trazar sus límites no es empresa fácil. ¿se debe hacer a partir de los objetos las prácticas cuyo estudio sería lo propio de esta historia? Existe un gran riesgo de no poder trazar una frontera segura y clara entre la historia cultura y otras historias: la historia de las ideas, la historia de la literatura, la historia del arte, la historia de la educación, la historia de los medios de comunicación, la historia de las ciencias, etcétera […] Roger Chartier, la historia o la lectura del tiempo, p. 48-49.</p>
  <p>Las relaciones entre la cultura popular y la cultura letrada han movilizado apasionadamente a la historia cultural. Las maneras de concebirlas se pueden agrupar en dos grandes modelos de descripción y de interpretación [...] Roger Chartier, la historia o la lectura del tiempo, p. 63 </p>
  <p>[... ] el principal desafío que se presenta a la historia cultural: cómo pensar la articulación entre los discursos y las prácticas... el objetivo fundamental de una historia que se propone reconocer la manera en que los actores sociales otorgan sentido a sus prácticas y a sus enunciados se ubica por tanto en la tensión entre, por un lado, las capacidades,  inventivas de los individuos o las comunidades y por otro, las restricciones y la convenciones que limitan -de manera más o menos clara según la posición que ocupan en las relaciones de dominación- lo que es posible pensar, decir y hacer. Esta observación es válida también para las obras letradas y las creaciones estéticas, siempre inscritas en las herencias y las referencias que las hacen concebibles, comunicables y comprensibles. Es válida asimismo para las prácticas ordinarias, diseminadas y silenciosas, que inventan lo cotidiano. Roger Chartier, la historia o la lectura del tiempo, p. 69-70 [... ] Conducir la historia de la cultura escrita dándole como piedra angular la historia de las representaciones es, pues, vincular el poder de los escritos o. de las imágenes que los dan a leer, escuchar o ver, con las categorías mentales, socialmente diferenciadas que son las matrices de las clasificaciones y de los juicios.» Roger Chartier, la historia o la lectura del tiempo, p. 73-74.</p>
  </ul>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-rogerchartier.webp','Roger Chartier', 'https://es.wikipedia.org/wiki/Roger_Chartier#/media/Archivo:Chartier_Roger.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Sobre la historia de la lectura, ésta se ve como como una práctica social, en la cual se compone de varias partes: los objetos de lectura; las prácticas lectoras, dónde se lee, en qué momento se lee, si se lee en solitario o en compañía. Chartier también investiga las técnicas y prácticas lectoras contemporáneas, la lectura en dispositivos digitales, lo cual nos da la idea del uso de la historia cultural en nuestro tiempo:</p>
  <ul>
  <p>«Por primera vez en la historia del College de France, una cátedra está consagrada al estudio de las prácticas de lo escrito, no en los mundos antiguos o medievales, sino en el tiempo largo de una modernidad que, quizá, se desarma ante nuestros ojos […] la historia del libro, la historia de los textos, la historia de la cultura escrita […] La tarea es seguramente urgente hoy, en un tiempo donde las prácticas de lo escrito se hallan profundamente transformadas. Las mutaciones de nuestro presente modifican todo a la vez, los soportes de la escritura, la técnica de su reproducción y diseminación, y las maneras de leer. Tal simultaneidad resulta inédita en la historia de la humanidad.</p>
  <p>La invención de la imprenta no ha modificado las estructuras fundamentales del libro, compuesto, tanto antes como después de Gutenberg, por pliegos, hojas y páginas reunidos en un mismo objeto […] Y si bien la lectura ha conocido varias revoluciones, señaladas o discutidas por los historiadores, todas ocurrieron durante la larga duración del 
    <?php renderTooltip ('códice', 'Se entiende por códice un dispositivo de lectura en el cual sus partes se encuentran cosidas entre sí, lo cual facilita su transporte y lectura. En Europa los códices se presentan manuscritos en la Edad Media y sus materiales podían ser pergaminos y de manera moderna, papel. De lso códices medievales derivan los libros impresos. En Mesoamérica, los textos que se conservan se denominan códices y se hacían sobre papel de amate.','bottom');?> : éstas son las conquistas medievales de la lectura silenciosa y visual, la pasión por leer que embargó el tiempo de las Luces, o incluso, a partir del siglo XIX,  la entrada en la lectura de nuevos lectores: los artesanos, los obreros y los campesinos, las mujeres y los niños, tanto dentro como fuera de la escuela. </p>
  <p>Al romper el antiguo lazo anudado entre los textos y los objetos […] la revolución digital obliga a una radical revisión de los gestos y las nociones que asociamos con lo escrito. A pesar de la inercia del vocabulario que intenta domesticar la novedad denominándola con palabras familiares, los fragmentos de textos que aparecen en la pantalla no son páginas, sino composiciones singulares y efímeras. Y, contrariamente a sus predecesores, rollos o códices, el libro electrónico no se diferencia de las otras producciones de la escritura por la evidencia de su forma material.</p>
  <p>La discontinuidad existe […] La discontinuidad y la fragmentación de la lectura no tienen el mismo sentido cuando están acompañadas de la percepción de la totalidad textual contenida en el objeto escrito, que cuando la superficie luminosa que muestra los fragmentos de escritos no deja ver inmediatamente los límites y la coherencia del corpus de donde se los extrajo.» (Roger Chartier, Escuchar a los muertos con los ojos. P. 8, 11-13).</p>
  </ul>
  <p>Como puedes apreciar, la historia de la cultura no es una disciplina lejana, de eruditos, sino que alude a problemas inmediatos y actividades que no apreciamos, como la lectura, sus método, su intención y cómo cambia en cada época; esta forma de historiar es cercana a nuestra forma de ver el mundo, pues nos hace reflexionar y da respuestas a lo que ocurre en nuestros días.</p>
  <p>Una vez que terminaste esta lección, es necesario que revises cuánto conoces de la información trabajada en esta lección  y, por lo tanto, lograr los aprendizajes esperados. Para ello realiza el siguiente ejercicio de refuerzo sobre la Historia Cultural y el Sistema Mundo.</p>
   <?php ob_start(); ?>
  <p></p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t2a1', "Historia Cultural y Sistema Mundo.", $ActividadContent);
  ?>
  <div class="mx-auto max-w-md">
    <?php
    renderImage('th2-u3-collage.webp',' Collage objetos de lectura', '','');
    ?>
  </div>
  <p>Al finalizar esta lección te pedimos que elabores un mapa conceptual sobre el tema de Historia Cultural, para ello apóyate en la información de esta lección sobre el tema de Historia cultural, así como en el texto HISTORIA CULTURAL: SU DESARROLLO Y CAMPOS DE ESTUDIO. Es importante que ubiques cuáles son los antecedentes que dan origen a esta corriente e identifiques sus autores, asimismo identifica los temas que estudia e investiga, así como su planteamientos fundamentales.</p>
  <?php ob_start(); ?>
  <p></p>
  <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t2a2', "Historia Cultural: su desarrollo y campos de estudio", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
