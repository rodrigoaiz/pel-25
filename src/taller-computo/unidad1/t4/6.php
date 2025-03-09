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
  <h3>La importancia de las citas y referencias bibliográficas</h3>
  <p>El respeto y la honestidad son valores que se ponen en práctica en casi todos los aspectos de nuestras vidas y ello nos permite una interacción adecuada con los demás, esto también sucede en la escuela, es muy importante llevarlos a cabo porque no practicarlos, nos hace cometer plagio (es decir, el robo de información o ideas) con los documentos (obras como textos, imágenes, audios, videos o animaciones) que utilizamos para nuestros trabajos y que son elaborados por otras personas (autores).</p>
  <p>Mercedes Fernández (2015) nos explica la necesidad de las citas y referencias señalando que:</p>
  <div class="pl-5">
    <p>Es común encontrarse trabajos de investigación, tareas etc., sin ninguna cita o referencia bibliográfica que nos indique de dónde ha extraído la información el autor. Muchas personas consideran que el citar autores demostraría que su texto no es totalmente original, restando, (según su punto de vista), mérito a su trabajo. Nada más lejos de la realidad. Un buen trabajo científico es aquel que se encuentra bien documentado.</p>
    <p>Un correcto uso de las citas, y la inclusión de las referencias bibliográficas, (más conocidas como bibliografía al final del trabajo), demuestran no sólo la honradez de la persona en reconocer que el trabajo no ha salido en su totalidad de su mente, si no también que esa persona se ha documentado, ha leído las principales aportaciones anteriores de personas más conocedores del tema, y que por tanto el documento ha sido sometido a un estudio cuidadoso.</p>
    <p>Además, hay otros motivos que hacen de la referencia bibliográfica un elemento imprescindible son:</p>
    <ul class="ul-disc">
      <li>Dar a conocer trabajos previamente publicados que sirven de apoyatura a las informaciones, tesis, teorías etc. que mantenemos.</li>
      <li>Dar fiabilidad a nuestro trabajo documentado el origen de las afirmaciones y contenidos y permitiendo su verificación.</li>
      <li>Reconocer los méritos ajenos impidiendo el plagio.</li>
      <li>Permitir al lector ampliar determinados apartados del trabajo. (p.1).</li>
    </ul>
  </div>
  <?php ob_start(); ?>
  <p>Para terminar esta unidad, realiza el siguiente cuestionario de autoevaluación para que para que identifiques cuánto aprendiste en esta unidad. ¡Éxito!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a20', "Cuestionario final de la unidad 1", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
