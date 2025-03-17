<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Representación de la información</h2>
  <p>En esta lección desarrollaremos los siguientes aprendizajes:</p>
  <p>Aprendizajes esperados:</p>
  <ul class="ul-disc">
    <li>Explica la representación y cuantificación de la información en los diferentes dispositivos digitales.</li>
    <li>Convierte cifras de sistema de numeración decimal a binario (lenguaje máquina).</li>
    <li>Convierte cifras de sistema de numeración binario (lenguaje máquina) a decimal.</li>
    <li>Conoce el uso del ASCII para el intercambio de información.</li>
    <li>Explica como se representa la información en la memoria y los dispositivos de almacenamiento.</li>
    <li>Conoce como se almacena la información en la memoria y los dispositivos de almacenamiento.</li>
    <li>Describe las unidades de memoria y sus múltiplos para cuantificar el tamaño de los archivos, la capacidad de almacenamiento, el espacio ocupado o disponible de los dispositivos de almacenamiento.</li>
  </ul>
  <p>Para ello trabajaremos revisando y practicando el siguiente tema y subtemas.</p>
  <p>Representación de la información:</p>
  <ul class="ul-disc">
    <li>Código binario.</li>
    <li>Unidades de medida.</li>
    <li>Código ASCII.</li>
  </ul>
  <h3>Introducción</h3>
  <p>En el tratamiento de la información hay dos aspectos fundamentales:</p>
  <ul class="ul-disc">
    <li>La representación de la información, la cual se lleva a cabo empleando un código adecuado a las posibilidades internas de la computadora.</li>
    <li>El almacenamiento de la información comprende a los soportes físicos de la información de la computadora.</li>
  </ul>
  <p>En la base de los desarrollos informáticos está el hecho de que todo dato puede ser representado por un conjunto de bits, esto que permite a la ALU realizar un gran número de operaciones básicas utilizando su representación binaria. El paso a códigos binarios es una operación que la computadora realiza automáticamente, por lo que el usuario puede despreocuparse de este proceso. Sin embargo, es conveniente tener clara la forma como la computadora codifica y opera internamente, cuestión indispensable para comprender determinados comportamientos de la máquina.</p>
  <p>Para ello empezaremos recordando algunos conceptos relativos al sistema de numeración binario y las transformaciones entre éste y el sistema decimal.</p>
  <?php
  $preguntas = [
    [
      'title' => 'Los sistemas de numeración',
      'content' => 'Conocerás los tres tipos de sistemas de numeración y algunas de sus características, te enfocarás en el sistema de numeración posicional binario (lenguaje máquina), de particular importancia en informática y computación.'
    ],
    [
      'title' => 'Código ASCII',
      'content' => 'Aprenderás que es el código ASCII y su función como traductor de información de texto a cifras decimales (códigos ASCII) que ayudarán a manejar la información en los dispositivos de cómputo.'
    ],
    [
      'title' => 'Representación de la información',
      'content' => 'Sabrás que la información primero se convierte a números decimales (códigos ASCII) y luego a números binarios (lenguaje máquina) para representarla con ceros y unos debido a los dos posibles estados eléctricos de un circuito.'
    ],
    [
      'title' => 'Almacenamiento de la información',
      'content' => 'Comprenderás que ante la imposibilidad de guardar unos y ceros que es como se representa la información, se guarda de forma indirecta, en la memoria RAM mediante altos y bajos voltajes y en los discos ópticos (CD, DVD, HDVD y Blu ray) mediante bordes y superficies llanas.'
    ],
    [
      'title' => 'Recuperación de la información',
      'content' => 'Entenderás que el proceso para recobrar la información almacenada y mostrarla en pantalla, implica: “leer” los altos y bajos voltajes o los bordes y superficies planas que simbolizan a la información, teniendo esos unos y ceros en sistema binario (lenguaje máquina); hay que convertirlos a números decimales (códigos ASCII); después utilizando la tabla del ASCII se muestran los caracteres que nosotros podemos entender y así conocer la información almacenada.',
    ],
    [
      'title' => 'Unidades de medida',
      'content' => 'Aprenderás con una analogía entre las unidades monetarias del país y las de memoria o de información, el valor de estas últimas, así como sus múltiplos. La función de las unidades de memoria es la misma que las unidades monetarias, la cuantificación, en este caso de la cantidad de información y espacio disponible u ocupado en los dispositivos de almacenamiento.'
    ]
  ];
  echo renderAccordion($preguntas);
  ?>
  <?php ob_start(); ?>
  <p>Primero trabajaremos en equipos haciendo la reflexión e intercambio de información y opiniones acerca de la codificación y decodificación en la comunicación de la información.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a12', "Codificación y decodificación en la comunicación de la información", $ActividadContent);
  ?>
  <p>Piensa acerca de la pregunta ¿Cómo escribes @? sin presionar Alt Gr – Q o Ctrl - Alt – Q y sin copiar el carácter @ de una página web.</p>
  <h3>Los sistemas de numeración</h3>
  <p>Un sistema de numeración es un conjunto de símbolos y normas que permite la expresión de cantidades.</p>
  <p>Los sistemas de numeración pueden ser:</p>
  <ul class="ul-disc">
    <li><strong>No posicionales (aditivos)</strong>. En ellos no importa la posición que ocupe un dígito. Este siempre tendrá o representará el mismo valor en una cifra. Ejemplo el sistema de numeración egipcio, empleaba un símbolo para cada orden de unidades.</li>
    <li><strong>Semi-posicionales (híbridos)</strong>. En estos, el valor de un símbolo es fijo en la mayoría de las ocasiones, sin embargo, se puede modificar cuando una letra se agrega atrás o adelante de estas, el valor disminuye o aumenta. Ejemplo, el sistema romano.</li>
    <li><strong>Posicionales</strong>. Se caracterizan porque el valor de sus símbolos se determina por su expresión, pero también por el lugar que ocupan dentro de una cifra, es decir, el valor posicional. Ejemplos los sistemas de numeración decimal, binario, octal, hexadecimal entre otros .</li>
  </ul>
  <?php ob_start(); ?>
  <p>Descarga este <a href="<?php echo PATH_DOCS . 'u2_t3_practica_representacion_informacion.docx' ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de la <strong>actividad 1</strong>.</p>
  <p>Mantén abierta la práctica para realizar el resto de los ejercicios, conforme se te vaya solicitando.</p>
  <p class="font-bold">Una vez que hayas concluido todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U2Ap4. Ejemplo: SanchezLopez_JoseLuis_U2Ap4.</p>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u2_t3_rubrica_practica_representacion_informacion.pdf' ?> target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te diremos dónde enviar tu trabajo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a13', "Práctica: La representación de la información", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
