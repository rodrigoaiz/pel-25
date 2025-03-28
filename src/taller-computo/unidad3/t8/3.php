<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Funciones Lógicas de: negación, conjunción, disyunción y condicional</h3>
  <p>Son conceptos fundamentales en la lógica proposicional. A continuación, se proporciona una breve descripción de cada una de ellas:</p>
  <ul class="ul-disc">
    <li><strong>Negación:</strong> La negación es una función lógica que se utiliza para invertir el valor de verdad de una proposición. Por ejemplo, si la proposición es “Hoy es un día soleado”, su negación sería “Hoy no es un día soleado”.</li>
    <li><strong>Conjunción</strong>: La conjunción es una función lógica que se utiliza para combinar dos proposiciones en una sola. La conjunción es verdadera sólo si ambas proposiciones son verdaderas. Por ejemplo, si la proposición A es “Hoy es martes” y la proposición B es “Hoy está soleado”, la conjunción sería “Hoy es martes y está soleado”.</li>
    <li><strong>Disyunción</strong>: La disyunción es una función lógica que se utiliza para combinar dos proposiciones en una sola. La disyunción es verdadera si al menos una de las proposiciones es verdadera. Por ejemplo, si la proposición A es “Hoy es martes” y la proposición B es “Hoy está soleado”, la disyunción sería “Hoy es martes o está soleado”.</li>
    <li><strong>Condicional</strong>: El condicional es una función lógica que se utiliza para expresar una relación entre dos proposiciones. El condicional se lee como “si A, entonces B”. Si la proposición A es verdadera, entonces la proposición B también debe ser verdadera. Si la proposición A es falsa, entonces no se puede determinar el valor de verdad de la proposición B.</li>
  </ul>
  <p>A continuación, describiremos la sintaxis de las funciones lógicas que estaremos utilizando en nuestras actividades.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t8_sintaxis_funciones_logigas.webp', 'Sintaxis Funciones Lógicas.') ?>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
