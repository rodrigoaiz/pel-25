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
    <p>El movimiento pacifista se caracterizó por su oposición a la guerra y la violencia en todas sus formas. Surgió en respuesta a los conflictos bélicos del siglo XX, especialmente la Guerra de Vietnam. Los pacifistas abogaron por la resolución pacífica de conflictos, la no violencia y el desarme nuclear. Organizaciones como Amnistía Internacional y Greenpeace fueron ejemplos destacados de activismo pacifista. Uno de los eventos más significativos del movimiento pacifista fue el festival de tres días en Woodstock, donde se presentaron grandes figuras de la música de esa época como Jimmy Hendrix, Joan Baez, Santana, Grateful Dead, Creedence y Janis Joplin entre muchos otros.</p>

    <?php
       renderImage('hu2-u3-concierto.webp', 'Cartel del concierto en Woodstock, 1969. Imagen de Ixfd64.', 'https://upload.wikimedia.org/wikipedia/commons/b/b7/Woodstock_poster.jpg', 'Wikimedia Commons.');
    ?>

    <p>En México, durante el año de 1971 se llevó a cabo el festival de Avándaro, con una fuerte inspiración del espíritu contracultural de Woodstock, este festival se llamó Rock y ruedas y tuvo lugar en Avándaro, Estado de México el 11 y 12 de septiembre de ese año. Si deseas conocer más acerca del festival de Avándaro y por qué las autoridades prohibieron durante mucho tiempo algunas expresiones musicales en el país te invitamos a ver el siguiente documental del canal 22 sobre el festival, contado por los artistas que vivieron ese momento.</p>

     <?php
      renderVideoIframe('Eps6znh-J1Q', 'Festival Avandaro');
      ?>

    <p>Por otra parte, el movimiento ecologista se originó como una respuesta a las preocupaciones sobre la degradación ambiental y el agotamiento de los recursos naturales. Surgió en la década de 1960 y 1970, y abogó por la conservación del medio ambiente, la protección de la biodiversidad y la adopción de prácticas sostenibles. Greenpeace, Earth Day y el movimiento por la justicia climática son ejemplos de movimientos ecologistas significativos.</p>

    <p>Cabe destacar que estos movimientos estaban interconectados y compartían ideas y valores contraculturales. Cuestionaban las estructuras de poder, luchaban por la justicia social y promovían un cambio transformador en la sociedad. A través de la acción colectiva y la movilización, estos movimientos influyeron en el panorama político y cultural, y dejaron un legado duradero en la historia del siglo XX.</p>

     <?php ob_start(); ?>
    <p>Antes de continuar vamos a resolver un pequeño reto para reforzar nuestros conocimientos hasta aquí.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t6a2', "La contracultura", $ActividadContent);
    ?>
   
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
