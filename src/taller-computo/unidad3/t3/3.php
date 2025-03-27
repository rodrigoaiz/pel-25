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
    <h3><strong class="italic">Para conocer más</strong></h3>
    <li>CustomGuide Inc (2023). Referenciar Hojas de cálculo externas. CustomCuia, Free courses. Recuperado de: <a href="https://www.customguide.com/es/excel/referenciar-hojas-de-calculo-externas" target="_blank">https://www.customguide.com/es/excel/referenciar-hojas-de-calculo-externas</a></li>
    <li>Guias matemáticas (mayo, 2023). Taller Aprende a usar Excel. Bibliotecas Pontifica Universidad Católica de Chule. Recuperado de: <a href="https://guiastematicas.bibliotecas.uc.cl/c.php?g=990565&amp;p=7166138" target="_blank">https://guiastematicas.bibliotecas.uc.cl/c.php?g=990565&amp;p=7166138</a></li>
    <li>López, I. (2013). Manual Microsoft Office | Excel 2010. [File PDF]. Recuperado de: <a href="https://www.uv.mx/personal/llopez/files/2013/03/Manual-Microsoft-Office-Excel-2010.pdf" target="_blank">https://www.uv.mx/personal/llopez/files/2013/03/Manual-Microsoft-Office-Excel-2010.pdf</a></li>
    <li>Red Universitaria de Aprendizaje UNAM (2017). Unidad 3. Aplicaciones matemáticas con una Hoja electrónica de cálculo. Taller de Cómputo 1er o 2do semestre el CCH. Recuperado de: <a href="https://www.rua.unam.mx/portal/plan/index/69806" target="_blank">https://www.rua.unam.mx/portal/plan/index/69806</a></li>

    <h3><strong class="italic">Consultadas</strong></h3>

    <li>CETYS Educación Continua (14 de septiembre, 2021). Tareas y aplicaciones de las hojas electrónicas de cálculo. Educación continua. Recuperado de: <a href="https://www.cetys.mx/educon/tareas-y-aplicaciones-de-las-hojas-electronicas-de-calculo/" target="_blank">https://www.cetys.mx/educon/tareas-y-aplicaciones-de-las-hojas-electronicas-de-calculo/</a></li>
    <li>Hernández G. (2011). Matemáticas con la hoja electrónica de cálculo. [File PDF]. Recuperado de: <a href="https://www.uv.mx/personal/grihernandez/files/2011/04/hojadeCalculo.pdf" target="_blank">https://www.uv.mx/personal/grihernandez/files/2011/04/hojadeCalculo.pdf</a></li>
    <li>COFIDE (16 de noviembre, 2021). Excel crea fórmulas y funciones. COFIDE Capacitación Empresarial. Recuperado de: <a href="https://www.cofide.mx/blog/excel-crea-formulas-y-funciones" target="_blank">https://www.cofide.mx/blog/excel-crea-formulas-y-funciones</a></li>
    <li>Infolibros (2023). +20 libros de Excel Gratis. Recuperado de: <a href="https://infolibros.org/libros-pdf-gratis/informatica/excel/" target="_blank">https://infolibros.org/libros-pdf-gratis/informatica/excel/</a></li>
    <li>Microsoft (s.f). Introducir una fórmula. Support Microsoft. Recuperado de: <a href="https://support.microsoft.com/es-es/office/introducir-una-f%C3%B3rmula-2e99d6c8-f681-44d4-b6e6-a8fad1a47b2a" target="_blank">https://support.microsoft.com/es-es/office/introducir-una-f%C3%B3rmula-2e99d6c8-f681-44d4-b6e6-a8fad1a47b2a</a></li>

  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
