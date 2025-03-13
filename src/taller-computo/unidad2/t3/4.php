<?php
include '../../../config.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Representación de la información</h3>
  <p>La información se representa de la siguiente manera en una celda de la memoria RAM.</p>
  <div class="text-center mx-auto max-w-3xl py-5">
    <?php renderImage('u2_t3_figura4.webp', 'Nota: Ilustra a uno de los grupos de capacitores que constituyen la memoria, cada uno de ellos adquiere un estado eléctrico, que está asociado con un uno o un cero binario y la combinación de unos y ceros representa a un carácter.'); ?>
  </div>
  <p>Observa, en la memoria RAM una letra A se representa así 01000001 en sistema binario (lenguaje máquina). En general los sistemas digitales representan la información mediante los dígitos del sistema binario, de ahí que en los sistemas de cómputo la información es digital. Se utiliza el valor 0 para indicar que no hay tensión y el 1 para indicar que sí la hay.</p>
  <p>Visualiza el video Microaprendizaje: ¿Cómo se representa la información?</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe('7s8UqW8xk1A', 'Microaprendizaje: ¿Cómo se representa la información?'); ?>
  </div>
  <p>En un disco óptico (CD, DVD, HDVD, Blu ray) la información también es representada mediante unos y ceros.</p>
  <p>En estos discos un pit (hoyo, muesca o foso) está delimitado por unos, es decir, el borde del principio y del final de un pit es un uno, y su longitud está determinada por el número de ceros que contiene.</p>
</section>
<div class="max-w-7xl mx-auto px-2 grid md:grid-cols-2 py-5 gap-5 md:gap-15 items-center">
  <div class="text-center">
    <?php renderImage('u2_t3_figura5.webp', 'La representación de la información en un disco óptico. Nota: Expone el empleo de pits (muescas, fosos) y lands (planicies) para representar a los unos y ceros binarios, es decir a la información.'); ?>
  </div>
  <div class="text-center">
    <?php renderImage('u2_t3_figura6.webp', 'La forma en que se representan unos y ceros binarios en un disco óptico. Nota: Muestra como el láser proyectado al pasar por el borde del pit refleja el rayo en un ángulo que no es captado por el sensor, esto representa a un uno, cuando el rayo reflejado es captado por el sensor, esto representa a un cero, la longitud del land (planicie) determinará la cantidad de ceros representados.'); ?>
  </div>
</div>
<section>
  <p>El espacio entre pits, denominado Land (planicie, llano), también representa ceros y el número de estos depende de la longitud del Land.</p>
  <p>La siguiente imagen muestra la comparación entre discos ópticos de la longitud (I) y altura (w) del pit, el espacio entre hileras de pits (p), el diámetro del haz del rayo láser (φ), la longitud onda del láser (λ) es el período de la onda, es decir, la distancia a la que se repite la forma de la onda, finalmente el color de láser.</p>
  <div class="text-center mx-auto max-w-3xl py-5">
    <?php renderImage('u2_t3_figura7.webp', 'Características de los discos ópticos. Nota: Presenta Comparación de los formatos de almacenamiento óptico. Espacio entre pistas (p). Anchura de pit (w). Longitud mínima (l). Tamaño del punto del láser (⌀). Longitud de onda (λ). Imagen de Cmglee. Wikimedia Commons.'); ?>
  </div>
  <h3>¿Cómo se representaría la palabra Hola grabada en un CD, DVD, HDVD o Blu ray?</h3>
  <ul class="ul-disc">
    <li>Utilizando la tabla del ASCII localizamos cada letra y leemos su código ASCII (número decimal).</li>
    <li>Luego lo convertimos a su correspondiente en lenguaje máquina (sistema binario).</li>
    <li>Después se grabarían los pits y lands en el disco óptico.</li>
  </ul>
  <p>Figura 8. Grabación de la información en discos ópticos.</p>
  <div class="text-center mx-auto max-w-3xl py-5">
    <?php renderImage('u2_t3_figura8.webp', 'Nota: Simbolización de los unos y ceros binarios el borde de pit (muesca) simboliza un uno y las superficies planas de la muesca o la superficie representan un cero, entre más larga la superficie mayor el número de ceros representados.'); ?>
  </div>
  <p>Observa como se le da longitud a cada pit para que en sus bordes inicial y final haya un uno y en su land (planicie) tenga la longitud adecuada para incluir los ceros, por ello son importantes las medidas antes mencionadas.</p>
  <div class="text-center mx-auto max-w-3xl py-5">
    <?php renderImage('u2_t3_figura9.webp', 'Representación de una celda de memoria y el valor posicional de cada capacitor. Nota: Esquema de los capacitores de una celda de memoria y el valor de cada posición obtenido de los dos estados eléctricos (0 y 1) elevados al número de la posición (la potencia) iniciando en cero y terminando en 7, dando en total 8 posiciones.'); ?>
  </div>
  <p>Dividimos el número 64 entre 2, guardamos el residuo y el cociente lo dividimos entre dos como se ilustra a continuación.</p>
  <div class="text-center mx-auto max-w-3xl py-5">
    <?php renderImage('u2_t3_figura10.webp', 'Procedimiento de conversión de número decimal a binario.'); ?>
  </div>
  <p>Nota: División del número decimal a convertir entre dos (la base del sistema de numeración binario) luego repetir la anotación del residuo y dividir el cociente entre dos, hasta tener un cociente de cero. Elaboración propia.</p>
  <p>La @ es el ASCII 64 10 , el cual equivale a 01000000 2 y así es como la @ se representa y se guarda en disco o en memoria.</p>
  <?php ob_start(); ?>
  <p>Descarga este <a href="<?php echo PATH_DOCS . 'u2_t3_practica_representacion_informacion.docx' ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de la <strong>Actividad 3 - partes 1, 2 y 3</strong>.</p>
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
