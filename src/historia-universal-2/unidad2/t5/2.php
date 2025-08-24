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
  <h2>Las Vanguardias Artísticas y sus Principales Movimientos</h2>
  <h3>Fauvismo</h3>
  <p>El fauvismo, un movimiento que surgió a principios del siglo XX, se caracterizó por su enfoque en el color y la emoción. Los fauvistas, incluyendo a Henri Matisse y André Derain, emplearon colores vibrantes y no naturales para expresar la intensidad de sus sentimientos y percepciones. A menudo, las representaciones eran simplificadas y desfiguradas, desafiando la percepción tradicional de la realidad. "La alegría de vivir" de Matisse es un ejemplo destacado de esta estética fauvista.</p>
  <?php
  renderImage('hu2-u2-fauvismo.webp','imagen de Slowking4.', 'https://es.wikipedia.org/wiki/Fovismo#/media/Archivo:The_pont_neuf_-_albert_marquet.png','Wikimedia Commons.');
 ?>
 <h3>Cubismo</h3>
 <p>El cubismo, liderado por Pablo Picasso y Georges Braque, se desarrolló alrededor de 1907 y se caracterizó por la representación de objetos y figuras desde múltiples perspectivas simultáneas. Las formas se descomponían en fragmentos geométricos y se reconstruían de manera abstracta. El cubismo cuestionaba la idea de una única "verdad" visual y exploraba la relatividad de la percepción.</p>
 <?php
  renderImage('hu2-u2-cubismo.webp','Imagen de DcoetzeeBot.', 'https://es.wikipedia.org/wiki/Cubismo#/media/Archivo:Juan_Gris_-_Portrait_of_Pablo_Picasso_-_Google_Art_Project.jpg','Wikimedia Commons.');
 ?>
 <h3>Futurismo</h3>
 <p>El futurismo, liderado por el poeta Filippo Tommaso Marinetti y el pintor Umberto Boccioni, se centró en la representación de la velocidad, la tecnología y la dinámica de la vida moderna. Los futuristas abrazaron la maquinaria, la velocidad y la agresividad, y rechazaron el arte tradicional en favor de una estética futurista que capturara la energía y la modernidad.</p>
  <?php
  renderImage('hu2-u2-futurismo.webp','Imagen de Stolbovsky.', 'https://es.wikipedia.org/wiki/Futurismo#/media/Archivo:Cyclist_(Goncharova,_1913).jpg','Wikimedia Commons.');
 ?>
  <h3>Expresionismo</h3>
  <p>El expresionismo, que surgió en Alemania alrededor de 1905, buscaba representar emociones y estados mentales a través de una distorsión exagerada de la realidad. Artistas como Edvard Munch y Egon Schiele exploraron la ansiedad, el miedo y la alienación en sus obras. "El Grito" de Munch es un icónico ejemplo de expresionismo.</p>
    <?php
  renderImage('hu2-u2-expresionismo.webp','Imagen de 1970gemini', 'https://es.wikipedia.org/wiki/Expresionismo#/media/Archivo:Edvard_Munch_-_The_Scream_-_Google_Art_Project.jpg','Wikimedia Commons.');
 ?>

<h3>Dadaísmo</h3>
  <p>El dadaísmo, nacido en el Cabaret Voltaire de Zúrich durante la Primera Guerra Mundial, fue un movimiento antiarte que cuestionó las normas y la lógica. Los dadaístas, como Tristan Tzara y Marcel Duchamp, crearon obras absurdas y provocadoras que buscaban socavar las convenciones establecidas. El famoso "Fountain" de Duchamp, un urinario firmado, es un símbolo destacado de esta corriente.</p>
    <?php
  renderImage('hu2-u2-dadaismo.webp','Imagen de Vincent Steenberg.', 'https://es.wikipedia.org/wiki/Dada%C3%ADsmo#/media/Archivo:Theo_van_Doesburg_Dadamatin%C3%A9e.jpg','Wikimedia Commons.');
 ?>

