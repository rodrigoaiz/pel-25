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
  <h2>Los jóvenes y la participación política</h2>

  <p>A lo largo de esta unidad has reflexionado sobre los cambios económicos y políticos impulsados por los gobiernos de México a partir de 1988, con la implementación de reformas neoliberales que transformaron la situación económica del país. Estas reformas también incluyeron una serie de medidas orientadas a reestructurar el Estado mexicano, en un contexto donde estuvo presente la alternancia política, pero también donde hubo movimientos sociales emergentes que se opusieron a los gobiernos en turno por el autoritarismo y las represiones sociales, aunado a la desigualdad social y la aplicación de políticas neoliberales que afectaron a grandes capas de la población.</p>

  <p>En este marco, cabe preguntarse si <b>en el ámbito político</b> los gobiernos contribuyeron a la <b>construcción de un país más democrático</b>, entendiendo la  democracia como un régimen político donde el poder es ejercido por el pueblo y que, retomando algunas de las ideas de Norberto Bobbio, debemos pensar la <b>democracia como un conjunto de reglas procesales para la toma de las decisiones colectivas</b>, incluyendo las condiciones necesarias para la aplicación de las mismas, que permitan la participación y deliberación colectiva, para garantizar condiciones de igualdad real en la sociedad.</p>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-jovenes.webp', 'Los jóvenes y la participación política');
        ?>
  </div>

  <p>Para reflexionar sobre la democracia en nuestro país, debemos considerar que existen cuatro elementos fundamentales de la democracia:</p>

  <ol class="ol-alpha">
    <li>El ser humano es un sujeto portador de derechos – autónomo, razonable y responsable;</li>
    <li>Es una forma de organización de la sociedad que garantiza el ejercicio y promueve la expansión de la ciudadanía;</li>
    <li>Hay elecciones libres, competitivas e institucionalizadas, así como reglas y procedimientos para la formación y el ejercicio del gobierno; </li>
    <li>Es una experiencia histórica particular que debe ser entendida y evaluada en su contexto (Álvarez Icaza, L., 2012, pág. 263).</li>
  </ol>

    <p>Estos aspectos son de gran relevancia porque no sólo permiten <b>distinguir una democracia electoral de una democracia de ciudadanas y ciudadanos</b> con estatus jurídico, con derechos y obligaciones en un espacio público; también exige todos los derechos humanos, con el fin de asegurar condiciones de dignidad y bienestar colectivo.</p>

    <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-Democracia.webp', 'La democracia en México');
        ?>
  </div>

  <p>A partir de los señalamientos anteriores habrá que responder cuestionamientos como: <b>¿México es actualmente un país democrático?</b> Para responder a esta pregunta debemos recordar que nuestro país tiene una Constitución: la de 1917 y un marco legal respaldado con instituciones electorales autónomas. Además <b>se ha dado la alternancia en el poder</b> en el año 2000 con la llegada de Vicente Fox Quezada, candidato del PAN y en el año 2018 con la llegada de Andrés Manuel López Obrador del partido Morena, aspecto que evidencia elecciones libres. Sin embargo, en nuestro país persisten problemas que <b>debilitan la democracia</b>, entre ellos el incremento de <b>la violencia e inseguridad, la corrupción e impunidad, la desigualdad social y económica</b>, entre otros, que generan un panorama desalentador y en muchos casos apatía hacia los problemas del país, que se refleja en la poca participación de los jóvenes en procesos de elección.  En este contexto, un reto sería: <b>¿cómo promover la participación ciudadana de los jóvenes, en pro de un país democrático?</b> </p>

  <?php ob_start(); ?>
    <p>Te invito ahora a reflexionar sobre la participación juvenil en procesos democráticos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a15', "Participación juvenil en procesos políticos", $ActividadContent);
    ?>

    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
