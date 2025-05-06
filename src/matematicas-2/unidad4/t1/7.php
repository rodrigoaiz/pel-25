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

<h2>Correspondencia de elementos</h2>
<div class="md:grid grid-cols-2 gap-3 items-center">
        <div>
        <p>Se mencionó anteriormente que los elementos del triángulo se comparan de manera que “coincidan” según su forma. Cuando se da esta coincidencia, se dice que los elementos son correspondientes (lados correspondientes, vértices correspondientes, ángulos correspondientes). Por ejemplo: La tabla muestra elementos correspondientes para el siguiente par de triángulos:</p>
        </div>
        <div>
                <?php
                renderImage('correspondencia_elementos.webp', 'Correspondencia de elementos', '', '', true);
                ?>
      </div>
    </div>
    <div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    \(A \leftrightarrow D\)
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\measuredangle A\leftrightarrow \measuredangle D \)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\overline{AB}\leftrightarrow \overline{DE}\)
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(B \leftrightarrow E\)
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\measuredangle B \leftrightarrow \measuredangle E\)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\overline{AC}\leftrightarrow \overline{DF}\)
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(C \leftrightarrow F\)
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\measuredangle C \leftrightarrow \measuredangle F\)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(\overline{BC}\leftrightarrow \overline{EF}\)
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <p>Observa que se utiliza la flecha de doble punta para indicar la correspondencia: \(A \leftrightarrow D\),
    “el vértice \(A \) corresponde con el vértice \( D\)”</p>

<?php ob_start(); ?>
<p>Realiza la siguiente actividad.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u4a4', "Correspondencia de elementos", $ActividadContent);
?>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>