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
            <p>Ahora vamos a observar un poco más la construcción realizada anteriormente, se realizarán algunas
                preguntas durante esta revisión. Respóndelas en tu cuaderno o mentalmente y compara con la explicación
                que se ofrece en cada párrafo, te servirá para generar ideas.</p>
            <p>Observa la construcción final:</p>
      <div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t2/segmento_tres_partes_h.webp', 'Segmento en tres partes h', '', '');
        ?>
      </div>

      <p>Y de ella vamos a destacar el segmento inicial y las rectas paralelas:</p>

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
            renderImage('u4t2/segmento_tres_partes_i.webp', 'Segmento en tres partes i', '', '');
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
            renderImage('u4t2/teorema_tales_a.webp', 'Teorema de Tales a', '', '');
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
            renderImage('u4t2/teorema_tales_b.webp', 'Teorema de Tales b', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<!-- <div class="md:grid grid-cols-3 gap-4 items-center">
      <div>
        <?php
            renderImage('u4t2/segmento_tres_partes_i.webp', 'Segmento en tres partes i', '', '');
        ?>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_tales_a.webp', 'Teorema de Tales a', '', '');
        ?>
      </div>
            <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_tales_b.webp', 'Teorema de Tales b', '', '');
        ?>
      </div>
</div> -->

<section>
            <p>Responde: ¿qué puedes decir con respecto a los ángulos que tienen vértice en los puntos \(F\), \(G\) y \(B\)?
            </p>
            <p>Nota que esta figura es la de rectas paralelas cortadas por una transversal, donde la transversal es
                \(\overline{AB}\) Esto implica que hay ángulos iguales, por ejemplo, los ángulos marcados con verde en la
                siguiente figura son congruentes por ser ángulos correspondientes.</p>

      <div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_tales_c.webp', 'Teorema de Tales c', '', '');
        ?>
      </div>

      <p>Lo mismo ocurre si ahora consideramos \(\overline{AE}\) como la transversal:</p>

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
            renderImage('u4t2/teorema_tales_d.webp', 'Teorema de Tales d', '', '');
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
            renderImage('u4t2/teorema_tales_e.webp', 'Teorema de Tales e', '', '');
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
            renderImage('u4t2/teorema_tales_f.webp', 'Teorema de Tales f', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
            <p>Nuevamente, los ángulos marcados en naranja tienen la misma medida, por ser ángulos correspondientes.</p>
            <p>Responde: Sabiendo lo anterior, ¿qué puedes decir de los triángulos \(\triangle AFC , \triangle AGD ,
                \triangle ABE \)?</p>
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
            renderImage('u4t2/teorema_tales_g.webp', 'Teorema de Tales g', '', '');
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
            renderImage('u4t2/teorema_tales_h.webp', 'Teorema de Tales h', '', '');
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
            renderImage('u4t2/teorema_tales_i.webp', 'Teorema de Tales i', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
              <p>Una posible respuesta a la pregunta anterior es que se trata de triángulos semejantes. </p>
            <p>Antes de continuar, responde: ¿qué criterio te sirve para justificar la afirmación de que los triángulos
                son semejantes?</p>
            <p>Lo que conocemos de estos triángulos es que sus ángulos son iguales, los tres, dado que comparten al
                \(\measuredangle A\), por tanto, el criterio es AAA. Lo cual implica que, para los dos triángulos más
                pequeños (\(\triangle AFC \sim \triangle AGD\)):</p>
            <p>\(\frac{\overline{AG}}{\overline{AF}}=
                \frac{\overline{AD}}{\overline{AC}}=\frac{\overline{FG}}{\overline{CF}}\)</p>
            <p>Responde: </p>
            <ul class="ul-disc">
                <li>¿Cómo quedaría la proporción para los otros dos pares de triángulos \((\triangle AFC \sim \triangle
                    ABE ; \triangle AGD \approx \triangle ABE)\)?</li>
                <li>¿Crees que también haya proporción al obtener las razones \(\frac{\overline{FG}}{\overline{AF}}=
                    \frac{\overline{CD}}{\overline{AC}}\)? </li>
                <li>¿Por qué?</li>
            </ul>
            <p>La respuesta a la segunda pregunta es sí, y para verificarlo, partiremos de lo que ya sabemos, que por
                ser triángulos semejantes, se cumple:</p>
            <ul class="ul-disc">
                <li>\(\frac{\overline{AG}}{\overline{AF}}= \frac{\overline{AD}}{\overline{AC}}\)</li>
            </ul>
            <p>Reescribimos la longitud de los segmentos más grandes como la suma de segmentos más pequeños:</p>
            <ul class="ul-disc">
                <li>\(\frac{\overline{AF}+\overline{FG}}{\overline{AF}}=\frac{\overline{AC}+\overline{CD}}{\overline{AC}}
                    \)</li>
            </ul>
            <p>Separamos las sumas como suma de fracciones con el mismo denominador</p>
            <ul class="ul-disc">
                <li>\(\frac{\overline{AF}}{\overline{AF}}+ \frac{\overline{FG}}{\overline{AF}}
                    =\frac{\overline{AC}}{\overline{AC}}+ \frac{\overline{CD}}{\overline{AC}}\)</li>
            </ul>
            <p>Simplificamos</p>
            <ul class="ul-disc">
                <li>\(1+ \frac{\overline{FG}}{\overline{AF}} = 1+ \frac{\overline{CD}}{\overline{AC}} \)</li>
                <li>\(1+ \frac{\overline{FG}}{\overline{AF}}-1 = \frac{\overline{CD}}{\overline{AC}} \)</li>
                <li>\(\frac{\overline{FG}}{\overline{AF}}+1 -1 = \frac{\overline{CD}}{\overline{AC}} \)</li>
                <li>\(\frac{\overline{FG}}{\overline{AF}} = \frac{\overline{CD}}{\overline{AC}} \)</li>
            </ul>
            <p>Y obtenemos, justamente, que esos segmentos sí son proporcionales.</p>
            <p>Lo anterior fue enunciado en el llamado Teorema de Thales, el cual indica que no solamente los segmentos
                que comparamos son proporcionales, sino también los otros que forman a nuestras “rectas transversales”
                (que en las figuras son las que pasan por el punto \(A)\). El teorema dice que, cuando se tienen rectas
                paralelas que cortan a dos transversales, entonces las longitudes de los segmentos interceptados entre
                las rectas paralelas y cada una de las transversales son proporcionales. Los segmentos interceptados son
                aquellos que se encuentran entre los puntos de intersección de cada recta transversal con las paralelas
                \((\overline{CD}\) y \(\overline{DE}\) por ejemplo). Es decir, para nuestra figura tendríamos: </p>
            <ul class="ul-disc">
                <li>\(\frac{\overline{FG}}{\overline{AF}} = \frac{\overline{CD}}{\overline{AC}} \)</li>
                <li>\(\frac{\overline{FG}}{\overline{GB}} = \frac{\overline{CD}}{\overline{DE}} \)</li>
            </ul>

      <div class="w-3/4 mx-auto mt-5">
        <?php
            renderImage('u4t2/teorema_tales.webp', 'Teorema de Tales', '', '');
        ?>
      </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>