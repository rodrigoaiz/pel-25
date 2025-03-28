<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Herramienta Ordenar y filtrar</h3>
  <h4>Ordenar</h4>
  <p>Esta herramienta se encuentra en el <strong>bloque edición</strong>, <strong>de la Cintilla Inicio</strong> o en <strong>la cintilla datos</strong>, bloque ordenar y filtrar, con ella podemos ordenar el contenido de un rango o matriz de datos alfabéticos o numéricos. Como se muestra en las siguientes imágenes.</p>
  <div class="my-5 max-w-lg mx-auto">
    <?php renderImage('u3_t7_imagen3.webp', 'Herramienta Ordenar y filtrar.') ?>
  </div>
  <p>En el bloque Edición se muestra seleccionada la herramienta Ordenar y filtrar.</p>
  <div class="my-5 max-w-lg mx-auto">
    <?php renderImage('u3_t7_imagen4.webp', 'Opciones ordenar.') ?>
  </div>
  <p>Podemos identificar en la imagen anterior que existen diferentes modos de ordenar los datos como en forma ascendente, descendente o de forma personalizada, como a continuación describiremos.</p>
  <p>Al seleccionar la opción <strong>orden personalizado</strong> este será a partir del criterio que se requiera, como se muestra en la imagen cinco.</p>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_imagen5.webp', 'Criterios orden personalizado.') ?>
  </div>
  <p>En la imagen se muestra ordenar por columna, la cual es una de las formas más sencillas, así mismo también se puede seleccionar según los valores de la celda y el tipo de orden.</p>
  <h4> Filtrar</h4>
  <p> La herramienta Ordenar y filtrar, también permite el análisis de datos mediante un resumen específico en función de los criterios que se definan, como es filtrar y se puede observar en las siguientes imágenes.</p>
  <div class="my-5 max-w-64 mx-auto">
    <?php renderImage('u3_t7_imagen6.webp', 'Herramienta filtrar.') ?>
  </div>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_tabla2.webp', 'Tabla de datos con filtro.') ?>
  </div>
  <p>La tabla muestra el filtro en todas las columnas, lo que permitirá un análisis más específico con base a una, o varias columnas, según las necesidades.</p>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_tabla3.webp', 'Tabla de datos filtro con criterio.') ?>
  </div>
  <p>En la tabla se puede identificar que se encuentran filtrados temporalmente los datos con respecto al criterio ID del cliente.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
