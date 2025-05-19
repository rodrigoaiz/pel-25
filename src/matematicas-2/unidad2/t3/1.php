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

  <p>En este aprendizaje trabajaremos con las intersecciones del eje “\(x\)” (raíces).</p>
  <p>Retomemos el problema del aprendizaje anterior.</p>
  <p>Tenemos \(y=4x^2+8x+5\)</p>
  <p>Obtuvimos la gráfica</p>

  <?php
  renderImage('u2t3_img_grafica_1.webp', '', '', '', true);
  ?>

  <p>En donde se indicó las coordenadas del vértice, que el parámetro “\(a>0\)” nos indicaba que abrían las ramas de la parábola hacia arriba, el eje de simetría $x=-1$, la intercepción con el eje “\(y\)” que es en el punto (0,5), y por último que no había intercepción con el eje \(x\).</p>
  <p>Si, recuerdas de tus clases de Matemáticas 1, para obtener las intersecciones con el eje x debemos igualar “\(y\)” a cero.</p>
  <p>Por lo tanto, tenemos</p>
  <p>\(0=4x^2+8x+5\)</p>
            <p>Al resolver la ecuación, por medio de la fórmula general, recuerdas, la estudiaste en la anterior unidad.
            </p>
            <p>\(x= \frac{-8\pm\sqrt{{8^2 -4(4)(5)}}}{2(4)}\)</p>
            <p>\(x= \frac{-8\pm\sqrt{64-80}}{8}\)</p>
            <p>\(x= \frac{-8\pm\sqrt{-16}}{8}\)</p>
            <p>Tenemos la raíz cuadrada de un número negativo.</p>
            <p>Por lo que pertenece al conjunto de números complejos o imaginarios.</p>
            <p>Tenemos raíces complejas, por lo tanto, no existe intersección de la curva con el eje “\(x\)“.</p>
            <p>Al observar la gráfica, vemos que no hay intersección con el eje “\(x\)” es decir que no hay raíces en el
                conjunto de los números reales.</p>
            <p>Éstas no se pueden graficar en el sistema de coordenadas cartesiano que estamos utilizando, en este
                sistema sólo se grafican pares ordenados pertenecientes al conjunto de los números reales.</p>
            <p>Ahora estudiemos otro caso tenemos la función</p>
            <p>\(y= -4 (x+\frac{3}{8})^2 +\frac{676}{64}\)</p>
            <p>Por lo que el vértice es \(V(\frac{3}{8} , \frac{676}{64}) , V (0.375, 10.56)\)</p>
            <p>Como \(a<0\) las ramas de la parábola abren hacia abajo</p>
                    <p>Intersecciones con eje “\(y\)”</p>
                    <p>Hacemos \(x=0\)</p>
                    <p>\(y=-4(0)^2 +3(0) +10\)</p>
                    <p>\(y=10\)</p>
                    <p>Por lo tanto, la intercepción es (0,10)</p>
                    <p>Intersecciones con el eje \(x\) (recuerda las raíces de la función)</p>
                    <p>Hacemos \(y=0\)</p>
                    <p>\(0=-4x^2 + 3x +10\)</p>
                    <p>Resolvamos por fórmula general</p>
                    <p>A=-4</p>
                    <p>B= 3</p>
                    <p>C=10</p>
                    <p>\(x= \frac{-3\pm\sqrt{3^2 -4(-4)(10)}}{2(-4)}\)</p>
                    <p>\(x=\frac{-3\pm\sqrt{9+160}}{-8}\)</p>
                    <p>\(x=\frac{-3x\pm\sqrt{169}}{-8}\)</p>
                    <p>\(x=\frac{-3\pm13}{-8}\)</p>
                    <p>\(x_1=\frac{-3+13}{-8} = \frac{-10}{8} = \frac{-5}{4}\)</p>
                    <p>\(x_2=\frac{-3-13}{-8} = \frac{-16}{-8} = 2\)</p>
                    <p>Comprobemos mediante el bosquejo de la gráfica, que las intersecciones son (-5/4,0) y (2,0) con
                        el eje “\(x\)” que son las raíces.</p>

    <?php
    renderImage('u2t3_img_grafica_2.webp', '', '', '', true);
    ?>

                    <p>Siguiente ejemplo:</p>
                    <p>\(y=4(x-\frac{1}{2})^2\)</p>
                    <p>Como:</p>
                    <p>\(a>0\)</p>
                    <p>las ramas de la parábola abren hacia arriba</p>
                    <p>El vértice está en \(v(\frac{1}{2},0), v(0.5,0)\)</p>
                    <p>Las intersecciones con el eje \(y\)</p>
                    <p>\(x=0\)</p>
                    <p>\(y=4(0)^2 -4(0)+1\)</p>
                    <p>\(y=1\)</p>
                    <p>\((0,1)\)</p>
                    <p>Intercepción con el eje \(x\)</p>
                    <p>\(0=4(x-\frac{1}{2})^2\)</p>
                    <p>\(0=4(x-\frac{1}{2})^2\)</p>
                    <p>\(\frac{0}{4}= (x-\frac{1}{2})^2\)</p>
                    <p>\(0=(x-\frac{1}{2})^2\)</p>
                    <p>\(\sqrt{0} = \sqrt{(x-\frac{1}{2})^2}\)</p>
                    <p>\(0=x-\frac{1}{2}\)</p>
                    <p>\(x=\frac{1}{2}\)</p>
                    <p>\((\frac{1}{2},0)\)</p>
                    <p>es la intersección con el eje “\(x\)” o raíces.</p>

        <?php ob_start(); ?>
        <p>Revisa las siguientes tarjetas para consolidar tus aprendizajes.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a7', "Raíces", $ActividadContent);
        ?>

