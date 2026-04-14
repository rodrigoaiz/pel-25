<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida al curso</h2>
  <p>Esta unidad tiene como propósito fomentar las habilidades que pide la asignatura: escuchar, hablar, leer y escribir. Para estos fines, se abordarán diversos textos que funcionarán para todos y cada uno de los aprendizajes requeridos. Es importante que leas atentamente los aspectos teóricos que se irán mencionando a lo largo de toda la unidad, además de que analices los ejemplos, que te servirán de guía en la solución de los ejercicios que tendrás que resolver.</p>
  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('fiIKC5iUzbQ', 'Bienvenida a la unidad 2');
      ?>
    </div>
  </div>
  <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre la unidad anterior.</p>
  <?php ob_start(); ?>
  <p>Responde cada una de las preguntas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a1', "Cuestionario diagnóstico | Unidad 2", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>