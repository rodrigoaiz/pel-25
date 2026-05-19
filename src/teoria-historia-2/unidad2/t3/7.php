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
  <h2>La historiografía británica: Eric Hobsbawn</h2>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-hobsbawm.webp','Uno de los principales autores de esta corriente historiográfica es Eric Hobsbawn, quien desarrolló textos no sólo para comprender la estructura social y económica, sino también los aspectos culturales de las sociedades del siglo XX', 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Eminent_Historian_Professor_Eric_Hobsbawm_at_the_interactive_session_with_the_students_of_Delhi_University%2C_Jawaharlal_Nehru_University_and_Jamia_Millia_in_New_Delhi_on_December_21%2C_2004.jpg', 'Wikipedia');
  ?>
  </div>

  <p>Eric John Ernest Hobsbawm, historiador marxista de Gran Bretaña nació en Alejandría, Egipto, en 1917. Se educó en Viena y Berlín; radicado en Inglaterra se formó en la Universidad de Cambridge y se interesó por estudiar la historia social y de los movimientos obreros. Escribió sobre los orígenes de la industrialización en Gran Bretaña y la formación de la clase obrera</p>

  <p>Entre sus obras sobresalen: <i>La era de la revolución 1789-1848</i>  (1962), <i>La era del capitalismo 1848-1875</i> (1975), <i>La era del Imperio</i> (1987), <i>La edad de los extremos: el siglo corto (1914-1991)</i>  (1994). <i>Historia del siglo XX</i> y con Terence Ranger, eds. <i>La invención de la tradición</i> (1983)</p>

  <p>Hobsbawm también escribió — bajo el seudónimo de Frankie Newton — para el <i>New Statesman</i> como crítico de jazz y en diversas revistas intelectuales sobre temas diversos, como el barbarismo en la edad moderna, los problemas del movimiento obrero y el conflicto entre anarquismo y comunismo.</p>

  <h3>La historia</h3>

  <p>Eric Hobsbawm nos dice que el pasado humano es «definido como el período que precede a los acontecimientos que han quedado directamente registrados en la memoria de cualquier individuo» Nos aclara que los seres humanos somos conscientes del pasado como resultado de compartir con personas que nos superan en edad. Aquí es donde entra el papel del historiador, quién tiene como parte de sus responsabilidades el analizar «la naturaleza de este “sentido del pasado” en la sociedad y cómo describir sus cambios y transformaciones.» (Hobsbawm. <i>Sobre la historia</i>, p. 23).</p>

  <p>La historia para Hobsbawm nos ayuda a apreciar el cambio y la permanencia en la historia de las sociedades humanas </p>

<blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Porque, si centramos nuestra atención en lo que es permanente, no podemos explicar lo que ha experimentado una evidente transformación, a menos que creamos que no es posible el cambio histórico, sino sólo la mezcla y la variación»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Hobsbawm. <i>Sobre la historia</i>, p. 45</footer>

  <p>La historia no da bases para predecir el futuro, sino da elementos para el conocimiento y la comprensión histórica a todo aquel que desee tener información verídica para basar su conocimiento. La historia puede</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«mostrarnos las pautas y mecanismos del cambio histórico en general, y más concretamente los relativos a las transformaciones sufridas por las sociedades humanas durante los últimos siglos en los que los cambios se han generalizado y han aumentado de una manera espectacular.»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Hobsbawm. <i>Sobre la historia</i>, p. 45</footer>


  <p>El uso que la historia tiene no es presentar las consecuencias sobre los acontecimientos, tampoco dar posibles soluciones a los problemas «pero sí puede señalar una dimensión del problema que tiene carácter de urgente, concretamente la de la necesidad de la redistribución social.» (Hobsbawm. <i>Sobre la historia</i>, p. 47). La historia se enfrenta a un uso en el que se busca dar soluciones mecánicas que no tienen que ver con la sociedad «se trata del enfoque ahistórico y tecnicista que propugna la resolución de los problemas mediante la utilización de modelos y dispositivos mecánicos» (Hobsbawm. <i>Sobre la historia</i>, p. 50).
