<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Producto final y Co-evaluación: Representaciones culturales de la masculinidad.</h2>
    <p>La masculinidad es una construcción social basada en estereotipos, roles y mandatos. No es algo natural. Es decir, no se nace sabiendo cómo ser hombre o cómo ser mujer. Lo aprendemos sobre la marcha, de la familia, las amistades y las representaciones culturales que vemos en los medios de comunicación como la televisión, la radio y el internet.</p>
    <p>En este aprendizaje, estudiaste los presupuestos de la masculinidad tradicional. Para ello, hiciste un reconocimiento, análisis y reflexión de lo que socioculturalmente representa ser hombre. Es necesario señalar que los estudios de género sobre la masculinidad no se encargan de criticar y condenar a los hombres, sino de comprender los estereotipos, roles, mandatos y expectativas que se imponen socialmente a los hombres, además de estudiar las dinámicas culturales y de poder que establecen los hombres con otras personas.</p>
    <p>La siguiente actividad de evaluación tiene como propósito que reflexiones y cuestiones las representaciones culturales de lo que es la masculinidad. Para ello, primero seleccionarán un personaje masculino de una serie de televisión o película. Después, colaborarán para hacer un collage, dividido en dos partes, donde ilustrarán los aspectos positivos y negativos de la masculinidad del personaje elegido. Dejamos a su criterio la libertad de decidir qué es positivo y qué es negativo. En la segunda parte, escribirán un texto donde argumenten y reflexionen porqué consideran que esa característica del personaje elegido representa aspectos positivos o negativos de su masculinidad.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar las representaciones culturales de la masculinidad tradicional y proponer alternativas para la construcción de masculinidades libres de estereotipos de género.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Trabajen en equipos de 4 ó 5 estudiantes en salas pequeñas.</li>
        <li>Elijan un personaje masculino de una serie de televisión o película.</li>
        <li>Mediante un documento colaborativo de su preferencia (Power point, Slides, Canva, etc.), elaboren un collage dividido en dos partes. De un lado, representen los aspectos que consideren positivos de la masculinidad del personaje elegido. Del otro lado, representen los aspectos que consideren negativos.</li>
        <li>Escriban en el collage una reflexión sobre el impacto que tiene la masculinidad del personaje elegido en la sociedad, en el desarrollo de las mujeres, de otros hombres, de las diversidades y disidencias sexo-genéricas, y de sí mismo.</li>
        <li>Mencionen la manera en que el personaje promueve, o no, ambientes de igualdad, respeto, tolerancia y convivencia.</li>
        <li>Incluyan en sus conclusiones su opinión sobre la masculinidad del personaje analizado.</li>
        <li>Socialicen su collage con el grupo durante la sesión sincrónica de TEAMS.</li>
        <li>Participen en la coevaluación del collage de otro equipo, que les será asignado por su docente.</li>
        <li>Descarguen el archivo adjunto que contiene la rúbrica para valorar la calidad del trabajo de sus compañer*s.</li>
        <li>Cuando terminen de coevaluar a sus pares, uno de ustedes publicará el archivo de la rúbrica como respuesta a sus compañer*s en este foro.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Participa aquí en el foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a5', "Foro - Representaciones culturales de la masculinidad", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>