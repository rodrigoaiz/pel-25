<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Ambiente de trabajo de distintos sistemas operativos y administra archivos y carpetas</h3>
  <p>En cuanto a los ambientes de trabajo de sistemas operativos, se refiere al entorno en el que operan los sistemas operativos, incluyendo su interfaz gráfica, la forma en que gestionan archivos y carpetas, así como su interacción con servicios en la nube.</p>
  <p>Los sistemas operativos manejan archivos y carpetas tanto en almacenamiento local como en la nube, en almacenamiento local, los archivos se organizan en carpetas (también conocidas como directorios) y se almacenan en unidades de disco duro o discos duros de estado sólido (SSD), los sistemas operativos brindan interfaces para crear, renombrar, copiar, mover y eliminar archivos y carpetas.</p>
  <p>Por otro lado, la nube se refiere a servicios en línea que permiten almacenar, acceder y gestionar archivos y carpetas a través de Internet.</p>
  <p>Ejemplos populares de servicios en la nube incluyen Google Drive, Dropbox y OneDrive. Estos servicios permiten almacenar datos de manera remota y acceder a ellos desde diferentes dispositivos, con la condición que tengan acceso a Internet.</p>
  <h3>Concepto de archivo y carpeta:</h3>
  <div class="grid md:grid-cols-2 gap-4">
    <div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto">
      <h4>Archivo:</h4>
      <p>Es una unidad básica de almacenamiento de datos en una computadora, puede contener información de diferentes tipos, como texto, imágenes, videos, programas ejecutables y más, los archivos son identificados por nombres y extensiones que indican su tipo de contenido.</p>
      <p>Por ejemplo, "documento.txt" es un archivo de texto con la extensión ".txt", mientras que "imagen.jpg" es un archivo de imagen en formato JPEG.</p>
    </div>
    <div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto">
      <h4>Carpeta (Directorio):</h4>
      <p>También conocida como directorio, es una estructura de organización que contiene archivos y otras carpetas, las carpetas se utilizan para agrupar y organizar los archivos de manera lógica y jerárquica, proporcionan una forma de mantener orden y facilitar la búsqueda y gestión de archivos.</p>
      <p>Las carpetas pueden contener subcarpetas y archivos, lo que permite una organización más detallada y específica.</p>
      <p>En sistemas operativos como Windows, las carpetas se representan visualmente con íconos que se asemejan a carpetas de archivo en la vida real, en sistemas basados en Unix y Linux, las carpetas se llaman "directorios" y están estructuradas en una jerarquía que parte desde el directorio raíz.</p>
    </div>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
