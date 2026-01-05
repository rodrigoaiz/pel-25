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
  <h2>Tipos de violencia de género en casos de feminicidio</h2>
      <div class="md:grid grid-cols-2 gap-3 items-center">
        <p>Como ya se mencionó, la comprensión de la complejidad del feminicidio implica reconocer que no se trata de un acto aislado, sino del punto culminante de un continuum de violencia de género. Antes del desenlace fatal, las víctimas suelen enfrentar diversas manifestaciones de violencia, que pueden ser física, psicológica, sexual, económica o patrimonial. Identificar estas formas de violencia previas es crucial para entender cómo se intensifican las agresiones y cómo la misoginia y el machismo estructural pueden conducir a la pérdida irreparable de vidas. Al analizar casos como el de Ingrid Escamilla, podremos identificar cómo estas distintas formas de violencia se entrelazan y contribuyen al trágico feminicidio.</p>
        <div class="max-2xl mx-auto">
          <?php
          renderImage('u2t3-Iga9-img03.webp');
          ?>
        </div>
    </div>
  <h3>Propósito</h3>
  <p>Reconocer tipos y manifestaciones de violencia de género contenidas en la violencia feminicida.</p>
  <h3>Instrucciones</h3>
  <ol class="ol-number">
    <li>A partir de la revisión de los antecedentes y datos generales del caso de Ingrid Escamilla, elabora un cuadro <a href="<?php echo PATH_DOCS . 'u2t9-violencia-de-genero-en-caso de-feminicidio.docx'; ?>" target="_blank">(organizador gráfico de tres columnas adjunto a esta publicación)</a> que clasifique, defina y ejemplifique los tipos de violencia de género, vistos en aprendizajes anteriores, y en el cual se observe la violencia de género presente en la relación de la joven con su agresor.</li>
    <li>Coloca en este espacio tu trabajo en formato PDF. Nombra el archivo de la siguiente manera: Nombre_Apellido_OrganizadorGrafico_Ingrid</li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u2t9-Rubrica_CuadroTiposDeViolenciaDeGeneroEncasosDeFeminicidio_Act.9.2.pdf'; ?>" target="_blank">rúbrica</a> para que conozcas los criterios de evaluación de tu organizador.</li>
  </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u2t9a2', "Tipos de violencia de género en casos de feminicidio", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
