<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    
   <h2>La Carrera Armamentista y la Carrera Espacial. Una dinámica acción/ reacción entre los dos bloques</h2>

    <p>El lanzamiento de las primeras bombas atómicas sobre Hiroshima y Nagasaki en agosto de 1945 no sólo precipitó la rendición de Japón. Fueron, también, un factor de intimidación para la Unión Soviética, que para entonces carecía de este tipo de armamento. Al respecto, señala Gaddis que “Truman había usado la bomba principalmente para terminar la guerra, pero él y sus consejeros esperaban realmente que su arma indujera a una actitud más conciliadora por parte de la URSS”. Los Estados Unidos pretendían asegurarse el monopolio nuclear, y para ello elaboraron el Plan Baruch, que proponía la creación de un organismo internacional que inspeccionase y controlase todas las actividades relacionadas con la energía atómica. A cambio de ello, los Estados Unidos ofrecían desactivar - en fecha indeterminada- su arsenal nuclear. Los soviéticos se negaron a aceptar el Plan Baruch, y la intimidación dio paso a una dinámica acción- reacción que desencadenó la escalada armamentista.</p>

    <?php
       renderImage('hu2-u3-desfile.webp', 'Desfile militar sovietico 1964. Imagen de CREEES.UVA.', 'https://commons.wikimedia.org/wiki/File:May_Day_Parade_in_Moscow_1964_Hammond_Slides_21.jpg', 'Wikimedia Commons.');
    ?>

    <p>El 29 de agosto de 1949 los soviéticos confirmaron la creación de su primera bomba atómica. La respuesta de los Estados Unidos no se hizo esperar: producirían más armamento de este tipo y persistirían en el proyecto de crear una nueva bomba termonuclear con capacidad destructiva muy superior a Little Boy, arma empleada sobre Hiroshima. En 1952 produjeron la primera bomba de Hidrógeno, y los soviéticos lograron secundar la hazaña en unos cuantos meses. Francia y China “avanzaron” en el mismo sentido, en 1960 y 1964, respectivamente.</p>

    <p>En lo que respecta a la carrera espacial, los soviéticos marcaban la pauta: en 1957 pusieron en órbita el Sputnik, primer satélite artificial. Cuatro años después lograron poner en órbita al primer cosmonauta, y lanzaron un primer misil balístico intercontinental (que confirmó el para qué de las incursiones espaciales) en 1957. En respuesta, los Estados Unidos lograron que Neil Armstrong pusiera un pie en la Luna, en 1969.</p>

    <?php
       renderImage('hu2-u3-sputnik.webp', 'Satélite Sputnik. Imagen de Penyulap.', 'https://upload.wikimedia.org/wikipedia/commons/9/98/Sputnik_ubx.jpg', 'Wikimedia Commons.');
    ?>

    <p>A partir de 1963 ambas potencias se mostraron dispuestas a dialogar sobre la necesidad de imponer controles al desarrollo de armamento nuclear. En 1968 la URSS, EU y otros 95 países (con excepción de China, Francia e India) firmaron un Tratado de no proliferación de armas nucleares. Posteriormente, se firmó en Moscú el acuerdo SALT 1 (limitación de armas estratégicas) que prohibió instalar sistemas de defensa antimisiles “por considerar que la mejor garantía para mantener la paz era que ninguna de las superpotencias se sintiera segura” (Béjar 2011: 193) pues se consideraba la “destrucción mutua asegurada” (MAD) como una estrategia tan infalible como paradójica para asegurar que la aniquilación no fuese posible.</p>

    <?php
       renderImage('hu2-u3-yuri.webp', 'Yuri Gagarin (Unión Soviética) Fue el primer hombre en el espacio exterior en 1961, imagen de Полиционер. ', 'https://upload.wikimedia.org/wikipedia/commons/e/e6/Yuri_Gagarin_with_awards.jpg', 'Wikimedia Commons.');
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
