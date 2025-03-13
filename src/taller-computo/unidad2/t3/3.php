<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>El código ASCII</h3>
  <p>Código Standard Norteamericano para Intercambio de Información (American Standard Code for Information Interchange).</p>
  <p>Es el sistema de codificación de caracteres alfanuméricos que asigna un número decimal del 0 al 127 a cada letra, número o carácter especial. El ASCII extendido permite hasta 256 caracteres distintos.</p>
  <p>Es código es el estándar para la representación de caracteres en cualquier dispositivo electrónico, que hace posible que intercambien información entre ellos, antes de 1981 esto no era posible.</p>
  <div class="max-w-3xl mx-auto">
    <?php renderImage('u2_t3_figura_3.webp'); ?>
  </div>
  <p>Un carácter aparecerá después de presionar la tecla seguida de los números del código ASCII.</p>
  <ul class="ul-disc">
    <li>La combinación Alt – 160, muestra la á</li>
    <li>La combinación Alt – 130, muestra la é</li>
    <li>La combinación Alt – 161, muestra la í</li>
    <li>La combinación Alt - 162 , muestra la ó</li>
    <li>La combinación Alt – 163, muestra la ú.</li>
    <li>La combinación Alt – 164, muestra la ñ</li>
    <li>La combinación Alt – 165, muestra la Ñ</li>
  </ul>
  <p>El carácter @ lo obtenemos además de presionar Alt Gr – Q o mediante la combinación Alt - 64</p>
  <p>Mira el siguiente video.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe('oTuYAqeZaBw', '¿Cómo funciona el código binario? - LA GRAN HISTORIA'); ?>
  </div>
  <?php ob_start(); ?>
  <p>Descarga este <a href="<?php echo PATH_DOCS . 'u2_t3_practica_representacion_informacion.docx' ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de la <strong>actividad 2</strong>.</p>
  <p>Mantén abierta la práctica para realizar el resto de los ejercicios, conforme se te vaya solicitando.</p>
  <p class="font-bold">Una vez que hayas concluido todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U2Ap4. Ejemplo: SanchezLopez_JoseLuis_U2Ap4.</p>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u2_t3_rubrica_practica_representacion_informacion.pdf' ?> target=" _blank">Criterios de evaluación</a> de la actividad. Más adelante te diremos dónde enviar tu trabajo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a11', "Práctica: La representación de la información", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
