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
    <li>Ayuntamiento de Mérida. (s.f.). <em>Guía de usuario de Google Chrome</em>. Recuperado en marzo de 2023, de <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://merida.gob.mx/cad/content/documents/ebooks/Google-Chrome.pdf" target="_blank"><i class="ri-cloud-line inline"></i> https://merida.gob.mx/cad/content/documents/ebooks/Google-Chrome.pdf</a></li>
    <li>Google. (s. f.). <em>Administrar cookies y datos de sitios</em>. Google Chrome Ayuda. <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://support.google.com/chrome/answer/165139?hl=es-419&amp;co=GENIE.Platform%3DDesktop" target="_blank"><i class="ri-cloud-line inline"></i> https://support.google.com/chrome/answer/165139?hl=es-419&amp;co=GENIE.Platform%3DDesktop</a></li>
    <li>Herrera, L. A. (2023). <em>Partes de un navegador Web Google Chrome</em> [Imagen]. <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://drive.google.com/file/d/1XA46jS_PSVPZL8vjW3d2QTRELShxtxp4/view?usp=share_link" target="_blank"><i class="ri-cloud-line inline"></i> https://drive.google.com/file/d/1XA46jS_PSVPZL8vjW3d2QTRELShxtxp4/view?usp=share_link</a></li>
    <li>Navegadores de Internet.online (2021). <em>Navegadores de Internet</em>. <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://navegadoresdeinternet.online/wp-content/uploads/2021/04/Mejores-Navegadores-Web-1.jpg" target="_blank"><i class="ri-cloud-line inline"></i> https://navegadoresdeinternet.online/wp-content/uploads/2021/04/Mejores-Navegadores-Web-1.jpg</a></li>
    <li>Sánchez J., Estrada M., Escudero A., García R., García, E., García, E., Herrera, L., Morales A., Rodríguez, C., Rodríguez, G., Teoyotl, Y., Zaragoza, R., Zarco, J., y Zepeda, I. (2019-2020). <em>Banco de Reactivos de Taller de Cómputo</em>. UNAM CCH Oriente. Ciudad de México.</li>
    <li>Sánchez, J., Escudero, A., García, E., Herrera, L., Calderón, T., y Rodríguez, G. (2018). <em>Paquete didáctico para Taller de Cómputo</em>. UNAM CCH Oriente. Ciudad de México.</li>
    <li>UNAM. (2016). <em>Taller de Cómputo. Programa de Estudio</em>. Recuperado enero de 2020, de <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://www.cch.unam.mx/sites/default/files/programas2016/TALLERCOMPUTO.pdf" target="_blank"><i class="ri-cloud-line inline"></i> https://www.cch.unam.mx/sites/default/files/programas2016/TALLERCOMPUTO.pdf</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
