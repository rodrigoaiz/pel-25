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
        <li>Abbagnano, N. (2010). <em>Diccionario de Filosofía.</em> FCE</li>
        <li>Ferrater, J. (2004). <em>Diccionario de Filosofía.</em> Ariel.</li>
        <li>Gargallo, F. (2012). Tan derechas y tan humanas. Manual ético de derechos humanos de las mujeres. <a href="https://francescagargallo.wordpress.com/ensayos/librosdefg/tan-derechas-y-%20tan-humanas/" target="_blank">https://francescagargallo.wordpress.com/ensayos/librosdefg/tan-derechas-y-%20tan-humanas/</a> (wordpress.com).</li>
        <li>Herrera San Martín, E. (2012). <em>La UVE de Gowin como instrumento de aprendizaje y evaluación de habilidades de indagación en la unidad de fuerza y movimiento.</em> Paradigma, 33(2), 101-126.</li>
        <li>INMujeres (s/f). Glosario para la igualdad. <a href="https://campusgenero.inmujeres.gob.mx/glosario/search?search=derechos+humanos" target="_blank">https://campusgenero.inmujeres.gob.mx/glosario/search?search=derechos+humanos</a></li>
        <li>Naciones Unidas (2015). <em>Cartilla Derechos Humanos de las Naciones Unidas.</em> UDHR_booklet_SP_web.pdf (un.org) </li>
        <li>Naciones Unidas (s/f). <em>La Declaración Universal de Derechos Humanos.</em> <a href="https://www.un.org/es/about-us/universal-declaration-of-human-rights" target="_blank">https://www.un.org/es/about-us/universal-declaration-of-human-rights</a></li>
        <li>García, D. (2015). <em>El concepto de persona, concepto eje para la ética.</em> En García, D. y Traslosheros, J. (Coords.). <em>Ética, persona y sociedad. Una ética para la vida</em> (pp.5-8) (5.a. ed.). Porrúa, Tecnológico de Monterrey.</li>
        <li>Pichot, M. (2017). <em>"Mansplaining"</em> PERSONA. <a href="https://www.youtube.com/watch?v=lz4mLjxXA9I" target="_blank">https://www.youtube.com/watch?v=lz4mLjxXA9I</a></li>
        <li>Pressnet. (2010). ¿Qué son los Derechos Humanos? <a href="https://youtu.be/PPeRECua5CQ?si=n81zyvqAwMAyBvoM" target="_blank">https://youtu.be/PPeRECua5CQ?si=n81zyvqAwMAyBvoM</a></li>
        <li>Valleverde, I. (2015). Los derechos fundamentales en la Historia. Una aproximación a su origen y fundamento. En Carbonell, M., Fix, H. y Valadés, D. <em>Estado constitucional, derechos humanos, justicia y vida universitaria</em> (573- 597). Estudios en homenaje a Jorge Carpizo. Derechos Humanos, V(2). 27. <a href="https://archivos.juridicas.unam.mx/www/bjv/libros/8/3977/27.pdf" target="_blank">https://archivos.juridicas.unam.mx/www/bjv/libros/8/3977/27.pdf</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>