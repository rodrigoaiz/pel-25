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
    <li>Álvarez, E. &amp; Ruiz, J. (2013). Tema 6.7. Funciones Estadísticas. Curso transversal: Gestión de datos con hojas de cálculo <a href="https://personales.unican.es/alvareze/OCW_CALC/3_CONTENIDOS/tema_6/t6_08.htm" target="_blank">https://personales.unican.es/alvareze/OCW_CALC/3_CONTENIDOS/tema_6/t6_08.htm</a></li>
    <li>Beristain. (s.f.). UNIDAD 1. HOJA DE CÁLCULO. UAEH. <a href="https://www.uaeh.edu.mx/docencia/archivos/unidad_i._hoja_de_calculo.pdf" target="_blank">https://www.uaeh.edu.mx/docencia/archivos/unidad_i._hoja_de_calculo.pdf</a></li>
    <li>LibreTexts. (s.f.). 7.1: Uso de Hojas de Cálculo para Estadísticas. LibreTexts Español. Biblioteca de la Universidad de California Davis. <a href="https://espanol.libretexts.org/Estadisticas/Estadistica_Aplicada/Libro%3A_Estadisticas_Biologicas_(McDonald)/07%3A_Miscel%C3%A1nea/7.01%3A_Uso_de_Hojas_de_C%C3%A1lculo_para_Estad%C3%ADsticas" target="_blank">https://espanol.libretexts.org/Estadisticas/Estadistica_Aplicada/Libro%3A_Estadisticas_Biologicas_(McDonald)/07%3A_Miscel%C3%A1nea/7.01%3A_Uso_de_Hojas_de_C%C3%A1lculo_para_Estad%C3%ADsticas</a></li>
    <li>Estrada-Lesprón, M. (2023). Apuntes prácticas dirigidas. [imágenes_3 a 8]. Google sites</li>
    <li>Estrada-Lesprón, M. (2023). Apuntes prácticas dirigidas. [tablas_1 a 11]. Google sites</li>
    <li>EXCEL TOTAL. (2023). Funciones estadísticas. <a href="https://exceltotal.com/funciones/estadisticas/" target="_blank">https://exceltotal.com/funciones/estadisticas/</a></li>
    <li>Microsoft. (2023). Funciones estadísticas (referencia). Soporte técnico. <a href="https://support.microsoft.com/es-es/office/funciones-estad%C3%ADsticas-referencia-624dac86-a375-4435-bc25-76d659719ffd" target="_blank">https://support.microsoft.com/es-es/office/funciones-estad%C3%ADsticas-referencia-624dac86-a375-4435-bc25-76d659719ffd</a></li>
    <li>Opofimatica.es. (2020). Funciones Estadísticas. <a href="https://opofimatica.es/wp-content/uploads/2020/03/017_Funciones-estadisticas.pdf" target="_blank">https://opofimatica.es/wp-content/uploads/2020/03/017_Funciones-estadisticas.pdf</a></li>
    <li>Tutorial Excel. (s.f.). Las funciones estadísticas en Excel. <a href="https://tutorialexcel.com/las-funciones-estadisticas-en-excel/" target="_blank">https://tutorialexcel.com/las-funciones-estadisticas-en-excel/</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
