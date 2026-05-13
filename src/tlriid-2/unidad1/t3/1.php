<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Categorías gramaticales y el sentido</h2>
  <p>Las palabras, en nuestra lengua, tienen funciones especiales según la posición que ocupan en la oración. Así, el <strong>sustantivo</strong> nos permite nombrar personas, lugares, cosas, cualidades o fenómenos; el <strong>adjetivo</strong> determina y califica al sustantivo; el <strong>verbo</strong> es la parte de la oración que expresa acción, estado, tiempo y persona gramatical, mientras que el <strong>adverbio</strong> modifica al verbo, al adjetivo y al sustantivo. Los adverbios pueden ser de tiempo, lugar, modo, cantidad, etcétera. Desde luego, las categorías gramaticales sólo tienen sentido real en los diversos textos que se elaboran con fines concretos de comunicación.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('tlriid2-u1t3p1img1.webp');
    ?>
  </div>
  <p>Ejercicio mental: Lee con atención el siguiente relato, ¿cuál es el sustantivo, o nombre propio? y ¿Qué puedes notar sobre los verbos?</p>
  <div class="my-6 max-w-3xl mx-auto">
    <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden">
      <div class="bg-amber-500 px-5 py-2">
        <p class="font-bold text-white tracking-wide text-lg">Rubén<sup>1</sup></p>
      </div>
      <div class="px-6 py-5">
        <blockquote class="font-serif text-gray-800 space-y-4">
          <p>Traga Rubén no brinques Rubén sóplate Rubén no te orines en la cama Rubén no toques Rubén no llores Rubén estate quieto Rubén no saltes en la cama Rubén no saques la cabeza por la ventanilla Rubén no rompas el vaso Rubén, Rubén no juegues trompo Rubén no faltes al catecismo Rubén no pintes las paredes Rubén di los buenos días Rubén deja el yoyo Rubén no juegues trompo Rubén no faltes al catecismo Rubén amárrate la trenza del zapato Rubén haz las tareas Rubén no rompas los juguetes Rubén reza Rubén no te metas el dedo en la nariz Rubén no juegues con la comida no te pases la vida jugando la vida Rubén.</p>
          <p>Estudia Rubén no te jubiles Rubén no fumes Rubén no salgas con tus amigos Rubén no te pelees con tus amigos Rubén, Rubén no te montes en la parrilla de las motos Rubén estudia la química Rubén no trasnoches Rubén no corras Rubén no ensucies tantas camisetas Rubén saluda a la comadre Paulina Rubén no andes en patota<sup>2</sup> Rubén no hables tanto, estudia la matemática Rubén no te metas con la muchacha del servicio Rubén no pongas tan alto el tocadisco Rubén no cantes serenatas Rubén no te pongas de delegado de cursos Rubén no te comprometas Rubén no te vayas a dejar raspar Rubén no le respondas a tu padre Rubén, Rubén córtate el pelo, coge ejemplo Rubén.</p>
          <p>Rubén no manifiestes, no cantes el Belachao Rubén no protestes a los profesores, no dejes que te metan en la lista negra Rubén, Rubén quita esos afiches<sup>3</sup> del cheguevara, no digas yankis go home Rubén, Rubén no repartas hojitas, no pintes los muros Rubén, no siembres la zozobra en las instituciones Rubén, Rubén no quemes cauchos, no agites Rubén, Rubén no me agonices, no me mortifiques Rubén, Rubén modérate, Rubén compórtate, Rubén aquiétate, Rubén componte.</p>
          <p>Rubén no corras, Rubén no grites, Rubén no brinques, Rubén no saltes, Rubén no pases frente a los guardias, Rubén no enfrentes los policías, Rubén no dejes que te disparen, Rubén no saltes, Rubén no grites, Rubén no sangres, Rubén no caigas.</p>
          <p>No te mueras, Rubén.</p>
        </blockquote>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Luis Britto García, "Rubén", en Lauro Zavala, <em>Relatos vertiginosos</em>, pp. 112-113.</p>
        <p class="text-left text-xs text-gray-500"><sup>2</sup><strong>Patota:</strong> en Sudamérica significa grupo de amigos, pandilla de jóvenes.</p>
        <p class="text-left text-xs text-gray-500"><sup>3</sup><strong>Afiches:</strong> carteles o panfletos.</p>
      </div>
    </div>
  </div>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('tlriid2-u1t3p1img2.webp');
    ?>
  </div>

  <p class="mt-10">Como habrás advertido en el ejercicio anterior, los verbos están en presente de modo subjuntivo y muchos de ellos aparecen en modo imperativo. Asimismo, el sustantivo o nombre propio que se repite es &ldquo;Rubén&rdquo;, que es el sujeto y realiza la acción de los verbos.</p>
  <p class="mt-6">El verbo es esencial para crear oraciones que, a su vez, producen sentido en el texto.</p>

  <h3 class="text-xl font-bold mt-8 mb-4">Recapitulación</h3>

  <div class="my-6 grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">

    <!-- El verbo -->
    <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden">
      <div class="bg-sky-500 px-5 py-2">
        <p class="font-bold text-white tracking-wide">El verbo</p>
      </div>
      <div class="px-6 py-5 space-y-2 text-gray-700">
        <p>El verbo es la palabra que <strong>expresa una acción, un estado o un proceso.</strong> Es el núcleo del predicado de una oración.</p>
        <p><strong>Ejemplos:</strong></p>
        <ul class="list-disc list-inside ml-2 space-y-1">
          <li>Acción: <em>correr, saltar, escribir.</em></li>
          <li>Estado: <em>ser, estar, parecer.</em></li>
          <li>Proceso: <em>crecer, envejecer.</em></li>
        </ul>
        <p><strong>¿Cómo identificarlo?</strong> Pregúntate: ¿Qué está haciendo o cómo está algo o alguien?</p>
        <p>Ejemplo en oración:</p>
        <blockquote class="font-serif border-l-4 border-sky-300 pl-4 py-1 bg-white/60 rounded-r">María <strong>corre</strong> todas las mañanas.</blockquote>
        <p>Aquí, &ldquo;corre&rdquo; es el verbo.</p>
      </div>
    </div>

    <!-- El sustantivo -->
    <div class="border-l-4 border-emerald-500 bg-emerald-500/10 rounded-r-lg shadow-md overflow-hidden">
      <div class="bg-emerald-500 px-5 py-2">
        <p class="font-bold text-white tracking-wide">El sustantivo</p>
      </div>
      <div class="px-6 py-5 space-y-2 text-gray-700">
        <p>El sustantivo es la palabra que <strong>nombra</strong> a personas, animales, cosas, sentimientos o ideas.</p>
        <p><strong>Ejemplos:</strong></p>
        <ul class="list-disc list-inside ml-2 space-y-1">
          <li>Personas: <em>doctor, niña.</em></li>
          <li>Animales: <em>perro, águila.</em></li>
          <li>Cosas: <em>mesa, computadora.</em></li>
          <li>Sentimientos: <em>alegría, miedo.</em></li>
          <li>Ideas: <em>libertad, justicia.</em></li>
        </ul>
        <p><strong>¿Cómo identificarlo?</strong> Pregúntate: ¿De qué o de quién estoy hablando?</p>
        <p>Ejemplo en oración:</p>
        <blockquote class="font-serif border-l-4 border-emerald-300 pl-4 py-1 bg-white/60 rounded-r">La <strong>niña</strong> juega en el parque.</blockquote>
        <p>Aquí, &ldquo;niña&rdquo; es el sustantivo.</p>
      </div>
    </div>

    <!-- El adjetivo -->
    <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden">
      <div class="bg-violet-500 px-5 py-2">
        <p class="font-bold text-white tracking-wide">El adjetivo</p>
      </div>
      <div class="px-6 py-5 space-y-2 text-gray-700">
        <p>El adjetivo es la palabra que <strong>califica</strong> o <strong>determina</strong> a un sustantivo, añadiendo características o propiedades.</p>
        <p><strong>Ejemplos:</strong> <em>alto, inteligente, rojo, feliz.</em></p>
        <p><strong>¿Cómo identificarlo?</strong> Pregúntate: ¿Cómo es el sustantivo?</p>
        <p>Ejemplo en oración:</p>
        <blockquote class="font-serif border-l-4 border-violet-300 pl-4 py-1 bg-white/60 rounded-r">La niña <strong>alegre</strong> juega en el parque.</blockquote>
        <p>Aquí, &ldquo;alegre&rdquo; es el adjetivo que describe cómo es la niña.</p>
      </div>
    </div>

    <!-- El adverbio -->
    <div class="border-l-4 border-rose-500 bg-rose-500/10 rounded-r-lg shadow-md overflow-hidden">
      <div class="bg-rose-500 px-5 py-2">
        <p class="font-bold text-white tracking-wide">El adverbio</p>
      </div>
      <div class="px-6 py-5 space-y-2 text-gray-700">
        <p>El adverbio es la palabra que <strong>modifica a un verbo, un adjetivo u otro adverbio.</strong> Indica circunstancias como <strong>modo, lugar, tiempo, cantidad o afirmación.</strong></p>
        <p><strong>Ejemplos:</strong></p>
        <ul class="list-disc list-inside ml-2 space-y-1">
          <li>De modo: <em>rápidamente, bien.</em></li>
          <li>De lugar: <em>aquí, lejos.</em></li>
          <li>De tiempo: <em>ayer, pronto.</em></li>
          <li>De cantidad: <em>mucho, poco.</em></li>
        </ul>
        <p><strong>¿Cómo identificarlo?</strong> Pregúntate: ¿Cómo, dónde, cuándo o cuánto ocurre algo?</p>
        <p>Ejemplo en oración:</p>
        <blockquote class="font-serif border-l-4 border-rose-300 pl-4 py-1 bg-white/60 rounded-r">La niña juega <strong>alegremente</strong> en el parque.</blockquote>
        <p>Aquí, &ldquo;alegremente&rdquo; es el adverbio que describe cómo juega.</p>
      </div>
    </div>
  </div>
  <div class="max-w-2xl mx-auto mt-10">
    <table class="table-auto">
      <thead class="bg-cyan-700">
        <tr>
          <th class="text-white-own text-center p-4">Categoría</th>
          <th class="text-white-own text-center p-4">¿Qué hace?</th>
          <th class="text-white-own text-center p-4">Ejemplo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="bg-cyan-100 text-cyan-700 p-4 font-bold">Verbo</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">Expresa acción o estado</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">correr, ser</td>
        </tr>
        <tr>
          <td class="bg-cyan-100 text-cyan-700 p-4 font-bold">Sustantivo</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">Nombra seres o cosas</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">niña, libertad</td>
        </tr>
        <tr>
          <td class="bg-cyan-100 text-cyan-700 p-4 font-bold">Adjetivo</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">Califica o determina a un sustantivo</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">alegre, rojo</td>
        </tr>
        <tr>
          <td class="bg-cyan-100 text-cyan-700 p-4 font-bold">Adverbio</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">Modifica a un verbo, adjetivo u otro adverbio</td>
          <td class="bg-cyan-100 text-cyan-700 p-4">rápidamente, ayer</td>
        </tr>
      </tbody>
    </table>
  </div>

  <h3 class="text-xl font-bold mt-8 mb-4">Conclusión:</h3>
  <p>Comprender el verbo, el sustantivo, el adjetivo y el adverbio es fundamental para comunicarnos de manera clara y precisa en lengua española. Cada uno cumple una función específica dentro de la oración: los <strong>sustantivos</strong> nombran, los <strong>verbos</strong> expresan acciones o estados, los <strong>adjetivos</strong> describen características y los <strong>adverbios</strong> modifican la manera en que se realizan las acciones o se describen cualidades.</p>
  <p>Manejar correctamente estos elementos no solo mejora nuestra expresión oral y escrita, sino que también fortalece nuestra comprensión lectora, ya que nos permite interpretar mejor la información y matices del lenguaje. Con práctica constante, podremos usar estas categorías gramaticales de manera natural y efectiva en cualquier contexto.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number md:ml-32 mb-8">
    <li>Coloca las palabras faltantes para que las definiciones sean correctas:</li>
  </ol>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u1t3a1', "Categorías gramaticales", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>