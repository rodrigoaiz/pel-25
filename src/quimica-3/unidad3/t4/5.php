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
  <h3>Factores que lo modifican</h3>
  <h4>Principio de Le Chatelier</h4>

  <p>Recientemente en el laboratorio virtual, realizaste experimentos para determinar el grado de ionización de diferentes ácidos, observando que algunos se ionizan completamente mientras que otros no. Ahora, te preguntas qué determina este comportamiento y cómo se puede cuantificar la fuerza de un ácido más allá de la simple observación.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-hamburguesa.webp','¿Alguna vez te ha dado el famoso “mal del puerco” ?','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2JtiNxzs-b4OL1RHKMJ1n-A57VzxpPrPSMg&s','PxHere')
    ?>
  </div>

  <p>¿Alguna vez te ha dado el famoso “mal del puerco” ?, el nombre correcto es marea alcalina y ocurre después de comer. Se debe a la producción de ácido clorhídrico y bicarbonato en el estómago cuando ingerimos una gran cantidad de alimentos, especialmente ricos en grasas, proteínas y carbohidratos. </p>

  <p>Cuando comemos un buen taco, el estómago produce más HCl para facilitar la digestión.  Para compensar este aumento de acidez, el cuerpo secreta más bicarbonato, lo que lleva a un exceso de este en la sangre. Este desequilibrio ácido-base provoca la marea alcalina, que se manifiesta como una sensación de fatiga y baja energía que dura entre 5 minutos y 2 horas.  El sistema gastrointestinal trabaja rápidamente para neutralizar este efecto, bombeando iones de hidrógeno de vuelta a la sangre y depositando más bicarbonato, lo que restablece el equilibrio.</p>

  <p>Entonces, vemos que el equilibrio se puede modificar, Le Chatelier establece su teoría considerando que cuando un sistema químico en equilibrio es sometido a un cambio en una de las condiciones que definen ese equilibrio (concentración de reactivos o productos, presión o temperatura), el sistema reacciona de forma que se opone parcialmente a ese cambio, con el fin de establecer un nuevo equilibrio. Específicamente, establece que:</p>

  <ul class="ul-disc">
    <li>Si se aumenta la concentración de alguno de los reactivos, el equilibrio se desplazará hacia la formación de más productos para compensar ese aumento. </li>
    <li>Si se aumenta la presión, el equilibrio se desplazará hacia la formación de menos moles de gas para compensar el aumento de presión.</li>
    <li>Si se aumenta la temperatura en una reacción endotérmica, el equilibrio se desplazará hacia la formación de más productos para compensar el aumento de temperatura. En una reacción exotérmica, el equilibrio se desplazará hacia la formación de más reactivos.</li>
    <li>Mientras que, si se agrega un catalizador, no influirá en el equilibrio químico.</li>
  </ul>

  <?php ob_start(); ?>
  <p>Este principio permite predecir cómo se desplazará un equilibrio químico ante cambios en las condiciones del sistema. Te invitamos a realizar la actividad Predicción del equilibrio químico para comprender aún más los conceptos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a4', " Predicción del equilibrio químico", $ActividadContent);
  ?>

  <h4>¡Es hora de experimentar!</h4>

  <?php ob_start(); ?>
  <p>A continuación, se presenta un material audiovisual interactivo que puede apoyar el proceso experimental. Observa el video Reversibilidad reacciones químicas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a5', "Reversibilidad reacciones químicas.", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Luego, con base en el video, realiza la actividad  Reversibilidad reacciones químicas que permitirá corroborar lo aprendido.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a6', "Reversibilidad reacciones químicas.", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
