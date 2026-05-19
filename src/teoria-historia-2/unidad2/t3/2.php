<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tooltip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El materialismo histórico fuera de la Unión Soviética: La escuela de Frankfurt</h2>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-sozialforschung.webp','Después de la primera guerra mundial, durante el gobierno de la República de Weimar, en el Instituto de Investigaciones Sociales de la Universidad Goethe de Frankfurt, se reúne un grupo de académicos, quienes integran sus trabajos a partir del examen de concepto el y categorías del psicoanálisis y el materialismo histórico; desarrollarán una metodología que se conoce como teoría crítica con influencia en la metodología marxista. La imagen nos muestra el edificio de dicho instituto','https://upload.wikimedia.org/wikipedia/commons/3/3a/Ffm-institut-fuer-sozialforschung001.jpg','wikimedia');
  ?>
  </div>

  <p>Algunos de los teóricos marxistas que trabajan en el periodo, de finales de  la primera guerra mundial hasta el final de la segunda guerra mundial, dejaron bases para el desarrollo de la historiografía marxista, cuando empezó a tener mayor impacto como una consecuencia del proceso de guerra fría. Autores de diferentes partes de Europa, como Theodor Adorno y Herbert Marcuse en la zona de habla alemana o Antonio Gramsci, en Italia, especialmente con sus <i>Cuadernos desde la cárcel</i>. Presentaron  argumentos para la aplicación de las ideas marxistas en los estudios de la sociedad y las humanidades.</p>

  <p>En Alemania, al finalizar la primera guerra mundial, hay interés por los estudios sobre el marxismo, especialmente con el triunfo de la Revolución Rusa y, a la muerte, de Lenin esta corriente responde al marxismo dogmático de la Unión Soviética. Ésta escuela reunió a historiadores, economistas, sociólogos, filósofos, psicólogos y politólogos, como Alan Grünberg, Max Horkheimer, Friedrich Pollock, Karl August Wittfogel, Franz Borkenau, Leo Lowenthal, Walter Benjamín, Siegfried Krakauer y Theodor Adorno. Erich Fromm y Herbert Marcuse entre otros.</p>

  <p>Los seguidores de esta corriente difundieron sus trabajos a través de la <i>Revista de Investigación Social (Zeitschrift für Sozialforschung)</i>, en la cual mostraban una tendencia a retomar el proyecto marxista como un elemento para la comprensión de la sociedad en su totalidad.</p>

  <p>Con el ascenso del nazismo en Alemania el Instituto de Investigaciones Sociales de la Universidad de Frankfurt fue cerrado por el gobierno que vio a sus académicos como hostiles al régimen acusándolos de marxistas y judíos. Los escritores tuvieron que refugiarse en distintas ciudades: Ginebra, París, Londres y Nueva York desde dónde difundieron sus posturas sobre los acontecimientos de la Europa del periodo entreguerras (1918-1939). En estos autores destaca su búsqueda por una visión crítica de los acontecimientos sociales, contraria a la propuesta emanada de la Rusia soviética, a la que consideraron como <b>marxismo vulgar</b>, además cuestionaron el desmedido énfasis en los temas económicos del marxismo oficial soviético que dejaba de lado los temas de la superestructura. Reivindicaron el uso del método dialéctico para explicar su visión del pasado como una forma de entender los acontecimientos del presente; consideraron que la base del conocimiento estaba en la reflexión de los acontecimientos del presente que implicaba tomar postura frente a ellos en el sentido de establecer un cambio de la sociedad (Pastor, <i>Marxismo</i>, p. 27-28).</p>

  <p>Tras la derrota de los movimientos obreros en Alemania en el periodo de 1922 a 1933 cuestionan la aplicación de las ideas de Marx, de manera que buscan un acercamiento actualizado a las condiciones del mundo del periodo de los años veinte y hasta los cuarenta del siglo XX. Por lo que proponen una Teoría Crítica de la sociedad, en la que las ideas de Marx son apoyadas con las de la cultura y el psicoanálisis (Regalado, <i>Historiografía</i>, p. 241).</p>

  <p>Entre los intereses de los integrantes de esta escuela están la historia del arte, estudios sobre el movimiento obrero y las rebeliones campesinas. Se apoyaron en áreas de conocimiento como el psicoanálisis, además de la sociología, así como en sus métodos como psicoanálisis, las entrevistas o el uso de estadísticas que llevaran a explicar problemas contemporáneos como el fascismo, el nazismo. Están interesados en los fenómenos como la influencia de la cultura de masas, además del impacto de los medios de comunicación en la sociedad (Pastor, <i>Marxismo</i>, p. 29).</p>

  <p>Un autor que teorizó sobre la historia y al mismo tiempo entró en polémica con el marxismo de su tiempo fue Walter Benjamin (1892-1940). Intelectual y esritor de origen judío alemán, si bien no se integra plenamente a la Escuela de Frankfut, sus ideas coincíden con las de este proyecto, del cual, varios de sus integrantes, como Teodoro Adorno y Max Horkheimer reconocen su obra y valor intelectual, dentro de esta corriente. Uno de sus últimos textos es <i>Tesis sobre la filosofía de la historia</i>, obra escrita en forma de tesis, es decir ideas centrales para una argumentación, donde plasma varias de sus ideas relativas a nuestra disciplina. Veamos, en la siguiente cita, cómo concibe a la historia en cuanto a la historia como construcción, no como descubrimiento y el papel del tiempo, como un tiempo social concreto.</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p><b>Tesis VI</b>: Articular históricamente el pasado no significa conocerlo “tal como verdaderamente fue”. Significa apoderarse de un recuerdo tal como éste relumbra en un instante de peligro. De lo que se trata para el materialismo histórico es de atrapar una imagen del pasado tal como ésta se le enfoca de repente al sujeto histórico en el instante del peligro. […] <b>Tesis XIV</b>: La historia es objeto de una construcción cuyo lugar no es el tiempo homogéneo y vacío, sino el que está lleno de “tiempo del ahora”. Así, para Robespierre, la antigua Roma era un pasado cargado de “tiempo del ahora”, que él hacía saltar del continuum de la historia. La Revolución Francesa se entendía a sí misma como un retorno de Roma. Citaba a la antigua Roma tal como la moda a veces cita a un atuendo de otros tiempos.</p>

    <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-Benjamin.webp','Uno de los autores que más reflexionó sobre la historia es Walter Benjamin, quie n propone en su última obra, Tesis sobre la Historia, una serie de reflexiones sobre la metodología de la historia marxista, independiente del modelo soviético.','https://commons.wikimedia.org/wiki/Category:Walter_Benjamin#/media/File:Walter_Benjamin_vers_1928.jpg','wikimedia');
  ?>
  </div>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Benjamin, <i>Tesis</i>..., p.21 y 29</footer>

    <p>Contemporáneo de la escuela de Frankfurt Antonio Gramsci en Italia, realizaba una crítica al sistema, así como a la visión acrítica de la explicación histórica.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>