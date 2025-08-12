<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    
    <p>Además del Expresionismo Abstracto, en Europa surgieron otros movimientos artísticos en la posguerra. El arte informal en Francia, por ejemplo, exploró la abstracción gestual y la espontaneidad en la pintura. El arte concreto, originado en Suiza y Holanda, se centró en la geometría y la precisión en el arte.</p>

    <h3>La literatura de la posguerra reflejó los traumas y las experiencias de los individuos durante la guerra. Autores como Albert Camus, Jean-Paul Sartre, George Orwell y Günter Grass abordaron temas como el existencialismo, la alienación, la represión política y la crítica social en sus obras, reflejando los desafíos y las preguntas existenciales que surgieron tras la devastación de la guerra.</h3>

    <p>Algunos de las obras literarias más destacados de este período incluyen:</p>
    <?php
  $accordionItems1 = [
    [
      'title' => '1984',
      'content' => '<p>(1949) de Orwell, la cual imaginaba un futuro totalitario y vigilante en el que el gobierno ejerce un control absoluto sobre la vida de las personas. Orwell escribió novelas distópicas que exploraban temas políticos y sociales. Se puede ver gratis la película de este libro en su versión de 1956.</p>',
      'video' => 'https://www.youtube.com/embed/sGzYLC60e0c?si=WCsOKAxTAQHn-ybW'
    ],
    [
      'title' => 'El tambor de hojalata',
      'content' => '(1959) de Grass, cuenta la historia de un niño que se rebela contra la sociedad y la hipocresía adulta. Grass abordó la historia y la memoria de Alemania después de la guerra.'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');

  ?>

    <?php ob_start(); ?>
    <p>Antes de continuar te invitamos a realizar el siguiente reto para reforzar algunos conceptos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t6a1', "La literatura de la posguerra", $ActividadContent);
    ?>

     
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
