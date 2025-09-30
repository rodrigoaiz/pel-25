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

<h2>El avance tecnológico</h2>


<p> El desarrollo tecnológico entre 1764 y 1850, con base en el vapor, propiciará el paso de la manufactura a la producción industrial, 
    lo cual conlleva no sólo el desarrollo y consolidación de un modelo nuevo de producción, el capitalismo, sino que también permitirá 
    el surgimiento de una nueva clase social: el proletariado. Las condiciones de trabajo en Inglaterra como en Europa eran lo 
    suficientemente malas para los proletarios y propiciaron los primeros movimientos obreros en Inglaterra, el ludismo y el cartismo. 
    En el resto de Europa, a la par de la industrialización, se buscó mejorar condiciones de trabajo y, a la par, se desarrollaron 
    teorías políticas y nuevas concepciones sobre la utilidad de la historia en autores como Saint Simon, Owen, Fourier, y posteriormente 
    Bakunin y Marx quienes buscaron dentro de la historia los argumentos para mostrar tanto las injusticias del trato hacia la clase 
    obrera, así como un sentido de esperanza en un cambio de régimen.
</p>

<p>
    El desarrollo de la producción fabril, necesariamente, contribuyó al desarrollo de los sistemas de comunicación: los caminos rurales 
    se modernizan, se desarrollan nuevos transportes, tal como el ferrocarril y los barcos de vapor. Estos medios de transporte ofrecen 
    una imagen de poder, de modernidad, de rapidez, misma que se interpreta como <span style="color: #FF0000;">progreso</span>, que pasa 
    de significar <b> ir hacia adelante </b> hasta el siglo XVI a identificarse con el desarrollo científico y tecnológico para el 
    mejoramiento de la vida humana individual y de la sociedad.
</p>

<p>
    Las necesidades de la producción conllevan a un avance en el desarrollo de la ciencia y la técnica, encontramos así a autores como 
    Darwin, y la ciencia se especializa cada vez más.
</p>

<p>
    Ya hacia mediados del siglo, existe un desarrollo en la biología, la medicina, así como en la metalurgia y la ingeniería. El 
    desarrollo de la ciencia influirá necesariamente en la forma en la cual se comprende la historia pues, corrientes como la Escuela 
    Científica Alemana, el Materialismo Histórico y el Positivismo consideran que la historia es una ciencia.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-American_Progress_John_Gast_painting.webp', 'Una de las ideas más difundidas es el concepto de progreso, el cual 
  se liga al desarrollo tecnológico en comunicaciones como los barcos de vapor y ferrocarriles; la electricidad empleada en 
  comunicaciones, como el telégrafo y el uso de estos elementos daba la idea de civilización, justificando la expansión colonial de la 
  segunda mitad del siglo XIX. En la imagen vemos una alegoría del progreso norteamericano, donde se retoman estos elementos y podemos 
  ver el desplazamiento de las comunidades originarias. La obra se llama American Progress y es del pintor John Gast, de 1872',
  'https://es.wikipedia.org/wiki/Archivo:American_Progress_(John_Gast_painting).jpg', 'Wikimedia Commons.');
  ?>
</div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>