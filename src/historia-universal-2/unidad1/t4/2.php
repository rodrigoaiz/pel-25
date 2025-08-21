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
  <h2>Una revolución demográfica y social</h2>
  
  <p>Durante la Belle Époque la población aumentó considerablemente. En 1800 en toda Europa había 180 millones de personas, para 1900 la población alcanzó los 400 millones de personas. En una ciudad industrial como Londres, la población pasó de 900 mil a 4.7 millones de habitantes entre 1800 y 1900, más del doble. A pesar del aumento de la población, se redujo la tasa de fertilidad, en parte gracias a la novedad de los métodos anticonceptivos y a un cambio en la mentalidad: los hijos dejaron de ser un alivio para las familias necesitadas de mano de obra.</p>
  
  <p>Dentro de los cambios que provocó la segunda revolución industrial podemos afirmar que fue la burguesía la clase social que más beneficios obtuvo, logrando reemplazar finalmente a la envejecida aristocracia que cada vez perdía más poder desde el siglo XVIII. Con el aumento de la población vino la necesidad de una mayor administración pública e instituciones, la clase media se empleará en la burocracia.</p>
  
  <?php
  renderImage('señor-nostálgico1.jpg', 'Burócratas trabajando. Imagen de señor nostálgico', 'https://commons.wikimedia.org/wiki/File:Burgers_bij_tafels_met_daarachter_personeel_met_schrijfmachines_en_formulieren,_Bestanddeelnr_255-9492.jpg', 'Wikimedia Commons');
  ?>

  <p>También vemos avances en el alcance de los derechos de la clase obrera y su participación en la democracia. Por ejemplo, para 1860 todos los hombres adultos podían votar en Francia. Y dando ejemplo de avance en la democracia, Finlandia y Noruega otorgaron el derecho al voto a las mujeres en 1906 y 1913, respectivamente.</p>
  
  <p>La sociedad de la Belle Époque es, en esencia, una sociedad urbana. Una sociedad que, a diferencia de la primera mitad del siglo XIX, tiene acceso a la educación, lee, conoce y ejerce sus derechos y, sobre todo, consume.</p>
  
  <p>La vista de las ciudades se transformó; los edificios verticales albergaban a más de una familia nuclear. Las relaciones sociales se volvieron superficiales pues se rompió la unidad de los hogares campestres, los trabajadores recorrían mayores distancias, las mujeres se incorporaron al mercado laboral y los niños fueron reconocidos como tales, surgió la necesidad de formarlos académica y laboralmente. Esto se acompañó de una fuerte explotación infantil, los niños tenían las mismas tareas que los mayores desde los 5 o 6 años.</p>
  
  <?php
  renderImage('tlama04-1.jpg', 'Explotación infantil. Imagen de tlama04', 'https://commons.wikimedia.org/wiki/File:W._A._Rogers,_%E2%80%9COne_Reason_for_the_Child_Labor_Problems,%E2%80%9D_New_York_Herald.gif', 'Wikimedia Commons');
  ?>

  <p>El aumento de la población y su concentración en las ciudades es consecuencia de una revolución agrícola y una industrial. En este sentido, se mantuvo la explotación a los trabajadores, algo en lo que coincidían los liberales y los conservadores desde los comienzos del siglo XIX.</p>
  
  <p>Respecto a los trabajadores hay que decir que aumentó su capacidad de consumo, pero se mantuvo la situación de miseria en la que vivían desde antes.</p>
  
  <p>La industrialización y la consecuente migración masiva a las ciudades pronto provocó el abarrotamiento de estas. Buena parte de la población urbana se ubicó en las periferias en donde no había las mismas condiciones que en el centro. En Londres la mitad de la población vivía en condiciones de hacinamiento, la higiene era un problema, muchas personas no podían tener ropa limpia y esto provocaba enfermedades como el cólera o la tuberculosis. Esto se puede apreciar en la novela “La gente del abismo” de Jack London.</p>
  
  <?php
  renderImage('RaboKarbakian1.jpg', 'Imagen de RaboKarbakian', 'https://commons.wikimedia.org/wiki/File:People_of_the_Abyss-0011.jpg', 'Wikimedia Commons');
  ?>

  <p>Los hombres, niños y mujeres de la periferia trabajaban para la gente del centro, algunas mujeres se veían obligadas a ejercer la prostitución. Las condiciones de la periferia llamaron la atención y surgieron actos de caridad, las autoridades atendieron la situación y se mejoraron los servicios públicos. Poco a poco mejoró la situación de los menos privilegiados.</p>
  
  <p>Los nuevos productos impactaron la vida de la clase trabajadora, comenzando por los medios de transporte. La luz eléctrica permitió que las jornadas laborales no dependieran del sol. Las comidas se hacían a partir de la jornada laboral, tres veces al día. También surgió la comida rápida en los puestos para alimentar a aquellos obreros que no llevaban comida desde casa. Otro aspecto interesante en la vida de las urbes es el anonimato, en los pueblos la gente se conocía, pero en las ciudades no, las personas vivían en una situación de soledad y desarraigo.</p>
  
  <p>La clase trabajadora logrará mayor acceso a la educación y mejorará su situación económica, de tal forma que podrán participar en las actividades de ocio. Sin embargo, se mantendrá en ciertos barrios de las ciudades, en donde se notará un gran contraste respecto a las clases altas.</p>
  
  <p>Revisa el siguiente video para comprender mejor lo que sucedió durante este periodo.</p>

  <?php
  // Cultura de masas
  renderVideoIframe('4RSB0OazcFs', 'Cultura de masas');
?>

  <p>Reforcemos algunos puntos importantes mencionados al momento con el siguiente reto.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que mejor responda: ¿Qué cambio social destacó durante la Belle Époque?</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a2', "Ir a la actividad", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>