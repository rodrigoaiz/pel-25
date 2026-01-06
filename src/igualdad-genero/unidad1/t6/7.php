<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Uve de Gowin</h2>

  <p>El diagrama Uve de Gowin se usa como instrumento de evaluación para reflejar el logro de un aprendizaje significativo. Este instrumento de evaluación sirve para reforzar el principio de <em>Aprender a Aprender</em>. Se trata de un diagrama que implica la organización conceptual del tema trabajado. A continuación, realizarás una actividad utilizando la Uve de Gowin.</p>

  <h3>Propósito</h3>

  <p>Reflexionar sobre los conocimientos y habilidades adquiridos, evaluando el progreso logrado en este aprendizaje.</p>

  <h3>Instrucciones:</h3>

  <ol class="ol-number">
    <li><a href="<?php echo PATH_DOCS . 'u1t6-Plantilla_UveDeGowin_Act.6.8.docx'; ?>" target="_blank">Descarga la plantilla en Word</a> (anexa a esta tarea) para responder a las preguntas del 1 al 8 que aparecen en el diagrama.
      <br><br>Elementos para responder en la Uve de Gowin:
      <ul class="ul-disc">
        <li>¿Qué impacto tiene la noción de “persona” en la consideración de los Derechos Humanos?</li>
        <li>Tema de estudio.</li>
        <li>Define con tus propias palabras: Persona y Derechos Humanos.</li>
        <li>¿Cómo organizo mis ideas y datos?</li>
        <li>¿Qué área explica el tema?</li>
        <li>¿Qué aprendí?</li>
        <li>¿Cómo aprendí el tema?</li>
        <li>¿Para qué sirve todo lo que aprendí? (en lo individual y en lo colectivo).</li>
      </ul>
    </li>
    <li>Al terminar tu diagrama, revisa la <a href="<?php echo PATH_DOCS . 'u1t6-ListaDeCotejo_UveDeGowin_Act.6.8.pdf'; ?>" target="_blank">lista de cotejo</a> anexa en esta actividad y verifica que tu trabajo cumpla con las características solicitadas.</li>
    <li>Guarda la plantilla en formato PDF.</li>
    <li>Sube el archivo en esta tarea. Nombra el archivo de la siguiente manera: Nombre_Apellido_Uve_Gowin</li>
  </ol>

  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a8', "Uve de Gowin", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
