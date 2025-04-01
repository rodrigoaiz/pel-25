<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'GeniallyIframe.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Formatos de video</h3>
    <p>A continuación se abordará el aprendizaje: "Explica las características de los formatos de video y los aplica" de la unidad 4. Multimedia.</strong></p>
    <?php
    renderImagePleca('u4_t3_pelicula.jpg', 'Imagen de starline.', 'https://www.freepik.es/vector-gratis/tira-pelicula-3d-fondo-luz-brillante_28234250.htm#page=4&query=pelicula%20de%20pelicula&position=1&from_view=search&track=ais&uuid=7eb86026-4934-45f3-9f10-512e0d62012c', 'Freepik.', 'justify-center');
    ?>
    <p>Los formatos de video son estándares que determinan cómo se codifica y almacena la información de video en un archivo digital, con sus propias características y extensiones. Cada formato de video define la estructura, la compresión, la resolución y otros aspectos técnicos que influyen en la calidad y el tamaño del archivo de video. Estos formatos permiten la reproducción y el intercambio de videos en dispositivos y plataformas diferentes. A continuación se presentan las características de los formatos de video: AVI, WMV, FLV, MPG2 y MP4.</p>
    <?php
    $accordionItems1 = [
        [
            'title' => 'AVI (Audio Video Interleave)',
            'content' => '<p>Fue uno de los primeros formatos de video digitales populares y se
                            introdujo en 1992 como parte del sistema operativo Windows 3.1 de Microsoft. A pesar de su
                            antigüedad, sigue siendo utilizado por muchos para la edición de video y la compatibilidad
                            con sistemas Windows.</p>
                            <ul class="ul-list">
                                <li>Formato de video desarrollado por Microsoft.</li>
                                <li>Ampliamente compatible con reproductores de video.</li>
                                <li>Ofrece una buena calidad de video, pero los archivos tienden a ser más grandes.</li>
                                <li>Se utiliza para almacenar videos de alta calidad sin compresión excesiva.</li>
                                <li>Adecuado para la edición de video.</li>
                            </ul>'
        ],
        [
            'title' => 'WMV (Windows Media Video)',
            'content' => '<p>Fue desarrollado por Microsoft como parte de su tecnología Windows Media.
                            Este formato a menudo se asocia con la reproducción de video en línea y se utilizó
                            ampliamente en la década de 2000, pero su popularidad ha disminuido con la llegada de
                            formatos más modernos.</p>
                            <ul class="ul-list">
                                <li>Formato desarrollado por Microsoft y optimizado para sistemas Windows.</li>
                                <li>Ofrece una buena relación entre calidad de video y tamaño de archivo.</li>
                                <li>Ampliamente utilizado para la transmisión de video en línea.</li>
                                <li>Compatible con reproductores de Windows Media.</li>
                            </ul>'
        ],
        [
            'title' => 'FLV (Flash Video)',
            'content' => '<p>Se volvió extremadamente popular gracias a su uso en la plataforma de
                            transmisión de videos en línea, YouTube. La "F" en FLV proviene de "Flash", ya que solía
                            requerir el reproductor Adobe Flash para su visualización, aunque en la actualidad este
                            formato ha sido en gran medida reemplazado por otros.</p>
                            <ul class="ul-list">
                                <li>Formato de video utilizado en su mayoría para la reproducción en la web.</li>
                                <li>Requiere un reproductor Flash para su visualización.</li>
                                <li>Solía ser popular en sitios web y plataformas de transmisión en vivo, como YouTube.
                                </li>
                                <li>Menor calidad en comparación con algunos formatos más modernos.</li>
                            </ul>'
        ],
        [
            'title' => 'MPEG-2 (MPG2)',
            'content' => '<p>Es el formato de video que se utiliza en la mayoría de los DVDs. Debido a
                            su compresión moderada, ofrece una excelente calidad de video para películas en DVD. Este
                            formato fue un estándar importante en la industria de la televisión de definición estándar.</p>
                            <ul class="ul-list">
                                <li>Formato utilizado en la creación de DVD y transmisiones de televisión.</li>
                                <li>Ofrece una buena calidad de video con compresión moderada.</li>
                                <li>Ampliamente compatible con reproductores de DVD y hardware de transmisión.</li>
                                <li>No es tan eficiente en términos de espacio de almacenamiento como formatos más
                                    nuevos.</li>
                            </ul>'
        ],
        [
            'title' => 'MP4 (MPEG-4)',
            'content' => '<p>A pesar de ser un formato de video muy popular, MP4 no solo se utiliza
                            para video, sino también para almacenar una variedad de otros tipos de datos multimedia,
                            como audio, imágenes fijas y subtítulos. Esto lo convierte en un formato versátil y
                            ampliamente compatible.</p>
                            <ul class="ul-list">
                                <li>Ampliamente utilizado en la web y dispositivos móviles.</li>
                                <li>Presenta pérdidas de calidad cuando se comprime el archivo.</li>
                                <li>Compatible con la mayoría de los reproductores y dispositivos.</li>
                                <li>Adecuado para cargar videos en plataformas en línea, como YouTube, y para
                                    dispositivos portátiles.</li>
                            </ul>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p class="mt-10">Ahora revisa en la siguiente imagen interactiva los diferentes usos de estos formatos.</p>
    <?php renderGenially('65431ff62d5aed00113aac5b', 'Formatos de video y sus usos') ?>
    <p class="mt-8">A continuación, refuerza tu aprendizaje de formatos de video y sus características, respondiendo el siguiente ejercicio.</p>
    <?php renderGenially('654422be89eb7c001137f3a0', 'Formatos de video y sus características') ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>