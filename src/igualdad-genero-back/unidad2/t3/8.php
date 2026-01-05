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
  <h2>¿A qué llamamos feminicidio?</h2>

    <div class="md:grid grid-cols-2 gap-3 items-center">
      <p>El feminicidio, la pérdida irreparable de una vida por el simple hecho de ser mujer, es un concepto que nos confronta con la forma más extrema de violencia de género. Pero, ¿a qué nos referimos exactamente cuando hablamos de feminicidio? Va más allá de un homicidio; implica un espiral de violencia y discriminación arraigada en estructuras sociales patriarcales que perpetúan la desigualdad y el control sobre los cuerpos y las vidas de las mujeres. Te invitamos a realizar la siguiente actividad para reflexionar más sobre este tema.</p>
      <div class="max-2xl mx-auto">
      <?php
      renderImage('u2t3-iga9-img07.webp');
      ?>
      </div>
    </div>

  <h3>Propósito</h3>

  <p>Definir el concepto de feminicidio mediante un texto especializado para relacionarlo con la violencia estructural que produce este fenómeno.</p>

  <h3>Instrucciones:</h3>

  <ol class="ol-number">
    <li>Lean con atención el texto <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_AQueLlamamosFeminicidio_Act.9.8.pdf'; ?>" target="_blank">“¿A qué llamamos feminicidio?”</a> de Marcela Lagarde.</li>
    <li>Deben retomar la lectura inicial, <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_NarrarElCuerpoDeLasVictimasDeFeminicidio_Act.98.pdf'; ?>" target="_blank">“Los aliados de la violencia feminicida: funcionarios públicos incompetentes y prensa amarillista”</a>;</li>
    <li>Recuperen conceptos vistos en sesiones previas (sexo, género, orientación sexo-afectiva, roles y estereotipos de género, equidad e igualdad de género, tipos y manifestaciones de la violencia de género, patriarcado, micromachismos o machismo cotidiano, etc...) que permitan identificar la violencia estructural.</li>
    <li>Con ayuda de su docente reflexionen en torno a la siguiente pregunta: <strong>¿Cuáles elementos de violencia estructural identificaron en el feminicidio de Ingrid?</strong></li>
    <li>En equipos redacten la respuesta a la pregunta en un mínimo de 5 y máximo 10 renglones.</li>
    <li>Elijan a un(a) integrante de su equipo para que suba el archivo con la reflexión con el nombre de quienes lo elaboraron.</li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u2t9-Rubrica_AQueLlamamosFeminicidio_Act.9.8.pdf'; ?>" target="_blank">rúbrica</a> para que tengas claridad en lo que se va a evaluar.</li>
   </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u2t9a6', "¿A qué llamamos feminicidio?", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
