<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Las contradicciones generadas y la crisis del Estado Benefactor</h2>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-crisis.webp', 'La crisis del Estado Benefactor');
    ?>
  </div>

  <p>En un contexto de aparente Milagro Mexicano, la sociedad viviría los estragos que respondieron también a las contracciones generadas por un desarrollo económico y una política estabilizadora que no contribuyó de manera equitativa en el desarrollo de los diferentes sectores, al contrario, incidió aún más en las contradicciones de un estado Benefactor.</p>

  <?php ob_start(); ?>
  <p>Para profundizar en el conocimiento del Estado Benefactor te invito a revisar las siguientes tarjetas:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u3a3', "Contradicciones del Estado Benefactor", $ActividadContent);
  ?>

      <p>Aunado a las contradicciones generadas, tenemos que a mediados de la década de 1970 se empiezan a articular una serie de factores coyunturales externos e internos, mismos que harían surgir dudas sobre el sostenimiento del Estado de Bienestar. En esta etapa se empezaba a dudar de la intervención del Estado en la promoción de una economía industrial, que había enriquecido a los ya de por sí ricos y había marginado aún más a las clases sociales vulnerables, a pesar de la creación de programas en apoyo a la sanidad, educación, etc.
      </p>

      <?php ob_start(); ?>
        <p>Revisa la siguiente información con relación a algunos factores que inciden en la crisis del estado benefactor:</p>
      <?php
        $ActividadContent = ob_get_clean();
        renderActividadH5P('u3a4', "Crisis del Estado Benefactor", $ActividadContent);
      ?>
      <p>De esta manera hemos aprendido algunas características del Estado Benefactor en México, también  llamado Estado de Bienestar, cómo este fue beneficiado por el contexto de la Segunda Guerra Mundial, su relación con el Milagro Mexicano y los factores que incidieron en su crisis.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
