<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Datos presentados en forma tabular</h3>
  <p>Te invito a revisar el siguiente video, donde identificarás las actividades que realizamos para lograr el aprendizaje.</p>
  <?php renderVideoIframe('42WbFVKmIF0', 'Presentación del Aprendizaje 7', 'max-w-2xl mx-auto') ?>
  <p>Las funciones estadísticas en una Hoja de Cálculo son un conjunto de herramientas que permiten realizar análisis estadísticos de información, mediante la recopilación y el resumen de datos, con el propósito de obtener conclusiones.</p>
  <p>Algunas de las funciones estadísticas básicas son utilizadas para calcular operaciones matemáticas como el conteo condicional de referencias, el valor máximo de una serie de números, el promedio de un conjunto de datos, así como la varianza de datos dispersos concernientes a la media.</p>
  <p>Así mismo la función ordenar permite distribuir en forma ascendente o descendente el contenido de un rango de datos numéricos o de texto, respecto a la función filtrar muestra solo los datos que cumplen con los criterios que se han especificado.</p>
  <p>Como te habrás dado cuenta estas funciones son importantes para el análisis de datos y a su vez la obtención de resultados que nos permite la toma de decisiones.</p>
  <p class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_graph.webp', 'Gráficos de crecimiento. Imagen de Pikisuperstar.', 'https://www.freepik.com/free-vector/flat-hand-drawn-people-analyzing-growth-charts_12427675.htm#page=2&query=funciones%20estad%C3%ADsticas&position=34&from_view=search&track=ais', 'Freepik.') ?>
  </p>
  <p>Seguro que tienes muchas preguntas, o quizá recuerdes algunas situaciones donde llevaste a cabo el uso de diversas funciones estadísticas, por lo que te invito a realizar la siguiente actividad que nos permitirá conocer algunas de tus respuestas y así actualizar el conocimiento previo que tienes del tema.</p>
  <div class="max-w-3xl mx-auto">
    <?php
    $accordionItems1 = [
      [
        'title' => '¿La función Max permite?',
        'content' => '<p>Identificar cualquier dato extremo que pueda ser relevante en el análisis.</p>'
      ],
      [
        'title' => '¿La media aritmética en una Hoja de Cálculo está dada por la función Promedio, la cual?',
        'content' => '<p>Analiza uno de los valores que nos representa la tendencia central de los.</p>'
      ],
      [
        'title' => '¿La Varianza es?',
        'content' => '<p>Una medida de dispersión que indica cuánto se alejan los valores de una tabla de datos de su media aritmética.</p>'
      ],
      [
        'title' => '¿La función Contar.si, permite analizar los datos?',
        'content' => '<p>A partir de una tabla al obtener un resumen de la información condicionada contenida en ella. Por ejemplo, si tienes una tabla con información de ventas de libros, esta función permite conocer cuántos libros de cierto genero se vendieron por mes.</p>'
      ],
      [
        'title' => '¿Qué es una Tabla de datos?',
        'content' => '<p>Es un elemento que permite agrupar información para interpretar los datos de manera sencilla.</p>'
      ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
  </div>
  <p>Como apreciaste, es importante identificar algunos conceptos básicos de estadística, dado que serán utilizados para el análisis de datos.</p>
  <p>Observa la siguiente tabla, en ella se muestra las funciones que trabajarás en esta lección, mediante el uso de la hoja de cálculo, recuerda que el nombre de la función puede variar dependiendo el proveedor, tipo, versión e idioma del software hoja de cálculo que utilices.</p>
  <div class="max-w-3xl mx-auto">
    <?php renderImage('u3_t7_tabla1.webp', 'Funciones básicas de estadística.') ?>
  </div>
  <h4>Observaciones</h4>
  <ul class="ul-disc">
    <li>Rango (obligatorio): El rango de celdas a las que se le aplicará la función.</li>
    <li>Condición (obligatorio): La condición que se debe cumplir para ser incluido en la función, puede ser un dato numérico o de texto.</li>
    <li>Argumento (obligatorio): Pueden ser números, texto, matrices, referencias de celda, constantes, fórmulas u otras funciones.</li>
    <li>Ejemplo: =CONTAR.SI(rango,criterio)</li>
    <p><strong>Donde:</strong></p>
    <ul class="disc">
      <li><strong>Rango</strong> es el rango de celdas que queremos contar de manera condicional.</li>
      <li><strong>Criterio</strong> es el que aplicamos para contar aquellas celdas que cumplan determinado criterio.</li>
    </ul>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
