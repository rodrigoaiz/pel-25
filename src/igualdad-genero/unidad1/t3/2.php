<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Diagnóstico: Relaciones de poder en la vida cotidiana</h2>
  <p>Las relaciones de poder son dinámicas sociales complejas que se manifiestan en todas las interacciones humanas. No se trata simplemente de quién tiene la autoridad sino de cómo se ejerce esta autoridad y cómo influye en las personas involucradas. Son un aspecto fundamental de la vida social que moldea nuestras interacciones y determina la distribución de recursos y oportunidades.</p>
  <p>En este apartado, conocerás el vínculo que existe entre las relaciones de poder y la igualdad de género, para ello explorarás tus conocimientos previos acerca de este tema respondiendo un breve cuestionario. Posteriormente, observarás los videos <strong>"Michel Foucault para principiantes: ¿Qué es el poder y quiénes te vigilan?"</strong> y <strong>"Los tipos de capital según Pierre Bourdieu".</strong> Además, revisarás el documento adjunto a esta actividad titulado <strong>"El poder y las relaciones de poder"</strong>.</p>
  <p>La información de los videos y del documento te permitirá reflexionar en torno al ejercicio del poder en sus diversos ámbitos con el fin de que puedas iniciar una reflexión crítica y consciente sobre la equidad de género y su importancia en las interacciones sociales.</p>
  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li>Contesta el cuestionario que tiene la finalidad de explorar tus conocimientos previos sobre el tema y detonar la reflexión crítica en torno a las relaciones de poder y su relación con la desigualdad de género. Contesta según tu criterio.</li>
    <li>Observa los siguientes videos que hablan acerca del poder y sobre cómo se construyen las relaciones donde éste se ejerce.</li>
    <div class="md:grid grid-cols-2 gap-3">
      <div>
        <?php
        renderVideoIframe('TchqFCgm42U', 'Michel Foucault para principiantes: ¿Qué es el poder y quiénes te vigilan?');
        ?>
      </div>
            <div>
        <?php
        renderVideoIframe('h40a7r9vCWs', 'Los tipos de capital según Pierre Bourdieu');
        ?>
      </div>
    </div>
    <li>Lee cuidadosamente el documento titulado <a href="<?php echo PATH_DOCS . 'u1t3-Lectura_ ElPoderYLasRelacionesDePoder_Act.3.1.pdf'; ?>" target="_blank">"El poder y las relaciones de poder"</a>.</li>
    <li>Con ayuda de tu profesor o profesora dialoga en plenaria sobre el contenido de los videos y del documento. Te sugerimos que, después de revisar los materiales, vuelvas a las preguntas del cuestionario y contrastes tus respuestas en plenaria.</li>
  </ol>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>