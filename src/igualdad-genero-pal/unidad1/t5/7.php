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
        <li>Antolín Villota, L. (2003). <em>La mitad invisible. Género en la educación para el desarrollo.</em> [Versión electrónica]. <a href="https://www.bantaba.ehu.eus/obs/files/view/La_mitad_invisible%2C_g%C3%A9nero_en_la_ED.pdf?revision%5Fid=54659&package%5Fid=54643" target="_blank">https://www.bantaba.ehu.eus/obs/files/view/La_mitad_invisible%2C_g%C3%A9nero_en_la_ED.pdf?revision%5Fid=54659&package%5Fid=54643</a></li>
        <li>Black, A. Buller, L. Hoyle, E. y Tood, M. (2019). <em>La mitad invisible. Género en la educación para el desarrollo.</em> España: Dorling Kindersley</li>
        <li>Etecé. (2016-2024). Cultura. Enciclopedia Humanidades. [Versión electrónica]. <em>Cultura: definición, elementos y características. Cultura: definición, elementos y características</em> (humanidades.com)</li>
        <li>Gobierno del Estado de México. (2019). <em>Hablemos de igualdad de género.</em> [Versión electrónica]. <a href="https://atlasdegenero-semujeres.edomex.gob.mx/sites/atlasdegenero-semujeres.edomex.gob.mx/files/files/Cuaderno%20Hablemos%20de%20Igualdad%202019%20v2.pdf" target="_blank">https://atlasdegenero-semujeres.edomex.gob.mx/sites/atlasdegenero-semujeres.edomex.gob.mx/files/files/Cuaderno%20Hablemos%20de%20Igualdad%202019%20v2.pdf</a></li>
        <li>Navagómez, E. (2013). <em>Piel de niño -cuentos-</em>. México: Universidad Autónoma Chapingo.</li>
        <li>Sociedad Universal. (2024). <em>Qué es la cultura de la igualdad.</em> Consultado el día 20 de febrero de 2024 de Qué es la cultura de la igualdad - Sociedad Universal.</li>
        <li>Tinkerbel2504 (2017). <em>Cómo usar WordArt.</em> [Video YouTube]. <a href="https://www.youtube.com/watch?v=aGpcj7zYrmI&t=5s" target="_blank">https://www.youtube.com/watch?v=aGpcj7zYrmI&t=5s</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>