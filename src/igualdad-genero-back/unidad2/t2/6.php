<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bibliografía</h2>
    <ul id="biblio" class="ul-disc">
        <li>Alberoni, F. (1988). <em>Enamoramiento y amor.</em> Gedisa: España</li>
        <li>Alberoni, F. (2007). <em>Te amo.</em> Gedisa: España</li>
        <li>Bosch, E. et al. (2013). <em>La violencia contra las mujeres. El amor como coartada.</em> Anthropos: Barcelona</li>
        <li>Fumero, K. et al. (2016). <em>Escuelas libres de violencias machistas.</em> Universitat de les Iles Balears: Palma (Iles Balears)</li>
        <li>Herrera, C. (2009) (Tesis doctoral). <em>La construcción sociocultural del amor romántico.</em> Universidad Carlos III: Madrid.</li>
        <li>Herrera, C. (2022). <em>Mujeres que ya no sufren por amor.</em> Catarata: Madrid</li>
        <li>Herrera, C. (2019). <em>Hombres que ya no hacen sufrir por amor.</em> Catarata: Madrid</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>