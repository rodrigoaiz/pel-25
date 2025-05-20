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

  <p>En este aprendizaje conocerás y realizarás construcciones con regla y compás para comprender las propiedades y definiciones de algunas figuras geométricas.</p>

  <?php ob_start(); ?>
    <p>Empecemos por recordar algunos conceptos, realiza la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3a5', "Geometría", $ActividadContent);
  ?>

  <p>En hojas blancas, siguiendo cada paso realiza con regla y compás las construcciones que se presentan a continuación. No borres los trazos realizados y entrega las imágenes construidas y reflexiona sobre estas construcciones.</p>

</section>

<div class="diagramas">
  <h4 class ="text-center">I. Construcción de un segmento de recta igual a un segmento dado.</h4>
  <div class="grid grid-cols-3 md:grid-cols-2 xl:grid-cols-3 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_1-1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">2. En la recta \(w\) localiza un punto \(A’\), con centro en éste y radio \(AB\) traza el arco 1-2 que corte a \(w\) en el punto \(B’\).</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_1-1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">3. Toma con el compás la distancia \(AB\). Con centro en \(A’\) y radio \(AB\) traza el arco 1-2. El arco 1-2 segmento \(AB\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_1-3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>

  <p>Lo anterior es la construcción básica, para que puedas construir figuras geométricas, es importante que lo realices de manera correcta ya que te apoyará en las siguientes construcciones, como puedes observar a partir de la construcción y de la que tu realizaste que un segmento de recta es una porción de recta que está limitado entre dos puntos.</p>

</section>

