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

<h2> El positivismo  </h2>

<h3> Introducción </h3>

<p>
  La mayor parte de las ideas sobre la ciencia y la cultura en la segunda mitad del siglo XIX se encuentran bajo la idea de la cientificidad. 
  El papel de la ciencia fue un nuevo paradigma con el cual se marcaba una nueva era: la era de la ciencia. Autores como Julio Verne crean sus 
  obras a partir de los descubrimientos en ciencia y técnica más recientes. En el caso de las ciencias sociales y las humanidades, en especial 
  la Historia, ésta se desarrolla bajo la misma premisa: se busca hacer una historia científica y para lograrlo, existen dos vertientes: por un 
  lado, se retoma la escuela científica alemana de historia, la cual propone la heurística y la hermenéutica para lograrlo y por otro, se propone 
  que se anule el punto de vista del historiador y que la objetividad se de a partir de la evidencia documental.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-la_Rocket_de_Stephenson.webp', ' La visión del progreso se relaciona con el uso de nuevas tecnologías que para la segunda mitad 
  del siglo XIX se extendían en los países industrializados: la imprenta, el telégrafo y el vapor para el transporte terrestre y marino.',
  'https://www.worldhistory.org/img/r/p/1500x1500/17012.png.webp?v=1688424003','National Railway Museum, UK (CC BY)');
?>
</div>

<h3> El positivismo </h3>

<p>
  El positivismo se desarrolla a partir del pensamiento de Augusto Comte, el cual se expresa en su obra <i>Curso de filosofía positiva</i>, 
  1830 a 1842, y se expresa, de manera sintética el <i>Discurso sobre el espíritu positivo</i>, 1844, en el cual considera que la historia es el 
  desarrollo de la sociedad en continuo progreso, y que ha pasado por tres estados: el <b>estado teológico</b>, el <b>estado metafísico</b> y el 
  <b>estado positivo</b>. Estos estados son progresivos y generales, es decir que se cumplen tanto en los individuos como en las sociedades.
</p>

<p>
  Por otra parte, el término mismo de positivismo no se relaciona con una visión positiva o negativa, sino que deriva de varios términos latinos:
  <i>positus</i>, puesto; el sufijo <i>-tivus</i>, que se asocia a una actividad lo cual toma el sentido de <b> lo que es puesto, lo que es concreto.
  <i>El sentido del término es precisamente que lo real es sólo lo que puede dar evidencia.</i></b>
</p>

<p>
  De ahí que el positivismo también se identifique con la ciencia. El desarrollo científico, en especial en la segunda mitad del siglo XIX, contribuye 
  a la formación de una visión 
   <?php renderTooltip('cientificista','Es una corriente ideológica, una cosmovisión,  que considera que el método científico es la visión más adecuada 
   para explicar todos los aspectos de la sociedad humana y por lo tanto aspira a que toda rama del conocimiento humano logre el estatuto de ciencia.');?> 
  de la Historia, con base al trabajo de investigación a partir de las evidencias, especialmente documentales, así como las colecciones de documentos 
  presentes en los archivos.
</p>

<p>
  De ahí que la historiografía positivista busque la objetividad, borrando al historiador, es decir, que no exprese su opinión, sus preferencias o antipatías. 
  Asimismo, la historiografía positivista desarrolló manuales de investigación histórica muy detallados. El ejemplo más acabado es la obra de Charles-Victor 
  Langlois y Charles Seignobos <i>Introducción a los estudios históricos</i> , de 1898. Los autores declaran:
</p>

<p class="citation">
   <b>«Nuestra intención es examinar los condicionantes y la metodología de la investigación histórica y señalar su carácter y sus límites ¿Cómo llegamos a 
    saber algo acerca del pasado? ¿Hasta qué punto, y que es lo que nos interesa de él?  ¿Qué entendemos por documentos? ¿Cómo hemos de utilizarlos para escribir 
    historia? ¿Qué entendemos por hechos históricos? ¿Cómo hemos de utilizarlos para escribir un libro de historia? De forma más o menos consciente, cualquier 
    historiador efectúa en la práctica las complejas tareas de selección, organización, análisis y síntesis. Pero los principiantes, y la inmensa mayoría de 
    quienes jamás se han parado a reflexionar acerca de los fundamentos metodológicos de la historia recurren a métodos intuitivos que rara vez. desembocan 
    en la verdad científica, ya que por lo general carecen de rigor intelectual. Así pues, se hace necesario exponer y fundamentar la teoría de los procedimientos 
    genuinamente racionales, ya consolidada en algunos de sus aspectos, todavía inconclusa en cuestiones de capital importancia»</b> Charles Langlois y Charles 
    Seignobos, <i>Introducción a los estudios históricos.</i> Introducción.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-portada_del_libro_introducción_a_los_estudios_históricos.webp', 'Uno de los textos más influyentes en la investigación histórica es la obra de 
  los historiadores Charles V. Langlois y Charles Seignobos, que a finales del siglo XIX muestran la metodología de investigación histórica ligada al positivismo.',
  'https://fr.wikisource.org/w/index.php?title=Fichier:Langlois_-_Seignobos_-_Introduction_aux_études_historiques,_1899.djvu&page=9','Wikipedia Commons.');
