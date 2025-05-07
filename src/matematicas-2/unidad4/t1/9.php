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
<p>Hasta el momento hemos visto triángulos que nos indican de antemano que son congruentes o revisamos todas
                sus medidas, pero nos falta analizarlos para concluir por nosotros mismos si son iguales o no,
                utilizando también los ángulos internos de la figura.</p>
            <p>En nuestra vida diaria, como seres pensantes, es muy importante justificar lo que hacemos, que nuestras
                ideas sean claras y reflexionadas, con el fin de que, aunque cometamos errores, podamos resolver
                nuestras situaciones diariamente. Por ejemplo, si apoyamos una idea que es tendencia en redes sociales,
                debemos tener claro por qué estamos de acuerdo con ella y seguir simplemente la corriente, que puede
                llevarnos a ser repetidores sin sentido.</p>
            <p>En matemáticas ocurre lo mismo, es muy importante justificar los resultados obtenemos. Es necesario
                indicar porqué es cierto lo que estás diciendo, que puedas convencer a los demás (y a ti mismo) de que
                tus conocimientos e ideas son correctos. En Geometría debe tenerse un cuidado particular porque no
                siempre es posible dibujar con exactitud las figuras con las que se trabaja.</p>
            <p>Por tanto, para decir que dos triángulos son congruentes, no basta con decir que son iguales “porque se
                ve”, sino que hay utilizar argumentos que no puedan rebatirse. En este caso, reciben el nombre de
                <strong>postulados</strong> (que son ideas que ya se aceptan como ciertas sin necesidad de
                justificarlas) o criterios de congruencia.</p>
            <p>Antes de continuar, tómate unos minutos para responder: ¿cuántos y cuáles datos necesitas para poder
                dibujar un triángulo? ¿Te basta con una medida? ¿Necesitarías un ángulo? ¿Un segmento?</p>

</section>

<div class="bg-secondary/50 pt-5 mx-auto">
    <div class="grid grid-cols-1 place-items-center w-full max-w-3xl mx-auto">
        <div class="py-8">
        <h4>Recuerda</h4>
        <p>El tamaño y la forma de un triángulo están completamente determinados (es
        decir, tienes los datos suficientes para construirlo) si se conocen las medidas de:</p>
                            <ul class='ul-disc mt-4'>
                                <li>Dos lados y el ángulo que forman.</li>
                                <li>Dos ángulos y el lado que comparten.</li>
                                <li>Tres lados.</li>
                            </ul>
        </div>
    </div>
</div>

<section>
    <?php ob_start(); ?>
    <p>Para la congruencia de triángulos, existen tres postulados que se derivan de los elementos necesarios para poder construir triángulos, es decir, de los tres casos para poder construir un triángulo. Puede verlo a detalle a continuación.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a6', "Postulados de congruencia", $ActividadContent);
    ?>

<p>¿Cómo saber cuál aplicar? Esto depende de los datos con los que cuentes, por ejemplo, si para un
                ejercicio te proporcionan las medidas de los tres lados de tus dos triángulos, entonces te conviene
                aplicar el criterio LLL.</p>
            <p><strong>Ejemplo</strong>: Indica qué parejas de triángulos son o no congruentes; si lo son, señala qué
                criterio de congruencia justifica tu respuesta:</p>

                <?php
                renderImage('u4t1_triangulos_congruentes.webp', 'Ejemplo triángulos congruentes', '', '', true);
                ?>

    <h4>Solución</h4>
    <p>Los triángulos I y II no pueden ser congruentes porque no cumplen con ningún postulado, aunque ambos tienen como medidas 3 y 4, en el segundo triángulo no son las medidas de los lados que forman el ángulo recto. Algo similar se observa si se comparan los triángulos II y III.</p>
    <p>En cambio, puede afirmarse que $\triangle I \cong \triangle III$, ya que cumple con el postulado LAL.</p>
    <p>Cabe mencionar que para estos ejercicios suele ser necesario girar los triángulos para poder visualizar mejor los elementos correspondientes. Para este ejemplo:</p>

    <?php
                renderImage('u4t1_ejercicio_girar_triangulos.webp', '', '', '', true);
                ?>

<?php ob_start(); ?>
    <p>Ahora es tu turno de utilizar los postulados con el siguiente ejercicio.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a7', "Postulados de congruencia", $ActividadContent);
?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>