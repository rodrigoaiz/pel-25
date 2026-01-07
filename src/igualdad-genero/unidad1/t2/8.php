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
        <li>CARKI PRODUCTIONS. (11 de julio de 2018). <em>Historia del feminismo en 10 minutos</em> [Video]. <a href="https://www.youtube.com/watch?v=0my1oddgK5g" target="_blank">https://www.youtube.com/watch?v=0my1oddgK5g</a></li>
        <li>Lamas, M. (2007) <em>La perspectiva de género. Grupo de Información en Reproducción Elegida</em> (GIRE). <a href="https://www.ses.unam.mx/curso2007/pdf/genero_perspectiva.pdf" target="_blank">https://www.ses.unam.mx/curso2007/pdf/genero_perspectiva.pdf</a></li>
        <li>Palomar, A. (2022, 7 de marzo). <em>Un breve recorrido por la historia del feminismo</em>. National Geographic. <a href="https://www.lamesaredonda.net/" target="_blank">https://www.lamesaredonda.net/</a></li>
        <li>Sánchez, A. (2020). El movimiento feminista en México: una lucha permanente contra la violencia de género. Unidades de Apoyo para el Aprendizaje. CUAIEED/FES Acatlán, PAPIIT-UNAM. <a href="https://repositorio-uapa.cuaed.unam.mx/repositorio/moodle/pluginfile.php/2854/mod_resource/content/1/UAPA-Movimiento-Feminista-Mexico-Lucha-Permanente-Contra-Violencia-Genero/index.html" target="_blank">https://repositorio-uapa.cuaed.unam.mx/repositorio/moodle/pluginfile.php/2854/mod_resource/content/1/UAPA-Movimiento-Feminista-Mexico-Lucha-Permanente-Contra-Violencia-Genero/index.html</a></li>
        <li>Talleres SDN (16 de agosto 2017) <em>Qué es la perspectiva de género</em> [Video]. <a href="https://www.youtube.com/watch?v=dmwrneT_jP4&t=4s" target="_blank">https://www.youtube.com/watch?v=dmwrneT_jP4&t=4s</a></li>
        <li>Varela, N. y Santolaya, A. (2019). <em>Feminismo para principiantes. Lectura fácil. Plena inclusión.</em> <a href="https://planetafacil.plenainclusion.org/wp-content/uploads/2019/03/Feminismo-para-principiantes.-Lectura-f%C3%A1cil.pdf" target="_blank">https://planetafacil.plenainclusion.org/wp-content/uploads/2019/03/Feminismo-para-principiantes.-Lectura-f%C3%A1cil.pdf</a></li>
    </ul>
    <h3>Complementaria para el alumnado</h3>
    <ul id="biblio" class="ul-disc">
        <li>CuriosaMente. (8 de marzo de 2020) <em>¿Por qué existe el feminismo?</em> [Video]. <a href="https://www.youtube.com/watch?v=hL1VUOOGWFw&t=3s" target="_blank">https://www.youtube.com/watch?v=hL1VUOOGWFw&t=3s</a></li>
        <li>CONAVIM (2018, 22 de noviembre) <em>¿Qué es la perspectiva de género y por qué es necesario implementarla?</em> Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres. <a href="https://www.gob.mx/conavim/articulos/que-es-la-perspectiva-de-genero-y-por-que-es-necesario-implementarla#:~:text=Cuando%20se%20habla%20de%20perspectiva,asignadas%20a%20los%20seres%20humanos" target="_blank">https://www.gob.mx/conavim/articulos/que-es-la-perspectiva-de-genero-y-por-que-es-necesario-implementarla#:~:text=Cuando%20se%20habla%20de%20perspectiva,asignadas%20a%20los%20seres%20humanos</a></li>
        <li>IEMujeresNL (2020, 18 de agosto) <em>¿Qué es perspectiva de género?</em> [Video] <a href="https://www.youtube.com/watch?v=zruZPf-81Lc" target="_blank">https://www.youtube.com/watch?v=zruZPf-81Lc</a></li>
    </ul>
    <h3>Para el profesorado</h3>
    <ul id="biblio" class="ul-disc">
        <li>Chaparro, A. (2022). <em>Las olas feministas, ¿una metáfora innecesaria?</em> Korpus 21, 2 (4), 77-92. <a href="https://korpus21.cmq.edu.mx/index.php/ohtli/article/view/84/80" target="_blank">https://korpus21.cmq.edu.mx/index.php/ohtli/article/view/84/80</a></li>
        <li>Márquez, M. (2022). Las olas del feminismo, una periodización irreconciliable con la Historia. <em>Historia y comunicación social</em>, 27 (2), 381-387. <a href="https://revistas.ucm.es/index.php/HICS/article/view/84385/4564456561854" target="_blank">https://revistas.ucm.es/index.php/HICS/article/view/84385/4564456561854</a></li>
        <li>Serret, E. y Méndez, J. (2011). <em>Sexo, género y feminismo. Suprema Corte de Justicia de la Nación,Tribunal Electoral del Poder Judicial de la Federación, Instituto Electoral del Distrito Federal.</em> <a href="https://atlasdegenero-semujeres.edomex.gob.mx/sites/atlasdegenero-semujeres.edomex.gob.mx/files/files/2%20Serret%2C%20M%C3%A9ndez...Sexo_genero_feminismo%20(1).pdf" target="_blank">https://atlasdegenero-semujeres.edomex.gob.mx/sites/atlasdegenero-semujeres.edomex.gob.mx/files/files/2%20Serret%2C%20M%C3%A9ndez...Sexo_genero_feminismo%20(1).pdf</a></li>
        <li>Varela, N. (2008) <em>Feminismo para principiantes.</em> Ediciones B, S.A. <a href="https://www.smujerescoahuila.gob.mx/wp-content/uploads/2020/05/Feminismo-Principiantes.pdf" target="_blank">https://www.smujerescoahuila.gob.mx/wp-content/uploads/2020/05/Feminismo-Principiantes.pdf</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>