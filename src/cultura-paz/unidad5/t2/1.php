<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'IseazyIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Revisión de contenidos</h2>
    <p>La integración e identidad universitaria significa que cada alumna y alumno, al ingresar al Colegio de Ciencias y Humanidades de la UNAM, conocerá un modelo educativo enmarcado en las ciencias y humanidades, no solo hablamos de la integración de nuevas formas de aprendizaje, nuevos conocimientos, también integrarse a la experiencia académica que requiere fomentar y desarrollar un sentido de pertenencia y conexión con la institución.</p>
    <p>Esto se logra a través de diversos programas y actividades realizadas por áreas muy específicas, por ejemplo, PIA, PIT y Psicopedagogía que diseñan e implementan dinámicas de participación activa de las y los estudiantes en su propio proceso de aprendizaje y mejora de la vida académica.
    </p>
    <p>A continuación te pedimos que revises la siguiente <span class="text-violet-400 font-bold">presentación interactiva</span> y realices las actividades dentro de ella.</p>
</section>
<?php renderiseazy('fdf46892212d46a092ca21ea90053f32') ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>