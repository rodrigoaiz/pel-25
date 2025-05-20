<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Iones presentes en el suelo: monoatómicos y poliatómicos</h3>
    <p>Recuerda que en la fase sólida del suelo se forma de compuestos orgánicos e inorgánicos, dentro de estos
        últimos se encuentran los minerales que son sales formadas por iones que pueden ser cationes o aniones.
        Las plantas absorben los nutrientes en forma de iones para su crecimiento.</p>
    <p>Los iones al ganar o perder electrones forman iones que <strong>pueden ser monoatómicos</strong> (un solo
        átomo) y <strong>poliatómicos</strong> (más de 2 átomos). </p>
    <p>En la siguiente tabla puedes observar algunos ejemplos de iones monoatómicos y poliatómicos presentes en
        el suelo.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u1t3_tabla_iones_monoatomicos.webp', 'Iones presentes en el suelo');
        ?>
    </div>
    <p class="font-bold">Para conocer más sobre los iones poliatómicos revisa la siguiente página.</p>
    <div class="w-md mx-auto">
        <p class="text-center rounded-lg shadow-md p-2 bg-red-500"><a class=" text-gray-50" href="https://es.khanacademy.org/science/ap-chemistry/atoms-compounds-ions-ap/compounds-and-ions-ap/a/polyatomic-ions?modal=1" target="_blank">Iones poliatómicos</a></p>
    </div>
    <p>Algunas funciones específicas de los iones en el suelo son:</p>
    <div class="grid grid-cols-2 gap-6">
        <div>
            <p class="text-lime-700 font-bold">Aniones como nutrientes presentes en el suelo:</p>
            <p>Los nutrientes que las plantas absorben del suelo provienen de las rocas, que al
                descomponerse forman iones (cationes o aniones) que son solubles en agua y de
                esta forma son absorbidos por las plantas.</p>
            <p>El nitrógeno en forma de nitratos (NO3-), nitritos (NO2-) y el ion amonio (NH4+)
                se incorpora a la planta en forma de aminoácidos, los cuales forman proteínas y
                ayudan al crecimiento de las hojas.</p>
            <?php
            renderImage('u1t3_crecimiento_hojas.webp', 'Crecimientos de las hojas Imagen de OpenClipart-Vectors,', 'https://pixabay.com/es/vectors/pimpollo-planta-creciente-154734/', 'Pixabay');
            ?>
            <p>El fósforo se absorbe en forma de fosfatos (PO43-) favorece el crecimiento de las
                raíces, en los cereales la falta de fósforo provoca enanismo en hojas y tallos.
            </p>
            <?php
            renderImage('u1t3_raices.webp', 'Raíces Imagen de 12019,', 'https://pixabay.com/es/photos/%c3%a1rboles-ra%c3%adces-australia-%c3%banico-2263344/', 'Pixabay');
            ?>
        </div>
        <div>
            <p class="text-amber-600 font-bold">Cationes en el suelo:</p>
            <p>El potasio en forma de ion K+ ayuda a la conformación activa de enzimas, regula
                el potencial osmótico, participa en la fotosíntesis y promueve la absorción de
                nitrógeno.</p>
            <p>El magnesio en forma de ion Mg2+, es un componente principal de la clorofila
                (pigmento verde de las plantas) y participa en reacciones enzimáticas.</p>
            <?php
            renderImage('u1t3_hoja.webp', 'Corolofila Imagen de markusspiske,', 'https://pixabay.com/es/photos/hoja-clorofila-naturaleza-jard%c3%adn-3634298/', 'Pixabay');
            ?>
            <p>El hierro en forma de ion Fe2+ o Fe3+ forma parte de cloroplastos, proteínas y
                participa en reacciones oxido reducción ya que está presente en enzimas
                respiratorias.</p>
            <?php
            renderImage('u1t3_cloroplasto.webp', 'Cloroplastos Imagen de Vierschilling,', 'https://pixabay.com/es/photos/algas-c%c3%a9lula-vegetal-microscopio-1582259/', 'Pixabay');
            ?>
        </div>
    </div>
    <p class="mt-10">El manganeso en forma de ion Mn2+ participa también en procesos oxido-reducción como la fotosíntesis y en
        la desintoxicación de radicales de oxígeno libre.</p>
    <p>El cobre en forma de ion Cu2+ participa en varias enzimas que llevan a cabo procesos redox en la
        fisiología de la planta. </p>
    <?php ob_start(); ?>
    <p>Para corroborar lo aprendido realiza la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a16', "Iones en el suelo", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>