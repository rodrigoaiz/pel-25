<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Gestión de archivos y carpetas</h3>
  <p>Aprendizaje: Describe los elementos del ambiente de trabajo de distintos sistemas operativos y administra archivos y carpetas en uno de ellos.</p>
  <h3>Temática:</h3>
  <h4>Elementos del entorno de trabajo:</h4>
  <ul class="ul-disc">
    <li>Windows</li>
    <li>Linux</li>
    <li>Mac OS</li>
    <li>Android.</li>
  </ul>
  <h4>Administradores de archivos y carpetas:</h4>
  <ul class="ul-disc">
    <li>Almacenamiento local.</li>
    <li>Almacenamiento en la nube.</li>
  </ul>
  <h3>Introducción</h3>
  <p>En la actualidad, es cada vez más común que nuestras actividades diarias estén ligadas a la tecnología de alguna manera, la gestión de archivos y carpetas se ha convertido en una habilidad fundamental para cualquier usuario de computadora o dispositivo móvil, ya que permite organizar y acceder a nuestro contenido digital de manera efectiva.</p>
  <p>Existen diferentes Sistemas Operativos que se utilizan en computadoras y dispositivos móviles como Windows, Linux, Mac OS y Android, los cuales tienen diferentes métodos para acceder y manipular los archivos y carpetas que se almacenan en ellos.</p>
  <p>Para poder administrar eficazmente nuestros archivos y carpetas en distintos sistemas operativos, es necesario conocer los elementos del ambiente de trabajo de cada uno. Esto incluye la interfaz gráfica, es decir, la manera en que se presenta la información en pantalla y los programas o aplicaciones preinstalados que se utilizan para acceder a los archivos y carpetas.</p>
  <p>Además de los sistemas operativos, existen distintos tipos de almacenamiento de archivos, como el almacenamiento local y el almacenamiento en la nube. Cada uno tiene sus ventajas y desventajas, así que es importante evaluar cuál es el mejor para nuestras necesidades.</p>
  <?php ob_start(); ?>
  <p>Por eso, vale la pena plantearse las siguientes preguntas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a17', "Sistema operativo, archivos y carpetas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
