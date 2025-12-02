<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Energía y enlace químico</h2>
  <h3>Energías de formación y ruptura de enlaces químicos.</h3>
  <h3>Relación entre la energía de reacción y la ruptura o formación de enlaces en una reacción.</h3>

  <h2 class="text-center">Energía relacionada con la ruptura y formación de enlaces químicos</h2>
  
  <p>Cuantificar la energía que representan los enlaces de diferentes moléculas es una parte importante de la comprensión de la energía total implicada en una reacción. En la lectura  se presentan dos conceptos diferentes que ayudan a describir esa energía: la entalpía de reacción y la entalpía de enlace.</p>

  <h4>Entalpía de reacción</h4>

  <p>En las reacciones químicas, los enlaces entre átomos pueden romperse, reconstituirse o experimentar ambos procesos, ya sea para absorber o liberar energía. El resultado es un cambio de la energía potencial del sistema. El calor que absorbe o libera un sistema sometido a presión constante se conoce como <b><i>entalpía</i></b>, y el cambio de entalpía que se produce en una reacción química es la entalpía de reacción. La entalpía de reacción se escribe a menudo como <b>ΔH</b></p>

  <p>Para entender mejor la entalpía de reacción, veamos el siguiente ejemplo</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-entalpia.webp','La reacción representa la ruptura y formación de nuevos enlaces químicos.')
  ?>
  </div>

  <h4>¿Qué está sucediendo en esta reacción?</h4>

  <p>Primero tenemos que romper el enlace  de los reactivos. Como regla general, <b>romper enlaces entre átomos requiere agregar energía</b>. Cuanto más fuerte sea el enlace, más energía se necesita para romperlo. Ya que romper enlaces requiere agregar energía, el proceso opuesto de <b>formar nuevos enlaces siempre libera energía</b>. Cuanto más fuerte es el enlace formado, se libera más energía durante el proceso de su formación. En esta reacción particular, a causa de que los enlaces recientemente formados liberan más energía de la que se necesita para romper los enlaces originales, el sistema resultante tiene una energía potencial menor que la de los reactivos· Esto significa que la entalpía de reacción  <b>ΔH</b> es negativa.</p>

  <p>Matemáticamente, podemos pensar en la entalpía de reacción como la diferencia entre la energía potencial de los enlaces del producto y la energía potencial de los enlaces de los reactivos: <b> ΔH= Energía de los productos - Energía de los reactivos</b></p>

  <p>A continuación, se muestra un diagrama esquemático del curso de una reacción, en la figura A, durante el curso de la reacción se libera energía, los productos poseen al final una entalpía menor a la entalpía de los reactantes y esto provoca que el ∆H sea negativo. En la figura B, los reactivos absorben calor para formar productos, Eproductos > Ereactivos, por tanto, ∆H tiene un signo positivo.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-exo.webp','Gráficas de energía vs avance de la reacción.')
  ?>
  </div>

  <p>Ahora revisa el siguiente video donde encontrarás información de la relación de la energía de la formación y ruptura de enlaces en una reacción</p>

  <?php
  renderVideoIframe('Lgb5pdp9LIk', 'Energía en la formación y ruptura de enlaces químicos');
  ?>


  <?php ob_start(); ?>
  <p>En la actividad “Energía en la formación y ruptura de enlaces químicos” relaciona la estructura atómica de cada átomo. correspondiente.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t3a3', "Energía en la formación y ruptura de enlaces químicos", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
