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
<h2>Problemas de aplicación</h2>
            <p>Ahora que conoces el concepto y los criterios de semejanza, es momento de recordar los problemas que se
                compartieron al iniciar el tema. Tómate unos minutos para revisar tu idea para resolverlos y
                compleméntala con lo que sabes ahora.</p>
            <h3>Problema 1</h3>
            <p>En cierto parque, se sembraron varios árboles de eucalipto que con los años
                se han desarrollado y alcanzado alturas que comienzan a ser peligrosas por la fragilidad de los árboles.
                Así que se ha decidido cortar aquellos árboles que tengan una altura superior a diez metros. Eres uno de
                los trabajadores que recibe el encargo de determinar cuáles árboles deben cortarse, para lo cual se te
                proporciona como herramienta una vara recta de un metro de largo y un flexómetro de tres. ¿Cómo puedes
                determinar la altura de los árboles sólo con estas herramientas?</p>
</section>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">Una forma de resolver ambos problemas es aplicar semejanza de triángulos. Para el problema 1 se utilizan los objetos, las sombras de los objetos y los rayos del Sol para construir triángulos.
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacioon_semejanza_a.webp', 'Aplicación semejanza a', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">En primer lugar, habría que colocar la vara de forma perpendicular al suelo y medir su sombra. Con ello, tenemos como dato un ángulo de noventa grados para dos triángulos como se observa a continuación:
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacioon_semejanza_b.webp', 'Aplicación semejanza b', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">Por otro lado, el ángulo que se forma entre el rayo de Sol y la sombra de cada objeto se considera igual porque los objetos se encuentran prácticamente en el mismo lugar y se toma la medida a la misma hora, por lo que podemos decir que “el Sol los alumbra igual”. Ya tenemos entonces dos ángulos iguales, por lo que podemos concluir que los dos triángulos son semejantes por el corolario Ángulo-Ángulo.
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_c.webp', 'Aplicación semejanza c', '', '');
          ?>
        </footer>
      </div>
    </article>
        <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">Considerando ahora los datos, sabemos que la altura de cada árbol debe ser a lo más 10 metros y que la vara mide un metro. Luego, puedes medir fácilmente la longitud de la sombra de la vara, para ejemplificar, diremos que dicha medida fue de 60 cm. Por otra parte, dejamos indicada la medida de la sombra del árbol como “\(x\)”
          </p>
        </header>
        <footer class="max-w-4/4 mt-5 mx-auto self-end">
          <?php
          renderImage('u4t2/aplicacion_semejanza_c1.webp', 'Aplicación semejanza c1', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
    <p>                            Comparamos las medidas de los lados y sabemos que las razones deben ser iguales debido a que
                            hay semejanza:$$\frac{10}{1}=\frac{x}{0.6}$$ Despejamos \(x\) $$x=(10)(0.6)=6$$Y este número
                            nos va a indicar que, si medimos a esa hora del día, debemos podar todos los árboles cuya
                            sombra mida más de 6 metros, ya que eso implicará que sus alturas son superiores a los diez
                            metros.</p>
</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>