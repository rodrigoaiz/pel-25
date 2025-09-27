<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Información cuantitativa que se obtiene a partir de una ecuación química.</h2>
  <h3>Cálculos de mol–mol, masa–mol y masa–masa.</h3>

  <p>Revisa el siguiente video sobre el Mol:</p>

  <?php
  renderVideoIframe('AaqOiGVdRmM', '¿Qué es una reacción química?');
  ?>

  <p>Como revisamos anteriormente, la estequiometría se refiere al cálculo de cantidades de las sustancias que participan en las reacciones químicas. Si se conoce la cantidad de una sustancia se puede determinar la cantidad de otra sustancia de los reactivos o productos empleando la ecuación química balanceada. Estas cantidades se pueden determinar en moles o en masa a través de cálculos estequiométricos dados por la ecuación química.</p>

  <p>Los coeficientes estequiométricos de la ecuación balanceada indican las proporciones que se requieren de reactivos y productos.</p>

  <p>Analicemos la ecuación de síntesis del amoniaco:</p>

   <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-amo.webp')
  ?>
  </div>

  <p>Los coeficientes estequiométricos o también llamados moles indican que 3 moles de hidrógeno gaseoso reaccionan con 1 mol de nitrógeno gaseoso para producir 2 moles de amoniaco. Con estos coeficientes se pueden representar una razón molar para cada par de sustancias que intervienen en la ecuación química. En este ejemplo de síntesis de amoniaco, intervienen tres sustancias, por lo tanto, se pueden representar tres pares de razones molares.</p>

  <p>El primer par es entre los dos reactivos: hidrógeno y nitrógeno. Se tienen dos razones porque se determina la razón inversa (1 y 2). El siguiente par entre un reactivo (hidrógeno) y amoniaco (3 y 4) y el tercer par es entre el nitrógeno y el amoniaco (5y 6). En total se determinan 6 razones molares.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-razones.webp')
  ?>
  </div>

  <p>De esta forma se pueden emplear los coeficientes estequiométricos de cualquier ecuación química para determinar las razones molares y hacer un cálculo estequiométrico de mol-mol, masa-mol y masa-masa.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
