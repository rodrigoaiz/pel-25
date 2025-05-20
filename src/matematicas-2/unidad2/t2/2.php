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

  <p>Las curvas de la parábola que representa la función \(y=x^2\) se llaman ramas de la parábola.</p>
  <p>Por lo tanto, para valores negativos que tome \(x\) la función es decreciente (cuando más grande es el valor de la coordenada de \(x\) el valor de la coordenada de "\(y\)” es menor) y para valores positivos la función es creciente (cuanto más grande es el valor de la coordenada de “\(x\)” el valor de la coordenada de “\(y\)” aumenta).</p>
  <p>Comprobemos lo que decimos con las siguientes tablas.</p>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       x 
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=2x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=4x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=\frac{1}{4}x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=\frac{1}{8}x^2\)
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -3 
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      18
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      36
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9/4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9/8
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      16
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1/2
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1/4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1/8
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      16
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1/2
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      18
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      36
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9/4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9/8
                      </td>
                  </tr>
                  
              </tbody>
          </table>
      </div>

      <p>A continuación se muestra el bosquejo de la gráfica con las cinco funciones en el mismo sistema de coordenadas con diferentes colores.</p>

            <?php
            renderImage('u2t2_grafica_2.webp', '', '', '', true);
            ?>

      <p>Como puedes observar las gráficas tienen en común el vértice, unas gráficas se contraen (se acercan al eje \(y\), se alargan) esto es cuando cuando \(a>1\) y otras se expanden (se acercan al eje \(x\) y se alejan del eje \(y\)) cuando \(0<a<1\).</p>
      <p>Ahora revisaremos qué sucede cuando \(a<0\), comparado con \(y=x^2\)</p>

      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       x 
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=-x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=-2x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=-3x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=\frac{1}{2}x^2\)
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -9
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -18
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      27
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -9/2
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -12
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -2
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -1/2
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -12
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -9
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -18
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -27
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

      <p>El bosquejo de las gráficas es:</p>

            <?php
            renderImage('u2t2_grafica_3.webp', '', '', '', true);
            ?>

      <p>Las gráficas tienen en común el vértice</p>
      <p>El parámetro “\(a\)” es menor que cero, por lo tanto las ramas abren hacia abajo</p>
      <p>El vértice ya no es el valor mínimo de la curva ahora es el valor más alto, por lo tanto, es un máximo</p>
      <p>Conclusiones: Las funciones de la forma \(y=ax^2 + b x +c\), cuando \(b=0\), \(c=0\) con</p>
      <p>\(a>0\)</p>
      <ol class="ol-number">
        <li>Tienen ramas que abren hacia arriba</li>
        <li>Tienen su mínimo valor en el vértice que es (0,0)</li>
        <li>El eje de simetría es \(y\)</li>
        <li>Entre mayor sea el parámetro “\(a\)” más cerrada es la parábola</li>
      </ol>
      <p>\(a<0\)</p>
      <ol class="ol-number">
        <li>Las ramas de la parábola abre hacia abajo</li>
        <li>Alcanza su máximo valor en el vértice que es (0,0)</li>
        <li>El eje de simetría es el eje \(y\)</li>
        <li>Entre mayor sea el valor absoluto del parámetro “\(a\)” más cerrada es la parábola</li>
      </ol>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>