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
    <?php renderImage("u1_t4_concepto_red.webp", "Texto original"); ?>
    <p class="text-sm"><strong>Nota</strong>: Describe la definición de red de computadoras, tomada de Benchimol, D. (coord.). (2010). Redes CISCO. Buenos Aires, Argentina: Gradi.</p>
  </div>
  <ul class="ul-disc">
    <li>
      <strong>Cita parafraseada con énfasis en el autor</strong>
      <p>Formato: Autor (Año), Paráfrasis, (p. Número de página).</p>
      <div class="m-2 p-2 border border-red-500">Benchimol (2010), conceptualizó a una red de cómputo como un conjunto de dos o más dispositivos interconectados para compartir información y recursos (p.15).</div>
    </li>
    <li>
      <strong>Cita parafraseada con énfasis en el año</strong>
      <p>Formato: Año, Autor, Paráfrasis, (p. Número de página).</p>
      <div class="m-5 p-5 border border-red-500">En 2010 Benchimol definió a una red de cómputo como un conjunto de dos o más dispositivos interconectados para compartir información y recursos (p.15).</div>
    </li>
    <li>
      <strong>Cita parafraseada con énfasis en el contenido</strong>
      <p>Formato: Paráfrasis, (Autor, Año, p. Número de página).</p>
      <div class="m-5 p-5 border border-red-500">Una red de cómputo es un conjunto de dos o más dispositivos interconectados para compartir información y recursos (Benchimol, 2010, p.15).</div>
    </li>
  </ul>
  <?php ob_start(); ?>
  <p class="font-black">Continúa con la práctica de citas y referencias bibliográficas. Elabora el Ejercicio 3. Cita no textual, indirecta o parafraseada y redactando la cita correspondiente a cada énfasis a partir de la referencia bibliográfica.</p>
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
