<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Navegador Web</h3>
  <p>Un navegador web es un software de aplicación que permite a los usuarios interactuar con contenido en la World Wide Web. Es decir, es un programa que se ejecuta en una computadora o dispositivo móvil, con la finalidad de acceder a páginas web, como por ejemplo información, imágenes, vídeos, música, etc.</p>
  <?php ob_start(); ?>
  <p>Veamos las siguientes partes que componen a un navegador web.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a7', "Partes de un navegador web.", $ActividadContent);
  ?>
  <p>En general, estas partes varían ligeramente dependiendo del navegador utilizado, pero estas son las características principales que se encuentran en la mayoría de los navegadores web.</p>
  <h3>Algunos ejemplos de navegadores web y sus funciones</h3>
  <p>En la actualidad, los navegadores web se han convertido en una herramienta fundamental para la mayoría de las personas, gracias a ellos, podemos acceder a una gran cantidad de información y servicios en línea, desde buscar información hasta realizar compras en línea, sin embargo, no todos los navegadores son iguales y cada uno tiene sus pros y contras, a continuación explicaremos la importancia de los navegadores web y cómo funcionan, además, de saber sus principales características de cada uno de ellos.</p>
  <p>Si deseas conocer más acerca de los navegadores más populares que se utilizan actualmente, te recomendamos que despliegues el contenido correspondiente a cada uno de ellos, de esta manera, podrás explorar sus características y elegir el navegador que mejor se adapte a tus necesidades y preferencias.</p>
</section>
<div class="grid grid-cols-5 md:grid-cols-2 xl:grid-cols-5 gap-4 px-5 my-3 bg-amarillocla">
  <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
    <div class="flex flex-col justify-between min-h-full">
      <header>
        <h4 class="text-2xl mb-2">Google Chrome</h4>
        <p class="text-md">Es uno de los navegadores web más populares y cuenta con una amplia variedad de funciones, como la búsqueda en la barra de direcciones, pestañas individuales para cada sitio web, sincronización de marcadores y contraseñas a través de dispositivos y extensiones.
        </p>
      </header>
      <footer class="max-w-1/2 mt-5 mx-auto self-end">
        <?php
        renderImage('u1_t2_chrome.webp', 'Imagen de Leonel Sohns.', 'https://commons.wikimedia.org/wiki/File:Google_Chrome_icon_(February_2022).svg', 'Wikimedia Commons');
        ?>
      </footer>
  </article>
  <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
    <div class="flex flex-col justify-between min-h-full">
      <header>
        <h4 class="text-2xl mb-2">Mozilla Firefox</h4>
        <p class="text-md">Otro navegador web popular, Firefox cuenta con características como la navegación privada, la sincronización de marcadores y contraseñas, y la personalización a través de extensiones y temas.</p>
      </header>
      <footer class="max-w-1/2 mt-5 mx-auto self-end">
        <?php
        renderImage('u1_t2_mozilla_firefox_logo.webp', 'Imagen de Danpengui.', 'https://commons.wikimedia.org/wiki/File:Mozilla_Firefox_0.8_logo.png', 'Wikimedia Commons');
        ?>
      </footer>
  </article>
  <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
    <div class="flex flex-col justify-between min-h-full">
      <header>
        <h4 class="text-2xl mb-2">Microsoft Edge</h4>
        <p class="text-md">El navegador web predeterminado en los dispositivos Windows, Edge cuenta con características como la integración con Microsoft 365, la navegación privada y el bloqueo de anuncios.
        </p>
      </header>
      <footer class="max-w-1/2 mt-5 mx-auto self-end">
        <?php
        renderImage('u1_t2_edge_logo_2019.webp', 'Imagen de ABAL1412.', 'https://commons.wikimedia.org/wiki/File:Edge_Logo_2019.svg', 'Wikimedia Commons');
        ?>
      </footer>
  </article>
  <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
    <div class="flex flex-col justify-between min-h-full">
      <header>
        <h4 class="text-2xl mb-2">Safari</h4>
        <p class="text-md">El navegador web predeterminado en los dispositivos Apple, Safari cuenta con características como la navegación privada, el bloqueo de anuncios y la sincronización de marcadores y contraseñas a través de dispositivos.</p>
      </header>
      <footer class="max-w-1/2 mt-5 mx-auto self-end">
        <?php
        renderImage('u1_t2_safari_browser_logo.webp', 'Imagen de Smasongarrison.', 'https://commons.wikimedia.org/wiki/File:Safari_browser_logo.svg', 'Wikimedia Commons');
        ?>
      </footer>
  </article>
  <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
    <div class="flex flex-col justify-between min-h-full">
      <header>
        <h4 class="text-2xl mb-2">Opera</h4>
        <p class="text-md">Este navegador web cuenta con características como una VPN gratuita integrada, un bloqueador de anuncios y una función de ahorro de batería para dispositivos móviles.</p>
      </header>
      <footer class="max-w-1/2 mt-5 mx-auto self-end">
        <?php
        renderImage('u1_t2_opera_icon.webp', 'Imagen de Haideronwiki.', 'https://commons.wikimedia.org/wiki/File:Opera_2015_icon.svg', 'Wikimedia Commons');
        ?>
      </footer>
  </article>
</div>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
