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
  <h3>Ecuaciones cuadráticas de la forma \(ax^2 +bx +c =0 con a \neq 1\)</h3>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center mb-4">
    <div class="m-auto">
      <?php
      renderImage('u1_t2_Karl_Ferdinand.webp', 'Imagen de Chetvorno.', 'https://commons.wikimedia.org/wiki/File:British_patent_22,020-Karl_Ferdinand_Braun-filed_3_November_1899-fig._2.png', 'Wikimedia Commons.', true);
      ?>
    </div>
    <p>Cuando la ecuación cuadrática completa tiene un coeficiente de \(a \neq 1\) , el procedimiento más sencillo para factorizarlo es: <em>descomponer el término \(bx\) en una suma de dos términos; de esta forma buscamos dos números \(r\) y \(s\) tales que su suma sea \(b\) y su producto sea igual al producto de \(ac\); es decir:</em>
    $$r+s=b$$
    $$rs=ac$$
  </p>
  </div>

  <h4>Ejemplo 3</h4>
  <p class="ml-0">Encuentra las raíces de la ecuación \(3x^2 +x-10 =0\)</p>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Buscaremos los número r y s sabiendo que \(rs=ac\) por lo que tenemos \(3-10=ac\) y esto es -30
                    por lo que los números que cumplen con esta condición \(r+s=b\) y \(rs=ac\) serian 6 y -5</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                      <p>$$3x^2+x-10=0$$</p>
                      <p>$$(ac=(3)(-10)=3$$</p>
                      <p>$$b=1$$</p>
                      <p>$$r=6 y s=-5$$</p>
                      <p>$$r+s=6-5=1$$</p>
                      <p>$$rs=ac=6*-5=-30$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Obteniendo los números \(r y s\) descompondremos el término bx como la suma de \(r+s\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$3x^2+6x-5x-10=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Procederemos a agrupar en dos binomios</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$3x^2+6x(-5x-10)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Factorizamos cada uno de los binomios mediante un término común en cada uno de ellos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$3x(x+2)-5(x+2)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Debido a que tenemos términos iguales \((x+2)\) en ambas factorizaciones, esto procede a
                    simplificarse como:</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(3x-5)(x+2)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Finalmente procederemos a igualar cada uno de los binomios (factores) a cero</p>
                    </th>
                    <td class="px-6 py-2">
                      <p>$$3x-5=0$$</p>
                      <p>$$3x=5$$</p>
                      <p>$$x=\frac{5}{3}$$</p>
                      <p>$$x+2=0$$</p>
                      <p>$$x=-2$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4>Ejemplo 4</h4>
    <p class="ml-0">Encuentra las raíces de la ecuación \(6x^2 -7x-3=0\)</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Primero buscaremos los números \(r y s\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                        <p>$$6x^2-7x-3=0$$</p>
                        <p>$$ac=(6)(-3)=-18$$</p>
                        <p>$$b=-7$$</p>
                        <p>$$r=-9 y s=2$$</p>
                        <p>$$r+s=-9+2=-7$$</p>
                        <p>$$rs=ac=-9*2=-18$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Obteniendo los números \(r y s\) descompondremos el término bx como la suma de \(r+s\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$6x^2-9x+2x-3=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Procederemos a agrupar en dos binomios de tal forma que al factorizarlos por un término
                    común nos quede un binomio igual en cada una de las factorizaciones.</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(6x^2-9x)+(2x-3)=0$$<p>
                        <p>$$3x(2x-3)+(2x-3)=0 $$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Debido a que el término común del segundo binomio es 1 procedemos a agruparlo de la
                    siguiente manera</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$(3x+1)(2x-3)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Finalmente procederemos a igualar cada uno de los binomios (factores) a cero</p>
                    </th>
                    <td class="px-6 py-2">
                     <p>$$3x+1=0$$</p>
                     <p>$$3x=-1$$</p>
                     <p>$$x=-\frac{1}{3}$$</p>
                     <p>$$2x-3=0$$</p>
                     <p>$$2x=3$$</p>
                     <p>$$x=\frac{3}{2}$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
  renderImagePleca('u1_t2_Leonardo.webp', 'Imagen de Crijam.', 'https://commons.wikimedia.org/wiki/File:L%C3%A9onard_de_Vinci,_Bille_de_verre_et_%C5%93il_humain,_vers_1508-09,_MS_D,_3v.jpg', 'Wikimedia Commons.');
  ?>

    <h4>Ejemplo 5</h4>
    <p class="ml-0">Encuentra las raíces de la ecuación \(5x^2 -14x -3 =0\)</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Primero buscaremos los números \(r y s\)</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                        <p>$$5x^2-14x-3=0$$</p>
                        <p>$$ac=5-3=-15$$</p>
                        <p>$$b=-14$$</p>
                        <p>$$r=-15 y s=1$$</p>
                        <p>$$r+s=-15+1=-14$$</p>
                        <p>$$rs=ac=-15*1=-15$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                        <p>Obteniendo los números \(r y s\) descompondremos el término bx como la suma de \(r+s\)</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$5x^2-15x+x-3=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Procederemos a agrupar en dos binomios de tal forma que al factorizarlos por un término
                    común nos quede un binomio igual en cada una de las factorizaciones.</p>
                    </th>
                    <td class="px-6 py-2">
                      <p>$$5x^2-15x+x-3=0$$</p>
                      <p>$$(5x^2-15x)+(x-3)=0$$</p>
                      <p>$$5x(x-3)+(x-3)=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Debido a que el término común del segundo binomio es 1 procedemos a agruparlo de la
                    siguiente manera</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>$$5x+1x-3=0$$</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Igualamos cada binomio a cero y procedemos a despejar \(x\)</p>
                    </th>
                    <td class="px-6 py-2">
                     <p>$$5x+1=00$$</p>
                      <p>$$5x=-1$$</p>
                      <p>$$x=-\frac{1}{5}$$</p>
                      <p>$$x-3=0$$</p>
                      <p>$$x=3$$</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php ob_start(); ?>
    <p>Ahora vamos a resolver un pequeño reto para afianzar nuestros conocimientos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a6', "Factorización", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>