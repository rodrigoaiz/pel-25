<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
    <h2>Criterios de semejanza de triángulos</h2>
            <p>Realiza el siguiente ejercicio. Toma en cuenta que no has resuelto ejercicios similares a todos los
                incisos, pero el objetivo es que reflexiones sobre los datos que se te proporcionan y qué puedes hacer
                con ellos y el conocimiento que ya tienes sobre semejanza:</p>
            <p>*Determina qué parejas de triángulos son semejantes, argumenta tu respuesta y reflexiona ¿los datos
                proporcionados son suficientes?</p>
</section>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p> -->
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/u4t2_criterios_semejanza_a1.webp', 'Ejercicio criterios de semejanza a)', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p> -->
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/u4t2_criterios_semejanza_b1.webp', 'Ejercicio criterios de semejanza b)', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p> -->
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/u4t2_criterios_semejanza_c1.webp', 'Ejercicio criterios de semejanza c)', '', '');
          ?>
        </footer>
      </div>
    </article>
        <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p> -->
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/u4t2_criterios_semejanza_d1.webp', 'Ejercicio criterios de semejanza d)', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
              <p>Para explorar las soluciones, revisa lo siguiente.</p>
            <p>De forma similar a la congruencia, para asegurar que dos triángulos son semejantes, existen criterios que
                permiten afirmar la existencia o ausencia de semejanza. Son los siguientes:</p>

<div class="md:grid grid-cols-2 items-center">
      <div>
        <h3>Criterio Ángulo-Ángulo-Ángulo (AAA)</h3>
        <p>Dos triángulos son semejantes si tienen ángulos respectivamente congruentes. Por ejemplo:</p>
      </div>
      <div class="w-4/4 mx-auto">
<?php
            renderImage('u4t2/u4t2_criterios_semejanza_b1.webp', 'Ejercicio criterios de semejanza b)', '', '', true);
?>
      </div>
</div>

            <p>$$\measuredangle A\cong \measuredangle A^\prime $$</p>
            <p>$$\measuredangle B\cong \measuredangle B^\prime $$</p>
            <p>$$\measuredangle C\cong \measuredangle C^\prime $$</p>
            <p>Entonces los dos triángulos son semejantes: </p>
            <p>$$\triangle ABC \approx \triangle A^\prime B ^\prime C^\prime$$</p>
            <p>Observa que, como en la congruencia, el nombre de los triángulos se asigna de modo que los vértices sean
                correspondientes.</p>
            <p>Corolario Ángulo-Ángulo: Dos triángulos son semejantes si tienen dos ángulos respectivamente congruentes.
            </p>
            <p>Un corolario, en palabras muy simples, es una oración o idea que puede plantearse fácilmente a partir de
                otra.</p>

<div class="md:grid grid-cols-2 items-center">
      <div>
        <h3>Criterio Lado-Ángulo-Lado</h3>
        <p>Dos triángulos son semejantes si tienen respectivamente congruentes un ángulo comprendido entre dos lados proporcionales. Por ejemplo:</p>
      </div>
      <div class="w-4/4 mx-auto">
<?php
            renderImage('u4t2/u4t2_criterios_semejanza_c1.webp', 'Ejercicio criterios de semejanza c)', '', '', true);
?>
      </div>
</div>

            <p>Los ángulos \(\measuredangle C Y \measuredangle C^\prime \) son correspondientes, además \(\measuredangle
                C\cong \measuredangle C^\prime \)</p>
            <p>Los lados que forman estos ángulos también son correspondientes y proporcionales:</p>
            <p>\(\frac{\overline{CA}}{\overline{C^\prime A^\prime}}= \frac{\overline{CB}}{\overline{C^\prime B^\prime}}\)
            </p>
            <p>Que con las medidas de los triángulos \(\frac{2}{6}=\frac{3}{9}\)</p>
            <p>Simplificando las fracciones: \(\frac{1}{3}=\frac{1}{3}\)</p>

<div class="md:grid grid-cols-2 items-center">
      <div>
        <h3>Criterio Lado-Lado-Lado (LLL)</h3>
            <p>Dos triángulos son semejantes si tienen sus tres lados respectivamente proporcionales. Por ejemplo:</p>
      </div>
      <div class="w-4/4 mx-auto">
<?php
            renderImage('u4t2/u4t2_criterios_semejanza_a1.webp', 'Ejercicio criterios de semejanza a)', '', '', true);
?>
      </div>
</div>

            <p>Si se cumple:</p>
            <p>\(\frac{\overline{AB}}{\overline{A^\prime B^\prime}}= \frac{\overline{BC}}{\overline{B^\prime C^\prime}}=
                \frac{\overline{CA}}{\overline{C^\prime A^\prime}}\)</p>
            <p>Entonces: \(\triangle ABC \sim \triangle A^\prime B ^\prime C^\prime\)</p>
            <p>Col las medidas de los triángulos:</p>
            <p>\(\frac{60}{12}=\frac{45}{9}=\frac{35}{7}=5\)</p>
            <p>La constante de proporcionalidad es 5</p>
            <p>En cuanto al inciso d) del ejercicio, observa que los datos son insuficientes, ya que no hay datos que te
                garanticen que los ángulos que no te proporcionan son de la misma medida en ambos triángulos, por lo que
                no puedes aplicar ninguno de los criterios anteriores y la conclusión es que no puede saberse con total
                certeza si los triángulos son o no semejantes.</p>

<?php ob_start(); ?>
    <p>Para terminar este tema, realiza el siguiente ejercicio.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a13', "Criterios de semejanza de triángulos", $ActividadContent);
?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>