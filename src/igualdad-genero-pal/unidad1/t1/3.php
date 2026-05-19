<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Conceptos básicos de igualdad género</h2>
  <p>Para profundizar en el entendimiento de la igualdad de género, es fundamental familiarizarse con ciertos conceptos clave. Algunos te resultarán conocidos, mientras que otros podrían ser nuevos.</p>

  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number mb-8">
    <li>Te proponemos ver los siguientes videos.</li>
    <li>A medida que los veas, contesta cada una de las preguntas que te proponen, toma nota de los términos que te llamen la atención o que desconozcas.</li>
  </ol>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u1-act1', "Dibujando el género", $ActividadContent);
  ?>

  <p>Ahora que terminaste de ver los videos y responder las preguntas, consulta los siguientes documentos para aclarar dudas y conocer los "Conceptos básicos". Si consideras necesario, toma nota en tu cuaderno de las definiciones que te ayudarán a resolver tu evaluación final.</p>
  <div class="md:grid grid-cols-3 gap-4">
    <div class="bg-purple-300 text-center text-lg leading-6 p-2 rounded-lg">
      <a class=" text-purple-950" href="<?php echo PATH_DOCS . 'u1t1-abc-perspectiva-genero-cndh.pdf'; ?>" target="_blank">
        <img class="size-24 mx-auto" src="<?php echo PATH_ICONS . 'filetype-pdf.svg'; ?>" />
        ABC de la perspectiva de género.
      </a>
    </div>
    <div class="bg-purple-300 text-center text-lg leading-6 p-2 rounded-lg">
      <a class=" text-purple-950" href="<?php echo PATH_DOCS . 'u1t1-cigu-glosario-politicas-universitarias.pdf'; ?>" target="_blank">
        <img class="size-24 mx-auto" src="<?php echo PATH_ICONS . 'filetype-pdf.svg'; ?>" />Glosario. Políticas Universitarias para la Igualdad de Género
      </a>
    </div>
    <div class="bg-purple-300 text-center text-lg leading-6 p-2 rounded-lg">
      <a class=" text-purple-950" href="<?php echo PATH_DOCS . 'u1t1-glosario-diversidad-sexual-conapred-b.pdf'; ?>" target="_blank">
        <img class="size-24 mx-auto" src="<?php echo PATH_ICONS . 'filetype-pdf.svg'; ?>" />
        Glosario de la diversidad sexual, de género y características sexuales
      </a>
    </div>
  </div>
  <p class="mt-8">También te compartimos el documento <a href="<?php echo PATH_DOCS . 'u1t1-aprendizaje-1-conceptos-basicos.pdf'; ?>" target="_blank">Aprendizaje 1. Conceptos básicos</a> donde encontrarás el glosario completo con las definiciones enriquecidas, enlaces a videos interesantes y otras fuentes de consulta que te ayudarán a comprender mejor los conceptos revisados. Te sugerimos tener a la mano estos documentos ya que te podrán ser de utilidad a lo largo de la asignatura.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>