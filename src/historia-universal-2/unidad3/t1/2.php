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
    <h2>La guerra fría</h2>
    <p>Después de la Segunda Guerra Mundial, el mundo quedaría dividido en dos bloques: el capitalista, encabezado por los Estados Unidos, y el bloque socialista, encabezado por la Unión Soviética. Esta polarización, que arrastró tras ella a buena parte del mundo, se conoce en términos generales como la Guerra Fría.</p>
    <?php
       renderImage('hu2-u3-capvssoci.webp', 'La guerra fría enfrentó a occidente con el mundo socialista después de la segunda guerra mundial, imagen de Mr.Big Bean', 'https://commons.wikimedia.org/wiki/File:Usaussr.jpg', 'Wikimedia Commons.');
    ?>
    <p>Erik Hobsbawm ha definido la Guerra Fría como “el enfrentamiento constante de las dos superpotencias surgidas de la Segunda Guerra Mundial”: la Unión Soviética y los Estados Unidos. Más que un enfrentamiento, podríamos hablar de una tensión permanente que se manifestó de manera muy palpable en la carrera armamentista, pero que abarcó también los ámbitos diplomático, político, ideológico, militar y económico, nunca detonó un conflicto bélico directo entre ambos adversarios, pero existía siempre esa posibilidad. Lo que ocurrió en su lugar, fue que estas superpotencias apoyaron guerras regionales como en Corea y Vietnam, para medir fuerzas.</p>
    <?php
       renderImage('hu2-u3-forestburn.webp', 'La lucha contra el comunismo fue enarbolado como bandera por Estados Unidos para intervenir en distintos conflictos como Corea y Vietnam. Imagen de Sumek101', 'https://commons.wikimedia.org/wiki/File:ForestBurn_(2).jpg', 'Wikimedia Commons.');
    ?>

    <p>A lo largo de la segunda mitad del siglo XX, la rivalidad entre ambas potencias condujo a la formación de bloques político- militares cuyos integrantes siguieron pautas de desarrollo económico distintas: el capitalismo de Estado Benefactor (en las naciones industrializadas aliadas a los Estados Unidos); por otro lado el Socialismo real y las denominadas democracias populares, basados en la planificación estatal de la economía, para el caso de la Unión Soviética y su área de influencia.</p>

     <?php
       renderImage('hu2-u3-mapaGF.webp', 'En azul está el bloque capitalista encabezado por EE.UU, mientras que en rojo está el área de influencia de la Unión Soviética y el bloque socialista. Imagen de Kordas.', 'https://es.wikipedia.org/wiki/Bloque_occidental#', 'Wikimedia Commons.');
    ?>
    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
