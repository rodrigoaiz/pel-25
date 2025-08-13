<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'IseazyIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Paz positiva v.s paz negativa</h2>
    <p>Cuando hablamos de paz, muchas veces pensamos solo en la ausencia de guerras o violencia, pero la paz es un concepto mucho más profundo. Por eso, es importante distinguir entre <strong>paz negativa</strong> y <strong>paz positiva.</strong></p>
    <p>La <strong>paz negativa</strong> se refiere simplemente a que no hay conflictos armados ni violencia directa. Sin embargo, esto no significa que exista verdadera <strong>justicia</strong> o <strong>bienestar</strong>; pueden persistir <strong>desigualdades</strong>, <strong>discriminación</strong> o problemas sociales que, aunque no se expresen con violencia, siguen afectando la convivencia.</p>
    <p>En cambio, la <strong>paz positiva</strong> implica <strong>construir una sociedad basada en el respeto</strong>, la <strong>equidad</strong>, el <strong>diálogo</strong> y la satisfacción de las necesidades básicas de todas las personas. Es decir, no solo evitar la violencia, sino crear condiciones que permitan el desarrollo integral y armonioso de todos.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u2t1p03_desigualdad.webp');
        ?>
    </div>
    <p>Con este tema reflexionaremos sobre cómo podemos avanzar de una paz que solo evita el conflicto, hacia una paz que promueve el <strong>bienestar común</strong> y <strong>relaciones justas</strong> y <strong>solidarias</strong>.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>