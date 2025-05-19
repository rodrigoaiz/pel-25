<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¿Qué función tiene el suelo?</h2>
  <h3>El suelo es más que un soporte físico</h3>
  <?php ob_start(); ?>
  <p>Antes de revisar la lección 1, participa en el foro.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a2', "¿Por qué consideras que es importante el suelo?", $ActividadContent);
  ?>
  <p>Ahora revisa la siguiente imagen:</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('u1t1_img_agricultura.webp', 'Foto de Juhele', 'https://pixabay.com/es/illustrations/agricultura-plantas-creciente-5126370/', 'Pixabay');
    ?>
  </div>
  <p>El suelo es un recurso natural que aporta diferentes funciones para el bienestar de los seres vivos, además es importante porque retiene nutrientes y agua, permitiendo la vida de plantas y animales. Desempeña una función esencial en la producción de alimentos, biomasa y materias primas; además sirve sobre él se construyen vías de comunicación y edificios. El suelo desempeña un papel central como hábitat para un amplio número de seres microscópicos (bacterias, hongos, riquetzias y otros microorganismos) además de insectos, lombrices y otros animales d emayor tamaño. Además apoya el desarrollo de actividades sociales y económicas de los seres humanos, dentro de las cuales podemos encontrar:</p>
  <ul class="ul-list">
    <li><span class="font-bold">Producción de alimentos y biomasa:</span> como observaste en la imagen, una
      de las principales funciones es el soporte y suministro de nutrientes para las plantas, lo cual
      beneficia en la producción de alimentos y biomasa. Siendo este recurso el principal productor de
      alimentos a nivel mundial.</li>
    <li><span class="font-bold">Formación de ciclos biogeoquímicos:</span> en el suelo se llevan a cabo
      estos ciclos que son responsables de que haya vida en la tierra debido a que indican la ruta que
      tienen varios elementos como el carbono, nitrógeno, fósforo, entre otros, los cuales forman
      nutrientes que son usados por diferentes organismos.</li>
    <li><span class="font-bold">Fijación del carbono:</span> el suelo actúa como un sumidero de carbono que
      impide que el dióxido de carbono (CO2) vaya a la atmósfera y contamine, ya que es un gas de efecto
      invernadero.</li>
    <li><span class="font-bold">Almacenamiento y filtración de agua:</span> el suelo permite captar,
      infiltrar y almacenar el agua mediante el ciclo hidrológico de esta.</li>
    <li><span class="font-bold">Actividades humanas (soporte y materias primas):</span> el suelo sirve como
      base para construir edificios, industrias, carreteras y todo tipo de obra, además es fuente para la
      obtención de materiales de construcción como grava, arena, arcillas, etc.</li>
    <li><span class="font-bold">Reserva de biodiversidad:</span> el suelo es una reserva de microorganismos
      que se encuentra dentro y fuera de la superficie.</li>
    <li><span class="font-bold">Patrimonio geológico y arqueológico:</span> en el suelo existen restos de la
      evidencia de la herencia humana y de la historia ambiental de la tierra.</li>
    <li><span class="font-bold">Entorno físico y cultural para la humanidad:</span> en el suelo se llevan a
      cabo diferentes actividades de las personas, que les permite tener una vivienda, alimentos y un
      espacio, también se considera como paisaje y patrimonio cultural.</li>
  </ul>
  <p>Ahora, con la finalidad de ampliar un poco el panorama, te invitamos a ver el siguiente video, al
    concluir realiza la actividad <span class="font-bold">Funciones del suelo. </span></p>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('b6xqPjOL838', 'Funciones del suelo.');
    ?>
  </div>
  <?php ob_start(); ?>
  <p>En la siguiente actividad corrobora lo aprendido ¡Adelante!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a3', "Funciones del suelo", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>