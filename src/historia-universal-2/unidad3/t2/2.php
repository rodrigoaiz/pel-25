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
    <p>En respuesta a la Doctrina Truman y el Plan Marshall, la Unión Soviética creó el Cominform, una oficina de información de los partidos comunistas. Su propósito era dar forma a un bloque dirigido por la URSS. Yugoslavia fue excluida del Cominform muy pronto, en junio de 1948, dado que su dirigente -Tito- pretendía construir su propio camino hacia el socialismo, sin someterse a las presiones de Stalin.</p>

    <p>Un acontecimiento que precipitó la polarización fue el bloqueo impuesto por la URSS sobre Berlín Occidental en 1948; los Estados Unidos implementaron un “puente aéreo” para abastecer la ciudad y aceleraron la unificación de las tres zonas ocupadas por Occidente, para conformar la República Federal de Alemania en 1949 (Briggs 2004: 360). En respuesta, surgió la República Democrática Alemana, meses después, respaldada por el gobierno soviético. De acuerdo con Powaski “la división de Alemania selló la división de la Europa de la posguerra en dos esferas de influencia rivales, la norteamericana y la soviética”. Esta división quedó sellada simbólicamente por la construcción del Muro de Berlín, en 1961, que dividía ambas zonas.</p>

    <?php
       renderImage('hu2-u3-sectorAmericano.webp', 'Sector americano en Berlín. Imagen de Eyes Roger. ', 'https://commons.wikimedia.org/wiki/File:Berlin_Wall_set_(41743080330).jpg', 'Wikimedia Commons.');
    ?>
    <p>La noticia acerca de que Rusia ya contaba con su primera bomba atómica hizo dar el siguiente paso: se formó la Organización del Tratado del Atlántico Norte (OTAN); una alianza defensiva que involucraba a los Estados Unidos y la Europa capitalista (que, curiosamente, subsiste hasta nuestros días aunque ya se extinguió la URSS).</p>

    <p>En contraparte, la Unión Soviética promovió una alianza para el bloque del Este: el Pacto de Varsovia, en 1955.</p>
    <?php
       renderImage('hu2-u3-azulrojo.webp', 'Miembros de la OTAN en azul y del Pacto de Varsovia en rojo.Imagen de Kubek15.', 'https://es.wikipedia.org/wiki/Pacto_de_Varsovia#/media/Archivo:NATO_Warsaw_Pact.svg', 'Wikimedia Commons.');
    ?>

    <?php ob_start(); ?>
    <p>Vamos a detenernos un momento y realizar el siguiente reto para consolidar nuestros aprendizajes hasta este momento.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t2a1', "El intervencionismo norteamercicano", $ActividadContent);
    ?>

    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
