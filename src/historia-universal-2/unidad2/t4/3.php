<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Política exterior de Estados Unidos hacia Latinoamérica</h2>
  <p>La política exterior estadounidense en este periodo también fue criticada por su carácter intervencionista y su enfoque en la defensa de los intereses económicos y estratégicos de Estados Unidos, a menudo a expensas de la soberanía y el desarrollo autónomo de los países latinoamericanos. Estas intervenciones y el dominio económico generaron tensiones y resentimiento en la región, alimentando un sentimiento antiimperialista y nacionalista en muchos países latinoamericanos.</p>
  <p>Estados Unidos buscaba mantener y expandir su influencia en la región, asegurar acceso a recursos naturales y mercados, y evitar cualquier amenaza percibida a su seguridad y hegemonía en el hemisferio occidental.</p>
  <?php
  renderImage('hu2-u2-impamericano.webp','Imperialismo norteamericano. Imagen de fae. ', 'https://commons.wikimedia.org/wiki/File:The_pull_of_the_Monroe_magnet_-_Kep._LCCN2011649618.jpg','Wikimedia Commons.');
  ?>
  <p>La Doctrina Monroe de 1823, establecía que los Estados Unidos consideraban a América Latina como su esfera de influencia y cualquier intervención europea sería vista como una amenaza. Durante este periodo, el Corolario Roosevelt (1904) reforzó la postura de Estados Unidos al afirmar su derecho a intervenir militarmente en los países latinoamericanos para proteger sus intereses.</p>
  <p>Estados Unidos intervino militarmente y ocupó varios países de América Latina durante este periodo. Por ejemplo, ocupó Haití en 1915 y mantuvo una presencia militar allí hasta 1934. También intervino en Nicaragua y República Dominicana, buscando asegurar estabilidad política y proteger los intereses económicos estadounidenses.</p>
  <p>Estados Unidos empleó la diplomacia económica para ejercer influencia en la región. A través de préstamos, inversión y la imposición de políticas económicas favorables a sus intereses, Estados Unidos buscaba asegurar el acceso a los recursos naturales y mercados de América Latina.</p>
  <p>A partir de la década de 1930, se implementó la política del Buen Vecino, que buscaba mejorar las relaciones con los países latinoamericanos y evitar intervenciones militares directas. Se promovieron acuerdos comerciales y culturales, se fomentó la cooperación y se adoptó una retórica menos agresiva en la relación bilateral.</p>


   <?php
  renderImage('hu2-u2-doctrina.webp','Doctrina Monroe. Imagen de Laichena.', 'https://commons.wikimedia.org/wiki/File:Monroe_doctrine.jpg','Wikimedia Commons.');
  ?>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
