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
  <h2>México ante los conflictos internacionales.</h2>

  <p>Si bien México tenía definida su posición en la <b>política exterior respetando el Derecho Internacional</b> y los planteamientos de la Doctrina Estrada, tenemos que durante el gobierno cardenista la situación internacional se caracterizaba por el auge del fascismo en Europa, que derivó en el inicio de la Segunda Guerra Mundial. Asimismo, tuvo lugar el fortalecimiento del gobierno totalitario en Japón y se desarrolló la Guerra Civil en España. En cada acontecimiento se evidenció una política exterior de corte nacionalista y con apego a la libre determinación y derecho internacional, lo que significó conflictos con los países imperialistas.</p>

  <?php ob_start(); ?>
        <p>Para que identifiques aspectos relevantes de estos sectores observa el siguiente video con atención, cuando termines, pon a prueba tu conocimiento respondiendo las preguntas que encontrarás al final.</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividadH5P('u2a10', "México ante los conflictos internacionales", $ActividadContent);
      ?>

      <p>La <b>no intervención</b> fue la política que caracterizó al gobierno cardenista, así como el actuar de sus delegados ante diversos escenarios internacionales. Sin embargo, como pudiste leer en la actividad que realizaste, su actuar fue distinto en la Guerra Civil Española, condenando también a las potencias de Francia e Inglaterra ante su neutralidad, misma que favoreció a los países fascistas y al franquismo.</p>

      <p>Para finalizar con el tema de la Guerra Civil Española, te invito a revisar el siguiente vídeo:</p>


      <?php
        renderVideoIframe('oge77pcD3Xg', '80 años de la llegada de los primero exiliados españoles a México');
      ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
