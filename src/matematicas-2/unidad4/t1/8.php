<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h2>Notación de congruencia</h2>
<p>No hay que olvidar que los triángulos <strong>congruentes</strong> tienen la misma forma y el mismo
                tamaño. Por tanto, al superponerlos (o encimarlos) coinciden de manera exacta. También hay que recordar
                que el símbolo para indicar que hay congruencia entre dos figuras es \(\cong\)</p>
            <p>Por ejemplo, si \(\triangle PQR y \triangle STU \) son triángulos congruentes, se denota como</p>
            <p>\(\triangle PQR \cong \triangle STU \)</p>
            <p>Que se lee “el triángulo PQR es congruente con el triángulo STU”. Observa las figuras siguientes para que
                lo anterior sea más claro y pon atención al hecho de que habría que “girar” uno de los triángulos para
                que queden en la misma posición y sea más clara la correspondencia de elementos:</p>

 <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-3 gap-5 items-center">
    <div>
                        <?php
          renderImage('correspondencia_elementos.webp', 'Correspondencia de elementos. Ejemplo', '', '');
          ?>
    </div>
    <div>
                    <?php
          renderImage('correspondencia_elementos_rotacion.webp', 'Correspondencia de elementos. Rotación', '', '');
          ?>
              </div>
              <div>
                    <?php
          renderImage('correspondencia_elementos.webp', 'Correspondencia de elementos. Observación', '', '');
          ?>
          </div>
 </div>
 
 <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-5">
        <table class="table-none md:table-fixed text-gray-500 my-0">
        <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                Vértices
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                Ángulos
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                Lados
                </th>
            </tr>
        </thead>
            <tbody class="text-center">
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(P \leftrightarrow S\)
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\measuredangle P \leftrightarrow \measuredangle S \)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\overline{PQ}\leftrightarrow \overline{ST}\)
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(Q \leftrightarrow T\)
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\measuredangle Q \leftrightarrow \measuredangle T\)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\overline{PR}\leftrightarrow \overline{SU}\)
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(R \leftrightarrow U\)
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\measuredangle R \leftrightarrow \measuredangle U\)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\overline{QR}\leftrightarrow \overline{TU}\)
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="md:grid grid-cols-2 gap-2 items-center mt-5 pt-5">
        <div>
        <p>Algo que debes tener en cuenta al utilizar la notación, es que es importante el orden en que escribes los nombres de los vértices, ya que deben ser correspondientes:</p>
        </div>
        <div class="w-75 mx-auto">
                <?php
                renderImage('correspondencia_elementos_notacion.webp', 'Correspondencia de elementos. Notación', '', '', true);
                ?>
      </div>
    </div>
    <div>

<?php ob_start(); ?>
<p>Ahora es tu turno de practicar, realizando el siguiente ejercicio.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u4a5', "Notación de congruencia", $ActividadContent);
?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>