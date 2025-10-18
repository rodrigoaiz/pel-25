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
  <h2>La Revolución Mexicana y el arte</h2>

  <p>Entre 1910 y 1920, la sociedad y la cultura en México estuvieron profundamente marcadas por la <b>Revolución Mexicana</b>. Este conflicto no sólo transformó la estructura política del país, también tuvo un <b>gran impacto en la conciencia colectiva</b> de un pueblo y <b>proporcionó a intelectuales</b> el material de <b>reflexión, inspiración y actitud crítica</b> visualizando aspectos de una sociedad revolucionaria con sentimientos, emociones y personajes, no visibles en la historia oficial.</p>

  <?php ob_start(); ?>
  <p>Para conocer algunos elementos que el arte configuró en el periodo de lucha armada y en la etapa posrevolucionaria, revisa el siguiente vídeo interactivo:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a13', "La Revolución Mexicana y el arte", $ActividadContent);
  ?>

  <p>De acuerdo con el historiador Miguel García Audelo, la Revolución proporcionó diversos <b>elementos que el arte configuró</b> a lo largo de varias décadas. En primer lugar, sirvió para <b>transmitir las ideas fundamentales</b> que dieron forma a este gran proyecto histórico en relación con el arte. En segundo lugar, se convirtió en el <b>principal repositorio de los valores</b> enarbolados durante la lucha armada, como las aspiraciones agraristas de Zapata. Finalmente, el arte revolucionario fue clave en la <b>construcción de la identidad nacional</b>, representada en figuras como las catrinas y las adelitas, así como en elementos icónicos como los sombreros anchos, los bailables, los murales y el cine, entre otros.</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-novela.webp');
      ?>
  </div>

  <p>Como pudiste ver en el vídeo, de la <b>novela de la Revolución Mexicana</b> destacan los nombres de Mariano Azuela con “<b>Los de Abajo</b>” y Martín Luis Guzmán con “<b>El Águila y la serpiente</b>”. Otras obras poco conocidas y comentadas de este período revolucionario, son del periodista reaccionario y contrarrevolucionario Alfonso López Ituarte: El Atila del sur (1913) y Satanás (1914).</p>

  <?php ob_start(); ?>
  <p>Para conocer algunos aspectos de tan importantes representantes de la novela de la Revolución Mexicana, revisa con detenimiento la siguiente información:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a14', "Literatura de la Revolución Mexicana", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
