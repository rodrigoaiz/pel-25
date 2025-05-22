<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Cartografía del plantel</h2>

  <div class="max-2xl mx-auto">
    <?php
    renderImage('u1t6-cartografia-plantel.webp');
    ?>
  </div>

  <h3>Propósito</h3>
  <p>Identificar, en tu plantel, los espacios de riesgo en los cuales se vulneran los derechos humanos y se obstaculiza el pleno desarrollo de tu persona y el resto de la comunidad cecehachera.</p>
  <h3>Instrucciones:</h3>
  <p>Como se mencionó en la actividad anterior, los mapas son representaciones gráficas de un territorio, de manera que en esta ocasión toca el turno de ampliar el horizonte de reflexión y <strong>ubicar el territorio escolar</strong>, en este caso, el <strong>CCH</strong>.</p>
  <ol class="ol-number">
    <li>Organízate en equipo para realizar esta actividad. Tu profesor(a) te indicará el número de integrantes asignados para cada equipo.</li>
    <li>Dibuja tu plantel o descarga una imagen en la cual se aprecie con claridad el espacio geográfico de éste. Si deseas, puedes realizar una imagen interactiva empleando <em>Genially</em>, alguna otra plataforma que conozcas o emplear un programa de edición de imágenes.</li>
    <li>Identifica y señala en la imagen los <strong>espacios que consideras son de riesgo porque en ellos se vulneran los derechos humanos y se obstaculiza el pleno desarrollo de tu persona y el resto de la comunidad ceceachera.</strong> En cada espacio deberás especificar <strong>qué derecho se ve vulnerado y mencionar qué acciones se pueden emprender para erradicar esa problemática o situación</strong>.</li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-ListaDeCotejo_CartografíaDelPlantel_Act.6.7.pdf'; ?>" target="_blank">lista de cotejo</a> que se integra en esta tarea para verificar que la cartografía cumple con lo solicitado.</li>
    <li>Sube el <strong>archivo</strong> con la <strong>cartografía en forma individual</strong>. Sugerimos que el formato del archivo sea PDF, PNG o JPG. Nombra tu archivo de la siguiente manera: Nombre_Apellido_Cartografía_plantel.</li>
  </ol>

  <p>Nota: Resultará muy valioso compartir, en clase, la cartografía del Plantel, así como observar el trabajo de otros equipos para obtener conclusiones y propuestas. Recuerda que durante la actividad debe prevalecer un ambiente de respeto y tolerancia.</p>

  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a7', "Cartografía del plantel", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>