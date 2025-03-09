<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Analizar la información</h3>
  <p>Es momento de estudiar la información del paso 3 del Modelo Gavilán. Recuerda consultar el documento <a href="<?php echo PATH_DOCS . 'u1_t2_guia_gavilan.pdf' ?>" target="_blank">Guía para utilizar el modelo gavilán en el aula (páginas 23-28).</a></p>
  <ol class="ol-number">
    <li>
      <h3>Elegir la información más adecuada para resolver las preguntas secundarias</h3>
      <p>Leer cuidadosamente los contenidos de las fuentes localizadas mediante la consulta, para localizar y seleccionar en cada una de ellas, los datos que le ayudan a responder las Preguntas Secundarias. De esta manera, solo tomaras la parte de la información útil para el trabajo.</p>
    </li>
    <li>
      <h3>Leer, entender, comparar, y evaluar la información seleccionada</h3>
      <p>Aplicar la comprensión lectora (leer, comprender y comparar) a la información seleccionada de diversas fuentes, para evaluar si es coherente, pertinente, suficiente e imparcial para responder sus preguntas.</p>
      <p>En la información pueden existir planteamientos o puntos de vista contrarios entre uno o más autores, para discernir necesariamente debes consultar una tercera fuente.</p>
    </li>
    <li>
      <h3>Responder las preguntas secundarias</h3>
      <p>Se trata de redactar con tus propias palabras una respuesta completa y concreta a cada una de las preguntas secundarias, para ello se requiere un buen nivel de comprensión sobre el tema, por ello tienes que echar mano de otra técnica del aprender a aprender, el resumen.</p>
      <p>RESUMEN</p>
      <ul>
        <li>Exposición breve, oral o escrita, de las ideas principales o partes de un tema, en este caso de al menos tres fuentes de información.</li>
        <li>Leer y comprender el texto original.</li>
        <li>Resaltar las ideas principales.</li>
        <li>Transcribir las ideas principales.</li>
        <li>Redactar el resumen.</li>
      </ul>
    </li>
    <li>
      <h3>Evaluación Paso 3</h3>
      <p>Es un cuestionario del trabajo que debes llevar a cabo durante todos los subpasos del Paso 3. Enuncia los criterios de valoración que ayudan a dar seguimiento al desarrollo del proceso, indica qué es importante y cuáles son los puntos clave.</p>
      <p>Adicionalmente, te permite verificar si estás adquiriendo adecuadamente las habilidades necesarias para Analizar Información.</p>
    </li>
  </ol>
  <?php ob_start(); ?>
  <p class="font-black">Continúa con la práctica del modelo que estamos revisando. Elabora el paso 3. Analizar la información y responde en la casilla de cada subpaso.</p>
  <p>Recuerda que para esta actividad estos son los pasos a seguir:</p>
  <ol class="ol-number">
    <li>Descarga este <a href="<?php echo PATH_DOCS . 'u1_t3_practica_modelo_gavilan.docx' ?>" target="_blank">documento</a> para anotar tus avances.</li>
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
