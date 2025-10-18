<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Beneficios de la industria minero-metalúrgica. </h2>

  <p>Como has estudiado desde la primera unidad, los minerales son recursos naturales útiles para los seres humanos, la industria minero-metalúrgica, ha apoyado la extracción y transformación de estos recursos para mejorar la calidad de vida de las personas y obtener productos derivados de los minerales.</p>

  <p>La industria minero-metalúrgica aporta bienes materiales, genera empleos en las zonas mineras, servicios a comunidades como la energía eléctrica y agua, además de ser un sector industrial que aporta a la economía del país, porque México es un país con una riqueza en minerales, produce 53 minerales, de los cuales 11 son metálicos y 42 no metálicos. Destacando con el primer lugar a nivel mundial en la producción de plata, con 13 años consecutivos de ser el principal productor de este mineral de acuerdo con el reporte del documento de Situación Actual de la Minería en México, 2020-2023 presentado por el Centro de Estudios de las Finanzas Públicas (CEFP). Además de ser productor de Pb, Zn, Mo, Cd, Au, Se y Cu ocupando las primeras diez posiciones a nivel internacional.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-beneficios.webp','La industria minero-metalúrgica contribuye en la elaboración de distintos productos cotidianos como celulares, transportes, utensilios y accesorios.')
  ?>
  </div>

  <p>Para conocer más acerca de los beneficios de la industria minero-metalúrgica puedes consultar las siguientes páginas, en las cuales encontrarás información relevante de la situación de esta industria en el país, producción de minerales, exportaciones, mercado laboral y la aportación económica de este sector al PIB (Producto Interno Bruto).</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-medioa.webp','','https://www.economia.gob.mx/files/comunidad_negocios/informacion_sectorial/mineria/mineria_y_medio_ambiente.pdf','Minería y medio ambiente')
  ?>
  </div>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-industriam.webp','','https://www.cefp.gob.mx/publicaciones/documento/2024/cefp0132024.pdf','Situación Actual de la Minería en México, 2020-2023')
  ?>
  </div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
