<?php

include '../../../config.php';
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
  <h2>🎓La Conferencia de Berlín y la dominación colonial imperialista en África, Asia y América Latina</h2>

  <p>La competencia entre las transnacionales desató una fuerte lucha por controlar las materias primas, la mano de obra y los mercados a lo largo del mundo. Los EUA buscaron imponerse como la principal potencia en el continente americano, Japón en el Lejano Oriente, mientras que Alemania y Francia querían controlar Europa a costa de Inglaterra; además de ganar presencia colonial en África y Asia. El revolucionario ruso, Lenin, expuso en su libro “Imperialismo, fase superior del capitalismo” (1917) que, entre la Segunda Revolución Industrial, el surgimiento de los monopolios y el colonialismo existe una estrecha relación y que forman parte de un solo fenómeno: el imperialismo capitalista.</p>

  <?php
  renderImage('señor-libertad.webp', 'Imagen de señorlibertad', 'https://commons.wikimedia.org/wiki/File:Cartoon_depicting_Leopold_2_and_other_emperial_powers_at_Berlin_conference_1884.jpg', 'Wikimedia Commons');
  ?>

  <h3>Cinco características del imperialismo capitalista según Lenin</h3>
  <ul class="ul-disc">
    <li>La concentración de la producción y del capital que conduce a la creación de los monopolios, los cuales desempeñan un papel decisivo en la vida económica.</li>
    <li>La fusión del capital bancario con el capital industrial para crear el capital financiero y la oligarquía financiera.</li>
    <li>La exportación de capitales adquiere una importancia mayor que la exportación de mercancías.</li>
    <li>La formación de asociaciones internacionales monopolistas de capitalistas, las cuales se reparten el mundo.</li>
    <li>La terminación del reparto territorial del mundo entre las potencias capitalistas más importantes.</li>
  </ul>
  <p><em>Referencia: Lenin, V.I.: El imperialismo, fase superior del capitalismo, Ed. Anteo, 1973</em></p>

  <p>Parafraseando a Lenin, podemos concluir que los bancos y la industria se fusionan para crear grandes concentraciones de capitales y fortalecer los monopolios de producción. Estos capitales se utilizan para invertir y adquirir bienes y servicios, pero especialmente para imponer su poder a lo largo del mundo mediante la adquisición de tierras, minas, ferrocarriles, puertos, bancos, entre otros. Los capitalistas colaboran entre ellos para hacerle competencia a los pequeños, medianos y grandes productores y se alían con los gobiernos de las potencias para obtener colonias. La alianza crea a su vez una “oligarquía financiera”: es decir, un pequeño grupo de superricos dominan el dinero y el capital gracias a su control del capital industrial y capital bancario, así por sus alianzas con los políticos y su presencia en el gobierno.</p>

  <p>Hagamos una pausa y veamos el siguiente recurso para aprender de una forma divertida algunos de los conceptos más importantes sobre el imperialismo.</p>
  <?php
  // ¿Qué es el capitalismo?
  renderVideoIframe('qdK342uhheM', '¿Qué es el capitalismo?');
  ?>

  <img class="mx-auto" src="../../assets/img/mapa-colonias.webp" alt="mapa de colonias">

  <h3>La Conferencia de Berlín</h3>
  <p>En representación de los intereses empresariales, los gobiernos de los principales países europeos se reunieron entre 1884-1885 en la Conferencia de Berlín para acordar el reparto de África; la consecuencia fue que un continente con poca presencia colonial en apenas 30 años fue colonizado en más del 90% quedando solamente dos países libres: Etiopía y Liberia. Gran Bretaña y Francia llevaron la mayor tajada del pastel africano, mientras que la pequeña Bélgica se apoderó de la región más rica: El Congo.</p>
  <p>La colonización de Asia resultó más compleja, debida a la presencia de antiguos imperios como el chino, persa y otomano. No obstante, mediante diferentes estrategias políticas, económicas y militares adquirieron presencia Inglaterra, Francia, Rusia, Japón y los Estados Unidos en China, Indochina (hoy Laos, Camboya y Vietnam), Afganistán, Birmania, Pakistán, entre otros.</p>
  <p>América Latina que, casi en su totalidad, había obtenido su independencia de España y Portugal en el siglo XIX, estuvo primero bajo control del capital inglés y francés, para después vivir la creciente presencia del capital estadounidense. Tras la “Conquista del Oeste”, que implicó la anexión de gran parte del territorio mexicano en 1848, los Estados Unidos adquirieron en 1867 Alaska de Rusia y, luego en el año 1898, se enfrentaron con España para obtener el control de Cuba, Puerto Rico y las Filipinas; en el mismo año se apoderó de Hawái y separó a Panamá de Colombia para construir el canal transoceánico. En las décadas siguientes se hizo del control del Caribe y de Centroamérica mediante la inversión de capitales, su presencia militar y el apoyo incondicional a gobiernos corruptos y colaboracionistas.</p>

  <?php
  renderImage('batalla-Ulundi-imagen-Hohum.webp', 'La batalla de Ulundi. Imagen de Hohum', 'https://commons.wikimedia.org/wiki/File:The_burning_of_Ulundi.jpg', 'Wikimedia Commons');
  ?>

  <p>En Europa, la competencia tecnológica y la lucha por el dominio mundial generaron las condiciones para un conflicto armado de gran magnitud. Para evitar una guerra se crearon alianzas entre las naciones europeas, se celebraron varias conferencias de paz y se fundó la Corte Internacional de Justicia en La Haya, Países Bajos. El resultado fue que durante aproximadamente 40 años no hubo enfrentamientos bélicos entre las potencias, al mismo tiempo que los rivales europeos se armaban hasta el diente con nuevas armas: ametralladoras, buques de acero, cañones, ejércitos profesionales, entre otros. Por ello, este periodo se conoce en el continente europeo como la época de la “Paz Armada” (1870-1914).</p>

  <?php
  renderImage('carnicero.webp', 'Imagen de carnicero', 'https://commons.wikimedia.org/wiki/File:Elephant_and_Mule_Battery_(%22Dignity_%26_Impudence%22)_WDL11496.png', 'Wikimedia Commons');
  ?>

  <p>Entre 1882 y 1907, se formaron dos bloques político-militares en Europa: por un lado la “Triple Alianza” (1882) conformada por Alemania, Austria-Hungría e Italia y, por otro lado, la “Triple Entente” (1907) entre Francia, Inglaterra y Rusia. Esta última alianza fue el primer acuerdo internacional entre Francia e Inglaterra, dos archienemigos históricos, y se dio por temor al creciente poder económico-político de Alemania.</p>
  <p>El militarismo de las potencias europeas se convirtió en una bomba de tiempo, cuando Alemania, Austria-Hungría y Rusia participaron en los conflictos de la península balcánica. En esta región que comprende Grecia, Macedonia, Albania, Bosnia, Croacia, Eslovenia, Montenegro, Serbia, Rumania, Bulgaria y la parte occidental de Turquía surgió a finales del siglo XIX un movimiento nacionalista que pretendía establecer un Estado nacional (“Yugoslavia”) para los pueblos eslavos, reuniendo a Serbia, Bosnia-Herzegovina, Eslovenia y Croacia. Esta pretensión implicaba que estos pueblos se independizaran de Austria-Hungría y del Imperio turco-otomano. Para contrarrestar esto, los austriacos se aliaron con Rusia y acordaron que los primeros anexaran Bosnia-Herzegovina y que los rusos tendrían acceso al estrecho del Bósforo (espacio que conecta el Mar Negro con el Mediterráneo).</p>
  <p>Una serie de conflictos fronterizos, el imperialismo de Austria-Hungría y de los turcos-otomanos, así como los intereses de los países que integran la región dio como resultado algunas guerras conocidas como las “Guerras Balcánicas”. El resultado de estas fue el aumento de la conflictividad entre Austria-Hungría lo que culminó el 28 de junio de 1914 en el asesinato del archiduque Francisco-Fernando de Habsburgo, heredero al trono del imperio austrohúngaro en Sarajevo, capital de Bosnia-Herzegovina por parte de un grupo terrorista serbio.</p>

  <h3>Las raíces del imperialismo</h3>
  <p>Antes de continuar vamos a reforzar nuestros aprendizajes con el siguiente reto.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que mejor responda: ¿Cuál fue un objetivo principal de la Conferencia de Berlín?</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a1', "Ir a la actividad", $ActividadContent);
  ?>

  <?php
  renderImage('francia-colonias.webp', 'Colonias francesas', 'https://commons.wikimedia.org/wiki/File:Seine-Inf%C3%A9rieure_-_Somme_-_Colonies_-_Album_Artistique_de_la_France_%26_de_ses_Colonies_(1900).jpg', 'Wikimedia Commons');
  ?>

  <?php
  renderImage('imperialismo-colonial.webp', 'Imagen de Causas, desarrollo y consecuencias del imperialismo colonial del Siglo XIX', 'https://www.profesorfrancisco.es/2013/02/el-imperialismo-colonial.html', 'Wikimedia Commons');
  ?>

  <h3>El colonialismo en América Latina</h3>
  <p>Con la información hasta aquí obtenida realicemos el siguiente reto.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que mejor responda: ¿Qué potencia tuvo un creciente control en América Latina tras el siglo XIX?</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a2', "Ir a la actividad", $ActividadContent);
  ?>

  <h3>El colonialismo</h3>
  <p>Es momento de participar en el siguiente foro</p>
  <?php ob_start(); ?>
  <p>Comparte tus opiniones sobre el impacto del colonialismo en América Latina.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a3', "Ir a la actividad", $ActividadContent);
  ?>


<h3>Bibliografía:</h3>

<ul class="ul-disc">
  <li>Brom, J. (2007). <em>Esbozo de Historia Universal</em>. México: Grijalbo.</li>
  <li>Delgado de Cantú, G. (2006). <em>Historia Universal: de la era de las revoluciones al mundo globalizado</em>. México: Pearson.</li>
  <li>Lamoneda Huerta, M. (2013). <em>Historia Universal</em>. México: Macmillan.</li>
  <li>Pastor, M. (2006). <em>Historia Universal</em>. México: Santillana.</li>
</ul>


</section>



<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>