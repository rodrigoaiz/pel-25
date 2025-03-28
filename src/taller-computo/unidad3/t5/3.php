<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h4>Gráfico de dispersión</h4>
  <p>Observa el siguiente video:</p>
  <?php renderVideoIframe('pb_bONkyIaU', '¿Qué es Diagrama de Dispersión?', 'max-w-xl mx-auto my-5') ?>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el <a href="<?php echo PATH_DOCS . 'u3_t5_descargable_practica_grafico_dispersion.docx'; ?>" target="_blank">documento de la práctica</a>. ee con atención y contesta las preguntas de las actividades:</li>
    <ul>
      <li>“El gráfico de dispersión”</li>
      <li>“Elaboración de la gráfica de la línea recta”</li>
      <li>“Observación del comportamiento de gráficas de líneas rectas”</li>
    </ul>
    <li>Mantén abierta la práctica para realizar el resto de los ejercicios. Conforme avances recuerda guardar tu progreso.</li>
    <li>Una vez que termines todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U3Ap5. Ejemplo: SanchezLopez_JoseLuis_U3Ap5.</li>
    <li>Consulta los <a href="<?php echo PATH_DOCS . 'u3_t5_lista_cotejo_practica_grafico_dispersion_analisis_graficos.pdf'; ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a10', "Práctica: Gráfico de dispersión y análisis de gráficos", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
