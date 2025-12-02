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
  <h2>Los corridos de la Revolución</h2>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-corrido.webp');
      ?>
  </div>

  <p>La <b>música</b> desempeñó un papel crucial en la Revolución Mexicana (1910-1920), sirviendo como <b>medio de expresión, propaganda y resistencia</b>. A través de corridos, canciones y otras formas musicales, el pueblo narró los eventos de la guerra, exaltó a los líderes revolucionarios y transmitió los ideales de la lucha social.</p>

  <p>Entre estos géneros, el <b>corrido</b> se convirtió en una herramienta fundamental para la difusión de noticias, <b>la narración de batallas</b> y la <b>exaltación de las hazañas de los revolucionarios</b>. Debido a su carácter narrativo y testimonial, los corridos representan una valiosa fuente de información histórica.</p>

  <?php ob_start(); ?>
  <p>Por ello, a continuación se interpretarán hechos históricos a través de los corridos de la Revolución. Para ello, sigue las indicaciones que se presentan a continuación:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a15', "Actividad Corridos de la Revolución", $ActividadContent);
  ?>

  <p>El impacto de la música revolucionaria persiste hasta hoy en la cultura mexicana. Los corridos siguen siendo populares, y muchos de los temas creados en esa época han sido reinterpretados por artistas contemporáneos. Además, la música de la Revolución influyó en el desarrollo de la música ranchera y el regional mexicano.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
