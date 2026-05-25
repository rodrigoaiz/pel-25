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
    <h2>¿Cómo se relacionan los hombres?</h2>
    <p>En el aprendizaje 3 revisaste el concepto de poder. La masculinidad tradicional promueve relaciones de poder desiguales, basadas en el dominio de los hombres y la sumisión de las mujeres.</p>
    <p>En la siguiente lectura conocerás dos formas en que explican estas relaciones de dominio: los machismos cotidianos y la triada de la violencia. Ambas establecen relaciones tóxicas y negativas, por lo que te invitamos a tener presente que el propósito de este tema es aprender a identificarlas como un primer paso para modificar esos comportamientos, y de poner límites a quienes se relacionan con estos comportamientos.</p>
    <p>El ejercicio de cierre de estos los aprendizajes 3 y 4 te invita a reflexionar sobre otras formas en que podemos relacionarnos, de manera que se favorezca el desarrollo de las personas de manera equitativa.</p>
    <p><strong>Propósito</strong></p>
    <p>Fomentar el pensamiento crítico para elaborar propuestas de solución mediante la identificación, análisis y cuestionamiento de los presupuestos de la masculinidad y las relaciones de poder. </p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Lee atentamente el texto "Formas en que se relacionan los hombres" y toma nota en tu cuaderno de trabajo de la asignatura.</li>
        <li>Al final de la lectura encontrarás 4 casos con diferentes situaciones cotidianas que requieren una solución. Lee detenidamente los casos para elegir uno. Además, encontrarás un modelo de análisis y propuesta de solución de caso para ejemplificar el trabajo que debes realizar.</li>
        <li>En un documento describe de manera precisa los siguientes puntos a partir del caso elegido:
            <ul class="list-disc ml-8 mt-2">
                <li>la masculinidad ejercida (tradicional, hegemónica, alternativa)</li>
                <li>los pilares o mandatos de la caja de la masculinidad</li>
                <li>las formas de relacionarse (machismos cotidianos, triada de la violencia)</li>
                <li>el tipo de relación de poder</li>
                <li>persona contra quien se ejerce la violencia (hombre contra sí mismo, contra otros hombres, o contra personas vulnerables (mujeres, infancias y diversidades sexo-genéricas).</li>
            </ul>
        </li>
        <li>Después, elabora una propuesta de solución detallada y fundamentada que dé cuenta de alternativas de comportamiento para mejorar la situación planteada, acciones preventivas a futuro, e instancias de la UNAM o el gobierno ante las cuales se podría denunciar la violencia de género.</li>
        <li>Revisa el <a href="<?php echo PATH_DOCS . 'u1t4-casos-masculinidades.pdf'; ?>" target="_blank">caso de ejemplo, el modelo de respuesta</a> y la <a href="<?php echo PATH_DOCS . 'u1t4-rubrica_masculinidades.pdf'; ?>" target="_blank">rúbrica</a> para asegurarte que tu trabajo cumple satisfactoriamente con los criterios de evaluación.</li>
        <li>Entrega en la plataforma de Moodle tu descripción y propuesta de solución en un documento títulado <strong>Apellido_Nombre_Resolucióndecasos</strong></li>
    </ol>
</section>
<div class="w-2/3 mt-6 p-10 mx-auto bg-indigo-100">
    <div class="max-w-screen-lg mx-auto py-5 px-5 md:px-2">
        <p class="uppercase font-bold text-xs tracking-widest text-fuchsia-900 mb-1">Lectura</p>
        <h3 class="font-bold border-b-2 border-dashed border-fuchsia-900 pb-2 mb-4">Formas en que se relacionan los hombres</h3>
        <p class="font-bold mt-8 text-fuchsia-900">Machismos cotidianos</p>
        <p>Aunque muchos hombres consideran que no son machistas porque no ejercen la violencia física o verbal, existen otras prácticas, comportamientos y discursos que utilizan – de manera consciente o inconsciente – para tratar a las mujeres como seres inferiores, incapaces de ser autónomas e independientes.</p>
        <p>Como ya viste en el aprendizaje 3, Bonino (2008) utilizó el término <strong>micromachismos</strong> para referirse a esas prácticas, comportamientos y discursos. Sin embargo, este término ha sido criticado porque no se trata acciones pequeñas, ya que son un abuso de poder o una forma de imponer el dominio de los hombres sobre las mujeres. Claudia De la Garza y Eréndira Derbez (2021) las renombran como <strong>machismos cotidianos debido a que ocurren de manera sistemática, sutil, reiterada, constante y persistente</strong>.</p>
        <p class="mb-8">A continuación, te mostramos algunos machismos cotidianos:</p>
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

        <p class="font-bold mt-8 text-fuchsia-900">Triada de la violencia</p>
        <p>Existe una desigualdad en la forma en que los hombres se relacionan con las mujeres. Históricamente, estas desigualdades están sustentadas por la carencia de derechos. Por ejemplo, antes del Siglo XIX, las mujeres no tenían derecho a estudiar, a ejercer una profesión, a votar, o a ser propietarias de una casa o negocio. A pesar de los cambios en los derechos de las mujeres, Kaufman (1994) detectó que los hombres siguen ejerciendo relaciones de desigualdad mediante lo que él llamó la tríada de la violencia masculina.</p>
        <p class="mb-8">Esta tríada se divide en la violencia que un hombre ejerce sobre sí mismo, sobre otros hombres, y sobre mujeres e infancias. En esta representación, hemos sustituido mujeres e infancias por personas vulnerables para incluir la violencia sobre diversidades sexo-genéricas.</p>
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
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img13b.webp" /></div>
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

    </div>
</div>
<section>
    <h3>Casos</h3>
    <p>Lee detenidamente los siguientes casos y elige uno para realizar tu análisis y propuesta de solución.</p>

    <div class="w-2/3 mx-auto mt-6 space-y-6">

        <div class="border border-fuchsia-300 rounded-lg p-6 bg-fuchsia-50">
            <p class="font-bold text-fuchsia-900 text-lg mb-2">Caso 1</p>
            <p>En el aula de la Escuela Secundaria Aurora, se desarrolla una animada discusión sobre el cambio climático. Sofía, una estudiante comprometida con el tema, intenta exponer su punto de vista y compartir sus ideas sobre posibles soluciones. Sin embargo, cada vez que intenta hablar, es interrumpida repetidamente por Carlos Sánchez, su profesor de biología, quien no le permite terminar sus frases y continúa hablando por encima de ella. A pesar de los esfuerzos de Sofía por hacerse escuchar, Carlos sigue ignorando sus intervenciones y continúa monopolizando la conversación. Esta situación frustra a Sofía y la hace sentir invisibilizada y menospreciada en el aula. Aunque tiene ideas valiosas para contribuir al debate, se ve impedida de expresarse completamente debido a la constante interrupción de su profesor. Este ejemplo ilustra claramente el machismo cotidiano donde un hombre interrumpe repetidamente a una mujer durante una conversación o discusión, impidiéndole expresar sus ideas y opiniones de manera efectiva. Sofía se enfrenta al desafío de encontrar una manera de hacer valer su voz y participar plenamente en el intercambio de ideas en el aula.</p>
        </div>

        <div class="border border-fuchsia-300 rounded-lg p-6 bg-fuchsia-50">
            <p class="font-bold text-fuchsia-900 text-lg mb-2">Caso 2</p>
            <p>Después de varias citas prometedoras, Lalo comienza a notar un cambio en el comportamiento de Miguel, el chico con el que ha estado saliendo. De repente, Miguel deja de responder a sus mensajes de texto y llamadas, sin dar ninguna explicación. Lalo se siente confundido y ansioso, sin entender qué pasó para que Miguel desapareciera de repente de su vida. A pesar de sus intentos por comunicarse con él, Miguel sigue ignorando sus mensajes, dejando a Lalo en un estado de desconcierto y preocupación. Se pregunta qué hizo mal o qué pudo haber pasado para que Miguel decidiera desaparecer de esa manera sin ninguna explicación. Este ejemplo ilustra un fenómeno donde una persona termina abruptamente toda comunicación con otra sin explicación ni aviso previo. Lalo se enfrenta a la angustia y la incertidumbre de no saber qué pasó y por qué Miguel decidió cortar todo contacto de repente, dejándolo en un estado emocional vulnerable y confuso.</p>
        </div>

        <div class="border border-fuchsia-300 rounded-lg p-6 bg-fuchsia-50">
            <p class="font-bold text-fuchsia-900 text-lg mb-2">Caso 3</p>
            <p>Fernanda y sus amigas asisten a una fiesta organizada por compañeros de su escuela. Durante la reunión, Diego se acerca a Fernanda y le confiesa que desde hace tiempo siente algo muy fuerte por ella y que siempre le ha parecido especial. Fernanda se siente sorprendida y halagada por la forma en que Diego se expresa.</p>
            <p>A partir de ese momento, Diego comienza a escribirle constantemente. Durante todo el fin de semana le envía mensajes cariñosos, le hace halagos frecuentes, le dice que no puede dejar de pensar en ella y le propone varios planes para verse lo antes posible. Fernanda empieza a sentir que la conexión entre ambos es intensa y rápida, aunque apenas se conocen. Sin embargo, Diego no está interesado en construir una relación afectiva ni en conocer realmente a Fernanda. Su comportamiento y actitudes afectuosas tienen el objetivo de ganarse la confianza de Fernanda y crear cercanía emocional y una sensación de compromiso para convencerla de tener relaciones sexuales. Una vez que Diego logra su objetivo comienza a mostrarse distante y deja de comunicarse con la misma frecuencia, lo cual le provoca molestia, incomodidad y confusión a Fernanda. Esta situación ejemplifica un comportamiento en el cual una persona utiliza demostraciones excesivas de afecto, atención y promesas tempranas de amor para manipular emocionalmente a otra persona con fines personales, sin tener un interés genuino en una relación recíproca y respetuosa.</p>
        </div>

        <div class="border border-fuchsia-300 rounded-lg p-6 bg-fuchsia-50">
            <p class="font-bold text-fuchsia-900 text-lg mb-2">Caso 4</p>
            <p>Andrea y Luis tienen la misma edad, estudian en la misma escuela y cuentan con un ingreso mensual similar proveniente de apoyos familiares y de su beca escolar. Ambos deciden incorporar una rutina básica de cuidado de la piel. Luis compra un limpiador facial, una crema hidratante y un protector solar que se encuentran en la sección de productos para hombres. Los envases son sencillos, los productos se anuncian como prácticos y funcionales, y sus precios son accesibles. En total, Luis gasta una cantidad moderada que se mantiene estable durante varios meses, ya que los productos están diseñados para durar y no se le sugiere ampliar la rutina.</p>
            <p>Andrea, por su parte, adquiere productos equivalentes en la sección dirigida a mujeres. Además del limpiador, la crema hidratante y el protector solar, los anuncios y recomendaciones le sugieren agregar tónico, suero, contorno de ojos y mascarillas imprescindibles para mantener una piel saludable y atractiva. Estos productos, aunque cumplen funciones similares, tienen precios más altos y envases más pequeños. Como resultado, Andrea gasta una cantidad significativamente mayor y debe reponer los productos con más frecuencia.</p>
            <p>Al comparar sus gastos mensuales, Andrea se da cuenta de que destina una parte más grande de su ingreso al cuidado personal que Luis, a pesar de que ambos buscan el mismo objetivo: mantener su piel sana y protegida. Esta diferencia impacta directamente en su capacidad de ahorro y en la distribución de su presupuesto. Este tipo de situación hace uso de los estereotipos de género para presionar a las mujeres a consumir productos que prometen hacerlas atractivas y femeninas, a la par que se usan empaques rosas, llamativos y vistosos para subir el precio del producto; mientras que los hombres consumen menos productos a un menor precio.</p>
        </div>

    </div>
</section>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>