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
        <p>En este aprendizaje conocerás y comprenderás el desarrollo histórico de la Geometría Euclidiana. </p>
            <p>Es importante que conozcas esta historia para que puedas observar cómo se va desarrollando a lo largo del
                tiempo todos los conceptos, definiciones, correspondientes a está área del conocimiento, esto te
                permitirá comprender mejor los aprendizajes que trabajaremos en esta unidad.</p>
            <p>Revisa la siguiente página que contiene el desarrollo histórico de la Geometría y realiza una línea de
                tiempo con los datos relevantes que tu decidas a partir de la información.</p>
        </div>
        <div>
        <a href="https://pel.cch.unam.mx/pluginfile.php/13490/mod_resource/content/4/build/assets/images/u3/t1/historia_geom.pdf" target="_blank">
                <?php
                renderImage('u3t1_banner_desarrollo_geometria.webp', '', '', '');
                ?>
      </a>
      </div>
    </div>
    <div>

  <?php ob_start(); ?>
  <p>Finalmente realiza la siguiente actividad, ésta te apoyará para que realices una autoevaluación acerca de lo que aprendiste acerca de la historia de la Geometría.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a2', "Historia de la Geometría", $ActividadContent);
  ?>

  <p>Ya con los conocimientos que tienes sobre la historia de la Geometría empecemos a trabajar con ellos en el siguiente aprendizaje que son los elementos básicos de una figura geométrica.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>