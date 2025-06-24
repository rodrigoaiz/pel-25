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
  <h2>Infografía: Poder, interdependencia y construcción social en torno a las desigualdades de género</h2>
  <h3>Propósito</h3>
  <p>La actividad tiene como propósito profundizar en tu comprensión sobre las relaciones de poder y los diversos campos de dominación que operan en nuestra sociedad. A través de la lectura de un texto, te invitamos a explorar las complejidades y sutilezas del poder, analizando cómo se ejerce, se mantiene y se resiste en diferentes contextos. Y mediante la elaboración de infografías en equipos te proponemos socializar tus conocimientos e ideas en torno a los conceptos clave de este tema.</p>
  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li>Realiza la lectura del texto <a href="<?php echo PATH_DOCS . 'u1t3-Lectura_LasRelacionesDePoder_Act.3.3.pdf'; ?>" target="_blank">"Las relaciones de poder"</a></li>
    <li>Tu profesor o profesora te asignará un equipo para realizar una infografía en donde sistematices los puntos más importantes de la lectura, guiándote a partir de las ideas que se enuncian a continuación:
      <ul class="ul-disc">
        <li>Equipo 1: Aspectos básicos de las relaciones de poder e interdependencia en las relaciones.</li>
        <li>Equipo 2: Mezcla de poderes y el poder como una oportunidad.</li>
        <li>Equipo 3: Un poder que transforma (Las relaciones de poder entre mujeres y hombres).</li>
        <li>Equipo 4: Ámbitos y dimensiones en el ejercicio del poder: La construcción de hegemonías y contra hegemonías y la construcción de identidades y cultura.</li>
        <li>Equipo 5: Un poder que transforma.</li>
      </ul>
    </li>
  </ol>
  <p><strong>Nota:</strong> Revisa el documento <a href="<?php echo PATH_DOCS . 'u1t3-InstructivoParaRealizarUnaInfografia.pdf'; ?>" target="_blank">“Instructivo para realizar una infografía”</a> que te ayudará a realizar mejor esta actividad. También revisa la <a href="<?php echo PATH_DOCS . 'u1t3-Rubrica-evaluacion-infografias.pdf'; ?>" target="_blank">"rúbrica</a> para que sepas cuáles son los criterios con los que se evaluará tu infografía.  </p>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t3a3', "Infografía", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
