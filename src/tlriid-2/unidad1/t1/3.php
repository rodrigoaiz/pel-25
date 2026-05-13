<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Enunciación narrativa</h2>
    <p>La enunciación narrativa es el proceso mediante el cual un ente de ficción de un relato asume la voz para contar una historia. En la enunciación narrativa intervienen tres elementos, como se observa a continuación:</p>
</section>

<div class="my-8">
    <p class="text-center font-bold text-lg mb-4">ENUNCIACIÓN NARRATIVA</p>
    <div class="flex items-stretch justify-center gap-0 max-w-3xl mx-auto">
        <div class="flex-1 bg-cyan-500/30 text-cyan-800 p-5 text-center shadow-md">
            <p class="text-sm italic mb-3">¿Quién habla?</p>
            <p class="font-bold text-xl">NARRADOR</p>
        </div>
        <div class="flex items-center justify-center px-2 text-gray-400 text-2xl select-none">&#8594;</div>
        <div class="flex-1 bg-emerald-500/30 text-emerald-800 p-5 text-center shadow-md">
            <p class="text-sm italic mb-3">¿De qué habla?</p>
            <p class="font-bold text-xl">RELATO</p>
            <hr class="border-emerald-400 my-3">
            <p class="text-sm">Acontecimiento narrado</p>
            <p class="text-sm font-medium italic">Historia</p>
        </div>
        <div class="flex items-center justify-center px-2 text-gray-400 text-2xl select-none">&#8594;</div>
        <div class="flex-1 bg-purple-500/30 text-purple-800 p-5 text-center shadow-md">
            <p class="text-sm italic mb-3">¿A quién habla?</p>
            <p class="font-bold text-xl">NARRATARIO</p>
        </div>
    </div>
</div>

<section>
    <p>En este sentido, el narrador sólo vive dentro de la historia, es un ser de papel y, por consiguiente, el <span class="font-bold">narrador NO ES EL AUTOR</span> sino una entidad literaria. El <span class="font-bold">narratario</span>, por otra parte, es el ente de ficción a quien va dirigido el <span class="font-bold">relato</span>. Lo podemos reconocer porque es mencionado por el narrador, o bien porque lo hace explícito a través del vocativo, el imperativo, la negación del subjuntivo en 2ª. persona, la flexión verbal, los pronombres <span class="italic font-bold">tú, te, ti</span> y el posesivo <span class="italic font-bold">tu, tuyo</span>. Esto se puede encontrar, por ejemplo, en las cartas y demás relatos epistolares con intención artística. El narratario equivaldría a un lector ideal, pero no real, ya que el lector real tiene existencia histórica como el autor.</p>
    <p>Un ejemplo de narratario:</p>
    <div class="flex justify-center gap-6 mt-6">
        <div class="w-2/3 bg-lime-500/30 p-6 shadow-lg">
            <p class="font-serif">Pues sepa <span class="font-bold">Vuestra Merced</span>, ante todas cosas, que a mí llaman Lázaro de Tormes, hijo de Tomé González y de Antona Pérez, naturales de Tejares, aldea de Salamanca.</p>
            <p class="font-serif text-right mt-4 font-bold">Anónimo</p>
        </div>
    </div>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('tlriid2-u1t1p3img1.webp', 'Leyendo un libro sustentado por un atril', 'https://commons.wikimedia.org/wiki/File:Leyendo_un_libro_sustentado_por_un_atril.jpg', 'Wikimedia Commons');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>