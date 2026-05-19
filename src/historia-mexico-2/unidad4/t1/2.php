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
  <h2>El contexto mundial</h2>

  <p>El concepto esencial que debes tener claro para trabajar el tema es el de <b>globalización</b>. Es un <b>proceso histórico</b> que los países europeos iniciaron en el siglo XVI con los procesos de conquista en América, África y Asia. Se fortaleció con otro proceso histórico: el desarrollo tecnológico que constituye el motor del capitalismo. La aplicación de la tecnología está presente en la Segunda Revolución Industrial a finales del siglo XIX y en la Tercera Revolución Científico-tecnológica que inicia a mediados del siglo XX.</p>

  <p>Para profundizar más sobre el concepto te invito a revisar el siguiente video:</p>

  <?php
  renderVideoIframe('HyMa2Zz1jQ0', 'GLOBALIZACIÓN: resumen FÁCIL');
  ?>

  <?php ob_start(); ?>
    <p>Así mismo, para comparar este concepto con el del neoliberalismo te invito a revisar las siguientes tarjetas:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a2', "Globalización y neoliberalismo", $ActividadContent);
    ?>

    <p>En los años setenta, 1973-1975, el capitalismo vive una crisis económica mundial. Para superarla y restablecer la economía de los países europeos devastados por el ciclo de Guerras Mundiales fue necesario hacer intervenir al Estado en la economía invirtiendo en gasto social, es decir, el gobierno destinó recursos a políticas y programas para mejorar la calidad de vida de los ciudadanos quienes vieron garantizados sus derechos con el Estado de Bienestar. La teoría económica que fundamentó esta decisión es la de John Maynard Keynes. El autor apoya una economía guiada principalmente por el sector privado pero operada en parte por el Estado. Considera a la intervención estatal como necesaria para moderar los auges y caídas de la actividad económica.</p>

    <p>A finales de los años setenta la primer ministra británica Margaret Thatcher concibió a la inversión en el gasto público como un obstáculo que habría que eliminar para sobrepasar la crisis del capitalismo debido al aumento en los precios del petróleo, y los ajustes de la política monetaria y fiscal en las industriales. Otorgó un papel más importante a la empresa privada y a la iniciativa personal. Propuso abandonar el Estado de Bienestar, restaurar el liberalismo económico para emprender políticas neoliberales: redujo el gasto público, privatizó los servicios públicos, y limitó el poder sindical. </p>

    <p>Para conocer las consecuencias de las decisiones de la ministra británica en su país te invito a revisar el siguiente video:</p>

    <?php
      renderVideoIframe('T9ePNqFdv9w', 'Margaret Thatcher, la vida de una mujer amada y odiada.');
    ?>

    <p>Una vez que revisaste el video ¿Sabes en qué momento nuestro país entra a la globalización y cómo es que el Estado de bienestar transita hacia el Estado neoliberal?</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
