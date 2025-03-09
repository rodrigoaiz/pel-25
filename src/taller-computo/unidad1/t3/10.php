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
    <li>Biblioteca de la UNAM (2016). Estrategia de Búsqueda. Blog de a Biblioteca de la UNAM. Recuperado de: <a href="https://blogbibliounam.blogspot.com/p/estrategias-de-busqueda.html " target="_blank"><i class="ri-cloud-line inline"></i> https://blogbibliounam.blogspot.com/p/estrategias-de-busqueda.html </a></li>
    <li>Universidad EAFIT (2021). Búsqueda de información en la WEB. Centro Cultural Biblioteca Luis Echavarría Villegas. Recuperado de: <a href="https://repository.eafit.edu.co/bitstream/handle/10784/12970/Busqueda_de_informacion_en_la_Web_2021.pdf?sequence=2&amp;isAllowed=y " target="_blank"><i class="ri-cloud-line inline"></i> https://repository.eafit.edu.co/bitstream/handle/10784/12970/Busqueda_de_informacion_en_la_Web_2021.pdf?sequence=2&amp;isAllowed=y </a></li>
    <li>Biblioteca Central UNAM. (s. f.). La búsqueda de información - Biblioteca Central UNAM. Recuperado de: <a href="https://www.bibliotecacentral.unam.mx/index.php/desarrollo-de-capacidades-informativas-digitales-y-comunicacionales/la-busqueda-de-informacion#:~:text=La%20estrategia%20de%20b%C3%BAsqueda%20es,la%20informaci%C3%B3n%20que%20se%20necesita" target="_blank"><i class="ri-cloud-line inline"></i> https://www.bibliotecacentral.unam.mx/index.php/desarrollo-de-capacidades-informativas-digitales-y-comunicacionales/la-busqueda-de-informacion#:~:text=La%20estrategia%20de%20b%C3%BAsqueda%20es,la%20informaci%C3%B3n%20que%20se%20necesita</a></li>
    <li>Universidad de Valencia (2013). Cómo hacer un trabajo académico. Búsqueda de información. Recuperado de: <a href="http://mural.uv.es/ruman/alfinp2/2_bsqueda_de_informacin.html" target="_blank"><i class="ri-cloud-line inline"></i> http://mural.uv.es/ruman/alfinp2/2_bsqueda_de_informacin.html</a></li>
    <li>Universidad Valenciana (s.f). Competencias Informacionales Nivel Medio. Qué es una estrategia de búsqueda. Biblioteca de Ciencias Sociales. Recuperado de: <a href="https://www.uv.es/cibisoc/tutoriales/trabajo_social/31_qu_es_una_estrategia_de_bsqueda.html" target="_blank"><i class="ri-cloud-line inline"></i> https://www.uv.es/cibisoc/tutoriales/trabajo_social/31_qu_es_una_estrategia_de_bsqueda.html</a></li>
    <li>[1] Canal Sepacomputo UNAM. (2016, 23 de enero). <em>¿Qué motores de búsqueda son los que más se usan?</em> [Video]. YouTube. <a href="https://www.youtube.com/watch?v=ju-DKTKL57s" target="_blank"><i class="ri-cloud-line inline"></i> https://www.youtube.com/watch?v=ju-DKTKL57s</a></li>
    <li>[2] Canal Sepacomputo UNAM. (2016b, 25 de enero). <em>Recomendaciones para buscar información en los motores de búsqueda</em> [Video]. YouTube. <a href="https://www.youtube.com/watch?v=A7EhHlUkHk8" target="_blank"><i class="ri-cloud-line inline"></i> https://www.youtube.com/watch?v=A7EhHlUkHk8</a></li>
    <li>[3] Mosquete, JS (2023, 21 de febrero). Best motors of search. Los 9 más importantes | bombilla de red <em>bombilla de red</em> <a href="https://netbulbsocialmedia.com/noticias/9-principales-motores-de-busqueda/" target="_blank"><i class="ri-cloud-line inline"></i> https://netbulbsocialmedia.com/noticias/9-principales-motores-de-busqueda/</a></li>
    <li>[4] Rodríguez, M. (22 de marzo de 2023). Motores de Búsqueda. <em>Agencia SEO En México</em>. <a href="https://www.seoenmexico.com.mx/blog/motores-de-busqueda/" target="_blank"><i class="ri-cloud-line inline"></i> https://www.seoenmexico.com.mx/blog/motores-de-busqueda/</a></li>
    <li>Chávez, A., y Ornelas, G. (2015). La alfabetización informacional en los estudiantes del Bachillerato General por Competencias de la UDG. <em>Revista Mexicana de Bachillerato a Distancia</em>, 7(14), pp. 76-83. Recuperado de https://doi.org/10.22201/cuaed.20074751e.2015.14.65253</li>
    <li>¿Cómo hacer un resumen? <em>Ejemplos y pasos para un buen resumen</em>. Recuperado el 30 de marzo de 2023, de <a href="https://unibetas.com/como-hacer-un-resumen" target="_blank"><i class="ri-cloud-line inline"></i> https://unibetas.com/como-hacer-un-resumen</a></li>
    <li>Cordón, J., Lopez, J., y Vaquero, J. (1999). <em>Manual de búsqueda documental y práctica bibliográfica</em>. Madrid: Pirámide.</li>
    <li>TeleUV. (30 de noviembre de 2021). <em>Alfabetización informacional y destrezas bibliotecarias</em>. Módulo 8. [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=pUFdoYsAkoc" target="_blank"><i class="ri-cloud-line inline"></i> https://www.youtube.com/watch?v=pUFdoYsAkoc</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
