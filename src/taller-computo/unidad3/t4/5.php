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
    <li>Alija, A. (22 de mayo de 2018). <em>La importancia de la visualización gráfica de los datos</em>. datos.gob.es. Recuperado de <a href="https://datos.gob.es" target="_blank">https://datos.gob.es</a></li>
    <li>GCFAprendeLibre. (29 de marzo de 2022a). <em>Diagrama circular o gráfico de torta</em>: Curso de Estadística Básica [Archivo de vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=-_540TruS0g" target="_blank">https://www.youtube.com/watch?v=-_540TruS0g</a></li>
    <li>GCFAprendeLibre. (29 de marzo de 2022b). <em>Diagrama de Barras: Curso de Estadística Básica</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=Uj2C9Hu0or4" target="_blank">https://www.youtube.com/watch?v=Uj2C9Hu0or4</a></li>
    <li>IBM. (s. f.). <em>¿Qué es la visualización de datos?</em> Recuperado de <a href="https://www.ibm.com/mx-es/topics/data-visualization" target="_blank">https://www.ibm.com/mx-es/topics/data-visualization</a></li>
    <li>Instituto Nacional de Estadística, Geografía e Informática (INEGI). (s. f.). <em>Disponibilidad y Uso de TIC</em>. Recuperado de <a href="https://www.inegi.org.mx/temas/ticshogares/" target="_blank">https://www.inegi.org.mx/temas/ticshogares/</a></li>
    <li>Marta. (1 de octubre de 2023a). <em>Ejercicios interactivos de diagramas de sectores</em>. Recuperado de <a href="https://www.superprof.es/apuntes/escolar/matematicas/estadistica/descriptiva/ejercicios-interactivos-de-diagramas-de-sectores.html" target="_blank">https://www.superprof.es/apuntes/escolar/matematicas/estadistica/descriptiva/ejercicios-interactivos-de-diagramas-de-sectores.html</a></li>
    <li>Marta. (1 de noviembre de 2023b). <em>Ejercicios interactivos de diagramas de barras y polígonos de frecuencias</em>. Recuperado de <a href="https://www.superprof.es/apuntes/escolar/matematicas/estadistica/descriptiva/ejercicios-interactivos-de-diagramas-de-barras-y-poligonos-de-frecuencias.html" target="_blank">https://www.superprof.es/apuntes/escolar/matematicas/estadistica/descriptiva/ejercicios-interactivos-de-diagramas-de-barras-y-poligonos-de-frecuencias.html</a></li>
    <li>Probabilidad y Estadística.net (26 de mayo de 2022a). <em>Gráfico circular</em>. Recuperado de <a href="https://www.probabilidadyestadistica.net/grafico-circular/" target="_blank">https://www.probabilidadyestadistica.net/grafico-circular/</a></li>
    <li>Probabilidad y Estadística.net (11 de noviembre de 2023b). <em>Diagrama de Barras</em>. Recuperado de <a href="https://www.probabilidadyestadistica.net/diagrama-de-barras/" target="_blank">https://www.probabilidadyestadistica.net/diagrama-de-barras/</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
