<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Gráfico de barras</h3>
  <p>Es un diagrama usado para mostrar de forma resumida un grupo de datos que puede incluir variables cualitativas y cuantitativas.</p>
  <p>Estas gráficas reflejan los conteos de frecuencia de valores (las cantidades) de los distintos niveles de una variable categórica o nominal. A veces se usan diagramas de barras para representar otras estadísticas, como porcentajes.</p>
  <?php renderImagePleca('u3_t4_tabla1_datos_graficar.webp', 'Tabulación de datos.'); ?>
  <p><strong>Nota</strong>: la variable categórica o nominal es Plantel del CCH y los conteos de frecuencia de valores son las cantidades de atletas en cada plantel.</p>
  <?php renderImage('u3_t4_figura1_grafica_barras.webp', 'Ejemplo de gráfico de barras y columnas.') ?>
  <p><strong>Nota</strong>: A la izquierda el gráfico de barras, a la derecha el gráfico de columnas. Elaboración propia.</p>
  <h4>Características de un gráfico de barras</h4>
  <ul class="ul-disc">
    <li>Se compone de barras (horizontales) o columnas (verticales) de diferentes alturas o longitudes.</li>
    <li>Tiene un eje horizontal o eje X, donde se ubica una variable, por lo general, cualitativa.</li>
    <li>Tiene un eje vertical o eje Y, donde se indican los valores que determinan la longitud de las barras o la altura de las columnas. A estos números se les conoce como frecuencia.</li>
    <li>El ancho de las barras o columnas y el espacio entre cada una debe ser el mismo.</li>
    <li>Las barras o columnas también sirven para comparar valores.</li>
  </ul>
  <p>Visualiza el video Diagrama de barras para revisar cómo se elabora la tabla de datos, como se representan en una gráfica de barras y algunas preguntas que se pueden contestar con esta gráfica.</p>
  <?php renderVideoIframe('Uj2C9Hu0or4', 'Diagrama de barras l Curso de Estadística Básica', 'max-w-lg mx-auto') ?>
  <p>Visualiza el video Tablas y Diagramas de barras para luego realizar la siguiente actividad para aplicar los conocimientos adquiridos en la teoría y el ejemplo en video.</p>
  <?php renderVideoIframe('CvVZpYZcZls', 'Tablas y Diagramas de barras | Aula chachi - Vídeos educativos para niños', 'max-w-lg mx-auto') ?>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el documento de la <a href="<?php echo PATH_DOCS . 'u3_t4_descargable_practica_tipos_graficos.docx'; ?>" target="_blank">práctica</a>. Lee con atención y contesta las preguntas de la “<a href="<?php echo PATH_DOCS . 'u3_t4_documento_trabajo_tipos_graficos.xlsx'; ?>" target="_blank">Elaboración de gráfica de barras</a>”. También necesitarás esta hoja de cálculo. Mantén abierta la práctica para realizar el resto de los ejercicios.</li>
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
