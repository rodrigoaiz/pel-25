<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Eficiencia de los Procesos Industriales y su impacto ambiental y socioeconómico</h2>

  <p>En todos los procesos industriales que revisamos a lo largo de esta lección, verás que tienen cierto grado de eficiencia, lo cual permite  maximizar la producción y minimizar los costos, así como el impacto ambiental. En el caso del proceso productivo del amoniaco, mejorar la eficiencia significa optimizar el uso de recursos como energía y materias primas, y reducir la generación de residuos y emisiones. En ese sentido, se promueve un desarrollo más sostenible y mejora la competitividad de la industria mexicana en el mercado global.</p>

  

  

  <p>Considerando lo anterior, te sugerimos revisar las siguientes noticias</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-pemex.webp','','https://www.informador.mx/economia/Pemex-proyecta-un-incremento-del-145-en-la-produccion-de-fertilizantes-durante-el-sexenio-20240402-0112.html','Pemex proyecta un incremento del 145% en la producción de fertilizantes durante el sexenio')
    ?>
    
    <?php
      renderImage('q3-u3-fuga.webp','','https://jornadaveracruz.com.mx/nueva-fuga-de-amoniaco-en-ducto-pajaritos-cosoleacaque/','Nueva fuga de amoniaco en ducto Pajaritos – Cosoleacaque')
    ?>
    
  </div>

  <?php ob_start(); ?>
  <p>Después de haber leído las noticias, te invitamos a participar en el foro Beneficio o perjuicios.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a9', "Foro “Beneficios o perjuicios”", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
