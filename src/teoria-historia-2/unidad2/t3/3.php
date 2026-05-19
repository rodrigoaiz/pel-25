<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tooltip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El materialismo histórico fuera de la Unión Soviética: Antonio Gramsci</h2>
  
  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-gramsci.webp','Un autor que reflexiona sobre las relaciones entre los intelectuales y el Estado es Antonio Gramsci. Se opuso en sus escritos contra el fascismo italiano y fue encarcelado en 1929. Ahí escribió sus Cuadernos de la cárcel, en los cuales plasma su concepto de historia.', 'https://upload.wikimedia.org/wikipedia/commons/e/e6/Gramsci.png', 'Wikipedia');
  ?>
  </div>

  <p>Antonio Gramsci (1891-1937) fue uno de los fundadores del periódico <i>L´Ordine Nuovo</i> (1919) y del Partido Comunista Italiano (1926). El gobierno de Mussolini lo persiguió y llevó a prisión en 1926, donde escribió numerosos ensayos y artículos que fueron recogidos en la obra <i>Cuadernos de la cárcel</i>.</p>

  <p>En sus escritos realiza una aplicación del método del materialismo histórico que permitió dar una explicación de la sociedad del siglo XX, llama a que se revisen los elementos teóricos de acuerdo con la realidad, a fin de que no se apliquen de manera dogmática.</p>

  <p>Gramsci marcó la importancia de dejar de lado los elementos dogmáticos para explicar la realidad y utilizar los elementos teóricos a partir de la realidad y no la realidad desde la propuesta teórica (Aurell y Burke. <i>Entre siglos</i>, p. 275).</p>

  <p>Realizó una reflexión sobre los postulados del marxismo, en la que criticó el determinismo económico que imperaba en la explicación de los fenómenos históricos y sociales. De manera que presentó elementos para romper con el dogmatismo y la aplicación arbitraria de la propuesta del materialismo histórico.</p>

  <p>Las ideas de Gramsci impactaron de manera que influyen en las explicaciones de los trabajos históricos: critica la visión de la historia del historicismo, aunque mantiene la postura del propósito de la historia de Benedetto Croce: la libertad como una herramienta contra el poder y la opresión.</p> 

  <p>Gramsci considera que la historia tiene la finalidad de explicar los acontecimientos presentes, así como mostrar el camino a la toma de conciencia para impulsar la lucha por la libertad en la construcción de una sociedad alternativa al capitalismo, en la que destaque el desarrollo de la libertad. La historia se basa en la búsqueda del presente, por lo que el pasado por sí mismo no tiene un objetivo, así trabaja la historia de Italia en la que explica el fenómeno del fascismo, el auge conservador, esto es buscar categorías de análisis para explicar la situación de su país. De manera que hace uso de conceptos como <b>hegemonía, bloque histórico, grupo dirigente</b>, entre otros que buscan presentar nuevos problemas en la sociedad y en la historia (París. <i>Antonio Gramsci</i>, p. 258).</p>

  <p>El papel del historiador, así como el de todos los intelectuale,s consiste en que dejen de servir a los intereses del sistema esto es dejen de ser «intelectuales orgánicos¨, buscando los elementos para explicar la situación de los grupos dominantes a fin de darlas a conocer a la sociedad para prevenir, decidir y actuar en favor de la construcción de una sociedad diferente. Veamos una cita tomada del primer Cuaderno de la Cárcel:</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«La unidad histórica de las clases dirigentes se da en el Estado y su historia es esencialmente la historia de los Estados y de los grupos de Estados. Pero uno no se debe creer que esa unidad sea puramente jurídica y política, aún cuando esa forma de unidad tiene su importancia y no solamente formal: la unidad histórica fundamental, por su concreción, es el resultado de las relaciones orgánicas entre Estado o sociedad política y sociedad civil.</p>
    <p>Las clases subalternas, por definición, no están unificadas y no pueden unificarse mientras no puedan convertirse en «Estado»: Su historia, por lo tanto, se da trenzada con la de la sociedad civil, es una función disgregada y discontinua de la historia de la sociedad civil, y, por ese intermedio, de la historia de los Estados o grupos de Estados</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">Gramsci, <i>Il Rissorgimento</i>, p. 249</footer>

  <p>Siguiendo la propuesta de temas, así como del uso de categorías en Italia se desarrollaron los trabajos de Rosario Villari.</p>

  <p><i>La revuelta antiespañola en Nápoles. Los orígenes</i> (1585-1647) y Emilio Sereni quién trabaja la agricultura y el paisaje desde la perspectiva del materialismo histórico (Aurel y Burke, <i>De entre siglos</i>…, p. 276)</p>

  <p>Otra de las vertientes emanada de los postulados del materialismo histórico se presentó en la historia cuantitativa.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>