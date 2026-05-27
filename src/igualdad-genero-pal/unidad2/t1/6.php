<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Legislación para proteger los Derechos Humanos y erradicar la violencia de género</h2>
    <div class="grid grid-cols-3 gap-4 items-end">
        <div><?php
                renderImage('iga7-img06.webp');
                ?></div>
        <div class="col-span-2">
            <p>En importante conocer el <strong>marco jurídico de México</strong> diseñado específicamente para proteger los derechos de las personas y para prevenir y erradicar la <strong>violencia de género.</strong> Es fundamental que conozcamos las leyes e instrumentos legales que existen en nuestro país para defendernos y construir una sociedad donde todas las personas, sin importar su género, puedan vivir libres de violencia. El siguiente video nos mostrará cómo está estructurada esta legislación en México y cuáles son sus alcances. Presta mucha atención para entender cómo estas herramientas nos protegen y cómo podemos utilizarlas.</p>
        </div>
    </div>
    <p class="font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Conocer el marco jurídico que busca proteger los derechos de las mujeres, prevenir y erradicar la violencia de género. </p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Observa con atención el siguiente video, toma notas en tu cuaderno de los principales conceptos.</li>
        <li>Cuando veas los videos reflexiona acerca de lo siguiente:</li>
    </ol>

    <div class="my-6 rounded-2xl border-l-4 border-fuchsia-700 bg-fuchsia-50 p-5 shadow-sm">
        <p class="mb-1 text-xs font-semibold uppercase tracking-widest text-fuchsia-500">Caso para reflexionar</p>
        <p class="text-gray-800">Marco, un joven de 16 años y estudiante del CCH, mantiene una relación sentimental con Pepe. Tras su ruptura, Pepe decide enviar a sus amigos y familiares fotos íntimas de Marco sin su consentimiento. Él se siente humillado, avergonzado y expuesto por la difusión de estas imágenes.</p>
    </div>
    <ol class="ol-number mt-4 space-y-3">
        <li class="rounded-lg bg-fuchsia-100 px-4 py-3 text-fuchsia-900 font-medium">¿Marco puede denunciar este hecho ante las autoridades con base en lo que se conoce como <strong>Ley Olimpia</strong>?</li>
        <li class="rounded-lg bg-fuchsia-100 px-4 py-3 text-fuchsia-900 font-medium">¿Por qué crees que estas leyes en pro de las mujeres son necesarias en México?</li>
    </ol>
    <div class="my-5">
        <?php
        renderVideoIframe('PPeRECua5CQ', '');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>