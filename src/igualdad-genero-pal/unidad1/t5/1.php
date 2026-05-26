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
  <h2>La noción de persona como fundamento de los derechos humanos</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('u1t6-iga6-img1.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 6!</h3>
  <p class="font-bold text-xl text-fuchsia-900">Presentación</p>
  <p>En el ámbito escolar es fundamental garantizar espacios seguros donde se reconozcan los derechos de todas las personas, sin importar género, origen o condición social. En este aprendizaje reflexionarás sobre el concepto de persona y los Derechos Humanos como parte fundamental de la cultura de la igualdad.</p>
  <p>La noción de persona es una construcción cultural que reconoce a cada individuo como sustancia racional, libre y autónoma, capaz de desarrollar su existencia con dignidad. Ser persona implica poseer identidad propia, conciencia y sentido del bien y del mal, lo que convierte a cada ser humano en un fin en sí mismo y nunca en un medio. Esta concepción es el fundamento de los derechos humanos, que garantizan la libertad y la igualdad como principios esenciales para la convivencia. En este sentido, te presentamos el instrumento internacional que garantiza los derechos humanos: la Declaración Universal de Derechos Humanos. Las actividades te ayudarán a reconocer la presencia o ausencia de estos derechos en tu vida cotidiana.</p>

  <p class="font-bold text-xl text-fuchsia-900">Propósito</p>
  <p>En este aprendizaje obtendrás una base teórica sobre los derechos humanos y la implicación que tiene ser persona en relación con la igualdad de género. </p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <ul class="ul-disc">
    <li><strong>Declarativos</strong><br>
      Identifica la noción de persona y derechos humanos. Comprende la noción de persona en relación con los derechos humanos.
    </li>
    <li><strong>Procedimentales</strong><br>
      Autoidentificación como persona en el marco de sus Derechos Humanos.
    </li>
    <li><strong>Actitudinales</strong><br>
      Interioriza la importancia del concepto persona y lo usa conscientemente sin caer en la esfera del género. Práctica la tolerancia y el respeto por las diferencias individuales.
    </li>
  </ul>
  <strong>Instrucciones:</strong>
  <ol class="ol-number">
    <li>Responde el examen diagnóstico para identificar tus conocimientos previos respecto a los conceptos de persona y derechos humanos.</li>
    <li>La plataforma mostrará la respectiva retroalimentación. Recuerda que esta actividad no tiene puntaje, pero es muy importante para el desarrollo de las siguientes actividades. Tienes dos intentos para resolver este cuestionario.</li>
  </ol>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t6a1', "Cuestionario diagnóstico", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>