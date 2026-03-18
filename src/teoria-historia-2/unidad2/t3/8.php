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
  <h2>La historiografía británica: Eduard Hallet Carr</h2>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-carr.webp','Uno de los autores británicos que estudió el desarrollo de la Unión Soviética y participó como diplomático en varios momentos fue Eduar H. Carr. Dentro de su obra destaca su Historia de la Rusia Soviética, la cual integró a partir de documentación de archivo, textos y testimonios.', 'https://upload.wikimedia.org/wikipedia/en/8/89/Eh_carr.jpg', 'Wikipedia');
  ?>
  </div>

  <h3>Edward Hallet Carr</h3>

  <p>Edward Hallet Carr (1892-1982) fue historiador y diplomático (1916-1940); en 1919 fue agregado a la delegación británica en las conferencias de paz del <i>Tratado de Versalles</i>. En 1925 fue destinado a Riga (Letonia), por su interés en la cultura y política rusas. Fue asesor de la Sociedad de Naciones (1930). Durante la Segunda Guerra Mundial fue director de la Oficina de Publicidad en el Ministerio de Información y entre 1941 y 1946 ocupó el cargo de subdirector en el diario londinense <i>The Times</i>.</p>

  <p>Finalmente se dedicó a estudiar y enseñar historia de la política internacional en la Universidad de Cardiff (1936) y al final de la segunda guerra mundial en la Universidad de Oxford y en el Trinity College.</p>

  <p>Dentro de sus escritos destacan <i>la biografía de Dostoievski</i> (1931), <i>Los exiliados románticos</i> (1933), <i>Karl Marx</i> (1934), <i>Michael Bakunin</i> (1937). Escribió sobre las relaciones internacionales desde la Primera Guerra Mundial y <i>La Historia de la Rusia Soviética</i> en once tomos (1950-1978), <i>Antes y después</i> (1968) y <i>La revolución rusa: de Lenin a Stalin, 1917-1929</i> (1979).</p>

  <h3>La historia</h3>

  <p>Edward H. Carr concibe a la historia a la que ve como «un proceso continuo de interacción entre el historiador y sus hechos, un diálogo sin fin entre el presente y el pasado». Lo que implica que el historiador reflexiona sobre los acontecimientos del pasado en función del conocimiento y explicación del presente (<i>¿Qué es la historia?</i>, p. 40).</p>

  <p>E.H. Carr reflexionó sobre el uso e importancia de la historia,;en ella hizo una crítica a los historiadores de finales del siglo XIX e inicios del XX, en la que indica que en muchos de sus textos no se ponen de acuerdo sobre los acontecimientos narrados «Espero hallarme al día como para darme cuenta de que algo escrito en la última década del siglo pasado tiene que ser un disparate». Haciendo también referencia a su desacuerdo con la postura positivista e historicista (E.H Carr. <i>¿Qué es la historia?</i>, p. 10).</p>

  <p>Aclara que los escritos sobre historia reflejan «nuestra posición en el tiempo, y forma parte de nuestra respuesta a la pregunta, más amplia, de qué idea hemos de formarnos de la sociedad en que vivimos». El asunto es cómo se hace la historia, cuáles son los criterios que el investigador considera para realizar su trabajo, para ello parte de la selección de los acontecimientos e inicia explicando que se entiende por los hechos históricos y su selección (E.H Carr. <i>¿Qué es la historia?</i>, p. 11). </p>

  <p>Carr nos dice que la historia se nutre de hechos: «consiste en un cuerpo de hechos verificados». Al explicar su importancia es necesario ser conscientes de que no todos los datos que encuentra el historiador son hechos históricos. Los datos que encuentra el historiador constituyen hechos históricos, hay datos que todo historiador debe saber «hechos básicos que son los mismos para todos los historiadores y que constituyen, por así decirlo, la espina dorsal de la historia». Estos datos los debe conocer todo historiador, son la materia prima de la historia (E.H Carr. <i>¿Qué es la historia?</i>, p. 13-14).</p>

  <p>Es el historiador quién le da importancia o resalta el uso de los datos básicos es «una decisión que formula el historiador a priori». De manera que el historiador selecciona y ordena los hechos para su trabajo «los hechos sólo hablan cuando el historiador apela a ellos». Así el historiador selecciona los hechos, el orden y el contexto para hacer uso de ellos (E.H Carr. <i>¿Qué es la historia?</i>, p. 15).</p>

  <p>Sí bien el historiador toma los datos para su trabajo, no todos los datos se convierten en hechos históricos, el historiador hace una selección de aquellos datos que le son importantes para su trabajo. «Su condición de hecho histórico dependerá de una cuestión de interpretación». El que aceptemos los datos permite que el dato permanezca (E.H Carr. <i>¿Qué es la historia?</i>, p. 17).</p>

  <p>La selección de los datos que hoy en día nos llega a través del tiempo pasó por una selección hecha antes que la nuestra, que posiblemente pasó por diferentes puntos de vista de cronistas, historiadores que seleccionaron y preservaron estos datos a través del tiempo, pensaron que «los datos que apoyaban tal punto de vista merecían ser conservados» (E.H Carr. <i>¿Qué es la historia?</i>, p. 18). </p>

  <p>Al historiador le toca el trabajo de tomar estos datos y «convertirlos en hechos históricos». Aquí Carr crítica a los historiadores positivistas quienes hacían acopio de cuantos datos se pudieran para trabajar sus textos, Carr considera que sí bien los datos son importantes, el historiador hace una selección de ellos, los recupera en los documentos. Aclara que el documento por sí solo no es historia, es el historiador quién le da sentido a la información recuperada (E.H Carr. <i>¿Qué es la historia?</i>, p. 21).</p>

