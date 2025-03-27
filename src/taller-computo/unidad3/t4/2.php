<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Tipos de gráficos</h3>
  <p>Lee con atención los siguientes documentos para determinar el empleo de cada tipo de gráfico.</p>
  <div class="md:grid grid-cols-3">
    <a href="https://support.microsoft.com/es-es/office/tipos-de-gr%C3%A1fico-disponibles-en-office-a6187218-807e-4103-9e0a-27cdb19afb90" target="_blank" class="link-card">
      <h4>Tipos de gráfico disponibles en OFFICE</h4>
    </a>
    <a href="https://www2.utp.edu.co/~wilopez/Informatica1/TiposDeGraficos.htm" target="_blank" class="link-card">
      <h4>Tipos de gráficos</h4>
    </a>
    <a href="https://www.santanderopenacademy.com/es/blog/tipos-de-graficos-en-excel.html" target="_blank" class="link-card">
      <h4>Tipos de gráficos en Excel: ¿cuáles hay y para qué usarlos?</h4>
    </a>
  </div>

  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el documento de la <a href="<?php echo PATH_DOCS . 'u3_t4_descargable_practica_tipos_graficos.docx'; ?>" target="_blank">práctica</a>. Lee con atención y contesta las preguntas de la “Tipos de gráficos”. Mantén abierta la práctica para realizar el resto de los ejercicios.</li>
    <li>No olvides guardar tu avance.</li>
    <li>Una vez que termines con las <strong>cinco actividades</strong>, guarda el documento siguiendo el formato: Apellidos_Nombre_U3Ap4. Ejemplo: SanchezLopez_JoseLuis_U3Ap4.</li>
    <li>Consulta los <a href="<?php echo PATH_DOCS . 'u3_t4_lista_cotejo_practica_tipos_graficos.pdf'; ?>" target="_blank">Criterios de evaluación</a> de la actividad.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a8', "Práctica: Tipos de gráficos", $ActividadContent);
  ?>
</section>
<style>
  .link-card {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    margin: 0.5rem;
    background-color: #e8e8ea;
    border-radius: 8px;
    text-align: center;
    text-decoration: none;
    color: #333;
  }

  .link-card:hover {
    background-color: #d0d0d8;
  }

  .link-card h4 {
    margin: 0;
    font-size: 1.2rem;
  }
</style>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
