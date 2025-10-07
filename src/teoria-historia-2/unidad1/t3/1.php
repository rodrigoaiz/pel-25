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
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h4> Unidad 1. Interpretaciones de la historia en el siglo XIX </h4>

<h2> Escuela Científica Alemana </h2>

<h3> La impronta heurística </h3>

<h4> El contexto de esta escuela </h4>

<p>
  Durante la primera mitad del siglo XIX, Alemania no existía como el país moderno de nuestros días. Sin embargo, la cultura de los países 
  de lengua alemana tiene gran relevancia. Pensemos en Filosofía: autores como Emmanuel Kant, Gottlieb Fichte, Georg Wilhem Friedrich Hegel, 
  los cuales influyen no sólo en filosofía, sino en campos como la política, economía y lo que se conocerá como sociología. Es también el 
  periodo en el cual aparece el socialismo científico, desarrollado por Marx y Engels. 
</p>

<p>
  Alemania logra su unificación hacia 1871, después de la guerra Franco Prusiana y una de sus características fue una política de tipo nacionalista, 
  en este caso de germanización, la cual requirió, para encontrar sus raíces en los estudios de historia, los cuales se plantearon de manera rigurosa. 
  Este proceso no pudo desarrollarse sin la existencia de historiadores profesionales, que desarrollaron su labor a través de la investigación documental, 
  especialmente en el periodo medieval cuyas temáticas fueron más allá de lo político, con la idea de encontrar las raíces de la nación alemana, entendida 
  como una gran entidad cultural. La comprensión del pasado se convirtió en prioridad pues, el trabajo histórico se orientó como una búsqueda de la verdad, 
  como un imperativo de nuestra disciplina.
</p>

<p>
  El desarrollo de los estudios históricos implicó el avance en nuevas formas de comprender la historia académica. En los países de cultura alemana, la 
  revisión del pensamiento histórico se efectúa a través de filósofos como Kant y Hegel, quienes reflexionan sobre la historia, su sentido y su utilidad 
  social. Tanto el primero como el segundo, elaboran visiones de la historia altamente estructuradas sobre cómo comprender la historia más allá de los datos 
  empíricos y la dotaron de un sentido. Este trabajo permitió que se buscara no sólo un sentido de la historia tanto desde la filosofía sino también pensar 
  en ella como una disciplina científica, con lo cual se propusieron metodologías objetivas para hacerla: el planteamiento de un tema de investigación, el 
  desarrollo de hipótesis explicativas, el acopio de información y su sistematización con fines de encontrar o descubrir el pasado humano como objeto de estudios; 
  es decir se buscó explicitar y sistematizar el método de la historia.
</p>

<p>
  Esta preocupación por el método se expresó mediante la 
  <?php renderTooltip('Heurística','Disciplina que permite el análisis de las fuentes documentales para validar su autenticidad. Se desarrolla durante el siglo 
  XIX a partir del Romanticismo y permite hablar de una historia científica.'); ?> y 
  <?php renderTooltip('Hermenéutica','Metodología para la interpretación de textos. También permite la interpretación de imágenes. Durante el siglo XIX se desarrolla 
  para la interpretación de la historia tanto en la Escuela Científica Alemana, como en el Positivismo.'); ?>, 
  disciplinas que se retoman de la tradición medieval, pero ahora, aprovechan los elementos de la modernidad: la primera se refiere a la crítica interna de las 
  fuentes, es decir la crítica de validación de estas y la segunda se refiere fundamentalmente al sentido e interpretación de las fuentes.
</p>

<p>
  Esta forma de concebir la historia, un fin último y una metodología propia tenía como finalidad formar historiadores profesionales, los cuales se formarían 
  dentro de las universidades. Se da el paso de la historia como materia de investigación a la historia como disciplina escolar, principalmente universitaria. 
  A esta corriente se le conoce como Escuela Histórica Alemana.
</p>

<p>Un autor de esta corriente historiográfica, Johannes Droysen afirma lo siguiente:</p>

<p class="citation">
  <b>
   «Lo que habrá de importar es el método histórico. que buscamos son los siguientes tres puntos:
    <ol class="ol-number">
<li>1.  El material que existe para la <?php renderTooltip('empirie','Es un término de origen griego y significa aprender a base de la observación. 
En el siglo XIX Droysen toma el término griego para indicar que la historia se hace con base a la experiencia en investigación documental. 
El término actual es empírico.');?> histórica. </li>
<li>2.  El procedimiento mediante el cual obtenemos resultados a partir de este material histórico. </li>
<li>3.  Los resultados logrados por este medio y su relación con los hechos sobre los que buscamos ilustración.» </li>
    </ol>
  </b> 
[<b>Droysen</b>, Histórica. Lecciones sobre la Enciclopedia y metodología de la Historia p. 12]
</p>

<p>
  Se busca sistematizar la investigación histórica a partir de la ubicación de fuentes, las cuales se reconocen como salvadas al azar; hacer una crítica de 
  éstas para ubicar el fenómeno o proceso que se estudia en su contexto, de acuerdo con las mismas y, al final el trabajo la deducción, es decir la parte 
  analítica en la cual lo investigado se trabaja a partir de concepto y nociones específicos. El representante más significativo de esta corriente es 
  Leopold von Ranke.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-revolucion_de_marzo_en_Berlin.webp', 'Uno de los antecedentes de la unificación alemana se encuentra en las revoluciones burguesas de 1848, 
  la imagen muestra una barricada en Berlín durante las revoluciones de 1848.', 
  'https://upload.wikimedia.org/wikipedia/commons/9/92/Ereignisblatt_aus_den_revolutionären_Märztagen_18.-19._März_1848_mit_einer_Barrikadenszene_aus_der_Breiten_Strasse%2C_Berlin_01.jpg', 
  'Wikimedia Commons.');
?>
</div>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-biblioteca_pública_universitaria_y_fondo_antiguo.webp', 'El trabajo de hermenéutica y heurística se basa en el uso de fuentes, principalmente documentales. 
  En la imagen vemos una parte del fondo antiguo de la Biblioteca Pública Universitaria de la Universidad Michoacana de San Nicolás de Hidalgo.', 
  'https://drive.google.com/file/d/1_y-za0KW7u2UbfDHDcWHrnK-p02SgdM2/view?usp=drive_link', ' imagen del autor Jesús Antonio García Olivera que dona a este trabajo');
?>
</div>

<p> Revisa este video para saber más sobre la historia como una ciencia </p>

<?php renderVideoIframe ('fg', 'La cientificidad de la historia en el siglo XIX'); //VIDEO DE YOUTUBE FALLIDO?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
