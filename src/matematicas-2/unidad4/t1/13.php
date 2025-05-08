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

<h3>Perpendicular a una recta</h3>

  <p>Recuerda que anteriormente realizaste algunas construcciones con regla y compás, para después buscar triángulos congruentes. A continuación, revisaremos los dos casos para trazar un segmento perpendicular a otro dado, que pase por un punto sobre el segmento o fuera de él.</p>

<h4>Construcción de una perpendicular, dado un segmento y un punto sobre él</h4>

<div class="md:grid grid-cols-2 gap-3 items-center">
      <div>
      <p>Como en los casos anteriores, recuerda que comenzamos con los datos, que son el segmento \(\overline{AB}\) y el punto \(P\). A continuación, con ayuda del compás delimitamos un “nuevo segmento” dentro del anterior, de tal forma que el punto P dato quede en su centro, localizando así los puntos \(C y D.\)</p>
      </div>
      <div>
        <?php
            renderImage('construccioon_perpendiculares_sobre_segmento_1.webp', 'Construcción de perpendiculares, P sobre el segmento 1', '', '');
            ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-3 items-center mt-5">
      <div>
      <p>Con esto, sabemos que \(\overline{CP} \cong \overline{DP}\), por construcción.</p>
      <p>Y a partir de aquí trazamos la mediatriz para el segmento \(\overline{CD}\)</p>
      <p>Por tanto, la justificación para esta construcción es la misma que para la de una mediatriz.</p>
      <p>Y, por la característica de la mediatriz de ser perpendicular a un segmento, concluimos que, efectivamente, \(\overline{AB}\perp \overline{EF}\)</p>
      </div>
      <div>
        <?php
            renderImage('construccioon_perpendiculares_sobre_segmento_2.webp', 'Construcción de perpendiculares, P sobre el segmento 2', '', '');
            ?>
      </div>
</div>

<h4>Construcción de una perpendicular, dado un segmento y un punto fuera de él</h4>

<div class="md:grid grid-cols-2 gap-3 items-center">
      <div>
      <p>Para este caso, también proponemos los datos y trazamos un arco circunferencia con centro en el punto
      P, y abriendo hasta M</p>
      <p>Así que, por construcción, tenemos que \(\overline{MP} \cong \overline{OP}\), por lo que el problema
                    nuevamente se lleva a trazar la mediatriz para el segmento \(\overline{MP}\) debido a que \(P\), al ser
                    equidistante de \(M y O\), forma parte de la mediatriz.</p>
      </div>
      <div>
        <?php
            renderImage('construccioon_perpendiculares_fuera_segmento_1.webp', 'Construcción de perpendiculares, P fuera del segmento 1', '', '');
            ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-3 items-center mt-5">
      <div>
      <p>Y concluimos que \(\overline{MN}\perp \overline{AP}\), por ser \(\overline{AP}\) mediatriz de
      \(\overline{MO}\) que a su vez es parte de \(\overline{MN}\)</p>
      </div>
      <div>
        <?php
            renderImage('construccioon_perpendiculares_fuera_segmento_2.webp', 'Construcción de perpendiculares, P fuera del segmento 2', '', '');
            ?>
      </div>
</div>
              
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>