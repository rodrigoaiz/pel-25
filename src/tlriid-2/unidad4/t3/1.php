<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Mundo ficticio</h2>

    <div class="flex justify-center mt-4 mb-6">
        <div class="w-2/3">
            <?php
            renderImage(
                'tlriid2-u4t3p1img1.webp',
                'Mundo ficticio [ilustración digital]. Generada con Inteligencia Artificial. Freepik Pikaso.',
                'https://www.freepik.es/pikaso/image-editor?creation=ncPiPN7YQD',
                'Fuente: Freepik'
            );
            ?>
        </div>
    </div>

    <p>Al comenzar esta unidad planteamos que una novela crea un mundo ficticio donde se desarrolla la historia. Pues bien, la creación de ese mundo no se limita a la invención de conflictos y de personajes. La historia pasa en un <strong>tiempo</strong> y <strong>espacio</strong> determinados. Éstos son dos elementos que no debes perder de vista cuando realices el análisis de una novela, ya que por un lado sirven para dar verosimilitud a la obra leída y por el otro resultan fundamentales para comprender la intención estética del autor.</p>

    <h3>Espacio</h3>
    <p>Dentro de la historia, se entiende como <strong>espacio</strong> al lugar físico donde ocurren los acontecimientos que se narran. Tiene gran importancia en el texto literario, dado que impacta a los personajes, y en consecuencia, al desarrollo de la historia. Por lo general, el espacio de una novela tiene también un <strong>valor simbólico</strong>. Puede representar pobreza, encarcelamiento, anhelos, etcétera.</p>

    <h3>Tiempo</h3>
    <p>Cuando se habla del <strong>tiempo</strong> de la historia, nos referimos a su dimensión cronológica. Es decir, al tiempo de los acontecimientos narrados. Éste se mide en unidades también cronológicas: minutos, horas, días, meses, años.</p>

    <h3>Relaciones Espacio-Temporales</h3>
    <p>Como buenos lectores de novelas, no debemos perder de vista las relaciones que la historia nos va planteando entre el tiempo, el espacio, y el transcurrir de los acontecimientos. Esta triangulación nos servirá para enriquecer nuestra lectura y comprender más profundamente la historia.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
