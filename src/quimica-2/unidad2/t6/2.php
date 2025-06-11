<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Oxidación de macromoléculas</h2>
    <p>La energía que utilizamos para realizar nuestras actividades diarias proviene de los alimentos que
                consumimos (figura 1). Los compuestos que conforman los nutrimentos (carbohidratos, proteínas y lípidos)
                participan diferentes procesos metabólicos, químicos y enzimáticos, en los cuales las macromoléculas son
                transformadas y las células pueden obtener energía de dichas transformaciones.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t6_img_sal.webp', 'Sal. Imagen de sontung57, Pixabay');
        ?>
    </div>
    <h3>Oxidación de carbohidratos y grasas</h3>
            <p>En la siguiente imagen se presenta un producto alimenticio en el cual la oxidación de azúcares es
                evidente al formarse caramelo por efecto de calor en presencia de oxígeno.</p>
            <div class="w-lg mx-auto">
        <?php
        renderImage('u2t6_img_azucar.webp', 'Azúcar oxidado en la creme brulee. Imagen de freestocks-photos, Pixabay');
        ?>
    </div>
    <p>La oxidación de la glucosa en los seres vivos involucra un conjunto de reacciones enzimáticas, ligadas
                unas con otras y reguladas por un estricto control metabólico, todo con el único fin de hacer disponible
                energía para la célula; la energía química contenida en la glucosa es utilizada para generar ATP.</p>
<div class="w-lg-2 mx-auto">
        <?php
        renderImage('u2t6_img_oxidacion_glucosa.webp', 'Oxidación de la glucosa.');
        ?>
    </div>
<p>La formación de <em>CO<sub>2</sub> + H<sub>2</sub>O + ATP</em> a partir de la glucosa se lleva a cabo
                porque existe oxígeno y, ante la necesidad de energía, se inducen procesos enzimáticos como: (1)
                glucólisis, (2) transformación del piruvato en acetil <em>CoA</em>, (3) ciclo de Krebs y (4)
                fosforilación oxidativa. </p>
            <p>Otra oxidación de los carbohidratos se lleva a cabo durante la combustión; al quemar, por ejemplo,
                glucosa, se obtienen 3 productos: <em>CO<sub>2</sub></em> + <em>H<sub>2</sub>O</em> + energía en forma
                de luz y calor. </p>
            <p>Los organismos vivos han desarrollado la capacidad de oxidar la glucosa de una manera controlada y muy
                rentable, ya que obtienen energía útil para el organismo en lugar de producir luz y calor.</p>
            <p>Las grasas y los aceites, al estar formados de carbono, hidrógeno y oxígeno, también pueden ser oxidados
                hasta <em>CO<sub>2</sub></em> y <em>H<sub>2</sub>O</em>, pero la cantidad de energía que pueden liberar
                es mayor que la producida por masas iguales de carbohidratos, esto se debe a que los carbohidratos ya
                han sido preoxidados y por eso tienen grupos hidroxilo (<em>-OH</em>), los cuales no están presentes en
                las grasas y los aceites.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>