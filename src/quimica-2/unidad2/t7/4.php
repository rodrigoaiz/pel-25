<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';

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
                    'label' => 'Arrastre',
                    'content' =>
                    '<div class="grid grid-cols-2 gap-4">
                    <div class="pt-8 pl-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/grIwO8qymac?si=b7TrHcYR32XzYH0U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                    <div class="pt-10 leading-6">
                        <p class="font-bold text-purple-500 text-lg text-center pb-8">Extracción por arrastre de vapor</p>
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
                    'id' => 'soxhlet',
                    'label' => 'Soxhlet',
                    'content' =>
                    '<div class="grid grid-cols-2 gap-4">
                    <div class="pt-8 pl-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/grIwO8qymac?si=b7TrHcYR32XzYH0U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                    <div class="pt-10 leading-6">
                        <p class="font-bold text-purple-500 text-lg text-center pb-8">Extracción soxhlet</p>
                        <p>Consiste en el lavado sucesivo de una mezcla sólida con un determinado disolvente, dentro
                                de los más comunes se encuentran el etanol, metanol, diclorometano y hexano. Se emplea
                                un aparato llamado <strong>soxhlet</strong>, que permite que por medio de la evaporación
                                y condensación del disolvente se genere un lavado sucesivo que va extrayendo del
                                material vegetal los componentes más solubles en él. Este proceso aumenta
                                considerablemente la cantidad de extracto obtenido debido al efecto acumulado de los
                                múltiples lavados. Consulta el siguiente video en el que se muestra la extracción
                                soxhlet del estafiate:</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'destilacion',
                    'label' => 'Destilación',
                    'content' =>
                    '<div class="grid grid-cols-2 gap-4">
                    <div class="pt-8 pl-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ywP5WymgiPY?si=uV57XGIKfc72YvWl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                    <div class="pt-10 leading-6">
                        <p class="font-bold text-purple-500 text-lg text-center pb-8">Destilación a presión reducida</p>
                        <p>En este proceso, se disminuye la presión en el sistema con la finalidad de provocar una
                                disminución del punto de ebullición del componente que se pretende destilar. Se utiliza
                                fundamentalmente cuando el punto de ebullición del compuesto a destilar es superior a la
                                temperatura de descomposición química del producto de interés. Revisa el siguiente video
                                donde se observa el funcionamiento de dicho proceso empleando un rotavapor: </p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'filtracion',
                    'label' => 'Filtración',
                    'content' =>
                    '<div class="py-8 pl-4">
                        <p class="font-bold text-indigo-500 text-lg text-center pb-8">Filtración</p>
                        <p>Es un método que permite separar sólidos no disueltos de líquidos, haciendo pasar la mezcla a través de un material poroso (filtro). En el caso de la purificación de compuestos a partir de extractos de plantas es muy común emplear una variante llamada filtración a presión reducida.</p>
                    </div>'
                ],
                [
                    'id' => 'filtracion_reducida',
                    'label' => 'Filtración a presión reducida',
                    'content' =>
                    '<div class="grid grid-cols-2 gap-4">
                    <div class="pt-8 pl-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qyBKuMpmGIc?si=IN6On19ZRjt0wIql" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                    <div class="pt-10 leading-6">
                        <p class="font-bold text-purple-500 text-lg text-center pb-8">Filtración a presión reducida</p>
                        <p>Este tipo de filtración se utiliza cuando nos interesa el sólido o cuando la filtración
                                por gravedad se ralentiza mucho, requiere de un mecanismo que logre generar un vacío
                                moderado en el interior de un recipiente, para lo que se suele conectar una bomba de
                                vacío a un embudo tipo Büchner, el cual es un embudo fabricado en cerámica, cerrado por
                                el fondo y agujereado por el centro, con la finalidad de dejar pasar el líquido que
                                queramos filtrar. El fondo del embudo se cubre con un papel de filtro, donde quedará
                                retenido el sólido.</p>
                            <p>En el siguiente video podrás observar este proceso:</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'cromatografia',
                    'label' => 'Cromatografía',
                    'content' =>
                    '<div class="grid grid-cols-2 gap-4">
                    <div class="...">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/4IyGp6tqFqA?si=6GwPB2_HAd0C0hep" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rHeH3cOm_nI?si=kuYmQ3kJraZxBJ9F" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                    <div class="pt-10 leading-6">
                    <p class="font-bold text-purple-500 text-lg text-center pb-8">Cromatografía</p>
                        <p>Es un método físico de separación en el que los componentes que se han de separar se
                                distribuyen entre dos fases, una de las cuales está en reposo (fase estacionaria),
                                mientras que la otra (fase móvil) se mueve en una dirección definida. De manera general
                                podemos dividir este proceso en dos tipos:</p>
                            <ul class="ul-disc mt-8">
                                <li><strong>Cromatografía en capa fina:</strong> la fase estacionaria se encuentra
                                    recubriendo algún soporte plano como puede ser vidrio, aluminio o papel. Dicho
                                    soporte se pone en contacto con un disolvente (fase móvil) que subirá a través de la
                                    fase estacionaria por capilaridad arrastrando consigo a los diferentes compuestos y
                                    separándolos de acuerdo a la afinidad que existe entre las moléculas orgánicas y
                                    ambas fases. Es decir aquellos componentes que sean más afines con la fase móvil, se
                                    desplazarán a la parte superior, mientras que aquellos más afines a la fase
                                    estacionaria se quedarán en la parte inferior.</li>
                                <li><strong>Cromatografía en columna:</strong> en este tipo de cromatografía la fase
                                    estacionaria se coloca dentro de una columna que puede ser de vidrio o acero
                                    inoxidable. La muestra se coloca en el extremo superior de la columna y se deja
                                    descender con la fase móvil utilizando la gravedad. El siguiente video muestra cómo
                                    se lleva a cabo este proceso:</li>
                            </ul>
                    </div>
                </div>'
                ],
            ],
        ]) ?>
    </div>
</div>

<?php ob_start(); ?>
<section>
    <p>De manera opcional, se recomienda leer el artículo "Natural no necesariamente significa seguro o mejor":</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="https://www.nccih.nih.gov/health/espanol/conozca-la-ciencia/natural-no-necesariamente-significa-seguro-o-mejor" target="_blank">Natural no necesariamente significa seguro o mejor</a></p>
    </div>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Para saber más");
?>
<style>
    .ul-disc {
        h3 {
            margin-top: 0;
        }

        li {
            margin-top: 0;
        }
    }
</style>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>