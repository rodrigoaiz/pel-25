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
  <h2>El conflicto en San Salvador Atenco</h2>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-salvador.webp', 'Conflicto en San Salvador Atenco');
        ?>
  </div>

  <p>En octubre de 2001, el gobierno panista de Vicente Fox emitió 19 decretos expropiatorios con el fin de realizar uno de los proyectos más ambiciosos y redituables: la construcción de un nuevo aeropuerto en la zona de Texcoco, Estado de México. Su administración ofreció siete pesos por cada metro cuadrado de tierra, principalmente terrenos agrícolas. Este hecho no agradó a los habitantes de los pueblos afectados: Tocuila, Nexquipayac, Santa Cruz de Abajo, San Felipe y San Salvador Atenco,  que comenzaron a organizar la resistencia al aeropuerto, a través de marchas, bloqueos carreteros, entre otros. Las movilizaciones fueron encabezadas por: Atenco Unido y el Frente de Pueblos en Defensa de la Tierra (FPDT).</p>

  <p>Revisa ahora el siguiente vídeo:</p>

  <?php
      renderVideoIframe('795Me6giGPs', 'Atenco. Una crónica de resistencia civil');
    ?>

  <p>De esta manera los movimientos sociales emergentes fueron una respuesta a las políticas económicas neoliberales, entre ellas la privatización de empresas, la apertura comercial y la reducción del gasto público las cuales profundizaron diversas problemáticas en el país, entre ellas: la desigualdad social, donde sectores amplios de la población fueron marginados, pero que además con la apertura comercial también hubo precarización del empleo, con bajos salarios, sin prestaciones, ni estabilidad. Así diversos grupos entre ellos las comunidades indígenas y los jóvenes vieron reducidas sus oportunidades de desarrollo económico con el despojo de tierras, apropiación de recursos naturales, en beneficio de las empresas neoliberales, así como la falta de oportunidades de gran parte de la población, mientras un sector pequeño era beneficiado económicamente.</p>

  <p>A esta situación agreguemos el surgimiento y criminalización de protestas, así como el uso de la fuerza contra manifestantes, generando indignación social, como fue el caso Atenco (2006), Ayotzinapa (2014) o la violencia contra periodistas, defensores de derechos humanos, movimientos feministas entre otros que han movilizado a amplios sectores de la población mexicana.</p>
    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
