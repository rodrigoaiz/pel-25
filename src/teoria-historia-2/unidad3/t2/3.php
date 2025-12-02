<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>NUEVOS ENFOQUES HISTORIA CULTURAL </h2>
  <p>La historia cultural, como disciplina académica, se enfoca en estudiar la cultura de una sociedad o comunidad en un determinado momento temporal. Podemos encontrar antecedentes de esta forma de historiar desde el siglo XIX: «En el siglo XIX, el término culture o Kultur se empleaba cada vez con más frecuencia en Gran Bretaña y en Alemania (los franceses preferían hablar de cívilísatíon)» [Peter Burke,  ¿Qué es la historia cultural?]. Para el siglo XX, los temas y metodologías que estudia la historia cultural se integraron a partir de distintas disciplinas, las cuales aportaron temas, procedimientos, metodologías y conceptos, tenemos así, por ejemplo antropología cultural,  historia del arte, historia de la música, con autores que buscaban no sólo los significados de las obras de arte, de las piezas musicales o de los productos de la cultura popular, sino también su explicación en un contexto más amplio: el ámbito social de la obra. Así, por ejemplo,
  <?php renderTooltip ('Ewin Panofski', '(1892-1968). Historiador, crítico y teórico del arte. Su obra concibe que toda obra de arte puede ser interpretada y marca tres momentos para su comprensión: el nivel primario o identificación del tema, consistente en identificar los elementos que componen la obra; el nivel secundario o iconográfico, en el cual se identifican los elementos que componen la obra de manera simbólica para su total comprensión y el terciario o iconológico, el cual relaciona la obra con su contexto y entorno social para su comprensión ubicándola en espacio, tiempo, contexto cultural y social.','bottom');?> distingue, dentro de la Historia del arte a la <b>iconografía</b>, el significado de los símbolos presentes en una obra, de la <b>iconología</b>, que, a partir de la obra que se analiza, puede descubrir la cosmovisión que la sustenta.</p>
  <p>En los años ochenta, la historia cultural se enfoca en la historia de la cultura popular y las subculturas, además de la cultura dominante. Un ejemplo de esto fue la publicación de Subculture: The Meaning of Style de Dick Hebdige, que analizó las subculturas juveniles en Inglaterra de la década de 1960. Este enfoque amplió el espectro de la historia cultural y abrió nuevas formas de exploración: las formas culturales se pudieron distinguir no sólo por la clase o estrato social, como se entendía desde otras perspectivas historiográficas, sino que también se asocia a rangos de edad, entorno social, cultural o religioso y una gran cantidad de variables.</p>
  <p>En los años noventa, la historia cultural se volvió más interdisciplinaria, abarcando la teoría literaria, la antropología, los estudios culturales, las disciplinas del arte y también los medios de comunicación. Esta ampliación de la perspectiva permitió a los estudiosos analizar la cultura de manera más profunda, así como enfocarse en la relación entre ésta y la política; entre las cultura de las élites y la cultura popular; la relación del género con la cultura; la nacionalidad y la identidad cultural, entre otras problemáticas. Los historiadores empezaron a analizar las experiencias de los grupos marginados y su papel en la integración de una cultura determinada.</p>
  <p>Un tercer desarrollo en la historia cultural ha sido la atención a la narrativa y la representación. Los estudiosos han tomado nota de cómo las historias y las narrativas son utilizadas para construir y mantener la cultura. También han analizado cómo la representación de ciertos grupos en la cultura, especialmente en los medios de comunicación, afecta la percepción de ellos en la sociedad.</p>
  <p>Algunos de los autores más importantes de la historia cultural son Michel de Certeau, quien trabaja sobre historia de la vida cotidiana, la escritura de la historia y las mentalidades; Roger Chartier, con estudios sobre los lectores, la narrativa y los géneros literarios; y el autor que tomamos como base para esta corriente Peter Burke.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-iconografia.webp','Alegoría de la Iconografía.', 'https://commons.wikimedia.org/wiki/File:Iconologia_del_cavaliere_Cesare_Ripa,_perugino_%281764%29_%2814726736326%29.jpg','Wikimedia Commons.');
  ?>
  </div>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
