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
<h2>Teorema de Thales</h2>
            <p>Reflexiona sobre lo siguiente, más adelante conocerás las respuestas:</p>
            <p>¿Cómo podrías dividir un segmento en dos partes iguales utilizando solamente tu regla sin graduar y tu
                compás?</p>
            <p>¿Cómo podrías dividirlo en cuatro partes iguales?</p>
            <p>¿Y en tres?</p>
            <p>Probablemente pensaste en utilizar la mediatriz para responder las dos primeras preguntas, ya que esta
                recta pasa por el punto medio de un segmento y, por lo tanto, lo divide en dos partes iguales. Sin
                embargo, esto ya no es útil para dividir al segmento en tres partes iguales, tampoco para dividirlo en
                cinco o en siete, por ejemplo.</p>
            <p>Entonces recurriremos a la siguiente construcción:</p>
            <h3>Divide un segmento AB en tres partes iguales</h3>
</section>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <!-- <h4 class="mb-2">Paso 1</h4> -->
          <p class="text-md">Dibuja tu segmento \(AB\), recuerda que es arbitrario.
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_a.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 2</h4> -->
          <p class="text-md">Y traza una semirrecta que pase por uno de los extremos de
                            \(\overline{AB}\)</p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_b.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 3</h4> -->
          <p class="text-md">Abre ahora tu compás al radio que desees y traza un círculo con centro en
                            el punto \(A\).
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_c.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
        <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 3</h4> -->
          <p class="text-md">La intersección de ese círculo con la semirrecta (en azul) te dará el
                            punto \(C\), que te servirá como nuevo centro.
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_d.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 px-5 pb-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-4 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 5</h4> -->
          <p class="text-md">Repite lo anterior dos veces más para generar los puntos \(D\) y \(E\). No
                            olvides mantener el mismo radio todo el tiempo.
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_e.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-4 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 6</h4> -->
          <p class="text-md">Vas a tener tantos círculos como partes en que desees dividir tu
                            segmento, es decir, si divides en tres, debes trazar tres círculos, si divides en 5, tendrás
                            5 círculos, si divides en 6 partes, tendrás 6 círculos, si divides en \(n\) partes, tendrás
                            \(n\) círculos. Ahora une los puntos \(B\) y \(E\), es decir, el punto de tu segmento que no has utilizado y
                                el último que hayas generado con los círculos.
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_f.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-4 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 7</h4> -->
          <p class="text-md">Traza segmentos paralelos a este segmento que acabas de dibujar
                            \((\overline{BE})\), que pasen respectivamente por los puntos \(D\) y \(E\).
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_g.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
        <article class="bg-white px-4 py-4 col-span-4 md:col-span-4 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 7</h4> -->
          <p class="text-md">Una vez que termines, marca los puntos donde estas paralelas intersequen
                            a tu segmento original, \(\overline{BE}\) En este caso, los puntos se nombraron \(F\) y \(G\).
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/segmento_tres_partes_h.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
  <p>Observa cuidadosamente la siguiente figura. En ella, pueden notarse dos
                            triángulos:</p>
                            <p>\(\triangle ABC\) y \(\triangle DEC \). Se sabe, además, que \(\overline{DE}\parallel
                                \overline{AB}\) (el segmento \(DE\) es paralelo al segmento \(AB\)).</p>
                            <p>Reflexiona ¿qué puedes decir con respecto a la longitud de los segmentos </p>
                            <p>\(AF\), \(FG\) y \(GB\)? </p>
                            <p>Quizá notaste que esos segmentos tienen la misma medida, con lo que ya se logró el
                                objetivo del ejercicio.</p>

<?php ob_start(); ?>
    <p>Practica un poco la construcción anterior.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a16', "División de un segmento", $ActividadContent);
?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>