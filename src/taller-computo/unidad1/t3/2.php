<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Método de búsqueda y recuperación de información en internet</h3>
  <p>Es un procedimiento para realizar investigaciones documentales, consiste en cuatro pasos, cada paso involucra varios sub pasos (lee el nombre del paso y presiona para mostrar los subpasos).</p>
  <ol class="ol-number">
    <li>
      <h3>Definir el problema de información y qué se necesita indagar para resolverlo</h3>
      <ul>
        <li>Plantear una Pregunta Inicial</li>
        <li>Analizar la Pregunta Inicial</li>
        <li>Construir un Plan de Investigación</li>
        <li>Formular Preguntas Secundarias</li>
        <li>Evaluación del Paso 1</li>
      </ul>
    </li>
    <li>
      <h3>2. Buscar y evaluar fuentes de información</h3>
      <ul>
        <li>Identificar y seleccionar las fuentes de información más adecuadas</li>
        <li>Acceder a las fuentes de información seleccionadas</li>
        <li>Evaluar las fuentes encontradas</li>
        <li>Evaluación Paso 2</li>
    </li>
    <li>
      <h3>Analizar la información</h3>
      <ul>
        <li>Elegir la información más adecuada para resolver las Preguntas Secundarias</li>
        <li>Leer, entender, comparar, y evaluar la información seleccionada</li>
        <li>Responder las Preguntas Secundarias</li>
        <li>Evaluación Paso 3</li>
      </ul>
    </li>
    <li>
      <h3>Sintetizar la información y utilizarla</h3>
      <ul>
        <li>Resolver la Pregunta Inicial</li>
        <li>Elaborar un producto concreto</li>
        <li>Comunicar los resultados de la investigación</li>
        <li>Evaluación del Paso 4 y del Proceso</li>
      </ul>
    </li>
  </ol>
  <p>Revisa el siguiente documento disponible en este <a href="<?php echo PATH_DOCS . 'u1_t2_guia_gavilan.pdf' ?>" target="_blank">Guía para utilizar el modelo gavilán en el aula (páginas 5-14)</a>.</p>
  <ol class="ol-number">
    <li>
      <h3>Plantear la pregunta inicial</h3>
      <p>Un problema de información es el enunciado del tema de investigación, algo puede ser encontrado, demostrado o satisfecho empleando información. Establecerlo o identificarlo implica la capacidad para establecer explícitamente relaciones coherentes entre los diferentes subtemas y elementos de la información disponible.</p>
      <p>Al iniciar la búsqueda de información tenemos que precisar las palabras clave de nuestro tema de investigación e identificar los subtemas apropiados para llevar a cabo la búsqueda, para lograr un conocimiento concreto y completo del tema que posibilite resolver el problema de información.</p>
      <p>La pregunta inicial es la expresión interrogativa de un problema de información y punto de partida para la investigación que se va a desarrollar siguiendo cada uno de los pasos de algún método o modelo de búsqueda y recuperación de información como Gavilán, OSLA, Big6, entre otros.</p>
      <p>Esta no se debe basar en un concepto o aspecto específico del tema al que hace referencia, debe despertar la curiosidad e invitar a la discusión de un problema específico y motivar a revisar los conocimientos previos, experiencias y diversos elementos acerca del tema para generar ideas que permitan responder este cuestionamiento.</p>
      <p>La pregunta inicial debe cumplir dos condiciones para que se considere expresión de un problema de información y se formule apropiadamente, debe:</p>
      <ul>
        <li>Requerir, para resolverse, únicamente información ya existente disponible en las fuentes de información y cubrir al menos tres temas.</li>
        <li>Plantearse a partir de un contexto o situación real y específica que despierte la curiosidad, invite al análisis y exija aplicar y utilizar los conocimientos que se adquieran durante la investigación.</li>
      </ul>
    </li>
    <li>
      <h3>Analizar la pregunta inicial</h3>
      <p>El análisis de la pregunta inicial ayuda a ubicar y determinar que ciencia o ciencias y la rama de la ciencia que estudian el tema (problema de información), se hace una primera exploración en internet para indagar y elaborar una lista con los subtemas que podrían aportar información.</p>
      <p>Al elaborarla, se desarrollan criterios para decidir acertadamente que subtemas y conceptos del tema no aportan a la solución de la pregunta inicial y se eliminan, así como cuáles si aportan para mantenerlos en la lista, y cuál es el orden más lógico para investigarlos.</p>
    </li>
    <li>
      <h3>Construir un plan de investigación</h3>
      <p>El plan de investigación consiste en construir una lista o diagrama (organizador gráfico) para ayudar a seleccionar, organizar y categorizar los subtemas que se considerarán para la investigación, a definir el orden en que los subtemas se investigarán y a establecer qué se va a averiguar sobre cada aspecto seleccionado.</p>
      <p>A partir del plan de investigación se plantean las preguntas secundarias.</p>
    </li>
    <li>
      <h3>Formular preguntas secundarias</h3>
      <p>Una pregunta secundaria es una pregunta concreta y específica que se deriva de la Pregunta Inicial y hacen referencia a los subtemas y conceptos del tema (problema de información) que se deben indagar y comprender para poder resolverlo. Para elaborarla se toman las palabras clave de cada subtema del plan de investigación y se convierten en pregunta, se pueden generar preguntas secundarias alternas considerando sinónimos o términos equivalentes.</p>
      <p>Una vez que hayas terminado de desarrollar el Paso 1. Definir el problema de información y qué se necesita indagar para resolverlo, resuelve la siguiente actividad.</p>
    </li>
    <li>
      <h3>Evaluación del paso 1</h3>
    </li>
  </ol>
  <p>Después de haber revisado cada uno de los subpasos anteriores lleva a cabo lo siguiente.</p>
  <?php ob_start(); ?>
  <p>Para concluir el tema de Navegador Web: Historial, Marcadores o Favoritos, es necesario desarrollar un cuestionario para asegurar lo aprendido del tema, por lo tanto, te invitamos a responderlo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a9', "Verificación de la definición el problema", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga este <a href="<?php echo PATH_DOCS . 'u1_t3_practica_modelo_gavilan.docx' ?>" target="_blank">documento</a> para anotar tus avances.</li>
    <li>Abre el documento.</li>
    <li>Por ahora, <strong>elabora el paso 1</strong>. Definir el problema de información y qué se necesita indagar para resolverlo respondiendo en la casilla de cada subpaso.</li>
    <li>Mantén abierta la práctica para realizar el resto de los ejercicios.</li>
    <li>Una vez que concluyas los cuatro pasos guarda el documento siguiendo el formato: Apellidos_Nombre_Ap3_Actividad01. Ejemplo: SanchezLopez_JoseLuis_Ap3_Actividad01</li>
  </ol>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u1_t3_lista_cotejo_practica_modelo_gavilan.pdf' ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a11', "Práctica: Modelo Gavilán", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
