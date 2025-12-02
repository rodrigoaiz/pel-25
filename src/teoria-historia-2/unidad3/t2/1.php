<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>PRESENTACIÓN DE LA LECCIÓN</h2>

  <p>En la lección anterior revisamos a nuevos sujetos de la investigación histórica, los cuales, para analizarse, se requiere desarrollar, necesariamente, una metodología concreta. En esta lección conoceremos dos propuestas metodológicas para el estudio de la historia, el primero, ligado a las categorías del materialismo histórico e influido por la Escuela de los Annales. Es necesario tener claro que buscar nuevos sujetos implica plantearse también nuevos problemas o replantear explicaciones históricas anteriores, razón por la cual el trabajo del historiador en la última parte del siglo XX necesita también nuevas metodologías de investigación. ahora los temas por investigar abarcan elementos como la historia del  medio ambiente, historia serial; historia de la ciencia y la tecnología, así como nuevas formas de la historia personal a través de biografía y la 
    <?php renderTooltip ('prosopografía', 'Este término se refiere a la investigación de una biografía dentro de un contexto social específico: estudiantes, banqueros, obreros, familias, con el fin de determinar a través de la compilación de biografías de un determinado conjunto social, como los descritos, y se buscan semejanzas, rupturas y/o continuidades dentro del mismo para comprender mejor la mecánica social que se presenta.','bottom');?>;  la historia cultural,  o la historia e historiografía desde la perspectiva de género, entre otras. </p>
  <p>El objetivo de esta lección no es conocer a detalle cada una de las metodologías, sino que a través del conocimiento de la historia cultural y del Sistema-Mundo puedas apreciar las formas en que se integran las metodologías de la historia en el periodo estudiado.

  <p><b>Instrucciones:</b> Lee con atención la información que te brindamos a continuación. Te permitirá ubicar el ambiente que rodea al surgimiento de las corrientes que te presentamos. Cuando veas una palabra resaltada en <b style="color: red">color rojo</b>, dale clic para obtener más información sobre ella. Esperamos que este primer recorrido sea tan interesante para ti como lo fue para nosotros.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
