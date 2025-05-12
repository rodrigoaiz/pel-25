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
<h2>Problemas de aplicación</h2>
<h3>Problema 2</h3>
<p>Se va a construir un puente que cruce de un lado a otro de una barranca y ya
                se han señalado los puntos donde se localizarán los extremos del puente. ¿Cómo puedes determinar la
                longitud del puente si sólo cuentas con una cuerda de cinco metros y un flexómetro de tres metros de
                largo?</p>
</section>

<div class="diagramas">
  <div class="grid grid-cols-3 md:grid-cols-2 xl:grid-cols-3 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
        <!-- <h4 class="mb-2">Paso 1</h4> -->
          <p class="text-md">Para resolver este problema, también puede emplearse semejanza, pero también tu ingenio para trazar los triángulos con base en los puntos que ya tienes, recordando que la cuerda puede servirte como un compás si mantienes fijo uno de sus extremos y la tensas. La figura por construir sería similar a la que sigue, donde los taches simbolizan los puntos donde se localizarán los extremos del puente:
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_d.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 2</h4> -->
          <p class="text-md">Unimos los dos puntos y trazamos otra línea que interseque con esta, para luego proponer un ángulo y construir el tercer lado de los dos triángulos. En este caso, se propuso un ángulo de 90°</p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_e.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 3</h4> -->
          <p class="text-md">Por otra parte, sabemos que los ángulos opuestos por el vértice tienen la misma medida, por lo que tenemos otra pareja de ángulos iguales y podemos concluir que, por el corolario Ángulo-Ángulo, los dos triángulos construidos son semejantes.
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_f.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<div class="diagramas">
  <div class="grid grid-cols-3 md:grid-cols-2 xl:grid-cols-3 gap-4 px-5 pb-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-3 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 5</h4> -->
          <p class="text-md">Observa que podrías medir dos lados correspondientes de los triángulos, los dos que han sido remarcados con rojo, además del lado en triángulo más pequeño que pasa por el punto donde será colocado el puente (en azul).
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_g.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-3 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 6</h4> -->
          <p class="text-md">Como estamos midiendo los lados que forman al ángulo recto, el correspondiente al lado en azul es justamente la distancia que necesitamos (en amarillo).
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_h.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-3 md:col-span-3 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <!-- <h4 class="mb-2">Paso 7</h4> -->
          <p class="text-md">Vamos a suponer que ya realizamos algunas mediciones:
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_i.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
  <p>                            Calculamos las razones, que deben ser iguales para lados correspondientes de los triángulos,
                            por lo que podemos plantear:
                            \(\frac{5}{2}=\frac{x}{3}\)
                            De donde \(x=(\frac{5}{2})(3)=\frac{15}{2}=7.5\)</p>
                            <p>Por tanto, la longitud del puente es la
                                suma de las dos cantidades (líneas azul y amarilla): </p>
                            <p>$$3+7.5=10.5$$ Es decir, 10.5
                            metros.</p>
                            <p>¿Qué opinas de estas aplicaciones? ¿Te serían útiles a ti?</p>

<?php ob_start(); ?>
    <p>Para comentar más sobre lo anterior, te invitamos a participar en el foro de discusión sobre las aplicaciones de la semejanza de triángulos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a15', "Aplicaciones de la semejanza", $ActividadContent);
?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>