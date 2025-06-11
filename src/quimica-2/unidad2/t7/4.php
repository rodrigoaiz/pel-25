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
    <h3>Obtención de principios activos a partir de productos naturales</h3>
    <p>Una de las primeras fuentes de las que se extraen los fármacos son los productos naturales (ya sean
                organismos o minerales). Generalmente, su estudio surge a raíz de alguna observación de la medicina
                popular sobre las plantas medicinales. Algunos ejemplos de fármacos de origen natural son:</p>
            <ul class="list-disc">
                <li><strong>Origen vegetal:</strong> taxol empleado para el tratamiento del cáncer y la morfina usada
                    como analgésico.</li>
                <li><strong>Origen animal:</strong> insulina para el tratamiento de la diabetes.</li>
                <li><strong>Aislado de microorganismos:</strong> penicilina, usada como antibiótico.</li>
                <li><strong>Origen mineral:</strong> yodo, sales de calcio, sales de magnesio. </li>
            </ul>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t7_taxol_morfina.webp', 'Imagen que muestra la estructura de dos fármacos naturales, así como la planta de la cual se aísla.');
        ?>
    </div>
    <p>Recordemos que en las plantas existe un gran número de moléculas orgánicas llamadas metabolitos
                secundarios. Dichas moléculas se encuentran presentes como mezclas complejas, por lo que es
                indispensable su separación y purificación. A continuación se muestran algunos de los métodos de
                extracción y purificación más empleados:</p>

