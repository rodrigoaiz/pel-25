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
  <?php ob_start(); ?>
  <p>Responde las preguntas y sube tu archivo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuadro de trabajo: Conociéndome mejor.", $ActividadContent);
  ?>
  <p>A continuación, te pedimos que leas el siguiente texto, el cual incluye todos los conceptos que se revisarán en la unidad.</p>
  <div class="w-4/5 mx-auto mt-6 bg-orange-300 rounded-xl p-1">
    <p class="text-white text-center"><a class="text-orange-700" href="https://gamma.app/docs/Identidad-y-empatia-claves-para-el-desarrollo-personal-y-la-convi-up729z7unzksfhx?mode=present#card-u0bboohguoxme2l" target="_blank">Identidad y empatía: claves para el desarrollo personal y la convivencia.</a></p>
  </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>