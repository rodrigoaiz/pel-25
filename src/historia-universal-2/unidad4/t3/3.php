<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

  <p>
    Ahora mencionaremos algunos efectos de la posmodernidad en la sociedad del siglo XXI. Es importante destacar que estos efectos no son 
    uniformes en todas las sociedades y pueden variar según el contexto cultural y geográfico.
  </p>

  <p>
    La posmodernidad ha llevado a una mayor fragmentación y diversificación de las identidades culturales. Las sociedades contemporáneas 
    están compuestas por una multiplicidad de subculturas y grupos identitarios que desafían las categorías tradicionales y se centran en 
    la diferencia y la pluralidad.
  </p>

  <p>
    La posmodernidad ha influido en la estructura familiar tradicional. Las nociones de matrimonio, género y roles familiares han sido 
    cuestionadas y transformadas. Se ha observado un aumento en la diversidad familiar, incluyendo familias monoparentales, parejas del 
    mismo sexo y modelos familiares no convencionales.La posmodernidad ha enfatizado la importancia del individuo y su autonomía. Se valora 
    la libertad de elección y la capacidad de construir una identidad personalizada. Esto ha llevado a un mayor énfasis en el desarrollo y 
    la expresión del yo individual.
    </p>

    <p>
        La posmodernidad ha coincidido con el auge del consumismo y la sociedad de la información. El consumo de bienes y servicios se ha 
        convertido en una parte central de la identidad y la experiencia contemporáneas. Además, la tecnología de la información y la 
        comunicación ha transformado la forma en que nos relacionamos y accedemos a la información.
    </p>

    <p>
        La posmodernidad ha generado una mayor desconfianza hacia las instituciones tradicionales, como el gobierno, las corporaciones 
        y las religiones. Se cuestiona su legitimidad y se busca una mayor transparencia y participación ciudadana en la toma de decisiones.
    </p>

    <p>
        La posmodernidad ha traído consigo la era de la hiperconectividad. Las tecnologías digitales han transformado la forma en que nos 
        comunicamos, conectamos y accedemos a la información. Las redes sociales y las plataformas en línea han creado nuevas formas de 
        interacción social y han amplificado las voces individuales.
    </p>

    <?php
       renderImage ('hu2-u4-telefono_inteligente.webp', 'La hiperconectividad es una característica del mundo posmoderno. Imagen de pikisuperstar.', 
       'https://www.freepik.es/fotos/celular-redes-sociales#query=redes%20sociales&position=14&from_view=search&track=ais&uuid=dbc97646-e78c-42d2-b972-f732a0610221', 'Freepik');
  ?>

  <p> Revisa el siguiente video acerca de la posmodernidad. </p>

  <?php
        renderVideoIframe('_ABo77MhHQrI', 'Los Posmodernos');
    ?>

    <?php ob_start(); ?>
  <p>Te invitamos a realizar el siguiente reto para consolidar algunos de los conceptos fundamentales.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t3a1', "Posmodernidad", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>