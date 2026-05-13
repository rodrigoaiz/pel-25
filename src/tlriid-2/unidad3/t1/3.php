<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Planificación de textos</h2>

  <p>En la producción de textos se debe tener en cuenta la <strong>paráfrasis</strong>, el <strong>resumen</strong> y las <strong>citas textuales</strong>, como ya se estudiaron en la segunda unidad. También la elaboración de un borrador de trabajo que permita hacer las correcciones adecuadas antes de entregarlo. Pero antes de esto, es necesario tener en claro cuál será el producto que elaboraremos en esta unidad.</p>
  <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Ingresa al foro: <strong>Planificación del texto</strong> y responde a las siguientes preguntas.
      <ol class="list-decimal list-inside space-y-2 pl-4 mb-6 text-gray-800">
        <li>¿Qué entiendes por <em>trabajo escolar</em>?</li>
        <li>¿Cuáles consideras que deban ser las características de un <em>trabajo escolar</em>?</li>
        <li>¿Qué temas se deben abordar en un <em>trabajo escolar</em>?</li>
        <li>¿Cómo acostumbras hacer tus <em>trabajos escolares</em>? </li>
        <li>¿Dónde buscas la información?</li>
        <li>¿Cómo la organizas?</li>
        <li>¿Cuánto tiempo inviertes en su elaboración?</li>
      </ol></li>
        <li>Consulta la <a href="<?php echo PATH_DOCS . 'u3t1a5-rubrica-foro.pdf'; ?>" target="_blank">rúbrica</a> con el que se evaluará tu participación en el foro. </li>
    </ol>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t1a2', "Foro: Planificación de textos", $ActividadContent);
    ?>
  <p>Después de haber contestado las preguntas anteriores, lee el siguiente texto y reflexiona sobre tus respuestas.</p>

  <h3>Elaboración de un trabajo escolar</h3>

  <p>Todo estudiante se enfrenta alguna vez a la realización de algún trabajo escolar, monografía o investigación. Muchos profesores prefieren evaluar a sus alumnos a través de un trabajo, y una buena parte de los planes de estudio prevén la realización de un trabajo final donde el estudiante aplique el conjunto de los conocimientos adquiridos a través de su periodo de formación ya sea en unidades o semestres. Se trata, pues, de una práctica fundamental en la vida académica. Este tipo de escrito presenta características particulares:</p>

  <div class="my-6 space-y-4">

    <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-sm overflow-hidden">
      <div class="bg-sky-500 px-5 py-3">
        <p class="font-bold text-white tracking-wide">Extensión</p>
      </div>
      <div class="px-6 py-4 text-gray-700">
        <p>Los trabajos parciales solían tener una extensión de entre 10 y 40 páginas; en otros niveles educativos tienen una relación entre la extensión y la investigación; así, por ejemplo, una tesis universitaria presenta un total de 100 o más páginas.</p>
      </div>
    </div>

    <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-sm overflow-hidden">
      <div class="bg-violet-500 px-5 py-3">
        <p class="font-bold text-white tracking-wide">Originalidad</p>
      </div>
      <div class="px-6 py-4 text-gray-700">
        <p>Un trabajo escolar debe ser el resultado de una investigación personal sobre un tema determinado; por consiguiente:</p>
        <ul class="list-disc list-inside mt-3 space-y-2 pl-2">
          <li>No puedes basarte sólo en tus conocimientos previos; también debes documentarte consultando diversas fuentes: libros, periódicos, revistas especializadas, etcétera.</li>
          <li>No puedes limitarte a copiar otros libros o trabajos; las fuentes son sólo la base necesaria para construir una reflexión o llegar a una conclusión personal. Debes citar las fuentes que has utilizado en tu investigación, y no presentar como propias las ideas ajenas.</li>
        </ul>
      </div>
    </div>

    <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-sm overflow-hidden">
      <div class="bg-amber-500 px-5 py-3">
        <p class="font-bold text-white tracking-wide">Claridad y léxico especializado</p>
      </div>
      <div class="px-6 py-4 text-gray-700">
        <p>Claridad en la expresión y utilización del léxico propio de la especialidad.</p>
      </div>
    </div>

    <div class="border-l-4 border-emerald-500 bg-emerald-500/10 rounded-r-lg shadow-sm overflow-hidden">
      <div class="bg-emerald-500 px-5 py-3">
        <p class="font-bold text-white tracking-wide">Enfoque temático</p>
      </div>
      <div class="px-6 py-4 text-gray-700">
        <p>El trabajo debe estar centrado en el tema propuesto y abordar sus aspectos más importantes o, al menos, justificar de forma satisfactoria por qué algunos de estos aspectos se dejan de lado.</p>
      </div>
    </div>

    <div class="border-l-4 border-rose-500 bg-rose-500/10 rounded-r-lg shadow-sm overflow-hidden">
      <div class="bg-rose-500 px-5 py-3">
        <p class="font-bold text-white tracking-wide">Argumentación razonada</p>
      </div>
      <div class="px-6 py-4 text-gray-700">
        <p>El trabajo debe contener una argumentación razonada. Las diferentes fuentes primarias y secundarias que se utilizan para elaborar un trabajo no tienen demasiado valor por sí solas. Lo adquieren al ser utilizadas para desarrollar un argumento, un punto de vista, o para describir un tema a partir de una estructura sistemática. No se trata de asumir posiciones o defender una opinión personal, sino de analizar de forma rigurosa los diferentes aspectos de una cuestión. Los conceptos utilizados deben estar definidos y las afirmaciones que se realicen deben estar apoyadas en datos relevantes.</p>
      </div>
    </div>

  </div>

  <h3>Ejercicio mental</h3>

  <p>En esta unidad se propone revisar el tema del <strong>&ldquo;Calentamiento global&rdquo;</strong> como guía para distintas actividades, por lo que te pedimos leas con cuidado las siguientes preguntas y respondas lo más claro posible sin investigar nada; solamente trata de averiguar si tienes alguna idea del tema con base en las preguntas.</p>

  <ol class="list-decimal list-inside space-y-2 pl-4 mb-4 text-gray-800">
    <li>¿Qué entiendes por Calentamiento global?</li>
    <li>¿Cómo contribuye la especie humana al Calentamiento global?</li>
    <li>¿Sabes quién es Al Gore?</li>
    <li>¿Qué están haciendo los gobiernos mundiales para combatir este fenómeno?</li>
  </ol>

  <p>Si no lograste responder las preguntas anteriores, busca información sobre el tema y respóndelas. Después compara tus respuestas con las de tus compañeros.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
