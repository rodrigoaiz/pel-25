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
  <h4>Propiedades del triángulo</h4>
  <div class="md:grid grid-cols-2 gap-3 items-center mt-5">
        <div>
        <p>En este aprendizaje comprenderás y aplicarás teoremas sobre triángulos.</p>
        <p>Realiza la medición de los tres ángulos de cada uno de los triángulos.</p>
        </div>
        <div>
                <?php
                renderImage('u3t4_img_triangulos_tres.webp', '', '', '', true);
                ?>
      </div>
</div>
<p>Realiza la suma de las medidas de los ángulos interiores de cada triángulo e investiga el teorema de la suma de los ángulos interiores de un triángulo y contesta lo siguiente:</p>
<p>La suma de los ángulos interiores de todo triángulo es igual a:</p>

<?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>La suma de los ángulos interiores de todo triángulo es igual a 180°</p>
                  '
                ]
              ];
              renderAccordion($accordionItems1, 'primero-');
  ?>

<div class="md:grid grid-cols-2 gap-3 items-center mt-5 mb-5">
        <div>
        <?php
              $accordionItems2 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>Realiza la medición con el transportador del ángulo exterior \(e_2\) y compáralo con la suma de los dos ángulos interiores no adyacentes a ellos (x y “y”).</p>
                  <p>Repite la acción con los ángulos exteriores \(e_1\) y \(e_2\).</p>
                  '
                ]
              ];
              renderAccordion($accordionItems2, 'segundo-');
              ?>
        </div>
        <div>
                <?php
                renderImage('u3t4_img_triangulos_angulos.webp', '', '', '', true);
                ?>
        </div>
</div>

<h4 class="text-center">Conclusión</h4>
<p>La medida de un ángulo exterior es igual a la suma de las medidas de los dos ángulos internos no adyacentes a él.</p>

<hr>

<p>Realiza la medición con el transportador de los tres ángulos exteriores. ¿Qué sucede cuando los sumamos?</p>

<div class="md:grid grid-cols-2 gap-3 items-center mt-5 mb-5">
        <div>
        <?php
              $accordionItems3 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>La suma de los ángulos externos de todo triángulo es igual a 360°</p>
                  '
                ]
              ];
              renderAccordion($accordionItems3, 'tercero-');
              ?>
        </div>
        <div>
                <?php
                renderImage('u3t4_img_triangulos_angulos2.webp', '', '', '', true);
                ?>
        </div>
</div>

<div class="md:grid grid-cols-2 gap-3 items-center mt-5 mb-5">
        <div>
                <?php
                renderImage('u3t4_img_triangulos_angulos3.webp', '', '', '', true);
                ?>
        </div>
        <div>
        <p>\(3x-10 + 5x +20 = 120\) … por el teorema de la medida de un ángulo exterior es igual a la suma de las
                medidas de los dos ángulos internos no adyacentes a él.</p>
            <p>Resolviendo</p>
            <p>\(8x= 120 +10-20\)</p>
            <p>\(8x= 110\)</p>
            <p>\(x =\frac{110}{8}\)</p>
            <p>Por lo tanto</p>
            <p>\(5(\frac{110}{8})+20=88.75 ^\circ \) Medida del ángulo P</p>
            <p>\(3(\frac{110}{8})-10= 31.25 ^\circ\) Medida del ángulo q</p>
            <p>También sabemos que \(10y +120 =180\) porque son ángulos suplementarios</p>
            <p>Resolviendo</p>
            <p>\(y= \frac{(180-120)}{10}=\frac{60}{10} =6\)</p>
            <p>\(10(6)= 60 ^\circ\), Medida del ángulo R</p>
            <p>Verificando</p>
            <p>88.75°+31.25°+60°= 180°</p>
        </div>
</div>

<?php ob_start(); ?>
  <p>Ahora resuelve la siguiente actividad ya pudiste revisar cómo se resuelven estos problemas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a7', "Resolución de triángulos con teoremas", $ActividadContent);
  ?>

  <p>Como pudiste comprender es muy importante la aplicación de los teoremas que estudiamos en la resolución de problemas, son de gran apoyo.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>