<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Focalización</h2>
  <p>Independientemente de quién esté contando la historia, ésta deberá tener necesariamente una focalización. Esto quiere decir que el autor decide desde qué perspectiva o ángulo se cuenta la historia. Anteriormente ya se había mencionado que resultaría imposible contar en tiempo real todos los sucesos que ocurren en una historia. Así pues, el autor debe hacer una selección de los hechos que va a narrar; a este proceso se le llama focalización y dependerá de las posibilidades que tenga el narrador de conocer los acontecimientos que suceden en la historia.</p>
  <div class="max-w-lg mx-auto">
    <?php
      renderImage(
      'tlriid2-u4t3p1img4.webp',
      );
    ?>
  </div>
    <p>Existen tres tipos de focalización:</p>
    <ol class="ol-alpha">
      <li>
        <h3 class="pl-5">Focalización cero</h3>
        <p>s aquella en la que el narrador puede viajar a su antojo dentro de la historia. Cuando un trabajo tiene focalización cero es porque su narrador es omnisciente y por lo tanto puede desplazarse a cualquier lugar de la historia, entrar sin restricciones a la mente de los personajes y conoce todos los acontecimientos.</p>
        <p>El siguiente fragmento es de la novela <em>Eugenia Grandet</em> de Honoré de Balzac y tiene una focalización cero. Observa cómo el narrador tiene gran libertad para desplazarse por la historia y conoce la vida del personaje.</p>
        <blockquote>
          <p>El señor Grandet gozaba en Saumur de una reputación cuyas causas y efectos no pueden ser perfectamente comprendidos por aquellas personas que no han vivido poco o mucho en provincias. El señor Grandet, llamado por algunos el padre Grandet, y que pertenecía al número de los ancianos que disminuían ya insensiblemente, era, en 1789, un maestro tonelero que gozaba de una posición desahogada y que sabía leer, escribir y contar. Cuando la República francesa puso a la venta en el distrito de Saumur los bienes del clero, el tonelero, que contaba a la sazón cuarenta años, acababa de casarse con la hija de un rico comerciante en maderas. Grandet, provisto de su fortuna líquida y de la dote de su mujer, unos dos mil luises en oro, se fue a la capital del distrito, y allí, mediante doscientos dobles luises que ofreció su suegro al feroz republicano que vigilaba la venta de los bienes nacionales, obtuvo legalmente, aunque no legítimamente, por un pedazo de pan, los viñedos más hermosos de la comarca, una antigua abadía y algunas granjas. Los habitantes de Saumur eran poco revolucionarios, y el padre Grandet pasó por hombre atrevido, por republicano, por patriota, por hombre dado a las nuevas ideas (siendo así que a lo que era, en realidad, dado, era a las buenas viñas), y fue nombrado miembro de la administración del distrito de Saumur, donde dejó sentir política y comercialmente su pacífica influencia. Políticamente, protegió a los nobles e impidió con todo su poder la venta de bienes de los emigrados; comercialmente, proveyó a los ejércitos republicanos de un millar o dos de toneles de vino blanco que cobró entrando en posesión de unas soberbias praderas que dependían de un convento de monjas, y que entraban a formar parte del último lote. </p>
          <footer>Honoré de Balzac, <cite>Eugenia Grandet</cite> (fragmento)</footer>
        </blockquote>

      </li>
      <li>
        <h3 class="pl-5">Focalización interna</h3>
        <p>El narrador no tiene tanta libertad para desplazarse. Existen dos variantes de focalización interna:</p>
        <p>Cuando la narración se centra en la mente de un personaje, lo cual implica que el narrador se dedica a presentarnos al personaje que ha decidido focalizar. La focalización interna también ocurre cuando se trata de una narración epistolar, es decir, aquella que se basa en cartas, por consiguiente cambia constantemente de narrador; la focalización interna se da porque, mientras se lee cada carta, la narración está únicamente centrada en la mente del personaje que la escribe. Aquí te presentamos la primera carta de una novela corta de Fiodor Dostoyevski que tiene este tipo de focalización interna:</p>
        <blockquote>
          <p>Muy señor mío y apreciadísimo amigo Iván Petrovich:
            Puede decirse, apreciadísimo amigo, que desde anteayer corro tras usted para hablarle de un asunto muy urgente y no le encuentro en ninguna parte. Ayer, y refiriéndose cabalmente a usted en casa de Semyon Alekseich, decía mi mujer en broma que usted y Tatyana Petrovna están hechos un buen par de zascandiles. Aún no hace tres meses que están casados y ya ni se cuidan siquiera de sus penates domésticos. Todos nos reímos mucho claro que por el sincero afecto que les tenemos, pero, bromas aparte, amigo mío, me trae usted de cabeza. Semyon Alekseich dijo que quizá estuviera usted en el club, en el baile de la Unión Social. No sé si era cosa de reír o llorar. Figúrese usted mi situación: yo en el baile, solo, sin mi mujer... Al verme solo, Iván Ándreich, que tropezó conmigo en la conserjería, conjeturó sin más (¡el muy bribón!) que soy un apasionado ardiente de los bailes de sociedad y, cogiéndome del brazo, trató de llevarme a la fuerza a una clase de baile, diciendo que en la Unión Social había muchas apreturas, que la sangre moza no tenía donde revolverse, y que el pachuli y la reseda le daban dolor de cabeza. No encontré a usted ni a Tatyana Petrovna. Iván Andreich dijo que estarían ustedes sin duda viendo la obra de Griboyedov que ponen en el Teatro Aleksandrinski.</p>
          <footer>Fiodor Dostoievski, <cite>Novela en Nueve Cartas</cite> (fragmento)</footer>
        </blockquote>
      </li>
      <li>
        <h3 class="pl-5">Focalización externa</h3>
        <p> el narrador no tiene acceso a la mente de los personajes, por ende no puede contarnos qué sucede dentro de ellos. Puede desplazarse en los espacios de la obra, pero se limitará a dar cuenta de los hechos.</p>
        <p><em>Pedro Páramo</em> de Juan Rulfo cambia constantemente de narrador y de focalización. En el fragmento siguiente de esta novela, podrás observar la focalización externa.</p>
        <blockquote>
          <p>Pardeando la tarde, aparecieron los hombres. Venían encarabinados y terciados de cerrilleras. Eran cerca de veinte. Pedro Páramo los invitó a cenar a la mesa y esperaron callados. Sólo se les oyó sorber el chocolate, y masticar tortilla tras tortilla cuando les arrimaron los frijoles.
          Pedro Páramo los miraba. No se le hacían caras conocidas. Detrasito de él, en la sombra el Tilcuate.</p>
          <p>-Patrones -les dijo cuando vio que acababan de comer-, ¿en qué más puedo servirlos? </p>
          <p>Pero otro lo interrumpió diciendo: </p>
          <p>-¿Usted es el dueño de esto? -preguntó uno abanicando la mano. </p>
          <p>-¡Aquí yo soy el que hablo! </p>
          <p>-Bien. ¿qué se les ofrece? -volvió a preguntar Pedro Páramo. </p>
          <p>-Como usté ve, nos hemos levantado en armas. </p>
          <p>-¿Y? </p>
          <p>-Y pos eso es todo. ¿Le parece poco? </p>
          <p>-¿Pero por qué lo han hecho? </p>
          <p>-Pos porque otros lo han hecho también. ¿No lo sabe usté? Aguárdenos tantito a que nos lleguen instrucciones y entonces le averiguaremos la causa. Por lo pronto ya estamos aquí.</p>
          <footer>Juan Rulfo, <cite>Pedro Páramo</cite> (fragmento)</footer>
        </blockquote>
      </li>
    </ol>
 
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
