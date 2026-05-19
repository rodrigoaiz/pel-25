<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenidas y bienvenidos a la asignatura de Igualdad de Género</h2>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('iga1-img01.webp');
    ?>
  </div>
  <p>Te damos la bienvenida al curso en línea PAL de <strong>Igualdad de género</strong>, un espacio formativo diseñado para que puedas acreditar la asignatura y, al mismo tiempo, reflexionar sobre temas fundamentales para tu vida personal y social. En este momento de tu educación media superior, comprender la igualdad de género te permitirá identificar situaciones de tu entorno, reconocer tus derechos y responsabilidades, y participar de manera más consciente y respetuosa en la comunidad en la que te desarrollas.</p>
  <p>A lo largo de <strong>cinco semanas</strong>, revisarás diversos temas mediante actividades autocalificables que te ayudarán a reforzar tus conocimientos, así como otras actividades que serán evaluadas por un profesor o profesora asesora, quien te acompañará durante el curso. Te invitamos a organizar tu tiempo, participar de forma activa y aprovechar este espacio como una oportunidad para aprender, mejorar y avanzar en tu trayectoria académica.</p>
  <p class="text-center font-bold text-fuchsia-900">¡Éxito en este proceso!</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>