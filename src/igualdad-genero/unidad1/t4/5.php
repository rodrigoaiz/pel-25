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
    <h2>Sesión 2 ¿Cómo se relacionan los hombres?</h2>
    <p>Los modelos de masculinidad tradicional se basan en relaciones de dominio y sumisión de otros. Entonces, ¿las formas en que se relacionan los hombres favorecen el desarrollo propio y de otras personas, o lo obstaculizan?</p>
    <p>En el aprendizaje 3 ya revisaste información sobre los micromachismos o machismos cotidianos. Como habrás notado, muchas veces los hombres no son conscientes de que estos comportamientos son una forma sutil, pero constante, de establecer relaciones de poder y violencia.</p>
    <p>En la esta sección revisarás la triada de la violencia, un modelo que explica como algunos hombres ejercen violencia sobre sí mismos, sobre otros hombres, y sobre personas que consideran vulnerables (mujeres, infancias y sexo-diversidades). Estas son formas de relacionarse negativas, así que te invitamos a tener presente que el propósito de este tema es aprender a identificarlas como un primer paso para modificar esos comportamientos, y de poner límites a quienes se relacionan con estos comportamientos.</p>
    <p>A medida que resuelvas los demás ejercicios de esta sesión, también te invitamos a reflexionar sobre otras formas en que podríamos relacionarnos, de manera que se favorezca el desarrollo de las personas de manera equitativa.</p>
    <h3>Formas en que se relacionan los hombres</h3>
    <p class="font-bold text-xl text-fuchsia-900">Machismos cotidianos</p>
    <p>Aunque muchos hombres consideran que no son machistas porque no ejercen la violencia física o verbal, existen otras prácticas, comportamientos y discursos que utilizan – de manera consciente o inconsciente – para tratar a las mujeres como seres inferiores, incapaces de ser autónomas e independientes.</p>
    <p>Como ya viste en el aprendizaje 3, Bonino (2008) utilizó el término <strong>micromachismos</strong> para referirse a esas prácticas, comportamientos y discursos. Sin embargo, este término ha sido criticado porque no se trata acciones pequeñas, ya que son un abuso de poder o una forma de imponer el dominio de los hombres sobre las mujeres. Claudia De la Garza y Eréndira Derbez (2021) las renombran como <strong>machismos cotidianos debido a que ocurren de manera sistemática, sutil, reiterada, constante y persistente</strong>.</p>
    <p>A continuación, te mostramos algunos machismos cotidianos:</p>
    <div id="controls-carousel" class="relative w-full bg-purple-200 rounded-xl" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-xl md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                        <?php
                        renderImage('iga4-img06.webp');
                        ?></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machodespatarre o Manspreading</p>
                        <p>El machodespatarre o male spreading ocurre cuando un hombre sentado con las piernas bien abiertas, ocupa un espacio excesivo, especialmente en áreas públicas. Esto invade el espacio circundante, causando incomodidad y forzando a las mujeres a tomar una postura cerrada, como cruzar las piernas o sentarse de lado. Al expandir sus piernas, el hombre demuestra que tiene dominio sobre el espacio de las mujeres.</p>
                        <p>En oposición al manspreading está el shebagging que ocurre cuando las mujeres que invaden espacios contiguos con sus pertenencias, evitando que alguien se siente a su lado. En ocasiones, el shebagging es una estrategia para evitar el hostigamiento y acoso de los hombres en lugares públicos porque permite a las mujeres seleccionar quien se sienta a su lado, en caso de tener que ceder el asiento.</p>
                        <p class="font-bold">Sin embargo, el manspreading y el shebagging son actos contrarios a la civilidad y respeto hacia el espacio de otras personas.</p>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                        <?php
                        renderImage('iga4-img07.webp');
                        ?></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machomanipulación o gaslighting</p>
                        <p>La machomanipulación o gaslighting es una forma de violencia emocional en la cual un hombre le hace creer a una mujer que su percepción, sus recuerdos, o su propio juicio están equivocados.</p>
                        <p>Algunas de las intenciones de la machomanipulación son hacer que la mujer:</p>
                        <p class="ml-20 leading-6">a) dude de sí misma;</p>
                        <p class="ml-20 leading-6">b) se sienta culpable, sin que el hombre asuma su responsabilidad;</p>
                        <p class="ml-20 leading-6">c) crea que todo está en su imaginación, porque ella es muy sensible;</p>
                        <p class="ml-20 leading-6">d) crea que él le está diciendo qué hacer o pensar, por su propio bien;</p>
                        <p class="ml-20 leading-6">e) las palabras de la mujer se usen en su contra;</p>
                        <p class="ml-20 leading-6">f) piense que está equivocada, aunque no sea cierto;</p>
                        <p class="ml-20 leading-6">g) piense que sus opiniones no cuentan o están equivocadas.</p>
                        <p class="font-bold">El hombre utiliza la machomanipulación para convencer a la mujer de que, lo que ella cree, no es verdad a pesar de las evidencias.</p>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                        <?php
                        renderImage('iga4-img08.webp');
                        ?></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machoexplicación o mansplaining</p>
                        <p>La machoexplicación o mansplaining es la necesidad que siente un hombre de explicar un tema a una mujer. </p>
                        <p>En estas situaciones el hombre habla porque:</p>
                        <p class="ml-20 leading-6">a) no le interesa escuchar a la mujer sino ser escuchado, aunque ella sea experta en el tema;</p>
                        <p class="ml-20 leading-6">b) necesita demostrar su exceso de confianza, superioridad, o su arrogancia.</p>
                        <p class="ml-20 leading-6">c) cree que la mujer no conoce el tema o debe ser "corregida" en sus ideas.</p>
                        <p class="font-bold">Solnit (2014) explica que la machoexplicación evita que las mujeres expresen lo que piensan, las hace sentir inseguras, limita su participación en una conversación, o las obliga a mantenerse en silencio.</p>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                        <?php
                        renderImage('iga4-img09.webp');
                        ?></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Bombardeo amoroso o love bombing</p>
                        <p>El bombardeo amoroso o love bombing es la necesidad que siente un hombre de hacerle creer a una mujer que está enamorado de ella para manipularla. Aunque no se conozcan bien, el hombre expresa desde el inicio de la relación que la mujer es su alma gemela, que es perfecta para él, y que tienen un futuro juntos.</p>
                        <p>El hombre crea una imagen idealizada de la mujer -sin conocerla-, que resulta en:</p>
                        <p class="ml-20 leading-6">a) recordatorios constantes de que nadie la amará igual que él, y que son la pareja perfecta.</p>
                        <p class="ml-20 leading-6">b) reclamos cuando ella no actúa de acuerdo a lo que él espera;</p>
                        <p class="ml-20 leading-6">c) presión para que ella cumpla las demandas para que él se sienta bien;</p>
                        <p class="ml-20 leading-6">d) exigencias para que ella le demuestre constantemente que lo ama;</p>
                        <p class="ml-20 leading-6">e) control de las acciones, comportamientos y relaciones de la mujer mediante los celos, la inseguridad y la devaluación.</p>
                        <p class="font-bold">El bombardeo amoroso es una violencia emocional que utilizan los hombres para lograr el afecto, admiración y reconocimiento de las mujeres, y así manipularlas para tener control sobre ellas.</p>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                        <?php
                        renderImage('iga4-img10.webp');
                        ?></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Impuesto rosa o pink tax</p>
                        <p>El impuesto rosa o pink tax utiliza los estereotipos de género para presionar a las mujeres a consumir productos que prometen hacerlas atractivas y femeninas, a la par que se usan empaques rosas, llamativos y vistosos para subir el precio del producto; mientras que los hombres consumen menos productos a un menor precio. </p>
                        <p>Las violencias contra las mujeres que se esconden tras el impuesto rosa son:</p>
                        <p class="ml-20 leading-6">a) Generar inseguridad sobre el cuerpo femeninos con estándares de belleza imposibles de lograr, que fomentan el consumo de más productos;</p>
                        <p class="ml-20 leading-6">b) Permitir que los hombres cosifiquen a las mujeres, es decir que las traten como objetos y no como personas;</p>
                        <p class="ml-20 leading-6">c) Mermar la economía de las mujeres, y reducir su aportación económica al hogar;</p>
                        <p class="ml-20 leading-6">d) Forzar a las mujeres a depender de un hombre, especialmente si no perciben un salario.</p>
                        <p class="font-bold">La tasa rosa o pink tax es una forma de violencia económica en contra de las mujeres. </p>
                    </div>
                </div>
            </div>
            <!-- Item 6 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                        <?php
                        renderImage('iga4-img11.webp');
                        ?></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machointerrupción o Manterrupting</p>
                        <p>La machointerrupción, o manterrupting, es la necesidad que siente un hombre de interrumpir a una mujer cuando ella está hablando. El hombre demuestra que tiene el control y dominio de la conversación y de las explicaciones.</p>
                        <p>La diferencia entre un hombre maleducado y un acto de machointerrupción, es que el hombre maleducado interrumpe a todas las personas, y un hombre que practica la machointerrupción lo hace únicamente con las mujeres, pues escucha con atención a otros hombres.</p>
                        <p class="font-bold">Mediante las machointerrupciones los hombres imponen su voz, sus ideas, y se adueñan de la información, el conocimiento y la inteligencia. Estas interrupciones son una forma de menospreciar a las mujeres y negarles el derecho a ser escuchadas.</p>
                    </div>
                </div>
            </div>
            <!-- Item 7 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                        <?php
                        renderImage('iga4-img12.webp');
                        ?></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machoapropiación o Bropriating</p>
                        <p>La machoapropiación de ideas o bropriating ocurre cuando un hombre se atribuye la autoría de ideas originalmente propuestas por una mujer sin darle el debido crédito. Abundan los casos en la historia en que los hombres se apropiaban de la obra intelectual de mujeres, especialmente de sus esposas, porque en los siglos XVIII y XIX las mujeres no tenían derecho a publicar (Montero, 2019).</p>
                        <p>En esta forma de violencia intelectual, el hombre:</p>
                        <p class="ml-20 leading-6">a) Recibe el prestigio, fama y reconocimiento que se niega a la mujer;</p>
                        <p class="ml-20 leading-6">b) Publica obras, patenta inventos, o tiene los derechos de autor sobre la creación de una mujer, que, en ocasiones, es su esposa;</p>
                        <p class="ml-20 leading-6">c) Recibe el beneficio económico resultado del trabajo intelectual de una mujer.</p>
                        <p class="font-bold">Desafortunadamente, la machoapropiación sigue ocurriendo en la actualidad, invisibilizando las aportaciones de la mujer.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-emerald-800/30 group-hover:bg-white/50 dark:group-hover:bg-emerald-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-emerald-600/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-emerald-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Anterior</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-emerald-800/30 group-hover:bg-white/50 dark:group-hover:bg-emerald-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-emerald-600/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-emerald-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Siguiente</span>
            </span>
        </button>
    </div>








    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>El respeto a la diversidad de ideas y estilos de vida es fundamental para las relaciones humanas. Por ello, te proponemos cerrar la primera sesión con la lectura del tríptico "Un asunto de hombres: las masculinidades" elaborado por la Comisión Nacional de los Derechos Humanos. En este texto se ejemplifican algunas de las conductas y prácticas de las masculinidades dominantes que son contrarias a la equidad y la igualdad sustantiva entre las personas.
        Ten presente que la igualdad de género no implica que las personas tengan comportamientos y formas de ser idénticas. La igualdad significa poder gozar y ejercer nuestros derechos humanos y libertades fundamentales, además de tener acceso a oportunidades y recursos que nos permitan desarrollarnos plenamente, independientemente de nuestra identidad de género.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reconocer algunas propuestas para construir ambientes de respeto y armonía ante las diversas formas de ser hombre.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Lee el tríptico <a href="<?php echo PATH_DOCS . 'u1t4-lectura_UnAsuntoDeHombresLasMasculinidades.pdf'; ?>" target="_blank">"Un asunto de hombres: las masculinidades"</a> de la Comisión Nacional de los Derechos Humanos.</li>
        <li>Posteriormente, responde el cuestionario sobre la lectura.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a10', "¿Cómo se relacionan los hombres?", $ActividadContent);
    ?>
</section>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>