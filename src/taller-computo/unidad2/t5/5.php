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
  <h3>Origen y tipos de malware</h3>
  <h4>Qué es el malware</h4>
  <p>El término "malware" proviene de la combinación de "malicioso" y "software". Se refiere a cualquier tipo de software diseñado con intenciones dañinas. Estos programas maliciosos pueden causar daño a sistemas, robar información confidencial o tomar el control de dispositivos.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t5_virus.webp', 'Imagen de geralt.', 'https://pixabay.com/es/illustrations/virus-virusalarm-alarma-3075845/', 'Pixabay.') ?>
  </div>
  <h4>Origen del malware</h4>
  <p>Te mostramos en los siguientes videos cortos cómo nacieron los primeros virus informáticos:</p>
  <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
    <?php renderVideoIframe('8RctwYBJg80', 'EL VIRUS de 1971 y su NEMESIS') ?>
    <?php renderVideoIframe('d5hSQvxcLLM', 'La historia de Creeper, el primer virus informático del mundo') ?>
  </div>
  <h4>Tipos de malware</h4>
  <p>Existen varios tipos de malware, cada uno con características y objetivos específicos. Algunos de los tipos más comunes incluyen:</p>
  <ul class="ul-disc">
    <li><strong>Virus</strong>: Se adjunta a archivos legítimos y se replica cuando se ejecuta el archivo infectado.</li>
    <li><strong>Gusano</strong>: Se propaga a través de redes y sistemas, a menudo explotando vulnerabilidades de seguridad.</li>
    <li><strong>Troyano</strong>: Se disfraza como un software legítimo, pero en realidad, realiza acciones maliciosas en segundo plano.</li>
    <li><strong>Ransomware</strong>: Bloquea el acceso a los datos del usuario hasta que se pague un rescate.</li>
    <li><strong>Spyware</strong>: Recopila información sobre la actividad del usuario sin su conocimiento.</li>
    <li><strong>Keylogger</strong>: Registra las pulsaciones de teclas para robar contraseñas y otra información sensible.</li>
    <li><strong>Rootkit</strong>: Oculta la presencia del malware en un sistema, dificultando su detección y eliminación.</li>
    <li><strong>Adware</strong>: Muestra anuncios no deseados y recopila datos de navegación del usuario.</li>
  </ul>
  <p>Puedes investigar algunos otros por tu cuenta ya que estos son solo algunos.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t5_binary.webp', 'Imagen de geralt.', 'https://pixabay.com/es/illustrations/binario-c%C3%B3digo-binario-823336/', 'Pixabay.') ?>
  </div>
  <h4>Casos de estudio</h4>
  <p>Te presentamos ejemplos de casos de malware famosos, como el virus "ILOVEYOU" que se propagó a través de correos electrónicos en 2000, o el ransomware "WannaCry" que afectó a sistemas en todo el mundo en 2017. Estos casos resaltan la importancia de la seguridad informática y cómo el malware puede causar daños significativos.</p>
  <p>Consulta la siguiente <a href="https://support.microsoft.com/es-es/topic/c%C3%B3mo-impedir-y-eliminar-virus-y-otro-malware-53dc9904-0baf-5150-6e9a-e6a8d6fa0cb5" target="_blank">página de Microsoft</a>.</p>
  <?php ob_start(); ?>
    <p>Realiza la actividad que se muestra a continuación.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a22', "Virus y malware", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
