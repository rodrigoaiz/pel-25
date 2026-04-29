<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Los corridos de la Revolución</h2>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-corrido.webp');
      ?>
  </div>

  <p>La <b>música</b> desempeñó un papel crucial en la Revolución Mexicana (1910-1920), sirviendo como <b>medio de expresión, propaganda y resistencia</b>. A través de corridos, canciones y otras formas musicales, el pueblo narró los eventos de la guerra, exaltó a los líderes revolucionarios y transmitió los ideales de la lucha social.</p>

  <p>Entre estos géneros, el <b>corrido</b> se convirtió en una herramienta fundamental para la difusión de noticias, <b>la narración de batallas</b> y la <b>exaltación de las hazañas de los revolucionarios</b>. Debido a su carácter narrativo y testimonial, los corridos representan una valiosa fuente de información histórica.</p>
  <p>Por ello, a continuación se interpretarán hechos históricos a través de los corridos de la Revolución. Para ello, sigue las indicaciones que se presentan a continuación:</p>

  <?php ob_start(); ?>
    <p>Durante la revolución, México vio un aumento de los llamados corridos. Estas historias en verso, que cuenta eventos importantes y actividades de personajes legendarios en la forma clásica, los cuales se convirtieron en un medio importante para difundir temas revolucionarios entre las masas en México de los principios del siglo XX. Para retroalimentar tu conocimiento sobre la lección te invito a realizar una interpretación histórica de algunos corridos del periodo estudiado.</p>
    <p>Para ello realiza lo siguiente:</p>
    <ol class="ol-number">
      <li>Realiza la interpretación histórica de los corridos escritos  respondiendo las preguntas integradas en la <a href="<?php echo PATH_DOCS . 'u1-a5-corridos.pdf'; ?>" target="_blank">actividad</a>.</li>
      <li>
        Para realizar la segunda parte de la actividad escucha con detenimiento los siguientes corridos.
        <div class="lg:grid grid-cols-2 gap-4 mx-auto">
          <?php
            renderVideoIframe('vk_OlalazPo', 'La cucaracha');
          ?>
          <?php
            renderVideoIframe('EoR1dyGhGt8', 'La adelita');
          ?>
          <?php
            renderVideoIframe('uvI-02F10Hw', 'El cuartelazo');
          ?>
          <?php
            renderVideoIframe('9tTg1aadZxI', 'Corrido el general Emiliano Zapata');
          ?>
        </div>      
      </li>
      <li>Al finalizar, realiza la interpretación de los corridos en la actividad solicitada contestando las preguntas.</li>
      <li>Considera para el análisis la siguiente <a href="<?php echo PATH_DOCS . 'u1-a5-corridos-rubrica.pdf'; ?>" target="_blank">rúbrica</a> para la evaluación para elaborar la actividad.</li>
      <li>
        Al finalizar la actividad envía el archivo considerando las siguientes indicaciones:
        <ol style="list-style: lower-alpha;">
          <li>Envía la tarea en un archivo PDF, en la fecha indicada.</li>
          <li>El archivo debe tener tu nombre completo empezando por el apellido y el número de tarea: ejemplo LópezAndradeSofía_Tarea1</li>
          <li>Para enviar el archivo da clic en TAREA, posteriormente en Añadir envío, sube tu tarea en el recuadro que se indica y al finalizar da clic en Guardar Cambios.</li>
        </ol>
      </li>

    </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a5', "Corridos de la Revolución Mexicana", $ActividadContent);
  ?>

  <p>El impacto de la música revolucionaria persiste hasta hoy en la cultura mexicana. Los corridos siguen siendo populares, y muchos de los temas creados en esa época han sido reinterpretados por artistas contemporáneos. Además, la música de la Revolución influyó en el desarrollo de la música ranchera y el regional mexicano.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
