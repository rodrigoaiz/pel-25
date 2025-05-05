<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h2>Notación</h2>

<p>El primer caso que vamos a revisar es el de congruencia. Cuando se ha logrado identificar que dos figuras
                son congruentes, podemos escribirlo empleando el siguiente símbolo: \(\cong\)</p>
<p>Por ejemplo, en la actividad anterior, las figuras I y IV son triángulos con las mismas medidas, por lo
                que podemos escribir:</p>
<p>\(\triangle I \cong \triangle II\)</p>
<p>Que se lee: “El triángulo I es congruente con el triángulo II”</p>

<?php ob_start(); ?>
<p>Te toca practicar con el siguiente ejercicio, verificando si realmente hay figuras congruentes. ¡No olvides que las medidas son iguales!</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u4a2', "Ejercicio notación", $ActividadContent);
?>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>