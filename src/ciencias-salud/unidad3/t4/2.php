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
  <h2>Interpreta la salud integral como una meta deseable.</h2>

  <p>La salud es un estado al que todo ser humano aspira tener, además de ser un derecho que todos los gobiernos deben proporcionar a su población. A través del tiempo el concepto de salud ha ido cambiando; en la actualidad la OMS considera que es <b><i>“Un estado de completo bienestar físico, mental, social y no solo la ausencia de afecciones o enfermedades”</i></b>, incluyendo otros aspecto como el bienestar mental, emocional y social, no solo el físico, entendiendo por bienestar el tener satisfacción y equilibrio en todos los aspectos de la vida de una persona.</p>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-integral.webp', 'Salud integral.', 'https://www.gaceta.unam.mx/wp-content/uploads/2023/06/230608-Aca9-des-f1-Encuentro-Nacional-por-la-Salud-Integral.jpg', 'UNAM.');
              ?>
          </div>

  <p>La salud integral tiene un enfoque más amplio, ya que considera todos los aspectos del bienestar humano, como son el físico, mental, emocional, social y espiritual. Dentro de la salud integral se tiene en cuenta la prevención, la promoción, la educación, etc. A continuación se describen algunas de las características de los aspectos del bienestar humano:</p>

      <ul>
        <li><b>Bienestar físico:</b> incluye la condición física, la alimentación e hidratación adecuada, actividad física regular, calidad del sueño y descanso, higiene, cuidado personal y prevención de enfermedades.
  
            <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-placido.webp', 'Jóven descansando plácidamente.', 'https://www.freepik.es/imagen-ia-premium/mujer-joven-sueno-ella-cama_179703307.htm', 'freepik.');
              ?>
          </div>
        
        </li>

        <li><b>Bienestar mental:</b> se refiere a la estabilidad y salud emocional, emociones positivas, resiliencia, manejo del estrés, autoconocimiento y autoaceptación, relaciones saludables, sentido y propósito de vida, salud cognitiva, adaptación, descanso y recreación.
  
            <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-recreativas.webp', 'Actividades recreativas para los adolescentes.', 'https://www.freepik.es/fotos/ejercicio#query=actividades%20recreativas&position=25&from_view=keyword&track=ais_user&uuid=9d9d8ee0-55d4-4f82-af17-5f93b1dd5f82#page=1&query=a&from_query=undefined&position=0&from_view=keyword&track=ais_user&uuid=9d9d8ee0-55d4-4f82-af17-5f93b1dd5f82', 'freepik.');
              ?>
          </div>
        
        </li>

        <li><b>Bienestar emocional:</b> está relacionado con la autoconciencia y regulación emocional, expresión emocional saludable, estabilidad emocional, satisfacción y bienestar general y relaciones saludables.
        </li>

        <li><b>Bienestar social:</b> se caracteriza por tener relaciones saludables, apoyo social, comunicación efectiva, participación comunitaria, habilidades interpersonales adecuadas, apoyo emocional y práctico.
  
            <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-consulta.webp', 'Adolescente en consulta con una psicóloga.', 'https://www.freepik.es/vector-premium/mujer-sesion-psicoterapia-hablando-psicologo-concepto-salud-mental_21654757.htm#query=psicologo&position=5&from_view=keyword&track=sph&uuid=b653c682-752d-48c1-b238-7907d012ef09#page=1&query=p&from_query=undefined&position=0&from_view=keyword&track=sph&uuid=b653c682-752d-48c1-b238-7907d012ef09', 'freepik.');
              ?>
          </div>
        
        </li>

        <li><b>Bienestar espiritual:</b> puede ser de carácter religioso, filosófico o existencial, inherente al sentido de propósito y satisfacción con la vida, conexión con la religión o la espiritualidad, paz interior y equilibrio emocional, valores y ética, participación en comunidades que proporcionen apoyo. 
  
            <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-comunitarias.webp', 'Jóven participando en labores comunitarias.', 'https://www.freepik.es/foto-gratis/diferentes-personas-haciendo-trabajo-voluntario_15574048.htm#from_view=detail_alsolike', 'freepik.');
              ?>
          </div>
        
        </li>

      </ul>

      <p>Los factores ambientales juegan un papel importante en la salud integral de las personas. Se conoce como <b>micro ambiental</b> cuando es cercano o inmediato como la casa, la escuela, el trabajo, etc., refiriéndose a la calidad del aire en el interior de los inmuebles, acceso al agua potable, viviendas adecuadas, seguridad laboral, acceso a la atención médica, educación y transporte. La salud <b>macro ambiental</b> tiene relación con lo social, económico y político ya sea nacional, regional o mundial, incluyendo, la calidad del aire y el agua exterior, condiciones climáticas, sostenibilidad y uso de los recursos, políticas de salud pública, desarrollo económico y la seguridad laboral.</p>

      <p>Podemos concluir que tanto el bienestar físico, mental, emocional, social y espiritual, así como el medioambiental permiten a las personas llevar una vida equilibrada, plena, satisfactoria y significativa, contribuyendo a una buena calidad de vida teniendo la capacidad de enfrentar y resolver los desafíos de la vida cotidiana, mediante la prevención, la promoción de estilos de vida saludable y el uso de prácticas médicas clásicas y alternativas.</p>

      <?php
        renderVideoIframe('elflI3vNmK4', ' Mi derecho a una salud integral');
      ?>

  
  <?php ob_start(); ?>
  <p>Lee cuidadosamente la siguiente lectura y complétala con las palabras que se encuentran en la lista. Ten cuidado con la ortografía. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a2', "completa la lectura", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
