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
    <p>Ahora que identificas que los recursos naturales son fundamentales para elaborar productos esenciales para la vida, realiza la actividad Recursos naturales. </p>


  <?php ob_start(); ?>
  <p>Los recursos naturales son la base fundamental de la materia prima que se utiliza en la industria para el desarrollo de productos. Los recursos naturales se transforman en bienes de consumo, fomentando así una visión más profunda de la importancia de participación de la química en todo el proceso de transformación.</p>
  <p>Sigue las instrucciones:</p>
  <ol>
    <li><strong>Realiza</strong> nueve dibujos, cada uno representando un recurso natural, distribuidos de esta manera: 3 de la atmósfera, 3 de la litosfera y 3 de la hidrosfera. Añade elementos que resalten la importancia y uso de cada recurso.</li>
    <li><strong>Elabora</strong> los dibujos a mano. Puedes utilizar colores o el material que elijas para dibujar. Incluye una nota al pie de cada dibujo de no más de tres líneas explicando qué representa cada dibujo y su importancia en la industria.</li>
    <li><strong>Escanea</strong> o toma una foto de alta calidad de cada dibujo con su pie de imagen. Guarda en una carpeta en Drive (podemos encontrar otra opción para compartir las imágenes) cada imagen con el nombre del recurso natural.</li>
    <li><strong>Revisa</strong> la lista de cotejo para valorar que tu actividad cumple con lo solicitado.</li>
  </ol>
  <p>Revisa la <a href="<?php echo PATH_DOCS . 'u1-t2-lista-cotejo.docx'; ?>" target="_blank">lista de cotejo</a> de la actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a2', "Recursos naturales", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
