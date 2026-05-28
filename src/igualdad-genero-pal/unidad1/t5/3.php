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

  <div class="grid grid-cols-5 gap-4">
    <div class="col-span-3">
      <p>La noción de persona es fundamental para los derechos humanos y como has revisado anteriormente, estos son concebidos como inherentes a todo ser humano por el simple hecho de serlo, dotándole de dignidad intrínseca que debe ser respetada y protegida. Es importante mencionar que estos derechos humanos emanan de esta calidad de persona, son universales y buscan garantizar una vida digna y el pleno desarrollo de cada individuo.</p>
      <p>Para conocer más sobre el concepto de persona y su relevancia para los derechos humanos te invitamos a realizar la siguiente actividad.</p>
    </div>
    <div class="col-span-2">
      <?php
      renderImage('u1t6-iga6-img2.webp');
      ?>
    </div>
  </div>

  <p><strong>Propósito</strong></p>
  <p>Comprender la noción de persona.</p>

  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Lee el apartado <a href="<?php echo PATH_DOCS . 'u1t6-Lectura_TextoPersona_Act.6.4.pdf'; ?>" target="_blank">“El concepto de persona, concepto eje para la ética”</a>, de la filósofa mexicana Dora Elvira García González. Con esta breve lectura te proponemos un panorama general acerca del concepto persona, con ello, conocerás las definiciones de persona, derechos humanos, libertad, autonomía y dignidad. Esta información es fundamental en la construcción conceptual de los términos y establecerás conexiones con otros conceptos de este aprendizaje.</li>
    <li>Al término de tu lectura, realiza un glosario de términos ilustrado <strong>en tu cuaderno</strong>. </li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-listadecotejo_GlosarioDeTerminosIlustrado.pdf'; ?>" target="_blank">lista de cotejo</a> que se anexa, este listado te ayudará para que tú mismo verifiques que tu diccionario ilustrado cumple con las características solicitadas. Este ejercicio fomenta la <strong>autoevaluación</strong>. </li>
  </ol>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t6a3', "Glosario de términos ilustrado", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>