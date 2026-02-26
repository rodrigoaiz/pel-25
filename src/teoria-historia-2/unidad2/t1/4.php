<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El Historicismo, visión panorámica de sus principales características</h2>
  <?php
      renderImage('th2-u2-caminante.webp','José Ortega y Gasset, filósofo y uno de los autores que reflexiona sobre la historia desde el  historicismo, propone en una frase una visión del hombre frente a la historia: «Soy yo y mi circunstancia». Una imagen que nos da este contexto es la obra de Caspar Friedrich, el caminante sobre un mar de nubes, pues nos muestra a un individuo, de frente, viendo su entorno, circunstancia.', 'https://es.wikipedia.org/wiki/El_caminante_sobre_el_mar_de_nubes#/media/Archivo:Caspar_David_Friedrich_-_Wanderer_above_the_sea_of_fog.jpg', 'Wikipedia');
  ?>
  </div>
  <h3>La historia</h3>

  
  <p>Los escritores historicistas se oponían a que la Historia fuera considerada como un tipo de conocimiento científico, basado, según sostenían los positivistas y marxistas, en la existencia de leyes <b>objetivas</b> argumentando que, por el contrario, el ser humano debía defender su libertad de pensamiento sin sentirse sometido a supuestas causas materiales que lo rebasaban.<p>

  <p>Los historicistas nos explican que, cuando el <b>historiador</b> escribe, no solo presenta su búsqueda de valores individuales, personales, sino que estos están inscritos en un contexto histórico, esto es que el individuo es parte de un contexto social, que muestra los valores de su época. </p>

  <p>De igual manera ocurre en otras épocas: los hombres viven de acuerdo con el contexto, en lo individual, son el reflejo de otros hombres que vivieron en la misma época y lugar. Así, las opiniones de un escritor coinciden con lo que piensan sus contemporáneos. El historiador puede mostrarlas a los hombres de su época: </p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«El pasado existe en nuestra conciencia, en nuestra memoria, para construir esa memoria del pasado acudimos a las manifestaciones de éste, como son los testimonios en los que podemos recuperar los hechos históricos.»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Manrique, Guía de historiografía… p. 19)</footer>

  <p>Aquí es importante aclarar que para el historicismo se diferencia el <b>hecho histórico</b> del acontecimiento histórico. El primero es el acontecimiento calificado por una interpretación, mientras que el <b>acontecimiento</b> histórico es aquello que sucedió, el dato. </p>

  <p>Un ejemplo es el acontecimiento o dato que trabajamos, sin darle connotación o sentido alguno, en cuanto le damos una calificación o sentido esto es lo interpretamos para explicarlo se convierte en un hecho histórico (Manrique, p. 27).</p>
  <p>El 12 de octubre de 1492 es un acontecimiento, mientras que sí consideramos que es un dato que marca el inicio de la edad moderna estamos explicando o dando sentido al acontecimiento por lo que se convierte en un <b>hecho histórico</b>.</p>

  <p>En el historicismo la organización de la temporalidad histórica parte de la idea de proceso, en la que cada etapa histórica tiene sus propias peculiaridades y el trabajo del historiador radica en entender el momento y la circunstancias en que se dieron estos acontecimientos, comprendiéndolos desde la propia circunstancia del historiador (Manrique, Guía de historiografía… p. 45).</p>

  <p>Es importante considerar las diferentes perspectivas que se pueden presentar sobre un acontecimiento, ya que son puntos de vista posibles sobre una totalidad compleja del pasado (Manrique, Guía de historiografía…, p. 49).</p>

  <h3>El historiador</h3>

  <p>Un elemento con el que están de acuerdo con el materialismo histórico es que la historia exige un compromiso con el presente.</p>

  <p>El <b>historiador</b> escribe una historia en la que construye, o reconstruye el pasado; además, muestra su interpretación personal del pasado y del presente. De manera que, en la historia se manifiestan nuestros deseos, formas de pensar, creencias, mismas que son expresadas en los textos históricos. En el trabajo del historiador se muestra la interpretación histórica del presente, misma que queda en las obras históricas.</p>

  <p>En este sentido Benedetto Croce, indica que una <b>obra histórica</b> no se juzga por citar más o menos hechos, lo que implica que la obra histórica no es importante por tener una larga cita de crónicas, notas, memorias o anales (Croce La historia..., p. 8), tal como lo hace el positivismo.</p>

  <p>Un libro de historia no debe ser juzgado por su capacidad de exaltar nuestra imaginación, como lo hacen los libros de texto de corte romántico y nacionalista; tampoco porque nos resulte interesante su narración, el texto histórico no debe ser divertido.</p>

  <p>Tampoco es historia el mostrar datos heroicos, de veneración o fervor. Un libro de historia puede ser un buen escrito, pero debe ajustarse a los hechos y la explicación que el historiador brinda de igual manera se ajusta a estos hechos (Croce, La historia..., p. 14).</p>

  <p>Lo importante de un texto histórico es que presente la verdad, por lo que el hecho estudiado debe ser comprobado, ya que es un deber moral del historiador el presentar con exactitud la recuperación del pasado. (Croce, La historia …, p. 8)</p>

  <p>La obra histórica permite comprender y conocer las necesidades de la vida práctica de las sociedades humanas, nos ayuda a entender la economía, la política, el arte, esto es la vida práctica para inspirar a la acción y el buen vivir. De manera que un texto histórico nos presenta un motivo o una finalidad para ser escrito (Croce, La historia …, p. 8-9)</p>

  <p>La obra histórica nace de la necesidad de entender o resolver nuevos requerimientos, de manera que podemos entender la historia de los hombres de otros tiempos en tanto que comprendemos los requerimientos que esa historia satisfizo. Aquí la importancia de un libro de historia, ya que este tiene sentido para nosotros porque nos permite entender lo que las sociedades buscaban. Así, podemos apreciar nuestras semejanzas con los tiempos anteriores llevándonos a considerar nuestras necesidades presentes (Croce, La historia …, p. 10)</p>

  <p>Para realizar su trabajo el historiador debe tener preparación, esto es el manejo de instrumentos que le ayuden en la búsqueda del conocimiento de información sobre el tema que trabaja. Debemos conocer cómo trabajar con las fuentes de la sociedad de la época que se busca conocer y que los hombres de la época estudiada dejaron (Manrique, Guía de historiografía…p. 20)</p>

  <p>De acuerdo con la época, para acceder a la información necesitamos del conocimiento de la paleografía, si se está trabajando con materiales de archivo y de manera específica la paleografía de letra procesal o procesal encadenada si trabaja con fondos como el de Inquisición, en el Archivo General de la Nación. Sí el investigador trabaja temas de la época prehispánica debe tener conocimientos sobre códices y lengua náhuatl. Esto es que el estudioso debe poseer las herramientas técnicas o teóricas que le ayuden en el desarrollo de su trabajo. No es necesario contar con instrumentos que no apoyen en el conocimiento de la época estudiada si estos no nos ayudan en la obtención de información para recrear el hecho histórico que se trabaja.</p>

  <p class="text-center"> <b>Ejemplo de letra que se puede leer con la paleografía.</b></p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-paleo.webp','En esta imagen vemos un tipo de letra cortesana del siglo XVI. Se puede apreciar que hay palabras unidas, «demexico». También faltan los acentos de la ortografía moderna y el uso de las mayúsculas. En los archivos mexicanos con documentos del periodo colonial encontraremos este tipo de letra, el cual podemos leer y transcribir, no traducir, pues es el mismo idioma español, mediante la paleografía.La transcripción de la imagen es «En la ciudad deMéxico»');
  ?>
  </div>

  <p class="text-center"> <b>Ejemplo de escritura en un códice maya del siglo XI</b></p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-paleomaya.webp','Si el historiador trabaja con códices al revisar el México Antiguo, encontrará que su lectura es compleja, pues comprender la cultura que lo generó, saber el sistema de escritura empleado y comprender el orden en el cual debe leerse.
 En esta imagen tenemos una página del Códice Dresden, elaborado por la cultura maya del siglo XI. En ella se describen tablas con información de las observaciones que hicieron del planeta Venus, las cuales son muy exactas. ');
  ?>
  </div>

  <p>En la investigación el estudioso verificará el o los documentos con que cuenta y los considerara en el contexto en que fueron realizados, así como la finalidad para la que fueron realizados.</p>

  <h3>El sujeto histórico:</h3>

  <p>Una de las categorías fundamentales para el estudio de la historia es identificar el sujeto histórico. Éste varía de acuerdo con el historiador de esta corriente: mientras que para Oswald Spengler es la cultura; para Arnold J. Toynbee las civilizaciones; para Max Weber la dimensión sociológica del hombre; para José Ortega y Gasset la dimensión circunstancial del hombre; para Benedetto Croce la dimensión contemporánea de la historia; para Robin George Collingwood la capacidad imaginativa del hombre y para Ernst Troeltsch, la totalidad individual (Aurel Jaume, Comprender el pasado, p. 120).</p>

  <h3>La utilidad histórica</h3>

  <p>Anteriormente indicamos que, para el historicismo, el objeto de la historia es el conocimiento de la vida humana en su <b>totalidad</b> y multiplicidad, lo que implica que el trabajo histórico es tratar de comprender los acontecimientos políticos, sociales, económicos, culturales, artísticos, así como las ideas de una época.</p>

  <p>La corriente historicista señala que la <b>finalidad</b> de la historia se encuentra en la posibilidad de tener conciencia del pasado, ya que nuestras inquietudes por conocer los acontecimientos que ya ocurrieron surgen de lo que vivimos en el presente, de manera que el pasado es parte de nosotros. Así toda historia es contemporánea, la historia está viva ya que representa las búsquedas del historiador por comprender su presente (Díaz, Homenaje a Álvaro Matute, 2009, p. 23)</p>

  <p>En contraste con el positivismo, que buscaba la regularidad en los hechos históricos, lo cual demostraba la existencia de leyes que rigen a las sociedades históricas y, por lo tanto, conocer la regularidad de los acontecimientos implica que podemos prevenir «errores en el futuro»; (Manrique, Guía de … p. 12) el historicismo cuestionó esta postura del positivismo, ya que los hechos históricos son únicos e irrepetibles, por lo que es imposible establecer leyes en la historia. Así no podemos comprobar los acontecimientos de las sociedades humanas siguiendo un método de investigación en el que experimentemos con la sociedad, mucho menos podemos considerar el conocimiento histórico como un medio de prever el futuro. De manera que la historia no sigue leyes, tampoco hay una regularidad de los acontecimientos históricos (Álvaro Matute, El historicismo en México, p. 20)</p>

  <p>La utilidad de la historia está en conocer el pasado para comprender las necesidades del presente con el fin de tener un objetivo para la acción sobre nuestro presente, por lo que es básico que la historia sea verdadera.</p>

  <h3>La verdad histórica</h3>

  <p>Para los historicistas el estudio de la historia es la búsqueda por entender los problemas del presente, por lo que el pasado no se estudia por un interés en sí, lo que lleva a la búsqueda del pasado en función de las necesidades del presente y tratar de explicar el presente desde su perspectiva actual. Aquí radica la importancia del trabajo del historiador quien interpreta el pasado en función del presente, de manera que la verdad es relativa, depende de la subjetividad del historiador, quien brinda una explicación de los acontecimientos estudiados, por lo que no hay una verdad, sino verdades a las que llega el historiador desde sus problemas y su perspectiva presentes.</p>

  <p>Los historicistas consideran que la verdad no puede alcanzarse de manera absoluta u objetiva, aunque sí pueden considerarse verdades, esto es que podemos encontrar verdaderas relativas e históricas, ya que las vivencias en torno a los acontecimientos permiten apreciar diferentes puntos de vista.</p>

  <p>Para los historicistas ninguna investigación histórica debe ser ajena al conocimiento de la verdad. Los historiadores historicistas cuestionaron si en <b>verdad</b> era posible tener certeza del conocimiento del pasado y el sentido que para el hombre tiene el conocimiento de éste.</p>

  <p>En cuanto a la consideración de que puede haber diferentes visiones sobre un acontecimiento conlleva la idea de que no existe una verdad absoluta y única, ya que pueden coexistir varias interpretaciones verdaderas sobre el acontecimiento estudiado, en ellas se puede apreciar las diferentes posturas de una sociedad sobre el tema estudiado (Díaz, Homenaje a Álvaro Matute, 2009, p. 23)</p>

  <p>Reconoce los aportes dados por otras corrientes de pensamiento histórico, centrando su acercamiento al cuestionamiento en torno a la verdad enfocándose en su propia perspectiva y circunstancia, por lo que no se puede concebir a la <b>verdad histórica</b> como absoluta, universal o definitiva (Manrique, Guía de …, p. 3)</p>

  <p>Partir de verdades relativas nos permite entender a las personas que han presentado su perspectiva de los acontecimientos, su visión de los hechos, así como lo que representaron para ellos entendiéndose en el momento en que se dieron. De manera que se busca comprender los acontecimientos y las circunstancias en que se dieron. Conocer los hechos y verdades, aunque relativos son válidos para nosotros, ya que nos permiten formarnos una idea de lo que aquellos hombres fueron, y la manera en que percibimos el conocimiento de nuestro pasado (Manrique, Guía de …, p. 13-14.)</p>

  <p>El conocimiento histórico nos permite conocernos a nosotros mismos al mostrar nuestra circunstancia, sirviéndose de la historia, esto es ser conscientes de la realidad que se desarrolla en una época, elemento que nos permite apreciar las condiciones de quién vive los acontecimientos.</p>

  <p>El historiador escribe sobre el pasado y el tema que trabaja es elegido de acuerdo con los intereses del estudioso, lo que implica que tiene una razón para escribir, por lo que en el trabajo final manifiesta sus intereses y perspectivas (Manrique, Guía de …, p. 19-20)</p>

  <p>El que el historiador tenga un fin u objetivo para realizar un trabajo histórico no quiere decir que no presente la verdad, sino por el contrario es su deber expresarla, por lo que se auxilia de una metodología para llegar a la verdad.</p>

  <p>El positivismo planteó que las sociedades humanas podían ser conocidas siguiendo un método de investigación como en el caso de las ciencias naturales. De manera que para esta corriente se pueden conocer los hechos de la naturaleza, como son el universo, el sistema solar, la tierra, los vegetales, los animales y el origen del hombre.</p>

  <p>A lo que el historicismo respondió que era necesario considerar la diferencia entre lo natural y lo humano, ya que las sociedades son históricas, lo que conlleva a que son diferentes lo humano es histórico, la realidad está constituida por individuos y personalidades diferentes por lo que es necesario conocerlos en su contexto e individualidad, por lo mismo son irrepetibles (Matute, El historicismo en México, p. 27)</p>

  <p>Así es importante considerar separar el conocimiento de lo natural de lo histórico, ya que son entidades diferentes, y prestar mayor atención a lo particular de lo histórico, presentando de manera verídica los acontecimientos estudiados, esto es mostrando de manera objetiva los sucesos.</p>

  <p>El historicismo cuestiona el que en historia se pueda aplicar el principio de <b>objetividad</b> dado en las ciencias exactas, sobre todo si se considera que esta debe pasar por una serie de pruebas científicas como en el caso de las ciencias naturales, ya que los hechos históricos no se pueden repetir lo que implica que a diferencia de las ciencias naturales en historia no podemos establecer leyes generales, por lo que no se puede tener una metodología de conocimiento acorde con la experimentación establecido en las ciencias naturales. </p>

  <p>El historicismo pone en duda la posibilidad de un conocimiento histórico objetivo, como se busca en las ciencias naturales. Así mismo rechaza la posibilidad de verdad objetiva en la historia, ya que la verdad es subjetiva y relativa al sujeto que la produce. La finalidad de la historia está en la posibilidad de tener conciencia del pasado, por lo que tenemos conciencia de nuestro presente. Hacer historia implica una interpretación personal del pasado, es una manera en que mostramos nuestros deseos, formas de pensar y creencias que están inmersas en las circunstancias [sociedad o época en que se generan] (Manrique, Guía de …, p. 36)</p>

  <p>Es necesario considerar que en historia no podemos dejar de calificar los acontecimientos, como personas no podemos dejar de dar nuestra interpretación sobre los acontecimientos, ya que escribir historia es una manera de expresar y manifestar opiniones en las que tomamos partido o expresamos nuestra postura con respecto al acontecimiento narrado. (Manrique, Guía de …, p. 28)</p>

  <p>Así, cuando un historiador toma partido, al dar su interpretación o dotar de sentido su investigación, esta es subjetiva. Ya que el historiador llega a conclusiones que le son útiles a sus fines, porque la historia no existe sino en la conciencia de quienes reflexionan sobre ella, de manera que el hecho es la manera de interpretar, esto es de hacer historia. (Manrique, Guía de …, p. 30)</p>

  <p>A continuación vamos a realizar un repaso con el fin de que recuerdes las características del historicismo.</p>

  <?php
  renderVideoIframe('JmlS2Zf8-is', 'Este es el primer video de la asignatura');
  ?>

  <p>Vistos los elementos teóricos anteriores, pasemos a trabajar a Wilhelm Dilthey y a Benedetto Croce, ambos autores nos dan una pauta para comprender al Historicismo como corriente historiográfica.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>