<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<h2>Ángulos congruentes</h2>
<p>De manera similar a lo que reflexionaste en el apartado anterior, podemos definir que los ángulos
                congruentes son los que tienen la misma medida, independientemente de su posición o lo que midan los
                segmentos que los componen, pero, si sólo tienes tu compás y una regla sin graduar, ¿cómo podrías
                verificar si dos ángulos son congruentes? ¿Cómo podrías construirlos?</p>
            <p>Lleva a cabo tu propuesta en tu cuaderno, luego lee lo siguiente para responder a las preguntas
                anteriores.</p>
            <p>Quizá respondiste que para que dos ángulos sean congruentes, deben tener la misma medida, la misma
                separación entre las dos semirrectas que lo conforman. Pero para tomar esa medida, no es suficiente con
                abrir el compás y colocar una punta en cada semirrecta, sino que hay que asegurarse de que tomamos la
                medida desde la misma “posición” sobre las semirrectas.</p>
            <p>Esto se detalla a continuación.</p>
</section>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <h4 class="mb-2">Paso 1</h4>
          <p class="text-md">El problema que vamos a resolver es construir un ángulo que sea congruente a otro dado. Entonces, nuestro dato es un ángulo que va a quedar fijo durante todo el problema, así que lo proponemos:
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 2</h4>
          <p class="text-md">Y marcamos un segmento donde deseemos realizar la construcción del otro ángulo.</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_2.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 3</h4>
          <p class="text-md">A continuación, trazamos primero un arco, con la punta metálica del compás sobre el vértice del ángulo, intersectando las dos semirrectas. Esto con la finalidad de que la distancia del vértice al punto desde el que tomaremos la medida del ángulo sea la misma en las dos semirrectas.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 4</h4>
          <p class="text-md">Y, sin cambiar la medida del compás, trazamos un arco sobre el segmento donde construiremos el ángulo congruente y que mida aproximadamente lo mismo que el que dibujamos primero.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 px-5 pb-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <h4 class="mb-2">Paso 5</h4>
          <p class="text-md">Medimos ahora el ángulo, colocando las puntas sobre los puntos A y B.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_5.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 6</h4>
          <p class="text-md">Y trasladamos esa medida al nuevo ángulo, también colocando la punta metálica sobre la intersección del arco con el segmento.</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_6.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 7</h4>
          <p class="text-md">Finalmente, unimos el vértice del nuevo ángulo, con la intersección de los dos arcos.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_7.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 8</h4>
          <p class="text-md">Con lo cual finalizamos la construcción.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('angulos_congruentes_8.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
<p>También puedes observar el video, donde se incluye cómo construir segmentos y ángulos congruentes.</p>
<div class="lg:grid">
      <a href="https://youtu.be/HzRx7uCwC8E?si=ilfemuJsu2mxFRus" target="_blank">
                <?php
                renderImage('u4t1_banner_video_segmentos.webp', '', '', '');
                ?>
      </a>
</div>
<?php ob_start(); ?>
<p>Para finalizar, de preferencia en una hoja blanca, pon en práctica lo visto hasta el momento y realiza las siguientes construcciones, utilizando regla sin graduar y compás.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u4a4', "Ejercicio de construcciones", $ActividadContent);
?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>