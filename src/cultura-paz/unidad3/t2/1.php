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
    <h2>Estrategias de resolución: negociacion, mediacion, diálogo</h2>
    <p>Frente a un conflicto podemos encontrar distintas <strong>estrategias de resolución,</strong> entre ellas la negociación, la mediación y el diálogo.</p>
    <div class="grid grid-cols-3 gap-4 mt-8">
        <div class="bg-purple-200 p-4 text-white"><?php
                                                    renderImage('u3t2p02-estrategias1.webp');
                                                    ?>
            <p><strong>La negociación</strong> es un proceso mediante las partes involucradas buscan la solución por medio de un acuerdo mutuo.</p>
        </div>
        <div class="bg-purple-300 p-4 text-white"><?php
                                                    renderImage('u3t2p02-estrategias2.webp');
                                                    ?>
            <p><strong>La mediación</strong> en cambio busca ingresar a una tercera persona neutral que ayude a la resolución del conflicto.</p>
        </div>
        <div class="bg-purple-400 p-4 text-white"><?php
                                                    renderImage('u3t2p02-estrategias3.webp');
                                                    ?>
            <p>Por último <strong>el diálogo</strong> va más allá de la resolución inmediata del conflicto, impulsando una comunicación más profunda.</p>
        </div>
    </div>
    <p>Para proceder con la revisión de este apartado, es indispensable ver el siguiente material.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('NrvMqUE_TYY', 'Estrategias para la resolución de conflictos');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>