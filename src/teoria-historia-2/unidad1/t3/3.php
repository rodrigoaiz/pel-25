<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2> Importancia de esta corriente </h2>

<p>
    El contexto cultural de esta corriente va más allá de lso países de lengua alemana e influye particularmente en Francia, especialmente después 
    de 1871, el final de la guerra franco prusiana en el periodo que se conoce como la «<b>Belle Époque</b>» un periodo en el cual las potencias 
    industriales desarrollan la ciencia y tecnología, la segunda revolución industrial, con énfasis en el desarrollo de la química, la electricidad, 
    la biología y la física con fines tanto de ampliar el conocimiento científico, así como las formas de la producción industrial. También, se 
    inicia una carrera armamentista, la ciencia y técnica al servicio de las armas, que se expresa en la Primera Guerra Mundial. Pero también es 
    el momento de desarrollo de las vanguardias artísticas, que se expresan tanto en la pintura como en la música. El desarrollo de un ambiente 
    académico en las universidades europeas permitirá la profesionalización de la historia. <br> La importancia de esta escuela de pensamiento 
    histórico es múltiple. Por un lado es considerar que todo tema se puede historiar, tal como lo retomará el historicismo.  Por otra parte, 
    su metodología de investigación le permite proponer un análisis riguroso y sistemático de los textos históricos, de las fuentes para la 
    investigación histórica. En este aspecto, esta corriente también se emparenta con el positivismo, del cual es contemporáneo, especialmente 
    en el uso de los documentos. <br> La idea de una historia, rigurosa, con base en fuentes documentales escritas, con el objetivo de buscar 
    la verdad dentro del conocimiento del pasado de una sociedad, lo cual configura la visión del historiador profesional de la segunda mitad 
    del siglo XIX y el primer tercio del siglo XX.

</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-HISTORIA_1892_Nikolaus_Gynis.webp', '«Se ha dicho que la historia tiene por misión enjuiciar el pasado e instruir al 
  presente en beneficio del futuro». Leopold von Ranke','https://upload.wikimedia.org/wikipedia/commons/5/53/Nikolaos_Gyzis_-_Historia.jpg',
 'Wikimedia Commons.');
?>
</div>

<p>
    A continuación vamos a realizar un repaso de lo aprendido en las lecciones de esta unidad, para ello realiza la siguiente actividad, con 
    esta actividad te proponemos que compruebes lo que sabes de los temas que estudiaste.
</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a2', "Repaso", $ActividadContent);
?>

<h4> Recuerda que la lectura es fundamental para esta materia.</h4>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>