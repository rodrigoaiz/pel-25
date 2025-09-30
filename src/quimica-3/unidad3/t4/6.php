<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Equilibrio químico</h2>
  <h3>Producción amoniaco</h3>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-haber.webp','Amoniaco.')
    ?>
  </div>

  <p>Para comprender mejor este concepto, veamos un ejemplo cotidiano que involucra el proceso Haber-Bosch. Este proceso se utiliza para producir amoníaco, un componente clave de los fertilizantes. En este proceso, el gas nitrógeno (N2) y el gas hidrógeno (H2) se combinan, pero ¿por qué si están presentes estos gases en el aire no reaccionan?, pues esto lo explica el equilibrio químico</p>

  <p>Se requiere de altas presiones y temperatura en presencia de un catalizador de hierro para producir amoníaco (NH3). Inicialmente, la reacción avanza rápidamente hacia adelante, formando amoníaco. Conforme se produce más amoníaco, aumenta la rapidez de la reacción inversa, en la que el amoníaco se descompone nuevamente en nitrógeno e hidrógeno.</p>

  <p>Tres factores clave influyen en el equilibrio químico: concentración, temperatura y presión.</p>

  <p>La concentración de reactivos y productos afecta la posición de equilibrio. Cuando aumenta la concentración de reactivos, el equilibrio se desplaza hacia los productos para contrarrestar el cambio, y viceversa. En el caso del proceso Haber-Bosch, aumentar la concentración de los gases nitrógeno e hidrógeno favorece inicialmente la formación de más amoníaco hasta alcanzar el equilibrio.</p>

  <p>La temperatura juega un papel importante en la determinación de la dirección en la que se desplazará una reacción de equilibrio. En una reacción endotérmica, donde se absorbe calor, el aumento de la temperatura favorece la reacción directa. Por el contrario, en una reacción exotérmica, donde se libera calor, bajar la temperatura favorece la reacción directa. Para el proceso Haber-Bosch, aumentar la temperatura favorece la producción de más amoníaco.</p>

  <p>En reacciones que involucran gases, los cambios de presión también pueden afectar el equilibrio químico. Según el principio de Le Chatelier, si se aumenta la presión, el equilibrio se desplazará hacia el lado con menos moles de gas para reducir la presión. Por el contrario, disminuir la presión hará que el equilibrio se desplace hacia el lado con más moles de gas. En el caso del proceso Haber-Bosch, aumentar la presión favorece la producción de más amoniaco ya que hay menos moles de gas en el lado del producto.</p>

  <?php ob_start(); ?>
  <p>Para profundizar al respecto, te invitamos a revisar el video Proceso Haber Bosh.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a7', "Proceso Haber Bosh", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
