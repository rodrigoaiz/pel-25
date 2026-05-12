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
  <h2>La Gran Depresión de 1929 y el impacto en México</h2>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-depresion.webp', 'La Gran Depresión de 1929');
    ?>
  </div>

  <p><b>La Gran Depresión</b> es el nombre que recibió la crisis económica de 1929 que comenzó en los Estados Unidos y pronto se extendió a varios países de Europa y América. En este contexto México no fue la excepción, ya que sus <b>efectos vulneraron la economía nacional</b>, la cual dependía del comercio de las exportaciones de materias primas, mismas que se suspendieron y afectaron la industria minera. Por otra parte, <b>la agricultura de exportación también cayó</b> al disminuir la demanda internacional. Además, trabajadores mexicanos que laboraban en los Estados Unidos fueron repatriados.</p>

      <?php ob_start(); ?>
        <p>A continuación, revisa el esquema para identificar los efectos de la Gran Depresión en la economía mexicana.</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividadH5P('u2a7', "Efectos de la crisis de 1929 en México", $ActividadContent);
      ?>

    <p><b>México empezó a recuperarse de la crisis a partir de 1932</b> gracias a una <b>intervención más activa del Estado en la economía</b>. En este contexto el gobierno mexicano promovió la Ley Federal de Irrigación, promulgada en 1925, con el propósito de incrementar la producción agrícola y la creación de la pequeña propiedad. Se fundó entonces la <b>Comisión Nacional de Irrigación</b>.</p>

    <p>Asimismo, los gobiernos impulsaron el mercado interno con medidas para proteger a los productores nacionales con impuestos y aranceles a las importaciones y mejorar las condiciones de vida en la ciudad.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
