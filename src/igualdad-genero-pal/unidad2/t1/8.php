<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bibliografía</h2>
    <ul id="biblio" class="ul-disc">
        <li>Alemar Psicólogos. (9 de junio de 2013). <em>Recursos humanos - Corto sobre mobbing.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=JGfQwPgeibg" target="_blank">https://www.youtube.com/watch?v=JGfQwPgeibg</a>
        </li>

        <li>Alvarado Manuela y Guerra Neyra (2012) <em>Universidad del Zulia Interacción y Perspectiva Revista de Trabajo Social</em> Vol.2 n°2 pp.117-130 La violencia de género un problema de salud pública. <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=5154889" target="_blank">https://dialnet.unirioja.es/servlet/articulo?codigo=5154889</a>
        </li>

        <li>Asamblea Legislativa del Distrito Federal. (2020).<em> Código Penal para el Distrito Federal.</em>
            <a href="https://www.congresocdmx.gob.mx/media/documentos/9cd0cdef5d5adba1c8e25b34751cccfdcca80e2c.pdf" target="_blank">https://www.congresocdmx.gob.mx/media/documentos/9cd0cdef5d5adba1c8e25b34751cccfdcca80e2c.pdf</a>
        </li>

        <li>Cámara de Diputados del H. Congreso de la Unión. (2020). <em>Ley General de Acceso de las Mujeres a una Vida Libre de Violencia. Diario Oficial de la Federación.</em>
            <a href="https://www.diputados.gob.mx/LeyesBiblio/ref/lgamvlv.htm" target="_blank">https://www.diputados.gob.mx/LeyesBiblio/ref/lgamvlv.htm</a>
        </li>

        <li>Cámara de Diputados del H. Congreso de la Unión. (2023). <em>Ley General para la Igualdad entre Mujeres y Hombres. Diario Oficial de la Federación.</em>
            <a href="https://www.diputados.gob.mx/LeyesBiblio/pdf/LGIMH.pdf" target="_blank">https://www.diputados.gob.mx/LeyesBiblio/pdf/LGIMH.pdf</a>
        </li>

        <li>Cámara de Diputados del H. Congreso de la Unión. (2024). <em>Constitución Política de los Estados Unidos Mexicanos.</em>
            <a href="https://www.diputados.gob.mx/LeyesBiblio/pdf/CPEUM.pdf" target="_blank">https://www.diputados.gob.mx/LeyesBiblio/pdf/CPEUM.pdf</a>
        </li>

        <li>Canal COSMO. (25 de noviembre de 2019). <em>A quien dices amar. El corto de COSMO contra la violencia de género.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=67OveExf7ZI" target="_blank">https://www.youtube.com/watch?v=67OveExf7ZI</a>
        </li>

        <li>Canal Daniela Acosta. (15 de noviembre de 2020). <em>México Feminicida.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=KAGnRLPlRk8" target="_blank">https://www.youtube.com/watch?v=KAGnRLPlRk8</a>
        </li>

        <li>Canal Universidad Nacional del Mar del Plata. (18 de octubre de 2016). <em>No te Quedes Callada #3 (Violencia Obstétrica).</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=7_RaIY51UcA" target="_blank">https://www.youtube.com/watch?v=7_RaIY51UcA</a>
        </li>

        <li>Comisión Nacional de los Derechos Humanos (CNDH) (2022). <em>Tipos y modalidades de la violencia de género. Ley General de Acceso de las Mujeres a una Vida Libre de Violencia</em>. Recuperado de <a href="https://igualdaddegenero.cndh.org.mx/doc/Promocion/Publicaciones/TyM_VG_mujeres.pdf" target="_blank">https://igualdaddegenero.cndh.org.mx/doc/Promocion/Publicaciones/TyM_VG_mujeres.pdf</a>
        </li>
        <li>CNDH. Convención Interamericana para Prevenir, Sancionar y Erradicar la Violencia contra la Mujer (2013)
            <a href="https://www.cndh.org.mx/sites/all/doc/programas/mujer/Material_difusion/convencion_BelemdoPara.pdf" target="_blank">https://www.cndh.org.mx/sites/all/doc/programas/mujer/Material_difusion/convencion_BelemdoPara.pdf</a>
        </li>

        <li>CNDH. (2022). <em>Tipos y modalidades de la violencia de género contra las mujeres: Ley General de Acceso de las Mujeres a una Vida Libre de Violencia.</em> (Primera edición).
            <a href="https://youtu.be/FFIv1Ida2eE" target="_blank">https://youtu.be/FFIv1Ida2eE</a>
        </li>

        <li>Comisión Nacional para Prevenir y Erradicar la Violencia contra las Mujeres (CONAVIM). (2016) <em>Conceptos básicos de violencia de género.</em>
            <a href="https://www.gob.mx/conavim/articulos/que-es-la-violencia-contra-las-mujeres-y-sus-modalidades" target="_blank">https://www.gob.mx/conavim/articulos/que-es-la-violencia-contra-las-mujeres-y-sus-modalidades</a>
        </li>

        <li>Excelencia masculina. (14 de marzo de 2023). <em>¿Qué quieren los hombres? Comentario de Franco Escamilla.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/shorts/nubF2KlUloA" target="_blank">https://www.youtube.com/shorts/nubF2KlUloA</a>
        </li>

        <li>Fundación AVON Argentina. (14 de noviembre de 2018). <em>Violencia digital. Cambiá El Trato.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=_l_-fbGycMY" target="_blank">https://www.youtube.com/watch?v=_l_-fbGycMY</a>
        </li>

        <li>Instituto Nacional de las Mujeres. (2020). <em>Tipos y modalidades de violencia.</em>
            <a href="https://www.gob.mx/inmujeres/acciones-y-programas/vida-sin-violencia" target="_blank">https://www.gob.mx/inmujeres/acciones-y-programas/vida-sin-violencia</a>
        </li>

        <li>Larizgoitia Itziar (2006) <em>La violencia también es un problema de salud pública.</em> Grupo de trabajo para el estudio de la violencia colectiva de la SEE y grupo ISAVIC.
            <a href="https://www.gacetasanitaria.org/es-la-violencia-tambien-es-un-articulo-S0213911106715680" target="_blank">https://www.gacetasanitaria.org/es-la-violencia-tambien-es-un-articulo-S0213911106715680</a>
        </li>

        <li>Legislatura del Estado de México. (2024). Código Penal del Estado de México.
            <a href="https://legislacion.edomex.gob.mx/sites/legislacion.edomex.gob.mx/files/files/pdf/cod/vig/codvig006.pdf" target="_blank">https://legislacion.edomex.gob.mx/sites/legislacion.edomex.gob.mx/files/files/pdf/cod/vig/codvig006.pdf</a>
        </li>

        <li>Radiofeminista. (17 de diciembre de 2010). <em>Entrevista a Marisela Escobedo.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=daIsps4EsKQ" target="_blank">https://www.youtube.com/watch?v=daIsps4EsKQ</a>
        </li>

        <li>Rebeca Rosado Rostro. (16 de julio de 2024). <em>Formas de violencia de género.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=FFIv1Ida2eE&t=44s" target="_blank">https://www.youtube.com/watch?v=FFIv1Ida2eE&t=44s</a>
        </li>

        <li>c (2014) <em>Violencia de Género y Salud Pública Horizonte Sanitario</em>, vol. 13, núm. 1, enero-abril, pp. 127-129 Universidad Juárez Autónoma de Tabasco Villahermosa, México [fecha de Consulta 4 de abril de 2024]. ISSN: 1665-3262.
            <a href="https://www.redalyc.org/articulo.oa?id=457845146003" target="_blank">https://www.redalyc.org/articulo.oa?id=457845146003</a>
        </li>

        <li>Organización de las Naciones Unidas (1993) <em>Declaración sobre la eliminación de la violencia contra la mujer.</em>
            <a href="https://www.ohchr.org/es/instruments-mechanisms/instruments/declaration-elimination-violence-against-women" target="_blank">https://www.ohchr.org/es/instruments-mechanisms/instruments/declaration-elimination-violence-against-women</a>
        </li>

        <li>Tajer Débora, Gaba Mariana y Reid Graciela (2013) <em>Impacto de la violencia de género en la salud de las mujeres: una investigación en la ciudad de Buenos Aires.</em> Cátedra "Introducción a los Estudios de Género" Facultad de Psicología, Universidad de Buenos Aires.
            <a href="https://salud.gob.mx/unidades/cdi/documentos/Impactoviolenciadegenero.pdf" target="_blank">https://salud.gob.mx/unidades/cdi/documentos/Impactoviolenciadegenero.pdf</a>
        </li>

        <li>TEDx Talks. (26 de septiembre de 2016). <em>Como arrebaté los derechos que la vida me negó: Eufrosina Cruz Mendoza.</em> [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=UJYZV4Yaok8" target="_blank">https://www.youtube.com/watch?v=UJYZV4Yaok8</a>
        </li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>