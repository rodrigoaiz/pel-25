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
    <h3>Para conocer más </h3>

      <li>Yescas, L. y Monsalve. L. (2019). Excel 2019 – 365. México: Alfaomega. Libro en línea. Recuperado de: <a href="https://eltiotech.com/excel-practico-2019-365-pdf/" target="_blank">https://eltiotech.com/excel-practico-2019-365-pdf/</a></li>
      <li>Capacitación Digital (29 marzo, 2012). Creación de Series – Excel. [Video YouTube]. Recuperado de: <a href="https://youtu.be/jHlqUEkf57o?feature=shared" target="_blank">https://youtu.be/jHlqUEkf57o?feature=shared</a></li>
      <li>Rojas, A (29 mayo, 2020). Dos métodos rápidos para crear series numéricas en EXCEL. Excel Hecho Fácil. [Video YouTube] Recuperado de: <a href="https://youtu.be/avvjZoBAcj8?feature=shared" target="_blank">https://youtu.be/avvjZoBAcj8?feature=shared</a></li>

    <h3>Consultadas</h3>

      <li>Ebriik (2010). Manual Microsoft Office – Excel 2020. <a href="https://www.uv.mx/personal/llopez/files/2013/03/Manual-Microsoft-Office-Excel-2010.pdf" target="_blank">https://www.uv.mx/personal/llopez/files/2013/03/Manual-Microsoft-Office-Excel-2010.pdf</a></li>
      <li>Exceltotal (2018). Funciones lógicas en EXCEL. Exceltotal. <a href="https://www.ecotec.edu.ec/material/material_2018A1_COM265_01_83450.pdf" target="_blank">https://www.ecotec.edu.ec/material/material_2018A1_COM265_01_83450.pdf</a></li>
      <li>Galdámez, A. (2007). Microsoft Office Excel. Computación II. UMOAR. <a href="https://es.calameo.com/read/003849617eb8f4d783383" target="_blank">https://es.calameo.com/read/003849617eb8f4d783383</a></li>
      <li>Padin, L. (2010). Excel desde Cero. Domine la plantilla de cálculo más famosa. Argentina, Buenos Aires: Users. <a href="https://travezurasdeltraviezo.files.wordpress.com/2014/02/excel-desde-cero.pdf" target="_blank">https://travezurasdeltraviezo.files.wordpress.com/2014/02/excel-desde-cero.pdf</a></li>

    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
