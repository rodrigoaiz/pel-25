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
  <p>Ahora estudiemos la siguiente función cuadrática \(y=-x^2 +10x\) que representa el modelo matemático de un pateador de fútbol americano junior.</p>
  <p>Demos diferentes valores a la variable independiente “x”(Tiempo) y obtenemos los valores de “y” (Distancia):</p>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
        <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                 x
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                \(y=-x^2 + 10x\)
                </th>
            </tr>
        </thead>
            <tbody class="text-center">
                <tr class="bg-white border-b border-gray-200">
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
                      39
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      2
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      76
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      3
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      111
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      144
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      175
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      10
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      300
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      15
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      375
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      20
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      400
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      25
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      375
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      30
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      300
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      35
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      175
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      40
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="m-auto pt-5">
            <?php
            renderImage('u2t1_grafica_2.webp', '', '', '');
            ?>
    </div>

            <p>Como puedes observar no es la gráfica de una recta, es una parábola que representa una función cuadrática
                pero además observemos las diferencias finitas de la variable dependiente cuando la variable
                independiente es consecutiva.</p>
            <p>175-144=31</p>
            <p>144-111=33</p>
            <p>111-76=35</p>
            <p>76-39=37</p>
            <p>39-0=39</p>
            <p>Podemos concluir que las primeras diferencias finitas no son constantes, claro no es una variación
                lineal, ahora veamos con las segundas diferencias finitas.</p>
            <p>33-31=2</p>
            <p>35-33=2</p>
            <p>37-35=2</p>
            <p>39-37=2 </p>
            <p>Estas segundas diferencias finitas sí son constantes y esta constante es igual a 2, esto nos dice que la
                variación es cuadrática y tenemos una función cuadrática. </p>

    <?php ob_start(); ?>
        <p>Para repasar lo aprendido en este aprendizaje realiza la siguiente actividad.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a3', "Gráfica del problema del gallinero", $ActividadContent);
        ?>

    <?php ob_start(); ?>
        <p>Finalmente completa la siguiente actividad con esto último definirá perfectamente cuando la situación estará modelada con una función lineal y cuando con una función cuadrática.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a4', "Diferencias finitas", $ActividadContent);
        ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>