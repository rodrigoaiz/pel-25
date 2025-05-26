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
  <h2>¡Te damos la bienvenida al aprendizaje 6!</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('u1t6-iga6-img1.webp');
    ?>
  </div>
  <h3>Propósito</h3>
  <p>En este aprendizaje obtendrás una base teórica sobre los derechos humanos y la implicación que tiene ser persona en relación con la igualdad de género.</p>
  <h3>Contenidos</h3>
  <ul class="ul-disc">
    <li><strong>Declarativos</strong><br>
    Identifica la noción de persona y derechos humanos. Comprende la noción de persona en relación con los derechos humanos.
    </li>
    <li><strong>Procedimentales</strong><br>
    Autoidentificación como persona en el marco de sus Derechos Humanos.
    </li>
    <li><strong>Actitudinales</strong><br>
    Interioriza la importancia del concepto persona y lo usa conscientemente sin caer en la esfera del género. Práctica la tolerancia y el respeto por las diferencias individuales. 
    </li>
  </ul>
  <p><strong>Tiempo:</strong> 6 horas divididas en 3 sesiones</p>

  <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a1', "Cuestionario diagnóstico", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>