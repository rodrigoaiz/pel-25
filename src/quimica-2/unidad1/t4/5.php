<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Teoría de disociación de Arrhenius</h3>
    <p>A finales del siglo XIX, S. Arrhenius (Uppsala, 1859 - Estocolmo, 1927) estudió la disociación iónica de los compuestos inorgánicos, que se producía al disolverlos en agua. </p>
    <p>Él observó que existían compuestos que en disolución acuosa conducen la corriente eléctrica; y pensó que la razón debía ser que daban lugar a iones. </p>
    <p>Este comportamiento disociativo puede observarse en los ácidos y en algunas bases, así, existen bases como los hidróxidos que ya tienen iones en su constitución en estado puro, y esos iones son los mismos que permanecen cuando el hidróxido se disuelve. </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t4_john.webp', 'Svante August Arrhenius Imagen de Preus museum', 'https://upload.wikimedia.org/wikipedia/commons/e/ea/John_Bauer_%285225524135%29.jpg', 'Wikimedia Commons.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>