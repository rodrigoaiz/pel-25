<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Identifica los resultantes de los factores de riesgo biológicos, psicológicos y sociales de la adolescencia.</h2>

  <p>Los factores de riesgo biológicos, psicológicos y sociales en el adolescente, pueden conducirlo a una serie de afectaciones negativas en su desarrollo físico, emocional y psicosocial, que pueden repercutir en su bienestar y desarrollo integral el resto de su vida. Estos factores de riesgo no actúan de manera aislada, ya que crean entornos que favorecen diversas conductas de riesgo como son: consumo de sustancias tóxicas, violencia, pandillerismo, entre otras.</p>

  <h3 class="text-center">Resultantes de los factores de riesgo biológicos, psicológicos y sociales de la adolescencia:</h3>

  <p>Los hábitos de vida saludables son necesarios para el desarrollo y bienestar físico, mental y emocional del adolescente. A continuación se mencionan algunos de estos.</p>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-tabla.png');
              ?>
          </div>

  <h3 class="text-center">Factores de riesgo biológicos.</h3>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-esquizofrenia.webp', 'La esquizofrenia es una enfermedad que se presenta entre los 15 y 24 años de edad; el estigma es uno de los problemas con los que tiene que lidiar el enfermo.', 'https://ciencia.unam.mx/uploads/textos/ar_vivir_esquizofrenia_01_040618.jpg', 'UNAM.');
              ?>
          </div>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-insulina.webp', 'Bomba de infusión de insulina. Estos dispositivos sustituyen en algunos casos a las clásicas jeringas, consiguiendo liberaciones de insulina más fisiológicas y adecuadas a la ingesta.', 'https://upload.wikimedia.org/wikipedia/commons/8/89/Insulin_pump_with_infusion_set.jpg', 'Wikimedia Commons.');
              ?>
          </div>

          <h3 class="text-center">Factores de riesgo psicológicos.</h3>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-depresion.webp', 'El trastorno depresivo mayor y otros trastornos del estado de ánimo, como el trastorno bipolar, pueden incrementar hasta veinte veces el riesgo de suicidio.', 'https://es.wikipedia.org/wiki/Suicidio#/media/Archivo:Depressed_(4649749639).jpg', 'wikipedia.');
              ?>
          </div>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-anorexia.webp', 'Anorexia y bulimia, padecimientos que sufren más las mujeres jóvenes.', 'https://www.gaceta.unam.mx/el-25-de-los-adolescentes-tiene-desordenes-alimentarios/', 'UNAM.');
              ?>
          </div>


          <h3 class="text-center">Factores de riesgo sociales.</h3>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-hombre.webp', 'Hombre sin hogar en Paris Francia', 'https://commons.wikimedia.org/wiki/File:HomelessParis_7032101.jpg', 'wikimedia.');
              ?>
          </div>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-desempleo.webp', 'Desempleo en México', 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Unemployment_in_Mexico_2009.jpg', 'Wikimedia Commons.');
              ?>
          </div>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-acido.webp', 'Mujer víctima de un ataque con ácido, en Camboya.', 'https://upload.wikimedia.org/wikipedia/commons/0/04/Acid_attack_victim.jpg', 'Wikimedia Commons.');
              ?>
          </div>

  <p>Es importante identificar los factores de riesgo tanto biológicos, psicológicos como sociales que afectan a los adolescentes, ya que estos no actúan de manera aislada, sino que interactúan y pueden amplificarse mutuamente, por lo que es importante atenderlos tempranamente, para darles el apoyo y la orientación adecuada para mitigar los efectos negativos que estos pueden causarles y proporcionarles una adolescencia segura y saludable.</p>

        <h3 class="text-center">Señal de Ayuda</h3>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t6-señal.webp', 'Esta es una señal de ayuda destinada a prestar auxilio a las mujeres que sufren violencia de género, se hace por medio de una videollamada y fue creada por la Fundación de Mujeres Canadiense en 2020.', 'https://upload.wikimedia.org/wikipedia/commons/9/93/Signal_for_Help_gestures.png', 'Wikimedia Commons.');
              ?>
          </div>
  <ol>
    <li>Poner la palma de la mano hacia la cámara y doblar el pulgar sobre esta.</li>
    <li>Cerrar los dedos sobre el pulgar.</li>
  </ol>

  <?php
  renderVideoIframe('3p4M2RWhycE', 'El gesto contra la violencia de género que puede salvarte la vida');
  ?>

  <?php ob_start(); ?>
  <p>A continuación encontrarás algunos artículos relacionados con los factores de riesgo biológicos, psicológicos y sociales que te ayudarán a comprender y ampliar tus conocimientos sobre el tema.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t6a1', "Artículo", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Al concluir la Unidad, participa en el foro de discusión con tus compañeros, iniciando a partir de las siguientes preguntas generadoras, en las que podrás exponer tus opiniones con respecto a los temas tratados en esta unidad y que te aportó para tu vida. Recuerda que debes ser respetuoso de las opiniones de los demás, aun cuando no estés de acuerdo con ellas.
</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t6a2', "Foro de discusión", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Para que puedas conocer cuánto aprendiste del tema, resuelve el siguiente cuestionario, para lo cual lee cuidadosamente las preguntas y selecciona la letra que corresponda a la respuesta correcta.
</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t6a3', "Cuestionario de autoevaluación final Unidad III", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t6a4', "Bibliografía", $ActividadContent);
  ?>

  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
