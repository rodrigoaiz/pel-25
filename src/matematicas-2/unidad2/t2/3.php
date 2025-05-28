<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>Ahora estudiamos la función \(y=ax^2 +bx+c , a \neq 0\) cuando \(b=0\) y \(c \neq 0\), tenemos entonces la función \(y=ax^2 +c\).</p>
    <p>Revisa la siguiente tabla, con \(a>0\)</p>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       x 
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2-4\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2+4\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2-1\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2+1\)
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -3 
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      13
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      10
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      2
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      2
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      13
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      10
                      </td>
                  </tr>
              </tbody>
   </table>
</div>

<p>El bosquejo de las gráficas es:</p>

<?php
            renderImage('u2t2_grafica_4.webp', '', '', '', true);
            ?>

<p>Las gráficas tienen en común que la coordenada de x del vértice es cero el comportamiento de las gráficas
                en relación con parámetro “\(c\)” es que el vértice se desplaza hacia arriba o hacia abajo.</p>
            <p>Ya que se realiza una traslación vertical.</p>
            <p>Conclusiones: Las funciones de la forma \(y=ax^2 +bx +c\) cuando \(a \neq 0\) ,\(b=0\), con \(c>0\).</p>
            <p>\(c>0\)</p>
            <ol class="ol-number">
                <li>Se desplaza la gráfica hacia arriba, según sea el valor que toma el parámetro \(c\)</li>
                <li>El vértice se encuentra en (0,c)</li>
                <li>El eje de simetría sigue siendo el eje \(y\)</li>
                <li>El vértice es el valor mínimo de la curva</li>
            </ol>
            <hr>
            <ol class="ol-number pb-4">
                <li>Se desplaza la gráfica hacia abajo, según sea el valor que toma el parámetro \(c\).</li>
                <li>El vértice se encuentra en (0,-c)</li>
                <li>El eje de simetría es el eje \(y\)</li>
                <li>El vértice es el valor mínimo de la curva. </li>
            </ol>

            <p>Revisa la siguiente tabla, ahora con \(a<0\)</p>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       x 
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2-4\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2+4\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2-1\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(Y=x^2+1\)
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -3 
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -13
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -10
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -8
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -3
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -2
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       1
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -2
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
                      -8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -3
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                       3
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -13
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -10
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -8
                      </td>
                  </tr>
              </tbody>
   </table>
</div>

