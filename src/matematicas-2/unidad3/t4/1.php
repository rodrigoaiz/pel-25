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
    <h4>Clasificación de triángulos</h4>
    <p>Observa a tu alrededor el triángulo está presente en la estructura de los techos de las casas, en los puentes, etcétera. El triángulo es muy utilizado en las estructuras porque es la única figura que no se puede deformar, hagas lo que hagas seguirá siendo un triángulo. De acuerdo con lo anterior, las siguientes figuras ilustran algunos ejemplos antes mencionados. Todos ellos basados en formas triangulares.</p>
    <p>Revisa las siguientes ligas donde encontrarás información valiosa sobre los tipos de triángulos. Da clic en las imágenes que aparece a continuación para acceder a los recursos.</p>

    <div class="md:grid grid-cols-2 gap-3">
        <div>
            <a href="https://prometeo.matem.unam.mx/recursos/Bachillerato/DGEE_DGTIC_IMATE/recursos/2_018/index.html" target="_blank">
                <?php
                renderImage('u3t4_banner_tipos_triangulos.webp', '', '', '');
                ?>
            </a>
        </div>
        <div>
        <a href="https://uapas2.bunam.unam.mx/matematicas/triangulos/" target="_blank">
            <?php
            renderImage('u3t4_banner_triangulos.webp', '', '', '');
            ?>
        </a>
        </div>
    </div>

<?php ob_start(); ?>
  <p>Realiza la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a8', "Clasificación de triángulos", $ActividadContent);
?>

<div class="md:grid grid-cols-2 gap-3 items-center mt-5">
        <div>
        <p>Reflexiona la siguiente pregunta y contesta.</p>
        <p>Dados tres segmentos de la siguiente figura, ¿es posible construir un triángulo que tenga por lados dichos segmentos?</p>
        </div>
        <div>
                <?php
                renderImage('u3t4_img_rectas.webp', '', '', '', true);
                ?>
      </div>
</div>

<div class="md:grid grid-cols-2 gap-3 items-center mt-5 mb-5">
        <div>
        <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>Sí. Para verlo, procedamos de la manera siguiente: dibujemos al segmento más grande de los tres segmentos dados; tomando como centro sus extremos, dibujemos con el compás circunferencias, cuyos radios son los otros dos segmentos, como se ilustra en la figura.</p>
                  <p>Cómo se intersectan las circunferencias de radio sí puede construir un triángulo.</p>
                  '
                ]
              ];
              renderAccordion($accordionItems1, 'primero-');
              ?>
        </div>
        <div>
                <?php
                renderImage('u3t4_img_rectas_triangulo.webp', '', '', '', true);
                ?>
        </div>
</div>

<p class="text-center">Consideremos ahora los segmentos en la siguiente figura.</p>
            <?php
                renderImage('u3t4_img_rectas_circulos.webp', '', '', '', true);
            ?>
        </div>
        <div>
        <p>Como no se intersectan las circunferencias de radio d y e, no se puede construir el triángulo.</p>
            <p>En los casos anteriores, a,b y c, representan las longitudes de los segmentos dados (medidos con la misma
                unidad de longitud), mientras que d,e y f, son las longitudes de la otra terna dada de segmentos.</p>
            <p>Para la primera terna, esto es: a,b y c, se tiene que:</p>
            <p>b<a+c< /p>
            <p>c< a+b</p>
            <p>a<c+b< /p>
                                    <p>Esta propiedad es llamada: Desigualdad del triángulo, lo que ocurre siempre que
                                        se pueda construir el triángulo con los tres segmentos dados.</p>
                                    <p>Concluimos:</p>
                                    <p>Teorema de la desigualdad del triángulo.</p>
                                    <p>La suma de las longitudes de cualquiera de los dos lados de un triángulo es mayor
                                        que la longitud del tercer lado.</p>
                                    <p>Verifica con una regla graduada o con un compás si las siguientes desigualdades
                                        son verdaderas.</p>

    <div class="md:grid grid-cols-2 gap-2 mt-5 items-center mb-5">
        <div>
        <?php
                renderImage('u3t4_img_triangulo.webp', '', '', '', true);
                ?>
        </div>
        <div class="mx-auto">
            <ul class="ul-disc">
                <li>\(a+b > c\)</li>
                <li>\(a+c > b\)</li>
                <li>\(b+c > a\)</li>
            </ul>
        </div>
    </div>

    <?php
              $accordionItems1b = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>Todas las desigualdades se cumplen.</p>
                  '
                ]
              ];
              renderAccordion($accordionItems1b, 'primerob-');
    ?>
    <p>Determina si es que es posible formar un triángulo con tres segmentos que tienen las longitudes 13 unidades, 5 unidades y 7 unidades.</p>

    <?php
              $accordionItems2 = [
                [
                  'title' => 'Respuesta',
                  'content' => '
                  <p>No, ya que no cumple con el teorema de la desigualdad del triángulo:</p>
                  <p>7< 13+ 5</p>
                  <p>13 > 7+ 5</p>
                  <p>5 < 7+13</p>
                  '
                ]
              ];
              renderAccordion($accordionItems2, 'segundo-');
    ?>
    <p>si es que es posible formar un triángulo con tres segmentos que tienen las longitudes 13 unidades, 10 unidades y 7 unidades.</p>

    <?php
              $accordionItems3 = [
                [
                  'title' => 'Respuesta',
                  'content' => '
                  <p>Sí, ya que cumple con el teorema de la desigualdad del triángulo:</p>
                  <p>7< 13+10</p>
                  <p>13 < 7+10</p>
                  <p>10 < 7+13</p></p>
                  '
                ]
              ];
              renderAccordion($accordionItems3, 'tercero-');
    ?>
    <p>Excelente hemos conocido a lo largo de de este aprendizaje características, definiciones y teoremas de los triángulos, continuemos con los siguientes aprendizajes.</p>


</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>