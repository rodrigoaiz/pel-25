<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>De acuerdo con Betania V (2023) los aspectos que debes contemplar al elegir el tipo de imagen más adecuado para tus necesidades son:</p>
    <ul class="ul-disc">
        <li><span class="text-pink-600 font-bold">Apariencia:</span> Es evidente que, al hablar de imágenes, la calidad de estas es fundamental. Debe ser lo suficientemente nítida para que se visualice la imagen correctamente en el lugar que se está utilizando.</li>
        <li><span class="text-pink-600 font-bold">Rendimiento:</span> Debes hacerte la siguiente pregunta: <span class="text-pink-800 font-bold">¿cuánto espacio ocupa la imagen y cuánto debe hacerlo?</span> Debes crear una relación que sea lo más adecuada posible para la situación a la que tienes que hacer frente, ya que utilizar una imagen demasiado grande en un lugar en el que es innecesario supondrá que tu alojamiento web se llene antes y, por lo tanto, que tu web experimente problemas de optimización.</li>
        <li><span class="text-pink-600 font-bold">Adaptabilidad:</span> Ciertos formatos de imagen no sufren alteraciones en su calidad al aumentar o disminuir su tamaño. Otros sí que pueden llegar a pixelarse, resultando en una <span class="text-pink-800 font-bold">pérdida de calidad</span> relevante de cara a quienes ven tus imágenes.</li>
        <li><span class="text-pink-600 font-bold">Compresión de la imagen:</span> Esto afecta a la capacidad que tiene un tipo de archivo de imagen para comprimirse y reducir el espacio de almacenamiento que ocupa en función de la calidad que pierde o no al realizarse el proceso de compresión.</li>
        <li><span class="text-pink-600 font-bold">Resolución de la imagen:</span> Qué tan nítida es la imagen, hasta qué tamaño puede mantener esa nitidez, etc.</li>
    </ul>
    <p>Emplear los formatos de imagen adecuados te ayuda a obtener un rendimiento más optimizado para una necesidad concreta. Por ejemplo, si utilizas los formatos adecuados para tu sitio web, tendrás una mayor velocidad de carga, una menor carga del servidor y una mejor experiencia general del usuario.</p>
    <p>Ahora que entiendes cuáles son los beneficios y las diferencias entre los 13 formatos de imagen que recomendamos, aquí tienes una lista práctica de cuándo usar estos formatos y cuándo es mejor evitarlos:</p>
    <ul class="ul-disc">
        <li><span class="text-pink-600 font-bold">JPEG:</span> para imágenes web, para compartir, para guardar archivos en la cámara y para imprimir. Sin embargo, no es la mejor opción para imágenes centradas en el texto.</li>
        <li><span class="text-pink-600 font-bold">PNG:</span> ideal para imágenes web, que estén centradas en el texto, logotipos e imágenes de alta resolución. No es una opción excelente para imprimir.</li>
        <li><span class="text-pink-600 font-bold">BMP:</span> es compatible con los principales navegadores y visores de imágenes, incluso con sus versiones más antiguas. Hoy en día es un formato generalmente obsoleto.</li>
        <li><span class="text-pink-600 font-bold">GIF:</span> ideal para animaciones sencillas y para demostrar los pasos de un tutorial. No es adecuado para imágenes que requieran colores intensos.</li>
        <li><span class="text-pink-600 font-bold">TIFF/TIF:</span> un formato excelente para imprimir y escanear documentos. No es adecuado para su uso en la web.</li>
        <li><span class="text-pink-600 font-bold">HEIF:</span> se utiliza para guardar imágenes de alta calidad en dispositivos más nuevos, proporcionando tamaños de archivo mejor optimizados. No es la mejor opción si necesitas acceder a las imágenes en varios navegadores y sistemas operativos.</li>
        <li><span class="text-pink-600 font-bold">RAW:</span> para fotografías de alta calidad. No es adecuado para su uso en la web o para compartir imágenes.</li>
        <li><span class="text-pink-600 font-bold">PSD:</span> formato de Adobe Photoshop para proyectos de diseño gráfico editables. No es adecuado para uso en la web ni para imágenes para imprimir.</li>
        <li><span class="text-pink-600 font-bold">SVG:</span> ideal para imágenes web, imágenes con formas simples, ilustraciones 2D e importación de imágenes 2D a software de modelado 3D. No es adecuado para mostrar imágenes detalladas con gran profundidad de color, como las fotografías.</li>
        <li><span class="text-pink-600 font-bold">EPS:</span> utilízalo para la impresión, las ilustraciones y los trabajos de diseño gráfico. No es adecuado para fotografías.</li>
        <li><span class="text-pink-600 font-bold">PDF:</span> ideal para la impresión, los informes visuales interactivos y las infografías. No es adecuado si necesita hacer ediciones posteriores a las imágenes.</li>
        <li><span class="text-pink-600 font-bold">INDD:</span> se utiliza en Adobe InDesign para guardar diseños editables o diseños de páginas. No es adecuado para su uso en la web.</li>
        <li><span class="text-pink-600 font-bold">AI:</span> se utiliza en Adobe Illustrator para guardar gráficos vectoriales editables. No es adecuado para su uso en la web.</li>
    </ul>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>