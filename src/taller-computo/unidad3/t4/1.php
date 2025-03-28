<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Gráficas de barras y circulares</h3>
  <p>En esta lección desarrollaremos el siguiente aprendizaje:</p>
  <p><strong>Aprendizaje esperado:</strong></p>
  <p>Elaborar gráficas para representar datos de múltiples series.</p>
  <p>Para ello trabajaremos revisando y practicando los siguientes temas:</p>
  <ul class="ul-disc">
    <li>Tipos de gráficos.</li>
    <li>Gráficas de barras.</li>
    <li>Gráficas circulares.</li>
  </ul>
  <h4>Introducción</h4>
  <p>La visualización de datos es la representación de datos mediante el uso de gráficos comunes, como cuadros, diagramas, infografías e incluso animaciones. Estas representaciones visuales de información comunican relaciones complejas de datos e insights basados en datos de una manera fácil de entender.</p>
  <p>La visualización de datos se puede utilizar para diversos propósitos, y es importante tener en cuenta que su uso no está reservado únicamente para los equipos de datos. La gerencia también la aprovecha para transmitir la estructura y jerarquía organizativa, mientras que los analistas de datos y los científicos de datos la utilizan para descubrir y explicar patrones y tendencias.</p>
  <p>Tipos de visualizaciones de datos</p>
  <p>La forma más antigua de visualización de datos se remonta a los egipcios antes del siglo XVII, en gran parte utilizada como herramienta de navegación. A medida que pasaba el tiempo, las personas aprovecharon las visualizaciones de datos para aplicaciones más amplias, como en las disciplinas económica, social y de la salud.</p>
  <p>Algunas técnicas de visualización comunes son:</p>
  <ul class="ul-disc">
    <li><strong>Tablas:</strong> consisten en filas y columnas que se utilizan para comparar variables. Las tablas pueden mostrar una gran cantidad de información de forma estructurada, pero también pueden abrumar a los usuarios que simplemente buscan tendencias de alto nivel.</li>
    <li><strong>Gráficos circulares y gráficos de barras apiladas</strong>: estos gráficos se dividen en secciones que representan partes de un todo. Proporcionan una forma sencilla de organizar los datos y comparar el tamaño de los componentes entre sí.</li>
    <li><strong>Gráficos de líneas y gráficos de áreas</strong>: estos elementos visuales muestran el cambio en una o más cantidades mediante el trazado de una serie de puntos de datos a lo largo del tiempo y se utilizan con frecuencia dentro de la analítica predictiva. Los gráficos de líneas utilizan líneas para demostrar estos cambios, mientras que los gráficos de área conectan puntos de datos con segmentos de línea, apilando variables una encima de la otra y usando colores para distinguir entre variables.</li>
    <li><strong>Histogramas</strong>: este gráfico traza una distribución de números usando un gráfico de barras (sin espacios entre las barras), que representa la cantidad de datos que se encuentran dentro de un rango particular. Este elemento visual facilita al usuario final la identificación de valores atípicos dentro de un conjunto de datos determinado.</li>
    <li><strong>Gráficos de dispersión</strong>: estos elementos visuales sirven para revelar la relación entre dos variables y se utilizan normalmente en el análisis de regresión. Sin embargo, a veces se pueden confundir con los gráficos de burbujas, que se utilizan para visualizar tres variables mediante el eje x, el eje y y el tamaño de la burbuja.</li>
  </ul>
  <p>Los datos en formatos similares a hojas de cálculo son datos con una estructura bien definida. En el caso de los datos estructurados, su representación gráfica es necesaria en todas las etapas del proceso de análisis, desde la etapa exploratoria, hasta la presentación final de resultados.</p>
  <p>La visualización de datos está en el núcleo del proceso de análisis. Es una herramienta básica para el analista o científico que va transformando y componiendo un modelo lógico de los datos. Apoyándose en la visualización, el analista va descubriendo los secretos enterrados en los datos.</p>
  <p>La visualización permite de forma rápida:</p>
  <ul class="ul-disc">
    <li>Descartar aquellos datos poco representativos o erróneos.</li>
    <li>Identificar aquellas variables que dependen unas de otras y por lo tanto contienen información redundante.</li>
    <li>Realizar cortes a los datos para poder observarlos desde diferentes perspectivas.</li>
    <li>Finalmente, comprobar que aquellos modelos, tendencias, predicciones y agrupaciones que hemos aplicado sobre los datos, nos devuelven el resultado esperado.</li>
  </ul>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el documento de la <a href="<?php echo PATH_DOCS . 'u3_t4_descargable_practica_tipos_graficos.docx'; ?>" target="_blank">práctica</a>. Lee con atención y contesta las preguntas de cada actividad, irás resolviéndolas conforme avance la lección. Mantén abierta la práctica para realizar el resto de los ejercicios.</li>
    <li>No olvides guardar tu avance.</li>
    <li>Una vez que termines con las <strong>cinco actividades</strong>, guarda el documento siguiendo el formato: Apellidos_Nombre_U3Ap4. Ejemplo: SanchezLopez_JoseLuis_U3Ap4.</li>
    <li>Consulta los <a href="<?php echo PATH_DOCS . 'u3_t4_lista_cotejo_practica_tipos_graficos.pdf'; ?>" target="_blank">Criterios de evaluación</a> de la actividad.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a8', "Práctica: Tipos de gráficos", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
