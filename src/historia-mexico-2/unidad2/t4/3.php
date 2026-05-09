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

  <h2>La lucha feminista en el México posrevolucionario: la búsqueda del sufragio</h2>

  <p>El movimiento feminista en México es evidente desde fines del siglo XIX, cuando las mujeres eran dependientes de sus lazos familiares, no podían acceder a la educación superior, no podían votar, e incluso en años posteriores la Constitución mexicana le negaba sus derechos ciudadanos. Esto refleja un contraste con la situación actual, donde han surgido diversas voces de lucha que son escuchadas, promoviendo cambios en el fondo de las estructuras institucionales y sociales.</p>

  <p>¿Pero cuál ha sido el trayecto de lucha de las mujeres? a continuación revisa el siguiente vídeo.</p>

  <?php
    renderVideoIframe('pBu2ZmkH1sw', 'El movimiento sufragista en México');
  ?>

  <p>A pesar de la obtención del derecho al voto en 1953, la lucha feminista continuó en décadas posteriores por la igualdad del hombre y la mujer ante la ley, el derecho a decidir de manera libre y responsable su maternidad y sexualidad, y en años recientes una creciente movilización de mujeres pidiendo el alto a la violencia en muy diversos ámbitos (laborales, escolares, familiares), pero sobre todo contra el aumento de feminicidios en distintas regiones del país.</p>

  <?php ob_start(); ?>
        <p>Para reflexionar sobre los avances y desafíos del movimiento feminista, te invito a participar en el siguiente FORO:</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividad('u2a14', "Foro: El movimiento feminista en México", $ActividadContent);
      ?>
      
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
