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
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Introducción</h2>
 
  <p>
    Te damos la bienvenida a la última parte de la unidad 4. Hemos estado reflexionando sobre las consecuencias de la globalización y 
    el neoliberalismo instalados en el mundo a partir de la década de los ochenta del siglo XX. Abordaremos algunas expresiones culturales 
    para identificar las características de las formas de vida de la sociedad actual. En específico, vamos a tratar los temas de la 
    posmodernidad y el pensamiento crítico.
  </p>

  <p>
    Recordarás que revisamos dos procesos que son fundamentales para entender el cierre del siglo XX y el comienzo del XXI. Éstos son: 
    la crisis petrolera de 1973 y la disolución de la URSS en 1991. Ambos procesos significaron el declive de las dos grandes fuerzas 
    que se habían enfrentado durante la Guerra Fría. Los actores principales a nivel mundial cedieron paso a nuevos protagonistas que 
    comenzarían a definir cambios en el panorama global. Algunos autores han caracterizado a esta etapa como el fin de la Modernidad, 
    o bien, la Posmodernidad.
  </p>

  <?php
       renderImage ('hu2-u4-graffiti.webp', 'El arte posmoderno es una clara representación del fin de ciertos valores de la modernidad. Imagen de Singlespeedfahrer', 
       'https://commons.wikimedia.org/wiki/File:Ildefonso_Guajardo_firmando_el_TMEC.jpg', 'Wikimedia Commons.');
  ?>

  <p>
    De manera general, podemos decir que la posmodernidad es un término que se refiere a un período cultural, filosófico y artístico 
    que surge como respuesta y crítica a los principios y características de la modernidad. No existe una única definición aceptada de 
    posmodernidad, pero podemos identificar algunos rasgos comunes asociados a este concepto, como la fragmentación, la multiplicidad de 
    perspectivas, la incredulidad en las grandes narrativas, la mezcla de estilos y la importancia de la cultura de masas.
  </p>

  <p>
    El concepto ha sido analizado por algunos autores con diferentes perspectivas. Jean-François Lyotard en su obra "La condición posmoderna" 
    (1979) sostiene que la posmodernidad se caracteriza por el fin de los "grandes relatos" y el predominio de los "pequeños relatos" o 
    narrativas locales y fragmentadas. Jean Baudrillard plantea una crítica a la sociedad contemporánea y la cultura de la simulación en obras 
    como "La sociedad de consumo" (1970) y "Simulacros y simulaciones" (1981). Argumenta que vivimos en un mundo hiperreal, donde la realidad ha 
    sido reemplazada por simulacros y signos. Fredric Jameson en su libro "El postmodernismo o la lógica cultural del capitalismo tardío" (1991), 
    analiza la relación entre el capitalismo tardío y la emergencia de la cultura posmoderna, argumentando que la posmodernidad es una expresión 
    cultural del capitalismo globalizado.
  </p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
