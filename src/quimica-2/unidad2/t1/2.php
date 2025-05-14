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
  <h3>¿Qué son los alimentos?</h3>
  <p>Estudios realizados muestran que la alimentación de la población universitaria ha variado desde los años 90
    hasta la actualidad y se ha puesto en evidencia la existencia de hábitos alimentarios incorrectos, que se
    caracterizan por omitir comidas, comer entre horas, abusar de la comida rápida, comer fuera del hogar alimentos
    muy procesados con alto contenido de grasa saturadas, azúcares y/o sodio y seguir una alimentación poco
    diversificada. Por lo que es imprescindible que los universitarios consoliden buenos hábitos alimentarios. Para
    lograrlo, es importante realizar una adecuada selección de alimentos, pero para ello es muy importante conocer
    qué son los alimentos de qué están constituidos y cómo los nutrimentos que contienen contribuyen a mantener una
    buena salud.</p>
  <p>Los alimentos son almacenes de nutrientes de origen animal o vegetal, sólidos o líquidos, los podemos encontrar
    naturales o transformados; una vez que los ingerimos, aportan sustancias necesarias para la regulación de los
    procesos de producción de energía, crecimiento y reparación de tejidos, por su contenido los alimentos son
    mezclas de diferentes compuestos conocidos como nutrimentos, ¿sabías que los alimentos que se consumen en la
    dieta diaria contienen un poco más de 100 000 sustancias? ¡Momento! No todas son consideradas como nutrimentos,
    tan solo entran en este rango unas 300 y como nutrientes esenciales solo 45. </p>
  <div class="grid grid-cols-2 gap-4">
    <div><?php
          renderImage('u2t1_img_carne.webp', 'Carne, Imagen de Shutterbug75,', 'https://pixabay.com/es/images/search/parilla+parrilla/', 'Pixabay.');
          ?></div>
    <div><?php
          renderImage('u2t1_img_fruta.webp', 'Fruta, Imagen de silviarita,', 'https://pixabay.com/es/photos/frutas-frescas-bochas-2305192/', 'Pixabay.');
          ?></div>
  </div>
  <p>Desde el punto de vista de la química, un alimento es un sistema muy complejo, constituido por diferentes
    componentes. Para acercarnos un poco al tema, es importante que realices la siguiente actividad. </p>
  <?php ob_start(); ?>
  <p>Ahora te invitamos a realizar la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a2', "Composición de los alimentos", $ActividadContent);
  ?>
  <p>Analiza el siguiente video con información sobre macro y micronutrimentos:</p>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('iGunvJS20vM', 'Macro y micronutrimentos');
    ?>
  </div>
  <?php ob_start(); ?>
  <p>Después de observar el video, realizar la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a3', "Conceptos de alimento, macronutrimento y micronutrimento", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>