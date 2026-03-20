<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>¿Cómo identificar la voz narrativa?</h2>
    <p>Como ya se mencionaba anteriormente, la figura del narrador se percibe, en la enunciación textual, a través de las marcas de los pronombres personales <span class="italic font-bold">yo, tú</span> o <span class="italic font-bold">él</span>, los adjetivos posesivos y las conjugaciones verbales. Así se observa en los siguientes ejemplos:</p>
</section>

<div class="my-8 flex flex-col gap-6 max-w-3xl mx-auto">

    <!-- Primera persona -->
    <div class="border-l-4 border-cyan-500 bg-cyan-500/10 rounded-r-lg shadow-md overflow-hidden">
        <div class="bg-cyan-500 px-5 py-2">
            <p class="font-bold text-white tracking-wide">Narrador en primera persona</p>
        </div>
        <div class="px-6 py-5">
            <blockquote class="font-serif text-gray-800 border-none pl-0">
                "<span class="font-bold not-italic">Yo</span> no lo maté: él solito se le atravesó a la bala."
            </blockquote>
            <p class="text-right text-sm text-gray-500 mt-2 font-medium">José Emilio Pacheco</p>
        </div>
    </div>

    <!-- Segunda persona -->
    <div class="border-l-4 border-purple-500 bg-purple-500/10 rounded-r-lg shadow-md overflow-hidden">
        <div class="bg-purple-500 px-5 py-2">
            <p class="font-bold text-white tracking-wide">Narrador en segunda persona</p>
        </div>
        <div class="px-6 py-5">
            <blockquote class="font-serif text-gray-800 border-none pl-0">
                "<span class="font-bold not-italic">Tú</span> leerás. Se solicita historiador joven. Ordenado. Conocedor de la lengua francesa."
            </blockquote>
            <p class="text-right text-sm text-gray-500 mt-2 font-medium">Carlos Fuentes</p>
        </div>
    </div>

    <!-- Tercera persona -->
    <div class="border-l-4 border-emerald-500 bg-emerald-500/10 rounded-r-lg shadow-md overflow-hidden">
        <div class="bg-emerald-500 px-5 py-2">
            <p class="font-bold text-white tracking-wide">Narrador en tercera persona</p>
        </div>
        <div class="px-6 py-5">
            <blockquote class="font-serif text-gray-800 border-none pl-0">
                "Para saber qué se decía de <span class="font-bold not-italic">él</span> y de su gobierno, el califa recorrió disfrazado la ciudad. Al día siguiente <span class="font-bold not-italic">ordenó</span> destruirla y pasar a cuchillo a sus habitantes."
            </blockquote>
            <p class="text-right text-sm text-gray-500 mt-2 font-medium">José Emilio Pacheco</p>
        </div>
    </div>
</div>
<section>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('tlriid2-u1t1p5img1.webp', 'JOSE EMILIO PACHECO | Octavio Nava / Secretaría de Cultura Ciudad de México from México, CC BY-SA 2.0', 'https://creativecommons.org/licenses/by-sa/2.0', 'Wikimedia Commons');
        ?>
    </div>
    <?php ob_start(); ?>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lee con cuidado los siguientes relatos, identifica en ellos las marcas sean la voz narrativa. Estas marcas pueden ser pronombres, adjetivos posesivos y conjugaciones verbales. Luego da clic para ver el tipo de narrador, si se trata de un narrador en primera, segunda o tercera persona:</li>
    </ol>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u1t1a2', "Voz narrativa", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>