<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Las unidades de medida</h3>
  <p>Son modelos de referencia, son cantidades estandarizadas establecidas y reconocidas internacionalmente para medir magnitudes físicas o cualidades abstractas.</p>
  <p>En nuestro caso una señal digital en un circuito o el borde y la superficie plana en un disco óptico, esta es la forma que toma la cantidad de información y el espacio en los dispositivos de almacenamiento.</p>
  <div class="grid md:grid-cols-2 gap-3 my-5">
    <div class="text-center bg-secondary/20 p-3">
      <p class="text-primary">¿Cuál es la unidad monetaria de México?</p>
      <p class="text-secondary">El peso.</p>
      <strong>Así la unidad de memoria es el byte.</strong>
    </div>
    <div class="text-center bg-secondary/20 p-3">
      <p class="text-primary">¿Cuál es la unidad mínima monetaria de nuestro país?</p>
      <p class="text-secondary">El centavo.</p>
      <p><strong>De igual manera, la unidad mínima de memoria es el bit.</strong></p>
    </div>
  </div>
  <div class="text-center bg-secondary/20 p-3 max-w-2xl mx-auto">
    <p class="text-primary">Ahora, ¿Cuántos centavos forman un peso?</p>
    <p class="text-secondary">Un peso es conjunto de 100 centavos.</p>
    <p><strong>De esta forma, un byte es un conjunto de 8 bits.</strong></p>
  </div>
  <p>Como vimos antes 8 bits son los que se requieren para representa un carácter ASCII, entonces un carácter ASCII ocupa 1 byte en memoria o en un dispositivo de almacenamiento.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t3_figura15.webp', 'Analogía entre las unidades monetarias y las unidades de memoria.') ?>
  </div>
  <p>Nota: En equivalencia un peso que es la unidad monetaria, un byte es la unidad de memoria, en ese mismo sentido, el centavo es la unidad mínima monetaria, así el bit (binary digit) es la unidad mínima de memoria, por otra parte, como el peso es un conjunto de 100 centavos, el byte es un conjunto de 8 bits y con 8 bits se representa un carácter ASCII, entonces un carácter ocupa un byte de memoria.</p>
  <p>Continuemos con los múltiplos del byte ¿Cuál de los valores posicionales se parece más a 1000?</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t3_figura16.webp', 'Los valores posicionales y el kilobyte.') ?>
  </div>
  <p>Nota: Generando los valores posicionales más allá de dos a la séptima potencia y calculando los valores posicionales, con ello se determina el valor en bytes de un kilobyte.</p>
  <p>Es 1024, por ello 1 KB es igual a 1024 o 2<sup>10</sup> bytes</p>
  <p>Utilizando los prefijos griegos el siguiente múltiplo es el mega, 1 MB es igual a 1 048 576 bytes como múltiplo lo obtenemos calculando 1024 x 1024 o 210 * 210 = 220</p>
  <p>De igual forma se calculan el resto de los múltiplos, como se ve a continuación.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t3_figura17.webp', 'Tabla de múltiplos en sistema de numeración decimal y binario.') ?>
  </div>
  <p>Nota: Tabla con los prefijos, la cantidad que representan en sistema decimal y en sistema binario, tanto en forma general como en términos de potencias, es importante notar que 1 kb son 1024 bytes y no mil porque es una cantidad en sistema binario y no decimal. Con estos múltiplos se cuantifica el tamaño de la memoria RAM, el espacio ocupado o disponible en los dispositivos de almacenamiento, el tamaño de los archivos.</p>
  <?php ob_start(); ?>
  <p>Descarga este <a href="<?php echo PATH_DOCS . 'u2_t3_practica_representacion_informacion.docx' ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de la <strong>Actividad 6</strong>.</p>
  <p>Mantén abierta la práctica para realizar el resto de los ejercicios, conforme se te vaya solicitando.</p>
  <p class="font-bold">Una vez que hayas concluido todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U2Ap4. Ejemplo: SanchezLopez_JoseLuis_U2Ap4.</p>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u2_t3_rubrica_practica_representacion_informacion.pdf' ?> target=" _blank">Criterios de evaluación</a> de la actividad. <strong>Ha llegado el momento de enviar tu actividad.</strong></p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a11', "Práctica: La representación de la información", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
