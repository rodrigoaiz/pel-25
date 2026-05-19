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
  <h2>Reflexión en torno a las relaciones de poder</h2>
    <div class="max-2xl mx-auto">
      <?php
      renderImage('iga3-img03.webp');
      ?>
  </div>
  <p>Mediante esta actividad comprenderás la complejidad de las relaciones de poder en distintos contextos sociales, mediante la socialización de las infografías que realizaste previamente con tu equipo. Te proponemos que la socialización de las infografías se realice mediante un compendio digital en el siguiente foro. Además, te sugerimos elaborar en una reflexión escrita, guiada a través de preguntas proporcionadas por tu profesor o profesora. Esta actividad busca desarrollar tu comprensión crítica de cómo las relaciones de poder se manifiestan y afectan la vida cotidiana, promoviendo una conciencia sobre la equidad y la transformación social, mediante el diálogo colectivo entre pares.</p>
  <h3>Instrucciones:</h3>
    <ol class="ol-number">
    <li>Ingresa al foro que encontrarás abajo y coloca la infografía que creaste en la actividad anterior. Sólo un integrante de cada equipo deberá subir la infografía. En ella se deberán incluir los nombres de todas las personas que hayan colaborado en su elaboración.</li>
    <li>Revisa las infografías de los demás equipos.</li>
    <li>A partir de lo que pudiste leer en las infografías de tus compañeros las infografías, realiza una reflexión con base en las preguntas según corresponda a tu equipo.</li>
    <ul class="ul-disc">
      <li>¿Qué son las relaciones de poder y cómo se manifiestan en nuestra vida cotidiana?</li>
      <li>¿Cómo se relacionan las diferencias sociales, culturales, económicas y políticas con el ejercicio del poder?</li>
      <li>¿Qué es la hegemonía |y cómo influye en la construcción de la cultura y los valores en una sociedad?</li>
      <li>¿Cuáles son las principales teorías que han sustentado las visiones de poder en la historia?</li>
      <li>¿Qué valores y visiones de mundo sustentan las relaciones de poder en diferentes contextos sociales?</li>
    </ul>
    <li>Comparte tus reflexiones en plenaria con el resto de tus compañeros y con tu profesor o profesora. Recuerda leer en la siguiente <a href="<?php echo PATH_DOCS . 'u1t3-Reflexion-Relaciones-Poder.pdf'; ?>" target="_blank">lista de cotejo</a> los criterios a considerar en la reflexión que realices.</li>
    </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t3a4', "Reflexión en torno a las relaciones de poder.", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>