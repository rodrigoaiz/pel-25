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

<h2>Método de completar un trinomio cuadrado perfecto</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center mb-4">
        <div>
            <p>Recordemos que un trinomio cuadrado perfecto es lo que se obtiene de desarrollar un binomio elevado al cuadrado.</p>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table-none md:table-fixed text-left text-gray-500 rtl:text-right my-0">
                    <tbody>
                        <tr class="bg-white border-b border-gray-200">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                            <p>$$(a\pmb)^2$$</p>
                            </th>
                            <td class="px-6 py-2 text-lg">
                            <p>Binomio elevado al cuadrado</p>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-200 text-lg">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                            <p>$$a^2\pm2ab + b^2$$</p>
                            </th>
                            <td class="px-6 py-2">
                                <p>El primer término se eleva al cuadrado, mas o menos (dependiendo del signo) el doble producto
                                del primer término por el segundo, mas el segundo término elevado al cuadrado.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="m-auto">
        <?php
        renderImage('u1_t2_Catapult.webp', 'Imagen de Sindala.', 'https://commons.wikimedia.org/wiki/File:Leonardo_Da_Vinci_Sling_Catapult.PNG', 'Wikimedia Commons.');
        ?>
        </div>
  </div>

    <p>Aplicando esto y sustituyendo algunas literales por valores numéricos tenemos:</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table-none md:table-fixed text-left text-gray-500 rtl:text-right my-0">
                    <tbody>
                        <tr class="bg-white border-b border-gray-200">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                            <p>$$(x+3)^2$$</p>
                            </th>
                            <td class="px-6 py-2 text-lg">
                            <p>Binomio elevado al cuadrado</p>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-200 text-lg">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                            <p>$$x^2+(2x)(3)+9$$</p>
                            </th>
                            <td class="px-6 py-2">
                                <p>El primer término se eleva al cuadrado, más o menos (dependiendo del signo) el doble producto
                                del primer término por el segundo, más el segundo término elevado al cuadrado.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
    </div>

    <p>Pero en este caso no tenemos que desarrollar el binomio al cuadrado, sino más bien pasar del trinomio cuadrado perfecto al binomio por lo que para poder realizar este proceso tenemos que considerar lo siguiente:</p>
    <p><strong>Para completar el trinomio cuadrado perfecto se suman, en ambos miembros de la igualdad, el cuadrado de la mitad del coeficiente del término lineal de la ecuación \((\frac{b}{2})^2\)</strong></p>

    <h4>Ejemplo 1:</h4>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>$$x^2+4x+3=0$$</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$x^2+4x=-3$$</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>Procedemos a dejar solo los términos de x en el primer miembro de la ecuación.</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$x^2+4x+(\frac{4}{2})^2=-3+(\frac{4}{2})^2$$</p>
                        <p>$$x^2+4x+4=-3+4$$</p>
                    </th>
                    <td class="px-6 py-2">
                      <p><strong>Para completar el trinomio cuadrado perfecto se suman, en ambos miembros de la igualdad,
                            el cuadrado de la mitad del coeficiente del término lineal de la ecuación</strong>
                            \((\frac{b}{2})^2\)</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>$$(x+2)^2=-3+4$$</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>Se factoriza el trinomio (saca la raíz cuadrada del término agregado solo en el primer miembro
                        de la ecuación)</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                     <p>$$(x+2)^2=1$$</p>
                    </th>
                    <td class="px-6 py-2">
                     <p>Simplifica la operación del segundo miembro de la ecuación.</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$(x+2)^2=1$$</p>
                        <p>$$x+2=\pm\sqrt{1}$$</p>
                        <p>$$x=-2\pm1$$</p>
                        <p>$$x=-2+1 y x=-2-1$$</p>
                        <p>$$x=-1 y x=-3$$</p></p>
                    </th>
                    <td class="px-6 py-2">
                        <p>Procedemos a resolver la ecuación como en los métodos anteriormente vistos (lección anterior)</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="m-auto my-4"><?php renderImage("u1_t2_Trinomio_Cuadrado_Perfecto.webp", "Imagen de Gohmath.", "https://commons.wikimedia.org/wiki/File:Trinomio_Cuadrado_Perfecto.png", "Wikimedia Commons."); ?></div>

    <h4>Ejemplo 2:</h4>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>$$x^2-6x-27=0$$</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$x^2-6x=27$$</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>Procedemos a dejar solo los términos de x en el primer miembro de la ecuación.</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>$$x^2-6x+(\frac{6}{2})^2=27+(\frac{6}{0})^2$$</p>
                    <p>$$x^2-6x+9=27+9$$</p>
                    </th>
                    <td class="px-6 py-2">
                    <p><strong>Para completar el trinomio cuadrado perfecto se suman, en ambos miembros de la igualdad, el
                    cuadrado de la mitad del coeficiente del término lineal de la ecuación.</strong>
                            \((\frac{b}{2})^2\)</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>$$(x-3)^2=27+9$$</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>Se factoriza el trinomio (saca la raíz cuadrada del término agregado solo en el primer miembro
                        de la ecuación).</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>$$(x-3)^2=36$$</p>
                    </th>
                    <td class="px-6 py-2">
                    <p>Simplifica la operación del segundo miembro de la ecuación.</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$(x-3)^2=36$$</p>
                        <p>$$x-3=\pm\sqrt{36}$$</p>
                        <p>$$x=3\pm6$$</p>
                        <p>$$x=3+6 y x=3-6$$</p>
                        <p>$$x=-9 y x=-3$$</p></p>
                    </th>
                    <td class="px-6 py-2">
                        <p>Procedemos a resolver la ecuación como en los métodos anteriormente vistos.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4>Ejemplo 3:</h4>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="table-none md:table-fixed text-gray-500 my-0">
                <tbody>
                    <tr class="bg-white border-b border-gray-200 text-lg">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$x^2 + 4x + 5 = 0$$</p>
                        </th>
                        <td class="px-6 py-2 text-lg">
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-200 text-lg">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                            <p>$$x^2 + 4x =- 5$$</p>
                        </th>
                        <td class="px-6 py-2">
                            <p>Procedemos a dejar solo los términos de x en el primer miembro de la ecuación.</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-200 text-lg">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$x^2 + 4x + (\frac{4}{2})^2 = -5+(\frac{4}{2})^2$$</p>
                        <p>$$x^2 + 4x + 4 =-5+4$$</p>
                        </th>
                        <td class="px-6 py-2">
                        <p><strong>Para completar el trinomio cuadrado perfecto se suman, en ambos miembros de la igualdad, el
                        cuadrado de la mitad del coeficiente del término lineal de la ecuación.</strong>
                                \((\frac{b}{2})^2\)</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-200 text-lg">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$(x + 2 )^2 =-1$$</p>
                        </th>
                        <td class="px-6 py-2">
                            <p>Se factoriza el trinomio (saca la raíz cuadrada del término agregado solo en el primer miembro
                            de la ecuación).</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-200 text-lg">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>$$(x + 2 )^2 =-1$$</p>
                        <p>$$x + 2 = \pm\sqrt{-1}$$</p>
                        <p>$$x = -2 \pm i$$</p>
                        </th>
                        <td class="px-6 py-2">
                        <p>Procedemos a resolver la ecuación como en los métodos anteriormente vistos.<p>Recordemos que no
                            existen raíces de números negativos por lo que la solución de este ejemplo no está
                            comprendida en los números reales sino más bien en los imaginarios.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h4>Ejemplo 4</h4>
            <div class="bg-secondary/50 px-5 py-5 mx-auto">
                <p>$$3x^2 -5x+2=0$$</p>
                <p>$$\frac{3x^2 - 5x + 2= 0}{3}$$</p>
                <p>$$x^2 - \frac{5}{3}x + \frac{2}{3} = 0$$ </p>
                <p>En este caso primero procedemos a dividir toda la ecuación entre el valor del coeficiente del término cuadrático, en este caso es 3</p>
                <p>$$x^2 - \frac{5}{3}x +( \frac{\frac{5}{3}}{2})^2 = - \frac{2}{3}+(\frac{\frac{5}{3}}{2})^2$$</p>
                <p>$$x^2 - \frac{5}{3}x +( \frac{5}{6})^2= - \frac{2}{3}+ (\frac{5}{6})^2$$</p>
                <p>$$x^2 - \frac{5}{3}x + \frac{25}{36}= - \frac{2}{3} + \frac{25}{36}$$</p>
                <p>$$(x -\frac{5}{6} )^2 = \frac{1}{36}$$</p>
                <p>$$x -\frac{5}{6} = \pm \sqrt{\frac{1}{36}} $$</p>
                <p>$$x =\frac{5}{6} \pm \frac{1}{6}$$</p>
                <p>$$x =\frac{5}{6} + \frac{1}{6} = 1$$</p>
                <p>En la ecuación que obtenemos completamos el trinomio como anteriormente se había realizado y procederemos a despejar \(x\) para poder encontrar las raíces de la ecuación.</p>
                <p>Y para el caso de la otra operación</p>
                <p>$$x =\frac{5}{6} - \frac{1}{6} = \frac{2}{3}$$</p>
            </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>