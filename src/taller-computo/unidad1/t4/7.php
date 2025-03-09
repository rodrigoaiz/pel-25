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
    <li>Altuve, H., Márquez, J., Rodríguez, A., Serrano, F., González, D., Moret, Y., y González, J. (2010). Síndrome del túnel carpiano. <em>Acta Odontológica Venezolana</em>, 48(3), pp. 43-44.</li>
    <li>Benchimol, D. (coord.). (2010). <em>Redes CISCO</em>. Buenos Aires, Argentina: Gradi.</li>
    <li>Chang, R. (2002). <em>Química</em>. (M. Ramírez y R. Zugazagoltia, Trads.) (7ª ed.). Colombia: McGraw-Hill Education.</li>
    <li>Fernández, M. (2015). <em>La importancia de las referencias bibliográficas y las citas en la elaboración de documentos y trabajos científicos y/o académicos</em>. [PDF]. Bibliotecas del Gobierno del Principado de Asturias. Recuperado de http://www.bibliotecaminsal.cl/wp/wp-content/uploads/2015/06/Mercedes-Fernandez-Menendez.pdf</li>
    <li>Fusi, J. (2015). <em>El efecto Hitler: Una breve historia de la segunda guerra mundial</em> [EBook]. Barcelona: Espasa. Recuperado de https://www.planetadelibros.com/libros_contenido_extra/30/29366_El_efecto_Hitler.pdf</li>
    <li>González, N. (2021). <em>Ciencia para hacer frente a los huracanes</em>. Recuperado 10 de abril de 2023, de https://ciencia.nasa.gov/ciencia-para-hacer-frente-los-huracanes.</li>
    <li>Lerner, D. (2001). <em>Leer y escribir en la escuela</em>. México: Secretaría de Educación Pública.</li>
    <li>Marx, K, y Engels, F. (2017). <em>El manifiesto comunista</em>. (F. Lara, Trad.). Barcelona: Ediciones Península.</li>
    <li>Norton, P. (2004). <em>Introducción a la computación</em> (6ª ed.). China: McGraw-Hill Education</li>
    <li>Castillo, A. &amp; González E.O.. (2010). Criterios para evaluar la calidad de la información en los sitios web [Apuntes]. <a href="https://ntic.uson.mx/plataforma/fotosntic/documentos/criterios_a1t2.pdf" target="_blank">https://ntic.uson.mx/plataforma/fotosntic/documentos/criterios_a1t2.pdf</a></li>
    <li>Harvey, I. (2011). Técnicas para gestionar la información. Universidad Metropolitana. <a href="https://canvas.instructure.com/files/45782761/download?download_frd=1&amp;verifier=sdV0SycFs3GamNlhIAgvFCTvl1K2wP9i6t4XMFIR" target="_blank">https://canvas.instructure.com/files/45782761/download?download_frd=1&amp;verifier=sdV0SycFs3GamNlhIAgvFCTvl1K2wP9i6t4XMFIR</a></li>
    <li>Salvador, J.A. &amp; Angós, J.M. (1999). Criterios para evaluar la calidad de las fuentes de información en Internet. <a href="https://ibersid.eu/ojs/index.php/scire/article/view/1119/1101" target="_blank">https://ibersid.eu/ojs/index.php/scire/article/view/1119/1101</a></li>
    <li>Salvador, J. A. (2001). Evaluación de recursos de información en Internet: evaluación formal y de contenidos. <a href="http://eprints.rclis.org/8727/1/Evaluacion-Avila.pdf" target="_blank">http://eprints.rclis.org/8727/1/Evaluacion-Avila.pdf</a></li>
    <h3>Para saber más</h3>
    <li>Ornelas, A. &amp; López, M. (2009). En búsqueda de la calidad de la información que se publica en internet. Revista Textos de la cibersociedad. <a href="http://eprints.rclis.org/15523/1/Ornelas-Lopez-Revista-Cibersociedad.pdf" target="_blank">http://eprints.rclis.org/15523/1/Ornelas-Lopez-Revista-Cibersociedad.pdf</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
