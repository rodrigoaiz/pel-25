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
    <h3>Cálculos estequiométricos mol-masa</h3>
    <p>Continuando con el mismo ejemplo de la reacción de formación de una sal a partir de la neutralización entre un
        ácido y una base: </p>
    <p class="text-center">2NaOH + H2SO4 → 2H2O + Na2SO4</p>
    <p>Nos piden la masa de NaOH en gramos, por lo que nuestro último paso es convertir los 6.32 X 10-2 moles de NaOH
        a gramos. Podemos hacer esto usando la masa molar de NaOH (40 g/mol). </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_mol-mol-4.webp');
        ?>
    </div>
    <p>Observa el siguiente video con el cual aprenderás más acerca de cómo realizar correctamente cálculos
        estequiométricos.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('V6vKgd8gUgo', 'Estequiometría, masa-masa, mol-masa, masa-volumen, reactivo Limitante, rendimiento, eficiencia.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>