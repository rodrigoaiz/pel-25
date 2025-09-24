<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

  <h2>Neoliberalismo</h2>

      <div class="mx-auto max-w-lg">
  <?php
       renderImage('hu2-u4-neo_liberal.webp', 'Cartel de 2012 que parodia a los líderes neoliberales representandolos como lo hacían los soviéticos. Imagen de Helper201.', 
       'https://commons.wikimedia.org/wiki/File:The_Neo-Liberal_Revolution,_Trafalgar_Lane,_Brighton.jpg', 'Wikimedia Commons.');
    ?>
    </div>

    <p>
        A partir de los años setenta el neoliberalismo se fue imponiendo mediante una serie de reformas estructurales que buscaban desmantelar la infraestructura que daba 
        soporte al Estado Benefactor: las empresas públicas, las políticas sociales, la negociación colectiva encaminada por los sindicatos.
    </p>
    <p>
        En 1989, en medio de la crisis de la deuda que afectó fuertemente a las naciones latinoamericanas, se llevó a cabo una conferencia organizada por el Instituto de 
        Estudios Económicos Internacionales. En ella se definieron algunas líneas para reorientar la política económica en la región. A estas directrices, basadas en una 
        lógica de mercado caracterizada por la apertura y disciplina macroeconómica, se les conoce como el Consenso de Washington, y constituyen la agenda para la implementar 
        los Programas de cambio estructural neoliberal en los países no industrializados. A partir del Consenso de Washington se impulsó un nuevo modelo económico, tanto en 
        países industrializados como en naciones en vías de desarrollo.
    </p>

      <b>
        La premisa básica del desarrollismo era que todo país podría "desarrollarse" si tan sólo su Estado implementaba las políticas apropiadas, y que al final habría 
        un mundo de estados más o menos semejantes y más o menos igualmente ricos. En su lugar, el Consenso de Washington proclamó que el mundo entraba en la era de la 
        ‘globalización’. Se decía que ésta traería el triunfo del libre mercado, la reducción radical del papel económico del Estado y, sobre todo, la eliminación de 
        todas las barreras creadas por el Estado para el movimiento transfronterizo de bienes y capital. El Consenso de Washington ordenaba que el papel central de los 
        gobiernos, en especial los del Sur, era terminar con las ilusiones del desarrollismo y aceptar la apertura irrestricta de sus fronteras. 
        <a> (Wallerstein, 2003)</a>
      </b>

      <p>
        Entre otras medidas, se establecía que los gobiernos deberían “reducir y reorientar el gasto público, concentrándolo en sanidad, educación e infraestructura”. 
        Se argumentaba también la necesidad de una reforma fiscal para ampliar la base de contribuyentes (para hacer más extensa y eficiente la recaudación de impuestos), 
        lo cual reduciría la dependencia de créditos del exterior; la liberalización comercial, la apertura a la inversión extranjera directa, y por una amplia política 
        de privatizaciones que tendría como colofón la sólida defensa de los derechos de propiedad intelectual.
      </p>


</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
