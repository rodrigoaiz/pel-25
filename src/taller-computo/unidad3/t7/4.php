<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Práctica dirigida</h3>
  <h4>Análisis de datos “Compra de Libros”</h4>
  <p>Imagina que eres el gerente de una librería y deseas analizar los datos de compra de libros durante un mes para tomar decisiones sobre qué géneros de libros deberías mantener en stock. Para realizar nuestra actividad retomamos los datos presentados en las tablas anteriores, apoyándonos del archivo de la hoja de cálculo que tiene el nombre de Compra de libros.</p>
  <p>Descarga el <a href="<?php echo PATH_DOCS . 'u3_t7_compra_libros.xlsx' ?>" target="_blank">archivo</a>, ábrelo y conforme avanza la actividad ve haciendo lo que se indica, ya que al último entregarás el ejercicio.</p>
  <p>En la siguiente tabla se observa el ID del cliente en forma desordenada.</p>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_tabla4.webp', 'Compra de libros.') ?>
  </div>
  <h4>Orden de datos</h4>
  <p>Para un mejor análisis de datos es recomendable ordenar nuestros datos, recordemos que puedes seleccionarla del <strong>bloque edición, de la Cintilla Inicio o en la cintilla datos, bloque ordenar y filtrar</strong>.</p>
  <p>Con base a la columna ID del cliente se ordenan los datos como se muestra en la tabla cinco.</p>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_tabla5.webp', 'ID del cliente ordenado.') ?>
  </div>
  <p>Se observa en la tabla anterior que el orden se realizó, casualmente se muestra que las celdas fueron agrupadas con base al mismo color de celda, pero lo importante es que fue este orden con respecto al ID del cliente.</p>
  <p>Conforme trabajamos el ejercicio, es probable que se de respuesta a una serie de preguntas, por ejemplo:</p>
  <h4>¿Cuál es la venta total/mes por cada cliente?</h4>
  <p>La fórmula aritmética o función a utilizar en primera instancia será calcular la venta total/mes por cada cliente, además el resultado de la celda se debe de indicar con el formato de contabilidad.</p>
  <p>Para ello debes de realizar el cálculo con respecto a la <strong>venta total/mes</strong> por cliente, el cual sería multiplicar la columna de <strong>Libros comprados</strong> por la columna Costo por libro, ejemplo =Libros comprados * <strong>Costo por libro</strong> o =producto(Libros comprados * Costo por libro). Así mismo el formato de la columna se debe de indicar con la categoría contabilidad, como se muestra en la tabla seis.</p>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_tabla6.webp', 'Venta total/mes.') ?>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
