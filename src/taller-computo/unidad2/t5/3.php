<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Mapa mental: Canva</h3>
  <p>A continuación te solicitamos que realices un mapa mental en el programa en línea <a href="https://www.canva.com/" target="_blank">canva</a>, para ello sigue las instrucciones que están incluidas en el botón de Tarea. Para que sepas cómo utilizar CANVA te invitamos a revisar el siguiente video.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe('IbXNgRO7KLo', '🧠 Cómo diseñar un MAPA MENTAL en Canva [Online y GRATIS]') ?>
  </div>
  <p><strong>Nota</strong>: Recuerda que si accedes a Canva con tu cuenta institucional tienes los beneficios de Canva PRO, así que no olvides entrar con tu correo institucional UNAM.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t5_esquema.webp', 'Imagen de freepik.', 'https://www.freepik.es/vector-gratis/esquema-mano-formas-geometricas_1291460.htm#query=hacer%20mapa%20mental&position=2&from_view=search&track=ais&uuid=af991200-27e3-4ff3-a020-3969fb04c88b', 'Freepik.') ?>
  </div>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a21', "Propiedad, distribución y libertad de uso del software", $ActividadContent);
  ?>
  <h3>Conclusión</h3>
  <p>Las características de propiedad, distribución y libertad de uso del software son elementos fundamentales que definen la naturaleza y el alcance de cómo interactuamos con los programas informáticos en el mundo digital. La relación entre estas características juega un papel crucial en determinar la forma en que los usuarios, los creadores y la sociedad en general se benefician y participan en el mundo del software.</p>
  <p>La propiedad del software aborda quién tiene el control y los derechos sobre la obra, estableciendo un equilibrio entre los derechos del creador y las necesidades de los usuarios. Las licencias, como la GPL, moldean este equilibrio y pueden fomentar la colaboración y la innovación al garantizar que los usuarios tengan acceso al código fuente y puedan modificar y redistribuir el software bajo ciertas condiciones.</p>
  <p>La distribución del software aborda cómo se comparte y se pone a disposición de los usuarios. Esta característica está estrechamente relacionada con la propiedad y las licencias, ya que define las reglas que rigen cómo los usuarios pueden acceder y utilizar el software. Los modelos de código cerrado y código abierto representan dos extremos en este espectro, cada uno con sus propias implicaciones para la accesibilidad y la adaptabilidad del software.</p>
  <p>La libertad de uso es la piedra angular del software de código abierto y libre. Garantiza a los usuarios la capacidad de usar, modificar y distribuir el software de acuerdo con sus necesidades, lo que puede conducir a una mayor flexibilidad y personalización. El concepto de copyleft amplía esta libertad al garantizar que las versiones modificadas del software también se mantengan como software libre.</p>
  <p>En conjunto, estas características no solo afectan la forma en que interactuamos con el software en sí, sino que también tienen un impacto en la economía, la innovación y la cultura digital en general. Comprender estas características es esencial para tomar decisiones informadas sobre qué software utilizar, cómo compartirlo y cómo contribuir al mundo tecnológico en constante evolución.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
