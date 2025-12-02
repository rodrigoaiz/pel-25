<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Reacciones óxido-reducción.</h2>

  <h3>Número de oxidación</h3>
  
  <p>Anteriormente se ha revisado la importancia que tienen las propiedades periódicas, para que se puedan llevar a cabo las reacciones químicas, pero también es importante señalar que los electrones participan activamente en esas propiedades. Por ejemplo, en el caso de la electronegatividad, es la fuerza con la que un átomo atrae los electrones a sí mismo. Por lo tanto, los electrones tienen una participación importante en las reacciones químicas, a continuación se revisarán algunos conceptos.</p>

  <p>El proceso de <b>oxidación</b> es la pérdida de electrones, mientras que la <b>reducción</b> es la ganancia de electrones. Pero ¿cómo es que un elemento se oxida o se reduce? La respuesta está en el número de oxidación.</p>

  <p>Los <b>números de oxidación</b> indican cuántos electrones puede ceder o aceptar tiene un átomo. Un elemento puede tener más de una valencia, pero sólo un número de oxidación en un compuesto determinado. Para que el tema sea más claro, observa la siguiente imagen:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-NA2.webp','Número de oxidación Na₂ SO₄')
  ?>
  </div>

  <p>El sodio tiene número de oxidación +1, porque pertenece a la familia 1 o IA, todos los elementos de esa familia tienen en su capa de valencia un electrón y es muy fácil perderlo, por lo que su número de oxidación es positivo y es +1, pues sólo puede perder un electrón</p>

  <p>El oxígeno tiene número de oxidación -2, porque pertenece a la familia 16 o VIA, tiene en su capa de valencia 6 electrones, por lo tanto es más fácil ganar 2 electrones para tener 8 electrones en su última capa y lograra la estabilidad, caso en este caso gana electrones, su número de oxidación es negativo y es número 2, porque gana dos electrones.</p>

  <p>El azufre, aunque tiene diferentes números de valencia en este caso su número de oxidación es +6, pues es el número que se adapta para ajustar el compuesto y quede con carga cero.</p>

  <p>Otro ejemplo</p>

 <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-BA.webp','Número de oxidación del Ba(NO₃)₂')
  ?>
  </div>

  <p>En este caso, el Ba tiene número de oxidación +2 porque pertenece a la familia 2 o IIA, todos los elementos de esa familia tienen en su capa de valencia, dos electrones y es muy fácil perderlos, por lo que su número de oxidación es positivo y es +2, porque pierden los dos electrones.</p>

  <p>El oxígeno tiene número de oxidación -2, porque pertenece a la familia 16 o VIA, tiene en su capa de valencia 6 electrones, por lo tanto es más fácil ganar 2 electrones para tener 8 electrones en su última capa y lograra la estabilidad, caso en este caso gana electrones, su número de oxidación es negativo y es número 2, porque gana dos electrones.</p>

  <p>El nitrógeno, aunque tiene diferentes números de valencia en este caso su número de oxidación es +5, pues es el número que se adapta para ajustar el compuesto y quede con carga cero.</p>

  <p>Si deseas profundizar aun más en el tema, observa el siguiente video, el cual te ayudará a reafirmar lo antes explicado.</p>

   <?php
  renderVideoIframe('2Rv1DicKX8U', 'Números de oxidación');
  ?>

  <?php ob_start(); ?>
  <p>determina el número de oxidación del manganeso, en cada uno de los siguientes compuestos:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a1', "Número de oxidación", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
