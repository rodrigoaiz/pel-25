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

<h3>Ejemplo 2</h3>

<p>Determina el valor de x y de y para la siguiente figura:</p>

<div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t1_img_ejemplo_conguencia2.webp', 'Ejemplo 2 Congruencia', '', '');
            ?>
</div>

<h4>Solución</h4>

<p>Recuerda que es muy importante que justifiques tus respuestas, así que primero comprobaremos si se trata
                de triángulos semejantes.</p>
            <p>\(\overline{AB} \cong \overline{CD}\) son congruentes porque así lo indica la marca sobre los segmentos.
            </p>
            <p>\(\overline{BC} \cong \overline{AD}\) son congruentes porque así lo indica la marca sobre los segmentos.
            </p>
            <p>Toma nota de que, para las dos comparaciones de lados, se escribió primero lo referente al \(\triangle I\)
            </p>
            <p>Hasta aquí, se tienen sólo dos elementos iguales en los triángulos y hace falta comprobar un lado, para
                utilizar el postulado (o criterio) LLL o un ángulo para aplicar LAL. Si se fuera a utilizar el ángulo,
                éste tendría que ser \(\measuredangle ABC\) y su correspondiente en el otro triángulo:\(\measuredangle CDA\)
                (observa que los vértices son correspondientes), ya que los lados que ya se vio que son congruentes
                forman estos ángulos.</p>
            <p>El dato no está presente, así que revisamos qué pasa con el tercer lado, que es el
                segmento\(\overline{AB}\). Resulta que es el mismo para ambos triángulos, entonces es obvio que mide lo
                mismo en ambos triángulos.</p>
            <p>Entonces, por el criterio LLL \(\triangle I \cong \triangle II\)\\, por lo que los ángulos que involucran a
                las variables son respectivamente iguales, lo cual permite plantear las ecuaciones:</p>
            <p>\(2x=24\) y \(3y=60\)</p>
            <p>Resolviendo cada ecuación</p>
            <p>$$2x=24$$</p>
            <p>$$x=\frac{24}{2}$$</p>
            <p>$$x= 12^\circ$$</p>
            <p>$$3y=60$$</p>
            <p>$$y=\frac{60}{3}$$</p>
            <p>$$y=20^\circ$$</p>

<?php ob_start(); ?>
    <p>Es hora de que practiques un poco realizando el siguiente ejercicio, basándote en las preguntas que se indican.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a10', "Congruencia", $ActividadContent);
?>
              
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>