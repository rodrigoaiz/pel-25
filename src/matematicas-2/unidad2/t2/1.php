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

  <h3>Inicio</h3>
  <p>Hola, en este aprendizaje trabajaremos en la transición entre diferentes representaciones (algebraica, tabular y gráfica) para la función cuadrática.</p>
  <p>Empecemos con el estudio de la función \(y=ax^2 + b x +c\), cuando \(a=1\), \(b=0\) y \(c=0\), tenemos entonces
  la función \(y=x^2\).</p>
  <p>Completamos la siguiente tabla.</p>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
          <thead class="text-gray-700 uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="px-6 py-3 text-center">
                  x
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                  \(Y=x^2\)
                  </th>
              </tr>
          </thead>
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      25
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        -4
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        16
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        -3
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        9
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        -2
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        4
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        -1
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        0
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        0
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        1
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        2
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        4
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        3
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        9
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        4
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        16
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200 text-lg">
                      <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        5
                      </th>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                        25
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

      <p>Un bosquejo de la gráfica es:</p>

      <div class="m-auto">
            <?php
            renderImage('u2t2_grafica_1.webp', '', '', '', true);
            ?>
     </div>

     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4 items-center">
      <div>
      <p>Se observa una curva llamada parábola, donde su mínimo valor de la curva es (0,0) a este punto se le
                llama vértice de la parábola.</p>
            <p>Tenemos que \(f(x)=x^2\) y \(f(-x)=(-x)^2=x^2\)</p>
            <p>Por ejemplo \(f(2)=2^2 =4\) y \(f(-2)= (-2)^2=4\), como pudiste observar cuando construiste la tabla entonces
                podemos decir que \(f(x)= f(-x)\), esto quiere decir que la gráfica es simétrica respecto al eje “\(y\)”, y
                se le denomina para esta función eje de simetría de la parábola al eje “\(y\)”.</p>
            <p>Revisa el siguiente video que explica la simetría axial.</p>
      </div>
      <div>
      <a href="https://www.youtube.com/watch?v=MtY-ZOwkROE" target="_blank">
              <?php
              renderImage('u2t2_banner_simetria_axial.webp', '', '', '');
              ?>
          </a>
      </div>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>