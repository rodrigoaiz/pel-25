<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Introducción</h3>:
  <p>La navegación en Internet se ha convertido en una actividad cotidiana para la mayoría de las personas en la actualidad. Sin embargo, es común que al explorar diferentes sitios web, los usuarios se pierdan o tengan dificultades para recordar la ubicación de una página que les resulte de interés, es en este contexto donde los <strong>marcadores y favoritos de navegación</strong> cobran una gran importancia. </p>
  <p><strong>Los marcadores y favoritos</strong> son herramientas que permiten a los usuarios guardar enlaces de páginas web que han visitado y que les resultan interesantes para poder acceder a ellas de manera rápida y sencilla. Esto significa que, en lugar de tener que buscar nuevamente el sitio web o escribir la dirección en la barra de búsqueda, los usuarios pueden acceder a la página deseada en un solo clic.</p>
  <p>Estas funciones son especialmente útiles para los estudiantes, que pueden emplearlos para organizar y guardar las páginas web que han encontrado para sus investigaciones, proyectos o estudios, de esta manera, pueden acceder a la información relevante de manera rápida y eficiente, sin tener que volver a realizar búsquedas exhaustivas.</p>
  <p>Para seguir aprendiendo acerca de los marcadores o favoritos, te invitamos a explorar el tema de <strong>los navegadores web y sus características</strong>, a continuación se explica con mayor detalle.</p>
  <h3>Historial, marcadores o favoritos</h3>
  <p>Una de las funcionalidades más importantes del navegador web es el historial, que permite visualizar todos los sitios que se han visitado en un periodo determinado de tiempo, además, se puede buscar sitios web específicos en el historial y también borrarlo por completo.</p>
  <p>Otra opción muy útil son los marcadores o favoritos, que permiten guardar los sitios web que se visitan con mayor frecuencia. De esta manera, se puede acceder a ellos rápidamente sin tener que buscarlos nuevamente en el historial, además, los navegadores web ofrecen la posibilidad de organizar los marcadores o favoritos en carpetas, para tener una mejor organización y acceso a los sitios visitados.</p>
  <p>Por último, pero no menos importante, la configuración del navegador web permite personalizar diversos aspectos de la navegación, como la página de inicio, la apariencia del navegador, la gestión de cookies, la privacidad y seguridad, entre otros aspectos.</p>
  <?php
  renderImageComponent('u1_t2_browsers.webp', 'justify-center', 'Imagen de isroma', 'https://pixabay.com/es/illustrations/navegadores-internet-dise%C3%B1o-web-1265309/', 'Pixabay');
  ?>
  <?php ob_start(); ?>
  <p>En este foro diagnóstico, es importante saber organizar la información de las páginas web que visitamos o saber el historial que se deja al visitar páginas en internet, por lo tanto es importante tu reflexión al respecto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a6', "Importancia del historial, marcadores o favoritos", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
