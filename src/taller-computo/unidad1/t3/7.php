<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Motores de búsqueda</h3>
  <h4>Buscadores</h4>
  <p>Los buscadores permiten encontrar información desde cualquier parte del mundo, éstos son considerados unas grandes bases de datos que dan como resultados una URL (Localizador Universal de Recursos), en donde el recurso puede identificarse como una imagen, audio, video, documento en .doc, .pdf o página web.</p>
  <p>Te invitamos a revisar la siguiente información para que conozcas más sobre los buscadores.</p>
  <?php ob_start(); ?>
  <p>Primero responde una sencilla pregunta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a13', "¿Qué tanto sabes?", $ActividadContent);
  ?>
  <h4>Definición y tipos de buscador</h4>
  <?php
  renderImagePleca('u1_t3_motor_busqueda.webp', 'Imagen de mamewmy.', 'https://www.freepik.es/foto-gratis/motor-busqueda-web-busqueda-barra-blanca-sobre-fondo-azul-representacion-3d_25972451.htm#query=buscadores&position=16&from_view=search&track=sph&uuid=676fbea1-f07c-446d-a68f-98479efbf116', 'Freepik', 'justify-center');
  ?>
  <p>Los buscadores son páginas web que dan acceso a una base de datos donde están almacenadas miles de páginas que son clasificadas por su contenido.</p>
  <h4>Tipos</h4>
  <ul class="ul-disc">
    <li>Índice o directorios</li>
    <li>Buscadores: automáticos, especializado, multibuscadores, metabuscador</li>
    <li>Otras aplicaciones (enciclopedias y diccionarios)</li>
    <li>Índice y Directorios</li>
    <li>Fue uno de los primeros buscadores, el cual consistía en un catálogo clasificado por temas y subtemas. Tenía una base de datos de los sitios registrados con una estructura jerárquica que facilita la consulta de la base de datos.</li>
  </ul>
  <h4>Características</h4>
  <ul class="ul-disc">
    <li>Mantenían la base de datos de manera manual.</li>
    <li>Empleaban una tecnología barata.</li>
    <li>Requerían soporte humano y mantenimiento constante.</li>
    <li>Ejemplo: Yahoo!</li>
  </ul>
  <h4>Motores de búsqueda</h4>
  <p>Son sistemas informáticos que recopilan toda la información que se encuentra almacenada en los servidores web.</p>
  <p class="text-center font-bold">¿Cómo funcionan?</p>
  <p>Analizan toda la información de la página web empleando robots (spider), creando un listado ordenado de los resultados utilizando las palabras clave introducidas por los usuarios.</p>
  <?php ob_start(); ?>
  <p>Da clic en las tarjetas para conocer más de los motores de búsqueda.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a14', "Motores de búsqueda", $ActividadContent);
  ?>
  <p><strong>Para saber más:</strong> Los buscadores son recursos que se emplean constantemente por los usuarios de Internet, como por ejemplo en las investigaciones documentales, por lo que para que conozcan más del tema, revisa el siguiente video y responde lo que se solicita.</p>
  <?php
  renderVideoIframe('Cr-ohCQFfHo', '¿Qué son los motores de búsqueda?', 'max-w-2xl mx-auto');
  ?>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a15', "Tipos de buscadores", $ActividadContent);
  ?>
  <p><strong>NOTA ALUMNO</strong>: se te recomiendan emplear el siguiente <a href="https://www.scribbr.com/citation/generator/apa/" target="_blank">recurso</a> para la generación de referencias de las fuentes consultadas en formato APA.</p>
  <?php ob_start(); ?>
  <p>Realiza el siguiente cuestionario de autoevaluación para que conozcas tu desempeño en el aprendizaje abordado ¡Éxito!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a16', "Buscadores", $ActividadContent);
  ?>
  <p>Ahora que ya conoces los tipos de buscadores y cómo localizar información en estos, te invitamos a que nos sigas acompañando para descubrir cómo los recursos y conceptos que ofrece la Red e Internet y el uso de estos en la vida diaria con el uso de las tecnologías.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
