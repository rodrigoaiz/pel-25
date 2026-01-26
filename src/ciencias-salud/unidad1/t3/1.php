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
  <h2>Reconoce el derecho a la salud</h2>

  <p>El reconocimiento formal del derecho a la salud, forma parte de la Declaración Universal de los Derechos Humanos de las Naciones Unidas, adoptada en 1948. La Organización Mundial de la Salud se instituye el 7 de abril de 1948, teniendo como principio que: “La salud es un derecho humano para todos”,  por lo tanto, el derecho a la salud es un principio fundamental, que reconoce el acceso de todas las personas a servicios de salud adecuados para mantener y mejorar su bienestar físico y mental. El derecho a la salud incluye los siguientes principios:</p>

  <ul>
    <li><b>Acceso a servicios de salud:</b> Implica que todas las personas deben tener acceso a servicios de atención médica de calidad, incluyendo la prevención, el tratamiento y la rehabilitación de enfermedades y afecciones. Esto incluye servicios médicos, hospitalarios, farmacéuticos y otros.</li>
    <li><b>No discriminación:</b> El derecho a la salud prohíbe la discriminación en la prestación de servicios de salud. Significa que nadie debe ser excluido o tratado de manera desigual en función de su género, edad, raza, origen étnico, discapacidad, orientación sexual, identidad de género u otros factores.</li>
    <li><b>Accesibilidad:</b> Los servicios de salud deben ser accesibles física, económica y geográficamente para todas las personas. Esto significa que no debe haber barreras que impidan el acceso a la atención médica, ya sea por motivos económicos, geográficos o de otra índole.</li>
    <li><b>Calidad de la atención:</b> El derecho a la salud implica que los servicios de salud deben ser de alta calidad, seguros y efectivos. Los profesionales de la salud deben brindar atención de acuerdo con los estándares éticos y científicos.</li>
    <li><b>Participación y empoderamiento:</b>Las personas tienen el derecho a participar en la toma de decisiones relacionadas con su salud y recibir la información adecuada. Esto incluye el derecho a dar o negar el consentimiento para tratamientos médicos.</li>
    <li><b>Derecho a la privacidad:</b> Se debe respetar la privacidad de la información de salud de las personas. La confidencialidad médica es un componente esencial del derecho a la salud.</li>
  </ul>

  <p>Además, la salud es fundamental para disfrutar de otros derechos humanos, incluyendo el derecho a la vida, a la educación y al trabajo. Sin salud, estos otros derechos no pueden ser plenamente realizados.</p>

  <p>El derecho a la salud en México, fue incluido por primera vez en la Constitución Política de los Estados Unidos Mexicanos, el 3 de febrero de 1983, fecha en que se publicó la reforma al artículo 4° Constitucional. El texto del artículo quedó como sigue:</p>

    <p><i>“Toda persona tiene derecho a la protección de la salud. La ley definirá las bases y modalidades para el acceso a los servicios de salud y establecerá la concurrencia de la federación y las entidades federativas en materia de salubridad general, conforme a lo que dispone la fracción XVI del artículo 73 de esta Constitución. La Ley definirá un sistema de salud para el bienestar, con el fin de garantizar la extensión progresiva, cuantitativa y cualitativa de los servicios de salud para la atención integral y gratuita de las personas que no cuenten con seguridad social.”</i></p>  

  <div class="mx-auto max-w-lg">
    <?php renderImage('u1-t3-carta.webp', 'En 1983 se adiciona al artículo 4º constitucional el concepto de Protección de la salud, por lo que los servicios médicos son un derecho respaldado en nuestra Carta Magna: un derecho para todos.', 'https://www.facebook.com/watch/?v=656283365131607', 'video recuperado el 22 de noviembre de 2023'); ?>
  </div>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u1-t3-mapa.png', '', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/WTO_members_and_observers.svg', 'wikimedia.');
              ?>
          </div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
