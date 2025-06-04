<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>Ahora comencemos.</p>
    <p>Se desea construir un gallinero de forma rectangular, para esto se dispone de 80 metros de tela de alambre. ¿Cuáles deben de ser las dimensiones del gallinero para que la superficie resulte ser la máxima posible?</p>
    <p>Es importante que recuerdes que en los problemas donde interviene geometría debemos realizar un dibujo,
                por ejemplo, el gallinero.</p>

                <?php
  renderImagePleca('u2_t1_gallinero_1.webp', 'Gallinero. Imagen de giallopudding.', 'https://pixabay.com/es/photos/gallinero-granja-pollos-coop-pollo-343942/', 'Pixabay', 'justify-center');
  ?>

<p>Es muy recomendable que realicemos preguntas exploratorias. Te invitamos a que las anotes junto con sus
                respuestas en tu cuaderno, te apoyarán en la resolución de cualquier problema.</p>
            <ol class="ol-number">
                <li>¿Qué es lo que pretende resolver el problema? </li>
                <li>¿Qué datos tienes? </li>
                <li>¿Cuál o cuáles son las variables? </li>
            </ol>

      <div class="max-w-3xl mx-auto">
          <?php
          $accordionItems1 = [
            [
              'title' => 'Respuesta',
              'content' => '<ul class="ul-disc">
                                      <li>¿Qué es lo que pretende resolver el problema? <strong>Lo que buscamos es con la tela
                                              de alambre que tenemos construir un gallinero cuya área sea la más
                                              grande.</strong></li>
                                      <li>¿Qué datos tienes?<strong>Sabemos que debe tener forma rectangular y que solo
                                              tenemos 80 metros de tela de alambre. </strong></li>
                                      <li>¿Cuál o cuáles son las variables?<strong>Las variables son el largo y ancho del
                                              rectángulo ya que desconozco estas longitudes y por lo tanto el área o
                                              superficie máxima.</strong></li>
                                  </ul>'
            ]
          ];
          renderAccordion($accordionItems1, 'primero-', false);
          ?>
        </div>

        <p>Después de haber contestado las preguntas anteriores podemos enfocarnos en un nuevo punto de la
                resolución de problemas que es la concepción del plan el cual nos llevará a obtener la solución del
                problema.</p>

            <ol class="ol-number">
                <li>¿Qué conocimientos previos puedes aplicar a la resolución del problema?</li>
                <li>¿Cómo puedes relacionar los conocimientos previos con los datos que tienes?</li>
            </ol>

        <div class="max-w-3xl mx-auto">
          <?php
          $accordionItems2 = [
            [
              'title' => 'Respuesta',
              'content' => '<ul class="ul-disc">
                                <li>¿Qué conocimientos previos puedes aplicar a la resolución del problema?<strong>
                                        Tenemos que el área de un rectángulo es base por altura y su perímetro la suma
                                        de las longitudes de sus lados ancho más ancho más largo más largo ósea 2 veces
                                        ancho más 2 veces largo.</strong></li>
                                <li>¿Cómo puedes relacionar los conocimientos previos con los datos que tienes?<strong>
                                        Tenemos el total del perímetro del rectángulo que es de 80 metros ya que no
                                        tenemos más tela de alambre y vamos a relacionar con el perímetro y el área o
                                        superficie. </strong></li>
                                  </ul>'
            ]
          ];
          renderAccordion($accordionItems2, 'segundo-', false);
          ?>
        </div>

        <p>Como el gallinero debe tener forma rectangular una primera pregunta es: ¿Cuántos
        rectángulos podemos formar de tal manera que su perímetro sea de 80 metros?</p>

        <div class="m-auto">
        <?php
        renderImage('u2_t1_gallinero_2.webp', '', '', '', true);
        ?>
        </div>

        <p>Pero… ¿cuál tendría la mayor superficie?, estarás de acuerdo que no solo estos dos rectángulos se pueden
                formar, existen más opciones.</p>
        <p>Estás de acuerdo también tendríamos que utilizar la fórmula para la Superficie (Área) del rectángulo que
                es \(y=X \bullet A\) (Ancho (A) por largo (X) o base (A) por altura (X)) Ya que nos piden la mayor
                superficie.</p>
        <p>Para relacionar todo lo anterior podríamos generar una tabla.</p>

        <h4>Ejecución del plan</h4>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
        <div>
          <p>En esta etapa realizaremos una tabla asignando valores al ancho y largo obteniendo así el área.</p>
          <p>¿Qué valores le darás en la tabla para el ancho y el largo?, estás de acuerdo que el perímetro permanece
                constante y es 80 metros.</p>
          <p>Como puedes observar la mayor superficie es cuando el ancho y el largo tienen 20 m y 20 m
                respectivamente, es un cuadrado, pero recuerda que los cuadrados son casos especiales de los
                rectángulos. </p>
          <p>Mientras dabas diferentes valores al ancho y largo del rectángulo pudiste observar que su perímetro
                necesariamente permanecía constante pero su área o superficie varían de acuerdo a los valores que toman
                el largo y el ancho.</p>

      <ol class="ol-number">
          <li>¿Cuál fue la mayor superficie que encontraste?<br><strong>\(400
          m^2\)</strong></li>
      </ol>

        </div>
        <div>
        <?php
        renderImage('u2_t1_tabla.webp', '', '', '', true);
        ?>
        </div>
      </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4 items-center">

      <p>A partir del problema anterior escribe cuál sería el modelo matemático que generaliza el problema toma en
      cuenta el siguiente rectángulo.</p>

      <div class="m-auto">
          <?php
          renderImage('u2_t1_diagrama_1.webp', '', '', '', true);
          ?>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
      <div>
        <p>Tendríamos como perímetro \(2x+2A=80\)</p>
        <p>Si despejamos A</p>
        <p>\(A= \frac{80-2x}{2} = 40-x\)</p>
        <p>Ahora relacionemos con la fórmula para obtener la superficie</p>
        <p>Recuerda que es \(y=x \bullet A\)</p>
        <p>Sustituyendo “A”</p>
        <p>Tenemos</p>
        <p>\(y=x(40-x)\)</p>
        <p>\(y=-x^2 +40x\)</p>
      </div>
      <div>
        <p>La anterior expresión matemática representa una función cuadrática, como ya pudiste revisar en las AUAPAS.</p>
        <p>¿Quién es la variable independiente? Claro dimos valor a x, por lo tanto, el largo.</p>
        <p>¿Quién es la variable dependiente? La superficie o área.</p>
        <p>Contesta las siguientes preguntas.</p>
            <ol class="ol-number">
                <li>¿Cuál es el valor de X para que el gallinero tenga la menor superficie?</li>
                <li>¿Cuál es el valor de X para que el gallinero tenga la mayor superficie?</li>
            </ol>
      </div>
    </div>

        <div class=" mx-auto">
          <?php
          $accordionItems3 = [
            [
              'title' => 'Respuesta',
              'content' => '<ul class="ul-disc">
                             <li>¿Cuál es el valor de X para que el gallinero tenga la menor superficie? <strong> 39
                                        metros</strong></li>
                                <li>¿Cuál es el valor de x para que el gallinero tenga la mayor superficie?<strong> 20
                                        metros</strong></li>
                                  </ul>'
            ]
          ];
          renderAccordion($accordionItems3, 'tercero-', false);
          ?>
        </div>

    <?php ob_start(); ?>
        <p>Después de haber revisado y realizado las actividades del aprendizaje uno participa en el foro de discusión.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a2', "Situaciones que se pueden modelar con funciones cuadráticas", $ActividadContent);
        ?>

    <?php ob_start(); ?>
        <p>Para finalizar este aprendizaje te invitamos a que resuelvas el siguiente ejercicio.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a3', "Funciones cuadráticas", $ActividadContent);
        ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>