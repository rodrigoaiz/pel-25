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

    <h2>El golpe de Estado en Chile</h2>

    <p>El golpe de Estado en Chile que llevó al poder al general Augusto Pinochet ocurrió el 11 de septiembre de 1973. Fue un acontecimiento fundamental en la historia de Chile y tuvo un profundo impacto en el país y la región. En ese momento Chile vivía una situación de alta polarización política. El presidente de Chile en ese momento era Salvador Allende, un político socialista que había llegado al poder en 1970 tras ganar las elecciones presidenciales. Allende lideraba la coalición de izquierda conocida como la Unidad Popular y había implementado reformas de corte socialista que generaron fuertes tensiones con sectores conservadores y con Estados Unidos, que veía con preocupación la deriva izquierdista de Chile.</p>

     <?php
       renderImage('hu2-u3-allende.webp', 'Salvador Allende en la asamblea de la ONU. Foto de Animalparty.', 'https://es.wikipedia.org/wiki/Salvador_Allende#/media/Archivo:Salvador_Allende,_President_of_Chile_(United_Nations,_New_York)_LCCN2020729693.jpg', 'Wikimedia Commons.');
    ?>

    <p>La gestión de Allende enfrentó desafíos económicos, incluyendo la inflación y la escasez de alimentos. Además, las tensiones políticas se agravaron debido a la polarización entre los partidarios del gobierno y la oposición de derecha, así como a las crecientes protestas y huelgas. El 11 de septiembre de 1973, las Fuerzas Armadas de Chile, lideradas por el general Augusto Pinochet, llevaron a cabo un golpe de Estado. Aviones de combate bombardearon el Palacio de La Moneda, sede del gobierno, donde Allende se encontraba. Después de un asedio, Allende murió en circunstancias aún controvertidas, y Pinochet asumió el poder como líder de la junta militar que gobernó Chile.</p>

    <?php
       renderImage('hu2-u3-palaciomoneda.webp', 'Bombardeo del Palacio de la Moneda en 1973. Foto de PBrieux.', 'https://upload.wikimedia.org/wikipedia/commons/b/b5/Golpe_de_Estado_1973.jpg', 'Wikimedia Commons.');
    ?>
    <p>Bajo el gobierno de Pinochet, se instauró una dictadura militar que duró hasta 1990. Durante este período, se llevaron a cabo graves violaciones de los derechos humanos, incluyendo torturas, detenciones arbitrarias y ejecuciones extrajudiciales. Se disolvieron los partidos políticos y se prohibieron las actividades políticas. Los opositores políticos, activistas de izquierda y cualquier persona percibida como una amenaza al régimen fueron perseguidos y reprimidos. Miles de chilenos fueron detenidos, torturados y desaparecidos. Chile vivió un período de represión y violencia que dejó un profundo impacto en la sociedad chilena.</p>

    
    <?php
       renderImage('hu2-u3-pinochet.webp', 'Pinochet junto a Henry Kissinger, este último fue el “cerebro” detrás de la operación Cóndor. Foto de WikiPedant.', 'https://es.wikipedia.org/wiki/Augusto_Pinochet#/media/Archivo:Reuni%C3%B3n_Pinochet_-_Kissinger.jpg', 'Wikimedia Commons.');
    ?>

    <p>El gobierno de Pinochet se caracterizó por una política económica neoliberal que llevó a profundas reformas económicas en Chile. A pesar de ciertos logros económicos, el costo humano y las violaciones a los derechos humanos cometidas bajo su régimen generaron un legado complicado y divisivo en la historia de Chile. Pinochet gobernó hasta 1990, cuando se realizó una transición hacia la democracia, y Chile volvió a celebrar elecciones democráticas.</p>

    <h3>La muerte de Víctor Jara</h3>

    <p>Víctor Jara fue un cantautor, compositor y director de teatro chileno, ampliamente reconocido por su influencia en la música popular chilena y su compromiso con las causas sociales y políticas. Nació el 28 de septiembre de 1932 en Lonquén, Chile, y se convirtió en una figura emblemática de la Nueva Canción Chilena, un movimiento musical y artístico que combinaba la música folklórica con letras comprometidas con la justicia social y la política de izquierda.</p>

    <p>La muerte de Víctor Jara se considera un asesinato político debido a las circunstancias que rodearon su trágico fallecimiento durante el golpe de Estado en Chile en 1973. Para comenzar, Salvador Allende, era un amigo cercano de Víctor Jara y apoyaba el movimiento artístico de la Nueva Canción Chilena. Después del golpe, Víctor Jara fue detenido junto con miles de otros opositores al régimen militar. Fue llevado al Estadio Chile (hoy llamado Estadio Víctor Jara) en Santiago, donde sufrió torturas y maltratos brutales. Durante su detención, su guitarra fue destrozada, y se le obligó a tocar y cantar para sus captores mientras era torturado. Finalmente fue asesinado el 16 de septiembre de 1973, poco después de su detención. Su cuerpo fue encontrado con múltiples heridas de bala en una calle de Santiago. Su muerte se considera un acto de represión política y un intento de silenciar a una figura prominente de la música y el arte que había sido un defensor de la justicia social y un símbolo de la resistencia contra el régimen de Pinochet.</p>

    <p>En el siguiente enlace puedes escuchar una canción emblemática de esta época titulada “El derecho de vivir en paz”, en ella escucharás algunas referencias que te serán familiares por todo lo que hemos visto hasta este momento.</p>

     <?php
      renderVideoIframe('XkXise2bHE0', 'El derecho de vivir en paz');
      ?>

      <?php
       renderImage('hu2-u3-jara.webp', 'Jara en una protesta contra la guerra de Vietnam, Helsinki 1969. Foto de Mlang.Finn.', 'https://es.wikipedia.org/wiki/V%C3%ADctor_Jara#/media/Archivo:Victor-Jara-in-Helsinki-1969.jpg', 'Wikimedia Commons.');
    ?>

    <p>La muerte de Víctor Jara se convirtió en un símbolo de la brutalidad del régimen de Pinochet y la persecución de artistas y opositores políticos en Chile. Su legado artístico y su compromiso con la justicia social siguen siendo recordados y celebrados en Chile y en todo el mundo, y su música continúa inspirando a generaciones de artistas comprometidos con causas similares.S</p>

    <?php ob_start(); ?>
    <p>Con lo mencionado hasta aquí, participa en el el siguiente foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t4a2', "intervencionismo en Latinoamérica", $ActividadContent);
    ?>

    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
