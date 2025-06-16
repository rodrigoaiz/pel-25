<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Estructura química de lípidos</h3>
    <p>Los lípidos presentan en su estructura química carbono, hidrógeno y oxígeno, algunos lípidos compuestos presentan fósforo y nitrógeno. En la siguiente imagen se observa la clasificación más aceptada de los lípidos, con algunos ejemplos de ellos.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_lipidos_clasificacion.webp', 'Clasificación de los lípidos.');
        ?>
    </div>
    <p>Entre los principales grupos funcionales que podemos encontrar en lípidos son alcoholes, ésteres y ácidos carboxílicos. La siguiente imagen ejemplifica la estructura de tres lípidos y se señalan los diferentes grupos funcionales.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_lipidos.webp', 'Lípidos.');
        ?>
    </div>
    <p>Entre los principales grupos funcionales que podemos encontrar en lípidos son alcoholes, ésteres y ácidos carboxílicos. La siguiente imagen ejemplifica la estructura de tres lípidos y se señalan los diferentes grupos funcionales.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_fosfatidilcolina.webp', 'Fosfatidilcolina.');
        ?>
    </div>
    <p>Este lípido se conforma por la unidad de colina, enlazada a un grupo fosfato, que a su vez, se enlaza a la estructura del glicerol. La formación de la fosfatidilcolina comienza por la esterificación de dos ácidos grasos.</p>
    <p>En la siguiente figura se observan los grupos funcionales de este lípido compuesto:</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_lipidocompuesto.webp', 'Lípido compuesto.');
        ?>
    </div>
    <h3 class="mt-16">Lípidos saturados e insaturados</h3>
    <p>El término saturado e insaturado se aplica a los macronutrimentos denominados lípidos y está relacionado con la presencia de enlaces sencillos (saturaciones) y enlaces dobles (insaturaciones). Si concebimos a la gran familia de lípidos, en esta unidad consideraremos a los ácidos grasos para ejemplificar las saturaciones e insaturaciones. :</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_acido_linoleico.webp', 'Ácido linoleico.');
        ?>
    </div>
    <p>A continuación, observa el siguiente video sobre lípidos saturados e insaturados; posterior a ello, realiza una síntesis de lo aprendido, que no exceda una cuartilla.</p>
    <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('V2vmFnmZ264', 'Ácidos grasos saturados e insaturados | Bioquímica');
    ?>
  </div>  
    <p>La presencia de saturaciones o insaturaciones en los ácidos grasos está relacionada con efectos hacia la salud. El consumo excesivo de grasas saturadas, presentes en alimentos derivados del cerdo y la res, alimentos fritos, produce acumulación de lípidos en el torrente sanguíneo, problemas cardiovasculares, sobrepeso, obesidad, síndrome metabólico, entre otros. Los ácidos grasos insaturados, por ejemplo, aquellos presentes en las carnes como el pescado, así como otros alimentos como la nuez, aceite de oliva y algunos vegetales son benéficos para nuestra salud.</p>
    <p>Para conocer un poco más sobre qué son los lípidos o grasas, te invitamos a leer, comprender y tomar nota de los aspectos relevantes sobre el tema de lípidos que se describe en el Portal Académico del CCH, te sugerimos trabajar a partir del tema de Triglicéridos. Para valorar cómo avanzas en tu aprendizaje en cada apartado, resuelve las preguntas y ejercicios propuestos en el material. </p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>