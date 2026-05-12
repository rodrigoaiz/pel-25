<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La música y cine mexicano</h2>

  <p>Con relación a la música, a nivel mundial se hablaba de una revolución musical o de una revolución cultural, con múltiples ritmos desarrollados por la población de origen africano norteamericana, como el <b>jazz, blues, el country, el rock and roll y el rock</b>. Destacaba la música de protesta, que giraba en torno a la música de Bob Dylan. Otros grupos sobresalen por su música, como The Doors, The Beatles y los Rolling Stones; cuyas canciones hablarían, inicialmente de romances y amoríos, para luego pasar a sueños.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-musica.webp', 'Música en México en los años 60');
    ?>
  </div>

  <p>En México a partir de los años 40 encontramos una diversidad de <b>géneros musicales</b>, cuyas letras <b>reflejan transformaciones sociales</b>. En este sentido podemos encontrar canciones rancheras que difunden diferentes estados de ánimo sobre todo en una sociedad rural y que muchas veces se proyectaba en el cine. Encontramos también el danzón, los boleros y el rock con un ambiente de rebeldía en centros urbanos. </p>

    <?php ob_start(); ?>
    <p>A continuación, escucha las siguientes melodías y realiza la actividad:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a15', "La música en México 1940-1970", $ActividadContent);
    ?>

    <?php ob_start(); ?>
    <p>A continuación, escucha las siguientes melodías y realiza la actividad:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a16', "La música en México 1940-1970", $ActividadContent);
    ?>

  <p>Finalmente, el <b>cine</b> sirvió como medio de difusión para <b>reflejar las realidades sociales de México</b> de esos años. Prácticamente todos los aspectos importantes de la vida humana fueron retratados en las películas, con temas diversos, exaltando la mexicanidad a través de los paisajes, escenificando la grandeza de la tierra, de la población rural, mostrando el machismo, y en otros momentos, el espacio urbano como sinónimo de modernización con la consolidación de una clase media, mostrando la vida nocturna y los problemas sociales.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-cine.webp', 'cine mexicano en los años 60');
    ?>
  </div>

  <p>Para identificar los aspectos señalados, revisa el siguiente vídeo:</p>

  <?php
      renderVideoIframe('KYPUnpOX5EY', 'La época de oro del cine mexicano');
    ?>
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
