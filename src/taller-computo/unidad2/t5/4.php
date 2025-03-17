<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Riesgos en el uso de software</h3>
  <p>¿Cuántas veces has sido víctima de software malicioso o han experimentado problemas de seguridad en tus dispositivos?</p>
  <h4>Introducción</h4>
  <p>En este primer tema, exploraremos el concepto de vulnerabilidad y amenaza en el contexto de la seguridad informática. Comprender estos términos es fundamental para identificar y prevenir posibles riesgos en el uso de software. Veremos ejemplos reales y analizaremos cómo las vulnerabilidades pueden ser explotadas por amenazas para causar daño a sistemas y usuarios.</p>
  <div class="max-w-xl mx-auto">
    <?php renderImage('u2_t5_isometric.webp', 'Imagen de macrovector.', 'https://www.freepik.es/vector-gratis/ilustracion-isometrica-seguridad-cibernetica_13749372.htm#query=virus%20computadora&position=1&from_view=search&track=ais', 'Freepik,') ?>
  </div>
  <h3>Definición de conceptos:</h3>
  <ul class="ul-disc">
    <li>
      <h4>Vulnerabilidad</h4>
      <p>Una vulnerabilidad es una debilidad o fallo en un software o sistema operativo que puede ser explotada por una amenaza. Estas debilidades pueden ser causadas por errores de programación, configuraciones inseguras o falta de actualizaciones, lo que deja abiertas puertas para ataques.</p>
    </li>
    <li>
      <h4>Amenaza</h4>
      <p>Una amenaza, por otro lado, es cualquier entidad o acción que tiene el potencial de explotar una vulnerabilidad y causar daño a un sistema o usuario. Las amenazas pueden ser malwares, hackers, virus, o incluso errores humanos como el phishing.</p>
    </li>
  </ul>
  <h3>Ejemplos de vulnerabilidades y amenazas</h3>
  <ul class="ul-disc">
    <li>
      <h4>Ejemplo de vulnerabilidad</h4>
      <p>Imagina un software de una red social que no valida adecuadamente las contraseñas de los usuarios. Un atacante podría intentar iniciar sesión con contraseñas aleatorias y, debido a la falta de validación, el software podría permitir el acceso sin necesidad de la contraseña correcta.</p>
    </li>
    <li>
      <h4>Ejemplo de amenaza</h4>
      <p>En el ejemplo anterior, un atacante que intenta ingresar con contraseñas aleatorias sería considerado una amenaza. También podríamos mencionar virus informáticos que se replican y propagan de un sistema a otro, dañando archivos y causando pérdida de datos.</p>
    </li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
