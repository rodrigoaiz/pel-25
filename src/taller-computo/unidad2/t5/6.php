<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Prevención de riesgos y eliminación de malware</h3>
  <p>En este último subtema, aprenderemos cómo prevenir los riesgos asociados con el uso de software y cómo eliminar el malware de nuestros dispositivos. La prevención y la respuesta ante las amenazas son esenciales para mantener la seguridad en línea y proteger nuestra información.</p>
  <div class="max-w-xl mx-auto">
    <?php renderImage('u2_t5_bug.webp', 'Imagen de photoroyalty.', 'https://www.freepik.es/vector-gratis/diseno-fondo-antivirus_1013991.htm#query=virus%20computadora&position=24&from_view=search&track=ais', 'Freepik.') ?>
  </div>
  <h4>Medidas de Prevención</h4>
  <ul class="ul-disc">
    <li><strong>Mantener el software actualizado:</strong> Instalar actualizaciones de software y parches de seguridad ayudará a cerrar las vulnerabilidades conocidas.</li>
    <li><strong>Utilizar software de seguridad</strong>: Instalar programas antivirus y anti-malware confiables para detectar y bloquear amenazas.</li>
    <li><strong>Descargar de fuentes confiables</strong>: Evitar descargar software y archivos de sitios web no verificados o sospechosos.</li>
    <li><strong>Evitar el phishing</strong>: No hacer clic en enlaces sospechosos en correos electrónicos o mensajes y no proporcionar información personal a sitios dudosos.</li>
  </ul>
  <?php renderImagePleca('u2_t5_screen_post.webp', 'Imagen de Pxhere.', 'https://pxhere.com/es/photo/989227', 'Pxhere.', 'justify-center') ?>
  <h4>Eliminación de Malware</h4>
  <ul class="ul-disc">
    <li><strong>Identificación:</strong> Reconocer los signos de infección, como ralentización del sistema, ventanas emergentes y archivos desconocidos.</li>
    <li><strong>Aislamiento</strong>: Desconectar el dispositivo de la red para evitar la propagación del malware.</li>
    <li><strong>Escaneo y eliminación</strong>: Utilizar software de seguridad para realizar un escaneo completo y eliminar el malware.</li>
    <li><strong>Restauración</strong>: Restaurar el sistema o archivos a un estado anterior limpio si es necesario.</li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
