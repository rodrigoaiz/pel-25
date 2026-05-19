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
  <h2>Antecedentes del caso Ingrid Escamilla</h2>

  <div class="md:grid grid-cols-2 gap-3 items-center">
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u2t3-iga9-img02.webp');
      ?>
    </div>
    <p>Comprender la violencia feminicida como la manifestación más brutal y final de un continuo de violencia de género es crucial para desentrañar las raíces profundas de este problema social. Al reconocerla no como un hecho aislado, sino como un eslabón final de una cadena de agresiones, invisibilizaciones y discriminaciones, se abre la puerta a cuestionar las estructuras patriarcales que la sustentan y a imaginar alternativas de prevención, justicia y reparación más efectivas y transformadoras. A continuación, conocerás el caso de Ingrid Escamilla, el cual nos confronta directamente con esta realidad, y realizarás una actividad que permita comprender las causas y proponer caminos hacia un futuro libre violencia para todas las mujeres.</p>
  </div>
  <h3>Propósito</h3>
  <p>Conocer un caso de feminicidio que ilustre los tipos y manifestaciones de violencia de género presentes en la violencia feminicida.</p>
  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li>Ve el video y revisa los pdfs que contienen notas periodísticas. En ellos, podrás obtener información, antecedentes y datos generales del feminicidio de Ingrid Escamilla.</li>
    <li>A partir de la información que encuentres elabora una nota periodística, con perspectiva de género, que presente las ideas principales del caso (nombres, fechas, lugares y acontecimientos, a partir de las preguntas <em>¿qué? ¿cuándo? ¿dónde? ¿por qué? ¿quién?</em></li>
    <li>Coloca en este espacio tu trabajo en formato Word o PDF, con una extensión mínima de una cuartilla y máxima de cuartilla y media. Nombra el archivo de la siguiente manera: Nombre_Apellido_NotaPeriodistica_Ingrid</li>
    <li>Para elaborar tu trabajo, puedes consultar el fragmento de <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_UnManualUrgenteParaLaCoberturaDeViolencia_Act.9.1.pdf'; ?>" target="_blank"><em>Un manual urgente para la cobertura de violencia contra las mujeres y feminicidios en México</em></a> (ONU Mujeres, 2021).</li>
  </ol>
  <div class="row">
    <div class="max-w-xl mx-auto">
      <?php
      renderVideoIframe('dnQLpodI6us', 'Feminicidio de Ingrid Escamilla en la GAM, CDMX, indigna - Despierta');
      ?>
    </div>
  </div>

  <ul class="ul-disc">
    <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_AUnAnoDelFeminicidioDeIngridEscamilla_Act.9.1.pdf'; ?>" target="_blank">A un año del feminicidio de Ingrid Escamilla</a></li>
    <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_FeminicidioDeIngridEscamilla_Act.9.1.pdf'; ?>" target="_blank">Feminicidio de Ingrid Escamilla: Por qué el asesinato de la joven ha provocado protestas en México</a></li>
    <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_IngridEscamillaHabiaDenunciado_Act.9.1.pdf'; ?>" target="_blank">Ingrid Escamilla había denunciado a su pareja por violencia. Se pedirá la pena máxima</a></li>
    <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_IngridEscamillaErickFranciscoRobledoElFeminicida_Act.9.1.pdf'; ?>" target="_blank">¿Quién es Erick Francisco Robledo? Todo sobre el feminicida de Ingrid Escamilla</a></li>
    <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_IngridySuAsesino_Act.9.1.pdf'; ?>" target="_blank">Ingrid y su asesino tenían una relación ´extraña´ vecinos</a></li>
  </ul>

  <p><strong>Nota:</strong> Para el logro del objetivo planteado para esta actividad, puede adaptarse la exposición o entrega de un tipo textual distinto a la nota periodística, en tanto que permita la revisión del caso del feminicidio de Ingrid Escamilla y el reconocimiento de los tipos de violencia de género presentes en la relación entre la víctima y el agresor.</p>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t9a1', "Antecedentes del caso Ingrid Escamilla", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
