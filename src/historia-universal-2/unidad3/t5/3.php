<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    
   <h2>El final de la Unión Soviética</h2>

    <p>El final de la Unión Soviética en 1991 marcó el colapso de uno de los imperios más poderosos y duraderos del siglo XX. Este evento histórico tuvo un profundo impacto en la política, la economía y la geopolítica mundiales. El colapso de la Unión Soviética se produjo en un contexto de reformas internas, agitación política y factores externos que finalmente llevaron al fin de la Guerra Fría. Como ya vimos, la Unión Soviética se estableció en 1922 como una federación de repúblicas socialistas bajo el liderazgo del Partido Comunista. Durante décadas, el régimen soviético estuvo marcado por el control estatal, la economía planificada y la censura. Bajo líderes como Lenin, Stalin, Jruschov y Brezhnev, el país experimentó cambios políticos y económicos significativos, pero la rigidez del sistema comunista y la falta de apertura política llevaron a una serie de problemas en las décadas de 1970 y 1980.</p>

    <?php
       renderImage('hu2-u3-mijail.webp', 'Mijail Gorbachov, último dirigente de la Unión Soviética. Foro de Erik den yngre. ', 'https://upload.wikimedia.org/wikipedia/commons/e/e9/Mikhail_Gorbachev_1987_%28cropped2%29.jpg', 'Wikimedia Commons.');
    ?>

    <p>Uno de los problemas más apremiantes que enfrentaba la Unión Soviética en la década de 1980 era su economía en declive. El sistema de planificación central había demostrado ser ineficiente, lo que resultó en una baja productividad, escasez de bienes de consumo y una falta de innovación. La dependencia excesiva del petróleo y el gas para las exportaciones dejó a la economía vulnerable a las fluctuaciones de los precios del petróleo en el mercado internacional. La economía soviética estaba estancada y tenía dificultades para competir con las economías occidentales. Por otra parte,l control político y la falta de apertura en el sistema soviético también generaron descontento y agitación social. La corrupción, la falta de libertades civiles y la represión política contribuyeron a la insatisfacción generalizada. En las repúblicas bálticas y otros lugares, se desarrollaron movimientos independentistas que desafiaron la autoridad de Moscú.</p>

    <p>En 1985, Mijaíl Gorbachov asumió el cargo de Secretario General del Partido Comunista de la Unión Soviética. Gorbachov reconoció la necesidad de reformas profundas y lanzó dos políticas clave: la perestroika y el glásnost.</p>

     <?php
  $accordionItems1 = [
    [
      'title' => 'Perestroika',
      'content' => '<p>La perestroika se traduce como "reestructuración" y buscaba reformar la economía soviética. Gorbachov introdujo medidas destinadas a descentralizar la planificación económica, fomentar la iniciativa privada y modernizar la producción. Sin embargo, estas reformas iniciales también generaron incertidumbre económica y dificultades para la población, ya que se redujeron los subsidios estatales y se permitió un mayor grado de competencia.</p>'
    ],
    [
      'title' => 'Glásnost',
      'content' => 'El término "glásnost" significa "apertura" y se refería a la mayor transparencia y apertura política. Gorbachov permitió una mayor libertad de prensa, lo que llevó a la discusión pública de problemas políticos y sociales que antes estaban prohibidos. Esto desencadenó un aumento en la conciencia pública y el debate político en toda la Unión Soviética.'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');

  ?>

    <?php
       renderImage('hu2-u3-perestroika.webp', 'Timbre postal sovietico de 1988 promocionando la perestroika y el glasnost. Imagen de Matsievsky.', 'https://upload.wikimedia.org/wikipedia/commons/0/05/The_Soviet_Union_1988_CPA_5941_stamp_%28Perestroika_%28reformation%29._Workers_and_slogans_Speeding_Up%2C_Democratization._and_Glasnost_against_Kremlin_Palace._Cruiser_Aurora_and_revolutionary_soldiers%29.jpg', 'Wikimedia Commons.');
    ?>

    <p>Las reformas de Gorbachov, aunque destinadas a revitalizar la Unión Soviética, desencadenaron una serie de desarrollos que contribuyeron a la caída del régimen comunista. Por una parte la apertura política de la glasnost permitió que florecieran movimientos nacionalistas en las repúblicas soviéticas. Las repúblicas bálticas, como Lituania, Letonia y Estonia, fueron las primeras en declarar su independencia. Otros territorios también buscaron autonomía o independencia, lo que debilitó aún más la cohesión del país.</p>

    <p>A medida que la apertura política permitió un debate público más amplio, aumentó la agitación política y la disidencia en la Unión Soviética. Hubo manifestaciones, huelgas y disturbios en varias ciudades. Además, el intento de golpe de Estado de agosto de 1991, liderado por figuras conservadoras del Partido Comunista, fue un intento fallido de derrocar a Gorbachov y restaurar el control centralizado, pero debilitó aún más la autoridad del partido.</p>

    <p>Las reformas económicas de la perestroika también causaron dificultades económicas a corto plazo. La eliminación de subsidios a la energía y otros sectores llevó a una inflación galopante y escasez de productos básicos. La población soviética experimentó una disminución en su calidad de vida, lo que aumentó la insatisfacción.</p>

    <h3>El Colapso final de la Unión Soviética</h3>

    <p>Ya con los antecedentes mencionados, el 8 de diciembre de 1991, los líderes de Rusia, Ucrania y Bielorrusia firmaron el Tratado de Belavezha, que declaró la disolución de la Unión Soviética. El 25 de diciembre de 1991, Mijaíl Gorbachov renunció como presidente de la Unión Soviética y el país dejó de existir oficialmente. Rusia, Ucrania y otros estados postsoviéticos emergieron como entidades independientes.</p>

    <?php
       renderImage('hu2-u3-rusia.webp', 'Bandera de la Federación Rusa, constituida luego de la disolución de la Unión Soviética en 1991. Imagen de Sangjinhwa.', 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Flag_of_Russia_with_border.svg', 'Wikimedia Commons.');
    ?>

    <?php ob_start(); ?>
    <p>Ahora revisemos algunos de los conceptos clave de este último tema.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t5a2', "Caída de la URSS", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
