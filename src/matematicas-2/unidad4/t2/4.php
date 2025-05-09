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
    <h2>Semejanza de triángulos</h2>
            <p>De forma similar a lo que se estudió en la congruencia, para la semejanza compararemos triángulos, por la
                sencillez de la figura. Para esto, ten presentes tus respuestas a las preguntas que respondiste al
                terminar el ejercicio anterior y la definición de semejanza, para realizar lo siguiente. Toma en cuenta
                los datos, no el hecho de que las figuras “parezcan” semejantes:</p>
            <p>Determina qué parejas de triángulos son semejantes, argumenta tu respuesta y reflexiona ¿los datos
                proporcionados son suficientes?</p>
</section>

<div class="diagramas">
  <div class="grid grid-cols-3 md:grid-cols-2 xl:grid-cols-3 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p> -->
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/ejercicio_triangulos_semejantes_a.webp', 'Ejercicio triángulos semejantes a)', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p> -->
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/ejercicio_triangulos_semejantes_b.webp', 'Ejercicio triángulos semejantes b)', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <p class="text-md">1. Sea \(AB\) el segmento de recta dado.
          </p> -->
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/ejercicio_triangulos_semejantes_b.webp', 'Ejercicio triángulos semejantes c)', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
    <h4>Solución</h4>
        <?php
            renderImage('u4t2/ejercicio_triangulos_semejantes_a.webp', 'Ejercicio triángulos semejantes a)', '', '', true);
        ?>
            <p>Requerimos comprobar si los lados correspondientes guardan proporción, por lo que hay que identificar
                primero cuáles son esos lados correspondientes: Para el primer triángulo, el lado más largo es el de 15,
                mientras que para el segundo es el de 2.5, por tanto, es la primera pareja de lados a comparar. Para el
                primer triángulo, el lado más corto es el de 6, para el segundo es el de 1, por tanto, son la segunda
                pareja de lados a comparar. Y la tercera pareja son los lados que aún no se mencionan, el de 12 para el
                primer triángulo con el de 2 en el segundo triángulo.</p>
            <p>Elegimos ahora dejar los datos del primer triángulo en el numerador y calculamos las razones:</p>
            <p>$$\frac{15}{2.5}; \frac{6}{1} ; \frac{12}{2}$$</p>
            <p>Simplificando</p>
            <p>$$\frac{15}{2.5}=6$$</p>
            <p>$$\frac{6}{1}=6$$</p>
            <p>$$\frac{12}{2}=6$$</p>
            <p>Las tres razones son iguales, lo cual implica que hay proporcionalidad entre las figuras con una
                constante de 6, es decir, los dos triángulos son semejantes: \(\triangle I \sim \triangle II\)</p>
        <?php
            renderImage('u4t2/ejercicio_triangulos_semejantes_b.webp', 'Ejercicio triángulos semejantes b)', '', '', true);
        ?>
            <p>De manera similar al ejercicio anterior, comparamos los lados más largos, los lados más cortos y
                finalmente el tercer lado de cada triángulo, con lo que se obtienen las siguientes razones, ya
                simplificadas:</p>
            <p>$$\frac{100}{75}= \frac{4}{3} \approx 1.333$$</p>
            <p>$$\frac{50}{35}= \frac{10}{7} \approx 1.4286$$</p>
            <p>$$\frac{80}{60}= \frac{4}{3} \approx 1.333$$</p>
            <p>Observa que las razones son diferentes. A pesar de que sí haya dos iguales, el hecho de que la otra sea
                diferente ya implica que los dos triángulos NO son semejantes.</p>
            <p>Con el apoyo de los ejemplos anteriores, verifica si la pareja de triángulos del inciso c son
                    semejantes, después puedes verificar la solución con el botón.</p>

<div class="md:grid grid-cols-2 gap-3 items-center">
        <div class="mb-10">
        <?php
              $accordionItems1 = [
                [
                  'title' => 'Solución',
                  'content' => '<p>En este caso los lados más largos son 291 en el primer triángulo y 97 en el segundo. Los
                            lados cortos son 195 y 65. Por lo tanto habría que comparar los lados de 216 y 72.</p>
                            <p>Realizando las operaciones:</p><p>$$\frac{291}{97}=3$$</p><p>$$\frac{195}{65}=3$$</p>
                            <p>$$\frac{216}{72}=3$$</p>
                            <p>Hay proporción, por tanto \(\triangle I \sim \triangle II\)</p>
                  '
                ]
              ];
              renderAccordion($accordionItems1, 'primero-');
              ?>
        </div>
        <div>
                <?php
                renderImage('u4t2/ejercicio_triangulos_semejantes_c.webp', 'Ejercicio triángulos semejantes c)', '', '', true);
                ?>
        </div>
</div>

<?php ob_start(); ?>
    <p>Para terminar, realiza el siguiente ejercicio.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a12', "Semejanza de triángulos", $ActividadContent);
?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>