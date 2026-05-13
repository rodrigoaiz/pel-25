<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Resumen y paráfrasis</h2>

  <h3>El resumen</h3>

  <p>A continuación trataremos los aspectos correspondientes a otra operación textual: el <strong>resumen</strong>, es una técnica de estudio muy utilizada para la lectura analítica de un texto. Es la redacción de un texto nuevo a partir de otro. Dicho texto intenta adaptarse a las características de un nuevo contexto comunicativo, es decir, siempre es necesario saber, al momento de hacer un resumen, cuál es la finalidad de proceder a su elaboración, preguntarse quién será el destinatario, o qué espera éste del resumen, o, en su caso, para qué medio se desarrollará: para un ámbito laboral o académico.</p>

  <p>El resumen es comúnmente usado como una estrategia de aprendizaje que requiere de los procesos de <strong>atención</strong>, <strong>memoria</strong> y <strong>comprensión</strong>. Consiste en reducir la información al asunto principal o general y a un número limitado de ideas principales subordinadas a la general. El producto resultante son los puntos sobresalientes de la información del texto base.</p>

  <h3>Paráfrasis</h3>

  <p>La paráfrasis es una <strong>interpretación personal del texto</strong>; es un acercamiento a la comprensión o entendimiento del mismo. Puede decirse que es la traducción del texto con nuestras propias palabras, pero sin cambiar su sentido. Usamos la paráfrasis cuando contamos una película, pues no solo hacemos un resumen de ella, sino que también mencionamos qué nos gustó o cómo la entendimos.</p>

  <p>Parafrasear es una habilidad que exige una gran capacidad de comprensión por parte del lector, quien al identificar el mensaje de un texto habrá cumplido con la mitad del proceso comunicativo, pues la intención de quien escribe es provocar una reacción de quien recibe el mensaje.</p>

  <p>Para realizar una paráfrasis es conveniente seguir cierto orden al momento de nuestra lectura analítica:</p>

  <ol class="list-decimal list-inside space-y-2 pl-4 mb-6">
    <li>Leer cuidadosamente el texto.</li>
    <li>Consultar en el diccionario palabras que no hayas entendido.</li>
    <li>Identificar el mensaje esencial.</li>
    <li>Escribir palabras clave del texto y cambiarlas por sinónimos.</li>
    <li>Redactar un borrador.</li>
    <li>Redactar tu paráfrasis.</li>
  </ol>

  <div class="my-6 border border-gray-200 rounded-lg overflow-hidden shadow-sm max-w-3xl mx-auto">
    <div class="bg-sky-600 px-5 py-3">
      <p class="font-bold text-white tracking-wide">Ejemplo</p>
    </div>
    <div class="divide-y divide-gray-200">
      <div class="px-6 py-4">
        <p class="text-xs font-semibold uppercase tracking-wider text-gray-500 mb-2">Texto original</p>
        <p class="font-serif italic text-gray-800">&ldquo;¡Ser poco el amor, y que se vaya en celos!&rdquo;</p>
      </div>
      <div class="px-6 py-4 bg-sky-50">
        <p class="text-xs font-semibold uppercase tracking-wider text-sky-600 mb-2">Paráfrasis</p>
        <p class="text-gray-700 italic">Este refrán nos dice que no hay que perder el tiempo de una relación sentimental en celos.</p>
      </div>
    </div>
  </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
