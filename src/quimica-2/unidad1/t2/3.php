<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Minerales en el suelo</h3>
    <p>En el suelo, los minerales constituyen la fase sólida inorgánica del suelo y a partir del proceso de mineralización aportan nutrientes para las plantas. Entre estos minerales podemos encontrar una gran variedad de ellos que por su estructura química se clasifican como sales, óxidos, hidróxidos, entre otros.</p>
    <p>Para ampliar tu conocimiento sobre los minerales que podemos encontrar en el suelo, te invitamos a consultar las páginas 34 a 36 de la Guía para el Profesor de Química II, que encuentras disponible en la siguiente liga; resuelve los ejercicios de las páginas 35 a 37 y puedes pedir la retroalimentación de tu asesor.</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-rose-600"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u1_t2_guia_para_el_profesor.pdf'; ?>" target="_blank">Guía para el profesor de Química II</a></p>
    </div>
    <p class="mt-10">Para ampliar tu conocimiento sobre este apartado te sugerimos ver el siguiente video, te será de utilidad para contestar los ejercicios solicitados.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('abf-NRboUyM', 'El impacto de la quimica para la producción de alimentos y medicamentos.');
        ?>
    </div>
    <h3>Experimento en casa y virtual</h3>
    <h4>- Identificación de aniones y cationes en el suelo</h4>
    <p>En este experimento podrás identificar algunos iones (cationes y aniones) presentes en el suelo y que las plantas absorben a través de sus raíces para nutrirse, podrás reconocer la presencia de carbonatos, sulfatos, nitratos, cloruros, sulfuros, sodio, potasio y calcio.</p>
    <p>Al concluir el experimento es muy importante que envíes tu reporte con fotografías que muestren cómo realizaste el experimento y las reacciones químicas que pudiste observar. Además de resolver los cuestionamientos planteados en el experimento.</p>
    <p>A partir de los resultados experimentales podremos posteriormente identificar y nombrar a los compuestos químicos de acuerdo a las normas internacionales.</p>
    <?php ob_start(); ?>
    <p>A continuación te proponemos realizar la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a8', "EXPERIMENTO EN CASA Y VIRTUAL - Análisis químico para identificar algunos iones presentes en el suelo", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>