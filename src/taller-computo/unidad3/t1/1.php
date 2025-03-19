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

  <h2>Bienvenida a la unidad 3</h2>
  <h3>Aplicaciones matemáticas con una hoja electrónica de cálculo</h3>
  <p>Para que aprendas más acerca de lo que verás en esta unidad observa el siguiente video.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('w2GqrTkT-eI', 'Bienvenida Unidad 3.');
    ?>
  </div>
  <h4>¡Bienvenidos al mundo de las hojas de cálculo electrónicas!</h4>
  <p>En esta unidad, exploraremos una herramienta poderosa y esencial en el mundo de la informática y los negocios: <strong>Microsoft Excel</strong>.</p>
  <p>Las hojas de cálculo son herramientas versátiles que no sólo te ayudarán a <strong>realizar cálculos</strong>, sino también a <strong>organizar datos, crear gráficos y tomar decisiones basadas en información sólida</strong>.</p>
  <p>Nuestro objetivo es que al finalizar esta unidad es que te sientas seguro y competente en el uso de Excel, lo que te dará una ventaja en tus estudios y en tu vida cotidiana.</p>
  <p>No importa si eres nuevo en Excel o si tienes algo de experiencia, estamos para apoyarte y guiarte en tu aprendizaje.</p>
  <p>Abordaremos conceptos como <strong>fórmulas, gráficos, análisis de datos</strong> y mucho más, así que prepárate para adentrarte en el mundo de las hojas de cálculo, donde el conocimiento que adquieras te abrirá un mundo de oportunidades.</p>
  <p class="text-center text-2xl my-2 font-semibold">¡Comencemos!</p>

  <?php ob_start(); ?>
  <p>Para comenzar la unidad responde el siguiente <strong>cuestionario diagnóstico</strong> para conocer tus capacidades y determinar al final de la unidad si se cumplen las metas de tu aprendizaje.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a1', "Cuestionario diagnóstico unidad 3", $ActividadContent);
  ?>
</section>
<?php renderModalIndex(); ?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
