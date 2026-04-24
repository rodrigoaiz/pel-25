<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Examen final de la unidad 2</h2>


    <div class="flex justify-center mt-8">
        <div class="max-w-xl w-full bg-emerald-600/10 border-l-4 border-emerald-600 rounded-r-lg px-6 py-5">
            <p class="text-emerald-800 font-bold text-lg mb-1">¡Felicidades, has concluido la unidad 2!</p>
            <p class="text-emerald-700 text-sm">Para continuar con la unidad 3, por favor realiza el examen final de la unidad 2.</p>
        </div>
    </div>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Responde a las siguientes preguntas de opción múltiple.</li>
    </ol>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t2a6', "Examen final de la unidad 2", $ActividadContent);
    ?>
    <h3>Bibliografía</h3>
    <ul class="space-y-2 text-sm text-gray-700">
        <li>Álvarez, M. (1994). <em>Narración y descripción</em>. Madrid: Arcolibros.</li>
        <li>Ávila, P. (1991). <em>Taller de lectura I (Curso introductorio)</em>. México: CCH-UNAM.</li>
        <li>Beltrán, R. (1999). <em>La corte de los ilusos</em>. México: Grupo Editorial Planeta.</li>
        <li>Eco, U. (2002). <em>Sobre literatura</em>. España: Riquer Editorial.</li>
        <li>Forster, E. M. (1961). <em>Aspectos de la novela</em>. México: Universidad Veracruzana, Cuadernos de la Facultad de Filosofía y Letras (7).</li>
        <li>Hernández, G. y Rellán, C. (1998). <em>Aprendo a escribir 2: narrar, describir</em>. Madrid: SGEL.</li>
        <li>Kundera, M. (2000). <em>El arte de la novela</em>. México: Tusquets Editores.</li>
        <li>Lewis, S. S. (2000). <em>La experiencia de leer</em>. España: Alba.</li>
        <li>Mercenario, M. (2004). <em>Tras las huellas… de la novela</em>. México: EDERE.</li>
        <li>Muir, E. (1984). <em>La estructura de la novela</em>. México: UAM. Dirección de Difusión Cultural (16).</li>
        <li>Paredes, A. (1987). <em>Las voces del relato</em>. México: Universidad Veracruzana-SEP/INBA.</li>
        <li>Pimentel, L. (1988). <em>El relato en perspectiva</em>. México: UNAM/Siglo XXI.</li>
        <li>Pound, E. (2000). <em>El ABC de la lectura</em>. Madrid: Ediciones y talleres de escritura fuentetaja.</li>
        <li>Ruiz Zafón, C. (2001). <em>La sombra del viento</em>. México: Planeta.</li>
    </ul>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>