<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Crisis económica</h2>

  <p>El estallido de la revolución fue una <b>respuesta violenta</b> de diversos grupos sociales que, de distintas maneras, padecían los efectos de <b>mecanismos de control instaurados</b> en nombre de un supuesto progreso económico y modernidad. Estas políticas, sin embargo, acentuaron profundas contradicciones y generaron un creciente descontento que sumió al país en una década de violencia.</p>

  <p>Entre las contradicciones generadas debemos recordar <b>la situación económica</b> del país a <b>principios del siglo XX</b>, los conflictos agrarios, el malestar obrero, la fractura del régimen porfirista y el surgimiento de grupos opositores.</p>

  <p>Empecemos por comprender la situación económica del país que recordarás durante el porfiriato, en el que la economía mexicana tuvo tres grandes fuentes de ingreso para su expansión económica: las exportaciones, la inversión extranjera y el crédito externo. Sin embargo, la gradual caída del precio en oro de la plata, acentuada en 1902, convenció a Limantour de que México debía seguir a otras naciones avanzadas en la adopción del patrón oro. Para conocer el proceso e impacto de la crisis en México revisa lo siguiente:</p>

  <?php
  renderImage('hm2-u1-crisis.jpg', 'Crisis económica en México 1907');
  ?>

  <p><b>El impacto de la crisis en México</b> se debió a que al inicio del siglo XX, México y Estados Unidos estaban económicamente integrados de tal manera que la crisis afectó con rapidez la situación económica de nuestro país, ocasionando un gran <b>recrudecimiento de la situación económica y social</b> que afectó todos los estratos de la población, aunque en diferentes grados, generando protestas sociales, que aceleraron el proceso de la crisis política entre 1909-1910. Los más <b>perjudicados</b> por la crisis fueron los <b>trabajadores de la industria, la minería</b> y en algunos casos también de la <b>agricultura</b> orientada hacia la exportación, que perdieron su empleo o tuvieron que aceptar reducciones de su salario que aunado al despojo de tierras lo que modificó la estructura agraria mexicana, con la formación de enormes latifundios, muchos de ellos en manos extranjeras, generando un malestar social que culminaría en movilizaciones sociales.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
