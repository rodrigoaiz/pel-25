<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La Revolución Rusa: Orígenes, Actores Principales y Desarrollo</h2>
  <p>La Revolución Rusa de 1917 es un acontecimiento de gran trascendencia en la historia moderna.
     Este proceso revolucionario no sólo transformó radicalmente la sociedad rusa, sino que también tuvo un impacto global que perdura hasta nuestros días.</p>
  <h3>Antecedentes y Crisis en la Rusia Zarista</h3>
  <p>Para comprender la Revolución Rusa, es fundamental examinar los antecedentes del régimen zarista.
     La Rusia del siglo XIX y principios del siglo XX era un país caracterizado por la autocracia del zar, el atraso económico y la opresión social. El zarismo, con su sistema político autocrático y represivo, había sumido al país en una profunda crisis. La servidumbre, un sistema de trabajo forzado que ataba a los campesinos a la tierra, persistió hasta 1861,
     lo que generó un alto grado de descontento entre la población rural.</p>
    <div class="mx-auto max-w-md">
    <?php 
    renderImage('hu2-u2-familia.webp', 'Familia imperial Rusa 1913. Imagen de Wolcott ' , 'https://commons.wikimedia.org/wiki/File:Russian_Imperial_Family_1913.jpg','Wikimedia commons.');
    ?>
    </div>
    <p>Además de los problemas económicos y sociales, la participación de Rusia en la Primera Guerra Mundial agravó la situación. La guerra desencadenó una creciente escasez de alimentos y provocó una carga insostenible en términos humanos y económicos.
         Los soldados rusos luchaban en el frente mientras sus familias sufrían en casa, lo que desencadenó un profundo descontento en la sociedad rusa.</p>
  <h4>Actores Principales de la Revolución Rusa</h4>
  <p>La Revolución Rusa involucró a una variedad de actores, cada uno con sus propios objetivos y agendas. Los tres grupos más influyentes fueron los liberales, los socialistas revolucionarios y los socialistas.
     A continuación, analizaremos cada uno de estos grupos y su papel en el desarrollo de la revolución.</p>

