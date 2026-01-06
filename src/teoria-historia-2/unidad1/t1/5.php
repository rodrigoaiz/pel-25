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
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h2>El contexto político</h2>


<p> El desarrollo político también influyó en las formas de teorizar la historia. Si bien a partir de 1815 las monarquías se restauran, 
    también hacia la mitad del siglo XIX aparecen monarquías constitucionales; el modelo republicano se instaura con variantes en el 
    continente americano y la expansión colonial europea se desarrolla en África y Asia. En Europa, las condiciones de trabajo del 
    proletariado industrial no son aceptables y ocurren distintos levantamientos, siendo los principales los de 1820, 1830 y son 
    especialmente significativos los de 1848. Estos movimientos se dieron por toda Europa y visibilizan el papel del proletariado 
    industrial naciente, en 1820, principalmente; las alianzas entre la burguesía y el sector obrero con reivindicaciones que van más 
    allá de las ideas liberales, y propician el surgimiento del
    <?php renderTooltip('pensamiento socialista','Es una de las tres corrientes de ideología política que se desarrollan durante el 
    siglo XIX. Se manifiesta tanto en filosofía, como en economía y política. Busca la igualdad social, así como la protección del 
    naciente movimiento proletario.'); ?>
    para 1830 y, en 1848 con planteamientos liberales sobre las formas de gobierno y los textos constitucionales. El evento más significativo 
    de este periodo es el desarrollo de la Comuna de París, 1871, que se convierte en el primer experimento de gobierno obrero.
</p>

<p>
    Hacia la segunda mitad del siglo, tenemos a los grandes imperios coloniales como Inglaterra y Francia; de gran extensión territorial 
    y pluralidad étnica, como el Imperio Austro-Húngaro, el Imperio Turco y el Imperio Ruso. La convivencia entre ellas será de continua 
    tensión y las potencias imperiales implica tanto alianzas como rivalidades y se propondrán y el último tercio del siglo se conocerá 
    como la <?php 
    renderTooltip('Belle Époque','Se denomina al periodo que va de 1871 a 1914 en Europa. También se conoce como paz armada, pues es el 
    periodo en el cual las potencias europeas inician una carrera armamentista que culminará en la Primera Guerra Mundial.'); ?>,
    un periodo en el cual las potencias industriales desarrollan la ciencia y tecnología, la segunda revolución industrial, con énfasis 
    en el desarrollo de la química, la electricidad, la biología y la física con fines tanto de ampliar el conocimiento científico, así 
    como las formas de la producción industrial. También, se inicia una carrera armamentista, la ciencia y técnica al servicio de las 
    armas, que se expresará en la Primera Guerra Mundial.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Alemania_AustriaHungría_1914.webp', 'El desarrollo tecnológico industrial entre 1870 y 1914 marca profundas 
  diferencias entre las naciones; la expansión imperialista por mercados se extiende por África, Asia y América Latina; las potencias, 
  principalmente europeas aprovechan este periodo para desarrollar nuevas armas y para 1914 se plantea un sistema de alianzas político 
  militares antes de las primera guerra mundial.
En la imagen vemos una caricatura en la cual se presenta a Alemania y Austria Hungría como las naciones con mayor fuerza militar frente 
al resto de los países europeos. La caricatura se llama El equilibrio europeo en 1914.',
  'https://archive.org/download/HistoCast60IGMImperialismoAlianzasYPlanesDeGuerra/HistoCast60IGMImperialismoAlianzasYPlanesDeGuerra.jpg', 
  'Historia Cast.'); ?>
</div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>