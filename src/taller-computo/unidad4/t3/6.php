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
        <li>Ortega, R. (9 diciembre, 2022). Todo sobre los diferentes formatos de vídeo: Xvid, Divx, mp4,
            h264, Flv. Aula CM. Recuperado de: <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://aulacm.com/formatos-video-xvid-mp4-h264/" target="_blank"><i
                    class="ri-cloud-line inline"></i> https://aulacm.com/formatos-video-xvid-mp4-h264/</a>
        </li>
        <li>Habitad Puma – UNAM (2023). Formatos de vídeo digital. Inducción en TIC. Recuperado de: <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://induccion.educatic.unam.mx/mod/book/view.php?id=596&amp;chapterid=105"
                target="_blank"><i class="ri-cloud-line inline"></i>
                https://induccion.educatic.unam.mx/mod/book/view.php?id=596&amp;chapterid=105</a></li>
        <li>Desarrollo digital (19 febrero, 2019) Formatos de video: Breve repaso de los más conocidos.
            ACDeS Digita. Recuperado de: <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://acdesdigital.org/formatos-de-video-mas-conocidos/" target="_blank"><i
                    class="ri-cloud-line inline"></i>
                https://acdesdigital.org/formatos-de-video-mas-conocidos/</a></li>
    </ul>
    <h2>Consultadas</h2>
    <ul id="biblio" class="ul-disc">
        <li>González, G. A. (julio, 2016). <em>Definición de MP4, FLV, AVI, RMVB, MOV</em>. DefiniciónABC.
            Desde <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://www.definicionabc.com/tecnologia/formatos-video.php" target="_blank"><i
                    class="ri-cloud-line inline"></i>
                https://www.definicionabc.com/tecnologia/formatos-video.php</a></li>
        <li>Rivoir, A. & Morales M.J. (2019). Tecnologías digitales: Miradas críticas de la apropiación en
            América Latina. [File PDF] Recuperado de: <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://biblioteca.clacso.edu.ar/clacso/se/20191128031455/Tecnologias-digitales.pdf"
                target="_blank"><i class="ri-cloud-line inline"></i>
                https://biblioteca.clacso.edu.ar/clacso/se/20191128031455/Tecnologias-digitales.pdf</a></li>
        <li>Vázquez, E. & Sevilla, M. L. (2011). Educadores en red: Elaboración y edición de materiales
            audiovisuales para la enseñanza. España: Ediciones académicas.</li>
        <li>(s.a) (s.f). Unidad 5. Edición de material audiovisual. [File PDF). Recuperado de: <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://www.mheducation.es/bcv/guide/capitulo/8448180402.pdf" target="_blank"><i
                    class="ri-cloud-line inline"></i>
                https://www.mheducation.es/bcv/guide/capitulo/8448180402.pdf</a></li>
        <li>Gonzáles, M. (2023). <em>¿Cómo crear una presentación de diapositivas con Icecream SlideShow
                Maker</em>? [Página web]. <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://filmora.wondershare.es/video-editing/icecream-slideshow-maker.html"
                target="_blank"><i class="ri-cloud-line inline"></i>
                https://filmora.wondershare.es/video-editing/icecream-slideshow-maker.html</a></li>
        <li>Muro, F. (2020). <em>ICECREAM Video Editor Review | TUTORIAL ESPAÑOL</em> [Vídeo]. YouTube. <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://www.youtube.com/watch?v=udzEQrVuRVU" target="_blank"><i
                    class="ri-cloud-line inline"></i> https://www.youtube.com/watch?v=udzEQrVuRVU</a></li>
        <li>Falasco, R. (2020). <em>Cómo Editar Vídeos Fácil y Rápido con Icecream</em> [Vídeo]. YouTube. <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://www.youtube.com/watch?v=5ylbKN8jHDU" target="_blank"><i
                    class="ri-cloud-line inline"></i> https://www.youtube.com/watch?v=5ylbKN8jHDU</a></li>
        <li>Ramirez Cardozo, J. D. (2021). <em>ICECREAM VIDEO Editor - Tutorial 2021</em> [Vídeo]. YouTube. <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://www.youtube.com/watch?v=yptAD0Sct38" target="_blank"><i
                    class="ri-cloud-line inline"></i> https://www.youtube.com/watch?v=yptAD0Sct38</a></li>
        <li>Sheldon. (2022). <em>TUTORIAL de ICECREAM VIDEO EDITOR - Fácil - Rápido - Gratis</em> [Vídeo].
            YouTube. <a
                class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                href="https://www.youtube.com/watch?v=ZaDbPkBpIjc" target="_blank"><i
                    class="ri-cloud-line inline"></i> https://www.youtube.com/watch?v=ZaDbPkBpIjc</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>