</p>

  <p>La historia nos puede brindar tendencias sobre los acontecimientos, nos permite elaborar hipótesis sobre los hechos ocurridos «Lo que no puede decirnos es lo que ocurrirá en el futuro: sólo los problemas que tendremos que resolver.» (Hobsbawm. <i>Sobre la historia</i>, p. 49).</p>

  <p>Otro problema que enfrenta el trabajo histórico es la distorsión de la historia con fines irracionales «La historia, entendida como ideología y fuente de inspiración, tiene una gran tendencia a convertirse en un mito que hace posible la autojustificación». Aquí hace la crítica a los nacionalismos modernos (Hobsbawm. <i>Sobre la historia</i>, p. 50).</p>

  <p>Hace la crítica a los historiadores que con su trabajo sirven y justifican al régimen, por lo que llama a ejercer «una historia crítica — una que pueda sernos de utilidad en la sociedad contemporánea—». En este sentido la historia debe realizarse para entender «la sociedad en la que vivimos y los cambios que experimenta.» (Hobsbawm. <i>Sobre la historia</i>, p. 50-51).</p>

  <p>Nuestro autor considera que la información que se recupera por parte del historiador debe ser analizada tomando como base un marco conceptual, que permita que los acontecimientos históricos puedan ser explicados, por lo que una herramienta para dar una interpretación es el materialismo histórico para él</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Marx sigue siendo, con mucho, el mejor guía de la historia […] Es sin duda la mejor guía para quienes, como yo, se han ocupado de la ascensión del capitalismo moderno y la transformación del mundo desde el final de la Edad Media europea»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Hobsbawm. <i>Sobre la historia</i>, p. 9</footer>

  <p>Reconoce que la influencia de los textos de Carlos Marx «y los campos de actividad de los jóvenes radicales marxistas me proporcionaron mis temas de investigación e inspiraron mi manera de escribir sobre ellos.» (Hobsbawm. <i>Sobre la historia</i>, p. 9).