<p>Como pudiste observar hay tres tipos de raíces en una función cuadrática</p>
                    <p>Primer caso. Dos raíces complejas, por lo tanto, no hay intercepción con el eje de las \(x\).</p>
                    <p>Segundo caso. Dos raíces diferentes reales, dos intercepciones con el eje de las \(x\).</p>
                    <p>Tercer caso. Dos raíces reales iguales solo hay una intercepción con el eje de las \(x\).</p>
                    <p>Recuerda esto lo analizaste en la anterior unidad con el discriminante </p>
                    <p>Si</p>
                    <p>\(b^2 -4ac <0\), no intercepta al eje x, las dos raíces pertenecen al conjunto de los números
                            complejos</p>
                            <p>\(b^2 -4ac >0\), intercepta al eje x en dos diferentes pares ordenados, tiene dos
                                diferentes raíces pertenecen al conjunto de los números reales </p>
                            <p>\(b^2 -4ac=0\), intercepta al eje x en un solo punto \(x_1 =x_2\) y son raíces en el conjunto
                                de los números reales</p>
                            <p>Realiza el siguiente ejercicio:</p>
                            <p>La función \(y=5x^2 +3x\)</p>
                            <p>Que expresada la función en la forma estándar es \(y=5(x+\frac{3}{10})^2 -\frac{45}{100}\)
                            </p>
                            <p>Escribe su vértice</p>
                            <p>\(v(-\frac{3}{10}, -\frac{45}{100})\)</p>
                            <p>Como el parámetro “\(a\)” es mayor a cero las ramas de la parábola abren hacia arriba.</p>
                            <p>Obtén las intersecciones con el eje “\(y\)” y el eje “\(x\)”</p>
                            <p>Para la intersección con el eje “\(y\)”, tenemos \(x=0\)</p>
                            <ol class="ol-number">
                                <li>\(y=5(0)^2+3(0)\)<p>Intercepta al eje “\(y\)” en (0,0) </p>
                                </li>
                                <li>Para la intersección con el eje “\(x\)”, tenemos \(Y=0\)<p>\(0=5x^2+3x\)</p>
                                    <p>resolviendo por factorización </p>
                                    <p>\(0=x(5x+3)\)</p>
                                    <p>\(x_1=0\)</p>
                                    <p>\(5x+3=0\)</p>
                                    <p>\(x_2 = \frac{-3}{5}\)</p>
                                    <p>Por tanto, las raíces de la función son: \(0 y -\frac{3}{5}\)</p>
                                    <p>(0, 0) y \((-\frac{3}{5}, 0)\)</p>
                                </li>
                            </ol>
                            <p>Realiza el bosquejo de la gráfica de la función tu cuaderno y verifica que el eje de
                                simetría es \(x=-3/10\)</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>