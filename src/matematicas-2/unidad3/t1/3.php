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

    <div class="md:grid grid-cols-1 gap-3">
        <div>
        <p>En este aprendizaje recordarás los elementos básicos de una figura geométrica.</p>
            <p>Para que realices lo anterior y puedas observar que en todo tu entorno existe las matemáticas en este
                caso especial Geometría, por ejemplo en el arte, revisa lo siguiente y contesta.</p>
        </div>
        <div>
        <?php
          renderImage('la_Real_de_la_Almudena.webp', 'Imagen de Riozujar.', 'https://commons.wikimedia.org/wiki/File:Catedral_Santa_Mar%C3%ADa_la_Real_de_la_Almudena,Madrid,Comunidad_de_Madrid,Espa%C3%B1a._(8543289658).jpg', 'Wikimedia Commons.', 'justify-center');
        ?>
      </div>
    </div>
    <div>

    <p>¿Qué elementos básicos de Geometría plana puedes identificar en esta pintura?</p>

    <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems1 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>Triángulos, líneas, círculos, rombos y rectángulos.</p>'
                ]
              ];
              renderAccordion($accordionItems1, 'primero-', false);
              ?>
      </div>

      <p>Recuerda tus clases de primaria un polígono es una figura plana cerrada y simple, que está formada
                completamente por segmentos de recta.</p>
      <p>De los elementos de la imagen ¿Cuáles son polígonos?</p>

      <div class="max-w-3xl mx-auto">
              <?php
              $accordionItems2 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<p>Rectángulo, triángulos y rombos.</p>'
                ]
              ];
              renderAccordion($accordionItems2, 'segundo-', false);
              ?>
      </div>

      <div class="md:grid grid-cols-2 gap-3 mt-6 items-center">
        <div>
        <p>Revisa la siguiente tabla que contiene dibujos de polígonos y los que no son polígonos así como una explicación sobre por qué no cumplen con las características de los polígonos.</p>
        </div>
        <div>
        <?php
          renderImage('u3t1_poligonos.webp', '', '', '', true);
        ?>
      </div>
    </div>
    <div>

    <div class="md:grid grid-cols-2 gap-3 mt-6 items-center">
        <div>
        <p>Ahora ya que sabes que condiciones debe cumplir un polígono, empecemos a estudiar sus características, respondiendo lo siguiente.</p>
        <p>Observa el siguiente polígono y contesta lo que se te pide.</p>
            <ol class="ol-number">
                <li>¿Cuáles son los lados? </li>
                <li>¿Cuáles son los Vértices?</li>
                <li>¿Qué diagonales se forman en la figura, a partir del vértice E?</li>
                <li>¿Cuáles son los ángulos interiores de la figura?</li>
            </ol>
        </div>
        <div>
        <?php
          renderImage('u3t1_img_poligono.webp', '', '', '');
        ?>
      </div>
    </div>
    <div>

  <?php ob_start(); ?>
    <p>Ahora realiza la siguiente actividad en la que debes identificar el nombre de diferentes polígonos, de esta forma pondrás en práctica lo aprendido hasta este momento.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3a3', "Lados, ángulos y diagonales", $ActividadContent);
  ?>

<div class="max-w-3xl mx-auto">
              <?php
              $accordionItems3 = [
                [
                  'title' => 'Respuesta',
                  'content' => '<ol class="ol-number">
                                <li>¿Cuáles son los lados? <strong> AE, AB, BC, CD, DE</strong></li>
                                <li>¿Cuáles son los Vértices? <strong> A, B, C, D y E</strong></li>
                                <li>¿Cuáles son las diagonales que se forman en la figura? <strong> EC, EB</strong></li>
                                <li>¿Cuáles son los ángulos interiores? <strong> A, B, C, D, y E </strong></li>
                            </ol>'
                ]
              ];
              renderAccordion($accordionItems3, 'tercero-', false);
              ?>
  </div>

  <div class="md:grid grid-cols-2 gap-3">
        <div>
          <p>Revisa el siguiente video, donde se explica con detalle la importancia de realizar la triangulación en los polígonos, para una explicación amplia de cómo se triangulan los polígonos para obtener propiedades de los mismos de una manera fácil y que nos llevará a encontrar un patrón o fórmula para generalizar este tipo de tareas.</p>
            <a href="https://www.youtube.com/watch?v=xKJCLbmzVDc&t=9s" target="_blank">
                <?php
                renderImage('u3t1_banner_propiedades_poligonos.webp', '', '', '');
                ?>
            </a>
        </div>
        <div>
        <p>Por otra parte, consulta la siguiente página de internet para que recapitulemos lo estudiado hasta el
                momento. En está página se trabajan problemas donde algunos ya están resueltos y otros son fáciles de resolver
                para practicar y adquieras habilidades en la resolución de problemas de este aprendizaje.</p>
        <a href="https://uapas2.bunam.unam.mx/matematicas/poligonos/" target="_blank">
            <?php
            renderImage('u3t1_banner_poligonos_regulares.webp', '', '', '');
            ?>
        </a>
        </div>
        </div>
    <div>

    <?php ob_start(); ?>
    <p>Antes de finalizar este aprendizaje te pedimos que realices la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3a4', "Triangulación de polígonos", $ActividadContent);
  ?>

<p>Terminamos de revisar los aspectos básicos de la unidad, ahora realicemos construcciones con regla y compás para que puedas como en el pasado, observar mediante esta actividad las propiedades y conceptos de las figuras geométricas.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>