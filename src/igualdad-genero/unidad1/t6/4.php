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
  <h2>Declaración Universal de los Derechos Humanos</h2>
  <p>Como ya revisaste en pantallas anteriores, la <strong>Declaración Universal de los Derechos Humanos</strong> es un documento esencial, nacido tras un periodo oscuro de la historia, que establece los <strong>derechos fundamentales inherentes a toda persona</strong>, sin distinción alguna. Piensa en ella como un <strong>pacto global por la dignidad humana</strong>, que abarca desde la libertad y la justicia hasta la educación y el trabajo. Hoy, explorarás estos 30 artículos para comprender su trascendencia y cómo impactan en la vida de cada uno de nosotros.</p>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('u1t6-iga6-img3.webp');
    ?>
  </div>
  <h3>Propósito</h3>
  <p>Socializar las perspectivas que se han revisado a lo largo de las actividades acerca de los derechos humanos.</p>
  <p>Instrucciones:</p>
  <ol class="ol-number">
    <li>Realiza una lectura cuidadosa de los treinta artículos que contiene <a href="<?php echo PATH_DOCS . 'u1t6-Declaracion-Universal-DH.pdf'; ?>" target="_blank">La Declaración Universal de los Derechos Humanos</a>.</li>
    <li>Sobre los artículos de la <strong>Declaración Universal de los Derechos Humanos</strong>, comenta con tus compañeros los siguientes puntos:
        <ul>
          <li>¿Cuáles te llamaron más la atención? ¿por qué?</li>
          <li>Reflexiona si estos artículos se cumplen actualmente en México.</li>
          <li>Identifica cuáles consideras que sí se respetan, cuáles no, y proporciona ejemplos o argumentos que sustenten tu opinión.</li>
        </ul>
    </li>
    <p><strong>Nota:</strong> Con la mediación del profesor o profesora, identifiquen los derechos humanos mencionados y reflexionen sobre su cumplimiento en la vida cotidiana en México.</p>
    <p>Este diálogo puede ampliarse o adaptarse según las dinámicas propuestas por el docente, incluyendo actividades complementarias como debates, lluvia de ideas o análisis de casos reales.</p>
    <p>La siguiente actividad busca fomentar la introspección y el reconocimiento de la dignidad personal. Esperamos que resulte de interés y sea de gran utilidad para tu formación integral.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>