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
            <li>Brgfx. (18 de febrero de 2022). <em>Botones con gráficos</em> [Imagen]. Recuperado de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://www.freepik.es/vector-gratis/botones-graficos_23666121.htm#query=logos%20formatos%20de%20imagen&amp;position=35&amp;from_view=search&amp;track=ais&amp;uuid=7c47349b-5328-472d-9d7a-9ad7872a275b"
                    target="_blank"><i class="ri-cloud-line inline"></i>
                    https://www.freepik.es/vector-gratis/botones-graficos_23666121.htm#query=logos%20formatos%20de%20imagen&amp;position=35&amp;from_view=search&amp;track=ais&amp;uuid=7c47349b-5328-472d-9d7a-9ad7872a275b</a>
            </li>
            <li>Macrovector. (27 de agosto de 2018). <em>Conjunto de burbujas de jabón</em> [Imagen]. Recuperado de
                <a class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://www.freepik.es/vector-gratis/conjunto-burbujas-jabon_2870205.htm#query=tiff&amp;position=0&amp;from_view=keyword&amp;track=sph&amp;uuid=f2f13eb0-61ea-48a4-9880-9caf752ef16c"
                    target="_blank"><i class="ri-cloud-line inline"></i>
                    https://www.freepik.es/vector-gratis/conjunto-burbujas-jabon_2870205.htm#query=tiff&amp;position=0&amp;from_view=keyword&amp;track=sph&amp;uuid=f2f13eb0-61ea-48a4-9880-9caf752ef16c</a>
            </li>
            <li>Díaz, O. (16 de octubre de 2023). <em>Formatos de imagen: ¿Cuándo es mejor usar uno u otro?</em>
                Recuperado de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://raiolanetworks.es/blog/formatos-imagen/" target="_blank"><i
                        class="ri-cloud-line inline"></i> https://raiolanetworks.es/blog/formatos-imagen/</a></li>
            <li>García, F. (10 de noviembre de 2021). Qué son las imágenes WebP [Web log]. Recuperado de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://www.arsys.es/blog/que-son-las-imagenes-webp" target="_blank"><i
                        class="ri-cloud-line inline"></i> https://www.arsys.es/blog/que-son-las-imagenes-webp</a>
            </li>
            <li>Grigorik, I. (30 de agosto de 2018). <em>Escoja el formato de imagen correcto</em>. Recuperado de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://web.dev/articles/choose-the-right-image-format?hl=es" target="_blank"><i
                        class="ri-cloud-line inline"></i>
                    https://web.dev/articles/choose-the-right-image-format?hl=es</a></li>
            <li>Ordoñez, C. (2005). Formatos de imagen digital [PDF]. <em>Revista Digital Universitaria</em>, 5(7),
                pp. 1–10. Recuperado de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://www.revista.unam.mx/vol.6/num5/art50/may_art50.pdf" target="_blank"><i
                        class="ri-cloud-line inline"></i>
                    https://www.revista.unam.mx/vol.6/num5/art50/may_art50.pdf</a></li>
            <li>V, Betania. (2 de enero de 2023). <em>Los 13 mejores formatos de imagen y cuándo utilizarlos</em>.
                Recuperado de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://www.hostinger.mx/tutoriales/formatos-de-imagen" target="_blank"><i
                        class="ri-cloud-line inline"></i> https://www.hostinger.mx/tutoriales/formatos-de-imagen</a>
            </li>
            <li>Vectores y ponchados. (s.f.). <em>La importancia de los formatos gráficos</em>. Recuperado de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://www.vectoresyponchados.win/la-importancia-de-los-formatos-graficos/"
                    target="_blank"><i class="ri-cloud-line inline"></i>
                    https://www.vectoresyponchados.win/la-importancia-de-los-formatos-graficos/</a></li>
            <li>Gimp.org. (s.f.). Tutoriales de GIMP. Recuperado de:
                http://www.gimp.org.es/modules/downloadse/viewcat.php?cid=11 </li>
            <li>Sánchez, J. y Ruíz, J. (s.f.). Creación y retoque de imágenes con software libre: GIMP. Recuperado
                de <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://sites.google.com/innoeduca.eu/tecnologiaeducativa/materiales/curso-gimp"
                    target="_blank"><i class="ri-cloud-line inline"></i>
                    https://sites.google.com/innoeduca.eu/tecnologiaeducativa/materiales/curso-gimp</a></li>
            <li>Musso, C. (s.f.). GIMP: GUÍA DE INICIACIÓN [INCLUYE TUTORIALES]. Recuperado de: <a
                    class="text-primary transition duration-0 whitespace-normal break-words hover:text-secondary hover:duration-150"
                    href="https://www.blogdelfotografo.com/gimp/" target="_blank"><i
                        class="ri-cloud-line inline"></i> https://www.blogdelfotografo.com/gimp/</a></li>
        </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>