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
  <h3>Software de Sistema Operativo</h3>
  <p>Es un conjunto de programas que permite administrar y organizar todos los componentes físicos (Hardware) y lógicos (Software) de una computadora, una de sus principales características es proporcionar una interfaz de usuario, facilitando la ejecución de programas y garantizar la comunicación entre el hardware y el software.</p>
  <p>Ejemplos de Sistemas Operativos para Computadores:</p>
  <ul class="ul-disc">
    <li><strong>Windows</strong>: Desarrollado por Microsoft, es uno de los sistemas operativos más populares para computadoras personales. Los ejemplos incluyen Windows 10, Windows 8 y Windows 7.</li>
    <li><strong>macOS</strong>: Desarrollado por Apple Inc., es el sistema operativo exclusivo de las computadoras Mac. Los ejemplos incluyen macOS Big Sur, macOS Catalina y macOS Mojave.</li>
    <li><strong>Linux</strong>: Es un sistema operativo de código abierto basado en el kernel de Linux. Hay varias distribuciones populares como Ubuntu, Fedora y Linux Mint.</li>
  </ul>
  <p>Ejemplo de Sistemas Operativos para Dispositivos Móviles:</p>
  <ul class="ul-disc">
    <li><strong>Android</strong>: Desarrollado por Google, es el sistema operativo más utilizado en dispositivos móviles a nivel mundial. Se encuentra en smartphones y tablets de diversos fabricantes.</li>
    <li><strong>iOS</strong>: Desarrollado por Apple Inc., es el sistema operativo exclusivo de los dispositivos iPhone, iPad y iPod Touch. Proporciona una experiencia integrada con los servicios de Apple.</li>
  </ul>
  <p>Si estás interesado en ampliar tus conocimientos sobre los diversos tipos de Sistemas Operativos utilizados en la actualidad, te sugerimos explorar el contenido relacionado con cada uno de ellos, de esta manera, podrás familiarizarte con las características de cada uno de ellos y tomar una decisión informada al elegir aquel que se ajuste mejor a tus necesidades y preferencias. Da clic sobre cada uno para aprender sobre ellos.</p>
</section>

<div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto">
  <h4>Windows</h4>
  <p class="strong">Características:</p>
  <ul class="ul-disc">
    <li><strong>Tipo de sistema operativo:</strong> Es un software propietario, utilizado en la mayoría de las computadoras personales.</li>
    <li><strong>Interfaz gráfica de usuario</strong>: Es intuitiva con iconos y ventanas.</li>
    <li><strong>Personalización</strong>: Permite personalizar fondos de pantalla, temas y opciones de configuración.</li>
    <li><strong>Compatibilidad de software</strong>: Amplia disponibilidad de software comercial y aplicaciones.</li>
    <li><strong>Seguridad</strong>: Son vulnerables a malware y virus, requiere software antivirus</li>
    <li><strong>Hardware compatible</strong>: Compatible con una amplia gama de hardware de terceros</li>
    <li><strong>Actualizaciones</strong>: Sus actualizaciones son reguladas por la empresa y lanzadas periódicamente.</li>
    <li><strong>Orientado a</strong>: Usuarios de escritorio y negocios.</li>
    <li><strong>Sus licencias</strong>: Son comerciales con diferentes ediciones y precios.</li>
  </ul>
  <div class="max-w-1/2 mx-auto">
    <?php renderImage("u2_t4_laptop.webp", "Imagen de PhotoMIX-Company.", "https://pixabay.com/photos/laptop-computer-windows-screen-5603790/", 'Pixabay'); ?>
  </div>
