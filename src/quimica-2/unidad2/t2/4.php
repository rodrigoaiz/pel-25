<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Tabs.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Grupos Funcionales</h3>
    <p>El carbono además de formar compuestos alifáticos y aromáticos, también puede unirse a otros grupos de átomos como el oxígeno, nitrógeno, azufre o fósforo para formar cientos de miles de compuestos. A la unión de átomos como en N, O, o S en las cadenas hidrocarbonadas se les conoce como <strong>grupos funcionales</strong>, los cuales determinan muchas de las propiedades de los compuestos, como pueden ser su estructura, solubilidad y reactividad.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t2_img_molecula_organica.webp', 'Molécula orgánica que muestra distintos grupos funcionales marcados en color. Imagen de WikimedialImages, Pixabay');
        ?>
    </div>
    <p>A continuación, se muestran algunos de los grupos funcionales más importantes en moléculas biológicas.</p>
</section>
<div class="grid grid-cols-6 gap-4">
    <div class="col-span-4 col-start-2">
        <?= TabsComponent([
            'tabs' => [
                [
                    'id' => 'alcoholes',
                    'label' => 'Alcoholes',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_metano_metanol.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Alcoholes</p>
                        <p>Los alcoholes resultan de sustituir uno o varios hidrógenos de los hidrocarburos no aromáticos por el grupo funcional hidroxilo u se representan mediante <span class="font-serif">R-OH</span>. El siguiente diagrama ilustra la relación del alcano más simple, el metano, con el alcohol más simple, el metanol.</p>
                        <p class="pt-6">Un alcohol se puede representar como <span class="font-serif">ROH</span>, entonces el alcohol metílico (alcohol de madera) se representa <span class="font-serif">CH<sub>3</sub>OH</span>, y el alcohol etílico o etanol (de grano) se representa como <span class="font-serif">CH<sub>3</sub>CH<sub>2</sub>OH</span>. La presencia del grupo <span class="font-serif">–OH</span> (hidroxilo) hace del compuesto un alcohol.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'carbonilo',
                    'label' => 'Carbonilo',
                    'content' =>
                    '<p class="font-bold text-emerald-500 text-lg text-center pb-8">Grupo Carbonilo</p>
                <p>El grupo carbonilo es un grupo funcional orgánico que consiste en un átomo de carbono y un átomo de oxígeno unidos por un doble enlace. Los compuestos que contienen el grupo carbonilo se llaman compuestos carbonílicos. Los <strong>aldehídos</strong> y las <strong>cetonas</strong> son los tipos más simples de compuestos que contienen el grupo carbonilo. En los aldehídos, el grupo carbonilo se une a un átomo de hidrógeno y a un radical alquilo, con excepción del formaldehído o metanal. En las cetonas, el grupo carbonilo se une a dos radicales alquilo o arilo.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'aldehidos',
                    'label' => 'Aldehídos',
                    'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_aldehido.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Aldehídos</p>
                        <p>En el caso de que se forme un doble enlace entre un átomo de carbono y el oxígeno denominado grupo carbonilo, puede aparecer en los siguientes tipos de compuestos:</p>
                        <p class="pt-6">Son aldehídos: el metanal o formaldehído <span class="font-serif">(HCHO)</span> y el etanal o acetaldehído (<span class="font-serif">CH<sub>3</sub>-CHO</span>).</p>
                    </div>
                </div>'
                ],
                ['id' => 'cetonas', 'label' => 'Cetonas', 'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_cetona.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Cetonas</p>
                        <p>Poseen el grupo carbonilo unido a otros dos átomos de carbono de una cadena y responden a la fórmula tipo: <span class="font-serif">R-CO-R</span>. La cetona más típica es la propanona o acetona de fórmula <span class="font-serif">CH<sub>3</sub>-CO-CH<sub>3</sub></span>.</p>
                    </div>
                </div>'],
                ['id' => 'carboxilo', 'label' => 'Carboxilo', 'content' => '
                        <p class="font-bold text-emerald-800 text-lg text-center pb-8">Impuesto rosa o pink tax</p>
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
                ['id' => 'acidos', 'label' => 'Carboxílicos', 'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img11.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center pb-8">Machointerrupción o Manterrupting</p>
                        <p>La machointerrupción, o manterrupting, es la necesidad que siente un hombre de interrumpir a una mujer cuando ella está hablando. El hombre demuestra que tiene el control y dominio de la conversación y de las explicaciones.</p>
                        <p>La diferencia entre un hombre maleducado y un acto de machointerrupción, es que el hombre maleducado interrumpe a todas las personas, y un hombre que practica la machointerrupción lo hace únicamente con las mujeres, pues escucha con atención a otros hombres.</p>
                        <p class="font-bold">Mediante las machointerrupciones los hombres imponen su voz, sus ideas, y se adueñan de la información, el conocimiento y la inteligencia. Estas interrupciones son una forma de menospreciar a las mujeres y negarles el derecho a ser escuchadas.</p>
                    </div>
                </div>'],
                ['id' => 'esteres', 'label' => 'Ésteres', 'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img12.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center pb-8">Machoapropiación o Bropriating</p>
                        <p>La machoapropiación de ideas o bropriating ocurre cuando un hombre se atribuye la autoría de ideas originalmente propuestas por una mujer sin darle el debido crédito. Abundan los casos en la historia en que los hombres se apropiaban de la obra intelectual de mujeres, especialmente de sus esposas, porque en los siglos XVIII y XIX las mujeres no tenían derecho a publicar (Montero, 2019).</p>
                        <p>En esta forma de violencia intelectual, el hombre:</p>
                        <p class="ml-20 leading-6">a) Recibe el prestigio, fama y reconocimiento que se niega a la mujer;</p>
                        <p class="ml-20 leading-6">b) Publica obras, patenta inventos, o tiene los derechos de autor sobre la creación de una mujer, que, en ocasiones, es su esposa;</p>
                        <p class="ml-20 leading-6">c) Recibe el beneficio económico resultado del trabajo intelectual de una mujer.</p>
                        <p class="font-bold">Desafortunadamente, la machoapropiación sigue ocurriendo en la actualidad, invisibilizando las aportaciones de la mujer.</p>
                    </div>
                </div>'],
                ['id' => 'eteres', 'label' => 'Éteres', 'content' => '<div class="grid grid-cols-3 gap-4">
                        <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img12.webp" /></div>
                        <div class="col-span-2 text-sm leading-6">
                            <p class="font-bold text-emerald-800 text-lg text-center pb-8">Machoapropiación o Bropriating</p>
                            <p>La machoapropiación de ideas o bropriating ocurre cuando un hombre se atribuye la autoría de ideas originalmente propuestas por una mujer sin darle el debido crédito. Abundan los casos en la historia en que los hombres se apropiaban de la obra intelectual de mujeres, especialmente de sus esposas, porque en los siglos XVIII y XIX las mujeres no tenían derecho a publicar (Montero, 2019).</p>
                            <p>En esta forma de violencia intelectual, el hombre:</p>
                            <p class="ml-20 leading-6">a) Recibe el prestigio, fama y reconocimiento que se niega a la mujer;</p>
                            <p class="ml-20 leading-6">b) Publica obras, patenta inventos, o tiene los derechos de autor sobre la creación de una mujer, que, en ocasiones, es su esposa;</p>
                            <p class="ml-20 leading-6">c) Recibe el beneficio económico resultado del trabajo intelectual de una mujer.</p>
                            <p class="font-bold">Desafortunadamente, la machoapropiación sigue ocurriendo en la actualidad, invisibilizando las aportaciones de la mujer.</p>
                        </div>
                    </div>'],
                ['id' => 'aminas', 'label' => 'Aminas', 'content' => '<div class="grid grid-cols-3 gap-4">
                            <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img12.webp" /></div>
                            <div class="col-span-2 text-sm leading-6">
                                <p class="font-bold text-emerald-800 text-lg text-center pb-8">Machoapropiación o Bropriating</p>
                                <p>La machoapropiación de ideas o bropriating ocurre cuando un hombre se atribuye la autoría de ideas originalmente propuestas por una mujer sin darle el debido crédito. Abundan los casos en la historia en que los hombres se apropiaban de la obra intelectual de mujeres, especialmente de sus esposas, porque en los siglos XVIII y XIX las mujeres no tenían derecho a publicar (Montero, 2019).</p>
                                <p>En esta forma de violencia intelectual, el hombre:</p>
                                <p class="ml-20 leading-6">a) Recibe el prestigio, fama y reconocimiento que se niega a la mujer;</p>
                                <p class="ml-20 leading-6">b) Publica obras, patenta inventos, o tiene los derechos de autor sobre la creación de una mujer, que, en ocasiones, es su esposa;</p>
                                <p class="ml-20 leading-6">c) Recibe el beneficio económico resultado del trabajo intelectual de una mujer.</p>
                                <p class="font-bold">Desafortunadamente, la machoapropiación sigue ocurriendo en la actualidad, invisibilizando las aportaciones de la mujer.</p>
                            </div>
                        </div>'],
                ['id' => 'amidas', 'label' => 'Amidas', 'content' => '<div class="grid grid-cols-3 gap-4">
                                <div class="pt-8 pl-4"><img class="mx-auto" src="../../assets/img/iga4-img12.webp" /></div>
                                <div class="col-span-2 text-sm leading-6">
                                    <p class="font-bold text-emerald-800 text-lg text-center pb-8">Machoapropiación o Bropriating</p>
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
    </div>
</div>

<section>
    <p>Ahora que ya viste los conceptos fundamentales de los grupos funcionales, revisa el siguiente material:</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="http://objetos.unam.mx/quimica/compuestosDelCarbono/grupos-funcionales/index.html" target="_blank">Grupos funcionales</a></p>
    </div>
    <?php ob_start(); ?>
    <p>Ahora que ya has revisado las estructuras de los grupos funcionales más comunes, anímate a resolver el siguiente memorama.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a12', "Memorama Grupos Funcionales", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>