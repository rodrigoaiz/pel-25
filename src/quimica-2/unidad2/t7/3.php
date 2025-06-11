<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>¿Cómo se obtiene un principio activo?</h2>
    <p>Como ya vimos, el principio activo o fármaco es el ingrediente al cual se debe el efecto farmacológico de
                un medicamento; actualmente existen miles de principios activos formando parte de un número similar de
                medicamentos. Es debido a ello que la pregunta obligada es: ¿cómo se obtiene un principio activo?</p>
            <p>Antes de dar respuesta, deberás leer el artículo “Cómo una planta ahora olvidada de los bosques
                tropicales mexicanos revolucionó la vida de las mujeres” escrito por Villanueva-Almanza (2021).</p>

    <div class="max-w-2xl mx-auto m-10">
            <p class="text-center text-lg rounded-lg shadow-md p-2 bg-rose-600"><a class=" text-gray-50" href="https://botany.one/2021/03/como-una-planta-ahora-olvidada-de-los-bosques-tropicales-mexicanos-revoluciono-la-vida-de-las-mujeres/" target="_blank">Barbasco y la píldora anticonceptiva</a></p>
        </div>
    <p>Como te habrás dado cuenta, la obtención de un principio activo es un proceso laborioso que implica un
                gran número de etapas, que van desde el seleccionar una fuente (barbasco), el aislamiento y purificación
                de la molécula de interés (diosgenina) y, en muchos casos, hacer modificaciones químicas posteriores
                para obtener la molécula final (norentridona).</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u2t7_img_diosgenia.webp', 'Estructura de la Diosgenina y la Norentridona. Imagen de Morales Félix, Wikimedia Commons');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>