<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<p>Como se mencionó anteriormente, comenzaremos comparando formas y figuras. Así que observa detenidamente
lo que se muestra a continuación, <strong>¿qué semejanzas y diferencias encuentras?</strong></p>

</section>

<div class="diagramas">
  <div class="grid grid-cols-4 md:grid-cols-2 xl:grid-cols-4 gap-4 p-5 mt-5 bg-secondary/50 text-center">
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">Figura a
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('fotos_congruentes_semejantes_1.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">Figura b</p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('fotos_congruentes_semejantes_2.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">Figura c
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('fotos_congruentes_semejantes_3.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
    <article class="bg-white px-4 py-4 col-span-4 md:col-span-2 lg:col-span-1">
      <div class="flex flex-col justify-between min-h-full">
        <header>
          <p class="text-md">Figura d
          </p>
        </header>
        <footer class="max-w-3/4 mt-5 mx-auto self-end">
          <?php
          renderImage('fotos_congruentes_semejantes_4.webp', '', '', '');
          ?>
        </footer>
      </div>
    </article>
  </div>
</div>

<section>
<?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>Las figuras a y c figura son iguales, aunque la última esté girada, las
                            dimensiones son las mismas. La figura b tiene como característica que es más grande las
                            otras dos, pero sigue siendo la misma forma. Mientras que la figura d es diferente a las
                            anteriores, observa que el cangrejo en la imagen se ve más alargado que en las otras.</p>
                  '
                ]
              ];
              renderAccordion($accordionItems1, 'primero-', false);
  ?>

<div class="md:grid grid-cols-2 gap-3 items-center">
        <div>
        <p>Lo anterior es una aplicación de cómo podemos utilizar la comparación de figuras cotidianamente,
                modificando el tamaño de una fotografía. Sin embargo, la complejidad de estas figuras dificulta
                analizarlas, por lo que comenzaremos con formas geométricas más simples.</p>
            <p>Nuevamente observa las figuras que se encuentran en la siguiente imagen y compáralas por parejas,
                eligiendo los pares que desees. ¿Notas semejanzas o diferencias entre ellas? ¿Cuáles?</p>
            <p>Conserva tu respuesta, la verificaremos un poco más adelante.</p>
        </div>
        <div>
                <?php
                renderImage('u4t1_img_figuras_congruentes.webp', 'Figuras congruentes y semejantes', '', '', true);
                ?>
      </div>
    </div>
    <div>

<h3>Concepto de congruencia</h3>
<p>Como pudiste notar con los ejercicios anteriores, el proceso de comparar figuras geométricas se realiza a partir de observar la relación entre el tamaño y la forma de ellas. Al realizarlo, pueden obtenerse tres resultados posibles:</p>
            <ol class="ol-number">
                <li>Las figuras no tienen la misma forma y su tamaño es distinto: <strong>Figuras diferentes.</strong>
                </li>
                <li>Las figuras tienen la misma forma, pero diferente tamaño: <strong>Figuras semejantes.</strong></li>
                <li>Las figuras tienen la misma forma y tamaño (caso particular de semejanza): <strong>Figuras
                        congruentes.</strong></li>
            </ol>

<?php ob_start(); ?>
<p>A continuación, realizarás un ejercicio para identificar estos tres casos, con base en la imagen anterior.</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u4a2', "Figuras semejantes, congruentes y diferentes", $ActividadContent);
?>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>