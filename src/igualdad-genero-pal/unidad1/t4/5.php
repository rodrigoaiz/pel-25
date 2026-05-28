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
    <li>Antolín Villota, L. (2003). <em>La mitad invisible: Género en la educación para el desarrollo</em>. ACSUR-Las Segovias.</li>
    <li>Constitución Política de los Estados Unidos Mexicanos [CPEUM]. (2026, 5 de febrero). Artículo 4. Cámara de Diputados del H. Congreso de la Unión.</li>
    <li>Etecé. (2016-2024). <em>Cultura</em>. Enciclopedia Humanidades. https://humanidades.com/cultura/</li>
    <li>Gobierno del Estado de México. (2019). <em>Hablemos de igualdad de género</em> [PDF]. Gobierno del Estado de México.</li>
    <li>Instituto Nacional de las Mujeres (INMUJERES). (2017, noviembre). <em>Glosario de género</em>. INMUJERES.</li>
    <li>Matiashenríquezvalenzuela. (2021). <em>The image represents activities with students with disabilities associated to the Adapted Physical Education field</em> [Fotografía]. Wikimedia Commons. https://commons.wikimedia.org/wiki/File:The_image_represents_activities_with_students_with_disabilities_associated_to_the_Adapted_Physical_Education_field.jpg</li>
    <li>Navagómez, E. (2013). <em>Piel de niño cuentos</em>. Universidad Autónoma Chapingo.</li>
    <li>Torres, A. (2024). <em>Qué es la cultura de la igualdad</em>. Sociedad Universal. https://sociedaduniversal.com/que-es-la-cultura-de-la-igualdad/</li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>