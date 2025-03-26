<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Características y riesgos del uso de software</h2>
  <h3>Introducción</h3>
  <p>Para comenzar te explicamos brevemente cada uno de los aspectos a tratar en este tema:</p>
  <ol class="ol-number">
    <li>
      <h4>Propiedad y licencia</h4>
      <p>La propiedad de un software se refiere a los derechos legales y de propiedad intelectual asociados con el programa. En general, el software se considera una obra protegida por derechos de autor, lo que significa que el creador o titular de los derechos tiene el control exclusivo sobre su reproducción, distribución y modificación. Sin embargo, los creadores pueden optar por otorgar licencias para permitir el uso y la distribución de su software bajo ciertas condiciones.</p>
    </li>
    <li>
      <h4>Distribución</h4>
      <p>La distribución de software se refiere a la forma en que se comparte o entrega el programa a los usuarios. Puede haber diferentes modelos de distribución, como software de código cerrado y software de código abierto. En el software de código cerrado, también conocido como software propietario, los usuarios obtienen una licencia para usar el software, pero no tienen acceso al código fuente y no pueden modificarlo. En el software de código abierto, el código fuente está disponible para que los usuarios lo examinen, modifiquen y distribuyan de acuerdo con los términos de una licencia de código abierto específica.</p>
    </li>
    <li>
      <h4>Libertad de uso</h4>
      <p>La libertad de uso del software se refiere a la capacidad de los usuarios para utilizar, modificar y distribuir el software de acuerdo con sus necesidades y preferencias. Esta característica está estrechamente relacionada con el software de código abierto y las licencias de software libre, como la Licencia Pública General de GNU (GPL) o la Licencia MIT. Estas licencias otorgan a los usuarios derechos adicionales, como el derecho a acceder al código fuente, modificarlo y distribuir versiones modificadas del software.</p>
    </li>
  </ol>
  <?php renderImageComponent('u2_t5_computadora_portatil.webp','justify-center', 'Imagen de DilokaStudio.', 'https://www.freepik.es/foto-gratis/mano-usando-computadora-portatil-pantalla-virtual-documento-aprobar-linea-concepto-gestion-erp-garantia-calidad-papel_24755711.htm', 'Freepik.'); ?> <p>Es importante tener en cuenta que las características de propiedad y licencia, distribución y libertad de uso del software pueden variar según el tipo de software y las licencias asociadas. Siempre es recomendable revisar las condiciones específicas establecidas en la licencia de un software en particular para entender los derechos y restricciones asociados con su uso y distribución.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
