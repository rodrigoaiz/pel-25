<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <?php ob_start(); ?>
        <p>Realizar la siguiente actividad te apoyará en seguir construyendo tus aprendizajes.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a8', "Eje de simetría de la función cuadrática", $ActividadContent);
    ?>

    <?php
    renderImage('u2t3_img_grafica_3.webp', '', '', '', true);
    ?>

    <p>¿Las raíces de la función cuadrática cuya gráfica es la siguiente son reales o complejas?</p>
    
    <div class="max-w-3xl mx-auto">
          <?php
          $accordionItems1 = [
            [
              'title' => 'Respuesta',
              'content' => '<ul class="ul-disc">
                               <li>¿Las raíces de la función cuadrática cuya gráfica es la siguiente son reales o complejas? <strong>Complejas, ya que no intersecta el eje de las abscisas “\(x\)”</strong></li>
                            </ul>'
            ]
          ];
          renderAccordion($accordionItems1, 'primero-', false);
          ?>
    </div>

    <?php ob_start(); ?>
        <p>Realiza la siguiente actividad para consolidar el aprendizaje sobre raíces en el conjunto de los números reales y cuando son complejas estás mismas.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a9', "Discriminante", $ActividadContent);
    ?>

    <p>En este momento ya sabes identificar cuando trabajas con raíces en el conjunto de los números reales o en el conjunto de los números complejos, ahora trabajemos con la forma estándar de la función.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>