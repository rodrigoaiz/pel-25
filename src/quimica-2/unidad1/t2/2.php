<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Propiedades generales de las sales</h2>
    <h3>Macro y micronutrientes</h3>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u1t2_img_arbol.webp', 'Imagen de Picography.', 'https://pixabay.com/es/photos/%C3%A1rbol-tronco-ra%C3%ADces-ladrar-569275/', 'Pixabay');
        ?>
    </div>
    <p>Los <strong>macronutrientes</strong> se pueden definir como los elementos necesarios en grandes
        cantidades para asegurar el crecimiento y la supervivencia de las plantas.</p>
    <p>Dentro de ellos, existen dos grupos: </p>
    <ul class="ul-list">
        <li>Elementos primarios (<strong>N, P y K</strong>) </li>
        <li>Elementos secundarios (<strong>Ca, Mg</strong> y <strong>S</strong>)</li>
    </ul>
    <p>Los principales micronutrientes son el <strong>Cu, Mn</strong> y <strong>Zn</strong>, indispensables para
        las plantas y para los animales en baja concentración, ya que si alcanzan determinados niveles pueden
        resultar tóxicos para ambos, por lo que su falta en los suelos conlleva a una carencia mientras que su
        exceso a una toxicidad. </p>
    <p>Aunque se encuentran presentes en los suelos en cantidades muy pequeñas son elementos nutritivos
        necesarios para el desarrollo y crecimiento vegetal.</p>
    <p>A continuación, revisa el documento <a href="<?php echo PATH_DOCS . 'u1_t2_nutrientes_para_las_plantas.pdf'; ?>" target="_blank">Macro y micronutrientes</a> y conoce un poco más respecto a este tema.</p>
    <?php ob_start(); ?>
    <p>Después de realizar la lectura valora el aprendizaje que lograste y resuelve el ejercicio para completar los enunciados.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a7', "Nutrientes y Macronutrientes", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>