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

    <h2>Fórmula general para resolver una ecuación cuadrática</h2>
    <h3>Deducción de la fórmula general</h3>
    <p class="max-w-full">Hasta el momento hemos visto dos métodos para dar solución a las ecuaciones cuadráticas, pero muchas veces en estos métodos podemos tener un error algebraico si no somos cuidadosos. Cualquier ecuación cuadrática puede resolverse a través de completar el trinomio.</p>
    <p class="max-w-full">Si nosotros aplicamos este método en la expresión \(ax^2+ bx + c = 0\) donde \(a ≠ 0\)</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$ax^2+ bx + c = 0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Primero necesitamos dividir toda la ecuación entre el valor de $a$ para que el término
                        cuadrático quede sin coeficiente, por lo que esto quedaría.</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$\frac{ax^2+bx+c=0}{a}$$</p>
                        <p>$$x^2 + \frac{bx}{a}+\frac{c}{a}=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Colocaremos el término independiente en el segundo miembro de la ecuación, recuerda que
                        debido a esto cambiará de signo.</p>
                    </th>
                    <td class="px-6 py-2">
                      <p>$$x^2 + \frac{bx}{a}=-\frac{c}{a}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Procederemos a completar el trinomio cuadrado perfecto, como hasta el momento lo hemos
                            hecho \((b/2)^2\), pero debido a que no estamos utilizando valores numéricos sino letras la
                            expresión quedaría:</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x^2 + \frac{bx}{a}+(\frac{b}{2a})^2= (\frac{b}{2a})^2 - \frac{c}{a}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                     <p>Desarrollando el cuadrado obtenemos:</p>
                    </th>
                    <td class="px-6 py-2">
                     <p>$$x^2 + \frac{bx}{a}\frac{b^2}{4a^2}= \frac{b^2}{4a^2} - \frac{c}{a}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Simplificando obtenemos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(x+ \frac{b}{2a} )^2 = \frac{b^2 - 4ac}{4a^2}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Si procedemos a despejar \(x\) del primer miembro de la ecuación obtenemos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x+ \frac{b}{2a} = \pm \sqrt{ \frac{b^2-4ac}{4a^2}}$$</p>
                        <p>$$x+ \frac{b}{2a} = \pm \frac {\sqrt{b^2-4ac}} {2a}$$</p>
                        <p>$$x= - \frac{b}{2a} \pm \frac{ \sqrt{b^2-4ac}}{2a}$$</p>
                        <p>$$x= \frac{-b\pm \sqrt {b^2 - 4ac}}{2a}$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <p>Lo que obtenemos es la famosísima fórmula general para resolver ecuaciones cuadráticas, la cual es mucho más sencilla de aplicar para poder resolver estas ecuaciones, lo único difícil sería identificar los coeficientes y aplicarla de forma correcta.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center mb-4">
        <div>
            <p><strong>Ahora sabes del porqué de esta fórmula \(x= \frac{-b\pm \sqrt {b^2 - 4ac}}{2a}\)</strong></p>
            <p>Recuerda que al aplicar esta fórmula obtenemos dos posibles resultados ya que tenemos</p>
            <p>\(x_1= \frac{-b+ \sqrt {b^2 - 4ac}}{2a}\) y \(x_2= \frac{-b-\sqrt {b^2 - 4ac}}{2a}\)</p>
            <p>Procederemos a realizar algunos ejemplos para que comprendas la aplicación de la fórmula.</p>
        </div>
        <div class="m-auto">
        <?php
        renderImage('u1_t2_gun_agra.webp', 'Imagen de Pratishkhedekar.', 'https://commons.wikimedia.org/wiki/File:Sketch_of_the_great_gun_of_Agra.jpg', 'Wikimedia Commons.', true);
        ?>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
        <div class="bg-secondary/50 px-5 py-5 mx-auto">
        <h4 class="m-0">Ejemplo 1</h4>
        <p>Si tenemos la ecuación \(2x^2 -4x +1 = 0\), para resolver la ecuación necesitamos identificar los
                coeficientes (a, b y c) de la ecuación y estos son:</p>
            <p>$$a=2 , b=-4 , c=1$$</p>
            <p>Sustituyendo estos valores en la fórmula general obtenemos</p>
            <p>$$x= \frac{-b\pm \sqrt {b^2 - 4ac}}{2a} $$</p>
            <p>$$x= \frac{-(-4)\pm \sqrt {(-4)^2 - 4(2)(1)}}{2(1)} $$</p>
            <p>$$x= \frac{4\pm \sqrt {16 - 8}}{2} $$</p>
            <p>$$x= \frac{4\pm \sqrt {8}}{2} $$</p>
            <p>Debido a que la operación no da un valor exacto podemos dejarla expresada de esa forma o simplificarla un
                poco más, por lo que obtendremos</p>
            <p>$$x= \frac{2\pm \sqrt {2}}{2} $$</p>
        </div>
        <div class="bg-secondary/50 px-5 py-5 mx-auto">
        <h4 class="m-0">Ejemplo 2</h4>
        <p>Determina las raíces de la ecuación \(2x^2 - 3x = 0\)</p>
            <p>Identificando los coeficientes a, b y c tenemos</p>
            <p>$$a=2, b=-3 , c=0$$</p>
            <p>Sustituyendo los coeficientes en la fórmula obtenemos</p>
            <p>$$\frac{-(-3)\pm\sqrt{(-3)^2 - 4(2)(0)}}{2(2)}$$</p>
            <p>$$x= \frac{3\pm\sqrt{9-0}}{4}$$</p>
            <p>$$x=\frac{3\pm\sqrt{9}}{4}$$</p>
            <p>$$x=\frac{3\pm3}{4}$$</p>
            <p>$$x_1=\frac{3+3}{4}=\frac{6}{4}=\frac{3}{2}$$</p>
            <p>$$x_1=\frac{3-3}{4}=\frac{0}{4}=0$$</p>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
        <div class="bg-secondary/50 px-5 py-5 mx-auto">
        <h4 class="m-0">Ejemplo 3</h4>
        <p>Determina los valores de las raíces de la siguiente ecuación \(35x^2-6x+3=0\)</p>
            <p>Identificando los valores de los coeficientes a, b, c</p>
            <p>$$a=35, b=-6, c=-3$$</p>
            <p>Sustituyendo los valores en la fórmula general</p>
            <p>$$x=\frac{-(-6)\pm\sqrt{(-6)^2 -4(35)(3)}}{2(35)}$$</p>
            <p>$$x=\frac{+\pm\sqrt{36-420}}{70}$$</p>
            <p>$$x=\frac{+\pm\sqrt{384}}{70}$$</p>
            <p>Debido a que dentro del radical tenemos un valor negativo y no existen raíces de números negativos
                nuestro resultado queda expresado de esa forma.</p>
        </div>
        <div class="m-auto">
        <?php
        renderImage('u1_t2_autojektor.webp', 'Imagen de NAADAAN.', 'https://commons.wikimedia.org/wiki/File:Patent_autojektor.gif', 'Wikimedia Commons.', true, 'p-4');
        ?>
        </div>
    </div>

    <div class="bg-secondary/50 px-5 py-5 mx-auto">
        <h4 class="m-0">Ejemplo 4</h4>
        <p>Determina los valores de las raíces de la siguiente ecuación \(3x^2+4x-4=0\)</p>
            <p>Identificando los valores de a, b y c</p>
            <p>$$a=3, b=4, c=-4$$</p>
            <p>Sustituyendo los valores de los coeficientes en la fórmula general, obtenemos:</p>
            <p>$$x=\frac{-4\pm\sqrt{4^2 -4(3)(-4)}}{2(3)}$$</p>
            <p>$$x=\frac{-4\pm\sqrt{16+48}}{6}$$</p>
            <p>$$x=\frac{-4\pm\sqrt{64}}{6}$$</p>
            <p>$$x_1=\frac{-4+8}{6}=\frac{4}{6}=\frac{2}{3}$$</p>
            <p>$$x_1=\frac{-4-8}{6}=\frac{-12}{6}= -2$$</p>
        </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>