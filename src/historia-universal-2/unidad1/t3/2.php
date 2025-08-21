<?php 
include '../../../config.php';// Ajustar esto según tu estructura
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);

ob_start();
?>

<section>
  <h2>La militarización y la carrera armamentista</h2>

  <p>
    Hemos visto que, durante el periodo de “Paz Armada”, comprendido entre 1871 y 1914, las rivalidades entre los imperios se manifestaron en la formación de alianzas. Recordemos que Austrohungría formaba parte de la Triple Alianza junto con Alemania e Italia. Por otro lado, Francia y Rusia se agruparon en la Entente Cordiale. A su vez, Inglaterra era aliado de Francia. Esto implicaba que, en caso de agresión en contra de algún integrante de la Alianza, entrarían los demás en su defensa.
  </p>

  <p>
    Asimismo, la época de la Paz Armada se caracterizó por un incremento del gasto (y del poderío) militar; una competencia por poseer el mejor armamento y el ejército más numeroso. Los acorazados británicos comenzaron a surcar los mares, y los alemanes respondieron construyendo los suyos.
  </p>

    <?php 
  renderImage('denarios.webp','https://commons.wikimedia.org/wiki/File:HMS_Dreadnought_1906_H61017.jpg' , 'Imagen de Denarios');
  renderImage('hohum.webp', 'https://commons.wikimedia.org/wiki/File:Hochseeflotte_2.jpg','Imagen de hohum');
  ?>

  <p>
    Los alemanes desarrollaron para esta guerra las armas químicas, tales como el fosgeno y el gas mostaza; introdujeron los lanzallamas y los morteros de infantería. Comenzaron también con la utilización de tanques (aunque para entonces eran aún lentos y pesados) y submarinos. El avión de combate también fue una innovación de esta Guerra; notarás que no se parece en mucho a los grandes bombarderos que serían fabricados más adelante.
  </p>

  <?php 
  renderImage('fae.webp','https://commons.wikimedia.org/wiki/File:Airplane,_airport,_First_World_War,_Gerrman_brand,_biplane_Fortepan_69966.jpg', 'Imagen de fae');
  renderImage('1970geminis.webp', 'https://commons.wikimedia.org/wiki/File:Maschinengewehr_08_1.jpg#file','Imagen de 1970géminis');
  ?>



  <p>
   El teléfono, telégrafo, el radio, inventos que caracterizaron la segunda Revolución Industrial, fueron adaptados para usos militares; el ferrocarril permitió el traslado masivo de tropas y de equipamiento militar.
  </p>

  <p class="text-center font-bold">
    Te invitamos a revisar el siguiente video para complementar tus conocimientos acerca de las tecnologías desarrolladas en la primera guerra mundial.
  </p>

  <?php
  // Tecnología de guerra
  renderVideoIframe('x6BKHhqa6fc', 'Tecnología de guerra');
?>

  <p>
   La posibilidad de una guerra era visible en esta carrera armamentista; pero la rivalidad entre las potencias también se materializó abiertamente en diversos momentos: un conflicto entre Alemania y Francia por el control de Marruecos en 1905 y 1911; la amenaza de una guerra de carácter preventivo, ya cerca de 1913. Todo parecía indicar que el conflicto bélico era inminente; sólo hacía falta un detonante o pretexto. Esto fue lo que ocurrió el 28 de junio de 1914, cuando un nacionalista serbio- bosnio (Gavrilo Princip) asesinó al archiduque Francisco Fernando, heredero al trono de Austrohungría. Este asesinato en Sarajevo fue la chispa que encendió las tensiones acumuladas durante varias décadas. En respuesta al asesinato, el 28 de julio Austrohungría declaró la guerra a Serbia. Por su parte el zar de Rusia, Federico II, salió en defensa de Serbia convocando a movilización general de sus tropas el 30 de julio. El sistema de alianzas ocasionó que el conflicto escalara en cuestión de días. De un bando la Triple Alianza, con Austrohungría y Alemania (Italia decidió mantenerse neutral, y a la postre se sumaron Turquía y Bulgaria); del otro, la Triple Entente agrupando a Rusia, Francia e Inglaterra.
  </p>
  <p>
    En aquel entonces, nadie imaginaba siquiera que esta confrontación se prolongaría por cuatro años; los combatientes marcharon a la batalla con entusiasmo y espíritu patriótico. Nos dice Hobsbawm que “en 1914, los pueblos de Europa, aunque fuera sólo durante un breve período, acudieron alegremente para matar y para morir. No volverían a hacerlo después de la primera guerra mundial”.
  </p>

  <h3>Factores que desencadenan la Primera Guerra Mundial</h3>
  <p>
    Revisemos el siguiente reto para reforzar los conocimientos logrados hasta aquí:
  </p>

  <?php ob_start(); ?>
    <p>Selecciona las opciones correctas relacionadas con los factores que desencadenaron la Primera Guerra Mundial.</p>
  <?php 
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a2', "Factores que desencadenan la Primera Guerra Mundial", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
