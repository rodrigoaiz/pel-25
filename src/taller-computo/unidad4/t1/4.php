<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Formatos gráficos</h3>
    <p>En esta lección desarrollaremos el siguiente aprendizaje:</p>
    <p>Aprendizaje esperado:</p>
    <ul class="ul-disc">
        <li>Explicar las características de los formatos gráficos y los aplica.</li>
    </ul>
    <p>Para ello trabajaremos revisando y practicando el siguiente tema y subtemas:</p>
    <p>Formatos gráficos:</p>
    <ul class="ul-disc">
        <li>Características de los formatos de imagen.</li>
        <li>Conversión de imágenes a otros formatos (bmp, jpg, gif, png).</li>
    </ul>
    <h3 class="mt-2">Introducción</h3>
    <p>El formato de imagen es un factor crítico en la reproducción fotográfica y está relacionado directamente con el uso final de la imagen. El formato determina la calidad, tamaño y compatibilidad de las imágenes, y son esenciales para garantizar una reproducción precisa y fiel de la realidad.</p>
    <p>La variedad de formatos casi siempre obedece a razones ergonómicas; el cartel debe ser grande, un sello pequeño, una revista suficientemente grande para poder leerse, pero no mucho para poder manejarla con una mano.</p>
    <p>Las personas a las que dirigimos la imagen, su función y su tipología condicionan el formato de imagen de cualquier diseño. Hay que considerar dos aspectos importantes en relación con el formato, que son el tamaño y la proporción.</p>
    <p>En esta lección, exploraremos la importancia de los formatos de imagen, destacando los diferentes tipos de formatos y sus características. También mencionaremos cómo elegir el formato adecuado para diferentes propósitos y cómo optimizar la calidad de las imágenes en su reproducción. ¡Sigue leyendo para descubrir todo lo que necesitas saber sobre los formatos de imagen!</p>
    <p>Revisa en el siguiente acordeón las características de cada formato de imagen, lee con atentamente para notar las diferencias entre ellos y en qué situación se utilizan.</p>
    <?php
    $accordionItems1 = [
        [
            'title' => 'JPG (Joint Photographic Experts Group)',
            'content' => '<ul><li>Imagen tipo raster o mapa de bits.</li>
            <li>Formato con compresión con poca pérdida.</li>
            <li>Adecuado para imágenes con detalle y numerosos colores, ofrece una buena calidad de imagen con un tamaño de archivo reducido.</li>
            <li>Profundidad de color 24 bits, permite emplear 16.7 millones de colores</li>
            <li>Tamaño de archivo generado relativamente pequeño.</li>
            <li>No permite transparencia.</li>
            <li>No permite animación.</li>
            <li>Empleo publicación de imágenes en página web debido al tamaño pequeño de archivo y la alta calidad de la imagen.</li>
            </ul>'
        ],
        [
            'title' => 'PNG (Portable Network Graphics)',
            'content' => '<ul>
            <li>Imagen tipo raster o mapa de bits.</li>
            <li>Formato con compresión sin pérdida.</li>
            <li>Adecuado para imágenes con gran detalle y numerosos colores, ofrece una excelente calidad de imagen con un tamaño de archivo regular.</li>
            <li>Profundidad de color 24 bits, permite emplear 16.7 millones de colores</li>
            <li>Tamaño de archivo generado relativamente regular, mayor que el de JPG.</li>
            <li>Permite la transparencia y semitransparencia, lo que lo convierte en una opción ideal para logotipos y gráficos con fondos transparentes.</li>
            <li>No permite animación.</li>
            <li>Empleo publicación de imágenes con alta resolución y calidad y por ello el tamaño de archivo es más grande que JPG.</li>
            </ul>'
        ],
        [
            'title' => 'GIF (Graphics Interchange Format)',
            'content' => '<ul>
            <li>Imagen tipo raster o mapa de bits.</li>
            <li>Formato con compresión con pérdida.</li>
            <li>Adecuado para imágenes pequeñas con poco detalle y pocos colores.</li>
            <li>Profundidad de color 8 bits, permite emplear 256 colores.</li>
            <li>Tamaño de archivo generado muy pequeño menor JPG.</li>
            <li>Permite la transparencia, pero no la semitransparencia, lo que lo convierte en una gran opción para logotipos y gráficos con fondos transparentes.</li>
            <li>Permite animación, agrupando varias imágenes en secuencia dentro de un archivo, creando pequeñas animaciones, para iconos e imágenes con movimiento.</li>
            <li>Empleo publicación de imágenes de baja resolución y calidad, pero con transparencia, por ello el tamaño de archivo es más pequeño que JPG. </li>
            </ul>'
        ],
        [
            'title' => 'BMP (Bit Map)',
            'content' => '<ul>
            <li>Imagen tipo raster o mapa de bits.</li>
            <li>Formato sin compresión.</li>
            <li>Adecuado para almacenar imágenes independientes del dispositivo y de la aplicación.</li>
            <li>Profundidad de color 24 bits (16 Millones de colores).</li>
            <li>Tamaño de archivo generado es grande mayor que JPG y PNG.</li>
            <li>No permite la transparencia.</li>
            <li>No permite animación.</li>
            <li>Empleo, fue uno de los formatos de imagen más comunes, pero ha caído en desuso pues se considera obsoleto debido a su naturaleza no optimizada.</li>
            </ul>'
        ],
        [
            'title' => 'WebP',
            'content' => '<ul>
            <li>Imagen tipo raster o mapa de bits.</li>
            <li>Formato con compresión con y sin pérdida.</li>
            <li>Adecuado para fotografías, imágenes y gráficos pequeños, consiguiendo una reducción promedio en tamaño del 30% respecto a PNG y JPEG.</li>
            <li>Profundidad de color 24 bits (16 Millones de colores).</li>
            <li>Tamaño de archivo generado es bastante pequeño, menor que JPG y PNG. Para compresiones sin pérdida, supone una reducción del 26% de tamaño respecto a las PNG, mientras que en las compresiones con pérdida se consiguen imágenes entre un 25 y un 34% más pequeñas que en JPEG, con la misma calidad.</li>
            <li>Permite la transparencia.</li>
            <li>Permite WebP animados en color verdadero, similares a los GIF o APNG, en los que la mejora de la compresión sin pérdida supone el 19%, mientras que con pérdida alcanza el 64% de reducción del tamaño del archivo generado.</li>
            <li>Empleo, publicación de imágenes en página web debido al tamaño pequeño del archivo, publicación de imágenes con alta resolución y calidad, no obstante, el tamaño de archivo es pequeño que JPG y PNG entre un 25 y 34%.</li>
            </ul>'
        ],
        [
            'title' => 'TIFF (Tagged Image File Format)',
            'content' => '<ul>
            <li>Imagen tipo raster o mapa de bits.</li>
            <li>Formato con compresión con pérdidas.</li>
            <li>Adecuado para situaciones en las que la calidad de la imagen es más importante que el tamaño del archivo de la imagen.</li>
            <li>Profundidad de color 24 bits (16 Millones de colores).</li>
            <li>Tamaño de archivo generado es muy grande porque entre otras cosas permite mantener sus capas, por lo que es posible editarlos posteriormente.</li>
            <li>Permite la transparencia.</li>
            <li>No permite animación.</li>
            <li>Empleo para imprimir debido a su alta calidad de imagen. Muchos escáneres también utilizan el formato TIFF para preservar la calidad de las imágenes o documentos digitalizados. También se utiliza en las publicaciones de editoriales y en los documentos de dibujo técnico (planos de edificios, mapas, etc.), por lo que es un formato muy poco (o nada) utilizado en páginas web.</li>
            </ul>'
        ],
        [
            'title' => 'SVG (Scalable Vector Graphics)',
            'content' => '<ul>
            <li>Imagen tipo vectorial.</li>
            <li>Formato sin compresión.</li>
            <li>Adecuado con formas sencillas como logotipos, iconos o ilustraciones simples. No es adecuado para mostrar e imprimir imágenes complejas con gran profundidad de color, ya que se renderiza usando puntos y rutas.</li>
            <li>Profundidad de color 24 bits (16 Millones de colores).</li>
            <li>Tamaño de archivo generado es pequeño.</li>
            <li>Permite la transparencia.</li>
            <li>Permite crear animación.</li>
            <li>Empleo publicación de imágenes en página web debido al tamaño pequeño del archivo. El formato está optimizado para los gráficos 2D y la publicación en la web. También es útil para importar trabajos de arte desde aplicaciones de gráficos 2D a software de modelado 3D.</li>
            </ul>'
        ],
        [
            'title' => 'EPS (Encapsulated PostScript)',
            'content' => '<ul>
            <li>Imagen tipo vectorial.</li>
            <li>Formato con compresión sin pérdidas.</li>
            <li>Adecuado para la edición gráfica, guardar ilustraciones o trabajos de diseño gráfico en programas de ilustración como Adobe Illustrator y CorelDraw.</li>
            <li>Profundidad de color 24 bits (16 Millones de colores).</li>
            <li>Tamaño de archivo generado es muy grande por ser destinado para la impresión.</li>
            <li>Permite la transparencia.</li>
            <li>No permite animación</li>
            <li>Empleo, para la impresión.</li>
            </ul>'
        ],
        [
            'title' => 'PDF (Portable Document Format)',
            'content' => '<ul>
            <li>Imagen tipo vectorial.</li>
            <li>Formato con compresión sin pérdidas.</li>
            <li>Adecuado siendo la mejor opción para los informes visuales interactivos o las infografías, ya que es indexable y tiene texto que se puede buscar. También es posible incluir elementos interactivos en un PDF, por ejemplo, enlaces y botones CTA.</li>
            <li>Profundidad de color 24 bits (16 Millones de colores).</li>
            <li>Tamaño de archivo generado dependerá en gran parte del tipo de contenido que haya en su interior. Si se incluyen imágenes, ocupara un poco más de espacio que si solo tuviera texto, pero no será tanto como el archivo original.</li>
            <li>No permite la transparencia.</li>
            <li>No permite animación</li>
            <li>Empleo, para guardar imágenes e ilustraciones.</li>
            </ul>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p class="font-bold">Reconocimiento de las características de los formatos de imagen.</p>
    <?php ob_start(); ?>
    <p>Ahora realizamos una actividad que te ayudará a asociar el formato de imagen con alguna de sus características, lee cuidadosamente para responder correctamente.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a3', "Características de los formatos de imagen", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Continuamos, te daremos algunas especificaciones y debes recomendarnos el formato de imagen más adecuado para guardarla.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a4', "Selección del formato de imagen", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>