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
<h3>Mediatriz de un segmento</h3>
            <p>Recordarás de la unidad anterior que una mediatriz es una recta que pasa justo por el punto medio de un
                segmento y es perpendicular a éste, es decir, forman un ángulo de 90° entre sí. A continuación,
                justificaremos que la construcción que realizaste en la unidad anterior es válida.</p>
            <p>Para ello, recordemos el teorema de la mediatriz: </p>
            <p>Los puntos que equidistan (se encuentran a la misma distancia) de los extremos de un segmento de recta
                constituyen la mediatriz de un segmento, y todo punto de la mediatriz de un segmento de recta equidista
                de los extremos de dicho segmento.</p>
            <p>Para ilustrar lo anterior, recuerda cómo se construye una mediatriz.</p>

</section>

<div class="diagramas">
  <h4 class ="text-center">Construcción de la mediatriz de un segmento</h4>
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 1</h4>
          <p class="text-md">Trazar el segmento dato, en este caso \(\overline{AB}\)
          </p>
        </header>
        <footer class="mt-5 mx-auto self-end">
          <?php
          renderImage('construccioon_mediatriz_segmento_1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <h4 class="mb-2">Paso 2</h4>
          <p class="text-md">Trazar dos círculos con centro en los extremos del segmento y radio de
          medida un poco mayor a la mitad del segmento.</p>
        </header>
        <footer class="mt-5 mx-auto self-end">
          <?php
          renderImage('construccioon_mediatriz_segmento_2.webp', '', '', '');
          ?>
        </footer>
      </div> 
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <h4 class="mb-2">Paso 3</h4>
          <p class="text-md">Marcar los puntos \(C\) y \(D\) en las intersecciones de los dos círculos. Recuerda que, como se utiliza el compás para que la medida hacia estos puntos sea la misma, la recta que pasa por los puntos \(C\) y \(D\) es la mediatriz del segmento.
          </p>
        </header>
        <footer class="mt-5 mx-auto self-end">
          <?php
          renderImage('construccioon_mediatriz_segmento_3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <h4 class="mb-2">Paso 4</h4>
        <p class="text-md">Unir los puntos \(C\) y \(D\), cono lo que se tendrá la mediatriz buscada.
          </p>
        </header>
        <footer class="mt-5 mx-auto self-end">
          <?php
          renderImage('construccioon_mediatriz_segmento_4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>

  </div>
</div>

<section>
            <p>Ahora bien, recuerda nuevamente que el segmento y su mediatriz forman un ángulo recto (de 90°). Según el
                teorema, los segmentos \(\overline{AC}\) y \(\overline{CB}\) tienen la misma medida y eso podemos
                comprobarlo: Observa los dos triángulos que se forman, \(\triangle AKC\) y \(\triangle BKC\) </p>
            <h4>¿Esos dos triángulos podrían ser congruentes? ¿Cómo lo justificarías con apoyo de los postulados?</h4>

    <div class="md:grid grid-cols-2 gap-3">
      <div>
      <p>El postulado que puedes utilizar para justificar es LAL:</p>
            <p>\(\overline{AK} \cong \overline{BK}\) ya que \(K\) es el punto medio del segmento\(\overline{AB}\), porque
                pertenece a la mediatriz, la cual, por definición, pasa por el punto medio.</p>
            <p>\(\measuredangle AKC \cong \measuredangle BKC\) por ser ángulos rectos.</p>
            <p>\(\overline{KC} \cong \overline{KC}\) ya que se trata del mismo segmento.</p>
            <p>Y como los dos triángulos son congruentes, sus lados correspondientes son iguales, entonces los lados
                \(\overline{AC}\) y \(\overline{BC}\) también lo son.</p>
      </div>
      <div>
        <?php
            renderImage('validez_construccioon_mediatriz.webp', 'Validez de la construcción de una mediatriz', '', '');
            ?>
      </div>
    </div>

            <!-- <div class="max-w-xl mx-auto">
                        <?php
            renderImage('validez_construccioon_mediatriz.webp', 'Validez de la construcción de una mediatriz', '', '');
            ?>
             </div>

            <p>El postulado que puedes utilizar para justificar es LAL:</p>
            <p>\(\overline{AK} \cong \overline{BK}\) ya que \(K\) es el punto medio del segmento\(\overline{AB}\), porque
                pertenece a la mediatriz, la cual, por definición, pasa por el punto medio.</p>
            <p>\(\measuredangle AKC \cong \measuredangle BKC\) por ser ángulos rectos.</p>
            <p>\(\overline{KC} \cong \overline{KC}\) ya que se trata del mismo segmento.</p>
            <p>Y como los dos triángulos son congruentes, sus lados correspondientes son iguales, entonces los lados
                \(\overline{AC}\) y \(\overline{BC}\) también lo son.</p> -->
              
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>