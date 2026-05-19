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
        <li>Adams, M., Coltrane, S., Kimmel, M. S., Hearn, J., & Connell, R. W. (2005). Chapter 17. Boys and Men in Families: The Domestic Production of Gender, Power and Privilege in Handbook of Studies on Men & Masculinities. <a href="https://sk.sagepub.com/hnbk/edvol/handbook-of-studies-on-men-and-masculinities/chpt/men-masculinities-work-organizations-management" target="_blank">https://sk.sagepub.com/hnbk/edvol/handbook-of-studies-on-men-and-masculinities/chpt/men-masculinities-work-organizations-management</a></li>
        <li>Anderson, Eric (2009). Inclusive masculinity: the changing nature of masculinities (Paperback edition). New York: Routledge. ISBN 9780415804622</li>
        <li>Badinter, E. (1992). XY: De l’identité masculine (Vol. 9783). Odile Jacob.</li>
        <li>Brannon, R. (1976). The male sex role: Our culture’s blueprint of manhood and what it’s done for us lately. In D.S. David & R. Brannon (Eds.), The 49 per cent majority: The male sex role (pp.1–45). Reading, MA.: Addison-Wesley.</li>
        <li>Bridges, T., & Pascoe, C. J. (2014). Hybrid masculinities: New directions in the sociology of men and masculinities. Sociology compass, 8(3), 246-258.
        <li>Bonino, L. (2008). Micromachismos: el poder masculino en la pareja moderna. En J. A. López & J. De la Garza, C. y Derbez, H. (2021). No son micro. Machismos cotidianos. Grijalbo.</li>
        <li>Centro Reino Sofia, (24 noviembre 2022). La caja de la masculinidad: construcción, actitudes e impacto en la juventud española. <a href="https://www.centroreinasofia.org/publicacion/la-caja-de-la-masculinidad/" target="_blank">https://www.centroreinasofia.org/publicacion/la-caja-de-la-masculinidad/</a></li>
        <li>Chiodi, A., Fabbri, L., y Sánchez, A. (2019). Varones y masculinidad (es). Argentina: Instituto de Masculinidades y Cambio Social.</li>
        <li>Comisión Nacional de los Derechos Humanos (CNDH) (septiembre, 2022/4VG/BAPJ). Un asunto de hombres: las masculinidades. [Folleto] <a href="http://appweb.cndh.org.mx/biblioteca/archivos/pdfs/Masculinidades.pdf" target="_blank">http://appweb.cndh.org.mx/biblioteca/archivos/pdfs/Masculinidades.pdf</a></li>
        <li>Connell, R. W., & Messerschmidt, J. W. (2005). Hegemonic masculinity: Rethinking the concept. Gender & society, 19(6), 829-859.</li>
        <li>El HuffPost. (4 ene 2016). 48 frases que los hombres escuchan a lo largo de su vida, [Video de YOUTUBE]. <a href="https://youtu.be/eKWSXBJIpyo?si=fdj2WjAzb2HDJpbR" target="_blank">https://youtu.be/eKWSXBJIpyo?si=fdj2WjAzb2HDJpbR</a></li>
        <li>Fernández Cornejo, J. A. (2022-2023). Tema 6 Hombres y masculinidades. Universidad Complutense de Madrid. <a href="https://www.ucm.es/data/cont/docs/85-2023-05-02-6.%20Hombres%20y%20masculinidades.pdf" target="_blank">https://www.ucm.es/data/cont/docs/85-2023-05-02-6.%20Hombres%20y%20masculinidades.pdf</a></li>
        <li>Hellman, B., Baker, G. y Harrison, A., (2017). La caja de la masculinidad: un estudio sobre lo que significa ser hombre joven en Estados Unidos, el Reino Unido y México. Washington DC y Londres: Promundo-US y Unilever.</li>
        <li>INMujeres, (s/f). Masculinidades. Glosario para la igualdad. <a href="https://campusgenero.inmujeres.gob.mx/glosario/terminos/masculinidades" target="_blank">https://campusgenero.inmujeres.gob.mx/glosario/terminos/masculinidades</a></li>
        <li>INMUJERES, (2002). Pasos hacia la equidad de género en México. México: <a href="http://cedoc.inmujeres.gob.mx/documentos_download/100593.pdf" target="_blank">http://cedoc.inmujeres.gob.mx/documentos_download/100593.pdf</a></li>
        <li>Jiménez Guzmán, M. L., y Tena Guerrero, O., (2015). Cómo seguir siendo hombre en medio de la crisis económica. Reflexiones sobre masculinidades y empleo (Segunda ed.). Universidad Nacional Autónoma de México</li>
        <li>Kaufman, M. (1994). Los hombres, el feminismo y las experiencias contradictorias del poder entre los hombres. Theorizing Masculinities, Oaks,1994.</li>
        <li>Kaufman, M. (1999). Las siete P’s de la violencia de los hombres. International Association for Studies of Men, 6(2), 6-9.</li>
        <li>Lagarde, M., (1996) “El género”, fragmento literal: ‘La perspectiva de género’, en Género y feminismo. Desarrollo humano y democracia. España: Ed. horas y HORAS, pp. 13-38.</li>
        <li>Montero, R. (2019). Historias de mujeres. Debolsillo.</li>
        <li>Núñez Noriega, G. (2017). Abriendo brecha: 25 años de estudios de género de los hombres y las masculinidades en México (1990-2014). México, Centro de Investigación en Alimentación y Desarrollo A. C.</li>
        <li>ONU Mujeres, s/f. Módulo 2 Nuevas masculinidades y su relación con la autonomía económica. <a href="https://lac.unwomen.org/sites/default/files/Field%20Office%20Americas/Imagenes/Paginas/MELTY/PILAR%204/P4%2001%20-%20Curso%20SEMPRENDE/P4%2001%20MODULO%202%20CURSO%20ONU_MUJERES_SENPRENDE%20BORRADOR.pdf" target="_blank">https://lac.unwomen.org/sites/default/files/Field%20Office%20Americas/Imagenes/Paginas/MELTY/PILAR%204/P4%2001%20-%20Curso%20SEMPRENDE/P4%2001%20MODULO%202%20CURSO%20ONU_MUJERES_SENPRENDE%20BORRADOR.pdf</a></li>
        <li>ONU Mujeres, (2002). Progress of the World's Women 2002, Volume 2: Gender Equality and the Millennium Development Goals. UN Women Headquarters Office, ISBN 0-91291770-9 Secretaría de Relaciones Exteriores, (27 de junio de 2016). Masculinidad hegemónica vs masculinidades igualitarias [Página de internet]. <a href="https://www.gob.mx/sre/articulos/masculinidad-hegemonica-vs-masculinidades-igualitarias" target="_blank">https://www.gob.mx/sre/articulos/masculinidad-hegemonica-vs-masculinidades-igualitarias</a></li>
        <li>Solnit, R. (2016). Los hombres me explican cosas. Capitán Swing.</li>
        <li>Vandelloy J., Bosson J. (2013): “Hard Won and Easily Lost: A Review and Synthesis of Theory and Research on Precarious Manhood”. Psychology of Men & Masculinity, 14(2), 101-113 <a href="http://ovidsp.ovid.com.pbidi.unam.mx:8080/ovidweb.cgi?T=JS&CSC=Y&NEWS=N&PAGE=fulltext&AN=00128141-201304000-00001&D=ovft" target="_blank">http://ovidsp.ovid.com.pbidi.unam.mx:8080/ovidweb.cgi?T=JS&CSC=Y&NEWS=N&PAGE=fulltext&AN=00128141-201304000-00001&D=ovft</a></li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>