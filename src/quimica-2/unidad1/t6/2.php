<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Estequiometría</h3>
    <p>Antes de abordar qué es o a qué se refiere el término estequiometría es importante que recuerdes qué es
        una reacción química; para ello, puedes observar el siguiente video en dónde nos hablan acerca de ello.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('gvzP7fNiXNs', 'Reacciones y ecuaciones químicas: Aspectos generales');
        ?>
    </div>
    <p class="font-bold">¿Qué es Estequiometría? </p>
    <p>El término estequiometría proviene de las palabras derivadas del griego antiguo stoicheion que quiere
        decir “elemento” y de metron” que significa “medida”, así, podríamos definirla como medida de los
        elementos.</p>
    <p>En una definición más acorde, la estequiometría es el estudio cuantitativo de las reacciones químicas, es
        decir, es aquella rama de la química que estudia las relaciones cuantitativas entre reactivos y
        productos cuando experimentan cambios químicos. </p>
    <p>El determinar las relaciones cuantitativas entre las cantidades de las sustancias que intervienen en una
        reacción (reactivos) permite calcular la cantidad de una determinada sustancia reactiva si se conoce la
        cantidad de la otra. En general, las cantidades que más cotidianamente calculamos están expresadas en
        masa, pero podemos hacer mediciones de volumen para los sólidos y líquidos si conocemos el valor de la
        densidad y para los gases a partir de la ecuación general que relaciona el volumen con el número de
        moles.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_quimica.webp', 'Imagen de Original Barnstar Hires,', 'https://upload.wikimedia.org/wikipedia/commons/0/0d/Chemistry_Barnstar_purple.svg', 'Wikimedia Commons.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>