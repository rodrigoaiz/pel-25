<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Fases en el suelo</h3>
    <p>El suelo es la capa más superficial de la corteza terrestre, permite la interacción entre la atmósfera, biósfera, hidrósfera y geósfera al contener elementos de cada una. El suelo es un ejemplo de estructura heterogénea.</p>
    <p>La estructura del suelo consiste capas horizontales llamadas <strong>horizontes</strong>, revisa el siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('v0BzKiVCNGM', 'Horizontes del suelo.');
        ?>
    </div>
    <p>Como se observó en el video dentro de los horizontes O, A, B, C y D donde podemos encontrar sustancias
        inorgánicas y orgánicas, las cuales podemos dividir en tres fases del suelo:</p>
    <ul class="ul-list">
        <li><span class="font-bold">Fase sólida:</span> se forma de materia inorgánica como rocas y minerales
            (45%), incluye materia orgánica (5%) que se forma de los seres vivos (bacterias, hongos, algas,
            plantas, raíces, etc), cuando esta materia orgánica se descompone se llama humus.</li>
        <li><span class="font-bold">Fase líquida:</span> se compone del agua (25%) y las sustancias que se
            disuelven en ella.</li>
        <li><span class="font-bold">Fase gaseosa:</span> representa el 25%, se compone de O2 del aire y dióxido
            de carbono (CO2).</li>
    </ul>
    <p>De acuerdo con lo anterior, se puede decir que el suelo es una mezcla de compuestos orgánicos e
        inorgánicos, en la siguiente imagen pueden observar todo el proceso de formación.</p>
    <div class="max-w-4xl mx-auto">
        <?php
        renderImage('u1t1_composicion_suelob.webp', 'Composición del suelo.');
        ?>
    </div>
    <p>Recuerda que una función del suelo es almacenar agua para la vida de los seres vivos, esta función
        depende del tamaño de partícula y la cantidad de materia orgánica presente. Los suelos por su textura
        pueden ser arenas, limos o arcillas. De acuerdo a la disposición y estado de agregación de las
        partículas se distinguen estructuras granular, laminar o poliédrica dentro del suelo.</p>
    <?php
    $accordionItems1 = [
        [
            'title' => 'Textura de suelos',
            'content' => '<p>La textura del suelo depende del tamaño de partícula, un suelo <a
                                    class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                    href="https://pixabay.com/es/photos/arena-piedra-tierra-patrones-61893/"
                                    target="_blank"><i class="ri-cloud-line inline"></i> arenoso</a> tiene una textura
                                de grano entre 0.2mm y 0.02mm, el suelo <a
                                    class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                    href="https://pixabay.com/es/photos/lluvia-agua-tierra-agricultura-4998235/"
                                    target="_blank"><i class="ri-cloud-line inline"></i> limoso</a> va de 0.02 a 0.002mm
                                y el suelo arcilloso es menor a 0.002mm. La textura del suelo influye en las
                                características como la permeabilidad, aireación, retención de agua y nutrientes. Así,
                                un suelo arenoso contiene poca materia orgánica por lo que este suelo no es bueno para
                                cultivar, un suelo <a
                                    class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                    href="https://pixabay.com/es/photos/de-tierra-barro-naturaleza-315579/"
                                    target="_blank"><i class="ri-cloud-line inline"></i> arcilloso</a> se encharca con
                                facilidad al ser impermeable. Los suelos limosos retienen más fácil el agua y los
                                nutrientes. Para que un suelo tenga vegetación debe tener una composición adecuada de
                                arcillas, arena y materia orgánica que permita la vida.</p>'
        ],
        [
            'title' => 'Estructura del suelo',
            'content' => '<p>La <a class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                    href="http://www.fao.org/fishery/static/FAO_Training/FAO_Training/General/x6706s/x6706s07.htm"
                                    target="_blank"><i class="ri-cloud-line inline"></i> estructura</a> puede ser:</p>
                            <p>Las partículas finas del suelo se unen formando agregados por la acción de la materia
                                orgánica, entre cada agregado hay poros que permiten el movimiento de aire y agua. La
                                unión de estos agregados da origen a la forma que tiene la estructura y que repercute
                                igual que la estructura en sus propiedades.</p>
                            <ul class="list-disc ml-10">
                                <li>Sin estructura</li>
                                <li>Granular</li>
                                <li>Laminar: agregados planos</li>
                                <li>Poliédrica: poliedros más o menos regulares</li>
                            </ul>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p>En el siguiente sitio podrás encontrar más información acerca de los tipos de suelo que hay en el país <a href="https://www.revista.unam.mx/2021v22n6/infografia_la_mirada_creativa_de_la_informacion/" target="_blank">El suelo.</a></p>
    <p>Para ampliar información sobre las características del suelo consulta el siguiente video, es importante que tomes nota de la descripción que se presenta sobre las características físicas y químicas del suelo.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('NpzuOsmtaHA', 'Características del suelo.');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Con la siguiente actividad podrás reafirmar tus conocimientos respecto a la composición, textura y tipos de suelo en México.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a4', "Composición y características del suelo", $ActividadContent);
    ?>
    <p class="font-bold">Ahora a realizar un pequeño experimento. (Experimento Virtual)</p>
    <p>Accede al <a href="http://objetos.unam.mx/quimica/suelo/index.html" target="_blank">Laboratorio virtual</a> que el CCH ha creado para que valores los conocimientos que posees sobre las propiedades físicas y componentes del suelo, disfruta la experiencia, plantea tu hipótesis, identifica las tres muestras de suelo y envía tus conclusiones. </p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>