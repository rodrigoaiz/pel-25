<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La Segunda Guerra Mundial. Desarrollo y consecuencias</h2>
  <?php
  renderImage('hu2-u2-cumbre.webp','Cumbre de Yalta 1945 con Churchill, Roosevelt y Stalin. Imagen de Jarekt.', 'https://commons.wikimedia.org/wiki/File:Yalta_summit_1945_with_Churchill,_Roosevelt,_Stalin.jpg','Wikimedia Commons.');
 ?>
 <p>Como podrás deducir conforme a los temas revisados, el periodo de 1918 a 1933 fue solo el preámbulo de un nuevo conflicto a escala mundial, mucho más devastador que la Primera Gran Guerra que, según Eric Hobsbawm, no había resuelto prácticamente nada. Por el contrario, la derrota de Alemania y las duras condiciones impuestas a ese país por el Tratado de Versalles fueron un nuevo motivo de conflicto. Aunado a ello, la crisis económica y el miedo a la Revolución socialista alimentaron los movimientos fascistas, que llegaron al poder en Alemania, Italia y otras naciones entre las que destacan Austria y España. Austria, pues en esa nación se instauró un régimen conservador que simpatizaba con el nacionalsocialismo alemán. España, pues se considera que ese país fue el escenario para los primeros ensayos de la guerra.</p>
 <h3>Antecedentes de la II Guerra Mundial</h3>
 <p>Podemos entender los antecedentes como avisos o señales de que se avecinaba un conflicto, prácticamente ineludible. El ascenso del fascismo en Italia y del régimen nazi en Alemania pueden considerarse antecedentes, pues en ambos casos se pretendía una expansión territorial. Para los alemanes, esto resultaba necesario en un mundo aún “repartido” entre Inglaterra y Francia, fundamentalmente. Aunque, de acuerdo con Parker, (1978) fue Japón quien inició la oleada expansionista que detonó la Segunda Guerra.</p>
 <h4>El expansionismo japonés</h4>
 <p>Antes de iniciar revisa el siguiente video a manera de introducción al tema.</p>

 <?php
  renderVideoIframe('TqqCQImgNUA', 'Expansionismo japones');
  ?>
  <p>En el extremo Oriente, Japón carecía de los recursos necesarios para dar forma a una economía industrial moderna, así que desde 1894 había logrado extender sus dominios hacia Corea y Taiwan. En 1931 emprendió la invasión de Manchuria, al Norte de China, para proveerse de carbón, acero y productos agrícolas; propició la fundación de un estado satélite de Japón (Manchukuo) Observa el mapa, y verás la gran extensión que lograron ya hacia 1939. Japón estaba interesado, asimismo, en los recursos naturales procedentes de dominios británicos y holandeses (hule y petróleo de Malasia, Birmania) y pronto buscarían la forma de apropiarse de ellos.</p>
  <p>Esta tendencia expansionista fue protagonizada por los militares, que lograron desplazar al gobierno civil en Japón.</p>
  <p>“El ejército impuso un gobierno autoritario, reprimiendo el disenso, organizando la producción, glorificando el honor marcial y el sacrificio y fomentando las ideas acerca de los orígenes sagrados del emperador y del pueblo japonés” (Wiesner-Hanks 2015:37).</p>
  <p>Un bando particularmente beligerante logró tomar el control e imponer un plan de Renovación Política, mediante el cual se buscaba incrementar el armamento, apoyar más a los gobiernos títere que impusieron en China, controlar la educación (imponiendo una visión tradicionalista que destacaba la obediencia al Emperador, la lealtad al ejército). Ese gobierno estableció alianzas con Alemania y con Italia, mediante el Pacto Anticomintern (contra el comunismo) y posteriormente la Alianza Tripartita, que reconocía a Japón como la potencia que dominaría el Sudeste Asiático.</p>
  <?php
  renderImage('hu2-u2-mengjiang.webp','Mengjiang. Imagen de KajenCAT.', 'https://commons.wikimedia.org/wiki/File:Mengjiang_map_1939.svg','Wikimedia Commons.');
  ?>
  <h3>La Gran Italia</h3>
  <p>Italia planeaba una expansión sobre África Nororiental (Etiopía, Somalia y Libia) para dar forma al proyecto de la Gran Italia, el sueño del dictador Benito Mussolini, que estaba al frente del gobierno desde 1922. Es importante recordar que Italia ya tenía posesiones en África, incluso antes de la I Guerra Mundial; pero en 1935, las tropas de Mussolini avanzaron sobre Etiopía; esta se convirtió en parte de la Gran Italia en mayo de 1936. Observa el mapa, donde se muestran las posesiones italianas en Africa (Libia, en la parte central) Y Eritrea/ Etiopía al Noreste.</p>
  <?php
  renderImage('hu2-u2-italia.webp','Imperio colonial de Italia. Imagen de Barjimoa. ', 'https://commons.wikimedia.org/w/index.php?curid=72180805','Wikimedia Commons.');
 ?>

  <p>La Sociedad de Naciones sancionó a Italia, obstaculizando sus exportaciones hacia Inglaterra y Francia, principalmente. Estas sanciones no consigueron frenar las ambiciones de Mussolini, pero además le movieron a buscar aliados en Alemania, con quien firmó un Tratado de Amistad en 1936. Este fue el inicio de una alianza: el Eje Roma-Berlín.</p>
  <h4>El espacio vital para Alemania</h4>
  <p>Por otro lado, Hitler (quien había llegado al poder en 1933) aspiraba a extender el imperio alemán hacia Europa del Este, conquistando el “espacio vital” que le había sido negado hasta ese momento. Asumiendo una posición defensiva con respecto a Francia, Hitler emprendió la remilitarización de Renania, violando uno de los puntos del Tratado de Versalles y cerrando el paso a Francia en caso de un inminente conflicto. Observa el mapa e identifica por qué para Francia era importante la desmilitarización de Renania.</p>
    <img class="mx-auto" src="<?php echo PATH_IMAGES . 'hu2-u2-europa.webp'; ?>">
    <p>Alemania encontró coincidencias con el régimen militarista japonés y firmó, en 1936, el Pacto Anticomintern que ya hemos mencionado, cuyo único propósito era la desintegración comunista. Esta alianza agrupaba a ambas naciones en contra de la Unión Soviética; Italia se sumó un año más tarde. Meses después Hitler firmó un tratado de no agresión con la URSS (el Pacto Molotov- Ribentropp, de 1938). El historiador Eric Hobsbawm se pregunta el por qué de esta aparente contradicción y afirma que Hitler solo pensaba en desmovilizar a la URSS para concentrarse en una primera ofensiva contra Francia e Inglaterra, y posteriormente ocuparse de la expansión hacia Europa del Este. Los acontecimientos posteriores así parecen confirmarlo.</p>
    <p>En 1938, Hitler inició el proceso de expansión previo a la guerra. Primero, de manera diplomática con la anexión de Austria, que tenía un régimen ultraderechista similar al fascismo; una mayoría de votantes aceptó la anexión mediante un referéndum. Anticipando que Hitler trataría de anexarse también Checoslovaquia, los gobiernos francés y británico firmaron el Acuerdo de Munich, mediante el cual se permitiría que Hitler invadiera parte de ese país (la región de los Sudetes) a cambio de no llevar su expansión más lejos. Los alemanes aceptaron el acuerdo, pero lo desconocieron más tarde e invadieron la totalidad de Checoslovaquia. Estaba visto que Hitler no se detendría ante nada para continuar su expansión.</p>
    <h4>La participación de Alemania e Italia en la Guerra Civil Española</h4>
    <p>En esta Europa polarizada entre los partidarios del fascismo y los del comunismo, una coalición de partidos y organizaciones de izquierda -el Frente Popular- llegó al poder en España mediante un proceso electoral, en enero de 1936, y se instala un gobierno republicano. El General Francisco Franco desconoció a este gobierno democráticamente electo y le declaró la guerra en el mes de julio; se sumaron a él algunos generales y regimientos en Marruecos, San Sebastián, Toledo…Inicia así la Guerra Civil Española, una lucha dentro de ese país entre los partidarios de la extrema derecha (muy cercana al fascismo) y el gobierno republicano con tendencia de izquierda, apoyado por los partidos republicanos y de izquierda, así como las organizaciones de trabajadores. De uno y otro bando se solicitó el apoyo internacional; Francia tenía en ese momento un gobierno de izquierda, similar al que se había instalado en España. No obstante, el gobierno francés apoyó a los republicanos de manera discreta e indirecta, lo mismo que la Unión Soviética. Por el contrario, el bando sublevado de Franco logró contar con el apoyo de Alemania e Italia, quienes enviaron tropas a combatir en España. Los republicanos no pudieron resistir mucho tiempo a los ejércitos invasores.</p>
 <?php
  renderImage('hu2-u2-s25.webp','Imagen de Hohum.', 'https://commons.wikimedia.org/w/index.php?curid=1103903','Wikimedia Commons.');
 ?>
    <p>La Guerra Civil Española dio oportunidad a Hitler para comprobar la eficacia de su tecnología militar, producto de la activación de la industria de guerra desde su llegada al poder. La intervención italiana y alemana en este conflicto inclinó la balanza hacia el bando ultraderechista de Franco, quien instauró en España una dictadura; se inició una intensa y despiadada persecución en contra de los republicanos y de los opositores a Franco en general. Muchos de ellos tuvieron que refugiarse en otros países (México recibió entonces a miles de refugiados españoles, que huían de la persecución franquista).</p>
  <?php
  renderImage('hu2-u2-emigracion.webp','En 1939 arribó a este puerto de Veracruz, procedente de Séte, Francia, el barco “Sinaia” con 1681 exiliados españoles, cuyas aportaciones a la vida productiva, la ciencia, las artes y la cultura, contibuyeron al engrandecimiento de la nación mexicana, en ese entonces gobernada por el Gral. Lázaro Cárdenas del Río. Imagen de Tyrv.', 'https://commons.wikimedia.org/wiki/File:Gracias_M%C3%A9xico_-_Monumento_a_los_exiliados_espa%C3%B1oles_en_M%C3%A9xico_en_Veracruz.jpg','Wikimedia Commons.');
 ?>
 <p>A pesar de que Inglaterra y Francia impulsaron ciertas medidas para prolongar la pacificación, Hitler prosiguió con su plan expansionista hacia el Este e invadió Polonia en septiembre de 1939. En respuesta, el Primer Ministro británico Neville Chamberlain y Albert Lebrun, quienes presidían el gobierno en Inglaterra y Francia, respectivamente declararon la guerra a Alemania, el 3 de septiembre de ese mismo año. Neville Chamberlain se dirigió a la población británica en estos términos: “este hombre nunca renunciará a su práctica de usar la fuerza para lograr lo que quiere. Él sólo puede ser detenido por la fuerza y nosotros y Francia estamos hoy dispuestos, en cumplimiento de nuestras obligaciones, a ir en ayuda de Polonia, que está resistiendo valientemente el malvado y no provocado ataque a su pueblo”.</p>
 <p>Los hombres fueron llamados a movilizarse, ya sea para el combate o para mantener la actividad productiva.</p>
      <?php ob_start(); ?>
  <p>Hagamos una pausa para resolver el siguiente reto y reforzar nuestros aprendizajes.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a1', "Antecedentes de la segunda guerra mundial", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
