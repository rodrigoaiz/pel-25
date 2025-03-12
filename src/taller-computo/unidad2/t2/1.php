<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Hardware de las microcomputadoras</h2>
  <h3>Presentación</h3>
  <p>Es un gusto iniciar contigo esta nueva lección de aprendizaje “Describe el hardware de acuerdo con su función y características”, en este identificarás las características del hardware para describirlo de acuerdo a su función, para lograr el aprendizaje realizarás diferentes actividades interactivas.</p>
  <div class="max-w-2xl mx-auto">
    <?php echo renderImage('u2_t2_engineer_compoisition.webp', 'Hardware de una computadora. Imagen de macrovector.', 'https://www.freepik.com/free-vector/it-engineer-isometric-compoisition_6346202.htm', 'Freepik.'); ?>
  </div>
  <p>Esperamos que disfrutes de las actividades y que estas de alguna forma logren tu aprendizaje.</p>
  <p>Para ello a continuación te presento la temática/contenido que utilizaremos para llevar a cabo tu aprendizaje.</p>
  <div class="my-5 mx-40 border border-primary px-5 py-2">
    <h4 class="my-0">Temática</h4>
    <h4>Hardware de las microcomputadoras:</h4>
    <ul class="disc">
      <li>Entrada.</li>
      <li>Salida.</li>
      <li>Entrada-salida.</li>
      <li>Almacenamiento.</li>
      <li>Comunicación.</li>
      <li>Motherboard</li>
      <li>Microprocesador</li>
      <li>Tipos de memorias.</li>
      <li>Puertos.</li>
    </ul>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
