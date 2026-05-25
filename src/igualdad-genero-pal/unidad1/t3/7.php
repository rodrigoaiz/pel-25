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
        <li>Adams, M., Coltrane, S., Kimmel, M. S., Hearn, J., &amp; Connell, R. W. (2005). Boys and men in families: The domestic production of gender, power and privilege. En <em>Handbook of studies on men &amp; masculinities</em>. <a href="https://doi.org/10.1177/089124320527863" target="_blank">https://doi.org/10.1177/089124320527863</a></li>
        <li>Anderson, E. (2009). Inclusive masculinity: The changing nature of masculinities. Routledge. <a href="https://doi.org/10.4324/9780203871485" target="_blank">https://doi.org/10.4324/9780203871485</a></li>
        <li>Badinter, E. (1992). <em>XY: De l'identité masculine</em> (Vol. 9783). Odile Jacob.</li>
        <li>Brannon, R. (1976). The male sex role: Our culture's blueprint of manhood and what it's done for us lately. En D. S. David &amp; R. Brannon (Eds.), <em>The 49 percent majority: The male sex role</em> (pp. 1–45). Addison-Wesley.</li>
        <li>Bonino, L. (2008). Micromachismos: El poder masculino en la pareja moderna. En J. A. Lozoya &amp; J. C. Bedoya (Coords.), <em>Voces de hombres por la igualdad</em> (pp. 89–108). Chema Espada.</li>
        <li>Bridges, T., &amp; Pascoe, C. J. (2014). Hybrid masculinities: New directions in the sociology of men and masculinities. <em>Sociology Compass</em>, <em>8</em>(3), 246–258.</li>
        <li>Centro Reina Sofía. (2022, noviembre 24). <em>La caja de la masculinidad: Construcción, actitudes e impacto en la juventud española</em>. <a href="https://www.centroreinasofia.org/publicacion/la-caja-de-la-masculinidad/" target="_blank">https://www.centroreinasofia.org/publicacion/la-caja-de-la-masculinidad/</a></li>
        <li>Chiodi, A., Fabbri, L., &amp; Sánchez, A. (2019). <em>Varones y masculinidades: Herramientas pedagógicas para trabajar con jóvenes y adultos</em>. UNESCO.</li>
        <li>Comisión Nacional de los Derechos Humanos. (Julio, 2018). "Respeto a las Diferentes Masculinidades" [Tríptico]. <a href="https://www.cndh.org.mx/sites/default/files/doc/Programas/Ninez_familia/Material/trip-respeto-dif-masculinidades.pdf" target="_blank">https://www.cndh.org.mx/sites/default/files/doc/Programas/Ninez_familia/Material/trip-respeto-dif-masculinidades.pdf</a></li>
        <li>————. (Septiembre, 2022). "Un asunto de hombres: las masculinidades" [Tríptico]. <a href="https://www.cndh.org.mx/sites/default/files/doc/Programas/Ninez_familia/Material/trip-respeto-dif-masculinidades.pdf" target="_blank">https://www.cndh.org.mx/sites/default/files/doc/Programas/Ninez_familia/Material/trip-respeto-dif-masculinidades.pdf</a></li>
        <li>Connell, R. W., &amp; Messerschmidt, J. W. (2005). Hegemonic masculinity: Rethinking the concept. <em>Gender &amp; Society</em>, <em>19</em>(6), 829–859. <a href="http://www.jstor.org/stable/27640853" target="_blank">http://www.jstor.org/stable/27640853</a></li>
        <li>De la Garza, C., &amp; Derbez, H. (2021). <em>No son micro. Machismos cotidianos</em>. Grijalbo.</li>
        <li>Fernández Cornejo, J. A. (s/f). "Hombres y masculinidades. Curso 2022-2023". Universidad Complutense de Madrid. <a href="https://www.ucm.es/data/cont/docs/85-2023-05-02-6.%20Hombres%20y%20masculinidades.pdf" target="_blank">https://www.ucm.es/data/cont/docs/85-2023-05-02-6.%20Hombres%20y%20masculinidades.pdf</a></li>
        <li>Hellman, B., Baker, G., &amp; Harrison, A. (2017). <em>La caja de la masculinidad: Un estudio sobre lo que significa ser hombre joven en Estados Unidos, el Reino Unido y México</em>. Promundo-US.</li>
        <li>INMujeres. (s/f). "Masculinidades", "Patriarcado". <em>Glosario para la igualdad</em>. <a href="https://campusgenero.inmujeres.gob.mx/glosario/terminos/masculinidades" target="_blank">https://campusgenero.inmujeres.gob.mx/glosario/terminos/masculinidades</a></li>
        <li>Jiménez Guzmán, M. L., &amp; Tena Guerrero, O. (2015). <em>Cómo seguir siendo hombre en medio de la crisis económica</em> (2ª ed.). Universidad Nacional Autónoma de México.</li>
        <li>Kaufman, M. (1994). Los hombres, el feminismo y las experiencias contradictorias del poder entre los hombres. <em>Theorizing Masculinities</em>.</li>
        <li>Kaufman, M. (1999). Las siete P's de la violencia de los hombres. <em>International Association for Studies of Men</em>, <em>6</em>(2), 6-9.</li>
        <li>Lagarde, M. (1996). El género. En <em>Género y feminismo. Desarrollo humano y democracia</em> (pp. 13–38). Horas y HORAS.</li>
        <li>Montero, R. (2019). <em>Historias de mujeres</em>. Debolsillo.</li>
        <li>Núñez Noriega, G. (2017). <em>Abriendo brecha: 25 años de estudios de género de los hombres y las masculinidades en México (1990-2014)</em>. Centro de Investigación en Alimentación y Desarrollo A. C.</li>
        <li>Secretaría de Relaciones Exteriores. (2016, junio 27). Masculinidad hegemónica vs masculinidades igualitarias. <a href="https://www.gob.mx/sre/articulos/masculinidad-hegemonica-vs-masculinidades-igualitarias" target="_blank">https://www.gob.mx/sre/articulos/masculinidad-hegemonica-vs-masculinidades-igualitarias</a></li>
        <li>Solnit, R. (2016). <em>Los hombres me explican cosas</em>. Capitán Swing.</li>
        <li>Suárez Cabrera, J. M., et al. (Diciembre de 2016). <em>Glosario de la diversidad sexual, de género y características sexuales</em>. Consejo Nacional para Prevenir la Discriminación. <a href="https://www.gob.mx/cms/uploads/attachment/file/225271/glosario-TDSyG.pdf" target="_blank">https://www.gob.mx/cms/uploads/attachment/file/225271/glosario-TDSyG.pdf</a></li>
        <li>Vandelloy, J., &amp; Bosson, J. (2013). "Hard Won and Easily Lost: A Review and Synthesis of Theory and Research on Precarious Manhood". <em>Psychology of Men &amp; Masculinity</em>, <em>14</em>(2), 101–113. <a href="https://www.apa.org/pubs/journals/features/men-a0029826.pdf" target="_blank">https://www.apa.org/pubs/journals/features/men-a0029826.pdf</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>