<div class="diagramas">
  <h4 class ="text-center">II. Construcción de un ángulo igual a un ángulo dado.</h4>
  <div class="grid grid-cols-5 md:grid-cols-2 xl:grid-cols-5 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">1. Sea \(A\) el ángulo dado.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_2-1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">2. Con centro en \(A\) y un radio conveniente, trazar el arco 1-2 que corte a los lados del
          ángulo en los puntos \(B\) y \(C\).</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_2-2.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">3. En la recta \(w\) localiza un punto \(A’\), con centro en éste y radio \(AB\) traza el arco
          \(1’\)-\(2’\) que corte a \(w\) en el punto \(B’\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_2-3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <p class="text-md">4. Con radio \(BC\) y centro en \(B’\) traza el arco 3-4 que corta al arco \(1’\)-\(2’\) en el punto
          \(C’\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_2-4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">5. Traza la línea \(A’C’\). \(A’\) es el ángulo deseado.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_2-5.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
  <p>Como pudiste observar utilizaste la primera construcción para generar el ángulo, y un ángulo está generado por dos semirrectas, esto lo puedes constatar en la construcción que tu realizaste.</p>
  <p>La anterior construcción es importante ya que a partir de ella puedes construir la bisectriz de un ángulo y figuras geométricas.</p>
  <p>Construyamos una recta perpendicular.</p>
</section>

<div class="diagramas">
  <h4 class ="text-center">III. Construcción de una perpendicular a una recta dada en un punto dado de ésta.</h4>
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">1. Sea \(w\) la recta y \(P\) un punto de ella.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_3-1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">2. Con centro en \(P\) y un radio conveniente, traza el arco 1-2 que corte a \(w\) en los
          puntos \(A\) y \(B\).</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_3-2.webp', '', '', '');
          ?>
        </footer>
      </div> 
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">3. Con centro en \(A\) y un radio mayor que la mitad de \(AB\) traza el arco 3-4 con centro en
          \(B\) y con el mismo radio traza el arco 5-6 que corte al arco 3-4 en el punto \(C\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_3-3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <p class="text-md">4. Traza la línea que para por \(P\) y \(C\), siendo \(PC\) perpendicular a la recta \(w\) en el
        punto \(P\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_3-4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>

  </div>
</div>

<section>
  <p>Es importante que comprendas la construcción de la recta perpendicular, ya que esta la utilizarás además de esta unidad también en Matemáticas 3 y tiene gran utilidad, para construir la altura de un triángulo y la mediatriz.</p>
</section>

<div class="diagramas">
  <h4 class ="text-center">IV. Construcción del punto medio de un segmento (Construir la perpendicular —mediatriz— de un segmento).</h4>
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">1. Sea \(AB\) el segmento de recta del que se quiere determinar su punto medio.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_1-1.webp', '', '', '');
          ?>
        </footer>
      </div>  
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">2. Con centro en \(A\) y radio mayor que la mitad de \(AB\) trazar el arco 1-2.</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_4-2.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">3. Con centro en \(B\) y el mismo radio anterior traza el arco 3-4, tomando en cuenta que este
          arco corta al arco 1-2 en los puntos \(C\) y \(D\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_4-3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <p class="text-md">4. Traza la línea que pasa por \(C\) y \(D\). La recta \(CD\) corta al segmento \(AB\) en el
                                punto \(M\) que equidista de los extremos \(A\) y \(B\), por lo tanto, \(M\) es el punto medio
                                del segmento \(AB\). Observa que \(CD\) es la mediatriz del segmento \(AB\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_4-4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>

  </div>
</div>

<section>
  <p>Como pudiste observar el punto medio es el punto que está a la mitad del segmento de recta y la mediatriz es el segmento de recta perpendicular a otro segmento trazado por su punto medio.</p>
</section>

<div class="diagramas">
  <h4 class ="text-center">V. Construcción de la bisectriz de un ángulo dado.</h4>
  <div class="grid grid-cols-5 md:grid-cols-2 xl:grid-cols-5 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">1. Sea \(A\) el ángulo dado.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_5-1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">2. Con centro en \(A\) y un radio conveniente, trazar el arco 1-2 que corte a los lados del
          ángulo en los puntos \(B\) y \(C\).</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_5-2.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">3. Con centro en \(B\) y radio mayor que la mitad de \(BC\), trazar el arco 3-4.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_5-3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <p class="text-md">4. Con centro en \(C\) y el mismo radio anterior, trazar el arco 5-6. Los arcos 5-6 y 3-4 se
        cortan en el punto \(D\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_5-4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">5. Unir los puntos \(A\) y \(D\), siendo \(AD\) la bisectriz de ángulo \(A\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_5-5.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
  <p>Observaste que la bisectriz de un ángulo es dividir un ángulo exactamente a la mitad, de esta manera generas dos ángulos congruentes.</p>
</section>

<div class="diagramas">
  <h4 class ="text-center">VI. Construcción de la división de un segmento de recta en \(n\) partes iguales</h4>
  <div class="grid grid-cols-5 md:grid-cols-2 xl:grid-cols-5 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">1. Sea el segmento de recta \(AF\) y \(n\) el número de partes en que debe dividirse. En el
          ejemplo \(n=5\).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_6-1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">2. Traza una recta que toque uno de los extremos del segmento (en el ejemplo el extremo
          es \(A\)) que forme con \(AF\) un ángulo cualquiera, de preferencia agudo.</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_6-2.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">3. A partir del vértice \(A\), y sobre la recta \(A\)-6, construir \(n\) segmentos iguales
          consecutivos y determinar los puntos 1, 2, 3, 4, 5, etc.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_6-3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <p class="text-md">4. Unir el último punto encontrado (en el ejemplo es 5) con el otro extremo del segmento
        \(AF\) (en el ejemplo es \(F\)).
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_6-4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-5 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">5. Trazar líneas paralelas a la recta de los puntos extremos (en el ejemplo es 5-\(F\)),
                                por los puntos 1, 2, 3, etc., de modo que corten el segmento \(AF\) y determinar así los
                                puntos \(B\), \(C\), \(D\), \(E\) que dividen al segmento \(AF\) en \(n\) partes iguales.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u3t2_diagrama_6-5.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
  <?php ob_start(); ?>
      <p>Finalmente pudiste construir rectas paralelas que son aquellas rectas que tiene una misma distancia entre ellas y nunca se van a intersectar , ya que tienen el mismo ángulo de inclinación pero son equidistantes.</p>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u3a6', "Construcción de polígonos regulares", $ActividadContent);
  ?>

  <p>Muy bien ya realizaste construcciones, ahora empecemos a trabajar con ejercicios ya con medidas, aplicando claro está las definiciones que comprendiste en este aprendizaje.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>