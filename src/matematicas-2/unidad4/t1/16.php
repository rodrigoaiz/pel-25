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

<p>A continuación, revisaremos algunos ejercicios y problemas donde se aplica la congruencia, con base en lo que se ha comentado anteriormente:</p>

<h3>Ejemplo 1</h3>

<div class="md:grid grid-cols-2 gap-3 items-center">
      <div>
      <p>En las figuras siguientes, indica qué postulado sirve para justificar que \(\triangle I \cong \triangle II\)</p>
      <p>Datos: \(\blacksquare ABCD\) es un rectángulo, por tanto, \(\overline{AB }\parallel \overline{CD}\) (se lee “el segmento AB es paralelo al segmento CD); \(\overline{AD}\parallel \overline{BC}\)</p>
      </div>
      <div class="w-3/4 mx-auto">
        <?php
            renderImage('u4t1_img_ejemplo_conguencia3.webp', 'Ejemplo 1 Congruencia', '', '');
            ?>
      </div>
</div>

<h4>Solución</h4>

<p>Es recomendable tener presentes siempre los tres criterios o postulados de congruencia: LAL, ALA y LLL.
            </p>
            <p>A continuación, buscamos lados o ángulos iguales. Es muy importante escribir por qué los consideramos
                iguales y recordar que “porque se ven iguales” no es un argumento válido. En este ejercicio tenemos que:
            </p>
            <p>\(\overline{AB}= \overline{DC}\), ya que la figura, al ser un rectángulo, tiene sus lados paralelos
                iguales.</p>
            <p>\(\overline{AD}= \overline{BC}\) ya que la figura, al ser un rectángulo, tiene sus lados paralelos iguales.
            </p>
            <p>\(\overline{BD}= \overline{DB}\) , ya que es un segmento que comparten los dos triángulos y todos los
                segmentos son congruentes consigo mismos.Por tanto, sabemos ya que los tres lados correspondientes en
                los triángulos son iguales, así que concluimos:</p>
            <p>\(\triangle I \cong \triangle II\) , porque cumple con el postulado LLL</p>
            <p>Otra forma</p>
            <p>\(\overline{BD}= \overline{BD}\), ya que es un segmento que comparten los dos triángulos y todos los
                segmentos son congruentes consigo mismos.</p>
            <p>\(\measuredangle ABD =\measuredangle BDC\), si consideramos\(\overline{AD}\parallel \overline{BC}\),
                \(\overline{BD}\( es una transversal, así que los dos ángulos son iguales por que son alternos internos.
            </p>
            <p>\(\measuredangle ABD =\measuredangle cdb\), si consideramos \(\overline{AB}\parallel \overline{CD}\),
                \(\overline{BD}\) es una transversal, así que los dos ángulos son iguales por que son alternos internos.
            </p>
            <p>Observa que los dos ángulos mencionados en cada triángulo son formados por el segmento\(\overline{BD}\),
                por tanto, un lado y sus dos ángulos adyacentes correspondientes en los dos triángulos son iguales, así
                que concluimos:</p>
            <p>\(\triangle I \cong \triangle II\), porque cumple con el postulado ALA</p>
              
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>