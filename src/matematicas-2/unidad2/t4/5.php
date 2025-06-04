<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
    <p>Ahora realicemos esa misma comparación de \(y=x^2\) con \(y=x^2 -3\)</p>
    <?php
            renderImage('u2t4_img_grafica9.webp', '', '', '', true);
    ?>
                <p>¿Qué pasa con el parámetro \(k\), ahora que es \(k=-3\)?</p>
                <p>Puedes comprobar realizando las tablas de ambas funciones </p>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(x\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y= x^2$\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=x^2-3\)
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
                      6
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
                      1
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
                      -2
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
                      -3
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
                      -2
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
                      1
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
                      6
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

      <p>Eje simetría es \(x=0\)</p>
            <p>La concavidad es positiva</p>
            <p>El vértice (0,-3)</p>
            <p>Para las raíces, la intersección con el eje “\(x\)” \(y=0\)</p>
            <p>\(0=x^2-3\)</p>
            <p>\(3=x^2\)</p>
            <p>\(\sqrt{3}=\sqrt{x^2}\)</p>
            <p>\(-\sqrt{3}=x\)</p>
            <p>\(\sqrt{3}=x\)</p>
            <p>El vértice representa un punto mínimo.</p>
            <p>Reafirmemos nuestros conocimientos sobre una parábola y su eje de simetría.</p>

    <div class="md:grid grid-cols-2 gap-3">
        <div>
            <a href="https://youtu.be/mZASWSo_92c?si=I5r09Zd6pi5Qm-e-" target="_blank">
                <?php
                renderImage('u2t4_banner_parabola.webp', '', '', '');
                ?>
            </a>
        </div>
        <div>
        <a href="https://youtu.be/fBqp5VjntKY?si=D3xH9pSJ4_ZslcC8" target="_blank">
            <?php
            renderImage('banner_video_vertices_eje_de_simetria_y_raices.webp', '', '', '');
            ?>
        </a>
      </div>
    </div>
    <div>

    <?php ob_start(); ?>
        <p>Revisa las siguientes tarjetas para reafirmar tus conocimientos.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a13', "Vértice, eje de simetría, raíces", $ActividadContent);
    ?>

<p>Ahora estudiamos el parámetro h de \(y= a(x-h)^2 +k, a \neq 0\).</p>
<p>Otra vez comparemos con \(y=x^2\), la función \(y=(x-5)^2\)</p>

    <?php
            renderImage('u2t4_img_grafica10.webp', '', '', '', true);
    ?>

<p>¿Qué conclusión obtienes de variar el parámetro \(h\)?</p>
<p>Puedes comprobar realizando las tablas de ambas funciones</p>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(x\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y= x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=(x-5)^2\)
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
                      64
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
                      49
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
                      36
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
                      25
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
                      16
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
                      9
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
                      4
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      16
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      25
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      6
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      36
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      7
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      49
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      64
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

      <p>Contesta lo siguiente de la función \(y=(x-5)^2\)</p>
            <p>El eje de simetría \(x= 5\)</p>
            <p>Concavidad es positiva</p>
            <p>Vértice (5,0)</p>
            <p>Raíces o intersección con el eje “\(x\)”</p>
            <p>\(y=0\)</p>
            <p>\(0=(x-5)^2\)</p>
            <p>\(5=x\)</p>
            <p>El vértice es el punto mínimo</p>
            <p>Ahora comparemos con \(y=(x+5)^2\)</p>

    <?php
            renderImage('u2t4_img_grafica11.webp', '', '', '', true);
    ?>

    <p>Puedes comprobar realizando las tablas de ambas funciones.</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
          <table class="table-none md:table-fixed text-gray-500 my-0">
              <tbody class="text-center">
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(x\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y= x^2\)
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      \(y=(x+5)^2\)
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      64
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      169
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -7
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      49
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      144
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -6
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      36
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      121
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      25
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      100
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      -4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      16
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      81
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
                      64
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
                      49
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
                      36
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
                      25
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
                      16
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
                      9
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
                      4
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      16
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      25
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      0
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      6
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      36
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      1
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      7
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      49
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-gray-200">
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      64
                      </td>
                      <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

      <p>El eje de simetría \(x=-5\)</p>
            <p>La concavidad es positiva</p>
            <p>El vértice (-5,0)</p>
            <p>Las raíces </p>
            <p>$$y=(x-5)^2$$</p>
            <p>$$Y=0$$</p>
            <p>$$5=x$$</p>
            <p>El vértice es un punto mínimo.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>