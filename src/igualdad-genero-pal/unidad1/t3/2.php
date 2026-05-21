<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Diagnóstico: ¿Qué sabes sobre las relaciones de poder y la masculinidad? </h2>
  <p>Las relaciones de poder son dinámicas sociales complejas que se manifiestan en todas las interacciones humanas. No se trata simplemente de quién tiene la autoridad sino de cómo se ejerce esta autoridad y cómo influye en las personas involucradas. Son un aspecto fundamental de la vida social que moldea nuestras interacciones y determina la distribución de recursos y oportunidades.</p>
  <p>Un sistema social y cultural en el que se ejerce un poder dominante de los hombres sobre las mujeres es el patriarcado. Para entender cómo se establece una jerarquía que subordina a las mujeres y asigna roles desiguales de género, es necesario identificar cómo se construye la masculinidad.</p>
  <p>La primera actividad con la que iniciarás los aprendizajes 3 y 4 tiene la finalidad de explorar tus conocimientos previos sobre las relaciones de poder y las masculinidades.</p>
  <p><strong>Propósito</strong></p>
  <p>Identificar tus conocimientos e ideas previas sobre las relaciones de poder, la forma en que se ejerce y, asimismo, sobre la masculinidad tradicional y su relación con la violencia y la discriminación.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Lee cuidadosamente las preguntas.</li>
    <li>Responde honestamente, eligiendo la opción más adecuada según tu criterio.</li>
    <li>Después de enviar tus respuestas, lee atentamente la retroalimentación a tus respuestas, y toma nota en tu cuaderno de trabajo de la asignatura.</li>
    <li>Tienes un intento para resolver este diagnóstico.</li>
  </ol>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a1', "Evaluación diagnóstica", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>