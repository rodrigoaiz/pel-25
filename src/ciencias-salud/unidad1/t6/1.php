<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Esquema de la historia natural de la enfermedad</h2>
  <h3>Interpreta el esquema de la historia natural de las enfermedades y su evolución histórica</h3>

  <p>En la historia natural de las enfermedades, han sido muchos los científicos que han contribuido a la comprensión de cómo se desarrollan las enfermedades, y cómo progresan en el individuo o en las poblaciones. Algunos de ellos son: Hipócrates (460-370 aC), quien propuso la teoría sobre las causas naturales de las enfermedades y la importancia de los factores ambientales; Paracelso (1493-1541), introdujo el concepto de enfermedad como producto de alteraciones en el equilibrio químico del cuerpo; Rudolf Virchow (1821-1902), recalcó la importancia de los cambios patológicos a nivel celular en el desarrollo de las enfermedades; Richard Doll (1912-2005), hizo grandes contribuciones a la epidemiología, haciendo énfasis  en la importancia de los factores de riesgo en la historia natural de las enfermedades.</p>

  <p>La historia natural de las enfermedades es un concepto que describe la evolución de una enfermedad, desde su inicio hasta su resolución, ya sea mediante la curación, la cronicidad o la muerte. Este concepto es fundamental en la epidemiología y la salud pública; se puede dividir en varias etapas:</p>

  <ul>
  <li><strong> Etapa prepatogénica o de susceptibilidad:</strong>Durante esta etapa no existe la enfermedad, pero hay factores de riesgo que aumentan la probabilidad de desarrollarla, como los genéticos, ambientales, sociales y de estilo de vida, que aumentan la susceptibilidad a la enfermedad.</li>

  <li><strong>Etapa patogénica o de enfermedad:</strong> En esta inicia la enfermedad y las manifestaciones no específicas, así como las señales de que la enfermedad está en desarrollo, es decir comienza la interacción entre el agente causal (microorganismo, sustancia tóxica, factor genético) y el huésped susceptible (individuo), apareciendo los signos y síntomas. La enfermedad progresa a medida que el agente afecta al huésped. En esta fase se busca la atención médica y se lleva a cabo el diagnóstico.</li>

  <li><strong>Etapa de Resolución, Cronicidad o Muerte:</strong> En esta etapa puede ocurrir que el paciente pueda combatir la enfermedad y se recupere totalmente; o la enfermedad puede volverse crónica y persistir a largo plazo, pudiendo haber complicaciones que requieren de rehabilitación para mejorar la calidad de vida del paciente. En los casos más graves, la enfermedad puede llevar a la muerte del individuo.</li>

  <li><strong>Factores Modificadores:</strong> Existen varios factores, que pueden prevenir o alterar el curso de una enfermedad, entre los cuales mencionaremos los siguientes:
    
    <ol class="ol-alpha"> 
      <li>factores protectores, son elementos que pueden reducir las posibilidades de que aparezca una enfermedad o que esta sea menos grave, como por ejemplo: una alimentación saludable, evitar el alcohol y el tabaco, mantener un peso corporal adecuado, entre otras. </li>
      <li>intervenciones médicas, medidas preventivas y tratamientos, que pueden evitar o alterar el curso de la enfermedad, entre los que se encuentran, las vacunas, antibióticos, cirugías, análisis y estudios, etc. </li>
      <li>factores ambientales, están relacionados con las características que rodean a la persona y que intervienen en el desarrollo de la enfermedad, como pueden ser, la calidad del agua, del aire y de los alimentos y finalmente, </li>
      <li>los factores sociales y comunitarios, que  pueden afectar el desarrollo de la enfermedad, como los siguientes: la situación económica, el entorno social y físico, la seguridad laboral, el género, el idioma, el nivel cultural y educativo, etc.</li>
    </ol>
    </li>

  </ul>

  <p>No todas las enfermedades se comportan igual, por lo tanto, dependiendo de la enfermedad de que se trate y de las características del paciente, la historia de esta puede variar. Es importante entender la historia de la enfermedad para poder intervenir oportunamente, evitar que la enfermedad progrese, mejorar la recuperación y reducir la discapacidad. Existen tres niveles de prevención que son: Primaria, que se ocupa de evitar que se desarrolle la enfermedad. Secundaria, se encarga de la detección temprana y el tratamiento de la enfermedad. Terciaria, se ocupa de la rehabilitación y el manejo de la enfermedad crónica, para prevenir discapacidades adicionales.</p>

  <h2 class="text-center">Actividad de investigación</h2>

  <h3>Introducción</h3>

  <p>La diabetes es una enfermedad crónica que afecta a un gran número de personas en México. Según datos de la Secretaría de Salud la diabetes es una de las principales causas de muerte en el país, y tiene una alta prevalencia; según estimaciones alrededor del 10% de la población mexicana padece diabetes, y este número ha ido en aumento en los últimos años. La diabetes tipo 2 es la forma más común de diabetes en México; generalmente está asociada con el estilo de vida, la obesidad y la falta de actividad física. La diabetes tipo 1 también está presente, pero es menos común.</p>

  <p>Los factores de riesgo para desarrollar diabetes en México incluyen la genética, la obesidad, la falta de ejercicio, la mala alimentación y la edad avanzada, entre otros. La predisposición genética es un factor importante en la población mexicana, que puede llevar a complicaciones graves, tales como enfermedades cardiovasculares, problemas renales, pérdida de la visión y amputaciones. Estas complicaciones representan una carga significativa para las familias y el sistema de salud. Aunque hay avances en la concientización sobre la diabetes y en el acceso a la atención médica, aún existen desafíos. Algunas personas pueden enfrentar barreras económicas o geográficas para recibir el tratamiento adecuado.</p>

  <p>El gobierno mexicano y diversas organizaciones trabajan en programas de prevención y concientización sobre la diabetes e incluyen campañas educativas sobre la importancia de la alimentación saludable, el ejercicio regular y el monitoreo de la glucosa. Uno de los enfoques clave para abordar la diabetes en México es la promoción de cambios en el estilo de vida, como adoptar una dieta balanceada, y aumentar la actividad física. La prevención y el diagnóstico temprano son aspectos clave para combatir la propagación de la enfermedad.</p>

  <p>Finalmente, la diabetes es un problema significativo de salud pública en México, y abordar esta situación requiere esfuerzos continuos en educación, prevención y acceso a la atención médica. </p>

  <h3>Desarrollo de la Actividad para el Alumno: Elaboración de un mapa conceptual sobre la diabetes.</h3>

  <p>Después de leer detenidamente el tema de Historia natural de la enfermedad, realizarás una investigación bibliográfica sobre la diabetes, para que comprendas cómo se comporta este padecimiento, de acuerdo a las cuatro etapas de la historia natural de la enfermedad, que son: Prepatogénica o de susceptibilidad; Patogénica o de enfermedad; de Resolución, Cronicidad o Muerte y finalmente la de los Factores Modificadores. Una vez terminada la investigación sobre la diabetes, elaborarás un mapa conceptual, que ejemplifique las cuatro etapas antes mencionadas.</p>

  <?php ob_start(); ?>
  <p> En la elaboración del mapa conceptual, puedes incluir imágenes que ilustren el contenido, procura que la redacción y la ortografía sean correctas. Lo subirás en el apartado correspondiente. Si tienes dudas sobre la elaboración del mapa conceptual, te sugerimos que revises el siguiente tutorial:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t6a1', "Mapa Conceptual", $ActividadContent);
  ?>

  <?php
  renderVideoIframe('cROcclGmbDw', 'Historia Natural de la Enfermedad');
  ?>

  <p>Esperamos que al concluir esta primera unidad del curso, los contenidos, imágenes, videos y actividades que contiene hayan sido de tu interés y te hayan proporcionado conocimientos que puedas aplicar a tu vida diaria y te sirvan para tomar mejores decisiones y para enriquecer tu calidad de vida, la de tu familia y la de tu comunidad. Te invitamos a que continúes con la segunda unidad, en la cual podrás aplicar algunos de los conocimientos adquiridos e incorporar nuevos que mejorarán tu formación. Además te prepararán para continuar con tus estudios. </p>



  <?php ob_start(); ?>
  <p> Para que puedas conocer cuánto aprendiste del tema, resuelve el siguiente cuestionario, para lo cual lee cuidadosamente las preguntas y selecciona la letra que corresponda a la respuesta correcta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t5a2', "Cuestionario de autoevaluación final Unidad I", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t6a3', "Glosario", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t6a3', "Bibliografía", $ActividadContent);
  ?>
   
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
