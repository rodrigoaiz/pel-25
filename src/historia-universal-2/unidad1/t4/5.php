<?php
include '../../config.php'; // Ajusta esta ruta según tu estructura
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h2>Los medios de comunicación y cierre de la unidad</h2>
  
  <p>En la Belle Époque podemos ver un gran aumento de la prensa. En París había 35 periódicos en 1890, algunos de los cuales tenían hasta dos ediciones por día. El auge de los periódicos vino con el invento de las rotativas en 1900, pero sobre todo fue apoyado por la creciente libertad de prensa y, por supuesto, la llegada de la publicidad. En general hay también un aumento en la demanda de estos medios informativos, demanda de una sociedad letrada e interesada por la vida pública. Por cierto, algunos diarios publicaron novelas por entregas. La prensa se volvió popular como influencia para la opinión de las masas, la opinión pública podría influir en la política. Ejemplo de ello es el caso del periodista británico William Thomas Stead quien destapó el caso de prostitución infantil en 1885 o el caso Dreyfus en Francia, el cual provocó acalorados debates entre la sociedad francesa de la época.</p>
  
  <p>La revolución en los transportes facilitó no sólo el comercio, también la educación. Podemos decir que, en general, la revolución en los transportes modificó la relación de las personas con el tiempo y el espacio. Además, fue más o menos democrática pues, si bien al principio los coches eran artículos de lujo, cada vez fueron apareciendo más. La comunicación también se vio revolucionada por el telégrafo. En 1866 Europa y América quedaron unidas por un cable submarino, cuatro años más tarde ocurriría lo mismo con Australia. Una década más tarde apareció el teléfono y, para 1914 había en Europa 3.5 millones de líneas telefónicas. La primera transmisión telegráfica sin cable en 1894 es el antecedente de la radio. Gracias a estos avances, las noticias llegaban prácticamente en vivo a una sociedad cada vez más y mejor informada, además con imágenes pues la cámara Kodak era más barata y más fácil de transportar.</p>
  
  <p>Los medios de comunicación contribuyeron a la globalización del mundo, ejemplo de esto es la adaptación de los usos meridianos y la línea del cambio de horario.</p>
  
  <h3>El ocio</h3>
  <p>Antes de continuar superemos el siguiente ejercicio.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que mejor responda: ¿Qué medio revolucionó la comunicación en la Belle Époque?</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a5a', "Ir a la actividad", $ActividadContent);
  ?>
  
  <?php
  renderImage('Tex23-1.jpg', 'Diseño del telégrafo. Imagen de Tex23~commonswiki', 'https://commons.wikimedia.org/wiki/File:Morse_telegraph.jpg', 'Wikimedia Commons');
  ?>

  <p>La revolución industrial llevó a las mujeres a las fábricas, el trabajo apoyó la independencia económica de éstas. Además, tuvieron un mayor acceso a la educación, lo que aumentó la toma de conciencia de su situación. Por ejemplo, en esta época se extendió el uso de los anticonceptivos. En 1906, Finlandia otorgó plenos derechos políticos a las mujeres. El movimiento sufragista impactó en Inglaterra, aunque en ese país el sufragio femenino se logró hasta después de la 1ª guerra mundial. Para los hombres la situación laboral se mantuvo, pero aparecieron afectaciones a la salud relacionadas con el trabajo como el estrés y la impotencia sexual. Por otro lado, los niños fueron reconocidos como tales, en la Belle Époque se extendió la educación primaria obligatoria.</p>
  
  <p>En el ámbito cultural tenemos manifestaciones artísticas como la pintura vanguardista; Kandinski, Picasso, Matisse y Munch se preocuparon por capturar el movimiento, ya que la fotografía capturaba momentos estáticos. La religión perdió seguidores gracias a la nueva fe en la ciencia, pero también surgieron las fes espiritistas y místicas. Las clases bajas continuaron siendo religiosas y la iglesia se volcó hacia ellos.</p>
  
  <p>La criminología, empapada de ideas darwinianas, buscaba explicar la violencia en esta sociedad. En 1890 se introdujeron las fichas con huella digital y en 1899 se inventó la silla eléctrica. El poeta Filippo Tommaso Marinetti fundó en 1909 el movimiento futurista que glorificaba la guerra. El servicio militar se volvió obligatorio casi en toda Europa y los militares gozaban de un gran prestigio.</p>
  
  <p>Hay al mismo tiempo una sensibilización social hacia la violencia y el surgimiento de movimientos por la paz como el de Bertha von Suttner.</p>
  
  <p>La Belle Époque es una época de grandes avances y en la cual ya vemos una sociedad más igualitaria, pero al mismo tiempo es una época que mantiene los grandes contrastes entre las clases altas y las clases bajas, así como entre la vida en el campo y la vida en la ciudad. Una época muy parecida en muchos aspectos a la nuestra, si pudiéramos viajar en el tiempo, encontraríamos muchas diferencias pero la mayoría de las cosas se nos harían familiares.</p>
  
  <p>Revisa el siguiente recurso para afianzar algunas ideas importantes acerca de esta época.</p>


  <?php
   // video no disponible
  renderVideoIframe('video no disponible', 'Recurso sobre la Belle Époque');
  ?>
  
  <p>Ahora resolvamos el examen final de esta unidad.</p>
  <?php ob_start(); ?>
  <p>Completa el cuestionario para finalizar la Unidad 1.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a5b', "Ir a la actividad", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>