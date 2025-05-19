<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Referencias</h2>
    <ul id="biblio" class="ul-disc">
        <li>CIGU, s/f. <em>Glosario para la Igualdad.</em> Glosario de Políticas Universitarias para la Igualdad de Género, UNAM. <a href="https://drive.google.com/file/d/</li>1NAbuv77iGc9JCU6lotvyXF9d8mGFCouo/view" target="_blank">https://drive.google.com/file/d/1NAbuv77iGc9JCU6lotvyXF9d8mGFCouo/view</a>
        <li>CONAPRED, 2016. <em>Glosario de la diversidad sexual, de género y características sexuales.</em> <a href="https://www.gob.mx/cms/uploads/attachment/file/471748/Glosario_TDSyG_WEB.pdf" target="_blank">https://www.gob.mx/cms/uploads/attachment/file/471748/Glosario_TDSyG_WEB.pdf</a></li>
        <li>INMUJERES, s/f. <em>"Sesgo de género" en Glosario para la igualdad.</em> <a href="https://campusgenero.inmujeres.gob.mx/glosario/terminos/sesgo-de-genero" target="_blank">https://campusgenero.inmujeres.gob.mx/glosario/terminos/sesgo-de-genero</a></li>
        <li>Dibuixant el Genere (14 de diciembre de 2016). <em>Dibujando el género: capítulo 1</em> [Video]. <a href="https://www.youtube.com/watch?v=nWKkJ8bjTW4" target="_blank">https://www.youtube.com/watch?v=nWKkJ8bjTW4</a></li>
        <li>Dibuixant el Genere (14 de diciembre de 2016). <em>Dibujando el género: capítulo 2</em> [Video]. <a href="https://www.youtube.com/watch?v=3M0NwHvpO8Q&t=5s" target="_blank">https://www.youtube.com/watch?v=3M0NwHvpO8Q&t=5s</a></li>
        <li>Dibuixant el Genere (14 de diciembre de 2016). <em>Dibujando el género: capítulo 3</em> [Video]. <a href="https://www.youtube.com/watch?v=q6NCWaFVj7s&t=49s" target="_blank">https://www.youtube.com/watch?v=q6NCWaFVj7s&t=49s</a></li>
        <li>Dibuixant el Genere (14 de diciembre de 2016). <em>Dibujando el género: capítulo 4</em> [Video]. <a href="https://www.youtube.com/watch?v=cWjQjvXQwpA&t=66s" target="_blank">https://www.youtube.com/watch?v=cWjQjvXQwpA&t=66s</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>