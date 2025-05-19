<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Cálculo de masas molares</h3>
    <p>Para calcular la masa molar hay que recurrir a la tabla periódica de elementos. Si tomamos el caso del
        agua (H2O), veremos que una molécula está compuesta por dos átomos de hidrógeno y un átomo de oxígeno.</p>
    <p>Entonces, si revisas la tabla periódica encontrarás que la masa atómica del hidrógeno, quitando
        decimales, es 1 uma y la del oxígeno, 16 uma. Al sumar estos datos de los dos átomos de hidrógeno y el
        átomo de oxígeno, obtenemos una masa molecular de 18 gramos. La masa molar del agua, por lo tanto,
        también es de 18 gramos.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_agua-masa-y-mol-1.webp', 'Una mol de moléculas de agua, equivalen a 18 g (masa molar).');
        ?>
    </div>
    <p>Te invitamos a que observes este video que te explica cómo se realizó el cálculo; además, ejemplifica el
        cálculo de una molécula que te debe ser conocida: el CO2 .</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('YdrSKK5YNYg', '¿Cómo se calcula la masa molar?');
        ?>
    </div>
    <p>¿Cómo se calcula la masa molar?</p>
    <p>Recuerda: “es la masa de 1 mol de partículas de una sustancia”</p>
    <p>Es el mismo dato numérico que la masa molecular (a veces se utiliza indistintamente, el término peso
        molecular), pero con las unidades de g/mol.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u1t6_ejemplos_masa_molar.webp');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Ahora que has aprendido cómo determinar la masa molar de una sustancia, realiza la siguiente
        actividad y pon a prueba tus conocimientos. ¡Éxito!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a21', "Cálculos de masas molares", $ActividadContent);
    ?>
    <p class="mt-20">En el siguiente cuadro te presentamos un resumen de los conceptos más importantes de esta lección.</p>
    <div class="w-4/5 mx-auto">
        <?php
        renderImage('u1t6_estequiometría-mapa-conceptual-8-1024x549.webp', 'Conceptos importantes');
        ?>
    </div>
    <p>Revisa el siguiente link, en donde podrás encontrar información sobre el mol y podrás practicar con el
        mol de una forma divertida.</p>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-blue-950"><a class=" text-gray-50" href="http://www.objetos.unam.mx/quimica/mol/#" target="_blank">Mol y Ley de Avogadro</a></p>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>