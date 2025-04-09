<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
    <h3>Resolución de ecuaciones cuadráticas de la forma: \(x^2 =b\); \(ax^2 =b\); \(ax^2 +b=c\); \(ax^2 +b=0\)
    \(a(x+b)^2 +c=d\); \((x+b)(x+c)=0\)</h3>
    <p>Ahora que sabemos identificar una ecuación cuadrática procederemos a ver cómo podemos resolverla.</p>
    <p>Primero resolveremos algunas ecuaciones cuadráticas incompletas para finalmente poder resolver la
                ecuación completa.</p>
    <p>Si nos encontramos con estas formas de la ecuación (incompleta pura, ya que les falta el termino lineal),
                el procedimiento para su resolución es sencillo, lo que tenemos que hacer es despejar la <em>literal
                \(x\)</em>.</p>
    <h4>Ejemplo 1</h4>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Forma: \(x^2=b\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$x^2=9$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>
                    Para poder eliminar la potencia de la literal, necesitamos aplicar la operación inversa a la potencia, en este caso sería la raíz cuadrada, dado que la potencia es 2.</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$\sqrt{x^2} = \pm\sqrt{9}$$<p>$$x=\pm\sqrt{9}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Aplicando la raíz al valor numérico obtenemos dos posibles resultados: \(+3\) y \(-3\); recordemos que si elevamos ambos al cuadrado obtenemos lo mismo: (3)(3)=9 y (-3)(-3)=9</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x= \pm3$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        <div class="m-auto"><?php renderImage("u1_t4_proporcion.webp", "Imagen de Chiswick Chap.", "https://commons.wikimedia.org/wiki/File:Pacioli_De_Divina_Proportione_Head_Equilateral_Triangle_1509.jpg", "Wikimedia Commons."); ?>
        </div>
    </div>

    <h4>Ejemplo 2</h4>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Forma: \(ax^2 + b =0\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$2x^2 -162 = 0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Despejamos la literal \(x^2\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x^2 = \frac{162}{2}$$</p>
                        <p>$$x^2=81$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Para poder eliminar la potencia de la literal, necesitamos aplicar la operación inversa a la
                    potencia, en este caso sería la raíz cuadrada, dado que la potencia es 2.</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x= \sqrt{81}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Aplicando la raíz al valor numérico obtenemos dos posibles $+9$ y $-9$</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x= \pm9$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4>Ejemplo 3</h4>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Forma: \(ax^2=c\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$3x^2=147$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Procedemos a despejamos la literal \(x^2\)</p>
                    </th>
                    <td class="px-6 py-2">
                    <p>$$3x^2=147$$</p>
                    <p>$$x^2=\frac{147}{3}$$</p>
                    <p>$$x^2=49$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Recordemos que, para eliminar la potencia de la literal, necesitamos aplicar la operación
                    inversa a la potencia, en este caso sería la raíz cuadrada, dado que la potencia es 2.</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x=\sqrt{49}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Aplicando la raíz al valor numérico obtenemos dos posibles \(+7\) y \(-7\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x= \pm7$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4>Ejemplo 4</h4>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Forma: \(ax^2 + b = c\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$2x^2 +20 =52$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Procedemos a despejamos la literal \(x^2\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$2x^2=52-20$$</p>
                        <p>$$x^2=\frac{32}{2}$$</p>
                        <p>$$x^2=16$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Recordemos que, para eliminar la potencia de la literal, necesitamos aplicar la operación
                    inversa a la potencia, en este caso sería la raíz cuadrada, dado que la potencia es 2.</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x=\sqrt{16}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Aplicando la raíz al valor numérico obtenemos dos posibles \(+9\) y \(-9\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x=\pm4$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4>Ejemplo 5</h4>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Forma: \(a(x+b)^2+c=d\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$4(x-3)^2+16=32$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Procedemos a despejar \((x+b)^2=\frac{d-c}{a}\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$4(x-3)^2=32-16$$</p>
                        <p>$$4(x-3)^2=16$$</p>
                        <p>$$(x-3)^2=\frac{16}{4}$$</p>
                        <p>$$(x-3)^2=4$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Recordemos que, para eliminar la potencia de la literal, necesitamos aplicar la operación
                    inversa a la potencia, en este caso sería la raíz cuadrada, dado que la potencia es 2.</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$\sqrt{(x-3)^2}=\sqrt{4}$$</p>
                        <p>$$x-3=\pm\sqrt{4}$$</p>
                        <p>$$x-3=\pm2$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Despejando \(x\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x=\pm2 + 3$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Recordemos que tenemos 2 posibles soluciones por lo que las operaciones quedarían</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x_1 = 2 + 3 = 5$$</p>
                        <p>$$x_2 =-2 + 3 = 1$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4>Ejemplo 6</h4>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Forma: \((x+b)(x+c)=0\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$(5x-1)(3x-8)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>En esta forma procederemos a igualar ambos binomios a cero: \((x+b)=0\) y \((x+c)=0\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(5x-1)=0$ y $(3x-8)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Despejamos la x de cada termino, el primer término quedaría:</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$5x-1=0$$</p>
                        <p>$$5x=1$$</p>
                        <p>$$x=\frac{1}{5}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>El segundo término quedaría:</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$3x-8=0$$</p>
                        <p>$$3x=8$$</p>
                        <p>$$x=\frac{8}{3}$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Por lo que tenemos dos posibles resultados</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>\(x_1 = \frac{1}{5}\) y \(x_2 =\frac{8}{3}\)</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php ob_start(); ?>
        <p>Antes de concluir, te invitamos a repasar tus aprendizajes hasta este momento.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a3', "Solución de ecuaciones", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>