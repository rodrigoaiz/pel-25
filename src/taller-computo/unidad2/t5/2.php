<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Características de propiedad y licencia</h3>
  <ol class="ol-number">
    <li>
      <h4>GPL (Licencia Pública General de GNU)</h4>
      <p>La GPL es una licencia de software libre ampliamente utilizada que fue creada por la Free Software Foundation (FSF). Se diseñó para garantizar que los <strong>usuarios</strong> tengan las <strong>cuatro libertades</strong> fundamentales del software libre: <strong>la libertad de usar, estudiar, compartir y modificar el software</strong>. La GPL establece que cualquier software derivado de un programa bajo licencia GPL debe distribuirse también bajo los términos de la GPL, lo que garantiza que las modificaciones y mejoras se mantengan como software libre.</p>
    </li>
    <li>
      <h4>Copyright (Derecho de autor)</h4>
      <p>El copyright es un sistema legal que otorga a los creadores de obras originales (como software, música, libros, etc.) el derecho exclusivo de controlar cómo se utilizan y distribuyen sus obras. El copyright protege las obras desde el momento de su creación y no requiere registro formal. Con el software, el copyright permite al titular de los derechos controlar la reproducción, distribución y modificación del software.</p>
    </li>
    <?php renderImage('u2_t5_copyright.webp', 'Imagen de rawpixel.com.', 'https://www.freepik.es/foto-gratis/copyright-diseno-licencia-patente-marca-valor-concepto_17056553.htm#query=copyright&position=0&from_view=search&track=sph&uuid=b6d76897-88b8-42aa-af1b-7f06798a2574', 'Freepik.') ?>
    <li>
      <h4>Piratería de software</h4>
      <p>La piratería de software se refiere al uso, copia o distribución no autorizados de software protegido por derechos de autor. Esto ocurre cuando se utilizan o distribuyen copias ilegales de software sin la debida licencia o permiso del titular de los derechos. La piratería de software es una infracción de los derechos de autor y está sujeta a sanciones legales.</p>
    </li>
    <li>
      <h4>Copyleft</h4>
      <p>El término "copyleft" se utiliza para describir una estrategia legal que utiliza el copyright para permitir la redistribución y modificación de software, siempre y cuando las mismas libertades se mantengan en las versiones modificadas. En lugar de restringir los derechos del usuario, como hace el copyright tradicional, el copyleft garantiza la libertad de uso, modificación y distribución del software.</p>
    </li>
  </ol>
  <?php renderImageComponent('u2_t5_collage_html.webp', 'justify-center', 'Imagen de freepik.', 'https://www.freepik.es/foto-gratis/concepto-collage-html-css-persona_36295462.htm#query=ingeniero%20en%20sistemas&position=18&from_view=search&track=ais&uuid=2bfcf215-5d36-4d8c-aa3c-89ed14728e4e', 'Freepik.') ?>
  <p>En la siguiente actividad observa el video con atención y con base en la información que se proporciona en él responde a las preguntas, puedes tomar notas para tener un resumen de los diferentes tipos de licencias de software.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe('gBztZYlk378', 'Tipos de licencias de software') ?>
  </div>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a22', "Tipos de licencias de software", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
