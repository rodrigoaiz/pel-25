<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Para conocer más</h2>
    <ul id="biblio" class="ul-disc">
        <li>Audio. (2019, julio 19). <em>EcuRed</em>, . Consultado el 06:48, octubre 27, 2023 en <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://www.ecured.cu/index.php?title=Audio&amp;oldid=3462992." target="_blank"><i class="ri-cloud-line inline"></i> https://www.ecured.cu/index.php?title=Audio&amp;oldid=3462992.</a></li>
        <li>Berry, G. & Boutillete, L. (2023). Los mejores tipos de formatos de audio para los audiófonos. Recuperado de: <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://www.adobe.com/es/creativecloud/video/discover/best-audio-format.html" target="_blank"><i class="ri-cloud-line inline"></i> https://www.adobe.com/es/creativecloud/video/discover/best-audio-format.html</a></li>
        <li>Joan (Julio, 2023). Formatos de Audio: Todo lo que los músicos deberían saber pata elegir el archivo adecuado. BLOG Landr. Recuperado de: <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://blog.landr.com/es/guia-formatos-de-audio/" target="_blank"><i class="ri-cloud-line inline"></i> https://blog.landr.com/es/guia-formatos-de-audio/</a></li>
    </ul>
    <h2>Consultadas</h2>
    <ul id="biblio" class="ul-disc">
        <li>Carrodeguas, N. (febrero, 2023). Cómo convertir música, canciones y archivos de audio a otros formatos. Norfipc. Recuperado de: </li>
        <li>Castro, A., Cortés, M., Ortiz, C. & Valdez, U. (s.f) Tecnología educativa en apoyo al proceso de enseñanza/aprendizaje de recursos digitales y multimedia. Proyecto PAPIME. ADOBE [File PDF] Recuperado de: <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://multimediadigital.iib.unam.mx/files/AudioDigital.pdf" target="_blank"><i class="ri-cloud-line inline"></i> https://multimediadigital.iib.unam.mx/files/AudioDigital.pdf</a></li>
        <li>Meneitos, A. (marzo, 2021). Conozca los 4 principales formatos de audio. Moisés. Recuperado de: <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://moises.ai/es/blog/consejos/principales-formatos-audio/" target="_blank"><i class="ri-cloud-line inline"></i> https://moises.ai/es/blog/consejos/principales-formatos-audio/</a></li>
        <li>Emezeta (2015). Formatos de audio: Todo lo que deberías saber. Recuperado de, de: http://www.emezeta.com/articulos/formatos-de-audio-todo-lo-que-deberias-saber</li>
    </ul>
    <ul class="ul-disc">
        <li>Alonso Bayón, M. (2020). <em>Audacity. Manual de uso básico</em>. <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://uvadoc.uva.es/bitstream/handle/10324/40729/Manual%20Audacity%20%28b%c3%a1sico%29.pdf?sequence=2&amp;isAllowed=y" target="_blank"><i class="ri-cloud-line inline"></i> https://uvadoc.uva.es/bitstream/handle/10324/40729/Manual%20Audacity%20%28b%c3%a1sico%29.pdf?sequence=2&amp;isAllowed=y</a></li>
        <li>Berasategui, J. M. (2016). <em>Audacity: estudio de un software libre de grabación y edición de audio como recurso didáctico para el aprendizaje de contenidos musicales en la educación primaria</em>. In I Congreso Internacional de Música Popular (La Plata, octubre 2016). http://sedici.unlp.edu.ar/handle/10915/76846</li>
        <li>Eagles. (1976). <em>Hotel California [Grabación de audio</em>]. En Álbum "Hotel California". Asylum Records. Warner Music Group.</li>
        <li>García, J. A. S. (2017). <em>Audacity. Eufonía: Didáctica de la música</em>, <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://osl.ugr.es/wp-content/uploads/2010/11/audacity.pdf" target="_blank"><i class="ri-cloud-line inline"></i> https://osl.ugr.es/wp-content/uploads/2010/11/audacity.pdf</a></li>
        <li>Microsoft. (2023). <em>Solucionar problemas de sonido o audio en Windows</em>. Sitio web de soporte de Microsoft. Recuperado de <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://support.content.office.net/es-es/media/5679e503-cf3f-0256-54d4-21c311eea476.png" target="_blank"><i class="ri-cloud-line inline"></i> https://support.content.office.net/es-es/media/5679e503-cf3f-0256-54d4-21c311eea476.png</a></li>
        <li>MITZU. (2023). <em>AUDÍFONOS DIADEMA GAMER CON MICRÓFONO GREEN LEAF</em>. <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://d822yi8obt972.cloudfront.net/IMAGENES+WEB/18-8302_1.jpg" target="_blank"><i class="ri-cloud-line inline"></i> https://d822yi8obt972.cloudfront.net/IMAGENES+WEB/18-8302_1.jpg</a></li>
        <li>RedUSERS. (2012). <em>Conectores de audio Mini jack en un gabinete</em>. Revista RedUSERS. Recuperado de <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://www.redusers.com/noticias/tecnico-pc-conectores-externos/audio-pc/" target="_blank"><i class="ri-cloud-line inline"></i> https://www.redusers.com/noticias/tecnico-pc-conectores-externos/audio-pc/</a></li>
        <li>Steren. (2023). <em>Audífonos USB para Gamers</em>. <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://www.steren.com.mx/media/catalog/product/cache/0236bbabe616ddcff749ccbc14f38bf2/image/20977ad3c/audifonos-usb-para-gamers.jpg" target="_blank"><i class="ri-cloud-line inline"></i> https://www.steren.com.mx/media/catalog/product/cache/0236bbabe616ddcff749ccbc14f38bf2/image/20977ad3c/audifonos-usb-para-gamers.jpg</a></li>
        <li>Universidade da Coruña. (2019). <em>Módulo 4. Audacity</em>. Recuperado de <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150" href="https://ruc.udc.es/dspace/bitstream/handle/2183/22882/Felpeto_Guerrero_Abraham_2019_%20Audacity.pdf?sequence=3" target="_blank"><i class="ri-cloud-line inline"></i> https://ruc.udc.es/dspace/bitstream/handle/2183/22882/Felpeto_Guerrero_Abraham_2019_%20Audacity.pdf?sequence=3</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>