<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bibliografía</h2>
    <h3>Básica para el alumnado</h3>
    <ul id="biblio" class="ul-disc">
        <li>Centro de Enseñanza Técnica Industrial Plantel Colomos. (s/f). <em>Acuerdos de convivencia Construye T.</em> https://www.colomos.ceti.mx/documentos/goe/AcuerdosConvivencia.pdf</li>
        <li>Alonso, A., Carrillo, L. y Marinez, D. (s/f). <em>Sororidad como estrategia de prevención de la violencia basada en género.</em> Universidad Santo Tomás, Colombia. https://repository.usta.edu.co/bitstream/11634/30019/1/001-SOSA%20ok.pdf</li>
        <li>Comisión Nacional de los Derechos Humanos. (2018). <em>Respeto a las diferentes masculinidades. Porque hay muchas formas de ser hombre.</em> https://www.cndh.org.mx/sites/default/files/doc/Programas/Ninez_familia/Material/triprespeto-dif-masculinidades.pdf</li>
        <li>Organización Internacional del Trabajo. (2022). <em>Inclusión de las personas lesbianas, gays, bisexuales, transgénero, intersexuales y queer (LGBTIQ+) en el mundo del trabajo: una guía de aprendizaje.</em> https://www.ilo.org/es/media/373596/download</li>
    </ul>
    <h3>Para el profesorado</h3>
    <ul class="ul-disc">
        <li>Chaparro, D. (2018). Educar para la sana convivencia. <em>Educación y Ciencia, 23,</em> pp. 207-218. https://dialnet.unirioja.es/descarga/articulo/7982130.pdf</li>
        <li>Lagarde, M. (2006). <em>Pacto entre mujeres sororidad. Aportes para el debate.</em> https://www.asociacionag.org.ar/pdfaportes/25/09.pdf</li>
        <li>Ayllón González, R. (2020, julio-agosto). De hombres y machos: el género y las masculinidades en la vida cotidiana. <em>Revista Digital Universitaria (RDU), 21</em>(4). http://doi.org/10.22201/cuaieed.16076079e.2020.21.4.5</li>
        <li>CEWLA y Lambda Legal. (2013). <em>Conceptos básicos sobre el ser LGBT. Vamos al Grano: Herramientas para apoyar a la juventud LGBT en custodia estatal.</em> https://legacy.lambdalegal.org/sites/default/files/spa-vg_conceptosbausicos_final.pdf</li>
    </ul>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
