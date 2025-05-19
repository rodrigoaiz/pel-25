<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

    <div class="md:grid grid-cols-2 gap-3">
        <div>
        <p>En este aprendizaje conocerás, identificarás y trabajarás con los ángulos alternos internos, alternos
                externos y correspondientes.</p>
        <p>Revisa la siguiente página en ella encontrarás varios ejemplos que te facilitarán la construcción del
                aprendizaje y de nuevas definiciones como ángulos colaterales, además de resolver ejercicios numéricos y
                algebraicos con los ángulos antes mencionados.</p>
        </div>
        <div>
        <a href="http://uapas2.bunam.unam.mx/matematicas/angulos_rectas_paralelas" target="_blank">
                <?php
                renderImage('u3t3_banner_rectas_paralelas.webp', '', '', '');
                ?>
      </a>
      </div>
    </div>
    <div>

<div class="md:grid grid-cols-2 gap-3 items-center">
        <div>
        <p>Revisa el siguiente ejercicio.</p>
        </div>
        <div>
                <?php
                renderImage('u3t3_Imagen15.webp', '', '', '', true);
                ?>
      </div>
    </div>
<div>

  <?php ob_start(); ?>
  <p>Ahora realiza la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a9', "Rectas paralelas y una transversal", $ActividadContent);
  ?>

  <p>Terminamos el estudio de los ángulos ahora pasemos al estudio y comprensión de los triángulos.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>