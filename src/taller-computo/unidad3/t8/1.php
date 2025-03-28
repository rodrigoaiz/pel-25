<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Funciones lógicas y de texto</h3>
  <h4>Presentación</h4>
  <p>Es un gusto iniciar contigo esta nueva lección de aprendizaje “<strong>Resuelve problemas empleando funciones lógicas y de texto</strong>”, en este utilizas algunas de las funciones lógicas y de texto más usuales, empleando textos de las hojas de cálculo, así como condicionar algunos resultados en la resolución de problemas, para lograr el aprendizaje realizamos diferentes actividades interactivas.</p>
  <div class="max-w-xl mx-auto">
    <?php renderImage('u3_t8_logic.webp', 'Imagen de Storyset.', 'https://www.freepik.com/free-vector/logic-concept-illustration_13246827.htm#query=funciones%20logicas&position=6&from_view=search&track=ais', 'Freepik.') ?>
  </div>
  <p>Espero que las actividades que realices potencien tu aprendizaje.</p>
  <p>Para ello a continuación te presento la temática que utilizaremos para llevar a cabo tu aprendizaje.</p>
  <div class="my-5 mx-auto border border-primary p-5">
    <h4 class="my-0">Temática</h4>
    <h4 class="indent-3">Funciones </h4>
    <ul class="ul-disc">
      <li>Lógicas (negación, conjunción, disyunción y condicional).</li>
      <li>Texto (carácter, código, concatenar, mayúsculas, encontrar)</li>
    </ul>
  </div>
  <h4>Actividades a realizar</h4>
  <p>Mediante una actividad interactiva actualizaremos nuestros conocimientos, realizaremos dos ejercicios guiados en dónde se utilizarán las funciones lógicas y las funciones de texto respectivamente, además para fortalecer tu nuevo conocimiento realizarás una actividad interactiva.</p>
  <p>Así mismo, en tu entregable, se proporciona el archivo “actividades de reforzamiento”, en el cual mostraremos el uso de las funciones vistas en los ejercicios, por último, realizamos un breve cuestionario para que identifiques qué te hace falta estudiar, de igual forma realizarás la evaluación de la unidad.</p>
  <p>No te olvides de revisar la lista de cotejo para tu entregable.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
