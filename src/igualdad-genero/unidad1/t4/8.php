<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Sesión 3. Dibujando mis sentires y sensaciones</h2>
    <p>El punto de partida de la sesión tres es permitirte expresar cómo te sentiste realizando las actividades de las sesiones anteriores ¿Qué descubriste sobre las expectativas de la masculinidad tradicional, los comportamientos de los hombres y la forma en que se relacionan los hombres? ¿detectaste elementos de la triada de la violencia, mandatos de la masculinidad, machismos cotidianos en tu entorno social, escolar, familiar o de amistades? ¿Cómo te sientes al respecto?</p>
    <p>Es válido que expreses tus sentimientos emociones, e ideas de cualquier tipo. Solamente recuerda que este es un espacio académico, por lo que te pedimos evitar agresiones y ataques personales. Un ejemplo de una expresión es “Me molesta que mi vecino tenga actitudes machistas”; en cambio, un ataque personal es “Mi vecino es un #*%n$#3 macho”. </p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar las emociones personales que provoca el reconocimiento del impacto de la masculinidad tradicional en la vida diaria.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Realiza un dibujo físico o digital que plasme los sentires y las sensaciones que te provocó la información obtenida durante este aprendizaje.</li>
        <li>Publica tu dibujo en este foro.</li>
        <li>Revisa los dibujos de al menos dos compañer*s del grupo y deja un comentario sobre su trabajo, teniendo en cuenta que este es un espacio de respeto y seguro para expresar nuestros sentires y sensaciones.</li>
        <li>En plenaria, muestren sus dibujos a la cámara durante la sesión sincrónica de TEAMS. Si tienes problemas técnicos con la cámara de tu dispositivo intenta enviarlo por el chat o el medio que te indique tu docente.</li>
        <li>Escucha respetuosa y atentamente las participaciones en plenaria de quienes quieran compartir una explicación de lo que dibujaron. Si gustas, tú también puedes participar.</li>
        <li>Revisa los criterios de la <a href="<?php echo PATH_DOCS . 'u1t4-listaDeCotejo_DibujandoMisSesacionesYSentimientos.pdf'; ?>" target="_blank">lista de cotejo</a> para evaluar esta actividad.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Participa aquí en el foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a5', "Foro - Dibujando mis sentires", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>