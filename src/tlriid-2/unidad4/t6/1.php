<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'TarjetasImagen.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El poema</h2>
  <div class="max-w-lg mx-auto">
    <?php
      renderImage(
      'tlriid2-u4t6img1.webp',
      );
    ?>
  </div>
  <p>A manera de advertencia diremos que esta lección solamente es una breve introducción a los elementos esenciales de la poesía. En cursos posteriores te adentrarás en un análisis más profundo de este fascinante tema ¡Comencemos!</p>
  <h4>Lectura degustativa</h4>
  <p>Como un aperitivo leeremos los siguientes poemas.</p>
  
  <div class="grid gap-6 my-8">
    <!-- Poema 1: La poesía -->
    <div class="bg-gradient-to-br from-sky-50 to-blue-50 rounded-lg shadow-md p-6 border border-sky-100">
      <h5 class="text-xl font-bold text-sky-800 mb-4 text-center">La poesía</h5>
      <div class="text-gray-800 leading-relaxed space-y-3">
        <p class="italic">
          –¿Es arte del demonio o brujería<br>
          esto de hacer versos?- le decía,<br>
          no sé si a Campoamor o a Victor Hugo,<br>
          un mozo de chirumen muy sin jugo.
        </p>
        <p class="italic">
          –Enséñeme, maestro, a hacer siquiera<br>
          una oda chapucera.
        </p>
        <p class="italic">
          –Es preciso no estar en sus cabales<br>
          para que un hombre aspire a ser poeta,<br>
          pero en fin, es sencilla la receta:<br>
          forme usted líneas de medida iguales,<br>
          luego en fila las junta<br>
          poniendo consonantes en las puntas…
        </p>
        <p class="italic">
          –¿Y en medio?– ¿En medio?<br>
          ¡ese es el cuento!
        </p>
        <p class="italic font-semibold">
          ¡Hay que poner talento!
        </p>
      </div>
      <p class="text-right text-sky-700 font-semibold mt-4">— Ricardo Palma</p>
    </div>

    <!-- Poema 2: Decir: Hacer -->
    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-lg shadow-md p-6 border border-amber-100">
      <h5 class="text-xl font-bold text-amber-800 mb-4 text-center">Decir: Hacer</h5>
      <div class="text-gray-800 leading-relaxed">
        <pre class="font-sans whitespace-pre-wrap italic">Idea palpable,
                  palabra
impalpable:
                   la poesía
va y viene
                   entre lo que es
y lo que no es.
                   Teje reflejos
Y los desteje.
                   La poesía
siembra ojos en la página,
siembra palabras en los ojos.</pre>
      </div>
      <p class="text-right text-amber-700 font-semibold mt-4">— Octavio Paz</p>
    </div>

    <!-- Poema 3: Altazor -->
    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-lg shadow-md p-6 border border-purple-100">
      <h5 class="text-xl font-bold text-purple-800 mb-4 text-center">Altazor</h5>
      <div class="text-gray-800 leading-relaxed space-y-2">
        <p class="italic">Los verdaderos poemas son incendios. La poesía se propaga por todas partes iluminando sus consumaciones con estremecimientos de placer y agonía.</p>
        <p class="italic">Un poema es una cosa que será.</p>
        <p class="italic">Un poema es una cosa que nunca es, pero debiera ser.</p>
        <p class="italic">Un poema es una cosa que nunca ha sido, que nunca podrá ser.</p>
      </div>
      <p class="text-right text-purple-700 font-semibold mt-4">— Vicente Huidobro</p>
    </div>
  </div>
  <h4>A manera de definición</h4>

  <?php
  renderTarjetasImagen([
    [
      'titulo' => 'La poesía',
      'descripcion' => '"La poesía, principio y fin de todo, es indefinible. Si se pudiera definir, su definidor sería el dueño de su secreto, el dueño de ella, el verdadero, el único dios posible. Y el secreto de la poesía no lo ha sabido, no lo sabe, no lo sabrá nunca nadie, ni la poesía admite dios, es Diosa única sin dios. Por fortuna, para Dios y para los poetas."',
      'imagen' => null,
      'pie' => 'Juan Ramón Jiménez',
    ],
    [
      'titulo' => 'La poesía',
      'descripcion' => '"La poesía no pretende cambiar por magia un puñado de monedas lógicas. Más bien devuelve el lenguaje a su fuente originaria (…) Hablábamos antes de cómo, en la música, era imposible separar el sonido, la forma, y el contenido, pues son, en realidad, lo mismo. Y cabe sospechar que, en cierta medida, sucede lo mismo con la poesía (…) He sospechado muchas veces que el significado es, en realidad, algo que se añade al poema. Sé a ciencia cierta que sentimos la belleza de un poema antes incluso de empezar en el significado."',
      'imagen' => null,
      'pie' => 'Jorge Luis Borges',
    ],
    [
      'titulo' => 'El poema',
      'descripcion' => 'La unidad de la poesía no puede ser asida sino a través del trato desnudo con el poema. [...] Al preguntarle al poema por el ser de la poesía, ¿no confundimos arbitrariamente poesía y poema? No todo poema —o para ser exactos: no toda obra construida bajo las leyes del metro— contiene poesía. Pero esas obras métricas ¿son verdaderos poemas o artefactos artísticos, didácticos o retóricos? Un soneto no es un poema, sino una forma literaria, excepto cuando ese mecanismo retórico —estrofas, metros y rimas— ha sido tocado por la poesía. Hay máquinas de rimar, pero no de poetizar. Por otra parte, hay poesía sin poemas; paisajes, personas y hechos suelen ser poéticos: son poesía sin ser poemas. Pues bien, cuando la poesía se da como una condensación del azar o es una cristalización de poderes y circunstancias ajenos a la voluntad creadora del poeta, nos enfrentamos a lo poético. Lo poético es poesía en estado amorfo; el poema es creación, poesía erguida. Sólo en el poema la poesía se aísla y revela plenamente. El poema no es una forma literaria sino el lugar de encuentro de la poesía y el hombre. Poema es un organismo verbal que contiene, suscita o emite poesía. Forma y substancia son lo mismo.',
      'imagen' => null,
      'pie' => 'Octavio Paz',
    ],
  ]);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
