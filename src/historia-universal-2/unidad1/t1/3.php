<?php
include '../../../config.php'; 
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h2>Nuevas formas de explotación del trabajo</h2>
  
  <p>Después de la Segunda Revolución Industrial, que tuvo lugar aproximadamente entre finales del siglo XIX y principios del siglo XX, se produjeron cambios significativos en la forma en que se explotaba el trabajo en las sociedades industrializadas. Estas nuevas formas de explotación del trabajo reflejaron los avances tecnológicos y económicos de la época, y aunque hubo mejoras en algunos aspectos laborales, también surgieron desafíos y problemas. Aquí te explicamos algunas de las principales características de las nuevas formas de explotación laboral:</p>

  <p><strong>Intensificación de la jornada laboral:</strong> La Segunda Revolución Industrial introdujo máquinas más eficientes y la producción en cadena, lo que permitió una mayor producción en menos tiempo. Esto, a menudo, resultó en una mayor presión sobre los trabajadores para cumplir con cuotas de producción más altas, lo que llevó a una intensificación de la jornada laboral y una mayor carga de trabajo.</p>
  <p><strong>Condiciones de trabajo peligrosas:</strong> A medida que las fábricas y las industrias se expandieron, las condiciones laborales en muchos lugares eran peligrosas. Los trabajadores enfrentaban riesgos significativos, como la exposición a productos químicos tóxicos, maquinaria peligrosa y falta de medidas de seguridad en el lugar de trabajo.</p>
  <p><strong>Salarios bajos y explotación infantil:</strong> A pesar de los avances tecnológicos, los salarios de los trabajadores industriales a menudo eran bajos. Esto resultó en una explotación económica significativa, ya que los trabajadores tenían que trabajar largas horas para ganarse la vida. Además, en muchos lugares, la mano de obra infantil era ampliamente explotada, con niños trabajando en condiciones peligrosas y por salarios mínimos.</p>
  
  <?php
  renderImage('sr-gustafson.webp', 'Imagen de Sr. Gustafson', 'https://commons.wikimedia.org/wiki/File:Child_Labor,_1918.JPG', 'Wikimedia Commons');
  ?>

  <p><strong>Sistema de piezas y salarios a destajo:</strong> Se introdujo el sistema de pago a destajo, donde los trabajadores recibían salarios basados en la cantidad de productos que producían. Esto creó una mayor competencia entre los trabajadores y una mayor presión para aumentar la producción, lo que a menudo llevó a una mayor explotación y desigualdad.</p>
  <p><strong>Sindicatos y luchas laborales:</strong> A medida que las condiciones laborales empeoraron, surgieron movimientos laborales y sindicatos que buscaban mejorar los derechos de los trabajadores. Las huelgas y las luchas laborales se volvieron comunes, y en muchos países, se lograron mejoras en las condiciones de trabajo, como la limitación de horas laborales y la regulación de la seguridad en el lugar de trabajo.</p>
  <p><strong>Desarrollo de la industria de servicios y trabajadores precarios:</strong> Además de la industria manufacturera, la Segunda Revolución Industrial vio el crecimiento de la industria de servicios, que incluía trabajos en oficinas, comercio y transporte. Muchos de estos trabajadores enfrentaron inestabilidad laboral, salarios bajos y falta de beneficios laborales.</p>
  <p>En resumen, después de la Segunda Revolución Industrial, se produjeron cambios significativos en la forma en que se explotaba el trabajo, con una intensificación de la jornada laboral, condiciones peligrosas, bajos salarios y explotación infantil. Sin embargo, también se produjo un aumento en la conciencia laboral y la formación de sindicatos, lo que eventualmente condujo a mejoras en las condiciones laborales y derechos de los trabajadores en muchas partes del mundo.</p>

  <h3>Segunda revolución industrial y capitalismo</h3>
  <p>Finalmente te invitamos a entregar la siguiente actividad.</p>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a3', "Ir a la actividad", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>