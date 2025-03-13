<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>El almacenamiento de la información</h3>
  <p>La información que se almacena no son unos y ceros que es como se representa la información, estos unos y ceros se guardan de forma indirecta, mediante altos y bajos voltajes, cambios de superficie o superficies planas.</p>
  <h3>La memoria RAM</h3>
  <ul>
    <li>Emplea direcciones de memoria donde almacena los ceros y unos.</li>
    <table class="table-matrix">
      <tbody class="text-center">
        <tr>
          <td>1</td>
          <td>0</td>
          <td>1</td>
          <td>1</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </ul>
  <h3>La memoria Flash USB</h3>
  <ul>
    <li>Utiliza celdas de memoria donde se almacenan los ceros y unos.</li>
    <div class="grid md:grid-cols-2 gap-3 my-5">
      <table class="table-matrix">
        <tbody class="text-center">
          <tr>
            <td>0</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
      <table class="table-matrix text-transparent">
        <tbody>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
      <table class="table-matrix text-transparent">
        <tbody>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
      <table class="table-matrix text-transparent">
        <tbody>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </ul>
  <h3>Discos ópticos (CD, DVD, HDVD y BD)</h3>
  <p>Pits o muescas y Lands o superficies planas utilizadas como unos y ceros.</p>
  <div class="max-w-lg mx-auto">
    <?php renderImage('u2_t3_figura11.webp', 'El almacenamiento en discos ópticos. Imagen editada de 27556229.', 'https://commons.wikimedia.org/wiki/File:CD_DVD_Comparison.png', 'Wikimedia Commons'); ?>
  </div>
  <p>Nota: Ejemplo del almacenamiento de la información en los discos ópticos, muestra los pits (muescas o fosos) y lands (planicies o llanos) grabados, los bordes de los pits representan a los unos y las planicies a los ceros.</p>
  <?php ob_start(); ?>
  <p>Descarga este <a href="<?php echo PATH_DOCS . 'u2_t3_practica_representacion_informacion.docx' ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de la <strong>Actividad 4</strong>.</p>
  <p>Mantén abierta la práctica para realizar el resto de los ejercicios, conforme se te vaya solicitando.</p>
  <p class="font-bold">Una vez que hayas concluido todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U2Ap4. Ejemplo: SanchezLopez_JoseLuis_U2Ap4.</p>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u2_t3_rubrica_practica_representacion_informacion.pdf' ?> target=" _blank">Criterios de evaluación</a> de la actividad. Más adelante te diremos dónde enviar tu trabajo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a11', "Práctica: La representación de la información", $ActividadContent);
  ?>
</section>
<style>
  .table-matrix {
    margin: .25rem auto;
    width: 100%;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  }

  .table-matrix td {
    text-align: center;
    border: 5px solid #1d4ed8;
    padding: 1rem;
  }
</style>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
