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
  <h2>Reacciones redox.</h2>
  
  <p>En la industria minero-metalúrgica, se presentan una gran variedad de procesos en los cuales ocurren cambios físicos y químicos. Esos cambios químicos se deben precisamente a las reacciones redox, a las reacciones en las cuales cambia el número de oxidación de los elementos participantes y donde mientras unas especies se oxidan, otra se reducen.</p>

  <p>Observa las siguientes ecuaciones e identifica que algunas son redox y otras no.</p>


  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-redox3.webp','Reacciones redox y no redox');
    ?>
  </div>

  <p>Como habrás notado, no todas las reacciones donde participan los metales o minerales, son redox. Recuerda que las reacciones son redox, cuando las especies que participan cambian su número de oxidación, ya sea para oxidarse o para reducirse. Ahora observa el siguiente video en el cual se explica el proceso de extracción del hierro y acero.</p>

  <?php
  renderVideoIframe('GQlBBepQORk', 'Proceso de obtención del hierro y el acero');
  ?>

  <p>En el video del proceso de extracción del hierro y el acero, se llevan a cabo diferentes procesos, algunos tienen cambios físicos, pero en otros se observan reacciones de transformación de la materia. </p>

   <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-tabla.webp','Reacciones que se llevan a cabo en obtención del hierro, Chang (2017)');
    ?>
  </div>

  <p>Como se había mencionado, los procesos de extracción y refinamiento de los metales dependen de su reactividad y propiedades de cada elemento. Así pues, algunos deben pasar por ciertos procedimientos sencillos, mientras que otros requieren de metodologías más complejas.
</p>

  <p>En la siguiente imagen se hace una relación de los metales de acuerdo con su reactividad, tal y como se hizo con la serie electromotriz; pero en esta ocasión también se indica el estado en el que se encuentran los metales (libres o combinados),  que da pauta a su proceso de reducción y la facilidad con la que puede llevarse a cabo, así como los compuestos en los cuales está presente comúnmente.
</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-estabilidad.webp','Estabilidad entre metales y sus compuestos. Lira Vázquez, G.(2018)')
  ?>
  </div>

  <?php ob_start(); ?>
  <p>A continuación se presenta un cuestionario con el cual reafirmarás el tema de reacciones de óxido-reducción. No olvides que todas las actividades influyen directamente en tu calificación final.
</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a6', "Reacciones Redox", $ActividadContent);
  ?>




</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
