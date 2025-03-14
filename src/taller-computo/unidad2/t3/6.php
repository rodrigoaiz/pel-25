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
  <h3>Recuperación de la información</h3>
  <p>Abrir un archivo y recuperar la información guardada, para adicionarle o modificarla, implica: “leer” los altos y bajos voltajes o los bordes y superficies planas que representan a la información, teniendo esos unos y ceros en sistema binario (lenguaje máquina); convertirlos en números del sistema decimal (códigos ASCII); después utilizando la tabla del ASCII muestra los caracteres que nosotros podemos entender.</p>
  <?php renderImage('u2_t3_figura12.webp', 'Recuperación de la información almacenada.') ?>
  <p>Nota: Representación simplificada del proceso realizado para recuperar la información guardada en los dispositivos de almacenamiento y mostrarla al usuario. Elaboración propia.</p>
  <p>Para abrir un archivo y mostrar la información. La computadora realiza la conversión de un número en sistema binario (lenguaje máquina) a un número en sistema decimal (código ASCI). Revisemos cómo lo hace.</p>
  <?php renderImage('u2_t3_figura13.webp', 'Presentación del ejemplo de conversión de un número binario a decimal. ') ?>
  <p>Nota: Esquema de apoyo para la conversión de un número binario a uno decimal, incluye los capacitores, las potencias de dos y los valores posicionales.</p>
  <ul class="ul-disc">
    <li>Colocamos sobre cada capacitor un dígito binario de derecha a izquierda.</li>
    <li>Bajo su posición se coloca cada dígito binario multiplicado por el valor posicional.</li>
    <li>Se hacen las multiplicaciones, luego todo se suma para obtener el número decimal.</li>
  </ul>
  <?php renderImage('u2_t3_figura14.webp', 'Cálculo de la conversión de un número binario a decimal.') ?>
  <p>Nota: Acomodo de los dígitos del número binario de derecha a izquierda en la parte superior. En la parte inferior anotar la multiplicación del digito binario por el valor posicional en cada columna, finalmente realizar la suma para obtener el número decimal equivalente.</p>
  <p>El número <strong>11011000</strong> 2 almacenado en disco, equivale al <strong>216<sub>10</sub></strong> (su código ASCII), en la tabla corresponde a la letra <strong>Ï</strong> y es lo que se muestra en pantalla o se imprime.</p>
  <?php ob_start(); ?>
  <p>Descarga este <a href="<?php echo PATH_DOCS . 'u2_t3_practica_representacion_informacion.docx' ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de la <strong>Actividad 5</strong>.</p>
  <p>Mantén abierta la práctica para realizar el resto de los ejercicios, conforme se te vaya solicitando.</p>
  <p class="font-bold">Una vez que hayas concluido todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U2Ap4. Ejemplo: SanchezLopez_JoseLuis_U2Ap4.</p>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u2_t3_rubrica_practica_representacion_informacion.pdf' ?> target=" _blank">Criterios de evaluación</a> de la actividad. Más adelante te diremos dónde enviar tu trabajo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a11', "Práctica: La representación de la información", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
