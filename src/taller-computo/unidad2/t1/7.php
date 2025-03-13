<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ParaSaber.php';
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
<?php ob_start(); ?>
<section>
  <p>La UNAM tiene su propia Supercomputadora y se llama MIZTLI.</p>
  <p>Miztli es una supercomputadora, integrada por muchas computadoras capaces de trabajar al mismo tiempo y de forma coordinada, como si se tratara de una sola.</p>
  <p>Realiza un recorrido virtual para que la conozcas, descarga la <a href="https://play.google.com/store/apps/details?id=mx.unam.dgtic.dvrv.SiteVirtualSupercomputo" target="_blank">app Miztli: La supercomputadora de y disfruta tu recorrido</a></p>
  <h3>¿Quieres saber más?</h3>
</section>
<p>Te invito a que revises el siguiente <a href="https://www.super.unam.mx/miztli" target="_blank">link</a>, donde se habla sobre la Supercomputadora Miztli.</p>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "¿Sabías que?");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
