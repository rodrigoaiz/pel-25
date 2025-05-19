<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<p>Tenemos la función \(y=-3(x-2)^2+3\)</p>
            <p>El parámetro “\(a\)” es menor que cero</p>
            <p>Las ramas de la parábola: Abrirán hacia abajo</p>
            <p>El vértice de la parábola está en \(V(2,3)\)</p>
            <p>El eje de simetría es \(x=2\)</p>
            <p>La intersección con el eje y es: </p>
            <p>Como queremos determinar la intersección con el eje “\(y\)”, el eje “\(x\)” en ese punto igual a cero</p>
            <p>$$y= -3 (0-2)^2+3$$</p>
            <p>$$y= -3 (-2)^2+3$$</p>
            <p>$$y= -3 (4)+3$$</p>
            <p>$$y= -12+3$$</p>
            <p>$$y= -9$$</p>
            <p>El punto de intersección es (0,-9)</p>
            <p>¿Cuáles son las raíces?, recuerda que las raíces son las intersecciones con el eje “\(x\)” en ese punto la
                coordenada de “\(y\)” es igual a cero </p>
            <p>$$0= -3 (x-2^2+3$$</p>
            <p>$$-3= -3 (x-2)^2$$</p>
            <p>$$-3/-3= (x-2)^2$$</p>
            <p>$$1= (x-2)^2$$</p>
            <p>$$1=x-2$$</p>
            <p>$$\pam$$</p>
            <p>$$1+2=x$$</p>
            <p>$$3=x$$</p>
            <p>$$1=x$$</p>
            <p>La parábola tiene concavidad: puesto que sus ramas abren hacia abajo su concavidad es negativa.</p>
            <p>Para verificar los resultados en tú cuaderno realiza el bosquejo de la gráfica.</p>

        <?php ob_start(); ?>
        <p>Realiza la siguiente actividad podrás practicar lo aprendido.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a12', "Concavidad de la parábola", $ActividadContent);
        ?>

<p> Siguiente ejercicio \(y= (x+4)^2\)</p>
            <p>“\(a\)” es mayor uno, </p>
            <p>Las ramas de la parábola: abren hacia arriba </p>
            <p>El vértice de la parábola (-4,0)</p>
            <p>El eje de simetría es \(x=-4\)</p>
            <p>La intersección con el eje y</p>
            <p>Recordamos que para esta intersección x=0</p>
            <p>$$y= (0+4)^2$$</p>
            <p>$$y= (4)^2$$</p>
            <p>$$y= 16$$</p>
            <p>Por lo tanto, tenemos que el punto de intersección con el eje “\(y\)” es (0,16)</p>
            <p>¿Cuáles son las raíces o intersección con el eje x? </p>
            <p>Para esto tenemos que y= 0 </p>
            <p>$$y= (x+4)^2$$</p>
            <p>$$0= (x+4)^2$$</p>
            <p>Falta desarrollo aquí</p>
            <p>$$-4=x$$</p>
            <p>Por lo que tenemos</p>
            <p>(-4,0)</p>
            <p>La parábola tiene concavidad: Positiva</p>

        <?php
            renderImage('u2t4_img_grafica7.webp', '', '', '', true);
        ?>

            <p>Vamos a ver qué pasa con los parámetros \(h\) y \(k\) respecto a la representación gráfica de la función.</p>
            <p>En un mismo sistema de coordenadas cartesiano graficaremos, primero tomando como base la función
                \(f(x)=x^2\) y después veremos qué pasa con la gráfica cuando cambiamos el parámetro k, recuerdas es
                cuando tenemos la función escrita de la forma \(F(x)= a(x-h)^2+k\).</p>
            <p>Cuando tenemos la función \(f(x)=x^2, a=1\), es mayor a cero por lo que las ramas de la parábola abren
                hacia arriba, la intersección con el eje “\(y\)” (0,0), el vértice está en (0,0) , como “a” es mayor a
                cero, tenemos un mínimo que es el vértice de la curva V(0,0), su concavidad es positiva, ya que la recta
                tangente a cualquier punto excepto el vértice queda por debajo de la curva y como ya se mencionó el
                vértice está en (0,0) por lo tanto la ecuación de la recta del eje de simetría es \(x=0\), pero que pasa
                cuando tenemos la función \(y= x^2 +3\) reafirmemos:</p>
        
        <?php
            renderImage('u2t4_img_grafica8.webp', '', '', '', true);
        ?>

        <p>Observa que la gráfica de la función \(y= x^2 +3\) respecto a la gráfica de la función \(y=x^2\) se desplaza
                su vértice respecto al eje “\(y\)” tres unidades hacia arriba.</p>
        <p>Puedes comprobar realizando la tabla de ambas funciones en tu cuaderno.</p>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(x\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=x^2+3\)
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
                      12
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
                      7
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
                      4
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
                      3
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
                      4
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
                      7
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
                      12
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

        <p>El eje de simetría es \(x= 0\),</p>
            <p>Concavidad es positiva </p>
            <p>Vértice (0,3)</p>
            <p>No tiene raíces en el conjunto de los números reales ya que no hay intersección con el eje “\(x\)”.</p>
            <p>El vértice es un punto mínimo ya que la coordenada de “\(y\)” es la más baja.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>