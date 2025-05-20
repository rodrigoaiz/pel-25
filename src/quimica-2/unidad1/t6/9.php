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
    <h3>Cálculos estequiométricos mol-mol y masa-masa</h3>
    <p>Una ecuación química balanceada nos muestra las relaciones numéricas entre cada una de las especies involucradas en un cambio químico. Podemos usar estas relaciones numéricas para escribir proporciones molares, lo que nos permite convertir entre las cantidades de reactivos y/o productos. </p>
    <p class="text-bold">Cálculos estequiométricos mol-mol</p>
    <p>Considera que tienes la siguiente reacción: </p>
    <p class="text-center font-bold">2NaOH + H2SO4 → 2H2O + Na2SO4</p>
    <p>¿Cuántos mol de NaOH se requieren para obtener 3 mol de Na2SO4?</p>
    <p>Para poder resolver esto haremos uso de la Estequiometría…</p>
    <p>Analiza la ecuación y te darás cuenta de que en los reactivos se requieren 2 mol de NaOH y 1 de H2SO4 para formar 2 mol de H2O y 1 mol de Na2SO4, entonces, si en lugar de 1 mol de Na2SO4 deseas obtener 3 mol, puedes establecer la siguiente relación:</p>
    <p class="text-center">2 mol de NaOH ---------> 1 mol de Na2SO4</p>
    <p class="text-center">¿ mol ? -------------> 3 mol de Na2SO4</p>
    <p>Este problema se puede resolver mediante una regla de 3 o por relaciones mol-mol:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_mol-mol.webp');
        ?>
    </div>
    <p>Al realizar el cálculo tenemos que:</p>
    <p>2 X 3 = 6</p>
    <p>6 1 = 6 Así, son <span class="text-red-600">6</span> mol de NaOH los que se requieren para obtener 3 mol de
        Na2SO4</p>
    <p>Veamos otro ejemplo:</p>
    <p class="text-center font-bold">2NaOH + H2SO4 → 2H2O + Na2SO4</p>
    <p>Si en lugar de 2 mol iniciales en reactivos tenemos 3.16 X 10-2 mol de H2SO4 y queremos saber cuántas mol de
        NaOH tendríamos que hacer reaccionar, podríamos establecer la siguiente proporción molar: </p>
    <div class="w-1/6 mx-auto">
        <?php
        renderImage('u1t6_mol-mol-2.webp');
        ?>
    </div>
    <p>Entonces, al multiplicar el número de moles de H2SO4 por este factor, obtenemos el número de moles de NaOH que
        se necesitan:</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u1t6_mol-mol-3.webp');
        ?>
    </div>
    <p>Observa cómo escribimos la proporción molar para que se puedan cancelar los moles de H2SO4 , lo que da como
        resultado moles de NaOH como unidad final. </p>
    <p>Aquí tienes un video que te puede ayudar a entender mejor este tipo de problemas sobre estequiometría.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('5PRlN2k-uG8', 'Estequiometría, resolución de problemas.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>