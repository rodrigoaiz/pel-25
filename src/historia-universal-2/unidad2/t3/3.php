<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Consecuencias de la segunda guerra mundial</h2>
  <p>Recordemos que, en 1945, en las conferencias de Yalta y Potsdam, las potencias aliadas alcanzaron acuerdos para definir el Nuevo Orden Mundial que regiría en la posguerra. Tal y como se tenía previsto, Alemania fue dividida en cuatro secciones o zonas de ocupación militar; una a cargo de cada uno de los ejércitos aliados. Observa el siguiente mapa.</p>
     <img class="mx-auto" src="<?php echo PATH_IMAGES . 'hu2-u2-berlin.webp'; ?>">
  <p>Lo que ocurrió finalmente fue que Inglaterra y Francia no pudieron sostener una ocupación efectiva (estaban demasiado ocupados en su propia reconstrucción). Por tanto, la zona occidental quedó gradualmente bajo control de los Estados Unidos, y la zona Oriental a cargo de la URSS. Esto ya constituía un emblema del mundo en los años siguientes.</p>
  <p>Se calcula que murieron en combate y en campos de exterminio unos 40 millones de personas, mientras que otros veinte millones tuvieron que emigrar huyendo de las hostilidades o de la persecución racial. Unos 25 millones perdieron sus hogares.</p>
    <?php
    renderImage('hu2-u2-deportacion.webp','Bulgaria deporta a los judíos macedonios. Imagen de Politicsfan4.', '','Wikimedia Commons.');
    ?>
  <p>La capacidad productiva de vastas zonas en Alemania y el Occidente de Rusia, así como Italia y el Sur de Francia quedó devastada. Esto ameritará acciones e instituciones de apoyo a la recuperación. En 1945, a las potencias occidentales (principalmente a los Estados Unidos) les preocupaba la posibilidad de enfrentar una nueva crisis económica como la que había padecido el orbe en los años 30. Era muy importante, por ello, garantizar una pronta recuperación de las naciones afectadas por la II Guerra Mundial. Este fue uno de los primeros propósitos de la ONU, creada en 1946. Su misión fundamental sería garantizar la coexistencia pacífica entre las naciones; pero tuvo también la función de prestar asistencia económica a los países que así lo requiriesen.</p>
  <p>Con este propósito se crearon instituciones financieras como el Banco Internacional para la Recuperación y el Desarrollo (BIRD, que respaldó la recuperación europea y que más tarde se convirtió en el Banco Mundial) y el Fondo Monetario Internacional (cuyo primer objetivo era otorgar créditos condicionados a las naciones en desarrollo). Asimismo, en 1947 se logró el Acuerdo General sobre Aranceles y Comercio (GATT, por sus siglas en inglés) cuyo propósito era fortalecer el comercio internacional mediante la reducción de aranceles[2]. Con el GATT, los países industrializados (encabezados por los Estados Unidos) buscaban generar condiciones para su expansión económica sin tener que recurrir a la guerra (como venía aconteciendo durante la época del imperialismo colonialista). Muy relacionado con lo anterior, una de las consecuencias más importantes de la Segunda Guerra Mundial fue el proceso de descolonización, que abarcará varias décadas.</p>
  <p>Ante la devastación de Europa, los Estados Unidos se convirtieron en la principal potencia económica y militar del mundo. Finalmente, aunque la URSS se había aliado a las potencias capitalistas para derrotar al fascismo, al desaparecer el enemigo en común (Hitler) afloraron las rivalidades. El mundo de la posguerra estará polarizado en dos bloques: el socialismo Real, encabezado por la URSS y el bloque capitalista, representado por los Estados Unidos. Veremos esto con más detalle en la siguiente unidad.</p>
  <?php ob_start(); ?>
  <p>Para completar tu formación sobre el tema de la segunda guerra, realiza el siguiente trabajo y súbelo a la plataforma.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a4', "México en la segunda guerra mundial", $ActividadContent);
  ?>

  <h4>REFERENCIAS</h4>
  <p>Béjar, María Dolores (2011). Historia del Siglo XX. Buenos Aires, Siglo XXI Editores.</p>
  <p>Benz, Wolfgang y Hermann Graml. El Siglo XX. III. Problemas mundiales entre los dos bloques de poder. México, Siglo XXI eds.</p>
  <p>Bianco, Lucien. 2010 (1976) Asia Contemporánea. México, editorial Siglo XXI.</p>
  <p>Cantú, G.M.D. D. (2015). HISTORIA UNIVERSAL. DE LA ERA DE LAS REVOLUCIONES AL MUNDO Globalizado (4a ed). México, Pearson HispanoAmerica.</p>
  <p>Hobsbawm, Erik. 1994. Historia del Siglo XX. Barcelona, ed Crítica</p>
  <p>Lowe, Norman 2013 (1982). Guía ilustrada de Historia Mundial. México, Fondo de Cultura Económica.</p>
  <p>Tanaka, Michiko (2011). Historia Mínima de Japón. El Colegio de México.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
