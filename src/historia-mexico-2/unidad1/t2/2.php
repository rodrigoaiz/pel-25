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
  <h2>Las mujeres de la revolución mexicana</h2>

  <p>Durante este periodo las mujeres jugaron un papel predominante: se iban a las batallas, comandando tropas y ocupado inclusive puestos militares muy altos, como sargentos, subtenientes, capitanes o coroneles; algunas de ellas utilizaban el travestismo estratégico, para pasar desapercibidas. También fueron activistas, como es el caso de María Arias Bernal (María Pistolas) quien fue una maestra y activista revolucionaria que fundó el club femenil "Lealtad" para derrocar al presidente Huerta, imprimió diversos volantes anti-Huerta, visitaba y protegía la tumba de Francisco I. Madero, aún cuando era amenazado por el Gobierno de Huerta (Cano, 1996).</p>

  <div class="mx-auto max-w-md">
    <?php
    renderImage('hm2-u1-mujeres.jpg');
    ?>
  </div>

  <?php ob_start(); ?>
  <p>Para conocer más sobre la participación de la mujer durante la Revolución Mexicana, te invito a ver con detenimiento el vídeo sugerido y al finalizar participa en el foro de discusión.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a7', "Foro: mujeres en la Revolución Mexicana", $ActividadContent);
  ?>

  <p>La Revolución Mexicana no solo fue un conflicto armado liderado por hombres, sino que también contó con la participación de miles de mujeres en diferentes roles. Desde soldaderas y combatientes hasta enfermeras, periodistas y líderes políticas, su contribución fue fundamental para el desarrollo del movimiento revolucionario.</p>

  <p>Y de acuerdo con la historiadora Gabriela Cano, fue a partir de 1915 cuando el movimiento constitucionalista abrió espacios políticos que favorecieron el desarrollo de algunos asuntos planteados por el feminismo, entre ellas una postura de igualdad en el ámbito educativo y en lo laboral, aspecto que quedó plasmado en el artículo 123°. Con  respecto a los derechos de ciudadanía; el Congreso Constituyente (1916-1917) denegó el sufragio femenino.</p>

  <p>En años posteriores la demanda de sufragio femenino y el llamado a las mujeres a ejercer su influencia en la sociedad a través de la acción política se expresó en la revista  La mujer moderna. Semanario ilustrado (1915-1918), fundada y dirigida por Hermila Galindo.</p>




</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
