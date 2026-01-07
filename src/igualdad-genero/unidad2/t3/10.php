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
  <h2>Otra narrativa para apropiar nuestros cuerpos</h2>

  <div class="md:grid grid-cols-2 gap-3 items-center">
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u2t3-iga9-img08.webp');
      ?>
    </div>
    <div>
      <h3>Propósito</h3>
      <p>Tomar conciencia de la importancia de la organización social y colectiva, a través de diversas manifestaciones, para incidir en la aprobación de leyes que castiguen los feminicidios. </p>
    </div>
  </div>

  <ol class="ol-number">
    <p>En plenaria</p>
    <li>Lee atentamente los siguientes textos:</li>
    <ul class="ul-disc">
      <li><strong>“Sus contrapúblicos. Otra narrativa para apropiar nuestros cuerpos”</strong> en <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_NarrarElCuerpoDeLasVictimasDeFeminicidio_Act.9.10.pdf'; ?>" target="_blank">Narrar el cuerpo de las víctimas de feminicidio: el crimen de Francisco Robledo, sus públicos y contrapúblicos.</a> Este fragmento está de la página 38 a la 40.</li>
      <li><strong><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_LeyIngrid_Act.9.10.pdf'; ?>" target="_blank">“Ley Ingrid, avalan cárcel a quien difunda o filtre imágenes de víctimas de feminicidios”</a></strong>.</li>
    </ul>
    <li>En equipos contesten:
      <ul class="ul-disc">
        <li>¿Cómo surgió la “Ley Ingrid”?</li>
        <li>¿Cuál es la relación entre las manifestaciones sociales y la promulgación de estas reformas?</li>
      </ul>
    </li>
    <li>La respuesta debe ser redactada en una breve reflexión de dos párrafos (mínimo 5 y máximo 10 renglones). Y una persona del equipo la lee en voz alta.</li>
  </ol>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t9a7', "Otra narrativa para apropiar nuestros cuerpos", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
