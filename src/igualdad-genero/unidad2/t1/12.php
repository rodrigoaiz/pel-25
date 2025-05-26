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
        <li><strong>Alemar Psicólogos.</strong> (9 de junio de 2013). Recursos humanos - Corto sobre mobbing. [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=JGfQwPgeibg " target="_blank">Ver video</a>
        </li>

        <li><strong>Alvarado Manuela y Guerra Neyra</strong> (2012) Universidad del Zulia Interacción y Perspectiva Revista de Trabajo Social Vol.2 n°2 pp.117-130 La violencia de género un problema de salud pública.
            <a href="https://dialnet.unirioja.es/ " target="_blank">Dialnet</a>
        </li>

        <li><strong>Asamblea Legislativa del Distrito Federal.</strong> (2020). Código Penal para el Distrito Federal.
            <a href="https://www.congresocdmx.gob.mx/media/documentos/9cd0cdef5d5adba1c8e25b34751cccfdcca80e2c.pdf " target="_blank">Documento PDF</a>
        </li>

        <li><strong>Cámara de Diputados del H. Congreso de la Unión.</strong> (2020). Ley General de Acceso de las Mujeres a una Vida Libre de Violencia. Diario Oficial de la Federación.
            <a href="https://www.diputados.gob.mx/LeyesBiblio/ref/lgamvlv.htm " target="_blank">Ver ley</a>
        </li>

        <li><strong>Cámara de Diputados del H. Congreso de la Unión.</strong> (2023). Ley General para la Igualdad entre Mujeres y Hombres. Diario Oficial de la Federación.
            <a href="https://www.diputados.gob.mx/LeyesBiblio/pdf/LGIMH.pdf " target="_blank">Descargar PDF</a>
        </li>

        <li><strong>Cámara de Diputados del H. Congreso de la Unión.</strong> (2024). Constitución Política de los Estados Unidos Mexicanos.
            <a href="https://www.diputados.gob.mx/LeyesBiblio/pdf/CPEUM.pdf " target="_blank">Constitución Mexicana</a>
        </li>

        <li><strong>Canal COSMO.</strong> (25 de noviembre de 2019). A quien dices amar. El corto de COSMO contra la violencia de género. [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=67OveExf7ZI " target="_blank">Ver video</a>
        </li>

        <li><strong>Canal Daniela Acosta.</strong> (15 de noviembre de 2020). México Feminicida. [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=KAGnRLPlRk8 " target="_blank">Ver video</a>
        </li>

        <li><strong>Canal Universidad Nacional del Mar del Plata.</strong> (18 de octubre de 2016). No te Quedes Callada #3 (Violencia Obstétrica). [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=7_RaIY51UcA " target="_blank">Ver video</a>
        </li>

        <li><strong>Comisión Nacional de los Derechos Humanos (CNDH).</strong> (2022). Tipos y modalidades de la violencia de género. Ley General de Acceso de las Mujeres a una Vida Libre de Violencia.
            <a href="https://appweb.cndh.org.mx/biblioteca/archivos/pdfs/TyM_VG_mujeres.pdf " target="_blank">PDF oficial</a>
        </li>

        <li><strong>CNDH.</strong> Convención Interamericana para Prevenir, Sancionar y Erradicar la Violencia contra la Mujer (2013)
            <a href="https://www.cndh.org.mx/sites/all/doc/programas/mujer/Material_difusion/convencion_Belem_doPara.pdf " target="_blank">Convención Belém do Pará</a>
        </li>

        <li><strong>CNDH.</strong> (2022). Tipos y modalidades de la violencia de género contra las mujeres.: Ley General de Acceso de las Mujeres a una Vida Libre de Violencia. (Primera edición).
            <a href="https://youtu.be/FFIv1Ida2eE " target="_blank">Ver video</a>
        </li>

        <li><strong>Comisión Nacional para Prevenir y Erradicar la Violencia contra las Mujeres (CONAVIM).</strong> (2016) Conceptos básicos de violencia de género.
            <a href="https://www.gob.mx/conavim/articulos/que-es-la-violencia-contra-las-mujeres-y-sus-modalidades " target="_blank">Leer artículo</a>
        </li>

        <li><strong>Excelencia masculina.</strong> (14 de marzo de 2023). ¿Qué quieren los hombres? Comentario de Franco Escamilla. [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/shorts/nubF2KlUloA " target="_blank">YouTube Shorts</a>
        </li>

        <li><strong>Fundación AVON Argentina.</strong> (14 de noviembre de 2018). Violencia digital. Cambiá El Trato. [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=_l_-fbGycMY " target="_blank">Ver video</a>
        </li>

        <li><strong>Instituto Nacional de las Mujeres.</strong> (2020). Tipos y modalidades de violencia.
            <a href="https://www.gob.mx/inmujeres/acciones-y-programas/vida-sin-violencia " target="_blank">Ver tipos de violencia</a>
        </li>

        <li><strong>Larizgoitia Itziar</strong> (2006) La violencia también es un problema de salud pública. Grupo de trabajo para el estudio de la violencia colectiva de la SEE y grupo ISAVIC.
            <a href="https://www.redalyc.org/articulo.oa?id=457845146003 " target="_blank">Artículo académico</a>
        </li>

        <li><strong>Legislatura del Estado de México.</strong> (2024). Código Penal del Estado de México.
            <a href="https://legislacion.edomex.gob.mx/sites/legislacion.edomex.gob.mx/files/files/pdf/cod/vig/codvig006.pdf " target="_blank">Código Penal</a>
        </li>

        <li><strong>Radiofeminista.</strong> (17 de diciembre de 2010). Entrevista a Marisela Escobedo. [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=daIsps4EsKQ " target="_blank">Ver entrevista</a>
        </li>

        <li><strong>c</strong> (2014) Violencia de Género y Salud Pública Horizonte Sanitario, vol. 13, núm. 1, enero-abril, pp. 127-129 Universidad Juárez Autónoma de Tabasco Villahermosa, México [fecha de Consulta 4 de abril de 2024]. ISSN: 1665-3262.
            <a href="https://www.redalyc.org/articulo.oa?id=457845146003 " target="_blank">Artículo completo</a>
        </li>

        <li><strong>Organización de las Naciones Unidas</strong> (1993) Declaración sobre la eliminación de la violencia contra la mujer.
            <a href="https://www.ohchr.org/es/instruments-mechanisms/instruments/declaration-elimination-violence-against-women " target="_blank">Ver documento ONU</a>
        </li>

        <li><strong>Tajer Débora, Gaba Mariana y Reid Graciela</strong> (2013) Impacto de la violencia de género en la salud de las mujeres: una investigación en la ciudad de Buenos Aires. Cátedra “Introducción a los Estudios de Género” Facultad de Psicología, Universidad de Buenos Aires.
            <a href="https://salud.gob.mx/unidades/cdi/documentos/Impactoviolenciadegenero.pdf " target="_blank">PDF investigativo</a>
        </li>

        <li><strong>TEDx Talks.</strong> (26 de septiembre de 2016). Como arrebaté los derechos que la vida me negó: Eufrosina Cruz Mendoza. [Archivo de Vídeo]. YouTube.
            <a href="https://www.youtube.com/watch?v=UJYZV4Yaok8 " target="_blank">Ver charla TEDx</a>
        </li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>