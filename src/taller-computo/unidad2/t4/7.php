<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Administradores de archivos y carpetas, almacenamiento local y en la nube</h3>
  <p>Los administradores de archivos y carpetas son herramientas que permiten gestionar y organizar los archivos en un dispositivo.</p>
  <h4>Almacenamiento Local</h4>
  <p>Se refiere a los archivos y carpetas que se encuentran en la memoria física del dispositivo, como el disco duro y las memorias USB.</p>
  <p>Los administradores de archivos locales facilitan la creación, copia, movimiento y eliminación de archivos y carpetas.</p>
  <div class="grid md:grid-cols-2 md:gap-x-4">
    <div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto">
      <p><strong>Ventaja</strong></p>
      <ul class="ul-disc">
        <li>Acceso rápido a los archivos.</li>
        <li>Funciona sin conexión a Internet.</li>
        <li>Mayor control sobre la privacidad y seguridad de los archivos.</li>
      </ul>
    </div>
    <div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto">
      <p><strong>Desventaja</strong></p>
      <ul class="ul-disc">
        <li>Limitado por la capacidad de almacenamiento del dispositivo.</li>
        <li>Los archivos no están disponibles en otros dispositivos a menos que se copien manualmente.</li>
        <li>Mayor riesgo de pérdida de datos en caso de daño o pérdida del dispositivo.</li>
      </ul>
    </div>
  </div>
    <h4>Almacenamiento en la Nube</h4>
    <p>Se refiere a la capacidad de almacenar archivos en servidores remotos a través de Internet.</p>
    <p>Los administradores de archivos en la nube permiten subir, descargar y gestionar archivos desde cualquier lugar con conexión a Internet.</p>
    <p>Ejemplos populares de servicios en la nube incluyen Google Drive, Dropbox y OneDrive.</p>
    <div class="grid md:grid-cols-2 md:gap-x-4">
      <div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto">
        <p><strong>Ventaja</strong></p>
        <ul class="ul-disc">
          <li>Acceso a los archivos desde cualquier dispositivo con conexión a Internet.</li>
          <li> Permite compartir archivos fácilmente con otros usuarios.</li>
          <li>Respaldo automático de los archivos.</li>
        </ul>
      </div>
      <div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto">
        <p><strong>Desventaja</strong></p>
        <ul class="ul-disc">
          <li>Dependencia de la conexión a Internet para acceder a los archivos.</li>
          <li>Costo adicional por capacidad de almacenamiento adicional.</li>
        </ul>
      </div>
    </div>
    <p>Revisar los siguientes videos, para acceder a ellos, simplemente haz clic en las imágenes que se encuentran abajo.</p>
    <div class="grid md:grid-cols-2 gap-4">
      <?php renderVideoIframe('5ugsjqpqSaw', "🟠 Como CREAR UNA CARPETA en la computadora / Windows 📂 Tutorial fácil - RijoAyuda",); ?>
      <?php renderVideoIframe('0sJdHuI4CRM', "Crear carpetas en la nube con GOOGLE DRIVE ▷ 2019",); ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
