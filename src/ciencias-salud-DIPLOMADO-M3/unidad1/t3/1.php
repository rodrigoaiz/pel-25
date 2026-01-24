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
  <h2>Lección 3. Las distintas ciencias relacionadas con la salud.</h2>

  <p>La salud es un campo multidisciplinario que involucra a una variedad de ciencias, que trabajan juntas para promover, mantener y restaurar la salud de las personas y las poblaciones, algunas de las principales son:</p>

  <ul class="list-disc ml-8">
    <li><b>Medicina</b> Es la principal disciplina en el campo de la salud, ya que los médicos diagnostican y tratan enfermedades y afecciones en los pacientes, prescriben medicamentos y realizan procedimientos para restaurar la salud.</li>

    <li><b>Enfermería</b>: Proporciona cuidados directos, administran medicamentos, monitorizan la condición de los pacientes y educan sobre la salud y la prevención de enfermedades.</li>

    <li><b>Farmacología</b>: Se centra en el estudio de los medicamentos y su impacto en el cuerpo humano, investigan y desarrollan nuevos fármacos, así como evaluar su seguridad y eficacia.</li>

    <li><b>Epidemiología</b>: Se encarga de estudiar la distribución y las causas de las enfermedades en las poblaciones, investigan brotes de enfermedades, evalúan factores de riesgo y contribuyen a la prevención y control de estas.</li>
    <li><b>Nutriología</b>: Los nutricionistas, se encargan de la nutrición y la dieta. Ofrecen orientación sobre la alimentación y la nutrición para prevenir enfermedades y mejorar la salud.</li>
  </ul>

  <p>Otras disciplinas que también están relacionadas con la salud son: la Odontología, la Fisioterapia, la Psicología de la salud, la Biología, la Química, la Anatomía y la Fisiología, entre otras. Todas las disciplinas relacionadas con la salud deben trabajar conjuntamente para proporcionar una atención integral, incluyendo la prevención, el diagnóstico, el tratamiento, la rehabilitación y la promoción de estilos de vida saludables.</p>

  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number md:ml-32 mb-8">
    <li>A partir de la información presentada sobre las diferentes disciplinas que forman parte del proyecto de salud, elabora un mapa conceptual que incluye estos conceptos.</li>
    <li>Antes de empezar, consulta la <a href="<?php echo PATH_DOCS . 'rubrica-mapa.pdf'; ?>" target="_blank">rúbrica</a> para asegurar que tu trabajo cumple con los requerimientos establecidos.</li>
  </ol>
  <?php ob_start(); ?>
  <p>Adjunta aquí tu mapa conceptual.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1-act-3', "Mapa conceptual - Disciplinas de la salud", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