</section>
<div class="grid grid-cols-6 gap-4">
    <div class="col-span-4 col-start-2">
        <?= TabsComponent([
            'tabs' => [
                [
                    'id' => 'arrastre',
                    'label' => 'Alcoholes',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_metano_metanol.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Extracción por arrastre de vapor</p>
                        <p>La destilación por arrastre de vapor es una técnica de destilación que permite la
                                separación de sustancias insolubles en H2O y ligeramente volátiles de otros productos no
                                volátiles.</p>
                            <p>Consiste en hacer fluir vapor de agua a través del material vegetal, provocando que los
                                compuestos volátiles (con bajo punto de ebullición) se separen del material vegetal en
                                forma de vapor. Posteriormente, el vapor se condensa con ayuda de un refrigerante,
                                obteniéndose así los compuestos de interés. En el siguiente video se muestra el proceso
                                de destilación por arrastre de vapor en la obtención de <em>cinamaldehído</em> a partir
                                de la Canela (ver hasta el minuto 3:18).</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'carbonilo',
                    'label' => 'Carbonilo',
                    'content' =>
                    '<div class="pt-8 pl-4">
                    <p class="font-bold text-emerald-500 text-lg text-center pb-8">Grupo Carbonilo</p>
                <p>El grupo carbonilo es un grupo funcional orgánico que consiste en un átomo de carbono y un átomo de oxígeno unidos por un doble enlace. Los compuestos que contienen el grupo carbonilo se llaman compuestos carbonílicos. Los <strong>aldehídos</strong> y las <strong>cetonas</strong> son los tipos más simples de compuestos que contienen el grupo carbonilo. En los aldehídos, el grupo carbonilo se une a un átomo de hidrógeno y a un radical alquilo, con excepción del formaldehído o metanal. En las cetonas, el grupo carbonilo se une a dos radicales alquilo o arilo.</p>
                    </div>'
                ],
                [
                    'id' => 'aldehidos',
                    'label' => 'Aldehídos',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
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
                [
                    'id' => 'cetonas',
                    'label' => 'Cetonas',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_cetona.webp" />
                </div>
                    <div class="col-span-2 pt-10 leading-6">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Cetonas</p>
                        <p>Poseen el grupo carbonilo unido a otros dos átomos de carbono de una cadena y responden a la fórmula tipo: <span class="font-serif">R-CO-R</span>. La cetona más típica es la propanona o acetona de fórmula <span class="font-serif">CH<sub>3</sub>-CO-CH<sub>3</sub></span>.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'carboxilo',
                    'label' => 'Carboxilo',
                    'content' =>
                    '<div class="pt-10 pl-4">
                    <p class="font-bold text-emerald-500 text-lg text-center pb-8">Grupo Carboxilo</p>
                <p>El grupo carboxilo <span class="font-serif">-COOH</span>, está formado por la unión (en el mismo átomo de carbono) del grupo carbonilo y el grupo hidroxilo <span class="font-serif">-OH</span>.</p>
                    </div>'
                ],
                [
                    'id' => 'acidos',
                    'label' => 'Carboxílicos',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-16 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_acido_propanoico.webp" />
                </div>
                    <div class="col-span-2 pt-2 leading-6">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Ácidos carboxílicos</p>
                        <p>El grupo carboxilo tiene un marcado carácter ácido, por lo que cuando se une a un radical forman los ácidos carboxílicos. Ejemplos de este tipo de compuestos son el ácido metanoico <span class="font-serif">HCOOH</span>, el ácido etanoico o acético <span class="font-serif">CH<sub>3</sub>-COOH</span> y el ácido propanóico <span class="font-serif">CH<sub>3</sub>-CH2-COOH</span></p>
                        <p class="pt-6">Las propiedades de un ácido orgánico se deben a la presencia en una molécula del grupo funcional llamado ácido carboxílico que comúnmente se escribe como <span class="font-serif">-COOH</span>. En disolución acuosa se libera el hidrógeno como ión <span class="font-serif">H+</span>. Entonces podemos representar un ácido orgánico con la fórmula general <span class="font-serif">RCOOH</span>. En el ácido acético (el ácido presente en el vinagre),<span class="font-serif">R</span> es <span class="font-serif">-CH<sub>3</sub></span> un grupo metil, por lo que su fórmula es <span class="font-serif">CH<sub>3</sub>-COOH</span>.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'esteres',
                    'label' => 'Ésteres',
                    'content' =>
                    '<div class="pt-16 pl-4">
                    <p class="font-bold text-emerald-500 text-lg text-center pb-8">Ésteres</p>
                <p>Son sales de los ácidos carboxílicos que resultan de la combinación de un ácido carboxílico con un alcohol.</p>
                <img class="mx-auto mt-8" src="../../assets/img/u2t2_img_esteres.webp" />
                    </div>'
                ],
                [
                    'id' => 'eteres',
                    'label' => 'Éteres',
                    'content' =>
                    '<div class="pt-10 pl-4">
                    <p class="font-bold text-emerald-500 text-lg text-center pb-8">Éteres</p>
                <p>Se obtienen por combinación de dos moléculas de alcohol y con formación de una molécula de agua como subproducto. El agua se origina por la unión del (<span class="font-serif">OH</span>) de un alcohol con el átomo de hidrógeno del (<span class="font-serif">OH</span>) del otro alcohol.</p>
                <p class="pt-6">Podemos encontrar dos tipos de éteres: simples como éter-etil-etílico (<span class="font-serif">CH<sub>3</sub>CH<sub>2</sub>-O-CH<sub>2</sub>CH<sub>3</sub></span>) o mixto como éter-etil-propílico (<span class="font-serif">CH<sub>3</sub>CH<sub>2</sub>-O-CH<sub>2</sub>CH<sub>2</sub>CH<sub>3</sub></span>)</p>
                <img class="mx-auto mt-8" src="../../assets/img/u2t2_img_reaccion_eter.webp" />
                    </div>'
                ],
                [
                    'id' => 'aminas',
                    'label' => 'Aminas',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_etilmetilamina.webp" />
                </div>
                    <div class="col-span-2 pt-4 leading-6">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Aminas (grupo amino)</p>
                        <p>Son compuestos orgánicos que contienen nitrógeno. Se pueden considerar como derivados del amoníaco <span class="font-serif">NH3</span> en donde se sustituye uno, dos o los tres átomos de hidrógeno por una cadena de hidrocarburo. La metilamina <span class="font-serif">CH<sub>3</sub>-NH<sub>2</sub></span> o la etilmetilamina <span class="font-serif">CH<sub>3</sub>-CH<sub>2</sub>-NH-CH<sub>3</sub></span> son ejemplos de este tipo de compuestos.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'amidas',
                    'label' => 'Amidas',
                    'content' => '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_urea.webp" />
                </div>
                    <div class="col-span-2 pt-10 leading-6">
                        <p class="font-bold text-emerald-500 text-lg text-center pb-8">Amidas</p>
                        <p>Se considera que derivan de la sustitución de un grupo hidroxilo (<span class="font-serif">-OH</span>) de un ácido carboxílico por el grupo (<span class="font-serif">-NH<sub>2</sub></span>), por tanto responde a la fórmula <span class="font-serif">R-CO-NH<sub>2</sub></span>. Una amida muy importante es la diamida (dos grupos de <span class="font-serif">-NH<sub>2</sub></span>) del ácido carbónico (<span class="font-serif">H<sub>2</sub>CO<sub>3</sub></span>). Se le conoce como urea y se encuentra en la orina de los mamíferos.</p>
                    </div>
                </div>'
                ],
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