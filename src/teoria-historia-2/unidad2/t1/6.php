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
  <h2>El historicismo, autores: Benedetto Croce</h2>
  <?php
      renderImage('th2-u2-benedetto.webp','Para Bededetto Croce toda historia es historia contemporánea,  presente, pues nos permite contestar preguntas sobre el presente. Por tal razón toda historia se debe someter a la crítica constante, desde el presente.', 'https://upload.wikimedia.org/wikipedia/commons/4/4c/Benedetto_Croce_01.jpg', 'Wikipedia');
  ?>
  </div>
  
  <p>Benedetto Croce (1866-1952) nació en Pescasseroli, Italia. Estudió en la universidad de Roma; fue senador y ministro de educación (1920-1921). Reflexiona sobre la historia y la filosofía de la historia en sus libros <i>Teoría e historia de la historia de la historiografía</i> (1912);<i> Lógica y Estética y La historia como hazaña de la libertad</i> (1938). <p>

  <p>Hacer historia es un proceso intelectual, es un acto de comprensión y método ligado a la realidad,  que ejemplifica con distintos aspectos, económico, estético o científico, que define como vida práctica. Nuestro autor lo presenta de la siguiente manera:</p>

   <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>Lo que constituye la historia puede indicarse así: es el acto de comprender y entender, inducido por los requerimientos de la vida práctica. Estos requerimientos no pueden satisfacerse recurriendo a la acción, a no ser que primero todos los fantasmas, dudas y sombras que a uno le persigan se hayan disipado merced al planteamiento y solución de un problema, es decir, por un acto de pensamiento. En la seriedad de algún requerimiento de la vida práctica estriba la condición necesaria para tal esfuerzo. […] el requerimiento de entender la situación de uno para que en ella puedan fundarse la inspiración, la acción y el buen vivir. Puede haber un requerimiento económico, el que le dé a cada cual el discernimiento de sus ventajas. Puede haber un requerimiento estético, como el de poner en claro la significación de una palabra, o una alusión, un estado de espíritu para entender y gozar plenamente un poema; o también un requerimiento intelectual, como el de resolver un problema científico, corrigiendo y amplificando la información acerca de sus términos, por falta de la cual permanecimos perplejos y dudosos » </p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Croce, La Historia..., p. 11)</footer>


  <p>Para Croce el conocimiento, sin ningún objetivo, no sirve de nada. El conocimiento tiene una finalidad, es para ser utilizado; por esta razón busca el conocimiento total de la historia, lo que implica asimilar todo, toda acción humana a la historia. El conocimiento de lo individual pasa por el reconocimiento de lo universal. Así es necesario conocer lo hechos con el fin de formar una conciencia de estos en la realidad histórica para comprender al hombre, por lo que, cuando se realiza una crítica histórica, un elemento a considerar es revisar si la obra leída tiene un motivo o es una narración sin sentido (Croce, La historia, p. 24).</p>

  <p>Croce se contrapone a la propuesta del positivismo de hacer de la historia una historia científica que busque la periodicidad de las acciones humanas y la comprobación científica de los hechos; hace una crítica a Hipólito Taine quien busca leyes en la historia que, sí son posibles en las ciencias naturales, pero no en el caso de la historia (Croce, La historia, p. 174).</p>

  <p>La consideración de que todo es historia, todo producto o acción humana no se puede conocer si no es en su devenir. Croce puntualiza en la historicidad de los acontecimientos lo que implica que es el centro de todo conocimiento. Para nuestro autor el historicismo es la ciencia de la historia por lo que «la afirmación de la vida y la realidad son historia y nada más que historia» (Croce. La historia, p. 53).</p>

  <p>El historiador no es un simple narrador de los hechos, su trabajo no se limita a la investigación y descripción de los hechos. Afirma que los hechos deben ser investigados y verificados, con el fin de construir una interpretación que permita tener una certeza del acontecimiento. Así es como se diferencia la historia de la crónica, separándola de lo anecdótico, de la invención literaria, de la biografía y de todas las formas que se pretende mostrar como histórico al presentar el dato sin explicación (Croce, La historia… p. 122-123).</p>

  <p>El trabajo histórico no es una distracción o la simple recopilación de fechas y datos, el conocimiento histórico permite tener bases para la toma de decisiones, esto es para la acción ética en la política:</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Hay que decir, pues, […] que el conocimiento histórico surge de la acción, o sea de la necesidad de esclarecer y determinar nuevamente los ideales de la acción oscurecidos y confusos, y que, al reflexionar en lo acaecido, hace posible la nueva determinación y dispone para la nueva acción»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Croce, La historia…, p. 163)</footer>
  
  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-conocimiento.webp','Para Croce el conocimiento, sin ningún objetivo, no sirve de nada. El conocimiento tiene una finalidad.  En este aspecto comparte la visión del conocimiento que se deriva del materialismo histórico, lo cual muestra la interacción que los autores muestran en su comprensión de la historia con otras corrientes y en este caso el fin de esta imagen nos muestra que la historia se aplica en la educación.
