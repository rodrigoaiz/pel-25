<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';


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
    <?= TabsComponent([
        'tabs' => [
            [
                'id' => 'despatarre',
                'label' => 'Manspreading',
                'content' =>
                '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/iga4-img06.webp" />
                </div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machodespatarre o Manspreading</p>
                        <p>El machodespatarre o male spreading ocurre cuando un hombre sentado con las piernas bien abiertas, ocupa un espacio excesivo, especialmente en áreas públicas. Esto invade el espacio circundante, causando incomodidad y forzando a las mujeres a tomar una postura cerrada, como cruzar las piernas o sentarse de lado. Al expandir sus piernas, el hombre demuestra que tiene dominio sobre el espacio de las mujeres.</p>
                        <p>En oposición al manspreading está el shebagging que ocurre cuando las mujeres que invaden espacios contiguos con sus pertenencias, evitando que alguien se siente a su lado. En ocasiones, el shebagging es una estrategia para evitar el hostigamiento y acoso de los hombres en lugares públicos porque permite a las mujeres seleccionar quien se sienta a su lado, en caso de tener que ceder el asiento.</p>
                        <p class="font-bold">Sin embargo, el manspreading y el shebagging son actos contrarios a la civilidad y respeto hacia el espacio de otras personas.</p>
                    </div>
                </div>'
            ],
            [
                'id' => 'manipulacion',
                'label' => 'Gaslighting',
                'content' =>
                '<p class="font-bold text-emerald-800 text-lg text-center leading-6">Machomanipulación o gaslighting</p>
                <p>La machomanipulación o gaslighting es una forma de violencia emocional en la cual un hombre le hace creer a una mujer que su percepción, sus recuerdos, o su propio juicio están equivocados.</p>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                    <img class="mx-auto" src="../../assets/img/iga4-img07.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
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
                </div>'
            ],
            ['id' => 'mansplaining', 'label' => 'Mansplaining', 'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img08.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machoexplicación o mansplaining</p>
                        <p>La machoexplicación o mansplaining es la necesidad que siente un hombre de explicar un tema a una mujer. </p>
                        <p>En estas situaciones el hombre habla porque:</p>
                        <p class="ml-20 leading-6">a) no le interesa escuchar a la mujer sino ser escuchado, aunque ella sea experta en el tema;</p>
                        <p class="ml-20 leading-6">b) necesita demostrar su exceso de confianza, superioridad, o su arrogancia.</p>
                        <p class="ml-20 leading-6">c) cree que la mujer no conoce el tema o debe ser "corregida" en sus ideas.</p>
                        <p class="font-bold">Solnit (2014) explica que la machoexplicación evita que las mujeres expresen lo que piensan, las hace sentir inseguras, limita su participación en una conversación, o las obliga a mantenerse en silencio.</p>
                    </div>
                </div>'],
            ['id' => 'bombardeo', 'label' => 'Bombardeo', 'content' => '
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Bombardeo amoroso o love bombing</p>
                        <p>El bombardeo amoroso o love bombing es la necesidad que siente un hombre de hacerle creer a una mujer que está enamorado de ella para manipularla. Aunque no se conozcan bien, el hombre expresa desde el inicio de la relación que la mujer es su alma gemela, que es perfecta para él, y que tienen un futuro juntos.</p>
                        <div class="grid grid-cols-3 gap-4">
                    <div class="pt-2 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img09.webp" /></div>
                    <div class="col-span-2 text-sm leading-6"><p>El hombre crea una imagen idealizada de la mujer -sin conocerla-, que resulta en:</p>
                        <p class="ml-20 leading-6">a) recordatorios constantes de que nadie la amará igual que él, y que son la pareja perfecta.</p>
                        <p class="ml-20 leading-6">b) reclamos cuando ella no actúa de acuerdo a lo que él espera;</p>
                        <p class="ml-20 leading-6">c) presión para que ella cumpla las demandas para que él se sienta bien;</p>
                        <p class="ml-20 leading-6">d) exigencias para que ella le demuestre constantemente que lo ama;</p>
                        <p class="ml-20 leading-6">e) control de las acciones, comportamientos y relaciones de la mujer mediante los celos, la inseguridad y la devaluación.</p>
                        <p class="font-bold">El bombardeo amoroso es una violencia emocional que utilizan los hombres para lograr el afecto, admiración y reconocimiento de las mujeres, y así manipularlas para tener control sobre ellas.</p>
                    </div>
                </div>'],
            ['id' => 'impuesto', 'label' => 'Impuesto', 'content' => '
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Impuesto rosa o pink tax</p>
                        <p>El impuesto rosa o pink tax utiliza los estereotipos de género para presionar a las mujeres a consumir productos que prometen hacerlas atractivas y femeninas, a la par que se usan empaques rosas, llamativos y vistosos para subir el precio del producto; mientras que los hombres consumen menos productos a un menor precio. </p>
                        <div class="grid grid-cols-3 gap-4">
                    <div class="pt-1 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img10.webp" /></div>
                    <div class="col-span-2 text-sm leading-6"><p>Las violencias contra las mujeres que se esconden tras el impuesto rosa son:</p>
                        <p class="ml-20 leading-6">a) Generar inseguridad sobre el cuerpo femeninos con estándares de belleza imposibles de lograr, que fomentan el consumo de más productos;</p>
                        <p class="ml-20 leading-6">b) Permitir que los hombres cosifiquen a las mujeres, es decir que las traten como objetos y no como personas;</p>
                        <p class="ml-20 leading-6">c) Mermar la economía de las mujeres, y reducir su aportación económica al hogar;</p>
                        <p class="ml-20 leading-6">d) Forzar a las mujeres a depender de un hombre, especialmente si no perciben un salario.</p>
                        <p class="font-bold">La tasa rosa o pink tax es una forma de violencia económica en contra de las mujeres. </p>
                    </div>
                </div>'],
            ['id' => 'interrupting', 'label' => 'Manterrupting', 'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img11.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machointerrupción o Manterrupting</p>
                        <p>La machointerrupción, o manterrupting, es la necesidad que siente un hombre de interrumpir a una mujer cuando ella está hablando. El hombre demuestra que tiene el control y dominio de la conversación y de las explicaciones.</p>
                        <p>La diferencia entre un hombre maleducado y un acto de machointerrupción, es que el hombre maleducado interrumpe a todas las personas, y un hombre que practica la machointerrupción lo hace únicamente con las mujeres, pues escucha con atención a otros hombres.</p>
                        <p class="font-bold">Mediante las machointerrupciones los hombres imponen su voz, sus ideas, y se adueñan de la información, el conocimiento y la inteligencia. Estas interrupciones son una forma de menospreciar a las mujeres y negarles el derecho a ser escuchadas.</p>
                    </div>
                </div>'],
            ['id' => 'apropiacion', 'label' => 'Bropriating', 'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img12.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machoapropiación o Bropriating</p>
                        <p>La machoapropiación de ideas o bropriating ocurre cuando un hombre se atribuye la autoría de ideas originalmente propuestas por una mujer sin darle el debido crédito. Abundan los casos en la historia en que los hombres se apropiaban de la obra intelectual de mujeres, especialmente de sus esposas, porque en los siglos XVIII y XIX las mujeres no tenían derecho a publicar (Montero, 2019).</p>
                        <p>En esta forma de violencia intelectual, el hombre:</p>
                        <p class="ml-20 leading-6">a) Recibe el prestigio, fama y reconocimiento que se niega a la mujer;</p>
                        <p class="ml-20 leading-6">b) Publica obras, patenta inventos, o tiene los derechos de autor sobre la creación de una mujer, que, en ocasiones, es su esposa;</p>
                        <p class="ml-20 leading-6">c) Recibe el beneficio económico resultado del trabajo intelectual de una mujer.</p>
                        <p class="font-bold">Desafortunadamente, la machoapropiación sigue ocurriendo en la actualidad, invisibilizando las aportaciones de la mujer.</p>
                    </div>
                </div>'],
        ],
    ]) ?>

    <h3>Triada de la violencia</h3>
    <p>Existe una desigualdad en la forma en que los hombres se relacionan con las mujeres. Históricamente, estas desigualdades están sustentadas por la carencia de derechos. Por ejemplo, antes del Siglo XIX, las mujeres no tenían derecho a estudiar, a ejercer una profesión, a votar, o a ser propietarias de una casa o negocio. A pesar de los cambios en los derechos de las mujeres, Kaufman (1994) detectó que los hombres siguen ejerciendo relaciones de desigualdad mediante lo que él llamó <strong>la tríada de la violencia masculina.</strong></p>
    <p class="font-bold">Esta tríada se divide en la violencia que un hombre ejerce sobre sí mismo, sobre otros hombres, y sobre mujeres e infancias. En esta representación, hemos sustituido mujeres e infancias por personas vulnerables para incluir la violencia sobre diversidades sexo-genéricas.</p>
    <?= TabsComponent([
        'tabs' => [
            [
                'id' => 'simismo',
                'label' => 'Sí mismo',
                'content' =>
                '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img13.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-purple-900 text-lg text-center leading-6">Violencia sobre sí mismo</p>
                        <p>Los hombres ejercen violencia contra sí mismos cuando ponen en riesgo su integridad física y emocional. Algunas de las formas en que ocurre esta violencia son:</p>
                        <p class="ml-20 leading-none">a) Usar la violencia física o verbal ante un conflicto;
                        <p class="ml-20 leading-none">b) Actuar compulsivamente;</p>
                        <p class="ml-20 leading-none">c) Practicar deportes extremos de manera imprudente;</p>
                        <p class="ml-20 leading-none">d) Consumir sustancias nocivas (tabaco, alcohol, drogas);</p>
                        <p class="ml-20 leading-none">e) No demostrar sus sentimientos;</p>
                        <p class="ml-20 leading-none">f) No pedir ayuda cuando tienen problemas;</p>
                        <p class="ml-20 leading-none">g) No acudir al médico de manera preventiva, o cuando están enfermos;</p>
                        <p class="ml-20 leading-none">h) No cuidar de su alimentación;</p>
                        <p class="ml-20 leading-none">i) Usar sustancias para desarrollar musculatura, sin importar las consecuencias a largo plazo.</p>
                        <p class="font-bold">El resultado más grave de la violencia del hombre contra sí mismo es que las tazas de suicidio de los hombres son más altas que las de las mujeres.</p>
                    </div>
                </div>'
            ],
            [
                'id' => 'otrosHombres',
                'label' => 'Otros hombres',
                'content' =>
                '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img13.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-purple-900 text-lg text-center leading-6">Violencia contra otros hombres</p>
                        <p>Los hombres ejercen violencia contra otros hombres para demostrar su hombría y mantener su estatus, jerarquía y dominación, por ejemplo, cuando:</p>
                        <p class="ml-20 leading-none">a) Retan a otros hombres en competencias;</p>
                        <p class="ml-20 leading-none">b) Forzan a otros hombres a encajar con su idea de lo que es la hombría;</p>
                        <p class="ml-20 leading-none">c) Usan la presión de grupo para obligar a otro hombre a actuar o comportarse de cierta manera, o a consumir alguna sustancia nociva;</p>
                        <p class="ml-20 leading-none">d) Humillan o se burlan de otro hombre por comportarse o actuar de manera distinta al grupo;</p>
                        <p class="ml-20 leading-none">e) Humillan o se burlan de otro hombre por tener una condición física o intelectual considerada como débil;</p>
                        <p class="ml-20 leading-none">f) Humillan o se burlan de otro hombre por tener una situación económica, laboral o de pareja distinta o considerada inferior por el agresor;</p>
                        <p class="font-bold">Esta violencia es la forma en que los hombres se socializan entre ellos para adoptar comportamientos machistas, en ocasiones en contra de su voluntad y de manera inconsciente, lo que afecta la forma en que se relacionan con otras personas de su entorno.</p>
                    </div>
                </div>'
            ],
            ['id' => 'mujeres', 'label' => 'Mujeres', 'content' =>
            '<p class="font-bold text-purple-900 text-lg text-center leading-6">Violencia contra las mujeres</p>
                        <p>La violencia que ejercen los hombres hacia las mujeres no se reduce al ámbito familiar o sentimental, también se ejerce de manera sistemática, estructural y simbólica en los ámbitos laboral, académico, social, político, cultural, etc. Existen muchas formas en que los hombres ejercen la violencia contra las mujeres.</p>
                        <div class="grid grid-cols-3 gap-4">
            <div class="pt-2"><img class="mx-auto" src="../../assets/img/iga4-img14.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p>Algunas formas de violencia contra las mujeres son:</p>
                        <p class="ml-20 leading-none">a) Los machismos cotidianos;</p>
                        <p class="ml-20 leading-none">b) La cosificación de las mujeres, es decir, tratarlas como objetos que se pueden desear, utilizar y desechar;</p>
                        <p class="ml-20 leading-none">c) La creencia de que un no significa sí, y por lo tanto, no aceptar el rechazo de una mujer;</p>
                        <p class="ml-20 leading-none">d) El hostigamiento, acoso, o abuso sexual para intimidar a las mujeres en su vida privada o pública;</p>
                        <p class="ml-20 leading-none">e) Los piropos callejeros, los tocamientos, roces o acercamientos al cuerpo sin autorización de las mujeres;</p>
                        <p class="ml-20 leading-none">f) El consumo de la pornografía y la prostitución;</p>
                        <p class="ml-20 leading-none">g) Las acciones, comportamientos o discursos que se utilizan para dominar el cuerpo de las mujeres;</p>
                        <p class="ml-20 leading-none">h) Las acciones, comportamientos o discursos que impiden o intimidan a las mujeres para que no participen en la toma de decisiones en el ámbito familiar, escolar, laboral, económico, político, cultural, etc.;</p>
                        <p class="ml-20 leading-none">i) La violencia digital, emocional, económica, física, patrimonial, psicológica, sexual o verbal en contra de una mujer.</p>
                        
                    </div>
                </div>
                <p class="font-bold">Todas las formas de violencia contra las mujeres impiden que las mujeres ejerzan sus derechos, especialmente, el derecho a una vida libre de violencia. Estas violencias afectan el crecimiento, desarrollo, participación, productividad, la toma de decisiones, el acceso a bienes, servicios y recursos que impactan la vida familiar, social, cultural, económica y política de las mujeres (ONU Mujeres, 2002; INMUJERES, 2002).</p>'],
            ['id' => 'infancias', 'label' => 'Infancias', 'content' => '
                        <p class="font-bold text-purple-900 text-lg text-center leading-6">Violencia contra las infancias</p>
                        <p>La violencia o la amenaza de violencia que utilizan los hombres contra las infancias es un mecanismo para heredar, transmitir, e interiorizar el orden jerárquico, el dominio y los privilegios de los hombres.</p>
                        <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img15.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p>Estas conductas heredadas a las infancias incluyen:</p>
                        <p class="ml-20 leading-none">a) Establecer roles y estereotipos sobre lo que es lo femenino y lo masculino;</p>
                        <p class="ml-20 leading-none">b) Transmitir la creencia de que los hombres son más fuertes y poderosos que las demás personas;</p>
                        <p class="ml-20 leading-none">c) Transmitir la creencia de que lo femenino, lo emocional y el autocuidado se deben rechazar por ser rasgos de debilidad y vulnerabilidad;</p>
                        <p class="ml-20 leading-none">d) Poner modelos o ejemplos sobre las formas en que se demuestra la hombría;</p>
                        <p class="ml-20 leading-none">e) Inculcar la ira, la agresión, el temor y otras formas de violencia como medio para enfrentar conflictos, la frustración, o la falta de poder;</p>
                        <p class="ml-20 leading-none">f) Inculcar la inseguridad, la insatisfacción, el autocastigo, el autorrepudio, la autorepresión, y otras formas de violencia contra sí mismo,</p>
                        <p class="ml-20 leading-none">g) Reprimir sentimientos de temor, dolor, llanto, enojo, o cualquier otra forma de expresar su inconformidad;</p>
                        <p class="ml-20 leading-none">h) Inculcar la falta de empatía y solidaridad hacia los sentimientos y necesidades de otras personas.</p>
                    </div>
                </div>
                
                        <p class="font-bold">Mediante la conducta de los padres, los niños y las niñas aprenden a utilizar y a aceptar, de manera selectiva y sistemática, los comportamientos, acciones y discursos violentos hacia las infancias, las mujeres, las diversidades sexo-genéricas, y los otros hombres.</p>'],
            ['id' => 'diversidades', 'label' => 'Diversidades', 'content' => '
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img16.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-purple-900 text-lg text-center leading-6">Violencia contra las diversidades sexo-genéricas</p>
                        <p>Los hombres utilizan la homofobia, la homohisteria y la violencia contra las diversidades sexo-genéricas como un mecanismo para reafirmar su virilidad y para protegerse a sí mismos de las burlas, humillaciones y violencia de parte de otros hombres.</p>
                        <p>El rechazo, intolerancia y discriminación social hacia la homosexualidad puede orillar a que las personas de la diversidad sexo-genérica se vuelvan homofóbicos. Es decir, que odien y repriman sus preferencias, sus afectos, sus gustos, sus emociones, sus sentimientos, y su estilo de vida.</p>
                        <p>La aversión hacia la homosexualidad es una forma irracional de otorgarle un carácter de superioridad moral a la heterosexualidad, y así justificar que a las personas de las diversidades sexo-genéricas se les nieguen sus derechos humanos, un trato digno, o el acceso a recursos, bienes y servicios.</p>
                    </div>
                </div>'],
        ],
    ]) ?>

    <h3>Desafíos de la masculinidad</h3>
    <p>En esta sección te dejamos una serie de preguntas para <strong>analizar y reflexionar:</strong></p>
    <p class="ml-20 leading-6 text-pink-800 text-center">¿Crees que la violencia es natural en los hombres, o es un comportamiento que se puede cambiar?</p>
    <p class="ml-20 leading-6 text-pink-800 text-center">¿Cuáles conductas o acciones propones para contrarrestar los machismos cotidianos?</p>
    <p class="ml-20 leading-6 text-pink-800 text-center">¿Cuáles conductas o acciones propones para que los hombres dejen de ejercer violencia contra sí mismos? ¿Y contra otros hombres? ¿Y contra personas vulnerables (mujeres, infancias y diversidades sexo genéricas)</p>
    <p class="ml-20 leading-6 text-pink-800 text-center">¿De qué manera pueden contribuir los hombres para mejorar la convivencia e interacción con otros hombres, mujeres, infancias y diversidades sexo genéricas?</p>
</section>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>