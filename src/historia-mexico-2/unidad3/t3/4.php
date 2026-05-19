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
  <h2>La guerra sucia en México</h2>

  <p>Además de la represión hacia movimientos sociales, durante la etapa que estamos estudiando tuvo lugar también el desarrollo de la llamada <b>guerra sucia</b>, entendida como un conjunto de medidas de represión militar y política encaminadas a disolver los movimientos de oposición política al régimen, aún cuando estas acciones violaban las leyes mexicanas y las convenciones internacionales. En nuestro país una institución involucrada en estas acciones fue el Ejército mexicano desplegado en zonas donde surgieron grupos guerrilleros, como fue el estado de <b>Guerrero con Genaro Vázquez y Lucio Cabañas</b>.</p>

  <p>Revisa a continuación el vídeo </p>

    <?php
      renderVideoIframe('JMIZB720oQw', 'Confidencial, expedientes de la Guerra Sucia: Genaro Vázquez Rojas');
    ?>

    <?php ob_start(); ?>
    <p>Después de ver el vídeo, realiza la siguiente actividad:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a12', "La guerra sucia en México", $ActividadContent);
    ?>

  <p>A través de la revisión de los vídeos pudiste observar la manera como se realizó la represión hacia diversos movimientos sociales estudiantil con un discurso institucional que buscaba acallar voces de quienes con valentía manifestaron sus inconformidades y demandas ante un régimen profundamente autoritario.</p>
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
