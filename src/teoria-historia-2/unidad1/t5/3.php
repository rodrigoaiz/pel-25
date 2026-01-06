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

<h2>Hippolyte Taine </h2>

<h3> Hippolyte Taine </h3>

<p>
    Este autor nace en 1828 y muere en 1893. Filósofo, historiador y ensayista, escribió numerosas obras, entre las cuales se encuentran <i>Ensayo 
    sobre Tito Livio, Ensayos de crítica e historia, los orígenes de la Francia contemporánea, en tres tomos, Historia de la literatura inglesa</i>, 
    Filosofía del Arte. Sus reflexiones se orientan en el sentido de ubicar la obra en su contexto: la época, el lugar y el autor, pues, más allá de 
    la propia sensibilidad del artista, el contexto permite interpretar la obra en su contexto. <br> De su <i>Tito Livio</i> te presentamos los 
    siguientes fragmentos que definen la historia, el papel de los documentos, su sentido y por qué revisarlos:
</p>

<p class="citation">
   <b>«Desde hace cien años en Alemania, <i>[1864-1869]</i> desde hace sesenta en Francia, se ha transformado la historia á favor del estudio de las 
   literaturas. Se ha descubierto que una obra literaria no es un simple juego de imaginación, capricho aislado de una acalorada fantasía, sino una 
   copia de las costumbres reinantes, y signo de un estado de espíritu. Se ha inferido, por consecuencia, que, atendiendo á los monumentos literarios, 
   podría discernirse la manera de pensar y sentir de los hombres siglos hace. [...] Reflexionando sobre esas maneras de pensar y de sentir, se ha 
   visto que eran <i>hechos de primer orden</i>; que se enlazaban íntimamente con los más grandes acontecimientos: que los explicaban y se explicaban 
   por ellos á su vez; que en lo sucesivo había que concederles un puesto, y uno de los más altos puestos, en la historia. Se les ha concedido ese 
   puesto, y desde entonces se ve cambiar todo en la historia: el objeto, el método, los instrumentos, la concepción de las leyes y de las causas. <br>
   I. Los documentos históricos no son más que indicios, por medio de los cuales hay que reconstruir el individuo visible. <br> Cuando volvéis las 
   grandes páginas de un tomo en folio, las hojas amarillentas de un manuscrito, de un poema, de un código, de un símbolo de fe, ¿cuál es vuestra 
   primera reflexión? Que no se ha hecho él solo, naturalmente: que es un molde, semejante á una concha fósil; que es una impresión, semejante á 
   una de esas formas depositadas en la piedra por un animal que vivió́ y murió́. ¿Por qué́ estudiáis la concha sino para figuraros el animal? Pues de 
   la propia suerte no estudiáis el documento sino para conocer al hombre. La concha y el documento son restos muertos, y no valen más que como indicios 
   del ser íntegro y viviente. Hasta ese ser hay que llegar; ese ser es el que necesitamos reconstruir. Es engañarse estudiar el documento como si existiese 
   por sí solo; es tratar las cosas como simple erudito, y caer en una ilusión de biblioteca. En el fondo, no hay mitología ni lenguas, sino únicamente 
   hombres que coordinan palabras é imágenes según las exigencias de sus órganos y la forma original de su espíritu»</b>. Hyppolite Taine, <i>Historia 
    de la literatura inglesa</i>. Prólogo.
</p>

<br>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Hippolyte_taine.webp', 'Taine fue filósofo, historiador y  ensayista. Su influencia en el campo del arte fue muy amplia a fines del siglo XIX',
  'https://upload.wikimedia.org/wikipedia/commons/d/dd/Hippolyte_taine.jpg','Wikipedia Commons');?>
</div>

<p>A continuación vamos a realizar un repaso para reafirmar las características y autores de las corrientes del siglo XIX.</p>
<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t5a1', "Autores y corrientes del siglo XIX", $ActividadContent);
?>

<p>Participa en el foro La historiografía del siglo XIX</p>
<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t5a2', "La historiografía del siglo XIX", $ActividadContent);
?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>