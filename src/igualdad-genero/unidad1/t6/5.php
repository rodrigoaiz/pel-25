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
  <h2>Foro: Derechos Humanos</h2>
  <p>Como ya revisaste en pantallas anteriores, la <strong>Declaración Universal de los Derechos Humanos</strong> es un documento esencial, nacido tras un periodo oscuro de la historia, que establece los <strong>derechos fundamentales inherentes a toda persona</strong>, sin distinción alguna. Piensa en ella como un <strong>pacto global por la dignidad humana</strong>, que abarca desde la libertad y la justicia hasta la educación y el trabajo. Hoy, explorarás estos 30 artículos para comprender su trascendencia y cómo impactan en la vida de cada uno de nosotros.</p>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga3-img01.webp');
    ?>
  </div>
  <h3>Propósito</h3>
  <p>Socializar las perspectivas que se han revisado a lo largo de las actividades acerca de los derechos humanos.</p>
  <p>Instrucciones:</p>
  <ol class="ol-number">
    <li>Realiza una lectura cuidadosa de los treinta artículos que contiene <a href="<?php echo PATH_DOCS . 'u1t6-Lectura_TextoPersona_Act.6.4.pdf'; ?>" target="_blank">La Declaración Universal de los Derechos Humanos</a>.</li>
    <li>Localiza los artículos que ofrecen protección a las personas y las circunstancias y formas concretas de malos tratos y explotación.</li>
    <li><strong>Accede al foro “Derechos Humanos”</strong>. Recuerda que este foro tiene como intención el intercambio de perspectivas acerca de los derechos humanos que has consultado. Las siguientes preguntas te servirán como guía para redactar tu participación:</li>
    <ul class="ul-disc">
      <li>¿Se podrían añadir otras formas de malos tratos?</li>
      <li>¿Hay personas más vulnerables y necesitadas de protección que otros?</li>
    </ul>
  </ol>
  <p>Es importante que este ejercicio lo consideres dentro de tu circunstancia como estudiante del CCH y <strong>fundamentes tu respuesta</strong>.</p>
  <li>Lee, con atención, las participaciones y comenta la publicación de, al menos, dos participantes.</li>
  <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-Lectura_TextoPersona_Act.6.4.pdf'; ?>" target="_blank">lista de cotejo</a> porque establece los criterios para evaluar tu participación en este foro.</li>
  <p><strong>Nota:</strong> La revisión y valoración sobre la Cartilla de los Derechos Humanos también se puede realizar en plenaria durante la videollamada en Teams.</p>

  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a5', "Foro: Derechos Humanos", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>