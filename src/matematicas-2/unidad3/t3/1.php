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
        <p>En este aprendizaje conocerás e identificarás los ángulos por su medida y la relación con otros ángulos.
            </p>
            <p>Los ángulos son de gran utilidad en las Matemáticas y los encontramos en nuestro entorno, por lo que es
                importante saber su clasificación y características de ellos.</p>
            <p>Revisar la siguiente página.</p>
        </div>
        <div>
        <a href="http://uapas1.bunam.unam.mx/matematicas/angulos_y_su_clasificacion/" target="_blank">
                <?php
                renderImage('u3t3_banner_angulos_clasificacion.webp', '', '', '');
                ?>
      </a>
      </div>
    </div>
    <div>

  <?php ob_start(); ?>
  <p>A partir de lo que revisaste realiza las siguientes actividades complementarán tu aprendizaje.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a5', "Definiciones de ángulo", $ActividadContent);
  ?>

<?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a6', "Ángulos alternos interno y externos", $ActividadContent);
  ?>

  <p>Seguramente recordaste la clasificación de ángulos y aprendiste otros, además de practicar con las actividades, continuemos ahora con nuevos ángulos formados por dos rectas paralelas y una transversal.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>