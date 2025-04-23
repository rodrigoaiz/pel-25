<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Propiedades de las sales</h3>
    <p>Los compuestos inorgánicos, en particular las sales inorgánicas, presentan propiedades físico-químicas muy importantes e interesantes ya que determinan las características de estos compuestos.</p>
    <p>Las sales se caracterizan por poseer altos puntos de fusión y de ebullición, esto se debe a las intensas fuerzas que mantienen unidos a los iones que forman el cristal de sal el cristal iónico, lo que le confiere una gran estabilidad térmica, por lo que para destruir su estructura se requiere suministrar una cantidad importante de energía.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1t2_sal_comun.webp', 'Imagen de Bru-nO', 'https://pixabay.com/es/photos/sal-salero-la-sal-de-mesa-sal-com%c3%ban-3285024/', 'Pixabay');
        ?>
    </div>
    <p>Otras propiedades que podemos mencionar son su estado físico, solubilidad, formación de cristales y conductividad eléctrica.</p>
    <?php
    $accordionItems1 = [
        [
            'title' => 'Estado físico',
            'content' => '<p>Los compuestos inorgánicos se presentan en formas físicas denominadas estados de
                                        agregación de la materia y estos son: <a
                                            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/cubos-de-hielo-hielo-congelado-fr%C3%ADo-3506781/"
                                            target="_blank">sólido</a>, <a class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/gota-de-agua-ca%C3%ADda-impacto-578897/"
                                            target="_blank">líquido</a>, <a
                                            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/resumen-humo-de-fondo-remolino-69124/"
                                            target="_blank">gaseoso</a> y <a
                                            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/plasma-electricidad-rojo-azul-933193/"
                                            target="_blank">plasma</a>. </p>
                                    <p>En el caso de <strong>las sales</strong>, se caracterizan por presentarse en
                                        estado sólido, forman redes cristalinas debido a que las sales son
                                        <strong>compuestos iónicos</strong> que se forman cuando un catión (ión con
                                        carga positiva) reemplaza a uno o más iones hidrógeno de un ácido, o bien cuando
                                        un anión (ión con carga negativa) sustituye a uno de los iones hidróxido de una
                                        base, por lo que las sales presentan en general un enlace de carácter iónico.
                                    </p>
                                    <img class="rounded-md mx-auto" src="../../assets/img/u1t2_estado_fisico.webp" />'
        ],
        [
            'title' => 'Buenos conductores de electricidad',
            'content' => '<p>Las sales <strong>en estado sólido</strong>, por ser compuestos iónicos no
                                            conducen la electricidad, ya que los iones que forman la red iónica tienen
                                            posiciones fijas y no pueden moverse. Sin embargo,cuando la sal se funde
                                            (pasa a estado líquido) o bien <strong>si se disuelve</strong> se rompe la
                                            estructura cristalina, y de esta forma los iones quedan libres y pueden
                                            conducir la electricidad.</p>
                                        <p>En termodinámica “<a
                                                class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                                href="https://pixabay.com/es/photos/term%C3%B3metro-verano-heiss-el-calor-4294021/"
                                                target="_blank">calor</a>”
                                            significa “transferencia de energía”. Esta transferencia siempre tiene una
                                            dirección definida por la diferencia de temperatura entre los cuerpos. El
                                            calor fluye del cuerpo más caliente al más frío, de manera de llegar a una
                                            temperatura de equilibrio.</p>
                                        <p>Por <a
                                                class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                                href="https://pixabay.com/es/photos/bombillas-de-luz-elegido-bombilla-1875384/"
                                                target="_blank">electricidad</a> se
                                            comprende un conjunto de fenómenos físicos vinculados a la presencia y
                                            transmisión de cargas eléctricas. La corriente eléctrica es el movimiento de
                                            cargas eléctricas a través de un conductor. Estas cargas son los electrones,
                                            partículas subatómicas que orbitan el núcleo atómico.</p>'
        ],
        [
            'title' => 'Solubilidad de las sales',
            'content' => '<p>En general las sales son solubles en solventes polares como el agua, sin embargo
                                        no se disuelven en solventes no polares como la gasolina, el benceno o
                                        tetracloruro de carbono. Esto se debe a que presentan <strong>enlaces
                                            iónicos</strong> como ya se describió en otro apartado.</p>
                                    <p>Pero, ¿Qué ocurre cuando una sal se disuelve? </p>
                                    <p>Cuando una muestra de sal se agrega a un recipiente con agua, las <strong>enlace
                                            moléculas polares</strong> de H2O son atraídas hacia los iones que forman la
                                        sal. Recuerda que el átomo de oxígeno de la molécula de agua posee una carga
                                        neta negativa y por esta razón es atraído hacia los cationes (+) de la sal.
                                        Mientras tanto, como los átomos de hidrógeno del agua poseen carga positiva son
                                        atraídos hacia los aniones (-) de la sal. De esta forma, los iones son rodeados
                                        por moléculas de agua, los cuales forman una pantalla impidiendo la atracción de
                                        los iones de cargas opuestas. La atracción anión-catión disminuye, mientras la
                                        atracción entre los iones y las moléculas de H2O es considerable. El resultado
                                        es que los iones son jalados fuera del sólido y hacia la solución. En
                                        disolución, los compuestos iónicos se ionizan en sus cationes y aniones.</p>
                                    <p>Te invitamos a ver el siguiente video para comprender qué ocurre a nivel
                                        nanoscópico cuando la sal se disuelve. </p>
                                        <iframe class="aspect-video w-md mx-auto" src="https://www.youtube.com/embed/e5OvUCXaGo4"></iframe>
                                    <p>Por otra parte, es importante señalar que la solubilidad de las sales está en
                                        función de su naturaleza química, es decir, depende del tipo de iones que la
                                        componen. Existen reglas generales para determinar la solubilidad de los
                                        compuestos inorgánicos.</p>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p class="text-cyan-800 font-bold">A continuación, puedes dar click en el siguiente vínculo para descargar un archivo que contiene las reglas de solubilidad.</p>
    <div class="w-md mx-auto">
        <p class="text-center rounded-lg shadow-md p-2 bg-cyan-600"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u1_t2_01_tablas_pka_pkb_kps_y_e.pdf'; ?>" target="_blank">Solubilidad de compuestos inórganicos</a>
        </p>
    </div>
    <h3 class="mt-auto">Experimento virtual "Solubilidad de las sales"</h3>
    <div class="grid grid-cols-3 gap-4 flex items-center">
        <div class="..."><?php
                            renderImage('u1t2_solubilidad_sales.webp', 'Solubilidad sales');
                            ?></div>
        <div class="col-span-2 ...">
            <p>Con la finalidad de comparar la solubilidad de distintas sales, te invitamos a realizar el siguiente
                experimento a través de un simulador de laboratorio virtual, disfruta la experiencia, juega al menos dos
                minutos antes con el simulador para empezar a conocer los comandos, una vez que lo logres, realiza tu
                experimento y toma nota de los resultados que obtengas. </p>
        </div>
    </div>
    <?php ob_start(); ?>
    <p>Sigue las indicaciones que se señalan en la siguiente actividad. Al concluir tu experimento y resolver todos los ejercicios propuestos, sube tus resultados para que la actividad sea evaluada.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a12', "Determinación de solubilidad de sales con simulador de laboratorio", $ActividadContent);
    ?>
    <p class="text-cyan-800 font-bold text-lg mt-8">Formación de cristales</p>
    <p>Las sales inorgánicas forman cristales, el estado cristalino de la materia es
        aquel en el cual los átomos, moléculas o iones, se empaquetan de un modo regular
        y periódico, formando una estructura microscópica ordenada. </p>
    <p>Estos constituyentes están unidos entre sí mediante diferentes tipos de fuerzas
        interatómicas, (enlaces químicos), tales como el enlace metálico, iónico,
        covalente, así como fuerzas intermoleculares como de Van der Waals y otros.</p>
    <p>Existen <a
            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
            href="http://quimicaeningenieriaindustrialitssat.blogspot.com/2017/10/215-concepto-y-caracterizacion-de.html"
            target="_blank">7 sistemas cristalinos</a> en los cuales se pueden presentar las sales: cúbico,
        tetragonal, ortorrómbico, hexagonal, romboédrico, monoclínico y triclínico.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1t2_cristales_sal.webp', 'Imagen de Goran_tek-en', 'https://upload.wikimedia.org/wikipedia/commons/d/dd/NaCl_bonds.svg', 'Wikimedia Commons');
        ?>
    </div>
    <p class="text-cyan-800 font-bold">Ahora que has aprendido acerca de los sistemas cristalinos puedes descargar el siguiente archivo y armar tus propios modelos. </p>
    <div class="w-md mx-auto">
        <p class="text-center rounded-lg shadow-md p-2 bg-cyan-600"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u1t2_modelos_de_sistemas_cristalinos.pdf'; ?>" target="_blank">Sistemas Cristalinos</a>
        </p>
    </div>
    <?php ob_start(); ?>
    <p>Con la finalidad de evaluar los aprendizajes logrados, es importante que resuelvas el siguiente ejercicio.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a13', "Evaluación de sales", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>