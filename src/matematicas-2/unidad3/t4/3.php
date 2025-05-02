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

<p>Muy bien en este aprendizaje conocerás conceptos importantes que en Matemáticas 3 utilizarás pero con geometría analítica, por ahora sólo es necesarios que los conozcas y comprendas, además de observar su utilidad en nuestro entorno.</p>
<p><strong>Rectas y puntos notables de un triángulo:</strong> Las medianas, mediatrices, la bisectrices y la alturas son rectas que al trazarse en un triángulo, se cortan en un punto llamado: Baricentro, Circuncentro, Incentro y Ortocentro respectivamente.</p>

</section>

<div class="diagramas">
  <h3 class ="text-center">I. Rectas y Puntos Notables de un Triángulo</h3>
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 my-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
        <header class="mb-4">
          <h4 class="mb-2">Rectas Notables</h4>
          <p class="text-md"><strong>Mediana:</strong> es el segmento de recta que une el punto medio de ese lado con el
          vértice opuesto.
          </p>
        </header>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
        <header>
          <h4 class="mb-2">Puntos Notables</h4>
          <p class="text-md"><strong>Baricentro:</strong> es el punto de intersección de las tres medianas.</p>
        </header>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
        <header>
          <h4 class="mb-2">Cómo Trazarlas</h4>
          <p class="text-md">Localiza el punto medio de cada lado. Traza la semirrecta de forma perpendicular en cada
          punto medio. El circuncentro se puede localizar dentro o fuera del triángulo.
          </p>
        </header>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <div class="w-70">
          <?php
          renderImage('u3t4_mediana.webp', '', '', '');
          ?>
      </div>
    </article>
  </div>

  <hr/>

  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 my-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
        <header class="mb-4">
          <h4 class="mb-2">Rectas Notables</h4>
          <p class="text-md"><strong>Mediatriz:</strong> es la semirrecta perpendicular a ese lado y que pasa por el punto medio a este.
          </p>
        </header>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
        <header>
          <h4 class="mb-2">Puntos Notables</h4>
          <p class="text-md"><strong>Circuncentro:</strong> es el punto de intersección de las tres mediatrices.</p>
        </header>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
        <header>
          <h4 class="mb-2">Cómo Trazarlas</h4>
          <p class="text-md">Localiza el punto medio de cada lado. Une el punto medio con el vértice opuesto a él. El baricentro siempre se localiza dentro del triángulo.
          </p>
        </header>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <div class="w-70">
          <?php
          renderImage('u3t4_mediatriz.webp', '', '', '');
          ?>
      </div>
    </article>
  </div>

  <hr/>

<div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 my-5 bg-secondary/50 text-center">
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <header class="mb-4">
        <h4 class="mb-2">Rectas Notables</h4>
        <p class="text-md"><strong>Bisectriz:</strong> es una semirrecta que divide el ángulo en dos ángulos de igual medida.
        </p>
      </header>
  </article>
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <header>
        <h4 class="mb-2">Puntos Notables</h4>
        <p class="text-md"><strong>Incentro:</strong> es el punto de intersección de las tres bisectrices.</p>
      </header>
  </article>
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <header>
        <h4 class="mb-2">Cómo Trazarlas</h4>
        <p class="text-md">Medir la abertura de cada lado del triángulo. Marcar en cada ángulo la mitad de su medida. Trazar la semirrecta del vértice a donde se encuentra marcada la mitad de ese mismo ángulo. El incentro siempre se localiza dentro del triángulo.
        </p>
      </header>
  </article>
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
    <div class="w-70">
        <?php
        renderImage('u3t4_bisectriz.webp', '', '', '');
        ?>
    </div>
  </article>
</div>

<hr/>

<div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 my-5 bg-secondary/50 text-center">
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <header class="mb-4">
        <h4 class="mb-2">Rectas Notables</h4>
        <p class="text-md"><strong>Altura:</strong> es el segmento de recta perpendicular a ese lado trazado desde el vértice opuesto.
        </p>
      </header>
  </article>
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <header>
        <h4 class="mb-2">Puntos Notables</h4>
        <p class="text-md"><strong>Ortocentro:</strong> es el punto de intersección de las tres alturas.</p>
      </header>
  </article>
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
      <header>
        <h4 class="mb-2">Cómo Trazarlas</h4>
        <p class="text-md">Localiza por cada lado un vértice opuesto a él. Con la ayuda de las escuadras traza el segmento de recta de forma perpendicular en cada lado al vértice opuesto a él. El ortocentro se puede encontrar dentro o fuera del triángulo.
        </p>
      </header>
  </article>
  <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1 flex items-center justify-center">
    <div class="w-70">
        <?php
        renderImage('u3t4_altura.webp', '', '', '');
        ?>
    </div>
  </article>
</div>

</div>

<section>
<?php ob_start(); ?>
  <p>Participa en el siguiente foro.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a8', "Rectas y puntos notables de un triángulo", $ActividadContent);
  ?>

  <p>Como pudiste constatar hay muchas aplicaciones de la Geometría en nuestro entorno, puedes revisar la importancia de estas rectas y puntos notables de los triángulos.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>