<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Reacciones ácido-base, (neutralización)</h3>
    <p class="font-bold">Ácido de Arrhenius + Base de Arrhenius = Sal + Agua </p>
    <p>Si un ácido de Arrhenius reacciona en presencia de una base de Arrhenius, los productos formados
        resultantes son una sal inorgánica y agua.</p>
    <p>A estas reacciones se les conoce como Reacciones de Neutralización.</p>
    <p>Como ejemplo podemos retomar las reacciones de disociación del <span class="font-serif italic">HCl</span> y del <span class="font-serif italic">NaOH</span></p>
    <p class="text-center my-2"><span class="font-serif italic text-2xl"><span class="text-red-700">H</span>Cl<sub>(ac)</sub> → <span class="text-red-700">H<sup>+</sup></span> + Cl<sup>-</sup><sub>(ac)</sub></span></p>
    <p class="text-center my-2"><span class="font-serif italic text-2xl">Na<span class="text-blue-700">OH</span><sub>(ac)</sub> → Na<sup>+</sup><sub>(ac)</sub> + <span class="text-blue-700">OH<sup>−</sup></span><sub>(ac)</sub></span></p>
    <p>Si sumamos las reacciones obtenemos la ecuación general de neutralización entre el ácido clorhídrico y el
        hidróxido de sodio:</p>
    <p class="text-center my-2"><span class="font-serif italic text-2xl"><span class="text-lime-700">H</span>Cl<sub>(ac)</sub> + Na<span class="text-red-700">OH</span><sub>(ac)</sub> → NaCl<sub>(ac)</sub> + H2O(l)</span></p>
    <div class="w-md-2 mx-auto">
        <?php
        renderImage('u1t4_acidos_y_bases1.webp', 'Relación entre ácidos y bases.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>