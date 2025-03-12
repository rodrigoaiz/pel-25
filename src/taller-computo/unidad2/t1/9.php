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
    <li>Cedano, M., & Cedano, A., & Rubio, J., & Vega, A. (2014). <i>Fundamentos de Computación para ingenieros</i>. México. Grupo Editorial Patria. pp. 6-26.</li>
    <li>Fundación UNAM. (2019). Conoce a Miztli, la supercomputadora. <i>Sitio Web Fundación UNAM</i>. <a target="_blank" href="https://www.fundacionunam.org.mx/vanguardia-unam/conoce-a-miztli-la-supercomputadora/">https://www.fundacionunam.org.mx/vanguardia-unam/conoce-a-miztli-la-supercomputadora/</a></li>
    <li>Lanchares, J. (2012). <i>Apuntes de Estructura de Computadores</i>. Portal UCM. <a target="_blank" href="http://www.dacya.ucm.es/lanchares/documentos/2.9.5%20Apuntes%20de%20Estructura%20de%20Computadores.pdf">http://www.dacya.ucm.es/lanchares/documentos/2.9.5%20Apuntes%20de%20Estructura%20de%20Computadores.pdf</a></li>
    <li>Moreno, J. (2011). <i>Informática I</i>. Portal facultad de contaduría UNAM. <a target="_blank" href="http://fcasua.contad.unam.mx/apuntes/interiores/docs/2011/informatica/1/informatica_i.pdf">http://fcasua.contad.unam.mx/apuntes/interiores/docs/2011/informatica/1/informatica_i.pdf</a></li>
    <li>UNAM. (2023). Miztli. <i>Portal Supercómputo</i>. <a target="_blank" href="https://www.super.unam.mx/miztli">https://www.super.unam.mx/miztli</a></li>
    <li>UNAM (2021). Miztli, supercomputadora de la UNAM, entre las del mundo que recrearon el desarrollo de galaxias. <i>DGCS Boletín UNAM-DGCS-546</i>. <a target="_blank" href="https://www.dgcs.unam.mx/boletin/bdboletin/2021_546.html">https://www.dgcs.unam.mx/boletin/bdboletin/2021_546.html</a></li>
    <li>UNAM. (2021). Miztli, supercomputadora de la UNAM, entre las del mundo que recrearon el desarrollo de galaxias. <i>Youtube. Global TV</i>. <a target="_blank" href="https://www.youtube.com/watch?v=Km90K1MPli0">https://www.youtube.com/watch?v=Km90K1MPli0</a></li>
    <li>UTN. (2019). <i>Clasificación de las computadoras</i>. Objeto de Aprendizaje. <a target="_blank" href="http://ftp.campusvirtual.utn.ac.cr/objetos%20de%20aprendizaje%20profesores/plataformastecnologicas/clasificacin_de_las_computadoras.html">http://ftp.campusvirtual.utn.ac.cr/objetos%20de%20aprendizaje%20profesores/plataformastecnologicas/clasificacin_de_las_computadoras.html</a></li>
    <li>Editorial Etecé (2023). <i>Historia de la computadora</i>. Enciclopedia Concepto. <a target="_blank" href="https://concepto.de/historia-de-la-computadora/">https://concepto.de/historia-de-la-computadora/</a></li>
    <li>Facultad de Ingeniería (2011). <i>Notas del teórico. Arquitectura de von Neumann</i>. <a target="_blank" href="https://eva.fing.edu.uy/pluginfile.php/28758/mod_resource/content/0/Notas_Teorico/13-von_neumann-2011-4.2.pdf#:~:text=Una%20Arquitectura%20de%20von%20Neumann,Memoria%20y%20la%20Entrada%2FSalida.">https://eva.fing.edu.uy/pluginfile.php/28758/mod_resource/content/0/Notas_Teorico/13-von_neumann-2011-4.2.pdf#:~:text=Una%20Arquitectura%20de%20von%20Neumann,Memoria%20y%20la%20Entrada%2FSalida.</a></li>
    <li>Bosque, G. y Azkora, E. (2018). <i>Estructura y Arquitectura de Computadores</i>. Universidad del Vasco. [File PDF]. <a target="_blank" href="https://web-argitalpena.adm.ehu.es/pdf/UWLGIN7192.pdf">https://web-argitalpena.adm.ehu.es/pdf/UWLGIN7192.pdf</a></li>
    <li>Oracle (2023). ¿Qué es la IA? Conoce la inteligencia artificial. <i>Oracle México</i>. <a target="_blank" href="https://www.oracle.com/mx/artificial-intelligence/what-is-ai/">https://www.oracle.com/mx/artificial-intelligence/what-is-ai/</a></li>
    <h3>Para saber más</h3>
    <li>Edukino el Canal (febrero, 2017). Historia – Evolución de la Computación. [Video de YouTube]. <a href="https://youtu.be/0Ilqo4iyjW8 " target="_blank">https://youtu.be/0Ilqo4iyjW8 </a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
