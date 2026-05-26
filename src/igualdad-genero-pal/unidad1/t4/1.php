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
  <h2>La importancia de construir una cultura de la igualdad</h2>
  <div class="w-2/3 mx-auto">
    <?php
    renderImage('iga5-img1.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 5!</h3>
  <p>En este apartado nos adentraremos en un tema fundamental para el desarrollo de las sociedades justas e igualitarias: la importancia de construir una cultura de la igualdad. Exploraremos las razones por las cuales es crucial fomentar una cultura de la igualdad, identificando prácticas y acciones que podemos implementar en nuestros entornos cotidianos.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósito</p>
  <p>Comprenderás la importancia de construir una cultura de la igualdad, a través de la reflexión sobre la relevancia de la igualdad en diversas esferas de la vida para identificar las prácticas y actitudes discriminatorias, contrarrestándolas con la inclusión, la justicia social y el respeto mutuo en sus contextos y en la sociedad en general.</p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p class="font-bold">Declarativos:</p>
  <p>- Concepto de cultura, igualdad, cultura de la igualdad.</p>
  <p>- Importancia de una cultura de la igualdad.</p>
  <p>- Prácticas y acciones que fomenten la construcción de una cultura de la igualdad.</p>
  <p class="font-bold">Procedimentales:</p>
  <p>- Identificación de conceptos relacionados con la cultura de la igualdad.</p>
  <p>- Reconocimiento de la importancia de una cultura de la igualdad.</p>
  <p>- Valoración de las prácticas y acciones que fomenten la construcción de una cultura de la igualdad.</p>
  <p class="font-bold">Actitudinales:</p>
  <p>- Empatía hacia las experiencias de lxs demás.</p>
  <p>- Respeto a la diversidad.</p>
  <p>- Apertura y participación.</p>

  <h3>Evaluación diagnóstica</h3>
  <p><strong>Propósito</strong></p>
  <p>Este cuestionario diagnóstico detecta tus conocimientos previos acerca del tema para posteriormente introducirte al aprendizaje de la cultura de la igualdad.</p>
  <p><strong>Instrucciones:</strong>
  <p>Contesta las siguientes preguntas seleccionando las respuestas que consideres correctas.
    Cada pregunta tiene un valor de dos puntos.</p>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t5a1', "Cuestionario diagnóstico", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>