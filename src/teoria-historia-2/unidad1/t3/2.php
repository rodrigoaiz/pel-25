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

<h2> Leopold Von Ranke </h2>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-retrato_de_Leopold_von_Ranke.webp', 'Leopold von Ranke es el principal representante de la Escuela Científica Alemana.',
  'https://commons.wikimedia.org/wiki/File:1875_cropped_portrait_Leopold_von_Ranke.JPG','Wikimedia Commons.');
?>
</div>

<p>
  Nuestro autor nace en 1795 y muere en 1886. Es el ejemplo del historiador académico del siglo XIX. Su formación se inicia con conocimiento de la cultura 
  clásica, lee y traduce del latín y del griego; esta disposición dentro de la cultura clásica le permite traducir a autores como Tucídides y Dionisio de 
  Halicarnaso, lo que lo lleva a concebir la Historia como algo más que una acumulación de datos, sino que tiene un fin. Sus estudios los realiza en la 
  Universidad de Leipzig, en particular en filología clásica. En este periodo no se interesa en la historia por considerarla una mera acumulación de datos. 
</p>

<p>
    Su concepción de la historia se modifica al dar clases de conocimiento de la Historia en el <i>Friederich Gymnasium</i>, un bachillerato alemán y 
    ahí reafirma su interés por la historia. De acuerdo a sus propias palabras, su acercamiento a la historia, surge a través de la narrativa romántica de 
    Walter Scott, orientada a la Edad Media en obras como <i>Ivanhoe</i>, pues el novelista recrea el pasado, a diferencia de los historiadores que sólo 
    acumulaban datos.
</p>

<p>
  El trabajo para hacer historia ofreció dos vetas para Ranke: por un lado, se convence de la necesidad de comprender la historia como investigación: 
</p>

<p class="citation">
  <b>
   «Se ha dicho que la historia tiene la función de enjuiciar al pasado, de instruir al presente en beneficio del futuro: el presente ensayo no se 
   arroga tan alta función: mostrará simplemente, cómo ha sido en realidad» 
  </b> Ranke pueblos y estados en la historia moderna
</p>

<p>
    Vean que en este párrafo, el autor se deslinda de la visión de la historia clásica: no es ni maestra de la vida, ni tribunal del pasado, su 
    historia se basa en mostrar lo que ocurrió, por lo tanto se propone una historia con base en los documentos, la evidencia. Y, por otra parte, 
    el trabajo del historiador lo compara con el del científico. El estatuto de ciencia para nuestro autor es la reconstrucción del pasado y dentro 
    de éste, el historiador debe escribir la historia, nuevamente, «sin apartarse ni un ápice de la verdad». 
    <i>(Ranke pueblos y estados en la historia moderna).</i>
</p>

<p>
    A esta postura, en la cual se busca la verdad de un evento pasado a través de la documentación, el historiador no teoriza, sino que deja que 
    los documentos hablen por sí mismos, por lo cual se propone un estatuto científico a la historia. En el siguiente texto puedes encontrar las 
    referencias al método histórico.
</p>

<p class="citation">
  <b>«Descubrí por comparación que la verdad era más interesante y hermosa que la ficción. Me desvié de ésta y decidí evitar toda invención e 
    imaginación con mis trabajos y sujetarme a los hechos»</b> […] <b>«¿Qué puede haber más agradable y grato para el espíritu humano que penetrar 
    en la médula misma, en el más profundo secreto de los acontecimientos y observar en éste o en el otro pueblo cómo se sientan los fundamentos 
    de las cosas humanas, ¿cómo nacen, crecen y prosperan las fuerzas de la historia? Y no digamos, cuando se logra, poco a poco, intuir con segura 
    confianza en uno mismo o incluso llegar a conocer perfectamente, gracias a la sagacidad de la mirada, aguzada a fuerza de ver, hacia dónde marcha 
    la humanidad en cada una de sus épocas, a qué aspira, qué es lo que logra y alcanza en realidad. ¿No es esto, en cierto modo, una parte de la 
    sabiduría divina? En ella, precisamente, pretendemos penetrar con ayuda de la historia, y esta ambición es la que constituye el norte de las 
    aspiraciones de la ciencia histórica"» </b> Ranke <i>pueblos y estados en la historia moderna.</i>
</p>

