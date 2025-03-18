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
    <li>CISCO. (2016). Capítulo 1: <em>Introducción al hardware de computadoras personales</em>. Facultad de Ingeniería. UNAM. <a href="https://aulavirtual.fio.unam.edu.ar/pluginfile.php/278766/mod_resource/content/1/Unidad%201%20Hardware.pdf" target="_blank">https://aulavirtual.fio.unam.edu.ar/pluginfile.php/278766/mod_resource/content/1/Unidad%201%20Hardware.pdf</a></li>
    <li>Dembowski, K. (2003). <em>El Gran Libro de Hardware</em>. Google Libros <a href="https://books.google.com.mx/books?id=piWqr_ZhqpwC&amp;pg=PA7&amp;hl=es&amp;source=gbs_selected_pages&amp;cad=2#v=onepage&amp;q&amp;f=false" target="_blank">https://books.google.com.mx/books?id=piWqr_ZhqpwC&amp;pg=PA7&amp;hl=es&amp;source=gbs_selected_pages&amp;cad=2#v=onepage&amp;q&amp;f=false</a></li>
    <li>Equipo editorial, Etecé. (11 de marzo de 2022). <em>Hardware</em>. Concepto.de <a href="https://concepto.de/hardware/" target="_blank">https://concepto.de/hardware/</a></li>
    <li>Fernández, A. M. (28 de junio de 2022). <em>Definición de wiki. Historia, rasgos y conceptos vinculados</em>. Definicion.com. <a href="https://definicion.com/wiki/" target="_blank">https://definicion.com/wiki/</a></li>
    <li>Joshe, J. (2020). Hardware y sus componentes internos y externos. YouTube. <a href="https://www.youtube.com/watch?v=3JmTqay0vz0&amp;t=26s" target="_blank">https://www.youtube.com/watch?v=3JmTqay0vz0&amp;t=26s</a></li>
    <li>Tecnología + Informática. (2018). Componentes de una computadora. sitio web Tecnología+Informática. <a href="https://www.tecnologia-informatica.com/componentes-de-una-computadora/" target="_blank">https://www.tecnologia-informatica.com/componentes-de-una-computadora/</a></li>
    <li>Telesecundaria. (2021). <em>Introducción a la Computación</em>. Gobernación. <a href="https://telesecundaria.gob.mx/Documentos/Biblioteca/IntroduccionComputacion.pdf" target="_blank">https://telesecundaria.gob.mx/Documentos/Biblioteca/IntroduccionComputacion.pdf</a></li>
    <li>UNAM. (2006). <em>UNIDAD</em> 2. Facultad de Arquitectura. <a href="http://www.fcaenlinea.unam.mx/2006/1140/docs/unidad2.pdf" target="_blank">http://www.fcaenlinea.unam.mx/2006/1140/docs/unidad2.pdf</a></li>
    <li>UNAM. (2016). <em>¿Qué es el Hardware y Software?</em>. YouTube UNAM Sepacomputo canal. <a href="https://www.youtube.com/watch?v=PhGkt3R0LkY&amp;t=1s" target="_blank">https://www.youtube.com/watch?v=PhGkt3R0LkY&amp;t=1s</a></li>
    <li>Wikipedia. (2023). <em>Hardware</em>. Wikipedia. <a href="https://es.wikipedia.org/wiki/Hardware" target="_blank">https://es.wikipedia.org/wiki/Hardware</a></li>
  </ul>
  <div class="my-5 mx-auto border border-primary p-5">
    <p class="text-center"> <strong>¡¡¡Felicidades!!!</strong></p>
    <p class="text-center"> <strong>Llegamos al final del aprendizaje, espero que lo hayas disfrutado.</strong></p>
    <p class="text-center"> <strong>Te invito a que continuemos con el siguiente aprendizaje.</strong></p>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
