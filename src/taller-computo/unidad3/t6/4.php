<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3></h3>
  <p><strong>Las razones trigonométricas</strong> encuentran su origen en el <strong>análisis de triángulos rectángulos</strong>, donde se definen como el <strong>cociente entre dos lados</strong> específicos de dicho triángulo, relacionados con sus respectivos ángulos, este concepto es esencial para comprender las funciones trigonométricas, que se derivan mediante la aplicación de estas razones, la cual se <strong>expresa convencionalmente en radianes</strong>.</p>
  <p>En el ámbito trigonométrico, se distinguen seis clases fundamentales de funciones: <strong>seno, coseno y tangente, junto con sus inversas</strong>, el arco seno, arco coseno y arco tangente, estas funciones desempeñan un papel crucial en diversos contextos matemáticos y científicos.</p>
  <p>Además, las funciones trigonométricas se aplican en el estudio de <strong>triángulos rectángulos</strong>, que encuentran su utilidad en el <strong>análisis de polígonos</strong>, en particular, se destacan en <strong>polígonos regulares</strong>, donde la relación entre los lados y ángulos internos.</p>
  <h4>Fundamentos de Trigonometría en Triángulos Rectángulos</h4>
  <p><strong>Triángulo Rectángulo</strong>: Un <strong>triángulo con un ángulo de 90 grados</strong>, donde uno de los lados se llama "<strong>hipotenusa</strong>" (el lado opuesto al ángulo recto) y los otros dos se llaman "<strong>catetos</strong>". El <strong>cateto opuesto</strong> es el lado que está enfrente del ángulo de interés, mientras que el <strong>cateto adyacente</strong> es el lado que está al lado del ángulo, pero no es la hipotenusa.</p>
  <p>La siguiente figura representa un triángulo rectángulo y sus catetos y la hipotenusa.</p>
  <div class="max-w-lg mx-auto">
    <?php renderImage('u3_t6_triangulo.webp') ?>
  </div>
  <h4>Funciones trigonométricas:</h4>
  <ul class="ul-disc">
    <li>
      <p>Seno (\(sen \gamma)\): La razón entre la longitud del cateto opuesto al ángulo A y la longitud de la hipotenusa.</p>
      <p>$$sen \gamma = \frac{longitud\, del\, cateto \,opuesto}{longitud\, de\, la\, hipotenusa}$$</p>
    </li>
    <li>
      <p>Coseno (\(cos \gamma)\): La razón entre la longitud del cateto adyacente al ángulo A y la longitud de la hipotenusa.</p>
      <p>$$cos \gamma = \frac{longitud\, del\, cateto \,adyacente}{longitud\, de\, la\, hipotenusa}$$</p>
    </li>
    <li>
      <p>Tangente (\(tan \gamma)\): La razón entre la longitud del cateto opuesto al ángulo A y la longitud del cateto adyacente.</p>
      <p>$$tan \gamma = \frac{longitud\, del\, cateto \,opuesto}{longitud\, del\, cateto \,adyacente}$$</p>
    </li>
  </ul>
  <h4>Funciones inversas:</h4>
  <p>Las funciones inversas del seno, coseno y tangente son operaciones matemáticas que se utilizan para <strong>encontrar el ángulo</strong> correspondiente a un valor específico de seno, coseno o tangente, estas funciones se denota comúnmente como \(sen^{-1}(\gamma)\) , \(cos^{-1}(\gamma)\) y \(tan^{-1}(\gamma)\) , el argumento \(\gamma\) Es el valor de la función seno, coseno o tangente de un ángulo desconocido, <strong>la función inversa nos dará el ángulo en radianes</strong>.</p>
  <h4>Por ejemplo:</h4>
  <p>Para la siguiente función \(sen \gamma = \frac{longitud\, del\, cateto \,opuesto}{longitud\, de\, la\, hipotenusa}\), si se desea calcular el ángulo \(\gamma\) e tiene que hacer la inversa de la función seno, en la cual quedaría de la siguiente forma \(\gamma = sen \left ( \frac{longitud\, del\, cateto \,opuesto}{longitud\, de\, la\, hipotenusa}^{-1} \right )\) y de esta manera se obtendrá el ángulo, pero en radianes.</p>
  <p>Se llevará a cabo para cada una de las funciones inversas de coseno y tangente.</p>
  <p><strong>En Microsoft Excel</strong>, los ángulos ingresados en las celdas se <strong>consideran automáticamente en radianes</strong>, esto significa que si deseas calcular funciones trigonométricas como <strong>seno(), cos(), tan() y sus inversas, asegurarse de proporcionar los valores en radianes, si tienes los ángulos en grados, recuerda realizar la conversión a radianes</strong> antes de utilizar las funciones trigonométricas.</p>
  <h4>Ejercicio</h4>
  <p>Dado un triángulo rectángulo con catetos \(A B = 3 U\) , \(A C = 4 U\) y la hipotenusa \(B C = 5 U\), el objetivo es calcular las funciones trigonométricas: seno, coseno y tangente, además, se pretende hallar los ángulos \(α\) y \(β\) , los cuales serán inicialmente calculados en radianes y luego convertirlos en grados.</p>
  <p>Este ejercicio se llevará a cabo utilizando Microsoft Excel y contendrá una imagen representativa al ejercicio, además, se verificará que la suma de los ángulos interiores de un triángulo sea igual a 180 grados.</p>
  <p>Véase el siguiente video explicativo para la solución:</p>
  <?php renderVideoIframe('AzSq8r8kQhw', 'Ejercicio de Funciones trigonométricas en un triángulo rectángulo', 'max-w-xl mx-auto'); ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
