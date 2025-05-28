<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lectura y juego lúdico: Consecuencias de las masculinidades en el quehacer de las mujeres</h2>
    <p>El modelo de la triada de la violencia describe como los hombres establecen relaciones de poder y sumisión con las mujeres. Históricamente, el papel de las mujeres se ha limitado al trabajo doméstico.</p>
    <p>Sin embargo, algunas mujeres se incorporaron al ámbito académico, cultural, científico o laboral a pesar de las normas sociales y políticas que se los impedían ¿Lo hicieron por si solas? ¿Recibieron algún apoyo de los hombres a su alrededor? ¿Qué obstáculos enfrentaron?</p>
    <p>En este apartado, reflexionarás sobre como la relación de las mujeres con los hombres favorece u obstaculiza su desarrollo personal. Para ello, harás un intercambio de ideas con tus pares respecto a la influencia que tuvieron los hombres en la vida de 4 mujeres que se dedicaron a la ciencia. Después, resuelve el juego de Wordwall para comprender cómo son las relaciones de las mujeres y los hombres en tu entorno.</p>
    <p class="font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar el impacto de la masculinidad tradicional en el desarrollo personal y social de las mujeres.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Trabajo en equipos de 4 ó 5 estudiantes. Su docente asignará a cada equipo una de las 4 <a href="<?php echo PATH_DOCS . 'u1t4-lectura_ConsecuenciasDeLasMasculinidadesEnElQuehacerDeLasMujeres.pdf'; ?>" target="_blank">mujeres que participaron en el desarrollo de la ciencia</a>.</li>
        <li>Lean en equipo la breve historia de la mujer que les asignó su docente e intercambien ideas sobre cómo afectó o benefició a cada mujer sus relaciones con los hombres para su desarrollo personal, profesional, familiar, etc. Traten de llegar a un consenso para presentar sus conclusiones a la plenaria.</li>
        <li>Posteriormente, un integrante del equipo presentará sus conclusiones a la plenaria. Sus compañer*s podrán participar haciendo preguntas o comentarios adicionales.</li>
        <li>Cierren la plenaria compartiendo experiencias personales sobre la influencia de los hombres en la trayectoria académica, personal, profesional o familiar de las mujeres ¿Las han beneficiado o las han afectado?</li>
        <li>Después de leer los textos sobre las mujeres en la ciencia y de participar en la plenaria, piensa en tu entorno para responder las preguntas del juego estilo PAC-MAN elaborado con Wordwall. La puntuación que obtengas no será considerada parte de tus calificaciones, pues esta es una actividad para sensibilizarte sobre las dinámicas entre hombres y mujeres.</li>
    </ol>
    <div class="flex justify-center"><iframe style="max-width:100%" src="https://wordwall.net/es/embed/1c5b6d4d830646d88ce6a85972d6bb18?themeId=23&templateId=49&fontStackId=0" width="500" height="380" frameborder="0" allowfullscreen></iframe></div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>