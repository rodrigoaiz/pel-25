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
  <h2>Educación en el México posrevolucionario, avances y desafíos</h2>

  <p>Durante la etapa posrevolucionaria se consideraba necesario promover una política educativa que llegara a los sectores populares, incluyendo el área rural para impulsar su desarrollo y  mejorar la productividad del país. Con este objetivo surge la <b>Secretaría de Educación Pública</b> (SEP) en 1921, a cargo de <b>José Vasconcelos</b>, quien emprendió una campaña masiva de alfabetización y promovió las llamadas <b>“misiones culturales”</b> para llevar la educación a los pueblos indígenas e incorporarlos al proceso de desarrollo. En este sentido se multiplicaron las escuelas elementales, estableciéndose las dominicales y nocturnas que colaboraron en la campaña de alfabetización; se dividió la educación media en secundaria y preparatoria; se fomenta la lectura de autores clásicos como Platón y Aristóteles; se promovieron las bibliotecas itinerantes y artistas mexicanos realizaron grandes murales en los que resumieron la historia de la Revolución Mexicana (Delgado de Cantú, 2007, pág. 116).</p>

  A continuación, revisa el siguiente vídeo para conocer las características de las misiones culturales
  <?php
    renderVideoIframe('1s4qyRJNaNY', 'Las misiones culturales');
  ?>

  <p>La obra educativa que inició Vasconcelos fue continuada por Puig Casauranc, Moisés Sáenz, Narciso Bassols e  Ignacio García Téllez, entre otros. Durante el gobierno Callista intentaron continuar con la escuela rural incluyendo parcelas para que los niños aprendieran a cultivar; se favorecieron las actividades deportivas, de salud pública, campañas contra el alcoholismo y se organizaron festividades artísticas. Sin embargo, la propuesta fracasó en el contexto de la rebelión cristera y porque la integración no respetaba sus costumbres y tradiciones. En años posteriores se promovió la construcción de escuelas rurales, la promoción de un conocimiento racional y laico, las campañas cívicas, la educación socialista y otros programas, en el que el profesor fungió como el misionero de la transformación ideológica y cultural.
  </p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-vasconcelos.webp', 'Jose Vasconcelos');
    ?>
  </div>

  <p>Debido a que el proyecto educativo para modernizar el país y promover el desarrollo encontró varios obstáculos, durante el gobierno Cardenista se promovió la <b>educación socialista</b>.</p>

  <p>A continuación, revisa el siguiente vídeo y al terminar realiza la actividad sugerida sobre Educación socialista</p>

  A continuación, revisa el siguiente vídeo para conocer las características de las misiones culturales
  <?php
    renderVideoIframe('1IbC8tM1hPM', 'Centenario SEP - La educación socialista (11/11/2021)');
  ?>

  <?php ob_start(); ?>
        <p>Completa la actividad en base al video anterior</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividadH5P('u2a12', "Educación socialista", $ActividadContent);
      ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
