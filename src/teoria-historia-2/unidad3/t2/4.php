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
  <h2>NUEVOS ENFOQUES HISTORIA CULTURAL, PETER BURKE. </h2>
  <h3>Peter Burke</h3>
  <p>Historiador británico nacido en 1937. Estudió en Oxford y ha dictado cátedra en distintas universidades, tanto inglesas como europeas. Entre sus distinciones académicas recibió los doctorados Honoris Causa por parte de las universidades de Lud, Copenhague y Budapest. Su trayectoria intelectual lo acerca a la corriente historiográfica de Annales. Ha publicado cientos de artículos y treinta libros, entre los cuales destacan: El renacimiento italiano: cultura y sociedad en Italia, la cultura popular en la época moderna, formas de hacer historia, ¿qué es la historia cultural?, ¿qué es la historia del conocimiento?</p>
  <p>Veamos algunos textos que nos presentan la historia cultural.</p>
  <p>Como tal, se integra como una metodología que permite comparar enfoques frente a un hecho histórico, razón por la cual no busca sólo un desarrollo académico sino también una forma de la descolonización:</p>
  <ul>
  <p>«¿Por qué hay un contraste tan marcado en la actitud hacia el pasado en las diferentes culturas? Con frecuencia se dice que la historia la escriben los vencedores. También podría decirse que la olvidan los vencedores. Ellos pueden permitirse olvidar, mientras que los derrotados no pueden olvidar lo que ocurrió y están condenados a cavilar sobre ello, a revivirlo y a pensar en lo diferente que habría podido ser. Asimismo, este fenómeno podría explicarse en términos de sus raíces culturales. Cuando éstas se poseen, uno puede permitirse darlas por supuestas, pero cuando se pierden, se siente la necesidad de buscarlas. Los irlandeses y los polacos han sido desarraigados; sus países, divididos. No es extraño que les obsesione su pasado […] la relación entre lugar y memoria.»[Peter Burke, forma de la historia cultural p. 79]</p>
  <p>«Las disputas entre historiadores que presentan relatos opuestos del pasado a veces reflejan conflictos sociales más amplios y profundos. Un ejemplo obvio es el actual debate sobre la importancia de la historia desde abajo. […] La memoria oficial y la no oficial del pasado pueden diferir marcadamente y la segunda, que ha sido relativamente poco estudiada, en ocasiones representa una fuerza histórica por derecho propio: la «Antigua ley» de la Guerra de los Campesinos alemana de 1525, el 
  «<?php renderTooltip ('Yugo normando', 'El término se aplica a las formas de opresión feudal en Inglaterra, concretamente a las impuestas por Guillermo el Conquistador a sus vasallos y sus descendientes. El término se empleó durante la Revolución Inglesa del siglo XVII con fines de exaltar el nacionalismo.','bottom');?>» de la Revolución inglesa, etc. Sin invocar memorias colectivas de este tipo sería difícil explicar la geografía de la contestación y la protesta, el hecho de que algunas aldeas de Calabria, por ejemplo, toman parte en determinados movimientos de protesta siglo tras siglo, mientras que sus vecinas no». [Peter Burke, forma de la historia cultural p. 81]</p>
  </ul>
  <p>Por qué estudiar y escribir historia desde la perspectiva de la historia cultural</p>
  <ul>
  <p>«Aunque el pasado no cambie, la historia debe escribirse de nuevo en cada generación para que el pasado siga siendo inteligible en un presente cambiante. La historia cultural clásica fue escrita para y sobre las élites europeas. Sin embargo, actualmente, su ámbito es más amplio y diverso, social y geográficamente. En algunos países está asociado con el auge de los cursos multidisciplinares reunidos bajo el título general de «estudios culturales».</p>
  <p>La historia cultural clásica se centraba en un 
    <?php renderTooltip ('canon', 'Se entiende por canon, desde la perspectiva filosófica toda norma o modelo de conducta o doctrina, tal como lo propone Kant en su imperativo categórico. Tenemos así de un canon moral, estético, teológico. En ciencias sociales se considera que es una norma que sigue una escuela, corriente o metodología, aceptada como válida para realizar estudios, investigaciones y encuadrar objetos de estudio.','bottom');?> de grandes obras de la tradición europea, pero los historiadores culturales de fines del siglo XX trabajan en una época de 
    <?php renderTooltip ('descanonización.', 'Etimológicamente significa abolir un proceso de canonización, es decir la santificación de una persona. Sin embargo, en el contexto del texto de Burke, la descanonización significa poner en duda el significado de lo que estudiamos y analizamos cómo las formas de hacer historia.','bottom');?> La conocida crítica del llamado «canon» de grandes libros en Estados Unidos y las consiguientes «guerras culturales» sólo son parte de un movimiento mucho más amplio que ha recibido el nombre de «multiculturalismo». Los occidentales educados, así como los intelectuales del Tercer Mundo, cada vez se encuentran más incómodos con la idea de una sola «gran tradición» que monopolice la legitimidad cultural. Ya no es posible identificar la «cultura» con nuestras propias tradiciones.</p>
  <p>Vivimos en una época de crítica general, si no rechazo, de la llamada «gran narración» del desarrollo de la cultura europea —los griegos, los romanos, el Renacimiento, los descubrimientos, la revolución científica, la Ilustración, etc.—, una narración que puede utilizarse para legitimar las pretensiones de superioridad de las élites occidentales. Lo mismo ocurre con la idea de un canon literario, intelectual o artístico, o, al menos, la selección de textos e imágenes que solía presentarse como «los» Grandes Libros, Clásicos o Antiguos Maestros. En la actualidad, el proceso de «canonización» y los conflictos sociales y políticos subyacentes son objeto de estudio por parte de los historiadores culturales, pero más por la luz que arrojan sobre las ideas y supuestos de los canonizadores que sobre los canonizados […] ¿Qué hacer? Mi opinión sobre un tema respecto al cual el consenso parece lejano en el mejor de los casos e imposible en el peor es que no deberíamos abandonar el estudio del Renacimiento y otros movimientos de la cultura «erudita» de Occidente, que aún tienen mucho que ofrecer a mucha gente, pese a la creciente distancia cultural entre los supuestos e ideas de finales del siglo XX y los de las audiencias originales. De hecho, en mi opinión, los cursos de «estudios culturales» se verían muy enriquecidos si dejaran margen para este tipo de movimientos junto a la cultura popular contemporánea. Por otra parte, los historiadores deberían escribir sobre estos movimientos de una forma que reconociera el valor de otras tradiciones culturales en vez de considerarlas barbarie o ausencia de cultura» .» (Peter Burke, forma de la historia cultural. p 239-240)</p>
  </ul>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-escatenas.webp','La escuela de Atenas de Rafael Sanzio.', 'https://es.wikipedia.org/wiki/Alta_cultura#/media/Archivo:La_scuola_di_Atene.jpg','Wikimedia Commons.');
  ?>
  </div>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-peterburke.webp','Peter Burke', 'https://es.wikipedia.org/wiki/Peter_Burke#/media/Archivo:Peter_Burke.jpg','Wikimedia Commons.');
  ?>
  </div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
