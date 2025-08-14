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
  <h2>Autoconocimiento</h2>
  <p>El <strong>autoconocimiento</strong> es un proceso reflexivo que permite a las personas reconocer sus cualidades y características, es fundamental para desarrollar una <strong>autoestima sana</strong>. Este proceso incluye etapas como la: <strong>autopercepción, autoobservación, memoria autobiográfica, autoestima y autoaceptación.</strong> Es clave para el desarrollo personal, especialmente en la adolescencia, etapa de cambios e indecisión, donde una educación adecuada puede ayudar a las y los jóvenes a valorar, tomar decisiones responsables y alcanzar madurez.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('u1t1p03-autoconocimiento.webp');
    ?>
  </div>
  <p>A continuación realizaremos un breve ejercicio con el cual te ayudará a conocerte, recuerda no hay respuestas correctas o incorrectas sólo sé honesto y honesta.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number ml-32">
    <li>Descarga el formato: <a href="<?php echo PATH_DOCS . 'act-1-cuadro-trabajo-conociendome-mejor.docx'; ?>" target="_blank">act-1-cuadro-trabajo-conociendome-mejor</a>.</li>
    <li>Responde las preguntas de la tabla.</li>
    <li>Guarda tu archivo y súbelo.</li>
  </ol>
  <?php ob_start(); ?>
  <p>Sube aquí tu archivo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuadro de trabajo: Conociéndome mejor.", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>