<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Comunicación literaria</h2>
  <p>Asimismo, se debe entender que la enunciación narrativa está dentro de un proceso de comunicación literaria más amplio, como se muestra a continuación:</p>
</section>

<div class="my-8 overflow-x-auto">
  <p class="text-center font-bold text-lg tracking-wide">COMUNICACIÓN LITERARIA</p>
  <p class="text-center font-bold text-lg mb-2 tracking-wide text-gray-400">ENUNCIACIÓN NARRATIVA</p>

  <!-- Diagrama principal -->
  <div class="max-w-4xl mx-auto flex items-stretch gap-0 border-2 border-gray-300 rounded-lg overflow-hidden shadow-lg">

    <!-- Autor real -->
    <div class="bg-gray-200 text-gray-800 p-4 text-center flex flex-col justify-center min-w-[6rem]">
      <p class="font-bold text-sm">AUTOR</p>
      <p class="text-sm">Contexto de producción</p>
    </div>

    <div class="flex items-center justify-center px-1 text-gray-400 text-xl select-none bg-white">&#8594;</div>

    <!-- Mundo ficticio -->
    <div class="flex-1 border-x-2 border-dashed border-gray-400 bg-white">

      <div class="flex items-stretch gap-0 px-2 pb-3">
        <div class="flex items-center justify-center px-1 text-gray-400 text-xl select-none">&#8594;</div>

        <!-- Narrador -->
        <div class="flex-1 bg-cyan-500/30 text-cyan-800 p-3 text-center shadow-sm rounded mt-2">
          <p class="italic text-sm mb-1">¿quién habla?</p>
          <p class="font-bold text-sm">NARRADOR</p>
        </div>

        <div class="flex items-center justify-center px-1 text-gray-400 text-xl select-none">&#8594;</div>

        <!-- Relato -->
        <div class="flex-1 bg-emerald-500/30 text-emerald-800 p-3 text-center shadow-sm rounded mt-2">
          <p class="italic text-sm mb-1">¿de qué habla?</p>
          <p class="font-bold text-sm">RELATO</p>
        </div>

        <div class="flex items-center justify-center px-1 text-gray-400 text-xl select-none">&#8594;</div>

        <!-- Narratario -->
        <div class="flex-1 bg-purple-500/30 text-purple-800 p-3 text-center shadow-sm rounded mt-2">
          <p class="italic text-sm mb-1">¿a quién habla?</p>
          <p class="font-bold text-sm">NARRATARIO</p>
        </div>

        <div class="flex items-center justify-center px-1 text-gray-400 text-xl select-none">&#8594;</div>
      </div>
      <p class="text-center font-bold text-sm mb-2 text-gray-400">Acontecimiento narrado</p>
      <p class="text-center font-bold text-sm mb-2 text-gray-400">Historia</p>
    </div>

    <div class="flex items-center justify-center px-1 text-gray-400 text-xl select-none bg-white">&#8594;</div>

    <!-- Lector real -->
    <div class="bg-gray-200 text-gray-800 p-4 text-center flex flex-col justify-center min-w-[6rem]">
      <p class="font-bold text-sm">LECTOR</p>
      <p class="text-sm">Contexto de recepción</p>
    </div>
  </div>
  <p class="text-center font-bold text-lg mb-6 tracking-wide">Ficcionalización literaria</p>
</div>

<section>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('tlriid2-u1t1p4img1.webp', 'Storytelling kit cover', 'https://upload.wikimedia.org/wikipedia/commons/5/53/Storytelling_kit_cover.jpg', 'Wikimedia Commons');
    ?>
  </div>
  <h3>Tareas del narrador</h3>
  <p>Como se observa en el cuadro anterior, el narrador está dentro del mundo de ficción y tiene a su cargo las siguientes tareas:</p>
  <ul class="ul-disc">
    <li>Contar la historia.</li>
    <li>Articular la estructura interna del texto.</li>
    <li>Establecer diálogos con el narratario.</li>
    <li>Sustentar, en algunas fuentes, la información que comunica.</li>
    <li>Regular la cantidad de información transmitida con base en lo que sabe.</li>
    <li>Establecer juicios de valor ideológicos o estéticos, según convenga y según el tipo de relato.</li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>