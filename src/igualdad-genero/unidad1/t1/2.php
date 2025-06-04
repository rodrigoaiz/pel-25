<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Perspectiva de género y cultura de igualdad</h2>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('iga1-img01.webp');
        ?>
    </div>
    <h3>¡Te damos la bienvenida al aprendizaje 1 este curso!</h3>
    <p>En las siguientes horas. Explorarás temas diversos y participaras en actividades diseñadas para enriquecer tu perspectiva. Este primer aprendizaje se enfocará en la perspectiva de género y la cultura de la igualdad.</p>
    <p>Para comenzar, te invitamos a revisar el temario que hemos preparado para ti.<strong>¡Esperamos lo disfrutes!</strong></p>
    <p class="font-bold text-xl text-fuchsia-900">Propósitos</p>
    <ul class="ul-disc">
        <li>Reconocer la desigualdad de género como un proceso estructural y como mecanismo de reproducción social que afecta la relación entre las personas, desarrollo y democracia, para promover una conciencia de la igualdad como principio ético de organización social.</li>
        <li>Promover ser agente activo de la erradicación de la violencia de género en el Colegio y en la vida cotidiana.</li>
    </ul>
    <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
    <p class="font-bold">Declarativos:</p>
    <p>Reconocer los términos y conceptos esenciales relacionados con la Igualdad de Género: Perspectiva de género, sexo, sexualidad, género, identidad de género, entre otros.</p>
    <p class="font-bold">Procedimentales:</p>
    <p>Asociar los conceptos básicos de la Igualdad de Género a partir de un juego lúdico en línea.</p>
    <p class="font-bold">Actitudinales:</p>
    <p>Desarrollar una pieza de opinión para poder valorar los conocimientos aprendidos.</p>
    <p class="mt-10"> <span class="font-bold text-xl text-fuchsia-900">Tiempo |</span> 6 horas divididas en 3 sesiones</p>
    <table class="table-auto w-3/4 mx-auto text-neutral-200 bg-fuchsia-950 p-3 mt-8 rounded-lg">
        <thead>
            <tr>
                <th colspan="2" class="text-center text-xl text-yellow-100 pt-5">Conceptos básicos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="pl-8">Perspectiva de género</td>
                <td class="pr-4">Sexismo</td>
            </tr>
            <tr>
                <td class="pl-8">Igualdad y equidad de género</td>
                <td class="pr-4">Techo de cristal y piso resbaloso</td>
            </tr>
            <tr>
                <td class="pl-8">Derechos Humanos</td>
                <td class="pr-4">Machismo</td>
            </tr>
            <tr>
                <td class="pl-8">Igualdad sustantiva</td>
                <td class="pr-4">Patriarcado</td>
            </tr>
            <tr>
                <td class="pl-8">Sistema sexo-género</td>
                <td class="pr-4">Acoso</td>
            </tr>
            <tr>
                <td class="pl-8">Riesgo o códigos identitarios</td>
                <td class="pr-4">Hostigamiento</td>
            </tr>
            <tr>
                <td class="pl-8">Expresión de género y orientación sexo-afectiva</td>
                <td class="pr-4">Consentimiento</td>
            </tr>
            <tr>
                <td class="pl-8">Estereotipos y roles de género</td>
                <td class="pr-4">Violencia</td>
            </tr>
            <tr>
                <td class="pl-8">Diversidades y disidencias sexo-genéricas</td>
                <td class="pr-4">Violencia por cuestiones de género</td>
            </tr>
            <tr>
                <td class="pl-8">Lenguaje incluyente y no sexista</td>
                <td class="pr-4">Violencia feminicida</td>
            </tr>
            <tr>
                <td class="pl-8">Interseccionalidad</td>
                <td class="pr-4">Responsabilidad afectiva</td>
            </tr>
            <tr>
                <td class="pl-8">Redes de apoyo</td>
                <td class="pr-4">Cultura de la paz</td>
            </tr>
            <tr>
                <td class="pl-8">Discriminación</td>
            </tr>
        </tbody>
    </table>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>