<h3>Surrealismo</h3>
  <p>El surrealismo, liderado por André Breton, surgió en la década de 1920 y se centró en la exploración de lo inconsciente y lo irracional. Los surrealistas creían en la importancia de los sueños y la imaginación en la creación artística. Salvador Dalí y René Magritte son dos de los artistas más influyentes del movimiento.</p>
    <?php
  renderImage('hu2-u2-surrealismo.webp','Imagen de Trialsanderrors.', 'https://es.wikipedia.org/wiki/Surrealismo#/media/Archivo:Salvador_Dali_A_(Dali_Atomicus)_09633u.jpg','Wikimedia Commons.');
 ?>

<h3>Constructivismo</h3>
  <p>El constructivismo, que se desarrolló en la Rusia posrevolucionaria, enfatizaba la utilidad práctica y la funcionalidad del arte. Los artistas constructivistas, como Vladimir Tatlin y Aleksandr Rodchenko, crearon obras que estaban destinadas a tener un propósito social y político, como la propaganda y el diseño industrial.</p>
    <?php
  renderImage('hu2-u2-constructivismo.webp','Rodchenko “Danza”. Imagen de Patriot8790.', 'https://es.wikipedia.org/wiki/Aleksandr_R%C3%B3dchenko#/media/Archivo:1915_Dance_by_Rodchenko.jpg','Wikimedia Commons.');
 ?>

<h3>Abstracción</h3>
  <p>La abstracción, que incluye el expresionismo abstracto, el arte concreto y el neoplasticismo, se centró en la eliminación de la representación figurativa en favor de formas y colores abstractos. Jackson Pollock, Piet Mondrian y Kazimir Malevich son figuras destacadas en este movimiento.</p>
    <?php
  renderImage('hu2-u2-abstraccion.webp','Piet Mondrian Composición en rojo, amarillo, azul y negro. Imagen de Hannolans.', 'https://es.wikipedia.org/wiki/Piet_Mondrian#/media/Archivo:Piet_Mondriaan,_1921_-_Composition_en_rouge,_jaune,_bleu_et_noir.jpg','Wikimedia Commons.');
 ?>

<h4>El Impacto de las Vanguardias Artísticas</h4>
<p>Las vanguardias artísticas del siglo XX tuvieron un impacto duradero en el arte, la cultura y la sociedad en general. Algunos de los efectos más notables incluyen:</p>

