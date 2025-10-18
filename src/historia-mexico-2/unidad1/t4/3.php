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
  <h2>El cine y la fotografía de la Revolución Mexicana</h2>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-cine.webp','Cine mexicano');
      ?>
  </div>

  <p>El cine de <b>la Revolución Mexicana (1910-1920)</b> fue un fenómeno crucial tanto para la <b>documentación histórica</b> como para la evolución del cine en México. Durante este periodo, el cine documental <b>capturó imágenes de batallas, movimientos de tropas y figuras clave como Francisco I. Madero, Emiliano Zapata, Pancho Villa y Venustiano Carranza</b>, registrando momentos significativos del conflicto.</p>

  <p>En este contexto, destaca la figura de <b>Salvador Toscano</b>, cuya contribución fue fundamental para dar estructura a las imágenes de la Revolución Mexicana. En sus antologías de hechos históricos, recopiló material cinematográfico de otros camarógrafos de la época. Toscano comenzó a filmar en 1897 y, durante los primeros años de la Revolución, trabajó con su camarógrafo Antonio Ocañas. Además, reunió películas de los hermanos Alva, Jesús H. Abitia, Enrique Rosas y otros cineastas que documentaron el movimiento revolucionario (Cuenca, 2022).</p>

  <p>A continuación revisa el siguiente vídeo para observar el trabajo de Salvador Toscano:</p>

  <?php
  renderVideoIframe('bCif-Qbbt2g', 'Salvador Toscano: rescate y estructura de las imágenes de la Revolución Mexicana - UNAM Global');
  ?>

  <p><b>La fotografía</b>, ha sido un recurso invaluable para hacer historia. Las imágenes, como documento histórico y social, permiten dar cuenta de una época, desde diversas miradas disciplinares y metodológicas, por tanto, habrá que mencionar a <b>Agustín Víctor Casasola Velasco (1874-1938)</b>, cuya serie de imágenes fotográficas están resguardadas en el acervo que lleva su nombre. </p>

  <?php ob_start(); ?>
  <p>Revisar con detenimiento las fotografías de la Revolución Mexicana y al terminar participa en el Foro de Discusión</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a16', "Foro fotografía de la Revolución ", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
