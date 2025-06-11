<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Isomería de los ácidos grasos cis-trans</h2>
    <p>Entre los ácidos grasos insaturados más comunes están el ácido linoleico, seguido del oleico, presente del cacahuate, oliva y aguacate, además, el linolénico que se encuentra en la soya.</p>
    <p>Cuando los ácidos grasos tienen más de una insaturación presentan un tipo de isomería geométrica, es decir, un cambio en la dirección de su estructura, debido a la localización de la doble ligadura en la cadena de átomos de carbono. En la figura 7 se puede observar el mismo ácido oleico, pero con diferente isomería; en el caso del isómero trans la posición de los átomos de hidrógeno está en dirección opuesta con respecto al doble enlace, mientras que en la isomería cis, se encuentran en la misma dirección.</p>
    <div class="w-xs mx-auto">
        <?php
        renderImage('u2t5_img_cistrans.webp', 'Ácidos grasos insaturados cis-trans.');
        ?>
    </div>
    <p>En estado natural, la mayoría de los ácidos grasos son cis, mientras que los trans se encuentran en grasas hidrogenadas comerciales y en algunos provenientes de rumiantes, como el sebo; la mantequilla contiene aproximadamente del cuatro al 6% de trans que se sintetizan por un proceso de biohidrogenación en el rumen de la vaca. Cabe indicar que las trans son más estables que sus isómeros cis, por lo que no es fácil su degradación, mientras las grasas cis pueden metabolizarse, las trans tardan más tiempo y tienden a acumularse en el organismo.</p>

</section>
<?php ob_start(); ?>
<section>
    <p>Para saber más acerca de las grasas trans y su efecto en el organismo, revisa el siguiente documento, en el cual se expone la química de las grasas trans.</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u2t5p5-grasas2.pdf'; ?>" target="_blank">Grasas 2</a></p>
    </div>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Para saber más");
?>
<style>
    .ul-disc {
        h3 {
            margin-top: 0;
        }

        li {
            margin-top: 0;
        }
    }
</style>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>