<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Tooltip.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El materialismo histórico fuera de la Unión Soviética: Historia cuantitativa</h2>

  <div class="mx-auto max-w-md">
  <?php
      renderImage('th2-u2-vilar.webp','Pierre Vilar, historiador francés, antifascista. Su obra es cercana también a la Escuela de los Annales, pero su metodología de investigación corresponde al materialismo histórico.', 'https://digitum.um.es/digitum/handle/10201/83936', 'universidad de Murcia');
  ?>
  </div>
  
  <p>Paralelo al desarrollo de la Escuela de los <i>Annales</i> se desarrolló la Historia cuantitativa. Ambas escuelas se influyeron mutuamente, de manera que trabajos de historiadores de <i>Annales</i> influyeron en temas o metodologías de investigación de historiadores marxistas, como es el caso de Pierre Vilar o Maurice Dobb.<p>

  <p>De regreso a Francia, en 1932 conoció a Lucien Febvre, quien influiría considerablemente sobre sus trabajos históricos. Entre 1932 y 1935 dio clases en París, en los liceos Pasteur, Condorcet y Henri IV. En 1935 marchó a Sao Paulo para fundar la cátedra de Historia en su Universidad. En 1937 volvió a París para trabajar en la <i>École Pratique des Hautes Etudes</i>.</p>

  <p>Los historiadores de tendencia marxista no soviética estudiaban las regularidades en la historia, así como los elementos estructurales. Al criticar la ortodoxia de la escuela soviética retoman elementos que corresponden a la superestructura de la sociedad estudiada, es así que desde los años treinta del siglo XX, y en particular en el periodo posterior a la segunda guerra mundial, hay un contacto estrecho entre los seguidores del materialismo histórico y la escuela de los <i>Annales</i> de manera que reciben influencias tanto temáticas como metodológicas.las cuales podemos apreciar en las obras de Pierre Vilar, <i>Cataluña en la España moderna</i>, así como en la obra <i>Iniciación al análisis del vocabulario histórico</i> o Ernest Labrousse, con su obra <i>Fluctuaciones económicas e historia social</i>. Vilar estudia los fundamentos económicos de España, pero no se queda únicamente en el marco económico, sino que da una visión integral de la sociedad española estudiada, siguiendo una metodología y conceptos del materialismo histórico. Ya en los años setenta del siglo pasado, Vilar</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Podría admitirse, sin duda, que economistas y sociólogos consideran la investigación histórica como simple fundamento de un «banco de datos». Pero ¿quién suministraría los datos a un tal banco? ¿Quién pondría nombre a sus rúbricas? Lucien Febvre nos ha enseñado que un montón de piezas de archivo no da respuesta al historiador más que si éste sabe interrogarlo […] El objetivo de la historia no es «hacer revivir el pasado», sino comprenderlo. Para esto hay que desconfiar de los documentos brutos, de las supuestas experiencias vividas, de los juicios probables y relativos. Para hacer un trabajo de historiador no basta con hacer revivir una realidad política, sino que debe someterse un momento y una sociedad a un análisis de tipo científico […] El objeto de la ciencia histórica es la dinámica de las sociedades humanas. La materia histórica la constituyen los tipos de hechos que es necesario estudiar para dominar científicamente este objeto. Clasifiquémoslos rápidamente: </p>
    <p>1) Los hechos de masas: masa de los hombres (demografía), masa de los bienes (economía), masa de los pensamientos y de las creencias (fenómenos de «mentalidades», lentos y pesados; fenómenos de «opinión», más fugaces).  2) Los hechos institucionales, más superficiales pero más rígidos, que tienden a fijar las relaciones humanas dentro de los marcos existentes: derecho civil, constituciones políticas, tratados internacionales, etc.; hechos importantes pero no eternos, sometidos al desgaste y al ataque de las contradicciones sociales internas. 3) Los acontecimientos: aparición y desaparición de personajes, de grupos (económicos, políticos), que toman medidas, decisiones, desencadenan acciones, movimientos de opinión, que ocasionan «hechos» precisos: modificaciones de los gobiernos, la diplomacia, cambios pacíficos o violentos, profundos o superficiales.</p>
    <p>La historia no puede ser un simple retablo de las instituciones, ni un simple relato de los acontecimientos, pero no puede desinteresarse de estos hechos que vinculan la vida cotidiana de los hombres a la dinámica de las sociedades de las que forman parte.»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Vilar, <i>Iniciación</i> ... p. 8; 22; 43</footer>

  <p>De igual manera escritos como el de Michel Vovelle en su <i>Ideologías y mentalidades</i> o Guy Bois en <i>Crisis del feudalismo</i> muestran la influencia del Materialismo histórico (Aurel y Burke, <i>De entre siglos</i> …, p. 276).</p>

  <p>Historiadores de la economía como Maurice Dobb, Paul Baran Paul Sweezy buscaron explicar el cambio de las sociedades a través del conocimiento de las sociedades que precedieron al capitalismo, por lo que se dedicaron a tratar de explicar los modos de producción sobre todo el feudalismo, así como el capitalismo. Otro de los temas de estos autores fue la situación de la clase obrera.</p>

  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>