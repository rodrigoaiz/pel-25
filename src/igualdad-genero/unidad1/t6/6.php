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
  <h2>Cartografía individual</h2>

  <div class="md:grid grid-cols-2 gap-3 items-center">
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u1t6-iga6-img4.webp');
      ?>
    </div>
      <p>Los mapas son representaciones gráficas de un territorio. En este caso, consideramos a la persona un territorio, cuya descripción, además de física, puede ser en el ámbito sensible y emocional. A continuación, te invitamos a realizar la siguiente actividad relacionada con tu cartografía.</p>
  </div>

  <h3>Propósitos</h3>
  <p>Reconocer tu ser en el mundo y cómo te estás desarrollando, esto en el marco de los Derechos Humanos. Reflexionar si hay o no obstáculos que te impidan el desarrollo de tu personalidad.</p>
  <h3>Instrucciones:</h3>

  <ol class="ol-number">
    <li>Realiza <strong>una cartografía sobre tu personalidad para reconocer tu ser en el mundo y cómo te estás desarrollando</strong>. En clave de <strong>Derechos Humanos, reflexiona si hay o no obstáculos que te impidan el desarrollo de tu personalidad</strong>. La sugerencia es que, al hacer esta representación, te ubiques existencialmente en tu condición de <strong>estudiante del CCH</strong> e identifiques aspectos que vulneren tus derechos humanos.
      <br><br>
    Para hacer esta cartografía, te pedimos que dibujes, usa colores de madera o plumones, pero trata de construir tus propios símbolos que estarán albergados en esta representación. La representación gráfica debe ir acompañada de uno o dos párrafos que la expliquen.  
    </li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t6-ListaDeCotejo_CartografíaIndividual_Act.6.6.pdf'; ?>" target="_blank">lista de cotejo</a> que se te proporciona para verificar que tu trabajo cumple satisfactoriamente con lo solicitado.</li>
    <li>Al finalizar, <strong>toma una fotografía de tu cartografía</strong>.</li>
    <li>Sube el archivo en esta tarea. El archivo (en formato JPG, PNG o PDF) debe ser nombrado de la siguiente forma: Nombre_Apellido_Cartografía_individual.</li>
    <p>Nota: Te compartimos <a href="<?php echo PATH_DOCS . 'u1t6-EjemplosDeCartografías_Act.6.6.pdf'; ?>" target="_blank">dos ejemplos</a> de cartografías para que te inspires a realizar la tuya. Resultará muy valioso compartir en clase tu cartografía, así como observar el trabajo de tus compañeras, compañeros y compañeres. Recuerda que la actividad debe desarrollarse en un ambiente de respeto y tolerancia. </p>
  </ol>

  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a6', "Cartografía individual", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>