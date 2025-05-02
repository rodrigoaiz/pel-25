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
    <h3>Modelo de Bohr</h3>
    <p>De acuerdo con el modelo de Bohr veamos algunos ejemplos de representación de la estructura del átomo con
        este modelo:</p>
    <p class="text-pink-700 font-bold">Ejemplo 1: Un átomo de Litio (Z=3)</p>
    <p>El Li tiene un número atómico Z=3, indica que tiene <strong>3 electrones,</strong> de acuerdo con el
        modelo de Bohr se deben colocar <strong>2 electrones</strong> en la <strong>primera órbita,</strong>
        como el Li tiene 3 electrones y ya se distribuyeron 2 electrones, solo falta <strong>un
            electrón</strong> el cual debe ir en la <strong>segunda órbita</strong> que corresponde al
        <strong>electrón de valencia</strong>.
    </p>
    <p>Recuerda que los electrones que se encuentran en los últimos niveles de energía se llaman electrones de
        valencia, los cuales son importantes porque intervienen en la formación de enlaces. </p>
    <p>La estructura electrónica del modelo de Bohr para el Li es:</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1_t3_Modelo_Bohr_Li.webp');
        ?>
    </div>
    <p class="text-pink-700 font-bold">Ejemplo 1: Un átomo de Magnesio (Z=12)</p>
    <p>El Mg tiene un número atómico <strong>Z=12</strong>, indica que tiene <strong>12 electrones</strong>, de
        acuerdo con el modelo de Bohr se deben colocar <strong>2</strong> electrones en la <strong>primera
            órbita</strong>, 8 electrones en la <strong>segunda órbita</strong>, como el Mg tiene 12 electrones
        y ya se distribuyeron 10 electrones, solo faltan 2 electrones los cuales debe ir en la <strong>tercera
            órbita</strong> y son los <strong>electrones de valencia</strong>.</p>
    <p>La estructura electrónica del modelo de Bohr para el Mg es:</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1_t3_Modelo_Bohr_Mg.webp');
        ?>
    </div>
    <p class="mt-8">Ahora revisa el siguiente video donde encontrarás otros ejemplos de representaciones de la estructura electrónica del modelo de Bohr.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('eh89UjJkC3I', 'Modelo atómico de Bohr [Ejercicios] - Parte 2');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Con la finalidad de evaluar los aprendizajes logrados, es importante que resuelvas el siguiente ejercicio.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a14', "Modelos de Bohr de átomos", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>