<?php
  $accordionItems1 = [
    [
      'title' => 'Los Liberales',
      'content' => '<p>Los liberales rusos, liderados por figuras como el Príncipe Lvov y Pavel Milyukov, buscaban una monarquía constitucional similar a la de los países europeos occidentales. Querían limitar el poder del zar y establecer un sistema parlamentario. Aunque tenían un papel importante en los eventos de febrero de 1917, su influencia disminuyó rápidamente cuando los bolcheviques tomaron el control.</p>'
    ],
    [
      'title' => 'Los Socialistas Revolucionarios',
      'content' => 'Este grupo estaba compuesto principalmente por intelectuales y campesinos. Los socialistas revolucionarios abogaban por una reforma agraria radical y la transferencia de tierras a los campesinos. A pesar de su papel en el gobierno provisional formado en febrero de 1917, su influencia disminuyó a medida que la Revolución avanzaba.'
    ],
    [
      'title' => 'Los SOcialistas (Bolcheviques y Mencheviques)',
      'content' => 'Los socialistas estaban divididos en dos facciones principales, los bolcheviques y los mencheviques. Aunque compartían raíces marxistas, diferían en su enfoque y objetivos. Los bolcheviques, liderados por Vladimir Lenin, abogaban por una revolución violenta y la toma del poder por parte de los trabajadores. Los mencheviques, por otro lado, abogaban por una revolución más gradual y una coalición con fuerzas liberales.'
    ],
   
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>
<div class="mx-auto max-w-md">  
<?php
renderImage('hu2-u2-lideres.webp','Líderes bolcheviques.  Imagen de fae.','https://commons.wikimedia.org/wiki/File:Bolshevik_leaders,_Tomsk_LCCN2014708681.tif',' Wikimedia Commons.')
?>
</div>
<p>La división entre bolcheviques y mencheviques fue fundamental en la Revolución Rusa. Aunque ambos grupos compartían raíces marxistas, tenían diferencias significativas en sus enfoques y estrategias.
 Los bolcheviques, bajo el liderazgo de Vladimir Lenin, abogaban por una revolución inmediata y violenta para derrocar al gobierno zarista y establecer un régimen socialista. Consideraban que la toma del poder por parte de los trabajadores era esencial y no debía posponerse.
 Lenin y sus seguidores creían en la necesidad de un partido centralizado y disciplinado para liderar la revolución. Esta facción defendía la idea de un Estado socialista centralizado y la planificación de la economía.</p>
<div class="mx-auto max-w-md">
<?php
renderImage('hu2-u2-lenin.webp','Lenin. Imagen de Foorgood.','https://commons.wikimedia.org/wiki/File:Vladimir_Lenin_giving_a_speech.jpg',' Wikimedia Commons.')
?>
</div>
<p>Por otro lado, los mencheviques, liderados por figuras como Julius Martov, abogaban por una revolución más gradual. Creían que era necesario formar una coalición con fuerzas liberales para derrocar al zar y establecer un gobierno provisional democrático.
 Los mencheviques también eran partidarios de un enfoque más descentralizado y democrático para el socialismo, en el que se permitiera la participación de múltiples partidos y se respetarán los derechos políticos y las libertades individuales. Estas diferencias ideológicas y estratégicas llevaron a una división profunda entre bolcheviques y mencheviques, lo que finalmente resultó en la toma del poder por parte de los bolcheviques en octubre de 1917.</p>
<h4>Eventos Clave de la Revolución Rusa</h4>
<p>La Revolución Rusa se dividió en dos fases principales: la Revolución de Febrero y la Revolución de Octubre.</p>
<p>Revolución de Febrero: Los eventos que llevaron a la caída del régimen zarista en febrero de 1917 comenzaron con manifestaciones masivas en Petrogrado (anteriormente San Petersburgo) debido a la escasez de alimentos y el descontento por la participación en la Primera Guerra Mundial. Los soldados se unieron a las protestas, y el régimen zarista se tambaleó.
 El zar Nicolás II abdicó, lo que dio lugar al establecimiento de un Gobierno Provisional liderado por Aleksandr Kerenski, un socialista revolucionario. Sin embargo, este gobierno provisional fue incapaz de abordar los problemas fundamentales de Rusia, y la situación política siguió siendo caótica.</p>
<p>Revolución de Octubre (Revolución Bolchevique): Los bolcheviques, liderados por Lenin, vieron la oportunidad de tomar el poder y avanzaron con su agenda revolucionaria. El 25 de octubre (según el calendario juliano utilizado en Rusia en ese momento, que corresponde al 7 de noviembre en el calendario gregoriano), los bolcheviques tomaron el control del Palacio de Invierno en Petrogrado y derrocaron al Gobierno Provisional. Este evento marcó el comienzo de la Revolución Bolchevique. Los bolcheviques tomaron el poder y establecieron un nuevo gobierno bajo el liderazgo de Lenin.</p>
<h4>Nacimiento de la Unión de Repúblicas Socialistas Soviéticas URSS</h4>
<p>La creación y desarrollo de la Unión de Repúblicas Socialistas Soviéticas (URSS) es un capítulo fundamental en la historia del siglo XX. Surgió como resultado de una serie de acontecimientos tumultuosos y cambios radicales que transformaron a Rusia en una superpotencia mundial. Para comprender la formación de la URSS, ya hemos visto que la Revolución de Febrero derrocó al zar Nicolás II y condujo a la creación del Gobierno Provisional, un régimen temporal que no pudo resolver los problemas fundamentales del país. Este período de inestabilidad política, agitación social y participación en la Primera Guerra Mundial creó un terreno fértil para el surgimiento de fuerzas revolucionarias.</p>
<div class="mx-auto max-w-md">
<?php
renderImage('hu2-u2-bandera.webp','Bandera de la Unión Soviética.','  https://commons.wikimedia.org/wiki/File:Flag_of_the_Soviet_Union_(1936_%E2%80%93_1955).svg',' Wikimedia Commons.')
?>
</div>

<p>La Revolución de Octubre de 1917, también conocida como la Revolución Bolchevique, fue un evento fundamental en la formación de la URSS. Liderados por Vladimir Lenin, los bolcheviques tomaron el control del gobierno y establecieron un sistema político basado en el socialismo y la dictadura del proletariado.
 En diciembre de 1917, se firmó el Tratado de Paz de Brest-Litovsk con Alemania, poniendo fin a la participación de Rusia en la Primera Guerra Mundial. Este período inicial de gobierno bolchevique estuvo marcado por una serie de medidas revolucionarias. Entre las más destacadas se encontraban la nacionalización de la tierra, la abolición de la propiedad privada y la distribución de la tierra a los campesinos. Además, se llevó a cabo una reforma económica que se basó en la confiscación de la industria y la planificación central. Estas políticas generaron un fuerte apoyo entre los sectores más pobres de la sociedad, pero también suscitaron oposición y descontento entre las élites privilegiadas.</p>
 <?php ob_start(); ?>
<p> Antes de continuar, reforcemos nuestros aprendizajes superando el siguiente reto.</p>
 <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a2', "Bolcheviques y Mencheviques", $ActividadContent);
  ?>
<p>La consolidación de la URSS no fue un proceso lineal ni exento de desafíos. Tras la Revolución de Octubre, Rusia se sumió en una Guerra Civil que se libró entre las fuerzas bolcheviques, conocidas como el "Ejército Rojo," y una serie de grupos anticomunistas, conocidos como el "Ejército Blanco," que incluían a fuerzas contrarrevolucionarias, fuerzas extranjeras y movimientos nacionalistas. Esta guerra civil, que se libró entre 1918 y 1922, tuvo un costo humano significativo y dejó un país devastado. 
  En el transcurso de la Guerra Civil, el territorio que constituiría la URSS comenzó a tomar forma. En diciembre de 1922, se firmó el Tratado de Creación de la URSS, que unió a las repúblicas socialistas de Rusia, Ucrania, Bielorrusia y Transcaucasia (que más tarde se dividió en Armenia, Azerbaiyán y Georgia) en una única entidad política. La formación de la URSS estableció un precedente importante, ya que representó la primera vez en la historia en que un estado socialista se había consolidado en un territorio tan vasto.</p>
Extensión de la Unión Soviética. Imagen de OgreBot. Wikimedia Commons.
<div class="mx-auto max-w-md">
<?php
renderImage('hu2-u2-mapa.webp','Extensión de la Unión Soviética.','  https://commons.wikimedia.org/wiki/File:USSR_map.png',' Wikimedia Commons.');
?>
</div>
<p>Veamos el siguiente video para consolidar algunos de los conceptos más importantes de la revolución rusa.</p>

 <?php
  renderVideoIframe('VVEwuXgAuI4', 'La Revolución Rusa');
  ?>

<p> Después de la Guerra Civil, la economía rusa estaba en ruinas. Para abordar esta situación, el gobierno bolchevique implementó una política conocida como la Nueva Política Económica (NEP) en 1921. La NEP representó un giro pragmático en la política económica, introduciendo elementos de capitalismo en la economía socialista. Bajo la NEP, se permitió una cierta cantidad de propiedad privada, se incentivó la actividad empresarial y se flexibilizaron las restricciones económicas. La NEP tuvo éxito en la recuperación económica, pero también generó tensiones dentro del partido comunista, ya que algunos miembros lo veían como una traición a los principios revolucionarios.
 No obstante, la NEP permitió que la economía rusa se recuperara y proporcionara cierta estabilidad a la población, aunque a costa de ciertos compromisos ideológicos.</p>
<div class="mx-auto max-w-md">
<?php
renderImage('hu2-u2-stalin.webp','Joseph Stalin.','  https://commons.wikimedia.org/wiki/File:Joseph_Stalin.jpg',' Wikimedia Commons.')
?>
</div>
<p>A medida que avanzaba la década de 1920, Joseph Stalin emergió como una figura central en la dirección de la URSS. Stalin, inicialmente un colaborador de Lenin, se convirtió en el Secretario General del Partido Comunista en 1922, una posición que le otorgó un gran poder en la administración del partido y el Estado. La muerte de Lenin en 1924 desencadenó una lucha por el poder en el Partido Comunista, y Stalin logró prevalecer.</p>

<p>El período de Stalin, que se extendió desde mediados de la década de 1920 hasta su muerte en 1953, fue caracterizado por una serie de políticas y cambios significativos en la URSS. 
Uno de los aspectos más destacados de su gobierno fue la industrialización acelerada del país. Stalin implementó planes quinquenales para modernizar la economía, enfocándose en la industrialización y la colectivización agraria. Estas políticas llevaron a un rápido crecimiento industrial y militarizaron la URSS, lo que la convirtió en una superpotencia. Sin embargo, esta industrialización también tuvo un alto costo humano. La colectivización forzada de la agricultura provocó una hambruna masiva en Ucrania conocida como el Holodomor, que resultó en la muerte de millones de personas.
 Además, la era de Stalin estuvo marcada por represión política y purgas en el partido comunista y la sociedad en general, conocidas como los "Juicios de Moscú." Estos juicios llevaron a la ejecución o encarcelamiento de miles de personas acusadas de traición o conspiración. La consolidación del poder de Stalin también se manifestó en su control absoluto sobre el Partido Comunista y la sociedad. Se estableció un culto a la personalidad en torno a su figura, y cualquier forma de oposición o disidencia fue duramente reprimida. La censura y la vigilancia se convirtieron en características omnipresentes de la vida en la URSS.</p>

<p>El estalinismo, fue un período en la historia de la Unión Soviética que tuvo un impacto significativo tanto en el país como en el mundo. El estalinismo se caracteriza por una serie de elementos clave que definieron su régimen. A continuación, vamos a analizar las principales características de este período:</p>
<?php
  $accordionItems2 = [
    [
      'title' => 'Culto a la personalidad',
      'content' => '<p>Stalin promovió un culto de personalidad a su alrededor, presentándose como un líder infalible y todopoderoso. Su imagen y su figura eran omnipresentes en la propaganda y la vida cotidiana de la Unión Soviética.</p>'
    ],
    [
      'title' => 'Represión política',
      'content' => '<p>Durante el estalinismo, se llevaron a cabo purgas políticas masivas. Stalin eliminó a posibles opositores dentro del Partido Comunista y persiguió a intelectuales, artistas y cualquier persona considerada una amenaza potencial. Esto llevó a la persecución, detención y ejecución de miles de personas.</p>'
    ],
    [
      'title' => 'Planificación económica centralizada',
      'content' => 'Bajo Stalin, la economía soviética se sometió a una planificación centralizada y a una rápida industrialización. Se implementaron planes quinquenales destinados a impulsar la producción industrial y agrícola a toda costa, incluso a expensas de la calidad de vida de la población.'
    ],
    [
      'title' => 'Colectivización forzada de la agricultura',
      'content' => 'Se llevó a cabo una campaña de colectivización agraria que forzó a los campesinos a unirse a granjas colectivas estatales. Esto generó una resistencia significativa y una hambruna masiva en regiones como Ucrania, conocida como el Holodomor, que resultó en la muerte de millones de personas.'
    ]
  ];
  renderAccordion($accordionItems2, 'segundo-');
  ?>
<div class="mx-auto max-w-md">
<?php
renderImage('hu2-u2-portada.webp','Portada de TIME 1953.','https://commons.wikimedia.org/wiki/File:Joseph_Stalin-TIME-1953.jpg',' Wikimedia Commons.')
?>
</div>
<p>Uno de los elementos más oscuros del estalinismo es el sistema de campos de trabajo forzado, conocido como el "GULAG" (un acrónimo de "Glavnoye upravleniye lagerey," que significa "Dirección Principal de Campos"). Los prisioneros políticos y criminales fueron enviados a estos campos, donde enfrentaron condiciones extremadamente duras, trabajos forzados y una alta tasa de mortalidad. Un autor que arrojó luz sobre la brutalidad del sistema del GULAG fue Aleksandr Solzhenitsyn, un escritor y disidente soviético que fue arrestado y enviado a un campo de trabajo forzado por sus críticas al gobierno. En su obra más conocida, "Archipiélago Gulag," Solzhenitsyn ofrece un relato detallado y vívido de su experiencia y la de otros prisioneros en el sistema de campos. La obra se convirtió en una crónica fundamental de la represión estalinista y la injusticia del sistema.</p>
<div class="mx-auto max-w-md">
<?php
renderImage('hu2-u2-sello.webp','Aleksandr Solzhenitsyn.','https://commons.wikimedia.org/wiki/File:Russia_stamp_2018_%E2%84%96_2418.jpg','Wikimedia Commons.')
?>
</div>
<p>Solzhenitsyn describió cómo los prisioneros en los campos del GULAG eran sometidos a condiciones inhumanas, trabajos agotadores y malnutrición. Además, destacó el constante temor a la represión y la falta de libertades básicas. "Archipiélago Gulag" se convirtió en un testimonio valiente de la brutalidad del régimen estalinista y ayudó a arrojar luz sobre lo que sucedía en estos campos.</p>

  <?php ob_start(); ?>
<p>Para profundizar en el estalinismo, te invitamos a realizar la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a3', "El estalinismo", $ActividadContent);
  ?>
<p>En resumen, el estalinismo fue un período de represión política, culto a la personalidad, planificación económica centralizada y colectivización forzada de la agricultura en la Unión Soviética bajo el liderazgo de Joseph Stalin. Además, uno de los aspectos más sombríos de este período fue el sistema de campos de trabajo forzado del GULAG, que se convirtió en un símbolo de la represión estalinista.La obra de Aleksandr Solzhenitsyn, "Archipiélago Gulag," desempeñó un papel crucial en la exposición de la brutalidad de este sistema y en la denuncia de las violaciones de los derechos humanos que ocurrieron durante el estalinismo. El estalinismo dejó una huella indeleble en la historia de la Unión Soviética y sirve como un recordatorio de las consecuencias devastadoras de un poder político sin restricciones.</p>
<p>Te invitamos a ver la siguiente reflexión acerca de lo mencionado hasta aquí.</p>

 <?php
  renderVideoIframe('H5xm9Yx5g8Y', '¿Los países comunistas realmente son comunistas?');
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
