<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Para concluir</h3>
  <p>El lenguaje máquina (el sistema binario, con sus unos y ceros) ha sido desde la computadora EDVAC (1949) la forma en que este dispositivo maneja y representa la información, utilizando los dígitos uno y cero, de ahí que la información en cómputo sea digital.</p>
  <p>La forma en que se almacena la información desde los inicios de la computadora se asoció a los medios disponibles en el momento, como las tarjetas perforadas o las cintas de papel perforado donde el uno era perforado y el cero era no perforado, luego surgieron los discos magnéticos donde se orientaban partículas magnéticamente en un sentido u otro, hoy día se guarda la información electrónicamente con altos y bajos voltajes, la otra forma consiste en grabar con rayo láser en disco óptico pits y lands empleando el borde de los pits como uno y las superficies planas como cero, para almacenar dichos valores.</p>
  <p>El ASCII es de suma importancia, porque permitió que la información que se guardaba una computadora de cierta marca comercial pudiera ser leída y modificada en una computadora de otra marca comercial diferente, esto es el objetivo de este código, el intercambio de información entre computadoras que lo utilicen.</p>
  <p>La cuantificación o medición de la información fue determinada al emplear el ASCII, este código requiere de 8 bits para representar a un carácter, entonces un byte queda definido como un conjunto de ocho bits.</p>
  <p>Los múltiplos para cuestión práctica emplean los prefijos griegos kilo, mega, etc. pero no significa que sean múltiplos de 10, ya que trabajamos con sistema binario, base 2, de esta manera el numeró más próximo a 1000 es 1024 por ello 1 Kb son 1024 bytes o 210 y el resto de los múltiplos se obtiene multiplicando por 1024 o 210. Con estas unidades sabemos cual es el tamaño de un archivo o la capacidad de un dispositivo de almacenamiento, etc.</p>
  <p>El peso y la masa son dos conceptos diferentes. La masa es la cantidad de materia que tiene un cuerpo y se mide en kilogramos (kg), en cambio, el peso es la fuerza que ejerce un cuerpo astro sobre otro y su unidad de medida es el newton (N). Decir que un archivo pesa es incorrecto porque el peso es el resultado de multiplicar la masa (kg) por la aceleración de la gravedad (m/s2) y sus unidades son N (kg∙m/s2), lo correcto es que tiene un tamaño o ocupa un espacio en bytes o sus múltiplos.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
