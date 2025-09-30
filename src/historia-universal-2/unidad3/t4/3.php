<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    
   <h2>El escándalo Irán - Contras</h2>

    <p>El escándalo "Irán-Contras" es un episodio de la historia de Estados Unidos y su relación con América Latina en el contexto de la doctrina de seguridad nacional de la que ya hemos hablado. Este escándalo involucró la venta de armas a Irán y el desvío de los ingresos de esas ventas para financiar a grupos rebeldes en Nicaragua, conocidos como los "Contras". Este asunto se desarrolló durante la presidencia de Ronald Reagan en la década de 1980.</p>

    <?php
       renderImage('hu2-u3-reagan.webp', 'Ronald Reagan ante el congreso de los EE.UU. Foto de Érico.', 'https://es.wikipedia.org/wiki/Ronald_Reagan#/media/Archivo:President_Ronald_Reagan_addresses_Congress_in_1981.jpg', 'Wikimedia Commons.');
    ?>

    <p>A principios de la década de 1980, Irán estaba en medio de una guerra con Irak y buscaba armamento para enfrentar a su enemigo. A pesar de la retórica anti-iraní del gobierno de Estados Unidos, funcionarios de la administración Reagan, con la aprobación del presidente, iniciaron un plan secreto para vender armas a Irán. Paralelamente, en Nicaragua, el gobierno sandinista, respaldado por la Unión Soviética, se enfrentaba a una guerra civil con grupos rebeldes contrarrevolucionarios conocidos como los Contras.</p>

    <p>El Congreso de Estados Unidos había prohibido el financiamiento de los Contras, algo que muchos deseaban hacer para contener la expansión del comunismo en América Latina, fue por ello que miembros del gobierno de Reagan decidieron apoyar a los Contras en su lucha contra el gobierno nicaragüense en forma clandestina e ilegal.</p>

    <?php
       renderImage('hu2-u3-north.webp', 'Las declaraciones del teniente coronel Oliver North fueron decisivas para saber cómo funciona algunas de las operaciones “encubiertas” que hace el gobierno de Estados Unidos, como fue el caso de Irán - Contras. Foto de Holtocw.', 'https://es.wikipedia.org/wiki/Oliver_North#/media/Archivo:OliverNorth.JPG', 'Wikimedia Commons.');
    ?>

    <p>Para financiar a los Contras, funcionarios del gobierno orquestaron un plan para desviar parte de los ingresos de las ventas de armas a Irán hacia los grupos rebeldes en Nicaragua. Estos fondos se canalizaron a través de una red clandestina y se ocultaron a las autoridades y al Congreso. En 1986, el escándalo se hizo público cuando se descubrió la venta de armas a Irán y el desvío de fondos a los Contras. La revelación causó un gran revuelo y una investigación del Congreso. El presidente Reagan negó inicialmente su conocimiento de la operación, pero más tarde admitió su participación en la venta de armas a Irán. El escándalo llevó a la imputación y condena de varios funcionarios del gobierno, aunque muchas de las condenas fueron posteriormente revocadas o reducidas en apelación. El presidente Reagan se libró de la acusación de encubrimiento, y su vicepresidente, George H.W. Bush, quien había estado al tanto de la operación, no fue acusado.</p>

    <p>El escándalo "Irán-Contras" planteó serias cuestiones sobre la legalidad de las acciones del gobierno de Estados Unidos y su relación con los grupos rebeldes en Nicaragua. También suscitó debates sobre la autoridad del Ejecutivo en asuntos de política exterior y las implicaciones éticas de sus acciones. El episodio tuvo un impacto duradero en la política estadounidense y las relaciones internacionales.</p>

    <?php ob_start(); ?>
    <p>Resuelve el siguiente reto antes de continuar con nuestro aprendizaje.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t4a3', "Argentina y Chile", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
