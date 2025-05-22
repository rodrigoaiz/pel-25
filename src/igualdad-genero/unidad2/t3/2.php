<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Antecedentes del caso Ingrid Escamilla</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga3-img01.webp');
    ?>
  </div>
  <p>Comprender la violencia feminicida como la manifestación más brutal y final de un continuo de violencia de género es crucial para desentrañar las raíces profundas de este problema social. Al reconocerla no como un hecho aislado, sino como un eslabón final de una cadena de agresiones, invisibilizaciones y discriminaciones, se abre la puerta a cuestionar las estructuras patriarcales que la sustentan y a imaginar alternativas de prevención, justicia y reparación más efectivas y transformadoras. A continuación, conocerás el caso de Ingrid Escamilla, el cual nos confronta directamente con esta realidad, y realizarás una actividad que permita comprender las causas y proponer caminos hacia un futuro libre violencia para todas las mujeres.</p>
  <h3>Propósito</h3>
  <p>Conocer un caso de feminicidio que ilustre los tipos y manifestaciones de violencia de género presentes en la violencia feminicida.</p>
  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li>Ve el video y revisa los links que encontrarás al final de las instrucciones, en ellos podrás obtener información, antecedentes y datos generales del feminicidio de Ingrid Escamilla.</li>
    <li>A partir de la información que encuentres en ellos, elabora una nota periodística que presente, con perspectiva de género, las ideas principales del caso (nombres, fechas, lugares y acontecimientos, a partir de las preguntas <em>¿qué? ¿cuándo? ¿dónde? ¿por qué? ¿quién?</em></li>
    <li>Agrega a esta nota periodística, a partir de tus conocimientos previos sobre el tema, una definición propia del concepto feminicidio.</li>
    <li>Coloca en este espacio tu trabajo en formato Word o PDF, con una extensión mínima de una cuartilla y máxima de cuartilla y media. Nombra el archivo de la siguiente manera: Nombre_Apellido_NotaPeriodistica_Ingrid</li>
    <li>Para elaborar tu trabajo, puedes consultar el fragmento de <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_UnManualUrgenteParaLaCoberturaDeViolenciaContraLasMujeresyFeminicidiosEnMéxico_Act.9.1.pdf'; ?>" target="_blank"><em>Un manual urgente para la cobertura de violencia contra las mujeres y feminicidios en México</em></a> (ONU Mujeres, 2021).</li>
  </ol>

    <ul class="ul-disc">
      <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_AUnAñoDelFeminicidioDeIngridEscamilla_Act.9.1.pdf'; ?>" target="_blank">A un año del feminicidio de Ingrid Escamilla</a></li>
      <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_FeminicidioDeIngridEscamilla_PorQuéElAsesinatoDeLaJovenHaProvocadoProtestasEnMéxico_Act.9.1.pdf'; ?>" target="_blank">Feminicidio de Ingrid Escamilla: Por qué el asesinato de la joven ha provocado protestas en México</a></li>
      <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_IngridEscamillaHabíaDenunciadoASuParejaPorViolenciaSePediráPenaMáxima_Act.9.1.pdf'; ?>" target="_blank">Ingrid Escamilla había denunciado a su pareja por violencia. Se pedirá la pena máxima</a></li>
      <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_IngridEscamillaErickFranciscoRobledoElFeminicida_Act.9.1.pdf'; ?>" target="_blank">¿Quién es Erick Francisco Robledo? Todo sobre el feminicida de Ingrid Escamilla</a></li>
      <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_IngridySuAsesinoTeníanUnaRelación‘Extraña’Vecinos_Act.9.1.pdf'; ?>" target="_blank">Ingrid y su asesino tenían una relación ´extraña´ vecinos</a></li>
    </ul>

  <p><strong>Nota:</strong> Para el logro del objetivo planteado para esta actividad, puede adaptarse la exposición o entrega de un tipo textual distinto a la nota periodística, en tanto que permita la revisión del caso del feminicidio de Ingrid Escamilla y el reconocimiento de los tipos de violencia de género presentes en la relación entre la víctima y el agresor. </p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