Esta obra ejemplifica esta idea. Es del autor ucraniano Alexander Nicolayevich Zelenky y muestra la importancia del estudio en la producción no sólo de saberes académicos, sino en la vida social en pleno. 
', 'https://es.wikipedia.org/wiki/Propaganda_en_la_Uni%C3%B3n_Sovi%C3%A9tica#/media/Archivo:%D0%A7%D1%82%D0%BE%D0%B1%D1%8B_%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5_%D0%B8%D0%BC%D0%B5%D1%82%D1%8C_%E2%80%94_%D0%BD%D0%B0%D0%B4%D0%BE_%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5_%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D1%8C._%D0%A7%D1%82%D0%BE%D0%B1%D1%8B_%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5_%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D1%8C_%E2%80%94_%D0%BD%D0%B0%D0%B4%D0%BE_%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5_%D0%B7%D0%BD%D0%B0%D1%82%D1%8C.jpg', 'Wikipedia');
  ?>
  </div>

  <p>No se puede condicionar los fenómenos sociales como sujetos de leyes universales, que se repiten no estarían pretendiendo el evitar repetir los errores cometidos en otras sociedades, sino se condiciona de manera mecánica la explicación de los acontecimientos, por lo que el libre albedrío del hombre y su lucha por la libertad quedarían excluidos (Croce. La historia, p.197-198).</p>

  <p>Coherente con su postura Croce considera que la acción política se da en la participación en un partido que impulse los ideales de la libertad, esto es un partido de corte liberal.</p>

  <p>El motor de la historia está determinado por fuerzas que influyen en las acciones humanas como la Naturaleza, Dios, La providencia, la economía, la búsqueda de libertad (Croce, La historia, p. 26).</p>

  <p>Toda historia es contemporánea ya que el historiador aprecia los hechos del pasado desde su perspectiva y relaciona los hechos con lo que le ocurre, con su vida. Así el historiador busca el conocimiento de los hechos del pasado para orientar su acción presente. Por lo que es importante que el historiador se coloque en el lugar del personaje histórico estudiado para sentir sus vivencias, con ello comprender, y explicar sus propósitos, así como sus acciones.</p>

  <p>A fin de conseguir la comprensión de los escritos históricos, es necesario que la historiografía cumpla con tener una motivación moral que pretenda encontrar la verdad en un pensamiento fundado en conceptos y categorías (Croce. La historia p. 146)</p>

  <p>La historiografía es un acto de conciencia que surge de una necesidad que invoca a la acción. para que «mejor surja el ideal de la libertad y la acción para conquistarla» (Croce, La historia, p. 50)</p>

  <p>La historiografía tiene por objetivo el conocer las acciones de los grandes hombres, que son llamados a comprender el pasado y el presente :</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«véasela en todos los tiempos, y no menos en los propicios que en los adversos, neta y robusta y consciente solo en los ánimos de unos pocos, así esos pocos sean después los únicos históricamente importantes, como solamente los pocos hablan en verdad los grandes filósofos, los grandes poetas […]»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Croce, La historia, p. 51)</footer>

    <p>El objetivo de la historia es la libertad en cualquiera de las esferas de la actividad humana, política, económica, de la civilización del arte o de la filosofía, de manera que la explicación de los acontecimientos históricos, de las transformaciones en la historia la encontramos en la libertad que permite realizar o expresar la historia:</p>

    <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«[…] la libertad es el principio que a todas las anima, sinónimo de actividad o espiritualidad, que no sería tal si no fuese perpetua creación de vida» […] «la libertad como forjadora eterna de la historia, como sujeto mismo de toda la historia.»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Croce. La historia… p. 41, p. 49)</footer>

    <p>Los grandes hombres, los importantes son los llamados a vivir en libertad, como en Grecia (Croce, p.226) o en el caso de Inglaterra que fue la educadora de la libertad en los pueblos sometidos a su dominio, o puestos bajo su influencia. (Croce p. 215) Así podemos explicar las transformaciones en la historia basados en el impulso que las sociedades dan a la búsqueda por conseguir la libertad.</p>

    <p>Las sociedades humanas han vivido en menor o mayor libertad, por lo que los hombres centran sus acciones en encontrar y recobrar la libertad, ya que el que existan periodos en los que existe la tiranía nos permite apreciar el alcance e importancia de nuestra libertad. Por lo que la libertad no se presenta a lo largo de la historia de manera perfecta. ” En éste, que es el mundo de la historia, la libertad no es nunca perfecta en abstracto, sino, a veces, tal como es concretamente, y hay que reconocerla y aceptarla en las condiciones dadas.” (Croce. La historia… p. 226)</p>

    <p>Por último, Croce considera define también al historicismo, más que como una corriente, como una forma de ver la historia, de plantear su estructura al no dividirla y apegada a la verdad; la historia es una ciencia, la ciencia que refleja la vida como condición básica para la existencia del ser humano y, por lo tanto unifica a toda la experiencia humana. De ahí deriva su definición del historicismo:</p>

    <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«“Historicismo” (la ciencia de la historia), en la acepción científica del término, es la afirmación de que la vida y la realidad son historia y nada más que historia. Correlativa con esta afirmación es la negación de la teoría que considera la realidad dividida en super-historia e historia, en un mundo de ideas o de valores, y en un bajo mundo que los refleja, o los ha reflejado hasta aquí, de modo fugaz e imperfecto, al que será conveniente imponerlos de una vez, haciendo que a la historia imperfecta o a la historia sin más suceda una realidad racional y perfecta»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Croce, la historia ..., p. 53.)</footer>


    <?php ob_start(); ?>
  <p>A continuación vamos a realizar un repaso con el fin de que recuerdes las características del historicismo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a3', "Características del historicismo", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>A continuación realizaremos la siguiente actividad El historicismo en México_ O’Gorman a fin de confirmar lo que aprendiste en esta lección:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a4', "El historicismo en México_O’Gorman", $ActividadContent);
  ?>

 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>