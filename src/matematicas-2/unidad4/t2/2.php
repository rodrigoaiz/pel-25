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
<h3>Concepto</h3>
            <p>Al iniciar la unidad se comentó que al comparar figuras puedes tener dos casos: figuras diferentes o
                figuras semejantes. También se ha hablado ya sobre el caso particular de semejanza donde las figuras
                tienen las mismas medidas y forma, es decir, la congruencia.</p>
            <p>En este apartado se analizará la semejanza en general:</p>
            <ul class="ul-disc">
                <li>Dos objetos se consideran semejantes si tienen la misma forma, pero <strong>no
                        necesariamente</strong> el mismo tamaño. </li>
                <li>El que dos figuras tengan la misma forma implica que los ángulos que tengan serán de la misma
                    medida.</li>
                <li>En matemáticas, el concepto de semejanza está ligado al concepto de proporcionalidad. Se dice que
                    dos objetos son semejantes si “guardan” una proporción entre ellos. Por ejemplo, una fotografía de
                    la misma persona se amplía al doble de tamaño; ambas son semejantes y tienen una misma proporción,
                    ya que una es ampliación de la otra tanto en lo ancho como en lo largo y con una misma “razón”, es
                    decir, las divisiones de sus lados correspondientes son de igual valor.</li>
            </ul>
            <p>Por ejemplo, toma algunas medidas de las siguientes imágenes y comprueba lo dicho en el punto anterior,
                es decir, mide una antena de las dos mariposas y divide ambas medidas de la antena en la mariposa de la
                derecha; luego mide la longitud total de la fecha y realiza la división, no olvides dejar como numerador
                las medidas de la imagen izquierda. Comprobarás que te resulta el mismo valor, el cual recibe el nombre
                de constante de proporcionalidad.</p>

<div class="md:grid grid-cols-2 items-center">
      <div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t2/ejemplo_semejanza_a.webp', '', '', '', true);
            ?>
      </div>
      <div class="w-2/4 mx-auto">
        <?php
            renderImage('u4t2/ejemplo_semejanza_b.webp', '', '', '', true);
            ?>
      </div>
</div>

      <small class="grid text-center mt-4">Ejemplo semejanza</small>

      <h4>Notación</h4>

      <p>Cuando ya se ha identificado que dos figuras son semejantes se utiliza el símbolo \(\sim\)</p>
      <p>Por ejemplo, si una pareja de triángulos (\(I\) y \(II\)) son semejantes, se escribe \(\triangle I \sim
                \triangle II\)</p>

<?php ob_start(); ?>
    <p>Para finalizar, realiza el siguiente ejercicio, donde practicarás la notación de semejanza.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a10', "Notación Semejanza", $ActividadContent);
?>


</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>