<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Declaración Universal de Derechos Humanos</h2>
  <div class="w-2/3 mx-auto">
    <?php
    renderImage('u1t6-iga6-img3.webp');
    ?>
  </div>
  <p>Como ya revisaste en pantallas anteriores, la <strong>Declaración Universal de Derechos Humanos</strong> es un documento esencial, nacido tras un periodo oscuro de la historia, que establece los <strong>derechos fundamentales inherentes a toda persona</strong>, sin distinción alguna. Piensa en ella como un <strong>pacto global por la dignidad humana</strong>, que abarca desde la libertad y la justicia hasta la educación y el trabajo. Hoy, explorarás estos 30 artículos para comprender su trascendencia y cómo impactan en la vida de cada uno de nosotros.</p>

  <p><strong>Propósito</strong></p>
  <p>Socializar las perspectivas que se han revisado a lo largo de las actividades acerca de los derechos humanos.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Realiza una lectura cuidadosa de los treinta artículos que contiene <a href="<?php echo PATH_DOCS . 'u1t6-Declaracion-Universal-DH.pdf'; ?>" target="_blank">La Declaración Universal de los Derechos Humanos</a>.</li>
    <li>Localiza los artículos que consideras no se cumplen en la actualidad y vulneran la dignidad, autonomía y libertad de las y los mexicanos.</li>
    <li>Anota los artículos en tu cuaderno porque será de utilidad para el trabajo final.</li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-listadecotejo-Persona-Derechos-Humanos.pdf'; ?>" target="_blank">lista de cotejo</a> que se anexa, este listado te ayudará para que tú mismo verifiques que tu trabajo cumple con las características solicitadas. Este ejercicio fomenta la <strong>autoevaluación</strong>. </li>
  </ol>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>