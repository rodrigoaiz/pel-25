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

    <h2>Discriminante \(b^2 - 4ac\) y naturaleza de las raíces</h2>

    <p class="max-w-full">En la fórmula general para resolver ecuaciones cuadráticas el termino contenido dentro del valor del radical \(b^2 -4ac\) recibe el nombre de discriminante, este valor nos permite determinar si las raíces se encuentran en lo números reales o si son de carácter imaginario (números imaginarios \(i\)):</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center mb-4">
        <div>
            <ul class="ul-disc">
                <li>En la fórmula general para resolver ecuaciones cuadráticas el termino contenido dentro del valor del radical \(b^2 -4ac\) recibe el nombre de discriminante, este valor nos permite determinar si las raíces se encuentran en lo números reales o si son de carácter imaginario (números imaginarios \(i\)):
                </li>
                <li>Si el valor del discriminante es igual a cero \(b^2 -4ac=0\), las raíces son reales e iguales y su valor estará determinado por: \(x=-\frac{b}{2a}\)</li>
                <li>Si el valor del discriminante es menor que cero \(b^2 -4ac<0\), las raíces serán complejas (dentro de los números imaginarios)</li>
            </ul>

    <p>Procederemos a ver ejemplos del discriminante aplicado en las ecuaciones.</p>
        </div>
        <div class="m-auto">
        <?php
        renderImage('u1_t2_pin.webp', 'Imagen de Doug Coldwell.', 'https://commons.wikimedia.org/wiki/File:Safety_pin_patent_4.jpg', 'Wikimedia Commons.', true);
        ?>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
        <div class="bg-secondary/50 px-5 py-5 mx-auto">
        <h4 class="m-0">Ejemplo 1</h4>
        <p>Determina las raíces de la ecuación \(36x^2-60x+25=0\)</p>
            <p>Sustituyendo los valores en la fórmula general</p>
            <p>$$x=\frac{-(-60)\pm\sqrt{(-60)^2 -4(36)(25)}}{2(36)}$$</p>
            <p>Analizando el valor del discriminante obtenemos que este es:</p>
            <p>$$\sqrt{(-60)^2 -4(36)(25)}= \sqrt{3600-3600}= \sqrt{0}=0$$</p>
            <p>Debido a que el valor del discriminante es igual a cero \((b^2-4ac=0)\) el valor de nuestras dos raíces es
                el mismo </p>
            <p>$$x=\frac{-(-60)\pm\sqrt{3600-3600}}{72}$$</p>
            <p>$$x=\frac{60\pm\sqrt{0}}{72}$$</p>
            <p>$$x=\frac{60}{72}=\frac{5}{6}$$</p>
            <p>Como podemos observar la fórmula general se reduce a los valores de \(x=-\frac{b}{2a}\) el cual sería
                expresado como</p>
            <p>$$x=-\frac{60}{2(36)}= \frac{60}{72}=\frac{5}{6}$$</p>
        </div>
        <div class="bg-secondary/50 px-5 py-5 mx-auto">
        <h4 class="m-0">Ejemplo 2</h4>
        <p>Determina las raíces de la ecuación \(4x^2-8x+7=0\)</p>
            <p>Sustituyendo los valores en la fórmula general</p>
            <p>$$x=\frac{-(-8)\pm\sqrt{(-8)^2 -4(4)(7)}}{2(4)}$$</p>
            <p>Analizando el valor del discriminante obtenemos que este es:</p>
            <p>$$\sqrt{(-8)^2 -4(4)(7)}= \sqrt{64-112}= \sqrt{-48}$$</p>
            <p>Debido a que el valor del discriminante es menor a cero \((b^2-4ac<0)\), el valor de nuestras raíces no se encuentra en los números reales, por lo que nuestra solución solo queda indicada de la siguiente forma:</p>
            <p>$$x=\frac{8\pm\sqrt{64-112}}{8}$$</p>
            <p>$$x=\frac{8\pm\sqrt{48}}{8}$$</p>
        </div>
    </div>

    <div class="bg-secondary/50 px-5 py-5 mx-auto">
        <h4 class="m-0">Ejemplo 3</h4>
        <p>Determina las raíces de la ecuación \(x^2+4x-5=0\)</p>
        <p>Sustituyendo los valores en la fórmula general</p>
        <p>$$x=\frac{-(-4)\pm\sqrt{(4)^2 -4(1)(-5)}}{2(1)}$$</p>
        <p>Analizando el valor del discriminante obtenemos que este es:</p>
        <p>$$\sqrt{(4)^2 -4(1)(-5)}= \sqrt{16+20}= \sqrt{36} =6$$</p>
        <p>Debido a que el valor del discriminante es mayor que cero \((b^2 -4ac>0)\), obtendremos dos valores diferentes para las raíces </p>
        <p>$$x=\frac{-4\pm\sqrt{16+20}}{2}$$</p>
        <p>$$x=\frac{-4\pm\sqrt{36}}{2}$$</p>
        <p>$$x=\frac{-4\pm6}{2}$$</p>
        <p>$$x_1 =\frac{-4+6}{2}=\frac{2}{2}=1 ; x_2 =\frac{-4-6}{2}=-\frac{10}{2}=-5$$</p>
        </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>