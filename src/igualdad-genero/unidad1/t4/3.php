<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lectura y análisis: Presupuestos de la masculinidad</h2>
    <div class="grid grid-cols-3 gap-4">
        <div><?php
                renderImage('iga4-img03.webp');
                ?></div>
        <div class="col-span-2">
            <p>En este apartado podrás identificar y cuestionar algunos presupuestos de la masculinidad tradicional. Pero, ¿cómo sabemos qué es la masculinidad tradicional? Si bien la respuesta es compleja, en los estudios de género se utilizan distintas herramientas teórico-metodológicas para comprender la construcción del género masculino a partir de los comportamientos generalizados de los hombres.</p>
            <p>Una de estas herramientas es la caja de la masculinidad. Esta es una metáfora que se utiliza para describir la masculinidad tradicional a partir de pilares o mandatos que definen, imponen o idealizan como deberían ser o comportarse los hombres.</p>
        </div>
    </div>
    <p>Sin embargo, hay hombres que ejercen una masculinidad en transición, porque se identifican parcialmente o han modificado algunos de esos pilares o mandatos. También existen otros hombres cuya masculinidad se considera alternativa porque tienen formas de ser y comportamientos distintos a los pilares o mandatos de la masculinidad tradicional.</p>
    <p class="font-bold text-xl text-fuchsia-900">¿Cuáles son los presupuestos de la masculinidad?</p>
    <p>Al igual que lo femenino, la masculinidad no es algo con lo que se nace, sino que lo conformamos y transformamos a partir de nuestro entorno histórico, social, político y cultural.</p>
    <p>Los estudios de género relacionados con la masculinidad se sintetizan en cuatro ejes:</p>
    <ol class="ol-number ml-32">
        <li>Identificar sus mecanismos.</li>
        <li>Comprender sus consecuencias.</li>
        <li>Descubrir masculinidades diversas, es decir, otras formas de ser hombre.</li>
        <li>Rastrear cambios en los comportamientos que eran predominantes.</li>
    </ol>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <p>Como resultado de estos estudios de género han surgido varios conceptos y modelos para describir la masculinidad. En este aprendizaje nos enfocaremos en 4 de ellos: <strong>la masculinidad hegemónica, la tradicional, la dominante y las alternativas</strong>. A continuación, describiremos cada una de ellas:</p>
        </div>
        <div><?php
                renderImage('iga4-img04.webp');
                ?></div>
    </div>
    <?php
    $accordionItems1 = [
        [
            'title' => 'Masculinidad hegemónica',
            'content' => '<p>El diccionario de la Real Academia Española (RAE) define la palabra hegemónica como “supremacía de cualquier tipo.” Es decir, que se trata de una masculinidad superior y dominante.</p>
            <p>La masculinidad hegemónica está compuesta por comportamientos ampliamente aceptados que ejercen presión sobre la forma ideal de ser hombre. Estos comportamientos posicionan, permiten y justifican que los hombres dominen a las mujeres (Connell y Messerschmidt, 2005).</p>
            <p>La masculinidad hegemónica varía en cada contexto social y cultural, por lo que no existe una sola forma de definir sus comportamientos. Por ejemplo, mientras que en México una forma de masculinidad hegemónica es el machismo, en Japón es el hombre asalariado (salary man), y en Reino Unido es la masculinidad gerencial (Connell y Messerschmidt, 2005).</p>'
        ],
        [
            'title' => 'Masculinidad tradicional',
            'content' => '<p>"La masculinidad tradicional se define en oposición a lo femenino: los hombres no lloran, no cuidan y tienen que proveer" (ONU Mujeres, s/f, p. 6).  Esto significa que un hombre debe comportarse y hacer cosas opuestas a las mujeres.</p>
            <p>La masculinidad tradicional se basa en roles y estereotipos de género rígidos, que fomentan la desigualdad y las relaciones de poder, dominio, debilidad y sumisión entre hombres, mujeres, infancias, y diversidades y disidencias sexo-genéricas. </p>
            <p>El principal mecanismo para preservar la masculinidad tradicional es ejercer presión para que los hombres ajusten su comportamiento o se desempeñen de acuerdo con las expectativas de lo que se considera viril o masculino. Por ejemplo, cuando se impide que un hombre demuestre sus sentimientos, o se exige que él sea el responsable de proteger a una mujer.</p>'
        ],
        [
            'title' => 'Masculinidad dominante',
            'content' => '<p>De acuerdo con la Comisión Nacional de los Derechos Humanos (CNDH) la masculinidad dominante "causa muchos problemas debido a que busca la subordinación de las mujeres, la violencia entre hombres y la negación de las necesidades emocionales y de autocuidado de los propios varones" (septiembre, 2022/4VG/BAPJ).</p>
            <p>Ello implica que, aquellos hombres que ejercen una masculinidad dominante recurren a la violencia -digital, emocional, económica, física, institucional, psicológica, patrimonial, sexual, verbal, entre otras- para imponer su voluntad sobre otras personas. Cabe aclarar que ser hombre no es sinónimo de ser violento.</p>
            <p>Los roles, estereotipos, creencias o expectativas que impone la masculinidad dominante pueden ser insostenibles, incluso para los propios hombres. Por ejemplo, no acudir al médico cuando se está enfermo o por un chequeo de rutina por la creencia de que un hombre debe ser fuerte.</p>'
        ],
        [
            'title' => 'Masculinidades alternativas',
            'content' => '<p>El glosario para la igualdad de INMUJERES diferencia la masculinidad de las masculinidades.</p>
            <p>La <strong>masculinidad</strong>, en singular, hace referencia a los hombres que definen su virilidad y hombría a partir de ciertas prácticas.</p>
            <p>El término <strong>masculinidades</strong>, en plural, es el proceso por el cual los hombres reflexionan sobre su identidad para liberarse de estereotipos y roles que promueven la violencia de género. A estas masculinidades también se les conoce como masculinidades alternativas. </p>
            <p>Los hombres que ejercen una masculinidad alternativa analizan y revisan su forma de ser, la educación que recibieron, sus relaciones sociales y su participación para entender de qué manera se ejerce el patriarcado. Mediante este análisis buscan modificar su comportamiento y sus relaciones, creando estrategias que se contraponen a las jerarquías, el dominio, la denigración, o el rechazo a mujeres, infancias, y diversidades y disidencias sexo-genéricas.</p>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p class="font-bold text-xl text-fuchsia-900">Presupuestos de la masculinidad</p>
    <p>Pero, ¿cómo sabemos las diferencias entre las masculinidades?</p>
    <p>En su análisis para comprender los géneros femenino y masculino, Marcela Lagarde propuso una normatividad compuesta de "códigos, leyes, mandatos y mandamientos escritos, memorizados y trasmitidos oral, ejemplar, gráfica o imaginariamente" (1996, p. 15). Esto refiere al concepto de mandatos de género que veremos a continuación.</p>
    <p class="font-bold text-xl text-fuchsia-900">Presupuestos de la masculinidad: los mandatos</p>
    <p>El concepto de mandatos de género se refiere a costumbres y tradiciones que se validan socialmente y se transmiten de generación en generación. Los mandatos de género condicionan las formas en que hombres y mujeres (deben) comportarse, actuar, interactuar y relacionarse en el ámbito de lo público y lo privado.</p>
    <p>Una herramienta teórico-metodológica para estudiar y comprender estos mandatos es la "Caja de la Masculinidad" que veremos a continuación.</p>
    <p class="font-bold">Caja de la masculinidad</p>
    <p>La caja de la masculinidad se propuso como una forma de identificar creencias sobre lo que significa ser hombre desde una masculinidad tradicional.</p>
    <ul class="ul-disc ml-10">
        <li>La metáfora es que hay hombres que están dentro, porque tienen todas o casi todas las características de la caja de la masculinidad.</li>
        <li>Hay hombres que están al borde de la caja, porque tienen algunas de las características.</li>
        <li>Y hay hombres que están fuera de la caja, porque no tienen o casi no tienen las características de la masculinidad tradicional.</li>
    </ul>
    <div class="w-xl mx-auto">
        <?php
        renderImage('iga4-img05.webp');
        ?>
    </div>
    <p>Originalmente, la caja de la masculinidad se propuso con <strong>7 pilares (o mandatos)</strong>, que son: autosuficiencia, ser fuerte, agresión y control, atractivo físico, heterosexualidad y homofobia, roles masculinos rígidos e hipersexualidad.</p>
    <p>Sin embargo, en los estudios de género se pueden incluir o proponer otros mandatos dependiendo de la cultura, la edad, el grupo social, entre otras variables de la población que será estudiada. Los resultados estadísticos de estos estudios permiten identificar los mandatos que predominan, y así interpretar los porcentajes de la población que están dentro, al borde, o fuera de la caja de la masculinidad. Es decir, lo que define a la masculinidad hegemónica de ese grupo.</p>
    <p>A continuación, se presentan algunos mandatos de la masculinidad. Los mandatos que aparecen en color <span class="font-bold text-fuchsia-900">violeta</span> se retoman en la caja de la masculinidad.</p>
    <p class="font-bold text-center text-fuchsia-900 mt-4">Mandatos de la masculinidad</p>
    <div class="grid grid-cols-3 gap-2">
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Agresión y control</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Conductas temerarias y violentas</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Roles masculinos rígidos</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ambición de poder</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Evitar el autocuidado</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser fuerte</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Atractivo físico</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Heterosexualidad obligatoria y homofobia</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser importante</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Autosuficiencia</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Hipersexualidad</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser procreador</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Censurar a los grupos subordinados</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Inteligencia racional</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser protector</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Comportamiento y rendimiento diferenciado</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Restricción emocional</div>
        <div class="bg-emerald-200 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser proveedor</div>
    </div>
    <p>Para que reflexiones sobre este tema, te invitamos a realizar la siguiente actividad.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar los distintos tipos de masculinidad (tradicional, en transición, o alternativa) con base en el análisis de frases que representan la postura de distintos hombres ante algunos de los mandatos de la masculinidad.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Trabajen en equipos de 4 ó 5 estudiantes.</li>
        <li>Analicen la frase asignada por su docente en equipos para identificar lo siguiente:
            <ul class="ul-disc ml-10">
                <li class="leading-6">¿A cuál masculinidad corresponde la frase? ¿A una masculinidad tradicional (dentro de la caja), una masculinidad en transición (al borde de la caja), o una masculinidad alternativa (fuera de la caja)?</li>
                <li class="leading-6">¿A cuál pilar o mandato de la masculinidad corresponde?</li>
            </ul>
        </li>
        <li>Anoten en un documento colaborativo los resultados de su análisis.</li>
        <li>Cuando terminen, un integrante del equipo entregará el archivo. Nombren el archivo con su grupo, número de equipo y la palabra Masculinidad. Ejemplo, <em>Grupo201Equipo1Masculinidad.doc</em></li>
    </ol>
    <div class="grid grid-cols-3 gap-6">
        <div>
            <div class="bg-emerald-200 rounded-lg p-1 text-gray-600 text-center font-bold">Frase 1</div>
            <?php
            renderImage('iga4-frase1.webp');
            ?>

        </div>
        <div>
            <div class="bg-emerald-200 rounded-lg p-1 text-gray-600 text-center font-bold">Frase 2</div><?php
                                                                                                        renderImage('iga4-frase2.webp');
                                                                                                        ?>
        </div>
        <div>
            <div class="bg-emerald-200 rounded-lg p-1 text-gray-600 text-center font-bold">Frase 3</div><?php
                                                                                                        renderImage('iga4-frase3.webp');
                                                                                                        ?>
        </div>
        <div>
            <div class="bg-emerald-200 rounded-lg p-1 text-gray-600 text-center font-bold">Frase 4</div><?php
                                                                                                        renderImage('iga4-frase4.webp');
                                                                                                        ?>
        </div>
        <div>
            <div class="bg-emerald-200 rounded-lg p-1 text-gray-600 text-center font-bold">Frase 5</div><?php
                                                                                                        renderImage('iga4-frase5.webp');
                                                                                                        ?>
        </div>
        <div>
            <div class="bg-emerald-200 rounded-lg p-1 text-gray-600 text-center font-bold">Frase 6</div><?php
                                                                                                        renderImage('iga4-frase6.webp');
                                                                                                        ?>
        </div>
    </div>
    <div class="w-2/3 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA:</span>
        <ul>
            <li class="text-white">Revisa la <a class="text-white" href="<?php echo PATH_DOCS . 'u1t4-listaDeCotejoAnalisisDeFrases.pdf'; ?>" target="_blank">lista de cotejo</a> con los criterios de evaluación diagnóstica.</li>
        </ul>
    </div>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a2', "Mandatos de la masculinidad.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>