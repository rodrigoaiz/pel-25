<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>En el siguiente video te mostramos cómo abrir, guardar y exportar imágenes:</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('kxDL4UmxG5c', 'GIMP 2.10 Curso BÁSICO ▶▶ 2. Abrir, guardar y exportar imágenes');
        ?>
    </div>
    <p>En el siguiente video aprenderás a utilizar las herramientas de pinturas básicas de GIMP 2.10.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('O4Eo8QGV9To', 'GIMP 2.10 Curso BÁSICO ▶▶ 3. Herramientas de pintura básicas');
        ?>
    </div>
    <p>En el siguiente video aprenderás a utilizar las herramientas de selección básicas.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('MTDNVwKuItw', 'GIMP 2.10 Curso BÁSICO ▶▶  4. Herramientas de selección básicas');
        ?>
    </div>
    <p>En el siguiente video veremos las herramientas de transformación.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('ZQ55mmekkYQ', 'GIMP 2.10 Curso BÁSICO ▶▶ 5. Herramientas de transformación');
        ?>
    </div>
    <p>En el siguiente video aprenderás a manipular texto de forma básica en una imagen.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('UchTWJTGFXM', 'GIMP 2.10 Curso BÁSICO ▶▶ 6. Herramienta de texto');
        ?>
    </div>
    <p>En el siguiente video aprenderás a manejar las herramientas de color básicas dentro de una imagen.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('aLHV_cBtP0A', 'GIMP 2.10 Curso BÁSICO ▶▶ 7. Herramientas de color básicas');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>