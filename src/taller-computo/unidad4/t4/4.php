<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Sitios de Publicación para Explorar</h3>
    <ul class="ul-list">
        <li><span class="text-pink-600 font-bold">Banco de archivos en línea</span> es un servicio web que permite almacenar y compartir archivos digitales de forma remota, a través de una conexión a internet. Los usuarios pueden subir, descargar, organizar y compartir sus archivos con otros usuarios o con el público en general, según los permisos que establezcan. Algunos ejemplos de bancos de archivos en línea son Dropbox, Googledrive, OneDrive, etc.</li>
        <li><span class="text-pink-600 font-bold">Repositorio</span> es un espacio centralizado donde se almacena, organiza, mantiene y difunde información digital, habitualmente archivos informáticos, que pueden contener trabajos científicos, conjuntos de datos o software. Los repositorios tienen un propósito académico, cultural o patrimonial, y suelen estar vinculados a una institución o un área temática específica. Los repositorios garantizan el acceso abierto a sus documentos y datos, facilitando la preservación y la visibilidad de la producción intelectual. Algunos ejemplos de repositorios son RiuNet, Repositorio (contenido digital), Archivoz, etc.
            <div class="max-w-2xl mx-auto my-4">
                <?php renderImage('u4_t4_illustration.jpg', 'Imagen de Storyset.', 'https://www.freepik.com/free-vector/content-concept-illustration_7171429.htm#query=sitios%20de%20publicacion&position=46&from_view=search&track=ais', 'Freepik.', 'justify-center') ?>
            </div>
        </li>
        <li><span class="text-pink-600 font-bold">Blog</span> es un sitio web que incluye, a modo de diario personal de su autor o autores, contenidos de su interés, actualizados con frecuencia y a menudo comentados por los lectores. Pueden mostrar una lista de enlaces a otros blogs u otras páginas para ampliar información, citar fuentes o hacer notar que se continúa con un tema que empezó otro blog. Ejemplos de este Blogger, WordPress, etc.</li>
        <li><span class="text-pink-600 font-bold">Sitio web</span> (website), portal o cibersitio es una colección de páginas web relacionadas y comunes a un dominio de internet o subdominio en la World Wide Web dentro de Internet. Todos los sitios web públicamente accesibles constituyen una gigantesca World Wide Web de información, y un gigantesco entramado de recursos de alcance mundial. Algunas herramientas en línea para crear sitios web de manera intuitiva pueden ser; Wix, Weebly, Google sites, SharePoint, etc. </li>
    </ul>
    <p>Estos ejemplos son solo una muestra de los numerosos sitios de publicación disponibles en línea. Cada uno tiene sus propias características y ventajas, y la elección depende de los objetivos y preferencias del usuario.</p>
    <div class="max-w-2xl mx-auto my-4">
        <?php renderImage('u4_t4_homepage.jpg', 'Herramientas de publicación. Imagen de freepik.', 'https://www.freepik.com/free-vector/abstract-creative-homepage-illustration_21743681.htm', 'Freepik.', 'justify-center') ?>
    </div>
    <p>De las siguientes herramientas, explora algunas de ellas e identifica sus características.</p>
    <ol class="ol-number">
        <li><span class="text-pink-600 font-bold">Bancos de Imágenes:</span></li>
        <ul class="ul-list">
            <li>Flickr: Plataforma que permite subir, organizar y compartir fotos.</li>
            <li>Unsplash: Sitio que ofrece fotos de alta resolución de uso libre.</li>
            <li>500px: Comunidad para fotógrafos que comparten y venden sus imágenes.</li>
        </ul>
        <li><span class="text-pink-600 font-bold">Bancos de Audio:</span></li>
        <ul class="ul-list">
            <li>SoundCloud: Plataforma para compartir y descubrir música y audio.</li>
            <li>Audioboom: Sitio para subir y compartir archivos de audio, como podcasts.</li>
            <li>Spotify: Sitio de servicios multimedia, que ofrece música grabada y podcasts digitales
                restringidos por derechos de autor, uno de sus servicios es el freemium.</li>
        </ul>
        <li><span class="text-pink-600 font-bold">Bancos de Video:</span></li>
        <ul class="ul-list">
            <li>YouTube: La plataforma más popular para subir y compartir videos.</li>
            <li>Vimeo: Sitio que destaca por la calidad y creatividad de los contenidos audiovisuales.</li>
        </ul>
    </ol>
    <div class="max-w-2xl mx-auto my-4">
        <?php renderImage('u4_t4_cloud.jpg', 'Bancos de archivos. Imagen de macrovector.', 'https://www.freepik.com/free-vector/cloud-technology-remote-computing_1529243.htm#page=3&query=bancoa%20de%20archivos%20multimedia&position=1&from_view=search&track=ais', 'Freepik.', 'justify-center') ?>
    </div>
    <p class="text-center mt-10">Te invito a que explores e identifiques las características de las plataformas de tu interés, así como sus usos, no necesariamente las que te menciono, puede ser alguna otra.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>