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
    <h2>Conflictos mundiales de la posguerra</h2>

    <h3>La creación del Estado de Israel</h3>
   
    <p>La creación del Estado de Israel es un episodio histórico de gran relevancia que tiene sus raíces en el siglo XIX, pero que culminó en el siglo XX y que representa uno de los acontecimientos más relevantes de la posguerra. A continuación se abordarán los hechos principales que desencadenaron este suceso.</p>

    <?php
       renderImage('hu2-u3-knesset.webp', 'Construcción del edificio de la Knesset (asamblea), el cual es el órgano legislativo del Estado de Israel. Imagen de Ijon.', 'https://upload.wikimedia.org/wikipedia/commons/8/82/Maats_Knesset_Cornerstone_Jerusalem_1958.jpg', 'Wikimedia Commons.');
    ?>

    
   <h3>El sionismo</h3>

    <p>Antes que nada, debemos recordar que, como grupo humano, los judios han padecido históricamente una persecución constante por parte, sobre todo, de las culturas occidentales. Recordemos que en 1492 se les expulsó de la península ibérica, en donde se había asentado una gran parte de los descendientes de aquellos que huyeron o fueron exiliados del reino de Judea durante la invasión romana. Posteriormente, fueron perseguidos por la Inquisición y aún en la modernidad se registraron incidentes violentos contra las minorías judías que vivían en países cristianos como Inglaterra, Alemania, Francia o Rusia donde se practicaban los denominados “pogromos”, que consistían en linchamientos espontáneos generalmente motivados por antisemitismo (odio a los judios), rumores y falsas acusaciones (chivos expiatorios). A raíz de estos constantes ataques se fue desarrollando una identidad consciente de los grupos judios como una nación independiente, con peculiaridades históricas propias, una cultura e incluso un idioma distinto, esto consolidó la idea del sionismo.</p>

    <?php
       renderImage('hu2-u3-sionismo.webp', 'El arco de Tito, representa el triunfo de los romanos sobre el reino de Judea. En la imagen se puede observar a los soldados romanos saqueando el templo de los judios que estaba localizado en Jerusalén. Imagen de Steerpike.', 'https://commons.wikimedia.org/wiki/File:Arch_of_Titus_Menorah.png', 'Wikimedia Commons.');
    ?>

    <p>El sionismo se convierte en un movimiento político y nacional que surge a fines del siglo XIX con el objetivo de re-establecer un Estado judío en la Tierra de Israel, que en ese momento estaba bajo el dominio del Imperio Otomano. El término "sionismo" proviene de "Sión", una colina en Jerusalén y un símbolo importante en la tradición judía.</p>

    <p>El sionismo fue motivado por varias razones, entre las que destacan:</p>

         <?php
  $accordionItems1 = [
    [
      'title' => 'Persecución y antisemitismo',
      'content' => '<p>El aumento de la persecución y el antisemitismo en Europa, en particular durante el siglo XIX, llevó a muchos judíos a buscar un lugar donde pudieran vivir libres de discriminación y violencia.</p>'
    ],
    [
      'title' => 'Renacimiento nacional',
      'content' => 'El sionismo se originó en un contexto de nacionalismo europeo, donde diferentes grupos étnicos y culturales buscaban su autodeterminación y un Estado propio. Los judíos también aspiraron a esta autonomía nacional.'
    ],
    [
      'title' => 'Vinculación con la tierra de Israel',
      'content' => 'El sionismo estaba arraigado en la conexión histórica y religiosa que los judíos tenían con la Tierra de Israel. Los sionistas creían en el regreso a la tierra que consideraban su legado ancestral.'
    ],
    [
      'title' => 'Inspiración en figuras como Theodor Herzl',
      'content' => 'Theodor Herzl, un periodista austrohúngaro, es considerado el padre del sionismo moderno. En su libro "El Estado judío" (1896), Herzl abogó por la creación de un Estado judío como solución al problema del antisemitismo en Europa.'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');

  ?>

    <p>El sionismo desencadenó un movimiento de inmigración judía a Palestina, que más tarde se convirtió en Israel. A lo largo del siglo XX, el sionismo desempeñó un papel crucial en la creación del Estado de Israel en 1948, marcando un hito en la historia judía y en el conflicto árabe-israelí.</p>

     <?php
       renderImage('hu2-u3-estadojudio.webp', 'Portada del libro “Der Judenstaat” (El Estado Judio) de Theodor Herzl, publicado en 1896 (en idioma ídish), es considerado el punto de arranque del movimiento sionista.Imagen de ערוך101.', 'https://upload.wikimedia.org/wikipedia/commons/3/31/%D7%9E%D7%93%D7%99%D7%A0%D7%AA_%D7%94%D7%99%D7%94%D7%95%D7%93%D7%99%D7%9D_%D7%9C%D7%94%D7%A8%D7%A6%D7%9C.jpg', 'Wikimedia Commons.');
    ?>

    <h3>La Declaración Balfour (1917)</h3>

    <p>La Declaración Balfour, fue emitida el 2 de noviembre de 1917, se trata de un importante punto de partida en el camino hacia la creación de Israel ya que esta declaración fue una carta enviada por Arthur Balfour, Ministro de Relaciones Exteriores del Reino Unido, a Lord Rothschild, un líder sionista británico. En ella, Balfour expresaba el apoyo del gobierno británico a la idea de establecer un "hogar nacional para el pueblo judío" en el territirio llamado Palestina, entonces bajo control del Imperio Otomano, recordemos que esta idea ya habia sido propuesta por Herzl desde 1896. La Declaración Balfour marcó un cambio significativo en la política británica y fue influida en parte por el interés estratégico británico en la región y por la influencia sionista en Gran Bretaña. Esta declaración generó expectativas entre la comunidad judía y también provocó tensiones con la población árabe palestina, ya que prometía una tierra que ya estaba habitada por una mayoría árabe.</p>

    <h3>La Primera Guerra Mundial y el mandato britanico en Palestina</h3>

    <p>La Primera Guerra Mundial tuvo un impacto significativo en la región y en la creación de Israel. En 1917, las fuerzas británicas lideradas por el General Edmund Allenby capturaron Jerusalén, poniendo fin al dominio otomano en Palestina. La caída de Jerusalén fue un paso crucial hacia la eventual creación del Estado de Israel. Después de la Primera Guerra Mundial, la Sociedad de Naciones otorgó a Gran Bretaña un mandato sobre Palestina en 1920.</p>

    <?php
       renderImage('hu2-u3-postalpalestina.webp', 'Estampilla postal de 1927. Imagen de Cybjorg~commonswiki.', 'https://en.wikipedia.org/wiki/Mandatory_Palestine#/media/File:Stamp_palestine_10_mils.jpg', 'Wikimedia Commons.');
    ?>

    <p>El Mandato Británico tenía como objetivo facilitar el establecimiento de un "hogar nacional judío" en Palestina, tal como se mencionaba en la Declaración Balfour. Sin embargo, esta misión fue complicada por las tensiones entre judíos y árabes en la región.Durante este período, la inmigración judía a Palestina aumentó, lo que generó conflictos con la población árabe local. Los árabes palestinos se oponían a la creciente presencia judía y a la promesa de un Estado judío en esa tierra. Hubo disturbios y enfrentamientos entre ambas comunidades, lo que complicó la administración británica en la región.</p>

    <?php
       renderImage('hu2-u3-cocodrilo.webp', 'Periodico de 1936 haciendo mofa del “cocodrilo sionista” y su protector (la Gran Bretaña), imagen de Jul059.', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/A_1936_caricature_published_in_the_Falastin_newspaper_on_Zionism_and_Palestine.png', 'Wikimedia Commons.');
    ?>

    <h3>Partición de Palestina (1947)</h3>

    <p>Después de años de conflicto y tensiones, Gran Bretaña decidió entregar la cuestión de Palestina a las Naciones Unidas en 1947. La ONU propuso un plan de partición que dividiría Palestina en un estado judío y un estado árabe, con Jerusalén bajo control internacional. El plan fue aprobado por la Asamblea General de las Naciones Unidas el 29 de noviembre de 1947. La partición fue aceptada por la comunidad judía, pero fue rechazada por los líderes árabes palestinos y los países árabes vecinos. Esto marcó el comienzo de una nueva fase en el conflicto, que culminó en la Guerra de Independencia de Israel.</p>

    <?php
       renderImage('hu2-u3-mapapalestina.webp', 'Imagen de Rowanwindwhistler.', 'https://es.wikipedia.org/wiki/Plan_de_las_Naciones_Unidas_para_la_partici%C3%B3n_de_Palestina#/media/Archivo:UN_Partition_Plan_For_Palestine_1947-es.svg', 'Wikimedia Commons.');
    ?>

    <h3>Guerra de Independencia de Israel (1948)</h3>

    <p>El 14 de mayo de 1948, David Ben-Gurion, el líder de la llamada Agencia Judía, proclamó la independencia del Estado de Israel. Esa misma noche, fuerzas de Egipto, Siria, Transjordania (hoy Jordania), Irak y Líbano invadieron el nuevo estado. Esta guerra se libró en varias fases y fue un conflicto sangriento que resultó en una serie de acuerdos de alto el fuego y cambios territoriales y hoy se conoce en Israel como la “guerra de independencia”.</p>

    <?php
       renderImage('hu2-u3-independenciaIsrael.webp', 'Declaración de independencia de Israel, al frente Ben Gurion a su espalda un retrato de Theodor Herzl. Imagen de CyberXRef.', 'https://en.wikipedia.org/wiki/David_Ben-Gurion#/media/File:Declaration_of_State_of_Israel_1948_2.jpg', 'Wikimedia Commons.');
    ?>

    <p>A medida que la guerra avanzaba, Israel extendió su territorio más allá de las fronteras propuestas por la partición de la ONU, lo que llevó a un alto número de refugiados de gente de origen árabe que vivía en tales zonas. La guerra finalizó con acuerdos de alto el fuego en 1949, e Israel consolidó su independencia, aunque sin un acuerdo de paz con los países árabes. Después de la Guerra de Independencia, Israel se encontró en un estado de guerra intermitente con sus vecinos árabes. Estos conflictos incluyeron la Guerra del Sinaí de 1956 y la Guerra de los Seis Días de 1967, en la que Israel ganó territorios adicionales, incluyendo Jerusalén Oriental y Cisjordania.</p>

    <p>La anexión territorial de estas guerras llevó a un aumento en la construcción de asentamientos israelíes en Cisjordania y la Franja de Gaza, lo que generó tensiones con la comunidad internacional. Además, los palestinos buscaron su autodeterminación y el fin de la ocupación israelí, lo que llevó a la creación de la Organización para la Liberación de Palestina (OLP) y un aumento en la resistencia palestina, incluyendo ataques terroristas. La Organización para la Liberación de Palestina (OLP) se estableció en 1964 con el objetivo de representar y unificar a los palestinos en su lucha por la autodeterminación y la creación de un Estado palestino. Sin embargo, en sus primeros años, la OLP estaba dirigida por líderes exiliados y no tenía un territorio específico bajo su control.</p>

    <?php
       renderImage('hu2-u3-masacre.webp', 'Restos de un autobús israeli en el que hubo un atentado terrorista palestino. Imagen de MathKnight.', 'https://es.wikipedia.org/wiki/Masacre_de_la_carretera_costera#/media/Archivo:1978-bus-attack02.jpg', 'Wikimedia Commons.');
    ?>

    <h3>Guerra del Yom Kipur (1973)</h3>

    <p>La Guerra del Yom Kipur en 1973, fue un conflicto importante que involucró a Israel y los países árabes de Egipto y Siria. El conflicto comenzó el 6 de octubre, cuando Egipto y Siria lanzaron un ataque sorpresa en el día de Yom Kipur, el Día del Perdón de acuerdo con el calendario judío. Esta guerra demostró ser un desafío significativo para Israel y resultó en una considerable pérdida de vidas en ambos lados. A pesar de enfrentar una sorpresa inicial, Israel logró repeler los ataques árabes y avanzar en el Sinaí y en los Altos del Golán. La guerra culminó en un alto el fuego respaldado por la comunidad internacional. La Guerra del Yom Kipur llevó a un cambio en la percepción de la seguridad de Israel y al inicio de conversaciones de paz con Egipto.</p>

    <h3>El proceso de paz</h3>

    <p>Tras la Guerra de los Seis Días, el Consejo de Seguridad de las Naciones Unidas adoptó la Resolución 242, que pedía la retirada de Israel de los territorios ocupados y el reconocimiento del derecho a la existencia y la seguridad de todos los Estados de la región, incluido Israel. La Guerra del Yom Kipur en 1973 llevó a un alto el fuego en 1974 y a un nuevo impulso en los esfuerzos diplomáticos. Se estableció una Fuerza de Emergencia de las Naciones Unidas (UNEF) para supervisar el alto el fuego en la Península del Sinaí y en los Altos del Golán. Uno de los desarrollos más significativos en el proceso de paz fue la firma de los Acuerdos de Oslo en 1993. Estos acuerdos se negociaron en secreto y llevaron al reconocimiento mutuo de Israel y la OLP, así como al establecimiento de una Autoridad Palestina en partes de Cisjordania y Gaza. Los Acuerdos de Oslo también establecieron un proceso gradual hacia la resolución final del conflicto.</p>

    <p>A lo largo de los años, se realizaron varios intentos de negociación, incluyendo Camp David en 2000, las conversaciones de Annapolis en 2007, y los esfuerzos del entonces Secretario de Estado de Estados Unidos, John Kerry, en 2013-2014. Sin embargo, estos esfuerzos no lograron una solución definitiva y enfrentaron obstáculos clave, como las cuestiones de los asentamientos, las fronteras, el estatus de Jerusalén y el derecho al retorno de los refugiados palestinos.</p>

    <p>El proceso de paz ha estado marcado por episodios de violencia, incluyendo la Segunda Intifada (2000-2005) y los enfrentamientos en Gaza en 2008-2009, 2012 y 2014. Estos episodios de violencia han contribuido a la falta de avances significativos en las negociaciones de paz. Las divisiones internas entre las facciones palestinas, como Fatah y Hamas, han obstaculizado la cohesión de la parte palestina en las negociaciones y dificultado los acuerdos con Israel.</p>

     <?php
       renderImage('hu2-u3-acuerdopaz.webp', 'Acuerdos de paz del 2000 entre israelíes y palestinos. Imagen de Abarrategi.', 'https://upload.wikimedia.org/wikipedia/commons/7/73/Oslo-Accordsmaxresdefault-1.jpg', 'Wikimedia Commons.');
    ?>

    <p>Hasta enero de 2022, el proceso de paz entre israelíes y palestinos se encontraba en un punto muerto. Las tensiones en Jerusalén, la expansión de los asentamientos israelíes en Cisjordania y la falta de confianza entre ambas partes seguían siendo obstáculos fundamentales, sin embargo el 7 de octubre de 2023, una incursión de brigadas de Hamás desde Gaza desencadenó un recrudecimiento en el conflicto. Cientos de miembros de Hamás cruzaron la frontera entre Gaza y el sur de Israel y atacaron diversas poblaciones resultando muertos cerca de mil civiles Israelíes en tan solo unas horas. En represalia Israel ordenó un bombardeo de Gaza que ha continuado de forma continua hasta noviembre de 2023.</p>

    <?php ob_start(); ?>
  <p>Resuelve el siguiente reto para afianzar algunos de los conocimientos obtenidos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a1', "Independencia de Israel", $ActividadContent);
  ?>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
