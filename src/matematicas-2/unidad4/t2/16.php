<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
            <h3>Problemas</h3>
            <p>Los temas revisados en esta unidad tienen aplicaciones diversas en diferentes campos.</p>
            <p>A continuación, revisaremos dos ejemplos de situaciones problemáticas donde una de las formas de resolver
                es utilizando alguno de los conceptos revisados. Es importante que tomes en cuenta que no hay una
                "fórmula mágica" que te sirva absolutamente en todos los casos para resolver los problemas, sino que
                depende de tu imaginación y conocimientos el cómo abordarás cada problema.</p>
            <p>Para estos temas, no debes olvidar que trabajamos con triángulos y, en específico para el Teorema de
                Pitágoras, con triángulos rectángulos. Sin embargo, esto no limita los lugares donde puedes aplicarlos,
                se comentó casi al principio de la unidad que puedes dividir muchas figuras en triángulos para poder
                trabajar con ellas más fácilmente.</p>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
            <h4>Problema 1</h4>
            <p>Para cierto instrumento utilizado en ortopedia, se fabricará una caja cúbica de cristal que mide 50 cm de
                lado a la que se colocará por dentro un espejo que apoye un extremo en una de las aristas inferiores de
                la caja y el otro a 15 cm del borde superior contrario, paralelo a la arista del cubo, de modo que queda
                inclinado, como se muestra en la figura.</p>
            <p>¿Qué medidas deberá tener el espejo?</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/u4t2_img_cubo1.webp', '', '', '');
        ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
<h4>Solución Problema 1</h4>

                            <p>Consideremos los datos:</p>
                            <p>Cada arista del cubo mide 50cm</p>
                            <p>El espejo se apoya a 15 cm del borde superior.</p>
                            <p>El espejo tiene forma de rectángulo.</p>
                            <p>Uno de los lados del espejo, el inferior, debe medir 50 cm, por estar apoyado en una
                                arista del cubo.</p>
                            <p>Por ser rectángulo, el lado recargado en una pared del cubo también mide 50 cm.</p>
                            <p>Y lo que pide el problema:</p>
                            <p>Las dimensiones del espejo, de las cuales ya conocemos una.</p>
                            <p>Para conocer la que falta, podemos observar que se forma un triángulo rectángulo en la
                                cara frontal del cubo, según la figura.</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/u4t2_img_cubo1b.webp', 'Problema 1a', '', '');
        ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
                            <p>Para dicho triángulo, un lado del espejo es la hipotenusa, y ya conocemos la medida de
                                uno de los catetos. Para obtener el otro, basta con restar:</p>
                            <p>\(50-15=35\)</p>
                            <p>Ya que quitamos los 15 cm de la parte superior, entonces:</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/u4t2_img_cubo1b.webp', 'Problema 1b', '', '');
        ?>
      </div>
</div>

                            <p>Observa que \(x\) representa la medida del espejo que no conocemos.</p>
                            <p>Podemos utilizar el Teorema de Pitágoras:</p>
                            <p>\(50^2+35^2=x^2\)</p>
                            <p>Despejando \(x\) y simplificando</p>
                            <p>\(x^2=50^2+35^2\)</p>
                            <p>\(x=\sqrt{50^2+35^2}\)</p>
                            <p>\(x=\sqrt{2500+1225}\)</p>
                            <p>\(x=\sqrt{3725}\)</p>
                            <p>\(x\approx 61.0328\)</p>
                            <p>Nota: el símbolo \(\approx\) significa "aproximadamente igual a"</p>
                            <p>Entonces, las medidas del espejo deben ser 50 cm por, aproximadamente, 61 cm.</p>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>