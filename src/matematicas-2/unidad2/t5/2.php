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
            <p>Un canguro tiene un salto que representado en un sistema de coordenadas rectangulares tiene una
                longitud de 6 unidades y una altura de 27 unidades, para hallar una función cuadrática que especifique
                la trayectoria.</p>
            <p>Para dar respuesta a este problema sabemos una coordenada del vértice que es y=27 falta la coordenada de
                “x” pero como sabemos que el salto tiene una longitud de 6 metros que es cuando vuelve al piso las
                coordenadas serían (6,0), también tenemos que en el segundo cero antes de saltar otras coordenadas que
                es (0,0), recuerdas como en ejemplo del balón.</p>
            <p>Sabemos la estructura de la función cuadrática \(y= a(x-h^2+k\) como tenemos el vértice ya que las
                coordenadas serían (3,27) sustituyamos en la expresión tanto el punto (0,0) y el vértice (\(h, k\))</p>
            <p>\(y= a(x-h)^2+k\)</p>
            <p>\(0= a (0-3)^2+27\)</p>
            <p>\(-27= a (0-3)^2\)</p>
            <p>\(-27= a (-3)^2\)</p>
            <p>\(-27= a (9)\)</p>
            <p>\(-\frac{27}{9}=a\)</p>
            <p>\(-3=a\)</p>
            <p>Sustituyamos el valor del parámetro “a” y del vértice para tener la expresión matemática de la función
                cuadrática del problema.</p>
            <p>\(y= -3(x-3)^2 + 27\)</p>
            <p>Veamos más ejemplos en los siguientes videos de posibles aplicaciones cuyo modelo matemático es una
                función cuadrática.</p>

      <div class="md:grid grid-cols-2 gap-3">
        <div>
            <a href="https://www.youtube.com/watch?v=wV-PY5SE87A" target="_blank">
                <?php
                renderImage('u2t5_banner_ejemplo_cuadratico.webp', '', '', '');
                ?>
            </a>
        </div>
        <div>
        <a href="https://www.youtube.com/watch?v=qDEXCCuab-M" target="_blank">
            <?php
            renderImage('u2t5_banner_interpretar_cuadratico.webp', '', '', '');
            ?>
        </a>
        </div>
        </div>
      <div>

      <?php ob_start(); ?>
        <p>En la siguiente actividad práctica lo aprendido.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a15', "Problemas de aplicación", $ActividadContent);
      ?>

      <?php ob_start(); ?>
        <p>Participa en el siguiente foro.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a16', "Aplicaciones de la función cuadrática", $ActividadContent);
      ?>

      <?php ob_start(); ?>
        <p>Puedes determinar en qué situaciones si trabajas con la función cuadrática, realiza la siguiente actividad.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a17', "Modelaje de una función cuadrática", $ActividadContent);
      ?>

      <?php ob_start(); ?>
        <p>¡Has llegado al final de esta unidad! Para concluir y comprobar todo lo que has aprendido, realiza el siguiente cuestionario.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a18', "Cuestionario final unidad 2", $ActividadContent);
      ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>