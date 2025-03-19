<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Celdas y su formato</h3>
  <p>Las celdas son elementos fundamentales de una hoja de cálculo que almacenan datos, fórmulas y otros contenidos. El formato de las celdas se refiere a cómo se presentan visualmente los datos en estas celdas, y es una parte esencial para mejorar la legibilidad y la presentación de tus hojas de cálculo. A continuación, se describen los aspectos clave relacionados con el formato de celdas en Excel:</p>
  <ol class="ol-number">
    <li>
      <h4>Alineación y Orientación</h4>
      <p>Puedes controlar la alineación y orientación del contenido en las celdas. Esto incluye ajustar la posición del texto dentro de una celda, alinearlo a la izquierda, derecha o centrar, así como rotar el texto para una mejor presentación.</p>
      <div class="max-w-2xs mx-auto mt-10">
        <?php renderImage('u3_t1_formatos.webp', 'Alineación en Excel.') ?>
      </div>
    </li>
    <li>
      <h4>Relleno y Fuente</h4>
      <p>Puedes personalizar el color de fondo (relleno) de las celdas, así como el formato de la fuente, que incluye opciones para cambiar la tipografía, el tamaño, el estilo (negrita, cursiva), y otros atributos de texto.</p>
      <div class="max-w-xl mx-auto mt-10">
        <?php renderImage('u3_t1_relleno.webp', 'Relleno y fuente.') ?>
      </div>
    </li>
    <li>
      <h4>Estilos y Bordes</h4>
      <p>Excel te permite aplicar estilos predefinidos a las celdas, lo que facilita la creación de tablas y cuadros con un aspecto profesional. También puedes añadir bordes a las celdas para destacar información o crear un diseño específico.</p>
      <div class="max-w-2xs mx-auto mt-10">
        <?php renderImage('u3_t1_estilos.webp', 'Estilos y bordes.') ?>
      </div>
    </li>
    <li>
      <h4>Combinación de Celdas</h4>
      <p>Puedes combinar varias celdas en una sola para crear encabezados o resaltar información importante en la hoja de cálculo. Esto es útil para mejorar la presentación de tus datos.</p>
      <div class="max-w-2xs mx-auto mt-10">
        <?php renderImage('u3_t1_combinar.webp', 'Combinar celdas.') ?>
      </div>
    </li>
  </ol>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
