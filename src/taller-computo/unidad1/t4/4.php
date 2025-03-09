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
  <h3>CITA NO TEXTUAL</h3>
  <p>Una cita no textual o indirecta también llamada paráfrasis es un resumen corto de una parte de una obra o de toda ella ya sea de otro autor o propia. </p>
  <p>La paráfrasis es un proceso que incluye la comprensión lectora, resumir, sintetizar y reformular ideas, enfocándose en la información importante.</p>
  <p>Revisa cada tipo de cita para aprender a elaborarla y después realiza el ejercicio correspondiente en la práctica Citas y Referencias bibliográficas.</p>

  <h3>CITA NO TEXTUAL ESPECÍFICA</h3>
  <p>Es la reproducción en nuestras propias palabras de las ideas principales de una parte del texto original sin cambiar su significado, Se adiciona la página o páginas que resumieron o reformularon.</p>
  <div class="mx-auto max-w-2xl">
    <?php renderImage("u1_t4_definicion_disolucion.webp", "Texto original."); ?>
    <p class="text-sm"><strong>Nota</strong>: Describe la definición de red de computadoras, tomada de Benchimol, D. (coord.). (2010). Redes CISCO. Buenos Aires, Argentina: Gradi.</p>
  </div>
  <ul class="ul-disc">
    <li>
      <h4>Énfasis en el autor utiliza la cita narrativa</h4>
      <div class="px-5 py-4">Formato
        <p>Autor (Año), Texto, (p. Número de página).</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="bg-hoverEffect">Sangría<p>1.3 cm</p>
              </td>
              <td>Benchimol (2010) menciona que una red de computadoras es un conjunto de dispositivos interconectados que comparten información y recursos, (p. 106).</td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li>
      <h4>Énfasis en el año</h4>
      <div class="px-5 py-4">Formato
        <p>Año, Autor, Texto, (p. Número de página).</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="bg-orange-own/75 px-2">Sangría<p>1.3 cm</p>
              </td>
              <td>En 2010 Benchimol menciona que una red de computadoras es un conjunto de dispositivos interconectados que comparten información y recursos, (p. 106).</td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li>
      <h4>Énfasis en el contenido utiliza la cita entre paréntesis</h4>
      <div class="px-5 py-4">Formato
        <p>Autor (Año), Texto, (p. Número de página).</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="bg-orange-own/75 px-2">Sangría<p>1.3 cm</p>
              </td>
              <td>Una red de computadoras es un conjunto de dispositivos interconectados que comparten información y recursos, (Benchimol, 2010, p. 106).</td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
  </ul>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
