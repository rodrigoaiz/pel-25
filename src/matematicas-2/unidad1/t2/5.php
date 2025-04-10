<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

    <h2>Fórmula general para resolver una ecuación cuadrática</h2>
    <h3>Deducción de la fórmula general</h3>
    <p>Hasta el momento hemos visto dos métodos para dar solución a las ecuaciones cuadráticas, pero muchas veces en estos métodos podemos tener un error algebraico si no somos cuidadosos. Cualquier ecuación cuadrática puede resolverse a través de completar el trinomio.</p>
    <p>Si nosotros aplicamos este método en la expresión \(ax^2+ bx + c = 0\) donde \(a ≠ 0\)</p>

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
        renderImage('u1_t2_gun_agra.webp', 'Imagen de Pratishkhedekar.', 'https://commons.wikimedia.org/wiki/File:Sketch_of_the_great_gun_of_Agra.jpg', 'Wikimedia Commons.');
        ?>
        </div>
  </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>