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
    <h3>Estructura química de carbohidratos</h3>
    <p>En la estructura de los carbohidratos encontramos átomos de carbono, hidrógeno y oxígeno. Presentan numerosos grupos funcionales alcohol (<span class="font-serif">-OH</span>) y los grupos funcionales aldehído (<span class="font-serif">-CHO</span>) o cetona (<span class="font-serif">-CO-</span>), por lo que son denominados polihidroxialdehídos o polihidroxicetonas. En la siguiente imagen observamos su estructura química, así como los grupos funcionales señalados.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_polihidroxi.webp');
        ?>
    </div>
    <p>En la siguiente imagen se observa la estructura de la maltosa. La fórmula estructural nos permite observar el tipo de átomos enlazados, los grupos funcionales, así como el tipo de enlace químico, si es sencillo o doble. La presentación de la estructura no nos permite observar los grupos funcionales aldehído o cetona, por lo cual, tendríamos que dibujarla con otro tipo de proyección.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_maltosa.webp', 'Maltosa.');
        ?>
    </div>
    <p>Si presentamos a la maltosa en una fórmula desarrollada, podemos ver el número total de átomos enlazados, contarlos y así obtener la fórmula molecular, que en este caso es C12H22O11. Ejemplo:</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_maltosa_formula.webp');
        ?>
    </div>
        <?php ob_start(); ?>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a14', "Estructura de los carbohidratos.", $ActividadContent);
        ?>    
    <p class="mt-16">Los carbohidratos pueden clasificarse de acuerdo con su grupo funcional y con el número de carbonos presentes en la estructura química, en la siguiente imagen observamos esta clasificación.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_clasificacion_carbohidratos.webp');
        ?>
    </div>
<p>Los carbohidratos pueden clasificarse de acuerdo con su grupo funcional y con el número de carbonos presentes en la estructura química, en la siguiente imagen observamos esta clasificación.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_glucosa_fructosa.webp');
        ?>
    </div>
<ul class="ul-disc list-inside">
    <li>¿Qué diferencia estructural tienen?
    <li>¿Qué similitudes tienen?</li>
    <li>¿Por qué son denominados isómeros estructurales?</li>
    <li>¿Para qué se utilizan en los alimentos?</li>
    <li>Ejemplifica tres alimentos que contengan estos carbohidratos.</li>
</ul>
<p>Cuando los monosacáridos se encuentran en disolución acuosa pueden adoptar una forma cíclica, esto ocurre cuando uno de sus grupos hidroxilo reacciona con el grupo carbonilo (del grupo aldehído o cetona), proceso que se conoce como ciclación. En la siguiente imagen se observa la estructura de la glucosa lineal y ciclada.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_alfa_beta_glucosa.webp');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>