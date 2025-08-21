<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la Unidad 1</h2>
  
  <?php
  //ID confirmado del video
  renderVideoIframe('JmlS2Zf8-is', 'Bienvenida a la Unidad 1');
  ?>

  <h4>Cuestionario diagnóstico unidad 1</h4>
  <?php ob_start(); ?>
  <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarse, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuestionario diagnóstico de la Unidad 1", $ActividadContent);
  ?>
</section>

 <!-- Aviso legal y derechos de autor -->
  <div class="bg-gray-800 text-white p-4 mt-6 text-center text-sm">
    <p>Coordinación de Universidad Abierta, Innovación Educativa y Educación a Distancia de la UNAM. ©Todos los derechos reservados 2024. Hecho en México. Este sitio puede ser reproducido con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica, de otra forma, se requiere permiso previo por escrito de la Institución.</p>
    <p>Al navegar en este sitio, encontrará contenidos diseñados por académicos de la UNAM, denominados Contenidos Educativos Digitales (CED), disponibles para todo el público en forma gratuita. Los contenidos de cada CED son responsabilidad exclusiva de sus autores y no tienen impedimento en materia de propiedad intelectual; así mismo, no contienen información que por su naturaleza pueda considerarse confidencial y reservada.</p>
    <p>Los CED podrán ser utilizados sin fines de lucro, citando invariablemente la fuente y sin alterar la obra, respetando los términos institucionales de uso y los derechos de propiedad intelectual de terceros.</p>
  </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

