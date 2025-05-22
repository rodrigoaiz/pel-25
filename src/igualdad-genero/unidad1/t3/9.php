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
        <li>Alberti, Pilar (2020, 29 septiembre). <em>Mirando con lupa feminista los micromachismos en trabajo de cuidados y doméstico,</em> en MujeresNet.info. URL<a href="https://mujeresnet.info/2020/09/mirando-con-lupa-feminista-los-micromachismos-en-trabajo-de-cuidados-y-domestico.html/" target="_blank">https://mujeresnet.info/2020/09/mirando-con-lupa-feminista-los-micromachismos-en-trabajo-de-cuidados-y-domestico.html/</a></li>
        <li>Coordinación para la Igualdad de Género en la Universidad Nacional Autónoma de México. (2020, julio,8). ¿Qué otras actitudes micromachistas identificas?... [imagen]. Facebook. <a href="https://www.facebook.com/share/p/18ruo8jEAb/" target="_blank">https://www.facebook.com/share/p/18ruo8jEAb/</a></li>
        <li>Equipo de Educación FUNPROCOOP (2019). <em>Las Relaciones de Poder, en Red Mesoamericana de Educación Popular y Fundación Promotora de Cooperativas (FUNPROCOOP).</em> URL<a href="https://redalforja.org.gt/mediateca/wp-content/uploads/2019/02/FUNPROCOOP.-Las-relaciones-de-poder.pdf" target="_blank">https://redalforja.org.gt/mediateca/wp-content/uploads/2019/02/FUNPROCOOP.-Las-relaciones-de-poder.pdf</a></li>
        <li>FiloNews. (2020, enero, 20). <em>Michel Foucault para principiantes: ¿Qué es el poder y quiénes te vigilan?</em> [video].<a href="https://youtu.be/TchqFCgm42U" target="_blank">https://youtu.be/TchqFCgm42U</a></li>
        <li>Fontenla, Marta. (2008). <em>¿Qué es el patriarcado?</em> Mujeres en red. <a href="https://www.mujeresenred.net/spip.php?article1396" target="_blank">https://www.mujeresenred.net/spip.php?article1396</a></li>
        <li>Instituto Nacional de las Mujeres. (2020, agosto 17). #InformaciónQueEduca 🤓, Imagen #Micromachismos... [Imagen]. Facebook. <a href="https://www.facebook.com/photo?fbid=3271092856306498&set=a.518005678281910" target="_blank">https://www.facebook.com/photo?fbid=3271092856306498&set=a.518005678281910</a></li>
        <li>Josiología. (2020, junio, 30). <em>Los tipos de capital según Pierre Bourdieu.</em> [video]. <a href="https://youtu.be/h40a7r9vCWs?si=MVNP0W_Ps-flSQs0" target="_blank">https://youtu.be/h40a7r9vCWs?si=MVNP0W_Ps-flSQs0</a></li>
        <li>Mace, R. (2022). <em>Cómo comenzó el patriarcado (y cuán posible es que la evolución se deshaga de él).</em> BBC News Mundo. <a href="https://www.bbc.com/mundo/noticias-62969797" target="_blank">https://www.bbc.com/mundo/noticias-62969797</a></li>
        <li>ONMPRI Oficial. (2020b, diciembre 11). <em>Las relaciones de poder entre hombres y mujeres</em> [Vídeo]. YouTube. <a href="https://www.youtube.com/watch?v=iO9pRTvw5vs" target="_blank">https://www.youtube.com/watch?v=iO9pRTvw5vs</a></li>
    </ul>
    <h3>Complementaria</h3>
        <ul id="biblio" class="ul-disc">
          <li>Alberti, Pilar (2019). <em>“Glosario”</em>, en Constitución Violeta. México: Las Constituyentes CDMX Feministas.</li>
          <li>Bonino, Luis (2003). “Los hombres y la igualdad con las mujeres”, en Lomas, Carlos (Comp.) <em>¿Todos los hombres son iguales?</em> México: Paidós, pp:105-142.</li>
          <li>Bonino, Luis (2011). <em>“Micromachismos. El poder masculino en la pareja ‘moderna’”</em>, Microma en Lozoya José Ángel y José María Bedoya (Comps). Editado por Chema Espada, Voces de Hombres por la Igualdad, pp: 89-109 (libro electrónico).</li>
          <li>Camps, Victoria (1982). <em>El sexismo en la Ciencia.</em> Universidad Autónoma de Barcelona.</li>
          <li>Rousseau, Jean-Jacques (2008). <em>Emilio o de la educación.</em> México: Éxodo.</li>
          <li>Rousseau, <em>Jean-Jaques Confesiones.</em> Edición electrónica de la Escuela de Filosofía. Universidad de Arte y Ciencias Sociales (ARCIS), Santiago de Chile. www.philosophia.cl Consultada el 26 septiembre 2020.</li>
        </ul>
        <p><strong>Nota importante:</strong> Consideramos que el estilo se ha convertido en una herramienta de trabajo académico que preserva la cultura patriarcal, ya que cuando utilizamos el estilo APA, realizamos sin proponérnoslo, un acto de poco respeto hacia el trabajo académico de las mujeres, pues al citar sus textos publicados poniendo solo su apellido y la inicial de su nombre, las invisibilizamos como  autoras. Ver más en Mondragón González, José Carlos. (2024). El estilo APA. La preservación de la cultura patriarcal en el mundo de la psicología y sus publicaciones. Revista Electrónica De Psicología Iztacala, 27(1). URL de <a href="https://www.revistas.unam.mx/index.php/repi/article/view/88152" target="_blank">https://www.revistas.unam.mx/index.php/repi/article/view/88152</a></p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>