<?php
  $accordionItems1 = [
    [
      'title' => 'La democratización del arte',
      'content' => '<p>La experimentación y la diversidad en las vanguardias abrieron el camino para la participación de una variedad más amplia de artistas, incluyendo mujeres y minorías.</p>'
    ],
    [
      'title' => 'La evolución de la tecnología y los medios',
      'content' => '<p>Las vanguardias influyeron en la evolución de los medios artísticos, incluyendo la fotografía, el cine, la arquitectura y el diseño, así como la creación de movimientos como el cine experimental y el videoarte.</p>'
    ],
    [
      'title' => 'La influencia en la moda y la cultura popular',
      'content' => '<p>La estética de las vanguardias influyó en la moda, la música y la cultura popular en general. La moda, por ejemplo, adoptó elementos de las vanguardias, y la música vanguardista experimentó con nuevos sonidos y estructuras.</p>'
    ],
     [
      'title' => 'La crítica y la reflexión social',
      'content' => '<p>Muchos movimientos de vanguardia abordaron cuestiones sociales y políticas, incluyendo el cambio tecnológico, la alienación, la guerra y la desigualdad. Estas expresiones artísticas contribuyeron a la crítica y la conciencia pública.</p>'
    ],
    [
      'title' => 'La interconexión global',
      'content' => '<p>Las vanguardias trascendieron fronteras y se difundieron internacionalmente, lo que llevó a un diálogo global sobre el arte y la cultura.</p>'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>
<p>Las vanguardias artísticas del siglo XX representaron una revolución creativa que transformó el mundo del arte y la cultura de manera profunda y duradera. Estos movimientos cuestionaron las normas establecidas, redefinieron la creatividad y exploraron nuevas formas de expresión. Desde el fauvismo hasta la abstracción, los artistas de las vanguardias dejaron una huella indeleble en la historia del arte, influyendo en la estética, la tecnología y la cultura popular.</p>
<p>A lo largo del siglo, las vanguardias artísticas reflejaron y respondieron a los desafíos y cambios en la sociedad, desde la Revolución Industrial hasta las guerras mundiales y la revolución tecnológica. Su legado perdura en la creatividad contemporánea, en la evolución de la tecnología y en la comprensión de la subjetividad, la percepción y la expresión artística. Las vanguardias artísticas del siglo XX siguen siendo una fuente de inspiración y un recordatorio de la importancia de la innovación y la experimentación en el mundo del arte.</p>
<h4>El arte "degenerado"</h4>
<p>El término "arte degenerado" (en alemán, "Entartete Kunst") fue utilizado por el régimen nazi en la Alemania de la década de 1930 para denigrar y desacreditar una amplia gama de estilos artísticos que consideraban contrarios a la ideología nazi y, en su opinión, decadentes o "degenerados". El concepto de "arte degenerado" estuvo enraizado en la ideología del nacionalsocialismo, que promovía un ideal estético y cultural basado en los valores del nacionalismo alemán y la supremacía aria.</p>
    <?php
  renderImage('hu2-u2-artedeg.webp','Goebbels en la exposición de “arte degenerado” de 1937. Imagen de Ras67.', 'https://es.wikipedia.org/wiki/Arte_degenerado#/media/Archivo:Bundesarchiv_Bild_183-H02648,_M%C3%BCnchen,_Goebbels_im_Haus_der_Deutschen_Kunst.jpg','Wikimedia Commons.');
 ?>
 <p>El arte considerado "degenerado" por el régimen nazi abarcaba una variedad de movimientos y estilos, incluyendo el expresionismo, el cubismo, el surrealismo, el dadaísmo y otras formas de arte moderno y vanguardista que se habían desarrollado en Europa en las décadas previas. Los nazis veían estos estilos como una amenaza para la cultura alemana y la moralidad, y argumentaban que eran la expresión de una decadencia y una corrupción que debían ser erradicadas.</p>
 <p>El término "arte degenerado" se popularizó en 1937 con la organización de la "Exposición de Arte Degenerado" en Múnich, una exhibición organizada por el régimen nazi para denigrar y difamar el arte moderno. En esta exposición se presentaron obras de artistas considerados "degenerados" junto con etiquetas y descripciones peyorativas. El evento fue diseñado para influir en la opinión pública, fomentar la hostilidad hacia el arte moderno y justificar la purga de las instituciones culturales y museos alemanes de cualquier obra de arte considerada "degenerada". En contraste, el régimen nazi promovió el llamado "arte alemán puro" o "arte heroico", que enfatizaba la representación de temas nacionalistas, idealizados y que exaltaban la raza aria y la cultura alemana. Esta forma de arte se alineaba con la visión del Partido Nazi sobre la estética y la identidad cultural.</p>
 <p>Antes de continuar, revisa el siguiente video para saber más acerca del concepto de “Arte degenerado”.</p>
 <h2>"Video no disponible"</h2>
 <p>La campaña contra el "arte degenerado" culminó con la confiscación y eliminación de miles de obras de arte de museos, la prohibición de la enseñanza y la práctica de estilos artísticos "degenerados", y la persecución de artistas que no se ajustaban a la visión del régimen. Muchos artistas vanguardistas fueron despojados de sus trabajos, exiliados o reprimidos. La persecución del "arte degenerado" fue parte de un esfuerzo más amplio del régimen nazi por controlar la cultura y la expresión artística en Alemania y para imponer su ideología totalitaria.</p>
 <p>Hoy en día, el término "arte degenerado" se utiliza para describir el arte que fue despreciado y reprimido por los nazis durante su régimen, y para recordar los peligros de la censura y la persecución del arte en función de una ideología política o ideológica. También sirve como un recordatorio de cómo las dictaduras totalitarias a menudo intentan controlar y manipular la expresión artística para promover sus agendas políticas y culturales.</p>
   <?php ob_start(); ?>
   <p>Antes de continuar, repasemos algunas de las ideas vistas hasta este momento, resolviendo el siguiente reto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t5a1', "Vanguardias artísticas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>


