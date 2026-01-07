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
  <h2>Manifestaciones artísticas que denuncian el feminicidio</h2>

  <p>El arte, en sus múltiples formas, ha sido históricamente un espejo y un motor de los cambios sociales. Hoy, nos enfrentamos a una realidad dolorosa y persistente: el feminicidio. Ante esta brutalidad, numerosas manifestaciones artísticas emergen como un grito colectivo, una forma poderosa de denuncia y un acto de memoria. Desde la pintura y la escultura hasta la música, la poesía, el performance y el arte callejero, creadoras y creadores alzan sus voces para visibilizar la violencia de género, honrar a las víctimas, exigir justicia y despertar conciencias. Estas expresiones artísticas no solo nos confrontan con la crudeza de los hechos, sino que también nos invitan a reflexionar sobre las raíces culturales y sistémicas de esta violencia, buscando generar empatía, solidaridad y, en última instancia, la transformación social necesaria para erradicar el feminicidio.</p>

  <h3>Propósito</h3>

  <p>Identificar manifestaciones en contra de los feminicidios a través de prácticas artísticas para pensar en cómo abonar en la erradicación de estos.</p>

  <h3>Instrucciones</h3>

  
  <ol class="ol-number">
    <p>En equipo</p>
    <li>Ve y escucha atentamente los videos: <strong>"Así nació Un Violador en tu Camino"</strong> de Las Tesis y, <strong>"Vivir sin Miedo"</strong> de Vivir Quintana.</li>
    <p>De manera individual</p>
    <li>En el <em>mentimeter</em>  que abrió tu profesor(a) contesta:</li>
    <ul class="ul-disc">
      <li>¿Qué sentiste al ver y escuchar cada video?</li>
      <li>¿Por qué son manifestaciones artísticas en contra de los feminicidios?</li>
    </ul>
  </ol>

  <p><strong>Nota:</strong> Esta actividad es anónima y no tiene porcentaje en la evaluación.</p>

  <div class="md:grid grid-cols-2 gap-3 items-center my-5">
    <div>
      <?php
      renderVideoIframe('_utq2Y7nXPw', '');
      ?>
    </div>
    <div>
      <?php
      renderVideoIframe('VLLyzqkH6cs', '');
      ?>
    </div>
  </div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
