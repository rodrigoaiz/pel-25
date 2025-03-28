<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Referencias</h2>
  <ul id="biblio" class="ul-disc">
    <li>Colegio de Ciencias y Humanidades. (2021). <em>Funciones Trigonométricas</em>. Portal académico CCH-UNAM. <a href="https://portalacademico.cch.unam.mx/materiales/prof/matdidac/sitpro/mate/mate/mate4/Mat4/3_funciones_trigonomtricas.html" target="_blank">https://portalacademico.cch.unam.mx/materiales/prof/matdidac/sitpro/mate/mate/mate4/Mat4/3_funciones_trigonomtricas.html</a></li>
    <li>Cornejo Arteaga. (s/a). <em>FUNCIONES TRIGONOMÉTRICAS</em>. Recuperado de <a href="https://tinyurl.com/yqyha9sw" target="_blank">https://tinyurl.com/yqyha9sw</a></li>
    <li>El Tío Tech (2022). <em>Como calcular el Arco Seno de un número en Excel</em> (FUNCIÓN ASENO) [Video]. YouTube. <a href="https://www.youtube.com/watch?v=gw4A0sLI5HM" target="_blank">https://www.youtube.com/watch?v=gw4A0sLI5HM</a></li>
    <li>El Tío Tech (2022). <em>Como calcular el Arco Coseno o Coseno Inverso de un número en Excel</em> (FUNCIÓN ACOS) [Video]. YouTube. <a href="https://www.youtube.com/watch?v=qu1Oxa-OI2Q" target="_blank">https://www.youtube.com/watch?v=qu1Oxa-OI2Q</a></li>
    <li>Khan Academy. (2014). <em>Introducción a las razones trigonométricas, 2do semestre de bachillerato</em>. Recuperado de <a href="https://tinyurl.com/yvrs9ksc" target="_blank">https://tinyurl.com/yvrs9ksc</a></li>
    <li>Velásquez Zamora, M. A. (2020). <em>Cómo hallar un ángulo en un triángulo rectángulo | Funciones trigonométricas inversas</em> [Video]. YouTube. <a href="https://www.youtube.com/watch?v=1cXiJSIWyb4" target="_blank">https://www.youtube.com/watch?v=1cXiJSIWyb4</a></li>
    <li>Velásquez Zamora, M. A. (2020). <em>Razones Trigonométricas | Seno, coseno, tangente | Recíprocas | Cosecante, Secante y tangente</em> [Video]. YouTube. <a href="https://www.youtube.com/watch?v=SqRIKgEl-98" target="_blank">https://www.youtube.com/watch?v=SqRIKgEl-98</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
