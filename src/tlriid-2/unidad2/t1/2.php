<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Exposición oral</h2>

  <p>En la comunicación humana existen dos formas a través de las cuales podemos emitir información: la expresión escrita y la expresión oral, que es la más común, ya que nos permite relacionarnos con los demás casi de manera inmediata.</p>

  <p>Este tipo de expresión se da por medio de la lengua hablada, de sonidos articulados en forma de palabras. Con ellas podemos decir lo que nos pasa y lo que hemos conocido a lo largo de nuestra vida: con nuestros sentidos.</p>

  <p>Para que los demás comprendan lo que queremos expresar, y que nos escuchen, es importante tener en consideración los siguientes aspectos:</p>
</section>

<div class="my-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">

  <!-- El autodominio -->
  <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-sky-500 px-5 py-3 flex items-center gap-3">
      <span class="text-white text-2xl font-bold">1</span>
      <p class="font-bold text-white tracking-wide">El autodominio</p>
    </div>
    <div class="px-6 py-5 text-gray-700">
      <p>No tener miedo de enfrentarse a un auditorio, para poder concretar lo que ha de decirse.</p>
    </div>
  </div>

  <!-- Organización de las ideas -->
  <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-violet-500 px-5 py-3 flex items-center gap-3">
      <span class="text-white text-2xl font-bold">2</span>
      <p class="font-bold text-white tracking-wide">Organización de las ideas</p>
    </div>
    <div class="px-6 py-5 text-gray-700">
      <p>Saber qué palabras se utilizarán y saber qué se va a decir con ellas. Tener claridad del mensaje que se quiere emitir.</p>
    </div>
  </div>

  <!-- Proyectar emociones -->
  <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-amber-500 px-5 py-3 flex items-center gap-3">
      <span class="text-white text-2xl font-bold">3</span>
      <p class="font-bold text-white tracking-wide">Proyectar emociones</p>
    </div>
    <div class="px-6 py-5 text-gray-700">
      <p>Expresar los estados de ánimo, de manera que el público se convenza de lo que se está expresando.</p>
    </div>
  </div>

  <!-- Volumen de la voz -->
  <div class="border-l-4 border-emerald-500 bg-emerald-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-emerald-500 px-5 py-3 flex items-center gap-3">
      <span class="text-white text-2xl font-bold">4</span>
      <p class="font-bold text-white tracking-wide">Volumen de la voz</p>
    </div>
    <div class="px-6 py-5 text-gray-700">
      <p>La fuerza con la que se hable, considerando el espacio, la distancia y el número de personas que escuchan.</p>
    </div>
  </div>

  <!-- Fluidez -->
  <div class="border-l-4 border-rose-500 bg-rose-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-rose-500 px-5 py-3 flex items-center gap-3">
      <span class="text-white text-2xl font-bold">5</span>
      <p class="font-bold text-white tracking-wide">Fluidez</p>
    </div>
    <div class="px-6 py-5 text-gray-700">
      <p>Utilizar las palabras de manera espontánea, natural y continua; hacer las pausas necesarias.</p>
    </div>
  </div>

</div>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
