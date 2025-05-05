<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ModalIndex.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2>Bienvenida a la Unidad 4</h2>
<div class="lg:grid">
      <a href="https://youtu.be/ADBdaA0marw?si=cGrxa9MbNXPTwnBK" target="_blank">
                <?php
                renderImage('u4t1_banner_video_bienvenida.webp', '', '', '');
                ?>
      </a>
</div>
<p>Bienvenido a la última Unidad de Matemáticas II, la Unidad 4, Congruencia, semejanza y Teorema de Pitágoras.</p>
<p>En esta ocasión nos ocuparemos de <strong>comparar figuras</strong>, con énfasis en
                <strong>triángulos</strong>, observando las relaciones que hay entre ellos cuando puede notarse que son
                <strong>iguales (congruentes)</strong> o que la única diferencia es su <strong>tamaño
                    (semejanza)</strong>, conservando una misma forma. Estas relaciones permiten calcular medidas de
                lados y ángulos en figuras más grandes y complejas, además de comprobar la validez de teoremas
                (enunciados que pueden demostrarse) que son bastante conocimos, como el <strong>Teorema de
                    Thales</strong> o el <strong>Teorema de Pitágoras</strong>.</p>
            <p>La relevancia de este tema se encuentra en diversas aplicaciones, como la <strong>construcción de
                    mapas</strong> y otras formas a escala o determinar la longitud de distancias inalcanzables, como la
                <strong>altura de un rascacielos</strong>, entre otras aplicaciones.</p>

<?php ob_start(); ?>
<p>Aunque antes de adentrarnos en la temática, realizaremos un ejercicio de autoevaluación, relacionado con conocimientos referentes a esta unidad.tionario de autoevaluación Unidad 1</p>
<?php
$ActividadContent = ob_get_clean();
renderActividad('u4a1', "Cuestionario diagnóstico unidad 4", $ActividadContent);
?>
</section>
<?php renderModalIndex('<strong>IMPORTANTE 2:</strong> Sólo encontrarás disponible el contenido de la Unidad 1 y 2, en breve podrás acceder a las siguientes unidades'); ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>