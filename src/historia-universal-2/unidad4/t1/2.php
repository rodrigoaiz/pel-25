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

  <h2>Globalización</h2>
    <div class="mx-auto max-w-lg">
  <?php
       renderImage('hu2-u4-WorldTrade.webp', 'Manifestantes contra la Organización Mundial de Comercio (OMC), institución muy relacionada con la globalización. Imagen de KOKUYO.', 
       'https://commons.wikimedia.org/wiki/File:2005_World_Trade_Organization_Ministerial_Conference_IMG_2789_(74124863).jpg', 'Wikimedia Commons.');
    ?>
    </div>

    <p>
        La globalización es un término que ha ganado prominencia en las últimas décadas y ha transformado radicalmente la forma en que el mundo funciona. 
        Este fenómeno se ha convertido en una característica fundamental de la era contemporánea, afectando a todos los aspectos de la vida humana, desde la economía hasta la cultura, la política y más allá.
    </p>
    <p>
        Los orígenes de la globalización se remontan a la historia antigua, pero se han intensificado en los últimos siglos. Uno de los primeros ejemplos de globalización fue la Ruta de la Seda, que conectó a 
        Europa y Asia a través de redes comerciales en la antigüedad. Sin embargo, la globalización moderna comenzó a tomar forma durante la época de la colonización europea en los siglos XV y XVI. 
        Las exploraciones de Colón y Vasco de Gama abrieron nuevas rutas comerciales y culturales entre continentes, lo que marcó el comienzo de la interconexión global a través de los océanos atlántico y pacifico. 
        Puedes darte una idea de lo que se fue delineando como la globalización ya durante los siglos XVI - XVIII en el siguiente recurso del portal académico.
    </p>

        <div class="mx-auto max-w-lg">
    <?php
    renderImage ('hu2-u4-t1BannerComercioExterior.webp', 'Comercio exterior en la Nueva España. Imagen del Portal Académico CCH UNAM.', 
       'https://e1.portalacademico.cch.unam.mx/alumno/historiademexico1/unidad3/economianovohispana/comercioexterior', 'Portal Académico CCH UNAM.');
    ?>
    </div>

    <p>
        Durante la Revolución Industrial del siglo XIX, la globalización se aceleró con la expansión de las comunicaciones y el comercio, impulsada por avances tecnológicos como el telégrafo y el ferrocarril. 
        Las empresas comenzaron a buscar mercados extranjeros y a establecer operaciones en el extranjero. El surgimiento de la globalización financiera, con la creación del patrón oro, permitió una mayor integración 
        de las economías.
    </p>

    <p>   
        El siglo XX marcó un período de intensa globalización, con el surgimiento de instituciones internacionales como la Liga de Naciones y, más tarde, las Naciones Unidas (ONU). La creación del Fondo Monetario 
        Internacional (FMI) y el Banco Mundial después de la Segunda Guerra Mundial reflejó la creciente interdependencia económica entre las naciones. La globalización económica se vio impulsada por el crecimiento del 
        comercio internacional y la inversión extranjera directa.   
    </p>

        <div class="mx-auto max-w-lg">
    <?php
       renderImage('hu2-u4-selloONU.webp', 'Sello postal de las naciones unidas (ONU) con referencia al Fondo Monetario Internacional y su vinculación al comercio global, imagen de Taravyvan Adijene.', 
       'https://commons.wikimedia.org/wiki/File:UN-IMF-4c.jpg', 'Wikimedia Commons.');
    ?>
    </div>
    
    <h3>¿A que se refiere el Brexit?</h3>

    <b>
        El Brexit se refiere a la salida del Reino Unido de la Unión Europea (UE), que se llevó a cabo el 31 de enero de 2020, tras un referéndum en el que los ciudadanos británicos votaron a favor de abandonar la UE 
        en 2016. El término es una combinación de las palabras "Britain" (Gran Bretaña) y "exit" (salida). Esta decisión tuvo importantes implicaciones políticas, económicas y sociales tanto para el Reino Unido como 
        para la UE.
    </b>

    <p>
        La pandemia de COVID-19, que comenzó a finales de 2019, ha tenido un impacto profundo en la globalización. A medida que los países luchaban por controlar la propagación del virus, se implementaron restricciones de 
        viaje, se cerraron fronteras y se interrumpieron las cadenas de suministro globales. La pandemia puso de manifiesto la fragilidad de una economía altamente interconectada.
    </p>

        <div class="mx-auto max-w-lg">
    <?php
    renderImage('hu2-u4-covid_U4t1.webp', 'La pandemia de COVID -19 tuvo implicaciones muy fuertes para la globalización. Imagen de Tm.', 
       'https://commons.wikimedia.org/wiki/File:COVID-19_Equipment_to_Latvia_(05890050)_(49885513733).jpg', 'Wikimedia Commons.');
    ?>
    </div>

    <p>
        El trabajo remoto y las videoconferencias se convirtieron en la norma, lo que plantea preguntas sobre el futuro del trabajo y la necesidad de una presencia física en las oficinas. Las empresas comenzaron a replantearse 
        la diversificación de sus cadenas de suministro para reducir la dependencia de un solo país o región. En el ámbito político, la pandemia exacerbó las tensiones entre las naciones, con disputas sobre el acceso a equipos 
        médicos y vacunas. También ha destacado la importancia de la cooperación internacional en la gestión de crisis globales, aunque esta cooperación no siempre ha sido efectiva.
    </p>

    <p>
        Para aprender más sobre esto, te invitamos a ver sl siguiente video.
    </p>

    <?php
        renderVideoIframe('6MsjthV510M', '¿Cómo afectó la pandemia al proceso de globalización?');
    ?>
    
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>