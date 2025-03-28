<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Funciones de Texto: carácter, código, concatenar, mayúsculas, encontrar</h3>
  <p>Aprender sobre las funciones de texto nos permite la mejora de la productividad al trabajar con grandes cantidades de datos y la eficiencia en el manejo de los datos al automatizar diversas acciones, por ejemplo; buscar una palabra, una frase en un texto, extraer ciertos caracteres de una cadena de texto, cambiar el formato del texto, entre otros.</p>
  <p>Entonces algunas de las aplicaciones más comunes de las funciones de texto incluyen:</p>
  <ul class="ul-disc">
    <li><strong>Limpieza de datos:</strong> si tienes datos con errores, estas te ayudan a eliminarlos.</li>
    <li><strong>Análisis de datos</strong>: te ayudan cuando tienes grandes cantidades de datos.</li>
    <li><strong>Creación de informes</strong>: estás haciendo una presentación interactiva y ¿necesitas un dato en particular?, con este tipo de funciones puedes localizar el dato que requieres.</li>
  </ul>
  <p>A continuación, en la siguiente tabla explicaremos algunas de las funciones de texto que utilizaremos en nuestro aprendizaje.</p>
  <div class="max-w-xl mx-auto">
    <?php renderImage('u3_t8_sintaxis_funciones_texto.webp', 'Sintaxis Funciones de Texto.') ?>
  </div>
  <h4>Observaciones:</h4>
  <ul class="ul-disc">
    <li><strong>Código;</strong> corresponde al juego de caracteres usado por tu equipo.</li>
    <li><strong>Carácter;</strong> forma parte del juego de caracteres que usa tu equipo.</li>
    <li><strong>Equipos con sistema operativo Macintosh;</strong> será correspondiente al Juego de caracteres de Macintosh.</li>
    <li><strong>Equipos con sistema operativo Windows;</strong> corresponde el juego de caracteres ANSI el cual comparte los mismos códigos numéricos que en los formatos ASCII/Unicode.</li>
    <li><strong>Elemento;</strong> puede ser un valor de texto, número, o una referencia de celda.</li>
    <li><strong>Comillas “”;</strong> para los textos a incluir en el resultado, por ejemplo: “Bienvenidos”.</li>
    <li><strong>Texto;</strong> puede ser texto, un número, o una referencia de celda.</li>
    <li><strong>Argumento;</strong> puede ser texto, un número, o una referencia de celda.</li>
    <li><strong>Número;</strong> Un número entre 1 y 255 que especifica el carácter deseado.</li>
    <li><strong>Referencia;</strong> identifica una celda o un rango de celdas.</li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
