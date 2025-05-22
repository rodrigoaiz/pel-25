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
  <h2>Glosario de términos ilustrado</h2>
  <p>La noción de persona es fundamental para los derechos humanos y como has revisado anteriormente, estos son concebidos como inherentes a todo ser humano por el simple hecho de serlo, dotándole de dignidad intrínseca que debe ser respetada y protegida. Es importante mencionar que estos derechos humanos emanan de esta calidad de persona, son universales y buscan garantizar una vida digna y el pleno desarrollo de cada individuo.</p>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga3-img01.webp');
    ?>
  </div>

  <p>Para conocer más sobre el concepto de persona y su relevancia para los derechos humanos te invitamos a realizar la siguiente actividad. </p>

  <h3>Propósito</h3>
  <p>Comprender la noción de persona.</p>

  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li>Lee el apartado <a href="<?php echo PATH_DOCS . 'u1t6-Lectura_TextoPersona_Act.6.4.pdf'; ?>" target="_blank">“1.2. El concepto de persona, concepto eje para la ética”</a>, de la filósofa mexicana Dora Elvira García González. Con esta breve lectura te proponemos un panorama general acerca del concepto persona, con ello, conocerás las definiciones fundamentales en la construcción conceptual de los términos y establecerás conexiones con otros conceptos.</li>
    <li>Al término de tu lectura, realiza un glosario de términos ilustrado, puedes usar <i>Power Point</i>, <i>Canva</i> u otra aplicación digital.<br>Los conceptos que deberás ilustrar, dotar de significado y sentido son los siguientes:</li>
    <ul class="ul-disc">
      <li>Persona</li>
      <li>Derechos Humanos</li>
      <li>Libertad</li>
      <li>Autonomía</li>
      <li>Dignidad</li>
    </ul>
    <li>Recuerda que los conceptos que agregues en tu glosario deberás ilustrarlos con imágenes, fotografías o dibujos.</li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-Rubrica_GlosarioDeTérminosIlustrado_Act.6.4.pdf'; ?>" target="_blank">rúbrica</a> para verificar qué elementos se tomarán en cuenta para evaluar tu trabajo.</li>
    <li>Sube tu archivo del glosario en PDF y nómbralo de la siguiente forma: Nombre_Apellido_Glosario</li>
    <p><strong>Nota:</strong> Puedes compartir en clase tu glosario de términos ilustrado y observa con atención el trabajo de tus compañeras y compañeros.</p>
  </ol>

  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a4', "Glosario de términos ilustrado", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>