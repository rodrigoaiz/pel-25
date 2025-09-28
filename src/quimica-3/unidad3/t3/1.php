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
  <h2>Energía y reacción química </h2>
  <h3>Energía de activación</h3>
  
  <p>Para comprender la formación de enlaces en los compuestos, necesitas conocer cómo interviene la energía  en una reacción química, por lo que es necesario que conozcas el concepto de “energía de activación".</p>

  <h4>ENERGÍA DE ACTIVACIÓN</h4>

  <p>Hemos visto que para que una reacción ocurra, las moléculas de los reactivos deben chocar entre sí. Esto requiere una energía mínima imprescindible, la cual es necesaria para que se inicie la reacción. Esta mínima energía que se necesita se denomina <b>energía de activación (Ea)</b>.</p>

  <p>La siguiente gráfica de energía vs avance de la reacción muestra a la energía de activación:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-grafico.webp','Gráfica de energía vs avance de la reacción.')
  ?>
  </div>

 <p>Para comprender la formación de enlaces en los compuestos, necesitas conocer cómo interviene la energía  en una reacción química, por lo que es necesario que conozcas el concepto de “energía de activación".</p>

 <h4>ENERGÍA DE ACTIVACIÓN</h4>

  <p>Hemos visto que para que una reacción ocurra, las moléculas de los reactivos deben chocar entre sí. Esto requiere una energía mínima imprescindible, la cual es necesaria para que se inicie la reacción. Esta mínima energía que se necesita se denomina <b>energía de activación (Ea).</b></p>

  <p>La energía de activación suele representarse en un <b>perfil de energía</b>, es decir, un diagrama de energía vs el avance de la reacción. Consideremos la siguiente reacción:</p>

  <p class="text-center"><b>DE  +  F  →   D  +  EF </b></p>

  <p>Este perfil muestra, cualitativamente, los cambios de energía a medida que los reactivos se transforman en producto. </p>

  <p>En la gráfica de energía vs avance de la reacción observa que al  inicio de la reacción tenemos las sustancias DE y F (en verde), las cuales tienen, al inicio, una determinada energía. Para que estas sustancias reaccionen, deben chocar y formar un <b>complejo activado (llamado también estado de transición)</b>, representado en morado: en él se aprecia que el enlace entre D  y E  se ha debilitado, mientras el enlace E-F empieza a formarse. La energía necesaria para alcanzar este complejo activado es la energía de activación (Ea). Una vez alcanzado este punto, se forman los productos (denotados en rojo).</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-grafico.webp','Gráfica de energía vs avance de la reacción.')
  ?>
  </div>

  <h4>Catalizadores</h4>

  <p>Los catalizadores son sustancias que, actuando en pequeñas proporciones, disminuyen la energía de activación de la reacción y/o provocan una correcta orientación al choque de las especies reactantes, de forma que este sea eficaz. Así pues, su efecto es aumentar la velocidad de reacción.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-grafico2.webp','Gráfica de energía vs avance de la reacción.')
  ?>
  </div>

  <p>Ahora que ya revisaste la lectura anterior de cómo interviene la energía de activación en una reacción química te invitamos a que realices la actividad “Energía de activación en la reacción química.” </p>

  <?php ob_start(); ?>
  <p>A continuación, realiza la actividad</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t3a1', "Energía de activación en la reacción química", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
