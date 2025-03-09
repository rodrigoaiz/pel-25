<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Introducción</h3>
  <p>Hoy día, la <strong>inmensa cantidad de información</strong> disponible en <strong>internet</strong> y sus diferentes formas (texto, audio vídeo, imagen y animación) hace necesario <strong>tener un procedimiento</strong> que nos de la <strong>capacidad</strong> para <strong>acceder a la información</strong>, de manera rápida y eficaz, que la información recuperada (obtenida) sea adecuada a nuestras necesidades de información (problema de información) a partir de <strong>fuentes especializadas</strong> (fuentes primarias de información) para realizar <strong>investigaciones documentales de calidad</strong> mediante la puesta en práctica de ese procedimiento llamado: <strong>método o modelo de búsqueda y recuperación de información.</strong> </p>
  <p>La búsqueda y recuperación de información (Information Search And Retrieval, ISR), es el <strong>conjunto de operaciones o tareas</strong> mediante las cuales el usuario localiza y accede a los recursos de información que son pertinentes para la resolución de algún problema de información planteado a través de <strong>una pregunta inicial</strong>. Para darle respuesta se realiza la recuperación de información en forma de texto, imagen, sonido o datos de otras características, de forma adecuada y relevante. (Cordón, Lopez, &amp; Vaquero, 1999).</p>
  <p>La recuperación de la información tiene por objeto: <strong>identificar, localizar, seleccionar y acceder a los recursos de información útiles al usuario.</strong></p>
  <p>Visualiza el video Alfabetización informacional y destrezas bibliotecarias, para complementar la introducción.</p>
  <?php
  renderVideoIframe('pUFdoYsAkoc', 'Alfabetización informacional y destrezas bibliotecarias.' , 'max-w-2xl mx-auto');
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
