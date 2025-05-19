<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<h3>Problema 2</h3>
            <p>Van a colocar un cable de fibra óptica para que tengas servicio de internet en tu casa. El poste del que
                se conectará se encuentra a cinco metros de tu hogar y harán pasar el cable a través de un agujero en la
                pared, ubicado en el segundo piso, a cuatro metros de altura.</p>
            <p>Así que los técnicos colocan su escalera, de diez metros de longitud, separada dos metros de la base del
                poste y recargada en él, y amarran el cable un metro por encima del borde superior de la escalera.</p>
            <p>Si tienen un rollo de cable de ocho metros, ¿les alcanzará para conectarlo como desean? ¿Cuánto les
                sobraría o les faltaría?</p>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
        <h4>Solución Problema 2</h4>
            <p>Revisamos los datos, para lo cual construimos un diagrama. Necesitamos los tres objetos involucrados, tu casa, el poste y la escalera, y a partir de ellos colocamos las medidas proporcionadas:</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/problema_2.webp', 'Problema 2', '', '');
        ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
            <p>Y lo que pide el problema:</p>
            <p>La longitud del cable, para corroborar si un rollo de ocho metros es suficiente.</p>
            <p>Observa en el diagrama que no puede calcularse directamente la longitud del cable. Si  quisiéramos usar el Teorema de Pitágoras, el triángulo que necesitamos sería el marcado en azul en la siguiente figura, del cual sólo conocemos una de las medidas, la de la base, ya que suponemos que el poste es vertical.</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/problema_2a.webp', 'Problema 2a', '', '');
        ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
            <p>Sin embargo, observa que podemos imaginar otro triángulo rectángulo donde la escalera sea la hipotenusa y del cual sí conocemos dos de sus medidas. Nos es útil porque el poste forma parte de uno de los lados de ambos triángulos, así que nos sirve para calcular la longitud del otro cateto del triángulo azul.</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/problema_2b.webp', 'Problema 2b', '', '');
        ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
                            <p>Aplicamos Teorema de Pitágoras al triángulo naranja:</p>
                            <p>\(2^2+x^2=10^2\)</p>
                            <p>Despejamos el valor de \(x\)</p>
                            <p>\(x^2=10^2-2^2\)</p>
                            <p>\(x=\sqrt{10^2-2^2}\)</p>
                            <p>\(x=\sqrt{100-4}\)</p>
                            <p>\(x=\sqrt{96}\)</p>
                            <p>\(x=4\sqrt{6}\approx 9.8\)</p>
                            <p>Agregando el dato obtenido al diagrama:</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/problema_2c.webp', 'Problema 2c', '', '');
        ?>
      </div>
</div>

<div class="md:grid grid-cols-3 gap-4 items-center">
      <div class="w-4/4 mx-auto">
        <p>Ahora bien, observa que sobre el poste conocemos lo siguiente:</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/problema_2d.webp', 'Problema 2d', '', '');
        ?>
      </div>
      <div>
                            <p>Por lo que podemos obtener el valor de y restando de la altura total a la que se
                                encuentra el punto para el cable (\(9.8+1\), de lado derecho del poste), menos los cuatro
                                metros que se obtienen por la altura a la que se encuentra el otro punto sobre la casa.
                            </p>
                            <p>\(y=9.8+1-4=6.8\)</p>
                            <p>Agregamos el dato al diagrama:</p>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-4/4 mx-auto">
                            <p>Con lo que ya podemos conocer la longitud del cable, aplicando Teorema de Pitágoras al
                                triángulo azul, utilizando \(z\) para representar dicha longitud</p>
                            <p>\(5^2+6.8^2=z^2\)</p>
                            <p>Despejando \(z\)</p>
                            <p>\(z^2=5^2+6.8^2\)</p>
                            <p>\(z=\sqrt{5^2+6.8^2}\)</p>
                            <p>\(z=\sqrt{25+46.24}\)</p>
                            <p>\(z=\sqrt{71.24}\)</p>
                            <p>\(z\approx 8.44\)</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/problema_2e.webp', 'Problema 2e', '', '');
        ?>
      </div>
</div>

                            <p>Por tanto, concluimos que el rollo de ocho metros no es suficiente para colocar el cable
                                como se desea, faltarían aproximadamente 44 cm.</p>

<?php ob_start(); ?>
    <p>Lee atentamente cada uno de los siguientes problemas. A continuación, identifica dónde puedes construir un triángulo rectángulo y cuáles serían sus catetos y su hipotenusa, es recomendable que enlistes los datos, lo que pide el problema y dibujes un diagrama en tu cuaderno. Después, resuelve los problemas y señala la respuesta correcta. Toma en cuenta que los valores decimales se redondean a dos cifras.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a19', "Problemas que involucran teorema de Pitágoras", $ActividadContent);
?>

<?php ob_start(); ?>
    <p>Con esto terminamos la Unidad 4 de la asignatura de Matemáticas II, por lo que, como actividad final,
                    realizarás la siguiente evaluación.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a20', "Cuestionario final unidad 4", $ActividadContent);
?>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>