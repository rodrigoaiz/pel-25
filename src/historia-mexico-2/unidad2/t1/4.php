<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La Guerra Cristera</h2>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-cristera.webp', 'Ejército Unión Popular Cristera', 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Ej%C3%A9rcito_Uni%C3%B3n_Popular_Cristera.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original', 'wikimedia commons');
    ?>
  </div>

  <p>Al terminar la Revolución Mexicana existió la necesidad de sentar nuevas bases del régimen político, pues el proceso posrevolucionario había colocado a los militares formados en la lucha armada, como principales actores de la política nacional. Era necesaria la reconstrucción del Estado Mexicano, fortaleciendo la autoridad del gobierno central en manos del presidente, para terminar con las pugnas políticas internas, a través de la acción transformadora de un gobierno fuerte. Se pretendía lograr la formación de un régimen presidencialista – no autoritario y represivo como en su momento lo representó Díaz –  y al mismo tiempo controlar a la Iglesia, que no quería acatar lo establecido en la Constitución de 1917 Esto dio origen a una <b>confrontación entre el Estado y la Iglesia</b> que se conoce como <b>Guerra Cristera</b> de 1926 a 1929.</p>

  <?php ob_start(); ?>
  <p>Para conocer más sobre el tema, realiza la siguiente tarea:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a4', "La Guerra Cristera", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Para finalizar, te invito a contestar el siguiente cuestionario:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a5', "Cuestionario: La Guerra Cristera", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
