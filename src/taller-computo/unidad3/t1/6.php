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
    <li>Ibañez, P. (2018). Informática I. <a href="https://elibro-net.pbidi.unam.mx:2443/es/ereader/unamdgb/85098" target="_blank">https://elibro-net.pbidi.unam.mx:2443/es/ereader/unamdgb/85098</a></li>
    <li>Llena, S. (2020). Aprender Excel 365/2019: con 100 ejercicios prácticos. <a href="https://fac-ing-unam-bibliotecasdigitales-com.pbidi.unam.mx:2443/read/9786075386768/index" target="_blank">https://fac-ing-unam-bibliotecasdigitales-com.pbidi.unam.mx:2443/read/9786075386768/index</a></li>
    <li>Support Microsoft (s.f.). Mover o copiar celdas y contenido de celdas. <a href="https://support.microsoft.com/es-es/office/mover-o-copiar-celdas-y-contenido-de-celdas-803d65eb-6a3e-4534-8c6f-ff12d1c4139e?wt.mc_id=otc_excel#" target="_blank">https://support.microsoft.com/es-es/office/mover-o-copiar-celdas-y-contenido-de-celdas-803d65eb-6a3e-4534-8c6f-ff12d1c4139e?wt.mc_id=otc_excel#</a></li>
    <li>Yescas, L. (2022). Excel 2021. <a href="https://fac-conta-admin-bibliotecasdigitales-com.pbidi.unam.mx:2443/read/9786075388243/borrows" target="_blank">https://fac-conta-admin-bibliotecasdigitales-com.pbidi.unam.mx:2443/read/9786075388243/borrows</a></li>

  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
