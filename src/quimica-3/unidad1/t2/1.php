<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';
ob_start();
?>
<section>
  <h2>Recursos naturales en México</h2>
  <h3>Clasificación</h3>
  <h4>Materia prima para la industria</h4>

  <p>En México, las actividades económicas se agrupan en tres grandes sectores:</p>

  <?php
  $accordionItems1 = [
    [
      'title' => 'Sector primario',
      'content' => 'Formado por la agricultura, ganadería, pesca, la minería y en general, por las actividades que explotan directamente los recursos naturales.'
    ],
    [
      'title' => 'Sector secundario',
      'content' => 'Se integran todas las industrias que transforman las materias primas en productos intermedios y de consumo final '
    ],
    [
      'title' => 'Sector terciario',
      'content' => 'Tamabién llamado "de servicios" está constituido por aquellas actividades que complementan a las anteriores y que se requiere para que funcione el sistema aunque por lo general no producen objetos tangibles o bienes. Entre ellos se encuentran el comercio, el transporte y los servicios financieros.
'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>
  
  <p>Los recursos naturales que se tratan en esta unidad, están referidos al sector primario y pueden obtenerse del suelo, el agua y el aire. </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u1-agua.webp', 'El agua es uno de los principales recursos naturales del planeta.');
       renderImage('q3-u1-zanahoria.webp', 'A partir de las plantas como materia prima, se elaboran un gran número de productos industriales.');
       renderImage('q3-u1-flores.webp', 'Algunas plantas medicinales han sido la base para la obtención de principios activos que forman parte de los medicamentos.');
    ?>
  </div>

    <p>México es un país rico en recursos naturales, entre los cuales destacan el petróleo, la plata, el oro, el cobre, el gas natural y diversos minerales. Además, cuenta con vastos recursos forestales y acuíferos. El petróleo, por ejemplo, es fundamental para la elaboración de combustibles y productos petroquímicos, que son esenciales en diversas industrias como la automotriz y la química. Por otro lado, el cobre es ampliamente utilizado en la fabricación de cables eléctricos y componentes electrónicos, siendo crucial para la industria tecnológica y de construcción.</p>

    <p>A continuación, realizarás una actividad para buscar ejemplos de productos industriales que contengan algún recurso natural derivado de las tres fuentes anteriormente mencionadas.</p>


  <?php ob_start(); ?>
    <p>Ahora que identificas que los recursos naturales son fundamentales para elaborar productos esenciales para la vida, realiza la actividad Recursos naturales. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a2', "Recursos naturales", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