<h3> El historiador.</h3>

  <p>La investigación que realiza el historiador sobre un tema lo hace desde el presente, es verdad investiga sobre temas del pasado, pero no trabaja el pasado por el gusto de conocer los acontecimientos que ya ocurrieron, sino por la inquietud del presente. «sólo podemos captar el pasado y lograr comprenderlo a través del cristal del presente» (E.H Carr. <i>¿Qué es la historia?</i>, p. 33).</p>

  <p>La función del historiador radica en conocer el pasado y comprenderlo a fin de comprender el presente. «La función del historiador no es ni amar el pasado ni emanciparse de él, sino dominarlo y comprenderlo, como clave para la comprensión del presente». La tarea del historiador es reflexionar sobre la naturaleza del hombre y su relación con el mundo (E.H Carr. <i>¿Qué es la historia?</i>, p. 34).</p>

  <h3>Las fuentes</h3>

  <p>Las fuentes van más allá de los documentos obtenidos en los archivos, considera que aparte de las fuentes documentales encontramos otros materiales como los decretos, los tratados, las cuentas de los arriendos, los libros, la correspondencia oficial, las cartas y los diarios privados. Estos son materiales en los que el historiador encuentra datos que le son útiles (E.H Carr. <i>¿Qué es la historia?</i>, p. 22).</p>

  <p>La importancia de las fuentes es aportar datos al historiador, pero es importante considerar que «por sí solos no constituyen historia; no brindan por sí solos ninguna respuesta definitiva a la fatigosa pregunta de qué es la Historia.» (E.H Carr. <i>¿Qué es la historia?</i>, p. 26).</p>

  <p>El historiador cuenta con una filosofía de la historia, que le ayuda en la selección de los datos en sus fuentes a fin de que pueda reconstruir los acontecimientos y explicarlos. «En general puede decirse que el historiador encontrará la clase de hechos que busca. Historiar significa interpretar» ( E.H Carr. <i>¿Qué es la historia?</i>, p. 32).</p>

  <p>Es importante destacar que los acontecimientos deben ser comprobados pues</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«el deber de respeto a los hechos que recae sobre el historiador no termina en la obligación de verificar su exactitud. Tiene que intentar que no falte en su cuadro ninguno de los datos conocidos o susceptibles de serlo que sean relevantes en un sentido u otro para el tema que le ocupa o para la interpretación propuesta»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">E.H Carr <i>¿Qué es la historia?</i>, p. 37</footer>

  <p>El trabajo del historiador se apoya en otras ciencias como la arqueología, la epigrafía, la numismática, la cronología, la paleografía. Carr explica que son apoyos para que se pueda desarrollar el trabajo de recuperación de la información para el trabajo histórico. Considera que no es necesario que el investigador las domine en su totalidad, ni mucho menos las maneje toda ( E.H Carr <i>¿Qué es la historia?</i>, p. 14).</p>

  <p>El investigador primero inicia un proceso de acopio de fuentes de las que va sacando información, conforme tiene información va redactando el material que tiene, de manera que conforme va escribiendo ubica la información que le falta</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«En lo que a mí respecta, no bien llevo algún tiempo investigando las que me parecen fuentes capitales, el empuje se hace demasiado violento y me pongo a escribir, no forzosamente por el principio, sino por alguna parte, por cualquiera. Luego leer y escribir van juntos. Añado, suprimo, doy nueva forma, tacho, conforme voy leyendo»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">E.H Carr <i>¿Qué es la historia?</i>, p. 38</footer>

  <p>Como puedes apreciar, el materialismo histórico tomó nuevos caminos a lo largo del siglo XX, esta multiplicidad de enfoques tienen en común rescatar las categorías analíticas que Marx y Engels propusieron y desarrollaron en el siglo XIX. El materialismo histórico como forma de conocer el mundo sigue siendo un método que no es sólo académico, aunque en él se desarrollaron nuevos enfoques y temas por investigar,  sino también se presentó como una opción de participación política.</p>

  <?php ob_start(); ?>
  <p>Recupera la información que leíste en el apartado sobre el materialismo histórico en el siglo XX - que se encuentra en esta lección- e identifica las ideas importantes de la lectura, a fin de que repases y recuerdes los principales conceptos del materialismo histórico, propuestas, fases, principales exponentes e ideas. Y realiza la actividad <b>Los conceptos del materialismo  histórico</b>.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a2', "Los conceptos del materialismo  histórico. ", $ActividadContent);
  ?>

  <p>Ahora que ya conoces diferentes corrientes de pensamiento histórico pues en la unidad  1 aprendiste sobre las corrientes de pensamiento del historicismo y del positivismo, y en esta unidad 2 acabas de revisar corrientes del materialismo histórico, por lo que cuentas con elementos para tener una posición crítica en torno a las diferentes formas de pensamiento, no solo de un país, sino a nivel mundial.</p>

  <?php ob_start(); ?>
  <p>Por lo tanto, con el objetivo de reafirmar lo aprendido en torno a las corrientes de pensamiento histórico desarrolladas hasta los años setenta del siglo XX te pedimos que participes en el  siguiente foro:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a3', "corrientes del pensamiento históricos", $ActividadContent);
  ?>
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>