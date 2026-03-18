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
  <h2>Marc Bloch</h2>
  
  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-bloch.webp',' Marc Bloch, junto con Lucien Febre funda la revista Annales, alrededor de la cual se agrupan historiadores con una visión nueva de la historia. Una de sus visiones sobre su oficio era la siguiente: El historiador tiene que ser infinitamente curioso; tiene que poder imaginar las emociones de personas que no se le parecen.', 'https://upload.wikimedia.org/wikipedia/commons/2/21/Marc_Bloch.jpg', 'Wikipedia');
  ?>
  </div>

  <p>Marc Bloch (1886-1944) Vivió en Alemania dónde estudió en las universidades de Leipzig y en la de Berlín. Enseñó en los liceos de Montpellier y de Amiens. En 1919, al final de la primera guerra mundial, fue enviado con otros profesores a la universidad francesa de Estrasburgo, ubicada en Alsacia, donde fue nombrado maestro de conferencias y luego profesor, puesto que ganó con la tesis Reyes y siervos. Estuvo en esta universidad hasta 1936.</p>

  <p>La universidad de Estrasburgo se convirtió en un centro intelectual importante debido a que se le permitió el acceso a nacionales y extranjeros, de manera que Bloch tuvo contacto con Lucien Febvre, Gabriel Le Bras, Charles Blondel, George Lefebvre, Henri Baulig, Henri Pirenne, André Piganiol, entre muchos otros. (Jean Claude Schmitt, Bloch, p. 82) </p>

  <p>Bloch aprende lenguas modernas y antiguas como el alemán antiguo, el sajón, el escandinavo, ruso. Además, aprende historia de Europa, sobre todo con la germánica. Enseñó en Madrid, en Gante, en Londres y en Oslo.</p>

  <p>Publicó <i>Los reyes taumaturgos</i> (1924); en 1929 funda con Lucien Febvre la revista <i>Annales d’Histoire économique et sociale </i>, como una respuesta a la historia propuesta por Langlois y Seignobos. La revista fue concebida como “un arma de combate”, en la que Bloch presenta y define las ideas de la nueva escuela histórica. Con la revista la influencia del grupo de Estrasburgo creció.</p>

  <p>En 1931 se publicó el libro <i>Los caracteres originales de la historia rural francesa</i>. Años más tarde Bloch ocupó la cátedra de historia económica (1936) en la Sorbona, el mismo año publicó <i>La sociedad feudal</i>, un texto que nos presenta a este autor no sólo como un historiador académico, sino como un hombre comprometido políticamente en su tiempo y, al mismo tiempo capaz de reflexionar sobre su momento histórico <i>La extraña derrota</i> -publicado en 1946-, el cual es un análisis de la derrota de Francia entre 1940 y 1941 frente a la invasión de la Alemania nazi. Aún en tiempo de guerra y con cargo militar, no dejó de reflexionar sobre su profesión:</p> 

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Escribir sobre historia y enseñarla: ése es, desde hará pronto treinta y cuatro años, mi oficio. Me ha llevado a hojear muchos documentos de diversas edades, para separar lo mejor que he podido la verdad de la mentira; también me ha llevado a mirar y observar mucho. Pues siempre he creído que el primer deber de un historiador, como decía mi maestro Pirenne, es interesarse «por la vida». La atención particular que he prestado, en mis trabajos, a los asuntos rurales, ha acabado de convencerme de que, sin inclinarse sobre el presente, resulta imposible comprender el pasado; al historiador del medio rural los buenos ojos para contemplar la forma de los campos no le son menos indispensables que una cierta aptitud para descifrar viejos <?php renderTooltip('grimorios', 'Este término viene del francés medieval grimoire, que es una versión de grammaire, gramática. En la tradición popular se entiende por la palabra como un libro de encantamientos, pues en la Edad Media, quien sabía leer y escribir era, en ocasiones, sospechoso de practicar magia. En el contexto de la cita, significa que el historiador tiene aptitudes para leer libros antiguos.'); ?>. Son estos mismos hábitos de crítica, de observación y, espero, de honestidad, los que he tratado de aplicar al estudio de los trágicos acontecimientos en los cuales desempeñé un papel sumamente modesto»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Bloch, <i>la extraña derrota</i>, p. 29</footer>

  <p>La aplicación de leyes antisemitas por el gobierno de Vichy supuso su expulsión de la cátedra (1940). Se trasladó a las universidades de Clermont-Ferrand y Montpellier, al estallar la Segunda Guerra Mundial contribuyó a organizar movimientos clandestinos en Montpellier. En 1943 en Lyon participó en el movimiento clandestino de la resistencia, además, constituyó los comités de liberación de la región e impulsó la insurrección en los departamentos alrededor de Lyon. En 1944 tras ser arrestado y torturado por la Gestapo fue fusilado.</p>

  <p>A consecuencia de la segunda guerra mundial Bloch muere dejando una serie de escritos inéditos, entre los que se encuentran Señorío francés y casa solariega inglesa (se publicó hasta 1960), así como los apuntes para un trabajo al que se le nombró <i>Apología para la historia o el oficio del historiador</i>, mismo que fue publicado años más tarde (Jean Claude Schmitt, <i>Bloch</i>, p. 83)</p>

  <h3>La historia en Bloch</h3>

  <p>Para Marc Bloch la historia es una ciencia joven «como empresa razonada de análisis». Se trata de una parte del conocimiento, como ocurre con las demás ciencias, que son un fragmento del conocimiento y que en el caso de la historia se encarga de estudiar los actos humanos por lo que el tema de la historia es el estudio del hombre. Veámoslo en sus palabras:</p>

   <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Porque la historia no es sólo una ciencia en movimiento. Es también una ciencia en pañales, como todas las que tienen por objeto el espíritu humano, este recién llegado al campo del conocimiento racional. O, para decirlo mejor, vieja bajo la forma embrionaria del relato, por mucho tiempo saturada de ficciones y por mucho más tiempo atada a los acontecimientos más inmediatamente aprehensibles, sigue siendo muy joven como empresa razonada de análisis»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Bloch. <i>Apología</i>… p. 48</footer>

    <p>Nuestro autor considera que sí bien la historia ha sido utilizada como un pasatiempo, una distracción el objeto de la historia es el conocimiento de los hombres en el tiempo, estudia al hombre social.  (Bloch. <i>Apología</i> …p. 43)</p>

    <p>Nos explica que la historia no describe los cambios en los fenómenos de la naturaleza, sino que su interés se centra en los “actos humanos, nacidos de necesidades colectivas y que sólo se hicieron posibles gracias a una estructura social dada” (Bloch. <i>Apología</i> …p. 55).</p>

    <p>Un hecho histórico implica la participación de los hombres en su relación con otros hombres, así como en su interrelación y participación en la transformación de la naturaleza para su beneficio, esto es «la obra de una sociedad que modifica el suelo donde vive según sus necesidades» (Bloch.  <i>Apología</i> …p. 56).</p>

    <p>Es importante destacar la naturaleza del estudio de los acontecimientos históricos ya que tienen características particulares que implican un acercamiento diferente al de las ciencias naturales o las matemáticas, sobre todo en cuanto a se trata de aspectos como los sentimientos “los hechos humanos son, por esencia, fenómenos muy delicados y muchos de ellos escapan a la medición matemática.” (Bloch.  <i>Apología</i> …p. 457).</p>

    <p>El estudio de la historia no debe realizarse de manera aislada, por lo que, para ofrecer explicaciones sobre los hechos estudiados, es necesario el aporte de otras ciencias, «la alianza de dos disciplinas resulta indispensable para cualquier tentativa de explicación […]» (Bloch. <i>Apología</i> …p. 56).</p>

    <p>El autor considera que la historia tiene que ser verdadera, verídica: «Por escribirla [historia] como yo lo entiendo, honestamente, verídicamente, yendo, en la medida de lo posible, hasta los resortes más oscuros […]» (Bloch. <i>Apología</i> …p. 45).</p>

    <p>La historia estudia a los hombres en el tiempo, el objetivo de esto para poder revisar los acontecimientos históricos y poder revisar lo que dura, lo que se mantiene. Otro elemento que se observa en el estudio de un tema a lo largo del tiempo es poder observar los elementos que no cambian, esto es los elementos que continúan.:</p>

     <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Ciencia de los hombres", hemos dicho. Todavía es algo demasiado vago. Hay que añadir: "de los hombres en el tiempo". El historiador no sólo piensa en lo "humano". La atmósfera donde su pensamiento respira naturalmente es la categoría de la duración»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Bloch. <i>Apología</i>… p. 48</footer>

    <p>Una categoría que va relacionada con el tiempo histórico es sobre los orígenes, se trata identificar cómo surgió un acontecimiento, el objetivo es apoyar en la explicación para la comprensión de los fenómenos. Trabajar con los orígenes implica conocer los cambios de los acontecimientos, dar las razones de la permanencia de algunos elementos.</p>

    <p>Cabe aclarar que Bloch nos indica que es importante considerar que un fenómeno histórico se debe explicar en el momento en que se presenta, ya que existen características que son propias de la época en que se desarrollan los acontecimientos. (Bloch. <i>Apología</i>, p. 64)</p>

    <p>Así, nuestro autor, en una situación de vida compleja, su incorporación al frente de batalla, no deja de ser historiador y de reflexionar sobre su materia y en 1940 nos dice:</p>

    <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Porque la historia es, en esencia, una ciencia del cambio. Sabe y enseña que dos acontecimientos no se reproducen nunca de una manera totalmente semejante, porque las condiciones en que se dan nunca coinciden con exactitud. Sin duda, reconoce elementos de la evolución humana, cuando no permanentes, al menos durables. Pero no deja de reconocer, al mismo tiempo, la variedad casi infinita de sus combinaciones. Sin duda admite que se den repeticiones entre una y otra civilización, si no en todos sus rasgos, al menos en las constantes generales de su desarrollo. En ese caso constata que las condiciones generales imperantes en cada caso fueron semejantes. Puede tratar de adentrarse en el porvenir; en mi opinión, no es incapaz de lograrlo. Pero lo que nos enseña no es que el pasado vuelva a comenzar, que lo que fue ayer será mañana. Al analizar en qué medida ayer difiere de antes de ayer y por qué, este cotejo le permite prever en qué sentido el mañana, por su parte, se opondrá al ayer»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Bloch, <i> la extraña </i>...,p. 122.</footer>

    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>