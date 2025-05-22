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
  <h2>Persona y Derechos Humanos</h2>
  <p>Para comprender a profundidad sobre la trascendencia de la Igualdad de Género, es esencial explorar dos pilares fundamentales: Los Derechos Humanos y el concepto de persona. Los Derechos Humanos, al reconocer la dignidad inherente y la igualdad de todas las personas, sientan las bases éticas y legales para demandar la equidad entre hombres y mujeres. Paralelamente, al reflexionar sobre qué significa ser persona en su plenitud, con autonomía, capacidad de agencia y dimensión social, cuestionamos cómo las construcciones de género a menudo limitan el desarrollo integral de cada individuo. En esta sección te invitamos a analizar cómo los principios universales de los Derechos Humanos se vinculan intrínsecamente con una comprensión profunda y desestereotipada de la persona, revelando la necesidad urgente de construir un mundo donde la igualdad de género sea una realidad innegable para todos y todas.</p>
  <p>Para reflexionar en torno a estos temas te pedimos revisar la presentación del concepto <a href="<?php echo PATH_DOCS . 'u1t6-Lectura_Persona_Act.6.2.pdf'; ?>" target="_blank">“Persona”</a> y la de <a href="<?php echo PATH_DOCS . 'u1t6-Lectura_DerechosHumanos_Act.6.2.pdf'; ?>" target="_blank">“Derechos Humanos”</a>. Después realiza la siguiente actividad.</p>
  <h3>Propósito</h3>
  <p>Identificar qué circunstancias y acciones obstruyen el pleno desarrollo de la persona en un marco de Derechos Humanos.</p>
  <ol class="ol-number">
    <li>Observa el video <strong>"Mansplaining" Persona</strong>.</li>
    <div class="my-5">
        <?php
        renderVideoIframe('lz4mLjxXA9I', '');
        ?>
    </div>
    <li>Posteriormente, identifica y explica, con tus conocimientos previos y la información revisada en las presentaciones de <strong>“Persona”</strong> y la de <strong>“Derechos Humanos”</strong>, cómo se obstruye el pleno desarrollo de la “persona” de acuerdo con el contenido del video.</li>
    <li>Emplea la <a href="<?php echo PATH_DOCS . 'u1t6-Persona-Derechos-Humanos-Plantilla-Word.docx'; ?>" target="_blank">plantilla de Word</a>, para enlistar las acciones y actitudes que identificaste, especificar quién las realiza, describir brevemente qué se observa en el video en dichos casos y explicar por qué consideras que estas actitudes y acciones no permiten el libre desarrollo de la persona.</li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-Rubrica_PersonayDerechosHumanos_Act.6.2.pdf'; ?>" target="_blank">Rúbrica</a> porque te ayudará a identificar qué se evaluará en tu trabajo.</li>
    <li>Una vez que hayas terminado la lista en la plantilla de Word, comparte el archivo en esta tarea. Nombra tu archivo de la siguiente manera: Nombre_Apellido_Persona</li>
  </ol>

  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a2', "Persona y Derechos Humanos", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>