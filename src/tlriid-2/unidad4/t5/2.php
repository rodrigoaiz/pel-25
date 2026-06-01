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
  <h2>Universalidad de la Obra</h2>
  <p>Aunque Metamorfosis refleja a través del personaje de Gregorio, mucho de lo que Franz Kafka sentía hacia su padre, eso no es lo que la convierte en un trabajo de literatura universal. Una obra artística que se considera universal es aquella que refleja conflictos humanos que pueden suceder en cualquier tiempo y en cualquier lugar.</p>
  <p>Así pues Metamorfosis de Franz Kafka es un texto universal porque la situación por la que atraviesa Gregorio ha sido experimentada por miles de personas en todas las culturas y en todas las épocas. Por supuesto que al hacer esta aseveración no estamos hablando de la transformación de Gregorio en un sentido literal. El hecho de que Gregorio se haya convertido en un insecto es una analogía que puede representar un gran número de transformaciones sufridas por un individuo que le originen el rechazo familiar, la pérdida laboral y la alienación social. Un ejemplo de esto podría ser lo que le sucede a una persona al perder alguna capacidad física.</p>
  <div class="max-w-lg mx-auto">
    <?php
      renderImage(
      'tlriid2-u4t4img3.webp',
      );
    ?>
  </div>
  <p>La transformación de Gregorio Samsa en un insecto es el recurso que Kafka utilizó para que el lector pueda comparar la obra con situaciones reales. Esto le da universalidad a la obra, pues permite un sinfín de interpretaciones y posibilidades.</p>

  <h4>Valoración Estética</h4>
  <p>Una película basada en una novela es una interpretación hecha por los adaptadores, directores y/o creadores. Esta interpretación puede tomar la historia, el discurso o ambos, y éstos se ven reflejados en la pantalla. Así pues, cuando vemos la película observamos, entre otras cosas, las elecciones estéticas que hizo el grupo creativo. Como una película se cuenta audiovisualmente, las elecciones estéticas están relacionadas con imágenes, luz, oscuridad, sonido, música,  etcétera.</p>
  <p>Te invitamos a que veas la película y que observes las elecciones estéticas hechas que salieron de la propuesta de la novela Metamorfosis de Franz Kafka.</p>
  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('CxTpQeGqwJw', 'La novela');
      ?>
    </div>
  </div>
  <p>Observa similitudes y diferencias que encuentras entre la apreciación estética que habías hecho de la novela y las que encuentras en la película. Un ejemplo de ambos podría ser: Gregorio es presentado como un insecto que resulta repugnante a la vista.  </p>
  <?php ob_start(); ?>
  <p>Para terminar con tu trabajo de novela, te vamos a pedir que redactes un comentario analítico de una a dos cuartillas de alguna novela; puedes usar la Metamorfosis. Para que tu trabajo sea específico, te proponemos que enfoques tu trabajo en el análisis de la historia o en el del discurso. Te ofrecemos una guía de los elementos que se deben analizar en uno u otro. Esta guía incluye una serie de preguntas que deberás hacerte para poder escribir un comentario analítico y no sólo una opinión personal. Estas preguntas te servirán para analizar la novela, sin embargo, al redactar tu comentario, no debes hacerlo como cuestionario. La redacción de un comentario analítico es la de un documento organizado en párrafos que incluya sólo las respuestas que diste a las preguntas basándote en tu análisis.</p>
  <p>Al finalizar sube tu archivo de texto en el espacio correspondiente de la plataforma.</p>
  <h4 class="text-center">Guía de Análisis de la Historia de una Novela</h4>
  <ol>
    <li>
      <strong>Título</strong>
      <ol type="a">
        <li>Observa el significado y la función del título. Decide si es adecuado o no.</li>
        <li>¿Nos proporciona una interpretación completa del texto? ¿Qué podemos deducir de él? ¿Nos adelanta la historia?</li>
        <li>¿Es simbólico?</li>
      </ol>
    </li>
    <li>
      <strong>La historia</strong>
      <ol type="a">
        <li>Resumirla de forma breve y concisa.</li>
        <li>¿Qué tipo de experiencias se pueden encontrar en el texto analizado?</li>
        <li>¿El texto tiene su origen en algo real o irreal?</li>
      </ol>
    </li>
    <li>
      <strong>Tema</strong>
      <ol type="a">
        <li>¿Cuál es la idea principal del texto? ¿Hay ideas secundarias? ¿Cuáles son?</li>
        <li>¿Cuáles son las emociones predominantes en el texto? ¿Cómo se expresan?</li>
        <li>¿Se usan símbolos o alegorías?</li>
      </ol>
    </li>
    <li>
      <strong>Personajes</strong>
      <ol type="a">
        <li>Clasifica a los personajes según sus características físicas, ideológicas y psicológicas.</li>
        <li>¿Cómo es la relación de los personajes y su entorno? ¿Es una relación armónica o conflictiva?</li>
      </ol>
    </li>
    <li>
      <strong>Entorno</strong>
      <ol type="a">
        <li>¿Dónde sucede la historia?</li>
        <li>¿Cuándo sucede la historia?</li>
        <li>¿El espacio de la historia es realista o fantástico?</li>
        <li>¿Cómo es la atmósfera donde se desarrolla la historia?</li>
      </ol>
    </li>
    <li>
      <strong>Acción</strong>
      <ol type="a">
        <li>Naturaleza de la acción: ¿los acontecimientos suceden en el mundo ficticio o en la imaginación de los personajes?</li>
        <li>¿Existe algún choque entre los deseos de dos o más personajes? De ser así, ¿cómo se enfrentan?</li>
      </ol>
    </li>
    <li>
      <strong>Lógica y Motivación</strong>
      <ol type="a">
        <li>¿Hay lógica en la manera en que se desarrollan los acontecimientos?</li>
        <li>¿Las acciones de los personajes tienen motivación suficiente? ¿Actúan de acuerdo a la lógica humana o como máquinas?</li>
      </ol>
    </li>
  </ol>
  <h4 class="text-center">Guía de Análisis del Discurso de una Novela</h4>
  <ol>
    <li>
      <strong>Estructura Narrativa</strong>
      <ol type="a">
        <li>¿Cómo se integra la historia? ¿Se da en forma lineal o en diferentes planos?</li>
        <li>¿Dónde comienza la perturbación? ¿Cómo está planteada?</li>
        <li>¿Cuál es la fuerza que predomina durante el clímax?</li>
        <li>¿Qué sucede después del clímax? ¿Hay algún momento de suspenso final?</li>
        <li>¿El final es sorprendente o predecible?</li>
      </ol>
    </li>
    <li>
      <strong>Composición</strong>
      <ol type="a">
        <li>¿Te pareció lógica la composición del texto?</li>
        <li>¿Existe alguna relación entre la historia y el discurso?</li>
        <li>¿Cómo se interrelacionan las partes?</li>
        <li>¿Cuáles son los elementos secundarios que soportan la historia? ¿Cómo son presentados?</li>
      </ol>
    </li>
    <li>
      <strong>Técnica narrativa</strong>
      <ol type="a">
        <li>¿Cuál es el punto de vista del autor?</li>
        <li>¿Qué tipo de narrador utilizó? ¿Qué aporta esta elección a la narración del texto?</li>
        <li>¿De qué manera influye la técnica narrativa a la historia?</li>
      </ol>
    </li>
    <li>
      <strong>Lenguaje</strong>
      <ol type="a">
        <li>¿Cómo es el lenguaje que utiliza el autor del texto?</li>
        <li>¿Qué novedades nos da el lenguaje?</li>
      </ol>
    </li>
    <li>
      <strong>Estilo</strong>
      <ol type="a">
        <li>¿Qué valores literarios son intrínsecos al texto? ¿Son de naturaleza estética, ética, o lingüística?</li>
        <li>Define el estilo del autor ¿Utiliza el mismo estilo en otros textos?</li>
      </ol>
    </li>
  </ol>    

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4a5', "Análisis de la Historia de una Novela", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
