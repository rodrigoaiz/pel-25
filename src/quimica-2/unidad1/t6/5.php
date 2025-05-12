<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>¿Cómo se calcula el mol?</h3>
    <p>Para calcular los moles es necesario conocer la masa atómica o la molecular, dependiendo de si se trata
        de átomos o compuestos respectivamente. Entonces, para calcular el número de moles de moléculas o átomos
        de una sustancia cualquiera debe realizarse la fracción entre la masa de la sustancia, sobre su masa
        molecular o atómica. Por ejemplo, si queremos calcular el número de moles de X escribimos:</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1t6l_formula_mol.webp');
        ?>
    </div>
    <p>Donde: <span class="font-serif italic">n</span> es el número de moles de <span class="font-serif italic">X</span>, <span class="font-serif italic">m (X)</span> es la masa de <span class="font-serif italic">X</span> y <span class="font-serif italic">M(X)</span> es la masa atómica o molecular de <span class="font-serif italic">X</span>.</p>
    <p>Entra el siguiente enlace y aprende mucho más acerca del mol y la ley de Avogadro, ¡Estamos seguros de
        que te divertirás aprendiendo!</p>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-blue-950"><a class=" text-gray-50" href="http://www.objetos.unam.mx/quimica/mol/#" target="_blank">Mol y Ley de Avogadro</a></p>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>