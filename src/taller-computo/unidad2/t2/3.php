<?php
include '../../../config.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>¿Qué conoces?</h3>
  <p>Seguro que tienes muchas preguntas sobre el tema. Te invito a intentar contestar las siguientes preguntas, para conocer su respuesta da clic sobre ellas.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    $preguntas = [
      [
        'title' => 'La velocidad del disco duro puede afectar el rendimiento general de la computadora',
        'content' => 'Si, dado que puede tomar más tiempo abrir archivos y programas.'
      ],
      [
        'title' => '¿Cuál es la diferencia entre un disco duro y un disco de estado sólido?',
        'content' => 'Un disco duro utiliza discos magnéticos para almacenar datos, mientras que un SSD utiliza memoria flash, por lo que son más rápidos y confiables.'
      ],
      [
        'title' => '¿Qué significa el número en un puerto USB? ',
        'content' => 'Indica que es una versión más nueva y rápida, por lo que utiliza velocidades de transferencia de datos es más rápidas.'
      ],
      [
        'title' => '¿Qué es la memoria flash?',
        'content' => 'La memoria flash es un tipo de almacenamiento de datos que utiliza chips de memoria no volátil para almacenar y recuperar datos digitales. Esta se utiliza en muchos dispositivos electrónicos, como unidades flash USB, tarjetas de memoria y discos duros de estado sólido (SSD).'
      ],
      [
        'title' => '¿Cuál es la diferencia entre los puertos de una computadora?',
        'content' => '<p>Existen diferentes tipos y cada uno con su propia función y propósito, por ejemplo;</p> <ul class="ul-disc"> <li>USB: se utilizan para conectar dispositivos como teclados, ratones y unidades flash.</li> <li>HDMI: se utilizan para conectar pantallas y televisores.</li> <li>Ethernet: se utilizan para conectar la computadora a una red.</li> <li>Audio: se utilizan para conectar auriculares y altavoces.</li> <li>VGA: se utilizan para conectar pantallas y proyectores.</li> </ul>'
      ],
      [
        'title' => '¿Cuál es la función de la tarjeta madre?',
        'content' => 'Es quien une los componentes de la computadora en un mismo punto y les permite comunicarse entre sí.'
      ]
    ];
    echo renderAccordion($preguntas);
    ?>
    <p>Como habrás notado, es importante identificar las características de los elementos que componen el hardware de acuerdo a la función que realizan, con el objetivo que pueda satisfacer tus propias necesidades.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
