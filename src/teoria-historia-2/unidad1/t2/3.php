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

<h2> Jules Michelet </h2>

<h3> Jules Michelet </h3>

<p>
  <?php renderTooltip('Jules Michelet','Michelet fue el punto de unión de la crítica científica y la imaginación poética» Vicente Blasco 
  Ibáñez, traductor de la historia de la revolución francesa, tomo I, p. XXXIII.'); ?>.
  Fue un historiador francés que podemos ubicar dentro del periodo romántico nacionalista. De familia de impresores, su orientación 
  política es liberal y, al igual que a su generación, el impacto de la Revolución, aunado a su formación como lector, le permitieron 
  observar los cambios ocurridos entre 1815 y 1871 en Francia, lo cual le permitió una formación privilegiada como historiador. Participó 
  en las revoluciones de 1830 y 1848. Perteneció al Colegio de Francia y se incorpora a los Archivos Nacionales de Francia, donde estudia 
  textos medievales; pierde su empleo por razones políticas al llegar al poder Napoleón III y el segundo Imperio. Su contacto con los 
  archivos le permite afirmar que para conocer el pasado se requiere de conocer «los manuscritos de nuestras bibliotecas, los documentos 
  de nuestros archivos». (Corcuera. 259).
</p>

<p>
Como historiador, su trabajo continuo abarca desde 1825 hasta su muerte en 1874. Su visión de la historia la propone en el Prólogo a su 
Historia de Francia:
</p>

<p class="citation"><b>
   «Francia tenía unos <?php renderTooltip('anales','Es una crónica anual. En historia, encontramos, por ejemplo, los anales que se escribían 
   en la época romana eran parte de la documentación oficial. Los anales se conservan hasta nuestros días y, en algunos casos, son reportes 
   de actividades de organizaciones civiles, instituciones oficiales o institutos de investigación.'); ?>,
   pero no una historia. Hombres eminentes la habían estudiado sobre todo desde el punto de vista político. Nadie había penetrado en el 
   infinito detalle de los diversos desarrollos de su actividad: religiosa, económica, artística, etc. Nadie todavía la había abrazado con 
   la mirada, en la unidad viva de los elementos naturales y geográficos que la han constituido. Yo, el primero, la vi como un alma y una 
   persona» (Corcuera p. 276)
</b>

<p>
    Tuvo una gran producción historiográfica, dentro de la que destacan sus obras monumentales: Historia de Francia en 6 tomos, escrita entre 
    1833 y 1844; Historia de la Revolución Francesa en 7 tomos, escrita entre 1847 y 1853; así como otras obras de temas concretos, que nos 
    permiten comprender el desarrollo de la historia nacionalista y romántica: el mar, 1861, la bruja, 1862; el pueblo, 1846; el amor, 1858, 
    por sólo citar algunas de sus obras. Sus obras temáticas adelantan lo que en el siglo XX, con otras metodologías, se conocerá como la 
    historia cultural
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Jules_Michelet_par_Thomas_Couture.webp', 'Jules Michelet, iniciador del romanticismo en Historia en Francia', 
  'https://es.wikipedia.org/wiki/Jules_Michelet#/media/Archivo:Jules_Michelet_par_Thomas_Couture.jpg', 'Wikimedia Commons.');
?>
</div>

<h3> Temas que aparecen en su visión de la historia </h3>

<p>
    Uno de los temas que el autor trabaja es el
    <?php renderTooltip('pueblo','La palabra pueblo puede tener distintos significados, pero como la emplearon los autores del siglo XIX 
    implicaba que una comunidad se identificará a partir de un territorio, cultura, tradiciones e historia común. El concepto de pueblo 
    se desarrolla a partir de las ideas de la Ilustración y el liberalismo.'); ?>.
    Michelet entiende que el pueblo es quien hace la historia y, por su contexto, lo compara con un matrimonio: 
    <b> «EI campesino desposó a Francia en bodas legítimas; ella es su esposa para siempre; él es uno con ella. Para el obrero es su 
        bella amante; no tiene nada, pero tiene a Francia, su noble pasado y su gloria. Libre de ideas locales, adora su gran unidad. 
        Tiene que ser muy miserable y estar muy esclavizado por el hambre y el trabajo, para que este sentimiento se debilite en él; 
        por lo demás, nunca se extingue» 
     </b>    
   (Corcuera, p. 264; buscar cita en el pueblo versión FCE).
</p>

<p>
    El pueblo es para nuestro autor quien desarrolla la historia, opinión que compartirá con Karl Marx, y que sólo puede efectuar en unión 
    de la Patria francesa, Mariane, como alegoría de la nación. Aquí podemos ver cómo se une el nacionalismo con el romanticismo como una 
    explicación de la historia. Asimismo, en el texto que hemos citado, el autor se identifica como parte del pueblo.
</p>

<p>
    Sobre su método, esta obra ejemplifica el contexto del
    <?php renderTooltip('romanticismo','Movimiento cultural iniciado a fines del siglo XVIII, que se presenta como una reacción frente al 
    racionalismo excesivo de la Ilustración y reconoce la importancia del sentimiento para las acciones del ser humano. Durante la primera 
    mitad del siglo XIX, en historiografía, el romanticismo se expresa en dos corrientes de interpretación: el liberalismo y el nacionalismo.'); ?>
    al incluir, dentro de los estudios de historia la pasión y el sentimiento:
</p>

<p class="citation"><b>
   «Este libro es más que un libro: es yo mismo. Es yo y es vos, amigo mío; me atrevo a decirlo. Lo habéis observado con razón: nuestros pensamientos, 
   comunicándolos o no, concuerdan siempre. Vivimos de un mismo corazón… ¡Bella armonía que podría sorprender!» </b> y junto con esta visión romántica, 
   también aparece el nacionalismo: <b> «¿Pero acaso no es natural? Toda la diversidad de nuestros trabajos germinó desde una misma raíz viva: el sentimiento 
    de la Francia y la idea de la Patria. Recibid pues este libro del Pueblo porque él es vos y él es yo. Por vuestros orígenes militares y por el mío, 
    obrero industrial, representamos, no menos que otros quizá, las dos caras modernas del pueblo, y su reciente advenimiento». </b> (Michelet, El pueblo, p. 7).
</p>

<p>
    En estos fragmentos se encuentra la visión del nacionalismo romántico: lo que nos da sentido, e identifica a pesar de lo diverso que podemos ser, es un 
    sentimiento que nos identifica como parte de Francia y de ahí, del sentimiento, pasamos a la razón: la idea de la Patria.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-invasión_de_la_Asamblea_del_20_junio_1792.webp', 'El concepto de pueblo se desarrolla a partir de la Revolución Francesa y se presentará en las 
  teorías historiográficas del siglo XIX, en la escena se ve la invasión a la asamblea del 20 de junio de 1792, el último intento de convencer al rey Luis XVI 
  de formar una monarquía constitucional.', 
  'https://es.m.wikipedia.org/wiki/Archivo:Invasion_of_the_Assembly._20_june_1792.png', 'Wikimedia Commons.');
?>
</div>

<p>
    Realiza la actividad <b> Lectura sobre el romanticismo </b> para reforzar los conocimientos que has adquirido.
</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t2a1', "Lectura sobre el Romanticismo", $ActividadContent);
?>

<h3> El método de la historia: </h3>

<p>
    Michelet sabe el valor de los documentos para fundamentar sus investigaciones, sin embargo, reconoce que existe un elemento más: la experiencia 
    del historiador al investigar sus temas. Así, al preparar su libro sobre el pueblo, fruto de una investigación de más de diez años, en la cual 
    consultó no sólo archivos, dice:
</p>

<p class="citation"><b>
  «Mis diversos estudios de historia me revelaron hechos del mayor interés, que los historiadores callan; por ejemplo, las etapas y las posibilidades 
  de la pequeña propiedad antes de la Revolución. Mi investigación en vivo me enseñó igualmente muchas cosas que no figuran en absoluto en las estadísticas […] 
  Este ejemplo no carece de utilidad para mostrar hasta dónde los documentos recogidos en las estadísticas y otras obras de economía, aun suponiendo que fueran 
  exactos, son insuficientes para comprender lo que es el pueblo, porque ofrecen resultados parciales y artificiales, enfocados desde una perspectiva estrecha 
  que se presta a interpretaciones equivocadas […] </b>
</p>

<p>
    Pero no son sólo los documentos, sino que el autor busca la experiencia vital de los hombres, misma que se expresa en la historia a partir de su motor: 
    el motor de la historia es la libertad:
</p>

<p class="citation"><b>
    «La historia responderá aquí, con tanta fuerza como la lógica. Fue en el primer momento de la Revolución, en el momento en que proclamaba los 
    <?php renderTooltip('derechos del individuo','En 1789, la Asamblea Nacional promulgó los Derechos del Hombre y del Ciudadano, entre los cuales 
    se encuentran los siguientes: libertad, la propiedad, la seguridad y la resistencia a la opresión.'); ?>,
    fue entonces cuando el alma de Francia, lejos de encogerse, se extendió, abrazó al mundo entero en un pensamiento solidario: entonces ofreció 
    la paz. a todos, y desea participar con todo su tesoro, -
    <?php renderTooltip('libertad','El concepto de libertad en la historia moderna se desarrolla por John Locke y por autores de la Ilustración 
    Francesa. La libertad se considera un derecho de todo ser humano por nacimiento.'); ?>.» 
</b> </p>

<p>
    El sujeto de su historia, en sus diversos textos es un sujeto colectivo, el cual se encarna en su expresión: sea en sus estudios sobre la bruja 
    en la edad media; sea en su reflexión sobre el mar, o su ensayo sobre el amor; es más claro en el Pueblo y en su Historia de Francia, pues este 
    sujeto colectivo es la expresión del nacionalismo: es la nación francesa.
</p>

<p>
    Para reafirmar lo visto en esta primera parte de la lección 2, te presentamos el siguiente ejercicio sobre el Romanticismo para que revises y 
    repases el tema cómo se conforma una visión de la historia a partir del romanticismo.
</p>

<p> Como primer paso, lee el texto sobre 
  <a href="https://drive.google.com/file/d/1ogvZHiVs0ctNvmE0uPUabiEOSiJ8aFY3/view?usp=sharing" target="_blank" rel="noopener noreferrer">
    La historiografía del romanticismo</a>.
</p>

<p>
    Elabora la actividad <b> La historiografía del romanticismo en Jules Michelet </b> que te permitirá exponer las características de la historiografía 
    del Romanticismo y cómo se expresan en el trabajo de Jules Michelet a través de un ensayo.
</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t2a2', "La historiografía del romanticismo en Jules Michelet", $ActividadContent);
?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>