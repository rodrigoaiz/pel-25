<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>El Historicismo, introducción al tema</h3>
  <p>Entre mediados del siglo XIX y la primera mitad del siglo XX en las sociedades tanto industrializadas como es el caso de Europa, como en aquellas recién independizadas, como en América Latina se presentó un mayor interés por la escritura sobre temas históricos. La percepción de los cambios a través del tiempo se pasó de la exposición de las ideas de escritores de manera individual a la expresión de corrientes de pensamiento que impactaron en el mundo entero, incluyendo, como se dijo anteriormente, en América Latina y en nuestro país.</p>
  <p>El conocimiento y la aplicación del método de investigación de las ciencias naturales basado en la observación y la experimentación, así como el impacto de las ideas de la evolución derivado de los trabajos de Charles Darwin en el siglo XIX, el saber, el descubrimiento de las leyes de la naturaleza, la construcción de estructuras matemáticas y el descubrimiento científico del universo fueron conocimientos que se aplicaron en las ideas de la época en las expresiones de las ideas liberales, romanticistas, nacionalistas, así como las nacionalistas, mismos que se reflejaron en las inquietudes de los trabajos históricos. Fueron elementos que influyeron en las nuevas propuestas historiográficas.</p>
  <p>Al inicio del siglo XX, las propuestas historiográficas del siglo XIX fueron cuestionadas, de manera que ya no son los filósofos quienes reflexionan sobre el conocimiento histórico, sino que son los propios historiadores quienes mostraron la importancia de su objeto de estudio, reaccionaron al positivismo y criticaron los conceptos de progreso y objetividad.</p>
  <p>Las guerras mundiales mostraron una crisis de las ideas de la época, por lo que, frente a ellas y a los procesos como la crisis de 1929, los estados totalitarios, además de la controversia que presentó la posibilidad de hacer una realidad las ideas del socialismo, gestaron para el siglo XX nuevos cuestionamientos que se reflejaron en las propuestas o temas en la historia.</p>
  <p>En consecuencia, surgieron nuevos enfoques históricos, propuestas y objetos de estudio. Fueron tantos aspectos por conocer y aprender que la historia se apoyó en el uso de métodos, técnicas y materiales que otras ciencias tienen como parte de sus herramientas para acercarse a nuevos enfoques y temas a tratar. En este contexto trabajamos con el historicismo, la escuela de los Annales y la nueva historia del materialismo histórico.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-annales.webp',' El primer tomo de la revista Annales de Historia económica y social. Los editores Lucien Febvre y Marc Bloch son los fundadores de una nueva concepción de la historia.');
  ?>
  </div>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>