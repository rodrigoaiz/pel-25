<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Lectura “Hardware”</h3>
  <p>Realiza la lectura “Hardware” a partir del apartado de Clasificación, así como cada componente que en el siguiente <a href="<?php echo PATH_DOCS . 'u2_t2_hardware.pdf' ?>" target="_blank">documento</a>.</p>
  <p>¿Qué te pareció la lectura? ¿Aprendiste algo nuevo? Espero que sí. Ahora vamos a la siguiente actividad.</p>
  <h3>¿Qué es una Wiki?</h3>
  <p>Seguro te vino a la mente Wikipedia, en Definicion.com (2023), el término ‘wiki’ indica que procede del hawaiano ‘wiki wiki’, que significa ‘rápido’. ¡Interesante! Ahora bien, recordemos que el conocimiento se debe compartir. Por ello, una Wiki es una forma rápida de crear y compartir conocimiento. Al respecto, Wikipedia (2023) nos dice que ‘wiki’ alude al nombre que recibe una comunidad virtual, cuyas páginas son editadas directamente desde el navegador, donde los mismos usuarios crean, modifican, corrigen o eliminan contenidos que son compartidos por cualquier otro usuario. Por otro lado, estos sitios wiki incluyen un historial de cambios. Por ello, es importante no infringir los derechos que tiene un autor y realizar la cita que corresponda.</p>
  <div class="max-w-lg mx-auto">
    <?php echo renderImage('u2_t2_wikimedia_mexico_logo.webp', 'Imagen de Luisalvaz.', 'https://commons.wikimedia.org/wiki/File:Wikimedia_Mexico_logo.png', 'Wikimedia Commons.'); ?>
  </div>
  <p>Ahora que ya sabemos que es una wiki, la actividad que desarrollarás será una wiki colaborativa en moodle respecto a las características del hardware de acuerdo con su función.</p>
  <?php ob_start(); ?>
  <p>Te invito a que revises la siguiente presentación para que tengas una idea de cómo se trabaja la wiki en Moodle.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a8', "Wiki en Moodle", $ActividadContent);
  ?>
  <p>Ahora que ya sabemos que es una wiki y como editarla, te invito a s en su elaboración.</p>
  <div class="max-w-4xl mx-auto">
    <?php renderImage('u2_t2_3_wiki.webp', 'Nota: Imagen principal que muestra instrucciones y palabras a editar. ') ?>
  </div>
  <?php ob_start(); ?>
  <p>Realiza la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a9', "Hardware de microcomputadoras", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
