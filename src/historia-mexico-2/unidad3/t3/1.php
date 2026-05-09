<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El contexto de cambios económicos y los movimientos sociales.</h2>

  <p>Durante las décadas que estamos analizando surgieron contradicciones económicas: por un lado se <b>impulsa la  industrialización con el control del Estado y un proteccionismo</b> que favoreció a  empresas nacionales y extranjeras.  Sin embargo, también surgieron elementos negativos con rezagos crecientes en la competitividad, la poca incorporación del progreso técnico, los desequilibrios comerciales  al disminuir las exportaciones de productos primarios, la deuda que obligaba al gobierno a realizar  pagos de intereses, además de otras necesidades presupuestales (Garrido, pág. 257). Estos problemas económicos se agudizaron con los cambios ocurridos en los años sesenta: a fines de esa década se produjo la crisis del <b>sistema monetario de Bretton Woods</b>, que condensaba la hegemonía norteamericana en este terreno y mediante el cual se ordenaban las relaciones comerciales a nivel mundial. La consecuencia fue el colapso del dólar en la economía internacional y el comienzo de un periodo de turbulencias cambiarias y financieras.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-cambios-economicos.webp', 'Cambios económicos');
    ?>
  </div>

  <p>Así, en un contexto de aparente bonanza económica, la sociedad vivió los estragos de <b>las contradicciones generadas</b> por un desarrollo económico y una política estabilizadora que no contribuyó de manera equitativa al desarrollo de los diferentes sectores, contradicciones que influyeron de manera importante en el <b>surgimiento de movimientos sociales</b>, que de acuerdo con la escritora Elena Poniatowska, responde a la inequidad, resultado de las políticas del Estado que intentaba tener el control de las masas y evitar movilizaciones que desestabilizaban al país y afectaban el desarrollo económico. Pero al no lograrlo, surgen diferentes movilizaciones manifestando el descontento e inconformidad ante las desigualdades sociales y buscando mejores condiciones laborales. <b>Una lucha por la justicia, por las libertades y contra el autoritarismo del gobierno</b>, pero sobre todo por la democratización del país.</p>

  <p>Para conocer algunos movimientos sociales que surgen en esta etapa, revisa la presentación PREZI:</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-prezi.webp', 'Presentación prezi de movimientos sociales','https://prezi.com/view/91Zz0eQ8lqV90zBNItI1/','prezi');
    ?>
  </div>

  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
