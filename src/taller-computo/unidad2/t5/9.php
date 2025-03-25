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
    <li>Eset. (s./f) Malware. Obtenido de: <a href="https://www.eset.com/es/caracteristicas/malware/" target="_blank">https://www.eset.com/es/caracteristicas/malware/</a></li>
    <li>Kaspersky. (s/f). ¿Cómo afecta la tecnología a tu salud física? Obtenido de : <a href="https://latam.kaspersky.com/resource-center/preemptive-safety/impacts-of-technology-on-health" target="_blank">https://latam.kaspersky.com/resource-center/preemptive-safety/impacts-of-technology-on-health</a></li>
    <li>McAfee. (s/f) ¿Qué es un antivirus?. Obtenido de: <a href="https://www.mcafee.com/es-mx/antivirus.html" target="_blank">https://www.mcafee.com/es-mx/antivirus.html</a></li>
    <li>Riquelme, R. (2021). Cada mexicano generó 9.23 kilogramos de residuos electrónicos entre 2015 y 2021. El economista. Obtenido de: <a href="https://www.eleconomista.com.mx/tecnologia/Cada-mexicano-genero-9.23-kg-de-residuos-electronicos-entre-2015-y-2021-20210713-0057.html" target="_blank">https://www.eleconomista.com.mx/tecnologia/Cada-mexicano-genero-9.23-kg-de-residuos-electronicos-entre-2015-y-2021-20210713-0057.html</a></li>
    <li>Romero Castro, M. I., Figueroa Morán, G. L., Vera Navarrete, D. S., Álava Cruzatty, J. E., Parrales Anzúles, G. R., Álava Mero, C. J., Murillo Quimiz, Á. L., Castillo Merino, M. A. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. España: 3Ciencias.</li>
    <li>Root, E. (2022). ILOVEYOU: el virus que amaba a todos. Kaspersky daily. Obtenido de : <a href="https://latam.kaspersky.com/blog/cybersecurity-history-iloveyou/25156/" target="_blank">https://latam.kaspersky.com/blog/cybersecurity-history-iloveyou/25156/</a></li>
    <li>Free Software Foundation. (s.f.). Licenses. Recuperado de: <a href="https://www.gnu.org/licenses/" target="_blank">https://www.gnu.org/licenses/</a></li>
    <li>Stallman, R. (2022). "Copyleft: Manual de uso", Recuperado de: <a href="https://www.gnu.org/copyleft/copyleft.es.html" target="_blank">https://www.gnu.org/copyleft/copyleft.es.html</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
