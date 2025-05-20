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

<h3>Teorema del triángulo isósceles</h3>

<div class="md:grid grid-cols-2 gap-3 items-center">
      <div>
      <p>Vamos a revisar ahora un teorema referente a triángulos que también puede justificarse a partir de la congruencia.</p>
      <p>El teorema del triángulo isósceles dice que, si tenemos un triángulo isósceles cualquiera, los ángulos opuestos a lados congruentes, son congruentes.</p>
      </div>
      <div class="w-3/4 mx-auto">
        <?php
            renderImage('teorema_triangulo_isosceles.webp', 'Teorema del triángulo isósceles', '', '');
            ?>
      </div>
</div>

<p>Para probar que esto es cierto, utilizaremos la figura anterior y recordaremos primero que, por ser un
                triángulo isósceles, \(\overline{AC} \cong \overline{BC}\) lo cual es nuestro dato, según el Teorema.
                Además, pensaremos que hay dos triángulos “encimados” en la figura.</p>

      <?php
            renderImage('validez_teorema_triangulo_isosceles.webp', 'Validez del Teorema del triángulo isósceles', '', '');
      ?>

<p>Entonces tenemos que \(AC\) en el primer triángulo es igual a \(BC\) en el segundo triángulo, por ser
                segmentos congruentes. Además ,\(\measuredangle C =\measuredangle C\) en el \(\triangle I\) y en el
                \(\triangle II\), respectivamente, por ser el mismo ángulo. También podemos observar que \(BC \) en
                el\(\triangle I\) es igual a \(AC\) en el \(\triangle II\), por la propiedad de simetría de la igualdad (si
                \(AC=BC\), entonces \(BC=AC\()).</p>
            <p>Con esto, ya tenemos tres elementos correspondientes que son congruentes: un ángulo y los dos lados que
                lo forman. Así que podemos concluir que \(\triangle I \cong \triangle II\)\\ por el criterio LAL y, por
                tanto, ,\(\measuredangle A =\measuredangle B\) como indica el teorema.</p>
              
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>