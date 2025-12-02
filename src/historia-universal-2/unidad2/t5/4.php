<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Movimiento muralista mexicano</h2>
 <p>No podemos terminar esta unidad sin abordar el tema de cómo influyó el arte y la ideología socialista en el movimiento muralista mexicano y el arte de mediados del siglo XX en México.</p>
  <p>El movimiento muralista mexicano, un destacado capítulo en la historia del arte del siglo XX, se caracterizó por su compromiso con la representación de la historia, la cultura y las luchas sociales de México a través de murales públicos. Uno de los aspectos más influyentes en la formación y desarrollo de este movimiento fue la adopción y promoción de ideas comunistas y socialistas por parte de muchos de los artistas involucrados.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-frida.webp','Frida Kahlo. Imagen de Guallendra.','https://commons.wikimedia.org/wiki/File:Kahlo_Frida_portant_un_corset_avec_dessin_militant.jpg', 'Wikimedia Commons.');
  ?>
  </div>

  <h3>El Contexto Histórico y Político</h3>
 <p>El surgimiento del movimiento muralista mexicano en la década de 1920 estuvo intrínsecamente ligado al contexto político y social de México. Tras la Revolución Mexicana de 1910, el país experimentó cambios significativos en su gobierno y estructura social. El presidente Lázaro Cárdenas, quien gobernó de 1934 a 1940, implementó una serie de reformas progresistas, incluyendo la reforma agraria y la nacionalización del petróleo. Estas reformas tenían un tono socialista, y Cárdenas gobernó con un fuerte compromiso con la justicia social. En este ambiente político, muchos artistas mexicanos se sintieron inspirados para utilizar el arte como un medio para expresar y promover ideas comunistas y socialistas. El Partido Comunista Mexicano (PCM) y otros grupos de izquierda desempeñaron un papel importante en la promoción de la ideología socialista en la cultura y las artes de México.</p>
  <div class="mx-auto max-w-md">
  <?php
 renderImage('hu2-u2-diego.webp','Diego Rivera. Detalle del mural “Historia de México”. imagen de Cbl62.', 'https://commons.wikimedia.org/wiki/File:Diego_Rivera_mural_featuring_Emiliano_Zapata.jpg','Wikimedia Commons.');
 ?>
  </div>
 <h4>Los Tres Grandes: Rivera, Orozco y Siqueiros</h4>
  <p>Los tres artistas más influyentes del movimiento muralista mexicano, Diego Rivera, José Clemente Orozco y David Alfaro Siqueiros, abrazaron y promovieron activamente las ideas comunistas y socialistas en su trabajo. Cada uno de ellos desarrolló un estilo distintivo, pero compartían un compromiso con la representación de la historia y la lucha de clases en México.</p>
  <p>Diego Rivera: Rivera es uno de los artistas más conocidos del movimiento muralista mexicano. Sus murales a menudo celebran la revolución y presentan una visión socialista de la historia de México. Rivera era miembro del PCM y sus obras reflejaban su compromiso con la justicia social y la igualdad. Entre sus obras más famosas se encuentra el mural en el Palacio de Bellas Artes titulado "Man at the Crossroads," que fue encargado para el Rockefeller Center en Nueva York y luego destruido debido a su contenido político.</p>
  <p>José Clemente Orozco: Orozco también era un miembro del PCM y sus murales exploran temas sociales y políticos. Sus obras a menudo presentan la opresión y la lucha de clases en un estilo más oscuro y pesimista en comparación con los murales de Rivera. El mural "Prometeo" en la Casa de los Azulejos en la Ciudad de México es un ejemplo de su trabajo que representa la lucha del proletariado.</p>
  <p>David Alfaro Siqueiros: Siqueiros fue un miembro activo del PCM y sus murales se centraron en cuestiones políticas y sociales contemporáneas. Sus obras a menudo presentaban escenas de la lucha de clases y la resistencia popular. El mural "Del porfirismo a la Revolución" en el Polyforum Cultural Siqueiros en la Ciudad de México es un ejemplo representativo de su estilo.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-siqueiros.webp','David A. Siqueiros Detalle del mural “La nueva democracia”. Imagen de Xenophon.', 'https://commons.wikimedia.org/wiki/File:Palacio_de_Bellas_Artes_-_Mural_La_Nueva_Democracia_Siqueiros_2.jpg','Wikimedia Commons.');
  ?>
  </div>
  <h4>El Enfoque en la Identidad Nacional y la Educación</h4>
  <p>El movimiento muralista mexicano también se centró en la promoción de la identidad y la cultura mexicana. Los artistas creían que el arte podía ser una herramienta para fortalecer la conciencia nacional y la unidad. Al mismo tiempo, buscaban educar al pueblo mexicano sobre su historia y sus raíces culturales. Las ideas comunistas y socialistas respaldaban esta visión de la educación y la identidad nacional. Los murales públicos, al estar en espacios accesibles para todos, se convirtieron en un medio de educación popular. Los artistas creían que la exposición a la historia y la cultura mexicana en el arte podía empoderar al pueblo y fomentar un sentido de comunidad y lucha compartida.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-orozco.webp','Orozco “Caballos y zapatistas”. Imagen de Daderot.', 'https://commons.wikimedia.org/wiki/File:Acordada_(Caballos_y_Zapatistas),_by_Jose_Clemente_Orozco,_1941_-_De_Young_Museum,_San_Francisco.jpg','Wikimedia Commons.');
 ?>
 </div>
 <p>El movimiento muralista mexicano, con sus raíces comunistas y socialistas, dejó un legado duradero en la historia del arte y la cultura de México. Aunque enfrentaron desafíos y conflictos con el gobierno y otros sectores de la sociedad, los muralistas tuvieron un impacto significativo en la conciencia social y política de México. Sus obras todavía se pueden ver en edificios públicos, museos y galerías de todo el país. Además, el muralismo mexicano inspiró movimientos artísticos en otros lugares de América Latina y en todo el mundo. La idea de utilizar el arte como medio para promover la justicia social, la igualdad y la educación ha dejado una impresión duradera en el arte contemporáneo y la conciencia política.</p>

      <?php ob_start(); ?>
  <p>Repasemos algunas de las ideas vistas resolviendo el siguiente reto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t5a2', "Arte del siglo XX", $ActividadContent);
  ?>
    <?php ob_start(); ?>
  <p>Finalmente realicemos la evaluación final de esta unidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t5a3', "Cuestionario final de la unidad 2", $ActividadContent);
  ?>
<h3>Esperamos que te haya resultado interesante esta unidad ¡Hasta pronto y suerte!</h3>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
