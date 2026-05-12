<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Creación de un partido oficial.</h2>

  <p>En este contexto de creación de instituciones, existía la necesidad de  la organización de un partido oficial. Así se crea el <b>Partido Nacional Revolucionario (PNR)</b>  el 4 de marzo de 1929, organismo político capaz de integrar a las fuerzas revolucionarias con intereses y ambiciones en una alianza que evitará el desgaste político, producto de enfrentamientos entre facciones para evitar con ello los desastres de las revueltas armadas que en su momento había ocasionado la rebelión Obregonista, que a través del Plan de Agua Prieta desconocía la presidencia de Carranza – y aún más cercana a la fecha de creación del PNR. El 3 de marzo surgió una nueva rebelión con la publicación del Plan de Hermosillo, donde se desconocía a Emilio Portes Gil como presidente y se nombraba a José Gonzalo Escobar.</p>

  <?php ob_start(); ?>
  <p>A continuación, revisa el siguiente esquema para conocer más sobre el proceso de institucionalización.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u2a3', "Partido Nacional Revolucionario", $ActividadContent);
  ?>

  <p>Asimismo, con la idea de control de las fuerzas militares y para evitar levantamientos armados, los gobiernos sonorenses emprendieron medidas de <b>reorganización del ejército</b>, entre ellas la disminución de las fuerzas militares y posteriormente la profesionalización de esta con la reinauguración del Colegio Militar. De esta manera los gobiernos posrevolucionarios protagonizaron un periodo cuyo objetivo fue construir un nuevo Estado apoyándose en los principios nacionalistas sentados en la Constitución de 1917. A partir de los cambios se pretendía promover la reconstrucción económica y el desarrollo del capitalismo en México y a la par la defensa de la soberanía nacional.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-reorganizacion.webp', 'reorganización del ejército', 'https://commons.wikimedia.org/wiki/File:Mexican_Army_In_Trenches_Siege_of_Naco_Sonora_1929.JPG', 'wikimedia commons');
    ?>
  </div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
