<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Lección 2: Derecho a la Salud</h2>
  <div class="flex justify-center gap-6">
    <div class="w-1/3 sm:full pt-6">
      <?php
      renderImage('u1-flag-who.webp');
      ?>
    </div>
    <div class="w-2/3 sm:full">
      <p>El reconocimiento formal del derecho a la salud, forma parte de la Declaración Universal de los Derechos Humanos de las Naciones Unidas, adoptada en 1948. La Organización Mundial de la Salud se instituye el 7 de abril de 1948, teniendo como principio que: <em>“La salud es un derecho humano para todos”</em>, por lo tanto, el derecho a la salud es un principio fundamental, que reconoce el acceso de todas las personas a servicios de salud adecuados para mantener y mejorar su bienestar físico y mental. El derecho a la salud incluye los siguientes principios:</p>
    </div>
  </div>


  <ul>
    <li><b>Acceso a servicios de salud:</b> Implica que todas las personas deben tener acceso a servicios de atención médica de calidad, incluyendo la prevención, el tratamiento y la rehabilitación de enfermedades y afecciones. Esto incluye servicios médicos, hospitalarios, farmacéuticos y otros.</li>
    <li><b>No discriminación:</b> El derecho a la salud prohíbe la discriminación en la prestación de servicios de salud. Significa que nadie debe ser excluido o tratado de manera desigual en función de su género, edad, raza, origen étnico, discapacidad, orientación sexual, identidad de género u otros factores.</li>
    <li><b>Accesibilidad:</b> Los servicios de salud deben ser accesibles física, económica y geográficamente para todas las personas. Esto significa que no debe haber barreras que impidan el acceso a la atención médica, ya sea por motivos económicos, geográficos o de otra índole.</li>
    <li><b>Calidad de la atención:</b> El derecho a la salud implica que los servicios de salud deben ser de alta calidad, seguros y efectivos. Los profesionales de la salud deben brindar atención de acuerdo con los estándares éticos y científicos.</li>
    <li><b>Participación y empoderamiento:</b>Las personas tienen el derecho a participar en la toma de decisiones relacionadas con su salud y recibir la información adecuada. Esto incluye el derecho a dar o negar el consentimiento para tratamientos médicos.</li>
    <li><b>Derecho a la privacidad:</b> Se debe respetar la privacidad de la información de salud de las personas. La confidencialidad médica es un componente esencial del derecho a la salud.</li>
  </ul>

  <p>El derecho a la salud en México, fue incluido por primera vez en la <em>Constitución Política de los Estados Unidos Mexicanos</em>, el 3 de febrero de 1983, fecha en que se publicó la reforma al artículo 4° Constitucional. El texto del artículo quedó como sigue:</p>

  <p><i>“Toda persona tiene derecho a la protección de la salud. La ley definirá las bases y modalidades para el acceso a los servicios de salud y establecerá la concurrencia de la federación y las entidades federativas en materia de salubridad general, conforme a lo que dispone la fracción XVI del artículo 73 de esta Constitución. La Ley definirá un sistema de salud para el bienestar, con el fin de garantizar la extensión progresiva, cuantitativa y cualitativa de los servicios de salud para la atención integral y gratuita de las personas que no cuenten con seguridad social.”</i></p>

  <div class="mx-auto max-w-lg">
    <?php renderImage('u1-t3-carta.webp', 'En 1983 se adiciona al artículo 4º constitucional el concepto de Protección de la salud, por lo que los servicios médicos son un derecho respaldado en nuestra Carta Magna: un derecho para todos.', 'https://www.facebook.com/watch/?v=656283365131607', 'video recuperado el 22 de noviembre de 2023'); ?>
  </div>

  <h3>¿Por qué la salud y la enfermedad son un proceso dinámico?</h3>

  <p>La salud y la enfermedad forman un proceso dinámico, porque no son estáticos y están en constante cambio y evolución, debido a una gran variedad de factores biológicos, ambientales y sociales, como por ejemplo las variaciones biológicas y adaptaciones, las interacciones tanto medioambientales como sociales, los diferentes niveles de prevención y tratamientos, con el objetivo de mantener la salud.</p>
  <p>La salud está determinada por una serie de condicionantes biológicos, psicológicos, sociales y culturales.</p>

  <ul>
    <li>Los principales factores que condicionan la salud <b>biológica</b> del ser humano son: la genética, la edad, el sexo, el medio ambiente, el estilo de vida, los hábitos de vida, entre otros.</li>
    <li>La salud <b>psicológica</b> del ser humano puede estar condicionada, por diferentes factores que pueden influir en la salud mental de las personas, como son los socioeconómicos, biológicos, medioambientales, experiencias personales, creencias, actitudes, estrés, etc.</li>
    <li>La salud <b>sociocultural</b>, está determinada por factores como: los socioeconómicos, el entorno social y físico, el género, el idioma, la seguridad laboral, la etnicidad y nivel cultural, entre otros.</li>
  </ul>
  <div class="mx-auto max-w-lg">
    <?php renderImage('modelo-biopsicosocial.webp'); ?>
  </div>
  <div class="flex gap-x-10 relative">
    <img class="max-w-1/2 h-fit sticky top-0 self-start" src="<?php echo PATH_IMAGES . 'u1-presion-arterial-saludable.webp'; ?>">
    <article>
      <p>Estos factores pueden interactuar de manera compleja como en el caso del estrés crónico, relacionado con factores sociales tales como la falta de apoyo social y/o condiciones socioeconómicas desfavorables. Además, la cultura y los valores personales pueden influir en las decisiones de salud, como las elecciones dietéticas y el acceso a la atención médica. Para promover la salud de manera efectiva, es esencial abordar estos condicionantes de forma holística y considerar la interacción entre los factores bio-psico-socioculturales.</p>
      <p>Es importante considerar también los factores de prevención y la promoción de la salud: son necesarias las políticas públicas adecuadas para prevenir enfermedades y promover la salud. El objetivo es alcanzar una justicia social y equidad en la salud, que busca que todas las personas tengan igualdad de oportunidades para alcanzar una salud óptima.</p>
    </article>
  </div>

  <p><strong>Instrucciones:</strong></p>
  <p>Participa en el siguiente foro expresando tu opinión sobre los dos puntos que se presentan. Posteriormente, comenta de manera respetuosa las participaciones de dos de tus compañeros.</p>
  <ol class="ol-number md:ml-32 mb-8">
    <li>En el contexto actual de nuestro país, ¿cuáles consideras que son los principales factores de riesgo para la salud?</li>
    <li>¿Qué medidas podrían ponerse en práctica para mejorar el acceso a servicios de salud para la población en general?</li>
  </ol>
  <?php ob_start(); ?>
  <p>Participa en el foro.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1-act-2', "Foro del tema Salud", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>