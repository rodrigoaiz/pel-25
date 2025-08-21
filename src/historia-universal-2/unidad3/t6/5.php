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
    <p>La contracultura estaba vinculada a movimientos sociales y políticos que buscaban la igualdad, la justicia social y el cambio en la sociedad. Algunos de ellos los mencionaremos a continuación:</p>

    <p>El movimiento Hippie, surgido en la década de 1960 como una subcultura juvenil en Estados Unidos y se extendió a otras partes del mundo. Los hippies abogaban por la paz, el amor, la libertad individual y la igualdad. Rechazaron la guerra de Vietnam y cuestionaron la autoridad y las estructuras sociales tradicionales. Promovieron el uso de drogas psicodélicas como el LSD, el estilo de vida comunitario, la música y el arte como formas de expresión y liberación.</p>

    <?php
       renderImage('hu2-u3-hippie.webp', 'Auto decorado a la usanza hippie. Imagen de Magnus Manske.', 'https://upload.wikimedia.org/wikipedia/commons/b/b5/Hippie_bug%21_%281043753793%29.jpg', 'Wikimedia Commons.');
    ?>

    <p>El movimiento por los derechos civiles se centró en la lucha por la igualdad de derechos y la eliminación de la discriminación racial en Estados Unidos. Surgió en la década de 1950 y 1960, y fue liderado por figuras como Martin Luther King Jr., Malcolm X y Rosa Parks. Los activistas del movimiento de los derechos civiles se manifestaron contra la segregación racial, la brutalidad policial y lucharon por el derecho al voto y la igualdad de oportunidades para las personas afroamericanas.</p>

    <?php
       renderImage('hu2-u3-civiles.webp', 'Rosa Parks en la estación de policía. Foto de Adam Cuerden.', 'https://upload.wikimedia.org/wikipedia/commons/e/ea/Rosa_Parks_being_fingerprinted_by_Deputy_Sheriff_D.H._Lackey_after_being_arrested_on_February_22%2C_1956%2C_during_the_Montgomery_bus_boycott.jpg', 'Wikimedia Commons.');
    ?>

    <p>El movimiento feminista se desarrolló en respuesta a las desigualdades de género y buscó la igualdad política, social y económica entre hombres y mujeres. Surgió en diferentes momentos y formas en todo el mundo durante el siglo XX. Se luchó por el derecho al voto de las mujeres, el acceso a la educación, la igualdad salarial y el reconocimiento de los derechos reproductivos y sexuales. Algunas figuras destacadas del movimiento feminista incluyen a Simone de Beauvoir, Betty Friedan y Gloria Steinem.</p>

    <?php
       renderImage('hu2-u3-feminismo.webp', 'Simone de Beauvoir. Foto de Riad Salih.', 'https://commons.wikimedia.org/wiki/File:Simone_De_Beauvoir2.jpg', 'Wikimedia Commons.');
    ?>
   
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
