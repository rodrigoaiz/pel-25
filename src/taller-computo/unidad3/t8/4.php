<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Ejercicio “Funciones Lógicas”</h3>
  <p>En la siguiente tabla de la hoja de cálculo identificamos los posibles resultados de las funciones con base a los valores lógicos, para ello realizaremos diferentes comparaciones.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_tabla_comparacion_resultado.webp', 'Tabla comparativa-resultados.') ?>
  </div>
  <p>Abre una hoja de cálculo y copia la siguiente tabla de datos, puedes utilizar otro formato, colores, fuentes, tamaños de tu preferencia.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_ejercicio_funciones_logicas.webp', 'Ejercicio comparativa-resultados.') ?>
  </div>
  <p>En la tabla anterior en los encabezados de las columnas se indican las funciones lógicas a utilizar.</p>
  <p>En la siguiente tabla se muestra cómo se emplean, las funciones lógicas:</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_funciones_logicas.webp', 'Ejercicio sintaxis comparativa-resultados.') ?>
  </div>
  <p>Guarda tu archivo con el nombre <strong>Funciones lógicas y de texto</strong>, además renombra la hoja como; <strong>Funciones lógicas</strong>.</p>
  <div class="max-w-44 mx-auto">
    <?php renderImage('u3_t8_renombrar1.webp', 'Renombrar Funciones lógicas.') ?>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
