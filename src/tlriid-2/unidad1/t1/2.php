<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La enunciación</h2>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('tlriid2-u1t1p2img1.webp', 'Fotografía de "Tucumán Arde" en la sede de la CGT de los Argentinos Regional Rosario
1968, noviembre', 'https://commons.wikimedia.org/wiki/File:Tucuman_arde_053_0.jpg', 'Wikimedia Commons');
    ?>
  </div>
  <p>La enunciación es un proceso mediante el cual <span class="font-bold">alguien</span> toma la palabra para decir algo. A la persona que asume la voz se le llama <span class="bg-cyan-500/30 text-cyan-700 p-1 font-bold">enunciador</span> y a la persona a quien se dirige el mensaje se nombra <span class="bg-purple-500/30 text-purple-700 p-1 font-bold">enunciatario</span>.</p>
</section>
<div class="flex justify-center gap-6">
  <div class="w-1/3 md:2/3 bg-cyan-500/30 text-cyan-800 p-6 shadow-xl">
    <p class="font-bold text-xl mb-2">Enunciador</p>
    <p>Persona que asume la voz para decir algo.</p>
    <p class="font-bold mt-3">Marcas de 1ª persona del singular en texto escrito:</p>
    <p class="mt-2">Flexión verbal y pronombres: <span class="italic font-bold">yo, me, mí</span></p>
    <p class="mt-2">Posesivos: <span class="italic font-bold">mi, mío</span></p>
    <p class="mt-2">Deícticos: <span class="italic font-bold">aquí, ahora</span></p>
  </div>
  <div class="w-1/3 md:2/3 bg-purple-500/30 text-purple-800 p-6 shadow-xl">
    <p class="font-bold text-xl mb-2">Enunciatario</p>
    <p>Persona a quien se dirige el mensaje.</p>
    <p class="mt-3">En la enunciación siempre existe un intercambio comunicativo: el <span class="font-bold">enunciador</span> produce el mensaje y el <span class="font-bold">enunciatario</span> lo recibe.</p>
    <p class="mt-3">Esta relación puede darse en cualquier tipo de discurso: oral o escrito, formal o informal.</p>
  </div>
</div>
<section>
  <p>En un texto escrito se identifica al enunciador mediante las marcas de la persona gramatical que le corresponden. Así, en el siguiente relato sabemos que el enunciador cuenta un hecho en primera persona:</p>
  <div class="flex justify-center gap-6 mt-6">
    <div class="w-2/3 bg-lime-500/30 p-6 shadow-lg text-center">
      <p class="font-bold text-lg mb-3">ESPEJO ROTO</p>
      <p>Esta mañana, al despertar, <span class="font-bold">me he dado cuenta</span> que por querer vivir <span class="font-bold">he perdido</span> parte de <span class="font-bold">mi</span> vida.</p>
      <p class="mt-3 text-right">Arnulfo López Gómez</p>
    </div>
  </div>
  <p class="mt-6">La enunciación está presente en diversos discursos, como pueden ser el publicitario, el periodístico, el político y, sobre todo, en el texto literario, sobre el cual vamos a profundizar a continuación.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>