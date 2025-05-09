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
<h2>Razón entre perímetros y áreas de triángulos semejantes</h2>
<div class="md:grid grid-cols-2 gap-4 items-center">
      <div>
<p>Hasta ahora, se ha revisado qué pasa con los ángulos y los lados de triángulos semejantes, sin embargo, sus perímetros y áreas también guardan una relación especial, que se analizará a continuación.</p>
            <p>Puedes comprobar que estos dos triángulos son semejantes, con los datos proporcionados puede justificarse
                con el postulado de semejanza LAL o LLL.</p>
<p>Sabiendo esto, se calcularán el área y el perímetro de ambos:</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/semejanza_triangulos.webp', 'Semejanza de triángulos', '', '', true);
        ?>
      </div>
</div>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
        <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                 
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                 \(\triangle I\)
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                \(\triangle II\)
                </th>
            </tr>
        </thead>
            <tbody class="text-center">
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                   Perímetro
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(P=3+4+5=12\)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(P=6+8+10=24\)
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                  Área
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(A=\frac{bh}{2}=\frac{4(3)}{2}=6u^2\)
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    \(A=\frac{bh}{2}=\frac{8(6)}{2}=24u^2\)
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

            <p><strong>Nota</strong>: Observa que una de las alturas de cada triángulo corresponde con el lado vertical,
                por lo que es sencillo calcular el área.</p>
            <p>Responde lo siguiente en tu cuaderno, reflexionando sobre las respuestas, las cuales se revisarán más
                adelante:</p>
            <ol class="alpha">
                <li>¿Qué relación notas entre los perímetros de los triángulos?</li>
                <li>¿Qué relación notas entre las áreas de los triángulos?</li>
                <li>Calcula la constante de proporcionalidad (o de semejanza por que se aplica a este tema) entre los
                    triángulos.</li>
                <li>¿Qué relación notas entre \(k\) y la razón de los perímetros?</li>
                <li>¿Qué relación notas entre \(k\) y la razón de las áreas?</li>
            </ol>
            <p>Para los triángulos de la actividad anterior:</p>
            <p>La constante \(k\) resulta:</p>
            <p>\(k=\frac{3}{6}=\frac{1}{2}=0.5\)</p>
            <p>Nota: Para obtener la constante, se calculó la razón del \(\triangle I\) sobre el \(\triangle II\) , si tú lo
                hiciste al revés, obtuviste el recíproco o inverso multiplicativo, es decir: \(\frac{6}{3}=2\) lo cual
                también es correcto, sólo debes tener cuidado de recordar que para todo el ejercicio debes trabajar con
                el \(\triangle II\) en el numerador.</p>
            <p>Si se calcula la razón entre los perímetros:</p>
            <p>\(\frac{12}{24}=\frac{6}{12}=\frac{3}{6}=\frac{1}{2}\)</p>
            <p><strong>Y este valor es igual al de la constate.</strong></p>
            <p>Si se calcula la razón entre las áreas:</p>
            <p>\(\frac{6}{24}=\frac{3}{12}=\frac{1}{4}\)</p>
            <h3>Y este valor es igual al cuadrado de la constate.</h3>
            <p>Esto ejemplifica dos teoremas relacionados con el perímetro y el área de triángulos semejantes. Cabe
                mencionar que, simplificando la definición, un teorema es una idea o una oración de la cual puede
                probarse que es verdadera a partir de otros teoremas ya probados, o demostrados, o de postulados. Dichos
                teoremas son:</p>
            <p><strong>Teorema</strong>: La razón entre los perímetros de dos polígonos semejantes es igual a la razón
                entre las longitudes de cualquier par de lados correspondientes, es decir, es igual a la constante de
                semejanza.</p>
            <p><strong>Teorema</strong>: La razón entre las áreas de dos polígonos semejantes es igual al cuadrado de la
                razón entre las longitudes de cualquier par de lados correspondientes, es decir, es igual al cuadrado de
                la constante de semejanza.</p>

<?php ob_start(); ?>
    <p>Para practicar, realiza el siguiente ejercicio.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a14', "Áreas y perímetros de triángulos semejantes", $ActividadContent);
?>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>