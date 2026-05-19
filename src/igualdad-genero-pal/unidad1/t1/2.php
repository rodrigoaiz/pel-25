<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Perspectiva de género y cultura de igualdad</h2>

    <h3>¡Te damos la bienvenida a esta asignatura!</h3>
    <p>El formato de este curso es autogestivo, por tal razón te hacemos las siguientes recomendaciones:</p>
    <ul class="ul-disc">
        <li>Administra tu tiempo y recursos para que cada sesión de estudio sea eficiente; tu presencia y atención plenas son fundamentales para un aprendizaje óptimo.</li>
        <li>El tiempo sugerido de estudio por sesión es de aproximadamente dos horas y el avance esperado es de dos aprendizajes por semana.</li>
        <li>Mantén a la mano tus herramientas de estudio, materiales y fuentes de consulta (cuaderno, blog de notas, glosarios de términos, videos).</li>
        <li>Crea una carpeta donde guardes un respaldo de todas tus tareas y actividades (capturas de pantalla, archivos, etc.).</li>
    </ul>

    <p>Toma en cuenta que los contenidos de la asignatura podrían desafiar tu visión del mundo o la de otras personas a tu alrededor. Permítete analizar, reflexionar y cuestionar ideas o comportamientos que hasta hoy considerabas “normales”. El objetivo es promover la escucha activa con respeto a otras formas de pensar, sin generar controversia ni confrontaciones.</p>

        <p class="font-bold">Presentación</p>

        <p>En este primer aprendizaje conocerás conceptos esenciales que te servirán a lo largo de todo el curso; será un preámbulo a las temáticas que se desarrollarán con más detalle en cada unidad. La importancia de contar con fuentes confiables y verificables te proporcionará información sustentable a diferencia de opiniones o fuentes no confiables. Quizás ya habrás escuchado o usado en el habla coloquial varios de estos términos, sin embargo, no siempre están bien empleados o contextualizados (por ejemplo: la diferencia entre identidad y expresión de género; sexo y género; acoso y hostigamiento, entre otros).</p>
        <p>A partir de la apropiación de conceptos como estos, no solo reconocerás acepciones nuevas, estarás usando un lenguaje enriquecido que te permita identificar y nombrar las desigualdades de género en distintos contextos de la vida diaria.</p>
         <p>Al explorar las actividades diseñadas en este aprendizaje, encontrarás videos interactivos que te permitirán identificar conceptos básicos enfocados en la perspectiva de género y la cultura de la igualdad que te servirán a lo largo de todo el curso, fortalecerán tu formación integral como estudiante universitari@, como agente de cambio social y desarrollar un pensamiento crítico e informado.</p>
    <p><strong>¡Esperamos lo disfrutes!</strong></p>
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