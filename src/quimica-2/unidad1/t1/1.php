<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ModalIndex.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

  <h2>Bienvenida a la unidad</h2>
  <p>Revisa los siguientes videos donde se te da la bienvenida oficial al curso y a la Unidad 1:</p>
  <div class="lg:grid grid-cols-2 gap-5">
    <?php
    renderVideoIframe('51-h2Q2vfc0', 'Bienvenida a la asignatura de Química II.');
    renderVideoIframe('OLBIL4WRRIc', 'Bienvenida a la unidad 1.');
    ?>
  </div>
  <p>Te damos la bienvenida a la unidad 1 “Suelo, fuente de nutrientes para las plantas”, aquí vas a aprender todo lo relacionado con el recurso natural suelo, su relación en la producción de alimentos, la necesidad de su conservación y la contribución de la Química para identificar sus propiedades y proveer sustancias útiles para ti vida mediante la síntesis química.</p>
  <p>Las lecciones de la Unidad 1 te apoyarán para comprender los temas de composición del suelo y su importancia para obtener nutrientes indispensables en las plantas, las características de las sales revisando el modelo de enlace iónico y de disociación, reacciones de oxido-reducción y ácido-base, y finalmente se estudiará la parte cuantitativa de una reacción química mediante la estequiometría.</p>

  <?php ob_start(); ?>
  <p>Realiza el siguiente cuestionario de inicio para identificar qué temas y conceptos reconoces antes de comenzar las lecciones de la Unidad 1.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a1', "Cuestionario diagnóstico de unidad 1", $ActividadContent);
  ?>
  <h3>Bienvenida a la Lección 1</h3>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('mOAusrS_oNw', 'Bienvenida a la Lección 1.');
    ?>
  </div>
  <p>¡Hola! Bienvenidas y bienvenidos a la primera lección de la Unidad 1, de título “El suelo como mezcla”, en la que se revisarán los temas de las funciones principales del suelo, su composición química y las características de los compuestos orgánicos e inorgánicos.</p>
</section>
<?php renderModalIndex('<strong>IMPORTANTE 2:</strong> Sólo encontrarás disponible el contenido de la Unidad 1 y 2, en breve podrás acceder a las siguientes unidades'); ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>