Hobsbawm impulsa una crítica a lo que llama el marxismo vulgar, esa es la teoría política enarbolada e impulsada desde la Unión Soviética bajo la dirección de la dictadura de Josif Stalin, frente a la cual impulsará una búsqueda por una historia crítica.</p>

  <p>Como historiador Hobsbawm se centró en explicar la historia de la sociedad moderna y contemporánea de manera total, esto es en los aspectos políticos, sociales, culturales en las que incluyó a las personas a las que no se concebía como objeto de ser historiables. Destaca su interés por «la historia de la gente corriente, la historia de las masas, sobre el problema de las mentalidades» (Hobsbawm. <i>Sobre la historia</i>, p. 187). </p>

  <p>Resalta la influencia mutua entre el materialismo histórico y los historiadores británicos con la escuela francesa Annales, sobre todo en el interés de ambas corrientes en comprender el periodo de los siglos XVI-XVII, de manera que establecen la relación «absolutamente esencial entre el mundo de las ideas y sentimientos y la base económica, si quieren, la manera en que las personas se ganan la vida en la producción». Reconoce a historiadores como Fernand Braudel, March Bloch, George Lefebvre entre otros en su búsqueda por una historia económica-social y junto con los historiadores marxistas recuperan a las personas que hasta esa época no eran consideradas en los estudios históricos: la historia desde abajo (Hobsbawm. <i>Sobre la historia</i>, p.187).</p>

  <h3>La metodología</h3>

  <p>En la investigación histórica es importante descubrir el conocimiento sobre el pasado, pero, sobre todo «explicarlo y proporcionar así un vínculo con el presente» por ello Hobsbawm nos da herramientas para realizar un trabajo de reconstrucción de la información (Hobsbawm. <i>Sobre la historia</i>, p. 217).</p>

  <p>El método de trabajo para la investigación histórica propuesta por Hobsbawm implica tres partes: 1. La selección inicial del tema, su delimitación: 2. La construcción de un modelo que explique todas las formas de comportamiento y 3. Descubrir las pruebas que confirmen las conjeturas. Veamos cada una de ellas.</p>

  <ol class="ol-number">
    <li><b>La delimitación del tema.</b> Tenemos que identificar los indicios, los datos con que partimos «es decir, todos los “síntomas” o pedacitos del rompecabezas que deben juntarse o, como mínimo, un número suficiente de ellos para poder continuar». Para trabajar en este punto implica «el conocimiento previo del investigador, sus teorías sobre la sociedad, a veces su presentimiento, instinto o introspección, y, por regla general el propio historiador en realidad no ve claramente cómo hace su selección inicial». Es importante que el investigador ubique la información en el contexto en que surge, a fin de no dar por sentada la información o que identifique los datos bajo la óptica y parámetros de la sociedad actual (Hobsbawm. <i>Sobre la historia</i>, p. 216). </li>

    <li><p><b>La construcción de un modelo</b> permite al historiador la búsqueda de información el «mostrar la veracidad o falsedad de nuestras hipótesis.» (Hobsbawm. <i>Sobre la historia</i>, p. 212).</p>
    <p>Tener un modelo para la investigación permite al historiador la búsqueda de fuentes en las que recupere información, regularmente la información se encuentra de manera fragmentada «y para ello debemos, si me perdonan la expresión, componer nosotros mismos el rompecabezas, esto es, resolver cómo tales fragmentos de información deberían encajar unos con otros.» (Hobsbawm. <i>Sobre la historia</i>, p. 213).</p>
    <p>Hobsbawm en este sentido aclara que cuando el investigador se va a la fuente no lo hace de manera arbitraría, sino que “Debe saber, en cierto modo, qué es lo que busca y, sólo si lo sabe, puede reconocer si lo que encuentra encaja con su hipótesis o no; y si no encaja, tiene que pensar en otro modelo.” (Hobsbawm. <i>Sobre la historia</i>, p. 213) </p>

    <p>La construcción del modelo parte del conocimiento que el investigador tenga sobre el tema, lo que sabe, su experiencia, tener información sobre lo que se investiga «esto nos permite eliminar hipótesis obviamente inútiles» (Hobsbawm. <i>Sobre la historia</i>, p. 213).</p>
    <p>La construcción del modelo y su aplicación debe hacerse con cuidado teniendo en cuenta «que puede ser que sencillamente impongamos una construcción arbitraria a los hechos» (Hobsbawm. <i>Sobre la historia</i>, p. 217).</p>

    <p>Es importante tener presente el sentido que los datos tienen en el contexto en que se gestan “con el fin de evitar el mayor peligro que corre el historiador: el anacronismo.” De manera que el historiador debe tener la capacidad de no situar o identificar los hechos del pasado con los valores del mundo actual (Hobsbawm. <i>Sobre la historia</i>, p. 213).</p>
  </li>

    <li><p><b>Las pruebas.</b> Con la información se construye o reconstruye. Para buscarla se va a los <?php renderTooltip('repositorios', 'El repositorio es un sitio académico donde se conserva la información académica, sea documentación de archivos, libros, información en formato digital. Los repositorios pueden ser bibliotecas, hemerotecas, archivos, fototecas, pinacotecas, gliptotecas, entre otras.'); ?> en los que se pueden encontrar los datos, es importante tener claro qué es lo que se va a buscar, para ello es útil el modelo que nos ayude con preguntar que buscamos resolver.</p> 

    <p>Además de los archivos documentales existen otras fuentes que nos ayudan en la recuperación de información, tal es el caso de entrevistas, cartas, los libros de nacimientos, matrimonios o defunciones, la historia oral, testamentos, inscripciones funerarias, canciones, entre otras. «Todo tipo de historia tiene sus problemas técnicos, pero en la mayoría de los casos se da por sentado que ya existe un conjunto de fuentes cuya interpretación plantea dichos problemas». Por lo que para trabajar el tema necesitamos tener las herramientas, así como los conocimientos necesarios para leer los materiales, sacar información, unir la información y comprender lo que trabajamos (Hobsbawm. <i>Sobre la historia</i>, p. 208).</p>
    <p>Entre los aspectos a considerar para la investigación es básico el uso de las herramientas adecuadas para trabajar con las fuentes, así como el tiempo para dedicarse al trabajo en archivos, medios para viajar a fin de encontrar archivos específicos y entonces, poder leer la fuente, para lo cual, en ocasiones requiere el uso de la paleografía, entre otros aspectos.</p>
    <p>Por ejemplo, sí buscamos las opiniones de la gente los muestreos o los sondeos de opinión pública pueden ser una fuente. «Y los dos procedimientos característicos para descubrir las opiniones de la gente —el estudio del mercado mediante muestreo y su vástago el sondeo de opinión pública— son de una juventud inverosímil si se miden de acuerdo con criterios históricos» (Hobsbawm. <i>Sobre la historia</i>, p. 207). </p>
  </li>
  </ol>
  <p>Otro aspecto que es importante trabajar es la importancia de aquel que se encarga de hacer historia.</p>

  <h3>El papel del historiador</h3>

  <p>Eric Hobsbawm nos explica que los historiadores son «el banco de memoria de la experiencia» por lo que su trabajo es «recopilar y dar forma a la memoria colectiva del pasado». De manera que, el trabajo del historiador no se limita solo a la reconstrucción de los acontecimientos, sino que también es importante porque explique o trate de comprender los acontecimientos que narra (Hobsbawm. <i>Sobre la historia</i>, p.39).</p>

  <p>El historiador está comprometido con los acontecimientos que reconstruye ya que «tenemos una responsabilidad con respecto a los hechos históricos y, en particular, somos los encargados de criticar todo abuso que se haga de la historia desde una perspectiva político-ideológica» (Hobsbawm. <i>Sobre la historia</i>, p. 18).</p>

  <p>En este sentido los acontecimientos narrados por el historiador deben ser verídicos, basado en hechos reales, que puede comprobar, no podemos inventar acontecimientos para argumentar en favor de una postura, partido o gobierno “El historiador no puede inventar los hechos que estudia” (Hobsbawm. <i>Sobre la historia</i>, p. 18).</p>

  <p>Hobsbawm hace una crítica al mal uso que se hace de la historia a través de la formación de mitos que dan fundamento a las elites en el poder, aclara del peligro que conlleva una historia nacional de «manual», ya que desvirtúa y acomoda de acuerdo con los intereses particulares los acontecimientos. Por lo que llama a desmentir a quienes hagan mal uso de la historia «[…] es difícil plantar cara a los inventores de una historia nacional de manual, aunque hay algunos historiadores […] que han tenido suficientes agallas para hacerlo» (Hobsbawm. <i>Sobre la historia</i>, p. 19).</p>

  <p>Considera que la propuesta liberal de impulsar una historia nacional es peligrosa ya que fomenta la formación de mitos que buscan dar fundamento ideológico a la postura política de quienes detentan el poder o es tomada por ideologías nacionalistas  étnicas o fundamentalistas «estos y otros intentos por sustituir la historia por el mito y la invención […] Después de todo, tienen el poder de decidir lo que se incluye o no en los libros de texto […] Hoy día, el mito y la invención son fundamentales para la política de identidad a través de la que numerosos colectivos que se definen a sí mismos de acuerdo con su origen étnico, su religión o las fronteras pasadas o presentes de los estados tratan de lograr una cierta seguridad en un mundo desierto e inestable diciéndose aquello de «somos diferentes y mejores que los demás». Por lo que hay que separar el mito que legitima una postura política del acontecimiento histórico» (Hobsbawm. Sobre la historia, p. 19-20).</p>

  <p>El papel de los historiadores profesionales es la de «desmantelar dichas mitologías, a menos que se contenten —como creo que les ocurre a menudo a los historiadores nacionalistas— con ser esclavos de los ideólogos […] Los políticos no suelen mostrarse demasiado agradecidos con los historiadores por hacerla» (Hobsbawm. <i>Sobre la historia</i>, p. 40).</p>

  <p>Crítica la distorsión de los acontecimientos históricos con fines irracionales que enseñan a los jóvenes una historia que no entiende a la sociedad en la que viven y mucho menos los cambios ocurridos en esta. Una historia que a través de los nacionalismos modernos evita mostrar la verdad de los acontecimientos.</p>

  <p>Aquí es dónde está el papel del historiador quien tiene la obligación de presentar los acontecimientos históricos de manera que muestren la verdad a la sociedad, «Es tarea de los historiadores tratar de arrancar dichas vendas o, por lo menos, levantar un poco alguna que otra vez; y, en la medida en que lo hagan, estarán en condiciones de decirle a la sociedad contemporánea algunas cosas de las que podrá beneficiarse, incluso en el caso de que se resista a aprenderlas» (Hobsbawm. <i>Sobre la historia</i>, p. 50-51).</p>

  <p>Entre los historiadores marxistas en Gran Bretaña, también se encontraron académicos como es el caso de E. Carr.</p>
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>