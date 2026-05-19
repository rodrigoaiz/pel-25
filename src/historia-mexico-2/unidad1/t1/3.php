<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Crisis política en el Porfiriato</h2>

  <p>Las movilizaciones sociales y políticas en el Porfiriato tuvieron diversas causas; en el caso de las rebeliones agrarias, éstas se originaron por la concentración de tierra en latifundistas muchos de ellos de origen extranjero, de la mano con el despojo de tierras con las leyes decretadas como, la “<b>Ley de Deslinde y Colonización de Terrenos Baldíos</b>”, promulgada el 15 de diciembre de 1883 <b>afectando a indígenas y campesinos</b> que se vieron obligados a emplearse en las haciendas bajo un sistema de peonaje que padeció también los efectos de las <b>tiendas de raya</b>, así como <b>duras condiciones laborales y la represión</b>.</p>

  <h3>Rebeliones indígenas</h3>
  <p>Estas causas llevaron a varias rebeliones y levantamientos en diferentes regiones del país, como la <b>rebelión</b> de los <b>Yaquis</b> en Sonora y la insurrección de <b>Tomóchic</b> en Chihuahua. A continuación, revisa lo siguiente:</p>
  <h3>Guerra del Yaqui</h3>
  <p>La Rebelión Yaqui en Sonora es una  resistencia indígena que se intensificó cuando el presidente Manuel González promulgó, el 15 de diciembre de 1883, la Ley de Deslinde de Terrenos Baldíos y Colonización. Esta legislación permitió a las compañías deslindadoras despojar de sus tierras a las comunidades yaquis, al clasificar sus territorios como “baldíos” y desconocer su existencia legal, generando un profundo descontento entre los yaquis.</p>
  <p>En esta rebelión destacó Cajeme, quien dirigió diversas guerrillas en defensa de su pueblo. Tras su captura y asesinato, el gobierno consolidó su política de apropiación de tierras en aquella fértil región, favoreciendo a Ramón Corral y a sus socios, Torres e Izábal. Estos individuos especularon con las tierras despojadas en colaboración con la Richardson Construction Company, intensificando el despojo y la injusticia hacia los yaquis.</p>
  <h3>Rebelión de Tomóchic</h3>
  <p>Durante el Porfiriato, la represión a cualquier movimiento social o político se intensificó. En este contexto, los habitantes de Tomóchic, un asentamiento tarahumara, sufrieron el desalojo de sus tierras por parte de empresarios y latifundistas. Ante estas injusticias, los hermanos Cruz y Manuel Chávez, junto con el pueblo, decidieron alzar la voz y declararon su autonomía.</p>
  <p>La respuesta del gobierno porfirista fue inmediata: tropas federales se movilizaron hacia Tomóchic entre el 25 y el 26 de octubre de 1892, la resistencia fue vencida, y la mayoría de los habitantes heridos fueron fusilados incluyendo al líder Cruz Chávez. Solo 43 mujeres y 71 niños sobrevivieron a la brutal represión.</p>

  <p>Aunado al malestar del sector agrario se encontraba el conflicto obrero, ya que a pesar de que las huelgas estaban prohibidas en esa época, se registraron más de 250 paros ilegales. En 1906, tuvo lugar una <b>huelga en las minas de Cananea en Sonora</b>, controladas por estadounidenses, en la cual participaron cerca de cinco mil mineros. Aunque fue <b>reprimida por tropas mexicanas</b> con el apoyo de refuerzos estadounidenses, la represión alcanzó niveles aún más brutales un año después, durante <b>la huelga de trabajadores textiles en Río Blanco, Veracruz</b>. En este último caso, cientos de obreros en huelga fueron fusilados por las tropas del gobierno (Tobler, 1994, pág. 140).</p>

  <p>Las exigencias de los obreros hallaron un creciente eco en el movimiento político de oposición del <b>Partido Liberal Mexicano (PLM)</b>. El PLM había surgido a comienzos del siglo bajo la dirección de los hermanos <b>Flores Magón</b>, del cual destaca lo siguiente:</p>

  <?php
  renderImage('hm2-u1-plm.jpg', 'Imagen generada con IA');
  ?>

  <p>Otro factor que contribuyó a <b>la crisis del sistema porfirista</b> fue la fractura interna del régimen. Dentro de la élite política se planteaba la necesidad de ampliar la base de participación política para estabilizar el sistema. Sin embargo, esta situación no se materializó. <b>La entrevista</b> que Porfirio Díaz concedió en 1908 al periodista estadounidense <b>James Creelman</b>, aceleró el <b>estallido de la crisis política</b> entre 1908-1910. En dicha entrevista, el presidente anunció su intención de retirarse al final de su mandato, lo que generó expectativas sobre un proceso democrático en las elecciones de 1910 y alentó la formación de partidos opositores e incluso integrantes de la elite porfirista también se postularon para ocupar la silla presidencial.</p>

  <?php
  renderImage('hm2-u1-conflictos.jpg', 'Imagen generada con IA');
  ?>

  <p>De los movimientos políticos en oposición al régimen de Díaz un proyecto que avanza hacia la confrontación militar fue el movimiento Maderista.</p>

  <div class="mx-auto max-w-md">

  <?php
  renderImage('hm2-u1-madero.webp', 'Francisco I. Madero, imagen de autor desconocido', 'https://upload.wikimedia.org/wikipedia/commons/3/36/Presidente_Francisco_I._Madero.jpg', 'Wikimedia Commons.');
  ?>

  </div>

  <p>Madero de acuerdo con el autor Hans Werner Tobler tuvo una educación en Francia y Estados Unidos. Al regresar a nuestro país se dedicó a administrar las fincas de su padre, convirtiéndose finalmente en un empresario agrario de gran éxito. Con relación a su carrera política, <b>Madero</b> en algún momento emprendió la vida pública desde 1904 como "independiente", pero no logró imponerse al sistema porfirista. Sin embargo, con la publicación del libro <b><i>La sucesión presidencial en 1910</i></b> atrajo el apoyo político en las clases medias urbanas, ya que se pugnaba la  libertad de elecciones y la no reelección, convirtiéndose en una consigna de la campaña presidencial maderista: <b>"Sufragio efectivo, no reelección"</b>.</p>

  <p>En este contexto de lucha política debemos mencionar también  las <b>movilizaciones feministas</b> en oposición al gobierno de Porfirio Díaz. Entre las mujeres que manifestaron su inconformidad al régimen estaban la profesora  Dolores  Jiménez  y  Muro,  y  la  señora  Juana  Belén  Gutiérrez de  Mendoza;  ambas  denunciaron  injusticias  y  llamaron  a  la  rebelión en artículos publicados en la prensa clandestina Además, Gutiérrez de Mendoza editó y dirigió durante años el periódico oposicionista Vesper, su labor propagandística acarreó persecuciones y encarcelamiento a las dos escritoras (Vasquez, 2021, pág. 183).</p>

  <div class="mx-auto max-w-md">

  <?php
  renderImage('hm2-u1-juana.webp', 'Juana Belén Gutiérrez de Mendoza', 'https://upload.wikimedia.org/wikipedia/en/8/81/Juana_Bel%C3%A9n_Guti%C3%A9rrez_de_Mendoza.jpg', 'Wikimedia Commons.');
  ?>

  </div>

  <p>De acuerdo con la historiadora Gabriela Cano, muchas otras mujeres participaron en organizaciones antiporfiristas, clubes liberales, grupos magonistas y, a partir de 1908, en asociaciones que apoyaban la candidatura de Francisco I. Madero a la presidencia de la república,  donde ni el sufragio femenino ni la igualdad de derechos de hombres y mujeres interesaron en forma significativa pues sólo había aisladas peticiones de quienes estaban concentradas en las tareas organización y propaganda del movimiento revolucionario.</p>

  <p>A partir de lo que trabajaste en la lección realiza la siguiente actividad evaluativa:</p>
  

  <?php ob_start(); ?>
    <p>A partir de la información leída interpreta las siguientes imágenes y contesta la siguiente pregunta:</p>
    <div class="max-w-md mx-auto">
      <?php
        renderImage('hm2-u1-t1-p3-01.jpg');
      ?>
    </div>
    <p>¿Cuáles son las causas sociopolíticas y socioeconómicas de la Revolución Mexicana?</p>
    <p>Envía la respuesta a la pregunta y al terminar lee el escrito de dos compañeras o compañeros y proporciona tu retroalimentación.</p>
    <p>Nota: La actividad es obligatoria para tener acceso a la evaluación de la unidad</p>

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a2', "Foro: Causas de la Revolución Mexicana", $ActividadContent);
  ?>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
