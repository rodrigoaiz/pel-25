<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'EducaplayIframe.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Conceptos básicos de igualdad género</h2>
  <p>Para profundizar en el entendimiento de la igualdad de género, es fundamental familiarizarse con ciertos conceptos clave. Algunos te resultarán conocidos, mientras que otros podrían ser nuevos. Te proponemos ver la serie <strong>"Dibujando el género"</strong>. A medida que la veas, toma nota de los términos que te llamen la atención o que desconozcas. Puedes revisar la serie cuantas veces necesites para asegurar una comprensión completa.</p>
  <div class="xl:grid grid-cols-2 gap-5">
    <?php
    renderVideoIframe('nWKkJ8bjTW4', 'Capítulo 1. Sexo y género');
    renderVideoIframe('3M0NwHvpO8Q', 'Capítulo 2. ¿Biología o cultura? (Identidad, prejuicios de género, sexismo, transversalidad)');
    ?>
  </div>
  <div class="xl:grid grid-cols-2 gap-5">
    <?php
    renderVideoIframe('q6NCWaFVj7s', 'Capítulo 3. Diferencias y desigualdades entre mujeres y hombres (roles y estereotipos de género)');
    renderVideoIframe('cWjQjvXQwpA', 'Capítulo 4. Género y exclusión (sistema sexo-género, expresión e identidad de género, orientación sexual, heteronorma, intersexualidad, diversidades sexo-genéricas, homofobia)');
    ?>
  </div>
  <p>Ahora que terminaste de ver la serie, consulta los siguientes documentos para aclarar dudas y conocer los "Conceptos básicos". Si consideras necesario, toma nota en tu cuaderno de las definiciones que te ayudarán a resolver la <em>Ruleta de palabras</em> que se presenta más adelante.</p>
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
  <p>Para finalizar te invitamos a reafirmar tus conocimientos con la <strong>"Ruleta de palabras de la Igualdad de Género".</strong></p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number md:ml-32">
    <li>Tienes 5 minutos por intento para resolverlo.</li>
    <li>Tienes hasta 3 intentos para lograrlCada intento tiene 5 vidas.</li>
    <li>Escribe tu nombre completo en "Pulsa aquí para identificarte"</li>
    <li>En cada intento toma una captura de pantalla del resultado.</li>
    <li>Envía como evidencia tu mejor jugada.</li>
    <li>Para jugar la Ruleta de palabras haz clic en "Comenzar"</li>
  </ol>
  <?php renderEducaplay('18733303-igualdad_de_genero_a_z.html'); ?>
  <?php ob_start(); ?>
  <p>Sube tus evidencias aquí:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a3', "Ruleta de palabras de la Igualdad de Género - Sube tu puntaje", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
