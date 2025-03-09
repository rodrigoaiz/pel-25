<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Sintetizar la información y utilizarla</h3>
  <p>Es momento de estudiar la información del paso 4 del Modelo Gavilán. Recuerda consultar el documento <a href="<?php echo PATH_DOCS . 'u1_t2_guia_gavilan.pdf' ?>" target="_blank">Guía para utilizar el modelo gavilán en el aula (páginas 28-34).</a></p>
  <ol class="ol-number">
    <li>
      <h3>Resolver la pregunta inicial</h3>
      <p>Consiste en que realices un proceso de síntesis integrando las respuestas a las preguntas secundarias, para producir conclusiones, además de establecer relaciones coherentes entre sus diferentes elementos para unificarlos y alcanzar con ello, una comprensión concreta y completa del tema que te posibilite contestar la pregunta inicial, para lograr adquirir la capacidad de resolver el problema de información.</p>
    </li>
    <li>
      <h3>Elaborar un producto concreto</h3>
      <p>Radica en que tomes tu respuesta a la pregunta inicial y generes un producto concreto, que puede ser un documento de texto, una presentación, una línea de tiempo, un mapa conceptual o mental, una infografía, un cuadro sinóptico, un video , un podcast, entre otros.</p>
      <p>El objetivo de este producto es que manifiestes las relaciones entre la información de las respuestas a las preguntas secundarias, estructurando de esta manera la respuesta a la pregunta inicial.</p>
      <p>En esta casilla debes depositar una imagen de dicho producto.</p>
    </li>
    <li>
      <h3>Comunicar los resultados de la investigación</h3>
      <p>El producto generado debe ser difundido o publicado, si lo difundiste, debes capturar una imagen donde se aprecie en que medio se está difundiendo o compartiendo el archivo del producto. Si lo publicaste en Internet, en esta casilla debes colocar una copia del a URL o dirección de Internet para acceder a él.</p>
    </li>
    <li>
      <h3>Evaluación del Paso 4 y del Proceso</h3>
      <p>Debes contestar a la lista de las preguntas acerca de los desempeños específicos que llevaste a cabo durante todos los subpasos del Paso 4 del Modelo Gavilán.</p>
      <p>Estas preguntas expresan los aspectos a evaluar y que ayudan a monitorear permanentemente el desarrollo del proceso, indican qué es importante demandar y cuáles son los puntos clave. Adicionalmente, permite verificar si se están adquiriendo adecuadamente las habilidades necesarias para sintetizar, utilizar y comunicar la información.</p>
    </li>
  </ol>
  <p>Una vez concluida la revisión de cada uno de los subpasos anteriores lleva a cabo la siguiente actividad.</p>
  <?php ob_start(); ?>
  <p class="font-black">Concluye con la práctica del modelo que estamos revisando. Elabora el paso 4. Sintetizar la información y utilizarla y responde en la casilla de cada subpaso.</p>
  <p>Recuerda que para esta actividad estos son los pasos a seguir:</p>
  <ol class="ol-number">
    <li>Descarga este <a href="<?php echo PATH_DOCS . 'u1_t3_practica_modelo_gavilan.docx' ?>" target="_blank">documento</a> para anotar tus avances.</li>
    <li>Una vez que concluyas los cuatro pasos guarda el documento siguiendo el formato: Apellidos_Nombre_Ap3_Actividad01. Ejemplo: SanchezLopez_JoseLuis_Ap3_Actividad01</li>
  </ol>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u1_t3_lista_cotejo_practica_modelo_gavilan.pdf' ?>" target="_blank">Criterios de evaluación</a> de la actividad. <strong>Ahora sí es momento que envíes tu documento</strong>.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a11', "Práctica: Modelo Gavilán", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
