<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<h2>Notación</h2>
<p>Recordarás que en la sección pasada se comentó que al comparar dos figuras se pueden tener dos casos, que
                sean diferentes o que sean semejantes. Y un caso particular de la semejanza es la congruencia, donde se
                observa que las figuras tienen la misma forma y tamaño.</p>
            <p>Este será el primer concepto por revisar, por lo que, en este apartado, construirás segmentos y ángulos
                congruentes utilizando como herramientas tu regla y tu compás.</p>
            <h3>Segmentos congruentes</h3>
            <p>Recuerdas qué es un segmento es un “fragmento” de una recta, tiene un punto inicial y un punto final</p>
            <p>Pero ¿cómo puedes saber que dos segmentos son congruentes?</p>
            <p>Una idea para responder es medir tus segmentos con una regla para comprobar que, efectivamente, tengan la
                misma longitud.</p>
            <p>Ahora reflexiona, si no tienes una regla graduada ni otro instrumento similar, sino tu compás, ¿cómo
                utilizarías este último para comprobar que tus segmentos son congruentes?</p>
            <p>Para responder, puedes leer la siguiente sección u observar el video que se encuentra al terminar esta
                lección:</p>

</section>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <h4 class="mb-2">Paso 1</h4>
          <p class="text-md">Lo que se hace es simplemente abrir el compás al tamaño del segmento, colocando sus puntas en los extremos de este:
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('segmentos_congruentes_1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 2</h4>
          <p class="text-md">Y, sin modificar la apertura del compás, se “traslada” esta medida al
                            otro segmento.
          <p class="text-md">Sabiendo esto, ¿cómo podrías construir, desde cero, dos segmentos
                                congruentes? Pon en práctica tu idea antes de continuar.</p>
          <p class="text-md">Como en muchos problemas de
                            geometría euclidiana, se sabe que el dato, o punto de partida, es un segmento, pero nosotros
                            lo proponemos de manera arbitraria:</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('segmentos_congruentes_2.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 3</h4>
          <p class="text-md">Y, en otra parte, trazamos otro segmento de medida aproximadamente similar al anterior:
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('segmentos_congruentes_3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 4</h4>
          <p class="text-md">Finalmente, medimos el primer segmento con el compás, como se mencionó anteriormente.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('segmentos_congruentes_4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<div class="diagramas">
  <div class="grid grid-cols-3 md:grid-cols-2 xl:grid-cols-3 gap-4 px-5 pb-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-3 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 5</h4>
          <p class="text-md">Colocamos la punta metálica en el extremo del segundo segmento.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('segmentos_congruentes_5.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 6</h4>
          <p class="text-md">Trazamos un pequeño arco para encontrar su punto final.
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('segmentos_congruentes_6.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <h4 class="mb-2">Paso 7</h4>
          <p class="text-md">Así que ya tenemos que AB es congruente con CD
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('segmentos_congruentes_7.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>