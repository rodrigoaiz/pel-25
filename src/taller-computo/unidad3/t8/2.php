<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Introducción</h3>
  <p>Las funciones lógicas en una Hoja de cálculo son muy utilizadas para la toma de decisiones, ya que nos permiten evaluar si se cumple o no una condición dada y en relación al resultado, y determinar si se ejecutará o no una acción establecida.</p>
  <p>Estas funciones además realizan la comparación lógica entre valores o referencias de celdas, la mayoría dan como resultado VERDADERO o FALSO, dado que utilizamos algunos operadores booleanos como, por ejemplo: “Y” y “O”.</p>
  <p>Así mismo las funciones de texto son un conjunto de herramientas que permiten manipular y operar cadenas de texto en una hoja de cálculo. Estas funciones realizan diversas tareas como: <strong>concatenar cadenas de texto, extraer partes específicas de una cadena</strong>, convertir texto a mayúsculas o minúsculas, buscar palabras o caracteres en una cadena y mucho más, permitiendo la presentación de resultados.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_spreadsheets.webp', 'Tablas de datos. Imagen de Storyset.', 'https://www.freepik.com/free-vector/spreadsheets-concept-illustration_6450136.htm#query=texto%20excel&position=12&from_view=search&track=ais', 'Freepik.') ?>
  </div>
  <p>Seguro que recordaste algunos temas vistos de matemáticas e incluso vistos en la primera unidad y quizá te surgieron muchas preguntas, por ello te invito a realizar la siguiente <a href="https://es.educaplay.com/recursos-educativos/16705583-funciones_logicas_y_de_texto.html" target="_blank">actividad</a> que nos permitirá conocer algunas de tus respuestas y por tanto actualizar el conocimiento que tenemos del tema, esta actividad nos ayudará entrar en contexto.</p>
  <p>Como habrás notado, es importante conocer este tipo de funciones, dado que facilitan el trabajo para tomar decisiones y la presentación de información.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
