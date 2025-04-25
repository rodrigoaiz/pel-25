<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Modelo de Bohr</h3>
    <p><span class="font-bold">Observa las siguientes imágenes y contesta: ¿son similares?</span></p>
</section>
<div class="grid grid-cols-2 md:grid-cols-1 xl:grid-cols-2 gap-5 px-5 my-3 bg-amarillocla">
    <article class="bg-gray-100 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
        <div class="flex flex-col justify-between min-h-full">
            <footer class="max-w-1/2 mt-5 mx-auto self-end">
                <?php
                renderImage('u1t3_sistema_solar.webp', 'Sistema Solar Imagen de Wikilmages,', 'https://pixabay.com/es/illustrations/sistema-solar-planetas-11111/', 'Pixabay');
                ?>
            </footer>
    </article>
    <article class="bg-gray-100 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
        <div class="flex flex-col justify-between min-h-full">
            <footer class="max-w-1/2 mt-5 mx-auto self-end">
                <?php
                renderImage('u1t3_modelo_bohr.webp', 'Modelo de Bohr Imagen de E_ScienceLearning de,', 'https://pixabay.com/es/illustrations/at%C3%B3mico-modelo-bohr-qu%C3%ADmica-4993662/', 'Pixabay');
                ?>
            </footer>
    </article>
</div>
<section>
    <p>Como te habrás dado cuenta, ambas imágenes tienen en común su estructura: en el centro de la imagen solar está el sol y alrededor los planetas; en el caso de la imagen de la derecha representa el modelo atómico de Bohr, en el centro se encuentra el núcleo y alrededor se muestra el movimiento de los electrones.</p>
    <p>Para comprender la formación de enlaces en los compuestos, necesitas conocer la estructura electrónica del átomo, para lo cual recordemos que los modelos atómicos aportaron evidencias sobre la estructura interna de los átomos. Con el descubrimiento del electrón (Modelo de Thomson) y el estudio de la estructura del átomo (Modelo de Rutherford) fue posible que surgiera el modelo atómico de Bohr en 1913. Donde Niels Bohr propuso la distribución de los electrones alrededor del núcleo en lo que en esa época se denominaba órbitas, con lo cual su aportación ayudó a entender la estructura del átomo mediante la estabilidad de los electrones.</p>
    <?php
    renderImagePleca('u1t3_orbitasb.webp', 'Estructura del átomo', 'justify-center');
    ?>
    <p>Recuerda que las partículas que componen a un átomo son protones (carga +) y neutrones (sin carga), que se encuentran dentro del núcleo y los electrones (carga negativa) están en las órbitas alrededor del núcleo.</p>
    <p>En el siguiente juego podrás poner en práctica las partículas que componen al átomo.</p>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-green-600"><a class=" text-gray-50" href="https://cienciasnaturales.didactalia.net/recurso/modelo-atomico-de-bohr-primaria-secundaria/5758555a-566e-ab19-bb72-da2d386abc84" target="_blank">Estructura del átomo</a></p>
    </div> 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>