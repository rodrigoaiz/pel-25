<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Enlace metálico.</h2>

  <p>Los metales presentan enlace metálico, el cual se caracteriza por la unión de átomos del mismo metal de forma muy cercana en las tres direcciones del espacio, lo cual forma estructuras compactas como se revisó anteriormente. El enlace es omnidireccional porque la densidad electrónica está distribuida en toda la red metálica. </p>

  <p>El modelo que explica este enlace metálico es conocido como <b>mar o nube de electrones</b>, donde el metal se mantiene unido por las fuerzas de atracción de los núcleos positivos y los electrones de valencia deslocalizados en la estructura del metal.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-mar.webp','Este modelo explica las propiedades físicas y químicas de los metales.')
  ?>
  </div>

  <p>Este modelo explica las propiedades físicas de los metales como:</p>



  <ul class="ul-disc">
    <li>Ser buenos conductores de calor y electricidad, al estar los electrones libres en la estructura permiten el movimiento libre de estos en una diferencia de potencial térmico o eléctrico.</li>
    <li>Ser maleables y dúctiles porque permiten que los átomos puedan deslizarse unos sobre otros.</li>
    <li>Ser sólidos y tener altos puntos de fusión y ebullición debido al enlace fuerte entre los átomos.</li>
  </ul>

  <p>Los metales tienen propiedades químicas como:</p>


  <ul class="ul-disc">
    <li>Tienen baja energía de ionización y electronegatividad.</li>
    <li>Se oxidan y forman cationes.</li>
    <li>Reaccionan con ácidos inorgánicos y forman sales.</li>
  </ul>

  <p>En el siguiente video podrás revisar las características del enlace metálico.</p>

  <?php
  renderVideoIframe('_x7E_h_rwpI', 'Enlace metálico.');
  ?>

  <?php ob_start(); ?>
  <p>Con la actividad Enlace metálico reafirmarás lo aprendido.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t5a2', "Enlace metálico.", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
