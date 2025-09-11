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
  <h2>Identifica al ser humano como unidad biopsicosocial</h2>
  <p>El término unidad biopsicosocial fue creado por el psiquiatra y médico estadounidense George Liberman Engel en 1977, el modelo que él propone considera a la salud y la enfermedad como resultado de la interacción de factores biológicos (genética y herencia), psicológicos (emociones, conductas y pensamientos) y sociales (educación, pobreza y desempleo), estos factores influyen de manera integral en el estado general de salud de las personas.</p>
  <div class="mx-auto max-w-lg">
    <?php renderImage('u1-george-liberman.webp', 'George Liberman Engel creador del modelo biopsicosocial ', 'https://ajp.psychiatryonline.org/doi/10.1176/appi.ajp.162.11.2039', 'recuperada el 31 de octubre de 2023.'); ?>
  </div>
  <p>Los siguientes factores que constituyen la unidad biopsicosocial, están íntimamente interrelacionados por lo que no pueden separarse y contribuyen a la salud y bienestar del individuo. Lo que hace que el ser humano sea una unidad biopsicosocial, debido a que considera la salud de las personas a partir de la integración de estos tres factores.</p>
  <?= TabsComponent([
    'tabs' => [
      [
        'id' => 'tabs-factores-1',
        'label' => 'Factores biológicos',
        'content' =>
        'Determinan las características físicas y funcionales de un organismo, incluye a la genética, la herencia y todo lo relacionado con el cuerpo y la salud física, por ejemplo la nutrición, la enfermedad y el envejecimiento.'
      ],
      [
        'id' => 'tabs-factores-2',
        'label' => 'Factores psicológicos',
        'content' =>
        'Incluyen a las emociones, pensamientos y comportamiento del individuo es decir los procesos mentales y emocionales, como las  inhibiciones, motivaciones y deseos.'
      ],
      [
        'id' => 'tabs-factores-3',
        'label' => 'Factores sociales',
        'content' =>
        'Involucran cómo el individuo interactúa con su entorno social, por ejemplo, las oportunidades educativas, la pobreza, el desempleo, las relaciones interpersonales, las leyes, las normas sociales, y otros factores socioeconómicos que pueden influir en el bienestar y salud de las personas.'
      ],
    ],
  ])
  ?>
  <?php
  renderImagePleca('u1-diagrama-factores.png', 'Modelo biopsicosocial.');
  ?>
  <?php ob_start(); ?>
  <p>Después de revisar el tema de: Identifica al ser humano como unidad biopsicosocial, participa en el foro con tus compañeros, iniciando una discusión a partir de las siguientes preguntas generadoras. Recuerda que debes ser respetuoso de las opiniones de los demás, aun cuando no estés de acuerdo con ellas.</p>
  <h4>Preguntas generadoras</h4>
  <p>Desde tu punto de vista</p>
  <ul>
    <li>¿ Qué factores influyen en la salud del ser humano?</li>
    <li>¿ Por qué el hombre es considerado como un ser biopsicosocial?</li>
    <li>Comenta la participación de algunos de tus compañeros.</li>
  </ul>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t2a1', "Foro de discusión  ", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
