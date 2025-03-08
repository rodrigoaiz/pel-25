<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Referencias</h3>
  <ul id="biblio" class="ul-disc">
    <li>NIC México. (s.f.). <em>Historia de NIC México</em>. NIC México. <a href="https://www.nicmexico.mx/es-nicmx-historia/" target="_blank"><i class="ri-cloud-line inline"></i> https://www.nicmexico.mx/es-nicmx-historia/</a></li>
    <li>NITRD. (1995). <em>Definition of "Internet". Archived Material</em>. NITRD. <a href="https://www.nitrd.gov/historical/fnc/internet_res.pdf" target="_blank"><i class="ri-cloud-line inline"></i> https://www.nitrd.gov/historical/fnc/internet_res.pdf</a></li>
    <li>Ocampo, M. (2016). <em>INFORMÁTICA 1 Competencias digitales para bachillerato</em>. Alfaomega. <a href="https://unam-bibliotecasdigitales-com.pbidi.unam.mx:2443/read/9786076227282/index" target="_blank"><i class="ri-cloud-line inline"></i> https://unam-bibliotecasdigitales-com.pbidi.unam.mx:2443/read/9786076227282/index</a></li>
    <li>UNAM. (s.f.). <em>Glosario de Informática</em>. B@UNAM. <a href="https://www.bunam.unam.mx/internet/c07glt01p01.html" target="_blank"><i class="ri-cloud-line inline"></i> https://www.bunam.unam.mx/internet/c07glt01p01.html</a></li>
    <li>UNAM-CERT. (2022). <em>DNS. Seguridad</em> UNAM. <a href="https://www.seguridad.unam.mx/taxonomy/term/1034" target="_blank"><i class="ri-cloud-line inline"></i> https://www.seguridad.unam.mx/taxonomy/term/1034</a></li>
  </ul>
  <div class="my-5 max-w-xl mx-auto border border-primary py-5 text-center">
    <h4>¡¡¡Felicidades!!!</h4>
    <p>Llegamos al final del aprendizaje, espero lo hayas disfrutado.</p>
    <p>Te invito a que continuemos con el siguiente aprendizaje.</p>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
