<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Los movimientos estudiantiles</h2>

  <p>En el contexto de malestar social, cambios de pensamiento, e influencia de la contracultura en México, surge un conflicto que haría sacudir al régimen político en turno y que marcaría un hito en la historia de México. Ocurrió en el Distrito Federal en 1968, entre los meses de julio y octubre.</p>

  <p>De acuerdo con Gloria Ma. Delgado de Cantú, en el movimiento estudiantil de 1968 pueden identificarse causas de fondo:</p>

    <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-causas68.webp', 'Causas del movimiento estudiantil de 1968');
    ?>
  </div>
  
  <p>A estas causas se debe agregar la represión policiaca de que fueron objeto el día 22 de julio, los alumnos de las escuelas Vocacionales 2 y 5 del Instituto Politécnico Nacional, seguida por la protesta estudiantil contra la represión y contra la ocupación de esas escuelas por los granaderos. Días después se declararon en huelga las escuelas del IPN, UNAM, Chapingo y algunas universidades en diferentes estados de la República.</p>

      <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u3-movimiento.webp', 'Movimiento estudiantil 68, de Héctor Gallardo','https://upload.wikimedia.org/wikipedia/commons/e/ec/Movimiento_estudiantil_68_61.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original','wikimedia commons');
        ?>
      </div>

     <p>En los primeros días de agosto se formó un Consejo Nacional de Huelga (CNH), que obtuvo el respaldo de universidades privadas como la Iberoamericana, la del Valle de México y el Colegio de México.  El 4 de agosto fue publicado un pliego petitorio, solicitando:</p>

     <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u3-pliego.webp', 'Pliego petitorio del movimiento estudiantil 68');
        ?>
      </div>

    <p>Para conocer más sobre el conflicto, revisa con detenimiento el siguiente vídeo y contesta las preguntas integradas sobre este movimiento:</p>

    <?php
      renderVideoIframe('WMhj3_vT9zA', 'El movimiento estudiantil de 1968.');
    ?>


  <p>Como pudiste ver en el vídeo, el movimiento estudiantil de 1968 fue una lucha por la democratización del país, entendiéndolo como un movimiento de renovación nacional a través de la búsqueda de mejores condiciones de vida, justicia e igualdad para todos, así como la libertad de expresión frente a un gobierno autoritario.</p>

  <p>Después de los hechos violentos de 1968, asumió la presidencia  Luis Echeverría Álvarez (1970-1976) quien promovió una política de apertura democrática, alentando la formación de partidos de izquierda; favoreció el diálogo, así como la aparente integración de jóvenes en el gobierno. Sin embargo, la acción y actitud represora no cesó, por ejemplo, en la Universidad Autónoma de Nuevo León, se demandaban mejoras salariales a los maestros, quienes manifestaron su inconformidad por el Plan de Estudios y demandaban recursos financieros.  En este contexto el gobierno local y después el gobierno federal decidieron reemplazar autoridades universitarias a su gusto, lo cual provocó mayor disgusto en las filas estudiantiles, desplegándose así un movimiento y protesta que llegó a impactar en el centro del país con un movimiento estudiantil en la ciudad de México principalmente de la UNAM, con protestas contra el gobierno y en apoyo a la autonomía de la Universidad de Nuevo León. Nuevamente terminó con una represión el 10 de junio de 1971, que pasaría a la historia como la represión del jueves de Corpus.</p>

  <p>Para conocer los acontecimientos del movimiento estudiantil de 1971, revisa el siguiente vídeo:</p>

  <?php
      renderVideoIframe('Uyp9OvxUT6s', 'El Halconazo: medio siglo de impunidad');
    ?>

    <p>Para conocer más, te invito a revisar el siguiente material:</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-halconazo.webp', 'El halconazo: medio siglo de impunidad','https://sitiosdememoria.segob.gob.mx/work/models/SitiosDeMemoria/Documentos/PDF/Catalogo_Memorias-insurrectas.pdf','Sitios de memoria');
    ?>
  </div>

  <?php ob_start(); ?>
    <p>Una vez que revisaste la presentación en Prezi y los vídeos sobre los movimientos estudiantiles, participa en el foro de discusión:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3a11', "Foro: movimientos sociales 1950-1970", $ActividadContent);
    ?>

  
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
