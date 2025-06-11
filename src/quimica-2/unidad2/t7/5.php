<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Obtención de principios activos por síntesis y semi-síntesis</h3>
    <p>No todos los principios activos que se utilizan en la elaboración de medicamentos son de origen natural;
        es más, un gran número de ellos se obtienen a través de reacciones químicas llevadas a cabo en
        laboratorio. Muchos de ellos parten de una molécula de origen natural, a la que se le hacen
        modificaciones estructurales para mejorar sus propiedades, por lo que son denominados
        <strong>semisintéticos</strong>, mientras que otros se obtienen de forma completamente artificial a
        través de una serie de reacciones diseñadas específicamente para su obtención, a estos se les conoce
        como <strong>sintéticos.</strong>
    </p>
    <p>En este tenor revisaremos dos procesos de <strong>semisíntesis:</strong> la obtención del ácido acetil
        salicílico y del salicilato de metilo a partir del ácido acetil salicílico, por ello deberás revisar el
        siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('W7-PUIW5yPk', 'Reacciones de semi-síntesis.');
        ?>
    </div>
</section>
<?php ob_start(); ?>
<section>
    <p>Para conocer más acerca de la importancia del ácido acetilsalicílico te invito a leer el artículo (actividad opcional) “Un medicamento ancestral: ácido acetilsalicílico (Aspirina®)”:</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-green-600"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u2t7-acido-acetilsalicilico.pdf'; ?>" target="_blank">Un medicamento ancestral: ácido acetilsalicílico (Aspirina).</a></p>
    </div>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Para saber más");
?>
<section>
    <?php ob_start(); ?>
    <p>Ahora que ya viste la importancia que juegan los grupos funcionales como centros reactivos para la modificación estructural en la obtención de principios activos semisintéticos, deberás realizar la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a23', "Grupos funcionales en medicamentos", $ActividadContent);
    ?>

</section>
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