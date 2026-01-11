<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La ciencia histórica en la posmodernidad: el último tercio del siglo XX. </h2>
  <h3>Contexto de esta corriente.</h3>
  <p>Los cambios en las formas de comunicación que se desarrollan a partir de la década de los años setenta del siglo pasado impactan necesariamente en las formas de concebir la historia académica, misma que, a partir del ascenso de nuevos sujetos de acción e investigación histórica y nuevas formas metodológicas, permitió el cuestionamiento de la visión de la historia vista a partir de la primera mitad de dicho siglo.</p>
  <p>La influencia de otras disciplinas, como el psicoanálisis y los estudios de lingüística, permitieron una visión de nuestra disciplina que poco a poco cuestionó la validez de un método único, dependiente de cada corriente historiográfica, y recuperó la estructura narrativa de la historia como objeto literario y relativizó el concepto de verdad, así como el uso de las fuentes.</p>
  <p>Los rápidos cambios ocurridos en el mundo a partir de estas fechas se plasmaron en una visión de prestar mayor atención a la forma en que se escribe la historia que a su contenido. Un ejemplo es la caída del llamado socialismo real, que tiene dos momentos muy álgidos: la caída del Muro de Berlín en 1989 y la desaparición de la Unión Soviética, en 1991, con lo cual varios pensadores vieron como el fracaso de la metodología teórica del materialismo histórico. </p>
  <p>La crítica a los valores emanados de la modernidad, entendida ésta como el proceso histórico mediante el cual, a partir del siglo XV, se busca una visión racional del mundo y permeó en la confianza en métodos de análisis que llevaron al desarrollo de las ciencias modernas y a descubrimientos, así como a avances del desarrollo científico, que llevaron a mayor desigualdad entre los países lo que propició la aparición de corrientes irracionalistas como es el pensamiento fascista. Ante esto, se revela la posmodernidad.</p>
  <p>El filósofo y sociólogo Zygmunt Bauman lo expone mediante el concepto de <b>modernidad líquida</b> , pues, explica que la modernidad nos lleve a una mejor sociedad, se escapa de nosotros como el agua en las manos, que se escurre entre los dedos, pues después de la segunda guerra mas a que aspiración mundial, el progreso de la ciencia y la técnica parecían conducir a una mejora de las sociedades, pero, a partir de los años setenta, esta visión se disuelve y la sociedad se entra en una crisis por el individualismo y los procesos de globalización que destruyen o imponen identidades. Esta crisis da origen al pensamiento posmoderno.</p>
  
  <p>Otro de los elementos de contexto histórico es el avance científico tecnológico, en especial la computación y <b>miniaturización</b>,  misma que permitió un acceso mayor a fuentes históricas y uso de herramientas más eficientes para la investigación documental a partir también de la digitalización de archivos, tanto escritos como visuales, facilitando el acceso a información tanto de historiadores profesionales como de estudiantes de esta disciplina.  
  <p>Asimismo, el aumento de desigualdades entre sociedades ricas y pobres; la aparición del fundamentalismo de tipo religioso y político como una respuesta ante la injusticia social y el ascenso de atentados terroristas de distintos signos ideológicos, especialmente en contra de la población civil en distintas partes del mundo; la desaparición de naciones y el cuestionamiento de las nacionalidades, como fue en el caso de los países derivados de la ex Unión Soviética y aparecen movimientos ligados a elementos raciales antes que sociales, como fue el caso de la crisis de la ex Yugoslavia y su dispersión en distintos países: Bosnia y Herzegovina, Croacia, Montenegro, Macedonia del Norte, Serbia, Eslovenia y todo esto relativizó el concepto de lo que es verdadero, justo o adecuado. Esta situación se agravó al crear desde la década de los noventa, flujos migratorios en todo el mundo, con lo cual se cuestionó la idea del fin de la historia como un futuro solidario o un periodo de bonanza económica que redujera las desigualdades en el mundo.
  <p>Ante lo anterior, quienes estudian y escriben la historia académica, se cuestionaron sobre el papel de su disciplina y los conceptos que se asocian a la misma.

  <p>A continuación, te pedimos que observes el siguiente video con las Características de la posmodernidad, producido por el CCH UNAM.
  <?php
  renderVideoIframe('qCEm4OAJ7X4', ' Características de la posmodernidad.');?>
  <p>Instrucciones: Lee con atención la información que te brindamos a continuación. Te permitirá ubicar el ambiente que rodea al surgimiento de las corrientes que te presentamos. Cuando veas una palabra resaltada en <b style='color: red'>color rojo</b>, dale clic para obtener más información sobre ella. Esperamos que este primer recorrido sea tan interesante para ti como lo fue para nosotros.</p>
  <p>En distintas materias habrás conocido el concepto de posmodernidad y lo has complementado con lo que has aprendido hasta el momento. Antes de iniciar esta unidad es importante que explicites tu idea sobre este concepto y que puedas contrastar con la de tus otros compañeros. Recuerda lo que escribes en tu participación en el foro ¿Qué es la posmodernidad? y al final de esta unidad, compáralo con lo que aprendiste. </p>
  <?php ob_start(); ?>
  <p></p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t3a1', "¿Qué es la posmodernidad?", $ActividadContent);
  ?>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-sueñodominical.webp','Mural Sueño de una tarde dominical en la Alameda Central', 'https://es.m.wikipedia.org/wiki/Archivo:Mural_Sue%C3%B1o_de_una_tarde_dominical_en_la_Alameda_Central.jpg','Wikimedia Commons.');
  ?>
  </div>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
