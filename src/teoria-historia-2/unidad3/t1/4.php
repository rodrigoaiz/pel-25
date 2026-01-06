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
  <h2>El espacio académico.</h2>

  <p>Los cambios en los sistemas políticos, económicos y sociales, producto de la Segunda Guerra y los conflictos de guerra fría impactaron dentro de las ciencias sociales al plantear nuevos problemas por resolver y, por lo tanto, la búsqueda de nuevas metodologías de investigación y explicación. Dentro del contexto para comprender estos retos metodológicos tenemos, en primer término, el papel hegemónico de Estados Unidos, y por lo tanto su sistema universitario cobró mayor influencia frente a los sistemas europeos. </p>
  <p>En segundo lugar, los países que lograron su independencia desde el siglo XIX y los que la consiguieron después de la segunda guerra mundial en América, África y Asia, cuestionaron la visión colonial de la historia de las potencias europeas y presentan una historia en la que se recuperara la identidad y conocimiento de su cultura, se inicia la reinterpretación y recuperación de sus tradiciones y costumbres, así como la explicación de los procesos de descolonización. </p>
  <p>El tercer elemento por considerar es el proceso de globalización que se extiende de manera acelerada a partir de la segunda mitad del siglo XX. Se desarrollaron también movimientos de oposición a la globalización y surgen nuevos sujetos y actores sociales, así como tendencias democratizantes, como las oportunidades de ingreso masivo a las universidades, en términos de profesores y alumnos. Estos tres cambios conjuntos dieron por tierra con las estructuras del  saber histórico, definidas con claridad desde la fundación de la Historia como disciplina académica en el primer tercio del siglo XIX.</p>
  <p>Durante la última mitad del siglo XX aparecieron nuevas investigaciones que buscaban la historia «desde abajo» la historia horizontal, a ras de piso, lo que implicaba comprender cómo los grupos sociales «sin historia» aparecieran y se visibilizaran, lo cual aumentó tanto la forma de escribir la historia, al releer las fuentes tradicionales y agregar nuevas, así como su contenido: la «historia desde abajo» en Inglaterra y Francia, la Alltagsgeschichte en Alemania y la Microhistoria en Italia, la aparición del género como una categoría de reflexión histórica, en los Estados Unidos y la comprensión y crítica a las formas coloniales de entender la nación, las clases y estratos sociales, así como de escribir la historia tanto en la India como en América Latina. Asimismo, se examinó la historia como forma narrativa y se relativizó el concepto de verdad.</p>
  <p>La formación de los historiadores se estructura, actualmente, a través de programas académicos formales como son las licenciaturas, maestrías, especializaciones, doctorados y posdoctorados que se ofrecen en universidades e institutos de educación superior. En ellas se forma no sólo a través del conocimiento metodológico de técnicas de investigación y manejo  de fuentes diversas, sino que también se establecen materias como teoría y filosofía de la historia. Es así que los actuales estudios de historia y su reflexión teórica tienen un sustento académico sólido y diverso, además que los historiadores actuales cuentan con un mejor acceso a diversas fuentes de información.</p>
  <p>Al final de esta pantalla encontrarás una actividad, la cual te permitirá revisar tu avance hasta el momento.</p>
  <p>A continuación, encontrarás en estas lecciones seis corrientes historiográficas, las cuales te presentamos y también algunos  textos que ejemplifican su visión de la historia. Te sugerimos que las estudies y busques tanto las diferencias como los acuerdos que existen entre ellas.</p>
  <p>Disfruta esta información.</p>
  <div class="mx-auto max-w-md">
    <?php
    renderImage('th2-u3-biblioffyl.webp','Biblioteca Samuel Ramos FFyL. ', 'https://es.wikipedia.org/wiki/Biblioteca_Samuel_Ramos#/media/Archivo:Biblioteca_Samuel_Ramos_frente.jpg','Wikimedia Commons.');
    ?>
  </div>
   <?php ob_start(); ?>
  <p></p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a2', "Repaso: Contexto de las corrientes historiográficas a partir de la segunda mitad del siglo XX", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
