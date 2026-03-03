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

  <p>Con la actividad Enlace metálico reafirmarás lo aprendido.</p>
  <?php ob_start(); ?>
  <p>Como revisaste en esta lección, el tema central son los metales, el tipo de enlace, las características que distinguen a este enlace.  Como actividad de cierre realizarás una presentación digital basada en una investigación individual sobre un metal.</p>
  <p>Instrucciones:</p>
  <ol>
    <li><strong>Selecciona</strong> un metal relevante e interesante para ti en tu vida cotidiana.</li>
    <li><strong>Realiza</strong> una investigación sobre este metal de fuentes confiables y verídicas que considere los siguientes puntos:</li>
    <ol style="list-style: lower-alpha;">
      <li>Estructura química: Investiga y representa en un modelo la estructura de empaquetamiento compacto del metal seleccionado (puedes emplear modelos físicos o digitales).</li>
      <li>Propiedades: Describe las propiedades físicas y químicas del metal, como punto de fusión y ebullición, densidad, color, propiedades periódicas del metal, reactividad en agua y ácidos, etc.</li>
      <li>Aplicaciones: Investiga y presenta las diversas aplicaciones del metal en la industria,  sistemas biológicos y en la vida cotidiana.</li>
      <li>Impacto social y ambiental: Analiza el impacto positivo y negativo del metal en la sociedad y en el medio ambiente.</li>
    </ol>    
    <li>Con la investigación realizada, <strong>elabora</strong> una presentación en alguna aplicación digital, considerando:</li>
    <ol style="list-style: lower-alpha;">
      <li>Portada con datos generales.</li>
      <li>Título llamativo y original.</li>
      <li>Introducción del metal seleccionado.</li>
      <li>Información detallada de la estructura química y propiedades del metal.</li>
      <li>Ejemplos de aplicaciones en la vida real.</li>
      <li>Conclusiones sobre la importancia del metal en la sociedad.</li>
      <li>Referencias bibliográficas en formato APA.</li>
    </ol>
    <li><strong>Recuerda</strong> que una presentación con diapositivas permite presentar conceptos complejos de forma más sencilla y comprensible a través de imágenes, gráficos y textos concisos, además de ayudar a organizar la información de manera lógica y secuencial, facilitando la comprensión del tema.</li>
    <li><strong>Sube</strong> tu presentación para que sea evaluada.</li>
    <li>Recuerda <strong>revisar</strong> la  <a href="<?php echo PATH_DOCS . 'u2-t5-p3-rubrica.docx'; ?>" target="_blank">rúbrica</a> para conocer cómo se evaluará.</li>
  </ol>


  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a9', "Enlace metálico", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
