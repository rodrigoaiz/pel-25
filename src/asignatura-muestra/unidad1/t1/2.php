<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <!-- ✏️ Tu contenido va aquí, entre <section> y </section>. -->

<h2>Entendiendo el concepto de salud y enfermedad</h2>
<p>En esta tabla se presentan las diferencias entre estos conceptos:</p>

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Salud</th>
        <th>Enfermedad</th>
        <th>¿Cómo se representan ambos?</th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>La salud se define como un estado de bienestar físico, mental y social</td>
        <td>La enfermedad se define como un trastorno que afecta el funcionamiento normal del cuerpo o la mente</td>
        <td>La salud se representa como un estado de bienestar</td>
      </tr>
      <tr>
        <td>La salud influye en la calidad de vida</td>
        <td>La enfermedad afecta el funcionamiento normal del cuerpo o la mente</td>
        <td>La enfermedad se representa como un estado de desequilibrio</td>

      </tr>
      <tr>
        <td>La salud es un recurso valioso</td>
        <td>La enfermedad es un problema de salud</td>
        <td>Ambos son conceptos relacionados con el bienestar y la calidad de vida</td> 

      </tr>
    </tbody>
  </table>
</div>

<img class="mx-auto max-w-xs" src="<?php echo PATH_IMAGES . 'salud-enfermedad.webp'; ?>" alt="Imagen de la salud y la enfermedad" title="Imagen de la salud y la enfermedad">

<h3>¿Qué relación existe entre la salud y la enfermedad?</h3>
<ol class="ol-number">
  <li>La salud y la enfermedad son conceptos opuestos pero interrelacionados.</li>
  <li>La salud se refiere a un estado de bienestar, mientras que la enfermedad se refiere a un estado de desequilibrio o malestar.</li>
  <li>La salud y la enfermedad son influenciadas por factores genéticos, ambientales y de estilo de vida.</li>
  <li>La prevención y el tratamiento de la enfermedad son fundamentales para mantener la salud.</li>
</ol>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
