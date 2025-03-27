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
  <h3>Gráfico circular</h3>
  <p>Es un diagrama estadístico que representa la relación de cada una de las partes con el todo, representa los porcentajes de cada parte mediante proporciones de manera visual. En concreto, en un gráfico circular se representan los datos mediante porciones de un círculo, de manera que el ángulo de cada sector es proporcional a su frecuencia (cantidad que aporta al total).</p>
  <p>Por lo tanto, cuanto mayor sea la frecuencia de un valor, mayor será la porción que ocupe en el gráfico circular.</p>
  <?php renderImagePleca('u3_t4_tabla1_datos_graficar.webp', 'Tabulación y proporciones.'); ?>
  <p><strong>Nota</strong>: la variable categórica es Plantel del CCH y la frecuencia de los valores son las cantidades de atletas en cada plantel, el aporte de cada plantel al total es su proporción. Elaboración propia.</p>
  <div class="max-w-3xl mx-auto">
    <?php renderImage('u3_t4_figura2_grafica_circular.webp', 'u3_t4_figura2_grafica_circular.webp') ?>
  </div>
  <p><strong>Nota</strong>: Las frecuencias o cantidades se suman, el total corresponderá al 100% y se calcula el porcentaje o proporción de cada elemento, con ello el tamaño del sector. Elaboración propia.</h4>
  <h4>Características de un gráfico circular:</h4>
  <ul class="ul-disc">
    <li>Estos gráficos sólo representan y comparan una variable.</li>
    <li>A cada cualidad de la variable le pertenece una porción del gráfico.</li>
    <li>Las cifras que se anotan sobre cada sector se expresan en porcentajes, por eso son útiles cuando la información que tienes es en su mayoría numérica y son pocos datos.</li>
    <li>La unión de todos los sectores forma un círculo completo.</li>
    <li>Se usa para expresar proporcionalmente los distintos valores de la frecuencia de las variables.</li>
  </ul>
  <p>Visualiza el video Diagrama circular para revisar cómo se elabora la tabla de datos y como se representan en una gráfica circular.</p>
  <?php renderVideoIframe('-_540TruS0g', 'Diagrama circular o gráfico de torta l Curso de Estadística Básica', 'max-w-lg mx-auto') ?>

  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el documento de la <a href="<?php echo PATH_DOCS . 'u3_t4_descargable_practica_tipos_graficos.docx'; ?>" target="_blank">práctica</a>. Lee con atención y contesta las preguntas de la “Elaboración de gráficas circulares”.</li>
    <li>Guarda el documento siguiendo el formato: Apellidos_Nombre_U3Ap4. Ejemplo: SanchezLopez_JoseLuis_U3Ap4. <strong>Es momento de subir tu archivo.</strong></li>
    <li>Consulta los <a href="<?php echo PATH_DOCS . 'u3_t4_lista_cotejo_practica_tipos_graficos.pdf'; ?>" target="_blank">Criterios de evaluación</a> de la actividad.</li>
  </ol> <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u3a8', "Práctica: Tipos de gráficos", $ActividadContent);
        ?>
  <p>Los gráficos circulares son eficaces para comparar partes de un todo durante un período específico. No muestran cambios a lo largo del tiempo.</p>
  <p>Considera utilizar un gráfico circular si estás trabajando con:</p>
  <ul class="ul-disc">
    <li>Un conjunto de datos, los gráficos circulares son eficaces para categorizar y comparar un conjunto de datos.</li>
    <li>Valores positivos, los gráficos circulares no pueden mostrar ceros y pueden resultar confusos al trabajar con valores negativos.</li>
    <li>Siete categorías o menos se vuelve más difícil percibir el tamaño relativo de cada segmento al trabajar con más de siete categorías.</li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
