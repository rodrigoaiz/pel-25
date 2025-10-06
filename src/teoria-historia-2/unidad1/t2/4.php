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

<h2> El Liberalismo </h2>

<h3> Introducción: </h3>

<p>
  Un periodo histórico tiene diferentes formas de entender el mundo y la realidad. Así, encontramos que coexisten en un mismo tiempo y 
  espacio histórico varias visiones del mundo, mismas que se expresan como teorías políticas, sociales, económicas o artísticas; mujeres 
  y hombres de una misma época, sea en este caso la primera mitad del siglo XIX, pueden tener intereses artísticos que los vinculan al 
  romanticismo en literatura o música; al mismo tiempo sentirse identificados con su nación y tener también una forma de pensar política 
  que los puede acercar al pensamiento conservador o liberal. 
</p>

<p>
  De igual forma, coexisten concepciones sobre qué es la Historia y cuáles son sus métodos, objeto de estudio y los sujetos que la forman. 
  En este apartado veremos la visión liberal de la Historia.
</p>

<h3> Orígenes del pensamiento liberal. </h3>

<p>
    Si bien algunos autores ubican el origen de las ideas de libertad individual y/o libre comercio desde el Renacimiento o, aún antes, 
    desde la Grecia clásica, la concepción liberal moderna la podemos ubicar desde el siglo XVIII tanto en Gran Bretaña como en Francia 
    donde se desarrollan las principales ideas de esta corriente; en la primera, las ideas de libertad se desarrollan con base en los 
    antecedentes históricos, los derechos de libertad individual consagrados en la Carta Magna Libertatum, conocida como Carta Magna, 
    firmada por el rey en el siglo XIII. En Francia el concepto de libertad se forma como un concepto a partir de la reflexión filosófica. 
    En ambos casos, las ideas se combinaron y expresaron en teorías tanto económicas, como políticas y sociales que influyeron en los 
    acontecimientos de la época.
</p>

<p>
    Los dos grandes movimientos políticos revolucionarios del siglo XVIII toman como base también las ideas liberales como parte de su programa político: 
    la revolución de independencia de los Estados Unidos y la Revolución Francesa.
</p>

<p>
    También se debe englobar dentro de estos antecedentes, la revolución industrial inglesa, que ayudará a concretar las ideas liberales en el campo económico.
</p>

<h3> Principales ideas que sustentan al liberalismo </h3>

<p> 
    Dentro de la concepción liberal, existen tres conceptos que se concretan a partir de las ideas de John Locke, expresadas en su obra <i> Ensayos sobre la Ley natural </i>, 
    escrito entre 1664 y 1665: la vida, la libertad y la propiedad privada. La forma de llegar a estos conceptos es la vía de la racionalidad, con lo cual fundamenta la idea 
    de libertad, misma que se conoce por medio de la razón y tiene consecuencias en la ética y compromiso con la sociedad.
</p>

<p>
    Dentro del ámbito económico tenemos la obra de Adam Smith, quien se considera el padre del liberalismo económico. Sus trabajos contribuyen a definir a la economía moderna, 
    acorde con el desarrollo de la revolución industrial y propone como la base de la riqueza de las naciones la división del trabajo y la libre competencia. Asimismo, considera 
    que la función del Estado es proporcionar a la sociedad de educación, especialmente de las clases trabajadoras, como una función del Estado. Su visión se basa en la no intervención 
    de éste y dejar que la economía se regule a partir de la 
    <?php renderTooltip('mano invisible del mercado','El economista inglés Adam Smith desarrolla esta metáfora para explicar el papel del mercado como regulador de la economía en el 
    sistema capitalista, pues se logrará el beneficio social pues el papel del mercado es básico por la regulación de las leyes de la oferta y demanda.');?>.
</p>

<p class="citation">
    En La <i> riqueza de las naciones </i>, en su libro III, el autor establece una relación entre el conocimiento de la historia y la comprensión de la riqueza de un país. Así, tomando 
    como ejemplo a Inglaterra, después de la Restauración del siglo XVII, al examinar el papel del Estado y sus
    <?php renderTooltip('exacciones','Son todos los ingresos que un Estado soberano obtiene para su funcionamiento, tal como los impuestos, pago de multas, prestaciones o deudas.');?> 
    frente al
    <?php renderTooltip('capital','Se entiende como el conjunto de bienes, recursos y valores que son necesarios para la producción y generar un beneficio económico. Este concepto se 
    desarrolla en los economistas ingleses de los siglos XVIII y XIX como Adam Smith y David Ricardo. Se determina su valor a partir del trabajo invertido y los costos de producción. 
    Será el concepto básico del sistema capitalista.');?> como producto afirma:
    <b>
        «Frente a todas las exacciones del Estado, este capital ha sido silenciosa y paulatinamente acumulado por la frugalidad privada y el buen comportamiento de los individuos por su 
        esfuerzo universal, continuo e ininterrumpido en mejorar su propia condición. Este esfuerzo protegido por la ley y que gracias a la libertad se ha ejercitado de la manera más 
        provechosa, es lo que ha sostenido el desarrollo de Inglaterra hacia la riqueza y el progreso en casi todos los tiempos pasados y, es de esperar que lo siga haciendo al futuro»
    </b>
    (Adam Smith la riqueza de las naciones p. 444).
</p>

<p>
    Tenemos así que el pensamiento liberal, pese a la diversidad de enfoques y autores, considera como centrales los siguientes principios: el papel preponderante del individuo frente a 
    la colectividad; un elemento importante dentro del esquema del liberalismo es la reducción del Estado y la autorregulación económica dentro del mercado. En este sentido se retoma el 
    lema de los economistas 
    <?php renderTooltip('fisiócratas','Son los economistas que consideran que la economía se regula de manera natural, por sus propias leyes sin la intervención del Estado. Esta escuela 
    de pensamiento económico se desarrolla en el siglo XVIII, creada por François Quesnay.');?>, 
    «<b>laissez faire, laissez passer</b>», que significa dejar hacer, dejar pasar, como el elemento del libre mercado, pero más allá de su contexto económico implicaba la libertad de 
    comercio, de ahí se une con las ideas de la Ilustración francesa hacia las libertades individuales.
</p>

<p>
    El contexto económico, junto con el contexto político marca también una concepción política y filosófica, en la cual se oponen al modelo monárquico, abonarán por principios 
    democráticos para la organización de la sociedad y que se considere como derechos humanos la libertad, la vida y la propiedad
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-la_Marsellesa_arco_del_triunfo_París.webp', 'El concepto de libertad se desarrolla a partir del siglo XVIII. En París, el Arco del Triunfo tiene en uno de sus 
  grupos escultóricos una alegoría de la Marsellesa, el himno francés, surgido en la revolución de 1789. El ángel que dirige al pueblo es una alegoría de la libertad.', 
  'https://es.wikipedia.org/wiki/Arco_de_Triunfo_de_París#/media/Archivo:Paris_July_2011-16a.jpg','Wikimedia Commons.');
?>
</div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>