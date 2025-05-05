<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h4>Perímetro de un polígono regular</h4>

<?php ob_start(); ?>
<p>Un polígono es la porción del plano limitada por una curva cerrada llamada línea poligonal, ya lo hemos mencionado en varios aprendizajes, ahora estudiemos el cálculo de la área y perímetro de los diferentes polígonos para lo cual deberás revisar el video interactivo empecemos con el perímetro del polígono.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u3a13', "Perímetro de un polígono regular", $ActividadContent);
?>

<?php ob_start(); ?>
<p>Ahora que podemos calcular el perímetro de un polígono pasemos a calcular el área de los polígonos regulares.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u3a14', "Área de un polígono regular", $ActividadContent);
?>

<?php ob_start(); ?>
<p>Finalmente calculemos el área de un polígono irregular.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u3a15', "Área de un polígono irregular", $ActividadContent);
?>

<p>Excelente, sigamos trabajando, recuerdas que empezamos a trabajar con las rectas notables de la circunferencia en el siguiente aprendizaje profundizaremos más, para que consolides tu aprendizaje.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>