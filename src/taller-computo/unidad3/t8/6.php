<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Ejercicio “Funciones de Texto”</h3>
  <p>A continuación, se muestra el ejercicio que trabajaremos en la hoja de cálculo, por tanto, abre el archivo Funciones lógicas y de texto e inserta una nueva hoja, la cual nombramos como Funciones de texto.</p>
  <div class="max-w-44 mx-auto">
    <?php renderImage('u3_t8_renombrar2.webp', 'Renombrar Funciones de Texto.') ?>
  </div>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_ejercicio_funciones_texto.webp', 'Ejercicio Funciones de Texto.') ?>
  </div>
  <p>Como se observa en la tabla se incluye las instrucciones y a su vez se incluye la función de texto a utilizar, así como los resultados.</p>
  <p>Abre una hoja de trabajo y copia la siguiente tabla de datos, puedes utilizar otro formato, colores, fuentes, tamaños de tu preferencia, entre otras características.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_indicaciones.webp', 'Ejercicio Indicaciones.') ?>
  </div>
  <p>Como se observa en la tabla se incluyen las indicaciones y se deja el espacio en blanco para que utilices las funciones que se indican.</p>
  <p>En la siguiente tabla se muestra cómo se emplean las funciones de texto en el ejercicio.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_funciones_texto.webp', 'Ejercicio sintaxis.') ?>
  </div>
  <p>Guarda tu archivo con el mismo nombre <strong>“Funciones lógicas y de texto”</strong>.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
