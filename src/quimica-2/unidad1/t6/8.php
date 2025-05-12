<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

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