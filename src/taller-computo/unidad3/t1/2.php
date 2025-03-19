<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

  <h2>Ambiente de trabajo</h2>
  <h3>Propósitos:</h3>
  <p>Al finalizar la unidad el alumno:</p>
  <p>Utilizará fórmulas, funciones y gráficos mediante una hoja electrónica de cálculo para el manejo de datos y la resolución de problemas matemáticos.</p>
  <p>El ambiente de trabajo de Excel es altamente intuitivo y está diseñado para principiantes y usuarios avanzados.</p>
  <p>En el corazón de Excel se encuentra una cuadrícula de celdas, donde los datos se almacenan y organizan. Cada celda se identifica mediante una combinación de letra y número, lo que permite una referencia única. Además de las celdas, Excel ofrece una amplia variedad de herramientas y funciones que incluyen fórmulas para realizar cálculos, gráficos para visualizar datos, opciones de formato para mejorar la presentación y muchas otras características que lo convierten en una herramienta poderosa para tareas desde simples listas hasta análisis de datos sofisticados.</p>
  <p>El ambiente de trabajo de Excel está diseñado de manera que puedas personalizarlo según tus necesidades y preferencias. Desde la interfaz de usuario hasta las opciones de formato, Excel ofrece una amplia flexibilidad. A medida que avances descubrirás cómo sacar el máximo provecho de esta potente herramienta para trabajar con datos y mejorar la eficiencia en una variedad de situaciones.</p>
  <p>Observa el siguiente video para aprender sobre el ambiente de trabajo de Excel.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('6qGFeeomwKs', '►► Curso de Microsoft EXCEL - 365. 1.2. Entorno básico de Excel. Celda activa. Entorno de trabajo');
    ?>
  </div>
  <h4>Uso de la ayuda</h4>
  <p>En Microsoft Excel 365, la función de ayuda está diseñada para proporcionar asistencia y respuestas a tus preguntas mientras trabajas en la aplicación. Puedes acceder a la ayuda de varias maneras:</p>
  <ul class="ul-disc">
    <li><strong>Fórmula de Ayuda (F1):</strong> La forma más sencilla de acceder a la ayuda es presionando la tecla "F1" en tu teclado cuando estés dentro de Excel. Esto abrirá la ventana de Ayuda de Excel. Puedes hacer esto en cualquier momento y en cualquier parte de la aplicación.</li>
    <li><strong>Ficha "Ayuda" en la Cinta de Opciones</strong>: En la cinta de opciones, tienes una ficha llamada "Ayuda". Al hacer clic en esta ficha, encontrarás opciones como "Obtener ayuda en Excel" y "Mostrar ayuda". Puedes usar estas opciones para abrir la ventana de Ayuda.</li>
    <div class="max-w-5xl mx-auto my-10">
      <?php renderImage('u3_t1_cinta_ayuda.webp', 'Cinta de opciones de Excel.') ?>
    </div>
    <li><strong>Barra de Búsqueda de Ayuda</strong>: En la parte superior central de la ventana de Excel 365, encontrarás una barra de búsqueda en la que puedes escribir palabras clave o preguntas relacionadas con lo que necesitas ayuda. Al presionar "Enter" o hacer clic en el icono de búsqueda, se te mostrarán los resultados de la búsqueda.</li>
  </ul>
  <p>Una vez que tengas la ventana de Ayuda abierta, puedes realizar las siguientes acciones:</p>
  <ul class="ul-disc">
    <li><strong>Buscar:</strong> Escribe una palabra clave o pregunta en el cuadro de búsqueda y presiona "Enter" o haz clic en el ícono de búsqueda. La ayuda te mostrará una lista de resultados relacionados.</li>
    <li><strong>Navegar por el Contenido</strong>: Puedes explorar los diferentes temas de ayuda organizados en categorías y subcategorías. Haz clic en las categorías para ver los temas relacionados.</li>
    <li><strong>Imágenes y Videos de Ayuda</strong>: Algunos artículos de ayuda pueden incluir imágenes explicativas y videos que te ayudarán a comprender mejor los conceptos.</li>
    <li><strong>Prueba en Línea</strong>: Algunos temas de ayuda pueden ofrecer una "Prueba en Línea" que te permite practicar directamente en Excel mientras aprendes.</li>
  </ul>
  <p>La ayuda de Excel 365 es una valiosa fuente de información que te puede guiar a través de las funciones y características de la aplicación, así como proporcionar soluciones a problemas comunes. Es una herramienta útil para aprender a utilizar Excel de manera efectiva y resolver cualquier duda que puedas tener mientras trabajas con la aplicación.</p>
  <?php ob_start(); ?>
  <p>El entorno de trabajo de Excel se compone de varios elementos clave, cada uno diseñado para facilitar la creación, edición y análisis de datos. A continuación, describiremos estos elementos, da clic en cada elemento y te proporcionaremos la descripción de cada uno para ayudar en la comprensión.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a2', "Área de trabajo Excel", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
