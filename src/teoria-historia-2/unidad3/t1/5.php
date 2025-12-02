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
  <h2>Microhistoria italiana: Carlo Ginzburg.</h2>

  <p>Carlo Ginzburg es el iniciador de esta corriente historiográfica. Su obra es amplia y abarca tanto investigación histórica del periodo renacentista, como elementos de teoría de la Historia e historia del arte. Entre sus libros tenemos: El queso y los gusanos (1976) obra que se considera base de la microhistoria; los Bennadati; El hilo y las huellas, reflexiones sobre el quehacer de la historia; Juegos de paciencia, donde muestra cómo se realiza una investigación histórica colectiva.</p>
  <p>Conocido por su trabajo en el campo de la historia cultural y, especialmente en la microhistoria, define el trabajo de investigación histórica centrado en el análisis de lo particular, a partir de indicios especialmente indirectos que «permitan iluminar» áreas poco conocidas, mediante la triangulación de fuentes que nos permitan verificar un evento a partir de testimonios de actores no significativos para la historia tradicional. En su obra Tentativas ejemplifica la investigación histórica de la siguiente manera:</p>
  <ul>
  <p>«Quien hace investigación es como una persona que se encuentra en una habitación oscura. Se mueve a tientas, choca con un objeto, realiza conjeturas: ¿de qué cosa se trata?, ¿de la esquina de una mesa, de una silla o de una escultura abstracta? En la investigación de aquello que es desconocido, olvidado e imprevisible, también el azar puede cumplir una función útil. Pero sería ingenuo hacerse ilusiones: no existen atajos para el estudio y estudiar es algo laborioso y cansado». Tentativas, 2003, prefacio </p>
  </ul>
  <p>Su método se conoce como <b>método indiciario</b>, pues es a partir de los indicios particulares, pequeños, individuales, se puede establecer un diálogo entre la dimensión micro, particular, de una sociedad y la dimensión macro, es decir la historia política, social o económica de ella.</p>
  <p>En el queso y los gusanos, su investigación de lo particular lleva a una narración minuciosa y detallada de la vida de hombres y mujeres cotidianos, «sin historia», como el molinero Mennochio. Esta obra se considera la base de la microhistoria italiana pues retoma la documentación de la Inquisición para seguir por diez años el juicio de Mennochio y, a partir de ella, enfrenta elementos documentales atípicos, los cuales, en lugar de desechar o ignorar, le permiten buscar, encontrar y seguir nuevas series documentales que le permitan comprender detalles mínimos de lo que investiga:</p>
  <ul>
    <p>«Que el conocimiento histórico implique la construcción de series documentales, es obvio. Menos obvio es el tipo de actitud que el historiador debe adoptar ante las anomalías surgidas en la documentación. <?php renderTooltip ('Furet', 'Furet, François. (1927-1997). Historiador francés especializado en la Revolución Francesa, de la cual propone una reinterpretación tomando en cuenta la visión marxista y retomando líneas de investigación trazadas por Alexis de Tocqueville. Dentro de sus obras destacan: Pensar la Revolución Francesa, 1978; el Diccionario crítico de la Revolución Francesa, 1993 y el Taller de la historia, 1982.','bottom');?> 
    proponía omitirlas, observando que el "<?php renderTooltip ('hapax', 'El término proviene del griego hápax legómenon que significa dicho una sola vez. El diccionario de la lengua española lo define como: «En lexicografía o en crítica textual, voz registrada una sola vez en una lengua, en un autor o en un texto»','bottom');?>" (lo que es documentalmente único) no es utilizable desde una perspectiva serial. Pero el "hapax", con rigor, no existe. Cada documento, incluso el más anómalo, puede insertarse en una serie; es más, puede servir, si se analiza adecuadamente, para sacar a la luz una serie documental más amplia».</p>
  </ul>
  <p>La microstoria italiana se ocupa de estas anomalías documentales, lo que permite percibir la mentalidad, así como los mecanismos de poder de una época y esto lo distingue de las otras definiciones de microhistoria, por ejemplo la del historiador mexicano Luis González y González, con su concepción de ésta como la historia «<?php renderTooltip ('matria', 'Propiamente el término es historia matria. Este término lo propone el historiador mexicano Luis González y González para referirse, por oposición a la historia patria «La matria o la patria chica es dueña de un espacio corto y un tiempo largo, el común de los pueblos en México comienza en el siglo XVl durante la congregación de indios y la fundación española […] En lo cultural, cada matria maneja los prejuicios que rigen desde la mesa hasta el altar, pasando por un código de honor, una cosmovisión, un andadito y una manera de hacer el arte».','bottom');?>», local y entrañable que muestra cómo impacta en pequeña escala los procesos históricos más generales; la Microhistory, del historiador norteamericano G.R. Stewart, en su reconstrucción de la batalla de Gettysburg, el cual se centra en un evento de duración de veinte minutos, la carga del mayor-general Edward Pickett. Lo anterior le permite tratar con una metodología específica de investigación:</p>
  <ul>
  <p>«Hace mucho tiempo que trabajo de historiador: intento relatar, valiéndome de huellas, historias verdaderas (que algunas veces tienen por objeto lo falso). En nuestros días, ninguno de los términos de esta definición (relatar, huellas, historia, verdadero, falso) me parece indiscutible. Cuando empecé a aprender este oficio, hacia finales de los años cincuenta, la actitud prevalente en la corporación era completamente distinta. Escribir, contar la historia, no era considerado un tema de reflexión serio, sino que esto se logra a través de la investigación detallada y minuciosa de cada evento histórico y qué lo hace singular, único, pues cada evento tiene circunstancias específicas, únicas e irrepetibles, lo cual implica analizará los actores, los contextos social y cultural, así como las dinámicas involucradas que lo definen.</p>
  <p>Así la historia que se investiga y analiza a través de esta metodología, que se conoce como microhistoria, pues analiza a detalle cada caso en particular, lo cual proporciona una visión más rica, compleja y detallada que permite una comprensión más profunda de procesos históricos más amplios». (Ginzburg, Carlo (2010). El hilo y las huellas : lo verdadero, lo falso, lo ficticio Buenos Aires: Fondo de Cultura Económica).</p>
  </ul>
   <div class="mx-auto max-w-md">
 <?php
  renderImage('th2-u3-carloginzburg.webp','Carlo Ginsbrug, fundador de la microhistoria Italiana ', 'https://es.wikipedia.org/wiki/Carlo_Ginzburg#/media/Archivo:Carlo_Ginzburg_par_Claude_Truong-Ngoc_mars_2013.jpg','Wikimedia Commons.');
  ?>
 </div> 
 <div class="mx-auto max-w-md">
 <?php
  renderImage('th2-u3-luisgyg.webp',' Luis González y González.', 'https://colnal.mx/wp-content/uploads/2019/09/LUIS-GONZA%CC%81LEZ-Y-GONZA%CC%81LEZ.jpg ','Wikimedia Commons.');
  ?>
 </div>




</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
