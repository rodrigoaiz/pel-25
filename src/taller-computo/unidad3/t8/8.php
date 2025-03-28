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
    <li>Aprendiz de Finanzas. (2015). Funciones de Texto en Excel Parte 1. YouTube <a href="https://www.youtube.com/watch?v=0Wu1Dobz65k" target="_blank">https://www.youtube.com/watch?v=0Wu1Dobz65k</a></li>
    <li>ciudadano2cero. (2023). Las Funciones lógicas de Excel. Referencia completa. <a href="https://www.ciudadano2cero.com/excel/funciones/logicas/" target="_blank">https://www.ciudadano2cero.com/excel/funciones/logicas/</a></li>
    <li>Concepto de. (2021). Hoja de Cálculo. <a href="https://concepto.de/hoja-de-calculo/#ixzz8HNwmLeoe." target="_blank">https://concepto.de/hoja-de-calculo/#ixzz8HNwmLeoe.</a></li>
    <li>CURSOS DE EXCEL. (s.f.). Guía paso a paso de las funciones de texto en Excel. <a href="https://cursosdeexcel.com/guia-paso-a-paso-de-las-funciones-de-texto-en-excel/" target="_blank">https://cursosdeexcel.com/guia-paso-a-paso-de-las-funciones-de-texto-en-excel/</a></li>
    <li>El Tío Tech. (2019). Curso Excel: Funciones lógicas (SI - Y - O) Anidadas. YouTube. <a href="https://www.youtube.com/watch?v=psiod5YCMs0&amp;t=1s" target="_blank">https://www.youtube.com/watch?v=psiod5YCMs0&amp;t=1s</a></li>
    <li>ENRIQUE XLS. (2021). Las 18 FUNCIONES DE TEXTO más UTILIZADAS en Excel (Ejemplos) YouTube <a href="https://www.youtube.com/watch?v=pDdTHp6Ikps&amp;t=2s" target="_blank">https://www.youtube.com/watch?v=pDdTHp6Ikps&amp;t=2s</a></li>
    <li>Excel Intermedio. (2016). ¿Cuáles son las funciones lógicas en Excel?. <a href="https://www.excelintermedio.com/cuales-son-las-funciones-logicas-en-excel/" target="_blank">https://www.excelintermedio.com/cuales-son-las-funciones-logicas-en-excel/</a></li>
    <li>Excel Para Todos. (2023). Funciones de Texto en Excel. <a href="https://excelparatodos.com/funciones-de-texto-en-excel/" target="_blank">https://excelparatodos.com/funciones-de-texto-en-excel/</a></li>
    <li>EXCELTOTAL. (2023). FUNCIONES DE TEXTO. ExcelTotal. <a href="https://exceltotal.com/funciones/texto/" target="_blank">https://exceltotal.com/funciones/texto/</a></li>
    <li>Formadores IT. (2023). Funciones de texto en Excel: ¿para qué sirven?. <a href="https://formadoresit.es/funciones-de-texto-en-excel-para-que-sirven/" target="_blank">https://formadoresit.es/funciones-de-texto-en-excel-para-que-sirven/</a></li>
    <li>Microsoft. (2023). Función NO - Soporte técnico de Microsoft. <a href="https://support.microsoft.com/es-es/office/funci%C3%B3n-no-9cfc6011-a054-40c7-a140-cd4ba2d87d77" target="_blank">https://support.microsoft.com/es-es/office/funci%C3%B3n-no-9cfc6011-a054-40c7-a140-cd4ba2d87d77</a></li>
    <li>Mtra. Martha H. Estrada L. (2021). 4 Hoja de Cálculo funciones y referencias. YouTube <a href="https://www.youtube.com/watch?v=7JiWrhyNwHk&amp;t=103s" target="_blank">https://www.youtube.com/watch?v=7JiWrhyNwHk&amp;t=103s</a></li>
    <li>Saber Programas. (2015). Excel - Función Y. Función lógica Y en Excel. Tutorial en español HD. YouTube. <a href="https://www.youtube.com/watch?v=UE9z_Xn-ZBA&amp;t=1s" target="_blank">https://www.youtube.com/watch?v=UE9z_Xn-ZBA&amp;t=1s</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
