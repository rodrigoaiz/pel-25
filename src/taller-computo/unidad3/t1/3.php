<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Barra de fórmulas</h3>
  <p>La Barra de Fórmulas en Excel 365 es una característica fundamental que permite a los usuarios introducir, editar y ver fórmulas, así como visualizar los contenidos de las celdas. Esta barra se encuentra en la parte superior de la hoja de cálculo y desempeña un papel esencial en el procesamiento y análisis de datos en Excel. Explicaremos en detalle cómo funciona y cómo sacar el máximo provecho de la Barra de Fórmulas en Excel 365.</p>
  <div class="max-w-4xl mx-auto my-10">
    <?php renderImage('u3_t1_barra_formulas.webp', 'Barra de fórmulas de Excel.') ?>
  </div>
  <ol class="ol-number">
    <li>
      <h4>Mostrando Contenido de Celdas</h4>
      <p>La Barra de Fórmulas muestra el contenido de la celda activa, lo que permite ver el valor o la fórmula que se encuentra en esa celda. Puedes hacer clic en cualquier celda para ver su contenido en la Barra de Fórmulas. Esto es especialmente útil cuando trabajas con celdas que contienen fórmulas complejas.</p>
      <div class="max-w-xl mx-auto mt-10">
        <?php renderImage('u3_t1_formulas2.webp', 'Contenido de barra de fórmulas.') ?>
      </div>
    </li>
    <li>
      <h4>Introducción de Fórmulas</h4>
      <p>Puedes utilizar la Barra de Fórmulas para introducir fórmulas en Excel 365. Simplemente haz clic en la celda donde deseas que aparezca el resultado de la fórmula, y luego escribe la fórmula directamente en la Barra de Fórmulas. A medida que escribes, Excel te ofrecerá sugerencias y autocompletará funciones y referencias de celdas.</p>
      <div class="max-w-xl mx-auto mt-10">
        <?php renderImage('u3_t1_barra_funciones.webp', 'Introducir fórmulas en la barra de fórmulas.') ?>
      </div>
    </li>
    <li>
      <h4>Edición de Fórmulas</h4>
      <p>La Barra de Fórmulas facilita la edición de fórmulas existentes. Si deseas modificar una fórmula, simplemente haz clic en la celda que contiene la fórmula que deseas editar. La fórmula se mostrará en la Barra de Fórmulas, donde puedes hacer las modificaciones necesarias.</p>
    </li>
    <li>
      <h4>Visualización de Resultados</h4>
      <p>Cuando seleccionas una celda que contiene una fórmula, la Barra de Fórmulas mostrará el resultado de esa fórmula. Esto es útil para verificar que la fórmula ha sido calculada correctamente y para comprender el valor resultante.</p>
    </li>
    <li>
      <h4>Referencias de Celdas</h4>
      <p>La Barra de Fórmulas también muestra las referencias de celdas en las fórmulas. Esto te permite ver qué celdas se utilizan en la fórmula y cómo están relacionadas. Las referencias de celdas pueden ser relativas, absolutas o mixtas, y la Barra de Fórmulas las muestra claramente.</p>
      <div class="max-w-xl mx-auto mt-10">
        <?php renderImage('u3_t1_referencias_celdas.webp', 'Referencias de celdas.') ?>
      </div>
    </li>
    <li>
      <h4>Funciones y Autocompletar</h4>
      <p>Al escribir una fórmula en la Barra de Fórmulas, Excel 365 te proporciona una lista de funciones disponibles y sus argumentos. También permite autocompletar funciones y nombres de celdas a medida que escribes, lo que acelera el proceso de creación de fórmulas.</p>
      <div class="max-w-xl mx-auto mt-10">
        <?php renderImage('u3_t1_funciones_predefinidas.webp', 'Funciones predefinidas en Excel.') ?>
      </div>
    </li>
    <li>
      <h4>Errores y Auditoría de Fórmulas</h4>
      <p>Si hay un error en una fórmula, la Barra de Fórmulas te mostrará un indicador de error. Puedes hacer clic en este indicador para obtener más información sobre el error y utilizar las herramientas de auditoría de fórmulas para solucionarlo.</p>
      <div class="max-w-xl mx-auto mt-10">
        <?php renderImage('u3_t1_errores.webp', 'Errores en Excel.') ?>
      </div>
    </li>
  </ol>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
