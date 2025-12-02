<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <?php
       renderImage('hu2-u3-guerra.webp', 'El siglo XX enfrentó muchos cambios originados por las guerras. Foto de Sladewalters. ', 'https://upload.wikimedia.org/wikipedia/commons/a/af/KoreanWarRefugeeWithBaby.jpg', 'Wikimedia Commons.');
    ?>
   <p>Hola, estás a punto de concluir una meta más en este curso. Este aprendizaje aborda los aspectos culturales del periodo que has estudiado durante la unidad, revisaremos algunas de las manifestaciones culturales del periodo que son producto de las transformaciones políticas, económicas y sociales. Estas manifestaciones culturales nos darán una idea de las formas de vida de los grupos sociales.</p>

   <p>Estamos seguros de que será un cierre exitoso de la unidad. Sin más, vamos allá..</p>
    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
