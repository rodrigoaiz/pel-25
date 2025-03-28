<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Radianes</h3>
  <p>Los radianes son una medida angular que desempeña un papel fundamental en trigonometría y cálculos matemáticos relacionados con funciones trigonométricas, a diferencia de los grados, que es una medida angular común, <strong>los radianes se basan en la longitud del arco en una circunferencia unitaria</strong> (una circunferencia con radio igual a 1 unidad). </p>
  <p>Definición de Radianes: <strong>Un radián</strong> (abreviado como "rad") es la medida del ángulo central subtendido por un arco cuya longitud es igual al radio de la circunferencia, matemáticamente, <strong>un radián es la medida del ángulo en el que el arco es igual en longitud al radio de la circunferencia</strong>.</p>
  <p>Revisa los siguientes videos para conocer el concepto de radián, así como su relación entre grados y radianes (a cuántos grados equivale un radían).</p>
  <div class="lg:grid grid-cols-2 gap-8">
    <?php
    renderVideoIframe('L5GNg9a_gSc', 'Qué es un Radián', 'max-w-xl');
    renderVideoIframe('-nz4EpEWhzw', 'Relación entre grados y radianes | A cuántos grados equivale un radián', 'max-w-xl');
    ?>
  </div>
  <p>En este foro, se explorará el <strong>concepto de radianes</strong>, su relevancia en las matemáticas y la trigonometría, comprender <strong>los radianes es esencial</strong> para abordar una variedad de problemas matemáticos y trigonométricos para después aplicarlos en Hoja Electrónica de Cálculo.</p>
  <?php ob_start(); ?>
  <p>¡Tu participación es clave, te invitamos a participar en este foro!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a12', "Radianes", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
