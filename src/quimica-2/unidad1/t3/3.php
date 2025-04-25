<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Modelo de Bohr</h3>
    <p>El modelo de Bohr representa el movimiento de los electrones, indicando que giran alrededor del núcleo,
        pero en ciertas órbitas permitidas. A estas órbitas se les conoce como capas de energía o niveles de
        energía, donde la energía está cuantificada y se nombran de acuerdo con el número cuántico principal,
        desde n=1,2,3,4... dependiendo del nivel.</p>
    <p>Bohr basó su modelo en tres postulados:</p>
    <ol class="ol-number">
        <li>Las órbitas de ciertos radios con una energía definida están permitidas para el electrón de un átomo
            de hidrógeno.</li>
        <li>Un electrón que está en una órbita permitida se encuentra en un estado de energía permitido. Este
            electrón no irradia energía y, por lo tanto, no cae en espiral dentro del núcleo.</li>
        <li>La energía es absorbida o emitida por un electrón cuando éste cambia de un estado de energía
            permitido a otro. Esta energía es absorbida o emitida como un fotón que tiene energía E=hυ.</li>
    </ol>
    <p><strong>Del modelo de Bohr podemos destacar las siguientes características:</strong></p>
    <div class="p-8 bg-yellow-100">
        <div class="w-full">
            <ul class="list-disc ml-10">
                <li>Los electrones giran alrededor del núcleo en órbitas circulares.</li>
                <li>Los electrones orbitan el núcleo en órbitas que tienen un tamaño y energía establecidos. No hay un estado intermedio entre las órbitas.</li>
                <li>Cada órbita tiene una energía que se relaciona con su tamaño, así la órbita de menor tamaño tendrá la menor energía, si es una órbita más alejada del núcleo tendrá mayor energía.</li>
                <li>La absorción y emisión de luz por los átomos se explica por la transición del electrón entre dos de los estados energéticos permitidos.</li>
                <li>Existe un estado de mínima energía llamado estado basal.</li>
            </ul>
        </div>
        <div class="grid grid-cols-3 gap-4 h-96 mt-12">
            <div class="h-full max-h-40 rounded-md">
                <?php
                renderImage('u1t3_electrones.webp', 'Electrones Imagen de OpenClipart-Vectors,', 'https://pixabay.com/es/vectors/n%C3%BAcleo-del-%C3%A1tomo-nuclear-%C3%A1tomo-153152/', 'Pixabay');
                ?>
            </div>
            <div class="h-full max-h-40 rounded-md">
                <?php
                renderImage('u1t3_horno_microondas.webp', 'Absorción Imagen de jeanvdmeulen,', 'https://pixabay.com/es/photos/aparato-cocinero-cocinando-5144884/', 'Pixabay');
                ?>
            </div>
            <div class="h-full max-h-40 rounded-md">
                <?php
                renderImage('u1t3_cohete.webp', 'Emisión Imagen de Wikilmages,', 'https://pixabay.com/es/photos/lanzamiento-de-cohete-cohete-l%c3%a1rgate-67643/', 'Pixabay');
                ?>
            </div>
        </div>
    </div>




    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('VnCwTNaaaCA', 'Bienvenida a la lección 3.');
        ?>
    </div>
    <p>En esta lección revisarás los aprendizajes relacionados con conceptos de estructura de la materia al estudiar el modelo atómico de Bohr y la representación de un átomo neutro, de cationes y aniones mediante el modelo de Bohr. Lo cual te servirá para comprender que la formación de un catión implica pérdida de electrones y la formación de un anión ganancia de electrones. Lo cual te servirá para entender la presencia de iones monoatómicos y poliatómicos en el suelo.</p>
    <?php
    $content = ob_get_clean();
    renderTemplatePage($menuAsignaturaPath, $content);
    ?>