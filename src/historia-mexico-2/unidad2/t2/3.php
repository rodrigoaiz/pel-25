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
  <h2>Lázaro Cárdenas y la reorganización económica (1934-1940)</h2>

   <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-cardenas-jijilpan.webp', 'Lázaro Cárdenas jijilpan');
    ?>
  </div>

  <p>El gobierno cardenista se rigió por primera vez, además de la Constitución y las leyes reglamentarias, por un <b>Plan Sexenal de Gobierno</b> que tenía como pilares fundamentales:</p>

  <ul>
    <li>la defensa de los recursos naturales del país,</li>
    <li>la aplicación de las leyes laborales a favor de los derechos de los trabajadores,</li>
    <li>el reparto de tierras en forma de ejidos y </li>
    <li>la reforma educativa visible en la escuela socialista.</li>
  </ul>

      <?php ob_start(); ?>
        <p>A continuación te invito a revisar las siguientes tarjetas para tener más información sobre este gobierno:</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividadH5P('u2a8', "Cardenismo", $ActividadContent);
      ?>

    <p>Un aspecto a destacar de la propuesta económica de Cárdenas para promover la independencia económica del país con la intervención del Estado en la economía fue centrarse en cuatro sectores estratégicos:gasto público, expropiación, reforma agraria e instituciones financieras estatales.</p>

      <?php ob_start(); ?>
        <p>Para que identifiques aspectos relevantes de estos sectores observa el siguiente video con atención, cuando termines, pon a prueba tu conocimiento respondiendo las preguntas que encontrarás al final.</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividadH5P('u2a9', "La economía del Cardenismo", $ActividadContent);
      ?>

    <p>Para terminar esta lección, es necesario recordar que al terminar la Revolución Mexicana los gobiernos de <b>Álvaro Obregón (1920–1924) y Plutarco Elías Calles (1924–1928)</b> enfrentaron el reto de <b>impulsar la reconstrucción económica del país</b>, para ello recordarás que  se <b>restableció la agricultura</b> con el reparto agrario y con créditos, se <b>impulsó la industria</b> entre las más importantes el petróleo,  se reorganizó el sistema financiero con la <b>creación del Banco de México</b>, se renegocia la deuda externa y <b>se fortaleció la infraestructura con la construcción de caminos</b>.</p>

    <p>Este impulso a la economía lo continuaron los gobiernos del Maximato ante un contexto adverso como fue la depresión de 1929, y con el <b>gobierno Cardenista</b> se da un nuevo impulso a la economía con la <b>nacionalización del petróleo y ferrocarriles</b>, además del impulso agrario y la mejora de una infraestructura, sentando las <b>bases de un Estado interventor de la Economía y las bases para un impulso de la industria vías sustitución de importaciones</b>.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
