<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Sistemas operativos</h2>
  <p><strong>Aprendizaje:</strong> Explica las características de los distintos sistemas operativos.</p>
  <h3>Temática:</h3>
  <p>Tipos de software:</p>
  <ul class="ul-disc">
    <li>Software de aplicación.</li>
    <li>Software de programación.</li>
    <li>Software de sistema.</li>
    <li>Características de los sistemas operativos (Windows, Linux, Macos y Android).</li>
  </ul>
  <h3>Introducción</h3>
  <p>La informática y la computación son áreas de mayor relevancia en el mundo actual, abarcan el funcionamiento de los equipos de cómputo y dispositivos móviles, pero además incluyen el uso de los diferentes tipos de software que se manejan en ellos, en este aprendizaje se explorarán los distintos tipos de software que se utilizan, especialmente el <strong>Sistema Operativo</strong>.</p>
  <p>En este foro de diagnóstico, es fundamental adquirir conocimientos sobre los distintos <strong>tipos de software</strong>, que abarcan desde <strong>Sistemas Operativos</strong> hasta <strong>lenguajes de programación</strong> y <strong>aplicación</strong>, por lo tanto, te invitamos a reflexionar sobre este tema y compartir tu opinión al respecto.</p>
  <?php ob_start(); ?>
  <p>Tu participación es de gran importancia para enriquecer tu aprendizaje.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a12', "Tipos de software", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