?>
</div>

<p>
  El rigor metodológico que mostraron los historiadores positivistas los llevó a desarrollar <b>recopilaciones documentales a partir de materiales de archivo</b>, 
  como Los <i>Papeles de la Nueva España</i>, publicados en varios tomos por Francisco del Paso y Troncoso, el cual recopila documentos relativos a México en archivos 
  y bibliotecas europeas, rescatando obras como la <i>Historia General de las Cosas de la Nueva España</i>, de Fr. Bernardino de Sahagún, que recopiló y editó a partir 
  de los manuscritos de Madrid y Florencia; por un lado, <b>reconstrucciones de ciudades de la antigüedad</b>, con base en documentación de archivo, como <i>La ciudad antigua</i>, 
  publicada en 1864 por  Fustel de Coulanges, que recrea la ciudad de Roma en la época de Augusto, así como su entorno cultural; <b>biografías de personajes ilustres</b>, 
  como el <i>Ensayo sobre Tito Livio</i> de Hipolyte Taine. Todo lo anterior sirve de muestra para comprender la importancia de esta corriente historiográfica, en cuanto a 
  las temáticas. Cabe destacar que en el caso mexicano, el positivismo sirve de base para la creación de la <b>Escuela Nacional Preparatoria</b> en 1867, fundada por Gabino 
  Barreda. Cabe destacar dentro de esta corriente en México a Justo Sierra con su obra México: su evolución social. <br> La solidez de estas investigaciones parte en la confianza 
  de un método de análisis de libros y documentos, mismo que comentamos anteriormente y en anular al historiador en sus opiniones y juicios de valor sobre el periodo estudiado 
  para lograr la objetividad, es decir que los documento s hablaran por sí mismos y, de esta manera, exponer una parte del pasado investigado. <br> Por su base cientificista, 
  esta esta corriente de interpretación histórica será dominante a partir de la segunda mitad del siglo XIX y durante el primer tercio del siglo XX, pues fue el referente obligado 
  para la metodología de la investigación histórica, la cual consistía en encontrar información que permitiera conocer aspectos del pasado mediante la recopilación de hechos, 
  sin entrar en el proceso de interpretación de estos. <br> Será frente a esta corriente que se levantarán nuevas voces teóricas: el historicismo, la Escuela de los <i>Annales</i>, 
  la Escuela de Frankfurt, así como las diversas corrientes teóricas del marxismo. 
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-el_triunfo_de_la_ciencia_y_el_trabajo_sobre_la_envidia_y_la_ignorancia.webp', 'La Escuela Nacional Preparatoria, se fundó por Gabino Barreda bajo los principios 
  positivistas. Recordemos que el lema de la Escuela Nacional Preparatoria es Amor, Orden y Progreso, en la tradición positivista. Juan Cordero pintó en los muros de la Escuela Nacional 
  Preparatoria donde se expresaba la idea del positivismo.','http://munal.emuseum.com/objects/83/el-triunfo-de-la-ciencia-y-el-trabajo-sobre-la-envidia-y-la',
  'Museo Nacional de Arte, INBA, México.');?>
</div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>