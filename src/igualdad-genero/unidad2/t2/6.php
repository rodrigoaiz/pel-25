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
        <li>Bosch, E. <em>et al.</em> (2013). <em>La violencia contra las mujeres. El amor como coartada.</em> Anthropos: Barcelona</li>
        <li>Casique, E. <em>et al.</em> (2010). Violencia en el noviazgo entre los jóvenes mexicanos. UNAM,CRIM: México.</li>
        <li>Fumero, K. <em>et al.</em> (2016). <em>Escuelas libres de violencias machistas.</em> Universitat de les Iles Balears: Palma (Iles Balears)</li>
        <li>Herrera, C. (2009) (Tesis doctoral). <em>La construcción sociocultural del amor romántico.</em> Universidad Carlos III: Madrid.</li>
        <li>Herrera, C. (2022). <em>Mujeres que ya no sufren por amor.</em> Catarata: Madrid</li>
        <li>Herrera, C. (2019). <em>Hombres que ya no hacen sufrir por amor.</em> Catarata: Madrid</li>
        <li>Muñoz, D. (2024). Los dobles discursos de la modernidad y el sometimiento de las mujeres en los espacios privados en México de 1950 a 1970. DIF-Universidad Pedagógica del estado de Sinaloa: México.</li>
        <li>Velázquez, B.O. (2021). El amor romántico. La erotización de la violencia patriarcal. Universidad de Ciencias y Artes de Chiapas: Chiapas</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>