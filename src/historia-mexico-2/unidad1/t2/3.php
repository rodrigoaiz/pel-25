<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Los pueblos indígenas y su lucha en la Revolución Mexicana.</h2>

  <p>La participación de las comunidades indígenas en la Revolución Mexicana fue crucial, aunque a menudo marginada en la historiografía oficial. Su intervención tomó diversas formas y respondió a problemas históricos de despojo, explotación y marginación. Para muchas comunidades, la revolución representó una oportunidad para recuperar sus tierras y, con ellas, sus formas tradicionales de organización y aprovechamiento de los recursos.</p>

  <div class="mx-auto max-w-md">
    <?php
    renderImage('hm2-u1-indi.jpg');
    ?>
  </div>

  <p>Un ejemplo significativo es el caso de los pueblos yaquis, quienes fueron despojados de sus tierras para entregarlas a concesionarias extranjeras. Al respecto, la autora Ana Luz Ramírez Zavala señala en su libro <i>La participación Yaqui en la Revolución Mexicana 1913-1920</i> que Francisco I. Madero expresó su preocupación por la situación de los yaquis y propuso reconocerlos como legítimos dueños de sus tierras. Durante su campaña política, visitó lugares como Navojoa, Álamos, Guaymas, Hermosillo y Nogales.</p>

  <p>En este contexto, la actividad militar en Sonora a favor de la revolución democrática de Madero comenzó a tomar fuerza. Sin embargo, no puede considerarse determinante en el desarrollo del conflicto, ya que la diversidad de intereses entre los caudillos de la revolución dio lugar a acciones igualmente diversas por parte de los yaquis. Algunos grupos apoyaron a los orozquistas; otros se unieron a los constitucionalistas, y en distintos momentos adoptaron una serie de alianzas y relaciones con hombres en el poder según sus propias necesidades y estrategias.</p>

  <p>Revisa a continuación el siguiente vídeo:</p>

  <?php
  renderVideoIframe('c4Ed4Qyi9hk', 'El pueblo Yaqui en la Revolución Mexicana');
  ?>

  <p>Como te pudiste dar cuenta a lo largo de la lección, la Revolución Mexicana fue un conflicto armado que comenzó en 1910 y se prolongó hasta 1920. Este movimiento tuvo como objetivo principal derrocar al entonces presidente Porfirio Díaz, quien había estado en el poder por más de 30 años. La revolución surgió debido a la desigualdad social, la explotación laboral, despojo de tierras y  la falta de democracia.</p>

  <p>Algunos de los personajes más destacados de la Revolución Mexicana fueron: Francisco I. Madero, Emiliano Zapata, Pancho Villa y Venustiano Carranza. Cada uno de ellos tuvo un papel relevante en diferentes etapas del conflicto y su lucha fue por diversas causas tales como la reforma agraria, la justicia social, la no reelección, entre otros aspectos.</p>

  <?php ob_start(); ?>
  <p>Esta lucha tiene como resultado la promulgación de la Constitución de 1917, que introdujo importantes reformas sociales y políticas, las cuales se analizarán en la próxima lección. Ahora realiza la siguiente actividad evaluativa:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a8', "Cuestionario", $ActividadContent);
  ?>

  

  

  <p>En años posteriores la demanda de sufragio femenino y el llamado a las mujeres a ejercer su influencia en la sociedad a través de la acción política se expresó en la revista  La mujer moderna. Semanario ilustrado (1915-1918), fundada y dirigida por Hermila Galindo.</p>




</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
