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
    <li>Álvarez L. et al. (2020). <em>Creación y gestión de carpetas y archivos</em> [Página Web]. <a href="https://www.educa.jcyl.es/educacyl/cm/gallery/CCD/Area_1/A2.1_Entorno_Windows_I/2_creacin_y_gestin_de_carpetas_y_archivos.html" target="_blank">https://www.educa.jcyl.es/educacyl/cm/gallery/CCD/Area_1/A2.1_Entorno_Windows_I/2_creacin_y_gestin_de_carpetas_y_archivos.html</a></li>
    <li>Apple Inc. (2022). <em>Sistema Operativo Mac-Os</em> [Captura de pantalla de la barra de herramientas en macOS Monterey]. <a href="https://support.apple.com/library/content/dam/edam/applecare/images/es_MX/macos/monterey/macos-monterey-mba-screenshot-toolbar.jpg" target="_blank">https://support.apple.com/library/content/dam/edam/applecare/images/es_MX/macos/monterey/macos-monterey-mba-screenshot-toolbar.jpg</a></li>
    <li>Cable News Network CNN. (2015). <em>Captura de pantalla mostrando la pantalla principal de Windows 10</em>. <a href="https://cnnespanol.cnn.com/wp-content/uploads/2015/07/150728135154-windows-10-start-e1438131317794.jpg?quality=100&amp;strip=info" target="_blank">https://cnnespanol.cnn.com/wp-content/uploads/2015/07/150728135154-windows-10-start-e1438131317794.jpg?quality=100&amp;strip=info</a></li>
    <li>Docente Pro. (2023, noviembre 3). <em>Crear carpetas en la nube con GOOGLE DRIVE 2019</em> [Video]. YouTube. <a href="https://youtu.be/0sJdHuI4CRM" target="_blank">https://youtu.be/0sJdHuI4CRM</a></li>
    <li>Fernández G., (2015). <em>Elementos de sistemas operativos, de representación de la información y de procesadores hardware y software</em> [Documento PDF]. <a href="https://oa.upm.es/36552/1/SORYP.pdf" target="_blank">https://oa.upm.es/36552/1/SORYP.pdf</a></li>
    <li>Fundaciónesplai. (s.f.). <em>Sistema Operativo Linux, distribución Ubuntu</em> [Imagen de escritorio de Ubuntu]. Recuperado de <a href="https://1.bp.blogspot.com/-obwWmEbglcU/WBTmffzKecI/AAAAAAAAFtk/EYIkF-LVx7o3q3MXVWchOpoLklWTu56rACPcB/s1600/Escritorio%2Bde%2BUbuntu%2B16.04.png." target="_blank">https://1.bp.blogspot.com/-obwWmEbglcU/WBTmffzKecI/AAAAAAAAFtk/EYIkF-LVx7o3q3MXVWchOpoLklWTu56rACPcB/s1600/Escritorio%2Bde%2BUbuntu%2B16.04.png.</a></li>
    <li>Gutiérrez. A. (2018). <em>Almacenamiento en la nube</em> [Documento PDF]. <a href="https://www.acta.es/medios/informes/2018004.pdf" target="_blank">https://www.acta.es/medios/informes/2018004.pdf</a></li>
    <li>MARYORI. (2014). <em>Distribuciones de Linux</em> [Imagen que muestra las distribuciones más populares de Linux]. Recuperado de <a href="https://maryoriandino.files.wordpress.com/2014/12/mejores-distribuciones-linux-2012.jpg" target="_blank">https://maryoriandino.files.wordpress.com/2014/12/mejores-distribuciones-linux-2012.jpg</a></li>
    <li>Ranieri J., Villar S., y Rodríguez, A. (s.f.). <em>SISTEMAS OPERATIVOS</em> [Documento PDF]. <a href="https://www.edu.xunta.gal/centros/iesblancoamorculleredo/aulavirtual/pluginfile.php/25655/mod_page/content/30/SistemasOperativos_JoaoRanieri_AlvaroRodriguez_SergioVillar.pdf" target="_blank">https://www.edu.xunta.gal/centros/iesblancoamorculleredo/aulavirtual/pluginfile.php/25655/mod_page/content/30/SistemasOperativos_JoaoRanieri_AlvaroRodriguez_SergioVillar.pdf</a></li>
    <li>RijoAyuda. (2023, mayo 20). <em>Como CREAR UNA CARPETA en la computadora / Windows Tutorial fácil</em> - RijoAyuda [Video]. YouTube. <a href="https://youtu.be/5ugsjqpqSaw" target="_blank">https://youtu.be/5ugsjqpqSaw</a></li>
    <li>Techdroy. (s.f.). <em>Sistema Operativo Android</em> [Imagen que muestra cómo ver y añadir una página web a la pantalla de inicio en Android]. Recuperado de <a href="https://techdroy.com/wp-content/uploads/2022/07/como-ver-an%CC%83adir-pagina-web-pantalla-inicio-android-5.png." target="_blank">https://techdroy.com/wp-content/uploads/2022/07/como-ver-an%CC%83adir-pagina-web-pantalla-inicio-android-5.png.</a></li>
    <li>VideoMarketingViral. (2022, febrero 18). <em>Como Hacer un Mapa Mental en Word</em> (Incluye Plantilla) [Video]. YouTube. <a href="https://youtu.be/dRRi_NCSpYo" target="_blank">https://youtu.be/dRRi_NCSpYo</a></li>
    <li>Apple Inc. (2021). Mac OS. [En línea]. Disponible en: <a href="https://www.apple.com/macos/." target="_blank">https://www.apple.com/macos/.</a></li>
    <li>Fundación Linux. (2021). linux [En línea]. Disponible en: <a href="https://www.linuxfoundation.org/. " target="_blank">https://www.linuxfoundation.org/. </a></li>
    <li>Pase de lista. (2020, noviembre 10). <em>TIPOS de SOFTWARE</em> (ejemplos y funciones), EXPLICACIÓN RÁPIDA [Video]. YouTube. <a href="https://www.youtube.com/watch?v=Q3aXKM7M0fA" target="_blank">https://www.youtube.com/watch?v=Q3aXKM7M0fA</a></li>
    <li>Pase de lista. (2014, septiembre 14). <em>Hardware y software de una computadora</em> [Video]. YouTube. <a href="https://youtu.be/_mMXzn4zoQA" target="_blank">https://youtu.be/_mMXzn4zoQA</a></li>
    <li>Proyecto de código abierto de Android. (2021). Androide. [En línea]. Disponible en: <a href="https://source.android.com/ " target="_blank">https://source.android.com/ </a></li>
    <li>Microsoft. (2021). Windows. [En línea]. Disponible en: <a href="https://www.microsoft.com/windows." target="_blank">https://www.microsoft.com/windows.</a></li>
    <li>Sánchez J., Estrada M., Escudero A., García R., García, E., García, E., Herrera, L., Morales A., Rodríguez, C., Rodríguez, G., Teoyotl, Y., Zaragoza, R., Zarco, J., y Zepeda, I. (2019-2020). Banco de Reactivos de Taller de Cómputo. UNAM CCH Oriente. Ciudad de México.</li>
    <li>Sánchez, J., Escudero, A., García, E., Herrera, L., Calderón, T., y Rodríguez, G. (2018). Paquete didáctico para Taller de Cómputo. UNAM CCH Oriente. Ciudad de México.</li>
    <li>UNAM, C. (2016). <em>Programa de estudio Taller de Cómputo</em>: <a href="https://www.cch.unam.mx/sites/default/files/programas2016/TALLERCOMPUTO.pdf" target="_blank">https://www.cch.unam.mx/sites/default/files/programas2016/TALLERCOMPUTO.pdf</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
