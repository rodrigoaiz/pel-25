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
            <h3>Teorema de Pitágoras</h3>
            <p>Seguramente habrás escuchado alguna vez sobre el filósofo y matemático griego Pitágoras. Probablemente el
                recuerdo que te evoca es el del Teorema que lleva su nombre.</p>
            <p>Responde: ¿Qué recuerdas sobre el Teorema de Pitágoras?</p>
            <p>Quizá lo hayas escuchado como sigue: En todo triángulo rectángulo, la suma de los cuadrados de los
                catetos, es igual al cuadrado de la hipotenusa.</p>
            <p>De esta frase tenemos que definir y recordar algunos conceptos para comprenderlo mejor:</p>
            <ul class="ul-disc">
                <li>Un triángulo rectángulo es aquel que tiene un ángulo recto (de 90°).</li>
                <li>En un triángulo rectángulo, los catetos son los lados que forman el ángulo recto.</li>
                <li>En un triángulo rectángulo, la hipotenusa es el lado que se opone al ángulo recto y es el de mayor
                    medida.</li>
            </ul>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_pitagoras_a.webp', '', '', '');
        ?>
      </div>
      <div class="w-2/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_pitagoras_b.webp', '', '', '');
        ?>
      </div>
</div>

<small class="text-center grid grid-cols-1">Teorema de Pitágoras</small>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div>
        <p>Para aplicarlo, tomemos el siguiente ejemplo:</p>
            <p>Observa que las longitudes dadas en color negro (3 y 4 cm) corresponden a los catetos del triángulo,
                mientras que la de 5 cm corresponde con la medida de la hipotenusa. Entonces, según el teorema,
                tendríamos que \(3^2 + 4^2\) es "la suma de los cuadrados de los catetos, mientras que el cuadrado de la
                hipotenusa es \(5^2\)</p>
            <p>\(3^2 + 4^2 = 5^2\)</p>
            <p>Verificamos realizando las operaciones:</p>
            <p>\(9+16=25\)</p>
            <p>\(25=25\)</p>
            <p>Este teorema se utiliza comúnmente para determinar la longitud de alguno de los lados de un triángulo
                rectángulo, conociendo los otros dos. Sin importar cuáles sean los datos, el teorema siempre aplica
                igual.</p>
      </div>
      <div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t2/u4t2_teo_pitagoras2.webp', '', '', '');
        ?>
      </div>
</div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 text-lg text-center align-middle">
                      Ejemplo: Para cada figura, determina la longitud del lado faltante
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                        <div class="w-3/4 mx-auto">
                        <?php
                            renderImage('u4t2/ejemplo_2_teorema_pitagoras.webp', 'Ejemplo 2 Teorema de Pitágoras', '', '');
                        ?>
                        </div>
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                        <div class="w-2/4 mx-auto">
                        <?php
                            renderImage('u4t2/ejemplo_3_teorema_pitagoras.webp', 'Ejemplo 3 Teorema de Pitágoras', '', '');
                        ?>
                        </div>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      Aplicación del teorema
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(6^2+8^2=x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(y^2+15^2=17^2\)
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      Despeje
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(y^2+15^2=17^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      $$y^2=17^2-15^2$$ $$y=\sqrt{17^2-15^2}$$
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      Resultado
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      $$X=\sqrt{36 +64}$$ $$X=\sqrt{100}$$ $$x=10$$
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      $$y=\sqrt{17^2-15^2}$$ $$y=\sqrt{289-225}$$ $$y=\sqrt{64}$$ $$y=8$$
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

            <p>Cabe mencionar que en estos ejemplos los resultados fueron enteros. Cuando esto sucede, a la tercia de
                números que componen las medidas de los lados del triángulo se le conoce como terna pitagórica.</p>
            <p>Sin embargo, esto ocurre en pocos casos, comparado con aquellos donde el resultado no es entero.</p>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>