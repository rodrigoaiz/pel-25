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
  <h3>Referencias relativas y absolutas</h3>
  <p>Las referencias a celdas son consideradas las coordenadas en una HEC, que son la intersección entre la columna y la fila que aloja el valor o la constante a ser evaluada desde una fórmula o función en la HEC. Un ejemplo sería la referencia A4, que define la posición de la celda que se conforma de la columna A y la fila 4, siendo estas la dirección en libro de HEC.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t3_tipos_referencias.webp', 'Tipos de referencias.'); ?>
  </div>
  <p>Por lo tanto, la HEC se identifican tres tipos de referencias:</p>
  <h4>Relativas</h4>
  <p>Son las más empleadas en la HEC, estas guardan la dirección y/o posición de la celda, la cual es modificada una vez que se copia la fórmula a otra, es decir, la HEC ajusta la coordenada de la celda, por lo tanto, se modifican la posición también en la fórmula, empleando a las celdas como referencias.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe('VwwqOr5dsyU', 'Referencias relativas.') ?>
  </div>
  <h4>Absolutas</h4>
  <p>son celdas que permanecen fijas dentro de una HEC, es decir, si se copia la fórmula a otra dirección, la celda permanecerá constante y no es modificado el valor de ésta aun cuando se cambie a otra posición de la celda. Para fijar una referencia absoluta se coloca el símbolo de moneda (<span class="font-extrabold">$</span>) al inicio del nombre de la columna (B) y al inicio del nombre de la fina (3), <em>B</em>3.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe('oi36l-OS-4s', 'Referencias absolutas.') ?>
  </div>
  <h4>Mixtas</h4>
  <p>este tipo de referencias incluye partes relativas y absolutas, es decir, puede estar fija la columna o fila con el símbolo de moneda, por ejemplo: <em>A</em>1<em>o</em><em>A</em>1. En donde la columna o fila puede ser relativa.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t3_r_mixta.webp', 'Referencias mixtas.') ?>
  </div>
  <?php ob_start(); ?>
  <p>Realiza la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a6', "Referencias en una HEC", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Has concluido la lección y para reforzar los conceptos te invito a realizar el siguiente cuestionario de autoevaluación para que conozcas tu avance en el aprendizaje “utiliza fórmulas con referencias relativas y absolutas” ¡Éxito!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a7', "Referencias relativas y absolutas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
