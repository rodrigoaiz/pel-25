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
  <h3>CITA TEXTUAL LARGA</h3>
  <p>En ella se reproduce un texto literalmente de más de 40 palabras, se escribe aparte del texto, con sangría de 1.3 cm, sin comillas, sin cursivas, con el mismo tipo y tamaño de fuente, se acompaña de los datos del autor, año y número de la página de donde se extrajo el texto. Se puede presentar en cualquiera de los siguientes tres énfasis.</p>
  <div class="mx-auto max-w-2xl">
    <?php renderImage("u1_t4_definicion_disolucion.webp", "Definición de disolución."); ?>
    <p class="text-sm"><strong>Nota</strong>: Explicación de una disolución gaseosa, sólida o líquida, tomada de Chang, R. (2002). Química. (M. Ramírez y R. Zugazagoltia, Trads.) (7ª ed.). Colombia: McGraw-Hill Education.</p>
  </div>
  <ul class="ul-disc">
    <li>
      <h4>Énfasis en el autor utiliza la cita narrativa</h4>
      <div class="px-5 py-4">Formato<p>Autor (Año), Texto, (p. Número de página).</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="bg-orange-own/75 px-2">Sangría<p>1.3 cm</p>
              </td>
              <td>Chang (2002) dice que, una disolución es una mezcla homogénea de dos o más sustancias. El soluto es la sustancia presente en menor cantidad, y el disolvente es la sustancia que está en mayor cantidad. Una disolución puede ser gaseosa (como el aire), sólida (como una aleación) o líquida (como el agua de mar), (p. 106).</td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li>
      <h4>Énfasis en el año</h4>
      <div class="px-5 py-4">Formato<p>Año, Autor, Texto, (p. Número de página).</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="bg-orange-own/75 px-2">Sangría<p>1.3 cm</p>
              </td>
              <td>En 2002 el Chang mencionó que una disolución es una mezcla homogénea de dos o más sustancias. El soluto es la sustancia presente en menor cantidad, y el disolvente es la sustancia que está en mayor cantidad. Una disolución puede ser gaseosa (como el aire), sólida (como una aleación) o líquida (como el agua de mar), (p. 106).</td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li>
      <h4>Énfasis en el contenido utiliza la cita entre paréntesis</h4>
      <div class="px-5 py-4">Formato<p>Autor (Año), Texto, (p. Número de página).</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="bg-orange-own/75 px-2">Sangría<p>1.3 cm</p>
              </td>
              <td>Una disolución es una mezcla homogénea de dos o más sustancias. El soluto es la sustancia presente en menor cantidad, y el disolvente es la sustancia que está en mayor cantidad. Una disolución puede ser gaseosa (como el aire), sólida (como una aleación) o líquida (como el agua de mar), (Chang, 2002, p. 106).</td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
  </ul>
  <?php ob_start(); ?>
  <p class="font-black">Continúa con la práctica de citas y referencias bibliográficas. Elabora el Ejercicio 2. Cita larga.</p>
  <p>Recuerda que para esta actividad estos son los pasos a seguir:</p>
  <ol class="ol-number">
    <li>Descarga este <a href="<?php echo PATH_DOCS . 'u1_t4_practica_citas_referencias_bibliograficas.docx' ?>" target="_blank">documento</a> para anotar tus avances.</li>
    <li>Una vez que concluyas todos los ejercicios guarda el documento siguiendo el formato: Apellidos_Nombre_Ap3_Actividad01. Ejemplo: SanchezLopez_JoseLuis_Ap3_Actividad01</li>
  </ol>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u1_t4_rubrica_practica_citas_referencias_bibliograficas.pdf' ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a19', "Práctica: Citas y Referencias bibliográficas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
