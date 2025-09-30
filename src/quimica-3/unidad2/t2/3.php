<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Procesos de obtención de metales</h2>
  <h3>Clasificación en físicos y químicos</h3>
  <h4>Concentración y reducción</h4>

  <p>Existen diferentes procesos de extracción que se han desarrollado como producto de una investigación rigurosa sobre los minerales, en donde se incluyen etapas como el análisis de su localización y las condiciones geológicas del yacimiento, la extracción, concentración, reducción y su posterior refinación. </p>

  <p>La actividad extractiva, llevada a cabo de manera desmedida, ha dejado numerosos problemas socioeconómicos y ambientales, por ejemplo, conflictos entre poblaciones por inauguración o expansión de minas, la contaminación directa al suelo, agua y aire, intensidad energética, deforestación, ruido, drenajes ácidos en las minas, destrucción de hábitats, desecho de sustancias tóxicas, entre otros. </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-hierro.webp','Hierro fundido','https://pixabay.com/es/photos/mineral-minerales-piedras-238651', 'Pixabay');
      renderImage('q3-u2-liquido.webp','Metales en estado líquido','https://pixabay.com/es/photos/mineral-minerales-piedras-238651', 'Pixabay');
  ?>
  </div>

<p>En el siguiente cuadro se muestran los procesos para obtener metales a partir de minerales.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-procesos.webp','Procesos para obtener metales, a partir de minerales.','https://pixabay.com/es/photos/mineral-minerales-piedras-238651', 'Pixabay');
  ?>
  </div>

  <p>A continuación, revisa una presentación sobre la concentración y reducción para obtener metales a partir de minerales: </p>

  <h2>POWERPOINT</h2>

  <?php ob_start(); ?>
  <p>Después de revisar la presentación, corrobora lo aprendido en la actividad Procesos de obtención de metales a partir de minerales.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a3', " Procesos de obtención de metales a partir de minerales.", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
