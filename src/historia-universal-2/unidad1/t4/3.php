<?php
include '../../config.php'; // Ajusta esta ruta según tu estructura
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h2>La sociedad de consumo</h2>
  
  <p>Una característica fundamental de la Belle Époque es el nacimiento de la sociedad de consumo. No hay mejor muestra del consumismo que los centros comerciales, si bien estos lugares no son una novedad de la época, sí lo son aquellos dirigidos a la clase trabajadora, la mayoritaria, la que estaba mejorando su situación. En 1895 se inauguraron en París las galerías Dufayel, este templo del consumo contaba con un cine de 1500 butacas y para la inauguración hubo como atracción una máquina. Las novedades en estos nuevos espacios de consumo fueron las rebajas y la posibilidad de pagar a plazos. Las compras se volvieron una forma de ocio.</p>
  
  <p>La publicidad fue muy importante en el desarrollo del consumo, gracias a ella, por ejemplo, el champán pasó de ser una bebida poco apreciada a ser la favorita de la burguesía. Cambiaron los hábitos respecto al consumo y a la forma de vestir, gracias a la ropa, las personas comenzaron a parecerse y no se distinguía a la gente del campo de la de la ciudad. Por cierto, la vestimenta de las mujeres se componía de varias capas de ropa de tela gruesa que escondían la carne pero exageraron las formas, siendo el corsé un elemento fundamental en los atuendos femeninos. En la Belle Époque, gracias al uso extendido de la bicicleta, surgieron los primeros pantalones para mujer ¡Un escándalo!</p>
  
  <?php
  renderImage('sirena-com1.jpg', 'Imagen de sirena-com', 'https://commons.wikimedia.org/wiki/File:Magasins_Dufayel_publicit%C3%A9_1896.jpg', 'Wikimedia Commons');
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>