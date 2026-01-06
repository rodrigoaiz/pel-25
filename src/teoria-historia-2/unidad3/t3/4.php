<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>MICHEL FOUCAULT</h2>
  
 
  <p>De los autores que escriben historia desde la perspectiva posmoderna, te proponemos ver dos de ellos. El primero, Michael Foucault (1926-1984) es un autor pionero en esta corriente. Su obra abarca varias líneas de investigación, entre las cuales se encuentran la historia de la locura, la historia de la sexualidad y, en general, su obra se ocupa de las relaciones del poder en una sociedad concreta.</p>
  <p>Su importancia radica en la forma en la cual enfoca los procesos históricos, enfocando las relaciones de poder y rastreando sus raíces mediante un método que abarca dos elementos que busca convertir en conceptos: la arqueología del saber y la genealogía del saber.  Parte de la idea que la realidad histórica no es aislada y que, para entender un problema desde el presente se debe establecer una arqueología del concepto o la práctica social que se busca explicar: Para esto parte de que la expresión de la historia es un discurso acotado por las condiciones sociales del momento y que, si no vemos los orígenes de estas ideas, acabaremos repitiendo la idea dominante.</p>
  <p>El ejemplo de este método lo toma a través del concepto de locura durante la edad media, la edad moderna y el siglo XIX, en la cual muestra las relaciones del poder y cómo se conceptualiza la locura. Respecto a este método, nuestro autor menciona:</p>
  <ul>
    <p>«Creo que la historia puede servir a la actividad política y que esta, a su vez, puede servir a la historia mientras que la tarea del historiador o mejor del arqueólogo, sea descubrir las bases, las continuidades en el comportamiento, en el condicionamiento, en las relaciones de poder o en las condiciones de existencia». Michael Foucault, La verdad y las formaciones jurídicas, p. 170.</p>
  </ul>
    <p>La concepción de la historia de Foucault se presenta de manera directa en sus textos:</p>
  <ul>
  <p>«A partir del siglo XIX, la Historia va a desplegar en una serie temporal las analogías que relacionan unas con otras a las distintas organizaciones. Es esta Historia la que, progresivamente, impondrá sus leyes al análisis de la producción, al de los seres organizados y, por último, al de los grupos lingüísticos.» Foucault Las palabras y las cosas, p 232-233.</p>
  <p>«Desde hace décadas, la atención de los historiadores se ha fijado preferentemente en los largos períodos, como si, por debajo de las peripecias políticas y de sus episodios, se propusieron sacar a la luz los equilibrios estables y difíciles de alterar, los procesos irreversibles, las regulaciones constantes, los fenómenos tendenciales que culminan y se invierten tras de las continuidades seculares, los movimientos de acumulación y las saturaciones lentas, los grandes zócalos inmóviles y mudos que el entrecruzamiento de los relatos tradicionales había cubierto de una espesa capa de acontecimientos. Para llevar a cabo. este análisis, los historiadores disponen de instrumentos de una parte elaborados por ellos, y de otra parte recibidos: modelos del crecimiento económico, análisis cuantitativo de los flujos de los cambios, perfiles de los desarrollos y de las regresiones demográficas, estudio dei clima y de sus oscilaciones, fijación de las constantes sociológicas, descripción de los ajustes técnicos, de su difusión y de su persistencia. Estos instrumentos les han permitido distinguir, en el campo de la historia, capas sedimentarias diversas; las sucesiones Iineales, que hasta entonces habían constituído el objeto de la investigación, fueron sustituidas por un juego de desgajamientos en profundidad.» Foucault, Arqueología del saber, p. 3-6.</p>
  </ul>
  <p>El párrafo anterior nos da cuenta de su visión de por qué el hacer historia debe cambiar: la gran cantidad de técnicas y aportes metodológicos de otras disciplinas nos llevan a obtener más datos, lo que plantea, nuevamente, preferenciar la información, de la cual ahora hay más «capas», es decir más elementos por aportar que llegar a profundidad en la explicación del suceso o fenómeno acotado. El llegar a todas estas capas de información tiene como herramienta principal el análisis del discurso, es decir ubicar en tiempo y espacio los conceptos empleados; revisar su coherencia y objetividad; asimismo ver el sentido y el cambio que se produce en ellos. Lo anterior lo lleva a considerar que existen diferencias entre el momento estudiado y el observador actual: </p>
  <ul>
    <p>«Establece que somos diferencia, que nuestra razón es la diferencia de los discursos, nuestra historia la diferencia de los tiempos, nuestro yo la diferencia de las máscaras. Que la diferencia, lejos de ser origen olvidado y recubierto, es esa dispersión que somos y qué hacemos».</p>
    <p>«La actualización jamás acabada, jamás íntegramente adquirida de! archivo, forma -e! horizonte general aI cual pertenecen la descripción de las formaciones discursivas. e1 análisis de las positividades, la fijación de! campo enunciativo. EI derecho de las palabras -que no coincide con el de los filólogos- autoriza, pues, a dar a todas estas investigaciones el título de arqueología. Este término no incita a la búsqueda de ningún comienzo; no emparenta el análisis en ninguna excavación o sondeo geológico. Designa eI tema general de una descripción que interroga lo ya dicho ai nive! de su existencia: de la función enunciativa que se ejerce en él, de la formación discursiva a que pertenece, dei sistema general de archivo de que depende. La arqueologia describe los discursos como práctir.as especificadas en el e!emento de! Archivo». Michael Foucault, Arqueología del Saber, p. 223.</p>
  </ul>
  <p>La historia, entonces toma como base el análisis del discurso, de lo escrito. El papel del libro y del archivo es fundamental, pero requiere un tratamiento metodológico que nos lleve a ver, en última instancia, su papel formador.</p>
  <p>El autor es complejo y se considera una de las bases de la visión posmoderna de la historia por su aporte, tanto a través de las genealogías como de la arqueología del saber, mismo que aplica en distintas obras.</p>
  <div class="mx-auto max-w-md">
    <?php
    renderImage('th2-u3-michelf.webp','Michel Foucault', 'https://es.wikipedia.org/wiki/Michel_Foucault#/media/Archivo:Michel_Foucault_1974_Brasil.jpg','Wikimedia Commons.');
    ?>
  </div>




</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>