<?php ob_start(); ?>
        <p>Realiza la siguiente actividad te servirá para llegar a conclusiones y consolidar aprendizajes.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a6', "Gráfica de una función", $ActividadContent);
        ?>

                    <p>Si \(c>0\)</p>
                    <ol class="decimal" start="5">
                        <li>Se desplaza la gráfica hacia arriba, según sea el valor que toma el parámetro c</li>
                        <li>El vértice se encuentra en (0,c)</li>
                        <li>El eje de simetría sigue siendo el eje \(y\)</li>
                        <li>El vértice es el valor máximo de la curva</li>
                    </ol>
                    <p>Si \(c<0\)</p>
                            <ol class="decimal" start="5">
                                <li>Se desplaza la gráfica hacia abajo, según sea el valor que toma el parámetro c.</li>
                                <li>El vértice se encuentra en (0,-c)</li>
                                <li>El eje de simetría es el eje \(y\)</li>
                                <li>El vértice es el valor máximo de la curva </li>
                            </ol>
                            <p>Estudiemos por último la función \(y=ax^2 +bx +c, a \neq 0\) cuando \(a \neq 1, b \neq 0 y c
                                \neq 0\), tenemos entonces la función</p>
                            <p>\(y= ax^2 +bx +c\)</p>
                            <p>para esto estudiemos la función \(y=4x^2 +8x +5\)</p>
                            <p>De acuerdo con lo que estudiamos con anterioridad a>0 por lo tanto, las ramas de la
                                parábola abre hacia arriba.</p>
                            <p>También podemos obtener otro punto de la parábola que es la intersección con el eje y,
                                para esto hacemos x=0 y tenemos \(y=4(0)^2 +8 (0) + 5 = 5\) por lo tanto, la gráfica de la
                                función cuadrática corta el eje y en (0,5).</p>
                            <p>Ahora completemos el trinomio cuadrado perfecto que aprendiste en la unidad anterior,
                                solo que ahora no podrás dividir todo entre 4 (ya no estás trabajando con ecuaciones
                                ahora son funciones) para que el coeficiente de \(x^2\) sea 1(es necesario para llevar a
                                cabo este procedimiento que obligatoriamente el coeficiente sea 1), ahora factorizamos.
                            </p>
                            <p>\(y=4x^2 +8x +5\)</p>
                            <p>Factoricemos los términos que tienen “\(x\)”</p>
                            <p>\(y=4(x^2 +2x)+5\)</p>
                            <p>Revisa, si multiplicas 4 por \(x^2\) quedará \(4x^2\) y 4 por \(2x\) obtendremos \(8x\) que era
                                lo que teníamos en la función con la que iniciamos, por lo tanto, nuestra factorización
                                es correcta.</p>
                            <p>Trabajemos los términos dentro del paréntesis.</p>
                            <p>Recuerda que para completar el trinomio cuadrado perfecto debes aumentar el coeficiente
                                del término lineal \(2x\) dividido entre 2 y elevado al cuadrado en este caso tenemos
                                \((x^2 +2x)\) el coeficiente es 2 por lo tanto \((\frac{2}{2})^2 =1\)</p>
                            <p>Observa que el 1 que aumentas está multiplicado por 4, es decir realmente estás
                                aumentando en la función 4(1)=4, por lo tanto, también debes sumar -4 para no alterar la
                                función.</p>
                            <p>\(y=4(x^2 +2x + (1)^2)+5-4(1)^2\)</p>
                            <p>Elevamos al cuadrado</p>
                            <p>\(y=4(x^2 +2x +1)^2 +5-4(1)\)</p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4 items-center">
            <div>
                <p>Como queremos completar el trinomio cuadrado perfecto, solo necesitamos los primeros tres términos, ¿estás de acuerdo?</p>
                <p>Revisa el siguiente video para repasar cómo completar el trinomio cuadrado perfecto.</p>
            </div>
                <div>
                    <a href="https://www.youtube.com/watch?v=Y7lXhpzerHo" target="_blank">
                    <?php
                        renderImage('u2t2_banner_trinomio_cuad_perfecto.webp', '', '', '');
                        ?>
                    </a>
                </div>
            </div>

            <p>El cuarto término dentro del paréntesis lo sacamos, pero recuerda que todo lo que está dentro del paréntesis se multiplica por 4, por tanto:</p>
                            <p>\(y=4(x^2 +2x +1)^2 +5-4\)</p>
                            <p>Simplificando los términos independientes</p>
                            <p>\(y=4(x^2 +2x +1)^2 +1\)</p>
                            <p>Ahora sí lo que está dentro del paréntesis es un trinomio cuadrado perfecto que podemos
                                escribir como:</p>
                            <p>\(y=4(x+1)^2 +1\)</p>
                            <p>Nos quedó la función escrita de la forma</p>
                            <p>\(y=a(x-h)^2 +k\)</p>
                            <p>¿Estás de acuerdo?</p>
                            <p>Donde \(a=4, h=-1 y k=1\)</p>
                            <p>Como \(a =4\) las ramas de la parábola abren hacia arriba.</p>
                            <p>El vértice se conforma con los parámetros \(h y k, v (h,k)\).</p>
                            <p>Por tanto, tenemos que el vértice es \(v (-1,1)\) y será el punto mínimo de la curva,
                                recuerda el estudio que realizamos con anterioridad.</p>
                            <p>El eje de simetría ya no será el eje y (ya este eje no divide a la mitad la parábola),
                                ahora observamos que los puntos de la curva son simétricos respecto a la recta \(x=-1=h\)
                            </p>
                            <p>Para obtener las intercepciones con el eje “\(y\)” de \(f(x)=4x^2 +8x +5\) hacemos \(x=0\),
                            </p>
                            <p>tenemos</p>
                            <p>\(F(0)=5\)</p>
                            <p>El punto de intersección con el eje “\(y\)” es \((0,5)\)</p>
                            <p>Como puedes observar en la gráfica no hay intersección con el eje \(x\).</p>

            <?php
               renderImage('u2t2_img_grafica_trinomio.webp', '', '', '', true);
            ?>

           <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 mb-4 items-center">
            <div>
            <p>Generalizando el procedimiento.</p>
                            <p>\(F(x)=ax^2 +bx +c\)</p>
                            <p>Factorizamos</p>
                            <p>\(F(x)=a(x^2 +\frac{b}{a} x)+c\)</p>
                            <p>\(F(x)=a(x^2 +\frac{b}{a}x + (\frac{b}{2a})^2 - (\frac{b}{2a})^2 )+c\)</p>
                            <p>\(F(x)=a(x^2 +\frac{b}{a}x + (\frac{b}{2a})^2) +c - a(\frac{b}{2a})^2\)</p>
                            <p>\(F(x)=a(x+\frac{b}{2a})^2 +c -\frac{ab^2}{4a^2}\)</p>
                            <p>\(F(x)=a(x+\frac{b}{2a})^2 +c -\frac{b^2}{4a}\)</p>
                            <p>\(F(x)=a(x+ \frac{b}{2a})^2 +c +\frac{4ac-b^2}{4a}\)</p>
                            <p>Donde: </p>
                            <p>\(h=-\frac{b}{2a}\) y \(k=\frac{4ac-b^2}{4a}\)</p>
                </div>
                <div>
                    <?php
                        renderImage('u2t2_grafica_5.webp', '', '', '', true);
                        ?>
                </div>
            </div>

            <ol class="ol-number">
                <li>¿Cuáles son las coordenadas del vértice?</li>
                <li>¿El parámetro a es mayor o menor a cero?</li>
            </ol>

            <div class="max-w-3xl mx-auto">
          <?php
          $accordionItems1 = [
            [
              'title' => 'Respuesta',
              'content' => '<ul class="ul-disc">
                               <li>¿Cuáles son las coordenadas del vértice? <strong>(1,-3)</strong></li>
                               <li>¿El parámetro a es mayor o menor a cero? <strong>mayor a cero</strong></li>
                            </ul>'
            ]
          ];
          renderAccordion($accordionItems1, 'primero-');
          ?>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8 items-center">
            <div>
                <p>Revisa el siguiente video para consolidar aprendizajes sobre las funciones cuadráticas.</p>
            </div>
                <div>
                    <a href="https://www.youtube.com/watch?v=E6ysFJEIyEc" target="_blank">
                    <?php
                        renderImage('u2t2_banner_funciones_cuadraticas.webp', '', '', '');
                        ?>
                    </a>
                </div>
            </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>