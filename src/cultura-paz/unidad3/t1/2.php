<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'IseazyIframe.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Revisión de contenidos</h2>
    <p>Los <strong>conflictos son parte natural de la vida:</strong> surgen cuando hay diferencias de intereses, opiniones o necesidades. Sin embargo, lo importante no es evitarlos a toda costa, sino <strong>aprender a manejarlos de manera respetuosa y constructiva.</strong></p>
    <p>La <strong>resolución pacífica de conflictos</strong> busca precisamente eso: encontrar soluciones a través del <strong>diálogo,</strong> la <strong>empatía</strong> y el <strong>respeto,</strong> evitando la <strong>violencia</strong> y fomentando acuerdos que beneficien a todas las partes involucradas. Este proceso fortalece nuestras relaciones, construye <strong>confianza</strong> y nos ayuda a <strong>convivir en entornos más justos y armónicos.</strong></p>
    <?php
    renderImagePleca('u3t1p02-resolucion.webp');
    ?>
    <p>A lo largo de este tema, reflexionaremos sobre cómo podemos expresar lo que sentimos y pensamos sin agredir, escuchar activamente a los demás y buscar puntos de acuerdo que nos permitan crecer juntos.</p>
    <p>Para empezar, lee el siguiente texto.</p>
    <div class="w-4/5 mx-auto mt-6 bg-lime-300 rounded-xl p-1">
        <p class="text-center"><a class="text-lime-700" href="<?php echo PATH_DOCS . 'unidad3-resolucion-pacifica-de-conflictos.pdf'; ?>" target="_blank">Resolución pacífica de conflictos: comprender para transformar.</a></p>
    </div>
    <p>A continuación revisaremos la presentación interactiva en la que podrás conocer a profundidad los temas de esta unidad.</p>
</section>
<?php renderiseazy('/764216bab1fa4454a8739b232e71177d') ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>