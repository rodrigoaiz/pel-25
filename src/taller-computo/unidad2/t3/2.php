<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Sistemas de numeración binario</h3>
  <p>La base es el número 2</p>
  <p>Numerales: {0, 1}</p>
  <p>Los valores posicionales se calculan como potencias de 2</p>
</section>
<div class="text-center mx-auto max-w-6xl py-5 px-2 lg:px-0">
  <?php renderImage('u2_t3_figura_1.webp', 'Nota: Muestra la determinación de los valores posicionales en sistema binario.'); ?>
</div>
<section>
  <p>John von Neumann introdujo la idea que las computadoras deberían fabricarse con sistema binario, asociando uno a un alto voltaje y un cero a un bajo voltaje.</p>
  <p>La memoria RAM de la computadora está constituida por grupos ocho de capacitores donde se almacena la información como se ve a continuación.</p>
  <p>Figura 2. La relación entre la memoria y el sistema binario.</p>
  <div class="text-center mx-auto max-w-6xl py-5">
    <?php renderImage('u2_t3_figura_2.webp', 'Nota: Presenta a uno de los grupos de capacitores que constituyen la memoria, a los dos estados eléctricos que pueden almacenar los capacitores y que el uno binario se asocia a un estado y el cero binario se asocia al otro estado eléctrico.'); ?>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
