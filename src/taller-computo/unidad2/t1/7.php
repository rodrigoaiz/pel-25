<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>¿Qué es una tabla comparativa?</h3>
  <p>Para poder llevar a cabo la siguiente actividad primero daremos respuesta a la pregunta <strong>¿Qué es una tabla comparativa?</strong>, esta te ayuda a organizar el conocimiento, contrastando varios elementos referentes a un mismo tema, describiendo y relacionando la información recopilada, en consecuencia, te permite diagramar la información tanto horizontal como verticalmente, a continuación, te proponemos una tabla comparativa, así como el archivo en Word, el que deberás de utilizar para tu tarea.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t1_tabla_comparativa.webp', 'Características tipos de computadoras.') ?>
  </div>
  <?php ob_start(); ?>
  <p>Ahora que ya sabemos que es una Tabla comparativa, y lo visto durante la lección, descarga el archivo, apoyate de la lista de cotejo tabla “Características de las computadoras”, y completa la tabla, te invito a retomar tus notas de las actividades anteriores, así como tu investigación del tema, para entregar la siguiente actividad <strong>Tarea: Tabla comparativa “Características de las computadoras</strong>”.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a6', "Tabla: Características de las computadoras", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza el siguiente ejercicio de autoevaluación, que te permite conocer el logro de tu aprendizaje.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a7', "Características de los tipos de computadoras", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
