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
  <h2>Cartografía en clave de Derechos Humanos</h2>

  <div class="md:grid grid-cols-3 gap-3 items-center">
    <div class="col-span-2">
      <p>Los mapas son representaciones gráficas de un territorio y nos permiten destacar elementos en formal visual y simbólica. Para esta actividad <strong>consideramos a la persona un territorio</strong>, cuya descripción, además de física, puede ser en el ámbito sensible y emocional. Y por supuesto, ampliaremos el horizonte de reflexión <strong>para ubicar el territorio escolar</strong>, en este caso, el <strong>CCH.</strong></p>
      <p>A continuación, te invitamos a realizar la siguiente actividad, pues te permitirá retomar los conceptos, reflexiones, valores y actitudes revisados en este aprendizaje.</p>
    </div>
    <div class="col-span-1">
      <?php
      renderImage('u1t6-iga6-img4.webp');
      ?>
    </div>
  </div>

  <p><strong>Propósitos</strong></p>
  <p>Reconocer tu ser en el mundo y cómo te estás desarrollando, esto en el marco de los Derechos Humanos. Reflexionar si hay o no obstáculos que te impidan el desarrollo de tu personalidad.</p>
  <p>Identificar, en tu plantel, los espacios de riesgo en los cuales se vulneran los derechos humanos y se obstaculiza el pleno desarrollo de tu persona y el resto de la comunidad cecehachera.</p>
  <p><strong>Instrucciones:</strong></p>

  <ol class="ol-number">
    <li>Realiza una cartografía, la debes dividir en dos partes: la primera para abordar tu persona y reconocer tu ser en el mundo y cómo te estás desarrollando. En clave de Derechos Humanos, reflexiona si hay o no obstáculos que te impidan el desarrollo de tu libertad, autonomía y dignidad como persona. La segunda parte de la cartografía corresponde al territorio de tu plantel y está destinada a la identificación de lugares en donde se vulneran los derechos humanos.</li>
    <li>La cartografía individual la puedes realizar a mano, te sugerimos emplear toda tu creatividad y agregar símbolos que te permitan representar tu libertad, autonomía, dignidad y personalidad. Puedes agregar algunas palabras que le otorguen fuerza y significado a la cartografía.</li>
    <li>En cuanto a la cartografía del plantel, puedes dibujarla a mano o editar una imagen en la cual se aprecie con claridad el espacio geográfico de éste. Identifica y señala en la imagen los espacios que consideras son de riesgo porque en ellos se vulneran los derechos humanos y se obstaculiza el pleno desarrollo de tu persona y el resto de la comunidad cecehachera. En cada espacio deberás especificar qué derecho se ve vulnerado y mencionar qué acciones se pueden emprender para erradicar esa problemática o situación.</li>
    <li>Revisa los ejemplos de cartografías, para que tengas mayor claridad del trabajo que se te solicita.</li>
    <li>Redacta una cuartilla, en tu cuaderno, en la que expongas tu reflexión acerca del cumplimiento o ausencia de garantías respecto a los derechos humanos, recupera situaciones que has vivido u observado en tu entorno personal y en el CCH.</li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-lista-de-cotejo-cartografia-y-reflexion.pdf'; ?>" target="_blank">lista de cotejo</a> que se te proporciona para verificar que tu trabajo cumple satisfactoriamente con lo solicitado.</li>
    <li>Al finalizar, <strong>toma una fotografía de tu cartografía y de tu reflexión</strong>.</li>
    <li>Sube el archivo en esta tarea. El archivo (en formato JPG, PNG o PDF) debe ser nombrado de la siguiente forma: Nombre_Apellido_Cartografía_reflexión</li>
    <p><strong>Nota:</strong> Te compartimos <a href="<?php echo PATH_DOCS . 'u1t6-EjemplosDeCartografias_Act.6.6.pdf'; ?>" target="_blank">ejemplos</a> de cartografías para que te inspires a realizar la tuya. </p>
  </ol>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t6a4', "Cartografía individual y de plantel", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>