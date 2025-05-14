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

<!-- <div class="md:grid grid-cols-2 gap-4 items-center">
      <div>
            <h3>Justificación del Teorema de Pitágoras</h3>
            <p>La revisión del Teorema de la altura de un triángulo rectángulo nos sirve, como ya se mencionó, para
                justificar el Teorema de Pitágoras, para lo cual consideraremos nuevamente la figura siguiente:</p>
      </div>
      <div class="w-4/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_altura_a.webp', 'Teorema de la altura a', '', '');
        ?>
      </div>
</div> -->

            <h3>Justificación del Teorema de Pitágoras</h3>
            <p>La revisión del Teorema de la altura de un triángulo rectángulo nos sirve, como ya se mencionó, para
                justificar el Teorema de Pitágoras, para lo cual consideraremos nuevamente la figura siguiente:</p>

      <div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t2/teorema_altura_a.webp', 'Teorema de la altura a', '', '');
        ?>
      </div>

            <p>Y como ya comprobamos que los tres triángulos formados son semejantes, podemos escribir la proporción
                entre sus lados, comparando el triángulo más grande (\(\triangle ABC\)) con el más pequeño (\(\triangle
                CBD\))</p>
            <p>\(\frac{\overline{AB}}{\overline{BC}}= \frac{\overline{BC}}{\overline{BD}}\)</p>
            <p>Reescribiendo:</p>
            <p>\((AB)(AD)=(AC)^2\)</p>
            <p>Vamos a sumar ahora las dos expresiones que reescribimos</p>
            <p>\((AB)(BD)=(BC)^2 (AB)(AD)=(AC)^2 \)</p>
            <p>Resultando</p>
            <p>\((AB)(BD)+(AB)(AD)=(BC)^2+(AC)^2\)</p>
            <p>Factorizamos \(AB\)</p>
            <p>\((AB)(BD)+(AD)=(BC)^2+(AC)^2\)</p>
            <p>Observa ahora que, en la figura, si sumamos \(BD+AD\) en realidad tenemos el segmento \(AB\), por lo que
                sustituimos</p>
            <p>\((AB)(AB)=(BC)^2+(AC)^2\)</p>
            <p>Reescribiendo</p>
            <p>\((AB)^2=(BC)^2+(AC)^2\)</p>
            <p>Expresión que corresponde justamente a el Teorema de Pitágoras aplicado al \(\triangle ABC\)</p>

            <div class="w-3/4 mx-auto">
                <?php
                    renderImage('u4t2/u4t2_justificacion_teorema.webp', 'Justificación Teorema de Pitágoras a y b', '', '');
                ?>
            </div>

<?php ob_start(); ?>
    <p>Para finalizar, realiza el siguiente ejercicio, donde identificarás triángulos rectángulos a partir de las medidas de sus lados, utilizando el Teorema de Pitágoras.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a17', "Teorema de Pitágoras", $ActividadContent);
?>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>