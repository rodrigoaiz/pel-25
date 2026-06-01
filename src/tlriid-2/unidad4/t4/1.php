<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Discurso</h2>
  <div class="max-w-lg mx-auto">
    <?php
      renderImage(
      'tlriid2-u4t3p1img3.webp',
      );
    ?>
  </div>
  <p>Hasta ahora nos hemos ocupado de analizar la novela desde el punto de vista de la historia. Es decir, nos hemos enfocado a trabajar los elementos que contestan a las preguntas anecdóticas de la novela:</p>
  <ul class="list-disc list-inside">
    <li><strong>¿Qué pasa?</strong> Historia</li>
    <li><strong>¿A quién le pasa?</strong> Personajes</li>
    <li><strong>¿Dónde pasa?</strong> Espacio</li>
    <li><strong>¿Cuándo ocurre?</strong> Tiempo</li>
  </ul>
  <p>Recordemos estos elementos con el siguiente recurso:</p>

  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('lSreIDKcdk0', 'La novela');
      ?>
    </div>
  </div>
  <p>Ahora vamos a trabajar en el segundo elemento que compone la creación literaria, y por ende a la novela: el discurso. Para distinguir el discurso de la novela no nos ocuparemos de las preguntas anteriores, sino de una nueva ¿cómo se cuenta? A todas las elecciones hechas por el autor para contarte una historia es lo que llamamos discurso y va desde la creación de un narrador, hasta el tipo de lenguaje que utiliza para hacerlo.</p>
  <h3>Narrador</h3>
  <p>Si bien es cierto que se conoce como autor a la persona que escribe, también es cierto que quien nos cuenta la historia de una novela no es el autor, sino un personaje ficticio, inventado por él, que tiene su propia voz y por ende su punto de vista. A esta voz, encargada de narrarte los acontecimientos de la novela se le conoce con el nombre de narrador.</p>
  <p>Existen distintos tipos de Narradores:</p>
  <ol class="ol-alpha">
    <li>
      <h4 class="pl-5">Narrador homodiegético</h4>
      <p>Es aquél que te está contando una historia de la que forma parte, de ahí que utilice la primera persona gramatical: yo o nosotros. Su manera de contarte los hechos será más subjetiva, pues le afectan directa o indirectamente.</p>
      <p>El siguiente fragmento de la novela de Juan Rulfo te muestra lo que es un narrador homodiegético:</p>
      <blockquote class="border-l-4 border-azulcla pl-4 italic">
        <p>Vine a Comala porque me dijeron que acá vivía mi padre, un tal Pedro Páramo. Mi madre me lo dijo. Y yo le prometí que vendría a verlo en cuanto ella muriera. Le apreté sus manos en señal de que lo haría, pues ella estaba por morirse y yo en un plan de prometerlo todo. "No dejes de ir a visitarlo -me recomendó. Se llama de este modo y de este otro. Estoy segura de que le dará gusto conocerte." Entonces no pude hacer otra cosa sino decirle que así lo haría, y de tanto decírselo se lo seguí diciendo aun después de que a mis manos les costó trabajo zafarse de sus manos muertas.</p>
        <footer class="mt-2">Juan Rulfo, <cite>Pedro Páramo</cite> (fragmento)</footer>
      </blockquote>
      <p>Existen dos tipos de narradores homodiegéticos:</p>
      <ul class="ul-disc">
        <li>
          <p><strong>Autodiegético:</strong> que te cuenta la historia de la que es protagonista.  A continuación te ofrecemos un fragmento de <em>El extranjero</em>, novela de Albert Camus, donde encontramos este tipo de narrador, ya que, como podrás ver, cuenta la historia en que él es protagonista.</p>
          <blockquote class="border-l-4 border-azulcla pl-4 italic">
            <header>
              <span class="text-center block mb-0 font-bold">Primera parte</span>
              <span class="text-center block mb-0 font-bold">I</span>
            </header>
            <p>Hoy ha muerto mamá. O quizá ayer. No lo sé. Recibí un telegrama del asilo: «Falleció su madre. Entierro mañana. Sentidas condolencias.» Pero no quiere decir nada. Quizá haya sido ayer. </p>
            <p>El asilo de ancianos está en Marengo, a ochenta kilómetros de Argel. Tomaré el autobús a las dos y llegaré por la tarde. De esa manera podré velarla, y regresaré mañana por la noche. Pedí dos días de licencia a mi patrón y no pudo negármelos ante una excusa semejante. Pero no parecía satisfecho. Llegué a decirle: «No es culpa mía.» No me respondió. Pensé entonces que no debía haberle dicho esto. Al fin y al cabo, no tenía por qué excusarme. Más bien le correspondía a él presentarme las condolencias. Pero lo hará sin duda pasado mañana, cuando me vea de luto. Por ahora, es un poco como si mamá no estuviera muerta. Después del entierro, por el contrario, será un asunto archivado y todo habrá adquirido aspecto más oficial.</p>
            <footer class="mt-2">Albert Camus, <cite>El extranjero</cite> (fragmento)</footer>
          </blockquote>
        </li>
        <li>
          <h4 class="pl-5">Testimonial</h4>
          <p>Es aquél que está dentro de la historia, pero que cuenta la de otros. Uno de los narradores testigo más famosos de la literatura es el Doctor Watson, quien narra las aventuras de Sherlock Holmes. A continuación encontrarás un fragmento del capítulo titulado Último saludo en el escenario de la novela El signo de los cuatro, de Arthur Conan Doyle, quien es autor de las aventuras del detective más popular del mundo.</p>
          <blockquote class="border-l-4 border-azulcla pl-4 italic">
            <p>Los amigos de Sherlock Holmes se alegrarán de saber que vive todavía y que, fuera de algunos ataques de reumatismo que de cuando en cuando lo traen derrengando, goza de buena salud. Lleva muchos años viviendo en una pequeña granja de las Tierras Bajas, a diez kilómetros de Eastbourne, y allí distribuye sus horas entre la Filosofía y la Agricultura. En el transcurso de este período de descanso, ha desechado los más espléndidos ofrecimientos que se le han hecho para que se hiciese cargo de varios casos, resuelto ya a que su retiro fuese definitivo. Sin embargo, la inminencia de la guerra con Alemania le movió a poner a disposición del Gobierno su extraordinaria combinación de actividad intelectual y práctica, con resultados históricos que se relatan en su último saludo en el escenario. A esta obra, y para completar el volumen, se han agregado varios casos que han estado esperando mucho tiempo en mi carpeta. </p>
            <footer class="mt-2">Arthur Conan Doyle, <cite>El signo de los cuatro</cite> (fragmento)</footer>
          </blockquote>
        </li>
      </ul> 
    </li>
    <li>
      <h4 class="pl-5">Narrador heterodiegético</h4>
      <p>Es aquél que cuenta la historia de otros. Él está fuera de la historia y por lo tanto su manera de narrar los hechos será más objetiva, ya que éstos no le afectan. El narrador heterodiegético utilizará la tercera persona gramatical (él, ellos, ella) al referirse a los personajes. Al narrador heterodiegético también se le da el nombre de omnisciente, ya que tiene la capacidad de “entrar”, (por así decirlo), a la vida de todos los personajes, desplazarse y observar la historia desde fuera. En el siguiente fragmento de Cien años de soledad puedes observar este tipo de narrador:</p>
      <blockquote class="border-l-4 border-azulcla pl-4 italic">
        <p>Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Macondo era entonces una aldea de veinte casas de barro y caña brava construidas a la orilla de un río de aguas diáfanas que se precipitaban por un lecho de piedras pulidas, blancas y enormes como huevos prehistóricos. El mundo era tan reciente, que muchas cosas carecían de nombre, y para mencionarlas había que señalarlas con el dedo. Todos los años, por el mes de marzo, una familia de gitanos desarrapados plantaba su carpa cerca de la aldea, y con un grande alboroto de pitos y timbales daban a conocer los nuevos inventos. Primero llevaron el imán. Un gitano corpulento, de barba montaraz y manos de gorrión, que se presentó con el nombre de Melquíades, hizo una truculenta demostración pública de lo que él mismo llamaba la octava maravilla de los sabios alquimistas de Macedonia. Fue de casa en casa arrastrando dos lingotes metálicos, y todo el mundo se espantó al ver que los calderos, las pailas, las tenazas y los anafes se caían de su sitio, y las maderas crujían por la desesperación de los clavos y los tornillos tratando de desenclavarse, y aun los objetos perdidos desde hacía mucho tiempo aparecían por donde más se les había buscado, y se arrastraban en desbandada turbulenta detrás de los fierros mágicos de Melquíades. “Las cosas tienen vida propia —pregonaba el gitano con áspero acento—, todo es cuestión de despertarles el ánima.</p>
        <footer class="mt-2">Gabriel García Márquez, <cite>Cien años de soledad</cite> (fragmento)</footer>
      </blockquote>
    </li>
    <p>Antes de continuar, reforcemos lo aprendido hasta aquí con un reto sobre los tipos de narradores.</p>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4-act3', "Narradores", $ActividadContent);
    ?>
  </ol>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
