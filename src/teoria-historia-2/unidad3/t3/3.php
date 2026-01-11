<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>LA HISTORIA</h2>
  <p>La posmodernidad parte de la idea de que la historia moderna es ideología; que sirve a intereses patriarcales y 
    <?php renderTooltip ('hegemónicos', 'Se refiere a los intereses que un grupo dominante, en el campo político, social o cultural, impone al resto de su comunidad, para que los asuman como propios.','bottom');?>. Considera que la historia es acrítica; por ello propone cuestionar categorías y métodos de explicación de los fenómenos sociales.</p>
  <p>La crítica a las posturas modernas propone dejar de utilizar la noción de estructura sea económica, social, política o cultural y se reemplazan por conceptos como empresa, flujo o transformación; lo mismo ocurre con hecho social y se emplea el término de representación colectiva. La antropología, sociología, filosofía, así como la historia, asumen dentro de esta metodología, el resurgimiento del individualismo como objeto de sus estudios pues consideran que, en la era del Internet, las redes influyen continuamente en la relación de los individuos, por lo tanto, el sujeto personal es el centro de las situaciones históricas esto es los problemas de la vida privada, la cultura, la personalidad, la vida pública.</p>
  <p>La verdad es presentada de acuerdo con la visión de quien escribe o presenta los acontecimientos. De esta forma se busca mostrar varios puntos de vista en lugar de uno solo, que se convertiría en hegemónico respecto a la verdad de un acontecimiento; se busca la perspectiva de las personas o grupos sociales sobre lo que se escribe, presentando su perspectiva, así como del autor. Por ejemplo, en esta visión, si estudiamos la conquista de México y el contacto con los europeos, se presenta la crítica a las fuentes españolas desde la perspectiva de las comunidades mesoamericanas, o la perspectiva de género durante este proceso, así se pasa de una historia de bronce, de héroes, a una historia de una comunidad: la conquista no es por la genialidad de Cortés, sino por una alianza con comunidades mesoamericanas, por ejemplo. </p>
  <p>El método histórico seleccionado para acomodar el dato empieza por relativizar, problematizar y 
    <?php renderTooltip ('estetizar', 'La estetización es un proceso de producción de imágenes las cuales se difunden en los medios de comunicación de masas para que la realidad sea “aceptable” a los espectadores. Se “estetiza” por ejemplo la pobreza, la guerra o la muerte para que sea tolerable a quien la ve en estos medios. Se les da un aspecto que hace aceptable, por ejemplo, la guerra en la cual no se presenta la angustia, el dolor por la pérdida de vidas o se simplifica a un problema de héroes y villanos: los muertos de la guerra televisiva o cinematográfica son aceptables y no ocasionan rechazo o cuestionamiento de las causas.','bottom');?>. Se considera que es importante poder expresar adecuadamente los pensamientos, por lo que el lenguaje moldea nuestro pensamiento, necesitamos poder expresarnos con el lenguaje adecuado para mostrar la verdad. </p>
  <p>El historiador rescata los acontecimientos y los reestructura por medio de una posición narrativa, desde la propia óptica de quien los escribe, lo que permite a la posmodernidad negar que en historia se pueda conocer <b>la verdad única</b> y definitiva de los acontecimientos estudiados, pues esta es una <b>verdad relativa</b>, por lo tanto, solo se puede conocer parcialmente el pasado. No hay <b>verdad absoluta</b>; cualquier trabajo de historia es vulnerable por su fiabilidad y deficiencia de los registros históricos en los cuales se basa. El criterio para seleccionar y escribir la historia está filtrado por la subjetividad del historiador, no hay una única manera de interpretar el mundo y que todo conocimiento está construido histórica y culturalmente por lo que la escritura de la historia conlleva selección e interpretación.</p> 
  <p>El posmodernismo desconfía de la aparente neutralidad y objetividad de los hechos, se considera a los textos históricos o literarios como fuentes sin autoridad ni objetividad ya que todo autor tiene una intención para escribir lo que le resta un acercamiento a la verdad. Donde la verdad es un problema de perspectiva ya que no tenemos acceso a la realidad, sino a lo que nos parece a nosotros.</p>
  <ul class="ul-disc">
    <li>Podemos decir que esta corriente privilegia la narrativa histórica y en cómo se construyen sus relatos, es decir sus investigaciones. </li>
    <li>Se desconfía de las fuentes y de las interpretaciones teóricas por la subjetividad propia de toda creación humana.</li>
    <li>Analiza cómo las interpretaciones históricas están influenciadas por factores culturales, políticos, sociales y personales.</li>
    <li>El hecho es el que nos permite narrar el pasado, el historiador es quien construye sus hechos, de tal manera que tanto la historia como la literatura son discursos, es decir narraciones.</li>
    <li>Se busca encontrar las formas narrativas, es decir la forma, más que el fondo en una investigación, con lo cual se muestran ambigüedades, símbolos, ideas prefabricadas dentro de un relato histórico.</li>
    <li>La historia de la humanidad se ha escrito tradicionalmente desde una postura eurocentrista, misma que ha sido difícil de romper. </li>
    <li>Esta corriente busca una historia que cuestione las ideas dominantes, visión patriarcal, eurocentrista, economicista, política o ideológica fija su atención en áreas marginales: sexo, raza, género, medio ambiente, entre otras.</li>
  </ul>
  <p>Veamos algunos de sus autores.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-arqueologos.webp','Los arqueólogos de Giorgio de Chirico.', 'https://wikioo.org/es/paintings.php?refarticle=5ZKCF9&titlepainting=The%20Archaeologists&artistname=Giorgio%20De%20Chirico','Wikimedia Commons.');
  ?>
  </div>

  <p></p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
