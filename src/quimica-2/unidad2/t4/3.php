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
    <h2>Enlace peptídico</h2>
    <p>Cuando dos o más aminoácidos se unen entre sí, forman un péptido. El <strong>enlace peptídico</strong> es el enlace de tipo amida que se forma cuando el grupo carboxilo de un aminoácido reacciona con el grupo amino de otro aminoácido. Dos aminoácidos unidos entre sí mediante un enlace peptídico forman un dipéptido. En un péptido, el aminoácido que se escribe a la izquierda con el grupo amino libre se llama aminoácido N-terminal y el aminoácido C-terminal es el último aminoácido de la cadena que tiene el grupo carboxilo libre. Cada vez que se forma un enlace peptídico se libera una molécula de agua derivada de los grupos ácido carboxílico y amina. </p>
    <div class="w-lg-2 mx-auto">
        <?php
        renderImage('u2t4_img_enlace_pepitdico.webp', 'Formación de enlace peptídico.');
        ?>
    </div>
    <p>Para nombrar un péptido se comienza por el aminoácido N-terminal y después se nombran los demás aminoácidos separados por iones, según el orden determinado por la secuencia, con la terminación y finalmente se indica el nombre completo del aminoácido carbono terminal.</p>
    <p>Por ejemplo, en la imagen siguiente el tripéptido formado por glicina, serina y alanina, se nombra como alanil-seril-glicina. Por comodidad, la secuencia de aminoácidos en el péptido se suele indicar mediante sus correspondientes abreviaturas o códigos de tres letras.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t4_img_tripeptido.webp', 'Formación de un tripéptido Gly-Ser y Ala.');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Da click en el siguiente video y responde las preguntas que se te presentan.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a16', "Enlace peptídico.", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>