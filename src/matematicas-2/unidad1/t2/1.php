<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2>Introducción</h2>
  <h3>Métodos de solución de ecuaciones cuadráticas \(ax^2 +bx +c =0\)</h3>
  
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
    <div class="m-auto">
      <?php
      renderImage('u1_t2_pietro.webp', 'Imagen de Lomojo', 'https://commons.wikimedia.org/wiki/File:Pietro_della_Vecchia_-_The_master_of_mathematics.JPG', 'Wikimedia Commons.');
      ?>
    </div>
    <p>En la lección anterior pudiste ver distintos métodos de cómo dar solución a una ecuación cuadrática incompleta, en esta lección veremos algunas formas de dar solución a la ecuación cuadrática en su forma completa mediante dos métodos:</p>
  </div>

  <ul class="ul-disc">
        <li>Factorización (descomposición de la expresión en forma de producto, con la finalidad de simplificarla en términos llamados factores para llegar a su mínima expresión).</li>
        <li>Método de completar un trinomio cuadrado perfecto. </li>
        <li>Fórmula general para resolver una ecuación cuadrática.</li>
  </ul>

    <p>Cada uno de estos métodos se abordarán a lo largo de la lección.</p>
    <p>Antes de comenzar el desarrollo analítico de los temas, revisa el siguiente video para familiarizarte con el tema.</p>

    <div class="lg:grid">
      <?php
      renderVideoIframe('GNOY3LVqZec', 'Completar el trinomio cuadrado perfecto');
      ?>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>