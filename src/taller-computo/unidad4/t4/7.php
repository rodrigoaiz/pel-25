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
    <li>Modo Fun. (2019). ¿Sabías que cualquiera puede ver lo que publicas en Internet?. <em>ModoFun.com</em>. <a href="https://modofun.com/2019/04/09/sabias-puede-ver-lo-publicas-internet/" target="_blank"> https://modofun.com/2019/04/09/sabias-puede-ver-lo-publicas-internet/</a></li>
    <li>Segarra, J. (2014). La importancia del contenido multimedia. <em>Duplo digital</em>. <a href="https://duplodigital.com/contenido-multimedia/" target="_blank"> https://duplodigital.com/contenido-multimedia/</a></li>
    <li>Suárez, A. (2022). Tipos de comunicación multimedia y cómo se conectan entre sí. <em>UNIR</em>. <a href="https://www.unir.net/ingenieria/revista/tipos-comunicacion-multimedia-conexion/" target="_blank"> https://www.unir.net/ingenieria/revista/tipos-comunicacion-multimedia-conexion/</a></li>
    <li>Universitat Oberta de Catalunya. (5/4/2018). Documentación audiovisual. <em>UOC.edu</em>. <a href="https://openaccess.uoc.edu/bitstream/10609/75845/5/Documentaci%C3%B3n%20audiovisual_M%C3%B3dulo%201_Qu%C3%A9%20entendemos%20por%20documentaci%C3%B3n%20audiovisual%20y%20multimedia.pd.f" target="_blank"> https://openaccess.uoc.edu/bitstream/10609/75845/5/Documentaci%C3%B3n%20audiovisual_M%C3%B3dulo%201_Qu%C3%A9%20entendemos%20por%20documentaci%C3%B3n%20audiovisual%20y%20multimedia.pd.f</a></li>
    <li>Wikimedia. (2023). Netiqueta. <em>Wikimedia.com</em>. <a href="https://es.wikipedia.org/wiki/Netiqueta#cite_note-2" target="_blank"> https://es.wikipedia.org/wiki/Netiqueta#cite_note-2</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
