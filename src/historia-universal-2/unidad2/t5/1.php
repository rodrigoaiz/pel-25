<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Vanguardias Artísticas del Siglo XX: Explorando la Revolución Creativa</h2>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-gernika.webp','Imagen de Czonek','https://es.wikipedia.org/wiki/Guernica_(cuadro)#/media/Archivo:Mural_del_Gernika.jpg', 'wikimedia commons.')
  ?>
  </div>

  <h3>Introducción</h3>
  <p>El siglo XX fue testigo de un período de cambio radical y agitación en el mundo del arte. Las vanguardias artísticas, una serie de movimientos y estilos que se desarrollaron a lo largo del siglo, desafiaron las convenciones establecidas, redefinieron la creatividad y cuestionaron las nociones tradicionales de belleza, realidad y expresión. Estos movimientos, que surgieron en Europa y se extendieron por todo el mundo, tuvieron un impacto duradero en la cultura y la sociedad.</p>
  <h4>Contexto Histórico y Cultural</h4>
  <p>Para comprender el surgimiento de las vanguardias artísticas en el siglo XX, es esencial considerar el contexto histórico y cultural en el que florecieron. A medida que el mundo atravesaba el umbral del nuevo siglo, la sociedad estaba experimentando cambios profundos. La Revolución Industrial, la urbanización y la tecnología estaban transformando la vida cotidiana y la percepción del mundo. Además, las consecuencias devastadoras de la Primera Guerra Mundial y la inestabilidad económica y política que le siguió generaron un ambiente propicio para la reevaluación de valores y enfoques tradicionales.</p>
  <p>En este contexto, los artistas comenzaron a buscar nuevas formas de expresión y a cuestionar las convenciones artísticas existentes. La idea de que el arte debería ser una manifestación de la subjetividad individual y la creatividad personal ganó relevancia. Los artistas se sintieron impulsados a explorar nuevas técnicas y medios para transmitir sus ideas y emociones. Surgieron movimientos que rechazaron la representación realista y la narrativa lineal en favor de enfoques más abstractos y simbólicos.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
