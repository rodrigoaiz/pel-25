<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Características y propiedades de los ácidos y las bases</h3>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t4_acidos_y_bases.webp', 'Ácidos y bases');
        ?>
    </div>
    <p>La química comenzó describiendo y clasificando, así desde hace muchos años se han hecho clasificaciones
        como metales, no metales, compuestos orgánicos, compuestos inorgánicos y también en ácidos y bases.</p>
    <p>La palabra ácido proviene del latín acetum, que quiere decir: “vinagre, agrio”, y en el caso de las
        bases, también conocidas como alcalinas, su nombre proviene de álcalis (del árabe Al-Qaly “cenizas”).
    </p>
    <p>En el antiguo Egipto, era bien sabido que la fermentación de jugos vegetales podía llegar a producir
        vinagre. Desde el proceso de la química esto implica la oxidación del alcohol, que se transforma en
        ácido acético. Aparte de su uso culinario, el vinagre era importante por ser el ácido más fuerte de la
        antigüedad.</p>
    <p>Robert Boyle (1627-1691) estableció una especificación clara de los ácidos, al decir que tales sustancias
        podían hacer cambiar a rojo el papel tornasol y las bases cambiaban el papel a color azul.</p>
    <p>En la escala de pH las sustancias que tienen un valor menor a 7 (neutro) nos indica que se trata de un
        ácido y las sustancias que tienen un valor superior a 7 son bases.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t4_escala_de_ph.webp', 'Escala de pH');
        ?>
    </div>
    <p>En la siguiente tabla puedes revisar las distintas características de los ácidos y bases.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t4_características_acidos_y_bases.webp', 'Características de los ácidos y las bases');
        ?>
    </div>
    <div class="grid grid-cols-6 gap-4">
        <div class="col-start-1 col-end-3">
            <?php
            renderImage('u1t4_lavar_manos.webp', 'Las bases tienen una sensación jabonosa Imagen de Justmee3001,', 'https://upload.wikimedia.org/wikipedia/commons/9/97/Hand_washing_with_soap.jpg', 'Wikimedia Commons.');
            ?></div>
        <div class="col-span-2 col-end-7 ...">
        <?php
        renderImage('u1t4_ph.webp', 'El papel indicador de pH o el papel tornasol Imagen de Honacan,', 'https://commons.wikimedia.org/wiki/File:PH_indicator_strip.jpg', 'Wikimedia Commons.');
        ?></div>
    </div>
    <p>Para ampliar y reforzar los conocimientos adquiridos te invitamos a que revises el siguiente video que
        nos habla sobre las características de los ácidos y las bases.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('E_xcacKMzyQ', 'Características de los ácidos y las bases');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>