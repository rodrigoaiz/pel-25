<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Isómeros</h3>
    <p>El carbono es capaz de producir una gran variedad de compuestos, cuyas propiedades físicas y químicas están directamente relacionadas con su geometría molecular. Sin embargo, en algunas ocasiones nos podemos encontrar dos o más compuestos con la misma cantidad de átomos (fórmula condensada), pero con diferente acomodo; estas moléculas son llamadas <strong>isómeros</strong>. Para entender más de este concepto, revisa el siguiente video. </p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('RF6ZxmaHnF8', '¿Qué son los isómeros?');
        ?>
    </div>
    <p>Hay dos clases principales de isómeros: isómeros estructurales y estereoisómeros, y a su vez estos se pueden dividir en otros grupos:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t2_img_isomeros_clasificacion.webp', 'Clasificación de los Isómeros. Imagen de Morales Félix,', 'https://commons.wikimedia.org/wiki/File:Is%C3%B3meros_clasificaci%C3%B3n.jpg', 'Wikimedia commons');
        ?>
    </div>
    <p>A continuación, se muestran algunos de las clases y grupos de isómeros:</p>
</section>
<div class="grid grid-cols-6 gap-4">
    <div class="col-span-4 col-start-2">
        <?= TabsComponent([
            'tabs' => [
                [
                    'id' => 'estructurales',
                    'label' => 'Isómeros estructurales',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_isomeros.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Isómeros estructurales</p>
                        <p>Los átomos en cada isómero están conectados, o enlazados, de diferentes maneras, tal es el caso del pentano y el 2 metil-butano, que son isómeros entre sí, o del 2 pentanol y el 3 pentanol.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'cadena',
                    'label' => 'Cadena',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_isomeros_cadena.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Isómeros estructurales de cadena</p>
                        <p>Son isómeros cuyas fórmulas difieren únicamente en la posición de los átomos de carbono.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'posicion',
                    'label' => 'Posición',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_isomeros_posicion.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Isómeros estructurales de posición</p>
                        <p>Es la que presentan moléculas cuyas estructuras se diferencian en la posición de su grupo funcional.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'funcion',
                    'label' => 'Función',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_isomeros_funcion.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Isómeros estructurales de función</p>
                        <p>Son aquellos en las que las moléculas difieren en el tipo de grupo funcional.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'estereoisomeros',
                    'label' => 'Estereoisómeros',
                    'content' =>
                    '<div class="grid grid-cols-2 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_aminoacidos_enantiomeros.webp" />
                </div>
                    <div class="pt-16 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Estereoisómeros</p>
                        <p>A diferencia de los Isómeros estructurales, donde los átomos en cada isómero están conectados, o enlazados, de diferentes maneras, en los <strong>estereoisómeros</strong>, los átomos en cada uno de ellos, están conectados de la misma manera pero difieren en cómo se orientan en el espacio. Los estereoisómeros pueden clasificarse como: enantiómeros o diastereómeros.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'enantiomeros',
                    'label' => 'Enantiómeros',
                    'content' =>
                    '<div class="grid grid-cols-2 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_aminoacidos_enantiomeros.webp" />
                </div>
                    <div class="pt-12 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Enantiómeros</p>
                        <p>Son imágenes especulares no superponibles, esto significa que las dos moléculas no pueden estar perfectamente alineadas una encima de la otra en el espacio. Los enantiómeros se suelen comparar con las manos derecha e izquierda de una persona, que también son imágenes especulares que no pueden superponerse.</p>
                    <p>Un ejemplo de ellos es el caso de la L-alanina y la D-alanina (amino)</p>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="pt-16 col-span-3 leading-6">
                        <p>La diferencia entre un par de enantiómeros puede parecer muy pequeña, sin embargo, dos enantiómeros pueden tener efectos biológicos muy diferentes, los cuales en algunos casos pueden ser inofensivos, como en el caso de la asparagina saber dulce y amargo) y en otros casos afectar a la salud, como en el caso del ácido 2-etilhexanoico, donde uno de los enantiómeros es teratogénico (causa malformaciones en el feto).</p>
                    </div>
                    <div class="pl-1">
                <img class="mx-auto" src="../../assets/img/u2t2_img_enentiomeros.webp" />
                </div>
                </div>'
                ],
                [
                    'id' => 'diasteroisomeros',
                    'label' => 'Diasteroisómeros',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_diasteroisomeros.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Diasteroisómeros</p>
                        <p>Son moléculas que se diferencian por la disposición espacial de los grupos, pero que no son imágenes especulares, como en el caso de la glucosa y la manosa (carbohidratos), donde solo cambia la orientación de un alcohol.</p>
                        <p class="font-bold text-fuchsia-950">Un caso particular de diastereómero se da en los isómeros cis-trans.</p>
                    </div>
                </div>'
                ],
                [
                    'id' => 'cistrans',
                    'label' => 'Cis-trans',
                    'content' =>
                    '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/u2t2_img_buteno.webp" />
                </div>
                    <div class="col-span-2 pt-16 leading-6">
                        <p class="font-bold text-rose-500 text-lg text-center pb-8">Isómeros cis-trans</p>
                        <p>Ocurre cuando los átomos o grupos funcionales están situados en cualquier extremo de un doble enlace carbono carbono. Nos referimos a un isómero cis cuando los sustituyentes están en el mismo lado del doble enlace, mientras que en los isómeros trans los sustituyentes están en el lado contrario.</p>
                    </div>
                </div>'
                ],
            ],
        ]) ?>
    </div>
</div>


<?php ob_start(); ?>
<section>
    <p>Ahora que ya sabes lo que son los isómeros, revisa el artículo "El enantiómero bueno, el malo y el feo", de David Palomas, para que te des cuenta de la importancia que tiene la isomería en los seres vivos:</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="https://www.dciencia.es/el-enantiomero-bueno-el-feo-y-el-malo/" target="_blank">El enantiómero bueno, el feo y el malo</a></p>
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