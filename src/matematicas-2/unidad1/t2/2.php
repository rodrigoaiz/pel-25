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

<h2>Factorización</h2>
  <h3>Ecuaciones cuadráticas de la forma \(ax^2 + bx + c = 0 con a = 1\)</h3>
  
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center mb-4">
    <div class="m-auto">
      <?php
      renderImage('u1_t2_Pyreliophorus.webp', 'Imagen de Joao.pimentel.ferreira.', 'https://commons.wikimedia.org/wiki/File:Pyreliophorus_03.jpg', 'Wikimedia Commons.', true);
      ?>
    </div>
    <p>Primero debes de entender que <b>Factorizar</b> una expresión algebraica, es un proceso que consiste en expresar una suma o diferencia de términos como el producto de dos o más factores. Te invitamos a revisar la siguiente video-lección sobre el tema de factorización.</p>
  </div>

    <div class="lg:grid">
      <?php
      renderVideoIframe('fu7mzm7RrsM', 'Factorización');
      ?>
    </div>

    <p>De esta forma al factorizar una ecuación cuadrática nos será más fácil encontrar las raíces de la ecuación, ya que muchas veces después de haberla factorizado esta quedará expresada de alguna de las formas que viste en la lección anterior.</p>
    <p>Procederemos a ejemplificar este método.</p>

    <h4>Ejemplo 1</h4>
    <p class="ml-0">Si tenemos la ecuación: \(x^2 + 5x + 6 = 0\)</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Nuestra ecuación se encuentra completa y en la forma \(ax^2 + bx + c = 0 con a = 1\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>$$x^2 + 5x + 6 = 0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Para poder factorizar esta ecuación debemos encontrar 2 números que multiplicados entre sí nos
                        den el término c y que sumados nos den el término de \(bx\), en este caso serían 3 y 2</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x^2 + (3+2)x + (3*2) = 0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Una vez encontrados estos factores (números), procederemos a escribir un producto de dos
                    binomios donde estén involucrados estos valores numéricos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(x+3)(x+2)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Como puedes observar tenemos una de las formas vistas en la lección anterior (\((
                      (x+b)(x+c)=0)\)), por lo que procederemos a igualar ambos binomios a cero: \(x+b=0\) y \(x+c=0\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>\((x+3)=0\) y \((x+2)=0\)</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Despejando la \(x\) del primer término obtenemos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x+3=0$$</p>
                        <p>$$x=-3$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Despejando la \(x\) del segundo término obtenemos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$x+2=0$$</p>
                        <p>$$x=-2$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Por lo que las raíces de la ecuación son</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>\(x=-3\) y \(x=-2\)</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4>Ejemplo 2</h4>
    <p class="ml-0">Si tenemos la ecuación: \(x^2 +11x +30=0\)</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>El coeficiente de \(a=1\), nuevamente buscaremos dos números que multiplicados nos den \(30
                    (termino c)\) y que esos mismos números sumados den 11 (termino \(bx\)), en este caso serian 6 y 5</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                      <p>$$x^2 +11x+30=0$$<p>
                      <p>$$x^2 +(6+5)x+ (6*5)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Una vez encontrados estos factores (números), procederemos a escribir un producto de dos
                        binomios donde estén involucrados estos valores numéricos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(x+6)(x+5)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Igualamos cada binomio a cero</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(x+6)=0 y (x+5)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Despejamos x en cada binomio</p>
                    </th>
                    <td class="px-6 py-2">
                      <p>$$x+6=0$$</p>
                      <p>$$x=-6$$</p>
                      <p>$$x+5=0$$</p>
                      <p>$$x=-5$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Por lo que las raíces de la ecuación son:</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>\(x=-6\) y \(x=-5\)</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>