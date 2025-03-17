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
  <h3>Elementos del ambiente de trabajo de los diferentes tipos de sistemas operativos</h3>
  <h4>Sistema Operativo Windows</h4>
  <p>Es un Sistema Operativo propietario, amplia gama de software disponible y flexibilidad, puede ser vulnerable a virus y malware, además de ser costoso.</p>
  <?php ob_start(); ?>
  <p>Veamos los siguientes elementos que componen el escritorio de Windows.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a16', "Elementos principales de Windows", $ActividadContent);
  ?>
  <h4>Sistema Operativo Linux</h4>
  <p>Es un Sistema Operativo de código abierto y gratuito basado en el núcleo Linux, se caracteriza por su flexibilidad y personalización, permitiendo a los usuarios adaptar el sistema a sus necesidades específicas.</p>
  <p>Linux es ampliamente utilizado en servidores, dispositivos integrados y computadoras personales debido a su estabilidad, seguridad y amplia variedad de distribuciones, cada una con interfaces y características únicas.</p>
  <p>Distribución de Linux: Es una versión personalizada del sistema operativo que incluye el núcleo, software adicional y una interfaz específica.</p>
  <p>Cada distribución satisface diferentes necesidades de usuarios, algunas se especializan en servidores, otras en facilidad de uso.</p>
  <p>Ejemplos de distribuciones: Ubuntu para usuarios y servidores, Fedora para innovación, Debian para estabilidad, CentOS para aplicaciones empresariales, Arch Linux para usuarios avanzados y con habilidades tecnológicas y Linux Mint para experiencia similar a Windows.</p>
  <p>Hay muchas más distribuciones, cada una con características y enfoques únicos, como por ejemplo la siguiente figura:</p>
  <div class="max-w-3xl mx-auto">
    <?php renderImage("u2_t4_gnu_linux.webp", "Imagen de deviantdark.", "https://www.deviantart.com/deviantdark/art/Powered-by-GNU-Linux-82766279", 'Deviant art.'); ?>
  </div>
  <p>En este caso, nos enfocaremos en uno en particular, que será <strong>Ubuntu</strong>, para detallar cada uno de los componentes que lo conforman.</p>
  <p><strong>Ubuntu</strong>: Conocida por su facilidad de uso y amigable interfaz de usuario, es popular entre los usuarios especializados en sistemas operativos y también es utilizado en servidores, ofrece actualizaciones frecuentes y una gran comunidad de soporte técnico.</p>
  <?php ob_start(); ?>
  <p>Veamos los siguientes elementos que componen el escritorio de Ubuntu.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a17', "Elementos principales de Ubuntu", $ActividadContent);
  ?>
  <h4>Sistema Operativo Mac OS</h4>
  <p>Es el software principal que controla las computadoras Mac de Apple, ofrece una interfaz amigable y fluida, además de características exclusivas para potenciar la creatividad y la productividad, es conocido por su diseño elegante, seguridad robusta y optimización para hardware de Apple.</p>
  <?php ob_start(); ?>
  <p>Veamos los siguientes elementos que componen el escritorio de Mac Os..</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a18', "Elementos principales de Mac Os", $ActividadContent);
  ?>
  <h4>Sistema Operativo Android</h4>
  <p>Es un Sistema Operativo móvil desarrollado por Google, se utiliza en teléfonos inteligentes y tabletas. Ofrece una variedad de aplicaciones, personalización y acceso a servicios en línea.</p>
  <p>Es conocido por su flexibilidad, amplia selección de aplicaciones y la capacidad de sincronizar datos en múltiples dispositivos.</p>
  <?php ob_start(); ?>
  <p>Veamos los siguientes elementos que componen el escritorio de Android.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a19', "Elementos principales de Android", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
