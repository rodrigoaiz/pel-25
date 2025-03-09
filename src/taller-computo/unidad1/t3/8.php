<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Estrategias de búsqueda</h3>
  <p>En esta lección se abordará el quinto aprendizaje “Realiza búsqueda y obtiene información por medio de los sistemas de recuperación de información de la biblioteca digital de la UNAM”, de la unidad I.</p>
  <?php
  renderImageComponent('u1_t3_browser.webp', 'justify-center', 'Imagen de 200degrees.', 'https://pixabay.com/es/vectors/navegador-internet-web-b%C3%BAsqueda-1666982/', 'Freepik');
  ?>
  <p>Las estrategias son procedimientos previos a la búsqueda de información, en donde se tiene un tema, del cual se desprenden palabras clave que se unen usando operadores lógicos de exactitud o truncamiento.</p>
  <p>Elementos de la estrategia de búsqueda:</p>
  <ul class="ul-disc">
    <li><strong>Palabras clave:</strong> términos principales de una investigación.</li>
    <li><strong>Operadores Booleanos:</strong> expresión que permite vincular dos o más términos (palabras clave) que puede acotar, extender o limitar de una búsqueda de información.</li>
    <li><strong>Operadores de exactitud:</strong> especifica la proximidad o cercanía de los términos seleccionados en la búsqueda de información (Universidad EAFIT, 2021).</li>
    <li><strong>Operadores de truncamiento:</strong> sustituyen un carácter o varios, a la derecha de un término. Así como para reemplazar prefijos, sufijos o variantes ortográficas, etc. (Universidad de Alcalá, s.f)</li>
  </ul>
  <p>Revisa el siguiente <a href="https://view.genially.com/6458533a9303340019118076/interactive-content-operadores" target="_blank">enlace</a> para que aprendas más de los operadores de búsqueda.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
