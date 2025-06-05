<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Propiedades del carbono</h3>
    <p>Como pudiste apreciar en la lección 1, los macronutrimentos están formados por carbono, algunos micronutrimentos, como las vitaminas también lo están, razón que justifica estudiarlo con cierto detalle. </p>
    <p>El carbono es uno de los elementos químicos más destacados de la tabla periódica, ya que posee propiedades fisicoquímicas que le permiten formar numerosos compuestos, tiene mucha facilidad para unirse entre sí y formar cadenas muy variadas que pueden ser lineales o ramificadas, que pueden ser de unos cuantos átomos hasta miles de ellos , también pueden formar anillos de todos los tamaños por esta razón al carbono puede formar miles de compuestos debido a este comportamiento único; pero ¿qué características tiene el carbono que le permiten formar esta variedad de compuestos? Una de ellas se refiere a su tetravalencia y concatenación, te invitamos a ver los siguientes siguientes videos para que puedas conocer con más detalle a que se refieren estos términos.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t2_img_molecula_carbono.webp');
        ?>
    </div>
    <p>Videos sobre la tetravalencia del carbono y concatenación.</p>
    <div class="lg:grid grid-cols-2 gap-5">
        <?php
        renderVideoIframe('51-h2Q2vfc0', 'Bienvenida a la asignatura de Química II.');
        renderVideoIframe('qZQIjRsv67Y', '¿Que es la catenación?');
        ?>
    </div>

    <p class="mt-10">En este momento, has comprendido que algunas estructuras de macro y micronutrimentos, tienen diferentes átomos enlazados. Las fuerzas que mantienen unidos a estos se denominan enlaces químicos. La siguiente estructura química representa a la alanina, un aminoácido presente en muchas proteínas:</p>
    <p>Después de observar los videos, responde las siguientes preguntas:</p>
    <ul class="list-none">
        <li>¿Qué es la tetravalencia del carbono? ¿Por qué es importante?</li>
        <li>¿Qué implicaciones tiene esta propiedad?</li>
        <li>¿Cuál es la diferencia entre <span class="font-bold text-fuchsia-700">concatenación</span> y tetravalencia?</li>
    </ul>
    <?php ob_start(); ?>
    <p>Ahora te invitamos a realizar la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a7', "Tetravalencia en macronutrimentos", $ActividadContent);
    ?>
</section>
<?php ob_start(); ?>
<section>
    <p>Con la finalidad de que conozcas un poco más acerca del carbono, da click en el siguiente enlace:</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u2t2-pcarbono.pdf'; ?>" target="_blank">Sobre el carbono...</a></p>
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