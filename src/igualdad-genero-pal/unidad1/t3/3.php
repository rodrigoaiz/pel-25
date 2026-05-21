<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Relaciones de poder en la vida cotidiana</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga3-img01.webp');
    ?>
  </div>
  <p>En el aprendizaje 3 te invitamos a reflexionar acerca de los orígenes de la disparidad de condiciones sociales entre hombre y mujeres, desde el origen de la propiedad privada y la repartición primitiva del trabajo. Para ello, te presentamos diversos materiales donde podrás explorar los conceptos y relaciones de poder, campos de denominación, capital y desigualdad de género.</p>
  <p>En esta primera actividad revisarás dos videos que te ayudarán a comprender qué es el poder y cómo se establecen las relaciones sociales del poder.</p>
  <p><strong>Propósito</strong>
    Comprender cómo funciona el poder, de qué forma se ejerce, qué lo legitima y cómo estos factores influyen en la desigualdad y la violencia de género.
  </p>
  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li>Observa atentamente los siguientes videos y <strong>toma nota en tu cuaderno de trabajo</strong> de la asignatura.</li>
    <li>Responde las preguntas del cuestionario, y revisa la retroalimentación a tus respuestas.</li>
    <li>Tienes dos intentos para responder este cuestionario.</li>
  </ol>
  <div class="md:grid grid-cols-2 gap-3">
    <div>
      <?php
      renderVideoIframe('TchqFCgm42U', 'Michel Foucault para principiantes: ¿Qué es el poder y quiénes te vigilan?');
      ?>
    </div>
    <div>
      <?php
      renderVideoIframe('h40a7r9vCWs', 'Los tipos de capital según Pierre Bourdieu');
      ?>
    </div>
  </div>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a2', "Relaciones de poder en la vida cotidiana.", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>