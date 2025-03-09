<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Sistemas de recuperación de información en Internet</h3>
  <p>Son sitios o bases de datos en donde se accede a información previamente almacenada, mediante herramientas informáticas que permiten establecer estrategias de búsqueda específicas. (Pinto, 2018)</p>
  <p>Como un ejemplo de sistemas de recuperación de información, se te invita a revisar el siguiente video donde se presentan los elementos y herramientas con las que cuenta la biblioteca digital de la UNAM (Bidi UNAM) para realizar búsqueda y recuperar información.</p>
  <?php
  renderVideoIframe('nitwywhiva0', 'Sistema de recuperación de información.', 'max-w-2xl mx-auto');
  ?>
  <h3>Catálogos Bibliográficos UNAM</h3>
  <p>Cuenta con un amplio registro de fuentes bibliográficas que puedes encontrar en la <a href="https://view.genially.com/6458935c46cbcb00198e3246/interactive-content-catalogos-unam" target="_blank">Biblioteca digital de la UNAM</a>.</p>
  <?php
  renderImageComponent('u1_t3_library_freepik.webp', 'justify-center', 'Imagen de 200degrees.', 'https://pixabay.com/es/vectors/navegador-internet-web-b%C3%BAsqueda-1666982/', 'Freepik');
  ?>
  <?php ob_start(); ?>
  <p>Realiza el siguiente cuestionario de autoevaluación para que conozcas tu desempeño en el aprendizaje “realiza búsquedas y obtén información por medio de los sistemas de recuperación de información de la biblioteca digital de la UNAM” ¡Éxito!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a17', "Estrategias de búsqueda", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
