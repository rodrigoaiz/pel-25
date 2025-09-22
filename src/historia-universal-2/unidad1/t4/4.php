<?php
include '../../../config.php'; // Ajusta esta ruta según tu estructura
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h2>El ocio y la tecnología en la Belle Époque</h2>
  
  <p>Una forma de ocio fue el cine. En Londres en 1911 había 500 salas de cine ya que poco a poco fue de acceso a las masas debido a la reducción del costo de los boletos. La presencia del cine abrió un debate, hubo quienes vieron posibilidades pedagógicas, otros expresaron temores de que la gente dejara de leer, y algunos más lo vieron como una nueva forma de “pan y circo” para embrutecer a la población.</p>
  
  <p>Revisa esta bella película de 1902 llamada “El viaje a la luna”, te sorprenderá ver cómo era el cine en sus inicios.</p>

  <?php
  // El viaje a la luna
  renderVideoIframe('ZNAHcMMOHE8', 'El viaje a la luna');
?>

  <p>Las nuevas formas de ocio desataron debates morales, el hecho de que las personas contaran con más dinero y más tiempo libre fue visto como un peligro por algunos sectores sociales. Los espectáculos en los teatros, los bailes, las reuniones en bares y tabernas y el cancán fueron considerados ataques a la moral. La música ragtime fue la banda sonora de estas formas nuevas de entretenimiento y se podía escuchar tanto en vivo como en el nuevo gramófono. De estos espectáculos surgieron estrellas, ídolos de las masas cuyas vidas eran reportadas en la prensa.</p>
  
  <div class="mx-auto max-w-md">
  <?php renderImage('fonatico.webp', 'Gramófono para escuchar música. Imagen de Fonático', 'https://es.wikipedia.org/wiki/Gram%C3%B3fono#/media/Archivo:VictorVPhonograph.jpg', 'Wikimedia Commons'); ?>
</div>

  <p>Con el entretenimiento llegaron otras costumbres como el aumento del consumo del alcohol, y se comenzó a beber en público. Había también fumaderos de opio y el cannabis era de fácil acceso para las clases altas.</p>
  
  <p>El mundo moderno y sus inventos se convirtieron en espectáculo. En 1898 se presentó en París el salón del automóvil. La primera carrera de autos ocurrió en 1894, en esa ocasión se recorrieron 126 kilómetros en 6 horas.</p>
  
  <p>Pero el tiempo libre se enfocó a otras formas de entretenimiento, en la Belle Époque aumentó el número de museos, bibliotecas públicas y los parques urbanos. También es la época del desarrollo del turismo, veranear en los balnearios fue una actividad común de las clases altas.</p>
  
  <p>Otras formas de entretenimiento se mantuvieron en el ámbito de lo privado, socialmente el sexo seguía siendo tabú, en general se prohibía el disfrute, además del aborto, la anticoncepción y la homosexualidad y el lesbianismo. Había, sin embargo, mucha prostitución y mucha pornografía.</p>
  
  <?php
  renderImage('juegos-olimpicos-atenas.webp', 'Juegos Olímpicos de Atenas 1896. Imagen de Skblzz1 ', 'https://es.wikipedia.org/wiki/Juegos_Ol%C3%ADmpicos_de_Atenas_1896#/media/Archivo:Athens_1896_report_cover.jpg', 'Wikimedia Commons');
  ?>

  <h3>La tecnología en la Belle Époque</h3>
  <p>Otra diversión asociada a los nuevos inventos fue el deporte. En 1903 ocurrió en Francia el primer Tour de France. En 1896 se celebraron los primeros juegos olímpicos del mundo moderno y en 1904 se creó la FIFA. También fue extendido, los ricos se permitían comprar balones de fútbol, mientras que los pobres jugaban con balones de papel. Las escuelas introdujeron programas deportivos para mujeres, el deporte no sólo fomentó la competencia, sino que fue apoyo de la posterior militarización.</p>
  <p>Reforcemos algunos puntos importantes mencionados al momento con el siguiente reto.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que mejor responda: ¿Qué innovación marcó el ocio en la Belle Époque?</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a4', "Ir a la actividad", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>