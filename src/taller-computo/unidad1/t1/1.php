<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

  <h2>Bienvenida a la materia de Taller de Cómputo</h2>
  <h3>Presentación</h3>
  <p>En Taller de Cómputo desarrollarás el conocimiento y habilidades en una cultura informática básica, la cual apoya algunas de las actividades que realizamos en otras asignaturas.</p>
  <div class="lg:grid grid-cols-2 gap-5">
    <?php
    renderVideoIframe('2E8s-HtVOyg', 'Bienvenida a la asignatura.');
    renderVideoIframe('zyCM1O8OIkU', 'Presentación de Taller de Cómputo.');
    ?>
  </div>
  <ul class="ul-disc">
    <li>Esta <strong>Unidad 1 “Uso y búsqueda de información en Internet”</strong> te proporciona información como algunos de los conceptos de Red, identificando ciertos servicios de Internet que utilizas, así mismo administrarás tu navegador como el cambio de un motor de búsqueda como el de la BIDIUNAM o de tu preferencia, para realizar búsquedas de información, apoyándote de métodos y estrategias, evaluando la información y los sitios que visitas, respetando la propiedad intelectual al utilizar una herramienta de citas y referencias bibliográficas.</li>
    <li>En la <strong>Unidad 2 “Hardware y software”</strong> realizamos investigaciones que te permitirán describir la evolución del hardware y software, identificando las características de los diferentes tipos de computadoras, la representación y cuantificación de la información, así como la función de los elementos que integran el hardware, los diferentes tipos de software y los elementos del ambiente de trabajo del sistema operativo, así como la administración de carpetas y archivos, por otro lado explicaras las características de propiedad, distribución y libertad, que conlleva el uso del software, y como esto de alguna forma daña tu equipo de cómputo, así mismo identificarás el deterioro de tu salud y la del medio ambiente por el uso del hardware.</li>
    <li>La <strong>Unidad 3 “Aplicaciones matemáticas con una hoja electrónica de cálculo”</strong> identificarás los elementos básicos del ambiente de trabajo de la hoja de cálculo, así como los diferentes tipos y formatos que tienen los datos, mediante la solución de problemas matemáticos al utilizar funciones matemáticas, trigonométricas, estadísticas, lógicas y de texto, empleando referencias relativas, absolutas y series matemáticas, para el análisis de los gráficos de funciones lineales y cuadráticas.</li>
    <li>Por último, en la <strong>unidad 4 “Multimedia”</strong> conocerás las características de los diferentes formatos que tienen los archivos que sirven para reproducir algún tipo de medio; sea visual, auditivo u ambos, realizando ediciones de imagen, audio y video, utilizando un guión que te permitirá organizar las actividades al producir medios multimedia y puedas difundir, publicar y/o compartir con tus compañeros, sin contratiempos.</li>
  </ul>
  <h3>Criterios generales de evaluación y acreditación</h3>
  <p>Es importante distinguir la forma de acreditación y los diversos aspectos que hay que evaluar, además de los momentos de evaluación a lo largo de la materia, ya que, al ser una modalidad en línea, eres tú el responsable de organizar tus tiempos de aprendizaje de entrega de actividades, permitiéndote el cumplir con las actividades que se te solicitan y subirlas en tiempo y forma en la fecha que se te indica, la plataforma tiene el cierre de algunas actividades que ya no alcanzarás a realizar.</p>
  <p class="text-center text-2xl my-2 font-semibold">¡Así!, que organiza tu tiempo e iniciamos</p>

  <?php ob_start(); ?>
  <p>Realiza el siguiente ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre la asignatura en general</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a1', "Cuestionario diagnóstico autoevaluación de la unidad 1", $ActividadContent);
  ?>
</section>
<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full bg-black/63 backdrop-blur-sm">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow-sm">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
        <h3 class="text-xl font-semibold text-gray-900">
          Por favor, lee lo siguiente:
        </h3>
        <button class="close-modal-button cursor-pointer text-gray-700 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Cerrar</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-4 md:p-5 space-y-4">
        <p>
          <strong>IMPORTANTE 1:</strong> Para regresar a la plataforma MOODLE utiliza el enlace "Volver a mis cursos" en el menú principal. Si has terminado de revisar el contenido, por favor, utiliza el botón "Salir" en el mismo menú.
        </p>
        <p><strong>IMPORTANTE 2:</strong> Sólo encontrarás disponible el contenido de la Unidad 1, en breve podrás acceder a las siguientes unidades.</p>
        <p>
          Si tienes alguna pregunta <span class="text-3xl">🤔</span> estamos para ayudarte en: <span class="text-secondary">pel@cch.unam.mx</span>
        </p>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button class="close-modal-button text-white bg-orange-own hover:bg-orange-own/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">Ok</button>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('default-modal');
    modal.classList.remove('hidden');

    var closeModalButtons = document.querySelectorAll('.close-modal-button');
    closeModalButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        modal.classList.add('hidden');
      });
    });
  });
</script>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
