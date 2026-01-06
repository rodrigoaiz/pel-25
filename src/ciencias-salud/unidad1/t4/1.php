<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Reconoce la multiplicidad de condicionantes de la salud incluyendo aspectos bio-psico-socioculturales</h2>

  <h3>¿Por qué la salud y la enfermedad son un proceso dinámico?</h3>

  <p>La salud y la enfermedad forman un proceso dinámico, porque no son estáticos y están en constante cambio y evolución, debido a una gran variedad de factores biológicos, ambientales y sociales, como por ejemplo las variaciones biológicas y adaptaciones, las interacciones tanto medioambientales como sociales, los diferentes niveles de prevención y tratamientos, con el objetivo de mantener la salud para lo cual se previenen o tratan las enfermedades y el manejo del proceso.</p>

  <p>El paradigma sobre el binomio salud-enfermedad, se refiere a cómo se conceptualiza y se entiende la relación entre la salud y la enfermedad.</p>

  <p>La salud humana está determinada por una serie de condicionantes que abarcan varios aspectos, como son: los biológicos, psicológicos, sociales y culturales, los cuales interactúan entre sí e influyen no solo en la salud del individuo, sino en toda la población.</p>

  <ul>
    <li>Los principales factores que condicionan la salud <b>biológica</b> del ser humano son: la genética, la edad, el sexo, el medio ambiente, el estilo de vida, los hábitos de vida, entre otros.</li>
    <li>La salud <b>psicológica</b> del ser humano puede estar condicionada, por diferentes factores que pueden influir en la salud mental de las personas, como son los  socioeconómicos, biológicos, medioambientales, experiencias personales, creencias, actitudes, estrés, etc.</li>
    <li>La salud <b>sociocultural</b>, está determinada por factores como: los socioeconómicos, el entorno social y físico, el género, el idioma, la seguridad laboral, la etnicidad y nivel cultural, entre otros.</li>
  </ul>

  <p>Estos factores no son independientes y pueden interactuar de manera compleja, como en el caso del estrés psicológico crónico que puede estar relacionado con factores sociales, como la falta de apoyo social y/ o condiciones socioeconómicas desfavorables. Además, la cultura y los valores personales pueden influir en las decisiones de salud, como las elecciones dietéticas y el acceso a la atención médica. Para promover la salud de manera efectiva, es esencial abordar estos condicionantes de forma holística y considerar la interacción entre los factores bio-psico-socioculturales.</p>

  <?php ob_start(); ?>
  <p>Para que refuerces los conceptos, completa el siguiente cuadro escribiendo el nombre del factor que corresponda a cada condicionante. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t4a1', "Condicionantes de la salud", $ActividadContent);
  ?>
   
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
