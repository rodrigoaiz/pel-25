<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
<h3>Ejercicio</h3>
            <p>$$y=-4x^2+3x+10$$</p>
            <p>$$y=-4(x^2+\frac{3}{4}x)+10$$</p>
            <p>$$y=-4(x^2+\frac{3}{4}x +(\frac{3}{8})^2 -(\frac{3}{8})^2)+10$$</p>
            <p>$$y=-4(x^2+\frac{3}{4}x+(\frac{3}{8})^2)+10+4(\frac{3}{8})^2$$</p>
            <p>$$y=-4(x+\frac{3}{8})^2 +10+4(\frac{3}{8})^2$$</p>
            <p>$$y=-4(x+\frac{3}{8})^2 +10+\frac{36}{64}$$</p>
            <p>$$y=-4(x+\frac{3}{8})^2+\frac{676}{64}$$</p>
            <p>Por lo que el vértice es \(V(\frac{3}{8},\frac{631}{64}), v(0.375,10.56)\)</p>
            <p>Como \(a<0\) las ramas de la parábola abren hacia abajo.</p>
                    <p>Intersecciones con eje “y”</p>
                    <p>$$x=0$$</p>
                    <p>$$y=-4(0)^2 +3(0)+10$$</p>
                    <p>$$y=10$$</p>
                    <p>Por lo tanto, la intercepción (0,10)</p>
                    <p>Intersecciones con el eje \(x\) (recuerda las raíces de la función</p>
                    <p>$$y=0$$</p>
                    <p>$$0=-4x^2+3x+10$$</p>
                    <p>Resolvamos por fórmula general</p>
                    <p>$$x=\frac{-3\pm\sqrt{3^2 -4(-4)(10)}}{2(-4)}$$</p>
                    <p>$$x=\frac{-3\pm\sqrt{9+160}}{-8}$$</p>
                    <p>$$x=\frac{-3\pm\sqrt{169}}{-8}$$</p>
                    <p>$$x=\frac{-3\pm13}{-8}$$</p>
                    <p>$$x_1= \frac{-3+13}{-8}= \frac{-10}{8}=\frac{-5}{4}$$</p>
                    <p>$$x_2 =\frac{-3-13}{-8}=\frac{-16}{-8}=2$$</p>
                    <p>Comprobemos mediante el bosquejo de la gráfica,</p>

                    <?php
                        renderImage('u2t4_img_grafica1.webp', '', '', '', true);
                    ?>

        <p>Consolida aprendizaje sobre eje de simetría del ejercicio anterior \(y=-4x^2 +3x+10\)</p>

        <?php ob_start(); ?>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a10', "Eje de simetría", $ActividadContent);
        ?>

                    <p>Siguiente ejemplo</p>
                    <p>$$y=4x^2 -4x +1$$</p>
                    <p>Factoriza la función</p>
                    <p>$$y=4(x^2 -x)+1$$</p>
                    <p>Empieza a completar el trinomio cuadrado perfecto</p>
                    <p>$$y=4x^2 -x+ (\frac{1}{2})^2 -(\frac{1}{2})^2)+1$$</p>
                    <p>$$y=4(x^2-x+(\frac{1}{2})^2)+1-4(\frac{1}{2})^2$$</p>
                    <p>$$y=4(x^2 -x+(\frac{1}{2})^2)+1-4(\frac{1}{2})^2$$</p>
                    <p>$$y=4(x-\frac{1}{2})^2 +1-(4)\frac{1}{4}$$</p>
                    <p>$$y=4(x-\frac{1}{2})^2+1-1$$</p>
                    <p>$$y=4(x-\frac{1}{2})^2$$</p>
                    <p>Como:</p>
                    <p>$$a>0$$</p>
                    <p>las ramas de la parábola abren hacia arriba</p>
                    <p>El vértice está en \(v(\frac{1}{2},0) v(0.5,0)\)</p>
                    <p>Las intersecciones con el eje y</p>
                    <p>$$x=0$$</p>
                    <p>$$y=4(0)^2 -4(0)+1$$</p>
                    <p>$$Y=1$$</p>
                    <p>(0,1)</p>
                    <p>Intercepción con el eje x</p>
                    <p>$$0=4(x-\frac{1}{2})^2$$</p>
                    <p>$$0=4(x-\frac{1}{2})^2$$</p>
                    <p>$$\frac{2}{4}=(x-\frac{1}{2})^2$$</p>
                    <p>$$0=(x-\frac{1}{2})^2$$</p>
                    <p>$$\sqrt{0}= \sqrt{(x-\frac{1}{2})^2}$$</p>
                    <p>$$0=x-\frac{1}{2}$$</p>
                    <p>$$x=\frac{1}{2}$$</p>
                    <p>$$(\frac{1}{2},0)$$</p>
                    <p>El eje de simetría es \(x=\frac{1}{2}\)</p>

      <?php ob_start(); ?>
        <p>Práctica todo lo aprendido en la siguiente actividad.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a11', "Relación de funciones cuadráticas", $ActividadContent);
      ?>

      <p>Determina a partir de la siguiente gráfica la concavidad positiva o negativa, el vértice es un punto máximo o mínimo y su eje de simetría.</p>

      <?php
          renderImage('u2t4_img_grafica2.webp', '', '', '', true);
      ?>

    <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<ul class="ul-disc">
                                  <li>Determina a partir de la siguiente gráfica la concavidad positiva o negativa, el
                                        vértice es un punto máximo o mínimo y su eje de simetría: <strong>Concavidad
                                            positiva, el vértice es un punto mínimo mínimo, eje de simetría
                                            \(x=1\).</strong></li>
                                </ul>'
                ]
              ];
              renderAccordion($accordionItems1, 'primero-', false);
              ?>
    </div>

    <p>En este aprendizaje consolidaste el método de completar el trinomio cuadrado perfecto, además de que identificas los parámetros de la función cuadrática en el siguiente aprendizaje trabajarás los términos de <strong> concavidad, vértice, máximo, mínimo y simetría.</strong></p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>