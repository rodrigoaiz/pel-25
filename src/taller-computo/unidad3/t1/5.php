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
  <h3>Celdas y su formato</h3>
  <p>En Excel, puedes aplicar varios tipos de formato a las celdas para mostrar datos numéricos, fechas, moneda, porcentajes, fracciones y otros. A continuación, veremos estos distintos formatos:</p>
  <div class="max-w-md mx-auto">
    <?php renderImage('u3_t1_formatos_celda.webp', 'Combinar celdas.'); ?>
  </div>
  <ol class="ol-number">
    <li>
      <h4>Formato Numérico</h4>
      <p>Puedes aplicar varios formatos numéricos a las celdas según tus necesidades. Los formatos numéricos te permiten mostrar números de diferentes maneras. Algunos ejemplos incluyen:</p>
      <ul>
        <li>Número decimal (con o sin decimales).</li>
        <li>Número entero.</li>
        <li>Notación científica.</li>
        <li>Número personalizado (puedes especificar el formato exacto).</li>
        <li>Para aplicar un formato numérico, selecciona las celdas que deseas formatear, ve a la pestaña "Inicio" y utiliza la sección "Número" para elegir el formato adecuado.</li>
      </ul>
    </li>

    <li>
      <h4>Formato de Moneda</h4>
      <p>El formato de moneda se utiliza para mostrar valores como valores monetarios. Puedes elegir el símbolo de moneda (por ejemplo, $, €) y la cantidad de decimales que deseas mostrar. Para aplicar un formato de moneda, selecciona las celdas, ve a la pestaña "Inicio," y utiliza la sección "Número" para seleccionar el formato de moneda.</p>
    </li>

    <li>
      <h4>Formato de Fecha</h4>
      <p>Puedes utilizar formatos de fecha para mostrar fechas de diferentes maneras. Excel ofrece varios formatos predefinidos, como "dd/mm/aaaa" o "aaaa-mm-dd," pero también puedes crear tu propio formato personalizado. Para aplicar un formato de fecha, selecciona las celdas que contienen las fechas, ve a la pestaña "Inicio," y selecciona el formato de fecha deseado.</p>
    </li>

    <li>
      <h4>Formato de Porcentaje</h4>
      <p>El formato de porcentaje se utiliza para mostrar números como porcentajes. Por ejemplo, si deseas mostrar 0.25 como 25%, puedes aplicar un formato de porcentaje. Selecciona las celdas, ve a la pestaña "Inicio," y selecciona el formato de porcentaje en la sección "Número."</p>
    </li>

    <li>
      <h4>Formato de Fracción</h4>
      <p>Excel te permite mostrar números como fracciones. Por ejemplo, puedes mostrar 0.75 como 3/4. Selecciona las celdas, ve a la pestaña "Inicio," y selecciona el formato de fracción en la sección "Número."</p>
    </li>

    <li>
      <h4>Formato Personalizado</h4>
      <p>Si ninguno de los formatos predefinidos satisface tus necesidades, puedes crear un formato personalizado. Puedes combinar varios elementos, como texto y números, para crear un formato único. Para aplicar un formato personalizado, selecciona las celdas, ve a la pestaña "Inicio," y utiliza la sección "Número" para crear un formato personalizado.</p>
    </li>
  </ol>
  <?php ob_start(); ?>
  <p>A continuación te invitamos a desafiar tus conocimientos en lo que has aprendido y repasado del entorno de Excel, aquí te presentamos una actividad para afianzar tus conocimientos, identificando cada una de las partes que conforman la pantalla de trabajo de esta aplicación.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a3', "Entorno de Excel", $ActividadContent);
  ?>
  <h4>Conclusión</h4>
  <p>Aprender a emplear Excel y comprender las temáticas anteriores es de suma importancia en el mundo actual. Excel es una herramienta de software que se utiliza en una amplia variedad de industrias y roles profesionales. La habilidad para trabajar eficazmente con celdas, fórmulas, gráficos y otros elementos de Excel es esencial para la recopilación, organización y análisis de datos. Además, el formato de celdas y la presentación adecuada de la información son fundamentales para la comunicación efectiva de resultados y la toma de decisiones informadas.</p>
  <p>El conocimiento de los tipos de datos y su aplicación en Excel permite a los usuarios representar y procesar información de manera precisa. La capacidad de personalizar y dar formato a celdas mejora la claridad y la estética de los documentos. El formato condicional, las tablas y otros elementos avanzados añaden valor a las hojas de cálculo.</p>
  <p>En un mundo impulsado por datos, Excel es una herramienta esencial para la productividad y el análisis. Aprender a emplearlo de manera eficiente no solo mejora las perspectivas laborales, sino que también permite tomar decisiones más informadas y trabajar de manera más efectiva en una amplia gama de campos, desde negocios y finanzas hasta educación y ciencia. La inversión en la adquisición de estas habilidades es, sin duda, una inversión en el crecimiento personal y profesional.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
