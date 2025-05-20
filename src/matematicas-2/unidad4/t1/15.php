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

<h3>Teorema recíproco del triángulo isósceles</h3>

<p>Un teorema está compuesto básicamente de dos partes: una hipótesis y una tesis. Que, simplificando, puede escribirse como: “Si pasa este hecho (hipótesis), entonces se cumple esto (tesis)”. Para el teorema del triángulo isósceles se puede escribir que, para un triángulo isósceles, si tenemos lados congruentes, entonces los ángulos opuestos a ellos son congruentes.</p>
<p>Por su parte, el recíproco de un teorema “invierte” la hipótesis y la tesis. Por ejemplo, si tuviéramos la expresión “si hago mi tarea, entonces iré al concierto”, una expresión recíproca sería “si fui al concierto, entonces hice mi tarea.</p>
<p>Considerando esto, responde ¿cómo redactarías el recíproco del Teorema del triángulo isósceles?</p>
<p>El Teorema recíproco del triángulo isósceles dice que, para un triángulo isósceles, si hay ángulos congruentes, entonces los lados opuestos a ellos son congruentes.</p>
<p>Para terminar con este tema, pon en práctica lo aprendido y trata de demostrar el teorema recíproco del triángulo isósceles. Como tip, recuerda que se han buscado triángulos congruentes y se ha indicado qué postulado justifica la congruencia, ya que eso permite hablar de elementos iguales en los triángulos. Realiza la actividad en tu cuaderno y luego verifica dando clic para ver la solución.</p>

<h4>Solución</h4>

<p>Para demostrar el teorema, puede realizarse algo similar a lo hecho para el Teorema del triángulo isósceles, considerando la misma figura:</p>

<?php
      renderImage('validez_teorema_reciproco_triangulo_isosceles.webp', 'Validez del Teorema recíproco del triángulo isósceles', '', '');
?>

<p>En este caso nuestro dato es que tenemos ángulos congruentes, los cuales son:</p>
<p>\(\measuredangle A =\measuredangle B\)</p>
<p>Así que podemos afirmar que el \(\measuredangle A\) en el primer triángulo, es igual al \(\measuredangle B\) en el segundo triángulo y también que el ∡B en el primer triángulo, es igual al \(\measuredangle A\) en el \(\triangle II\) por la propiedad de simetría de la igualdad.</p>
<p>Por otro lado, el segmento AB en el \(\triangle I\) es congruente con el segmento BA en el \(\triangle II\) , por ser el mismo segmento.</p>
<p>Nuevamente tenemos tres elementos de los triángulos que son correspondientes y congruentes, los cuales son dos ángulos y el lado que comparten. Por tanto, concluimos que \(\triangle I \cong \triangle II\) por el criterio de congruencia ALA.</p>
<p>Para finalizar, como los dos triángulos son congruentes, podemos afirmar que \(AC=BC\), que es lo que indicaba el Teorema recíproco.</p>
              
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>