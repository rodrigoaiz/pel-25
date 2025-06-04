<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
<p>Sigamos utilizando el método de completar un trinomio cuadrado perfecto para obtener la forma estándar
                \(y= a(x-h)^2 +k\), donde (h,k) es el vértice.</p>
            <p>Tenemos la función</p>
            <p>\(y=x^2 +4x -2\)</p>
            <p>\(y=(x^2 +4x)-2\)</p>
            <p>\(y=(x^2 +4x +(2)^2 -(2)^2)-2\)</p>
            <p>\(y=(x^2+4x ^(2)^2) -2-(2)^2\)</p>
            <p>\(y=(x+2)^2 -2-(2)^2\)</p>
            <p>\(y=(x+2)^2 -2 -4 \)</p>
            <p>\(y=(x+2)^2-6\)</p>
            <p>Podemos determinar el vértice \(v (-2,-6)\)</p>
            <p>Para determinar los ceros o raíces hacemos y= 0</p>
            <p>Tenemos </p>
            <p>\(0=(x+2)^2-6\)</p>
            <p>\(6=(x+2)^2\)</p>
            <p>\(\sqrt{6}=\sqrt{(x+2)^2}\)</p>
            <p>\(\pm\sqrt{6}-2=x\)</p>
            <p>Por lo tanto, los ceros o raíces de la función son:</p>
            <p>\(x_1 =\sqrt{6}-2 x_2=-\sqrt{6}-2\)</p>
            <p>Otro ejercicio</p>
            <p>Sea</p>
            <p>\(y=x^2 -5x +4\)</p>
            <p>\(y=(x^2-5x)+4\)</p>
            <p>\(y=(x^2-5x+(\frac{5}{2})^2-(\frac{5}{2})^2) +4\)</p>
            <p>\(y=(x-\frac{5}{2})^2 +4- (\frac{5}{2})^2\)</p>
            <p>\(y=(x-\frac{5}{2})^2 +4 -\frac{25}{4}\)</p>
            <p>\(y=(x-\frac{5}{2})^2+\frac{16}{4}-\frac{25}{4}\)</p>
            <p>\(y=(x-\frac{5}{2})^2-\frac{9}{4}\)</p>
            <p>Podemos determinar el vértice \(V (\frac{5}{2}, \frac{-9}{4})\)</p>
            <p>Cuando \(y= 0\)</p>
            <p>Tenemos </p>
            <p>\(0=(x-\frac{5}{2})^2-\frac{9}{4}\)</p>
            <p>\(\frac{9}{4}=(x-\frac{5}{2})^2\)</p>
            <p>\(\sqrt{\frac{9}{4}}=\sqrt{(x-\frac{5}{4})^2}\)</p>
            <p>\(\pm\frac{3}{2}=x-\frac{5}{2}\)</p>
            <p>\(\pm\frac{3}{2}+\frac{5}{2}=x\)</p>
            <p>Por lo tanto los ceros o raíces de la función son:</p>
            <p>\(x_1 =4 x_2=1\)</p>
            <p>(4,0) y (1,0) </p>
            <p>Otro ejemplo</p>
            <p>\(y= -x^2-3x-4\)</p>
            <p>\(y=-(x^2+3 x)-4\)</p>
            <p>\(y=-(x^2 +3x + (\frac{3}{2})^2)-(\frac{3}{2})^2)) -4\)</p>
            <p>\(y=-(x+\frac{3}{2})^2-4-(\frac{3}{2})^2\)</p>
            <p>\(y=-(x-\frac{5}{2})^2-4-\frac{9}{4}\)</p>
            <p>\(y=-(x-\frac{5}{2})^2 -\frac{16}{4}-\frac{9}{4}\)</p>
            <p>\(y=-(x-\frac{5}{2})^2-\frac{25}{4}\)</p>
            <p>Podemos determinar el vértice \(v(5/2, -25/4)\)</p>
            <p>También que las ramas de las parábolas abren abajo porque el parámetro “a”= -1</p>
            <p>También que las ramas de las parábolas abren abajo porque el parámetro “a”= -1</p>
            <p>Determina los ceros o raíces de la función \(y=-(x-\frac{5}{2})^2 - \frac{25}{4}\)</p>

    <div class="max-w-3xl mx-auto">
          <?php
          $accordionItems1 = [
            [
              'title' => 'Respuesta',
              'content' => '<ul class="ul-disc">
                               <li>Determina los ceros o raíces de la función <strong>\(y=-(x-rac{5}{2})^2 -rac{25}{4}\)</strong></li>
                               <p>Son raíces complejas</p>
                            </ul>'
            ]
          ];
          renderAccordion($accordionItems1, 'primero-', false);
          ?>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>