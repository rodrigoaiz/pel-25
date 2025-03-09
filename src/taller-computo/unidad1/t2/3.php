<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Historial de exploración de un navegador</h3>
  <p>El historial de exploración o navegación de un navegador web Google Chrome es una lista de los sitios web que un usuario ha visitado. Esta lista se almacena en el disco duro del dispositivo del usuario y permite al usuario ver los sitios web que ha visitado anteriormente.</p>
  <p>El historial de navegación se utiliza con frecuencia para revisar los sitios web que un usuario ha visitado anteriormente o para recordar información sobre una visita anterior. El historial de navegación también puede ser útil para los investigadores, los profesionales de marketing y los administradores de sitios web, ya que proporciona información sobre el comportamiento del usuario en línea.</p>
  <p>Es importante tener en cuenta que, como el historial de navegación contiene información detallada sobre la actividad en línea de un usuario, puede ser considerado como una vulneración de la privacidad de un usuario si es visto por alguien que no sea el propio usuario del dispositivo. Por lo tanto, es importante que los usuarios protejan su historial de navegación y eviten compartir sus dispositivos con personas no confiables.</p>
  <h3>¿Cómo consultar el historial de navegación?</h3>
  <p>Para consultar el historial de navegación en Google Chrome, se sigue los siguientes pasos:</p>
  <ol class="ol-number">
    <li>Abre Google Chrome en tu computadora.</li>
    <li>Haz clic en el icono de tres puntos verticales en la esquina superior derecha de la pantalla.</li>
    <li>Selecciona "Historial" en el menú desplegable.</li>
    <li>Verás una lista de los sitios web visitados recientemente.</li>
    <li>Si deseas ver más opciones, haz clic en "Historial completo" en la parte inferior de la lista.</li>
    <li>Puedes buscar un sitio web específico utilizando la barra de búsqueda en la parte superior de la pantalla.</li>
    <li>Para eliminar una entrada del historial, haz clic en el botón "Eliminar" junto a la entrada.</li>
  </ol>
  <p>Ten en cuenta que el historial de navegación se guarda en tu cuenta de Google si has iniciado sesión en Chrome con una cuenta de Google. También puedes acceder al historial de navegación desde otros dispositivos si tienes la sincronización de Chrome activada.</p>
  <?php
  renderVideoIframe('m2hv4nS-_04', 'Historial de navegación en Google Chrome.', 'lg:max-w-3xl mx-auto');
  ?>
  <h3>Marcadores o favoritos de un navegador</h3>
  <p>Los marcadores o favoritos de un navegador web son una función que permite a los usuarios guardar y acceder fácilmente a las páginas web que visitan con frecuencia o que resultan importantes. Los marcadores funcionan como una lista de enlaces que se guardan en el navegador y se pueden acceder con un solo clic.</p>
  <p>Cuando un usuario guarda un marcador, el navegador guarda la dirección web de la página y un nombre descriptivo que el usuario elige. Luego, el usuario puede acceder a la página web haciendo clic en el marcador en cualquier momento, en lugar de tener que buscar la página nuevamente mediante una búsqueda en el motor de búsqueda o escribir la dirección web completa.</p>
  <p>Además de guardar enlaces a páginas web, los marcadores también pueden organizarse en carpetas para facilitar la búsqueda y la navegación. La mayoría de los navegadores también permiten sincronizar los marcadores entre dispositivos, lo que significa que un usuario puede acceder a sus marcadores desde cualquier dispositivo en el que haya iniciado sesión en su cuenta de navegador.</p>
  <?php
  renderVideoIframe('VF2b4uuPkJ4', 'Historial de navegación en Google Chrome.', 'lg:max-w-3xl mx-auto');
  ?>
  <?php ob_start(); ?>
  <p>Para concluir el tema de Navegador Web: Historial, Marcadores o Favoritos, es necesario desarrollar un cuestionario para asegurar lo aprendido del tema, por lo tanto, te invitamos a responderlo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a8', "Historial, marcadores o favoritos", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
