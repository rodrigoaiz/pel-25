<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lecturas indispensables</h2>
    <p>
        Today I spent most of the day researching ways to ...
        <span class="inline-flex items-baseline">
            <img src="/dist/assets/icons/filetype-pdf.svg" class="mx-1 size-5 self-center rounded-full" />
            <span>Kramer</span>
        </span>
        keeps telling me there is no way to make it work, that ...
    </p>
    <p>A continuación se muestran algunas breves lecturas, es muy importante que las revises con atención y tomes notas ya que más adelante te serán de mucha utilidad.</p>
    <div class="grid grid-cols-2 gap-6">
        <div class="p-2 bg-linear-to-r from-cyan-500 to-blue-500">
            <?php
            renderImage('lectura1.webp');
            ?>
            <div class="font-bold leading-none text-center"><a href="<?php echo PATH_DOCS . 'derechos-humanos-justicia-e-inclusion.pdf'; ?>" target="_blank" class="text-white text-lg"><span class="inline-flex items-baseline">
                        <img src="/dist/assets/icons/filetype-pdf.svg" class="mx-1 size-5 self-center rounded-full" />
                        <span>Derechos humanos, justicia e inclusión</span></span></a></div>
        </div>
        <div class="p-2 bg-linear-to-t from-sky-500 to-indigo-700"><?php
                                                                    renderImage('lectura2.webp');
                                                                    ?>
            <div class="font-bold leading-none text-center"><a href="<?php echo PATH_DOCS . 'diversidad-equidad-e-inclusion-como-bases-de-la-paz.pdf'; ?>" target="_blank" class="text-white text-lg">Diversidad, equidad e inclusión como bases de la paz</a></div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6 mt-4">
        <div class="p-2 bg-linear-to-bl from-violet-500 to-fuchsia-500"><?php
                                                                        renderImage('lectura3.webp');
                                                                        ?>
            <div class="font-bold leading-none text-center"><a href="<?php echo PATH_DOCS . 'estereotipos-prejuicios-y-discursos-de-odio-una-mirada-desde-los-derechos-humanos.pdf'; ?>" target="_blank" class="text-white text-lg">Estereotipos, prejuicios y discursos de odio: una mirada desde los derechos humanos</a></div>
        </div>
        <div class="p-2 bg-linear-65 from-purple-500 to-pink-500"><?php
                                                                    renderImage('lectura4.webp');
                                                                    ?>
            <div class="font-bold leading-none text-center"><a href="<?php echo PATH_DOCS . 'prevencion-de-la-violencia-escolar-una-responsabilidad-compartida.pdf'; ?>" target="_blank" class="text-white text-lg">Prevención de la violencia escolar: una responsabilidad compartida</a></div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>