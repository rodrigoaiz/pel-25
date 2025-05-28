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
<p>Un ejemplo de un fenómeno que se puede representar mediante una función cuadrática es la trayectoria
                que sigue un balón cuando es pateado para anotar un gol de campo en un partido de fútbol americano. Si
                se quisiera conocer la altura alcanzada por el balón cada segundo a partir del momento en que fue
                pateado, depende de la inclinación con la cual fue pateado el balón y de la fuerza al momento de
                patearlo, en un caso específico se tienen la función $y=-2x^2+8x$ donde en el instante inicial la pelota
                está en el suelo, es decir en el tiempo cero la altura es cero.</p>
            <p>\(Tiempo=0 x=0\) el balón se encuentra en el suelo (0,0)</p>
            <p>\(Y= -2(0)2 +8(0)=0\)</p>
            <p>En el primer segundo después de ser pateado</p>
            <p>\(Tiempo=1 x=1 (1,6)\)</p>
            <p>\(Y = -2(1)2 +8(1)=6\)</p>
            <p>Por lo que el balón se elevó 6 metros.</p>
            <p>De acuerdo con el parámetro “\(a\)” las ramas de la parábola abre hacia arriba</p>
            <p>Ahora expresa la función de la forma \(f(x)= a(x-h)^2+k\)</p>
            <p>\(y=\)</p>
            <p>Los parámetro \(h\) y \(k\) son las coordenadas del vértice.</p>
            <p>¿Cuáles son las coordenadas del vértice de la parábola? </p>
            <p>¿Eje de simetría? </p>
            <p>¿Concavidad de la curva? </p>
            <p>¿El vértice de la curva es un punto máximo o un mínimo?</p>

            <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>¿Cuáles son las coordenadas del vértice de la parábola? <strong>(2,8)</strong></p>
                            <p>¿Eje de simetría? <strong>\(x=2\)</strong></p>
                            <p>¿Concavidad de la curva? <strong>Como el parámetro “\(a\)” es menor de 0, las ramas de la
                                    parábola abren hacia abajo por lo que la concavidad es negativa.</strong></p>
                            <p>¿El vértice de la curva es un punto máximo o un mínimo? <strong>Es un punto
                                    máximo.</strong></p>'
                ]
              ];
              renderAccordion($accordionItems1, 'primero-');
              ?>
            </div>

            <p>Contesta lo siguiente:</p>
            <p>¿A los cuántos segundos regresa el balón al suelo?</p>

            <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>A los 4 segundos</p>'
                ]
              ];
              renderAccordion($accordionItems1, 'segundo-');
              ?>
            </div>

            <p>Para esto podemos sustituir valores en la función ya se realizó la sustitución con el segundo cero, uno,
                con el segundo dos:</p>
            <p>\(Y= -2(2)^2 +8(2)\)</p>
            <p>\(Y=8\)</p>
            <p>Por lo tanto tenemos (2,8) que es el vértice </p>
            <p>Ahora con el segundo 3</p>
            <p>\(Y= -2(3)^2 +8(3)\)</p>
            <p>\(Y=6\), tenemos (3,6)</p>
            <p>Ahora con el segundo 4</p>
            <p>\(Y= -2(4)^2 +8(4)\)</p>
            <p>\(Y=0\)</p>
            <p>Tenemos (4,0)</p>
            <p>Como la coordenada de del eje “\(y\)” es igual a cero el balón está en el suelo nuevamente en el segundo 4
                tomemos en cuenta la siguiente gráfica.</p>

            <?php
                    renderImage('u2t5_img_grafica.webp', '', '', '', true);
            ?>

        <p>Para las dos siguientes preguntas podemos contestarlas apoyándonos en el vértice puesto que es el punto más alto, \(V\)(2,8)</p>
        <p>¿A los cuántos segundos el balón alcanza su máxima altura?</p>

        <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>A los 2 segundos alcanza su máxima altura</p>'
                ]
              ];
              renderAccordion($accordionItems1, 'tercero-');
              ?>
        </div>

        <p>¿Cuál es la máxima altura que alcanza el balón?</p>

        <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>La altura máxima de acuerdo al vértice es 8 metros.</p>'
                ]
              ];
              renderAccordion($accordionItems1, 'cuarto-');
              ?>
        </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>