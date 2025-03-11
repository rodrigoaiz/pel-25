<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>REFERENCIA BIBLIOGRÁFICA</h3>
  <p>Es el grupo de datos que sirven para identificar y localizar una obra (libro, artículo científico, página web, tesis, etc.) que hemos utilizado y citado en nuestro trabajo, su función es apoyar nuestras afirmaciones e indicar los documentos en los que nos basamos para elaborarlo. Existen diferentes estilos para redactarlos como APA, MLA, Chicago, entre muchos otros.</p>
  <p>Revisa cada tipo de referencia bibliográfica para aprender a elaborarla.</p>
  <ul class="ul-disc">
    <li>
      <strong>Libro impreso con un autor</strong>
      <div>
        <p><strong>Datos:</strong></p>
        <p>Autor. (Apellido paterno, inicial del primer nombre), Fecha de publicación, Título, Lugar de publicación, Editorial.</p>
        <p><strong>Formato:</strong></p>
        <p class="text-center">Apellido paterno, Inicial del primer nombre. (Año de publicación). <em>Título del libro</em>. Ciudad: Editorial.</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="text-center">CUBIERTA</td>
              <td class="text-center">DATOS EDITORIALES</td>
            </tr>
            <tr>
              <td>
                <div class="image_container text-center"><img src="<?php echo PATH_IMAGES . 'u1_t4_cubierta_leer_escribir.webp' ?>" alt=""></div>
              </td>
              <td>
                <div class="image_container text-center"><img src="<?php echo PATH_IMAGES . 'u1_t4_datos_leer_escribir.webp' ?>" alt=""></div>
              </td>
            </tr>
          </tbody>
        </table>
        <p><strong>Referencia bibliográfica:</strong></p>
        <p>Lerner, D. (2001). <em>Leer y escribir en la escuela</em>. México: Secretaría de Educación Pública.</p>
        <p><strong>Cita entre paréntesis</strong></p>
        <p>(Lerner, 2001)</p>
        <p><strong>Cita narrativa</strong></p>
        <p>Lerner (2001)</p>
      </div>
    </li>
    <li>
      <strong>Libro impreso con dos autores</strong>
      <div>
        <p><strong>Formato:</strong></p>
        <p>Apellido paterno1, Inicial del primer nombre1. y Apellido paterno2, Inicial del primer nombre2. (Año de publicación). <em>Título del libro</em>. Ciudad: Editorial.</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="text-center">CUBIERTA</td>
              <td class="text-center">DATOS EDITORIALES</td>
            </tr>
            <tr>
              <td>
                <div class="image_container text-center"><img src="<?php echo PATH_IMAGES . 'u1_t4_cubierta_manifiesto.webp' ?>" alt=""></div>
              </td>
              <td>
                <div class="image_container text-center"><img src="<?php echo PATH_IMAGES . 'u1_t4_datos_manifiesto.webp' ?>" alt=""></div>
              </td>
            </tr>
          </tbody>
        </table>
        <p><strong>Referencia bibliográfica:</strong></p>
        <p>Marx, K, y Engels, F. (2017). <em>El manifiesto comunista</em>. (F. Lara, Trad.). Barcelona: Ediciones Península.</p>
        <p><strong>Cita entre paréntesis</strong></p>
        <p>(Marx y Engels, 2017)</p>
        <p><strong>Cita narrativa</strong>Marx y Engels (2017)
      </div>
      <?php renderVideoIframe('PARStQiCxCk', 'Referencia bibliográfica de un libro impreso en formato APA', 'max-w-2xl mx-auto') ?>
    </li>
    <li>
      <strong>Artículo de revista</strong>
      <div>
        <p><strong>Datos:</strong></p>
        <p>Autor. (Apellido paterno, inicial del primer nombre), Fecha de publicación, Título del artículo. Título de la publicación o revista, los dígitos del volumen y del número de la revista y el rango de páginas donde se encuentra el artículo. URL dirección de internet del artículo, si aparece el número doi se anota de lo contrario se omite.</p>
        <p><strong>Formato:</strong></p>
        <p>Apellido paterno, Inicial. (Fecha de publicación). Título del artículo. Título de la publicación, volumen (número), pp. xx-xx. Recuperado de URL. doi: xx.xxxxxxx</p>
        <p class="text-center">CUBIERTA</p>
        <div class="image_container text-center">
          <img src="<?php echo PATH_IMAGES . 'u1_t4_articulo1.webp' ?>" alt="">
        </div>
        <p><strong>Referencia bibliográfica:</strong></p>
        <p>Altuve, H., Márquez, J., Rodríguez, A., Serrano, F., González, D., Moret, Y., y González, J. (2010). Síndrome del túnel carpiano. <em>Acta Odontológica Venezolana</em>, 48(3), pp. 43-44. Recuperado de</p>
        <p class="truncate">http://saber.ucv.ve/ojs/index.php/rev_aov/article/view/7890</p>
        <p><strong>Cita entre paréntesis</strong></p>
        <p>(Altuve et al., 2010)</p>
        <p><strong>Cita narrativa</strong></p>
        <p>Altuve et al. (2010)</p>
      </div>
      <?php renderVideoIframe('tVWLsm6hQfc', 'Referencia bibliográfica de un artículo científico en línea en formato APA', 'max-w-2xl mx-auto') ?>
    </li>
    <li>
      <strong class="text-2xl">Página web. Todos los datos disponibles</strong>

      <div class="px-5 py-4"><strong>Datos:</strong>
        <p>Autor. (Apellido paterno, inicial del primer nombre), Fecha de publicación, Título, Fecha de consulta y URL.</p><strong>Formato:</strong>
        <p>Apellido paterno, Inicial del primer nombre. (Fecha de publicación). Título del artículo. Recuperado en Fecha de consulta, de URL</p>
        <p class="text-center">CUBIERTA</p>
        <div class="image_container text-center">
          <img src="<?php echo PATH_IMAGES . 'u1_t4_pagina_web_uno.webp' ?>" alt="">
          <p class="url_foot"> <a href="" target="_blank"></a></p>
        </div>
        <strong>Referencia bibliográfica:</strong>
        <p>González, N. (2021). <em>Ciencia para hacer frente a los huracanes</em>. Recuperado 10 de abril de 2023, de </p>
        <p class="truncate">https://ciencia.nasa.gov/ciencia-para-hacer-frente-los-huracanes.</p>
      </p><strong>Cita entre paréntesis</strong>
        <p>(González, 2021)</p><strong>Cita narrativa</strong>
        <p>González (2021)</p>
      </div>
    </li>
    <li>
      <strong class="text-2xl">Página web. Sin autor</strong>

      <div class="px-5 py-4"><strong>Datos:</strong>
        <p>Fecha de publicación, Título, Fecha de consulta y URL.</p><strong>Formato:</strong>
        <p><em>Título del artículo</em>. (Fecha de publicación). Recuperado en Fecha de consulta, de URL</p><strong>Referencia bibliográfica:</strong>
        <p><em>Ciencia para hacer frente a los huracanes</em>. (2021). Recuperado 10 de abril de 2023, de https://ciencia.nasa.gov/ciencia-para-hacer-frente-los-huracanes.</p><strong>Cita entre paréntesis</strong>
        <p>(«Ciencia para hacer frente a los huracanes », 2021)</p><strong>Cita narrativa</strong>
        <p>No la hay</p>
      </div>
    </li>
    <li>
      <strong class="text-2xl">Página web. Sin fecha de publicación</strong>

      <div class="px-5 py-4"><strong>Datos:</strong>
        <p>Autor. (Apellido paterno, inicial del primer nombre), Título, Fecha de consulta y URL.</p><strong>Formato:</strong>
        <p>Apellido paterno, Inicial. (s.f.). <em>Título del artículo</em>. Recuperado en Fecha, de URL</p><strong>Referencia bibliográfica:</strong>
        <p>González, N. (s.f.). <em>Ciencia para hacer frente a los huracanes</em>. Recuperado 10 de abril de 2023, de https://ciencia.nasa.gov/ciencia-para-hacer-frente-los-huracanes.</p><strong>Cita entre paréntesis</strong>
        <p>(González, s.f.)</p><strong>Cita narrativa</strong>
        <p>González (s.f.)</p>
      </div>
    </li>
    <li>
      <strong class="text-2xl">Página web. Sin autor, ni fecha de publicación</strong>

      <div class="px-5 py-4"><strong>Datos:</strong>
        <p>Título, Fecha de consulta y URL.</p><strong>Formato:</strong>
        <p><em>Título del artículo</em>.(s.f.). Recuperado en Fecha, de URL</p><strong>Referencia bibliográfica:</strong>
        <p><em>Ciencia para hacer frente a los huracanes</em>. (s.f.). Recuperado 10 de abril de 2023, de https://ciencia.nasa.gov/ciencia-para-hacer-frente-los-huracanes.</p><strong>Cita entre paréntesis</strong>
        <p>(«Ciencia para hacer frente a los huracanes », s.f.)</p><strong>Cita narrativa</strong>
        <p>No la hay</p>
      </div>
      <?php renderVideoIframe('CPWmF2xS8AY', 'Referencia bibliográfica de una página web en formato APA', 'max-w-2xl mx-auto') ?>
    </li>
    <li>
      <strong class="text-2xl">Libro electrónico</strong>
      <div class="px-5 py-4"><strong>Datos:</strong>
        <p>Autor. (Apellido paterno, inicial del primer nombre), Fecha de publicación, Título, Editorial y URL.</p><strong>Formato:</strong>
        <p>Apellido paterno del autor, Inicial. (Fecha). <em>Título del libro</em>. [EBook]. Ciudad: Editorial. Recuperado de URL.</p>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="text-center">CUBIERTA</td>
              <td class="text-center">DATOS EDITORIALES</td>
            </tr>
            <tr>
              <td>
                <div class="image_container text-center"><img src="<?php echo PATH_IMAGES . 'u1_t4_cubierta_hitler.webp' ?>" alt=""></div>
              </td>
              <td>
                <div class="image_container text-center"><img src="<?php echo PATH_IMAGES . 'u1_t4_datos_hitler.webp' ?>" alt=""></div>
              </td>
            </tr>
          </tbody>
        </table>
        <strong>Referencia bibliográfica:</strong>
        <Recuperado>Fusi, J. (2015). <em>El efecto Hitler: Una breve historia de la segunda guerra mundial</em> [EBook]. Barcelona: Espasa. Recuperado de</p>
        <p class="truncate">https://www.planetadelibros.com/libros_contenido_extra/30/29366_El_efecto_Hitler.pdf</p>
        <p><strong>Cita entre paréntesis</strong></p>
        <p>(Fusi., 2015)</p><strong>Cita entre narrativa</strong>
        <p>Fusi (2015)</p>
      </div>
      <?php renderVideoIframe('SeiqlUzZ63Y', 'Referencia bibliografica de un libro electrónico en formato APA ', 'max-w-2xl mx-auto') ?>
    </li>
  </ul>
  <?php ob_start(); ?>
  <p class="font-black">Continúa con la práctica de citas y referencias bibliográficas. Realiza del ejercicio 4 al 7 sobre las distintas referencias bibliográficas.</p>
  <ol class="ol-number">
    <li>Descarga este <a href="<?php echo PATH_DOCS . 'u1_t4_practica_citas_referencias_bibliograficas.docx' ?>" target="_blank">documento</a> para anotar tus avances.</li>
    <li>Una vez que concluyas todos los ejercicios guarda el documento siguiendo el formato: Apellidos_Nombre_Ap3_Actividad01. Ejemplo: SanchezLopez_JoseLuis_Ap3_Actividad01</li>
  </ol>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u1_t4_rubrica_practica_citas_referencias_bibliograficas.pdf' ?>" target="_blank">Criterios de evaluación</a> de la actividad. Ha llegado el momento de entregar tu tarea.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a19', "Práctica: Citas y Referencias bibliográficas", $ActividadContent);
  ?>
</section>
<style>
  .ul-disc li {
    margin-bottom: 0.5rem;
    border-top: 2px dashed grey;

    p {
      margin: 0;
    }
  }
</style>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
