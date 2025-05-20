<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Características de los compuestos orgánicos e inorgánicos</h3>
    <p>Como se estudió en la sección anterior, el suelo se integra de compuestos orgánicos e inorgánicos; en la siguiente tabla resaltamos las principales características de cada uno:</p>
    <table class="table-auto">
        <thead>
            <tr>
                <th>Compuestos Orgánicos</th>
                <th>Compuestos Inorgánicos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul class="ul-list">
                        <li>Se forman de carbono e hidrógeno, y otros elementos como nitrógeno, oxígeno y azufre denominados C, H, O, N, S.</li>
                        <li>Componen a las biomoléculas como los carbohidratos, proteínas y grasas.</li>
                        <li>Son poco solubles en agua.</li>
                        <li>No conducen la corriente eléctrica.</li>
                        <li>Presentan enlace covalente.</li>
                        <?php
                        renderImage('u1t1_img_vegetales.webp', 'Alimentos. Foto de congerdesign.', 'https://pixabay.com/es/photos/hortalizas-cesta-canasta-de-verduras-752153/', 'Pixabay');
                        ?>
                    </ul>
                </td>
                <td>
                    <ul class="ul-list">
                        <li>Son minerales que se clasifican en óxidos, hidróxidos, sales y ácidos.</li>
                        <li>Son solubles en agua.</li>
                        <li>Conducen la corriente eléctrica.</li>
                        <li>Presentan enlace iónico.</li>
                        <?php
                        renderImage('u1t1_img_minerales.webp', 'Minerales. Foto de Brett_Hondowde.', 'https://pixabay.com/es/photos/gemas-piedras-preciosas-1400682/', 'Pixabay');
                        ?>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p>Consulta las explicaciones del siguiente video con la finalidad de aclarar cuales son las características de los compuestos orgánicos y cuáles de los compuestos inorgánicos.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('abf-NRboUyM', 'El impacto de la quimica para la producción de alimentos y medicamentos.');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Realiza la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a5', "Compuestos orgánicos e inorgánicos", $ActividadContent);
    ?>
    <p>Tanto los compuestos orgánicos e inorgánicos presentes en el suelo ayudan al crecimiento de las plantas,
        debido a que contienen elementos que son necesarios para la nutrición de las plantas. Los elementos son:
        carbono (C), hidrógeno (H), oxígeno (O), nitrógeno (en forma de nitratos NO3- y amonio NH4+), fósforo
        (fosfatos PO43-), potasio (K+), magnesio (Mg2+), calcio (Ca2+), azufre (SO42-), hierro (Fe2+, Fe3+),
        manganeso (Mn2+), cobre (Cu2+), zinc (Zn2+), molibdeno (MoO42-), boro (BO33-) y cloro (Cl-).</p>
    <p>Estos elementos los podemos encontrar en la fase sólida inorgánica del suelo:</p>
    <p>Revisa el siguiente video para conocer la importancia de los componentes inorgánicos del suelo. </p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('nxVR2yHP6Kc', 'Importancia de los componentes orgánicos del suelo.');
        ?>
    </div>
    <p>Cómo te has dado cuenta a lo largo de la lección, el suelo es indispensable para la vida; sin embargo, en
        la actualidad la contaminación por diversos factores ha ido agotando este recurso natural. En 2018, la
        FAO (Organización de las Naciones Unidas para la Alimentación y la Agricultura, por sus siglas en
        inglés) al celebrar el Día Mundial del Suelo informó que se requieren de medidas urgentes para tratar la
        contaminación del suelo.</p>
    <p>Observa el siguiente video acerca de la <strong>Contaminación del suelo:</strong> </p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('dpqDxUK64cs', 'Contaminación del suelo- Causas, consecuencias y soluciones.');
        ?>
    </div>
    <p>Hay varios factores que influyen en la contaminación del suelo, como los desechos de basura, el empleo de
        sustancias químicas y radioactivas, industrias, etc. Las causas de contaminación del suelo pueden ser
        naturales o antrópicas (provocadas por los seres humanos), por lo que tomar conciencia es importante
        para su preservación.</p>
    <p class="font-bold">Actividad de investigación: ¿Qué causa la contaminación del suelo?</p>
    <p>Ahora realizarán un trabajo de investigación en pareja sobre problemas de contaminación del suelo, puedes
        elegir entre estos temas:</p>
    <ul class="ul-list">
        <li>Generación de residuos industriales y domésticos</li>
        <li>Erosión y desertificación del suelo</li>
        <li>Uso excesivo de fertilizantes</li>
        <li>Uso de plaguicidas</li>
    </ul>
    <p>Además de la investigación, debes incluir en tu trabajo una reflexión en la que menciones qué
        aportaciones se pueden hacer para preservar el suelo.</p>
    <p>Puedes apoyarte en los siguientes sitios web: <a href="https://openknowledge.fao.org/server/api/core/bitstreams/7d70ca8d-7503-4839-8d6b-8250e9add8ac/content" target="_blank">La contaminación del suelo: una realidad oculta.</a> y <a href="https://ciencia.unam.mx/contenido/galeria/51/residuos-solidos-urbanos-un-grave-problema-ambiental" target="_blank">Residuos sólidos urbanos.</a></p>
    <?php ob_start(); ?>
    <p>Es hora de poner en práctica tus conocimientos, realiza la siguiente actividad y carga tu archivo a la plataforma.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a6', "¿Qué causa la contaminación del suelo?", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>