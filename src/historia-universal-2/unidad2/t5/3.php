<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Arte en la Unión Soviética</h2>
  <p>La historia del arte en la Unión Soviética es un fascinante viaje a través de la evolución de la expresión artística en el contexto de un estado totalitario y socialista. Durante su existencia, la Unión Soviética experimentó una serie de cambios culturales y políticos que influyeron en la producción artística, desde el arte de la Revolución Rusa en 1917 hasta la caída del régimen comunista en 1991. Aquí te mostramos un resumen corto de los momentos más destacados en la historia del arte soviético:</p>

  <?php
  $accordionItems1 = [
    [
      'title' => 'Arte de la Revolución (1917-1921)',
      'content' => '<p>Tras la Revolución Rusa de 1917, se generó un entusiasmo artístico por parte de los artistas que apoyaban el nuevo régimen bolchevique. Surgieron movimientos artísticos como el Constructivismo y el Suprematismo, que abogaban por la abstracción y la creación de un arte útil y funcional para la sociedad. Al mismo tiempo, se produjo una ola de arte propagandístico que promovía las ideas comunistas y revolucionarias.</p>'
    ],
    [
      'title' => 'Realismo Socialista (1920-1950)',
      'content' => '<p>Durante la década de 1930, con la consolidación del poder de Stalin, el arte soviético pasó por una transformación drástica. Se impuso el Realismo Socialista como el único estilo artístico aceptable, que requería la representación positiva de la vida soviética y la exaltación de los ideales comunistas. Este período fue caracterizado por la producción de obras que mostraban campesinos y trabajadores en un contexto idealizado, y donde cualquier crítica al régimen o desviación de los principios del Realismo Socialista estaba estrictamente prohibida.</p>'
    ],
    [
      'title' => 'La Guerra Fría y el arte soviético (1950-1980)',
      'content' => '<p>Durante la Guerra Fría, la Unión Soviética y Occidente compitieron en numerosos campos, incluyendo el arte. Los artistas soviéticos produjeron obras que celebraban los logros tecnológicos y científicos de su país, así como representaciones de la vida cotidiana en la URSS. Sin embargo, muchos artistas también buscaron formas subversivas de expresión, utilizando simbolismo y metáforas para evadir la censura del estado.</p>'
    ],
    [
      'title' => 'El arte de la Perestroika (1980-1991)',
      'content' => '<p>Con la llegada de Mijaíl Gorbachov y la Perestroika (reforma política y económica) en la década de 1980, se produjo una apertura en la escena artística. Los artistas experimentaron con nuevos estilos y temas, y se reanudó el diálogo con el arte occidental. El arte conceptual y la crítica social se volvieron más prominentes, y los artistas pudieron expresar una mayor diversidad de puntos de vista.</p>'
    ]
  ]; renderAccordion($accordionItems1, 'primero-');
  ?>
  
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-arteurss.webp','I. Brodsky. Lenin en el Smolny. 1930. Imagen de Alonso de Mendoza.', 'https://es.wikipedia.org/wiki/Arte_sovi%C3%A9tico#/media/Archivo:Brodski_lenin.jpg','Wikimedia Commons.');
 ?>
  </div>
  <p>El arte en la Unión Soviética estaba fuertemente influenciado por la ideología comunista, con una fuerte orientación hacia el arte como herramienta de propaganda y educación política. Los artistas se encontraban bajo una presión constante para producir obras que respaldaran al régimen y sus ideales, y cualquier desviación del Realismo Socialista era castigada. No obstante, a pesar de estas restricciones, hubo artistas que buscaron maneras creativas de comunicar sus pensamientos y sentimientos a través de su obra. Tras la caída de la Unión Soviética en 1991, la escena artística rusa experimentó una libertad sin precedentes, y los artistas pudieron explorar una gama más amplia de estilos y temas. Muchos artistas que se habían visto obligados a trabajar en secreto bajo el régimen soviético pudieron finalmente exhibir su trabajo y contribuir al crecimiento de una escena artística rusa diversa y vibrante.</p>
 <h3>Sergei Eisenstein y el nuevo cine sovietico</h3>
  <p>Sergei Eisenstein fue un director, guionista y teórico del cine ruso-soviético del siglo XX que desempeñó un papel fundamental en la historia del cine. Su trabajo y teorías cinematográficas han tenido un impacto duradero y significativo en la evolución del cine como arte y medio de comunicación. Algunas de las razones por las cuales Sergei Eisenstein es considerado una figura de gran importancia en la historia del cine incluyen su contribución al desarrollo del montaje cinematográfico. Él creía que la esencia del cine radicaba en la edición y la secuencia de imágenes. Introdujo el concepto de "montaje intelectual" en su teoría cinematográfica, que implicaba la creación de significado a través de la relación entre planos y la forma en que se ensamblan. Su obra más conocida, "El acorazado Potemkin" (1925), es un ejemplo sobresaliente de su habilidad para usar el montaje para crear emoción y significado.</p>

  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-sergei.webp','Sergei Eisenstein. Imagen de Materialscientist.', 'https://commons.wikimedia.org/wiki/File:Sergei_Eisenstein_03.jpg','Wikimedia Commons.');
  ?>
  </div>
 <p>Eisenstein y otros cineastas soviéticos desempeñaron un papel importante en la definición del cine como un medio artístico y de propaganda en la Unión Soviética. Sus escritos teóricos y su práctica cinematográfica contribuyeron a establecer las bases para el cine de vanguardia y experimentación en la Rusia posrevolucionaria. Su enfoque en la creación de significado a través del montaje influyó en generaciones de cineastas en todo el mundo. Además fue un innovador visual que experimentó con la composición, la iluminación y la perspectiva en sus películas. Su uso de ángulos inusuales, planos detallados y composiciones visuales impactantes contribuyeron a la estética y el lenguaje cinematográfico. Sus obras a menudo presentaban imágenes poderosas y memorables. Las teorías y técnicas de montaje desarrolladas por Eisenstein influyeron en cineastas de todo el mundo. Directores como Alfred Hitchcock y Orson Welles estudiaron y se inspiraron en sus métodos de montaje. Su trabajo también dejó una marca indeleble en la evolución del cine documental y en la narración visual en general. Aunque Eisenstein es conocido por su contribución al cine artístico, también desempeñó un papel importante en la creación de películas de propaganda para el régimen soviético. Sus obras, como "El acorazado Potemkin" y "Octubre" (1928), se utilizaron para promover la ideología comunista y celebrar la Revolución Rusa. Estas películas se convirtieron en ejemplos influyentes de cómo el cine podía ser utilizado para influir en la opinión pública y la política.</p>
  <p>Ahora te invitamos a ir por unas palomitas de maíz y disfrutar gratis de una de las películas más icónicas de Eisenstein “El acorazado Potemkin”. En esta película se narran las condiciones de vida de los marineros de un acorazado y la forma en la que son tratados, lo que representa de manera general como eran tratados los trabajadores de toda Rusia y por qué finalmente se rebelan y estalla la revolución contra sus gobernantes.</p>

<?php
  renderVideoIframe('vFtkJ1688cI', 'El acorazado de potemkin (1925)');
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
