<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>¿Qué es un Foro de discusión?</h3>
  <p>Para poder llevar a cabo la siguiente actividad primero daremos respuesta a la pregunta ¿Qué es un foro de discusión? es un espacio en línea que permite una comunicación asincrónica y el fomento de las relaciones interpersonales, con el objetivo de intercambiar opiniones o adquirir conocimiento sobre un tema en común, impera la libertad de expresión, al ser un foro virtual educativo, se incluye un límite de tiempo para participar, así mismo el número de caracteres y de réplicas.</p>
  <p>A continuación, se indican algunas normas de Netiqueta para foros virtuales de aprendizaje.</p>
  <p>Pero ¿qué es una Netiqueta? indica Wikimedia (2023) que se utilizan para referirse al conjunto de normas de comportamiento general en Internet, es decir, no es más que una adaptación de las reglas de etiqueta del mundo real al virtual.</p>
  <h4>Lineamientos generales:</h4>
  <ul class="ul-disc">
    <li>Inicia con un saludo, despídete, pide el favor, da las gracias.</li>
    <li>Desarrolla tu respuesta, aportación o réplica, respetando las opiniones de los demás.</li>
    <li>Cuida el formato, los idiomas, el lenguaje y las palabras.</li>
    <li>Utiliza palabras neutras para evitar malentendidos y lee el mensaje dos veces antes de enviarlo.</li>
    <li>No escribas textos en mayúsculas, es más difícil de leer.</li>
    <li>Cuida el color en la escritura, puede distraer y entorpecer la lectura.</li>
    <li>Revisa la ortografía, con el propósito de asegurar una correcta comunicación.</li>
    <li>Revisa la gramática. Una frase mal puntuada puede cambiar el significado totalmente.</li>
    <li>Utiliza comillas, signos de puntuación, exclamación e interrogación, y emoticones son muy útiles para enfatizar.</li>
    <li>Incluye alguna referencia que consultaste para tu aportación.</li>
    <li>Puedes incluir archivos de audio, imagen, video, tablas, links, etc.</li>
    <li>Incluye alguna pregunta de tu interés.</li>
  </ul>
  <?php ob_start(); ?>
  <p>En el foro da respuesta a la pregunta ¿Cuál es mi experiencia en las plataformas de difusión?, respetuosamente explica tu experiencia al descargar, publicar o compartir contenido multimedia en diversos sitios, revisa la Lista de cotejo Foro “Mi experiencia”.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4a18', "Formatos de vídeo", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza el siguiente ejercicio de autoevaluación, que te permite conocer tu aprendizaje sobre “Difunde, publica o comparte archivos multimedia en Internet”.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4a19', "Archivos multimedia en Internet", $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <p>¿Sabías que cualquiera puede ver lo que publicas en Internet? Tal vez no sabías lo importante que es esta información. Quizás no tenías real consciencia de esta relevante información. Es verdad. Y no es solo un dato curioso, sino una alerta sobre lo que subimos y compartimos en Internet. Internet puede ser muy útil para todos, pero también tiene un riesgo que quizá ignoramos, ¿cuál es? En el diario digital 20 Minutos decía lo siguiente: Lo que publicas en internet se quedará para siempre en la Red. Los contenidos se replican y difunden fácil y rápido, y cualquier intento por borrarlos suele ser inútil. Por eso las autoridades audiovisuales de algunos países aconsejan que se use el criterio común cuando se publiquen fotos o datos personales en sus blogs y perfiles de las redes sociales. (ModoFun.com. 2019)</p>
  <h4>¿Quieres saber más?</h4>
  <p>Te invito a que leas el siguiente articulo “<a href="https://pro.sony/ls_MX/solutions/media-operations-management/archiving-ten-reasons-good-media-management" target="_blank">Diez razones por las que una buena gestión y archivo de los contenidos pueden hacer su vida más fácil</a>”</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "¿Sabías que?");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
