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
  <h2>Introducción al tema</h2>

  <?php ob_start(); ?>
   <p>Antes de iniciar con la ubicación de la escuela de los Annales y las etapas de la revista, te invitamos a elaborar la actividad Escuela de los Annales donde conocerás algunos de los autores que revisaremos en esta lección. Se trata de una actividad donde encontrarás información sobre los autores y su trabajo en la Escuela de los Annales.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a5', "Escuela de los Annales.", $ActividadContent);
  ?>

  <p>La primera guerra mundial y sus consecuencias, tal es el caso de la Revolución soviética, la crisis de 1929, así como la formación de los estados totalitarios, trajeron al siglo XX una serie de cuestionamientos en todos los aspectos, lo que impactó en los temas y escritura de la historia. Las crisis ocasionadas por las dos guerras mundiales llevaron al quiebre y cuestionamientos de los paradigmas del siglo XIX, que ya no eran suficientes para explicar los acontecimientos, por lo que se dio paso a otras interpretaciones sobre la historia; es en este contexto donde se desarrolló la escuela de los <i>Annales</i>.</p>

  <p>La escuela de los <i>Annales</i> nació el 15 de enero de 1929 con la publicación de la revista <i>Annales de Historia Económica y Social</i>, impulsada por los historiadores franceses March Bloch y Lucien Febvre, a la que se unieron posteriormente Fernand Braudel, Geoge Duby, Jacques Le Goff, Emmanuel Le Roy Ladurie, entre muchos otros. La segunda guerra mundial impactó en la revista por lo que cambió de título a <i>Annales d’Histoire sociale</i> (1939-1941); <i>Mélages d’Histoire sociales</i> (1942-1944) al final de la guerra <i>Annales d’Histoire sociale</i>. En 1946 la revista vuelve a cambiar de nombre a <i>Annales, Economies, Sociétés, Civilisatios</i>. </p>

  <p>Las transformaciones en el nombre de la revista son indicadores de los cambios en los temas y metodologías empleadas por sus escritores. La revista es el medio de expresión de esta corriente, así como el medio con el que se entabla el diálogo en torno al quehacer del historiador <i>(Jacques Revel y Roger Chartier. Annales, p.28-29)</i> .</p>

  <p>Siguiendo el ritmo de las transformaciones de la revista, la escuela de los Annales pasó por tres generaciones: la primera representada por Lucien Febvre y March Bloch, se desarrolló entre los años veinte y treinta del siglo XX; la segunda encabezada por Fernand Braudel desde finales de la segunda guerra hasta 1968 y la tercera generación encabezada por Geoge Duby, Jacques Le Goff y Emmanuel Le Roy Ladurier que se establece a lo largo de los años setenta y ochenta. </p>

  <p>La intención de crear una revista como <i>Annales de Historia Económica y Social</i> era romper con la forma en que se venía haciendo historia: especializada en cuanto a su temática, presentando sobre todo una historia política o diplomática y de grandes hombres. Por lo que se buscó impulsar una publicación en la que se trabajará con temas económicos y sociales, que en los inicios del siglo XX casi no se trataban. Lo anterior se reafirmó en 1946 proponiendo una <b>historia total</b> en la que se considerarán todos los aspectos de las civilizaciones humanas y se mantuvo para los años sesenta del siglo XX <i>(Jacques Le Goff. La nueva historia, p. 268)</i>.</p>

  <p>El impacto de esta corriente se dejó sentir tanto en Europa como en otros continentes y en países como el nuestro. Instituciones como el Colegio de México recogió la propuesta y muchos de los investigadores dedicados al trabajo de la historia bajo los preceptos y la metodología de esta escuela.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-revista.webp','La revista Annales se creó con el objetivo de proponer nuevas formas de hacer la historia, con nuevas propuestas, enfoques, metodologías y temas de historia. Alrededor de ella se reunió un grupo de historiadores que serán el núcleo de esta corriente historiográfica. La imagen muestra a Lucien Febvre, quien junto con Marc Bloch son los primeros editores de la revista y fundadores de esta corriente. A su espalda se encuentra la portada de la primera revista de Annales.', '', 'Jesús Antonio García Olivera');
  ?>
  </div>

  <h3>La Escuela de los Annales y su revista: sus temas y etapas.</h3>

  <p>La revista <i>Annales</i> se creó con el objetivo de proponer nuevas formas de hacer la historia, por lo que acepta nuevas propuestas, enfoques, metodologías e incluso nuevas perspectivas sobre los diferentes tópicos históricos. Como anteriormente indicamos en esta escuela sus historiadores están en contra de la especialización de los temas históricos ya que hasta los años treinta del siglo XX cada historiador se centraba en temas muy particulares en dónde no participan otros investigadores, mucho menos expertos de otras disciplinas, por lo que en Annales llaman a trabajar no solo entre historiadores, sino con estudiosos de <b>otras áreas</b> a fin de realizar un trabajo <?php renderTooltip('multidisciplinario', 'El término se aplica cuando en una investigación proceso o en docencia, se recurre a diferentes disciplinas o materias, cada una de las cuales conserva su estructura, problemas y metodologías para integrarlas a un fin común.'); ?>. A fin de fomentar el trabajo <?php renderTooltip('interdisciplinario', 'El término se aplica cuando en una investigación proceso o en docencia, se recurre a diferentes disciplinas o materias, las cuales integran sus enfoques, metodología y procesos de manera que se mezclan para obtener un resultado común.'); ?> buscaron el intercambio de conocimientos sobre un mismo tema, a fin de conocer las diferentes perspectivas o avances sobre el mismo tópico.</p>

  <p>De igual manera los autores hacen una crítica a los postulados de la historiografía positivista, así como de la historicista. Consideran que hay otros aspectos a estudiar además de lo político o diplomático; existen otros temas fuera de la historia de los grandes hombres o de los grandes acontecimientos, como la historia cuantitativa, de las mentalidades, la historia económica.</p>

  <p>Critican la historia política ya que se interesa más por el relato y presentar acontecimientos que dar una descripción que permita el análisis y la explicación de los hechos, buscando las causas que derivaron en los hechos como los aspectos geográficos, económicos, sociales, religiosos, psicológicos. No dejan de hacer una historia política, pero esta es desde otras perspectivas y problemas de ejercicio del poder, de manera que los Annales propone hacer una <b>nueva historia</b> (Jacques Le Goff. <i>La nueva historia</i>, p. 290).</p>

  <p>Buscan orientar las investigaciones históricas en cuanto a <b>nuevos temas</b> o visiones para presentar otros tópicos como el económico, social, cultural, religioso, de las ideas, de las mentalidades e incluir a otros actores sociales en las investigaciones históricas: los hombres comunes, las mujeres, los niños; también actividades como la comida o el vestido, el vestido,  la vivienda también se ocupó conceptos como la vida cotidiana, la sexualidad, la fealdad o la cultura, entre otros.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-hijos.webp','Dentro de los nuevos temas que abre Annales con la historia de las mentalidades se encuentra la historia de la niñez. No siempre se consideró que los niños tuvieran una infancia protegidos y educados. En el siglo XIX, y hasta el siglo XX, muchos eran contratados como trabajadores adultos. La imagen nos muestra a los hijos de Habert de Montmor, pintados por Philippe de Champagne hacia 1649. La infancia que se muestra es la de la burguesía francesa del siglo XVII.  son condiciones muy distintas a las de los hijos de campesinos y artesanos del mismo periodo. Philip Aries, historiador de la Escuela de Annales, usa esta imagen para mostrar el surgimiento de la infancia como tema historiográfico. La pintura se encuentra en el museo de Bellas Artes de la ciudad de Reims, en Francia.');
  ?>
  </div>

  <p>Como indicamos anteriormente, para la explicación de los procesos históricos, se propone un trabajo <b>en conjunto con otras disciplinas</b> como la economía, la política, la psicología, la sociología, la geografía, la lingüística, la antropología; en fin, aquellas áreas de conocimiento que aporten metodologías, información o propuestas desde su campo disciplinar para ampliar el trabajado desarrollado en historia. Por ejemplo, la historia toma elementos de la geografía como la cartografía, aprovechando el uso de mapas para la investigación y explicación que permita trabajar temas desde una perspectiva diferente. </p>

  <p>Plantean impulsar una historia total que se define como  «historia global, total, y reivindica la renovación de todo el campo de la historia» (Jacques Le Goff. <i>La nueva historia</i>, p. 265), en la que se busca estudiar el todo de una sociedad rompiendo con la especialización. Se busca presentar un tema en el que se expliquen las relaciones que se establecen entre la sociedad, la economía, la política, la religión, la vida cotidiana, alimentos, vestido, vivienda y su entorno, la ciudad o lo rural. </p>

  <p>Esta escuela propone cambiar la narración de los acontecimientos por una historia explicativa, analítica orientada por un problema a explicar (Peter Burke, <i>La revolución</i>, p. 11).</p>

  <p>Trabajar bajo la idea de la <b>historia problema</b>, se orienta a investigar un tema o un problema de la actualidad, donde la historia busque comprender el presente por el conocimiento del pasado. Por ejemplo, Lucien Febvre en la biografía de <?php renderTooltip('Rabelais', 'François Rabelais, escritor, médico y pedagogo francés del siglo XVI. Su principal obra es Gargantúa y Pantagruel, historia de dos gigantes, la cual es una crítica con humor de la sociedad de su tiempo'); ?> , se realiza alrededor de una pregunta problema: ¿Era Rabelais un incrédulo? De manera que el hilo conductor de la investigación era explicar qué y cómo era la incredulidad en el siglo XVI a partir de explicar la religión de Rebelais, veamos en el siguiente párrafo cómo se relaciona la investigación con el presente:</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«[…] si, pues, es absurdo y pueril suponer que la incredulidad de los hombres del siglo XVI, en la medida en que se hizo realidad, sea comparable a la nuestra ni en lo más mínimo, y resuIta insigne insensatez convertir a Rabelais en cabeza de una lista en serie sucesiva y directa de la que serían zagueros los librepensadores del siglo XVI (suponiendo que formen un bloque y que no difieran profundamente entre sí por su disposición espiritual, su experiencia científica y sus particulares argumentaciones)» </p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Lucien Febre, El problema de la incredulidad..., p. 397 )</footer>

    <p>Fernand Braudel en el Mediterráneo plantea que realizó su historia bajo el enfoque de la historia problema (Jacques Le Goff. <i>La nueva historia</i>, p. 272; vid. Burke. <i>La revolución</i>… p. 34).</p>

    <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Hemos intentado aquí el constante reencuentro del pasado con el presente, el repetido pasaje del uno al otro, un recital sin fin a dos voces. Si este diálogo, con los problemas que se hacen eco los unos a los otros, anima este libro, habremos logrado nuestro propósito. La historia no es otra cosa que una constante interrogación a los tiempos pasados en nombre de los problemas y curiosidades —e incluso las inquietudes y las angustias— del presente que nos rodea y nos asedia […] El Mediterráneo es una buena ocasión para presentar “otra” forma de abordar la historia» </p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Braudel, <i>  El Mediterráneo</i> ... p. 9; 11.)</footer>

    <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-reyes.webp','Fernand Braudel propone en su obra El Mediterráneo en la época de Felipe II una historia total, en la que integra el medio ambiente, la política y la sociedad, mostrando también cómo se integran distintas civilizaciones. En la imagen te presentamos un cuadro que representa a Felipe II y Calos V, los dos monarcas que logran la expansión española, no sólo sobre América, sino también sobre el área del Mediterraneo, por medio de la Batalla de Lepanto.', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Carlos_I_y_Felipe_II.jpg', 'wikimedia commons');
  ?>
  </div>

  <p>La segunda guerra mundial y la ocupación alemana en Francia llevó al cambio de nombre de la revista de manera que, a partir de 1946, pasó a llamarse <i>Annales. Economías, Sociedades</i>. En el nuevo nombre se encontraba la postura de sus escritores quienes buscaban presentar no al hombre, sino a los hombres. El nuevo título reflejaba la postura de quienes escribían en la revista sobre temas de historia.</p>

  <p>En la propuesta de <i>Annales</i> se plantea la importancia de hacer una historia internacional que rompa con el eurocentrismo, mostrando al mundo entero e incluya de manera particular a los países del tercer mundo. La Escuela de Annales se amplió a otros espacios del mundo, además de Francia se encontraron seguidores y escritores adscritos a esta corriente por todo el mundo. A partir de lo anterior, se abrió a que los trabajos de sus investigadores, presentarán sus trabajos también en inglés y no sólo en francés.</p>

  <p>Se pretendía una historia a la que se diera un carácter más amplió, en el que se mostrará la unidad entre lo material y lo espiritual, recuperando a Marc Bloch «Hemos reconocido que, en una sociedad, cualquiera que ella sea, todo se enlaza y se rige mutuamente: la estructura política y social, la economía, las creencias, las manifestaciones más elementales al igual que las más sutiles de la mentalidad”» (Jacques Le Goff. <i> La nueva historia </i>, p. 270)</p>

  <p>Peter Burke nos explica que de 1950 a 1970 los estudios de los historiadores de <i>Annales</i> retoman la historia cuantitativa, aceptan la influencia de Marxismo en cuanto al uso de los métodos cuantitativos expresados en el vínculo entre los estudios de demografía e historia, aspecto que se expresó en la fundación de la serie histórica de monografías sobre historia regional Demografía y sociedades en la que se integró la demografía histórica en la historia social de una región, ejemplo de ello son los trabajos de Perre Gouberte.</p>

  <p>La guerra fría con las contradicciones, y críticas, con enfrentamientos como el de la juventud en 1968, presenta nuevas características para el trabajo histórico. Se ampliaron los temas a estudiar: los sueños, la niñez, la familia, el cuerpo, los olores, los perfumes, la sexualidad, así como las fiestas. Además, se vuelve a los estudios de historia política con nuevos enfoques; se mantienen los trabajos de historia cuantitativa.</p>

  <p>Se emplean métodos cuantitativos en la historia de la cultura a fin de poder explicar las maneras en que una determinada cultura concibe y experimenta fenómenos naturales como la muerte, la niñez, la sexualidad, el amor, la salud, las emociones, la muerte entre otros.</p>

  <p>Utilizan los conocimientos de psicología en historia en temas de historia de la cultura, cultura popular en la que se trabajan aspectos como el miedo -al mar, los espectros, la peste, el hambre, Satanás, los judíos, las mujeres o las brujas. – Esto es surge un nuevo enfoque que se conoce como <b>historia de las mentalidades</b> en la que autores como Jacques Le Goff, George Duby, March Bloch entre otros escritores dejaron ejemplos de su aplicación (Peter Burke. <i>La revolución</i>… p. 57-74).</p>

  <h3>Historia de las mentalidades.</h3>

  <p>Desde los años setenta y ochenta del siglo XX la historia de las mentalidades retoma el método de la antropología y el de la psicología, en esta nueva historia los historiadores buscaban identificar la mentalidad de una cultura, esto es el modo de pensar que tiene una sociedad, un pueblo, una generación.  Los temas estudiados incluían los comportamientos, gestos, emociones, los rituales, las fiestas, la violencia, las creencias populares, los imaginarios de la sociedad, las creencias sociales. De igual manera se consideró el tema de lo emotivo, como los sentimientos, el miedo, la inseguridad. Otro aspecto tocado por las mentalidades es el imaginario a través de las representaciones, así como el inconsciente, los comportamientos colectivos, la memoria, los valores, las actitudes o las creencias, además de la vida cotidiana.</p>

  <p>Las características de los temas trabajados en la historia de las mentalidades han llevado a una diversidad de fuentes , como veremos a continuación:</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>