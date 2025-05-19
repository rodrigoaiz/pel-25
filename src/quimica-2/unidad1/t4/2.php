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
    <h3>Enlace iónico</h3>
</section>
<?php
renderImagePleca('u1t4_enlace_ionico.webp');
?>
<section>
    <p>¿Qué es el enlace iónico?</p>
    <p>Antes de resolver esta pregunta primero debemos aclarar qué es un enlace.</p>
    <p class="font-bold">Enlace Químico</p>
    <p>Los átomos pueden ganar o perder electrones, provocando así que se conviertan en iones con carga positiva
        y/o negativa, éstos iones pueden interactuar entre ellos debido a la atracción electrostática existente
        y así unirse formando compuestos químicos simples, donde uno de los elementos cede electrones y el otro
        los recibe. </p>
    <p>A esta interacción de la densidad electrónica entre átomos es a lo que denominamos enlaces. Sin embargo,
        existen distintos tipos de enlaces químicos, entre los cuáles podemos mencionar de forma general a tres
        tipos de enlaces químicos.</p>
    <ul class="ul-disc ml-10">
        <li>Enlace covalente</li>
        <li>Enlace iónico</li>
        <li>Enlace metálico</li>
    </ul>
    <p>Observa el siguiente video en el cual se mencionan los tipos de enlace químico. </p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('zF5cyw9Y5yc', 'Tipos de enlaces químicos');
        ?>
    </div>
    <p>A continuación, podrás revisar información referente a las características propias del enlace iónico.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>