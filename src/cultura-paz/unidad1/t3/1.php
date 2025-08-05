<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Empatía, escucha activa y comunicación asertiva</h2>
    <?php
    renderImagePleca('u1t3p07-escucha.webp');
    ?>
    <p>En este apartado, revisaremos lo que es la <strong>empatía, la escucha activa</strong> y la <strong>comunicación asertiva,</strong> son muy importantes para poder tener una convivencia sana y poder resolver conflictos de una manera <strong>no violenta.</strong></p>
    <p><strong>La empatía</strong> es la capacidad de <strong>conectarse emocionalmente</strong> con las y los demás individuos, porque permite reconocer, compartir y entender los sentimientos y los estados de ánimo de otras y otros seres humanos; Cuando hablamos de <strong>escucha activa</strong> nos referimos a una manera de comunicarnos en donde se pretende hacerle saber a la persona que nos está comunicando algo que realmente se le está atendiendo y comprendiendo; La <strong>comunicación asertiva</strong> se refiere a las <strong>habilidades comunicativas</strong> necesarias para transmitir ideas, percepciones, sentimientos <strong>sin vulnerar el bienestar y los derechos de los demás.</strong></p>
    <p>Revisa el siguiente video que explica la escucha activa y cómo puedes mejorarla:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('WbWQe6-74OY', '¿Qué es la escucha activa? 5 formas de mejorarla.');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>