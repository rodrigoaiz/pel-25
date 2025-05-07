<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Propiedades de los compuestos con enlace iónico</h3>
    <p>Los compuestos con enlaces iónicos presentan enlaces fuertes que tienen una estructura cristalina y son
        sólidos a temperatura ambiente, aunque también hay enlaces iónicos líquidos a temperatura ambiente. </p>
    <p>Además, son solubles en agua y presentan puntos de fusión y ebullición muy altos: entre 300º C y 1000º C.
        No son conductores de la electricidad en estado sólido y, al ser disueltos en agua, los enlaces iónicos
        se convierten en excelentes conductores de la electricidad.</p>
    <p>Como puedes apreciar, las sales que ya hemos estudiado presentan estas propiedades:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t4_tabla_periodicau1t4_propiedades_enlace_ionico2.webp', 'Propiedades de las sustancias con enlace iónico');
        ?>
    </div>
    <p class="font-bold">Representación de Lewis del enlace iónico</p>
    <p>Como puedes ver en la siguiente imagen, el enlace iónico puede ser representado mediante las estructuras
        de Lewis.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t4_enlace_ionico_atomos.webp', 'Enlace iónico');
        ?>
    </div>
    <p>Vemos en las imágenes anteriores, el átomo del elemento metálico cede o transfiere sus electrones de
        valencia, convirtiéndose en catión. Los átomos de elementos no metálicos aceptan a los electrones
        convirtiéndose en aniones.</p>
    <p>Mira el siguiente video en el cual puedes aprender acerca de qué es el enlace iónico.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('EHhb_Bcj6NY', 'Enlace iónico');
        ?>
    </div>
    <p>Estos son algunos ejemplos de compuestos en los que el enlace iónico está presente:</p>
    <ul class="ul-disc ml-10">
        <li>Cloruro de sodio <span class="text-purple-900 font-serif italic">(NaCl)</span></li>
        <li>Sulfato de cobre <span class="text-purple-900 font-serif italic">(CuSO<sub>4</sub>)</span></li>
        <li>Ioduro de potasio <span class="text-purple-900 font-serif italic">(KI)</span></li>
        <li>Hidróxido de zinc <span class="text-purple-900 font-serif italic">(Zn(OH)<sub>2</sub>)</span></li>
        <li>Nitrato de plata <span class="text-purple-900 font-serif italic">(AgNO<sub>3</sub>)</span></li>
        <li>Fluoruro de litio <span class="text-purple-900 font-serif italic">(LiF)</span></li>
        <li>Cloruro de magnesio <span class="text-purple-900 font-serif italic">(MgCl<sub>2</sub>)</span></li>
        <li>Hidróxido de potasio <span class="text-purple-900 font-serif italic">(KOH)</span> </li>
        <li>Nitrato de calcio <span class="text-purple-900 font-serif italic">(Ca(NO<sub>3</sub>)<sub>2</sub>)</span></li>
        <li>Fosfato de calcio <span class="text-purple-900 font-serif italic">(Ca(PO<sub>4</sub>)<sub>2</sub>)</span></li>
        <li>Dicromato de potasio <span class="text-purple-900 font-serif italic">(K<sub>2</sub>Cr<sub>2</sub>O<sub>7</sub>)</span></li>
        <li>Fosfato disódico <span class="text-purple-900 font-serif italic">(Na<sub>2</sub>HPO<sub>4</sub>)</span></li>
        <li>Sulfuro de hierro <span class="text-purple-900 font-serif italic">(Fe<sub>2</sub>S<sub>3</sub>)</span></li>
        <li>Bromuro de potasio <span class="text-purple-900 font-serif italic">(KBr)</span></li>
        <li>Carbonato de calcio <span class="text-purple-900 font-serif italic">(CaCO<sub>3</sub>)</span></li>
        <li>Hipoclorito de sodio <span class="text-purple-900 font-serif italic">(NaClO)</span></li>
        <li>Sulfato de potasio <span class="text-purple-900 font-serif italic">(K<sub>2</sub>SO<sub>4</sub>)</span></li>
        <li>Cloruro de manganeso <span class="text-purple-900 font-serif italic">(MnCl<sub>2</sub>)</span></li>
    </ul>
    <p>Como bien has notado, los metales alcalinos y alcalinotérreos al formar cationes aportan la carga
        positiva mientras que los halógenos o el oxígeno suelen ser los encargados de generar la carga negativa
        (aniones).</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>