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
            <h3>Justificación del Teorema</h3>
            <p>Hasta ahora hemos hablado del Teorema de Pitágoras dando por hecho que es cierto, lo cual es correcto,
                dado que personas antes que nosotros se han encargado de demostrarlo. Sin embargo, vamos a justificarlo
                para que observes que realmente este Teorema es válido.</p>
            <p>Para ello, nos auxiliaremos de tus conocimientos sobre semejanza y de otro Teorema, llamado teorema de la
                altura de un triángulo rectángulo.</p>

<div class="md:grid grid-cols-2 gap-4 items-center">
      <div class="w-3/4 mx-auto">
            <h3>Teorema de la altura</h3>
            <p>El Teorema de la altura de un triángulo rectángulo, que dice lo siguiente: la altura construida sobre la
                hipotenusa de un triángulo rectángulo divide al triángulo en dos semejantes entre sí y semejantes al
                triángulo original:</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_altura_a.webp', 'Teorema de la altura a', '', '');
        ?>
      </div>
</div>

    <p>En la figura, tendríamos que \overline{AB} es la hipotenusa, por tanto, según el teorema se cumple que
                \(\triangle ABC \sim \triangle ACD \sim \triangle CBD\)</p>
    <p>Observemos con más detalle:</p>

    <div class="md:grid grid-cols-2 gap-4 items-end">
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/u4t2_teorema_altura_1.webp', 'Teorema de la altura b y c', '', '');
        ?>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/u4t2_img_teorema_altura_d.webp', 'Teorema de la altura d', '', '');
        ?>
      </div>
</div>

<p>Entonces se tienen elementos congruentes, que se resumen en la siguiente tabla, donde el ángulo o segmento escrito en la misma fila es congruente.</p>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 text-lg text-center align-middle">
                        <div class="w-4/4 mx-auto">
                        <?php
                            renderImage('u4t2/teorema_altura_e.webp', 'Ejemplo 2 Teorema de Pitágoras', '', '');
                        ?>
                        </div>
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 text-lg text-center align-middle">
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                        <div class="w-4/4 mx-auto">
                        <?php
                            renderImage('u4t2/teorema_altura_f.webp', 'Ejemplo 2 Teorema de Pitágoras', '', '');
                        ?>
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                        Razón
                        </div>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle B\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\cong\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle B\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      Son el mismo ángulo
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle ACB\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\cong\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle CDB\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      Son ángulos rectos
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

    <p>Por el corolario AA (que deriva del criterio AAA de semejanza), se concluye entonces que \(\triangle ABC
                \sim \triangle CBD\)</p>
    <p>Responde: Considerando lo anterior, ¿cómo puedes justificar que \(\triangle ABC \sim \triangle ACD\)?</p>
 
    <h4>Respuesta</h4>
    <p>De manera similar a lo anterior:</p>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 text-lg text-center align-middle">
                        <div class="w-4/4 mx-auto">
                        <?php
                            renderImage('u4t2/teorema_altura_e.webp', 'Ejemplo 2 Teorema de Pitágoras', '', '');
                        ?>
                        </div>
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 text-lg text-center align-middle">
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                        <div class="w-4/4 mx-auto">
                        <?php
                            renderImage('u4t2/teorema_altura_g.webp', 'Ejemplo 2 Teorema de Pitágoras', '', '');
                        ?>
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                        Razón
                        </div>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle A\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\cong\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle A\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      Son el mismo ángulo
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle ACB\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\cong\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      \(\measuredangle ADC\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center align-middle">
                      Son ángulos rectos
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

<p>Por el corolario AA (que deriva del criterio AAA de semejanza), se concluye entonces que \(\triangle ABC \sim \triangle ACD\)</p>
<p>Gracias a lo anterior y como el \( riangle ABC\) es semejante a los otros dos, concluimos que también \(\triangle CBD \sim \triangle ACD\)</p>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>