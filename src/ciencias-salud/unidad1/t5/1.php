<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Identifica las distintas ciencias relacionadas con la salud y sus formas de intervención</h2>

  <p>La salud es un campo multidisciplinario que involucra a una variedad de ciencias, que trabajan juntas para promover, mantener y restaurar la salud de las personas y las poblaciones, algunas de las principales son:</p>

  <ul>
    <li><b>Medicina</b> Es la principal disciplina en el campo de la salud, ya que los médicos diagnostican y tratan enfermedades y afecciones en los pacientes, prescriben medicamentos y realizan procedimientos para restaurar la salud.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u1-t5-medico.webp', 'Médico', 'https://www.freepik.es/vector-gratis/ilustracion-dibujos-animados-medico-dibujado-mano_58564076.htm#query=doctor%20cartoon&position=2&from_view=keyword&track=ais', 'recuperado el 11 de noviembre de 2023'); ?>
         </div>
    </li>

    <li>Enfermería: Proporciona cuidados directos, administran medicamentos, monitorizan la condición de los pacientes y educan sobre la salud y la prevención de enfermedades.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u1-t5-enfermeria.webp', 'Enfermería', 'https://www.freepik.es/fotos-vectores-gratis/enfermera-animada', 'recuperado el 11 de noviembre de 2023'); ?>
         </div>
    </li>

    <li>Farmacología: Se centra en el estudio de los medicamentos y su impacto en el cuerpo humano, investigan y desarrollan nuevos fármacos, así como evaluar su seguridad y eficacia.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u1-t5-farmacologia.webp', 'Farmacología', 'https://upload.wikimedia.org/wikipedia/commons/e/e4/Legenogapotekeren.jpg', 'recuperado el 11 de noviembre de 2023'); ?>
         </div>
    </li>

    <li>Epidemiología: Se encarga de estudiar la distribución y las causas de las enfermedades en las poblaciones, investigan brotes de enfermedades, evalúan factores de riesgo y contribuyen a la prevención y control de estas.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u1-t5-epidemiologia.webp', 'Epidemiología', 'https://camera.edu.vn/epidemiologia-dibujos-d9fv321l/', 'recuperado el 11 de noviembre de 2023'); ?>
         </div>
    </li>

    <li>Nutriología: Los nutricionistas, se encargan de la nutrición y la dieta. Ofrecen orientación sobre la alimentación y la nutrición para prevenir enfermedades y mejorar la salud.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u1-t5-nutriologia.webp', 'Nutriología', 'https://www.freepik.es/vector-gratis/fondo-isometrico-nutricionista_26763076.htm#query=nutriologos&position=29&from_view=keyword&track=sph', 'recuperado el 11 de noviembre de 2023'); ?>
         </div>
    </li>


  </ul>

  <p>Estos factores no son independientes y pueden interactuar de manera compleja, como en el caso del estrés psicológico crónico que puede estar relacionado con factores sociales, como la falta de apoyo social y/ o condiciones socioeconómicas desfavorables. Además, la cultura y los valores personales pueden influir en las decisiones de salud, como las elecciones dietéticas y el acceso a la atención médica. Para promover la salud de manera efectiva, es esencial abordar estos condicionantes de forma holística y considerar la interacción entre los factores bio-psico-socioculturales.</p>

  <?php ob_start(); ?>
  <p> Para que reafirmes tus conocimientos sobre el tema, ve el siguiente video. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t5a1', "video", $ActividadContent);
  ?>
   
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
