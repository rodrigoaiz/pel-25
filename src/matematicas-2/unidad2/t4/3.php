<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h3>Inicio</h3>
  <p>Como ya te habrás dado cuenta ya trabajamos con tres términos del aprendizaje simetría, máximo y mínimo, el único que nos falta es concavidad.</p>
  <p>Recordemos cuando el parámetro a>o las ramas abren hacia arriba, por ejemplo:</p>
    <?php
            renderImage('u2t4_img_grafica3.webp', '', '', '', true);
    ?>
              <p>Como puedes observar el vértice es el punto mínimo de la curva, siempre será así, por lo tanto, cuando
                \(a>0\) tendremos un valor mínimo de la curva que es el vértice.</p>
            <p>Cuando tenemos \(a<0\) las ramas de la parábola abren hacia abajo, ejemplo:</p>
    <?php
            renderImage('u2t4_img_grafica4.webp', '', '', '', true);
    ?>
            <p>Como puedes observar el vértice es el punto máximo de la curva, siempre será así, por lo tanto, cuando \(a<0\) tendremos un valor máximo de la curva que será el vértice.</p>
            <p>Respecto a simetría, tenemos una recta vertical que pasa por la coordenada “\(x\)” del vértice, y su ecuación \(x=h\), en este caso es \(x=h=0\).</p>
            <p>Ahora respecto a la concavidad se dice que es positiva si se traza una recta tangente en un punto de la curva, si esta recta queda arriba de la curva la concavidad es negativa, si por el contrario la recta queda por debajo de la curva la concavidad es positiva.</p>

    <?php
            renderImage('u2t4_img_grafica5.webp', '', '', '', true);
    ?>

    <p>En este caso la concavidad es positiva</p>
    <p>Ahora tenemos</p>
    <?php
            renderImage('u2t4_img_grafica6.webp', '', '', '', true);
    ?>
    <p>La concavidad es negativa.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>