<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Proceso de Institucionalización</h2>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-linea.png', 'Gobiernos de 1920 a 1940');
    ?>
  </div>

  <p>Al terminar la Revolución Mexicana existió la necesidad de sentar nuevas bases del régimen político, pues el proceso posrevolucionario había colocado a los militares formados en la lucha armada, como principales actores de la política nacional. <b>Era necesaria la reconstrucción del Estado Mexicano</b> fortaleciendo la autoridad del gobierno central en manos del presidente, para terminar con las pugnas políticas internas, con la acción transformadora de un <b>gobierno fuerte</b> y de esta manera enderezar la formación de un régimen presidencialista – no autoritario y represivo como en su momento lo representó Porfirio Díaz –. </p>

  <p>En segundo lugar, llevar a cabo un proceso de <b>institucionalización</b> que se sustentó política, económica e ideológicamente en la Constitución de 1917, que diera una nueva característica al Estado con la búsqueda de una democracia y con apoyo de los diversos sectores de la población. Al mismo tiempo, sentar las bases del desarrollo económico del país.</p>

  <p>A partir de <b>1920</b> inicia un periodo de <b>gobierno de caudillos revolucionarios</b>, también llamado grupo sonorense, entre ellos Adolfo de la Huerta, Álvaro Obregón y Plutarco Elías Calles, quienes practicando una política populista vieron la necesidad de organizar a los sectores sociales para atender sus demandas creando instituciones que respaldaron su gobierno.</p>

<?php ob_start(); ?>
  <p>Para conocer sobre algunas instituciones creadas en este periodo te invito a revisar las siguientes tarjetas:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u2a2', "Industrialización", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
