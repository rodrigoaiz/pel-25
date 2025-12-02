<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El Congreso Constituyente</h2>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-congreso.webp', 'Congreso Constituyente de 1917','https://upload.wikimedia.org/wikipedia/commons/1/1c/Congreso_Constituyente_de_1917.jpg', 'Wikimedia Commons');
      ?>
  </div>

  <p>Para 1917 Carranza enfrentaba la tarea de pacificar el país. Ante las expectativas generadas por el movimiento revolucionario, era fundamental sentar las bases para la restauración del orden público, lo que permitiría la progresiva recuperación de la actividad económica. Los primeros pasos debían darse en el ámbito jurídico, estableciendo las leyes que definirían el rumbo del México surgido de la Revolución. Se requería una nueva Constitución que reflejara las demandas de los distintos grupos sociales enfrentados durante años de conflicto.</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-carranza.webp', 'Venustiano Carranza y la Constitución de 1917');
      ?>
  </div>

  <p>Se convoca entonces a la <b>Asamblea Constituyente en Querétaro</b>, la cual contó con la participación de 220 diputados (incluyendo suplentes), entre ellos 62 abogados, 22 oficiales de alto rango, 19 agricultores, 18 profesores, 16 ingenieros, 16 médicos, 14 periodistas, 7 contadores, 5 líderes sindicales, 4 mineros, 3 ferrocarrileros, 2 farmacéuticos, 1 actor y 31 representantes de otras profesiones, como artesanos, comerciantes y empleados (Tobler Hans, 1994, pág. 351).</p>

  <p>De este modo, los participantes conformaron una nueva élite revolucionaria, en su mayoría provenientes de la clase media urbana, que asumió la tarea de <b>atender los distintos planteamientos surgidos de la Revolución</b> y de <b>redactar una nueva Constitución</b>. Si bien este documento retoma numerosos elementos de la Constitución de 1857, también incorpora importantes innovaciones.</p>

  <p>A continuación, revisa el siguiente vídeo interactivo:</p>

  <?php
  renderVideoIframe('2wrAUBJuBrY', 'Constitución de 1917, cimiento de la democracia');
  ?>


  <?php ob_start(); ?>
  <p>Una vez visto el video anterior, contesta las siguientes preguntas:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a9', "La Constitución de 1917 cimiento de la democracia", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
