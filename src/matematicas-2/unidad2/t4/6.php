<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
    <p>A partir de la gráfica contesta cuál es su expresión algebraica.</p>

    <?php
            renderImage('u2t4_img_grafica12.webp', '', '', '', true);
    ?>

        <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<ul class="ul-disc">
                                  <li>A partir de la gráfica contesta cuál es su expresión algebraica <strong>\(y=(x-2)^2\).</strong></li>
                                </ul>'
                ]
              ];
              renderAccordion($accordionItems1, 'primero-', false);
              ?>
    </div>

    <p>Ahora realicemos modificaciones en los dos parámetros \(h y k\), sin tabular realiza el bosquejo de la gráfica de \(y= (x+1)^2-4\), es una unidad a la izquierda partiendo del punto (0,0) y cuatro unidades hacia abajo partiendo de (0,0).</p>

    <?php
            renderImage('u2t4_img_grafica13.webp', '', '', '', true);
    ?>

            <p>El eje de simetría es \(x=-1\)</p>
            <p>La concavidad es positiva</p>
            <p>El vértice (-1,-4)</p>
            <p>Las raíces</p>
            <p>\(y= (x+1)^2 -4\)</p>
            <p>$$y=0$$</p>
            <p>$$0= (x+1)^2 -4$$</p>
            <p>$$4= (x+1)^2$$</p>
            <p>$$\pm2 = x+1$$</p>
            <p>$$1=x$$</p>
            <p>$$-3=x$$</p>
            <p>El vértice es un punto mínimo. </p>

    <?php ob_start(); ?>
        <p>Comparte con tus compañeros tus conocimientos en el siguiente foro.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a14', "Desplazamientos", $ActividadContent);
    ?>

            <p>Vamos ahora a obtener \(y= ax^2+bx+c, a \neq 0 b y c\) constantes, a partir de \(y= a(x-h)^2 +k, a \neq 0\).
            </p>
            <p>Si tenemos la función \(y=-5(x-1)^2+3\) , desarrolla el binomio cuadrado y obtén la función de la forma \(
                y=ax^2+bx+c\)</p>
            <p>$$y=-5(x^2 -2x+1)+3$$</p>
            <p>$$y=-5x^2+10x –5+3$$</p>
            <p>$$y=-5x^2+10x –2$$</p>
            <p>Si tenemos la función \(y=4(x+2)^2-1\), desarrolla el binomio cuadrado y obtén la función de la forma
                \(F(x)=ax^2+bx+c\)</p>
            <p>$$y=4(x^2 +4x+4)-1$$</p>
            <p>$$y=4x^2+4x +16-1$$</p>
            <p>$$y=4x^2+4x +15$$</p>
            <p>Ya que consolidamos todos los aprendizajes de la unidad pasemos a la aplicación en problemas de
                situaciones reales.</p>
                
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>