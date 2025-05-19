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
    <h3>Concepto de masa molar</h3>
    <p>La masa molar de una sustancia es la masa (en gramos) de una mol de partículas de dicha sustancia. En
        otras palabras, la masa de un mol de átomos es la masa que, expresada en gramos, coincide numéricamente
        con su masa atómica relativa. Se mide en g/mol. </p>
    <p>Para comprender mejor esto, imagina que quieres cuantificar un mol de átomos de C12, por lo tanto
        tendrías que reunir en total 6.023 x 1023 átomos de carbono. </p>
    <p>Como ya te habrás dado cuenta, no nos es posible contabilizar a cada uno de estos átomos hasta reunir tal
        cantidad ya que no existen instrumentos de medición tan pequeños con los que podamos contar a las
        partículas atómicas. Sin embargo, haciendo uso de la equivalencia entre el número de Avogadro y el mol,
        podemos convertir esta cantidad en una unidad física que nos es familiar y fácilmente medible, es decir,
        nos referimos a la masa, cuya unidad es el gramo.</p>
    <p>Continuando con la cuestión anterior, al no poder contar esa cantidad de átomos de C, lo que podemos
        hacer es relacionarlo con la cantidad en gramos que representa, así, una mol de átomos de carbono C12
        tienen un valor de masa de 12 gramos.</p>
    <p>Así, los conceptos de mol y de masa molar son muy importantes para los químicos porque conecta el mundo
        macroscópico del laboratorio (masas) con el mundo microscópico de los átomos y las moléculas que no
        podemos ver.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1t6_mol13.webp');
        ?>
    </div>
    <p>Observa el siguiente video que te ayudará a comprender mejor a qué se refiere masa molar.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('We-awGCds2A', 'Mol y masa molar.');
        ?>
    </div>
    <p>Una vez que has visto los videos y has aprendido acerca del mol, te preguntarás: ¿sólo aplica para
        sustancias sólidas y líquidas? ¿En una sustancia gaseosa me es posible cuantificar una mol? </p>
    <p>¿Cuál es el volumen de un mol?</p>
    <p>Cuando las sustancias se encuentran en estado gaseoso es posible calcular el volumen que ocupa un mol. El
        volumen es una medida de la magnitud de la extensión de un cuerpo y su unidad es el metro cúbico (m3) en
        el SI.</p>
    <p>Bajo las condiciones normales de temperatura y presión (T= 25⁰C y P= 1atm), el volumen de un mol de gas
        equivale a 22.4 litros (L). Este valor se llama volumen molar (Vm) y corresponde a los denominados gases
        ideales. Los gases reales tienen valores de Vm ligeramente distintos de este valor. Por ejemplo, el CO2
        tiene Vm=22.3 L.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1t6_mol_volumen.webp', 'Una mol ocupa un volumen de 22.4 L o cm3.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>