</div>
<div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto mt-5">
  <h4>Linux</h4>
  <p class="strong">Características:</p>
  <ul class="ul-disc">
    <li><strong>Tipo de sistema operativo:</strong> Es un software de código abierto, utilizado en una amplia variedad de dispositivos y servidores.</li>
    <li><strong>Interfaz gráfica de usuario:</strong> Diversas opciones de interfaz, como GNOME y KDE (GNOME y KDE son dos entornos de escritorio populares en el mundo del software libre y de código abierto, ambos ofrecen una interfaz gráfica y herramientas para interactuar con un sistema operativo).</li>
    <li><strong>Personalización:</strong> Altamente personalizable, con opciones para cambiar el aspecto.</li>
    <li><strong>Compatibilidad de software:</strong> Amplia variedad de software libre y código abierto</li>
    <li><strong>Seguridad:</strong> Mayormente seguro debido a su estructura y control de permisos.</li>
    <li><strong>Hardware compatible:</strong> Compatible con una variedad de hardware, incluyendo hardware antiguo.</li>
    <li><strong>Actualizaciones:</strong> Actualizaciones frecuentes y nuevas versiones disponibles</li>
    <li><strong>Orientado a:</strong> Para computadoras personales, incluyendo servidores y usuarios avanzados.</li>
    <li><strong>Sus licencias:</strong> Licencia GPL y otras licencias de código abierto.</li>
  </ul>
  <div class="max-w-1/2 mx-auto">
    <?php renderImage("u2_t4_linux.webp", "Imagen de mobilturka.", "https://pixabay.com/photos/linux-ubuntu-logo-operating-system-7207969", 'Pixabay'); ?>
  </div>
</div>
<div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto mt-5">
  <h4>macOS</h4>
  <p class="strong">Características:</p>
  <ul class="ul-disc">
    <li><strong>Tipo de sistema operativo:</strong> Es un software propietario, exclusivo de los dispositivos Mac de Apple.</li>
    <li><strong>Interfaz gráfica de usuario:</strong> Diseño elegante y minimalista.</li>
    <li><strong>Personalización:</strong> Limitada en comparación con otros sistemas operativos.</li>
    <li><strong>Compatibilidad de software:</strong> Disponibilidad de software comercial y aplicaciones.</li>
    <li><strong>Seguridad:</strong> Menos vulnerabilidades en comparación con otros sistemas operativos.</li>
    <li><strong>Hardware compatible:</strong> Exclusivo para dispositivos Mac de Apple.</li>
    <li><strong>Actualizaciones:</strong> Actualizaciones regulares y nuevas versiones disponibles.</li>
    <li><strong>Orientado a:</strong> Usuarios de dispositivos Mac y profesionales creativos.</li>
    <li><strong>Sus licencias:</strong> Licencia comercial exclusiva de Apple.</li>
  </ul>
  <div class="max-w-1/2 mx-auto">
    <?php renderImage("u2_t4_imac.webp", "Imagen de Firmbee.", "https://pixabay.com/photos/imac-apple-ipad-iphone-computer-793042/", 'Pixabay'); ?>
  </div>
</div>
<div class="bg-secondary/20 px-4 py-2 rounded-lg max-w-5xl mx-auto mt-5">
  <h4>Android</h4>
  <p class="strong">Características:</p>
  <ul class="ul-disc">
    <li><strong>Tipo de sistema operativo:</strong> Es un software de código abierto, utilizado en la mayoría de los dispositivos móviles.</li>
    <li><strong>Interfaz gráfica de usuario:</strong> Una interfaz gráfica, moderna y amigable.</li>
    <li><strong>Personalización:</strong> Personalizable con fondos de pantalla, temas y widgets.</li>
    <li><strong>Compatibilidad de software:</strong> Amplia disponibilidad de aplicaciones en Google Play Store.</li>
    <li><strong>Seguridad:</strong> Vulnerable a malware y virus, requiere software de seguridad.</li>
    <li><strong>Hardware compatible:</strong> Compatible con una amplia gama de dispositivos móviles.</li>
    <li><strong>Actualizaciones:</strong> Actualizaciones regulares y nuevas versiones disponibles.</li>
    <li><strong>Orientado a:</strong> Usuarios de dispositivos móviles y tablets.</li>
    <li><strong>Sus licencias:</strong> Licencia GPL y otras licencias de código abierto.</li>
  </ul>
  <div class="max-w-1/2 mx-auto">
    <?php renderImage("u2_t4_phone.webp", "Imagen de StockSnap.", "https://pixabay.com/photos/android-smartphone-mobile-phone-691178/", 'Pixabay'); ?>
  </div>
</div>

<section>
  <?php ob_start(); ?>
  <p>Es momento de comprobar tu aprendizaje con el siguiente reto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a15', "SO más populares", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Con el fin de finalizar la discusión sobre el tema de los Tipos de Sistemas Operativos, es imprescindible elaborar un cuestionario que nos permita evaluar los conocimientos adquiridos en este tema, por lo tanto, te animamos a responderlo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a16', "Tipos de Sistemas Operativos", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
