<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Concepto de mol y número de Avogadro</h3>
    <p>Para estudiar, comprender y hacer uso de la estequiometría es necesario conocer y tener claros algunos
        conceptos básicos, estos son:</p>
    <ul class="ul-disc ml-10">
        <li>Peso molecular</li>
        <li>Mol</li>
        <li>Masa molar</li>
        <li>Número de Avogadro</li>
    </ul>
    <p>Antes de continuar, revisa el siguiente video donde explican de una manera clara y sencilla estos
        conceptos.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('QDTn__99GpI', 'Conceptos básicos de estequiometría.');
        ?>
    </div>
    <p class="font-bold">¿Qué es el mol?</p>
    <p>El mol es una unidad de medida y es una de las magnitudes estipuladas por el Sistema Internacional de
        Unidades (SI); su símbolo es “mol” y hace referencia a la cantidad de materia que contiene determinado
        número de entidades elementales (átomos, moléculas, partículas, etc) siendo equivalente a la cantidad de
        átomos que hay en 12 gramos del isótopo carbono-12 (C12).</p>
    <p>El mol tiene relación con el número de Avogadro y es una constante utilizada en el campo de la química
        analítica para cuantificar el número de partículas, (moléculas, átomos, electrones) que contiene un mol
        de una sustancia cualquiera. Es una constante que tiene un valor de 6.022 x 1023 mol-1 (6.022140857 x
        1023 mol-1 para ser más exactos), por lo tanto, 1 mol de cualquier sustancia contiene esa cantidad de
        partículas.</p>
    <p>¿Puedes dimensionar qué tan grande es el número de Avogadro?</p>
    <p>El número de Avogadro es 602,000,000,000,000,000,000,000 que es igual a 602,000 trillones = 6.02 x 10^23.
    </p>
    <p>¿Te lo imaginas? Para poder dimensionar mejor esta cantidad, imagina que como tarea del curso tienes que
        reunir 1 mol de sillas y llevarlas al salón de clases para mostrarlas a tus compañeros. ¿Te sería
        posible cumplir con la tarea? La respuesta es no y esto debido a que el número de Avogadro es una
        constante que nos indica una cantidad que se dice es mayor que el número de granos de arena en la tierra
        o incluso el número de estrellas en el universo, es más, si quisiéramos reunir a un mol de personas no
        podríamos ya que en la Tierra somos aproximadamente 7.8 billones de habitantes, cifra que es muy
        inferior a la constante de Avogadro.</p>
    <div class="grid grid-cols-2 gap-4">
        <div><?php
                renderImage('u1t6_playa.webp', 'Mar, Imagen de Candiix,', 'https://pixabay.com/es/photos/gaviota-playa-el-verano-mar-arena-3232350/', 'Pixabay.');
                ?></div>
        <div><?php
                renderImage('u1t6_cielo.webp', 'Vía Láctea Imagen de FelixMittermeier,', 'https://pixabay.com/es/photos/v%c3%ada-l%c3%a1ctea-estrellas-cielo-nocturno-2695569/', 'Pixabay.');
                ?></div>
    </div>
    <p>Sin embargo, en el mundo de las partículas químicas podemos fácilmente tener esta cantidad de átomos,
        moléculas, iones, etc, ya que el número de Avogadro está vinculado a otras constantes físicas
        mensurables como lo es la masa, es decir, el número de Avogadro permite contabilizar partículas
        microscópicas a partir de medidas macroscópicas (como es el caso de la masa). </p>
    <p>En otras palabras, el número de Avogadro permite realizar conversiones entre el gramo y la unidad de masa
        atómica.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_avogadro.webp', 'Amadeo Avogadro, Imagen de Anton,', 'https://commons.wikimedia.org/wiki/Category:Amedeo_Avogadro#/media/File:Amadeo_Avogadro.png', 'ikimedia Commons.');
        ?>
    </div>
    <p>Sabías que el número de Avogadro es tan importante que inclusive se celebra una vez al año el <span class="text-purple-500 font-bold">"día del
            mol"</span>. Así es, el 23 de octubre (10^23) se conmemora al mol. </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_dia_del_mol.webp');
        ?>
    </div>
    <p>Observa los siguientes videos que te presentamos a continuación y aprende un poco más sobre el mol y el
        número de Avogadro.</p>
    <p>¡Que los disfrutes!</p>
    <div class="grid grid-cols-2 gap-4">
        <div><?php
                renderVideoIframe('R48ksyFNGMc', 'Concepto de mol y número de Avogadro.');
                ?></div>
        <div><?php
                renderVideoIframe('P2xAZP_N37E', 'Mol, número de Avogadro y peso molecular.');
                ?></div>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>