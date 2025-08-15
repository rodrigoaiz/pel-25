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
  <h2>Actividad de cierre</h2>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('u5t3p01_convivir.webp');
    ?>
  </div>
  <p>Ahora es momento de reflexionar sobre la convivencia, es por ello que como actividad final de esta unidad realizarás en word un breve ensayo de mínimo media página en donde redactes que es para ti el <strong>"Aprender a Convivir"</strong> y en otra página coloca imágenes en forma de collage que ayuden a ilustrar tus ideas. Posteriormente deberás subirlo a la plataforma.</p>

  <p>Para realizar el ensayo revisa el siguiente paso a paso de lo que debes hacer:</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number md:ml-32">
    <li>Realiza una investigación sobre lo que es la convivencia pacífica en entornos educativos.</li>
    <li>Toma notas para que puedan ayudarte a redactar tu ensayo.</li>
    <li>Comienza a redactar tu ensayo.</li>
    <li>Selecciona las imágenes para tu collage y comienza a armarlo en el mismo documento.</li>
    <li>Una vez terminado tu ensayo y tu collage súbelo a la plataforma.</li>
  </ol>
  <?php ob_start(); ?>
  <p>Sube aquí tu ensayo y collage.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u5t3a3', "Aprender a Convivir", $ActividadContent);
  ?>
  <div class="mt-10 min-h-16 text-white text-center pl-8 pr-8 bg-linear-65 from-purple-500 to-pink-500">Una vez concluido todo tu curso de <span class="font-bold">Cultura de Paz en el Marco del Modelo Educativo del CCH</span> pasa a la siguiente página, descarga e imprime tu reconocimiento.</div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
