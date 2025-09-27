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
    <p>Por otro lado, en el bloque capitalista se decían defensores de la libertad pero en muchas ocasiones eran solo palabras. El miedo a que el comunismo se extendiera por el mundo generó en los Estados Unidos una serie de medidas conocidas como la Doctrina Truman. Era en sí un plan para contener el comunismo (es decir, para impedir su avance en los E.U. y dentro de su esfera de influencia).</p>

    <?php
       renderImage('hu2-u3-anticomunismo.webp', 'Manifestantes anti-comunistas en California. Imagen de Animalparty.', 'https://commons.wikimedia.org/wiki/File:United_Nations_Day_Anti-Communism_Rally_November_1960_(2).jpg', 'Wikimedia Commons.');
    ?>

    <p>El combate al comunismo requería recursos, y esto implicaba utilizar los impuestos de los contribuyentes, a quienes se procuraba convencer con intensas labores de propaganda. Esto tuvo repercusiones sociales importantes en los Estados Unidos, pues la cruzada contra el comunismo se libró también dentro de las propias fronteras, en busca de los enemigos interiores. En 1947 dio inicio la Comisión de Actividades Antiamericanas, presidida por el senador MacCarthy; todo ciudadano podía ser considerado un sospechoso en potencia y ser sujeto a proceso. Los disidentes políticos fueron perseguidos en una especie de "cacería de brujas" en los años 50. A muchas personas: intelectuales, artistas, políticos, deportistas, les estropearon la vida al dejarles sin trabajo por considerárseles comunistas.</p>

    <?php
       renderImage('hu2-u3-McCarty.webp', 'El senador Joseph McCarthy dirigió una campaña anti comunista en EE.UU que terminó siendo una “cacería de brujas”. Imagen de DiscountDoubleCheckFan.', 'https://commons.wikimedia.org/wiki/File:Senator_Joseph_R._McCarthy,_ca._1954.png', 'Wikimedia Commons.');
    ?>

    <p>Por otra parte, en la URSS el combate al enemigo interior tuvo otras connotaciones: sirvió a Stalin para justificar las purgas que le permitieron deshacerse de adversarios, disidentes e inclusive de colaboradores potencialmente incómodos, para consolidar un gobierno autocrático, muy autoritario y cabría decir muy distante de la sociedad ideal que la Revolución Rusa se planteó construir alguna vez (Hobsbawm 1998: 387).</p>

    <?php
       renderImage('hu2-u3-gulag.webp', 'El GULAG representó una prisión política a la que se enviaba a los disidentes de Stalin con el pretexto de ser “traidores”. Imagen de Віталій Плекан.', 'https://commons.wikimedia.org/wiki/File:Vorkuta.jpg', 'Wikimedia Commons.');
    ?>
    
    <?php ob_start(); ?>
    <p>Te invitamos a intentar resolver el siguiente reto para afianzar algunos conceptos clave de nuestro aprendizaje.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t1a3', "Capitalismo y comunismo", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
