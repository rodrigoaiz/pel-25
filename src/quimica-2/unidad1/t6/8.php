<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Balanceo por inspección</h3>
    <p>Con la estequiometría podemos hacer el <strong>cálculo necesario para tener una ecuación química
            balanceada</strong> que determinará las proporciones entre reactivos y productos en una reacción química.</p>
    <p>El balance en la ecuación química obedece a los principios de conservación y los modelos atómicos de Dalton
        como, por ejemplo, la Ley de conservación de masa que estipula que:</p>
    <p class="text-center text-red-600">la masa de los reactivos = la masa de los productos</p>
    <p>En este sentido, la ecuación debe tener igual materia en ambos lados de la ecuación.</p>
    <p class="font-bold">Cálculos estequiométricos</p>
    <p>Realizar un cálculo estequiométrico nos permite balancear una ecuación química. </p>
    <p>Existen 2 maneras: el método por tanteo y el método algebraico. En esta lección aprenderás cómo efectuar el
        balance de una reacción mediante el método de balanceo por tanteo. </p>
    <p class="font-bold">Balanceo por inspección o tanteo</p>
    <p>Para poder efectuar correctamente el método por tanteo para calcular la estequiometría de una ecuación debes
        seguir los siguientes pasos:</p>
    <ul class="ul-disc ml-10">
        <li>Contar la cantidad de átomos de cada elemento químico en la posición de los reactivos (izquierda de la
            ecuación) y comparar esas cantidades en los elementos posicionados como productos (derecha de la ecuación).
        </li>
        <li>Balancear los elementos metálicos.</li>
        <li>Balancear los elementos no metálicos que no sean H y O.</li>
        <li>Balancear primero al H y luego al O</li>
        <li>Realizar cálculo final y verificar que en ambos lados de la reacción exista la misma cantidad de átomos</li>
    </ul>
    <p>Ahora, observa el siguiente ejemplo en dónde se realiza el balance de la reacción de oxidación del metano CH4
        en presencia de oxígeno. </p>
    <p>Cálculo estequiométrico con el método por tanteo en la siguiente ecuación química:</p>
    <p class="text-center">CH4 + O2 → CO2 + H2O</p>
    <p>El carbono está equilibrado porque existe 1 molécula de cada lado de la ecuación. </p>
    <p>El hidrógeno, en cambio, presenta 4 átomos en los reactivos y 2 átomos en los productos. </p>
    <p>Podrás darte cuenta de que, para el caso del oxígeno, hay dos átomos del lado izquierdo (reactivos) y 3 átomos
        en productos.</p>
    <p>Por lo tanto, para realizar el balanceo por tanteo se agrega un 2 a la molécula de H2O en el lado de los
        productos y un 2 en la molécula de O2 en el lado de los reactivos.</p>
    <p class="text-center">CH4 + <span class="text-amber-300">2</span>O2 → CO2 + <span
            class="text-amber-300">2</span>H2O</p>
    <p>De esta forma, para poder tener balanceada la ecuación, es necesario que hagas cálculos de qué número
        (coeficiente estequiométrico) es necesario para que al multiplicarlo por el número de átomos de la sustancia en
        ambos lados de la reacción (tanto en reactivos como en productos) la ecuación química pueda estar finalmente
        balanceada.</p>
    <p class="text-center text-blue-700">CH4 + 2O2 → CO2 + 2H2O</p>
    <p>Los números que anteceden el compuesto, en este caso el <span class="text-amber-300">2</span> de O2 y el <span
            class="text-amber-300">2</span> para H2O se denominan coeficientes estequiométricos.</p>
    <p>Observa el siguiente video para reforzar lo aprendido acerca del método de balanceo por tanteo.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('wl_HCBxpBs0', 'Balanceo por inspección o tanteo.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>