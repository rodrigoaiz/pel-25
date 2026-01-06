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

<h2> Los Autores: Auguste Comte  </h2>

<p>
  El iniciador de esta corriente es Auguste Comte, 1789-1857. Fue un escritor, filósofo y ensayista, el cual, al igual que su generación, se encuentra 
  marcado por el proceso revolucionario en Francia. Después de estar en la Escuela Politécnica de París y en la Universidad de Montpellier, es secretario 
  de Henri de Saint-Simon, el socialista utópico, es un periodo en el cual consolida su idea sobre el desarrollo de las sociedades que se expresó en su obra.
  <br> Su posición dentro del conocimiento se basa en lo real, es decir en aquello que es cierto, es decir que fue comprobado; no acepta ideas a priori, sino 
  que se conoce a partir de la experiencia. Esta visión concibe el desarrollo de la sociedad en continuo progreso, y distingue en su visión tres estados, los 
  cuales muestra en su libro <i>Discurso sobre el espíritu positivo</i>.
</p>

<p class="citation">
   <b>«Capítulo I <br> Ley de la evolución intelectual de la humanidad o ley de los tres estados <br> 2.—Según esta doctrina fundamental, todas nuestras especulaciones, 
   cualesquiera, están sujetas inevitablemente, sea en el individuo, sea en la especie, a pasar sucesivamente por tres estados teóricos distintos, que las denominaciones 
   habituales de teológico, metafísico y positivo podrán calificar aquí́ suficientemente, para aquellos, al menos, que hayan comprendido bien su verdadero sentido general. 
   Aunque, desde luego, indispensable en todos aspectos, el primer estado debe considerarse siempre, desde ahora, como provisional y preparatorio; el segundo, que no 
   constituye en realidad más que una modificación disolvente de aquél no supone nunca más que un simple destino transitorio, a fin de conducir gradualmente al tercero; 
   en éste, el único plenamente normal, es en el que consiste, en todos los géneros, el régimen definitivo de la razón humana.»</b> Comte, <i>Discurso sobre el Espíritu Positivo</i>
</p>

<p>
    En cada uno de los estados propuestos para el desarrollo intelectual hay en el fondo una idea de progreso: toda sociedad pasa de los estados más atrasados e irracionales a los 
    más racionales, es decir es un ascenso de los estados inferiores de desarrollo social a lo más evolucionados, siempre en línea ascendente: veamos como ejemplo el primer estado del 
    desarrollo social de la humanidad. Para orientar tu lectura, te indicaremos con color <b><span style="color: #16c93d;">verde</span></b> el cambio de cada etapa.
</p>

<?php
  $accordionItems1 = [
    [
      'title' => '<b>Primer despliegue</b>',
      'content' => '<p>En su <b><span style="color: #16c93d;">primer despliegue</span></b>, ecesariamente teológico, todas nuestras especulaciones muestran 
      espontáneamente una predilección característica por las cuestiones más insolubles, por los temas más radicalmente inaccesibles a toda investigación decisiva. 
      Por un contraste que, en nuestros días, debe parecer al pronto inexplicable, pero que, en el fondo, está en plena armonía con la verdadera situación inicial 
      de nuestra inteligencia, en una época en que el espíritu humano está aún por bajo de los problemas científicos más sencillos, busca ávidamente, y de un modo 
      casi exclusivo, el origen de todas las cosas, las <i>causas</i> esenciales, sea primeras, sea finales, de los diversos fenómenos que le extrañan, y su modo 
      fundamental de producción; en una palabra, los conocimientos absolutos […] La adoración de los astros caracteriza el grado más alto de esta primera fase teológica, 
      que, al principio, apenas difiere del estado mental en que se detienen los animales superiores. Aunque esta primera forma de la filosofía teológica se encuentra 
      con evidencia en la historia intelectual de todas nuestras sociedades, no domina directamente hoy más que en la menos numerosa de las tres grandes razas que 
      componen nuestra especie […]</p>'
    ],
    [
      'title' => '<b>Segunda fase esencial</b>',
      'content' => '<p>En su <b><span style="color: #16c93d;">segunda fase esencial</span></b> , que constituye el verdadero <i>politeísmo</i>, confundido con excesiva 
      frecuencia por los modernos con el estado precedente, el espíritu teológico representa netamente la libre preponderancia especulativa de la imaginación, mientras 
      que hasta entonces habían prevalecido sobre todo el instinto y el sentimiento en las teorías humanas. La filosofía inicial sufre aquí la más profunda transformación 
      que pueda afectar al conjunto de su destino real, en el hecho de que la vida es por fin retirada de los objetos materiales para ser misteriosamente transportada a 
      diversos seres ficticios, habitualmente invisibles, cuya activa y continua intervención se convierte desde ahora en la fuente directa de todos los fenómenos exteriores 
      e incluso, más tarde, de los fenómenos humanos. Durante esta fase característica, mal apreciada hoy, es donde hay que estudiar principalmente el espíritu teológico, 
      que se desenvuelve en ella con una plenitud y una homogeneidad ulteriormente imposible: ese tiempo es, en todos aspectos, el de su mayor ascendiente, a la vez mental 
      y social. La mayor parte de nuestra especie no ha salido todavía de tal estado, que persiste hoy en la más numerosa de las tres razas humanas, sin contar lo más 
      escogido de la raza negra y la parte menos adelantada de la raza blanca. […]</p>'
    ],
    [
      'title' => '<b>Tercera fase teológica</b>',
      'content' => '<p>En su <b><span style="color: #16c93d;">tercera fase teológica</span></b>, el <i>monoteísmo</i> propiamente dicho, comienza la inevitable decadencia 
      de la filosofía inicial, que, conservando mucho tiempo una gran influencia social -sin embargo, más que real, aparente- , sufre desde entonces un rápido descrecimiento 
      intelectual, por una consecuencia espontánea de esta simplificación característica, en que la razón viene a restringir cada vez más el dominio anterior de la imaginación, 
      dejando desarrollar gradualmente el sentimiento universal, hasta entonces casi insignificante, de la sujeción necesaria de todos los fenómenos naturales a leyes invariables.
      Auguste Comte, <i>Discurso sobre el Espíritu Positivo</i>, p. 1-3.</p> <p>Puede apreciarse en este fragmento, hay un sentido cambio en ascenso. El propio autor comenta 
      en esta obra lo siguiente: <br> <b>«Aunque esta primera forma de la filosofía teológica se encuentra con evidencia en la historia intelectual de todas nuestras sociedades, 
      no domina directamente hoy más que en la menos numerosa de las tres grandes razas que componen nuestra especie »</b></p>'
    ]
  ];
renderAccordion($accordionItems1, 'primero-');?>

<br>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-retrato_de_Auguste_Comte.webp', 'Augusto Comte, fundador del positivismo','https://ast.wikipedia.org/wiki/Auguste_Comte#/media/Ficheru:Portrait_dAuguste_Comte_(maison_dA._Comte,_Paris)_(2424895050).jpg',
  'Wikipedia Commons');?>
</div>

<p>
 Hasta aquí, revisaste distintas corrientes historiográficas del siglo XIX y leíste algunos de los textos representativos del Romanticismo, la Escuela 
 Científica Alemana, el Materialismo Histórico y el Positivismo.  A pesar de sus diferencias, todas tienen un elemento en común, en particular en su metodología, 
 que es el uso y manejo de fuentes para la elaboración de sus trabajos. Con el fin de reafirmar lo aprendido participa en el foro <b>historiografía del siglo XIX</b>.
</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>