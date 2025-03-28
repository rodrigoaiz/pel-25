<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Funciones: Max, Promedio, Contar.si, Varianza</h3>
  <p>Ahora bien, ya que completamos nuestra tabla debemos de realizar el análisis de datos respectivo con base a las siguientes preguntas las cuales iremos dando respuesta apoyándonos de las funciones respectivas; Max, Promedio, Contar.si, Varianza y la herramienta Filtrar.</p>
  <ol class="ol-number">
    <li>
      <p><strong>¿Cuál es el dato mayor de venta total/mes por cliente?</strong> A simple vista se puede observar que es $75.00, sin embargo, podemos identificarlos mediante la función <strong>Max</strong>, sintaxis =Max(rango), donde el rango corresponde al conjunto de datos que se encuentran en la columna <strong>venta total/mes</strong>, como se muestra en la tabla siete.</p>
      <div class="my-5 max-w-2xl mx-auto">
        <?php renderImage('u3_t7_tabla7.webp', 'Dato mayor Venta total/mes.') ?>
      </div>
    </li>
    <li>
      <p><strong>¿Cuál es el valor representativo de tendencia central, respecto a la edad de los clientes que compraron libros?</strong>, así mismo el resultado de la celda se debe de indicar con cero decimales.</p>
      <p>En la celda donde se mostrará el resultado el formato será de número con cero posiciones decimales, para que se muestre un número entero, y se calcula la media aritmética respecto a la edad del cliente utilizando la función <strong>Promedio</strong>, sintaxis =Promedio(rango), donde el rango corresponde al conjunto de datos de la columna respectiva, como se muestra en la tabla ocho.</p>
      <div class="my-5 max-w-2xl mx-auto">
        <?php renderImage('u3_t7_tabla8.webp', 'Media aritmética.') ?>
      </div>
    </li>
    <li>
      <p><strong>¿Cuál es el valor que muestra las variaciones de los datos dispersos de la media a partir de la venta total/mes?</strong></p>
      <p>Para determinar la variación de los datos este será utilizando la función Var, sintaxis =var(rango), recordemos que la celda debe de tener el formato de contabilidad.</p>
      <div class="my-5 max-w-2xl mx-auto">
        <?php renderImage('u3_t7_tabla9.webp', 'Variación de datos.') ?>
      </div>
    </li>
    <li>
      <p><strong>¿Cuál es el tipo de género más vendido?</strong></p>
      <p>Para determinar el género más vendido, utilizar la función Contar.si, para cada tipo de género, sintaxis =Contar.si(rango,”criterio”).</p>
      <div class="my-5 max-w-2xl mx-auto">
        <?php renderImage('u3_t7_tabla10.webp', 'Género más vendido.') ?>
      </div>
    </li>
  </ol>
  <p>En esta función el rango de datos se mantiene y el criterio es cambiante por el Tipo de Género.</p>
  <div class="my-5 max-w-2xl mx-auto">
    <?php renderImage('u3_t7_colegas.webp', 'Análisis. Imagen de freepik.', 'https://www.freepik.es/vector-gratis/colegas-analizando-tablas-crecimiento_12557516.htm#query=analizar&position=11&from_view=search&track=sph&uuid=607f84d9-f0cb-47c1-9d99-a52908b9e13c', 'Freepik.') ?>
  </div>
  <?php ob_start(); ?>
    <p>Realiza la siguiente actividad para fortalecer tu nuevo conocimiento, arrastrando las imágenes y ordénalas de manera correcta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a13', "¿Cómo vamos?", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