<p class="citation">
  <b> <i> «Se ha dicho que la historia tiene por misión enjuiciar el pasado e instruir al presente en beneficio del futuro. Misión ambiciosa, en verdad, 
    que este ensayo nuestro no se arroga. Nuestra pretensión es más modesta: tratamos, simplemente, de exponer cómo ocurrieron, en realidad, las cosas. </i> <br>
    Ahora bien, ¿por qué  caminos ha sido posible explorar de nuevo todo esto? La base de esta obra, las fuentes de sus materiales han sido toda una serie de memorias, 
    diarios, cartas, memoriales de embajadores y relatos directos de testigos presenciales de los hechos historiados. Sólo hemos recorrido a otra clase de escritos en 
    los casos en que éstos aparecían basados directamente en aquellos testimonios o acreditaban, en una medida más o menos grande, un conocimiento original de los mismos. 
    Al pie de cada página se indica la obra de que se ha tomado algo, cuando ese es el caso. El método de investigación y los resultados críticos serán expuestos en otro 
    libro, que entregamos a las prensas a la par que éste. <br> El propósito y la materia determinan la forma. No es posible exigir de una historia ese desarrollo libre 
    que la teoría, por lo menos, busca en una obra poética, y ni siquiera estamos seguros de que nadie pueda creer fundadamente haber descubierto semejante libertad en 
    las obras de los maestros griegos y romanos. <br> No cabe duda de que para el historiador es ley suprema la exposición rigurosa de los hechos, por muy condicionados 
    y carentes de belleza que estos sean. Otra ley a que hemos creído de nuestro deber someternos ha sido el desarrollo de la unidad y de la trayectoria de los acontecimientos 
    […] Lo ha dicho Jacobi: la humanidad, que es, fundamentalmente, el tema sobre que versan nuestros estudios, la humanidad tal y como es, es siempre explicable o inexplicable: 
    esa humanidad formada por la vida de los individuos, de los linajes, de los pueblos, y cuyos derroteros traza a veces la mano de Dios que se levanta sobre ellos.» </b>

    (Ranke, “Historia de los pueblos latinos y germánicos de 1494 a 1535” en <i>Pueblos y estados en la historia moderna</i> p. 37-39)
</p>

<p> Y más adelante afirma como características de la historia:</p>

<p class="citation">
  <b> «En efecto, como la historia, por su misma naturaleza, se ve obligada a rechazar todo lo que sean invenciones de la fantasía o sombras fantasmales, para admitir solamente 
    lo absolutamente seguro y cierto, necesita tanto de la mesura como de la audacia de espíritu, el cual deberá, por una parte, investigar el detalle con el mayor cuidado y procurando 
    rehuir concienzudamente los errores, pero sin que, por otra parte, se disipe en la variedad multiforme de las cosas y pierda de vista la meta final, de la que jamás debe apartar el ojo.
    <br> Y, aunque este método veda rigurosamente tratar de abarcarlo todo de primera intención, ofrece al historiador, en cada lugar, gozo y deleite infinitos. ¿Qué puede haber más agradable 
    y más grato para el espíritu humano que penetrar en la médula misma, en el más profundo secreto de los acontecimientos y observar en este o en el otro pueblo cómo se sientan los fundamentos 
    de las cosas humanas, cómo nacen, crecen y prosperan las fuerzas de la historia? Y no digamos, cuando se logra, poco a poco, intuir con segura confianza en uno mismo o incluso llegar a 
    conocer perfectamente, gracias a la sagacidad de la mirada, aguzada a fuerza de ver, hacia dónde marcha la humanidad en cada una de sus épocas, a qué aspira, qué es lo que logra y alcanza en realidad» </b>
    (Ranke, <i> Pueblos y Estados en la historia moderna</i>, p. 51).
</p>

<p>
    Podemos ver que esta escuela busca hacer la historia por medio de fuentes; reconoce el papel de historiador y ofrece, al igual que el romanticismo, la idea de que éste 
    disfruta del proceso de hacer historia, siguiendo una serie de reglas para explicar su objeto de estudio inmediato.
</p>

<p>
    A continuación, te presentamos la siguiente actividad que tiene como objetivo reafirmar tus conocimientos sobre El método del historiador en Leopold von Ranke y su 
    concepción sobre el historiador y el trabajo histórico.
</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a1', "El método del historiador en Leopold von Ranke", $ActividadContent);
?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>